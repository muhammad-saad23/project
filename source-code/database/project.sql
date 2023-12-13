-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307:3307
-- Generation Time: Dec 13, 2023 at 09:58 AM
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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(3, 'saad@gmail.com', '$2y$10$1XOFy0uOOB6j1OFMkkXpO.ftbNKFln4amTUltaqIKuX/c.7XcyG3C');

-- --------------------------------------------------------

--
-- Table structure for table `appoinment`
--

CREATE TABLE `appoinment` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `case` int(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `appoinment`
--

INSERT INTO `appoinment` (`id`, `name`, `email`, `case`, `date`, `time`) VALUES
(16, 'Raza khan', 'raza@gmail.com', 2, '02/15/2024', '11:05 PM'),
(17, 'hasan ahmed', 'hasan@gmail.com', 5, '02/28/2024', '3:20 PM'),
(18, 'Fahad junaid', 'fahad@gmail.com', 6, '12/30/2023', '11:05 PM');

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE `cases` (
  `cid` int(255) NOT NULL,
  `case_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`cid`, `case_name`) VALUES
(1, 'Criminal-case'),
(2, 'Family-case'),
(3, 'Busniess-case'),
(5, 'Divorce-case'),
(6, 'Real Estate case'),
(7, 'Tax-case'),
(8, 'Bankruptcy-case'),
(9, 'Murder-case'),
(10, 'Civil-case');

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
(14, 'muhammad saad', 21, 'saad@gmail.com', '$2y$10$V45wWKzFH9mvM60.qxRwIebVtUUQxEd/VisRqvhAquL2F.cTkR/da', '03122458881', 'Karachi', ''),
(15, 'Fahad junaid', 24, 'fahad@gmail.com', '$2y$10$5TGQRrnrUFj2PgCxMI2jPeDtFGK244h7Kmeh4ToNmK7w..D9PE5Oi', '03152458811', 'Lahore', '');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `phone`, `message`) VALUES
(4, 'Fahad junaid', 'fahad@gmail.com', '03256669911', 'This is good'),
(5, 'Raza khan', 'raza@gmail.com', '03152458811', 'great'),
(6, 'Ayesha Khan', 'Ayesha@gmail.com', '03152458811', 'Amazing website for lawyers');

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
  `phone` int(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `case`, `email`, `password`, `phone`, `experience`, `address`, `image`) VALUES
(11, 'muhammad saad', 3, 'ms22458881@gmail.com', '$2y$10$KUK0hphjh/J.N8qb2QtGQOyMIKDOYNrDguTaUu9t6hnV38EXgCDRW', 2147483647, '5', 'Pakistan,Karachi', 'lawyer-1.jpg'),
(12, 'Syed sami ', 6, 'sami@gmail.com', '$2y$10$Kc.Mxctje.s7iA.1SnnyFu6fh3/esFGcxWDk1cuSDG891jdZqtn6q', 2147483647, '8', 'Pakistan,Islamabad', 'lawyer-4.jpg'),
(13, 'marium Khan', 5, 'marium@gmail.com', '$2y$10$z.TC1WflqfL7Go.O3M6.V.rdJUxdm63vtUeGubx1Eg8fHbnHIKqAu', 2147483647, '10', 'Pakistan,Lahore', 'lawyer-3.jpg'),
(14, 'Ravi kumar', 2, 'ravi@gmail.com', '$2y$10$Nv7.G53YiS0BHGGDBqqMjemhwro.Iw8QMJP.TJF99aYzrKrWCv0Ou', 2147483647, '6', 'India,Mumbai', 'lawyer-5.jpg'),
(15, 'Brad Johnson', 8, 'brad@gmail.com', '$2y$10$oeP26OrUvc1moDAM/.zPmudUeeu/HoxY.zkSL9o88.wQJJX0slO46', 2147483647, '7', 'USA,new york', 'lawyer-12.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `appoinment`
--
ALTER TABLE `appoinment`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `cases`
--
ALTER TABLE `cases`
  MODIFY `cid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `client_register`
--
ALTER TABLE `client_register`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
