-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2021 at 04:30 AM
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
-- Database: `sld`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `productname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `subcategory` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=181 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productname`, `image`, `category`, `subcategory`) VALUES
(2, 'Rapid cards', '', 'Products', ''),
(1, 'Accessories', '', 'Products', ''),
(29, '22x22mm', '', 'Accessories', 'Cover slip'),
(3, 'Glucometer /Urine strips', '', 'Products', ''),
(4, 'Machineries', '', 'Products', ''),
(7, 'Plain tubes', '', 'Accessories', 'Tubes'),
(5, 'Bio chemistry Reagents', '', 'Products', ''),
(6, 'Haematology cell count reagents', '', 'Products', ''),
(48, 'Syphilis', '', 'Rapid cards', ''),
(8, 'EDTA K3 2ml', '', 'Accessories ', 'Tubes'),
(9, 'EDTA 1ml', '', 'Accessories', 'Tubes '),
(70, 'Proton', '', 'Reagents', 'Biochemistry reagents'),
(10, ' Fluride tube', '', 'Accessories ', 'Tubes'),
(11, 'Sodium cit Rate 3.2%', '', 'Accessories', 'Tubes '),
(15, 'Yellow tips 200ml', '', 'Accessories', 'Tipes'),
(12, 'Lithium Heparin tube', '', 'Accessories', 'Tubes'),
(13, 'Gel tube', '', 'Accessories', 'Tubes'),
(22, 'Hitach cup', '', 'Accessories', 'Sample containers'),
(14, 'Blue tips 1000ml', '', 'Accessories', 'Tipes'),
(16, 'White tips 1ml', '', 'Accessories', 'Tipes'),
(17, 'White tips 200ml', '', 'Accessories', 'Tipes'),
(40, '18x18mm', '', 'Accessories', 'Cover slip'),
(28, 'Glass test tube', '', 'Accessories', 'Sample containers'),
(18, 'Filler tips 1000ml', '', 'Accessories', 'Tipes'),
(19, 'Filler tips 200ml', '', 'Accessories', 'Tipes'),
(21, 'Micro centrifuge', '', 'Accessories', 'Sample containers'),
(20, 'Filler tips 10ml', '', 'Accessories', 'Tipes'),
(27, 'Urine container non sterile', '', 'Accessories', 'Sample containers'),
(23, 'Pasteur pipette', '', 'Accessories', 'Sample containers'),
(24, 'ESR pipette', '', 'Accessories', 'Sample containers'),
(26, 'Urine container sterile', '', 'Accessories', 'Sample containers'),
(25, 'Disposable ESR pipette', '', 'Accessories', 'Sample containers'),
(47, 'HCV dot method', '', 'Rapid cards', ''),
(31, 'Tourniquet', '', 'Accessories', 'Others'),
(30, '22x50mm', '', 'Accessories', 'Cover slip'),
(32, 'Slide box', '', 'Accessories', 'Others'),
(71, 'Pariksha', '', 'Reagents', 'Biochemistry reagents'),
(33, 'Filter pipette', '', 'Accessories', 'Others'),
(46, 'HIV dot method', '', 'Rapid cards', ''),
(34, 'Cotton roll', '', 'Accessories', 'Others'),
(35, 'Pipettor', '', 'Accessories', 'Others'),
(45, 'HBsag', '', 'Rapid cards', ''),
(36, 'Printer paper roll', '', 'Accessories', 'Others'),
(44, 'HCV lion method', '', 'Rapid cards', ''),
(37, 'Tissue  paper roll', '', 'Accessories', 'Others'),
(43, 'HCV lion method', '', 'Rapid cards', ''),
(38, 'Injection plaster', '', 'Accessories', 'Others'),
(42, 'HIV Lion method', '', 'Rapid cards', ''),
(39, 'Petridish 90mm,60mm', '', 'Accessories', 'Others'),
(41, 'HIV Lion method', '', 'Rapid cards', ''),
(49, 'Pregnancy card', '', 'Rapid cards', ''),
(50, 'Dengue', '', 'Rapid cards', ''),
(51, 'Malaria', '', 'Rapid cards', ''),
(69, 'Diasos', '', 'Reagents', 'Biochemistry reagents'),
(52, 'Typhoid', '', 'Rapid cards', ''),
(73, 'Sysmex', '', 'Reagents', 'Haematology cell count reagents'),
(53, 'Covid19- antigen', '', 'Rapid cards', ''),
(54, 'Covid19 - antibody', '', 'Rapid cards', ''),
(55, 'Filariasis', '', 'Rapid cards', ''),
(68, 'Medsource ozone', '', 'Reagents', 'Biochemistry reagents'),
(56, 'Blood glucometer', '', 'Glucometer', ''),
(57, 'Blood glucose strips', '', 'Glucometer', ''),
(67, 'Arkray', '', 'Reagents', 'Biochemistry reagents'),
(58, 'Lancets', '', 'Glucometer', ''),
(59, 'Lancet gun', '', 'Glucometer', ''),
(74, 'Horiba', '', 'Reagents', 'Haematology cell count reagents'),
(60, 'Urine strips 10p', '', 'Urine strips', ''),
(66, 'Bio system', '', 'Reagents', 'Biochemistry reagents'),
(61, 'Urine strips 2p', '', 'Urine strips', ''),
(62, 'Urine strips 2p(protein glucose)', '', 'Urine strips', ''),
(65, 'Agappe', '', 'Reagents', 'Biochemistry reagents'),
(63, 'Urine strips 2p(ketone glucose)', '', 'Urine strips', ''),
(64, 'Urine strips 4p', '', 'Urine strips', ''),
(72, 'Tulip', '', 'Reagents', 'Biochemistry reagents'),
(75, 'Mindray', '', 'Reagents', 'Haematology cell count reagents'),
(76, 'Swelab Alfa', '', 'Reagents', 'Haematology cell count reagents'),
(77, 'Medonic ', '', 'Reagents', 'Haematology cell count reagents'),
(78, 'Semi automatic bio chemistry analyser', '', 'Machineries', ''),
(79, 'Fully Automatic Bio chemistry Analyser', '', 'Machineries', ''),
(80, '3part cell counter', '', 'Machineries', ''),
(81, '5part cell counter', '', 'Machineries', ''),
(82, '6part cell counter', '', 'Machineries', ''),
(83, '7part cell counter', '', 'Machineries', ''),
(84, 'Electrolyte analyser', '', 'Machineries', ''),
(85, 'Urine analyser', '', 'Machineries', ''),
(86, 'Harmone full automatic', '', 'Machineries', ''),
(87, 'Blood gas analyser', '', 'Machineries', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
