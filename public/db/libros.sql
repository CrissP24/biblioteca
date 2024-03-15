-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-02-2024 a las 22:27:27
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `libros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `info_libros`
--

CREATE TABLE `info_libros` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `autores` varchar(200) NOT NULL,
  `fecha_publicacion` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `info_libros`
--

INSERT INTO `info_libros` (`id`, `titulo`, `autores`, `fecha_publicacion`) VALUES
(1, 'Medicina interna ambulatoria', 'Thomas M. De Ferr', '2016-03-28'),
(2, 'Medicina interna calculos, scores y abordajes', 'Sergio A. Bartolomei', '2010-06-03'),
(3, 'Algoritmo clinicos en medicina', 'Antonio Yusta Izquierdo', '2009-07-12'),
(4, 'Anatomía humana', 'Fernando Quiroz', '2006-01-23'),
(5, 'Enferpedia . técnicas y procedimientos de enfermería', 'SERGIO GALARRETA APERTE', '2018-04-18'),
(6, 'Manual práctico de instrumentación quirúrgica en enfermería', 'Begoña Basozabal Zamakona, Angeles Durán Díaz de Real', '2003-11-02'),
(7, 'Manual de farmacología práctica', 'Sergio Alberto Viruete Cisneros', '2015-04-06'),
(8, 'Enfermeria y cuidados intesivos', 'Yessenia Paulina Benites Beltran', '2021-01-04'),
(9, 'Fundamentos de enfermeria', 'Rosa del Rocio Pinargote Chancay', '2018-06-26'),
(10, 'Principios de anatomìa y fisiologia humana', 'Gerard J. Tortora', '2011-07-12');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `info_libros`
--
ALTER TABLE `info_libros`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `info_libros`
--
ALTER TABLE `info_libros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
