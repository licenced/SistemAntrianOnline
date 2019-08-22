-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2019 at 03:47 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nyoba`
--
CREATE DATABASE IF NOT EXISTS `nyoba` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nyoba`;

-- --------------------------------------------------------

--
-- Table structure for table `history_tiket`
--

CREATE TABLE `history_tiket` (
  `id_tiket` int(5) NOT NULL,
  `no_plat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` varchar(7) NOT NULL,
  `jam` time NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `keterangan` varchar(7) NOT NULL,
  `pembuat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history_tiket`
--

INSERT INTO `history_tiket` (`id_tiket`, `no_plat`, `tanggal`, `sesi`, `jam`, `keluhan`, `keterangan`, `pembuat`) VALUES
(26, 'BE 4311 AA', '2019-08-22', 'sesi-1', '14:38:13', 'asda', 'selesai', 9),
(27, 'BE 4311 AB', '2019-08-22', 'sesi-1', '14:41:19', 'asd', 'selesai', 9),
(29, '0', '2019-08-22', 'sesi-2', '14:39:57', '123', 'selesai', 9),
(30, '0', '2019-08-22', 'sesi-2', '15:03:36', 'kk', 'selesai', 9),
(31, '0', '2019-08-22', 'sesi-2', '15:44:40', 'as', 'selesai', 9),
(32, '0', '2019-08-22', 'sesi-2', '15:44:41', 'as', 'selesai', 9);

-- --------------------------------------------------------

--
-- Table structure for table `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(5) NOT NULL,
  `no_plat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` varchar(7) NOT NULL,
  `jam` time NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `keterangan` varchar(7) NOT NULL DEFAULT 'belum',
  `pembuat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tiket_sesi2`
--

CREATE TABLE `tiket_sesi2` (
  `id_tiket` int(5) NOT NULL,
  `no_plat` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` varchar(7) NOT NULL,
  `jam` time NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `keterangan` varchar(7) NOT NULL DEFAULT 'belum',
  `pembuat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `level` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nik`, `mobile`, `level`) VALUES
(8, 'doni ganteng', 'tamfan@doni.com', '123', '12312', '08123', 2),
(9, 'ragil', 'mragill98@gmail.com', '123', '123123', '123123', 2),
(10, 'Muhammad Ragil', 'mragiltrirezar@gmail.com', '123', '123123', '081275973221', 1),
(11, 'admin', 'admin', 'admin', '123456', '123456', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `history_tiket`
--
ALTER TABLE `history_tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `pembuat_tiket` (`pembuat`);

--
-- Indexes for table `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `pembuat` (`pembuat`);

--
-- Indexes for table `tiket_sesi2`
--
ALTER TABLE `tiket_sesi2`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `pembuatt` (`pembuat`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history_tiket`
--
ALTER TABLE `history_tiket`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tiket_sesi2`
--
ALTER TABLE `tiket_sesi2`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `history_tiket`
--
ALTER TABLE `history_tiket`
  ADD CONSTRAINT `pembuat_tiket` FOREIGN KEY (`pembuat`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `pembuat` FOREIGN KEY (`pembuat`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tiket_sesi2`
--
ALTER TABLE `tiket_sesi2`
  ADD CONSTRAINT `pembuatt` FOREIGN KEY (`pembuat`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
