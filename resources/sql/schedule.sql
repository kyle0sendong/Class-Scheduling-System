-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 08, 2021 at 12:43 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `schedule`
--

-- --------------------------------------------------------

--
-- Table structure for table `grade_level`
--

DROP TABLE IF EXISTS `grade_level`;
CREATE TABLE IF NOT EXISTS `grade_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adviser_id` int(11) DEFAULT NULL,
  `grade` varchar(32) NOT NULL,
  `section` varchar(32) NOT NULL,
  PRIMARY KEY (`grade`,`section`),
  UNIQUE KEY `id` (`id`),
  KEY `adviser` (`adviser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`id`, `adviser_id`, `grade`, `section`) VALUES
(16, 74, '10', 'A'),
(12, 70, '7', 'A'),
(15, 71, '7', 'C'),
(14, 71, '7', 'G');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int(32) NOT NULL AUTO_INCREMENT,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `dept` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=81 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `firstName`, `lastName`, `dept`) VALUES
(69, 'TBD', '-', '-'),
(70, 'Kyle', 'Destura', 'Mathematics'),
(71, 'cas', 'dawedasd', 'English'),
(72, 'Kylew', 'asd', 'English'),
(74, 'czxc', 'asdzzz', 'Mathematics'),
(80, 'Kyle', 'Destura', 'TLE');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `grade_level`
--
ALTER TABLE `grade_level`
  ADD CONSTRAINT `adviser` FOREIGN KEY (`adviser_id`) REFERENCES `teacher` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
