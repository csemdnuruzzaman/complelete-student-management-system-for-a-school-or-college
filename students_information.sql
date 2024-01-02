-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 11:24 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `students_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `apply_user`
--

CREATE TABLE `apply_user` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `comment` varchar(10000) NOT NULL,
  `created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `name`, `email`, `comment`, `created`) VALUES
(1, 'Nuruzzaman', 'nuruzzamanphone@gmail.com', 'Good Comment', '15-04-23 12:29:05 PM'),
(2, 'Rohim', 'rohim@gmail.com', 'Good page', '15-04-23 12:44:37 PM'),
(3, 'Korim', 'korim@gmail.com', 'This is good website', '15-04-23 12:54:34 PM'),
(4, 'Abdur Rahmman', 'abdur@gmail.com', 'At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est\r\n\r\n\"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness.', '15-04-23 12:55:13 PM'),
(5, 'sdfsd', 'sdfsdf@gmail.com', '\r\nAbdur Rahmman 15-04-23 12:55:13 PM\r\n\r\nAt vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est \"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of', '15-04-23 12:56:47 PM');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `hod` varchar(200) NOT NULL,
  `start_year` varchar(200) NOT NULL,
  `nos` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `hod`, `start_year`, `nos`) VALUES
(3, 'Computer Science', 'Siduzzaman Liton', '2023-04-01', '1000'),
(4, 'Electronics', 'Nuruzzaman', '2023-04-14', '500');

-- --------------------------------------------------------

--
-- Table structure for table `star_info`
--

CREATE TABLE `star_info` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `marks` varchar(200) NOT NULL,
  `percentage` varchar(200) NOT NULL,
  `year` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `star_info`
--

INSERT INTO `star_info` (`id`, `name`, `marks`, `percentage`, `year`) VALUES
(1, 'MD.NURUZZAMAN', '1500', '99', '2023'),
(2, 'Abdur Rahmman', '1600', '97', '2022');

-- --------------------------------------------------------

--
-- Table structure for table `std_info`
--

CREATE TABLE `std_info` (
  `id` int(150) NOT NULL,
  `fname` varchar(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `roll` int(200) NOT NULL,
  `reg` int(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `technology` varchar(100) NOT NULL,
  `session` varchar(50) NOT NULL,
  `institute` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `dob` varchar(100) NOT NULL,
  `schoolname` varchar(300) NOT NULL,
  `gender` varchar(50) NOT NULL,
  `created` varchar(100) NOT NULL,
  `img` varchar(300) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_info`
--

INSERT INTO `std_info` (`id`, `fname`, `sname`, `roll`, `reg`, `email`, `semester`, `technology`, `session`, `institute`, `address`, `dob`, `schoolname`, `gender`, `created`, `img`) VALUES
(1, 'Md.', 'Nuruzzaman', 435296, 1502055291, 'nuruzzamanpolytechnic@gmail.com', '7th', 'Computer Science', '19-20', 'Satkhira Polytechnic Institute', 'Satkhira Sadar, Satkhira', '2003-05-02', 'Satkhira Govt. Technical School and College', 'Male', '16-04-23 08:00:50 AM', '11e69af6763cc67273e7e71a2c864504.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `id` int(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `img` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL,
  `pass` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `created` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`id`, `name`, `img`, `email`, `phone`, `dob`, `gender`, `pass`, `username`, `created`) VALUES
(11, 'MD.NURUZZAMAN', '11e69af6763cc67273e7e71a2c864504.jpeg', 'nuruzzamanpolytechnic@gmail.com', '01601517325', '2003-05-02', 'Male', '340a1ecf86e9e86815e135fed00c2db6', 'nuruzzaman.org', '16-04-23 08:33:16 AM');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `apply_user`
--
ALTER TABLE `apply_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `star_info`
--
ALTER TABLE `star_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `std_info`
--
ALTER TABLE `std_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `apply_user`
--
ALTER TABLE `apply_user`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `star_info`
--
ALTER TABLE `star_info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `std_info`
--
ALTER TABLE `std_info`
  MODIFY `id` int(150) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
