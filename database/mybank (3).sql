-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 20, 2021 at 03:42 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mybank`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cust_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cust_id`, `name`, `email`, `balance`) VALUES
(1, 'Amit', 'amit@gmail.com', 49900),
(2, 'Eunice Patrina', 'eunicepatrina0@gmail.com', 36000),
(3, 'Abisha Sherlin', 'abishasherlin22@gmail.com', 34000),
(4, 'Hannah Caroline', 'hannahcaroline123@gmail.com', 15000),
(5, 'Lizzie', 'lizzie2007@gmail.com', 40000),
(6, 'Shalini Thangam', 'shalinithangam01@gmail.com', 30000),
(7, 'Jeffrey Samuel', 'jeffreysamuel14@gmail.com', 30100),
(8, 'Jennifer Evangeline', 'jennifer411@gmail.com', 30000),
(9, 'Samson', 'samson1998@gmail.com', 30000),
(10, 'Ashvitha C', 'ashvitha2000@gmail.com', 30000),
(11, 'Neymar Jr', 'neymarjr10@gmail.com', 15000),
(12, 'Ajit', 'Ajit@gmail.com', 30000);

-- --------------------------------------------------------

--
-- Table structure for table `transation`
--

CREATE TABLE `transation` (
  `trans_id` int(11) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `send_id` int(11) NOT NULL,
  `recv_id` int(11) NOT NULL,
  `recv_name` varchar(255) NOT NULL,
  `amount` double NOT NULL,
  `dot` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transation`
--

INSERT INTO `transation` (`trans_id`, `sname`, `send_id`, `recv_id`, `recv_name`, `amount`, `dot`) VALUES
(1, 'Amit', 1, 2, 'Eunice Patrina', 0, '0000-00-00 00:00:00'),
(2, 'Amit', 1, 2, 'Eunice Patrina', 0, '2021-02-17 22:31:38'),
(3, 'Amit', 1, 2, 'Eunice Patrina', 0, '2021-02-18 09:54:37'),
(4, 'Abisha Sherlin', 3, 1, 'Amit', 0, '2021-02-18 10:54:46'),
(5, 'Amit', 1, 2, 'Eunice Patrina', 78, '2021-02-18 16:37:30'),
(6, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-18 16:39:56'),
(7, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-18 16:42:31'),
(8, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-18 16:43:43'),
(9, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-18 16:44:36'),
(10, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-18 16:48:48'),
(11, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-18 16:50:11'),
(12, 'Amit', 1, 2, 'Eunice Patrina', 78, '2021-02-18 16:51:35'),
(13, 'Amit', 1, 2, 'Eunice Patrina', 78, '2021-02-18 16:52:01'),
(14, 'Amit', 1, 2, 'Eunice Patrina', 78, '2021-02-18 16:52:31'),
(15, 'Amit', 1, 2, 'Eunice Patrina', 78, '2021-02-18 16:53:11'),
(16, 'Eunice Patrina', 2, 1, 'Amit', 100, '2021-02-18 19:47:03'),
(17, 'Amit', 1, 2, 'Eunice Patrina', 100, '2021-02-18 19:50:10'),
(18, 'Ajit', 12, 1, 'Amit', 20000, '2021-02-18 20:16:01'),
(19, 'Amit', 1, 2, 'Eunice Patrina', 34, '2021-02-20 13:06:20'),
(20, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-20 13:07:18'),
(21, 'Amit', 1, 2, 'Eunice Patrina', 100, '2021-02-20 13:11:19'),
(22, 'Amit', 1, 2, 'Eunice Patrina', 588, '2021-02-20 13:16:40'),
(23, 'Amit', 1, 3, 'Abisha Sherlin', 4000, '2021-02-20 13:18:09'),
(24, 'Eunice Patrina', 2, 1, 'Amit', 21000, '2021-02-20 13:19:37'),
(25, 'Amit', 1, 11, 'Neymar Jr', 5000, '2021-02-20 13:45:26'),
(26, 'Abisha Sherlin', 3, 1, 'Amit', 5000, '2021-02-20 13:48:48'),
(27, 'Amit', 1, 2, 'Eunice Patrina', 0, '2021-02-20 13:49:31'),
(28, 'Amit', 1, 2, 'Eunice Patrina', 0, '2021-02-20 13:54:10'),
(29, 'Amit', 1, 2, 'Eunice Patrina', 4, '2021-02-20 13:56:17'),
(30, 'Hannah Caroline', 4, 1, 'Amit', 15000, '2021-02-20 14:14:31'),
(31, 'Amit', 1, 2, 'Eunice Patrina', 5000, '2021-02-20 14:31:23'),
(32, 'Amit', 1, 2, 'Eunice Patrina', 996, '2021-02-20 14:31:48'),
(33, 'Neymar Jr', 11, 5, 'Lizzie', 5000, '2021-02-20 15:24:08'),
(34, 'Neymar Jr', 11, 5, 'Lizzie', 5000, '2021-02-20 15:24:40'),
(35, 'Neymar Jr', 11, 12, 'Ajit', 5000, '2021-02-20 15:27:11'),
(36, 'Neymar Jr', 11, 12, 'Ajit', 5000, '2021-02-20 15:27:48'),
(37, 'Amit', 1, 7, 'Jeffrey Samuel', 100, '2021-02-20 19:16:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `transation`
--
ALTER TABLE `transation`
  ADD PRIMARY KEY (`trans_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `cust_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `transation`
--
ALTER TABLE `transation`
  MODIFY `trans_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
