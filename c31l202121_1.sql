-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 20, 2022 at 12:09 PM
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
  `ff_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Max_Length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
(1, 'H410'),
(2, 'B460'),
(3, 'H470'),
(4, 'Q470'),
(5, 'Z490'),
(6, 'W480'),
(7, 'H510'),
(8, 'B560'),
(9, 'H570'),
(10, 'Q570'),
(11, 'Z590'),
(12, 'W580'),
(13, 'H610'),
(14, 'B660'),
(15, 'H670'),
(16, 'Z690'),
(17, 'X570'),
(18, 'PRO 565'),
(19, 'PRO 500'),
(20, 'B550'),
(21, 'A520'),
(22, 'PRO 560'),
(23, 'B550A'),
(24, 'X470'),
(25, 'B450'),
(26, 'X370'),
(27, 'X300'),
(28, 'B350'),
(29, 'B300'),
(30, 'A320'),
(31, 'A300'),
(32, '480X'),
(33, '570X'),
(34, '580X');

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
-- Table structure for table `form factor`
--

CREATE TABLE `form factor` (
  `ff_id` int(11) NOT NULL,
  `Form Factor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `form factor`
--

INSERT INTO `form factor` (`ff_id`, `Form Factor`) VALUES
(1, 'ATX'),
(2, 'E-ATX'),
(3, 'Micro ATX'),
(4, 'Mini ITX');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Type` text NOT NULL,
  `Name` text NOT NULL,
  `Memory Size` text NOT NULL,
  `Memory Type` text NOT NULL,
  `Core Clock` text NOT NULL,
  `Boost Clock` text NOT NULL,
  `Length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpu_id`, `Manufacturer_id`, `Type`, `Name`, `Memory Size`, `Memory Type`, `Core Clock`, `Boost Clock`, `Length`) VALUES
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
(14, 'Noctua');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `motherboard_id` int(11) NOT NULL,
  `Socket_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `chipset_id` int(11) NOT NULL,
  `ff_id` int(11) NOT NULL,
  `storage_id` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `power supply`
--

CREATE TABLE `power supply` (
  `pw_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Wattage` text NOT NULL,
  `Efficiency Rating` text NOT NULL,
  `Length` text NOT NULL,
  `Modular` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE `ram` (
  `ram_type_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Speed` text NOT NULL,
  `Modules` text NOT NULL,
  `CAS Latency` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ram type`
--

CREATE TABLE `ram type` (
  `ram_type_id` int(11) NOT NULL,
  `model` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ram type`
--

INSERT INTO `ram type` (`ram_type_id`, `model`) VALUES
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
-- Table structure for table `Storage`
--

CREATE TABLE `Storage` (
  `storage_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Capacity` text NOT NULL,
  `Cache` text NOT NULL,
  `Read/write speed` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `storage type`
--

CREATE TABLE `storage type` (
  `storage_id` int(11) NOT NULL,
  `storage type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storage type`
--

INSERT INTO `storage type` (`storage_id`, `storage type`) VALUES
(1, 'HDD-7200rpm'),
(2, 'SSD-2.5'),
(3, 'SSD M.2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_pc`
--
ALTER TABLE `case_pc`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`),
  ADD KEY `ff_id` (`ff_id`);

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
-- Indexes for table `form factor`
--
ALTER TABLE `form factor`
  ADD PRIMARY KEY (`ff_id`);

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
  ADD KEY `chipset_id` (`chipset_id`),
  ADD KEY `ff_id` (`ff_id`),
  ADD KEY `storage_id` (`storage_id`);

--
-- Indexes for table `power supply`
--
ALTER TABLE `power supply`
  ADD PRIMARY KEY (`pw_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`ram_type_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Indexes for table `ram type`
--
ALTER TABLE `ram type`
  ADD PRIMARY KEY (`ram_type_id`);

--
-- Indexes for table `socket`
--
ALTER TABLE `socket`
  ADD PRIMARY KEY (`Socket_id`);

--
-- Indexes for table `Storage`
--
ALTER TABLE `Storage`
  ADD PRIMARY KEY (`storage_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`);

--
-- Indexes for table `storage type`
--
ALTER TABLE `storage type`
  ADD PRIMARY KEY (`storage_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `case_pc`
--
ALTER TABLE `case_pc`
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT;

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
-- AUTO_INCREMENT for table `form factor`
--
ALTER TABLE `form factor`
  MODIFY `ff_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `gpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `Manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `motherboard_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `power supply`
--
ALTER TABLE `power supply`
  MODIFY `pw_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `ram_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ram type`
--
ALTER TABLE `ram type`
  MODIFY `ram_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `socket`
--
ALTER TABLE `socket`
  MODIFY `Socket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `Storage`
--
ALTER TABLE `Storage`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storage type`
--
ALTER TABLE `storage type`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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
  ADD CONSTRAINT `mother1` FOREIGN KEY (`Socket_id`) REFERENCES `socket` (`Socket_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mother2` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mother3` FOREIGN KEY (`chipset_id`) REFERENCES `chipset` (`chipset_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mother4` FOREIGN KEY (`ff_id`) REFERENCES `form factor` (`ff_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `mother5` FOREIGN KEY (`storage_id`) REFERENCES `storage type` (`storage_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `power supply`
--
ALTER TABLE `power supply`
  ADD CONSTRAINT `powers` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `ram`
--
ALTER TABLE `ram`
  ADD CONSTRAINT `ram1` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ram2` FOREIGN KEY (`ram_type_id`) REFERENCES `ram type` (`ram_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `Storage`
--
ALTER TABLE `Storage`
  ADD CONSTRAINT `manufact` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `storage1` FOREIGN KEY (`storage_id`) REFERENCES `storage type` (`storage_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
