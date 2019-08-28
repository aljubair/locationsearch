-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 15, 2017 at 07:55 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `location`
--

-- --------------------------------------------------------

--
-- Table structure for table `main_area`
--

CREATE TABLE `main_area` (
  `id` varchar(30) NOT NULL,
  `rating` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `busstand` varchar(100) NOT NULL,
  `roadnumber` varchar(20) NOT NULL,
  `area` varchar(20) NOT NULL,
  `postcode` int(11) NOT NULL,
  `district` varchar(20) NOT NULL,
  `division` varchar(20) NOT NULL,
  `image` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `main_area`
--

INSERT INTO `main_area` (`id`, `rating`, `name`, `busstand`, `roadnumber`, `area`, `postcode`, `district`, `division`, `image`) VALUES
('100', 4, 'Labaid Hospital', 'Dhanmondi - 32', '4', 'Dhanmondi', 1205, 'Dhaka', 'Dhaka', ''),
('200', 4, 'Square Hospital', 'Dhanmondi - 32', '4', 'Dhanmondi', 1207, 'Dhaka', 'Dhaka', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `main_area`
--
ALTER TABLE `main_area`
  ADD PRIMARY KEY (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
