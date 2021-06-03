-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 03, 2021 at 12:39 AM
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
-- Database: `maylancer`
--

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

DROP TABLE IF EXISTS `employeedetails`;
CREATE TABLE IF NOT EXISTS `employeedetails` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `empid` varchar(100) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `yearofpassing` int(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `permanentaddress` varchar(100) NOT NULL,
  `temporaryaddress` varchar(100) NOT NULL,
  `contactnumber` int(16) NOT NULL,
  `aadhaarno` int(30) NOT NULL,
  `fathername` varchar(70) NOT NULL,
  `mothername` varchar(70) NOT NULL,
  `mailid` varchar(70) NOT NULL,
  `shift` varchar(50) NOT NULL,
  `jobtitle` varchar(70) NOT NULL,
  `accountnumber` int(20) NOT NULL,
  `ifsccode` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `empid`, `firstname`, `lastname`, `qualification`, `yearofpassing`, `bloodgroup`, `permanentaddress`, `temporaryaddress`, `contactnumber`, `aadhaarno`, `fathername`, `mothername`, `mailid`, `shift`, `jobtitle`, `accountnumber`, `ifsccode`) VALUES
(1, '11', 'ihgugftuy', 'ffffs', 'msc', 2021, 'o+ve', 'kayathar', 'kayathar', 2147483647, 12345667, 'ramasubbu', 'andal', 'ramohan@gmail.com', 'first', 'developer', 0, 'trtu6'),
(2, '102', 'Mohan', 'kumar', 'msc', 2021, 'o+ve', 'kayathar', 'kayathar', 2147483647, 12345667, 'dddddddd', 'fdsyyf', 'ramohan@gmail.com', 'first', 'developer', 0, 'trtu6'),
(3, '102', 'Mohan', 'kumar', 'msc', 2021, 'o+ve', 'kayathar', 'kayathar', 2147483647, 12345667, 'dddddddd', 'fdsyyf', 'ramohan@gmail.com', 'first', 'developer', 0, 'trtu6');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
