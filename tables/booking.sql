-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 20, 2022 at 10:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sap`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `event` varchar(100) NOT NULL,
  `personalized` varchar(100) NOT NULL,
  `uid` int(11) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `travelcharges` float DEFAULT NULL,
  `instructions` varchar(200) DEFAULT NULL,
  `bstatus` varchar(20) DEFAULT NULL,
  `totalamount` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `event`, `personalized`, `uid`, `start`, `end`, `baddress`, `travelcharges`, `instructions`, `bstatus`, `totalamount`) VALUES
(1, '', '', 0, '2022-09-30', '2023-11-15', ' daman', 0, '', NULL, 0),
(2, '', '', 0, '2022-09-30', '2023-11-15', ' daman', 0, '', NULL, 0),
(3, 'birthday', '', 0, '2022-09-27', '2022-09-27', ' navsari', 0, '', NULL, 0),
(4, 'birthday', '', 0, '2022-09-27', '2022-09-27', ' navsari', 0, '', NULL, 0),
(5, 'sports', '', 6, '2022-09-30', '2022-09-30', ' Surat', 0, '', NULL, 0),
(6, 'sports', '', 6, '2022-09-30', '2022-09-30', ' Surat', 0, '', NULL, 0),
(7, 'sports', '', 6, '2022-09-30', '2022-09-30', ' Surat', 0, '', NULL, 0),
(8, 'prewedding', '', 6, '2022-09-20', '2022-09-22', ' Goa', 0, '', NULL, 0),
(9, 'prewedding', '', 6, '2022-09-20', '2022-09-22', ' Goa', 0, '', NULL, 0),
(10, 'portfolio shoot', '', 6, '2022-09-19', '2022-09-19', ' Bardoli', 0, '', NULL, 0),
(11, 'party', '', 6, '2022-09-20', '2022-09-20', ' uka tarsadiya ', 0, '', NULL, 0),
(12, 'competetion', '', 6, '2022-09-06', '2022-09-14', ' nvs', 0, '', NULL, 0),
(13, 'personalized', 'parna', 6, '2022-09-27', '2022-09-28', ' nvs', 0, '', NULL, 0),
(14, 'personalized', 'parna', 6, '2022-09-27', '2022-09-28', ' nvs', 0, '', NULL, 0),
(15, 'personalized', 'parna', 6, '2022-09-27', '2022-09-28', ' nvs', 0, '', NULL, 31000),
(16, 'wedding', '', 6, '2022-09-14', '2022-09-01', ' nvs', 0, '', NULL, 88500),
(17, 'anniversary', '', 6, '2022-09-17', '2022-09-17', ' bardoli', 0, '', NULL, 31000),
(18, 'anniversary', '', 6, '2022-09-17', '2022-09-17', ' bardoli', 0, '', NULL, 31000),
(19, 'wedding', '', 6, '2022-09-13', '2022-09-01', ' asg', 0, '', NULL, 57500),
(20, 'inogration/opening', '', 6, '2023-09-27', '2022-09-15', ' fdj', 0, '', NULL, 8000),
(21, 'inogration/opening', '', 6, '2022-09-21', '2022-09-21', ' dahz', 0, '', NULL, 80500);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
