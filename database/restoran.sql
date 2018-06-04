-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 04 Jun 2018 pada 16.26
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restoran`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `pesan`
--

CREATE TABLE `pesan` (
  `nama` varchar(15) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `notelp` varchar(30) DEFAULT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tanggal` varchar(30) DEFAULT NULL,
  `waktu` varchar(10) DEFAULT NULL,
  `orang` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pesan`
--

INSERT INTO `pesan` (`nama`, `email`, `notelp`, `alamat`, `tanggal`, `waktu`, `orang`) VALUES
('ilham', 'ilhambima80@gmail.com', '081215567726', 'sleman', '04/04/2018', 'null', 'null'),
('bima', 'ilhambima80@gmail.com', '0813280538881', 'sleman', '04/04/2018', 'null', 'null'),
('bima', 'ilhambima80@gmail.com', '0813280538881', 'sleman', '04/04/2018', 'null', 'null'),
('bima', 'sweetchild799@gmail.com', '081215567726', 'sleman', '04/12/2018', 'null', 'null'),
('bima', 'sweetchild799@gmail.com', '081215567726', 'sleman', '04/03/2018', 'null', 'null'),
('bima', 'sweetchild799@gmail.com', '081215567726', 'sleman', '04/03/2018', 'null', 'null'),
('bima', 'sweetchild799@gmail.com', '081215567726', 'sleman', '04/11/2018', 'AX', 'AX'),
('kuy', 'kuy@gamil.com', '0812315343534', 'namex', '04/13/2018', 'null', 'null'),
('kuy', 'kuy@gamil.com', '081215567726', 'ssss', '04/12/2018', 'null', 'AX'),
('Nuril', 'sweetchild799@gmail.com', '0812315343534', 'namex', '04/06/2018', 'null', 'null'),
('bima', 'ilhambima80@gmail.com', '081215567726', 'sleman', '04/05/2018', 'null', 'null'),
('lol', 'lol', 'lol', 'lol', '', 'null', ''),
('ilham', '', '081215567726', '0', '04/04/2018', 'null', ''),
('ilham', 'ilhambima80@gmail.com', '081215567726', 'sleman', '04/10/2018', 'null', 'null'),
('bima', 'ilhambima80@gmail.com', '081215567726', 'sleman', '05/18/2018', 'null', 'null'),
('bima', 'ilhambima80@gmail.com', '0812315343534', 'godean', '05/10/2018', 'AX', 'null'),
('kuy', 'ilhambima80@gmail.com', '081215567726', 'sleman', '06/07/2018', 'AX', 'null');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reservasi`
--

CREATE TABLE `reservasi` (
  `idpelanggan` varchar(10) NOT NULL,
  `username` varchar(15) NOT NULL,
  `alamat` varchar(50) DEFAULT NULL,
  `tanggal` varchar(30) DEFAULT NULL,
  `order1` varchar(10) DEFAULT NULL,
  `order2` varchar(10) DEFAULT NULL,
  `order3` varchar(10) DEFAULT NULL,
  `order4` varchar(10) DEFAULT NULL,
  `order5` varchar(10) DEFAULT NULL,
  `order6` varchar(10) DEFAULT NULL,
  `totalbarang` varchar(10) DEFAULT NULL,
  `bayar` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `reservasi`
--

INSERT INTO `reservasi` (`idpelanggan`, `username`, `alamat`, `tanggal`, `order1`, `order2`, `order3`, `order4`, `order5`, `order6`, `totalbarang`, `bayar`) VALUES
('1', 'bimo', 'godean', '2018-05-22', '1', '', '1', '', '', '', '2', '60000'),
('2', 'kururantu', 'sleman', '2018-05-22', '1', '1', '1', '1', '', '', '4', '106000'),
('3', 'ilham', 'sleman', '2018-05-22', '1', '1', '1', '1', '1', '1', '6', '176000'),
('4', 'Bastian', 'namex', '2018-05-28', '1', '2', '2', '1', '1', '1', '8', '256000'),
('5', 'wibu', 'jepang', '2018-05-28', '1', '1', '1', '2', '2', '2', '9', '262000'),
('6', 'lala', 'sleman', '04/04/2018', '1', '1', '1', '1', '1', '1', '6', '176000');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`idpelanggan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
