-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 13 Apr 2024 pada 16.01
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_puskesmas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `periksa`
--

CREATE TABLE `periksa` (
  `id_data` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `berat` double NOT NULL,
  `tinggi` double NOT NULL,
  `tensi` varchar(20) NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `pasien_id` int(11) NOT NULL,
  `dokter_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `periksa`
--

INSERT INTO `periksa` (`id_data`, `tanggal`, `berat`, `tinggi`, `tensi`, `keterangan`, `pasien_id`, `dokter_id`) VALUES
(1, '2023-02-02', 75, 172, '45/80 mmhg', 'normal', 1, 1),
(2, '2024-03-01', 56, 169, '110/145 mmhg', 'tidak normal', 2, 2),
(3, '2024-03-05', 79, 170, '90/120 mmhg', 'normal', 3, 3),
(4, '2023-12-23', 39, 156, '85/75 mmhg', 'tidak normal', 4, 4),
(5, '2023-11-14', 89, 175, '100/80 mmhg', 'normal', 5, 5),
(6, '2024-01-10', 90, 195, '120/90 mmhg', 'tidak normal', 6, 6),
(7, '2023-07-21', 83, 179, '59/90 mmhg', 'tidak normal', 7, 7),
(8, '2023-12-30', 90, 175, '120/100 mmhg', 'normal', 8, 8),
(9, '2024-03-31', 48, 155, '100/75 mmhg', 'normal', 9, 9),
(10, '2024-01-07', 100, 190, '145/200 mmhg', 'tidak normal', 10, 10);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `periksa`
--
ALTER TABLE `periksa`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `hasil_periksa` (`pasien_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `periksa`
--
ALTER TABLE `periksa`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
