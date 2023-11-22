-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Nov 20, 2023 at 07:59 PM
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
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `id` int(255) NOT NULL,
  `case_name` varchar(255) NOT NULL,
  `status` tinyint(255) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`id`, `case_name`, `status`) VALUES
(9, 'Criminal', 1),
(10, 'Family', 1),
(11, 'Busniess', 1);

-- --------------------------------------------------------

--
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `case` int(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `case`, `email`, `phone`, `address`, `image`, `status`) VALUES
(2, 'marium khan', 10, 'marium@gmail.com', '3122458881', 'Nagin chowrangi', 'lawyer-3.jpg', 1),
(3, 'muhammad saad', 9, 'ms2350138@gmail.com', '3152458881', 'Shadman town karachi', 'lawyer-1.jpg', 1),
(4, 'Syed Ali khan', 11, 'ali@gmail.com', '3256669911', 'Nagin chowrangi', 'lawyer-2.jpg', 1),
(5, 'junaid ahmed', 10, 'abc@gmail.com', '251668829', 'Gulshan E Iqbal', 'lawyer-4.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `age`, `email`, `password`) VALUES
(3, 'marium', 16, 'marium@gmail.com', 'marium'),
(4, 'junaid', 0, 'junaid@gmail.com', '$2y$10$ENBpqMQ2Dje18NYvZSBDyOdTSx9Fx.kOTtjd2a3rEo9ZYMoiv.X4S'),
(6, 'imran', 0, 'imran@gmail.com', '$2y$10$ET1lYssLsh5Q80NKYsjZyO1RHk.IE4sVDmH2Lx/RcEMzg5D17NIeC'),
(8, 'muhammad saad', 18, 'ms2350138@gmail.com', '$2y$10$0cDcTpi.PIcuPGlrdmazdOuFFDpMxBDKst2NPBt/LPQxxufy/BFZC'),
(10, 'khan', 20, 'khan@gmail.com', '$2y$10$2igUhSZFRIliQsIWnP/n4uoiuI4pwzun29LqMjpFXaKT/GLDlPKhK');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cases`
--
ALTER TABLE `cases`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD PRIMARY KEY (`id`),
  ADD KEY `case_id` (`case`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD CONSTRAINT `case_id` FOREIGN KEY (`case`) REFERENCES `cases` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
