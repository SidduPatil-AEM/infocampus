-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 12:40 PM
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
-- Database: `phpmvc`
--

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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
