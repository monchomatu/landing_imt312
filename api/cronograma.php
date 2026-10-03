<?php
declare(strict_types=1);

/**
 * api/cronograma.php
 * Endpoint JSON del cronograma.
 *
 *   GET api/cronograma.php                -> las 19 semanas
 *   GET api/cronograma.php?unidad=u1..u4  -> semanas de esa unidad
 *   GET api/cronograma.php?unidad=exam    -> semanas con evaluaciones
 *
 * El navegador pide los datos (fetch), este script consulta MySQL con PDO
 * y responde en formato JSON.
 */

require_once dirname(__DIR__) . '/config/database.php';

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

function responder(int $codigo, array $cuerpo): never
{
    http_response_code($codigo);
    echo json_encode($cuerpo, JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES);
    exit;
}

if ($_SERVER['REQUEST_METHOD'] !== 'GET') {
    header('Allow: GET');
    responder(405, ['ok' => false, 'error' => 'Método no permitido.']);
}

// Lista blanca: cualquier otro valor se rechaza
$unidad = $_GET['unidad'] ?? 'all';
$permitidos = ['all', 'u1', 'u2', 'u3', 'u4', 'exam'];
if (!is_string($unidad) || !in_array($unidad, $permitidos, true)) {
    responder(400, ['ok' => false, 'error' => 'Parámetro "unidad" inválido.']);
}

try {
    $pdo = obtener_conexion();

    $sql = 'SELECT id, numero, rango_fechas, unidad, unidad_titulo, variante
            FROM cronograma_semana';
    $params = [];
    if ($unidad === 'exam') {
        $sql .= " WHERE variante <> 'normal'";
    } elseif ($unidad !== 'all') {
        $sql .= ' WHERE unidad = :unidad';
        $params[':unidad'] = $unidad;
    }
    $sql .= ' ORDER BY numero';

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    $semanas = $stmt->fetchAll();

    $porSemana = [];
    if ($semanas) {
        $ids = array_map('intval', array_column($semanas, 'id'));
        $marcas = implode(',', array_fill(0, count($ids), '?'));
        $stmtAct = $pdo->prepare(
            "SELECT semana_id, tipo, etiqueta, badge, badge_color, titulo,
                    capacidad, metodologia, descripcion, nota_izq, nota_der
             FROM cronograma_actividad
             WHERE semana_id IN ($marcas)
             ORDER BY semana_id, orden"
        );
        $stmtAct->execute($ids);
        foreach ($stmtAct->fetchAll() as $fila) {
            $porSemana[(int) $fila['semana_id']][] = $fila;
        }
    }

    $resultado = [];
    foreach ($semanas as $s) {
        $resultado[] = [
            'numero'        => (int) $s['numero'],
            'rango_fechas'  => $s['rango_fechas'],
            'unidad'        => $s['unidad'],
            'unidad_titulo' => $s['unidad_titulo'],
            'variante'      => $s['variante'],
            'actividades'   => $porSemana[(int) $s['id']] ?? [],
        ];
    }

    responder(200, ['ok' => true, 'filtro' => $unidad, 'total' => count($resultado), 'semanas' => $resultado]);
} catch (Throwable $e) {
    error_log('[cronograma] ' . $e->getMessage());
    $debug = strtolower(env('APP_DEBUG', 'false')) === 'true';
    responder(500, [
        'ok'    => false,
        'error' => $debug ? $e->getMessage() : 'No se pudo consultar el cronograma.',
    ]);
}
