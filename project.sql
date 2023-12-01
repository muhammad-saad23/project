-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Dec 01, 2023 at 08:48 PM
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
(3, 'Ayesha Khan', 25, 'marium@gmail.com', '', '03256669911', '6', 'Pakistan, Lahore', 'lawyer-3.jpg');

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
(10, 'khan', 20, 'khan@gmail.com', '$2y$10$2igUhSZFRIliQsIWnP/n4uoiuI4pwzun29LqMjpFXaKT/GLDlPKhK'),
(11, 'sami', 19, 'sami@gmail.com', '$2y$10$6bIDWYZoAfSSGDk0BQYjOeCbwNDZqNePlD/.dFey.zHduxzMoNFn2');

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
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
