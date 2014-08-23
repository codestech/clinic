-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2014 at 09:11 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `clinic`
--

-- --------------------------------------------------------

--
-- Table structure for table `assignedmedicins`
--

CREATE TABLE IF NOT EXISTS `assignedmedicins` (
  `medicin_id` int(11) NOT NULL,
  `priscription_id` int(11) NOT NULL,
  `days` int(11) NOT NULL,
  `hrs` int(11) NOT NULL,
  `meal` enum('after','before') NOT NULL DEFAULT 'after',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`medicin_id`,`priscription_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `user_id`, `token`, `duration`, `used`, `created`, `expires`) VALUES
(1, 1, 'bd7eb768c355296fce1481fe6e1432a6', '2 weeks', 0, '2014-08-13 03:21:37', '2014-08-27 03:21:37'),
(2, 1, '92b2d771afb711f393dedc491d3b59d6', '2 weeks', 1, '2014-08-13 03:27:36', '2014-08-27 03:27:36'),
(3, 1, '4da2fafc537ce05351555c119061205e', '2 weeks', 1, '2014-08-16 11:08:59', '2014-08-30 11:08:59'),
(4, 1, '8bd0a07c916610ebfc46637c599a22d2', '2 weeks', 0, '2014-08-16 11:21:08', '2014-08-30 11:21:08'),
(5, 1, 'b776af0817948cda8a310b7d543085a7', '2 weeks', 1, '2014-08-18 21:58:37', '2014-09-01 21:58:37'),
(6, 1, '551e0c45285fe3f25418227d9f7a1ea1', '2 weeks', 0, '2014-08-19 23:22:48', '2014-09-02 23:22:48'),
(7, 1, 'aecd5eaae247bc7b8d9824f8e0b23bdd', '2 weeks', 0, '2014-08-19 23:22:52', '2014-09-02 23:22:52'),
(8, 1, '630edfa24e3ba3a4ccda0709f2999bb5', '2 weeks', 1, '2014-08-19 23:55:31', '2014-09-02 23:55:31'),
(9, 1, 'daff7778a5ce49ddb0d87f8fb329280c', '2 weeks', 0, '2014-08-20 21:02:07', '2014-09-03 21:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `medicins`
--

CREATE TABLE IF NOT EXISTS `medicins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE IF NOT EXISTS `patients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `age` int(11) NOT NULL,
  `sex` enum('male','female') NOT NULL DEFAULT 'male',
  `address` text NOT NULL,
  `phone` varchar(255) NOT NULL,
  `history` varchar(255) NOT NULL,
  `app_date` datetime NOT NULL,
  `status` enum('active','inactive') NOT NULL DEFAULT 'active',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `name`, `slug`, `email`, `age`, `sex`, `address`, `phone`, `history`, `app_date`, `status`, `created`, `modified`) VALUES
(1, 'Saiful Isalm', '0', 'saif@localhost.com', 30, 'male', '43/B Azimpur Colony, Newmarket, Dhaka - 1205', '01914475313', '53f519bb5d23c.pdf', '2014-08-21 00:08:07', 'active', '2014-08-20 23:53:57', '2014-08-20 23:57:15'),
(2, 'Saiful Isalm', '0', 'saif@localhost.com', 30, 'male', '43/B Azimpur', '01914475313', '', '2014-08-21 00:23:07', 'active', '2014-08-20 23:55:18', '2014-08-20 23:55:18');

-- --------------------------------------------------------

--
-- Table structure for table `priscriptions`
--

CREATE TABLE IF NOT EXISTS `priscriptions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `patient_id` int(11) NOT NULL,
  `report` varchar(255) DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `priscription_to_test`
--

CREATE TABLE IF NOT EXISTS `priscription_to_test` (
  `priscription_id` int(11) NOT NULL,
  `test_id` int(11) NOT NULL,
  PRIMARY KEY (`priscription_id`,`test_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `group` enum('manager','admin','viewer') NOT NULL DEFAULT 'viewer',
  `status` enum('active','inactive') NOT NULL DEFAULT 'inactive',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `group`, `status`, `created`, `modified`) VALUES
(1, 'Saiful Islam', 'saif@localhost.com', 'dee6bf91428937ea330e9cd746c0d580b0776115', 'manager', 'active', '2014-08-13 00:13:27', '2014-08-13 00:13:27');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
