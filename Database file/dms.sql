-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2017 at 09:50 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `userType` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `userType`) VALUES
('admin1', 'password', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `foodId` int(11) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `fType` varchar(50) NOT NULL,
  `quantity` int(50) NOT NULL,
  `donator` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `timeCon` tinyint(1) DEFAULT '0',
  `conprice` tinyint(1) DEFAULT '0',
  `otheCon` tinyint(1) DEFAULT '0',
  `comment` varchar(200) DEFAULT NULL,
  `longi` varchar(100) NOT NULL,
  `lati` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `lastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`foodId`, `nic`, `fType`, `quantity`, `donator`, `address`, `district`, `division`, `mobile`, `timeCon`, `conprice`, `otheCon`, `comment`, `longi`, `lati`, `availability`, `lastUpdated`) VALUES
(1, '44877556v', 'Dhal', 20, 'K.L.Sumanasena', '44, Galle Rd, Hikkaduwa', 'Galle', 'Division 1', 778965874, 0, 0, 0, 'Always Available', '80.106286', '6.139468', 1, '2017-04-01 07:27:00'),
(2, '961812550V', 'Rice', 50, 'H.Maduranga', '164/5, Maharagama', 'Colombo', 'Division 1', 775637746, 0, 0, 0, NULL, '79.924867', '6.852215', 1, '2017-04-01 07:32:00'),
(3, '974653567V', 'Milk Powder', 5, 'U.Umendra', 'No.34, Hambontota', 'Hambantota', 'Division 2', 887563544, 0, 0, 0, NULL, '81.121231', '6.142883', 1, '2017-04-01 07:33:20');

-- --------------------------------------------------------

--
-- Table structure for table `mainleaderb`
--

CREATE TABLE `mainleaderb` (
  `nic` varchar(30) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Points` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mainleaderb`
--

INSERT INTO `mainleaderb` (`nic`, `Name`, `Points`) VALUES
('674833556V', 'Asela G.', 60),
('961816558V', 'Sadeep Sasan', 20),
('963457644V', 'Gihan Perera', 10);

-- --------------------------------------------------------

--
-- Table structure for table `sevices`
--

CREATE TABLE `sevices` (
  `serviceId` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `serviceName` varchar(50) NOT NULL,
  `personName` varchar(50) NOT NULL,
  `profession` varchar(50) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `timeCon` tinyint(1) DEFAULT '1',
  `priceCon` tinyint(1) DEFAULT '1',
  `otherCon` tinyint(1) DEFAULT '1',
  `comment` varchar(200) DEFAULT NULL,
  `longi` varchar(100) NOT NULL,
  `lati` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `lastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stage1approve` tinyint(1) NOT NULL DEFAULT '0',
  `stage2approve` tinyint(1) NOT NULL DEFAULT '0',
  `stage3approve` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sevices`
--

INSERT INTO `sevices` (`serviceId`, `type`, `serviceName`, `personName`, `profession`, `nic`, `address`, `district`, `division`, `mobile`, `timeCon`, `priceCon`, `otherCon`, `comment`, `longi`, `lati`, `availability`, `lastUpdated`, `stage1approve`, `stage2approve`, `stage3approve`) VALUES
(1, 'Private', 'Health', 'H.M.Perera', 'Doctor', '674837664V', 'no.78,Kandy Road,Kandy', 'Kandy', 'Division 1', 775463756, 1, 1, 1, NULL, '80.633726', '7.290572', 1, '2017-04-01 07:35:29', 0, 0, 0),
(2, 'State', 'Mechanics', 'H.Perera', 'Engineer', '784635646V', 'No.57, Jaffna Road, Jaffna', 'Jaffna', 'Division 1', 778465572, 1, 1, 1, NULL, '80.025547', '9.661498', 1, '2017-04-01 07:37:01', 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `templeaderb`
--

CREATE TABLE `templeaderb` (
  `No` int(11) NOT NULL,
  `nic` varchar(10) NOT NULL,
  `serviceType` varchar(20) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `approved` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `templeaderb`
--

INSERT INTO `templeaderb` (`No`, `nic`, `serviceType`, `comment`, `name`, `approved`) VALUES
(4, '974723775V', 'Mechanics', 'I was helping repair broken vehicles', 'Pamith Buddi', 0),
(5, '974587334V', 'Health', 'I attended the wounded people after the Tsunami', 'Brion Silva', 0);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `vehicleId` varchar(100) NOT NULL,
  `vType` varchar(50) NOT NULL,
  `owner` varchar(50) NOT NULL,
  `ownerName` varchar(100) NOT NULL,
  `nic` varchar(100) NOT NULL,
  `volume` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(50) NOT NULL,
  `division` varchar(50) NOT NULL,
  `mobile` int(50) NOT NULL,
  `timeCon` tinyint(1) DEFAULT '1',
  `priceCon` tinyint(1) DEFAULT '1',
  `otherCon` tinyint(1) DEFAULT '1',
  `comment` varchar(200) DEFAULT NULL,
  `longi` varchar(100) NOT NULL,
  `lati` varchar(100) NOT NULL,
  `availability` tinyint(1) NOT NULL DEFAULT '1',
  `lastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `stage1approve` tinyint(1) NOT NULL DEFAULT '0',
  `stage2approve` tinyint(1) NOT NULL DEFAULT '0',
  `stage3approve` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`vehicleId`, `vType`, `owner`, `ownerName`, `nic`, `volume`, `address`, `district`, `division`, `mobile`, `timeCon`, `priceCon`, `otherCon`, `comment`, `longi`, `lati`, `availability`, `lastUpdated`, `stage1approve`, `stage2approve`, `stage3approve`) VALUES
('KA5050', 'Van', 'Private', 'A.H.Wijeratne', '964869344V', '500', 'No.56,Flower Rd,Galle.', 'Galle', 'Division 3', 77678567, 1, 1, 1, 'Always Available', '80.220977', '6.053519', 1, '2017-04-01 07:15:36', 0, 0, 0),
('MN5353', 'Car', 'State', 'M.D.Gunasekara', '98745658v', '333', '76, Galle Rd, Amblangoda', 'Galle', 'Division 2', 2147483647, 1, 1, 1, 'Only in week days', '80.059080', '6.244152', 1, '2017-04-01 07:20:33', 0, 0, 0),
('TR7895', 'Water Bowser', 'Private', 'M.M. Senthuran', '59876654v', '30000', '22, Base line Rd, Dematagoda', 'Colombo', 'Division 1', 778965542, 1, 1, 1, 'Call and clarify', '79.880783', '6.935299', 1, '2017-04-01 07:24:25', 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`foodId`);

--
-- Indexes for table `mainleaderb`
--
ALTER TABLE `mainleaderb`
  ADD PRIMARY KEY (`nic`);

--
-- Indexes for table `sevices`
--
ALTER TABLE `sevices`
  ADD PRIMARY KEY (`serviceId`);

--
-- Indexes for table `templeaderb`
--
ALTER TABLE `templeaderb`
  ADD PRIMARY KEY (`No`),
  ADD UNIQUE KEY `Index` (`No`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`vehicleId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `foodId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `sevices`
--
ALTER TABLE `sevices`
  MODIFY `serviceId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `templeaderb`
--
ALTER TABLE `templeaderb`
  MODIFY `No` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
