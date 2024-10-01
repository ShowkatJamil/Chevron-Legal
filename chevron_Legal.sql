-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2023 at 09:59 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mystic_Morsel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `legal_t` (
  `email` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `legal_t` (`email`, `password`) VALUES
('cspt@chevron.com', 'Cspt@1234'),
('bushrarahman@chevron.com', 'Br@1234'),
('nameeraahmed@chevron.com', 'Na@1234');

-- --------------------------------------------------------



-- Table structure for table `order`
--

CREATE TABLE `rquest_t` (
  `request_id` INTEGER NOT NULL AUTO_INCREMENT,
  `request_email` varchar(32) NOT NULL,
  `request_name` varchar(32) NOT NULL,
  `request_dept` varchar(32) NOT NULL,
  `request_pnumber` varchar(32) NOT NULL,
  `req_des` varchar(100) NOT NULL,

  CONSTRAINT order_PK PRIMARY KEY (request_id)

) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--


--
-- Indexes for dumped tables
--

--
-- Indexes for table `order`
--

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
