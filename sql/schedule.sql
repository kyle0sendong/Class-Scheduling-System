-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 15, 2021 at 04:37 PM
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
) ENGINE=InnoDB AUTO_INCREMENT=90 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_schedule`
--

INSERT INTO `class_schedule` (`grade_section`, `teacher_id`, `subject`, `day`, `start_time`, `end_time`, `duration`, `id`) VALUES
('8A', 110, 'Mathematics', 'wed', 1600, 1700, 100, 35),
('8A', 110, 'Mathematics', 'thu', 1600, 1700, 100, 36),
('8A', 110, 'Mathematics', 'fri', 1600, 1700, 100, 37),
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
('7B', 110, 'Mathematics', 'thu', 775, 875, 100, 81),
('7B', 107, 'Science', 'mon', 750, 950, 200, 83),
('7E', 110, 'Mathematics', 'wed', 1500, 1600, 100, 87),
('7E', 110, 'Mathematics', 'thu', 1500, 1600, 100, 88),
('7E', 110, 'Mathematics', 'fri', 1500, 1600, 100, 89);

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
  `workload` double NOT NULL,
  PRIMARY KEY (`grade`,`section`),
  UNIQUE KEY `id` (`id`),
  KEY `adviser` (`adviser_id`)
) ENGINE=InnoDB AUTO_INCREMENT=106 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `grade_level`
--

INSERT INTO `grade_level` (`id`, `adviser_id`, `grade`, `section`, `workload`) VALUES
(73, 93, '10', 'A', 0),
(81, NULL, '10', 'B', 0),
(82, NULL, '10', 'C', 0),
(83, NULL, '10', 'D', 0),
(95, NULL, '10', 'E', 0),
(70, NULL, '7', 'A', 29),
(84, NULL, '7', 'B', 4),
(101, 69, '7', 'C', 0),
(96, 93, '7', 'E', 3),
(87, NULL, '8', 'A', 3),
(74, NULL, '8', 'B', 0),
(88, NULL, '8', 'C', 0),
(89, NULL, '8', 'D', 0),
(90, NULL, '8', 'E', 0),
(72, NULL, '9', 'A', 0),
(92, NULL, '9', 'B', 0),
(76, NULL, '9', 'C', 0),
(93, NULL, '9', 'D', 0),
(94, NULL, '9', 'E', 0);

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
(107, 'Science', 'Teacher1', 'Science', 2),
(108, 'Science', 'Teacher2', 'Science', 4),
(109, 'English', 'Teacher2', 'English', 0),
(110, 'Math', 'Teacher1', 'Mathematics', 12),
(111, 'Math', 'Teacher2', 'Mathematics', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_name` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_name`, `password`) VALUES
('admin', 'engineering');

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
