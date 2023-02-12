-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 12, 2023 at 07:20 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `signup`
--

-- --------------------------------------------------------

--
-- Table structure for table `supervisors`
--

CREATE TABLE `supervisors` (
  `supervisor_id` int(11) NOT NULL,
  `supervisor_name` varchar(255) NOT NULL,
  `supervisor_email` varchar(255) NOT NULL,
  `supervisor_password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `supervisors`
--

INSERT INTO `supervisors` (`supervisor_id`, `supervisor_name`, `supervisor_email`, `supervisor_password`) VALUES
(1, 'Supervisor1', 'supervisor1@gmail.com', '$2y$10$.7c9195JMhswm080CosTe.XjaWLWy4Ga1SNtTb1eEtdqLshAgQ8Ay'),
(2, 'Supervisor2', 'supervisor2@gmail.com', '$2y$10$0qAXtIbwIA3BIbrphB5Tme6vnB7gob2bY18fqAsXWQgpRQp3KFRP6'),
(3, 'Supervisor3', 'supervisor3@gmail.com', '$2y$10$fwTEObb5yzDUP1450HS7X.0g1WeEn0xgktF7jw2lgtKDl9Lznp2K.'),
(4, 'Supervisor4', 'supervisor4@gmail.com', '$2y$10$wA6Jp.yDLQVwP6DbA1KCUOYiCWboGtEeAq/Bt1vkzWALEwCmPsaDm');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `faculty` varchar(255) NOT NULL,
  `batch` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `email`, `password`, `cpassword`, `faculty`, `batch`) VALUES
(1, 'Sujan Tamang', 'www.example@gmail.com', '$2y$10$OUI4ESL7ECNw0.a5obFJD.f2QD64YXntss7WHqLJhSQ/qnrCO1lYq', '$2y$10$BVgUPedrBwz4BZ4mGQ8fTe6l3o2YVzVOF3Fg3SlB8P461G33bTlsm', 'dit', 2076),
(2, 'Suzan', 'suzan44@gmail.com', '$2y$10$J1ajDfYg/.VG7lV6jMwJru7NqsR1KoB6ft1reRlHTQqxpX6xS6CCm', '$2y$10$MVagQcmy/ROULd44xsichOjL1P.BxUC/8WWLsQVDjglysrwM0M6uy', 'dce', 2077),
(3, 'Sujan Tamang', 'abcd@gmail.com', '$2y$10$4ePaXGqQeCEzlCR4/zEu3enMmh1614awicPyH4H0YbGQe2b64/cDu', '$2y$10$sdDssvGXDmO8Cvg094q5Ge0dGp1M2xZZ7N4A6NrNH7F.lOfqOUf9i', 'dee', 2077),
(4, 'SUJAN', 'sujan@gmail.com', '$2y$10$DNQwXcUbQ46DnyUFFKZZy.4TRO.WF9D1RR66ZtqdiaAaBgUd1dKau', '$2y$10$OArWIhaNvjRBG0/L7dDcJO21GNVlG5KImMoY6GQIChSYmHA3..4w2', 'dit', 2076),
(5, 'gg', 'gg@gmail.com', '$2y$10$5LngGtLg1wfLcA94Bzh1z.zu8MjGbyPrnHMi2a.KlSu4nz.xsjKT2', '$2y$10$Bng7JqdD72AqmtYJsW7a2uRpn1ppxBysfq5sJiffjN6H0.NL615nW', 'dit', 2076);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `supervisors`
--
ALTER TABLE `supervisors`
  ADD PRIMARY KEY (`supervisor_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `supervisors`
--
ALTER TABLE `supervisors`
  MODIFY `supervisor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
