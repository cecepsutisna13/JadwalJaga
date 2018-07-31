-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 31, 2018 at 11:27 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendar`
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
(102, 'wardana', 'wira', 'secondary', '', '#ff9900', '2018-07-02 00:00:00', '2018-07-03 00:00:00', 'true'),
(103, 'wira', 'wardana', '', '', '#ff8000', '2018-07-02 00:00:00', '2018-07-03 00:00:00', 'true'),
(116, 'arif', '', 'primary', '', '#ff8000', '2018-07-04 00:00:00', '2018-07-05 00:00:00', 'true'),
(117, 'wardana', 'naon', 'secondary', '', '#ff9900', '2018-07-04 00:00:00', '2018-07-05 00:00:00', 'true'),
(118, 'tia', '', 'primary', '', '#ff8000', '2018-07-03 00:00:00', '2018-07-04 00:00:00', 'true'),
(119, 'wardana', 'wira', 'secondary', '', '#ff9900', '2018-07-03 00:00:00', '2018-07-04 00:00:00', 'true'),
(122, 'wira', 'shren', 'secondary', '', '#ff9900', '2018-07-12 00:00:00', '2018-07-13 00:00:00', 'true'),
(123, 'tia', 'dasd', 'primary', '', '#ff8000', '2018-07-12 00:00:00', '2018-07-13 00:00:00', 'true'),
(124, 'cecep', 'aaaa', 'primary', '', '#ff8000', '2018-07-10 00:00:00', '2018-07-11 00:00:00', 'true'),
(125, 'wira', 'bbbb', 'secondary', '', '#ff9900', '2018-07-10 00:00:00', '2018-07-11 00:00:00', 'true'),
(126, 'dasdasd', '', 'primary', '', '#ff8000', '2018-07-13 00:00:00', '2018-07-14 00:00:00', 'true'),
(127, 'wwkwkwkw', '', 'secondary', '', '#ff9900', '2018-07-13 00:00:00', '2018-07-14 00:00:00', 'true'),
(128, 'arif', '', 'primary', '', '#ff8000', '2018-07-11 00:00:00', '2018-07-12 00:00:00', 'true'),
(129, 'wardana', '', 'secondary', '', '#ff9900', '2018-07-11 00:00:00', '2018-07-12 00:00:00', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=130;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
