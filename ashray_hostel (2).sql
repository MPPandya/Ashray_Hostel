-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 13, 2018 at 06:36 AM
-- Server version: 5.7.19
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ashray hostel`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_educational`
--

DROP TABLE IF EXISTS `booking_educational`;
CREATE TABLE IF NOT EXISTS `booking_educational` (
  `user_id` int(20) NOT NULL,
  `college_name` varchar(300) NOT NULL,
  `college_address` varchar(300) NOT NULL,
  `degree` varchar(100) NOT NULL,
  `Branch` varchar(150) NOT NULL,
  `year` varchar(100) NOT NULL,
  KEY `USER_ID _edu` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_gaurdian`
--

DROP TABLE IF EXISTS `booking_gaurdian`;
CREATE TABLE IF NOT EXISTS `booking_gaurdian` (
  `user_id` int(20) NOT NULL,
  `g_name` varchar(300) NOT NULL,
  `g_address` varchar(300) NOT NULL,
  `g_mobile` int(11) NOT NULL,
  `g_email` varchar(100) NOT NULL,
  `occupation` varchar(100) NOT NULL,
  `anual_income` int(50) NOT NULL,
  `relationship` text NOT NULL,
  KEY `USER_ID _fkg` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_localgaurdian`
--

DROP TABLE IF EXISTS `booking_localgaurdian`;
CREATE TABLE IF NOT EXISTS `booking_localgaurdian` (
  `user_id` int(20) NOT NULL,
  `LG_name` varchar(300) NOT NULL,
  `LG_address` varchar(300) NOT NULL,
  `LG_relationship` varchar(300) NOT NULL,
  `LG_mobile` int(10) NOT NULL,
  `LG_email` varchar(100) NOT NULL,
  KEY `USER_ID _fkl` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_personal`
--

DROP TABLE IF EXISTS `booking_personal`;
CREATE TABLE IF NOT EXISTS `booking_personal` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(300) NOT NULL,
  `package` varchar(100) NOT NULL,
  `date_of_birth` date NOT NULL,
  `bloodgroup` text NOT NULL,
  `nationality` varchar(50) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking_educational`
--
ALTER TABLE `booking_educational`
  ADD CONSTRAINT `USER_ID _edu` FOREIGN KEY (`user_id`) REFERENCES `booking_personal` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_gaurdian`
--
ALTER TABLE `booking_gaurdian`
  ADD CONSTRAINT `USER_ID _fkg` FOREIGN KEY (`user_id`) REFERENCES `booking_personal` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_localgaurdian`
--
ALTER TABLE `booking_localgaurdian`
  ADD CONSTRAINT `USER_ID _fkl` FOREIGN KEY (`user_id`) REFERENCES `booking_personal` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
