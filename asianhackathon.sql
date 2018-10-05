-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 01:36 PM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `asianhackathon`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `comment`) VALUES
(1, 'Shrijal', 'kaphle.shrijal9@gmail.com', 'asd\r\n'),
(2, 'Shrijal', 'kaphle.shrijal9@gmail.com', 'asd\r\n'),
(3, 'Shrijal', 'kaphle.shrijal9@gmail.com', 'asd\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `securityqa`
--

CREATE TABLE `securityqa` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `question1` int(11) NOT NULL,
  `answer1` int(11) NOT NULL,
  `question2` int(11) NOT NULL,
  `answer2` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`, `role`) VALUES
(9, 'shrijal', 'kaphle.shrijal9@gmail.com', 'asd', 'developer'),
(10, 'kdar', 'kdar@gmail.com', 'asd', 'entrepneur'),
(11, 'iris', 'iris@gmail.com', 'asd', 'sponser');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `organization` varchar(50) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `description` varchar(100) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `github` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `uid`, `fname`, `lname`, `organization`, `phone`, `description`, `skill`, `github`, `linkedin`, `image`) VALUES
(4, 9, 'Dipal', 'Kaphle', '', 9843564504, 'I am GOD.', 'Java,C++,PHP,Python,Go,Grails,HTML,CSS', 'https://www.github.com/shrijalkaphle', 'https://www.linkedin.com/in/shrijal-kaphle-7526bb12b/', 'pp photo.jpg'),
(5, 10, '', '', '', 0, '', '', '', '', ''),
(6, 11, 'iris', 'pokharel', '', 0, 'asd', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `securityqa`
--
ALTER TABLE `securityqa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `securityqa`
--
ALTER TABLE `securityqa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
