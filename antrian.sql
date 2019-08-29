-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Agu 2019 pada 04.23
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

-- --------------------------------------------------------

--
-- Struktur dari tabel `history_tiket`
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
-- Dumping data untuk tabel `history_tiket`
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
-- Struktur dari tabel `tiket`
--

CREATE TABLE `tiket` (
  `id_tiket` int(5) NOT NULL,
  `no_plat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `sesi` varchar(7) NOT NULL,
  `jam` time NOT NULL,
  `keluhan` varchar(100) NOT NULL,
  `keterangan` varchar(25) NOT NULL DEFAULT 'belum',
  `pembuat` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`id_tiket`, `no_plat`, `tanggal`, `sesi`, `jam`, `keluhan`, `keterangan`, `pembuat`) VALUES
(1, 'BE3322AI', '2019-08-29', 'sesi-1', '02:54:29', 'DFSF', 'selesai', 8),
(2, 'BE3322lD', '2019-08-29', 'sesi-1', '03:22:10', 'dadawedw', 'sedang dikerjakan', 8),
(3, 'BE3322Ao', '2019-08-29', 'sesi-1', '03:22:33', 'kjbkbkj', 'belum', 8);

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_sesi2`
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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `mobile` varchar(15) DEFAULT NULL,
  `tanggal_lahir` date DEFAULT NULL,
  `no_plat` varchar(12) DEFAULT NULL,
  `no_mesin` int(128) DEFAULT NULL,
  `level` int(11) DEFAULT '2'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `nik`, `mobile`, `tanggal_lahir`, `no_plat`, `no_mesin`, `level`) VALUES
(8, 'Doni Agus Adila', 'tamfan@doni.com', '123', '12312', '08123', '2019-08-28', 'BE 1234 CA', 2147483647, 2),
(9, 'ragil', 'mragill98@gmail.com', '123', '123123', '123123', '0000-00-00', '', 0, 2),
(10, 'Muhammad Ragil', 'mragiltrirezar@gmail.com', '123', '123123', '081275973221', '0000-00-00', '', 0, 1),
(11, 'admin', 'admin', 'admin', '123456', '123456', '0000-00-00', '', 0, 1),
(12, 'test', 'test@test.com', '123123', '123123123', '123123123', '0000-00-00', '', 0, 2);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `history_tiket`
--
ALTER TABLE `history_tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `pembuat_tiket` (`pembuat`);

--
-- Indeks untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `pembuat` (`pembuat`);

--
-- Indeks untuk tabel `tiket_sesi2`
--
ALTER TABLE `tiket_sesi2`
  ADD PRIMARY KEY (`id_tiket`),
  ADD KEY `pembuatt` (`pembuat`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `history_tiket`
--
ALTER TABLE `history_tiket`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `tiket`
--
ALTER TABLE `tiket`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `tiket_sesi2`
--
ALTER TABLE `tiket_sesi2`
  MODIFY `id_tiket` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `history_tiket`
--
ALTER TABLE `history_tiket`
  ADD CONSTRAINT `pembuat_tiket` FOREIGN KEY (`pembuat`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tiket`
--
ALTER TABLE `tiket`
  ADD CONSTRAINT `pembuat` FOREIGN KEY (`pembuat`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `tiket_sesi2`
--
ALTER TABLE `tiket_sesi2`
  ADD CONSTRAINT `pembuatt` FOREIGN KEY (`pembuat`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
