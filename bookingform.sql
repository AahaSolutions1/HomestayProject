-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2023 at 08:32 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookingform`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookingdetails`
--

CREATE TABLE `bookingdetails` (
  `S_NO` int(5) NOT NULL,
  `name` varchar(15) NOT NULL,
  `phnumber` varchar(12) NOT NULL,
  `email` varchar(50) NOT NULL,
  `aadharno` varchar(15) NOT NULL,
  `checkin` varchar(15) NOT NULL,
  `checkout` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookingdetails`
--

INSERT INTO `bookingdetails` (`S_NO`, `name`, `phnumber`, `email`, `aadharno`, `checkin`, `checkout`) VALUES
(17, 'Mathumitha', '4567834231', 'mathumitha062004@gmail.com', '437689563471', '06/16/2023', '06/25/2023'),
(18, 'Navin', '3678954312', 'navin.c@ptuniv.edu.in', '564218478633', '06/17/2023', '06/25/2023'),
(19, 'Jega', '7784355619', 'jegatheswarik2004@gmail.com', '437689563471', '06/18/2023', '06/26/2023'),
(21, 'Madhesh', '7784355619', 'madheshsathya@ptuniv.edu.in', '564218478633', '06/16/2023', '06/20/2023'),
(22, 'Keega', '3678954312', 'keerthiga799@ptuniv.edu.in', '564218478633', '06/20/2023', '06/30/2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  ADD PRIMARY KEY (`S_NO`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookingdetails`
--
ALTER TABLE `bookingdetails`
  MODIFY `S_NO` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
