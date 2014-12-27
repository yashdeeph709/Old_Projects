-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 04, 2014 at 05:52 PM
-- Server version: 5.5.24-log
-- PHP Version: 5.3.13

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lifecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `asianpaints_112014`
--

CREATE TABLE IF NOT EXISTS `asianpaints_112014` (
  `ename` varchar(90) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `attendance` int(11) DEFAULT NULL,
  `basic` int(11) DEFAULT NULL,
  `speall` int(11) DEFAULT NULL,
  `totalbasic` int(11) DEFAULT NULL,
  `hra` int(11) DEFAULT NULL,
  `medall` int(11) DEFAULT NULL,
  `conv` int(11) DEFAULT NULL,
  `perall` int(11) DEFAULT NULL,
  `gross` int(11) DEFAULT NULL,
  `epf` int(11) DEFAULT NULL,
  `epfc` int(11) DEFAULT NULL,
  `wc` int(11) DEFAULT NULL,
  `advance` int(11) DEFAULT NULL,
  `netpay` int(11) DEFAULT NULL,
  `ctc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `asianpaints_112014`
--

INSERT INTO `asianpaints_112014` (`ename`, `designation`, `attendance`, `basic`, `speall`, `totalbasic`, `hra`, `medall`, `conv`, `perall`, `gross`, `epf`, `epfc`, `wc`, `advance`, `netpay`, `ctc`) VALUES
('Milind Shinde', 'agm', 31, 4800, 1577, 6377, 3900, 1712, 800, 1576, 14365, 765, 867, 100, 0, 13500, 15763),
('Santosh Damagude', 'agm', 26, 4026, 1323, 5348, 2684, 1823, 671, 1300, 11827, 642, 727, 84, 0, 11101, 12999),
('Sachin Male', 'sap operator', 31, 4800, 1577, 6377, 3200, 374, 800, 1350, 12101, 765, 867, 100, 0, 11236, 13499),
('yashdeep', 'agm', 31, 2300, 12300, 14600, 2399, 2139, 2399, 2399, 23936, 1752, 1987, 100, 0, 22084, 27139);

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE IF NOT EXISTS `departments` (
  `did` int(11) NOT NULL AUTO_INCREMENT,
  `dname` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`did`, `dname`) VALUES
(1, 'asian paints'),
(2, 'pune kirloskar');

-- --------------------------------------------------------

--
-- Table structure for table `earning`
--

CREATE TABLE IF NOT EXISTS `earning` (
  `eid` int(11) NOT NULL DEFAULT '0',
  `did` int(11) NOT NULL DEFAULT '0',
  `attendance` int(11) DEFAULT NULL,
  `Basic` int(11) DEFAULT NULL,
  `speall` int(11) DEFAULT NULL,
  `TotalBasic` int(11) DEFAULT NULL,
  `hra` int(11) DEFAULT NULL,
  `medall` int(11) DEFAULT NULL,
  `conv` int(11) DEFAULT NULL,
  `perall` int(11) DEFAULT NULL,
  `gross` int(11) DEFAULT NULL,
  `epf` int(11) DEFAULT NULL,
  `epfc` int(11) DEFAULT NULL,
  `wc` int(11) DEFAULT NULL,
  `advance` int(11) DEFAULT NULL,
  `netpay` int(11) DEFAULT NULL,
  `ctc` int(11) DEFAULT NULL,
  PRIMARY KEY (`eid`,`did`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE IF NOT EXISTS `employees` (
  `eid` int(11) NOT NULL AUTO_INCREMENT,
  `did` int(11) DEFAULT NULL,
  `ename` varchar(90) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `Basic` int(10) DEFAULT NULL,
  `speall` int(10) DEFAULT NULL,
  `hra` int(10) DEFAULT NULL,
  `medall` int(10) DEFAULT NULL,
  `conv` int(10) DEFAULT NULL,
  `perall` int(10) DEFAULT NULL,
  `gross` int(10) DEFAULT NULL,
  `bonus` int(10) DEFAULT NULL,
  `epf` int(11) DEFAULT NULL,
  PRIMARY KEY (`eid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`eid`, `did`, `ename`, `designation`, `Basic`, `speall`, `hra`, `medall`, `conv`, `perall`, `gross`, `bonus`, `epf`) VALUES
(1, 1, 'Milind Shinde', 'agm', 4800, 1577, 3900, 1712, 800, 1576, 14365, 531, 1),
(2, 1, 'Santosh Damagude', 'agm', 4800, 1577, 3200, 2174, 800, 1550, 14127, 531, 1),
(3, 1, 'Sachin Male', 'sap operator', 4800, 1577, 3200, 374, 800, 1350, 12101, 531, 1),
(4, 1, 'yashdeep', 'agm', 2300, 12300, 2399, 2139, 2399, 2399, 23936, 1216, 1),
(5, 2, 'Gokul Prasad', 'Comm Manager', 6750, 0, 3375, 0, 1485, 0, 11610, 562, 0),
(6, 2, 'prashant patil', 'Comm Manager', 7000, 0, 3500, 0, 1540, 0, 12040, 583, 0),
(7, 2, 'rajesh dhore', 'warehouse', 6600, 0, 2500, 0, 1220, 0, 10320, 550, 0),
(8, 2, 'Nilesh Kalbhore', 'warehouse', 7000, 0, 3500, 0, 1540, 0, 12040, 583, 0),
(9, 2, 'Anand Shinde', 'warehouse', 6800, 0, 2800, 0, 1580, 0, 11180, 566, 0),
(10, 2, 'Dhanraj singmore', 'warehouse', 6600, 0, 2500, 0, 1220, 0, 10320, 550, 0),
(11, 2, 'Amit shitole', 'warehouse', 6800, 0, 2800, 0, 2261, 0, 11861, 566, 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE IF NOT EXISTS `history` (
  `hid` int(11) NOT NULL AUTO_INCREMENT,
  `historyname` varchar(90) DEFAULT NULL,
  PRIMARY KEY (`hid`),
  UNIQUE KEY `historyname` (`historyname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`hid`, `historyname`) VALUES
(1, 'asianpaints_112014'),
(2, 'punekirloskar_112014');

-- --------------------------------------------------------

--
-- Table structure for table `punekirloskar_112014`
--

CREATE TABLE IF NOT EXISTS `punekirloskar_112014` (
  `ename` varchar(90) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `attendance` int(11) DEFAULT NULL,
  `basic` int(11) DEFAULT NULL,
  `speall` int(11) DEFAULT NULL,
  `totalbasic` int(11) DEFAULT NULL,
  `hra` int(11) DEFAULT NULL,
  `medall` int(11) DEFAULT NULL,
  `conv` int(11) DEFAULT NULL,
  `perall` int(11) DEFAULT NULL,
  `gross` int(11) DEFAULT NULL,
  `epf` int(11) DEFAULT NULL,
  `epfc` int(11) DEFAULT NULL,
  `wc` int(11) DEFAULT NULL,
  `advance` int(11) DEFAULT NULL,
  `netpay` int(11) DEFAULT NULL,
  `ctc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `punekirloskar_112014`
--

INSERT INTO `punekirloskar_112014` (`ename`, `designation`, `attendance`, `basic`, `speall`, `totalbasic`, `hra`, `medall`, `conv`, `perall`, `gross`, `epf`, `epfc`, `wc`, `advance`, `netpay`, `ctc`) VALUES
('Gokul Prasad', 'Comm Manager', 31, 6750, 0, 6750, 3375, 0, 1485, 0, 11610, 810, 918, 100, 0, 10700, 13090),
('prashant patil', 'Comm Manager', 31, 7000, 0, 7000, 3500, 0, 1540, 0, 12040, 840, 952, 100, 2500, 8600, 13575),
('rajesh dhore', 'warehouse', 31, 6600, 0, 6600, 2500, 0, 1220, 0, 10320, 792, 898, 100, 0, 9428, 11767),
('Nilesh Kalbhore', 'warehouse', 31, 7000, 0, 7000, 3500, 0, 1540, 0, 12040, 840, 952, 100, 0, 11100, 13575),
('Anand Shinde', 'warehouse', 31, 6800, 0, 6800, 2800, 0, 1580, 0, 11180, 816, 925, 100, 0, 10264, 12671),
('Dhanraj singmore', 'warehouse', 31, 6600, 0, 6600, 2500, 0, 1220, 0, 10320, 792, 898, 100, 0, 9428, 11767),
('Amit shitole', 'warehouse', 31, 6800, 0, 6800, 2800, 0, 2261, 0, 11861, 816, 925, 100, 0, 10945, 13352);

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE IF NOT EXISTS `temp` (
  `eid` int(11) NOT NULL DEFAULT '0',
  `did` int(11) DEFAULT NULL,
  `ename` varchar(90) DEFAULT NULL,
  `designation` varchar(30) DEFAULT NULL,
  `Basic` int(10) DEFAULT NULL,
  `speall` int(10) DEFAULT NULL,
  `hra` int(10) DEFAULT NULL,
  `medall` int(10) DEFAULT NULL,
  `conv` int(10) DEFAULT NULL,
  `perall` int(10) DEFAULT NULL,
  `gross` int(10) DEFAULT NULL,
  `bonus` int(10) DEFAULT NULL,
  `epf` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`eid`, `did`, `ename`, `designation`, `Basic`, `speall`, `hra`, `medall`, `conv`, `perall`, `gross`, `bonus`, `epf`) VALUES
(1, 1, 'Milind Shinde', 'agm', 4800, 1577, 3900, 1712, 800, 1576, 14365, 531, 1),
(2, 1, 'Santosh Damagude', 'agm', 4800, 1577, 3200, 2174, 800, 1550, 14127, 531, 1),
(3, 1, 'Sachin Male', 'sap operator', 4800, 1577, 3200, 374, 800, 1350, 12101, 531, 1),
(4, 1, 'yashdeep', 'agm', 2300, 12300, 2399, 2139, 2399, 2399, 23936, 1216, 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
