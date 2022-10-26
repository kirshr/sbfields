-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2022 at 09:22 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookly`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `booking_id` int(11) NOT NULL,
  `booking_time` varchar(40) NOT NULL,
  `booking_date` datetime NOT NULL,
  `available` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`booking_id`, `booking_time`, `booking_date`, `available`) VALUES
(10, '', '0000-00-00 00:00:00', '08:15Mon October 24'),
(11, '', '0000-00-00 00:00:00', '08:30Mon October 24'),
(12, '', '0000-00-00 00:00:00', '08:30Mon October 24'),
(13, '', '0000-00-00 00:00:00', '08:45Mon October 24'),
(14, '', '0000-00-00 00:00:00', '09:00Mon October 24'),
(15, '', '0000-00-00 00:00:00', '09:15Mon October 24'),
(16, '', '0000-00-00 00:00:00', '09:15Mon October 24'),
(17, '', '0000-00-00 00:00:00', '09:30Mon October 24'),
(18, '', '0000-00-00 00:00:00', '09:00Tue October 25'),
(19, '', '0000-00-00 00:00:00', '09:15Tue October 25'),
(20, '', '0000-00-00 00:00:00', '09:30Tue October 25'),
(21, '', '0000-00-00 00:00:00', '09:45Tue October 25');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`booking_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
