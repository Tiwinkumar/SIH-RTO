-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2018 at 03:03 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sih`
--

-- --------------------------------------------------------

--
-- Table structure for table `tab`
--

CREATE TABLE `tab` (
  `crime` varchar(100) NOT NULL,
  `vechiles` varchar(10) NOT NULL,
  `police` varchar(100) NOT NULL,
  `request` text NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `place` varchar(50) NOT NULL,
  `mvi` varchar(70) NOT NULL,
  `gpf` varchar(90) NOT NULL,
  `roadtest` varchar(20) NOT NULL,
  `efb` varchar(40) NOT NULL,
  `ehb` varchar(40) NOT NULL,
  `even` varchar(50) NOT NULL,
  `steer` varchar(50) NOT NULL,
  `efb1` varchar(50) NOT NULL,
  `ehb1` varchar(60) NOT NULL,
  `odd` varchar(50) NOT NULL,
  `steer1` varchar(50) NOT NULL,
  `steeref` varchar(50) NOT NULL,
  `efb2` varchar(50) NOT NULL,
  `ehb2` varchar(50) NOT NULL,
  `eo` varchar(20) NOT NULL,
  `steer2` varchar(50) NOT NULL,
  `con` varchar(80) NOT NULL,
  `description` varchar(100) NOT NULL,
  `helmet` varchar(20) NOT NULL,
  `seatbelt` varchar(20) NOT NULL,
  `front` varchar(50) NOT NULL,
  `rear` varchar(50) NOT NULL,
  `lateral` varchar(50) NOT NULL,
  `speed` varchar(20) NOT NULL,
  `reason` varchar(80) NOT NULL,
  `anti` varchar(50) NOT NULL,
  `fixf` varchar(50) NOT NULL,
  `fixr` varchar(50) NOT NULL,
  `opinion` smallint(20) NOT NULL,
  `click` smallint(50) NOT NULL,
  `fluid` varchar(30) NOT NULL,
  `leakage` varchar(30) NOT NULL,
  `lubrication` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tab`
--
ALTER TABLE `tab`
  ADD PRIMARY KEY (`crime`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
