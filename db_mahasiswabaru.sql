-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 19 Okt 2018 pada 05.05
-- Versi server: 10.1.34-MariaDB
-- Versi PHP: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mahasiswabaru`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `mhs`
--

CREATE TABLE `mhs` (
  `Nama` varchar(100) NOT NULL,
  `Nim` varchar(12) NOT NULL,
  `Jenis Kelamin` varchar(10) NOT NULL,
  `Prodi` varchar(50) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Asal` varchar(100) NOT NULL,
  `Moto Hidup` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mhs`
--

INSERT INTO `mhs` (`Nama`, `Nim`, `Jenis Kelamin`, `Prodi`, `Fakultas`, `Asal`, `Moto Hidup`) VALUES
('Rega', '6701170042', 'laki2', 'D3 Manajemen Informatika', 'FIT', 'Gresik', 'Apa ya'),
('ERNISA', '6701174038', 'perempuan', 'D3 Manajemen Informatika', 'FIT', 'SRAGEN', 'emhhhh'),
('Zuritza', '6701174056', 'perempuan', 'D3 Manajemen Informatika', 'FIT', 'Tuban', 'Nggak tau'),
('sepvina', '6701174066', 'perempuan', 'D3 Manajemen Informatika', 'FIT', 'madiun', 'AYOOOO');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`Nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
