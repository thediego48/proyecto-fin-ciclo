-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-05-2022 a las 13:22:43
-- Versión del servidor: 10.4.21-MariaDB
-- Versión de PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `realyachtrental`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(20) NOT NULL,
  `nombre` char(50) COLLATE utf8mb4_spanish_ci NOT NULL,
  `apellidos` char(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `email` char(100) COLLATE utf8mb4_spanish_ci NOT NULL,
  `telefono` int(10) NOT NULL,
  `contrasena` char(25) COLLATE utf8mb4_spanish_ci NOT NULL,
  `dni` char(10) COLLATE utf8mb4_spanish_ci NOT NULL,
  `direccion` char(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `trabajo` char(200) COLLATE utf8mb4_spanish_ci NOT NULL,
  `ingresos` char(15) COLLATE utf8mb4_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombre`, `apellidos`, `email`, `telefono`, `contrasena`, `dni`, `direccion`, `trabajo`, `ingresos`) VALUES
(2, 'Diego', 'Real', 'diego@diego.es', 664454123, 'abc123', '34279915w', 'calle loca', 'loco', '15000'),
(3, 'Diego', 'Lopez Fernandez', 'lp@lp.es', 664454951, 'abc123', '342755441w', 'calle triste', 'ingeniero', '15000'),
(4, 'prueba', 'prueba2', 'lp@lpp.es', 645784123, 'abc123', '334455127', 'calle o', 'jaja', '121212'),
(5, 'Paco', 'Perez', 'paco@paco.es', 664454941, 'abc123', '3344556699', 'calle locura', 'paco', '12000'),
(6, 'juan', 'rodriguez', 'juan@juan.es', 654321789, 'abc12', '33664411d', 'calle de juan', '', ''),
(10, 'Diegote', 'Locura', 'thediego48@gmail.com', 654258456, 'abc123', '34279955w', 'Calle pelo', 'jaja', '112123');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nombre` (`nombre`),
  ADD KEY `email` (`email`),
  ADD KEY `apellidos` (`apellidos`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
