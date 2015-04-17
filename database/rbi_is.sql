-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2015 at 07:47 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rbi_is`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `type` varchar(45) NOT NULL,
  `contact_no` varchar(45) NOT NULL,
  `house_no` varchar(45) NOT NULL,
  `street` varchar(225) NOT NULL,
  `city` varchar(225) NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `country` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `contact_person` varchar(225) DEFAULT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `type`, `contact_no`, `house_no`, `street`, `city`, `zip_code`, `country`, `email`, `contact_person`, `create_date`, `update_date`) VALUES
(1, 'Test Company', 'Company', '09123456789', '1234', 'TestC', 'Makati', 123, 'Philippines', 'test@company.com', 'Test Contact', '2015-04-04 14:27:09', '2015-04-04 14:27:09'),
(2, 'Gideon De Ocampo', 'Individual', '09123789456', '9534', 'Omiya', 'Tokyo', 1212, 'Japan', 'gideond@yahoo.co.jp', '', '2015-04-07 15:44:11', '2015-04-07 15:44:11'),
(3, 'Pia May Resurreccion', 'Individual', '7263021', '442', 'Medicion', 'imus', NULL, 'Philippines', 'pia@blind.org.ph', '', '2015-04-17 06:39:10', '2015-04-17 06:39:10');

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
('m000000_000000_base', 1428157153),
('m130524_201442_init', 1428157155);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE IF NOT EXISTS `order` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `qty` int(11) NOT NULL,
  `supplier_id` int(11) NOT NULL,
  `productinventory_id` int(11) NOT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  PRIMARY KEY (`id`,`supplier_id`,`productinventory_id`),
  KEY `fk_order_supplier_idx` (`supplier_id`),
  KEY `fk_order_productinventory1_idx` (`productinventory_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `date`, `qty`, `supplier_id`, `productinventory_id`, `price`) VALUES
(1, '2015-04-04 14:29:48', 10000, 1, 1, '10000'),
(2, '2015-04-07 15:57:31', 500, 2, 2, '500');

-- --------------------------------------------------------

--
-- Table structure for table `productinventory`
--

CREATE TABLE IF NOT EXISTS `productinventory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `qoh` int(11) NOT NULL,
  `items_sold` int(11) NOT NULL,
  `items_remaining` int(11) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` varchar(45) NOT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `supplier_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`supplier_id`),
  KEY `fk_productinventory_supplier1_idx` (`supplier_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `productinventory`
--

INSERT INTO `productinventory` (`id`, `name`, `description`, `qoh`, `items_sold`, `items_remaining`, `price`, `status`, `create_date`, `update_date`, `supplier_id`) VALUES
(1, 'Test Product', 'This product is for testing purposes only.', 9999, 1000, NULL, '100', 'Available', '2015-04-04 14:28:25', '2015-04-04 14:32:40', 1),
(2, 'Braille Book', 'A book with braille writing', 1000, 0, NULL, '800', 'Available', '2015-04-07 15:55:42', '2015-04-07 15:55:42', 2),
(3, 'test product 3', 'another test product', 999, 123, NULL, '100', 'Available', '2015-04-08 02:52:38', '2015-04-08 02:53:00', 1);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE IF NOT EXISTS `purchase` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(45) NOT NULL,
  `num_items` int(11) NOT NULL,
  `total_amount` decimal(10,0) unsigned DEFAULT NULL,
  `productinventory_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  PRIMARY KEY (`id`,`productinventory_id`,`customer_id`),
  KEY `fk_purchase_productinventory1_idx` (`productinventory_id`),
  KEY `fk_purchase_customer1_idx` (`customer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `date`, `status`, `num_items`, `total_amount`, `productinventory_id`, `customer_id`) VALUES
(1, '2015-04-07 14:14:52', 'Confirmed', 12, NULL, 1, 1),
(2, '2015-04-07 15:57:57', 'Pending', 10, NULL, 2, 2),
(3, '2015-04-08 02:55:15', 'Confirmed', 12, NULL, 1, 1);

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
  `city` varchar(225) NOT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `country` varchar(225) NOT NULL,
  `email` varchar(45) NOT NULL,
  `create_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `update_date` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `supplier`
--

INSERT INTO `supplier` (`id`, `name`, `contact_no`, `contact_person`, `house_no`, `street`, `city`, `zip_code`, `country`, `email`, `create_date`, `update_date`) VALUES
(1, 'Test Supplier', '0987654321', 'Supplier Contact', '4321', 'Supplier', 'Taguig', 321, 'Philippines', 'test@supplier.com', '2015-04-04 14:27:52', '2015-04-04 14:27:52'),
(2, 'Brailler', '1-800-777-3687', 'Clarence Carillaga', '1601', 'NE Braille Place', 'Jensen', 34957, 'United States', 'sales-usa@brailler.com', '2015-04-07 15:49:58', '2015-04-07 15:49:58');

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
(1, 'rbiadmin', '_M1TpRxag7vu1XAtT_Qw369UPHhjiVJa', '$2y$13$Qk0qQ2LytryZXEBvy6eYDOezfaiGR2t9H2nmQ1R69XZj2uu5/eHuq', NULL, 'admin@blind.org', 10, 1428157178, 1428157178);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `fk_order_productinventory1` FOREIGN KEY (`productinventory_id`) REFERENCES `productinventory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_order_supplier` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `productinventory`
--
ALTER TABLE `productinventory`
  ADD CONSTRAINT `fk_productinventory_supplier1` FOREIGN KEY (`supplier_id`) REFERENCES `supplier` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `fk_purchase_customer1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_purchase_productinventory1` FOREIGN KEY (`productinventory_id`) REFERENCES `productinventory` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
