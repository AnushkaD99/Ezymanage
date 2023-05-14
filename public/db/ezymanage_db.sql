-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2023 at 08:36 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ezymanage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `agrahara_tbl`
--

CREATE TABLE `agrahara_tbl` (
  `agrahara_id` int(11) NOT NULL,
  `scheme` text NOT NULL,
  `amount` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agrahara_tbl`
--

INSERT INTO `agrahara_tbl` (`agrahara_id`, `scheme`, `amount`) VALUES
(1, 'Agrahara Normal Scheme', 125),
(2, 'Agrahara Silver Government ', 300),
(3, 'Agrahara Gold Government', 600);

-- --------------------------------------------------------

--
-- Table structure for table `allowance_tbl`
--

CREATE TABLE `allowance_tbl` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` int(20) NOT NULL,
  `user` int(2) NOT NULL DEFAULT 2
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `allowance_tbl`
--

INSERT INTO `allowance_tbl` (`id`, `name`, `amount`, `user`) VALUES
(1, 'Cost of Living', 7800, 2),
(3, 'Telephone Allowance', 2500, 1),
(4, 'Executive Allowance', 3000, 1),
(14, 'INT ALL 3', 7500, 2);

-- --------------------------------------------------------

--
-- Table structure for table `appointment_tbl`
--

CREATE TABLE `appointment_tbl` (
  `appointment_id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `reason` text NOT NULL,
  `date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `submitted_date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment_tbl`
--

INSERT INTO `appointment_tbl` (`appointment_id`, `emp_no`, `reason`, `date`, `start_time`, `end_time`, `submitted_date`, `status`) VALUES
(1, 2, 'Discuss about a problem in  school', '2023-03-14', '14:00:00', '14:30:00', '2023-03-12', 0);

-- --------------------------------------------------------

--
-- Table structure for table `deduction_tbl`
--

CREATE TABLE `deduction_tbl` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `amount` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deduction_tbl`
--

INSERT INTO `deduction_tbl` (`id`, `name`, `amount`) VALUES
(1, 'Stamp', 25),
(3, 'W. & O. P.', 6);

-- --------------------------------------------------------

--
-- Table structure for table `issue_tbl`
--

CREATE TABLE `issue_tbl` (
  `issue_id` int(15) NOT NULL,
  `emp_no` int(15) NOT NULL,
  `submitted_date` date NOT NULL,
  `issue_type` text NOT NULL,
  `issue_cat` text NOT NULL,
  `issue` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `karyasadana_tbl`
--

CREATE TABLE `karyasadana_tbl` (
  `karyasadana_id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `submitted_date` date NOT NULL,
  `tasks1` text NOT NULL,
  `indicators1` text NOT NULL,
  `problems1` text NOT NULL,
  `tasks2` text NOT NULL,
  `indicators2` text NOT NULL,
  `problems2` text NOT NULL,
  `tasks3` text NOT NULL,
  `indicators3` text NOT NULL,
  `problems3` text NOT NULL,
  `tasks4` text NOT NULL,
  `indicators4` text NOT NULL,
  `problems4` text NOT NULL,
  `tasks5` text NOT NULL,
  `indicators5` text NOT NULL,
  `problems5` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `leaves_tbl`
--

CREATE TABLE `leaves_tbl` (
  `leave_id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `reason` text NOT NULL,
  `commencing_date` date NOT NULL,
  `resuming_date` date NOT NULL,
  `days` int(11) NOT NULL,
  `leave_type` text NOT NULL,
  `submitted_date` date NOT NULL DEFAULT current_timestamp(),
  `status` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `leaves_tbl`
--

INSERT INTO `leaves_tbl` (`leave_id`, `emp_no`, `reason`, `commencing_date`, `resuming_date`, `days`, `leave_type`, `submitted_date`, `status`) VALUES
(1, 2, 'urgent work', '2023-03-10', '2023-03-11', 1, 'Casual', '2023-03-09', 1),
(2, 2, 'Sister&#39;s Wedding', '2023-03-12', '2023-03-15', 3, 'Casual', '2023-03-10', 1),
(3, 2, 'Corona', '2023-03-01', '2023-03-08', 7, 'Medical', '2023-03-10', 0),
(4, 2, 'test popups 1', '2023-03-11', '2023-03-12', 1, 'Casual', '2023-03-10', -1),
(5, 2, 'test popup messages 2', '2023-03-11', '2023-03-12', 1, 'Casual', '2023-03-10', 1),
(6, 2, 'test popup 3', '2023-03-11', '2023-03-12', 1, 'Casual', '2023-03-11', 0),
(7, 2, 'test popup 4', '2023-03-11', '2023-03-12', 1, 'Casual', '2023-03-11', 0),
(8, 2, 'test popup 5', '2023-03-11', '2023-03-12', 1, 'Casual', '2023-03-11', 0);

-- --------------------------------------------------------

--
-- Table structure for table `principal_tbl`
--

CREATE TABLE `principal_tbl` (
  `id` int(15) NOT NULL,
  `emp_no` int(15) NOT NULL,
  `school` text NOT NULL,
  `grade` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `principal_tbl`
--

INSERT INTO `principal_tbl` (`id`, `emp_no`, `school`, `grade`) VALUES
(1, 3, 'Nalanda College', 'Second Class Second Grade');

-- --------------------------------------------------------

--
-- Table structure for table `salary_tbl`
--

CREATE TABLE `salary_tbl` (
  `salary_id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `basic_salary` float NOT NULL,
  `allowances` float NOT NULL,
  `deductions` float NOT NULL,
  `net_salary` float NOT NULL,
  `caculated_date` date NOT NULL DEFAULT current_timestamp(),
  `send` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `salary_tbl`
--

INSERT INTO `salary_tbl` (`salary_id`, `emp_no`, `basic_salary`, `allowances`, `deductions`, `net_salary`, `caculated_date`, `send`) VALUES
(10, 2, 34160, 15300, 2074.6, 47385.4, '2023-05-11', 1),
(11, 2020001, 47425, 15300, 2870.5, 59854.5, '2023-05-11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `schools_tbl`
--

CREATE TABLE `schools_tbl` (
  `school_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `address` text NOT NULL,
  `contact_num` varchar(12) NOT NULL,
  `principal` text NOT NULL,
  `moto` text NOT NULL,
  `vision` text NOT NULL,
  `mission` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `student_count` int(5) NOT NULL,
  `teacher_count` int(5) NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `schools_tbl`
--

INSERT INTO `schools_tbl` (`school_id`, `name`, `address`, `contact_num`, `principal`, `moto`, `vision`, `mission`, `email`, `student_count`, `teacher_count`, `type`) VALUES
(1, 'Nalanda College', 'Colombo 10', '0110000000', '', 'Wisdom Illuminates Character', 'To gift the world great humans who are endowed with virtues and wisdom.', 'To reward mother Lanka with noble sons with balanced personality, dedicated to serve the country, nation and religion.', 'nalandacollege@gmail.com', 0, 0, 'Schools with GCE Advanced Level (A-Level) classes'),
(2, 'Ananda College', 'Colombo 10', '0112 695 503', 'No Principal', 'Appamādo Amathapadan', 'vision', 'mission', 'principal_anan@sltnet.lk', 7000, 0, 'National Schools');

-- --------------------------------------------------------

--
-- Table structure for table `school_clerk_tbl`
--

CREATE TABLE `school_clerk_tbl` (
  `id` int(15) NOT NULL,
  `emp_no` int(15) NOT NULL,
  `school` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `school_clerk_tbl`
--

INSERT INTO `school_clerk_tbl` (`id`, `emp_no`, `school`) VALUES
(1, 7, 'Nalanda College');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_salary_details_tbl`
--

CREATE TABLE `teacher_salary_details_tbl` (
  `id` int(11) NOT NULL,
  `class` text NOT NULL,
  `step` int(11) NOT NULL,
  `basic_salary` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_salary_details_tbl`
--

INSERT INTO `teacher_salary_details_tbl` (`id`, `class`, `step`, `basic_salary`) VALUES
(1, 'Class 3-i', 7, 34160),
(2, 'Class 3-i', 8, 34685),
(3, 'Class 3-i', 9, 35210),
(4, 'Class 3-i', 10, 35735),
(5, 'Class 3-i', 11, 36260),
(6, 'Class 3-i', 12, 36785),
(7, 'Class 3-i', 13, 37310),
(8, 'Class 3-i', 14, 37835),
(9, 'Class 3-i', 15, 38360),
(10, 'Class 3-i', 16, 38885),
(11, 'Class 3-i', 17, 39410),
(12, 'Class 3-i', 18, 39935),
(13, 'Class 3-i', 19, 40460),
(14, 'Class 3-i', 20, 40985),
(15, 'Class 3-i', 21, 41510),
(16, 'Class 3-i', 22, 42035),
(17, 'Class 3-i', 23, 42560),
(18, 'Class 2-ii', 1, 39175),
(19, 'Class 2-ii', 2, 40000),
(20, 'Class 2-ii', 3, 40825),
(21, 'Class 2-ii', 4, 41650),
(22, 'Class 2-ii', 5, 42475),
(23, 'Class 2-ii', 6, 43300),
(24, 'Class 2-ii', 7, 44125),
(25, 'Class 2-ii', 8, 44950),
(26, 'Class 2-ii', 9, 45775),
(27, 'Class 2-ii', 10, 46600),
(28, 'Class 2-ii', 11, 47425),
(29, 'Class 2-ii', 12, 48250),
(30, 'Class 2-ii', 13, 49075),
(31, 'Class 2-ii', 14, 49900),
(32, 'Class 2-ii', 15, 50725),
(33, 'Class 2-ii', 16, 51550),
(34, 'Class 2-i', 11, 47425),
(35, 'Class 2-i', 12, 48760),
(36, 'Class 2-i', 13, 50095),
(37, 'Class 2-i', 14, 51430),
(38, 'Class 2-i', 15, 52765),
(39, 'Class 2-i', 16, 54100),
(40, 'Class 2-i', 17, 55435),
(41, 'Class 2-i', 18, 56770),
(42, 'Class 2-i', 19, 58105),
(43, 'Class 2-i', 20, 59440),
(44, 'Class 2-i', 21, 60775),
(45, 'Class 2-i', 22, 62110),
(46, 'Class 2-i', 23, 63445),
(47, 'Class 1', 18, 56770),
(48, 'Class 1', 19, 58400),
(49, 'Class 1', 20, 60030),
(50, 'Class 1', 21, 61660),
(51, 'Class 1', 22, 63290),
(52, 'Class 1', 23, 64920),
(53, 'Class 1', 24, 66550),
(54, 'Class 1', 25, 68180),
(55, 'Class 1', 26, 69810),
(56, 'Class 1', 27, 71440),
(57, 'Class 1', 28, 73070),
(58, 'Class 1', 29, 74700),
(59, 'Class 1', 30, 76330),
(60, 'Class 1', 31, 77960),
(61, 'Class 1', 32, 79590),
(62, 'Class 1', 33, 81220),
(63, 'Class 1', 34, 82850),
(64, 'Class 1', 35, 84480),
(65, 'Class 1', 36, 86110),
(66, 'Class 1', 37, 87740),
(67, 'Class 1', 38, 89370),
(68, 'Class 1', 39, 91000),
(69, 'Class 1', 40, 92630),
(70, 'Class 1', 41, 94260),
(71, 'Class 1', 42, 95890),
(72, 'Class 1', 43, 97520),
(73, 'Class 1', 44, 99150),
(74, 'Class 1', 45, 100780);

-- --------------------------------------------------------

--
-- Table structure for table `teacher_tbl`
--

CREATE TABLE `teacher_tbl` (
  `id` int(15) NOT NULL,
  `emp_no` int(15) NOT NULL,
  `school` text NOT NULL,
  `grade` varchar(30) NOT NULL,
  `step` int(11) NOT NULL,
  `agrahara` text NOT NULL DEFAULT 'Agrahara Normal Scheme'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_tbl`
--

INSERT INTO `teacher_tbl` (`id`, `emp_no`, `school`, `grade`, `step`, `agrahara`) VALUES
(1, 2, 'Nalanda College', 'Third Class First Grade', 7, 'Agrahara Normal Scheme'),
(3, 2020001, 'Ananda College', 'Second Class Second Grade', 11, 'Agrahara Normal Scheme');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `emp_no` int(15) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `designation` text NOT NULL,
  `full_name` text NOT NULL,
  `name_with_initials` text NOT NULL,
  `gender` text NOT NULL,
  `birthday` date DEFAULT NULL,
  `nic` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `contact_num` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dp` text NOT NULL,
  `reg_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`emp_no`, `username`, `password`, `designation`, `full_name`, `name_with_initials`, `gender`, `birthday`, `nic`, `address`, `contact_num`, `email`, `dp`, `reg_date`) VALUES
(1, 'Anushka', '$2y$10$DyPkZbezZeMPzn7qQnHZz.IfGfH2l7pu0e5Y1PdT4FPLjFdNx4wUO', 'Admin', 'Anushka Dushmantha Rajapaksha', 'A.D.Rajapaksha', 'Male', '2000-01-21', '200002100868', 'Kehelwaththa, Kegalle', '0769320933', 'anushka@gmail.com', '1.jpg', '2023-02-27'),
(2, 'Nethmini', '$2y$10$6I.Zt4zArYUlIsMRDHxOme.Cd247rwAs07mUuNjxwI0fIDXK.QaM.', 'Teacher', 'Nethmini Samarakoon', 'N.Samarakoon', 'Female', '2000-03-15', '200002100568', 'Rathnapura', '0769320935', 'nethmini@gmail.com', '2.jpg', '2023-03-05'),
(3, 'Tushan', '$2y$10$M9OC8UUnFKva/x8fXC4tp.AjgYHRBffxIvapjAIhaL1kWIBUR87hG', 'Principal', 'Tushan Janith Athukorala', 'T.J.Athukorala', 'Male', '2000-04-27', '200002100565', 'Kaduwela', '0756891562', 'tushan@gmail.com', 'default.png', '2023-03-05'),
(4, 'Nirmani', '$2y$10$M9OC8UUnFKva/x8fXC4tp.AjgYHRBffxIvapjAIhaL1kWIBUR87hG', 'Director', '', '', 'Female', '0000-00-00', '199992536256', '', '', '', 'defalt.png', '2023-03-05'),
(5, 'RaveFx', '$2y$10$UBVPQbbZxs9cn21EmBJKP.JkdlB28oBBzPqcqF/v.D1oQh2WRddRe', 'Clerk Salary', 'Ravindu Prabash Balasooriya', 'R.P.Balasooriya', 'Male', '1998-12-02', '199802536596', 'Wadakada, Polgahawela', '0756985696', 'ravefx@gmail.com', 'default.png', '2023-03-05'),
(6, 'Pathum', '$2y$10$z02U7EwY6Q.GyboOn9.sXuB06A.dpBAdFNVul9zN89bXtjgScUThq', 'Clerk Transfer', '', '', 'Male', '0000-00-00', '199702356965', '', '', '', 'default.png', '2023-03-05'),
(7, 'Ravindu', '$2y$10$MZvr9Ul79iTrMKRYU3T8N.2r2mvsIuQjw2nZD5vFeUmAuGnS7Tx6m', 'Clerk School', '', '', 'Male', '0000-00-00', '199955689523', '', '', '', 'default.png', '2023-03-05'),
(2020001, 'Charitha', '$2y$10$Y5VVzHj1oRO.khabr1yhjOCeHjAe6zk/.NJ6NvHoYaQeXapymRB7S', 'Teacher', 'Charitha Ruwindu', 'C. Ruwindu', 'Male', '1998-05-09', '199802536596', 'Rathnapura', '0714171927', 'charitha@gmail.com', 'default.jpg', '2023-05-09');

-- --------------------------------------------------------

--
-- Table structure for table `user_allowances_tbl`
--

CREATE TABLE `user_allowances_tbl` (
  `id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `allowance_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_allowances_tbl`
--

INSERT INTO `user_allowances_tbl` (`id`, `emp_no`, `allowance_id`) VALUES
(1, 2, 1),
(2, 2, 14),
(3, 2020001, 1),
(4, 2020001, 14);

-- --------------------------------------------------------

--
-- Table structure for table `user_deductions_tbl`
--

CREATE TABLE `user_deductions_tbl` (
  `id` int(11) NOT NULL,
  `emp_no` int(11) NOT NULL,
  `deduction_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_deductions_tbl`
--

INSERT INTO `user_deductions_tbl` (`id`, `emp_no`, `deduction_id`) VALUES
(1, 2, 1),
(2, 2, 3),
(3, 2020001, 1),
(4, 2020001, 3);

-- --------------------------------------------------------

--
-- Table structure for table `volunteers_tbl`
--

CREATE TABLE `volunteers_tbl` (
  `id` int(11) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `gender` text NOT NULL,
  `birthday` date NOT NULL,
  `nic` varchar(12) NOT NULL,
  `address` text NOT NULL,
  `contact_num` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subjects` text NOT NULL,
  `qualifications` text NOT NULL,
  `other` text NOT NULL DEFAULT 'N/A'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `volunteers_tbl`
--

INSERT INTO `volunteers_tbl` (`id`, `first_name`, `last_name`, `gender`, `birthday`, `nic`, `address`, `contact_num`, `email`, `subjects`, `qualifications`, `other`) VALUES
(1, 'Tharindu', 'Lakshan', 'N/A', '2000-01-25', '20002100569', 'Hettimullla, Kegalle', '0112 695 503', 'tharindu@gmail.com', 'Mathematics', 'Pass A/L', 'N/A'),
(2, 'Supun', 'Dissanayake', 'N/A', '1999-05-26', '199965865236', 'Ranwala, Kegalle', '0758695632', 'supun@gmail.com', 'Sceince', 'Undergraduate', 'N/A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agrahara_tbl`
--
ALTER TABLE `agrahara_tbl`
  ADD PRIMARY KEY (`agrahara_id`);

--
-- Indexes for table `allowance_tbl`
--
ALTER TABLE `allowance_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD PRIMARY KEY (`appointment_id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `deduction_tbl`
--
ALTER TABLE `deduction_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_tbl`
--
ALTER TABLE `issue_tbl`
  ADD PRIMARY KEY (`issue_id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `karyasadana_tbl`
--
ALTER TABLE `karyasadana_tbl`
  ADD PRIMARY KEY (`karyasadana_id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `leaves_tbl`
--
ALTER TABLE `leaves_tbl`
  ADD PRIMARY KEY (`leave_id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `principal_tbl`
--
ALTER TABLE `principal_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  ADD PRIMARY KEY (`salary_id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `schools_tbl`
--
ALTER TABLE `schools_tbl`
  ADD PRIMARY KEY (`school_id`);

--
-- Indexes for table `school_clerk_tbl`
--
ALTER TABLE `school_clerk_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `teacher_salary_details_tbl`
--
ALTER TABLE `teacher_salary_details_tbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_no` (`emp_no`);

--
-- Indexes for table `users_tbl`
--
ALTER TABLE `users_tbl`
  ADD PRIMARY KEY (`emp_no`);

--
-- Indexes for table `user_allowances_tbl`
--
ALTER TABLE `user_allowances_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_no` (`emp_no`),
  ADD KEY `allowance_id` (`allowance_id`);

--
-- Indexes for table `user_deductions_tbl`
--
ALTER TABLE `user_deductions_tbl`
  ADD PRIMARY KEY (`id`),
  ADD KEY `emp_no` (`emp_no`),
  ADD KEY `deduction_id` (`deduction_id`);

--
-- Indexes for table `volunteers_tbl`
--
ALTER TABLE `volunteers_tbl`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agrahara_tbl`
--
ALTER TABLE `agrahara_tbl`
  MODIFY `agrahara_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `allowance_tbl`
--
ALTER TABLE `allowance_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  MODIFY `appointment_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deduction_tbl`
--
ALTER TABLE `deduction_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `issue_tbl`
--
ALTER TABLE `issue_tbl`
  MODIFY `issue_id` int(15) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyasadana_tbl`
--
ALTER TABLE `karyasadana_tbl`
  MODIFY `karyasadana_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `leaves_tbl`
--
ALTER TABLE `leaves_tbl`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `principal_tbl`
--
ALTER TABLE `principal_tbl`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  MODIFY `salary_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `schools_tbl`
--
ALTER TABLE `schools_tbl`
  MODIFY `school_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `school_clerk_tbl`
--
ALTER TABLE `school_clerk_tbl`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teacher_salary_details_tbl`
--
ALTER TABLE `teacher_salary_details_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_allowances_tbl`
--
ALTER TABLE `user_allowances_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user_deductions_tbl`
--
ALTER TABLE `user_deductions_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `volunteers_tbl`
--
ALTER TABLE `volunteers_tbl`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointment_tbl`
--
ALTER TABLE `appointment_tbl`
  ADD CONSTRAINT `appointment_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`);

--
-- Constraints for table `issue_tbl`
--
ALTER TABLE `issue_tbl`
  ADD CONSTRAINT `issue_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`),
  ADD CONSTRAINT `issue_tbl_ibfk_2` FOREIGN KEY (`emp_no`) REFERENCES `teacher_tbl` (`emp_no`),
  ADD CONSTRAINT `issue_tbl_ibfk_3` FOREIGN KEY (`emp_no`) REFERENCES `principal_tbl` (`emp_no`);

--
-- Constraints for table `karyasadana_tbl`
--
ALTER TABLE `karyasadana_tbl`
  ADD CONSTRAINT `karyasadana_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`);

--
-- Constraints for table `leaves_tbl`
--
ALTER TABLE `leaves_tbl`
  ADD CONSTRAINT `leaves_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`);

--
-- Constraints for table `principal_tbl`
--
ALTER TABLE `principal_tbl`
  ADD CONSTRAINT `principal_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`);

--
-- Constraints for table `salary_tbl`
--
ALTER TABLE `salary_tbl`
  ADD CONSTRAINT `salary_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`);

--
-- Constraints for table `school_clerk_tbl`
--
ALTER TABLE `school_clerk_tbl`
  ADD CONSTRAINT `school_clerk_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`);

--
-- Constraints for table `teacher_tbl`
--
ALTER TABLE `teacher_tbl`
  ADD CONSTRAINT `teacher_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`);

--
-- Constraints for table `user_allowances_tbl`
--
ALTER TABLE `user_allowances_tbl`
  ADD CONSTRAINT `user_allowances_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`),
  ADD CONSTRAINT `user_allowances_tbl_ibfk_2` FOREIGN KEY (`allowance_id`) REFERENCES `allowance_tbl` (`id`);

--
-- Constraints for table `user_deductions_tbl`
--
ALTER TABLE `user_deductions_tbl`
  ADD CONSTRAINT `user_deductions_tbl_ibfk_1` FOREIGN KEY (`emp_no`) REFERENCES `users_tbl` (`emp_no`),
  ADD CONSTRAINT `user_deductions_tbl_ibfk_2` FOREIGN KEY (`deduction_id`) REFERENCES `deduction_tbl` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
