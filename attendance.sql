-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 15, 2018 at 09:33 AM
-- Server version: 10.2.12-MariaDB
-- PHP Version: 7.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id7316329_ncc`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `email` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `crn` varchar(200) NOT NULL,
  `attendance` int(11) NOT NULL,
  `TotalLectures` int(11) NOT NULL,
  `CadetNumber` int(11) NOT NULL,
  `Rank` varchar(200) NOT NULL,
  `FatherName` varchar(200) NOT NULL,
  `MotherName` varchar(200) NOT NULL,
  `BloodGroup` varchar(10) NOT NULL,
  `MobileNumber` varchar(200) NOT NULL,
  `ClassStudying` varchar(200) NOT NULL,
  `DOB` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD UNIQUE KEY `crn` (`crn`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `CadetNumber` (`CadetNumber`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
