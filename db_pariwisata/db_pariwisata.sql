
-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 13, 2022 at 07:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pariwisata`
--
CREATE DATABASE IF NOT EXISTS `pariwisata` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `pariwisata`;

-- --------------------------------------------------------

--
-- Table structure for table `dt_table`
--

CREATE TABLE `dt_table` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL,
  `jumlah` int(50) NOT NULL,
  `total` int(255) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `role` enum('Menunggu','Ditolak','Diterima') NOT NULL COMMENT '''0: Menunggu, 1: Disetujui, 2: Tolak'''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dt_table`
--

INSERT INTO `dt_table` (`id`, `nama`, `email`, `harga`, `jumlah`,`total`, `tanggal`, `role`) VALUES
(1, 'ifan', 'ifan111@gmail.com', '10000', 2, 20000, NULL, 'Diterima'),
(3, 'yogi', 'yogi333@gmail.com', '20000', 2, 40000, NULL, 'Menunggu'),
(6, 'fauzi', 'fauzi666@gmail.com', '10000', 4, 20000, '2022-09-14', 'Diterima');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama`, `email`, `password`, `role`) VALUES
(1, 'admin', 'admin@gmail.com', '1234', 'admin'),
(3, 'aditya', 'aditya123@gmail.com', '12345', 'admin'),
(7, 'dani', 'dani@gmail.com', '1234567', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_table`
--
ALTER TABLE `dt_table`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dt_table`
--
ALTER TABLE `dt_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
