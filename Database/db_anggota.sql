-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2018 at 05:42 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_anggota`
--

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `pengganti` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `description` text NOT NULL,
  `color` varchar(7) NOT NULL DEFAULT '#3a87ad',
  `start` datetime NOT NULL,
  `end` datetime DEFAULT NULL,
  `allDay` varchar(50) NOT NULL DEFAULT 'true'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `pengganti`, `status`, `description`, `color`, `start`, `end`, `allDay`) VALUES
(117, 'wardana', 'naon', 'secondary', '', '#ff9900', '2018-07-04 00:00:00', '2018-07-05 00:00:00', 'true'),
(118, 'tia', '', 'primary', '', '#ff8000', '2018-07-03 00:00:00', '2018-07-04 00:00:00', 'true'),
(119, 'wardana', 'wira', 'secondary', '', '#ff9900', '2018-07-03 00:00:00', '2018-07-04 00:00:00', 'true'),
(122, 'wira', 'shren', 'secondary', '', '#ff9900', '2018-07-12 00:00:00', '2018-07-13 00:00:00', 'true'),
(123, 'tia', 'dasd', 'primary', '', '#ff8000', '2018-07-12 00:00:00', '2018-07-13 00:00:00', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `t_anggota`
--

CREATE TABLE `t_anggota` (
  `id` int(4) NOT NULL,
  `Kode` varchar(100) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Status` enum('Primary','Secondary','null') NOT NULL,
  `Peran` enum('Administrator','Developer','Support') NOT NULL,
  `Email` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_anggota`
--

INSERT INTO `t_anggota` (`id`, `Kode`, `Nama`, `Status`, `Peran`, `Email`, `created_at`, `updated_at`) VALUES
(6, 'AD-01', 'Cecep Sutisna', 'Primary', 'Administrator', 'cecep.sutisna.tif16@polban.ac.id', '2018-07-25 05:13:07', '2018-08-01 05:37:56'),
(7, 'DV-01', 'Wira Kusuma Wardana', 'Primary', 'Developer', 'wira.kusuma.tif16@polban.ac.id', '2018-07-25 05:16:16', '2018-07-27 06:42:43'),
(8, 'DV-02', 'Arief', 'Primary', 'Developer', 'arief@gmail.com', '2018-07-25 05:16:41', '2018-07-26 11:07:31'),
(9, 'DV-03', 'Gani', 'Primary', 'Developer', 'Gani@gmail.com', '2018-07-25 05:17:32', '2018-07-26 10:19:11'),
(10, 'DV-04', 'Angga', 'Primary', 'Developer', 'angga@gmail.com', '2018-07-25 05:17:43', '2018-07-26 10:19:19'),
(11, 'DV-05', 'Sidiq', 'Primary', 'Developer', 'sidiq@gmail.com', '2018-07-25 05:17:51', '2018-07-26 10:19:26'),
(12, 'DV-06', 'Amar', 'Secondary', 'Developer', 'amar@gmail.com', '2018-07-25 05:18:02', '2018-07-26 10:19:35'),
(13, 'DV-07', 'Rio', 'Secondary', 'Developer', 'rio@gmail.com', '2018-07-25 05:18:11', '2018-07-26 10:19:44'),
(14, 'AD-02', 'Wildan', 'Secondary', 'Administrator', 'wildan@gmail.com', '2018-07-25 05:18:21', '2018-07-31 10:15:29'),
(17, 'DV-08', 'Tia', 'Secondary', 'Developer', 'tia@gmail.com', '2018-07-25 05:18:48', '2018-08-01 05:38:14'),
(18, 'DV-09', 'Fajar', 'Secondary', 'Developer', 'fajar@gmail.com', '2018-07-25 05:52:14', '2018-07-26 10:59:00'),
(19, 'DV-10', 'Fatur', 'Secondary', 'Developer', 'fatur@gmail.com', '2018-07-26 06:13:48', '2018-07-26 10:20:21'),
(21, 'SP-01', 'Rizka', 'null', 'Support', 'rian@gmail.com', '2018-07-26 10:18:15', '2018-07-26 10:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `t_izin`
--

CREATE TABLE `t_izin` (
  `id` int(4) NOT NULL,
  `Kode` varchar(100) NOT NULL,
  `Nama` char(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `Ket` enum('Izin','Sakit','Tugas_Kantor') NOT NULL,
  `Alasan` text NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `t_izin`
--

INSERT INTO `t_izin` (`id`, `Kode`, `Nama`, `created_at`, `Ket`, `Alasan`, `updated_at`) VALUES
(11, 'undefined', 'Wira Kusuma Wardana', '2018-07-02 06:06:13', 'Sakit', 'Meriang', '2018-08-01 05:27:23'),
(12, 'undefined', 'Cecep Sutisna', '2018-07-27 06:17:19', 'Tugas_Kantor', 'Tugas di Makassar', '2018-07-27 09:13:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `t_anggota`
--
ALTER TABLE `t_anggota`
  ADD PRIMARY KEY (`id`,`Kode`);

--
-- Indexes for table `t_izin`
--
ALTER TABLE `t_izin`
  ADD PRIMARY KEY (`id`,`Kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
--
-- AUTO_INCREMENT for table `t_anggota`
--
ALTER TABLE `t_anggota`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `t_izin`
--
ALTER TABLE `t_izin`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
