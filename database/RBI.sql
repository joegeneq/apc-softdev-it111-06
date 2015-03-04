-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 04, 2015 at 08:52 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rbi`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `house_no` varchar(45) NOT NULL,
  `street` varchar(225) NOT NULL,
  `area` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `country` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL,
  `created_by` varchar(45) NOT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `customercontact`
--

CREATE TABLE IF NOT EXISTS `customercontact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `email` varchar(225) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL,
  `created_by` varchar(45) NOT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`customer_id`),
  KEY `fk_customercontact_customer1_idx` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL,
  PRIMARY KEY (`version`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1425452925),
('m130524_201442_init', 1425452933);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `status` varchar(45) NOT NULL,
  `num_items` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `discount` decimal(10,0) unsigned DEFAULT NULL,
  `customer_id` int(11) NOT NULL,
  `productinventory_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`customer_id`,`productinventory_id`),
  KEY `fk_order_customer_idx` (`customer_id`),
  KEY `fk_order_productinventory1_idx` (`productinventory_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `productinventory`
--

CREATE TABLE IF NOT EXISTS `productinventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `qoh` int(11) NOT NULL,
  `serial_no` varchar(45) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` varchar(45) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL,
  `created_by` varchar(45) NOT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  `supplier_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`supplier_id`),
  KEY `fk_productinventory_supplier1_idx` (`supplier_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `supplier`
--

CREATE TABLE IF NOT EXISTS `supplier` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `contact_person` varchar(225) NOT NULL,
  `house_no` varchar(45) NOT NULL,
  `street` varchar(225) NOT NULL,
  `area` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `country` varchar(225) NOT NULL,
  `email` varchar(45) NOT NULL,
  `create_date` date NOT NULL,
  `update_date` date DEFAULT NULL,
  `created_by` varchar(45) NOT NULL,
  `updated_by` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'rbiadmin', 'IHUjtMAONG2Hk8kmsJ9zTdfuhbscrytU', '$2y$13$A2jR7iZyuY4kgJEtBDLrpOrYb3Lhh/4AWMW/xeZRbnCvL031Pks.W', NULL, 'phrbi@gmail.com', 10, 1425453174, 1425453174);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customercontact`
--
ALTER TABLE `customercontact`
  ADD CONSTRAINT `fk_customercontact_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_productinventory1` FOREIGN KEY (`productinventory_id`) REFERENCES `productinventory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productinventory`
--
ALTER TABLE `productinventory`
  ADD CONSTRAINT `fk_productinventory_supplier1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
