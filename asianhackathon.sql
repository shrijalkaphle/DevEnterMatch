-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2018 at 07:35 AM
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

-- --------------------------------------------------------

--
-- Table structure for table `securityqa`
--

CREATE TABLE `securityqa` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `question1` varchar(50) NOT NULL,
  `answer1` varchar(50) NOT NULL,
  `question2` varchar(50) NOT NULL,
  `answer2` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `securityqa`
--

INSERT INTO `securityqa` (`id`, `uid`, `question1`, `answer1`, `question2`, `answer2`) VALUES
(1, 12, 'What was your first nickname?', 'shrijal', 'Where were you born?', 'ktm'),
(2, 13, 'What was your first nickname?', 'kdar', 'Where were you born?', 'ktm'),
(3, 14, 'What was your first nickname?', 'kafle', 'Where were you born?', 'ktm'),
(4, 15, 'What was your first nickname?', 'thame', 'Where were you born?', 'ktm'),
(5, 16, 'What was your first nickname?', 'dipal', 'Where were you born?', 'ktm'),
(6, 17, 'What was your first nickname?', 'saurav', 'Where were you born?', 'ktm'),
(7, 18, 'What was your first nickname?', 'ujjwol', 'Where were you born?', 'ktm'),
(8, 19, 'What was your first nickname?', 'sushant', 'Where were you born?', 'ktm'),
(9, 20, 'What was your first nickname?', 'ravi', 'Where were you born?', 'ktm'),
(10, 21, 'What was your first nickname?', 'prasant', 'Where were you born?', 'ktm'),
(11, 22, 'What was your first nickname?', 'raman', 'Where were you born?', 'ktm'),
(12, 23, 'What was your first nickname?', 'dhiraj', 'Where were you born?', 'ktm'),
(13, 24, 'What was your first nickname?', 'babin', 'Where were you born?', 'ktm'),
(14, 25, 'What was your first nickname?', 'ashim', 'Where were you born?', 'ktm'),
(15, 26, 'What was your first nickname?', 'suraj', 'Where were you born?', 'ktm');

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
(12, 'shrijalkaphle', 'kaphle.shrijal9@gmail.com', 'asd', 'entrepneur'),
(13, 'kdar', 'kdar@gmail.com', 'asd', 'sponser'),
(14, 'shrijalkaphle', 'shrijal@gmail.com', 'asd', 'developer'),
(15, 'ayushsedhai', 'ayushsedhai@gmail.com', 'ayush', 'entrepneur'),
(16, 'dipal', 'dipal@gmail.com', 'dipal', 'developer'),
(17, 'saurav', 'saurav@gmail.com', 'saurav', 'developer'),
(18, 'ujjwol', 'ujjwol@gmail.com', 'ujjwol', 'entrepneur'),
(19, 'sushant', 'sushant@gmail.com', 'sushant', 'entrepneur'),
(20, 'ravi', 'ravi@gmail.com', 'ravi', 'entrepneur'),
(21, 'prasant', 'prasant@gmail.com', 'prasant', 'developer'),
(22, 'anmol', 'anmol@gmail.com', 'anmol', 'developer'),
(23, 'dhiraj', 'dhiraj@gmail.com', 'dhiraj', 'sponser'),
(24, 'babin', 'babin@gmail.com', 'babin', 'sponser'),
(25, 'ashim', 'ashim@gmail.com', 'ashim', 'sponser'),
(26, 'suraj', 'suraj@gmail.com', 'suraj', 'sponser');

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
  `idea` varchar(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `description` varchar(100) NOT NULL,
  `skill` varchar(500) NOT NULL,
  `github` varchar(100) NOT NULL,
  `linkedin` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `uid`, `fname`, `lname`, `organization`, `idea`, `phone`, `description`, `skill`, `github`, `linkedin`, `image`) VALUES
(7, 12, 'Shrijal', 'Kaphle', '', 'create a car', '9843564504', '', '', '', '', '58243886_p0.png'),
(8, 13, 'Kdar', 'Sedhi', 'Deerwalk Institute Of Technology', '', '', 'me', '', '', '', '6b7b59af847ff1b0215b6c2609917842.jpg'),
(9, 14, 'Shrijal', 'Kaphle', '', '', '9843564504', 'me', 'Java, C++, PHP, Python, GO , Grails, HTML, CSS', 'https://github.com/shrijalkaphle', 'linked.com', 'D5ERXdWp0OKs4qfrhpkuDjPw9jIH5N75bl3fPbGg3Xw.png'),
(10, 15, 'Ayush', 'Sedhai', '', 'AI', '9803454567', 'I am good boy.', '', '', '', '23120199_1438794566227833_3095692505165378841_o.jpg'),
(11, 16, 'Dipal', 'Malla', '', '', '', 'My name is Dipal.', 'Java, HTML', 'https://github.com/dipal', '', ''),
(12, 17, 'Saurav', 'Bhandari', '', '', '9054134560', 'My name is Saurav.', 'Photoshop, CSS', '', '', ''),
(13, 18, 'Ujjwol', 'Shrestha', '', 'Machine Learning', '9875342958', 'my name is ujjwol', '', '', '', ''),
(14, 19, 'Sushant', 'Pokharel', '', 'Agriculture Development using IT', '9854349875', 'my name is Sushant.', '', '', '', ''),
(15, 20, 'Ravi', 'Gautam', '', 'Traffic Management using machine learning', '9812309873', 'my name is ravi', '', '', '', ''),
(16, 21, 'Prasant', 'Satyal', '', '', '9854956845', 'i am prasant', 'C, C#, Android', 'https://github.com/prasantsatyal', '', ''),
(17, 22, 'Anmol', 'Thapa', '', '', '9807549584', 'i am anmol', 'C++, ', 'https://github.com/anmolthapa', 'https://www.linkedin.com/in/anmol-7526bb12b/', ''),
(18, 23, 'Dhiraj', 'Dhungana', 'Deerwalk Institute Of Technology', '', '', 'i am dhiraj', '', '', '', ''),
(19, 24, 'Babin', 'Karki', 'Wishlist Nepal', '', '', 'i am babin', '', '', '', ''),
(20, 25, 'Ashim', 'Shrestha', 'DWIT', '', '', '', '', '', '', ''),
(21, 26, 'Suraj', 'Prasai', 'Fuse.ai', '', '', 'AI investor.', '', '', '', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
