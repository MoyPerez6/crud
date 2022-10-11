-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-10-2022 a las 21:34:23
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pruebas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `disfraz`
--

CREATE TABLE `disfraz` (
  `Modelo_Disfraz` varchar(5) NOT NULL,
  `Nombre` varchar(20) NOT NULL,
  `Talla` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `disfraz`
--

INSERT INTO `disfraz` (`Modelo_Disfraz`, `Nombre`, `Talla`) VALUES
('M1001', 'Leon', 'Chica'),
('M1002', 'Tigre', 'Grande'),
('M1003', 'Abeja', 'Grande'),
('M1004', 'Zombie', 'Chica'),
('M1005', 'Vampiro', 'Grande');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `disfraz`
--
ALTER TABLE `disfraz`
  ADD PRIMARY KEY (`Modelo_Disfraz`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
