-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2023 at 06:49 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

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
-- Table structure for table `lawyer`
--

CREATE TABLE `lawyer` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `case` int(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `experience` int(255) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `lawyer`
--

INSERT INTO `lawyer` (`id`, `name`, `case`, `email`, `password`, `phone`, `experience`, `address`, `image`) VALUES
(1, 'muhammad saad', 24, 'ms22458881@gmail.com', '$2y$10$w2veHMecBBYn9XTto.bf3.L/ZDQODB3mqciDiN243LoeEepfiauF.', '03152458881', 5, 'Pakistan,Karachi', ' team-1.jpg'),
(2, 'Ayesha khan', 27, 'ayesha@gmail.com', '$2y$10$Q3JNZBQqeLXq.pu.Epije.VOxGgpleIKQICSKEKC/PQ5zWoXoGsJm', '03152681891', 3, 'India,Mumbai', ' lawyer-6.jpg'),
(3, 'Marium khan', 25, 'marium@gmail.com', '$2y$10$aYnr8I6FUVRIIIIQXsPaSOCLx.BwJVpclkYpYWkJH7/RgIQvrNgEy', '03152681891', 7, 'Pakistan,Lahore', 'lawyer-3.jpg'),
(4, 'Wee chang', 28, 'wee@gmail.com', '$2y$10$HtMx3jeA2Q9p/R50K4ONpuegkSYH57eAYGNp5/t1MbdlLaZbJ4eSO', '0325571881', 6, 'China,Beijing', ' lawyer-9.jpg'),
(5, 'Ravi Kumar', 25, 'ravi@gmail.com', '$2y$10$1qk.Dyek978Ezaas7FBBzuAsjg6zKCpdWncYBvhP8qEUosYhWx3qG', '0300235112', 6, 'India,Dehli', 'lawyer-5.jpg'),
(6, 'Syed sami khan', 28, 'sami@gmail.com', '$2y$10$eYrfPStiM4nkOZq6v3Mw0eAyHgHujXL/UosJWeVr9uoArduZEbwZu', '03152458881', 5, 'Pakistan,Islamabad', ' lawyer-4.jpg'),
(7, 'Syed ali khan', 25, 'ali@gmail.com', '$2y$10$bqsVBahYwXAsJcDzWkRxbuGw3/dq960FeDFTGYos0AJ4esVJEoLKm', '03152458881', 8, 'Pakistan,Lahore', 'lawyer-2.jpg'),
(8, 'Brad Johnson', 24, 'brad@gmail.com', '$2y$10$5MacWShlmHSit2CkWziiDuNwFg4L4KKR9IIhOvHBVZ4mQZAB1CFeG', '03152458881', 7, 'USA ,New York', 'lawyer-12.jpg'),
(9, 'Robert johnson', 26, 'robert@gmailcom', '$2y$10$aUUkePQUeAePuK6jDVSmAuaixC7djyV5WFS7yq.MTgPlO3DoVbWW2', '03255718811', 12, 'USA,Washington', ' lawyer-11.png'),
(11, 'sara khan', 27, 'sara@gmail.com', '$2y$10$nj6j0C83uO/bvutpwTPkc.c4oCVi47GtU3vgsFwF9r3xwerKJlXdu', '03255218211', 4, 'Pakistan,Lahore', 'law-3.jpg'),
(12, 'Will smith', 28, 'will@gmail.com', '$2y$10$npnzQg5ySb1ltQhuWVfr1exJxzbPhmi5vaSyydE5uRpltjKRFmklO', '0325571881', 13, 'USA,new york', 'law-5.jpg'),
(13, 'abdullah', 25, 'abd@gmail.com', '$2y$10$C8mK24QShrhbGcKhEGzVJOMdKhF.CK9eIE.xNQi.FlV01cobAh1j6', '03152458881', 5, 'lahore', 'talib.webp');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `lawyer`
--
ALTER TABLE `lawyer`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `lawyer`
--
ALTER TABLE `lawyer`
  ADD CONSTRAINT `case_id` FOREIGN KEY (`case`) REFERENCES `cases` (`cid`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
