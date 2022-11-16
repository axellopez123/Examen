-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2022 at 10:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `examen`
--

-- --------------------------------------------------------

--
-- Table structure for table `todo`
--

CREATE TABLE `todo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `descripcion` varchar(254) NOT NULL,
  `area` varchar(30) NOT NULL,
  `estatus` enum('completados','pendientes') NOT NULL,
  `fecha_registro` datetime NOT NULL,
  `deleted` tinyint(1) NOT NULL DEFAULT 0,
  `fecha_actualizacion` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todo`
--

INSERT INTO `todo` (`id`, `nombre`, `descripcion`, `area`, `estatus`, `fecha_registro`, `deleted`, `fecha_actualizacion`) VALUES
(1, 'Axel', 'Guapotototeuuuuuuuuu', 'TI', 'completados', '2022-11-16 02:09:18', 0, '2022-11-16 15:04:36'),
(2, 'Axel', 'Guapo', 'TI', 'completados', '2022-11-16 02:13:37', 1, NULL),
(3, 'Axelq', 'Pecas', 'vbhv', 'pendientes', '2022-11-16 02:23:16', 0, NULL),
(4, 'sada', 'dfsf', 'fdsf', 'pendientes', '2022-11-16 02:26:35', 0, NULL),
(5, 'Axel', 'Guapo', 'TI', 'pendientes', '2022-11-16 02:53:29', 0, NULL),
(6, 'Marcos', '1', '1', 'completados', '2022-11-16 02:55:03', 0, NULL),
(7, 'Roman', '2', '2', 'pendientes', '2022-11-16 02:55:14', 0, NULL),
(8, 'dd', 'dd', 'dd', 'completados', '2022-11-16 03:03:09', 0, NULL),
(9, 'ww', 'ww', 'ww', 'pendientes', '2022-11-16 03:03:15', 1, NULL),
(10, 'qq', 'qq', 'qq', 'completados', '2022-11-16 03:03:25', 0, NULL),
(11, 'yy', 'yy', 'yy', 'pendientes', '2022-11-16 03:03:31', 0, NULL),
(12, 'Pablo', 'ddd', 'ww', 'completados', '2022-11-16 03:20:16', 0, NULL),
(13, 'uhjvuhj', 'uvuhv', 'ihvb', 'completados', '2022-11-16 04:36:55', 0, NULL),
(14, 'ihvuh', 'ihbihb', 'jbijkb', 'pendientes', '2022-11-16 04:37:04', 0, NULL),
(15, 'kjbk', 'kbkbk', 'knjnjk', 'completados', '2022-11-16 04:37:14', 0, NULL),
(16, 'alfa', '', 'alfa', 'completados', '2022-11-16 09:14:49', 0, NULL),
(17, 'jhbh', 'hjkbhjkb', 'ihbj', 'pendientes', '2022-11-16 15:14:12', 0, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todo`
--
ALTER TABLE `todo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todo`
--
ALTER TABLE `todo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
