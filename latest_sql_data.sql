-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 01:46 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `ID` int(11) NOT NULL,
  `HOUSE_NUMBER` varchar(255) NOT NULL,
  `STREET` varchar(255) NOT NULL,
  `CITY` varchar(255) NOT NULL,
  `STATE` varchar(255) NOT NULL,
  `ZIP` varchar(255) NOT NULL,
  `COUNTY` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`ID`, `HOUSE_NUMBER`, `STREET`, `CITY`, `STATE`, `ZIP`, `COUNTY`) VALUES
(1, '5855', 'NORTH KOLB ROAD UNIT 9106', 'TUCSON', 'AZ', '85750', 'Barbados'),
(2, '4185', 'Paradise ROAD', 'LAS VEGAS', 'NV', '89169', 'Clark'),
(3, '3970', 'Spencer Street', 'LAS VEGAS', 'NV', '89119', 'Clark'),
(4, '4381', 'West Flamingo Road Unit 5902', 'LAS VEGAS', 'NV', '89103', 'Summerville'),
(5, '3750', 'South Las Vegas Blvd Unit 4606', 'LAS VEGAS', 'NV', '89158', 'Clark'),
(6, '2777', 'Paradise Road Unit 3704', 'LAS VEGAS', 'NV', '89109', 'Clark');

-- --------------------------------------------------------

--
-- Table structure for table `is_located_at`
--

CREATE TABLE `is_located_at` (
  `ID` int(11) NOT NULL,
  `LISTING_ID` int(11) NOT NULL,
  `ADDRESS_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `is_located_at`
--

INSERT INTO `is_located_at` (`ID`, `LISTING_ID`, `ADDRESS_ID`) VALUES
(1, 1, 1),
(2, 2, 2),
(3, 3, 3),
(4, 4, 4),
(5, 5, 5),
(6, 6, 6);

-- --------------------------------------------------------

--
-- Table structure for table `listing`
--

CREATE TABLE `listing` (
  `ID` int(11) NOT NULL,
  `PRICE` double NOT NULL,
  `FEATURES` text NOT NULL,
  `NUMBER_OF_BATHROOMS` int(11) NOT NULL,
  `NUMBER_OF_BEDROOMS` int(11) NOT NULL,
  `NUMBER_OF_FLOORS` int(11) NOT NULL,
  `YEAR_BUILT` date NOT NULL,
  `LAST_REMODELED` date NOT NULL,
  `LISTING_STATUS` enum('Y','N') DEFAULT NULL,
  `LOT_ACRES` float NOT NULL,
  `NUMBER_OF_UNITS` int(11) NOT NULL,
  `FLOOR_TYPE` varchar(255) NOT NULL,
  `EXTERIOR_MATERIAL` varchar(255) NOT NULL,
  `LAST_SOLD_AMOUNT` double NOT NULL,
  `HEATING` varchar(255) NOT NULL,
  `COOLING` varchar(255) NOT NULL,
  `DATE_ADDED` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `SELLER_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `listing`
--

INSERT INTO `listing` (`ID`, `PRICE`, `FEATURES`, `NUMBER_OF_BATHROOMS`, `NUMBER_OF_BEDROOMS`, `NUMBER_OF_FLOORS`, `YEAR_BUILT`, `LAST_REMODELED`, `LISTING_STATUS`, `LOT_ACRES`, `NUMBER_OF_UNITS`, `FLOOR_TYPE`, `EXTERIOR_MATERIAL`, `LAST_SOLD_AMOUNT`, `HEATING`, `COOLING`, `DATE_ADDED`, `SELLER_ID`) VALUES
(1, 150000, 'Community Room\r\nUnderground Parking\r\nBuilding Signage\r\nVisitor Parking Lot\r\nElevator\r\nStorage for each suite', 2, 4, 3, '2010-05-05', '2012-05-09', 'Y', 3.5, 1, 'hardwood', 'aluminum', 145000, 'Gas', 'Central', '2019-05-15 05:44:53', 1),
(2, 200000, 'Community Room\r\nUnderground Parking\r\nBuilding Signage\r\nVisitor Parking Lot\r\nElevator\r\nStorage for each suite', 2, 4, 3, '2010-05-05', '2012-05-09', 'Y', 3.5, 1, 'hardwood', 'aluminum', 195000, 'Electric', 'Central', '2019-05-15 05:44:53', 1),
(3, 100000, 'Community Room\r\nUnderground Parking\r\nBuilding Signage\r\nVisitor Parking Lot\r\nElevator\r\nStorage for each suite', 1, 2, 3, '2010-05-05', '2012-05-09', 'Y', 3.5, 1, 'hardwood', 'aluminum', 95000, 'Gas', 'Central', '2019-05-15 05:44:53', 1),
(4, 120000, 'Community Room\r\nUnderground Parking\r\nBuilding Signage\r\nVisitor Parking Lot\r\nElevator\r\nStorage for each suite', 2, 2, 1, '2010-05-05', '2012-05-09', 'Y', 3.5, 1, 'hardwood', 'aluminum', 110000, 'Gas', 'Central', '2019-05-15 05:44:53', 1),
(5, 85000, 'Community Room\r\nUnderground Parking\r\nBuilding Signage\r\nVisitor Parking Lot\r\nElevator\r\nStorage for each suite', 1, 1, 1, '2010-05-05', '2012-05-09', 'Y', 3.5, 1, 'hardwood', 'aluminum', 80000, 'Gas', 'Central', '2019-05-15 05:44:53', 1),
(6, 1000000, 'Community Room\r\nUnderground Parking\r\nBuilding Signage\r\nVisitor Parking Lot\r\nElevator\r\nStorage for each suite', 3, 3, 3, '2010-05-05', '2012-05-09', 'Y', 3.5, 1, 'hardwood', 'aluminum', 950000, 'Electric', 'Central', '2019-05-15 05:44:53', 1);

-- --------------------------------------------------------

--
-- Table structure for table `picture`
--

CREATE TABLE `picture` (
  `ID` int(11) NOT NULL,
  `URL` varchar(255) NOT NULL,
  `LISTING_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `picture`
--

INSERT INTO `picture` (`ID`, `URL`, `LISTING_ID`) VALUES
(1, 'assets/img/placeholder-house.jpg', 1),
(2, 'assets/img/h2.jpg', 2),
(3, 'assets/img/h3.jpg', 3),
(4, 'assets/img/h4.jpg', 4),
(5, 'assets/img/h5.jpg', 5),
(6, 'assets/img/h6.jpg', 6);

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `ID` int(11) NOT NULL,
  `NAME` varchar(255) NOT NULL,
  `TYPE` varchar(255) NOT NULL,
  `PHONE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`ID`, `NAME`, `TYPE`, `PHONE`) VALUES
(1, 'George Francis', 'Investor', '555-555-5555');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `is_located_at`
--
ALTER TABLE `is_located_at`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LISTING_ID` (`LISTING_ID`),
  ADD KEY `ADDRESS_ID` (`ADDRESS_ID`);

--
-- Indexes for table `listing`
--
ALTER TABLE `listing`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `IS_LISTED_BY` (`SELLER_ID`) USING BTREE;

--
-- Indexes for table `picture`
--
ALTER TABLE `picture`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `LISTING` (`LISTING_ID`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `is_located_at`
--
ALTER TABLE `is_located_at`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `listing`
--
ALTER TABLE `listing`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `picture`
--
ALTER TABLE `picture`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `is_located_at`
--
ALTER TABLE `is_located_at`
  ADD CONSTRAINT `is_located_at_ibfk_1` FOREIGN KEY (`LISTING_ID`) REFERENCES `listing` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `is_located_at_ibfk_2` FOREIGN KEY (`ADDRESS_ID`) REFERENCES `address` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listing`
--
ALTER TABLE `listing`
  ADD CONSTRAINT `DISPLAYS` FOREIGN KEY (`SELLER_ID`) REFERENCES `seller` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `picture`
--
ALTER TABLE `picture`
  ADD CONSTRAINT `LISTING` FOREIGN KEY (`LISTING_ID`) REFERENCES `listing` (`ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
