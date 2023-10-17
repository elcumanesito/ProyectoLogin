-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-10-2023 a las 05:27:58
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `login_db`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `correo` varchar(200) DEFAULT NULL,
  `contrasena` varchar(250) DEFAULT NULL,
  `imagen` longblob DEFAULT NULL,
  `nombre` varchar(200) DEFAULT NULL,
  `tlf` varchar(40) DEFAULT NULL,
  `bio` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `correo`, `contrasena`, `imagen`, `nombre`, `tlf`, `bio`) VALUES
(1, 'admin@admin.com', '$2y$10$CIxEef4XcZoPKpDiCMPbpebhKl6qUpsGL60MeE9Zan28MgAGjZsPi', NULL, 'Holis', '', ''),
(2, 'test@test.com', '$2y$10$95whssaYcucFkDBv8L18Su5OktyzUvp9DRwSootRpzO8IAfP9E2gW', NULL, 'Holis', NULL, NULL),
(4, 'probando@gmail.com', '$2y$10$70S52Tb5b1pkqd8oSAXPV.tzyFH0ZzBXGdd4yNOIxml6eEVl6Yrh.', NULL, NULL, NULL, NULL),
(5, 'daniel@gmail.com', '$2y$10$gPoLAiUCzXd7d2oziggs0.CNPQ1cuFlioW5DDPNbso7lZ2dKy5th.', NULL, 'Daniel', '', ''),
(7, 'josefina@gmail.com', '$2y$10$LEbBQUGFcY0mpB5RfoaAGO/C0i586xUTxcPdSU8Y7Dn7iTcJ802fi', NULL, 'josefina', '', '');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
