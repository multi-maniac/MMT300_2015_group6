-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2015 at 05:05 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `customers`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE IF NOT EXISTS `registration` (
  `usr_id` int(11) NOT NULL AUTO_INCREMENT,
  `usr_name` varchar(30) NOT NULL,
  `usr_password` varchar(30) NOT NULL,
  `usr_email` varchar(30) NOT NULL,
  `usrl_id` int(11) NOT NULL,
  `lng_id` int(11) NOT NULL,
  `usr_active` varchar(30) NOT NULL,
  `usr_password_salt` varchar(30) NOT NULL,
  `usr_registration_date` varchar(30) NOT NULL,
  `usr_registration_token` varchar(30) NOT NULL,
  `usr_email_confirmed` varchar(30) NOT NULL,
  PRIMARY KEY (`usr_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`usr_id`, `usr_name`, `usr_password`, `usr_email`, `usrl_id`, `lng_id`, `usr_active`, `usr_password_salt`, `usr_registration_date`, `usr_registration_token`, `usr_email_confirmed`) VALUES
(1, 'bran', '3d12347a58774c5f8ec518262c8196', '213273349@mycput.ac.za', 2, 1, '0', 'H$"LZ_OVI4EJ@gxx=tnDle<[kp&"hB', '2015-08-26 04:47:20', 'f83a0eedeb3e1ba3f91fc63dc5ed8a', '0');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
