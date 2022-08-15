-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 15, 2022 at 06:03 PM
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
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(100) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `course`) VALUES
(1, 'maths'),
(2, 'physics'),
(3, 'english'),
(4, 'biology');

-- --------------------------------------------------------

--
-- Table structure for table `regcourse`
--

CREATE TABLE `regcourse` (
  `user` int(43) NOT NULL,
  `course` int(43) NOT NULL,
  `score` int(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `regcourse`
--

INSERT INTO `regcourse` (`user`, `course`, `score`) VALUES
(1, 1, NULL),
(3, 4, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `status`, `password`, `image`) VALUES
(1, 'olaoluwa', 'olowoporoku@gmail.com', 'student', '$2y$10$w.cObEyGS2D.R3aqcELDEOb2DRLTfd9EUAKHy4cUq./L0LRzAD2mO', 'uploadimage/62e21c3a04e7e3.76218394.jpg'),
(2, 'ade', 'ade@gmail.com', 'lecturer', '$2y$10$sfuK9bykRb2FqOagIhjTCuyvm9LpYDQtMLPuYR1oC2b.uLLOT/QJm', 'uploadimage/62ea7bc39d6456.04916884.jpg'),
(3, 'morire', 'moriregold@gmail.com', 'student', '$2y$10$fVA9uo89tl8s2kkkDjLiteBQcWc.oVxIfIV4SIk/L9nUxDEvYOVPq', 'uploadimage/62ea7c34bcac41.87285778.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `regcourse`
--
ALTER TABLE `regcourse`
  ADD UNIQUE KEY `course` (`course`),
  ADD UNIQUE KEY `user` (`user`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`id`) REFERENCES `user` (`id`);

--
-- Constraints for table `regcourse`
--
ALTER TABLE `regcourse`
  ADD CONSTRAINT `regcourse_ibfk_1` FOREIGN KEY (`user`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `regcourse_ibfk_2` FOREIGN KEY (`course`) REFERENCES `course` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
