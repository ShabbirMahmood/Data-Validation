-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2018 at 04:05 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_validation_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_tb`
--

CREATE TABLE `admin_tb` (
  `id` int(10) NOT NULL,
  `Email` varchar(256) NOT NULL,
  `Password` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_tb`
--

INSERT INTO `admin_tb` (`id`, `Email`, `Password`) VALUES
(1, 'shabbirmahmood1996@gmail.com', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `data_tb`
--

CREATE TABLE `data_tb` (
  `id` int(11) NOT NULL,
  `Full_Name` varchar(1000) NOT NULL,
  `Roll_No` int(10) NOT NULL,
  `Fathers_Name` varchar(1000) NOT NULL,
  `Birth_Date` date NOT NULL,
  `Address` varchar(1000) NOT NULL,
  `Email` varchar(1000) NOT NULL,
  `Phone_No` varchar(20) NOT NULL,
  `Edu_Qua` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tb`
--

INSERT INTO `data_tb` (`id`, `Full_Name`, `Roll_No`, `Fathers_Name`, `Birth_Date`, `Address`, `Email`, `Phone_No`, `Edu_Qua`) VALUES
(4, 'Shabbir Mahmood', 14015439, 'Abdul Mabud', '1996-12-31', 'Mirjapur, Rajshahi, Bangladesh', 'shabbirmahmood1996@gmail.com', '+8801777291291', '4th Year(Even Semester) Undergraduate Student, CSE, Rajshahi University');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_tb`
--
ALTER TABLE `admin_tb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_tb`
--
ALTER TABLE `data_tb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_tb`
--
ALTER TABLE `admin_tb`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `data_tb`
--
ALTER TABLE `data_tb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
