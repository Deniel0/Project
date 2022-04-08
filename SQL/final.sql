-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 08, 2022 at 07:56 PM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `user_id` int(11) NOT NULL,
  `prev` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`user_id`, `prev`) VALUES
(1, 1),
(5, 1);

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
-- Table structure for table `complete_builds`
--

CREATE TABLE `complete_builds` (
  `cb_id` int(11) NOT NULL,
  `cpu` text NOT NULL,
  `motherboard` text NOT NULL,
  `cpu_cooler` text NOT NULL,
  `ram` text NOT NULL,
  `gpu` text NOT NULL,
  `first_storage` text NOT NULL,
  `sec_storage` text NOT NULL,
  `pc_case` text NOT NULL,
  `power_supply` text NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `complete_builds`
--

INSERT INTO `complete_builds` (`cb_id`, `cpu`, `motherboard`, `cpu_cooler`, `ram`, `gpu`, `first_storage`, `sec_storage`, `pc_case`, `power_supply`, `images`) VALUES
(1, 'Intel I3-10100 3.6 GHz', 'Asus PRIME B460-PLUS', 'be quiet! Dark Rock Pro 4 Air', 'Corsair DDR4 32 GB 3200 MHz', 'Asus GeForce GTX 1050 2GB GDDR5', 'Kingston SSD-2.5 A400 240 GB', 'Samsung SSD M.2 980 PRO 2 TB', 'be quiet! Silent Base 802', 'Asus RMx (2021) 750W 80+ Gold Full', 'images/gamingpc3.png'),
(2, 'Intel I3-12100 3.3 GHz', 'Gigabyte B460 AORUS PRO AC', 'Noctua NH-D15 Air', 'Kingston DDR4 32 GB 3600  MHz', 'Asus GeForce GTX 1050Ti 4GB GDDR5', 'Kingston SSD-2.5 DC450R 1.92 TB', 'Western Digital HDD Black 1 TB', 'Asus GX 601', 'Asus ROG Strix 750W 80+ Gold Full', 'images/gep3.png'),
(3, 'Intel I5-10400 2.9 GHz', 'MSI B350M PRO-VD PLUS', 'NZXT Kraken X53 Water', 'Corsair DDR4 16 GB 3200 MHz', 'Asus GeForce GTX 1060 3GB GDDR5', 'Samsung SSD-2.5 870 EVO 512 GB', 'Seagate HDD Barracuda 2 TB', 'be quiet! Pure Base 900', 'be quiet! Dark Power 12 850W 80+ Titanium Full', 'images/gep2.png'),
(4, 'Intel I5-12600K 3.7 GHz', 'Asus ROG STRIX Z590-E GAMING', 'be quiet! Dark Rock Pro 4 Air', 'G.Skill DDR4 32 GB 3200 MHz', 'Asus GeForce GTX 1080Ti 11GB GDDR5X', 'Samsung SSD M.2 980 PRO 250 GB', 'Seagate HDD Barracuda 4 TB', 'NZXT CRFT 08 H510 Valhalla', 'EVGA SuperNOVA G6 1000W 80+ Gold Full', 'images/gep4.png'),
(5, 'AMD Ryzen 3 1200 3.1 GHz', 'MSI B350M PRO-VD PLUS', 'Cooler Master Hyper 212 RGB Air', 'Kingston DDR4 8 GB 3200 MHz', 'Asus GeForce GTX 1050 2GB GDDR5', 'Kingston SSD-2.5 A400 240 GB', 'Western Digital HDD Black 1 TB', 'Corsair Air 240', 'Corsair AXi 750W 80+ Platinum Full', 'images/gep5.png'),
(6, 'AMD Ryzen 3 3300X 3.8 GHz', 'Asus ROG Crosshair VII Hero', 'NZXT Kraken X63 Water', 'G.Skill DDR4 16 GB 3600  MHz', 'Asus GeForce GTX 1050 2GB GDDR5', 'Samsung SSD-2.5 870 EVO 256 GB', 'Seagate HDD Barracuda 2 TB', 'Asus ROG Strix Helios', 'be quiet! Pure Power 11 700W 80+ Gold Semi', 'images/gep6.png'),
(7, 'AMD Ryzen 5 2600X 3.6 GHz', 'Asus ROG Crosshair VIII Dark Hero', 'NZXT Kraken Z73 Water', 'Corsair DDR4 32 GB 3600  MHz', 'Gigabyte Radeon RX 5600 XT 6GB GDDR6', 'Samsung SSD M.2 970 EVO PLUS 500 GB', 'Samsung SSD-2.5 970 EVO 2 TB', 'Corsair 1000D', 'Corsair HX 1000W 80+ Platinum Full', 'images/gamingpc3.png'),
(8, 'AMD Ryzen 5 5600X 3.7 GHz', 'Asus ROG Crosshair VIII Dark Hero', 'be quiet! Dark Rock Pro 4 Air', 'Kingston DDR4 32 GB 3200 MHz', 'Asus GeForce RTX 2060 6GB GDDR6', 'Kingston SSD-2.5 DC450R 1.92 TB', 'Western Digital HDD Gold 10 TB', 'Cooler Master Cosmos II', 'EVGA T2 1000W 80+ Titanium Full', 'images/gep4.png'),
(9, 'Intel I7-12700 2.1 GHz', 'Gigabyte B660M AORUS Pro', 'be quiet! Dark Rock Pro 4 Air', 'DDR4 64 GB 3600  MHz', 'Gigabyte GeForce RTX 3070 8GB GDDR6', 'Samsung SSD M.2 980 PRO 1 TB', 'Seagate HDD IronWolf Pro 20 TB', 'Cooler Master MasterBox Pro 5 RGB', 'Asus ROG Thor 1200P 1200W 80+ Platinum Full', 'images/gep3.png'),
(10, 'Intel I9-12900K 3.2 GHz', 'Gigabyte Z690 AORUS ELITE', 'NZXT Kraken Z73 Water', 'Kingston DDR4 128 GB 3200 MHz', 'Gigabyte GeForce RTX 3090 24GB GDDR6X', 'Samsung SSD M.2 980 PRO 2 TB', 'Samsung SSD M.2 980 PRO 2 TB', 'Asus ROG Strix Helios', 'be quiet! Dark Power Pro 12 1500W 80+ Titanium Full', 'images/gep4.png'),
(11, 'AMD Ryzen 9 5950X 3.4 GHz', 'Asus ROG Strix X570-E', 'Cooler Master masterliquid ml360 RGB Water', 'G.Skill DDR4 64 GB 3200 MHz', 'Gigabyte Radeon RX 6900 XT 16GB GDDR6', 'Samsung SSD M.2 980 PRO 1 TB', 'Western Digital HDD Gold 20 TB', 'Cooler Master Cosmos II', 'Corsair HX 1200W 80+ Platinum Full', 'images/gep5.png'),
(12, 'Intel I9-12900KF 3.2 GHz', 'MSI MPG Z690 EDGE', 'NZXT Kraken Z73 Water', 'Kingston DDR4 128 GB 3600  MHz', 'Gigabyte GeForce RTX 3080Ti 12GB GDDR6X', 'Samsung SSD M.2 980 PRO 1 TB', 'Seagate HDD Barracuda 20 TB', 'Asus TUF Gaming GT301', 'be quiet! Dark Power Pro 12 1500W 80+ Titanium Full', 'images/gep6.png');

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
  `Turbo_clock` text NOT NULL,
  `L3_cache` text NOT NULL,
  `TDP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`cpu_id`, `Socket_id`, `Manufacturer_id`, `Name`, `Seeds`, `Threads`, `Clock`, `Turbo_clock`, `L3_cache`, `TDP`) VALUES
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
(92, 4, 1, 'Ryzen 3990X', 64, 128, '2.9 GHz', '4.3 GHz', '128 MB', '280 W'),
(100, 7, 10, 'i7-4790', 4, 8, '3.6 GHz', '4.5 GHz', '64 MB', '80 W');

-- --------------------------------------------------------

--
-- Table structure for table `cpu_cooler`
--

CREATE TABLE `cpu_cooler` (
  `cooler_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Model` text NOT NULL,
  `cooler_type_id` int(11) NOT NULL,
  `RPM` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpu_cooler`
--

INSERT INTO `cpu_cooler` (`cooler_id`, `Manufacturer_id`, `Model`, `cooler_type_id`, `RPM`) VALUES
(1, 3, 'Dark Rock Pro 4', 1, 1500),
(2, 4, 'Hyper 212 RGB', 1, 2000),
(3, 14, 'NH-D15', 1, 1500),
(4, 13, 'Kraken X53', 2, 2000),
(5, 13, 'Kraken X63', 2, 2000),
(6, 13, 'Kraken Z73', 2, 1800),
(7, 4, 'masterliquid ml240l RGB', 2, 1800),
(8, 4, 'masterliquid ml360 RGB', 2, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `cpu_cooler_type`
--

CREATE TABLE `cpu_cooler_type` (
  `cpu_cooler_type_id` int(11) NOT NULL,
  `cooler_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cpu_cooler_type`
--

INSERT INTO `cpu_cooler_type` (`cpu_cooler_type_id`, `cooler_type`) VALUES
(1, 'Air'),
(2, 'Water'),
(3, 'liquid');

-- --------------------------------------------------------

--
-- Table structure for table `efficiency_type`
--

CREATE TABLE `efficiency_type` (
  `efficiency_type_id` int(11) NOT NULL,
  `efficiency_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `efficiency_type`
--

INSERT INTO `efficiency_type` (`efficiency_type_id`, `efficiency_type`) VALUES
(1, '80+ Bronze'),
(2, '80+ Silver'),
(3, '80+ Gold'),
(4, '80+ Platinum'),
(5, '80+ Titanium');

-- --------------------------------------------------------

--
-- Table structure for table `gmemory_type`
--

CREATE TABLE `gmemory_type` (
  `memory_type_id` int(11) NOT NULL,
  `gmem_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gmemory_type`
--

INSERT INTO `gmemory_type` (`memory_type_id`, `gmem_type`) VALUES
(1, 'GDDR5'),
(2, 'GDDR5X'),
(3, 'GDDR6'),
(4, 'GDDR6X');

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Type` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Memory_size` text NOT NULL,
  `Memory_type` int(11) NOT NULL,
  `Core_clock` text NOT NULL,
  `Boost_clock` text NOT NULL,
  `Length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gpu`
--

INSERT INTO `gpu` (`gpu_id`, `Manufacturer_id`, `Type`, `Name`, `Memory_size`, `Memory_type`, `Core_clock`, `Boost_clock`, `Length`) VALUES
(1, 2, 1, '1050', '2GB', 1, '1442 MHz', '1569 MHz', 241),
(2, 2, 1, '1050Ti', '4GB', 1, '1379 MHz', '1506 MHz', 241),
(3, 2, 1, '1060', '3GB', 1, '1594 MHz', '1809 MHz', 242),
(4, 2, 1, '1060', '6GB', 1, '1620 MHz', '1873 MHz', 298),
(5, 2, 1, '1070', '8GB', 1, '1506 MHz', '1721 MHz', 298),
(6, 2, 1, '1070Ti', '8GB', 1, '1607 MHz', '1759 MHz', 298),
(7, 2, 1, '1080', '8GB', 1, '1759 MHz', '1936 MHz', 298),
(8, 2, 1, '1080Ti', '11GB', 2, '1569 MHz', '1708 MHz', 298),
(9, 9, 1, '1050', '2GB', 1, '1392 MHz', '1531 MHz', 229),
(10, 9, 1, '1050Ti', '4GB', 1, '1354 MHz', '1468 MHz', 229),
(11, 9, 1, '1060', '3GB', 1, '1556 MHz', '1797 MHz', 223),
(12, 9, 1, '1060', '6GB', 1, '1582 MHz', '1797 MHz', 223),
(13, 9, 1, '1070', '8GB', 1, '1556 MHz', '1771 MHz', 280),
(14, 9, 1, '1070Ti', '8GB', 1, '1632 MHz', '1721 MHz', 280),
(15, 9, 1, '1080', '8GB', 1, '1657 MHz', '1797 MHz', 280),
(16, 9, 1, '1080Ti', '11GB', 2, '1632 MHz', '1746 MHz', 267),
(17, 2, 1, '1650', '4GB', 3, '1410 MHz', '1680 MHz', 204),
(18, 2, 1, '1650S', '4GB', 3, '1530 MHz', '1815 MHz', 243),
(19, 9, 1, '1650', '4GB', 3, '1410 MHz', '1590 MHz', 191),
(20, 9, 1, '1650S', '4GB', 3, '1530 MHz', '1740 MHz', 172),
(21, 2, 1, '1660', '6GB', 3, '1530 MHz', '1845 MHz', 205),
(22, 2, 1, '1660S', '6GB', 3, '1530 MHz', '1875 MHz', 243),
(23, 2, 1, '1660Ti', '6GB', 3, '1500 MHz', '1890 MHz', 301),
(24, 9, 1, '1660', '6GB', 3, '1530 MHz', '1860 MHz', 280),
(25, 9, 1, '1660S', '6GB', 3, '1530 MHz', '1860 MHz', 280),
(26, 9, 1, '1660Ti', '6GB', 3, '1500 MHz', '1860 MHz', 280),
(27, 12, 1, '1060', '6GB', 1, '1506 MHz', '1709 MHz', 250),
(28, 12, 1, '1070', '8GB', 1, '1506 MHz', '1683 MHz', 267),
(29, 12, 1, '1070Ti', '8GB', 1, '1607 MHz', '1683 MHz', 267),
(30, 12, 1, '1080', '8GB', 1, '1607 MHz', '1733 MHz', 267),
(31, 12, 1, '1080Ti', '11GB', 2, '1480 MHz', '1582 MHz', 267),
(32, 2, 2, '2060', '6GB', 3, '1365 MHz', '1860 MHz', 300),
(33, 2, 2, '2060S', '8GB', 3, '1500 MHz', '1860 MHz', 301),
(34, 2, 2, '2070', '8GB', 3, '1410 MHz', '1845 MHz', 305),
(35, 2, 2, '2070S', '8GB', 3, '1635 MHz', '1935 MHz', 300),
(36, 2, 2, '2080', '8GB', 3, '1515 MHz', '1890 MHz', 300),
(37, 2, 2, '2080S', '8GB', 3, '1650 MHz', '1890 MHz', 300),
(38, 2, 2, '2080Ti', '11GB', 3, '1350 MHz', '1815 MHz', 310),
(39, 9, 2, '2060', '6GB', 3, '1680 MHz', '1770 MHz', 265),
(40, 9, 2, '2060S', '8GB', 3, '1470 MHz', '1680 MHz', 265),
(41, 9, 2, '2070', '8GB', 3, '1620 MHz', '1740 MHz', 280),
(42, 9, 2, '2070S', '8GB', 3, '1605 MHz', '1815 MHz', 286),
(43, 9, 2, '2080', '8GB', 3, '1710 MHz', '1890 MHz', 290),
(44, 9, 2, '2080S', '8GB', 3, '1650 MHz', '1845 MHz', 286),
(45, 9, 2, '2080Ti', '11GB', 3, '1350 MHz', '1770 MHz', 290),
(46, 2, 2, '3060', '12GB', 3, '1320 MHz', '1807 MHz', 177),
(47, 2, 2, '3060Ti', '8GB', 3, '1410 MHz', '1890 MHz', 318),
(48, 2, 2, '3070', '8GB', 3, '1500 MHz', '1905 MHz', 318),
(49, 2, 2, '3070Ti', '8GB', 4, '1575 MHz', '1815 MHz', 300),
(50, 2, 2, '3080', '10GB', 4, '1440 MHz', '1935 MHz', 318),
(51, 2, 2, '3080Ti', '12GB', 4, '1365 MHz', '1860 MHz', 293),
(52, 2, 2, '3090', '24GB', 4, '1395 MHz', '1890 MHz', 318),
(53, 9, 2, '3060', '12GB', 3, '1320 MHz', '1867 MHz', 296),
(54, 9, 2, '3060Ti', '8GB', 3, '1410 MHz', '1785 MHz', 296),
(55, 9, 2, '3070', '8GB', 3, '1500 MHz', '1845 MHz', 290),
(56, 9, 2, '3070Ti', '8GB', 4, '1575 MHz', '1875 MHz', 324),
(57, 9, 2, '3080', '10GB', 4, '1710 MHz', '1905 MHz', 319),
(58, 9, 2, '3080Ti', '12GB', 4, '1365 MHz', '1770 MHz', 320),
(59, 9, 2, '3090', '24GB', 4, '1395 MHz', '1860 MHz', 319),
(60, 2, 3, '5500 XT', '8GB', 3, '1607 MHz', '1865 MHz', 280),
(61, 2, 3, '5600 XT', '6GB', 3, '1247 MHz', '1770 MHz', 303),
(62, 2, 3, '5700', '8GB', 3, '1610 MHz', '1750 MHz', 305),
(63, 2, 3, '5700 XT', '8GB', 3, '1770 MHz', '2035 MHz', 305),
(64, 2, 3, '6600', '8GB', 3, '1626 MHz', '2491 MHz', 243),
(65, 2, 3, '6600 XT', '8GB', 3, '1968 MHz', '2607 MHz', 243),
(66, 2, 3, '6700 XT', '12GB', 3, '2321 MHz', '2581 MHz', 322),
(67, 2, 3, '6800', '16GB', 3, '1700 MHz', '2190 MHz', 320),
(68, 2, 3, '6800 XT', '16GB', 3, '1825 MHz', '2340 MHz', 310),
(69, 2, 3, '6900 XT', '16GB', 3, '1825 MHz', '2340 MHz', 320),
(70, 9, 3, '5500 XT', '8GB', 3, '1685 MHz', '1845 MHz', 281),
(71, 9, 3, '5600 XT', '6GB', 3, '1247 MHz', '1620 MHz', 228),
(72, 9, 3, '5700', '8GB', 3, '1565 MHz', '1750 MHz', 280),
(73, 9, 3, '5700 XT', '8GB', 3, '1650 MHz', '1905 MHz', 280),
(74, 9, 3, '6600', '8GB', 3, '1626 MHz', '2491 MHz', 282),
(75, 9, 3, '6600 XT', '8GB', 3, '1968 MHz', '2607 MHz', 282),
(76, 9, 3, '6700 XT', '12GB', 3, '2321 MHz', '2581 MHz', 281),
(77, 9, 3, '6800', '16GB', 3, '1815 MHz', '2155 MHz', 286),
(78, 9, 3, '6800 XT', '16GB', 3, '1825 MHz', '2310 MHz', 324),
(79, 9, 3, '6900 XT', '16GB', 3, '2015 MHz', '2365 MHz', 322);

-- --------------------------------------------------------

--
-- Table structure for table `gpu_type`
--

CREATE TABLE `gpu_type` (
  `gpu_type_id` int(11) NOT NULL,
  `g_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gpu_type`
--

INSERT INTO `gpu_type` (`gpu_type_id`, `g_type`) VALUES
(1, 'GeForce GTX'),
(2, 'GeForce RTX'),
(3, 'Radeon RX');

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
(18, 'Samsung'),
(19, 'ADATA'),
(32, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `motherboard`
--

CREATE TABLE `motherboard` (
  `motherboard_id` int(11) NOT NULL,
  `Socket_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `chipset_id` int(11) NOT NULL,
  `m2_comp` tinyint(1) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `motherboard`
--

INSERT INTO `motherboard` (`motherboard_id`, `Socket_id`, `Manufacturer_id`, `chipset_id`, `m2_comp`, `Name`) VALUES
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
(37, 3, 9, 9, 1, 'B450M DS3H'),
(39, 7, 1, 8, 1, 'Tesztboard'),
(40, 1, 19, 1, 1, 'Belakiraly');

-- --------------------------------------------------------

--
-- Table structure for table `power_supply`
--

CREATE TABLE `power_supply` (
  `pw_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Wattage` text NOT NULL,
  `Efficiency_Rating` int(11) NOT NULL,
  `modular_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `power_supply`
--

INSERT INTO `power_supply` (`pw_id`, `Manufacturer_id`, `Name`, `Wattage`, `Efficiency_Rating`, `modular_type`) VALUES
(1, 2, 'ROG Strix', '650W', 3, 3),
(2, 2, 'ROG Strix', '750W', 3, 3),
(3, 2, 'ROG Thor 850', '850W', 4, 3),
(4, 2, 'ROG Strix G', '1000W', 3, 3),
(5, 2, 'ROG Thor 1200P', '1200W', 4, 3),
(6, 3, 'System Power 9', '600W', 1, 1),
(7, 3, 'System Power 9', '700W', 1, 1),
(8, 3, 'Power Zone', '850W', 1, 3),
(9, 3, 'Power Zone', '1000W', 1, 3),
(10, 3, 'Pure Power 11', '600W', 3, 1),
(11, 3, 'Pure Power 11', '700W', 3, 2),
(12, 3, 'Straight Power 11', '850W', 3, 3),
(13, 3, 'Straight Power 11', '1000W', 3, 3),
(14, 3, 'Dark Power Pro', '650W', 4, 2),
(15, 3, 'Dark Power Pro', '700W', 4, 2),
(16, 3, 'Dark Power Pro', '850W', 4, 2),
(17, 3, 'Dark Power Pro', '1000W', 4, 2),
(18, 3, 'Dark Power 12', '750W', 5, 3),
(19, 3, 'Dark Power 12', '850W', 5, 3),
(20, 3, 'Dark Power 12', '1000W', 5, 3),
(21, 3, 'Dark Power Pro 12', '1200W', 5, 3),
(22, 3, 'Dark Power Pro 12', '1500W', 5, 3),
(23, 5, 'TXM', '650W', 1, 2),
(24, 5, 'TXM', '750W', 1, 2),
(25, 5, 'CXM', '850W', 1, 2),
(26, 5, 'TX', '950W', 1, 1),
(27, 2, 'RMx (2021)', '750W', 3, 3),
(28, 5, 'RM  (2021)', '850W', 3, 3),
(29, 5, 'RMx', '1000W', 3, 3),
(30, 5, 'AX', '1200W', 3, 3),
(31, 5, 'AXi', '750W', 4, 3),
(32, 5, 'HXi', '850W', 4, 3),
(33, 5, 'HX', '1000W', 4, 3),
(34, 5, 'HX', '1200W', 4, 3),
(35, 5, 'AX', '850W', 5, 3),
(36, 5, 'AX', '1000W', 5, 3),
(37, 5, 'AXi', '1500W', 5, 3),
(38, 5, 'AXi', '1600W', 5, 3),
(39, 7, 'BQ', '600W', 1, 2),
(40, 7, 'BR', '700W', 1, 1),
(41, 7, 'B3', '750W', 1, 3),
(42, 7, 'B5', '850W', 1, 3),
(43, 7, 'SuperNOVA G6', '750W', 3, 3),
(44, 7, 'SuperNOVA GA', '850W', 3, 3),
(45, 7, 'SuperNOVA G6', '1000W', 3, 3),
(46, 7, 'SuperNOVA Classified', '1500W', 3, 3),
(47, 7, 'PQ', '750W', 4, 3),
(48, 7, 'P2', '850W', 4, 2),
(49, 7, 'SuperNOVA P5', '1000W', 4, 2),
(50, 7, 'P2', '1600W', 4, 3),
(51, 7, 'SuperNOVA T2', '750W', 5, 3),
(52, 7, 'SuperNOVA T2', '850W', 5, 3),
(53, 7, 'T2', '1000W', 5, 3),
(54, 7, 'T2', '1600W', 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `pw_modular_type`
--

CREATE TABLE `pw_modular_type` (
  `pw_modular_type_id` int(11) NOT NULL,
  `pw_modular_type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pw_modular_type`
--

INSERT INTO `pw_modular_type` (`pw_modular_type_id`, `pw_modular_type`) VALUES
(1, 'none'),
(2, 'Semi'),
(3, 'Full');

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
(2, 'DDR5'),
(3, 'DDR6');

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
(4, 'sTRX4'),
(7, '1150'),
(8, '1151'),
(10, 'd13x91');

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
  `R_W_speed` text NOT NULL,
  `m2_comp` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`storage_id`, `Manufacturer_id`, `storage_type_id`, `Name`, `Capacity`, `R_W_speed`, `m2_comp`) VALUES
(1, 16, 1, 'Barracuda', '1 TB', '7200RPM', 0),
(2, 16, 1, 'Barracuda', '2 TB', '7200RPM', 0),
(3, 16, 1, 'Barracuda', '4 TB', '7200RPM', 0),
(4, 16, 1, 'Barracuda', '10 TB', '7200RPM', 0),
(5, 16, 1, 'Barracuda', '20 TB', '7200RPM', 0),
(6, 16, 1, 'IronWolf Pro', '1 TB', '7200RPM', 0),
(7, 16, 1, 'IronWolf Pro', '2 TB', '7200RPM', 0),
(8, 16, 1, 'IronWolf Pro', '4 TB', '7200RPM', 0),
(9, 16, 1, 'IronWolf Pro', '10 TB', '7200RPM', 0),
(10, 16, 1, 'IronWolf Pro', '20 TB', '7200RPM', 0),
(11, 17, 1, 'Black', '1 TB', '7200RPM', 0),
(12, 17, 1, 'Black', '2 TB', '7200RPM', 0),
(13, 17, 1, 'Black', '4 TB', '7200RPM', 0),
(14, 17, 1, 'Black', '10 TB', '7200RPM', 0),
(15, 17, 1, 'Black', '20 TB', '7200RPM', 0),
(16, 17, 1, 'Gold', '1 TB', '7200RPM', 0),
(17, 17, 1, 'Gold', '2 TB', '7200RPM', 0),
(18, 17, 1, 'Gold', '4 TB', '7200RPM', 0),
(19, 17, 1, 'Gold', '10 TB', '7200RPM', 0),
(20, 17, 1, 'Gold', '20 TB', '7200RPM', 0),
(21, 18, 2, '870 EVO', '256 GB', '560/530 MB/s', 0),
(22, 18, 2, '870 EVO', '512 GB', '560/530 MB/s', 0),
(23, 18, 2, '870 EVO', '1 TB', '560/530 MB/s', 0),
(24, 18, 2, '870 EVO', '2 TB', '560/530 MB/s', 0),
(25, 18, 2, '860 PRO', '256 GB', '560/530 MB/s', 0),
(26, 18, 2, '860 PRO', '512 GB', '560/530 MB/s', 0),
(27, 18, 2, '860 PRO', '1 TB', '560/530 MB/s', 0),
(28, 18, 2, '860 PRO', '2 TB', '560/530 MB/s', 0),
(29, 15, 2, 'A400', '240 GB', '500/450 MB/s', 0),
(30, 15, 2, 'A400', '480 GB', '500/450 MB/s', 0),
(31, 15, 2, 'A400', '960 GB', '500/450 MB/s', 0),
(32, 15, 2, 'A400', '1.92 TB', '500/450 MB/s', 0),
(33, 15, 2, 'DC450R', '240 GB', '550/500 MB/s', 0),
(34, 15, 2, 'DC450R', '480 GB', '550/500 MB/s', 0),
(35, 15, 2, 'DC450R', '960 GB', '550/500 MB/s', 0),
(36, 15, 2, 'DC450R', '1.92 TB', '550/500 MB/s', 0),
(37, 18, 3, '970 EVO', '250 GB', '3400/2500 MB/s', 1),
(38, 18, 3, '970 EVO', '500 GB', '3400/2500 MB/s', 1),
(39, 18, 3, '970 EVO', '1 TB', '3400/2500 MB/s', 1),
(40, 18, 3, '970 EVO', '2 TB', '3400/2500 MB/s', 1),
(41, 18, 3, '970 EVO PLUS', '250 GB', '3500/3300 MB/s', 1),
(42, 18, 3, '970 EVO PLUS', '500 GB', '3500/3300 MB/s', 1),
(43, 18, 3, '970 EVO PLUS', '1 TB', '3500/3300 MB/s', 1),
(44, 18, 3, '970 EVO PLUS', '2 TB', '3500/3300 MB/s', 1),
(45, 18, 3, '970 PRO', '250 GB', '3500/2700 MB/s', 1),
(46, 18, 3, '970 PRO', '500 GB', '3500/2700 MB/s', 1),
(47, 18, 3, '970 PRO', '1 TB', '3500/2700 MB/s', 1),
(48, 18, 3, '970 PRO', '2 TB', '3500/2700 MB/s', 1),
(49, 18, 3, '980 PRO', '250 GB', '7000/5100 MB/s', 1),
(50, 18, 3, '980 PRO', '500 GB', '7000/5100 MB/s', 1),
(51, 18, 3, '980 PRO', '1 TB', '7000/5100 MB/s', 1),
(52, 18, 3, '980 PRO', '2 TB', '7000/5100 MB/s', 1);

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
(3, 'SSD M.2'),
(4, 'SSHD');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `user_pwd`) VALUES
(1, 'alma', '$2y$10$RCKa1hJnZRTUzPNIZr0zK.15A2DKcNJ5nltoyzcwB2cj7s4FHE3by'),
(5, 'teszt12', '$2y$10$q/3akV8QlO4j.0nFlxOyLuhlGWcYGBA4AsbJ3P1fuRBc1yv6vj29K'),
(6, 'AshenTW0', '$2y$10$m8Ez/P6K.nHHdYg.NobvNeTM9wbLmC.YDCQgrY6X7.g7RjWEjZr9q'),
(7, 'VladPutin', '$2y$10$sSORVe6mR.7j8gTTv197O.AO.aVijezVrJbBZQOSrRUyCGFd3OJcm'),
(8, 'asd', '$2y$10$dNj7e113aPX/tVkZ2jsPHehPOpEqAINVovEQdc3bBfGoiDxTnl2.C'),
(9, 'alma122', '$2y$10$d.1/K9LqHOlJ6wDgH3TUaecrGQ5K.ZIFQsIqeKxFe2mq8CCWt6D06'),
(10, 'kalman', '$2y$10$Tq6M0sKT7RMpQuYLTxK01ud2z9i0J63Q.ph/66DnaOxn0aHB1bU4C'),
(11, 'a', '$2y$10$W8WQ0N5hgoMv3Ml0a9CYmOJqd3ThmcS0e9Ll13EEFDp.zLrlUnmRO');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD KEY `user_id` (`user_id`);

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
-- Indexes for table `complete_builds`
--
ALTER TABLE `complete_builds`
  ADD PRIMARY KEY (`cb_id`);

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
  ADD KEY `Manufacturer_id` (`Manufacturer_id`),
  ADD KEY `cooler_type_id` (`cooler_type_id`);

--
-- Indexes for table `cpu_cooler_type`
--
ALTER TABLE `cpu_cooler_type`
  ADD PRIMARY KEY (`cpu_cooler_type_id`);

--
-- Indexes for table `efficiency_type`
--
ALTER TABLE `efficiency_type`
  ADD PRIMARY KEY (`efficiency_type_id`);

--
-- Indexes for table `gmemory_type`
--
ALTER TABLE `gmemory_type`
  ADD PRIMARY KEY (`memory_type_id`);

--
-- Indexes for table `gpu`
--
ALTER TABLE `gpu`
  ADD PRIMARY KEY (`gpu_id`),
  ADD KEY `gpu_Manufacturer` (`Manufacturer_id`),
  ADD KEY `gpu_type` (`Type`),
  ADD KEY `Memory_type` (`Memory_type`);

--
-- Indexes for table `gpu_type`
--
ALTER TABLE `gpu_type`
  ADD PRIMARY KEY (`gpu_type_id`);

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
  ADD KEY `m.2_comp` (`m2_comp`);

--
-- Indexes for table `power_supply`
--
ALTER TABLE `power_supply`
  ADD PRIMARY KEY (`pw_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`),
  ADD KEY `modular_type` (`modular_type`),
  ADD KEY `efficiency` (`Efficiency_Rating`);

--
-- Indexes for table `pw_modular_type`
--
ALTER TABLE `pw_modular_type`
  ADD PRIMARY KEY (`pw_modular_type_id`),
  ADD KEY `pw_modular_type_id` (`pw_modular_type_id`);

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
  ADD KEY `storage_type_id` (`storage_type_id`),
  ADD KEY `m.2_comp` (`m2_comp`);

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
  MODIFY `case_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `chipset`
--
ALTER TABLE `chipset`
  MODIFY `chipset_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  MODIFY `cooler_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cpu_cooler_type`
--
ALTER TABLE `cpu_cooler_type`
  MODIFY `cpu_cooler_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `efficiency_type`
--
ALTER TABLE `efficiency_type`
  MODIFY `efficiency_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `gmemory_type`
--
ALTER TABLE `gmemory_type`
  MODIFY `memory_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `gpu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `gpu_type`
--
ALTER TABLE `gpu_type`
  MODIFY `gpu_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `Manufacturer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `motherboard`
--
ALTER TABLE `motherboard`
  MODIFY `motherboard_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `power_supply`
--
ALTER TABLE `power_supply`
  MODIFY `pw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=60;

--
-- AUTO_INCREMENT for table `pw_modular_type`
--
ALTER TABLE `pw_modular_type`
  MODIFY `pw_modular_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `ram_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `ram_type`
--
ALTER TABLE `ram_type`
  MODIFY `ram_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `socket`
--
ALTER TABLE `socket`
  MODIFY `Socket_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `storage_type`
--
ALTER TABLE `storage_type`
  MODIFY `storage_type_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin`
--
ALTER TABLE `admin`
  ADD CONSTRAINT `user` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `cooler` FOREIGN KEY (`cooler_type_id`) REFERENCES `cpu_cooler_type` (`cpu_cooler_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `cooler12` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `gpu`
--
ALTER TABLE `gpu`
  ADD CONSTRAINT `gpu_Manufacturer` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `gpu_type` FOREIGN KEY (`Type`) REFERENCES `gpu_type` (`gpu_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `memory type` FOREIGN KEY (`Memory_type`) REFERENCES `gmemory_type` (`memory_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `efficiency` FOREIGN KEY (`Efficiency_Rating`) REFERENCES `efficiency_type` (`efficiency_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `modular` FOREIGN KEY (`modular_type`) REFERENCES `pw_modular_type` (`pw_modular_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
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
  ADD CONSTRAINT `m.2` FOREIGN KEY (`m2_comp`) REFERENCES `motherboard` (`m2_comp`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `manufact` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `storage` FOREIGN KEY (`storage_type_id`) REFERENCES `storage_type` (`storage_type_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
