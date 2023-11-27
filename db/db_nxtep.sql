-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 27-11-2023 a las 01:47:45
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
-- Base de datos: `db_nxtep`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_areas`
--

CREATE TABLE `tbl_areas` (
  `id_area` int(11) NOT NULL,
  `descripcion_area` varchar(100) DEFAULT NULL,
  `title_area` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_boletin`
--

CREATE TABLE `tbl_boletin` (
  `id` int(11) NOT NULL,
  `correo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_boletin`
--

INSERT INTO `tbl_boletin` (`id`, `correo`) VALUES
(14, '¿'),
(15, 'x');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_mentores`
--

CREATE TABLE `tbl_mentores` (
  `id` int(11) NOT NULL,
  `nombres` varchar(100) DEFAULT NULL,
  `apellidos` varchar(100) DEFAULT NULL,
  `precio` varchar(50) DEFAULT NULL,
  `estrellas` varchar(50) DEFAULT NULL,
  `cargo` varchar(100) DEFAULT NULL,
  `empresa` varchar(100) DEFAULT NULL,
  `linkedin` varchar(100) DEFAULT NULL,
  `experiencia` varchar(100) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `tema` varchar(50) DEFAULT NULL,
  `img_perfil` varchar(100) DEFAULT NULL,
  `img_logo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tbl_mentores`
--

INSERT INTO `tbl_mentores` (`id`, `nombres`, `apellidos`, `precio`, `estrellas`, `cargo`, `empresa`, `linkedin`, `experiencia`, `area`, `tema`, `img_perfil`, `img_logo`) VALUES
(9, 'Carlos Smith', 'Martinez Meneses', '150', '10', 'Front End', 'Contrans', 'https://www.linkedin.com/in/carlos-martinez-meneses/', '4', '1', NULL, 'uploads/carlos.png', 'uploads/65616f7dd797c_image_15.png'),
(10, 'Maria', 'Meneses', '150', '10', 'Marketing', 'EBIZ', 'link Linkedin', '2', '2', NULL, 'uploads/65629c4168576_unsplash_cEnSr1WRHUY.png', 'uploads/65629c4168678_image_15.png'),
(22, 'Mathias', 'Martinez', '200', '10', 'Analista de Sistemas', 'EBIZ', 'Link', '5', '3', NULL, 'uploads/6563b1722b587_unsplash_cEnSr1WRHUY.png', 'uploads/6563b1722b58d_image_15.png'),
(23, 'cc', 'Martinez', '200', '10', 'Analista de Sistemas', 'EBIZ', 'Link', '5', '4', NULL, 'uploads/6563b1722b587_unsplash_cEnSr1WRHUY.png', 'uploads/6563b1722b58d_image_15.png'),
(24, 'vv', 'Martinez', '200', '10', 'Analista de Sistemas', 'EBIZ', 'Link', '5', '5', NULL, 'uploads/6563b1722b587_unsplash_cEnSr1WRHUY.png', 'uploads/6563b1722b58d_image_15.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tbl_temas`
--

CREATE TABLE `tbl_temas` (
  `id_tema` int(11) NOT NULL,
  `descripcion_tema` varchar(100) DEFAULT NULL,
  `title_tema` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tbl_areas`
--
ALTER TABLE `tbl_areas`
  ADD PRIMARY KEY (`id_area`);

--
-- Indices de la tabla `tbl_boletin`
--
ALTER TABLE `tbl_boletin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_mentores`
--
ALTER TABLE `tbl_mentores`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tbl_temas`
--
ALTER TABLE `tbl_temas`
  ADD PRIMARY KEY (`id_tema`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tbl_areas`
--
ALTER TABLE `tbl_areas`
  MODIFY `id_area` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tbl_boletin`
--
ALTER TABLE `tbl_boletin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `tbl_mentores`
--
ALTER TABLE `tbl_mentores`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `tbl_temas`
--
ALTER TABLE `tbl_temas`
  MODIFY `id_tema` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
