-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2022 at 10:54 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_test`
--

-- --------------------------------------------------------

--
-- Table structure for table `case_pc`
--

CREATE TABLE `case_pc` (
  `case_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `length_id` int(11) NOT NULL,
  `ff_id` int(11) NOT NULL,
  `Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `chipset`
--

CREATE TABLE `chipset` (
  `chipset_id` int(11) NOT NULL,
  `chipset` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE `cpu` (
  `cpu_id` int(11) NOT NULL,
  `Socket_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `Type` text NOT NULL,
  `Name` text NOT NULL,
  `Seeds` int(11) NOT NULL,
  `Threads` int(11) NOT NULL,
  `Clock` text NOT NULL,
  `Turbo clock` text NOT NULL,
  `L3 cache` text NOT NULL,
  `TDP` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `form factor`
--

CREATE TABLE `form factor` (
  `ff_id` int(11) NOT NULL,
  `Form Factor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gpu`
--

CREATE TABLE `gpu` (
  `gpu_id` int(11) NOT NULL,
  `Manufacturer_id` int(11) NOT NULL,
  `length_id` int(11) NOT NULL,
  `Video chipset` text NOT NULL,
  `Memory Size` text NOT NULL,
  `Memory Type` text NOT NULL,
  `Memory Bandwidth` text NOT NULL,
  `Width` text NOT NULL,
  `Length` text NOT NULL,
  `Thickness` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `gpu length`
--

CREATE TABLE `gpu length` (
  `length_id` int(11) NOT NULL,
  `Length` int(11) NOT NULL,
  `Max GPU Length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `manufacturer`
--

CREATE TABLE `manufacturer` (
  `Manufacturer_id` int(11) NOT NULL,
  `Manufacturer` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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

-- --------------------------------------------------------

--
-- Table structure for table `socket`
--

CREATE TABLE `socket` (
  `Socket_id` int(11) NOT NULL,
  `Socket` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `storage type`
--

CREATE TABLE `storage type` (
  `storage_id` int(11) NOT NULL,
  `storage type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `case_pc`
--
ALTER TABLE `case_pc`
  ADD PRIMARY KEY (`case_id`),
  ADD KEY `Manufacturer_id` (`Manufacturer_id`),
  ADD KEY `length_id` (`length_id`),
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
  ADD KEY `gpu_Manufacturer` (`Manufacturer_id`),
  ADD KEY `length` (`length_id`);

--
-- Indexes for table `gpu length`
--
ALTER TABLE `gpu length`
  ADD PRIMARY KEY (`length_id`);

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
  MODIFY `chipset_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `cpu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `cpu_cooler`
--
ALTER TABLE `cpu_cooler`
  MODIFY `cooler_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `form factor`
--
ALTER TABLE `form factor`
  MODIFY `ff_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gpu`
--
ALTER TABLE `gpu`
  MODIFY `gpu_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gpu length`
--
ALTER TABLE `gpu length`
  MODIFY `length_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manufacturer`
--
ALTER TABLE `manufacturer`
  MODIFY `Manufacturer_id` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `ram_type_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `socket`
--
ALTER TABLE `socket`
  MODIFY `Socket_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `storage type`
--
ALTER TABLE `storage type`
  MODIFY `storage_id` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `gpu_Manufacturer` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `gpu_length` FOREIGN KEY (`length_id`) REFERENCES `gpu length` (`length_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `ram1` FOREIGN KEY (`Manufacturer_id`) REFERENCES `manufacturer` (`Manufacturer_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `socket`
--
ALTER TABLE `socket`
  ADD CONSTRAINT `socket_ibfk_1` FOREIGN KEY (`Socket_id`) REFERENCES `cpu` (`Socket_id`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
