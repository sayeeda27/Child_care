-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 13, 2020 at 08:56 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `child_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `birth_reg`
--

CREATE TABLE `birth_reg` (
  `si` int(11) NOT NULL,
  `f_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `fa_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mo_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pob` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pre_add` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `per_add` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mob_num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `birth_reg`
--

INSERT INTO `birth_reg` (`si`, `f_name`, `dob`, `fa_name`, `mo_name`, `pob`, `pre_add`, `per_add`, `mob_num`) VALUES
(1, 'Rifad Ahmed', '2019-10-09', 'Masuk Ahmed', 'Sharmin Naznin', 'Women\'s Medical,Sylhet', '14 9/A Mirabazar,sylhet', '14 9/A Mirabazar,sylhet', 1993276542);

-- --------------------------------------------------------

--
-- Table structure for table `birth_regg`
--

CREATE TABLE `birth_regg` (
  `si` int(11) NOT NULL,
  `f_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `fa_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mo_name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pob` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `pre_add` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `per_add` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `mob_num` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `birth_regg`
--

INSERT INTO `birth_regg` (`si`, `f_name`, `dob`, `fa_name`, `mo_name`, `pob`, `pre_add`, `per_add`, `mob_num`) VALUES
(1, 'Rifad Ahmed', '2019-10-09', 'Masuk Ahmed					', 'Sharmin Naznin', 'Women\'s Medical,Sylhet', '14 9/A Mirabazar,sylhet', '14 9/A Mirabazar,sylhet', 1993276542),
(5, 'Rakib Hasan', '2013-02-19', 'Fajlu Hasan', 'Samina Sharmin', 'IbnSina Hospital,Sylhet', '9/3A,Senpara,Shibgonj,sylhet', '9/3A,Senpara,Shibgonj,sylhet', 184321905);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `name` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `verification_key` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `is_email_verified` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `name`, `email`, `password`, `verification_key`, `is_email_verified`) VALUES
(1, 'sinthia chowdhury', 'sinthia14566@gmail.com', '2b7cc318da9ba9d03912592c2f34a1ec', '708a9fa380ddd9db51a5112e30a8f7e1', ''),
(2, 'sayeda', 'sayedacchowdhury@gmail.com', '2b7cc318da9ba9d03912592c2f34a1ec', 'ef9f029c345dba3f678aa5329c7b90e3', ''),
(3, 'sayeda', 'sayedachowdhury@gmail.com', '2b7cc318da9ba9d03912592c2f34a1ec', '1d3a7305fb301de4ff4d287ce4440293', ''),
(4, 'sayeda', 'sayeda@gmail.com', '2b7cc318da9ba9d03912592c2f34a1ec', '7217b6d4c457419973206c15f24fade6', ''),
(5, 'sushmita', 'sushmitaprity@gmail.com', '2b7cc318da9ba9d03912592c2f34a1ec', '1fb0ebd02cbbf2a2177f489e24031344', ''),
(6, 'Sayeda Chowdhury', 'sayedacchowdhury@gmail.com', '2b7cc318da9ba9d03912592c2f34a1ec', '6f8e8ed70662acfd5645b6702c16778b', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `birth_reg`
--
ALTER TABLE `birth_reg`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `birth_regg`
--
ALTER TABLE `birth_regg`
  ADD PRIMARY KEY (`si`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `birth_reg`
--
ALTER TABLE `birth_reg`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `birth_regg`
--
ALTER TABLE `birth_regg`
  MODIFY `si` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
