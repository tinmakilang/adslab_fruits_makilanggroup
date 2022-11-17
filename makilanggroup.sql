-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 14, 2022 at 06:28 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `makilanggroup`
--

-- --------------------------------------------------------

--
-- Table structure for table `fruits`
--

CREATE TABLE `fruits` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `classification` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fruits`
--

INSERT INTO `fruits` (`id`, `name`, `classification`, `description`) VALUES
(3, 'b', 'berries', 'Makapagwapa'),
(4, 'nn', 'berries', 'gdghd'),
(5, 'Orange', 'citrus', 'Makapagwapa');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(6) UNSIGNED NOT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `image` varchar(225) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `password`, `image`) VALUES
(1, '', '', '', NULL),
(2, 'tin aviso makilang', 'tinmakilang', '2cb1b780138bc273459232edda0e4b96', NULL),
(3, 'tin aviso makilang', 'tinmakilang', '2cb1b780138bc273459232edda0e4b96', NULL),
(4, '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e', NULL),
(7, 'Lyca Manatad', 'manatad', 'e116a92931db17b7e63f3f82d21a3fe8', 'uploads/download.jfif'),
(8, 'Lyca Manatad', 'manatad', 'e116a92931db17b7e63f3f82d21a3fe8', 'uploads/download.jfif'),
(9, 'Kristine Alvarez', 'alvarez', 'e438d4969c839b982c4fcd32e7e97d45', 'uploads/download.jfif'),
(10, 'Kristine Alvarez', 'alvarez', 'e438d4969c839b982c4fcd32e7e97d45', 'uploads/download.jfif'),
(11, 'tin aviso makilang', 'tinmakilang', '81dc9bdb52d04dc20036dbd8313ed055', 'uploads/download.jfif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fruits`
--
ALTER TABLE `fruits`
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
-- AUTO_INCREMENT for table `fruits`
--
ALTER TABLE `fruits`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
