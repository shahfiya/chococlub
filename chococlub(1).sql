-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 01, 2018 at 05:48 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chococlub`
--
CREATE DATABASE IF NOT EXISTS `chococlub` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `chococlub`;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `prod_id` int(11) NOT NULL,
  `prod_name` text NOT NULL,
  `brand` int(11) NOT NULL,
  `weight` int(11) NOT NULL,
  `price` float NOT NULL,
  `reseller` int(11) NOT NULL,
  `prod_media` text NOT NULL,
  `prod_text` varchar(600) NOT NULL,
  `impressions` int(11) NOT NULL,
  `clicks` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`prod_id`, `prod_name`, `brand`, `weight`, `price`, `reseller`, `prod_media`, `prod_text`, `impressions`, `clicks`) VALUES
(1, 'Toblerone', 0, 0, 0, 0, 'img/car4.jpg', 'Finest toblerone Chocolate', 0, 0),
(2, 'Kandos', 0, 0, 0, 0, 'img/car2.jpg', 'Kandos Chocolate Sr Lanka', 0, 0),
(3, 'Cadburry Silk', 2, 12, 123, 123, 'img/car3.jpg', 'finest chocolate in the town', 0, 0),
(4, 'Revello Peanut', 2, 0, 0, 0, 'img/car2.jpg', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `sale`
--

CREATE TABLE `sale` (
  `saleid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `date` date NOT NULL,
  `address` text NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sale-prod`
--

CREATE TABLE `sale-prod` (
  `saleid` int(11) NOT NULL,
  `prodid` int(11) NOT NULL,
  `qty` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `stock`
--

CREATE TABLE `stock` (
  `prod_id` int(11) NOT NULL,
  `stock` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `f_name` text NOT NULL,
  `l_name` text NOT NULL,
  `contact_mob` int(11) NOT NULL,
  `contact_other` int(11) NOT NULL,
  `address_all` text NOT NULL,
  `city` int(11) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `email`, `f_name`, `l_name`, `contact_mob`, `contact_other`, `address_all`, `city`, `pass`, `role`) VALUES
(1, 'admin', 'Admin', '', 0, 0, 'No 282A Asiri Negombo \\n Kurunegala', 0, 'pass', 0),
(2, 'guest@gmail.com', 'Guest', 'User', 773121022, 372233140, 'No 282A Asiri\r\nNegombo Road\r\nKurunegala', 1, 'pass', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`prod_id`);

--
-- Indexes for table `sale`
--
ALTER TABLE `sale`
  ADD PRIMARY KEY (`saleid`);

--
-- Indexes for table `sale-prod`
--
ALTER TABLE `sale-prod`
  ADD KEY `saleid` (`saleid`),
  ADD KEY `prodid` (`prodid`);

--
-- Indexes for table `stock`
--
ALTER TABLE `stock`
  ADD KEY `prod` (`prod_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `prod_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sale`
--
ALTER TABLE `sale`
  MODIFY `saleid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sale-prod`
--
ALTER TABLE `sale-prod`
  ADD CONSTRAINT `prodid` FOREIGN KEY (`prodid`) REFERENCES `product` (`prod_id`),
  ADD CONSTRAINT `saleid` FOREIGN KEY (`saleid`) REFERENCES `sale` (`saleid`);

--
-- Constraints for table `stock`
--
ALTER TABLE `stock`
  ADD CONSTRAINT `prod` FOREIGN KEY (`prod_id`) REFERENCES `product` (`prod_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
