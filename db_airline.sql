-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 23, 2019 at 08:45 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_airline`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `usId` int(10) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `to_` varchar(25) NOT NULL,
  `from_` varchar(25) NOT NULL,
  `class` varchar(25) NOT NULL,
  `deptime` varchar(25) NOT NULL,
  `arrivetime` varchar(25) NOT NULL,
  `depdate` varchar(25) NOT NULL,
  `arrivedate` varchar(25) NOT NULL,
  `ccardnumber` int(11) NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `username`, `usId`, `name`, `email`, `to_`, `from_`, `class`, `deptime`, `arrivetime`, `depdate`, `arrivedate`, `ccardnumber`, `amount`) VALUES
(1, 'rashiq', 3, 'Rashiq Rahman', 'rashiqrahaman@yahoo.com', 'Barcelona', 'Dhaka', 'Business', '02:58 PM', '01:00 PM', '10/08/18', '12/08/18', 12345, 1200);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `message`) VALUES
('rashiq', 'rahmanrashiq56@gmail.com', 'good service!'),
('new', 'abcd@gmail.com', 'excellent!');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_airport`
--

CREATE TABLE `tbl_airport` (
  `aId` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_airport`
--

INSERT INTO `tbl_airport` (`aId`, `name`) VALUES
(1, 'Dhaka'),
(2, 'Rajshahi'),
(3, 'Dinajpur'),
(4, 'Chaina'),
(5, 'India'),
(6, 'Austrilia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_booking`
--

CREATE TABLE `tbl_booking` (
  `id` int(11) NOT NULL,
  `usId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `fTo` varchar(100) NOT NULL,
  `fFrom` varchar(100) NOT NULL,
  `class` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL,
  `status` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_booking`
--

INSERT INTO `tbl_booking` (`id`, `usId`, `name`, `email`, `fTo`, `fFrom`, `class`, `time`, `date`, `status`) VALUES
(1, 11, 'gfdsgfd', 'fahim.rudro14@gmail.com', '3', '4', 'Business', '00:12:00', '2019-01-30', 0),
(2, 11, 'fsdafdsaf', 'ab.karim007@hotmail.com', '2', '4', 'Economy', '12:11:00', '2019-01-26', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contId` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contId`, `name`, `email`, `message`) VALUES
(1, 'gfdsgfd', 'ab.karim007@hotmail.com', 'gfds gfds gfds gfds'),
(2, 'gfdsgfd', 'ab.karim007@hotmail.com', 'gfds gfds gfds gfds'),
(3, 'md shopon', 'fahim.rudro14@gmail.com', 'fsdafdsafdsafdsa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_flight_info`
--

CREATE TABLE `tbl_flight_info` (
  `fId` int(11) NOT NULL,
  `fNumber` varchar(100) NOT NULL,
  `fInstance` varchar(100) NOT NULL,
  `fFrom` varchar(100) NOT NULL,
  `fTo` varchar(100) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_flight_info`
--

INSERT INTO `tbl_flight_info` (`fId`, `fNumber`, `fInstance`, `fFrom`, `fTo`, `time`, `date`) VALUES
(1, '12', 'sadas', '3', '1', '00:12:00', '2019-01-19'),
(2, '12', 'sadasfdsafd', '3', '1', '00:12:00', '2019-01-19');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(25) NOT NULL,
  `email` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`) VALUES
(11, 'karim', '123', 'karim@gmail.com'),
(12, 'ffdsafdsa', 'f2312`321', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_airport`
--
ALTER TABLE `tbl_airport`
  ADD PRIMARY KEY (`aId`);

--
-- Indexes for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contId`);

--
-- Indexes for table `tbl_flight_info`
--
ALTER TABLE `tbl_flight_info`
  ADD PRIMARY KEY (`fId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_airport`
--
ALTER TABLE `tbl_airport`
  MODIFY `aId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_booking`
--
ALTER TABLE `tbl_booking`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_flight_info`
--
ALTER TABLE `tbl_flight_info`
  MODIFY `fId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
