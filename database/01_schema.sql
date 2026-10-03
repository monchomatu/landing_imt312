-- ============================================================
-- 01_schema.sql  |  Estructura de la base de datos del cronograma
-- Motor: MySQL 8.x / MariaDB 10.x (InnoDB, utf8mb4)
-- Ejecutar PRIMERO. Crea su propia base de datos: landing_imt312
-- AVISO: si las tablas ya existen, se borran y se recrean.
-- ============================================================
SET NAMES utf8mb4;

CREATE DATABASE IF NOT EXISTS landing_imt312
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE landing_imt312;

DROP TABLE IF EXISTS cronograma_actividad;
DROP TABLE IF EXISTS cronograma_semana;

-- Una fila por semana del semestre (19 semanas)
CREATE TABLE cronograma_semana (
  id            TINYINT UNSIGNED NOT NULL AUTO_INCREMENT,
  numero        TINYINT UNSIGNED NOT NULL,
  rango_fechas  VARCHAR(40)  NOT NULL,
  unidad        ENUM('u1','u2','u3','u4') NOT NULL,
  unidad_titulo VARCHAR(80)  NOT NULL,
  variante      ENUM('normal','examen','cierre') NOT NULL DEFAULT 'normal',
  PRIMARY KEY (id),
  UNIQUE KEY uq_semana_numero (numero),
  KEY idx_semana_unidad (unidad)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Sesiones, evaluaciones y examen final de cada semana
CREATE TABLE cronograma_actividad (
  id          SMALLINT UNSIGNED NOT NULL AUTO_INCREMENT,
  semana_id   TINYINT UNSIGNED NOT NULL,
  orden       TINYINT UNSIGNED NOT NULL,
  tipo        ENUM('sesion','evaluacion','final') NOT NULL DEFAULT 'sesion',
  etiqueta    VARCHAR(80)  NOT NULL,
  badge       VARCHAR(80)  NULL,
  badge_color ENUM('gris','ambar','azul','verde','morado','indigo') NOT NULL DEFAULT 'gris',
  titulo      VARCHAR(255) NOT NULL,
  capacidad   TEXT NULL,
  metodologia TEXT NULL,
  descripcion TEXT NULL,
  nota_izq    VARCHAR(120) NULL,
  nota_der    VARCHAR(120) NULL,
  PRIMARY KEY (id),
  UNIQUE KEY uq_actividad_orden (semana_id, orden),
  CONSTRAINT fk_actividad_semana
    FOREIGN KEY (semana_id) REFERENCES cronograma_semana (id)
    ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
