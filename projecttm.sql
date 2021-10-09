-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 09, 2021 at 02:42 AM
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
(1, 8647467, 'yudi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `dokumen`
--

CREATE TABLE `dokumen` (
  `id` int(11) NOT NULL,
  `nomor_data` int(11) NOT NULL,
  `tanggal` date NOT NULL DEFAULT current_timestamp(),
  `waktu` time NOT NULL DEFAULT current_timestamp(),
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
(18, 0, '2021-10-04', '09:42:15', 'Trio Banjarmasin', 'Banjarmasin', 'Rama', 'Dokumen', 'Angga Radit', 'Rara', 'Eko', 'Andi', 'f3b25a01df53dbb419e6b03a76a72d7a.jpeg'),
(19, 0, '2021-10-07', '09:42:24', 'Trio Tanjung', 'Tanjung', 'Risa', 'Paket', 'Angga Radit', 'Rara', 'Eko', 'Asian', 'a906baf13c729640c74e185d19bd343d.jpg'),
(20, 0, '2021-10-07', '09:42:36', 'Suzuki', 'Jakarta', 'Andi', 'Paket', 'Angga Radit', 'Rara', 'Eko', 'Yudi', '10e157780a42e8c50bea24de05ba2467.jpeg'),
(21, 0, '2021-10-07', '09:59:29', 'Delima Motor', 'Banjarmasin', 'Ali', 'Dokumen', 'Rahman', 'Rara', 'Ahmad', 'Zara', 'b11b620b4ca4202bfe2a878fc7617bab.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` varchar(55) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(2000) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `create_at`) VALUES
('615cf8b7463348.51326810', 'Kayn', 'kay@gmail.com', 'Z', '2021-10-06 01:15:35'),
('615cf8c16bd5d4.92434990', 'Senna', 'senna@gmail.com', 'Y', '2021-10-06 01:15:45');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_level` enum('admin','security','receipt','book') NOT NULL,
  `user_status` enum('1','0') NOT NULL,
  `create_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `user_level`, `user_status`, `create_at`) VALUES
(1, 'Yudi', 'ahmadyudi@gmail.com', 'yudi123', 'admin', '1', '2021-09-14'),
(2, 'Angga Radit', 'anggaradit@gmail.com', 'angga123', 'security', '1', '2021-09-14'),
(3, 'Rara', 'rara@gmail.com', 'rara123', 'receipt', '1', '2021-09-14'),
(4, 'Muhammad Fandi', 'Andi@gmail.com', 'andi123', 'book', '1', '2021-09-14'),
(5, 'Rahman', 'rahman@gmail.com', 'rahman123', 'security', '1', '2021-09-24'),
(6, 'Kayn', 'kay@gmail.com', 'kay123', 'receipt', '1', '0000-00-00');

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
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
