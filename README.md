# Landing Page IMT-312 Manufactura Integrada

Landing page funcional de la asignatura **IMT-312 Manufactura Integrada** (UCB San Pablo, Gestión I/2026). Presenta la asignatura, su cronograma de 19 semanas, recursos, evaluación y datos de contacto del docente.

**Autor:** Ramon Herrera

## Público y propósito

Dirigida a los estudiantes que cursan la asignatura. Les permite consultar en un solo lugar qué se verá cada semana, cómo se evalúa y cómo contactar al docente. El cronograma se puede filtrar por unidad o por evaluaciones.

## Tecnologías

| Capa | Tecnología |
|---|---|
| Cliente | HTML5, Tailwind CSS (CDN), JavaScript (fetch) |
| Servidor | PHP 8 con PDO |
| Datos | MySQL / MariaDB (InnoDB, utf8mb4) |

## Cómo se comunican las partes

```
Navegador (app.js)  --fetch GET-->  api/cronograma.php  --PDO-->  MySQL
        ^                                   |
        +---------- respuesta JSON ---------+
```

1. Al abrir la página, `app.js` pide el cronograma a `api/cronograma.php`.
2. El script PHP valida el filtro, consulta las tablas `cronograma_semana` y `cronograma_actividad` con consultas preparadas y responde en JSON.
3. `app.js` dibuja las tarjetas con esos datos.
4. Cada botón de filtro (Unidad 1 a 4, Evaluaciones) repite el ciclo: el filtrado ocurre en el servidor, no en el navegador.

## Estructura del proyecto

```
├── index.php               Página principal (HTML + Tailwind)
├── api/
│   └── cronograma.php      Endpoint JSON que consulta MySQL
├── config/
│   └── database.php        Conexión PDO y lectura del .env
├── assets/js/
│   └── app.js              Fetch al servidor y dibujo del cronograma
├── database/
│   ├── 01_schema.sql       Crea la base de datos y las tablas
│   └── 02_seed.sql         Carga las 19 semanas y 39 actividades
├── .env.example            Plantilla de configuración
├── .gitignore
└── README.md
```

## Endpoint

`GET api/cronograma.php?unidad=<valor>`

| Valor de `unidad` | Resultado |
|---|---|
| (omitido) o `all` | Las 19 semanas |
| `u1`, `u2`, `u3`, `u4` | Semanas de esa unidad |
| `exam` | Semanas con evaluaciones (5, 13 y 19) |

Respuesta correcta: `{"ok": true, "filtro": "...", "total": N, "semanas": [...]}`.
Errores: `400` si el filtro es inválido, `405` si el método no es GET, `500` si falla la base de datos.

## Instalación y ejecución (Windows con Laragon)

1. Instalar **Laragon Full** (incluye PHP y MySQL) y pulsar **Iniciar todo**.
2. Abrir **HeidiSQL** (botón "Base de datos" de Laragon) y conectarse al servidor local.
3. Ejecutar `database/01_schema.sql` y luego `database/02_seed.sql` (Archivo → Cargar archivo SQL → F9). El primero crea la base de datos `landing_imt312`.
4. Verificar con `SELECT COUNT(*) FROM landing_imt312.cronograma_actividad;` (debe dar 39).
5. Si tu MySQL tiene otra contraseña o puerto, copiar `.env.example` como `.env` y editarlo.
6. En la terminal de Laragon, dentro de la carpeta del proyecto:
   `php -S 127.0.0.1:8110`
7. Abrir `http://127.0.0.1:8110` en el navegador.

Se necesita conexión a internet para cargar Tailwind CSS y la tipografía desde sus CDN.

## Requisitos de la consigna

| Requisito | Cómo se cumple |
|---|---|
| Funcional | Página completa con cronograma dinámico |
| Diseño claro y coherente | Paleta y componentes consistentes en todas las secciones |
| Adaptable a dispositivos | Clases responsivas de Tailwind, menú móvil |
| Comunica su propósito | Portada y secciones orientadas al estudiante |
| Interacción con el usuario | Filtros del cronograma, pestañas de competencias, copiar correo |
| Procesamiento del lado del servidor | `api/cronograma.php` (PHP) |
| Fuente de datos | Base de datos MySQL (`cronograma_semana`, `cronograma_actividad`) |
| Comunicación cliente-servidor | `fetch` desde `app.js` hacia el endpoint JSON |

## Seguridad

- Consultas con sentencias preparadas (PDO), sin concatenar datos del usuario.
- El parámetro `unidad` se valida contra una lista de valores permitidos.
- Los datos se escapan antes de insertarse en el HTML.
- Las credenciales van en `.env`, que no se sube al repositorio.
