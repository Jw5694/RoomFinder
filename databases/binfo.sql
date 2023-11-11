-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 11, 2023 at 03:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `building`
drop schema if exists building;
CREATE SCHEMA `building`;
use building;

-- --------------------------------------------------------

--
-- Table structure for table `binfo`
--

CREATE TABLE `binfo` (
  `room` int(11) NOT NULL,
  `weekday` varchar(10) DEFAULT NULL,
  `startR` time DEFAULT NULL,
  `endR` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `binfo`
--

INSERT INTO `binfo` (`room`, `weekday`, `startR`, `endR`) VALUES
(101, 'Tuesday', '09:12:00', '08:02:00'),
(102, 'Tuesday', '10:12:00', '03:02:00'),
(103, NULL, NULL, NULL),
(104, NULL, NULL, NULL),
(105, NULL, NULL, NULL),
(106, NULL, NULL, NULL),
(107, NULL, NULL, NULL),
(108, NULL, NULL, NULL),
(109, NULL, NULL, NULL),
(201, NULL, NULL, NULL),
(202, NULL, NULL, NULL),
(203, NULL, NULL, NULL),
(204, NULL, NULL, NULL),
(205, NULL, NULL, NULL),
(206, NULL, NULL, NULL),
(207, NULL, NULL, NULL),
(208, NULL, NULL, NULL),
(209, NULL, NULL, NULL),
(301, NULL, NULL, NULL),
(302, NULL, NULL, NULL),
(303, NULL, NULL, NULL),
(304, NULL, NULL, NULL),
(305, NULL, NULL, NULL),
(306, NULL, NULL, NULL),
(307, NULL, NULL, NULL),
(308, NULL, NULL, NULL),
(309, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `binfo`
--
ALTER TABLE `binfo`
  ADD PRIMARY KEY (`room`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
