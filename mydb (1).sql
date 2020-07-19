-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 20, 2018 at 07:46 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_educational`
--

CREATE TABLE `booking_educational` (
  `user_id` int(11) NOT NULL,
  `college_name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `college_address` varchar(300) CHARACTER SET utf8 NOT NULL,
  `degree` varchar(100) CHARACTER SET utf8 NOT NULL,
  `Branch` varchar(150) CHARACTER SET utf8 NOT NULL,
  `year` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_educational`
--

INSERT INTO `booking_educational` (`user_id`, `college_name`, `college_address`, `degree`, `Branch`, `year`) VALUES
(1, 'dfdf', 'dfdfd', 'Diploma', 'IT', 'F.Y.'),
(2, 'ms', 'fdfd', 'Diploma', 'Information Technology', 'F.Y.'),
(3, 'msu', 'fatehgunj', 'Diploma', 'Information Technology', 'F.Y.'),
(7, 'msu', 'fatehgunj', 'Diploma', 'Information Technology', 'T.Y.');

-- --------------------------------------------------------

--
-- Table structure for table `booking_gaurdian`
--

CREATE TABLE `booking_gaurdian` (
  `user_id` int(11) NOT NULL,
  `g_name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `g_address` varchar(300) CHARACTER SET utf8 NOT NULL,
  `g_mobile` int(16) NOT NULL,
  `g_email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `occupation` varchar(100) CHARACTER SET utf8 NOT NULL,
  `anual_income` int(50) NOT NULL,
  `relationship` text CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_gaurdian`
--

INSERT INTO `booking_gaurdian` (`user_id`, `g_name`, `g_address`, `g_mobile`, `g_email`, `occupation`, `anual_income`, `relationship`) VALUES
(1, 'asddd', 'sdsds', 123456789, 'a@gmail.com', 'ddfd', 455, 'ccvc'),
(2, 'fddf', 'dfdfd', 12222222, 'a@gmail.com', 'sdss', 222, 'uncle'),
(3, 'aaaa', 'zsds', 12345643, 'ad@gmail.com', 'dfdf', 3214, 'uncle'),
(7, 'dfdf', 'dfdf', 2121212121, 'a@gmail.com', 'dfd', 2323, 'uncle');

-- --------------------------------------------------------

--
-- Table structure for table `booking_localgaurdian`
--

CREATE TABLE `booking_localgaurdian` (
  `user_id` int(11) NOT NULL,
  `LG_name` varchar(300) CHARACTER SET utf8 NOT NULL,
  `LG_address` varchar(300) CHARACTER SET utf8 NOT NULL,
  `LG_relationship` varchar(300) CHARACTER SET utf8 NOT NULL,
  `LG_mobile` int(16) NOT NULL,
  `LG_email` varchar(100) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_localgaurdian`
--

INSERT INTO `booking_localgaurdian` (`user_id`, `LG_name`, `LG_address`, `LG_relationship`, `LG_mobile`, `LG_email`) VALUES
(1, 'xcxc', 'lgaddress', 'ccvc', 123456789, 'a@gmail.com'),
(2, 'fgf', 'lgaddress', 'uncle', 3233232, 'a@gmail.com'),
(3, 'lax', 'lgaddress', 'uncle', 43323432, 'as@gmail.com'),
(7, 'ddfd', 'lgaddress', 'uncle', 1212112121, 'a@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `booking_personal`
--

CREATE TABLE `booking_personal` (
  `user_id` int(100) NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 NOT NULL,
  `mobile_no` int(16) NOT NULL,
  `email` varchar(100) CHARACTER SET utf8 NOT NULL,
  `address` varchar(300) CHARACTER SET utf8 NOT NULL,
  `package` varchar(100) CHARACTER SET utf8 NOT NULL,
  `date_of_birth` date NOT NULL,
  `bloodgroup` text CHARACTER SET utf8 NOT NULL,
  `nationality` varchar(50) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_personal`
--

INSERT INTO `booking_personal` (`user_id`, `name`, `mobile_no`, `email`, `address`, `package`, `date_of_birth`, `bloodgroup`, `nationality`) VALUES
(1, 'adity', 22323223, 'adpanchal15@gmail.com', 'sdsd', '2400 per month with breakfast', '2018-03-18', 'a+', 'sdsds'),
(2, 'avani', 1234567890, 'avaniaditya19@gmail.com', 'dfddfdf', '2400 per month with breakfast', '2018-03-17', 'a+', 'Indian'),
(3, 'adi', 121212121, 'avaniaditya19@gmail.com', '258,dfdf,vadodara', '2400 per month with breakfast', '2018-03-16', 'a+', 'Indian'),
(7, 'Panchal Aditya Dilipbhai', 223232323, 'adpanchal15@gmail.com', '258,ranchhodraynagar,gorwa,vadodara', '2400 per month with breakfast', '2018-03-16', 'a+', 'Indian');

-- --------------------------------------------------------

--
-- Table structure for table `enquiry`
--

CREATE TABLE `enquiry` (
  `User_Id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `city` text NOT NULL,
  `college` varchar(20) NOT NULL,
  `reference` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `enquiry`
--

INSERT INTO `enquiry` (`User_Id`, `first_name`, `last_name`, `email`, `mobile_no`, `city`, `college`, `reference`) VALUES
(1, 'cx', 'cssd', 'adpanchal15@gmail.com', 1234567890, 'vbv', 'FGFG', 'fdfffgfg'),
(9, 'Aditya', 'Panchal', 'avaniaditya19@gmail.com', 1111111111, 'srrrr', 'DDDFD', 'dddd'),
(10, 'aeeee', 's', 'madhavpandya2930@gmail.com', 1111111111, 'srrrr', 'DDDFD', 'dddd'),
(11, 'ffffffff', 'dfdfdfd', 'khalifaaiyub@gmail.com', 2121212121, 'frrrrr', 'gfgfgf', 'fgfgfgf'),
(12, 'xfdf', 'jdfdfj', '1212121212@gmail.com', 1234567890, 'dfdf', 'fdjf', 'jddfd'),
(25, 'dfdfdf', 'fddfd', 'dfddfdf@gmail.com', 33434, 'ddfdf', 'dfdf', 'fdfdf'),
(24, 'gfgfd', 'fgfg', 'fgffgfgf@gmail.com', 343, '2ddffd', 'dddd', 'ddfdfd');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `User_Id` int(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Account_Type` int(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`User_Id`, `Password`, `Account_Type`) VALUES
(2, '2018-03-24', 0),
(3, '2018-03-16', 1),
(7, '2018-04-08', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_educational`
--
ALTER TABLE `booking_educational`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `booking_gaurdian`
--
ALTER TABLE `booking_gaurdian`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `booking_localgaurdian`
--
ALTER TABLE `booking_localgaurdian`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `booking_personal`
--
ALTER TABLE `booking_personal`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `enquiry`
--
ALTER TABLE `enquiry`
  ADD PRIMARY KEY (`User_Id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`User_Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_educational`
--
ALTER TABLE `booking_educational`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `booking_gaurdian`
--
ALTER TABLE `booking_gaurdian`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `booking_localgaurdian`
--
ALTER TABLE `booking_localgaurdian`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `booking_personal`
--
ALTER TABLE `booking_personal`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `enquiry`
--
ALTER TABLE `enquiry`
  MODIFY `User_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `User_Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
