-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 14-09-2024 a las 22:14:43
-- Versión del servidor: 8.0.30
-- Versión de PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `pooveterinario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mascotas`
--

CREATE TABLE `mascotas` (
  `IdMascota` int NOT NULL,
  `Documento` varchar(20) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `NombreDueño` varchar(60) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `ApellidoDueño` varchar(60) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Telefono` varchar(12) COLLATE utf8mb3_spanish2_ci DEFAULT NULL,
  `Nombre` varchar(60) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Especie` varchar(60) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Raza` varchar(20) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Sexo` varchar(6) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Edad` int NOT NULL,
  `Peso` float NOT NULL,
  `Razon` varchar(100) COLLATE utf8mb3_spanish2_ci NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish2_ci;

--
-- Volcado de datos para la tabla `mascotas`
--

INSERT INTO `mascotas` (`IdMascota`, `Documento`, `NombreDueño`, `ApellidoDueño`, `Telefono`, `Nombre`, `Especie`, `Raza`, `Sexo`, `Edad`, `Peso`, `Razon`, `Fecha`) VALUES
(1, '33333333', 'Pepito', 'Perez', '5555555', 'Copo', 'Perro', 'Bichon Maltes', 'Macho', 4, 3, '1', '2024-09-12 22:40:55'),
(3, '101532513', 'Juan', 'Ramirez', '3016854785', 'Princesa', 'Perro', 'PitBull', 'Hembra', 5, 23, '7', '2024-09-14 22:11:10');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  ADD PRIMARY KEY (`IdMascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `mascotas`
--
ALTER TABLE `mascotas`
  MODIFY `IdMascota` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
