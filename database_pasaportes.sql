-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2022 at 09:32 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `database_pasaportes`
--

-- --------------------------------------------------------

--
-- Table structure for table `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(6) NOT NULL,
  `nombres` varchar(50) NOT NULL,
  `apellidos` varchar(50) NOT NULL,
  `nacionalidad` varchar(15) NOT NULL,
  `genero` varchar(10) NOT NULL,
  `ciudad_residencia` varchar(30) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `rut` varchar(11) NOT NULL,
  `activo` int(1) NOT NULL,
  `administrador` int(1) NOT NULL,
  `contrasena` varchar(30) NOT NULL,
  `correo` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usuarios`
--

INSERT INTO `usuarios` (`id`, `nombres`, `apellidos`, `nacionalidad`, `genero`, `ciudad_residencia`, `foto`, `fecha_nacimiento`, `rut`, `activo`, `administrador`, `contrasena`, `correo`) VALUES
(1, 'w', 'w', 'Chilena', 'Femenino', 'weq', 'img/23-11-202218-01-23_6607w.png', '2022-11-02', 'wer', 1, 1, '', ''),
(4, 'wqe', 'qwe', 'Chilena', 'Masculino', 'qrt', 'img/23-11-202219-16-14_4682wqe.png', '2022-11-07', 'qwe', 1, 0, '', ''),
(5, 'wqe', 'qwe', 'Chilena', 'Masculino', 'qrt', 'img/23-11-202219-16-16_5167wqe.png', '2022-11-07', 'qwe', 1, 0, '', ''),
(7, 'wqe', 'qwe', 'Chilena', 'Masculino', 'qrt', 'img/23-11-202219-17-06_9641wqe.png', '2022-11-07', 'qwe', 0, 0, '', ''),
(8, 'wqe', 'qwe', 'Chilena', 'Masculino', 'qrt', 'img/23-11-202219-17-08_9573wqe.png', '2022-11-07', 'qwe', 0, 0, '', ''),
(9, 'wqe', 'qwe', 'Chilena', 'Masculino', 'qrt', 'img/23-11-202219-17-09_6303wqe.png', '2022-11-07', 'qwe', 0, 1, '', ''),
(10, 'rew', 'wer', 'Chilena', 'Femenino', 'twewet', 'img/23-11-202221-32-12_6714rew.png', '2022-11-01', 'ewr', 0, 0, 'wre', 'wer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
