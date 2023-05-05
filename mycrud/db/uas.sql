-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Apr 2023 pada 18.03
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `crud`
--

CREATE TABLE `crud` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nim` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data tabel `crud`
--

INSERT INTO `crud` (`id`, `nama`, `nim`, `email`, `jurusan`, `alamat`, `gender`) VALUES
(1, 'Mohammad Rizky Sinaga', '09031382227165', 'rzkynaga1@gmail.com', 'Sistem Informasi', 'Jalan Pattimura II No. 83', 'Laki-laki'),
(2, 'Eleanor Alliston', '09031382132356', 'allistonele@gmail.com', 'Kedokteran', 'Jalan Sorong No. 91', 'Perempuan'),
(3, 'Cristiano Ronaldo', '090312823290001', 'cristiano7@gmail.com', 'Pendidikan Olahraga', 'Jalan Manchester No. 7', 'Laki-laki'),
(4, 'Alexandra Daddario', '090212927319007', 'alexdaddario@gmail.com', 'Administrasi Publik', 'Jalan Manhanttan No. 14', 'Perempuan');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `crud`
--
ALTER TABLE `crud`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `crud`
--
ALTER TABLE `crud`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;