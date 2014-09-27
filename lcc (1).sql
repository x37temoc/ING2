-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-09-2014 a las 22:55:31
-- Versión del servidor: 5.6.16
-- Versión de PHP: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `lcc`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clase`
--

CREATE TABLE IF NOT EXISTS `clase` (
  `nombre` varchar(40) NOT NULL,
  `instructor` varchar(40) NOT NULL,
  `horario` varchar(40) NOT NULL,
  `descripcion` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clase`
--

INSERT INTO `clase` (`nombre`, `instructor`, `horario`, `descripcion`) VALUES
('adas', 'kkk', 'mmm', 'mm'),
('adas', 'kkk', 'mmm', 'mm'),
('Ing. Software', 'Juan Pablo', 'lun-meir-jue 10:00am-11:00am', 'Es una super materia bien cool'),
('prueba', 'prueba', 'prueba', 'prueba'),
('prueba', 'prueba', 'prueba', 'prueba'),
('prueba', 'prueba', 'prueba', 'prueba');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `matricula` varchar(30) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `admin` int(11) NOT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`matricula`, `pass`, `email`, `admin`) VALUES
('a212209119', 'YWxnbw==', '', 1),
('aaaa', 'YWxnbzI=', 'algo@aaa', 0),
('algo', 'YWxnbw==', 'algo@algo', 0),
('eit', 'ZWl0', 'algo@algo', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
