-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 16-09-2018 a las 22:25:15
-- Versión del servidor: 5.7.21
-- Versión de PHP: 7.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `itemerp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `iteminfo`
--

DROP TABLE IF EXISTS `iteminfo`;
CREATE TABLE IF NOT EXISTS `iteminfo` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `itemname` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `iteminfo`
--

INSERT INTO `iteminfo` (`id`, `itemname`, `type`, `description`, `price`) VALUES
(1, 'Disco Duro', 'Dispositivo de almacenamiento', 'Disco duro de 4Tb', 3900),
(5, 'Nintendo Switch', 'Video Console', 'Nintendo Video Console', 18000),
(6, 'Play Station 4', 'Video Console', 'Sony video console', 40000),
(7, 'The Legend of Zelda Breath of the Wild', 'Video Games', 'Nombre: The Legend of Zelda Breath of the Wild\r\nDesarrollador: EAD\r\nEditor: Nintendo', 3600),
(8, 'Xenoblade 2', 'Video Games', 'Nombre: Xenoblade 2            Desarrollador:Monolith Software            Editor: Nintendo', 3600),
(9, 'Pen Drive 34 Gb', 'Dispositivo de Almacenamiento', 'Pen Driver de 34 Gb', 800);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migration_versions`
--

DROP TABLE IF EXISTS `migration_versions`;
CREATE TABLE IF NOT EXISTS `migration_versions` (
  `version` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `migration_versions`
--

INSERT INTO `migration_versions` (`version`) VALUES
('20180903225637'),
('20180909221459');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
