-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2021 at 07:35 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mobile_robot_base_project_2_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `movement`
--

CREATE TABLE `movement` (
  `id` int(1) NOT NULL,
  `forwardMovement` varchar(1) NOT NULL,
  `leftMovement` varbinary(1) NOT NULL,
  `stopMovement` varchar(1) NOT NULL,
  `rightMovement` varchar(1) NOT NULL,
  `backwardMovement` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movement`
--

INSERT INTO `movement` (`id`, `forwardMovement`, `leftMovement`, `stopMovement`, `rightMovement`, `backwardMovement`) VALUES
(1, 'f', '', '', '', ''),
(2, 'f', '', '', '', ''),
(3, '', '', '', '', 'b'),
(4, '', '', '', '', 'b'),
(5, '', '', '', 'r', ''),
(6, '', 0x6c, '', '', ''),
(7, '', '', 's', '', ''),
(8, '', '', '', 'r', ''),
(9, '', '', '', '', 'b'),
(10, '', 0x6c, '', '', ''),
(11, 'f', '', '', '', ''),
(12, '', '', '', 'r', ''),
(13, '', '', 's', '', ''),
(14, 'f', '', '', '', ''),
(15, '', 0x6c, '', '', ''),
(16, '', '', 's', '', ''),
(17, '', '', '', 'r', ''),
(18, '', '', '', '', 'b'),
(19, 'f', '', '', '', ''),
(20, '', '', 's', '', ''),
(21, '', '', '', '', 'b'),
(22, '', 0x6c, '', '', ''),
(23, '', '', '', 'r', ''),
(24, '', '', '', '', 'b'),
(25, '', 0x6c, '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `movement`
--
ALTER TABLE `movement`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `movement`
--
ALTER TABLE `movement`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
