-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 27, 2022 at 03:02 PM
-- Server version: 10.3.29-MariaDB-0+deb10u1
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `c31l202121`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_pc`
--

CREATE TABLE `case_pc` (
  `case_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Max_Length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `case_pc`
--

INSERT INTO `case_pc` (`case_id`, `Manufacturer_id`, `Name`, `Max_Length`) VALUES
(1, 2, 'TUF Gaming GT301', 320),
(2, 2, 'GX 601', 450),
(3, 2, 'ROG Strix Helios', 450),
(4, 2, 'Z11', 320),
(5, 3, 'Silent Base 802', 282),
(6, 3, 'Pure Base 600', 280),
(7, 3, 'Silent Base 800', 290),
(8, 3, 'Dark Base 900', 323),
(9, 4, 'MasterCase H500', 410),
(10, 4, 'MasterBox Pro 5 RGB', 410),
(11, 4, 'Cosmos C700M', 320),
(12, 4, 'Trooper Se', 322),
(13, 4, 'Cosmos II', 385),
(14, 4, 'Elite 130', 343),
(15, 4, 'MasterCase H100 ARGB', 210),
(16, 4, 'MasterBox MB400L', 344),
(17, 4, 'Elite 110', 210),
(18, 5, '5000D AIRFLOW', 420),
(19, 5, '4000D', 360),
(20, 5, 'Obsidian 500D RGB SE', 370),
(21, 5, '1000D', 400),
(22, 5, 'iCUE 7000X RGB', 450),
(23, 5, 'Crystal 280X RGB', 300),
(24, 5, '250 D', 290),
(25, 5, 'Air 240', 330),
(26, 13, 'H510 Elite', 381),
(27, 13, 'H710', 413),
(28, 13, 'CRFT 08 H510 Valhalla', 381),
(29, 13, 'H700 Nuka-Cola', 413),
(30, 13, 'H510i Phantom Gaming', 381),
(31, 13, 'Phantom 630', 507);

-- --------------------------------------------------------

--
-- Table structure for table `chipset`
--

CREATE TABLE `chipset` (
  `chipset_id` int(11) NOT NULL,
  `chipset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chipset`
--

INSERT INTO `chipset` (`chipset_id`, `chipset`) VALUES
(1, 'TRX40'),
(5, 'A320'),
(8, 'B350'),
(9, 'B450'),
(10, 'B460'),
(11, 'B550'),
(13, 'B560'),
(14, 'B660'),
(15, 'H410'),
(16, 'H470'),
(18, 'H570'),
(19, 'H610'),
(30, 'X470'),
(31, 'X570'),
(32, 'Z490'),
(33, 'Z590'),
(34, 'Z690');

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_id` int(11) NOT NULL,
  `Socket_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Seeds` int(11) NOT NULL,
  `Threads` int(11) NOT NULL,
  `Clock` text NOT NULL,
  `Turbo clock` text NOT NULL,
  `L3 cache` text NOT NULL,
  `TDP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_id`, `Socket_id`, `Manufacturer_id`, `Name`, `Seeds`, `Threads`, `Clock`, `Turbo clock`, `L3 cache`, `TDP`) VALUES
(1, 1, 10, 'I3-10100', 4, 8, '3.6 GHz', '4.3 GHz', '6 MB', '65 W'),
(2, 1, 10, 'I3-10100F', 4, 8, '3.6 GHz', '4.3 GHz', '6 MB', '65 W'),
(3, 1, 10, 'I3-10105', 4, 8, '3.7 GHz', '4.4 GHz', '6 MB', '65 W'),
(4, 1, 10, 'I3-10105F', 4, 8, '3.7 GHz', '4.4 GHz', '6 MB', '65 W'),
(5, 1, 10, 'I3-10300', 4, 8, '3.7 GHz', '4.4 GHz', '8 MB', '65 W'),
(6, 1, 10, 'I3-10305', 4, 8, '3.8 GHz', '4.5 GHz', '8 MB', '65 W'),
(7, 1, 10, 'I3-10320', 4, 8, '3.8 GHz', '4.6 GHz', '8 MB', '65 W'),
(8, 1, 10, 'I3-10325', 4, 8, '3.9 GHz', '4.7 GHz', '8 MB', '65 W'),
(9, 1, 10, 'I5-10400', 6, 12, '2.9 GHz', '4.3 GHz', '12 MB', '65 W'),
(10, 1, 10, 'I5-10400F', 6, 12, '2.9 GHz', '4.3 GHz', '12 MB', '65 W'),
(11, 1, 10, 'I5-10500', 6, 12, '3.1 GHz', '4.5 GHz', '12 MB', '65 W'),
(12, 1, 10, 'I5-10600', 6, 12, '3.3 GHz', '4.8 GHz', '12 MB', '65 W'),
(13, 1, 10, 'I5-10600K', 6, 12, '4.1 GHz', '4.8 GHz', '12 MB', '125 W'),
(14, 1, 10, 'I5-10600KF', 6, 12, '4.1 GHz', '4.8 GHz', '12 MB', '125 W'),
(15, 1, 10, 'I5-11400', 6, 12, '2.6 GHz', '4.4 GHz', '12 MB', '65 W'),
(16, 1, 10, 'I5-11400F', 6, 12, '2.6 GHz', '4.4 GHz', '12 MB', '65 W'),
(17, 1, 10, 'I5-11500', 6, 12, '2.7 GHz', '4.6 GHz', '12 MB', '65 W'),
(18, 1, 10, 'I5-11600', 6, 12, '2.8 GHz', '4.8 GHz', '12 MB', '65 W'),
(19, 1, 10, 'I5-11600K', 6, 12, '3.9 GHz', '4.9 GHz', '12 MB', '125 W'),
(20, 1, 10, 'I5-11600KF', 6, 12, '3.9 GHz', '4.9 GHz', '12 MB', '125 W'),
(21, 1, 10, 'I7-10700', 8, 16, '2.9 GHz', '4.8 GHz', '16 MB', '65 W'),
(22, 1, 10, 'I7-10700F', 8, 16, '2.9 GHz', '4.8 GHz', '16 MB', '65 W'),
(23, 1, 10, 'I7-10700K', 8, 16, '3.8 GHz', '5.1 GHz', '16 MB', '125 W'),
(24, 1, 10, 'I7-10700KF', 8, 16, '3.8 GHz', '5.1 GHz', '16 MB', '125 W'),
(25, 1, 10, 'I7-11700', 8, 16, '2.5 GHz', '4.9 GHz', '16 MB', '65 W'),
(26, 1, 10, 'I7-11700F', 8, 16, '2.5 GHz', '4.9 GHz', '16 MB', '65 W'),
(27, 1, 10, 'I7-11700K', 8, 16, '3.6 GHz', '5 GHz', '16 MB', '125 W'),
(28, 1, 10, 'I7-11700KF', 8, 16, '3.6 GHz', '5 GHz', '16 MB', '125 W'),
(29, 1, 10, 'I9-10850K', 10, 20, '3.6 GHz', '5.2 GHz', '20 MB', '125 W'),
(30, 1, 10, 'I9-10900', 10, 20, '2.8 GHz', '5.2 GHz', '20 MB', '65 W'),
(31, 1, 10, 'I9-10900F', 10, 20, '2.8 GHz', '5.2 GHz', '20 MB', '65 W'),
(32, 1, 10, 'I9-10900K', 10, 20, '3.7 GHz', '5.3 GHz', '20 MB', '125 W'),
(33, 1, 10, 'I9-10900KF', 10, 20, '3.7 GHz', '5.3 GHz', '20 MB', '125 W'),
(34, 1, 10, 'I9-11900', 8, 16, '2.5 GHz', '5.2 GHz', '16 MB', '65 W'),
(35, 1, 10, 'I9-11900F', 8, 16, '2.5 GHz', '5.2 GHz', '16 MB', '65 W'),
(36, 1, 10, 'I9-11900K', 8, 16, '3.5 GHz', '5.3 GHz', '16 MB', '125 W'),
(37, 1, 10, 'I9-11900KF', 8, 16, '3.5 GHz', '5.3 GHz', '16 MB', '125 W'),
(38, 2, 10, 'I3-12100', 4, 8, '3.3 GHz', '4.3 GHz', '12 MB', '60 W'),
(39, 2, 10, 'I3-12100F', 4, 8, '3.3 GHz', '4.3 GHz', '12 MB', '58 W'),
(40, 2, 10, 'I5-12400', 10, 16, '2.5 GHz', '4.4 GHz', '18 MB', '65 W'),
(41, 2, 10, 'I5-12400F', 10, 16, '2.5 GHz', '4.4 GHz', '18 MB', '65 W'),
(42, 2, 10, 'I5-12500', 10, 16, '3 GHz', '4.6 GHz', '18 MB', '65 W'),
(43, 2, 10, 'I5-12600', 10, 16, '3.3 GHz', '4.8 GHz', '18 MB', '65 W'),
(44, 2, 10, 'I5-12600K', 10, 16, '3.7 GHz', '4.9 GHz', '20 MB', '125 W'),
(45, 2, 10, 'I5-12600KF', 10, 16, '3.7 GHz', '4.9 GHz', '20 MB', '125 W'),
(46, 2, 10, 'I7-12700', 12, 20, '2.1 GHz', '4.9 GHz', '25 MB', '65 W'),
(47, 2, 10, 'I7-12700K', 12, 20, '3.6 GHz', '5 GHz', '25 MB', '125 W'),
(48, 2, 10, 'I7-12700KF', 12, 20, '3.6 GHz', '5 GHz', '25 MB', '125 W'),
(49, 2, 10, 'I9-12900', 16, 24, '2.4 GHz', '5.1 GHz', '30 MB', '65 W'),
(50, 2, 10, 'I9-12900F', 16, 24, '2.4 GHz', '5.1 GHz', '30 MB', '65 W'),
(51, 2, 10, 'I9-12900K', 16, 24, '3.2 GHz', '5.2 GHz', '30 MB', '125 W'),
(52, 2, 10, 'I9-12900KF', 16, 24, '3.2 GHz', '5.2 GHz', '30 MB', '125 W'),
(53, 3, 1, 'Ryzen 3 1200', 4, 4, '3.1 GHz', '3.4 GHz', '8 MB', '65 W'),
(54, 3, 1, 'Ryzen 3 1300X', 4, 4, '3.5 GHz', '3.7 GHz', '8 MB', '65 W'),
(55, 3, 1, 'Ryzen 3 2200G', 4, 4, '3.5 GHz', '3.7 GHz', '4  MB', '65 W'),
(56, 3, 1, 'Ryzen 3 3100', 4, 4, '3.6 GHz', '3.9 GHz', '16 MB', '65 W'),
(57, 3, 1, 'Ryzen 3 3200G', 4, 4, '3.6 GHz', '4 GHz', '4  MB', '65 W'),
(58, 3, 1, 'Ryzen 3 3300X', 4, 8, '3.8 GHz', '4.3 GHz', '16 MB', '65 W'),
(59, 3, 1, 'Ryzen 5 1400', 4, 8, '3.2 GHz', '3.4 GHz', '8 MB', '65 W'),
(60, 3, 1, 'Ryzen 5 1500X', 4, 8, '3.5 GHz', '3.7 GHz', '8 MB', '65 W'),
(61, 3, 1, 'Ryzen 5 1600', 6, 12, '3.2 GHz', '3.6 GHz', '8 MB', '65 W'),
(62, 3, 1, 'Ryzen 5 1600X', 6, 12, '3.6 GHz', '4 GHz', '8 MB', '95 W'),
(63, 3, 1, 'Ryzen 5 2400G', 4, 8, '3.6 GHz', '3.9 GHz', '4  MB', '65 W'),
(64, 3, 1, 'Ryzen 5 2600', 6, 12, '3.4 GHz', '3.9 GHz', '16 MB', '65 W'),
(65, 3, 1, 'Ryzen 5 2600X', 6, 12, '3.6 GHz', '4.2 GHz', '16 MB', '95 W'),
(66, 3, 1, 'Ryzen 5 3400G', 4, 8, '3.7 GHz', '4.2 GHz', '4  MB', '65 W'),
(67, 3, 1, 'Ryzen 5 3500', 6, 12, '3.6 GHz', '4.1 GHz', '16 MB', '65 W'),
(68, 3, 1, 'Ryzen 5 3500X', 6, 12, '3.6 GHz', '4.1 GHz', '16 MB', '65 W'),
(69, 3, 1, 'Ryzen 5 3600', 6, 12, '3.6 GHz', '4.2 GHz', '16 MB', '65 W'),
(70, 3, 1, 'Ryzen 5 3600X', 6, 12, '3.8 GHz', '4.4 GHz', '16 MB', '95 W'),
(71, 3, 1, 'Ryzen 5 3600XT', 6, 12, '3.8 GHz', '4.5 GHz', '32 MB', '95 W'),
(72, 3, 1, 'Ryzen 5 5600', 6, 12, '3.9 GHz', '4.4 GHz', '16 MB', '65 W'),
(73, 3, 1, 'Ryzen 5 5600X', 6, 12, '3.7 GHz', '4.6 GHz', '32 MB', '65 W'),
(74, 3, 1, 'Ryzen 5 5600G', 6, 12, '3.9 GHz', '4.4 GHz', '16 MB', '65 W'),
(75, 3, 1, 'Ryzen 7 1700', 8, 16, '3 GHz', '3.7 GHz', '16 MB', '65 W'),
(76, 3, 1, 'Ryzen 7 1700X', 8, 16, '3.4 GHz', '3.8 GHz', '16 MB', '95 W'),
(77, 3, 1, 'Ryzen 7 1800X', 8, 16, '3.6 GHz', '4 GHz', '16 MB', '95 W'),
(78, 3, 1, 'Ryzen 7 2700', 8, 16, '3.2 GHz', '4.1 GHz', '16 MB', '65 W'),
(79, 3, 1, 'Ryzen 7 2700X', 8, 16, '3.7 GHz', '4.3 GHz', '16 MB', '105 W'),
(80, 3, 1, 'Ryzen 7 3700X', 8, 16, '3.6 GHz', '4.4 GHz', '32 MB', '95 W'),
(81, 3, 1, 'Ryzen 7 3800X', 8, 16, '3.9 GHz', '4.5 GHz', '32 MB', '105 W'),
(82, 3, 1, 'Ryzen 7 3800XT', 8, 16, '3.9 GHz', '4.7 GHz', '32 MB', '105 W'),
(83, 3, 1, 'Ryzen 7 5700G', 8, 16, '3.8 GHz', '4.6 GHz', '16 MB', '65 W'),
(84, 3, 1, 'Ryzen 7 5800X', 8, 16, '3.8 GHz', '4.7 GHz', '32 MB', '105 W'),
(85, 3, 1, 'Ryzen 9 3900X', 12, 24, '3.8 GHz', '4.6 GHz', '64 MB', '105 W'),
(86, 3, 1, 'Ryzen 9 3900XT', 12, 24, '3.8 GHz', '4.7 GHz', '64 MB', '105 W'),
(87, 3, 1, 'Ryzen 9 3950X', 16, 32, '3.5 GHz', '4.7 GHz', '64 MB', '105 W'),
(88, 3, 1, 'Ryzen 9 5900X', 12, 24, '3.7 GHz', '4.8 GHz', '64 MB', '105 W'),
(89, 3, 1, 'Ryzen 9 5950X', 16, 32, '3.4 GHz', '4.9 GHz', '64 MB', '105 W'),
(90, 4, 1, 'Ryzen 3960X', 24, 48, '3.8 GHz', '4.5 GHz', '128 MB', '280 W'),
(91, 4, 1, 'Ryzen 3970X', 32, 64, '3.7 GHz', '4.5 GHz', '128 MB', '280 W'),
(92, 4, 1, 'Ryzen 3990X', 64, 128, '2.9 GHz', '4.3 GHz', '128 MB', '280 W');

-- --------------------------------------------------------

--
-- Table structure for table `cpu_cooler`
--

CREATE TABLE `cpu_cooler` (
  `cooler_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Model` text NOT NULL,
  `Type` text NOT NULL,
  `RPM` int(11) NOT NULL,
  `Height` text NOT NULL,
  `Fan size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpu_cooler`
--

INSERT INTO `cpu_cooler` (`cooler_id`, `Manufacturer_id`, `Model`, `Type`, `RPM`, `Height`, `Fan size`) VALUES
(1, 3, 'Dark Rock Pro 4', 'Air', 1500, '162.8 mm', 'none'),
(2, 4, 'Hyper 212 RGB', 'Air', 2000, '159 mm', 'none'),
(3, 14, 'NH-D15', 'Air', 1500, '165 mm', 'none'),
(4, 13, 'Kraken X53', 'Water', 2000, 'none', '240 mm'),
(5, 13, 'Kraken X63', 'Water', 2000, 'none', '280 mm'),
(6, 13, 'Kraken Z73', 'Water', 1800, 'none', '360 mm'),
(7, 4, 'masterliquid ml240l RGB', 'Water', 1800, 'none', '240 mm'),
(8, 4, 'masterliquid ml360 RGB', 'Water', 2000, 'none', '360 mm');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Type` text NOT NULL,
  `Name` text NOT NULL,
  `Memory_size` text NOT NULL,
  `Memory_type` text NOT NULL,
  `Core_clock` text NOT NULL,
  `Boost_clock` text NOT NULL,
  `Length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpu_id`, `Manufacturer_id`, `Type`, `Name`, `Memory_size`, `Memory_type`, `Core_clock`, `Boost_clock`, `Length`) VALUES
(1, 2, 'GeForce GTX', '1050', '2GB', 'GDDR5', '1442 MHz', '1569 MHz', 241),
(2, 2, 'GeForce GTX', '1050Ti', '4GB', 'GDDR5', '1379 MHz', '1506 MHz', 241),
(3, 2, 'GeForce GTX', '1060', '3GB', 'GDDR5', '1594 MHz', '1809 MHz', 242),
(4, 2, 'GeForce GTX', '1060', '6GB', 'GDDR5', '1620 MHz', '1873 MHz', 298),
(5, 2, 'GeForce GTX', '1070', '8GB', 'GDDR5', '1506 MHz', '1721 MHz', 298),
(6, 2, 'GeForce GTX', '1070Ti', '8GB', 'GDDR5', '1607 MHz', '1759 MHz', 298),
(7, 2, 'GeForce GTX', '1080', '8GB', 'GDDR5', '1759 MHz', '1936 MHz', 298),
(8, 2, 'GeForce GTX', '1080Ti', '11GB', 'GDDR5X', '1569 MHz', '1708 MHz', 298),
(9, 9, 'GeForce GTX', '1050', '2GB', 'GDDR5', '1392 MHz', '1531 MHz', 229),
(10, 9, 'GeForce GTX', '1050Ti', '4GB', 'GDDR5', '1354 MHz', '1468 MHz', 229),
(11, 9, 'GeForce GTX', '1060', '3GB', 'GDDR5', '1556 MHz', '1797 MHz', 223),
(12, 9, 'GeForce GTX', '1060', '6GB', 'GDDR5', '1582 MHz', '1797 MHz', 223),
(13, 9, 'GeForce GTX', '1070', '8GB', 'GDDR5', '1556 MHz', '1771 MHz', 280),
(14, 9, 'GeForce GTX', '1070Ti', '8GB', 'GDDR5', '1632 MHz', '1721 MHz', 280),
(15, 9, 'GeForce GTX', '1080', '8GB', 'GDDR5', '1657 MHz', '1797 MHz', 280),
(16, 9, 'GeForce GTX', '1080Ti', '11GB', 'GDDR5X', '1632 MHz', '1746 MHz', 267),
(17, 2, 'GeForce GTX', '1650', '4GB', 'GDDR6', '1410 MHz', '1680 MHz', 204),
(18, 2, 'GeForce GTX', '1650S', '4GB', 'GDDR6', '1530 MHz', '1815 MHz', 243),
(19, 9, 'GeForce GTX', '1650', '4GB', 'GDDR6', '1410 MHz', '1590 MHz', 191),
(20, 9, 'GeForce GTX', '1650S', '4GB', 'GDDR6', '1530 MHz', '1740 MHz', 172),
(21, 2, 'GeForce GTX', '1660', '6GB', 'GDDR6', '1530 MHz', '1845 MHz', 205),
(22, 2, 'GeForce GTX', '1660S', '6GB', 'GDDR6', '1530 MHz', '1875 MHz', 243),
(23, 2, 'GeForce GTX', '1660Ti', '6GB', 'GDDR6', '1500 MHz', '1890 MHz', 301),
(24, 9, 'GeForce GTX', '1660', '6GB', 'GDDR6', '1530 MHz', '1860 MHz', 280),
(25, 9, 'GeForce GTX', '1660S', '6GB', 'GDDR6', '1530 MHz', '1860 MHz', 280),
(26, 9, 'GeForce GTX', '1660Ti', '6GB', 'GDDR6', '1500 MHz', '1860 MHz', 280),
(27, 12, 'GeForce GTX', '1060', '6GB', 'GDDR5', '1506 MHz', '1709 MHz', 250),
(28, 12, 'GeForce GTX', '1070', '8GB', 'GDDR5', '1506 MHz', '1683 MHz', 267),
(29, 12, 'GeForce GTX', '1070Ti', '8GB', 'GDDR5', '1607 MHz', '1683 MHz', 267),
(30, 12, 'GeForce GTX', '1080', '8GB', 'GDDR5', '1607 MHz', '1733 MHz', 267),
(31, 12, 'GeForce GTX', '1080Ti', '11GB', 'GDDR5X', '1480 MHz', '1582 MHz', 267),
(32, 2, 'GeForce RTX', '2060', '6GB', 'GDDR6', '1365 MHz', '1860 MHz', 300),
(33, 2, 'GeForce RTX', '2060S', '8GB', 'GDDR6', '1500 MHz', '1860 MHz', 301),
(34, 2, 'GeForce RTX', '2070', '8GB', 'GDDR6', '1410 MHz', '1845 MHz', 305),
(35, 2, 'GeForce RTX', '2070S', '8GB', 'GDDR6', '1635 MHz', '1935 MHz', 300),
(36, 2, 'GeForce RTX', '2080', '8GB', 'GDDR6', '1515 MHz', '1890 MHz', 300),
(37, 2, 'GeForce RTX', '2080S', '8GB', 'GDDR6', '1650 MHz', '1890 MHz', 300),
(38, 2, 'GeForce RTX', '2080Ti', '11GB', 'GDDR6', '1350 MHz', '1815 MHz', 310),
(39, 9, 'GeForce RTX', '2060', '6GB', 'GDDR6', '1680 MHz', '1770 MHz', 265),
(40, 9, 'GeForce RTX', '2060S', '8GB', 'GDDR6', '1470 MHz', '1680 MHz', 265),
(41, 9, 'GeForce RTX', '2070', '8GB', 'GDDR6', '1620 MHz', '1740 MHz', 280),
(42, 9, 'GeForce RTX', '2070S', '8GB', 'GDDR6', '1605 MHz', '1815 MHz', 286),
(43, 9, 'GeForce RTX', '2080', '8GB', 'GDDR6', '1710 MHz', '1890 MHz', 290),
(44, 9, 'GeForce RTX', '2080S', '8GB', 'GDDR6', '1650 MHz', '1845 MHz', 286),
(45, 9, 'GeForce RTX', '2080Ti', '11GB', 'GDDR6', '1350 MHz', '1770 MHz', 290),
(46, 2, 'GeForce RTX', '3060', '12GB', 'GDDR6', '1320 MHz', '1807 MHz', 177),
(47, 2, 'GeForce RTX', '3060Ti', '8GB', 'GDDR6', '1410 MHz', '1890 MHz', 318),
(48, 2, 'GeForce RTX', '3070', '8GB', 'GDDR6', '1500 MHz', '1905 MHz', 318),
(49, 2, 'GeForce RTX', '3070Ti', '8GB', 'GDDR6X', '1575 MHz', '1815 MHz', 300),
(50, 2, 'GeForce RTX', '3080', '10GB', 'GDDR6X', '1440 MHz', '1935 MHz', 318),
(51, 2, 'GeForce RTX', '3080Ti', '12GB', 'GDDR6X', '1365 MHz', '1860 MHz', 293),
(52, 2, 'GeForce RTX', '3090', '24GB', 'GDDR6X', '1395 MHz', '1890 MHz', 318),
(53, 9, 'GeForce RTX', '3060', '12GB', 'GDDR6', '1320 MHz', '1867 MHz', 296),
(54, 9, 'GeForce RTX', '3060Ti', '8GB', 'GDDR6', '1410 MHz', '1785 MHz', 296),
(55, 9, 'GeForce RTX', '3070', '8GB', 'GDDR6', '1500 MHz', '1845 MHz', 290),
(56, 9, 'GeForce RTX', '3070Ti', '8GB', 'GDDR6X', '1575 MHz', '1875 MHz', 324),
(57, 9, 'GeForce RTX', '3080', '10GB', 'GDDR6X', '1710 MHz', '1905 MHz', 319),
(58, 9, 'GeForce RTX', '3080Ti', '12GB', 'GDDR6X', '1365 MHz', '1770 MHz', 320),
(59, 9, 'GeForce RTX', '3090', '24GB', 'GDDR6X', '1395 MHz', '1860 MHz', 319),
(60, 2, 'Radeon RX', '5500 XT', '8GB', 'GDDR6', '1607 MHz', '1865 MHz', 280),
(61, 2, 'Radeon RX', '5600 XT', '6GB', 'GDDR6', '1247 MHz', '1770 MHz', 303),
(62, 2, 'Radeon RX', '5700', '8GB', 'GDDR6', '1610 MHz', '1750 MHz', 305),
(63, 2, 'Radeon RX', '5700 XT', '8GB', 'GDDR6', '1770 MHz', '2035 MHz', 305),
(64, 2, 'Radeon RX', '6600', '8GB', 'GDDR6', '1626 MHz', '2491 MHz', 243),
(65, 2, 'Radeon RX', '6600 XT', '8GB', 'GDDR6', '1968 MHz', '2607 MHz', 243),
(66, 2, 'Radeon RX', '6700 XT', '12GB', 'GDDR6', '2321 MHz', '2581 MHz', 322),
(67, 2, 'Radeon RX', '6800', '16GB', 'GDDR6', '1700 MHz', '2190 MHz', 320),
(68, 2, 'Radeon RX', '6800 XT', '16GB', 'GDDR6', '1825 MHz', '2340 MHz', 310),
(69, 2, 'Radeon RX', '6900 XT', '16GB', 'GDDR6', '1825 MHz', '2340 MHz', 320),
(70, 9, 'Radeon RX', '5500 XT', '8GB', 'GDDR6', '1685 MHz', '1845 MHz', 281),
(71, 9, 'Radeon RX', '5600 XT', '6GB', 'GDDR6', '1247 MHz', '1620 MHz', 228),
(72, 9, 'Radeon RX', '5700', '8GB', 'GDDR6', '1565 MHz', '1750 MHz', 280),
(73, 9, 'Radeon RX', '5700 XT', '8GB', 'GDDR6', '1650 MHz', '1905 MHz', 280),
(74, 9, 'Radeon RX', '6600', '8GB', 'GDDR6', '1626 MHz', '2491 MHz', 282),
(75, 9, 'Radeon RX', '6600 XT', '8GB', 'GDDR6', '1968 MHz', '2607 MHz', 282),
(76, 9, 'Radeon RX', '6700 XT', '12GB', 'GDDR6', '2321 MHz', '2581 MHz', 281),
(77, 9, 'Radeon RX', '6800', '16GB', 'GDDR6', '1815 MHz', '2155 MHz', 286),
(78, 9, 'Radeon RX', '6800 XT', '16GB', 'GDDR6', '1825 MHz', '2310 MHz', 324),
(79, 9, 'Radeon RX', '6900 XT', '16GB', 'GDDR6', '2015 MHz', '2365 MHz', 322);

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `Manufacturer_id` int(11) NOT NULL,
  `Manufacturer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `manufacturer`
--

INSERT INTO `manufacturer` (`Manufacturer_id`, `Manufacturer`) VALUES
(1, 'AMD'),
(2, 'Asus'),
(3, 'be quiet!'),
(4, 'Cooler Master'),
(5, 'Corsair'),
(6, 'Crucial'),
(7, 'EVGA'),
(8, 'G.Skill'),
(9, 'Gigabyte'),
(10, 'Intel'),
(11, 'MSI'),
(12, 'NVIDIA'),
(13, 'NZXT'),
(14, 'Noctua'),
(15, 'Kingston'),
(16, 'Seagate'),
(17, 'Western Digital'),
(18, 'Samsung');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `motherboard_id` int(11) NOT NULL,
  `Socket_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `chipset_id` int(11) NOT NULL,
  `m.2_comp` tinyint(1) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`motherboard_id`, `Socket_id`, `Manufacturer_id`, `chipset_id`, `m.2_comp`, `Name`) VALUES
(1, 1, 2, 15, 0, 'PRIME H410M-K'),
(2, 1, 9, 15, 0, 'H410M S2'),
(3, 2, 2, 19, 0, 'EX-H610M-V3 D4'),
(4, 3, 9, 5, 0, 'GA-A320M-HD2'),
(5, 3, 11, 5, 0, 'A320M PRO-VD PLUS'),
(6, 3, 11, 8, 0, 'B350M PRO-VD PLUS'),
(7, 1, 2, 10, 1, 'PRIME B460-PLUS'),
(8, 1, 2, 13, 1, 'PRIME B560-PLUS'),
(9, 1, 2, 16, 1, 'PRIME H470-PLUS'),
(10, 1, 2, 18, 1, 'PRIME H570-PLUS'),
(11, 1, 2, 32, 1, 'ROG MAXIMUS XII EXTREME'),
(12, 1, 2, 32, 1, 'ROG STRIX Z490-E'),
(13, 1, 2, 33, 1, 'ROG Maximus XIII Extreme'),
(14, 1, 2, 33, 1, 'ROG STRIX Z590-E GAMING'),
(15, 1, 9, 32, 1, 'Z490 AORUS XTREME'),
(16, 1, 9, 33, 1, 'Z590 AORUS XTREME'),
(17, 1, 9, 10, 1, 'B460 AORUS PRO AC'),
(18, 1, 9, 13, 1, 'B560M AORUS PRO'),
(19, 1, 11, 33, 1, 'MEG Z590 GODLIKE'),
(20, 1, 11, 13, 1, 'MAG B560 TOMAHAWK'),
(21, 2, 2, 14, 1, 'TUF GAMING B660M-PLUS'),
(22, 2, 2, 34, 1, 'ROG MAXIMUS Z690 EXTREME'),
(23, 2, 9, 14, 1, 'B660M AORUS Pro'),
(24, 2, 9, 34, 1, 'Z690 AORUS MASTER'),
(25, 2, 11, 14, 1, 'MAG B660M MORTAR'),
(26, 2, 11, 34, 1, 'MAG Z690 TORPEDO'),
(27, 2, 2, 34, 1, 'ROG STRIX Z690-A GAMING'),
(28, 2, 2, 34, 1, 'Z690 GAMING X'),
(29, 2, 9, 34, 1, 'Z690 AORUS ELITE'),
(30, 2, 11, 34, 1, 'MPG Z690 EDGE'),
(31, 3, 2, 30, 1, 'ROG STRIX X470-F'),
(32, 3, 2, 30, 1, 'ROG Crosshair VII Hero'),
(33, 3, 2, 31, 1, 'ROG Strix X570-E'),
(34, 3, 2, 31, 1, 'ROG Crosshair VIII Dark Hero'),
(35, 3, 2, 9, 1, 'ROG STRIX B450-E'),
(36, 3, 2, 11, 1, 'ROG STRIX B550-E'),
(37, 3, 9, 9, 1, 'B450M DS3H');

-- --------------------------------------------------------

--
-- Table structure for table `power_supply`
--

CREATE TABLE `power_supply` (
  `pw_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Wattage` text NOT NULL,
  `Efficiency_Rating` text NOT NULL,
  `Modular` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `power_supply`
--

INSERT INTO `power_supply` (`pw_id`, `Manufacturer_id`, `Name`, `Wattage`, `Efficiency_Rating`, `Modular`) VALUES
(1, 2, 'ROG Strix', '650W', '80+ Gold', 'Full'),
(2, 2, 'ROG Strix', '750W', '80+ Gold', 'Full'),
(3, 2, 'ROG Thor 850', '850W', '80+ Platinum', 'Full'),
(4, 2, 'ROG Strix G', '1000W', '80+ Gold', 'Full'),
(5, 2, 'ROG Thor 1200P', '1200W', '80+ Platinum', 'Full'),
(6, 3, 'System Power 9', '600W', '80+ Bronze', 'NO'),
(7, 3, 'System Power 9', '700W', '80+ Bronze', 'NO'),
(8, 3, 'Power Zone', '850W', '80+ Bronze', 'Full'),
(9, 3, 'Power Zone', '1000W', '80+ Bronze', 'Full'),
(10, 3, 'Pure Power 11', '600W', '80+ Gold', 'NO'),
(11, 3, 'Pure Power 11', '700W', '80+ Gold', 'Semi'),
(12, 3, 'Straight Power 11', '850W', '80+ Gold', 'Full'),
(13, 3, 'Straight Power 11', '1000W', '80+ Gold', 'Full'),
(14, 3, 'Dark Power Pro', '650W', '80+ Platinum', 'Semi'),
(15, 3, 'Dark Power Pro', '700W', '80+ Platinum', 'Semi'),
(16, 3, 'Dark Power Pro', '850W', '80+ Platinum', 'Semi'),
(17, 3, 'Dark Power Pro', '1000W', '80+ Platinum', 'Semi'),
(18, 3, 'Dark Power 12', '750W', '80+ Titanium', 'Full'),
(19, 3, 'Dark Power 12', '850W', '80+ Titanium', 'Full'),
(20, 3, 'Dark Power 12', '1000W', '80+ Titanium', 'Full'),
(21, 3, 'Dark Power Pro 12', '1200W', '80+ Titanium', 'Full'),
(22, 3, 'Dark Power Pro 12', '1500W', '80+ Titanium', 'Full'),
(23, 5, 'TXM', '650W', '80+ Bronze', 'Semi'),
(24, 5, 'TXM', '750W', '80+ Bronze', 'Semi'),
(25, 5, 'CXM', '850W', '80+ Bronze', 'Semi'),
(26, 5, 'TX', '950W', '80+ Bronze', 'NO'),
(27, 2, 'RMx (2021)', '750W', '80+ Gold', 'Full'),
(28, 5, 'RM  (2021)', '850W', '80+ Gold', 'Full'),
(29, 5, 'RMx', '1000W', '80+ Gold', 'Full'),
(30, 5, 'AX', '1200W', '80+ Gold', 'Full'),
(31, 5, 'AXi', '750W', '80+ Platinum', 'Full'),
(32, 5, 'HXi', '850W', '80+ Platinum', 'Full'),
(33, 5, 'HX', '1000W', '80+ Platinum', 'Full'),
(34, 5, 'HX', '1200W', '80+ Platinum', 'Full'),
(35, 5, 'AX', '850W', '80+ Titanium', 'Full'),
(36, 5, 'AX', '1000W', '80+ Titanium', 'Full'),
(37, 5, 'AXi', '1500W', '80+ Titanium', 'Full'),
(38, 5, 'AXi', '1600W', '80+ Titanium', 'Full'),
(39, 7, 'BQ', '600W', '80+ Bronze', 'Semi'),
(40, 7, 'BR', '700W', '80+ Bronze', 'NO'),
(41, 7, 'B3', '750W', '80+ Bronze', 'Full'),
(42, 7, 'B5', '850W', '80+ Bronze', 'Full'),
(43, 7, 'SuperNOVA G6', '750W', '80+ Gold', 'Full'),
(44, 7, 'SuperNOVA GA', '850W', '80+ Gold', 'Full'),
(45, 7, 'SuperNOVA G6', '1000W', '80+ Gold', 'Full'),
(46, 7, 'SuperNOVA Classified', '1500W', '80+ Gold', 'Full'),
(47, 7, 'PQ', '750W', '80+ Platinum', 'Full'),
(48, 7, 'P2', '850W', '80+ Platinum', 'Semi'),
(49, 7, 'SuperNOVA P5', '1000W', '80+ Platinum', 'Semi'),
(50, 7, 'P2', '1600W', '80+ Platinum', 'Full'),
(51, 7, 'SuperNOVA T2', '750W', '80+ Titanium', 'Full'),
(52, 7, 'SuperNOVA T2', '850W', '80+ Titanium', 'Full'),
(53, 7, 'T2', '1000W', '80+ Titanium', 'Full'),
(54, 7, 'T2', '1600W', '80+ Titanium', 'Full');

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ram_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `ram_type_id` int(11) NOT NULL,
  `Capacity` text NOT NULL,
  `Speed` text NOT NULL,
  `Modules` int(11) NOT NULL,
  `CAS_Latency` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`ram_id`, `Manufacturer_id`, `ram_type_id`, `Capacity`, `Speed`, `Modules`, `CAS_Latency`) VALUES
(1, 5, 1, '8 GB', '3200 MHz', 1, 16),
(2, 5, 1, '16 GB', '3200 MHz', 1, 16),
(3, 5, 1, '32 GB', '3200 MHz', 1, 16),
(4, 5, 1, '8 GB', '3600  MHz', 1, 18),
(5, 5, 1, '16 GB', '3600  MHz', 1, 18),
(6, 5, 1, '32 GB', '3600  MHz', 1, 18),
(7, 6, 1, '8 GB', '3200 MHz', 1, 16),
(8, 6, 1, '16 GB', '3200 MHz', 1, 16),
(9, 6, 1, '32 GB', '3200 MHz', 1, 16),
(10, 6, 1, '8 GB', '3600  MHz', 1, 18),
(11, 6, 1, '16 GB', '3600  MHz', 1, 18),
(12, 6, 1, '32 GB', '3600  MHz', 1, 18),
(13, 8, 1, '8 GB', '3200 MHz', 1, 16),
(14, 8, 1, '16 GB', '3200 MHz', 1, 16),
(15, 8, 1, '32 GB', '3200 MHz', 1, 16),
(16, 8, 1, '8 GB', '3600  MHz', 1, 18),
(17, 8, 1, '16 GB', '3600  MHz', 1, 18),
(18, 8, 1, '32 GB', '3600  MHz', 1, 18),
(19, 15, 1, '8 GB', '3200 MHz', 1, 16),
(20, 15, 1, '16 GB', '3200 MHz', 1, 16),
(21, 15, 1, '32 GB', '3200 MHz', 1, 16),
(22, 15, 1, '8 GB', '3600  MHz', 1, 18),
(23, 15, 1, '16 GB', '3600  MHz', 1, 18),
(24, 15, 1, '32 GB', '3600  MHz', 1, 18),
(25, 5, 1, '16 GB', '3200 MHz', 2, 16),
(26, 5, 1, '32 GB', '3200 MHz', 2, 16),
(27, 5, 1, '64 GB', '3200 MHz', 2, 16),
(28, 5, 1, '16 GB', '3600  MHz', 2, 18),
(29, 5, 1, '32 GB', '3600  MHz', 2, 18),
(30, 5, 1, '64 GB', '3600  MHz', 2, 18),
(31, 6, 1, '16 GB', '3200 MHz', 2, 16),
(32, 6, 1, '32 GB', '3200 MHz', 2, 16),
(33, 6, 1, '64 GB', '3200 MHz', 2, 16),
(34, 6, 1, '16 GB', '3600  MHz', 2, 18),
(35, 6, 1, '32 GB', '3600  MHz', 2, 18),
(36, 6, 1, '64 GB', '3600  MHz', 2, 18),
(37, 8, 1, '16 GB', '3200 MHz', 2, 16),
(38, 8, 1, '32 GB', '3200 MHz', 2, 16),
(39, 8, 1, '64 GB', '3200 MHz', 2, 16),
(40, 8, 1, '16 GB', '3600  MHz', 2, 18),
(41, 8, 1, '32 GB', '3600  MHz', 2, 18),
(42, 8, 1, '64 GB', '3600  MHz', 2, 18),
(43, 15, 1, '16 GB', '3200 MHz', 2, 16),
(44, 15, 1, '32 GB', '3200 MHz', 2, 16),
(45, 15, 1, '64 GB', '3200 MHz', 2, 16),
(46, 15, 1, '16 GB', '3600  MHz', 2, 18),
(47, 15, 1, '32 GB', '3600  MHz', 2, 18),
(48, 15, 1, '64 GB', '3600  MHz', 2, 18),
(49, 5, 1, '32 GB', '3200 MHz', 4, 16),
(50, 5, 1, '64 GB', '3200 MHz', 4, 16),
(51, 5, 1, '128 GB', '3200 MHz', 4, 16),
(52, 5, 1, '32 GB', '3600  MHz', 4, 18),
(53, 5, 1, '64 GB', '3600  MHz', 4, 18),
(54, 5, 1, '128 GB', '3600  MHz', 4, 18),
(55, 6, 1, '32 GB', '3200 MHz', 4, 16),
(56, 6, 1, '64 GB', '3200 MHz', 4, 16),
(57, 6, 1, '128 GB', '3200 MHz', 4, 16),
(58, 6, 1, '32 GB', '3600  MHz', 4, 18),
(59, 6, 1, '64 GB', '3600  MHz', 4, 18),
(60, 6, 1, '128 GB', '3600  MHz', 4, 18),
(61, 8, 1, '32 GB', '3200 MHz', 4, 16),
(62, 8, 1, '64 GB', '3200 MHz', 4, 16),
(63, 8, 1, '128 GB', '3200 MHz', 4, 16),
(64, 8, 1, '32 GB', '3600  MHz', 4, 18),
(65, 8, 1, '64 GB', '3600  MHz', 4, 18),
(66, 8, 1, '128 GB', '3600  MHz', 4, 18),
(67, 15, 1, '32 GB', '3200 MHz', 4, 16),
(68, 15, 1, '64 GB', '3200 MHz', 4, 16),
(69, 15, 1, '128 GB', '3200 MHz', 4, 16),
(70, 15, 1, '32 GB', '3600  MHz', 4, 18),
(71, 15, 1, '64 GB', '3600  MHz', 4, 18),
(72, 15, 1, '128 GB', '3600  MHz', 4, 18),
(73, 5, 2, '16 GB', '4800  MHz', 1, 36),
(74, 5, 2, '32 GB', '5200  MHz', 2, 36),
(75, 5, 2, '16 GB', '5600  MHz', 1, 40),
(76, 5, 2, '32 GB', '6000  MHz', 2, 40),
(77, 5, 2, '16 GB', '4800  MHz', 1, 36),
(78, 5, 2, '32 GB', '5200  MHz', 2, 36),
(79, 5, 2, '16 GB', '5600  MHz', 1, 40),
(80, 5, 2, '32 GB', '6000  MHz', 2, 40),
(81, 6, 2, '16 GB', '4800  MHz', 1, 36),
(82, 6, 2, '32 GB', '5200  MHz', 2, 36),
(83, 6, 2, '16 GB', '5600  MHz', 1, 40),
(84, 6, 2, '32 GB', '6000  MHz', 2, 40),
(85, 6, 2, '16 GB', '4800  MHz', 1, 36),
(86, 6, 2, '32 GB', '5200  MHz', 2, 36),
(87, 6, 2, '16 GB', '5600  MHz', 1, 40),
(88, 6, 2, '32 GB', '6000  MHz', 2, 40),
(89, 8, 2, '16 GB', '4800  MHz', 1, 36),
(90, 8, 2, '32 GB', '5200  MHz', 2, 36),
(91, 8, 2, '16 GB', '5600  MHz', 1, 40),
(92, 8, 2, '32 GB', '6000  MHz', 2, 40),
(93, 8, 2, '16 GB', '4800  MHz', 1, 36),
(94, 8, 2, '32 GB', '5200  MHz', 2, 36),
(95, 8, 2, '16 GB', '5600  MHz', 1, 40),
(96, 8, 2, '32 GB', '6000  MHz', 2, 40),
(97, 15, 2, '16 GB', '4800  MHz', 1, 36),
(98, 15, 2, '32 GB', '5200  MHz', 2, 36),
(99, 15, 2, '16 GB', '5600  MHz', 1, 40),
(100, 15, 2, '32 GB', '6000  MHz', 2, 40),
(101, 15, 2, '16 GB', '4800  MHz', 1, 36),
(102, 15, 2, '32 GB', '5200  MHz', 2, 36),
(103, 15, 2, '16 GB', '5600  MHz', 1, 40),
(104, 15, 2, '32 GB', '6000  MHz', 2, 40);

-- --------------------------------------------------------

--
-- Table structure for table `ram_type`
--

CREATE TABLE `ram_type` (
  `ram_type_id` int(11) NOT NULL,
  `model` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ram_type`
--

INSERT INTO `ram_type` (`ram_type_id`, `model`) VALUES
(1, 'DDR4'),
(2, 'DDR5');

-- --------------------------------------------------------

--
-- Table structure for table `socket`
--

CREATE TABLE `socket` (
  `Socket_id` int(11) NOT NULL,
  `Socket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `socket`
--

INSERT INTO `socket` (`Socket_id`, `Socket`) VALUES
(1, '1200'),
(2, '1700'),
(3, 'AM4\r\n'),
(4, 'sTRX4');

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `storage_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `storage_type_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Capacity` text NOT NULL,
  `R_W_speed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`storage_id`, `Manufacturer_id`, `storage_type_id`, `Name`, `Capacity`, `R_W_speed`) VALUES
(1, 16, 1, 'Barracuda', '1 TB', '7200RPM'),
(2, 16, 1, 'Barracuda', '2 TB', '7200RPM'),
(3, 16, 1, 'Barracuda', '4 TB', '7200RPM'),
(4, 16, 1, 'Barracuda', '10 TB', '7200RPM'),
(5, 16, 1, 'Barracuda', '20 TB', '7200RPM'),
(6, 16, 1, 'IronWolf Pro', '1 TB', '7200RPM'),
(7, 16, 1, 'IronWolf Pro', '2 TB', '7200RPM'),
(8, 16, 1, 'IronWolf Pro', '4 TB', '7200RPM'),
(9, 16, 1, 'IronWolf Pro', '10 TB', '7200RPM'),
(10, 16, 1, 'IronWolf Pro', '20 TB', '7200RPM'),
(11, 17, 1, 'Black', '1 TB', '7200RPM'),
(12, 17, 1, 'Black', '2 TB', '7200RPM'),
(13, 17, 1, 'Black', '4 TB', '7200RPM'),
(14, 17, 1, 'Black', '10 TB', '7200RPM'),
(15, 17, 1, 'Black', '20 TB', '7200RPM'),
(16, 17, 1, 'Gold', '1 TB', '7200RPM'),
(17, 17, 1, 'Gold', '2 TB', '7200RPM'),
(18, 17, 1, 'Gold', '4 TB', '7200RPM'),
(19, 17, 1, 'Gold', '10 TB', '7200RPM'),
(20, 17, 1, 'Gold', '20 TB', '7200RPM'),
(21, 18, 2, '870 EVO', '256 GB', '560/530 MB/s'),
(22, 18, 2, '870 EVO', '512 GB', '560/530 MB/s'),
(23, 18, 2, '870 EVO', '1 TB', '560/530 MB/s'),
(24, 18, 2, '870 EVO', '2 TB', '560/530 MB/s'),
(25, 18, 2, '860 PRO', '256 GB', '560/530 MB/s'),
(26, 18, 2, '860 PRO', '512 GB', '560/530 MB/s'),
(27, 18, 2, '860 PRO', '1 TB', '560/530 MB/s'),
(28, 18, 2, '860 PRO', '2 TB', '560/530 MB/s'),
(29, 15, 2, 'A400', '240 GB', '500/450 MB/s'),
(30, 15, 2, 'A400', '480 GB', '500/450 MB/s'),
(31, 15, 2, 'A400', '960 GB', '500/450 MB/s'),
(32, 15, 2, 'A400', '1.92 TB', '500/450 MB/s'),
(33, 15, 2, 'DC450R', '240 GB', '550/500 MB/s'),
(34, 15, 2, 'DC450R', '480 GB', '550/500 MB/s'),
(35, 15, 2, 'DC450R', '960 GB', '550/500 MB/s'),
(36, 15, 2, 'DC450R', '1.92 TB', '550/500 MB/s'),
(37, 18, 2, '970 EVO', '250 GB', '3400/2500 MB/s'),
(38, 18, 2, '970 EVO', '500 GB', '3400/2500 MB/s'),
(39, 18, 2, '970 EVO', '1 TB', '3400/2500 MB/s'),
(40, 18, 2, '970 EVO', '2 TB', '3400/2500 MB/s'),
(41, 18, 3, '970 EVO PLUS', '250 GB', '3500/3300 MB/s'),
(42, 18, 3, '970 EVO PLUS', '500 GB', '3500/3300 MB/s'),
(43, 18, 3, '970 EVO PLUS', '1 TB', '3500/3300 MB/s'),
(44, 18, 3, '970 EVO PLUS', '2 TB', '3500/3300 MB/s'),
(45, 18, 3, '970 PRO', '250 GB', '3500/2700 MB/s'),
(46, 18, 3, '970 PRO', '500 GB', '3500/2700 MB/s'),
(47, 18, 3, '970 PRO', '1 TB', '3500/2700 MB/s'),
(48, 18, 3, '970 PRO', '2 TB', '3500/2700 MB/s'),
(49, 18, 3, '980 PRO', '250 GB', '7000/5100 MB/s'),
(50, 18, 3, '980 PRO', '500 GB', '7000/5100 MB/s'),
(51, 18, 3, '980 PRO', '1 TB', '7000/5100 MB/s'),
(52, 18, 3, '980 PRO', '2 TB', '7000/5100 MB/s');

-- --------------------------------------------------------

--
-- Table structure for table `storage_type`
--

CREATE TABLE `storage_type` (
  `storage_type_id` int(11) NOT NULL,
  `s_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storage_type`
--

INSERT INTO `storage_type` (`storage_type_id`, `s_type`) VALUES
(1, 'HDD'),
(2, 'SSD-2.5'),
(3, 'SSD M.2');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` text NOT NULL,
  `user_pwd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_pc`
--
ALTER TABLE `case_pc`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Indexes for table `chipset`
--
ALTER TABLE `chipset`
  ADD PRIMARY KEY (`chipset_id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`cpu_id`),
  ADD KEY `Socket_id` (`Socket_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Indexes for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  ADD PRIMARY KEY (`cooler_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`gpu_id`),
  ADD KEY `gpu_Manufacturer` (`Manufacturer_id`);

--
-- Indexes for table `manufacturer`
--
ALTER TABLE `manufacturer`
  ADD PRIMARY KEY (`Manufacturer_id`);

--
-- Indexes for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD PRIMARY KEY (`motherboard_id`),
  ADD KEY `Socket_id` (`Socket_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`),
  ADD KEY `chipset_id` (`chipset_id`);

--
-- Indexes for table `power_supply`
--
ALTER TABLE `power_supply`
  ADD PRIMARY KEY (`pw_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ram_id`),
  ADD UNIQUE KEY `ram_id_3` (`ram_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`),
  ADD KEY `ram_type_id` (`ram_type_id`);

--
-- Indexes for table `ram_type`
--
ALTER TABLE `ram_type`
  ADD PRIMARY KEY (`ram_type_id`);

--
-- Indexes for table `socket`
--
ALTER TABLE `socket`
  ADD PRIMARY KEY (`Socket_id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`storage_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`),
  ADD KEY `storage_type_id` (`storage_type_id`);

--
-- Indexes for table `storage_type`
--
ALTER TABLE `storage_type`
  ADD PRIMARY KEY (`storage_type_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_pc`
--
ALTER TABLE `case_pc`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `chipset`
--
ALTER TABLE `chipset`
  MODIFY `chipset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  MODIFY `cooler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `gpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `Manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `motherboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `power_supply`
--
ALTER TABLE `power_supply`
  MODIFY `pw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `ram_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT for table `ram_type`
--
ALTER TABLE `ram_type`
  MODIFY `ram_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socket`
--
ALTER TABLE `socket`
  MODIFY `Socket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `storage_type`
--
ALTER TABLE `storage_type`
  MODIFY `storage_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `case_pc`
--
ALTER TABLE `case_pc`
  ADD CONSTRAINT `case1` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `cpu`
--
ALTER TABLE `cpu`
  ADD CONSTRAINT `cpu_Manufacturer` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  ADD CONSTRAINT `cooler12` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `gpu`
--
ALTER TABLE `gpu`
  ADD CONSTRAINT `gpu_Manufacturer` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `motherboard`
--
ALTER TABLE `motherboard`
  ADD CONSTRAINT `chipset` FOREIGN KEY (`chipset_id`) REFERENCES `chipset` (`chipset_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `manufa` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `socket` FOREIGN KEY (`Socket_id`) REFERENCES `socket` (`Socket_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `power_supply`
--
ALTER TABLE `power_supply`
  ADD CONSTRAINT `powers` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ram`
--
ALTER TABLE `ram`
  ADD CONSTRAINT `ram1` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ram_type` FOREIGN KEY (`ram_type_id`) REFERENCES `ram_type` (`ram_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `manufact` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `storage1` FOREIGN KEY (`storage_type_id`) REFERENCES `storage_type` (`storage_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
