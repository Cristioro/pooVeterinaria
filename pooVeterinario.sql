-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-09-2024 a las 05:48:40
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
-- Base de datos: `pooVeterinario`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Mascotas`
--

CREATE TABLE `Mascotas` (
  `IdMascota` int(11) NOT NULL,
  `Documento` varchar(20) NOT NULL,
  `NombreDueño` varchar(60) NOT NULL,
  `ApellidoDueño` varchar(60) NOT NULL,
  `Telefono` varchar(12) DEFAULT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Especie` varchar(60) NOT NULL,
  `Raza` varchar(20) NOT NULL,
  `Sexo` varchar(6) NOT NULL,
  `Edad` int(11) NOT NULL,
  `Peso` float NOT NULL,
  `Razon`varchar(100) NOT NULL,
  `Fecha` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `Mascotas`
--

INSERT INTO `Mascotas` (
  `IdMascota`,
  `Documento`,
  `NombreDueño`,
  `ApellidoDueño`,
  `Telefono`,
  `Nombre`,
  `Especie`,
  `Raza`,
  `Sexo`,
  `Edad`,
  `Peso`,
  `Razon`,
  `Fecha`
) VALUES(
  1,
  '33333333',
  'Pepito',
  'Perez',
  '5555555',
  'Copo',
  'Perro',
  'Bichon Maltes',
  'Macho',
  4,
  3,
  'Vacunación',
  '2024-09-12 22:40:55'
);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Mascotas`
--
ALTER TABLE `Mascotas`
  ADD PRIMARY KEY (`IdMascota`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Mascotas`
--
ALTER TABLE `Mascotas`
  MODIFY `IdMascota` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
