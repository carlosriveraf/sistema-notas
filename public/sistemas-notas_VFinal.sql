-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-08-2020 a las 09:10:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sistemas-notasv2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `alumno-curso`
--

CREATE TABLE `alumno-curso` (
  `DNI_ALUMNO` varchar(8) NOT NULL,
  `ID_CURSO` varchar(8) NOT NULL,
  `nota` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `asistencia`
--

CREATE TABLE `asistencia` (
  `DNI` varchar(8) NOT NULL,
  `fecha` date NOT NULL,
  `estado` tinyint(1) NOT NULL,
  `observacion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `curso`
--

CREATE TABLE `curso` (
  `ID` varchar(8) NOT NULL,
  `salon_grado` int(1) NOT NULL,
  `fechaInicio` datetime NOT NULL,
  `fechaFin` datetime NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `salon_seccion` char(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `DNI` varchar(8) NOT NULL,
  `contraseña` varchar(45) NOT NULL,
  `apellidoPaterno` varchar(45) NOT NULL,
  `apellidoMaterno` varchar(45) NOT NULL,
  `nombres` varchar(45) NOT NULL,
  `fechaNacimiento` date NOT NULL,
  `sexo` char(1) NOT NULL,
  `telefono` varchar(9) NOT NULL,
  `celular` varchar(9) NOT NULL,
  `correo` varchar(60) NOT NULL,
  `direccion` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios`
--

CREATE TABLE `privilegios` (
  `ID` int(11) NOT NULL,
  `nombre_privilegio` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `privilegios-roles`
--

CREATE TABLE `privilegios-roles` (
  `ID_Rol` int(11) NOT NULL,
  `ID_Privilegio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `profesor-curso`
--

CREATE TABLE `profesor-curso` (
  `DNI` varchar(8) NOT NULL,
  `ID` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `ID` int(11) NOT NULL,
  `nombre_rol` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `salon`
--

CREATE TABLE `salon` (
  `grado` int(1) NOT NULL,
  `seccion` char(1) NOT NULL,
  `DNI_ADMIN` varchar(8) NOT NULL,
  `nivel` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID_DNI` varchar(8) NOT NULL,
  `ID_ROL` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `alumno-curso`
--
ALTER TABLE `alumno-curso`
  ADD PRIMARY KEY (`DNI_ALUMNO`,`ID_CURSO`),
  ADD KEY `fk_id_curso` (`ID_CURSO`);

--
-- Indices de la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD PRIMARY KEY (`DNI`,`fecha`);

--
-- Indices de la tabla `curso`
--
ALTER TABLE `curso`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `fk_seccion_grado` (`salon_grado`,`salon_seccion`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`DNI`);

--
-- Indices de la tabla `privilegios`
--
ALTER TABLE `privilegios`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `privilegios-roles`
--
ALTER TABLE `privilegios-roles`
  ADD PRIMARY KEY (`ID_Rol`,`ID_Privilegio`),
  ADD KEY `fk_id_privilegio` (`ID_Privilegio`);

--
-- Indices de la tabla `profesor-curso`
--
ALTER TABLE `profesor-curso`
  ADD PRIMARY KEY (`DNI`,`ID`),
  ADD KEY `fk_id_curso2` (`ID`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `salon`
--
ALTER TABLE `salon`
  ADD PRIMARY KEY (`grado`,`seccion`),
  ADD KEY `salon_ibfk_1` (`DNI_ADMIN`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID_DNI`,`ID_ROL`),
  ADD KEY `fk_id_rol` (`ID_ROL`);

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `alumno-curso`
--
ALTER TABLE `alumno-curso`
  ADD CONSTRAINT `dk_id_curso` FOREIGN KEY (`ID_CURSO`) REFERENCES `curso` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_dni_alumno` FOREIGN KEY (`DNI_ALUMNO`) REFERENCES `persona` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `asistencia`
--
ALTER TABLE `asistencia`
  ADD CONSTRAINT `fk_dni_alumno_asist` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `curso`
--
ALTER TABLE `curso`
  ADD CONSTRAINT `fk_grado_seccion` FOREIGN KEY (`salon_grado`,`salon_seccion`) REFERENCES `salon` (`grado`, `seccion`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `privilegios-roles`
--
ALTER TABLE `privilegios-roles`
  ADD CONSTRAINT `fk_id_privilegio` FOREIGN KEY (`ID_Privilegio`) REFERENCES `privilegios` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_rol2` FOREIGN KEY (`ID_Rol`) REFERENCES `roles` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `profesor-curso`
--
ALTER TABLE `profesor-curso`
  ADD CONSTRAINT `fk_id_curso2` FOREIGN KEY (`ID`) REFERENCES `curso` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_dni_profesor` FOREIGN KEY (`DNI`) REFERENCES `persona` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `salon`
--
ALTER TABLE `salon`
  ADD CONSTRAINT `fk_dni_administrador` FOREIGN KEY (`DNI_ADMIN`) REFERENCES `persona` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `fk_id_dni_persona` FOREIGN KEY (`ID_DNI`) REFERENCES `persona` (`DNI`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_id_rol` FOREIGN KEY (`ID_ROL`) REFERENCES `roles` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
