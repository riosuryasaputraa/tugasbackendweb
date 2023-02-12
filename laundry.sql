-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 21, 2023 at 08:31 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `tabel_paketharga`
--

CREATE TABLE `tabel_paketharga` (
  `id` int(10) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `lama` int(10) NOT NULL,
  `harga` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_paketharga`
--

INSERT INTO `tabel_paketharga` (`id`, `nama_paket`, `lama`, `harga`) VALUES
(3, 'Reguler', 3, 7000),
(5, 'Express', 2, 10000),
(6, 'Spesial', 1, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pengguna`
--

CREATE TABLE `tabel_pengguna` (
  `id` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` enum('user','admin') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pengguna`
--

INSERT INTO `tabel_pengguna` (`id`, `nama`, `telepon`, `username`, `password`, `level`) VALUES
(67, 'user', '085', 'user', '$2y$10$ZTPgkEriYb6dj6JKv3JZgOIfoQ06Fa5av.8/XH2y9Z/Vbw/hdugq2', 'user'),
(68, 'admin', '085', 'admin', '$2y$10$Md3RX8Hd4V2jTeJfKrit8uaGVxKpBw1CwsniXbV6Bc0g4IGoQPV3e', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tabel_pesanan`
--

CREATE TABLE `tabel_pesanan` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `nama_paket` varchar(50) NOT NULL,
  `berat` int(50) DEFAULT NULL,
  `harga` int(50) DEFAULT NULL,
  `status` enum('Pending','Belum diproses','Sedang diproses','Selesai diproses','Permintaan pengantaran','Sedang diantar','Selesai') NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tabel_pesanan`
--

INSERT INTO `tabel_pesanan` (`id`, `username`, `telepon`, `alamat`, `nama_paket`, `berat`, `harga`, `status`, `tanggal`) VALUES
(44, 'user', '085', 'ew', 'Reguler', 1, 7000, 'Selesai', '2023-01-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tabel_paketharga`
--
ALTER TABLE `tabel_paketharga`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_paket` (`nama_paket`);

--
-- Indexes for table `tabel_pengguna`
--
ALTER TABLE `tabel_pengguna`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `nama` (`nama`);

--
-- Indexes for table `tabel_pesanan`
--
ALTER TABLE `tabel_pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `nama_paket` (`nama_paket`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tabel_paketharga`
--
ALTER TABLE `tabel_paketharga`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tabel_pengguna`
--
ALTER TABLE `tabel_pengguna`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tabel_pesanan`
--
ALTER TABLE `tabel_pesanan`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tabel_pesanan`
--
ALTER TABLE `tabel_pesanan`
  ADD CONSTRAINT `tabel_pesanan_ibfk_1` FOREIGN KEY (`nama_paket`) REFERENCES `tabel_paketharga` (`nama_paket`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
