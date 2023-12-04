-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Dec 04, 2023 at 11:08 AM
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
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `case` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `name`, `email`, `date`, `time`, `case`) VALUES
(1, 'muhammad saad', 'ms2350138@gmail.com', '2023-12-12', '17:30', 24);

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `cid` int(255) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`cid`, `case_name`, `status`) VALUES
(24, 'Criminal', 1),
(25, 'Family', 1),
(26, 'Busniess', 1),
(27, 'Divorce', 1),
(28, 'Civil', 1);

-- --------------------------------------------------------

--
-- Table structure for table `client_register`
--

CREATE TABLE `client_register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `client_register`
--

INSERT INTO `client_register` (`id`, `name`, `age`, `email`, `password`, `phone`, `address`, `image`) VALUES
(1, 'muhammad saad khan', 18, 'ms222458881@gmail.com', '$2y$10$K5Wq2ZajPuhWvNAJ14nYbeper.AMOc/y.NKw305AsjqW8c1Xn6lFy', '03152458811', 'Karachi', 'bilal.png'),
(3, 'saad', 19, 'ms2258181@gmail.com', '$2y$10$BdDDEP53PFvB/hrvq3QcEONlJ5g/OSQ2RC8bBm6fkLcjmuP6b2nPG', '03256111911', 'Karachi', '');

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `case` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `case`, `email`, `password`, `phone`, `experience`, `address`, `image`) VALUES
(1, 'muhammad saad', 24, 'ms2350138@gmail.com', '', '03152458881', '8', 'Pakistan, Karachi', 'lawyer-1.jpg'),
(3, 'Ayesha Khan', 25, 'marium@gmail.com', '', '03256669911', '6', 'Pakistan, Lahore', 'lawyer-3.jpg'),
(5, 'Ayesha Khan', 28, 'Ayesha@gmail.com', 'ayesha', '03256669911', '5', 'India, Mumbai', 'lawyer-6.jpg'),
(8, 'Wen chang', 28, 'ms2350138@gmail.com', 'wee', '03152458881', '2', 'china,beijing', 'lawyer-9.jpg'),
(12, 'Syed sami ', 26, 'sami@gmail.com', 'sami', '03122458881', '6', 'Pakistan,Islamabad', 'lawyer-4.jpg'),
(20, 'Brad Johnson', 28, 'brad@gmail.com', 'brad', '03152458881', '4', 'USA,New york', 'lawyer-12.jpg'),
(21, 'Syed Ali khan', 25, 'ali@gmail.com', 'ali', '03256669911', '6', 'pakistan', 'lawyer-2.jpg'),
(22, 'Ravi kumar', 28, 'ravi25@gmail.com', 'ravi', '0251668829', '9', 'India,Mumbai', 'lawyer-5.jpg'),
(23, 'will smith', 25, 'will@gmail.com', '123', '03122458881', '11', 'USA,new york', 'lawyer-11.png'),
(24, 'will smith', 25, 'will@gmail.com', '123', '03122458881', '11', 'USA,new york', 'lawyer-11.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `app_id` (`case`);

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `client_register`
--
ALTER TABLE `client_register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_id` (`case`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `client_register`
--
ALTER TABLE `client_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appoinment`
--
ALTER TABLE `appoinment`
  ADD CONSTRAINT `app_id` FOREIGN KEY (`case`) REFERENCES `cases` (`cid`);

--
-- Constraints for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD CONSTRAINT `case_id` FOREIGN KEY (`case`) REFERENCES `cases` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
