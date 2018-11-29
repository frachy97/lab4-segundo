-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 29-10-2018 a las 22:29:39
-- Versión del servidor: 5.5.24-log
-- Versión de PHP: 5.4.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--

--

DROP DATABASE IF EXISTS parcial;
CREATE DATABASE parcial;
use parcial;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artists`
--

CREATE TABLE IF NOT EXISTS `mechanics` (
  `id_mechanic` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL,
  PRIMARY KEY (`id_mechanic`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Volcado de datos para la tabla `real_estates`
--

INSERT INTO `mechanics` (`id_mechanic`, `email`, `password`) VALUES
(1, 'mechanic@gmail', 'mechanic'),
(2,'mechanic2@gmail', '12345' );



-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users
--

CREATE TABLE IF NOT EXISTS `services` (
  `id_service` int(11) NOT NULL AUTO_INCREMENT,
  `client` int(11) NOT NULL,
  `brand` varchar(60) NOT NULL,
  `model` varchar(60) NOT NULL,
  `patent` varchar(60) NOT NULL,
  `description` varchar(100) NOT NULL,
  `price` int(11) NOT NULL,
  `state` varchar(60) NOT NULL,
  `msg` varchar(60) NOT NULL,
  PRIMARY KEY (`id_service`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------


INSERT INTO `services` (`id_service`, `client`, `brand`, `model`, `patent`, `description`,`price`, `state`, `msg`) VALUES
(1,404024923, 'Ford', 'K','asd123','Sacar abolladura puerta izquierda', 400, 'en espera','msg1'),
(2,404024924, 'Toyota', 'Corola', 'qwe123','Cambiar cerradura', 800, 'en espera', 'msg2');



