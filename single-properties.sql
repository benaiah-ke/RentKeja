-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 23, 2017 at 01:58 PM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;


--
-- Database: `single-properties`
--

-- --------------------------------------------------------

--
-- Table structure for table `singleproperties`
--

CREATE TABLE IF NOT EXISTS `singleproperties` (
  `pindex` text NOT NULL,
  `pname` text NOT NULL,
  `description` text NOT NULL,
  `price` text NOT NULL,
  `amenities` text NOT NULL,
  `property_gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `singleproperties` (`pindex`,`pname`, `description`, `price`,`amenities`,`property_gender`) VALUES
('1','Mchana Apartments', 'This is mchana apartments','10K/month', 'Gym,Security', 'Male'),
('2','Sunrise Hostels','This is sunrise hostels', '10K/month', 'Gym, Wifi,Swimming Pool', 'Female'),
('3','Sunset Apartments','This is sunset apartments','12K/month', 'Security, Gym', 'Female'),
('4','Usiku Hostels','This is usiku hostels', '14K/month', 'Gym,Security', 'Male'),
('5','Kesho Hostels','This is kesho hostels', '15K/month', 'Kitchen, Wifi', 'Male'),
('6','Today Apartments','This is today apartments', '15K/month', 'Gym, Wifi,Swimming Pool', 'Female');


/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
