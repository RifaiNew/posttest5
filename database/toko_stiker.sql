-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2023 pada 17.03
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
-- Database: `toko_stiker`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `stiker`
--

CREATE TABLE `stiker` (
  `id_stiker` int(11) NOT NULL,
  `nama_stiker` varchar(50) NOT NULL,
  `jenis_stiker` varchar(30) NOT NULL,
  `deskripsi_stiker` text NOT NULL,
  `harga_stiker` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `stiker`
--

INSERT INTO `stiker` (`id_stiker`, `nama_stiker`, `jenis_stiker`, `deskripsi_stiker`, `harga_stiker`, `gambar`) VALUES
(33, 'Juice Wrld', 'penyanyi', 'Penyanyi Keren', 100000, 'Juice Wrld.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `stiker`
--
ALTER TABLE `stiker`
  ADD PRIMARY KEY (`id_stiker`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `stiker`
--
ALTER TABLE `stiker`
  MODIFY `id_stiker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
