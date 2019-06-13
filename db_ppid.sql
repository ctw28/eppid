-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 03, 2019 at 05:18 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_ppid`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_menu`
--

CREATE TABLE `t_menu` (
  `id_menu` int(11) UNSIGNED NOT NULL,
  `nama_menu` varchar(100) NOT NULL,
  `link` varchar(100) DEFAULT NULL,
  `parent_menu` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_menu`
--

INSERT INTO `t_menu` (`id_menu`, `nama_menu`, `link`, `parent_menu`) VALUES
(1, 'Beranda', 'index.php', NULL),
(2, 'Profil', '', NULL),
(3, 'Layanan Informasi', '', NULL),
(4, 'Informasi Publik', '', NULL),
(5, 'Standar Layanan', '', NULL),
(6, 'Informasi Secara Berkala', NULL, 4),
(7, 'Informasi Tersedia Setiap Saat', NULL, 4),
(8, 'Informasi Publik yang Wajib diumumkan Serta Merta', NULL, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_menu`
--
ALTER TABLE `t_menu`
  ADD PRIMARY KEY (`id_menu`),
  ADD KEY `parent_menu` (`parent_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_menu`
--
ALTER TABLE `t_menu`
  MODIFY `id_menu` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
