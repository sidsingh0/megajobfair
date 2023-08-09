-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 04:28 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sof`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `first_name` varchar(50) NOT NULL,
  `middle_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` bigint(15) NOT NULL,
  `email` varchar(500) NOT NULL,
  `college_name` varchar(250) NOT NULL,
  `degree` varchar(25) NOT NULL,
  `yop` varchar(10) NOT NULL,
  `department` varchar(100) NOT NULL,
  `ssc_percentage` int(11) NOT NULL,
  `hsc_percentage` int(11) NOT NULL,
  `deg_percentage` int(11) NOT NULL,
  `scope_of_interest` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`first_name`, `middle_name`, `last_name`, `phone`, `email`, `college_name`, `degree`, `yop`, `department`, `ssc_percentage`, `hsc_percentage`, `deg_percentage`, `scope_of_interest`) VALUES
('Parth', 'Rakesh', 'Mishra', 109829899, 'parth@yahoo.in', 'APSIT', 'option2', '2025', 'Mechanical', 85, 52, 62, 'Design Engineer,'),
('sarvesh', 'raghu', 'shirwalky', 999999999, 'shirwalk@gmail.com', 'APLIT', 'BE', '2028', 'Information Technology', 96, 98, 100, 'Design Engineer,Research & Development,'),
('Harmit', 'Avtar', 'Saini', 9327642011, '20102125.harmitsaini@gmail.com', 'APSIT', 'option2', '2024', 'Computer Science', 85, 95, 98, 'Design Engineer,Research & Development,'),
('Someone', 'a', 'Somewhere', 9967775891, 'ssaloni@apsit.edu.in', '', 'option2', '2022', 'Computer Science', 58, 52, 45, 'option1,');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`phone`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
