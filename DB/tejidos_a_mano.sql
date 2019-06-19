-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 16-04-2016 a las 20:00:40
-- Versión del servidor: 5.6.14
-- Versión de PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `tejidos_a_mano`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `consultas`
--

CREATE TABLE IF NOT EXISTS `consultas` (
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `cedula` varchar(20) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `direccion` varchar(220) DEFAULT NULL,
  `consulta` varchar(220) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `consultas`
--

INSERT INTO `consultas` (`nombre`, `apellido`, `cedula`, `telefono`, `email`, `direccion`, `consulta`) VALUES
('Roberto', 'Fernandez', '20697009', '04244679642', 'rober_fcm@hotmail.com', 'prebo', 'quiero mas informacion de productos');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE IF NOT EXISTS `productos` (
  `id` varchar(6) NOT NULL,
  `nombre` varchar(15) DEFAULT NULL,
  `colores` varchar(50) DEFAULT NULL,
  `disponibilidad` varchar(10) DEFAULT NULL,
  `cantidad` decimal(8,0) DEFAULT NULL,
  `tipo` varchar(10) DEFAULT NULL,
  `precio` double(6,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id`, `nombre`, `colores`, `disponibilidad`, `cantidad`, `tipo`, `precio`) VALUES
('1', 'sandalina', 'Blanco, Negro', 'si', '10', 'Sandalia', 350.00),
('10', 'retro', 'Naranja', 'si', '12', 'Sandalia', 410.00),
('2', '3', '4', '5', '6', '7', 8.00),
('25', 'corredor', 'azul', 'si', '15', 'sandalia', 320.00),
('3', 'jakeo', 'Morado', 'si', '5', 'Bolso', 820.00),
('7', 'tiras', 'Marron', 'si', '50', 'Sandalia', 500.00),
('8', 'fashion', 'Amarillo, Naranja, Blanco', 'no', '0', 'Sandalia', 135.00);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE IF NOT EXISTS `usuarios` (
  `usuario` varchar(10) NOT NULL,
  `clave` varchar(8) DEFAULT NULL,
  `nivel` varchar(4) DEFAULT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellido` varchar(20) DEFAULT NULL,
  `cedula` varchar(30) DEFAULT NULL,
  `telefono` varchar(20) DEFAULT NULL,
  `email` varchar(15) DEFAULT NULL,
  `direccion` varchar(30) DEFAULT NULL,
  `genero` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`usuario`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`usuario`, `clave`, `nivel`, `nombre`, `apellido`, `cedula`, `telefono`, `email`, `direccion`, `genero`) VALUES
('diego', '123', '2', 'diego', 'cortes', '14185885', '04121990609', 'diego', 'eltrigal', 'dddddddddd'),
('rober', '2069', '1', 'Roberto ', 'Fernandez', '20697009', '04244679642', 'rober_fcm@horma', 'Prebo', 'Masculino'),
('yisus', '1234', '2', 'Jesus', 'Prieto', '13456789', '04126753564', 'yisus@gmail.com', 'Trigal', 'Masculino');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
