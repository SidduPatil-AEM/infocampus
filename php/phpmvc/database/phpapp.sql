-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2019 at 10:51 AM
-- Server version: 10.1.40-MariaDB
-- PHP Version: 7.3.5

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
(9, 'aassss'),
(10, 'new category'),
(11, 'Apple');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `mobile`, `message`) VALUES
(1, 'Hello Raj', 'siddu.k.patil@gmail.com', '3147578850', 'Hello Message123!'),
(3, 'Siddu Patil', 'siddu.k.patil@gmail.com', '3147578850', 'hello 1234'),
(4, 'Siddu Patil', 'siddu.k.patil@gmail.com', '3147578850', 'hello msg changed changed');

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
(1, 66, 88, 99, 49, 'good', '23', '34'),
(2, 1, 1, 100, 1, '1', '12/12/2020', '12/12/2020');

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` int(10) NOT NULL,
  `photourl` varchar(255) NOT NULL,
  `userid` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `photourl`, `userid`) VALUES
(4, '15635316322.jpg', 0),
(5, '15635331713.jpg', 0),
(6, '15635337271.webp', 0),
(7, '1563533801', 0),
(8, '15635340183.jpg', 0),
(9, '15635347903.jpg', 0),
(10, '15635348913.jpg', 0),
(11, '15635349213.jpg', 0),
(12, '15635349553.jpg', 0),
(13, '15635349873.jpg', 0),
(14, '15635350281.webp', 0),
(15, '15635350513.jpg', 0),
(16, '15635351353.jpg', 0),
(17, '15638743252.jpg', 0),
(18, '15638750382.jpg', 1);

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
  `details` tinytext,
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
(13, 'AAAAAAA', 77, 99, '5', 'asdfghjk', '15639579584.jpg'),
(14, 'prod-1', 100, 1, '2', '100', '1563964911'),
(15, 'hello', 0, 1, '2', '1', '1564057645bg.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `message` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`, `mobile`, `message`) VALUES
(1, 'siddu', 'siddu.k.patil@gmail.com', 'hello', '1234567890', 'hello msg'),
(2, 'Siddu Patil', 'siddu.k.patil@gmail.com', '123', '3147578850', 'hello new user'),
(3, 'Siddu Patil', 'siddu.k.patil@gmail.com', '123', '3147578850', 'hello new user'),
(4, 'Siddu Patil', 'siddu.k.patil@gmail.com', '123', '3147578850', 'hello new user'),
(5, 'Siddu Patil', 'siddu.k.patil@gmail.com', '123', '3147578850', 'hey user'),
(6, 'Siddu Patil', 'siddu.k.patil@gmail.com', 'aa', '3147578850', ''),
(7, 'Siddu Patil', 'siddu.k.patil@gmail.com', '1234', '3147578850', 'hello');

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
  `address` tinytext
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `uservisit`
--

CREATE TABLE `uservisit` (
  `id` int(10) NOT NULL,
  `ip` varchar(100) DEFAULT NULL,
  `datetime` varchar(100) DEFAULT NULL,
  `pagename` varchar(255) NOT NULL,
  `visittime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uservisit`
--

INSERT INTO `uservisit` (`id`, `ip`, `datetime`, `pagename`, `visittime`) VALUES
(1, '10.1.7.0', '12:30', '', '2019-07-25 11:41:26'),
(2, '::1', NULL, '/phpmvc/', '2019-07-25 11:47:38'),
(3, '::1', NULL, '/phpmvc/', '2019-07-25 11:48:02'),
(4, '::1', NULL, '/phpmvc/welcome/contact', '2019-07-25 11:48:22'),
(5, '::1', NULL, '/phpmvc/welcome/login', '2019-07-25 11:48:29'),
(6, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 11:48:42'),
(7, '::1', NULL, '/phpmvc/welcome/login', '2019-07-25 11:48:49'),
(8, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:09:29'),
(9, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:09:54'),
(10, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:10:55'),
(11, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:10:57'),
(12, '::1', NULL, '/phpmvc/dashboard/allcontact', '2019-07-25 12:10:58'),
(13, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:10:59'),
(14, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:12:10'),
(15, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:12:43'),
(16, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:12:55'),
(17, '::1', NULL, '/phpmvc/welcome/login', '2019-07-25 12:13:03'),
(18, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:13:06'),
(19, '::1', NULL, '/phpmvc/welcome/login', '2019-07-25 12:13:08'),
(20, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:13:14'),
(21, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:14:47'),
(22, '::1', NULL, '/phpmvc/welcome/login', '2019-07-25 12:15:26'),
(23, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:15:28'),
(24, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:16:30'),
(25, '::1', NULL, '/phpmvc/welcome/login', '2019-07-25 12:20:22'),
(26, '::1', NULL, '/phpmvc/dashboard/index', '2019-07-25 12:20:26'),
(27, '::1', NULL, '/phpmvc/dashboard/newphoto', '2019-07-25 12:20:27'),
(28, '::1', NULL, '/phpmvc/dashboard/newphoto', '2019-07-25 12:21:04'),
(29, '::1', NULL, '/phpmvc/welcome/login', '2019-07-25 12:21:06'),
(30, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:21:07'),
(31, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:22:07'),
(32, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:24:20'),
(33, '::1', NULL, '/phpmvc/', '2019-07-25 12:24:20'),
(34, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:24:28'),
(35, '::1', NULL, '/phpmvc/', '2019-07-25 12:24:38'),
(36, '::1', NULL, '/phpmvc/', '2019-07-25 12:24:38'),
(37, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:24:54'),
(38, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:25:05'),
(39, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:25:37'),
(40, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:26:56'),
(41, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:27:29'),
(42, '::1', NULL, '/phpmvc/welcome/index', '2019-07-25 12:29:49');

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
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myorder`
--
ALTER TABLE `myorder`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
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
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `myorder`
--
ALTER TABLE `myorder`
  MODIFY `orderid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userlist`
--
ALTER TABLE `userlist`
  MODIFY `uid` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `uservisit`
--
ALTER TABLE `uservisit`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
