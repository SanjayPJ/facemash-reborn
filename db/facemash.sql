-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 13, 2018 at 09:51 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 5.6.37

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `facemash`
--

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `pic_loc` varchar(255) NOT NULL,
  `rank` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `username`, `pic_loc`, `rank`) VALUES
(1, 'Yaroslav Wilhelm', '1.png', 0),
(2, 'Emil Sandoval', '2.png', 0),
(3, 'Jesus Mclaughlin', '3.png', 0),
(4, 'Sophie Stewart', '4.png', 220),
(5, 'Melanie Gomez', '5.png', 0),
(6, 'Myra Mclean', '6.png', 0),
(7, 'Angelina Gibbs', '7.png', 560),
(8, 'Elva Wu', '8.png', 0),
(9, 'Shauna Hall', '9.png', 0),
(10, 'Rosalinda Hodges', '10.png', 544),
(11, 'Cathleen Nelson', '11.png', 0),
(12, 'Lonny Mcfarland', '12.png', 0),
(13, 'Marguerite Chaney', '13.png', 739),
(14, 'Jennifer Mcdowell', '14.png', 0),
(15, 'Andersona Estes', '15.png', 0),
(16, 'Sheryl Massey', '16.png', 0),
(17, 'Samantha Santiago', '17.png', 780),
(18, 'Serena Stevens', '18.png', 0),
(19, 'Otha Gay', '19.png', 0),
(20, 'Catherine Figueroa', '20.png', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
