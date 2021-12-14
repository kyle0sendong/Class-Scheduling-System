-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 14, 2021 at 01:43 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

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
-- Table structure for table `class_schedule`
--

DROP TABLE IF EXISTS `class_schedule`;
CREATE TABLE IF NOT EXISTS `class_schedule` (
  `grade_section` varchar(32) NOT NULL,
  `teacher_id` int DEFAULT NULL,
  `subject` varchar(32) NOT NULL,
  `day` varchar(32) NOT NULL,
  `start_time` int NOT NULL,
  `end_time` int NOT NULL,
  `duration` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`),
  KEY `teacher` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`grade_section`, `teacher_id`, `subject`, `day`, `start_time`, `end_time`, `duration`, `id`) VALUES
('7A', 108, 'Science', 'mon', 950, 1100, 150, 17),
('7A', 108, 'Science', 'wed', 950, 1100, 150, 18),
('7A', 108, 'Science', 'thu', 950, 1100, 150, 19),
('7A', 93, 'English', 'tue', 1100, 1200, 100, 20),
('7A', 93, 'English', 'wed', 1100, 1200, 100, 21),
('7A', 93, 'English', 'fri', 1100, 1200, 100, 22),
('7A', 94, 'Filipino', 'mon', 1350, 1500, 150, 23),
('7A', 94, 'Filipino', 'tue', 1350, 1500, 150, 24),
('7A', 94, 'Filipino', 'wed', 1350, 1500, 150, 25),
('7A', 96, 'MAPEH', 'wed', 750, 900, 150, 26),
('7A', 96, 'MAPEH', 'thu', 750, 900, 150, 27),
('7A', 96, 'MAPEH', 'fri', 750, 900, 150, 28),
('7A', 99, 'AP', 'thu', 1300, 1600, 300, 29),
('7A', 99, 'AP', 'fri', 1300, 1600, 300, 30),
('7A', 110, 'Mathematics', 'mon', 700, 900, 200, 31),
('7A', 110, 'Mathematics', 'tue', 700, 900, 200, 32);

-- --------------------------------------------------------

--
-- Table structure for table `grade_level`
--

DROP TABLE IF EXISTS `grade_level`;
CREATE TABLE IF NOT EXISTS `grade_level` (
  `id` int NOT NULL AUTO_INCREMENT,
  `adviser_id` int DEFAULT NULL,
  `grade` varchar(32) NOT NULL,
  `section` varchar(32) NOT NULL,
  PRIMARY KEY (`grade`,`section`),
  UNIQUE KEY `id` (`id`),
  KEY `adviser` (`adviser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`id`, `adviser_id`, `grade`, `section`) VALUES
(69, NULL, '-', '-'),
(73, 93, '10', 'A'),
(70, NULL, '7', 'A'),
(71, 94, '8', 'A'),
(74, 69, '8', 'B'),
(72, 69, '9', 'A'),
(76, NULL, '9', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `firstName` varchar(32) NOT NULL,
  `lastName` varchar(32) NOT NULL,
  `dept` varchar(32) NOT NULL,
  `workload` float NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=112 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`id`, `firstName`, `lastName`, `dept`, `workload`) VALUES
(69, 'TBD', '-', '-', 0),
(93, 'English', 'Teacher1', 'English', 3),
(94, 'Filipino', 'Teacher1', 'Filipino', 4.5),
(95, 'Filipino', 'Teacher2', 'Filipino', 0),
(96, 'MAPEH', 'Teacher1', 'MAPEH', 4.5),
(97, 'MAPEH', 'Teacher2', 'MAPEH', 0),
(98, 'MAPEH', 'Teacher3', 'MAPEH', 0),
(99, 'AP', 'Teacher1', 'AP', 6),
(100, 'AP', 'Teacher2', 'AP', 0),
(101, 'AP', 'Teacher3', 'AP', 0),
(102, 'ESP', 'Teacher1', 'ESP', 0),
(103, 'ESP', 'Teacher2', 'ESP', 0),
(104, 'ESP', 'Teacher3', 'ESP', 0),
(105, 'TLE', 'Teacher1', 'TLE', 0),
(106, 'TLE', 'Teacher2', 'TLE', 0),
(107, 'Science', 'Teacher1', 'Science', 0),
(108, 'Science', 'Teacher2', 'Science', 4.5),
(109, 'English', 'Teacher2', 'English', 0),
(110, 'Mathematics', 'Teacher1', 'Mathematics', 4),
(111, 'Mathematics', 'Teacher2', 'Mathematics', 0);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_schedule`
--
ALTER TABLE `class_schedule`
  ADD CONSTRAINT `teacher` FOREIGN KEY (`teacher_id`) REFERENCES `teacher` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `grade_level`
--
ALTER TABLE `grade_level`
  ADD CONSTRAINT `adviser` FOREIGN KEY (`adviser_id`) REFERENCES `teacher` (`id`) ON DELETE SET NULL ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
