-- ============================================================
-- 02_seed.sql  |  Datos del cronograma IMT-312 (Gestión I/2026)
-- Ejecutar DESPUÉS de 01_schema.sql
-- ============================================================
SET NAMES utf8mb4;
USE landing_imt312;

START TRANSACTION;

DELETE FROM cronograma_actividad;
DELETE FROM cronograma_semana;

-- Semanas
INSERT INTO cronograma_semana (id, numero, rango_fechas, unidad, unidad_titulo, variante) VALUES
  (1, 1, '09/02/2026 – 15/02/2026', 'u1', 'Unidad 1: Introducción', 'normal'),
  (2, 2, '16/02/2026 – 22/02/2026', 'u1', 'Unidad 1: Introducción', 'normal'),
  (3, 3, '23/02/2026 – 01/03/2026', 'u1', 'Unidad 1: Introducción', 'normal'),
  (4, 4, '02/03/2026 – 08/03/2026', 'u2', 'Unidad 2: Procesos de Fabricación', 'normal'),
  (5, 5, '09/03/2026 – 15/03/2026', 'u2', '1er Examen Parcial', 'examen'),
  (6, 6, '16/03/2026 – 22/03/2026', 'u2', 'Unidad 2: Procesos de Fabricación', 'normal'),
  (7, 7, '23/03/2026 – 29/03/2026', 'u3', 'Unidad 3: Programación CNC', 'normal'),
  (8, 8, '30/03/2026 – 05/04/2026', 'u3', 'Unidad 3: Programación CNC', 'normal'),
  (9, 9, '06/04/2026 – 12/04/2026', 'u3', 'Unidad 3: Programación CNC', 'normal'),
  (10, 10, '13/04/2026 – 19/04/2026', 'u3', 'Unidad 3: Torno CNC Real', 'normal'),
  (11, 11, '20/04/2026 – 26/04/2026', 'u3', 'Unidad 3: Fresadora CNC', 'normal'),
  (12, 12, '27/04/2026 – 03/05/2026', 'u3', 'Unidad 3: CAD/CAM', 'normal'),
  (13, 13, '04/05/2026 – 10/05/2026', 'u3', '2do Examen Parcial', 'examen'),
  (14, 14, '11/05/2026 – 17/05/2026', 'u3', 'Unidad 3: Piezas Complejas', 'normal'),
  (15, 15, '18/05/2026 – 24/05/2026', 'u3', 'Unidad 3: Optimización / Cierre U3', 'normal'),
  (16, 16, '25/05/2026 – 31/05/2026', 'u4', 'Unidad 4: Integración CIM/FMS', 'normal'),
  (17, 17, '01/06/2026 – 07/06/2026', 'u4', 'Unidad 4: Robótica Industrial', 'normal'),
  (18, 18, '08/06/2026 – 14/06/2026', 'u4', 'Unidad 4: Comunicación & Seguridad', 'normal'),
  (19, 19, '15/06/2026 – 23/06/2026', 'u4', 'Cierre de Asignatura', 'cierre');

-- Actividades (sesiones, evaluaciones y examen final)
INSERT INTO cronograma_actividad (semana_id, orden, tipo, etiqueta, badge, badge_color, titulo, capacidad, metodologia, descripcion, nota_izq, nota_der) VALUES
  (1, 1, 'sesion', 'Sesión 1 (09/02)', 'Teoría / Contextualización', 'gris', 'Presentación de la asignatura; contextualización del problema profesional', 'Reconoce el propósito, la competencia y el sistema de evaluación de la asignatura, relacionándolos con el perfil del ingeniero mecatrónico.', 'Preguntas mediadoras; exposición dialogada; análisis de casos.', NULL, NULL, NULL),
  (1, 2, 'sesion', 'Sesión 2 (11/02)', 'Historia / Metales', 'gris', 'Historia e hitos de la manufactura; la manufactura en metales (Kalpakjian & Schmid, Cap. 1)', 'Identifica los hitos históricos y la evolución de la manufactura y su relación con la industria de transformación de metales.', 'Exposición con diapositivas; línea de tiempo grupal; foro.', NULL, NULL, NULL),
  (2, 1, 'sesion', 'Sesión 3 (18/02)', 'Trabajo Grupal / Debate', 'gris', 'Estado del arte de la manufactura; clasificación de los sistemas de automatización avanzada (Cap. 1; Cap. 38.2)', 'Reconoce el estado del arte de la manufactura y clasifica los niveles de automatización industrial.', 'Trabajo en grupos; análisis de video industrial; debate.', NULL, NULL, NULL),
  (3, 1, 'sesion', 'Sesión 4 (23/02)', 'Inducción Taller CNC', 'ambar', 'Normas de seguridad industrial y trabajo en taller (IBNORCA, 2016)', 'Aplica normas de seguridad industrial en la operación de máquinas herramienta y en el trabajo de taller.', 'Inducción de seguridad; recorrido guiado por el taller CNC; checklist de EPP.', NULL, NULL, NULL),
  (3, 2, 'sesion', 'Sesión 5 (25/02)', 'Síntesis U1', 'gris', 'Integración de tecnologías: visión general (Cap. 39.2)', 'Explica los niveles de integración tecnológica en manufactura como anticipo del desarrollo de la asignatura.', 'Mapa conceptual grupal; síntesis de unidad.', NULL, NULL, NULL),
  (4, 1, 'sesion', 'Sesión 1 (02/03)', 'Fundamentos de Corte', 'gris', 'Máquinas herramienta y procesos de fabricación; fundamentos del corte (Cap. 20)', 'Selecciona las máquinas y procesos adecuados para la fabricación de piezas mecánicas según sus características.', 'Exposición; trabajo en grupos; estudio de catálogos de máquinas.', NULL, NULL, NULL),
  (4, 2, 'sesion', 'Sesión 2 (04/03)', 'Demostración Torno', 'azul', 'Operaciones de torneado: cilindrado, careado, roscado, mandrinado (Cap. 22)', 'Identifica y ordena las operaciones de torneado necesarias para la fabricación de una pieza.', 'Demostración práctica en torno convencional.', NULL, NULL, NULL),
  (5, 1, 'evaluacion', 'FECHA DE EVALUACIÓN: 09/03/2026', '25% Ponderación', 'ambar', '1ER EXAMEN PARCIAL — Evalúa Unidades 1 y 2', NULL, NULL, 'Evaluación escrita / práctica sobre bases de manufactura, niveles de automatización, selección de procesos y operaciones mecánicas.', NULL, NULL),
  (5, 2, 'sesion', 'Sesión 3 (11/03)', 'Demostración Fresadora', 'azul', 'Operaciones de fresado: planeado, ranurado, contorneado (Cap. 23.2–23.3)', 'Identifica y ordena las operaciones de fresado necesarias para la fabricación de una pieza.', 'Demostración práctica en fresadora.', NULL, NULL, NULL),
  (6, 1, 'sesion', 'Sesión 4 (16/03)', 'Procesos Especiales', 'gris', 'Procesos especiales de maquinado: cepillado, brochado, aserrado (Cap. 23.4–23.7)', 'Reconoce procesos de maquinado alternativos y su aplicación según el tipo de pieza.', 'Trabajo en grupos; estudio de casos.', NULL, NULL, NULL),
  (6, 2, 'sesion', 'Sesión 5 (18/03)', 'Práctica de Lab Metrología', 'verde', 'Metrología e instrumentación industrial (Cap. 35)', 'Califica piezas mecánicas fabricadas utilizando instrumentos y conceptos de metrología.', 'Práctica de laboratorio con instrumentos de medición.', NULL, NULL, NULL),
  (7, 1, 'sesion', 'Sesión 1 (23/03)', 'Inicio Evaluación Continua U3', 'morado', 'Métodos de programación CNC; control numérico (Cap. 38.3–38.4)', 'Explica los fundamentos del control numérico computarizado y la estructura de un programa CNC.', 'Exposición; análisis de programas CNC de ejemplo.', NULL, NULL, NULL),
  (7, 2, 'sesion', 'Sesión 2 (25/03)', 'Práctica EMCO CT105', 'ambar', 'Medición de piezas en torno CNC; técnicas de sujeción', 'Establece el cero pieza y las técnicas de sujeción adecuadas para torno CNC.', 'Práctica de laboratorio (Centro de torneado CNC EMCO CT105).', NULL, NULL, NULL),
  (8, 1, 'sesion', 'Sesión 3 (30/03)', 'Walter Machining Software', 'azul', 'Cálculo de parámetros de torneado (Cap. 20.5)', 'Calcula los parámetros de corte adecuados para operaciones de torneado.', 'Resolución de problemas; software Walter Machining Calculator.', NULL, NULL, NULL),
  (8, 2, 'sesion', 'Sesión 4 (01/04)', 'Herramientas y Fluidos', 'gris', 'Materiales de herramienta de corte y fluidos de corte (Cap. 21)', 'Selecciona materiales y geometrías de herramienta de corte según el material a mecanizar.', 'Trabajo en grupos; resolución de problemas.', NULL, NULL, NULL),
  (9, 1, 'sesion', 'Sesión 5 (06/04)', 'EMCO WinNC Software', 'indigo', 'Programación conversacional de torno CNC', 'Programa de forma manual y conversacional piezas sencillas en torno CNC.', 'Práctica guiada; software EMCO WinNC.', NULL, NULL, NULL),
  (9, 2, 'sesion', 'Sesión 6 (08/04)', 'Ciclos Fijos G-Code', 'gris', 'Programación de piezas de torno: ciclos fijos (cilindrado, roscado)', 'Programa ciclos fijos de torneado en código CNC.', 'Práctica guiada; resolución de ejercicios de programación.', NULL, NULL, NULL),
  (10, 1, 'sesion', 'Sesión 7 (13/04)', 'Simulador CNC', 'azul', 'Programación de piezas de torno: práctica autónoma', 'Programa de forma autónoma piezas de torno de complejidad media, verificando su ejecución en simulador.', 'Práctica autónoma en simulador; retroalimentación entre pares.', NULL, NULL, NULL),
  (10, 2, 'sesion', 'Sesión 8 (15/04)', 'Mecanizado Real Taller', 'ambar', 'Mecanizado de piezas de torno (práctica de taller)', 'Verifica y ejecuta la fabricación de una pieza de torno en una máquina CNC real.', 'Práctica de laboratorio; control de calidad con instrumentos de medición.', NULL, NULL, NULL),
  (11, 1, 'sesion', 'Sesión 9 (20/04)', 'Centro de Mecanizado', 'ambar', 'Medición de piezas y herramientas en fresadora', 'Establece el cero pieza y mide herramientas para el mecanizado en fresadora CNC.', 'Práctica de laboratorio (centro de mecanizado).', NULL, NULL, NULL),
  (11, 2, 'sesion', 'Sesión 10 (22/04)', 'Cálculos Fresado', 'gris', 'Cálculo de parámetros de fresado', 'Calcula los parámetros de corte adecuados para operaciones de fresado.', 'Resolución de problemas; software Walter Machining Calculator.', NULL, NULL, NULL),
  (12, 1, 'sesion', 'Sesión 11 (27/04)', 'BobCAD-CAM Lab', 'indigo', 'Programación CAD/CAM: interfaz y modelado (Cap. 39.4–39.5)', 'Utiliza un software CAD/CAM para generar la geometría de una pieza mecánica.', 'Práctica guiada; software BobCAD-CAM, laboratorio de cómputo.', NULL, NULL, NULL),
  (12, 2, 'sesion', 'Sesión 12 (29/04)', 'Trayectorias CAD/CAM', 'gris', 'Programación CAD/CAM: trayectorias de mecanizado', 'Define operaciones y trayectorias de mecanizado para piezas sencillas en CAD/CAM.', 'Práctica guiada; resolución de problemas.', NULL, NULL, NULL),
  (13, 1, 'sesion', 'Sesión 13 (04/05)', 'Código G / Simulación', 'gris', 'Programación CAD/CAM: generación de código G y simulación', 'Genera y simula el código G de piezas mecánicas mediante software CAD/CAM.', NULL, NULL, NULL, NULL),
  (13, 2, 'sesion', 'Sesión 14 (06/05)', 'Centro Mecanizado', 'gris', 'Programación CAD/CAM para centro de mecanizado (piezas intermedias)', 'Programa piezas mecánicas de complejidad media para centro de mecanizado.', NULL, NULL, NULL, NULL),
  (13, 3, 'evaluacion', 'FECHA DE EVALUACIÓN: 08/05/2026', '25% Ponderación', 'ambar', '2DO EXAMEN PARCIAL — Evalúa Unidad 3 (Programación CNC)', NULL, NULL, 'Evaluación práctica de programación y mecanizado en torno y centro de mecanizado CNC.', NULL, NULL),
  (14, 1, 'sesion', 'Sesión 15 (11/05)', 'Superficies / Contornos', 'gris', 'Programación CAD/CAM para piezas complejas (Cap. 39.5)', 'Programa piezas mecánicas complejas (superficies, contornos) para centro de mecanizado.', 'Práctica guiada; trabajo en grupos.', NULL, NULL, NULL),
  (14, 2, 'sesion', 'Sesión 16 (13/05)', 'EMCO CM105 Real', 'ambar', 'Mecanizado en centro CNC (práctica de taller)', 'Ejecuta la fabricación de una pieza compleja en un centro de mecanizado CNC real.', 'Práctica de laboratorio (Centro de mecanizado CNC EMCO CM105).', NULL, NULL, NULL),
  (15, 1, 'sesion', 'Sesión 17 (18/05)', 'Productividad', 'gris', 'Optimización de la programación CAD/CAM', 'Optimiza trayectorias y tiempos de mecanizado aplicando criterios de productividad.', 'Resolución de problemas; estudio de casos.', NULL, NULL, NULL),
  (15, 2, 'sesion', 'Sesión 18 (20/05)', 'Fin Evaluaciones U3 (20%)', 'morado', 'Síntesis de la unidad; avance de proyecto', 'Integra los conocimientos de programación CNC y CAD/CAM desarrollados en la unidad, aplicándolos al proyecto de asignatura.', 'Trabajo en grupos; tutoría de proyecto.', NULL, NULL, NULL),
  (16, 1, 'sesion', 'Sesión 1 (25/05)', 'Inicio Evaluaciones U4 (5%)', 'morado', 'Sistemas de manufactura; CIM (Cap. 39.2–39.3)', 'Explica los conceptos fundamentales de los sistemas de manufactura y de la manufactura integrada por computadora (CIM).', 'Exposición; preguntas mediadoras; análisis de casos.', NULL, NULL, NULL),
  (16, 2, 'sesion', 'Sesión 2 (27/05)', 'FMS / Celdas', 'gris', 'FMS; manufactura celular; tecnología de grupos (Cap. 39.8–39.10)', 'Diferencia los sistemas flexibles de manufactura y la manufactura celular como estrategias de integración.', 'Trabajo en grupos; estudio de casos.', NULL, NULL, NULL),
  (17, 1, 'sesion', 'Sesión 3 (01/06)', 'Manejo de Materiales', 'gris', 'Componentes de celdas de manufactura; manejo de materiales (Cap. 38.6, 39.10)', 'Identifica los componentes y sistemas de transporte de una celda de manufactura integrada.', 'Exposición; recursos audiovisuales.', NULL, NULL, NULL),
  (17, 2, 'sesion', 'Sesión 4 (03/06)', 'Robótica', 'azul', 'Robots industriales (Cap. 38.7)', 'Identifica los tipos, componentes y aplicaciones de los robots industriales en manufactura.', 'Exposición; análisis de video; trabajo en grupos.', NULL, NULL, NULL),
  (18, 1, 'sesion', 'Sesión 5 (08/06)', 'Seguridad Robótica', 'ambar', 'Seguridad en robótica industrial', 'Aplica criterios de seguridad en la operación e integración de celdas robotizadas.', 'Estudio de normas de seguridad; estudio de casos.', NULL, NULL, NULL),
  (18, 2, 'sesion', 'Sesión 6 (10/06)', 'Redes Industriales', 'gris', 'Redes de comunicación en la manufactura (Guerrero et al., 2009; Cap. 39.12)', 'Identifica los protocolos de comunicación industrial utilizados en la integración de sistemas de manufactura.', 'Exposición; estudio de arquitecturas de red industrial.', NULL, NULL, NULL),
  (19, 1, 'sesion', 'Sesión 7 (15/06)', 'Fin Evaluaciones U4 (5%)', 'morado', 'Inteligencia artificial en manufactura; fábrica del futuro (Cap. 39.13–39.14)', 'Analiza críticamente las tendencias de inteligencia artificial y la fábrica del futuro en el contexto nacional.', NULL, NULL, NULL, NULL),
  (19, 2, 'evaluacion', 'SESIÓN 8: 17/06/2026', '20% Ponderación', 'ambar', 'Presentación de Proyectos de Asignatura', NULL, NULL, 'Demostración del diseño, programación y automatización de un sistema de manufactura integrado. Evaluación por rúbrica.', NULL, NULL),
  (19, 3, 'final', 'FECHA EXAMEN FINAL: 19/06/2026', 'Evaluación General', 'gris', 'EXAMEN FINAL', NULL, NULL, 'Evalúa la competencia completa de la asignatura mediante evaluación teórica y resolución de ejercicios integradores.', 'Fin de Periodo Académico: 23/06/2026', 'Gestión I/2026 Concluida');

COMMIT;
