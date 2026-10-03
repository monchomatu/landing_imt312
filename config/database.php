<?php
declare(strict_types=1);

/**
 * config/database.php
 * Lee las credenciales del archivo .env (si existe) y entrega una conexión PDO.
 * Si no hay .env, usa los valores por defecto de Laragon (root, sin contraseña).
 */

function cargar_env(string $ruta): void
{
    if (!is_readable($ruta)) {
        return;
    }
    foreach (file($ruta, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES) as $linea) {
        $linea = trim($linea);
        if ($linea === '' || $linea[0] === '#' || strpos($linea, '=') === false) {
            continue;
        }
        [$clave, $valor] = explode('=', $linea, 2);
        $_ENV[trim($clave)] = trim($valor);
    }
}

function env(string $clave, string $defecto = ''): string
{
    return $_ENV[$clave] ?? (getenv($clave) !== false ? (string) getenv($clave) : $defecto);
}

function obtener_conexion(): PDO
{
    static $pdo = null;
    if ($pdo instanceof PDO) {
        return $pdo;
    }

    cargar_env(dirname(__DIR__) . '/.env');

    $dsn = sprintf(
        'mysql:host=%s;port=%s;dbname=%s;charset=%s',
        env('DB_HOST', '127.0.0.1'),
        env('DB_PORT', '3306'),
        env('DB_NAME', 'landing_imt312'),
        env('DB_CHARSET', 'utf8mb4')
    );

    $pdo = new PDO($dsn, env('DB_USER', 'root'), env('DB_PASSWORD', ''), [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ]);

    return $pdo;
}
