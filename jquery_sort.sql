-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 02, 2017 at 07:46 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.1.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jquery_sort`
--

-- --------------------------------------------------------

--
-- Table structure for table `php_interview_questions`
--

CREATE TABLE `php_interview_questions` (
  `id` int(8) NOT NULL,
  `letter` text NOT NULL,
  `row_order` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `php_interview_questions`
--

INSERT INTO `php_interview_questions` (`id`, `letter`, `row_order`) VALUES
(1, 'The quick', 0),
(2, 'Little brown fox', 1),
(3, 'jumps over', 2),
(4, 'the lazy dog', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `php_interview_questions`
--
ALTER TABLE `php_interview_questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `php_interview_questions`
--
ALTER TABLE `php_interview_questions`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
