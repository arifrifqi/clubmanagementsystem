-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 06, 2024 at 07:52 AM
-- Server version: 8.0.30
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `no` int NOT NULL,
  `student_id` int NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `student_name` text NOT NULL,
  `student_programme` varchar(50) NOT NULL,
  `student_hp` varchar(50) NOT NULL,
  `student_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`no`, `student_id`, `username`, `password`, `student_name`, `student_programme`, `student_hp`, `student_email`) VALUES
(0, 1, 'rifqi', '123', 'Arif Rifqi', 'IM245', '', 'rifqiarif394@gmail.com'),
(1, 2021839794, 'rifqi', '123', 'Arif Rifqi', 'IM245', '0148054370', 'rifqiarif394@gmail.com'),
(0, 2021839796, 'mizan', '123', 'Al-Mizan', 'IM245', '', 'mizan2023@gmail.com'),
(0, 2021839797, 'shafiq', '123', 'Muhammad Shafiq', 'CDIM245', '', 'shafiq2023@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `student_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2021839798;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
