-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 15, 2018 at 06:54 AM
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
-- Table structure for table `attendanceevening`
--

CREATE TABLE `attendanceevening` (
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
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`email`, `name`, `password`, `crn`, `attendance`, `TotalLectures`, `CadetNumber`, `Rank`, `FatherName`, `MotherName`, `BloodGroup`, `MobileNumber`, `ClassStudying`, `DOB`) VALUES
('birkamalbk@yahoo.in', 'Birkamal', 'bir', '1615017', 3, 3, 1234, 'Sgt', 'charanjeet ', 'harjonder', 'A+', '987654321', 'Btech', '2000-07-22'),
('jaswindersodhi1997@gmail.com', 'babber', '123', '1615048', 3, 3, 123, '1', 'happy', 'ruby', 'O-', '9463743264', 'D3cseA2', '2000-07-22'),
('pardeep27111998@gmail.com', 'Pardeep', '123', '1615064', 14, 21, 1, 'SUO', 'surinder', 'nirmala', 'A+', '9465453681', 'D3CSB1', '1998-07-22'),
('its@gmail.com', 'raman', '123', '654', 0, 0, 5, 'a', 'kn', 'bvc', 'h', '64664', 'm', '2000-07-22');

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
