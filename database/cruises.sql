-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Nov 28, 2021 at 05:52 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cruises`
--

-- --------------------------------------------------------

--
-- Table structure for table `booknow`
--

DROP TABLE IF EXISTS `booknow`;
CREATE TABLE IF NOT EXISTS `booknow` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `bookings` varchar(255) NOT NULL,
  `budget` varchar(255) NOT NULL,
  `ddate` varchar(255) NOT NULL,
  `tdate` varchar(255) NOT NULL,
  `desti` varchar(255) NOT NULL,
  `depar` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=32 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booknow`
--

INSERT INTO `booknow` (`id`, `name`, `email`, `contact`, `bookings`, `budget`, `ddate`, `tdate`, `desti`, `depar`) VALUES
(3, 'ankit', 'ankit@xyz.com', '1234567890', '2', 'buisness', '2020-10-20', '2020-11-20', 'London', 'Dubai'),
(26, 'Archit Arora', 'archit@xyz.com', '7589090900', '4', 'platinum', '2021-11-19', '2021-12-31', 'Alaska', 'Calgary'),
(4, 'ankit', 'ankit@xyz.com', '1234567890', '5', 'silver', '2020-10-23', '2020-11-16', 'Australia', 'Balboa'),
(5, 'Archit Arora', 'architarora2k@gmail.com', '7589090900', '10', 'platinum', '2020-10-17', '2020-11-27', 'Southern Africa', 'Moscow'),
(6, 'ankit', 'ankit@xyz.com', '1254866280', '5', 'buisness', '2020-10-29', '2020-11-27', 'Australia', 'Bari'),
(30, 'admin', 'archit@xyz.com', '9996299335', '2', 'gold', '2021-10-29', '2021-10-23', 'Koge', 'Belfast'),
(9, 'ajay', 'ajay@xyz.com', '1234567890', '5', 'choose budget', '2020-10-23', '2020-11-20', 'Canada', 'Benoa'),
(10, 'ajay', 'ajay@xyz.com', '1234567890', '5', 'buisness', '2020-10-09', '2020-11-21', 'Canada', 'Bluff'),
(11, 'ajay', 'ajay@xyz.com', '1234567890', '5', 'buisness', '2020-10-13', '2020-10-09', 'Adelaide', 'Balboa'),
(12, 'ajay', 'ajay@xyz.com', '1234567890', '5', 'buisness', '2020-10-19', '2020-11-21', 'Australia', 'Barcelona'),
(14, 'Archit Arora', 'architarora2k@gmail.com', '7589090900', '5', 'buisness', '2020-10-23', '2020-11-30', 'Alaska', 'Belfast'),
(15, 'Archit Arora', 'architarora2k@gmail.com', '7589090900', '5', 'silver', '2020-10-23', '2020-11-30', 'Calgary', 'Bari'),
(16, 'Archit Arora', 'architarora2k@gmail.com', '7589090900', '5', 'gold', '2020-10-16', '2020-11-18', 'Greenwich', 'Barcelona'),
(20, 'Archit Arora', 'archit@xxyz.com', '7589090600', '9', 'buisness', '2020-11-20', '2020-12-22', 'Canada', 'Ain Sokhna'),
(29, 'admin', 'archit@xyz.com', '7589090900', '2', 'buisness', '2021-11-03', '2021-10-31', 'Mexico', 'Benoa');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `message`) VALUES
(1, 'Archit Arora', 'architarora2k@gmail.com', 'helloo!!!!\r\nhow are you....'),
(2, 'amay sethi', 'amay@xyz.com', 'awsome page man !!!!!!........'),
(3, 'harsh aggarwal', 'harsh@xyz.com', 'nice website  man!!!!'),
(4, 'harsh aggarwal', 'harsh@xyz.com', 'helooo archit.....'),
(5, 'Archit Arora', 'architarora2k@gmail.com', 'asdfghjkl.;/'),
(6, 'arjun', 'archit@xyz.com', 'i can\'t able to book my cruise plase help.');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(255) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `cardname` varchar(255) NOT NULL,
  `cardnumber` varchar(255) NOT NULL,
  `amount` varchar(255) NOT NULL,
  `expmonth` varchar(255) NOT NULL,
  `expyear` varchar(255) NOT NULL,
  `cvv` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `firstname`, `email`, `address`, `state`, `country`, `zip`, `cardname`, `cardnumber`, `amount`, `expmonth`, `expyear`, `cvv`) VALUES
(12, 'Archit Arora', 'archit@xyz.com', 'mohali', 'punjab', 'India', '160059', 'Archit Arora', '25842563597', '20000', 'September', '2031', 'cfa0860e83a4c3a763a7e62d825349f7'),
(13, 'Archit Arora', 'archit@xyz.com', '#804,Phase-4,Sector-59,SAS Nagar,Mohali', 'punjab', 'India', '160059', 'Archit Arora', '456796542346', '456333', 'august', '2000', 'a609cb80467232f8b399b65314891aba');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `contact`, `address`, `email`, `password`) VALUES
(3, 'ankit', '1234567890', 'H.NO. 804, PHASE IV, SECTOR 59', 'ankit@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(2, 'Archit Arora', '7589090900', 'H.NO. 804, PHASE IV, SECTOR 59', 'archit@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(4, 'ajay', '1234567890', '364, phase 7, mohali', 'ajay@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(5, 'amay sethi', '7686964656', 'HNO 96  bhushan nagar, kurali', 'amay@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'harsh aggarwal', '2589631470', '258 phase 2 , mohali ,punjab', 'harsh@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(7, 'arjun sethi', '3214569870', 'HNO- 8610, jagatpur,Delhi', 'arjun@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(8, 'abhishek kumar', '2469751352', '2698 ,hamirpur, himachal', 'abhishek@xyz.com', 'e10adc3949ba59abbe56e057f20f883e'),
(9, 'anjli', '4856920349', '500 modern enclave , zirakpur , mohali', 'anjli@xyz.com', 'e10adc3949ba59abbe56e057f20f883e');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
