-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-02-2014 a las 00:31:09
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `catalogacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tblusuarios`
--

CREATE TABLE IF NOT EXISTS `tblusuarios` (
  `id_usuario` int(11) NOT NULL,
  `intEstado` int(11) NOT NULL,
  `correo` varchar(25) NOT NULL,
  `nombre` char(30) NOT NULL,
  `password` varchar(8) NOT NULL,
  `usuario` varchar(8) NOT NULL,
  `altas` tinyint(1) NOT NULL,
  `bajas` tinyint(1) NOT NULL,
  `modificaciones` tinyint(1) NOT NULL,
  `consultas` tinyint(1) NOT NULL,
  `descargas` tinyint(1) NOT NULL,
  `registro` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tblusuarios`
--

INSERT INTO `tblusuarios` (`id_usuario`, `intEstado`, `correo`, `nombre`, `password`, `usuario`, `altas`, `bajas`, `modificaciones`, `consultas`, `descargas`, `registro`) VALUES
(0, 1, 'alvaro@tv.com', 'alvaro', 'alvaro', 'alvaro', 1, 1, 1, 1, 1, 1),
(1, 1, 'uva@jojo.com', 'uva', 'uva', 'uva', 1, 1, 1, 1, 1, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
