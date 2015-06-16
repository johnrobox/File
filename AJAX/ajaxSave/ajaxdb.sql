-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2015 at 04:57 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ajaxdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `names`
--

CREATE TABLE IF NOT EXISTS `names` (
  `id` int(3) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `names`
--

INSERT INTO `names` (`id`, `name`, `location`) VALUES
(1, 'John Robert Jerodiaz', 'Tuyan Naga Cebu'),
(2, 'Brian Jerodiaz', 'Tabuk Mandaue City Cebu'),
(3, 'Mary Jane Jerodiaz', 'Barak Mabolo Cebu City');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `names`
--
ALTER TABLE `names`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `names`
--
ALTER TABLE `names`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
