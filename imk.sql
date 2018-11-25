-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 16 Nov 2018 pada 10.06
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imk`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `aggregate`
--

CREATE TABLE `aggregate` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `pertanyaan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `aggregate`
--

INSERT INTO `aggregate` (`id`, `nama`, `pertanyaan`) VALUES
(1, 'febry', 'asdsadas'),
(2, 'farhan', 'asdaa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comentaggregate`
--

CREATE TABLE `comentaggregate` (
  `id_coment` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `coment` text,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comentaggregate`
--

INSERT INTO `comentaggregate` (`id_coment`, `id`, `coment`, `nama`) VALUES
(1, 1, 'aku', 'aku');

-- --------------------------------------------------------

--
-- Struktur dari tabel `comentsubquery`
--

CREATE TABLE `comentsubquery` (
  `id_coment` int(11) NOT NULL,
  `id` int(11) DEFAULT NULL,
  `coment` text,
  `nama` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comentsubquery`
--

INSERT INTO `comentsubquery` (`id_coment`, `id`, `coment`, `nama`) VALUES
(1, 5, 'aku', 'aku'),
(2, 5, 'akuhhh', 'aku'),
(3, 5, 'mengon', 'meong'),
(4, 6, 'aish', 'aish'),
(5, 7, 'sdf', 'ert');

-- --------------------------------------------------------

--
-- Struktur dari tabel `subquery`
--

CREATE TABLE `subquery` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `pertanyaan` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `subquery`
--

INSERT INTO `subquery` (`id`, `nama`, `pertanyaan`) VALUES
(5, 'aku', 'aku'),
(6, 'aku', 'asdsada'),
(7, 'aku', 'asdasd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aggregate`
--
ALTER TABLE `aggregate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comentaggregate`
--
ALTER TABLE `comentaggregate`
  ADD PRIMARY KEY (`id_coment`);

--
-- Indexes for table `comentsubquery`
--
ALTER TABLE `comentsubquery`
  ADD PRIMARY KEY (`id_coment`);

--
-- Indexes for table `subquery`
--
ALTER TABLE `subquery`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `aggregate`
--
ALTER TABLE `aggregate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `comentaggregate`
--
ALTER TABLE `comentaggregate`
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `comentsubquery`
--
ALTER TABLE `comentsubquery`
  MODIFY `id_coment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `subquery`
--
ALTER TABLE `subquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
