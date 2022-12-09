-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 09, 2022 at 08:36 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `galery`
--

-- --------------------------------------------------------

--
-- Table structure for table `boosters`
--

DROP TABLE IF EXISTS `boosters`;
CREATE TABLE IF NOT EXISTS `boosters` (
  `id` int(128) NOT NULL AUTO_INCREMENT,
  `filename` varchar(128) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `boosters`
--

INSERT INTO `boosters` (`id`, `filename`) VALUES
(1, 'Benny.gif'),
(2, 'Calmey.gif'),
(3, 'coffinkat.png'),
(4, 'Daszerte.png'),
(5, 'Evie.png'),
(6, 'GLOWE3Y.gif'),
(7, 'Goald.png'),
(8, 'Kaiser.png'),
(9, 'niki.png'),
(10, 'Ouchyc.gif'),
(11, 'Paloid.png'),
(12, 'Shinda Yunikon.png'),
(13, 'ToxwaT.png'),
(14, 'VardaCZ.png'),
(15, 'Vesi.png');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
