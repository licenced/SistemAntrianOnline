-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 17 Sep 2019 pada 12.42
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antrian`
--
CREATE DATABASE IF NOT EXISTS `antrian` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `antrian`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` varchar(20) NOT NULL,
  `no_plat` varchar(100) NOT NULL,
  `no_mesin` varchar(50) NOT NULL,
  `nama_stnk` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `keterangan` varchar(7) NOT NULL DEFAULT 'belum',
  `pembuat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `no_plat`, `no_mesin`, `nama_stnk`, `tanggal`, `jam`, `keluhan`, `keterangan`, `pembuat`) VALUES
('TK16092019-001', 'BE 4311 AA', '1123', 'Doni Agus', '2019-09-16', '12:38:33', 'asd', 'selesai', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `status` varchar(128) NOT NULL DEFAULT 'belum',
  `token` varchar(255) NOT NULL,
  `level` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `tanggal_lahir`, `email`, `password`, `nik`, `mobile`, `status`, `token`, `level`) VALUES
(8, 'doni ganteng zz', '2019-09-16', 'tamfan@doni.com', '123', '12312', '08991265917', '', '', 2),
(10, 'Muhammad Ragil', NULL, 'mragiltrirezar@gmail.com', '123', '123123', '081275973221', 'sudah', '', 1),
(11, 'admin', NULL, 'admin@admin.com', 'admin', '123456', '123456', 'sudah', '', 1),
(13, 'ragila', NULL, 'mragill98@gmail.com', '123', '1111111111', '081275973221', '', '', 2),
(18, 'Doni Agus Adila', NULL, 'pangerancleeper@gmail.com', '123', '1111', '08991265917', 'sudah', 'ab93c785324377aa1ffcf3c2b0848f9b6703e161c5049e2764561b986a4ff797', 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `pembuat` (`pembuat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `pembuat` FOREIGN KEY (`pembuat`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
