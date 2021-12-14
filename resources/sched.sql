-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 14, 2021 at 02:05 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sched`
--

-- --------------------------------------------------------

--
-- Table structure for table `try`
--

CREATE TABLE `try` (
  `id` int(11) NOT NULL,
  `time` text NOT NULL,
  `hours` int(11) DEFAULT NULL,
  `mon` varchar(10) DEFAULT NULL,
  `tue` varchar(10) DEFAULT NULL,
  `wed` varchar(10) DEFAULT NULL,
  `thu` varchar(10) DEFAULT NULL,
  `fri` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `try`
--

INSERT INTO `try` (`id`, `time`, `hours`, `mon`, `tue`, `wed`, `thu`, `fri`) VALUES
(1, '07:30-08:30', 3, '', '', '8-B', '8-B', '8-C'),
(2, '08:30-9:30', 2, '', '8-C', '8-C', '8-C', '8-B'),
(3, '09:30-09:45', 0, '', '', '', '', ''),
(4, '09:45-10:45', 0, '', '', '', '', ''),
(5, '10:45-11:45', 0, '', '', '', '', ''),
(6, '11:45-12:30', 0, '', '', '', '', ''),
(7, '12:30-01:30', 4, '8-B', '8-E', '8-E', '8-E', '8-E'),
(8, '01:30-02:30', 3, '8-A', '8-A', '8-A', '8-A', ''),
(9, '02:30-03:30', 0, '', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `try`
--
ALTER TABLE `try`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `try`
--
ALTER TABLE `try`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
