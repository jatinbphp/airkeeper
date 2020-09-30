-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2020 at 03:25 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `house`
--

-- --------------------------------------------------------

--
-- Table structure for table `house`
--

CREATE TABLE `house` (
  `id` int(10) NOT NULL,
  `owner` varchar(10) NOT NULL,
  `promotional_code` varchar(10) NOT NULL,
  `property_type` varchar(10) NOT NULL,
  `country` varchar(10) NOT NULL,
  `street_address` varchar(100) NOT NULL,
  `apt_suite` varchar(100) NOT NULL,
  `city` varchar(10) NOT NULL,
  `state` varchar(10) NOT NULL,
  `postcode` int(10) NOT NULL,
  `available_date` date NOT NULL,
  `compulsory_inclusions` varchar(100) NOT NULL,
  `guest` int(100) NOT NULL,
  `bedrooms` int(100) NOT NULL,
  `bathrooms` int(100) NOT NULL,
  `king` int(100) NOT NULL,
  `queen` int(100) NOT NULL,
  `double` int(100) NOT NULL,
  `single` int(100) NOT NULL,
  `sofa` int(100) NOT NULL,
  `bunk` int(100) NOT NULL,
  `air_mattress` int(100) NOT NULL,
  `couch` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `house`
--

INSERT INTO `house` (`id`, `owner`, `promotional_code`, `property_type`, `country`, `street_address`, `apt_suite`, `city`, `state`, `postcode`, `available_date`, `compulsory_inclusions`, `guest`, `bedrooms`, `bathrooms`, `king`, `queen`, `double`, `single`, `sofa`, `bunk`, `air_mattress`, `couch`) VALUES
(1, 'A', '', 'House', 'India', 'aaa', '', 'Rajkot', 'Gujarat', 360004, '2020-12-31', '', 5, 2, 1, 1, 0, 0, 0, 0, 0, 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `house`
--
ALTER TABLE `house`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `house`
--
ALTER TABLE `house`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
