-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2023 at 07:17 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rubric`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `aid` int(11) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `structure` varchar(32) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `admin_email`, `structure`, `password`) VALUES
(0, 'admin', '', 'test123');

-- --------------------------------------------------------

--
-- Table structure for table `batch`
--

CREATE TABLE `batch` (
  `year` int(32) DEFAULT NULL,
  `dept_name` varchar(50) NOT NULL,
  `b_id` int(11) NOT NULL,
  `batch_no` varchar(51) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `batch`
--

INSERT INTO `batch` (`year`, `dept_name`, `b_id`, `batch_no`) VALUES
(2023, 'CIS', 26, 'CIS_2023'),
(2022, 'CIS', 27, 'CIS_2022'),
(2012, 'CSIT', 28, 'CSIT_2012'),
(0, 'CIS', 29, 'CIS_');

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `dept_id` int(11) NOT NULL,
  `dept_name` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`dept_id`, `dept_name`) VALUES
(6, 'CIS'),
(7, 'CSIT');

-- --------------------------------------------------------

--
-- Table structure for table `project_details`
--

CREATE TABLE `project_details` (
  `project_id` int(30) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `batch` int(20) NOT NULL,
  `supervisor` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `pid` int(20) NOT NULL,
  `seatno` int(20) NOT NULL,
  `fyp_title` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `project_details`
--

INSERT INTO `project_details` (`project_id`, `sname`, `batch`, `supervisor`, `department`, `pid`, `seatno`, `fyp_title`) VALUES
(12, 'x', 2022, ' y', 'cis', 1, 0, 's'),
(12, 'y', 2022, ' y', 'cis', 2, 0, 's'),
(12, 'z', 2022, ' y', 'cis', 3, 0, 't'),
(1, 'a', 2022, ' z', 'cis', 4, 1, 'd'),
(1, 'b', 2022, ' z', 'cis', 5, 2, 'd'),
(1, 'c', 2022, ' z', 'cis', 6, 3, 'd'),
(1, 'd', 2022, ' z', 'cis', 7, 4, 'd');

-- --------------------------------------------------------

--
-- Table structure for table `rubric`
--

CREATE TABLE `rubric` (
  `student_name` varchar(50) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `seat_no` varchar(10) CHARACTER SET utf8 NOT NULL DEFAULT '',
  `project_id` varchar(50) NOT NULL DEFAULT '0',
  `fyp_title` varchar(50) NOT NULL,
  `supervisor` varchar(60) NOT NULL,
  `department` varchar(50) NOT NULL,
  `planI` int(30) NOT NULL,
  `planII` int(30) NOT NULL,
  `planIII` int(30) NOT NULL,
  `planIV` int(30) NOT NULL,
  `weight` int(30) NOT NULL,
  `batch` int(10) NOT NULL,
  `s_id` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rubric`
--

INSERT INTO `rubric` (`student_name`, `seat_no`, `project_id`, `fyp_title`, `supervisor`, `department`, `planI`, `planII`, `planIII`, `planIV`, `weight`, `batch`, `s_id`, `status`) VALUES
('riya', 'cis-20', '145', 'asd', 't', 'cis', 75, 50, 75, 50, 250, 2022, 76, 0),
('Toys', 'cs-13', '145', 'asd', 't', 'cis', 0, 0, 0, 0, 0, 2022, 186, 0),
('Snacks', 'cs-14', '145', 'asd', 't', 'cis', 0, 0, 0, 0, 0, 2022, 187, 0),
('Stationaries', 'cs-15', '134', 'abc', 'x', 'cis', 0, 0, 0, 0, 0, 2022, 188, 0),
('Tools', 'cs-16', '134', 'abc', 'x', 'cis', 0, 0, 0, 0, 0, 2022, 189, 0),
('Toys', 'cs-13', '134', 'abc', 'x', 'cis', 0, 0, 0, 0, 0, 2022, 190, 0),
('Snacks', 'cs-14', '123', 'xyz', 'y', 'cis', 0, 0, 0, 0, 0, 2022, 191, 0),
('Stationaries', 'cs-15', '123', 'xyz', 'y', 'cis', 0, 0, 0, 0, 0, 2022, 192, 0),
('Tools', 'cs-16', '123', 'xyz', 'y', 'cis', 0, 0, 0, 0, 0, 2022, 193, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `user_email` varchar(200) NOT NULL,
  `password` varchar(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `code` varchar(20) NOT NULL,
  `updated_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `user_email`, `password`, `user_id`, `user_name`, `code`, `updated_time`) VALUES
(1, 'user1@neduet.edu.pk', 'test123', 2201, 'x', 'YX3POHLF0I', '2023-03-22 06:38:29'),
(2, 'user2@neduet.edu.pk', 'test123', 2202, 'y', '', '2023-03-22 06:38:37'),
(3, 'user3@neduet.edu.pk', 'test123', 2203, 's', '', '2023-03-22 06:38:40'),
(4, 'user4@neduet.edu.pk', 'test123', 2204, 't', '', '2023-03-22 06:38:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `batch`
--
ALTER TABLE `batch`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`dept_id`);

--
-- Indexes for table `project_details`
--
ALTER TABLE `project_details`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `rubric`
--
ALTER TABLE `rubric`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `batch`
--
ALTER TABLE `batch`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `department`
--
ALTER TABLE `department`
  MODIFY `dept_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `project_details`
--
ALTER TABLE `project_details`
  MODIFY `pid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rubric`
--
ALTER TABLE `rubric`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=195;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
