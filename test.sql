-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2024 at 08:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `hlo`
--

CREATE TABLE `hlo` (
  `id` int(11) NOT NULL,
  `name` varchar(22) NOT NULL,
  `rollnumber` int(11) NOT NULL,
  `Edit` varchar(8) NOT NULL,
  `Delete` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `hlo`
--

INSERT INTO `hlo` (`id`, `name`, `rollnumber`, `Edit`, `Delete`) VALUES
(1, 'vamsi', 23, '0', '');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(10) NOT NULL,
  `name` varchar(222) NOT NULL,
  `email` varchar(23) NOT NULL,
  `password` int(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`) VALUES
(2, 'asus', 'asus@gmail.com', 0),
(3, 'asus', 'asus@gmail.com', 0),
(4, 'asus', 'asus@gmail.com', 0),
(5, 'asus', 'asus@gmail.com', 0),
(6, 'asus', 'asus@gmail.com', 0),
(7, 'a', 'a@gmail.com', 11111),
(8, 'asus', 'asus@gmail.com', 11111),
(9, 'asus', 'asus@gmail.com', 11111),
(10, 'asus', 'asus@gmail.com', 11111),
(11, 'asus', 'asus@gmail.com', 11111),
(12, 'asus', 'asus@gmail.com', 11111),
(13, 'asus', 'asus@gmail.com', 11111),
(14, 'asus', 'asus@gmail.com', 0),
(15, 'asus', 'asus@gmail.com', 0),
(16, 'asus', 'asus@gmail.com', 0),
(17, 'asus', 'asus@gmail.com', 0),
(18, 'asus', 'asus@gmail.com', 0),
(19, 'asus', 'asus@gmail.com', 0),
(20, 'asus', 'asus@gmail.com', 0),
(21, 'asus', 'asus@gmail.com', 0),
(22, 'asus', 'asus@gmail.com', 67575),
(23, 'asus', 'asus@gmail.com', 67575),
(24, 'asus', 'asus@gmail.com', 0),
(25, 'asus', 'asus@gmail.com', 0),
(26, 'asus', 'asus@gmail.com', 0),
(27, 'asus', 'asus@gmail.com', 0),
(28, 'asus', 'asus@gmail.com', 0),
(29, 'asus', 'asus@gmail.com', 0),
(30, 'asus', 'asus@gmail.com', 0),
(31, 'asus', 'asus@gmail.com', 0),
(32, 'asus', 'asus@gmail.com', 0),
(33, 'asus', 'asus@gmail.com', 0),
(34, 'asus', 'asus@gmail.com', 0),
(35, 'asus', 'asus@gmail.com', 0),
(36, 'asus', 'asus@gmail.com', 0),
(37, 'asus', 'asus@gmail.com', 0),
(38, 'asus', 'asus@gmail.com', 0),
(39, 'asus', 'asus@gmail.com', 0),
(40, 'asus', 'asus@gmail.com', 0),
(41, 'asus', 'asus@gmail.com', 0),
(42, 'asus', 'asus@gmail.com', 0),
(43, 'asus', 'asus@gmail.com', 0),
(44, 'asus', 'asus@gmail.com', 0),
(45, 'asus', 'asus@gmail.com', 0),
(46, 'asus', 'asus@gmail.com', 232323),
(47, 'asus', 'asus@gmail.com', 232323),
(48, 'asus', 'asus@gmail.com', 2147483647),
(49, 'asus', 'asus@gmail.com', 2147483647),
(50, 'asus', 'asus@gmail.com', 2147483647),
(51, 'asus', 'asus@gmail.com', 2147483647),
(52, 'asus', 'asus@gmail.com', 2147483647),
(53, 'asus', 'asus@gmail.com', 2147483647),
(54, 'asus', 'asus@gmail.com', 11),
(55, 'asus', 'asus@gmail.com', 11),
(56, 'asus', 'asus@gmail.com', 565656),
(57, 'asus', 'asus@gmail.com', 565656),
(58, 'asus', 'asus@gmail.com', 143),
(59, 'asus', 'asus@gmail.com', 143),
(60, 'asus', 'asus@gmail.com', 14356),
(61, 'asus', 'asus@gmail.com', 14356),
(62, 'asus', 'asus@gmail.com', 0),
(63, 'asus', 'asus@gmail.com', 0),
(64, 'asus', 'asus@gmail.com', 0),
(65, 'asus', 'asus@gmail.com', 0),
(66, 'b', 'b@gmail.com', 0),
(67, 'asus', 'asus@gmail.com', 0),
(68, 'asus', 'asus@gmail.com', 0),
(69, 'asus', 'asus@gmail.com', 0),
(70, 'asus', 'asus@gmail.com', 0),
(71, 'asus', 'asus@gmail.com', 0),
(72, 'vamshi11', 'vamshi@gmail.com', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `hlo`
--
ALTER TABLE `hlo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=73;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
