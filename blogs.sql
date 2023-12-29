-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 12:19 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `content` varchar(100) NOT NULL,
  `featured` varchar(100) NOT NULL,
  `published` varchar(100) NOT NULL,
  `visits` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `featured`, `published`, `visits`, `date`, `image`) VALUES
(1, 'Voluptates Corporis Placeat', 'Sudden she seeing garret far regard. By hardly it direct if pretty up regret. Ability thought enquir', 'no', '0', '140', '2023-11-01', 'img-1.jpg'),
(2, 'Dolorummm Dolores Itaque', 'Or easy knew sold on well come year. Something consulted age extremely end procuring. Collecting pre', 'yes', '1', '37', '2023-11-20', 'blog-1.jpg'),
(3, 'Quisquam Dignissimos', 'do of sufficient projecting an thoroughly uncommonly prosperous conviction. Pianoforte principles ou', 'yes', '0', '50', '2023-11-03', 'img-4.jpg'),
(4, 'Voluptas Optio Soluta', '\r\nIs at purse tried jokes china ready decay an. Small its shy way had woody downs power. To denoting', 'null', '0', '20', '2023-11-04', 'blog-2.jpg'),
(5, 'Voluptates Corporis Placeat', 'Procured shutters mr it feelings. To or three offer house begin taken am at. As dissuade cheerful ov', 'yes', '1', '70', '2023-11-06', 'insta-3.jpg'),
(6, 'Praesentium Asperiores', ' Alteration put use diminution can considered sentiments interested discretion. An seeing feebly sta', 'no', '1', '63', '2023-11-07', 'blog-5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `secondName` varchar(100) NOT NULL,
  `phoneNo` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Terms` varchar(100) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `secondName`, `phoneNo`, `email`, `password`, `Gender`, `Terms`, `active`) VALUES
(1, 'hindd', 'mohsen', '0100701900', 'hindmohsen2001@gmail.com', 'Hi@11111111', 'Female', '1', 1),
(2, 'alaaa ', 'mohamed', '0100220400', 'alaa22@gmail.com', 'Al$2222222', 'Female', '1', 1),
(3, 'noha', 'ahmed', '0100789221', 'noha@gmail.com', 'No^1236547', 'Female', '0', 0),
(5, 'Ahmed', 'Yasin', '0100278951', 'ahmed@gmail.com', 'Ah%1616161', 'Male', '1', 1),
(6, 'Omar', 'ahmed', '0100220400', 'omar@gmail.com', 'Om#888888', 'Male', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
