-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 07, 2021 at 01:03 AM
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
-- Table structure for table `adviser`
--

DROP TABLE IF EXISTS `adviser`;
CREATE TABLE IF NOT EXISTS `adviser` (
  `teacher_id` int(11) DEFAULT NULL,
  `gradesection_id` int(11) DEFAULT NULL,
  KEY `teacher id` (`teacher_id`),
  KEY `gradesection id` (`gradesection_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adviser`
--

INSERT INTO `adviser` (`teacher_id`, `gradesection_id`) VALUES
(81, 3),
(82, 4),
(69, 5),
(83, 6),
(81, 7);

-- --------------------------------------------------------

--
-- Table structure for table `grade_level`
--

DROP TABLE IF EXISTS `grade_level`;
CREATE TABLE IF NOT EXISTS `grade_level` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `grade` varchar(32) NOT NULL,
  `section` varchar(32) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`id`, `grade`, `section`) VALUES
(3, '7', 'A'),
(4, '8', 'A'),
(5, '9', 'A'),
(6, '10', 'A'),
(7, '7', 'B');

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
) ENGINE=InnoDB AUTO_INCREMENT=84 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `firstName`, `lastName`, `dept`) VALUES
(69, 'TBD', '-', ' -'),
(74, 'asd', 'asd', 'Mathematics'),
(76, 'asd', 'asda', 'Science'),
(77, 'hjd', 'dyh', 'Science'),
(78, 'd', 'd', 'Filipino'),
(79, 'cc', 'cc', 'English'),
(80, 'vvv', 'vvvv', 'AP'),
(81, 'heyheyyyy', 'aaa', 'Mathematics'),
(82, 'nice ', 'gumagana na', 'Science'),
(83, 'after', 'so looooong', 'MAPEH');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `adviser`
--
ALTER TABLE `adviser`
  ADD CONSTRAINT `gradesection id` FOREIGN KEY (`gradesection_id`) REFERENCES `grade_level` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `teacher id` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
