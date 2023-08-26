-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 28, 2020 at 06:13 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `room`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_details`
--

CREATE TABLE IF NOT EXISTS `customer_details` (
  `cust_id` int(11) NOT NULL,
  `cust_name` varchar(40) NOT NULL,
  `cust_dob` date NOT NULL,
  `cust_address` varchar(40) NOT NULL,
  `cust_mobile` bigint(20) NOT NULL,
  `cust_email` varchar(40) NOT NULL,
  `cust_gender` text NOT NULL,
  `cust_occupation` text NOT NULL,
  `cust_pic` longblob NOT NULL,
  `cust_username` varchar(40) NOT NULL,
  `cust_password` varchar(40) NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

