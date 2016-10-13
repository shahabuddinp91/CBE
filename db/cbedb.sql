-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2016 at 12:13 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cbedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(30) NOT NULL,
  `category_name` varchar(255) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `created` varchar(50) NOT NULL,
  `updated` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`, `month`, `year`, `created`, `updated`, `deleted`) VALUES
(5, 'Switch and Socket', 'October', '2016', '11-10-2016', '0000-00-00', '0000-00-00'),
(6, 'CFL Light', 'October', '2016', '11-10-2016', '0000-00-00', '0000-00-00'),
(7, 'LED Light', 'October', '2016', '11-10-2016', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `subcategory`
--

CREATE TABLE `subcategory` (
  `subcate_id` int(20) NOT NULL,
  `category_id` int(20) NOT NULL,
  `subCategory_name` varchar(255) NOT NULL,
  `month` varchar(50) NOT NULL,
  `year` varchar(20) NOT NULL,
  `created` varchar(50) NOT NULL,
  `updated` varchar(50) NOT NULL,
  `deleted` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subcategory`
--

INSERT INTO `subcategory` (`subcate_id`, `category_id`, `subCategory_name`, `month`, `year`, `created`, `updated`, `deleted`) VALUES
(1, 6, 'Light 1', 'October', '2016', '11-10-2016', '', ''),
(2, 5, 'Switch Board', 'October', '2016', '11-10-2016', '', ''),
(4, 6, 'CFL Fan', 'October', '2016', '11-10-2016', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `subcategory`
--
ALTER TABLE `subcategory`
  ADD PRIMARY KEY (`subcate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `subcategory`
--
ALTER TABLE `subcategory`
  MODIFY `subcate_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
