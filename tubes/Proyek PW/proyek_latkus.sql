-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2022 at 12:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_latkus`
--

-- --------------------------------------------------------

--
-- Table structure for table `murid`
--

CREATE TABLE `murid` (
  `id_murid` int(3) NOT NULL,
  `foto_profil` varchar(25) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `email` varchar(25) NOT NULL,
  `kelas` char(1) NOT NULL,
  `sekolah` varchar(50) NOT NULL,
  `umur` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `murid`
--

INSERT INTO `murid` (`id_murid`, `foto_profil`, `nama`, `alamat`, `email`, `kelas`, `sekolah`, `umur`) VALUES
(1, '629c4c96a9c5b.jpg', 'Aceng', 'Bandung', 'eamiltes1@gmail.com', '7', 'SMPN 4 karawang', 15),
(2, '629c1bd034280.jpg', 'adam', 'Purwakarta', 'eamiltes2@gmail.com', '8', 'SMPN 5 Bekasi ', 14),
(4, '629c1aaac9e89.jpg', 'Brando', 'medan', 'eamiltes7@gmail.com', '7', 'MTs Al-Hidayah', 13),
(8, 'nophoto.jpg', 'david', 'Purwakarta', 'adamhappyslalu836@gmail.c', '9', 'SMPN 12 Bekasi', 14),
(17, '62a0a56150093.jpg', 'ubed', 'karawang', 'eamiltes44@gmail.com', '8', 'SMPN 5 Bekasi ', 15),
(19, '62a0f85f43046.jpg', 'jibril', 'Subang', 'eamiltes06@gmail.com', '9', 'SMPN 18 Subang', 14);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(4) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'adam44', '$2y$10$EhNhedkNggNh2gsI7.dn0.YGup2QVHuu7Lyd4Jl/lXlv3hkPSRwjy'),
(3, 'ss', '$2y$10$Wy..AIrC/d3PEfg7UB65nOXiSaTKigvl68c4uOdfzPkixtopYkLCK'),
(4, 'admin', '$2y$10$I/pGJS4FMyoQeruX5DNoROgiKm9UPJ9G9wr14kFahBsl0Cbx.6xI.'),
(5, 'aa', '$2y$10$mNO8VXYKEruFCjW8a37zrOGQGunazu2Wl.8WEj/tKSZSaqVFrJ7Aa'),
(6, 'rr', '$2y$10$tHxDDtAOXd2Gv1kMs4BunOBxpNTJEaaLsUd.hP8ObbIHK9cjO4rJG'),
(7, 'brian', '$2y$10$zRc3W9vMKgrhN4/kJhKfbOm8LXRa.FaSHfiFtstztzLBylRTWAqja'),
(8, 'dd', '$2y$10$a9boxonq.Bst2A4ZWGwTleKoUy.OtMepDewE.bbq9PM5M8FiPKGWi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `murid`
--
ALTER TABLE `murid`
  ADD PRIMARY KEY (`id_murid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `murid`
--
ALTER TABLE `murid`
  MODIFY `id_murid` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
