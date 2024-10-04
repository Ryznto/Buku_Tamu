-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2024 at 05:47 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `app_bukutamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku_tamu`
--

CREATE TABLE `buku_tamu` (
  `id_tamu` varchar(5) NOT NULL,
  `tanggal` date NOT NULL,
  `nama_tamu` varchar(225) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `bertemu` varchar(225) NOT NULL,
  `kepentingan` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `buku_tamu`
--

INSERT INTO `buku_tamu` (`id_tamu`, `tanggal`, `nama_tamu`, `alamat`, `no_hp`, `bertemu`, `kepentingan`) VALUES
('&lt;b', '2024-10-04', 'Wendy', 'leles', '08675568', 'Arga', 'Ngoding'),
('2', '2024-09-01', 'Nabil Pra', 'JL.Salagedang', '0892372867', 'Bu Astri', 'Mengambil sertifikat UJIKOM'),
('4', '2024-09-01', 'Fahry', 'JL.Siliwangi', '08927285376', 'BKK', 'Mengambil Sertifikat PKL'),
('5', '2024-09-01', 'Jawa', 'garogol', '08672429', 'Nabil', 'Project');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` varchar(5) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_role` enum('admin','operator') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `user_role`) VALUES
('usr01', 'saske', '$2y$10$yhQ1zjyrnyXIgUFqNgxtDOyqFAMmeKUUaL3WLD4YI2yCqaeVaQYve', 'admin'),
('usr02', 'admin', '$2y$10$/UKPoASkSabQTdT7Wafa2uEATwbO1IqnC9SmtzvJPQs6qikNl2T2u', 'admin'),
('usr03', 'Arga', '$2y$10$3nZZVwWuZXkb3x9liv2IiOmye8cb813of6gU6sOAQMMAiGnnlxB1W', 'operator'),
('usr04', 'ahay', '$2y$10$o/6iJz0RMzBCBi7KwrW4t.jCyGrXM5rPhg35QzcEzpzWbd/l2qlry', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku_tamu`
--
ALTER TABLE `buku_tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
