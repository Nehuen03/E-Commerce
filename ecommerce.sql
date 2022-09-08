-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 08-09-2022 a las 23:18:42
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
-- Base de datos: `ecommerce`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(11) NOT NULL,
  `nombre_completo` varchar(100) NOT NULL,
  `correo_electronico` varchar(50) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `contra` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `nombre_completo`, `correo_electronico`, `usuario`, `contra`) VALUES
(2, 'Mateo Peralta', 'mateoperalta2003@outlook.com', 'Mateo', 'Moreno'),
(3, 'mateo', 'mateoperalta2003@outlook.com', 'Mateo', 'Moreno'),
(4, 'Mateo Peralta', 'mateoperalta2003@outlook.com', 'Mateo', 'Moreno'),
(5, 'Mateo Peralta', 'mateoperalta2003@outlook.com', 'Mateo', 'Moreno'),
(6, 'Mateo Peralta', 'mateoperalta2003@outlook.com', 'Mateo', 'Moreno'),
(7, 'Mateo Peralta', 'mateoperalta2003@outlook.com', 'Mateo', 'Moreno'),
(8, 'Mateo Peralta', 'mateoperalta2003@outlook.com', 'Mateo', 'Moreno'),
(9, 'Mateo Peralta', 'Afafgaf@aga.com', 'Mateo', 'Moreno');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
