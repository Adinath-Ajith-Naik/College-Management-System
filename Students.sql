-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 21, 2022 at 03:09 PM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--
CREATE DATABASE IF NOT EXISTS `school` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `school`;

-- --------------------------------------------------------

--
-- Table structure for table `assignment`
--

CREATE TABLE `assignment` (
  `user_name` varchar(50) DEFAULT NULL,
  `subjects` varchar(50) DEFAULT NULL,
  `topic` varchar(50) DEFAULT NULL,
  `due` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `assignment`
--

INSERT INTO `assignment` (`user_name`, `subjects`, `topic`, `due`) VALUES('student1', 'XYZ', 'ABC', '30-03-2022');
INSERT INTO `assignment` (`user_name`, `subjects`, `topic`, `due`) VALUES('student2', 'XYZ', 'QWE', '30-03-2022');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `user_name` varchar(20) DEFAULT NULL,
  `subjects` varchar(20) DEFAULT NULL,
  `attendance` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`user_name`, `subjects`, `attendance`) VALUES('student1', 'XYZ', 85);
INSERT INTO `attendance` (`user_name`, `subjects`, `attendance`) VALUES('student2', 'XYZ', 75);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` bigint(20) NOT NULL,
  `faculty_id` bigint(20) NOT NULL,
  `faculty_name` varchar(100) NOT NULL,
  `faculty_subject` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `faculty_id`, `faculty_name`, `faculty_subject`, `password`, `date`) VALUES(5, 4211548115075867, 'faculty1', 'XYZ', 'faculty1', '2022-02-20 21:12:49');
INSERT INTO `faculty` (`id`, `faculty_id`, `faculty_name`, `faculty_subject`, `password`, `date`) VALUES(6, 223593077825323582, 'faculty2', 'HIJ', 'faculty2', '2022-02-20 21:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `grievances`
--

CREATE TABLE `grievances` (
  `user_name` varchar(20) DEFAULT NULL,
  `subjects` varchar(20) DEFAULT NULL,
  `statement` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `grievances`
--

INSERT INTO `grievances` (`user_name`, `subjects`, `statement`) VALUES('student1', 'XYZ', 'Can you please extend the due date ??');
INSERT INTO `grievances` (`user_name`, `subjects`, `statement`) VALUES('student2', 'XYZ', 'Please do re-check my internal marks for Series 1');

-- --------------------------------------------------------

--
-- Table structure for table `internals`
--

CREATE TABLE `internals` (
  `user_name` varchar(20) DEFAULT NULL,
  `subjects` varchar(50) DEFAULT NULL,
  `marks1` int(11) DEFAULT NULL,
  `marks2` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `internals`
--

INSERT INTO `internals` (`user_name`, `subjects`, `marks1`, `marks2`) VALUES('student1', 'XYZ', 30, 30);
INSERT INTO `internals` (`user_name`, `subjects`, `marks1`, `marks2`) VALUES('student2', 'XYZ', 40, 40);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES(9, 983352491, 'student1', 'student1', '2022-02-20 21:11:48');
INSERT INTO `users` (`id`, `user_id`, `user_name`, `password`, `date`) VALUES(10, 8161160027785729, 'student2', 'student2', '2022-02-20 21:12:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assignment`
--
ALTER TABLE `assignment`
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `date` (`date`),
  ADD KEY `faculty_id` (`faculty_id`),
  ADD KEY `faculty_name` (`faculty_name`);

--
-- Indexes for table `grievances`
--
ALTER TABLE `grievances`
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `internals`
--
ALTER TABLE `internals`
  ADD KEY `user_name` (`user_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `date` (`date`),
  ADD KEY `user_name` (`user_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `assignment`
--
ALTER TABLE `assignment`
  ADD CONSTRAINT `assignment_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);

--
-- Constraints for table `grievances`
--
ALTER TABLE `grievances`
  ADD CONSTRAINT `grievances_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);

--
-- Constraints for table `internals`
--
ALTER TABLE `internals`
  ADD CONSTRAINT `internals_ibfk_1` FOREIGN KEY (`user_name`) REFERENCES `users` (`user_name`);
