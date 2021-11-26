-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2021 at 03:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projecttm`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `no_telp` int(30) NOT NULL,
  `email` varchar(222) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `no_telp`, `email`) VALUES
(1, 8647467, 'admin@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `nomor_data` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  `pengirim` varchar(50) NOT NULL,
  `kota_pengirim` varchar(50) NOT NULL,
  `tujuan` varchar(50) NOT NULL,
  `jenis_barang` enum('Dokumen','Paket') NOT NULL,
  `security` varchar(50) NOT NULL,
  `ga` varchar(50) NOT NULL,
  `ob` varchar(50) NOT NULL,
  `penerima` varchar(50) NOT NULL,
  `bukti_terima` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dokumen`
--

INSERT INTO `dokumen` (`id`, `nomor_data`, `tanggal`, `waktu`, `pengirim`, `kota_pengirim`, `tujuan`, `jenis_barang`, `security`, `ga`, `ob`, `penerima`, `bukti_terima`) VALUES
(28, 1, '2021-11-02', '09:14:40', 'Trio Tanjung', 'Tanjung', 'Rama', 'Dokumen', 'Security', 'Receipt', 'Eko', 'Asian', '4b4a5b1701f2297c5f078c1e4a61b801.jpg'),
(29, 2, '2021-11-02', '09:14:51', 'Trio Banjarmasin', 'Banjarmasin', 'Andi', 'Paket', 'Security', 'Receipt', 'Eko', 'Andi', '6ff028b69ff25df766ab830de1e5ae21.jpeg'),
(30, 3, '2021-11-02', '09:15:02', 'Suzuki', 'Jakarta', 'Risa', 'Paket', 'Security', 'Receipt', 'Eko', '', ''),
(31, 1, '2021-11-03', '09:15:22', 'Delima Motor', 'Banjarmasin', 'Ali', 'Dokumen', 'Security', 'Receipt', 'Eko', '', ''),
(32, 2, '2021-11-03', '09:17:21', 'DITSY OFFICIAL', 'Tangerang', 'Andi', 'Dokumen', 'Security', 'Receipt', 'Eko', '', ''),
(38, 1, '2021-11-26', '10:32:03', 'Trio Banjarmasin', 'Tanjung', 'Andi', 'Dokumen', 'Security', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_level` enum('admin','security','receipt','book','master') NOT NULL,
  `user_status` enum('1','0') NOT NULL,
  `create_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `create_at`) VALUES
(1, 'Master', 'master@gmail.com', 'master123', 'master', '1', '2021-09-14'),
(2, 'Security', 'security@gmail.com', 'security123', 'security', '1', '2021-09-14'),
(6, 'Receipt', 'receipt@gmail.com', 'receipt123', 'receipt', '1', '2021-09-28'),
(7, 'Admin', 'admin@gmail.com', 'admin123', 'admin', '1', '2021-10-11'),
(13, 'Book', 'book@gmail.com', 'book123', 'book', '1', '2021-10-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dokumen`
--
ALTER TABLE `dokumen`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `dokumen`
--
ALTER TABLE `dokumen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
