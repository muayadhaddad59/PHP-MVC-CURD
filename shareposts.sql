-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2022 at 02:57 PM
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
-- Database: `shareposts`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `body`, `created_at`) VALUES
(9, 12, 'bgfqwiu1111egbcccccccccc', 'oihfeuoh', '2022-08-03 20:56:53'),
(10, 13, 'Hamza', 'haddad', '2022-08-03 21:29:47'),
(12, 13, 'Muayad', 'Haddad', '2022-08-03 21:35:36'),
(13, 13, 'Ahmed', 'Computer', '2022-08-03 21:40:00'),
(14, 12, '@', '2d', '2022-08-03 21:51:04'),
(15, 12, '@@fef', 'fefefe', '2022-08-03 21:54:29'),
(16, 12, 'fe', 'feefeffe', '2022-08-03 21:54:36'),
(17, 12, 'fs', 'fsasf', '2022-08-03 21:55:45'),
(18, 15, 'Muayuaf', 'sffsasaf', '2022-08-03 22:23:32');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `created_at`) VALUES
(10, 'Emmanuel Omonzebaguan', 'emmizy2015@gmail.com', '$2y$10$GHZKnWPt3ZQEUztMRkVogO2yaQG6cEYOiFVXDjyOLFqSi8s7NazmG', '2019-08-12 16:01:21'),
(11, 'Mat Sele', 'matsele@gmail.com', '$2y$10$LVFIESEbb9o/sVV9sX8Xwe1Gpo2lMRGhErnXN6SKf0ytxEAhmw69O', '2019-08-14 04:36:55'),
(12, 'muayad', 'muayad@yahoo.com', '$2y$10$AYzCME3xR5v5PaRCACTqy.U3M6Ync69ESr5Tav/lJx4MyZLvMpQLe', '2022-08-03 20:44:05'),
(13, 'muayad', 'hamza@yahoo.com', '$2y$10$RoEQY.IaavLSWW0zV.dW0eyvxqyD7octwf7W3OfLr8x1eIJkaI.dS', '2022-08-03 21:29:23'),
(14, 'dg', 'feddd@yahoo.com', '$2y$10$nhO4cDNNsdueLB0USRD4XOOK3IXuht1g8bdSyv0SApX1Je9wXPUoe', '2022-08-03 21:49:47'),
(15, 'mmama', 'o@yahoo.com', '$2y$10$W8wTlTvrylh9w7SM6MznputGvJO.B1Slk7ZT4Frup3sO/Yac7DZqu', '2022-08-03 22:22:23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
