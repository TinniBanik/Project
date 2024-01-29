-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 02:01 PM
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
-- Database: `login_sample_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_location` varchar(100) NOT NULL,
  `user_gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `user_email`, `user_location`, `user_gender`, `password`, `date`) VALUES
(1, 187800985358056, 'Soumitra Dev', 'soumitradev532@gmail.com', 'Dhaka', 'Male', 'abcd', '2023-09-05 17:52:11'),
(2, 968134049553285, 'Moumita', 'mou123@gmail.com', 'Chittagong', 'Female', 'abcd', '2023-08-11 20:00:56'),
(3, 132325117506576275, 'Robin', 'Robin321@gmail.com', 'khulna', 'Male', 'efgh', '2023-08-12 18:22:14'),
(4, 366397157589640333, 'Apurba', 'apurba@gmail.com', 'Dhaka', 'Male', 'efgh', '2023-08-13 17:45:19'),
(5, 1015169, 'Tainur', 'tainur@gmail.com', 'Chittagong', 'Male', '4321', '2023-08-15 15:42:36'),
(6, 50222513539777277, 'Akibul Islam', 'Akib@gmail.com', 'Dhaka', 'Male', 'efgh', '2023-08-16 15:21:57'),
(7, 1835, 'Shrabon Dey', 'shrabon@gmail.com', 'Chittagong', 'Male', 'efgh', '2023-09-05 19:32:20'),
(8, 81512906646587, 'ajmal', 'ajmal@gmail.com', 'Dhaka', 'Male', 'efgh', '2023-09-06 08:14:28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `user_name` (`user_name`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `user_location` (`user_location`),
  ADD KEY `user_gender` (`user_gender`),
  ADD KEY `date` (`date`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
