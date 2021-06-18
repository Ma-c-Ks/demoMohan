-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 18, 2021 at 01:20 AM
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
(1, 'Accessories', 'img/products/plain tupes.png', 'Products', ''),
(29, '22x22mm', 'img/products/', 'Accessories', 'Cover slip'),
(3, 'Glucometer /Urine strips', '', 'Products', ''),
(4, 'Machineries', '', 'Products', ''),
(7, 'Plain tubes', 'img/products/PlainTupes.png', 'Accessories', 'Tubes'),
(5, 'Bio chemistry Reagents', '', 'Products', ''),
(6, 'Haematology cell count reagents', '', 'Products', ''),
(48, 'Syphilis', 'img/products/Syphilis.png', 'Rapid cards', ''),
(8, 'EDTA K3 2ml', 'img/products/EDTAK32ml.png', 'Accessories ', 'Tubes'),
(9, 'EDTA 1ml', 'img/products/EDTA1ml.png', 'Accessories', 'Tubes '),
(70, 'Proton', 'img/products/', 'Reagents', 'Biochemistry reagents'),
(10, ' Fluride tube', 'img/products/', 'Accessories ', 'Tubes'),
(11, 'Sodium cit Rate 3.2%', 'img/products/SodiumcitRate3.2%.png', 'Accessories', 'Tubes '),
(15, 'Yellow tips 200ml', 'img/products/YELLOWTIPS.png', 'Accessories', 'Tipes'),
(12, 'Lithium Heparin tube', 'img/products/LithiumHeparintube.png', 'Accessories', 'Tubes'),
(13, 'Gel tube', 'img/products/GELTUBE.png', 'Accessories', 'Tubes'),
(22, 'Hitach cup', 'img/products/hitach.png', 'Accessories', 'Sample containers'),
(14, 'Blue tips 1000ml', 'img/products/bluetips.png', 'Accessories', 'Tipes'),
(16, 'White tips 1ml', 'img/products/WHITETIPS.png', 'Accessories', 'Tipes'),
(17, 'White tips 200ml', 'img/products/Whitetips200ml.png', 'Accessories', 'Tipes'),
(40, '18x18mm', 'img/products/', 'Accessories', 'Cover slip'),
(28, 'Glass test tube', 'img/products/glasstube.png', 'Accessories', 'Sample containers'),
(18, 'Filler tips 1000ml', 'img/products/', 'Accessories', 'Tipes'),
(19, 'Filler tips 200ml', 'img/products/', 'Accessories', 'Tipes'),
(21, 'Micro centrifuge', 'img/products/Microcentrifuge.png', 'Accessories', 'Sample containers'),
(20, 'Filler tips 10ml', 'img/products/', 'Accessories', 'Tipes'),
(27, 'Urine container non sterile', 'img/products/Urinecontainernonsterile.png', 'Accessories', 'Sample containers'),
(23, 'Pasteur pipette', 'img/products/Pasteurpipette.png', 'Accessories', 'Sample containers'),
(24, 'ESR pipette', 'img/products/ESRpipette.png', 'Accessories', 'Sample containers'),
(26, 'Urine container sterile', 'img/products/Urinecontainersterile.png', 'Accessories', 'Sample containers'),
(25, 'Disposable ESR pipette', 'img/products/DisposableESRpipette.png', 'Accessories', 'Sample containers'),
(31, 'Tourniquet', 'img/products/Tourniquet.png', 'Accessories', 'Others'),
(30, '22x50mm', 'img/products/', 'Accessories', 'Cover slip'),
(32, 'Slide box', 'img/products/slide.png', 'Accessories', 'Others'),
(71, 'Pariksha', 'img/products/Pariksha.png', 'Reagents', 'Biochemistry reagents'),
(33, 'Filter pipette', 'img/products/Filterpipette.png', 'Accessories', 'Others'),
(46, 'HIV dot method', 'img/products/', 'Rapid cards', ''),
(34, 'Cotton roll', 'img/products/cottonrolls.png', 'Accessories', 'Others'),
(35, 'Pipettor', 'img/products/Pipettor.png', 'Accessories', 'Others'),
(45, 'HBsag', 'img/products/hbsag.png', 'Rapid cards', ''),
(36, 'Printer paper roll', 'img/products/printerrolls.png', 'Accessories', 'Others'),
(44, 'HCV lion method', 'img/products/', 'Rapid cards', ''),
(37, 'Tissue  paper roll', 'img/products/tissue.png', 'Accessories', 'Others'),
(43, 'HCV lion method', 'img/products/', 'Rapid cards', ''),
(38, 'Injection plaster', 'img/products/', 'Accessories', 'Others'),
(39, 'Petridish 90mm,60mm', 'img/products/', 'Accessories', 'Others'),
(41, 'HIV Lion method', 'img/products/hivlionmethod.png', 'Rapid cards', ''),
(49, 'Pregnancy card', 'img/products/Pregnancycard.png', 'Rapid cards', ''),
(50, 'Dengue', 'img/products/Dengue\'.png', 'Rapid cards', ''),
(51, 'Malaria', 'img/products/Malaria.png', 'Rapid cards', ''),
(69, 'Diasos', 'img/products/DiasysBiochemistryreagents.png', 'Reagents', 'Biochemistry reagents'),
(52, 'Typhoid', 'img/products/Typhoid.png', 'Rapid cards', ''),
(73, 'Sysmex', 'img/products/SysmexHaematolgycellcountreagents.png', 'Reagents', 'Haematology cell count reagents'),
(53, 'Covid19- antigen', 'img/products/Covid19–antibody.png', 'Rapid cards', ''),
(54, 'Covid19 - antibody', 'img/products/Covid19-antigen.png', 'Rapid cards', ''),
(55, 'Filariasis', 'img/products/Filariasis.png', 'Rapid cards', ''),
(68, 'Medsource ozone', 'img/products/Medsourceozone.png', 'Reagents', 'Biochemistry reagents'),
(56, 'Blood glucometer', 'img/products/Bloodglucometer.png', 'Glucometer', ''),
(57, 'Blood glucose strips', 'img/products/Bloodglucosestrips.png', 'Glucometer', ''),
(67, 'Arkray', 'img/products/', 'Reagents', 'Biochemistry reagents'),
(58, 'Lancets', 'img/products/Lancets.png', 'Glucometer', ''),
(59, 'Lancet gun', 'img/products/Lancetgun.png', 'Glucometer', ''),
(74, 'Horiba', 'img/products/horiba.png', 'Reagents', 'Haematology cell count reagents'),
(60, 'Urine strips 10p', 'img/products/Urinestrips10p.png', 'Urine strips', ''),
(66, 'Bio system', 'img/products/BiosystemBiochmistryreagents.png', 'Reagents', 'Biochemistry reagents'),
(61, 'Urine strips 2p', 'img/products/Urinestrips2p\'.png', 'Urine strips', ''),
(62, 'Urine strips 2p(protein glucose)', 'img/products/Urinestrips2p(proteinglucose).png', 'Urine strips', ''),
(65, 'Agappe', 'img/products/AgappeBiochemistryreagents.png', 'Reagents', 'Biochemistry reagents'),
(63, 'Urine strips 2p(ketone glucose)', 'img/products/Urinestrip2p(ketoneglucose).png', 'Urine strips', ''),
(64, 'Urine strips 4p', 'img/products/Urinestrips4p.png', 'Urine strips', ''),
(72, 'Tulip', 'img/products/TulipBiochemistryreagents.png', 'Reagents', 'Biochemistry reagents'),
(75, 'Mindray', 'img/products/Mindray.png', 'Reagents', 'Haematology cell count reagents'),
(76, 'Swelab Alfa', 'img/products/', 'Reagents', 'Haematology cell count reagents'),
(77, 'Medonic ', 'img/products/MedonicHaematologycellcountreagents.png', 'Reagents', 'Haematology cell count reagents'),
(78, 'Semi automatic bio chemistry analyser', 'img/products/Semiautomaticbiochemistryanalyser.png', 'Machineries', ''),
(79, 'Fully Automatic Bio chemistry Analyser', 'img/products/FullyAutomaticBiochemistryAnalyser.png', 'Machineries', ''),
(80, '3part cell counter', 'img/products/3partcellcounter.png', 'Machineries', ''),
(81, '5part cell counter', 'img/products/5partcellcounter.png', 'Machineries', ''),
(82, '6part cell counter', 'img/products/6partcellcounter.png', 'Machineries', ''),
(83, '7part cell counter', 'img/products/', 'Machineries', ''),
(84, 'Electrolyte analyser', 'img/products/Electrolyteanalyser.png', 'Machineries', ''),
(85, 'Urine analyser', 'img/products/', 'Machineries', ''),
(86, 'Harmone full automatic', 'img/products/HarmoneFullAutomatic.png', 'Machineries', ''),
(87, 'Blood gas analyser', 'img/products/Bloodgasanalyser.png', 'Machineries', '');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
