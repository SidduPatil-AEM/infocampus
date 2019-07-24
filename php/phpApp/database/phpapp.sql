-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 24, 2019 at 11:18 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `userid` varchar(100) DEFAULT NULL,
  `pass` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `userid`, `pass`) VALUES
(1, 'Admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(10) NOT NULL,
  `catname` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`) VALUES
(1, 'firstname'),
(2, 'secpon'),
(3, 'cat'),
(4, 'Desktop'),
(5, 'added category'),
(6, 'another cat'),
(7, 'hhhhh'),
(8, 'another cat'),
(9, 'aassss');

-- --------------------------------------------------------

--
-- Table structure for table `myorder`
--

CREATE TABLE `myorder` (
  `orderid` int(10) NOT NULL,
  `productid` int(10) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `price` float DEFAULT NULL,
  `totalprice` float DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `orderdate` varchar(100) DEFAULT NULL,
  `deliverydate` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `myorder`
--

INSERT INTO `myorder` (`orderid`, `productid`, `qty`, `price`, `totalprice`, `status`, `orderdate`, `deliverydate`) VALUES
(1, 66, 88, 99, 49, 'good', '23', '34');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `price` int(100) DEFAULT NULL,
  `qty` int(10) DEFAULT NULL,
  `cat` varchar(100) DEFAULT NULL,
  `details` tinytext DEFAULT NULL,
  `photo` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `qty`, `cat`, `details`, `photo`) VALUES
(1, 'AAAAAAA', 2, 4, 'Desktop', 'sxdcfv', '15628470471.jpeg'),
(2, 'Amrutha', 45, 77, 'cat', 'HI  this is Amrutha', '15628471399.jpeg'),
(3, 'Titan', 3000, 15, '1', 'Titan watches are good', '15628561383.jpg'),
(4, 'AAAAAAA', 111, 2222, 'secpon', 'ssadssa', '156293053912.jpg'),
(5, 'new product', 66, 10, 'Desktop', 'new new new new product', '15629307767.jpg'),
(6, 'Amrutha', 11, 22, 'secpon', 'ddfddfvfvfvfv', '156293157110.jpg'),
(7, 'trrc    ', 111, 5544, '1', 'rfr rfvrff', '156293163513.jpg'),
(8, 'Amrutha', 55, 5, 'secpon', 'asfdghkjh', '156293180612.jpg'),
(9, 'erthjyk', 8, 6, 'cat', 'zcxvcbvnmjn,km.l', '15629318778.jpeg'),
(10, 'wqertyu', 66, 88, 'Desktop', 'wertyuiasdfghj', '15629321787.jpg'),
(11, 'esrdty', 66, 77, 'cat', 'dsfghjkl;', '156293323312.jpg'),
(12, 'Titan', 4, 4, 'added category', 'sdfghjkl;', '15631686606.jpg'),
(13, 'AAAAAAA', 77, 99, '5', 'asdfghjk', '15639579584.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `userlist`
--

CREATE TABLE `userlist` (
  `uid` int(10) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `mobile` bigint(13) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `address` tinytext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uservisit`
--

CREATE TABLE `uservisit` (
  `id` int(10) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `datetime` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `userlist`
--
ALTER TABLE `userlist`
  ADD PRIMARY KEY (`uid`);

--
-- Indexes for table `uservisit`
--
ALTER TABLE `uservisit`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uservisit`
--
ALTER TABLE `uservisit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
