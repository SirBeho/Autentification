-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 28-07-2023 a las 14:56:05
-- Versión del servidor: 8.0.31
-- Versión de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `autentificacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

DROP TABLE IF EXISTS `usuario`;
CREATE TABLE IF NOT EXISTS `usuario` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `bio` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci,
  `phone` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `unique_email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `name`, `email`, `password`, `bio`, `phone`) VALUES
(1, 'Benjamin Tavarez', 'benjamin.tavarez@gmail.com', '$2y$10$ojaIjDMciOyUF9TxcbqxmuVJO5GDUexL4OqRQrXicsbnhQ4eT351m', 'Soy Ingeniero en Sistemas Computacionales, especializado en desarrollo web full stack y aplicaciones. Estoy capacitado para ofrecer soluciones atractivas y funcionales desde la concepción hasta la implementación de proyectos. Tengo experiencia en el manejo de bases de datos y conocimientos afines al área de desarrollo de aplicaciones. Si buscas un colaborador comprometido y confiable para el éxito de tus proyectos tecnológicos, no dudes en contactarme. Estoy entusiasmado por contribuir con mis habilidades y conocimientos.', '8098892235'),
(2, 'Harold Carazas', 'harold.carazas@gmail.com', '$2y$10$EI4oe9RIgzm7QG76kkHiEuSROISOnuolhAPgwFSTZH68ulpfpL5Ba', 'Soy Harol, tengo 21 años, soy de peru y me gustan los gatitos. \r\nSoy Web Developer Full Stack 5 años de experiencia y actualmente trabajo como maestro en funval impartiendo la misma vocación.', '8098892233');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
