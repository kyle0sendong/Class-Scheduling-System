-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2021 at 10:38 AM
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
  `start_time` float NOT NULL,
  `end_time` float NOT NULL,
  `duration` int NOT NULL,
  `id` int NOT NULL AUTO_INCREMENT,
  UNIQUE KEY `id` (`id`),
  KEY `teacher` (`teacher_id`)
) ENGINE=InnoDB AUTO_INCREMENT=82 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`grade_section`, `teacher_id`, `subject`, `day`, `start_time`, `end_time`, `duration`, `id`) VALUES
('8A', 110, 'Mathematics', 'mon', 1600, 1700, 100, 33),
('8A', 110, 'Mathematics', 'tue', 1600, 1700, 100, 34),
('8A', 110, 'Mathematics', 'wed', 1600, 1700, 100, 35),
('8A', 110, 'Mathematics', 'thu', 1600, 1700, 100, 36),
('8A', 110, 'Mathematics', 'fri', 1600, 1700, 100, 37),
('8A', 108, 'Science', 'mon', 775, 975, 200, 45),
('8A', 108, 'Science', 'tue', 775, 975, 200, 46),
('8A', 108, 'Science', 'wed', 775, 975, 200, 47),
('8A', 108, 'Science', 'thu', 775, 975, 200, 48),
('8A', 108, 'Science', 'fri', 775, 975, 200, 49),
('7A', 110, 'Mathematics', 'wed', 750, 850, 100, 52),
('7A', 110, 'Mathematics', 'fri', 750, 850, 100, 53),
('7A', 108, 'Science', 'tue', 750, 950, 200, 54),
('7A', 108, 'Science', 'thu', 750, 950, 200, 55),
('7A', 110, 'Mathematics', 'mon', 750, 950, 200, 56),
('7A', 93, 'English', 'wed', 850, 950, 100, 58),
('7A', 93, 'English', 'fri', 850, 950, 100, 59),
('7A', 93, 'English', 'mon', 950, 1150, 200, 60),
('7A', 94, 'Filipino', 'tue', 950, 1150, 200, 61),
('7A', 94, 'Filipino', 'thu', 950, 1150, 200, 62),
('7A', 98, 'MAPEH', 'wed', 950, 1150, 200, 67),
('7A', 98, 'MAPEH', 'fri', 950, 1150, 200, 68),
('7A', 99, 'AP', 'mon', 1300, 1500, 200, 69),
('7A', 99, 'AP', 'wed', 1300, 1400, 100, 72),
('7A', 102, 'ESP', 'thu', 1300, 1500, 200, 75),
('7A', 105, 'TLE', 'tue', 1300, 1500, 200, 78),
('7A', 105, 'TLE', 'fri', 1300, 1500, 200, 79),
('7B', 110, 'Mathematics', 'wed', 775, 875, 100, 80),
('7B', 110, 'Mathematics', 'thu', 775, 875, 100, 81);

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
) ENGINE=InnoDB AUTO_INCREMENT=98 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`id`, `adviser_id`, `grade`, `section`) VALUES
(73, 93, '10', 'A'),
(81, NULL, '10', 'B'),
(82, NULL, '10', 'C'),
(83, NULL, '10', 'D'),
(95, NULL, '10', 'E'),
(70, NULL, '7', 'A'),
(84, NULL, '7', 'B'),
(85, NULL, '7', 'C'),
(86, NULL, '7', 'D'),
(96, 93, '7', 'E'),
(97, 105, '7', 'F'),
(87, NULL, '8', 'A'),
(74, NULL, '8', 'B'),
(88, NULL, '8', 'C'),
(89, NULL, '8', 'D'),
(90, NULL, '8', 'E'),
(72, NULL, '9', 'A'),
(92, NULL, '9', 'B'),
(76, NULL, '9', 'C'),
(93, NULL, '9', 'D'),
(94, NULL, '9', 'E');

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
(69, 'TBD', '', '', 0),
(93, 'English', 'Teacher1', 'English', 4),
(94, 'Filipino', 'Teacher1', 'Filipino', 4),
(95, 'Filipino', 'Teacher2', 'Filipino', 0),
(96, 'MAPEH', 'Teacher1', 'MAPEH', 0),
(97, 'MAPEH', 'Teacher2', 'MAPEH', 0),
(98, 'MAPEH', 'Teacher3', 'MAPEH', 4),
(99, 'AP', 'Teacher1', 'AP', 3),
(100, 'AP', 'Teacher2', 'AP', 0),
(101, 'AP', 'Teacher3', 'AP', 0),
(102, 'ESP', 'Teacher1', 'ESP', 2),
(103, 'ESP', 'Teacher2', 'ESP', 0),
(104, 'ESP', 'Teacher3', 'ESP', 0),
(105, 'TLE', 'Teacher1', 'TLE', 4),
(106, 'TLE', 'Teacher2', 'TLE', 0),
(107, 'Science', 'Teacher1', 'Science', 0),
(108, 'Science', 'Teacher2', 'Science', 14),
(109, 'English', 'Teacher2', 'English', 0),
(110, 'Math', 'Teacher1', 'Mathematics', 11),
(111, 'Math', 'Teacher2', 'Mathematics', 0);

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
