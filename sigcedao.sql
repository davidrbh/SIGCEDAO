-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-09-2023 a las 07:15:40
-- Versión del servidor: 10.4.18-MariaDB
-- Versión de PHP: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sigcedao`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `aula`
--

CREATE TABLE `aula` (
  `id_aula` bigint(20) NOT NULL,
  `nombre_aula` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `aula`
--

INSERT INTO `aula` (`id_aula`, `nombre_aula`, `status`) VALUES
(1, 'Primero', 1),
(2, 'Segundo', 1),
(3, 'Tercero', 1),
(4, 'Cuarto', 1),
(5, 'Quinto', 1),
(6, 'Sexto', 1),
(7, 'CRA', 1),
(8, 'CBIT', 1),
(9, 'Inicial', 1),
(10, 'Aula integrada', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `desc_seccion`
--

CREATE TABLE `desc_seccion` (
  `id_desc_seccion` bigint(20) NOT NULL,
  `nombre_seccion` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `aula_id` bigint(20) DEFAULT NULL,
  `turno_id` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `desc_seccion`
--

INSERT INTO `desc_seccion` (`id_desc_seccion`, `nombre_seccion`, `aula_id`, `turno_id`) VALUES
(3, 'Primero A', 1, 1),
(4, 'Primero B', 1, 2),
(5, 'Segundo A', 2, 1),
(6, 'Segundo B', 2, 2),
(7, 'Tercero A', 3, 1),
(8, 'Tercero B', 3, 2),
(9, 'Cuarto A', 4, 1),
(10, 'Cuarto B', 4, 2),
(11, 'Quinto A', 5, 1),
(12, 'Quinto B', 5, 2),
(13, 'Sexto A', 6, 1),
(14, 'Sexto B', 6, 2),
(15, 'Seleccione:', NULL, 1),
(16, 'Seleccione:', NULL, 2),
(17, 'Inicial A', 9, 1),
(18, 'Inicial B', 9, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `docentes`
--

CREATE TABLE `docentes` (
  `id_docentes` bigint(20) NOT NULL,
  `especialidad_id` bigint(20) NOT NULL,
  `nombre_docente` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_docente` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_docente` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_docente` int(11) NOT NULL,
  `celular_docente` bigint(20) NOT NULL,
  `correo_docente` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `docentes`
--

INSERT INTO `docentes` (`id_docentes`, `especialidad_id`, `nombre_docente`, `apellido_docente`, `nacionalidad_docente`, `cedula_docente`, `celular_docente`, `correo_docente`, `status`) VALUES
(1, 1, 'Ana', 'Deyan', 'V-', 4416939, 4125403027, 'anamer2210@gmail.com', 1),
(2, 1, 'Analix', 'Hernandez', 'V-', 14909718, 4241697285, 'analix.1979@gmail.com', 1),
(3, 1, 'Jose', 'Duarte', 'V-', 10421528, 2125741416, 'jose_duarte@gmail.com', 1),
(4, 1, 'Ysmara', 'Amundaray', 'V-', 24940227, 4128042321, 'ysmarit@gmail.com', 1),
(5, 1, 'Nikole', 'Roche', 'V-', 30930227, 4242012145, 'nikole.roche@gmail.com', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `especialidad`
--

CREATE TABLE `especialidad` (
  `id_especialidad` bigint(20) NOT NULL,
  `nombre_especialidad` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `especialidad`
--

INSERT INTO `especialidad` (`id_especialidad`, `nombre_especialidad`, `descripcion`, `status`) VALUES
(1, 'Docente De Aula', 'Maestro De Aula', 1),
(3, 'Docente Especialista', 'Especialista Del área', 1),
(4, 'Ejemplo', 'Sdasdas', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estado`
--

CREATE TABLE `estado` (
  `id_estado` bigint(20) NOT NULL,
  `desc_estado` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `estado`
--

INSERT INTO `estado` (`id_estado`, `desc_estado`) VALUES
(1, 'Distrito Capital'),
(3, 'Amazonas'),
(4, 'Anzoátegui'),
(5, 'Apure'),
(6, 'Aragua'),
(7, 'Barinas'),
(8, 'Bolívar'),
(9, 'Carabobo'),
(10, 'Cojedes'),
(11, 'Delta Amacuro'),
(12, 'Falcón'),
(13, 'Guárico'),
(14, 'Lara'),
(15, 'Mérida'),
(16, 'Miranda'),
(17, 'Monagas'),
(18, 'Nueva Esparta'),
(19, 'Portuguesa'),
(20, 'Sucre'),
(21, 'Táchira'),
(22, 'Trujillo'),
(23, 'La Guaira'),
(24, 'Yaracuy'),
(25, 'Zulia'),
(26, 'Dependencias Federales');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes`
--

CREATE TABLE `estudiantes` (
  `id_estudiante` bigint(20) NOT NULL,
  `nombre_alumno1` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre_alumno2` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `apellido_alumno1` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_alumno2` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `cedula_escolar` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `genero` int(11) NOT NULL,
  `nacionalidad_alumno` int(11) NOT NULL,
  `estado_id` bigint(20) NOT NULL DEFAULT 1,
  `lugar_nacimiento` mediumtext COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccion_hab` mediumtext COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_madre` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_madre` int(11) NOT NULL,
  `ocupacion_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono_madre` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_padre` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_padre` int(11) NOT NULL,
  `ocupacion_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono_padre` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre_repre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_repre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_repre` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_repre` int(11) NOT NULL,
  `parentesco_repre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `ocupacion_repre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono_repre` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `celular_repre` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccion_repre` mediumtext COLLATE utf8mb4_swedish_ci NOT NULL,
  `colaboracion_plantel` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `plantel` varchar(256) COLLATE utf8mb4_swedish_ci NOT NULL,
  `grado_cursado` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `periodo_escolar` varchar(256) COLLATE utf8mb4_swedish_ci NOT NULL,
  `literal` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL,
  `repitiente` int(11) NOT NULL,
  `tipo_alumno` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `turno` int(11) NOT NULL,
  `seccion_id` bigint(20) NOT NULL,
  `periodo_escolar_new` varchar(256) COLLATE utf8mb4_swedish_ci NOT NULL,
  `funcionario` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `enfermedad_padece` int(11) NOT NULL DEFAULT 2,
  `enfermedad_1` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `tratamiento_enfermedad` int(11) NOT NULL DEFAULT 2,
  `tratamiento_1` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `alergico_medicamento` int(11) NOT NULL DEFAULT 2,
  `alergico_1` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `rubeola` int(11) NOT NULL DEFAULT 0,
  `sarampion` int(11) NOT NULL DEFAULT 0,
  `lechina` int(11) NOT NULL DEFAULT 0,
  `paperas` int(11) NOT NULL DEFAULT 0,
  `otra_enfermedad` int(11) NOT NULL DEFAULT 0,
  `otra_enfermedad_cual` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `ninguna_enfermedad` int(11) NOT NULL DEFAULT 1,
  `psicologo` int(11) NOT NULL DEFAULT 2,
  `nacimiento_parto` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `alumno_seva_solo` int(11) NOT NULL,
  `nombre_retiro` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `parestesco_retiro` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `vive_madre` int(11) NOT NULL DEFAULT 1,
  `vive_padre` int(11) NOT NULL DEFAULT 1,
  `vive_hermanos` int(11) DEFAULT 1,
  `cuantos_hermanos` int(11) NOT NULL DEFAULT 0,
  `cuantas_hermanas` int(11) NOT NULL DEFAULT 0,
  `vive_otra_persona` int(11) NOT NULL DEFAULT 1,
  `cual_persona_vive` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `hermanos_plantel` int(11) NOT NULL DEFAULT 2,
  `cuantos_hermanos_plantel` int(11) DEFAULT NULL,
  `grado_cursanHermanos` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `turno_cursanHermanos` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `tipo_vivienda` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `condicion_vivienda` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `ingresos_familiares` mediumint(9) NOT NULL,
  `dependecia_ingreso` int(11) NOT NULL,
  `boletin_calificacion` int(11) DEFAULT 0,
  `boletin_promocion` int(11) NOT NULL DEFAULT 0,
  `carta_conducta` int(11) NOT NULL DEFAULT 0,
  `copia_partida_nac` int(11) NOT NULL DEFAULT 0,
  `copia_cedula_alumno` int(11) NOT NULL DEFAULT 0,
  `copia_cedula_repre` int(11) NOT NULL DEFAULT 0,
  `foto_alumno` int(11) NOT NULL DEFAULT 0,
  `foto_repre` int(11) NOT NULL DEFAULT 0,
  `boletin_grado` int(11) NOT NULL DEFAULT 0,
  `otros_documentos` int(11) NOT NULL DEFAULT 0,
  `documentos_1` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `estudiantes`
--

INSERT INTO `estudiantes` (`id_estudiante`, `nombre_alumno1`, `nombre_alumno2`, `apellido_alumno1`, `apellido_alumno2`, `cedula_escolar`, `fecha_nac`, `genero`, `nacionalidad_alumno`, `estado_id`, `lugar_nacimiento`, `direccion_hab`, `nombre_madre`, `apellido_madre`, `nacionalidad_madre`, `cedula_madre`, `ocupacion_madre`, `telefono_madre`, `nombre_padre`, `apellido_padre`, `nacionalidad_padre`, `cedula_padre`, `ocupacion_padre`, `telefono_padre`, `nombre_repre`, `apellido_repre`, `nacionalidad_repre`, `cedula_repre`, `parentesco_repre`, `ocupacion_repre`, `telefono_repre`, `celular_repre`, `direccion_repre`, `colaboracion_plantel`, `plantel`, `grado_cursado`, `periodo_escolar`, `literal`, `repitiente`, `tipo_alumno`, `turno`, `seccion_id`, `periodo_escolar_new`, `funcionario`, `fecha_inscripcion`, `enfermedad_padece`, `enfermedad_1`, `tratamiento_enfermedad`, `tratamiento_1`, `alergico_medicamento`, `alergico_1`, `rubeola`, `sarampion`, `lechina`, `paperas`, `otra_enfermedad`, `otra_enfermedad_cual`, `ninguna_enfermedad`, `psicologo`, `nacimiento_parto`, `alumno_seva_solo`, `nombre_retiro`, `parestesco_retiro`, `vive_madre`, `vive_padre`, `vive_hermanos`, `cuantos_hermanos`, `cuantas_hermanas`, `vive_otra_persona`, `cual_persona_vive`, `hermanos_plantel`, `cuantos_hermanos_plantel`, `grado_cursanHermanos`, `turno_cursanHermanos`, `tipo_vivienda`, `condicion_vivienda`, `ingresos_familiares`, `dependecia_ingreso`, `boletin_calificacion`, `boletin_promocion`, `carta_conducta`, `copia_partida_nac`, `copia_cedula_alumno`, `copia_cedula_repre`, `foto_alumno`, `foto_repre`, `boletin_grado`, `otros_documentos`, `documentos_1`, `status`) VALUES
(1, 'Josue', 'Sebastian', 'Hernandez', 'Barrera', 24723325, '2012-08-30', 1, 1, 1, 'Maracay', 'Av.panteon, esquina trocadero a san gabriel edificio, san miguel, piso 12, apto 122-A', 'Deynalix', 'Barrera', 'V-', 26441548, 'Comerciante', '02125529546', 'Genniber', 'Hernandez', 'V-', 22412251, 'Comerciante', '02125514511', 'David', 'Barrera', 'V-', 24723325, 'Tio', 'Ingeniero Informatico', '02125529546', '04242029800', 'Av.panteon, esquina trocadero a san gabriel edificio, san miguel, piso 12, apto 122-A', 'Personal de apoyo', 'U.E.D Antonio Ornes', 'Cuarto', '2022-2023', 'B', 2, 'Nuevo Ingreso', 1, 1, '2023-2024', 'Josue Hernandez', '2023-08-07', 2, NULL, 2, NULL, 2, NULL, 0, 0, 0, 0, 0, 'Ninguna', 1, 2, 'Normal', 1, 'David Barrera', 'Tio', 1, 1, 2, 0, 0, 1, 'Abuela, Tio', 2, NULL, NULL, NULL, 'Apartamento', 'Propia', 500, 4, 0, 0, 0, 1, 1, 1, 1, 1, 0, 0, NULL, 1),
(2, 'Deivick', 'Moises', 'Acosta', 'Barrera', 36451541, '2015-10-16', 1, 1, 1, 'Caracas', 'Bogota,Colombia', 'Deynalix', 'Barrera', 'V-', 26451428, 'Comerciante', '02125529546', 'Vifael', 'Acosta', 'V-', 24781984, 'Comerciante', '02125514512', 'David', 'Barrera', 'V-', 24723325, 'Tio', 'Programador', '02125529546', '04242029800', 'Av.panteón ', 'Personal de apoyo', 'Armando Zuluaga Blanco', '2', '2022-2023', 'A', 0, 'Nuevo ingreso', 1, 11, '2023-2024', 'David Barrera', '2023-09-12', 2, NULL, 2, NULL, 2, NULL, 0, 0, 0, 0, 0, NULL, 1, 2, 'Normal', 2, 'David Barrera', 'Tio', 1, 1, 0, 0, 0, 1, 'Abuela', 2, NULL, NULL, NULL, 'Apartamento', 'Propia', 500, 4, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estudiantes_inicial`
--

CREATE TABLE `estudiantes_inicial` (
  `inicial_id` bigint(20) NOT NULL,
  `nombre_alumno1` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nombre_alumno2` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `apellido_alumno1` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_alumno2` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `cedula_escolar` int(11) NOT NULL,
  `fecha_nac` date NOT NULL,
  `genero` int(11) NOT NULL,
  `nacionalidad_alumno` int(11) NOT NULL DEFAULT 1,
  `estado_id` bigint(20) NOT NULL,
  `nacimiento_alumno` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `talla_camisa` int(11) NOT NULL,
  `talla_pantalon` int(11) NOT NULL,
  `talla_zapato` int(11) NOT NULL,
  `peso` int(11) NOT NULL,
  `estatura` float NOT NULL,
  `tiene_hermanos` int(11) NOT NULL,
  `cuantos_hermanos` int(11) DEFAULT NULL,
  `tipo_alumno` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `turno` int(11) NOT NULL,
  `seccion_id` bigint(20) NOT NULL,
  `periodo_escolar` varchar(256) COLLATE utf8mb4_swedish_ci NOT NULL,
  `funcionario` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `fecha_inscripcion` date NOT NULL,
  `nombre_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_madre` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_madre` int(11) NOT NULL,
  `estado_civil_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacimiento_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `tipo_nacionalidad_madre` text COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'Venezolana',
  `estado_madre_id` bigint(20) NOT NULL,
  `fecha_nac_madre` date NOT NULL,
  `direccion_hab_madre` mediumtext COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono_madre` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccion_trabajo_madre` mediumtext COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono_trabajo_madre` varchar(20) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `nivel_academico_madre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `otros_datos_madre` mediumtext COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `nombre_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_padre` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_padre` int(11) NOT NULL,
  `estado_civil_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacimiento_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `tipo_nacionalidad_padre` int(11) NOT NULL DEFAULT 1,
  `estado_padre_id` bigint(11) NOT NULL DEFAULT 1,
  `fecha_nac_padre` date NOT NULL,
  `direccion_hab_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `telefono_padre` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `direccion_trabajo_padre` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `telefono_trabajo_padre` varchar(20) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `nivel_academico_padre` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `otros_datos_padre` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `come_solo` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `lo_ayudan` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `quien_ayuda` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `comida_favortia` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `comida_rechaza` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `alimientos_prohibidos` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `enfinteres` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `asea_solo` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `horas_duerme` int(11) NOT NULL,
  `tiempo_dedica_madre` int(11) NOT NULL,
  `tiempo_dedica_padre` int(11) NOT NULL,
  `tiempo_dedica_abuelos` int(11) NOT NULL,
  `nombre_retiro` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_retiro` varchar(5) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_retiro` int(11) NOT NULL,
  `celular_retiro` varchar(20) COLLATE utf8mb4_swedish_ci NOT NULL,
  `parentesco_retiro` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `situacion_embarazo` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `enfermedad_durante_embarazo` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `oficio_durante_embarazo` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `situacion_parto_nacimiento` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `edad_madre_embarazo` int(11) NOT NULL,
  `problemas_parto` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `cual_problema_parto` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `peso_alnacer` float NOT NULL,
  `talla_alnacer` int(11) NOT NULL,
  `problemas_primeros_dias` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `cual_problema` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `edad_hablar` int(11) NOT NULL,
  `edad_caminar` int(11) NOT NULL,
  `edad_panales` int(11) NOT NULL,
  `peso_nino` float NOT NULL,
  `talla_nino` int(11) NOT NULL,
  `grupo_sanguineo` varchar(256) COLLATE utf8mb4_swedish_ci NOT NULL,
  `alergico` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `especifique_alergia` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `enfermedades_padrecidad` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `hospitalizado` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `causa_hospitalizado` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `fiebre_alta_medicamento` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `motora` int(11) NOT NULL DEFAULT 0,
  `crecimiento` int(11) NOT NULL DEFAULT 0,
  `auditiva` int(11) NOT NULL DEFAULT 0,
  `visual` int(11) NOT NULL DEFAULT 0,
  `otra_discapacidad` int(11) NOT NULL DEFAULT 0,
  `especifique_discapacidad` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `atendido_especialista` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `cual_especialista` text COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `problemas_lenguaje` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `mano_habil` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `hora_para_dormir` varchar(11) COLLATE utf8mb4_swedish_ci NOT NULL,
  `hora_se_levanta` varchar(11) COLLATE utf8mb4_swedish_ci NOT NULL,
  `sueno_nino` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `con_quien_duerme` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `informacion_importante` int(11) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `estudiantes_inicial`
--

INSERT INTO `estudiantes_inicial` (`inicial_id`, `nombre_alumno1`, `nombre_alumno2`, `apellido_alumno1`, `apellido_alumno2`, `cedula_escolar`, `fecha_nac`, `genero`, `nacionalidad_alumno`, `estado_id`, `nacimiento_alumno`, `talla_camisa`, `talla_pantalon`, `talla_zapato`, `peso`, `estatura`, `tiene_hermanos`, `cuantos_hermanos`, `tipo_alumno`, `turno`, `seccion_id`, `periodo_escolar`, `funcionario`, `fecha_inscripcion`, `nombre_madre`, `apellido_madre`, `nacionalidad_madre`, `cedula_madre`, `estado_civil_madre`, `nacimiento_madre`, `tipo_nacionalidad_madre`, `estado_madre_id`, `fecha_nac_madre`, `direccion_hab_madre`, `telefono_madre`, `direccion_trabajo_madre`, `telefono_trabajo_madre`, `nivel_academico_madre`, `otros_datos_madre`, `nombre_padre`, `apellido_padre`, `nacionalidad_padre`, `cedula_padre`, `estado_civil_padre`, `nacimiento_padre`, `tipo_nacionalidad_padre`, `estado_padre_id`, `fecha_nac_padre`, `direccion_hab_padre`, `telefono_padre`, `direccion_trabajo_padre`, `telefono_trabajo_padre`, `nivel_academico_padre`, `otros_datos_padre`, `come_solo`, `lo_ayudan`, `quien_ayuda`, `comida_favortia`, `comida_rechaza`, `alimientos_prohibidos`, `enfinteres`, `asea_solo`, `horas_duerme`, `tiempo_dedica_madre`, `tiempo_dedica_padre`, `tiempo_dedica_abuelos`, `nombre_retiro`, `nacionalidad_retiro`, `cedula_retiro`, `celular_retiro`, `parentesco_retiro`, `situacion_embarazo`, `enfermedad_durante_embarazo`, `oficio_durante_embarazo`, `situacion_parto_nacimiento`, `edad_madre_embarazo`, `problemas_parto`, `cual_problema_parto`, `peso_alnacer`, `talla_alnacer`, `problemas_primeros_dias`, `cual_problema`, `edad_hablar`, `edad_caminar`, `edad_panales`, `peso_nino`, `talla_nino`, `grupo_sanguineo`, `alergico`, `especifique_alergia`, `enfermedades_padrecidad`, `hospitalizado`, `causa_hospitalizado`, `fiebre_alta_medicamento`, `motora`, `crecimiento`, `auditiva`, `visual`, `otra_discapacidad`, `especifique_discapacidad`, `atendido_especialista`, `cual_especialista`, `problemas_lenguaje`, `mano_habil`, `hora_para_dormir`, `hora_se_levanta`, `sueno_nino`, `con_quien_duerme`, `informacion_importante`, `status`) VALUES
(1, 'Gabriel', NULL, 'Acosta', 'Barrera', 26940227, '2020-10-10', 1, 1, 22, 'Bogotá-Colombia', 4, 4, 26, 20, 1.32, 1, 2, 'Nuevo Ingreso', 1, 7, '2023-2024', 'David Barrera', '2023-08-08', 'Deynalix', 'Barrera', 'V-', 26940227, 'Soltera', 'Caracas', 'Venezolana', 14, '1997-05-21', 'Av.panteón, esquina trocadero a san Gabriel, edificio san miguel, piso 12, apto 122-A', '02125529546', 'Av.panteón, esquina trocadero a san Gabriel, edificio san miguel, piso 12, apto 122-A', NULL, 'Bachiller', NULL, 'Vifael', 'Acosta', 'V-', 24640221, 'Soltero', 'Caracas', 1, 1, '1996-10-10', 'Cota 905', '04241123536', 'Cota 905', NULL, 'Bachiller', NULL, 'No', 'Si', 'La madre', 'Tetero', 'Aguacate', 'Ninguno', 'No', 'No', 8, 5, 5, 7, 'David Barrera', 'V-', 24723325, '04242029800', 'Tío ', 'Normal', 'Ninguna', 'Ninguno', 'Normal', 26, 'No', NULL, 3.2, 20, 'No', NULL, 1, 1, 2, 5.2, 50, 'ORH +', 'No', NULL, 'Ninguna', 'No', NULL, 'Acetominofen', 0, 0, 0, 0, 0, NULL, 'No', NULL, 'No', 'Izquierda', '9', '6', 'Tranquilo', 'con la madre', NULL, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `modulos`
--

CREATE TABLE `modulos` (
  `id_modulo` bigint(20) NOT NULL,
  `titulo` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `desc_modulo` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `modulos`
--

INSERT INTO `modulos` (`id_modulo`, `titulo`, `desc_modulo`, `status`) VALUES
(1, 'Dashboard', 'dashboard', 1),
(2, 'Roles', 'roles', 1),
(3, 'Usuarios', 'usuarios', 1),
(4, 'Personal Administrativo', 'Personal administrativo', 1),
(5, 'Secciones', 'Aulas de clase', 1),
(6, 'Docentes', 'Docentes de aulas', 1),
(7, 'Especialidad', 'Especialidad de docentes', 1),
(8, 'Estudiantes Basica', 'Estudiantes de basica', 1),
(9, 'Estudiantes Inicial', 'Estudiantes de inicial', 1),
(10, 'Planillas', 'Documentos', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permisos`
--

CREATE TABLE `permisos` (
  `id_permisos` bigint(20) NOT NULL,
  `rol_id` bigint(20) NOT NULL,
  `modulo_id` bigint(20) NOT NULL,
  `r` int(11) NOT NULL,
  `w` int(11) NOT NULL,
  `u` int(11) NOT NULL,
  `d` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `permisos`
--

INSERT INTO `permisos` (`id_permisos`, `rol_id`, `modulo_id`, `r`, `w`, `u`, `d`) VALUES
(37, 2, 1, 0, 0, 0, 0),
(38, 2, 2, 0, 0, 0, 0),
(39, 2, 3, 0, 0, 0, 0),
(40, 1, 1, 1, 1, 1, 1),
(41, 1, 2, 1, 1, 1, 1),
(42, 1, 3, 1, 1, 1, 1),
(43, 1, 4, 1, 1, 1, 1),
(44, 1, 5, 1, 1, 1, 1),
(45, 1, 6, 1, 1, 1, 1),
(46, 1, 7, 1, 1, 1, 1),
(47, 1, 8, 1, 1, 1, 1),
(48, 1, 9, 1, 1, 1, 1),
(49, 1, 10, 1, 1, 1, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_adminitrativo`
--

CREATE TABLE `personal_adminitrativo` (
  `personal_id` bigint(20) NOT NULL,
  `nombre_personal` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `apellido_personal` text COLLATE utf8mb4_swedish_ci NOT NULL,
  `nacionalidad_personal` varchar(10) COLLATE utf8mb4_swedish_ci NOT NULL DEFAULT 'V-',
  `cedula_personal` int(11) NOT NULL,
  `telefono_personal` bigint(20) NOT NULL,
  `correo_personal` varchar(256) COLLATE utf8mb4_swedish_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `personal_adminitrativo`
--

INSERT INTO `personal_adminitrativo` (`personal_id`, `nombre_personal`, `apellido_personal`, `nacionalidad_personal`, `cedula_personal`, `telefono_personal`, `correo_personal`) VALUES
(1, 'Jose', 'Gutierrez', 'V-', 14925414, 2124215678, 'jose@example.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `rol`
--

CREATE TABLE `rol` (
  `id_rol` bigint(20) NOT NULL,
  `nombre_rol` varchar(50) COLLATE utf8mb4_swedish_ci NOT NULL,
  `descripcion` varchar(100) COLLATE utf8mb4_swedish_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `rol`
--

INSERT INTO `rol` (`id_rol`, `nombre_rol`, `descripcion`, `status`) VALUES
(1, 'Administrador', 'Administrador', 1),
(2, 'Directora', 'Directora', 1),
(3, 'Docente', 'Docente de aula', 1),
(4, 'Personal administrativo', 'Personal administrativo', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `seccion`
--

CREATE TABLE `seccion` (
  `id_seccion` bigint(20) NOT NULL,
  `desc_seccion_id` bigint(20) DEFAULT NULL,
  `docente_id` bigint(20) DEFAULT NULL,
  `periodo_escolar` varchar(226) COLLATE utf8mb4_swedish_ci DEFAULT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `seccion`
--

INSERT INTO `seccion` (`id_seccion`, `desc_seccion_id`, `docente_id`, `periodo_escolar`, `status`) VALUES
(1, 3, 1, '2023-2024', 1),
(2, 4, 2, '2023-2024', 1),
(3, 5, 3, '2023-2024', 1),
(5, 15, NULL, '1', 1),
(6, 16, NULL, '1', 1),
(7, 17, 5, '2023-2024', 1),
(8, 18, 4, '2023-2024', 1),
(11, 9, 2, '2022-2023', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `turno`
--

CREATE TABLE `turno` (
  `id_turno` bigint(20) NOT NULL,
  `nombre_turno` text COLLATE utf8mb4_swedish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_swedish_ci;

--
-- Volcado de datos para la tabla `turno`
--

INSERT INTO `turno` (`id_turno`, `nombre_turno`) VALUES
(1, 'Diurno'),
(2, 'Vespertino');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` bigint(20) NOT NULL,
  `cedula` varchar(30) COLLATE utf8_swedish_ci NOT NULL,
  `nombres` varchar(80) COLLATE utf8_swedish_ci NOT NULL,
  `apellidos` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `telefono` varchar(20) COLLATE utf8_swedish_ci NOT NULL,
  `email_user` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `password` varchar(75) COLLATE utf8_swedish_ci NOT NULL,
  `token` varchar(100) COLLATE utf8_swedish_ci NOT NULL,
  `rol_id` bigint(20) NOT NULL,
  `datecreated` datetime NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_swedish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id_usuario`, `cedula`, `nombres`, `apellidos`, `telefono`, `email_user`, `password`, `token`, `rol_id`, `datecreated`, `status`) VALUES
(1, 'V-24723325', 'Josue Sebastian', 'Hernandez Barrera', '0424-2029800', '7396davidrbh@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 1, '2022-07-23 19:51:47', 1),
(2, 'V-14909718', 'Analix Dubraska', 'Hernandez Deyan', '0424-1697285', 'analix@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', 'b82c33bd7a7f6812facf-4419b02e4616b610625a-d4990f15b14a7dfe1fff-5ad55286698f85cdd', 2, '2022-07-24 21:14:03', 1),
(9, 'V-3250811', 'Jildry', 'Marquez', '0212-8993222', 'mjildry23@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 1, '2022-07-28 00:21:58', 1),
(10, 'V-13528981', 'Richard', 'Parra', '0424-2939291', 'richard66np@gmail.com', '8d969eef6ecad3c29a3a629280e686cf0c3f5d5a86aff3ca12020c923adc6c92', '', 1, '2022-08-04 20:21:49', 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `aula`
--
ALTER TABLE `aula`
  ADD PRIMARY KEY (`id_aula`);

--
-- Indices de la tabla `desc_seccion`
--
ALTER TABLE `desc_seccion`
  ADD PRIMARY KEY (`id_desc_seccion`),
  ADD KEY `aula_id` (`aula_id`),
  ADD KEY `turno_id` (`turno_id`);

--
-- Indices de la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD PRIMARY KEY (`id_docentes`),
  ADD KEY `especialidad_id` (`especialidad_id`);

--
-- Indices de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  ADD PRIMARY KEY (`id_especialidad`);

--
-- Indices de la tabla `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id_estado`);

--
-- Indices de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD PRIMARY KEY (`id_estudiante`),
  ADD KEY `estado_id` (`estado_id`),
  ADD KEY `seccion_id` (`seccion_id`);

--
-- Indices de la tabla `estudiantes_inicial`
--
ALTER TABLE `estudiantes_inicial`
  ADD PRIMARY KEY (`inicial_id`),
  ADD KEY `estado_id` (`estado_id`),
  ADD KEY `seccion_id` (`seccion_id`),
  ADD KEY `estado_madre_id` (`estado_madre_id`),
  ADD KEY `estado_id_padre` (`estado_padre_id`),
  ADD KEY `estado_padre_id` (`estado_padre_id`);

--
-- Indices de la tabla `modulos`
--
ALTER TABLE `modulos`
  ADD PRIMARY KEY (`id_modulo`);

--
-- Indices de la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD PRIMARY KEY (`id_permisos`),
  ADD KEY `rol_id` (`rol_id`),
  ADD KEY `modulo_id` (`modulo_id`);

--
-- Indices de la tabla `personal_adminitrativo`
--
ALTER TABLE `personal_adminitrativo`
  ADD PRIMARY KEY (`personal_id`);

--
-- Indices de la tabla `rol`
--
ALTER TABLE `rol`
  ADD PRIMARY KEY (`id_rol`);

--
-- Indices de la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD PRIMARY KEY (`id_seccion`),
  ADD KEY `desc_seccion_id` (`desc_seccion_id`),
  ADD KEY `docente_id` (`docente_id`);

--
-- Indices de la tabla `turno`
--
ALTER TABLE `turno`
  ADD PRIMARY KEY (`id_turno`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`),
  ADD KEY `rol_id` (`rol_id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `aula`
--
ALTER TABLE `aula`
  MODIFY `id_aula` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `desc_seccion`
--
ALTER TABLE `desc_seccion`
  MODIFY `id_desc_seccion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de la tabla `docentes`
--
ALTER TABLE `docentes`
  MODIFY `id_docentes` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `especialidad`
--
ALTER TABLE `especialidad`
  MODIFY `id_especialidad` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `estado`
--
ALTER TABLE `estado`
  MODIFY `id_estado` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  MODIFY `id_estudiante` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `estudiantes_inicial`
--
ALTER TABLE `estudiantes_inicial`
  MODIFY `inicial_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `modulos`
--
ALTER TABLE `modulos`
  MODIFY `id_modulo` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `permisos`
--
ALTER TABLE `permisos`
  MODIFY `id_permisos` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT de la tabla `personal_adminitrativo`
--
ALTER TABLE `personal_adminitrativo`
  MODIFY `personal_id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `rol`
--
ALTER TABLE `rol`
  MODIFY `id_rol` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `seccion`
--
ALTER TABLE `seccion`
  MODIFY `id_seccion` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `turno`
--
ALTER TABLE `turno`
  MODIFY `id_turno` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `desc_seccion`
--
ALTER TABLE `desc_seccion`
  ADD CONSTRAINT `desc_seccion_ibfk_1` FOREIGN KEY (`turno_id`) REFERENCES `turno` (`id_turno`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `desc_seccion_ibfk_2` FOREIGN KEY (`aula_id`) REFERENCES `aula` (`id_aula`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `docentes`
--
ALTER TABLE `docentes`
  ADD CONSTRAINT `docentes_ibfk_1` FOREIGN KEY (`especialidad_id`) REFERENCES `especialidad` (`id_especialidad`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiantes`
--
ALTER TABLE `estudiantes`
  ADD CONSTRAINT `estudiantes_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_ibfk_2` FOREIGN KEY (`seccion_id`) REFERENCES `seccion` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `estudiantes_inicial`
--
ALTER TABLE `estudiantes_inicial`
  ADD CONSTRAINT `estudiantes_inicial_ibfk_1` FOREIGN KEY (`estado_id`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_inicial_ibfk_2` FOREIGN KEY (`seccion_id`) REFERENCES `seccion` (`id_seccion`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_inicial_ibfk_3` FOREIGN KEY (`estado_madre_id`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `estudiantes_inicial_ibfk_4` FOREIGN KEY (`estado_padre_id`) REFERENCES `estado` (`id_estado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `permisos`
--
ALTER TABLE `permisos`
  ADD CONSTRAINT `permisos_ibfk_2` FOREIGN KEY (`modulo_id`) REFERENCES `modulos` (`id_modulo`),
  ADD CONSTRAINT `permisos_ibfk_3` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `seccion`
--
ALTER TABLE `seccion`
  ADD CONSTRAINT `seccion_ibfk_1` FOREIGN KEY (`docente_id`) REFERENCES `docentes` (`id_docentes`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seccion_ibfk_2` FOREIGN KEY (`desc_seccion_id`) REFERENCES `desc_seccion` (`id_desc_seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD CONSTRAINT `usuario_ibfk_1` FOREIGN KEY (`rol_id`) REFERENCES `rol` (`id_rol`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
