-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 28, 2013 at 03:48 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `wings`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `studentnum` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `contacts` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `members`
--


-- --------------------------------------------------------

--
-- Table structure for table `orderditems`
--

CREATE TABLE IF NOT EXISTS `orderditems` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `customer` varchar(50) NOT NULL,
  `quantity` varchar(50) NOT NULL,
  `price` varchar(30) NOT NULL,
  `total` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `transactioncode` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `orderditems`
--


-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `product_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `product_photo` varchar(40) NOT NULL,
  `price` varchar(30) NOT NULL,
  `quantity` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `product_id`, `name`, `product_photo`, `price`, `quantity`) VALUES
(1, 1, 'Americano', 'img001.png', '150.00', 40),
(2, 2, 'Frappe', 'img002.png', '100.00', 100),
(3, 3, 'Mocha', 'img003.png', '175.00', 56),
(4, 4, 'Cocoa-Latte', 'img004.png', '120.00', 58),
(5, 5, 'Crunchy-Frappe', 'img005.png', '200.00', 100),
(6, 6, 'Cappuccino', 'img006.png', '150', 97),
(7, 7, 'Kaapi-Nirvana', 'img007.png', '100', 76);


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wings_orders`
--

CREATE TABLE IF NOT EXISTS `wings_orders` (
  `id` int(20) NOT NULL AUTO_INCREMENT,
  `cusid` int(30) NOT NULL,
  `total` varchar(30) NOT NULL,
  `transactiondate` varchar(30) NOT NULL,
  `transactioncode` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `wings_orders`
--

