-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 10, 2018 at 09:43 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `oauth_provider` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `oauth_uid` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `locale` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `picture_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `profile_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `oauth_provider`, `oauth_uid`, `first_name`, `last_name`, `email`, `gender`, `locale`, `picture_url`, `profile_url`, `created`, `modified`) VALUES
(12, 'google', '114009858097283138420', 'CECEP SUTISNA', '-', 'cecep.sutisna.tif16@polban.ac.id', '', 'en', 'https://lh5.googleusercontent.com/-wizzEAM2oeU/AAAAAAAAAAI/AAAAAAAAAAA/AAnnY7qX-MF4Zu2WXyE23t96upbajrPl7Q/mo/photo.jpg', '', '2018-08-09 10:57:37', '2018-08-10 14:30:30'),
(17, 'google', '113451699216358792488', 'Panglima', 'Sejati', 'panglimas100@gmail.com', '', 'in', 'https://lh4.googleusercontent.com/-lBcj4T43TC4/AAAAAAAAAAI/AAAAAAAAAAA/AAnnY7rTN9ZuLJEKPJMG24F2m-RfEI6u8g/mo/photo.jpg', 'https://plus.google.com/113451699216358792488', '2018-08-09 14:14:46', '2018-08-09 14:14:46'),
(18, 'google', '105723828138528184433', 'Cecep', 'sutisna', 'sutisnacecep464@gmail.com', '', 'in', 'https://lh4.googleusercontent.com/-OlqVRJtPzWY/AAAAAAAAAAI/AAAAAAAAAAA/AAnnY7qy_Mr_FuUd-U-tLqpxQ-qpWDgi2g/mo/photo.jpg', '', '2018-08-09 14:17:28', '2018-08-09 14:17:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
