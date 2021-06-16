-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 16, 2021 at 05:13 AM
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
-- Table structure for table `customerdetails`
--

DROP TABLE IF EXISTS `customerdetails`;
CREATE TABLE IF NOT EXISTS `customerdetails` (
  `id` int(40) NOT NULL AUTO_INCREMENT,
  `customername` varchar(100) NOT NULL,
  `companyname` varchar(70) NOT NULL,
  `prajectname` varchar(100) NOT NULL,
  `gstno` varchar(50) NOT NULL,
  `companyaddress` varchar(100) NOT NULL,
  `emailid` varchar(50) NOT NULL,
  `contactus` varchar(100) NOT NULL,
  `attachfile` varchar(100) NOT NULL,
  `summaryofpraject` varchar(4000) NOT NULL,
  `invoicenumber` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customerdetails`
--

INSERT INTO `customerdetails` (`id`, `customername`, `companyname`, `prajectname`, `gstno`, `companyaddress`, `emailid`, `contactus`, `attachfile`, `summaryofpraject`, `invoicenumber`) VALUES
(1, '', 'ert', '', '23', 'dfg', 'erty', 'sdfg', '27.05.21.png', '', ''),
(2, 'raja', 'maylancertechios', 'support', '123', 'cme', 'maylancertechios@gmail.com', '9843569632', '', '', ''),
(3, '', '', '', '', '', '', '', '', '', ''),
(4, '', '', '', '', '', '', '', '', '', ''),
(5, '', '', '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', '', '', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `employeedetails`
--

DROP TABLE IF EXISTS `employeedetails`;
CREATE TABLE IF NOT EXISTS `employeedetails` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `empid` varchar(100) NOT NULL,
  `machineid` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `yearofpassing` int(20) NOT NULL,
  `maritalstatus` varchar(50) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employeedetails`
--

INSERT INTO `employeedetails` (`id`, `empid`, `machineid`, `firstname`, `lastname`, `qualification`, `yearofpassing`, `maritalstatus`, `bloodgroup`, `permanentaddress`, `temporaryaddress`, `contactnumber`, `aadhaarno`, `fathername`, `mothername`, `mailid`, `shift`, `jobtitle`, `accountnumber`, `ifsccode`) VALUES
(1, '', '', '', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', '', 0, ''),
(4, '22', '', 'Vaalu ', 'guyg', 'msc', 2000, '', 'o', 'kagfxfg', 'djfdk', 2147483647, 1234567, 'cfghj', 'sdfgh', 'ramohan@gmail.com', 'first', 'dfgh', 2345, '123dfbn'),
(2, '102', '', 'Mohan', 'kumar', 'msc', 2021, '', 'o+ve', 'kayathar', 'kayathar', 2147483647, 12345667, 'dddddddd', 'fdsyyf', 'ramohan@gmail.com', 'first', 'developer', 0, 'trtu6'),
(3, '102', '', 'Mohan', 'kumar', 'msc', 2021, '', 'o+ve', 'kayathar', 'kayathar', 2147483647, 12345667, 'dddddddd', 'fdsyyf', 'ramohan@gmail.com', 'first', 'developer', 0, 'trtu6'),
(5, '22', '', 'Vaalu ', 'guyg', 'msc', 2000, '', 'o', 'kagfxfg', 'djfdk', 2147483647, 1234567, 'cfghj', 'sdfgh', 'ramohan@gmail.com', 'first', 'dfgh', 2345, '123dfbn'),
(6, '22', '', 'Vaalu ', '', 'kjsdahf', 2000, '', 'o', 'kagfxfg', 'djfdk', 0, 0, '', '', '', '', '', 0, ''),
(7, '', '', 'Vaalu ', '', '', 0, '', '', '', '', 0, 0, '', '', '', '', '', 0, ''),
(8, '22', '', 'Vaalu ', 'Mohan ', 'first', 2000, '', 'o', 'kagfxfg', 'djfdk', 2147483647, 1234567, 'cfghj', 'sdfgh', 'ramohan@gmail.com', 'first', 'dfgh', 2345, '123dfbn'),
(9, '1234', '1234', 'Vaalu ', 'guyg', 'msc', 2021, 'male', 'ove', 'kagfxfg', 'djfdk', 2147483647, 1234567890, 'cfghj', 'sdfgh', 'ramohan@gmail.com', 'first', 'dfgh', 2345, '123dfbn');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `invoicenumber` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL,
  `paymenttype` varchar(50) NOT NULL,
  `payment` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`invoicenumber`, `date`, `paymenttype`, `payment`) VALUES
('123456', '2021-06-15', 'cash', 500);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
