-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 02-12-2016 a las 10:53:05
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `instituto`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ciclos`
--

CREATE TABLE `ciclos` (
  `idciclo` int(11) NOT NULL,
  `titulo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ciclos`
--

INSERT INTO `ciclos` (`idciclo`, `titulo`) VALUES
(1, 'APLICACIONES WEB'),
(2, 'CUIDADOS AUXILIARES ENFERMERIA'),
(3, 'SOLDADURA'),
(4, 'MECATRONICA INDUSTRIAL'),
(5, 'CONSTRUCCIONES MECANICAS'),
(6, 'ACTIVIDADES COMERCIALES');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ikasleak`
--

CREATE TABLE `ikasleak` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `apellido1` varchar(50) NOT NULL,
  `apellido2` varchar(50) NOT NULL,
  `ciclo` varchar(50) NOT NULL,
  `curso` varchar(50) NOT NULL,
  `seleccionado` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ikasleak`
--

INSERT INTO `ikasleak` (`id`, `nombre`, `apellido1`, `apellido2`, `ciclo`, `curso`, `seleccionado`) VALUES
(1, 'ANITA', 'ANSOLA', 'BARTET', 'APLICACIONES WEB', 'primero', 'false'),
(2, 'SARA', 'ANSUATEGI', 'ETXABE', 'APLICACIONES WEB', 'primero', 'false'),
(3, 'MIKEL', 'BERNEDO', 'ASTOLAZA', 'CUIDADOS AUXILIARES ENFERMERIA', 'segundo', 'false'),
(4, 'ENEKO', 'ARRIETA', 'GABIOLA', 'APLICACIONES WEB', 'primero', 'false'),
(5, 'MIREN', 'BALZATEGI', 'ZUMELAGA', 'CUIDADOS AUXILIARES ENFERMERIA', 'segundo', 'false'),
(6, 'ASIER', 'ETXEANDIA', 'RASIER', 'SOLDADURA', 'segundo', 'false'),
(7, 'asdf', 'asdf', 'asdf', '', '', ''),
(8, 'n8', 'ap18', 'ap28', '', '', ''),
(9, 'n9', 'ap19', 'ap29', '', '', ''),
(10, 'n10', 'ap110', 'ap210', '', '', ''),
(11, 'n11', 'ap111', 'ap211', '', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `ciclos`
--
ALTER TABLE `ciclos`
  ADD PRIMARY KEY (`idciclo`);

--
-- Indices de la tabla `ikasleak`
--
ALTER TABLE `ikasleak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `ikasleak`
--
ALTER TABLE `ikasleak`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
