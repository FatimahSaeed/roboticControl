-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 26, 2021 at 05:38 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roboticarm`
--

-- --------------------------------------------------------

--
-- Table structure for table `motors`
--

CREATE TABLE `motors` (
  `id` int(11) NOT NULL,
  `motor1` int(11) NOT NULL,
  `motor2` int(11) NOT NULL,
  `motor3` int(11) NOT NULL,
  `motor4` int(11) NOT NULL,
  `motor5` int(11) NOT NULL,
  `motor6` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `motors`
--

INSERT INTO `motors` (`id`, `motor1`, `motor2`, `motor3`, `motor4`, `motor5`, `motor6`) VALUES
(1, 114, 51, 70, 6, 154, 90),
(2, 16, 136, 114, 73, 50, 157),
(3, 53, 67, 90, 90, 74, 31),
(4, 52, 113, 125, 68, 13, 153);

-- --------------------------------------------------------

--
-- Table structure for table `run`
--

CREATE TABLE `run` (
  `On` int(11) NOT NULL,
  `Off` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `motors`
--
ALTER TABLE `motors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `motors`
--
ALTER TABLE `motors`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
