-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 11, 2022 at 06:05 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

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
-- Table structure for table `tbl_service_events`
--

CREATE TABLE `tbl_service_events` (
  `SrvEveID` int(11) NOT NULL,
  `SrvEveName` varchar(50) NOT NULL,
  `SrvEveCharges` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_service_events`
--

INSERT INTO `tbl_service_events` (`SrvEveID`, `SrvEveName`, `SrvEveCharges`) VALUES
(1, 'drone', 8000),
(2, 'LED wall', 12500),
(3, 'LED wall + live', 45000),
(4, 'candid photographer', 10000),
(5, 'cinematographer', 13000),
(6, 'entry display setup x 3 (40inch)', 7500),
(7, 'entry display setup x 5 (40inch)', 11500);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `contact` bigint(20) NOT NULL,
  `address` varchar(300) NOT NULL,
  `usertype` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`uid`, `fname`, `mname`, `lname`, `username`, `password`, `contact`, `address`, `usertype`, `email`) VALUES
(1, 'Kalash', 'Abhay', 'Shah', 'k', 'k', 9426921383, 'Navsari', 'owner', 'kalashshah@gmail.com'),
(6, 'jainam', 'Abhay', 'Shah', 'j', 'j', 9874456321, 'navsari', 'client', 'jainamshah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_service_events`
--
ALTER TABLE `tbl_service_events`
  ADD PRIMARY KEY (`SrvEveID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`uid`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_service_events`
--
ALTER TABLE `tbl_service_events`
  MODIFY `SrvEveID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
