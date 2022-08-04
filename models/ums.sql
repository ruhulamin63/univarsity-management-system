-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 04, 2022 at 07:03 PM
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
-- Database: `ums`
--

-- --------------------------------------------------------

--
-- Table structure for table `notices`
--

CREATE TABLE `notices` (
  `id` int(50) NOT NULL,
  `notice_title` varchar(255) NOT NULL,
  `notice_desc` longtext NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `student_name` varchar(255) NOT NULL,
  `student_phone` varchar(50) NOT NULL,
  `student_program` varchar(50) NOT NULL,
  `student_dob` date NOT NULL,
  `student_cgpa` varchar(50) DEFAULT NULL,
  `student_grade` varchar(50) DEFAULT NULL,
  `student_passing_year` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `user_id`, `student_name`, `student_phone`, `student_program`, `student_dob`, `student_cgpa`, `student_grade`, `student_passing_year`) VALUES
(1, 67, 'Test8', '2147483647', 'BBA', '2022-08-23', '', '', '0000-00-00'),
(2, 68, 'Wrrwerewr', '1749549843', 'Bsc in ENG', '2022-08-15', '', '', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `program` varchar(50) NOT NULL,
  `dob` varchar(50) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `full_name`, `password`, `email`, `phone`, `program`, `dob`, `user_type`, `image`) VALUES
(1, 'raridoy', 'Ruhul Amin', '11111111', 'raridoy4@gmail.com', 1743369163, 'CSE', '2021-04-15', 'staff', '../../asset/upload/staff-photostax-verification-system.png'),
(4, 'raridoy_aiub', 'Rony', 'HellpRony', 'kami05518@gamil.com', 1689385783, 'EEE', '2021-04-15', '', ''),
(47, 'raridoy.420', 'Ruhul Amin', 'ruhulamin', 'raridoy101@gmail.com', 1743369163, 'IPE', '2021-04-27', '', ''),
(48, 'raridoy_zero', 'Ruhul Amin', 'needhelp', 'insanruhul@gmail.com', 1743369163, 'ENG', '2021-04-13', '', ''),
(52, 'utsho', 'Ruhul Amin', '11111111', 'abd@gmail.com', 1689385783, 'B.Sc in ENG', '2022-07-26', '', ''),
(53, '3535', 'Ruhul Amin', '11111111', 'abd@gmail.com', 1689385783, 'B.Sc in ENG', '2022-07-26', '', ''),
(54, '35354545', 'Ruhul Amin', '11111111', 'abd@gmail.com', 1689385783, 'B.Sc in ENG', '2022-07-26', '', ''),
(55, '353545454', 'Ruhul Amin', '11111111', 'abd@gmail.com', 1689385783, 'B.Sc in ENG', '2022-07-26', '', ''),
(57, 'test', 'Test', '22222222', 'test@gmail.com', 2147483647, 'BBA', '2022-08-04', 'student', '../../asset/upload/fsdfds.jpg'),
(59, 'test1', 'Test1', '11111111', '', 0, '', '', 'student', ''),
(60, 'test2', 'Test2', '22222222', '', 0, '', '', 'student', ''),
(61, 'test3', '', '11111111', '', 0, '', '', 'student', ''),
(62, 'test4', '', '11111111', '', 0, '', '', 'student', ''),
(63, '', '', '', '', 0, '', '', 'student', ''),
(64, 'test5', '', '11111111', '', 0, '', '', 'student', ''),
(65, 'test6', '', '11111111', '', 0, '', '', 'student', ''),
(66, 'test7', 'Test7', '11111111', 'test7@gmail.com', 2147483647, 'Bsc in EEE', '2022-08-09', 'student', ''),
(67, 'test8', 'Test8', '11111111', 'test8@gmail.com', 2147483647, 'BBA', '2022-08-23', 'student', ''),
(68, 'test9', 'Wrrwerewr t', '22222222', 'test9@gmail.com', 1749549843, 'Bsc in ENG', '2022-08-15', 'student', '../../asset/upload/ll.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `notices`
--
ALTER TABLE `notices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `notices`
--
ALTER TABLE `notices`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `students`
--
ALTER TABLE `students`
  ADD CONSTRAINT `students_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
