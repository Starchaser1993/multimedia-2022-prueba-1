-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:3306
-- Tiempo de generación: 01-10-2022 a las 08:52:51
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `multimedia_prueba_1`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `Titulo` varchar(100) NOT NULL,
  `Cuerpo` varchar(1000) NOT NULL,
  `Categoria` varchar(100) NOT NULL,
  `imagen` varchar(1000) NOT NULL,
  `Autor` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `noticia`
--

INSERT INTO `noticia` (`id`, `Titulo`, `Cuerpo`, `Categoria`, `imagen`, `Autor`) VALUES
(1, 'el pollo', 'los pollos fritos xdxd xd xd xd xd xd x d xd d x dx d ', 'los pollos', '', 'el pollito'),
(2, 'el pollo', 'los pollos fritos xdxd xd xd xd xd xd x d xd d x dx d ', 'los pollos', 'imagenes/01-10-202206-55-48_2127.png', 'el pollito'),
(3, 'los pollitos dicen', 'pio pio pio, cuando tienen hambre y cuando tienen frío', 'comida', 'imagenes/01-10-202206-56-39_8137.png', 'el pollito'),
(4, 'los pollitos dicen', 'pio pio pio, cuando tienen hambre y cuando tienen frío', 'comida', 'imagenes/01-10-202206-58-29_2230.png', 'el pollito'),
(5, 'el gato', 'el pollo', 'gato ', 'imagenes/01-10-202207-03-39_1415.png', 'el pollito'),
(6, 'el gato', 'el pollo', 'gato ', 'imagenes/01-10-202207-10-49_6143.png', 'el pollito'),
(7, 'el gato', 'miau miau miau', 'comida', 'imagenes/01-10-202207-11-19_5231.png', 'el pollito'),
(8, 'Suben de precio las gpu', 'Los ensambladores no quieren perder dinero, el precio de las GPUs aumentará. Según los últimos rumores de la industria, los precios de las GPUs comenzarían a estabilizarse en breve e incluso aumentar en un futuro cercano.', 'computacion', 'imagenes/01-10-202207-49-57_5867.jpg', 'el pollito'),
(9, 'Suben de precio las gpu', 'Los ensambladores no quieren perder dinero, el precio de las GPUs aumentará. Según los últimos rumores de la industria, los precios de las GPUs comenzarían a estabilizarse en breve e incluso aumentar en un futuro cercano.', 'computacion', 'imagenes/01-10-202207-50-56_1819.jpg', 'el pollito'),
(10, 'Suben de precio las gpu', 'estan caras', 'computacion', 'imagenes/01-10-202207-54-34_4883.jpg', 'el pollito');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
