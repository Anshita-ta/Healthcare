-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 01, 2023 at 08:38 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_main`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_email`
--

CREATE TABLE `admin_email` (
  `userid` varchar(15) DEFAULT NULL,
  `email_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_email`
--

INSERT INTO `admin_email` (`userid`, `email_id`) VALUES
('1', 'prince.kumar.842000@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `user_id` varchar(15) DEFAULT NULL,
  `password` varchar(15) DEFAULT NULL,
  `isAdmin` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_id`, `password`, `isAdmin`) VALUES
('admin', 'hello123', 1),
('user1', 'hello654', 0),
('user4', '78965', 0),
('priyanshu', 'priyanshu', 0);

-- --------------------------------------------------------

--
-- Table structure for table `medical_history`
--

CREATE TABLE `medical_history` (
  `mhid` varchar(15) DEFAULT NULL,
  `userid` varchar(15) DEFAULT NULL,
  `_date` date DEFAULT NULL,
  `description` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `medical_history`
--

INSERT INTO `medical_history` (`mhid`, `userid`, `_date`, `description`) VALUES
('mhid_1', 'user_2', '2023-02-16', 'fever'),
('mhid_2', 'user_1', '2023-02-25', 'fever');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` varchar(15) DEFAULT NULL,
  `medicine_name` varchar(15) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  `userid` varchar(15) DEFAULT NULL,
  `order_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `medicine_name`, `quantity`, `userid`, `order_date`) VALUES
('1', 'medicine_1', 4, 'user1', '2023-01-01'),
('2', 'medicine_2', 5, 'user2', '2023-01-02'),
('3', 'epilex-chrono', 5, '12', '2023-02-03');

-- --------------------------------------------------------

--
-- Table structure for table `related`
--

CREATE TABLE `related` (
  `userid` varchar(15) DEFAULT NULL,
  `rel_aadhar` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `related`
--

INSERT INTO `related` (`userid`, `rel_aadhar`) VALUES
('user1', 'relative1'),
('user1', 'relative2'),
('user2', 'relative2'),
('user2', 'relative2'),
('user5', 'user5');

-- --------------------------------------------------------

--
-- Table structure for table `relative_data`
--

CREATE TABLE `relative_data` (
  `name` varchar(15) DEFAULT NULL,
  `rel_aadhar` varchar(15) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `relative_data`
--

INSERT INTO `relative_data` (`name`, `rel_aadhar`, `phone_number`) VALUES
('', '', 0),
('relative_1', 'aadhar_1', 2147483647),
('relative_2', 'addhar_2', 679846545),
('relative2', 'relative2', 45678512),
('relative1', 'relative1', 5412564);

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `userid` varchar(15) DEFAULT NULL,
  `name` varchar(15) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `department` varchar(15) DEFAULT NULL,
  `academic_year` int(11) DEFAULT NULL,
  `hostle` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`userid`, `name`, `phone_number`, `department`, `academic_year`, `hostle`) VALUES
('user1', 'user1', 23145678, 'btech', 1, 0),
('priyanshu', 'priyanshu', 2147483647, 'btech', 2, 0),
('priyanshu', 'priyanshu', 2147483647, 'btech', 2, 0),
('priyanshu', 'priyanshu', 2147483647, 'btech', 2, 0),
('1', 'abc', 78744654, 'jhkj', 1, 0),
('1', 'abc', 78744654, 'jhkj', 1, 0),
('1234', 'user9', 2147483647, 'BA', 2020, 0),
('1234', 'user9', 2147483647, 'BA', 2020, 0),
('1234', 'user9', 2147483647, 'BA', 2020, 0),
('1234', 'user9', 2147483647, 'BA', 2020, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
