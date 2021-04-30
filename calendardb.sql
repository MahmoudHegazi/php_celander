-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 29, 2021 at 03:19 PM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `calendardb`
--

-- --------------------------------------------------------

--
-- Table structure for table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(14) NOT NULL,
  `day` varchar(50) NOT NULL COMMENT 'the date of day',
  `time` varchar(50) NOT NULL COMMENT 'reservation time'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservations`
--

INSERT INTO `reservations` (`id`, `day`, `time`) VALUES
(1, '7-22-2021', '6:00am'),
(2, '7-22-2021', '7:30am'),
(3, '5-22-2021', '6:00am'),
(4, '4-22-2021', '6:00am'),
(5, '4-20-2021', '7:00am'),
(6, '4-14-2021', '8:30am'),
(7, '4-21-2021', '10:30am'),
(8, '4-9-2021', '11:00am'),
(9, '4-6-2023', '7:00am'),
(10, '4-9-2021', '6:30am'),
(11, '4-11-2021', '8:30am'),
(12, '4-15-2021', '7:00am'),
(13, '4-17-2021', '10:30am'),
(14, '4-12-2021', '7:30am'),
(15, '4-2-2021', '9:00am'),
(16, '4-2-2021', '11:00am'),
(17, '4-3-2021', '11:30am'),
(18, '4-14-2021', '12:00pm'),
(19, '4-20-2021', '12:00pm'),
(20, '4-14-2015', '6:30am'),
(21, '4-8-2015', '9:30am'),
(22, '4-9-2015', '11:30am'),
(23, '4-11-2015', '7:30am'),
(24, '4-11-2015', '9:00am'),
(25, '4-15-2015', '8:30am'),
(26, '4-17-2015', '7:00am'),
(27, '4-17-2015', '12:00pm'),
(28, '4-21-2015', '12:00pm'),
(29, '4-22-2015', '9:30am'),
(30, '4-22-2015', '12:30pm'),
(31, '4-17-2015', '1:30pm'),
(32, '4-21-2015', '1:30pm'),
(33, '4-14-2015', '1:00pm'),
(34, '4-6-2033', '6:30am'),
(35, '4-1-2033', '7:30am'),
(36, '4-8-2033', '7:30am'),
(37, '4-14-2021', '6:00am'),
(38, '4-14-2021', '7:00am'),
(39, '4-9-2021', '8:30am'),
(40, '4-9-2021', '9:30am'),
(41, '4-10-2021', '9:30am');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(14) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
