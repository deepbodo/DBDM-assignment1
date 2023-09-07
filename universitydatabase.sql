-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 07, 2023 at 09:36 PM
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
-- Database: `universitydatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `advisors`
--

CREATE TABLE `advisors` (
  `advisorId` int(11) NOT NULL,
  `advisorName` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `deptName` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `advisors`
--

INSERT INTO `advisors` (`advisorId`, `advisorName`, `email`, `deptName`) VALUES
(10002, 'Diksha', 'diki5@gmail.com', 'CSE'),
(10004, 'Abhisek', 'abhi@gmail.com', 'AI');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `course_id` varchar(10) NOT NULL,
  `course_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`course_id`, `course_name`) VALUES
('1001', 'Course 1'),
('1002', 'Course 2'),
('1003', 'Course 3'),
('1004', 'Course 4'),
('1005', 'Course 5'),
('1006', 'Course 6'),
('1007', 'Course 7'),
('1008', 'Course 8'),
('1009', 'Course 9'),
('1010', 'Course 10'),
('1011', 'Course 11'),
('1012', 'Course 12'),
('1013', 'Course 13');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `deptId` int(11) NOT NULL,
  `deptname` varchar(255) DEFAULT NULL,
  `building` varchar(255) DEFAULT NULL,
  `budget` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`deptId`, `deptname`, `building`, `budget`) VALUES
(1001, 'CSE', 'Block 1', 20000000.00),
(1002, 'Mechanical', 'Block 3', 10000000.00),
(1004, 'ECE', 'Block 3', 99999999.99),
(1007, 'Chemical', 'Block 6', 3000000.00);

-- --------------------------------------------------------

--
-- Table structure for table `instructors`
--

CREATE TABLE `instructors` (
  `instructorId` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `salary` decimal(10,2) DEFAULT NULL,
  `deptname` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `instructors`
--

INSERT INTO `instructors` (`instructorId`, `name`, `salary`, `deptname`) VALUES
(10001, '', 20000.00, 'ECE'),
(10004, 'Keben', 10000.00, 'Mechanical'),
(10101, 'John Doe', 60000.00, 'AI'),
(12121, 'Jane Smith', 65000.00, 'CSE'),
(15151, 'David Johnson', 70000.00, 'ME'),
(22222, 'Michael Brown', 68000.00, 'Chemical'),
(32343, 'Emily Davis', 62000.00, 'ECE');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `ID` varchar(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `dept_name` varchar(30) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `email` varchar(20) NOT NULL,
  `major` varchar(20) NOT NULL,
  `year` varchar(10) NOT NULL,
  `totcredit` int(20) NOT NULL,
  `phone` int(20) NOT NULL,
  `program` varchar(30) NOT NULL,
  `fellowship` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`ID`, `name`, `dept_name`, `dob`, `email`, `major`, `year`, `totcredit`, `phone`, `program`, `fellowship`) VALUES
('0', '', '', '', '', '', '', 0, 0, '', NULL),
('121', 'DEEPJYOTI BODO', 'de', '1111-02-13', 'deepbodo5@gmail.com', 'dd', '1232', 10, 11111333, '1313213', '2000'),
('191120', 'Yash', 'ME', '01021996', 'tash@gmail.com', 'ME', '2019', 20, 131324355, 'Btech', '0'),
('201123', 'Nikhil', 'CSE', '03012001', 'nikhil@gmail.com', 'CSE', '2020', 10, 970730780, 'Btech', '0'),
('231190', 'Diksha', 'ME', '2000-03-02', 'diki@gmail.com', 'Thermal', '2023', 10, 1333555555, 'Mtech', NULL),
('233', 'DEEPJYOTI BODO', 'jhhln', '0004-04-13', 'deepbodo5@gmail.com', 'dfsd', '23243', 12, 424244442, '422424', NULL),
('2331133', 'Abhisekh', '3313', '0033-03-31', 'deep@gmail.com', '13131', '133', 11, 331, '313', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teaches`
--

CREATE TABLE `teaches` (
  `ID` int(11) NOT NULL,
  `course_id` varchar(10) DEFAULT NULL,
  `sec_id` varchar(10) DEFAULT NULL,
  `semester` varchar(20) DEFAULT NULL,
  `year` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teaches`
--

INSERT INTO `teaches` (`ID`, `course_id`, `sec_id`, `semester`, `year`) VALUES
(12121, '1002', 'MNC2', 'Summer', 2020),
(15151, '1003', 'MNC3', 'Summer', 2019),
(22222, '1004', 'MNC4', 'Spring', 2017),
(32343, '1005', 'MNCS', 'Summer', 2019),
(33456, '1006', 'MNC6', 'Spring', 2015),
(45565, '1007', 'MNC7', 'Spring', 2018),
(58583, '1008', 'MNC8', 'Spring', 2016),
(76543, '1009', 'MNC9', 'Summer', 2019),
(76766, '1010', 'MNC10', 'Spring', 2018),
(83821, '1011', 'MNC11', 'Summer', 2015),
(98345, '1012', 'MNC12', 'Spring', 2020),
(99999, '1013', 'MNC13', 'Spring', 2020);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `advisors`
--
ALTER TABLE `advisors`
  ADD PRIMARY KEY (`advisorId`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`course_id`),
  ADD UNIQUE KEY `course_id` (`course_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`deptId`),
  ADD UNIQUE KEY `deptname` (`deptname`);

--
-- Indexes for table `instructors`
--
ALTER TABLE `instructors`
  ADD PRIMARY KEY (`instructorId`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `teaches`
--
ALTER TABLE `teaches`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `advisors`
--
ALTER TABLE `advisors`
  MODIFY `advisorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10005;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `deptId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1008;

--
-- AUTO_INCREMENT for table `instructors`
--
ALTER TABLE `instructors`
  MODIFY `instructorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32344;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
