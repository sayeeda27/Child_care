-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 18, 2020 at 07:56 PM
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
-- Database: `db_child_care`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_birth_register`
--

CREATE TABLE `tbl_birth_register` (
  `br_id` int(11) NOT NULL,
  `d_o_r` date NOT NULL,
  `d_o_i` date NOT NULL,
  `birth_reg_no` int(100) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `d_o_b` date NOT NULL,
  `gender` varchar(50) NOT NULL,
  `p_o_b` varchar(100) NOT NULL,
  `f_name` varchar(100) NOT NULL,
  `f_nationality` varchar(100) NOT NULL,
  `m_name` varchar(100) NOT NULL,
  `m_nationality` varchar(100) NOT NULL,
  `permanent_addr` varchar(250) NOT NULL,
  `present_addr` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_birth_register`
--

INSERT INTO `tbl_birth_register` (`br_id`, `d_o_r`, `d_o_i`, `birth_reg_no`, `full_name`, `d_o_b`, `gender`, `p_o_b`, `f_name`, `f_nationality`, `m_name`, `m_nationality`, `permanent_addr`, `present_addr`) VALUES
(2, '2017-09-03', '2017-09-03', 2147483647, 'Rakib hasan', '2017-09-03', 'male', 'wemen\'s medical hospital ,sylhet', 'Muhib hasan', 'Bangladeshi', 'Amina begum', 'Bangladeshi', 'shibgonj,sylhet', 'shibgonj,sylhet');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(11) NOT NULL,
  `nw_head` varchar(100) NOT NULL,
  `nw_date` date NOT NULL,
  `nw_para` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `us_name` varchar(100) NOT NULL,
  `us_email` varchar(100) NOT NULL,
  `us_password` varchar(250) NOT NULL,
  `us_verification_key` varchar(250) NOT NULL,
  `us_is_email_verified` enum('no','yes') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_vaccine`
--

CREATE TABLE `tbl_vaccine` (
  `vac_id` int(11) NOT NULL,
  `vac_name` varchar(100) NOT NULL,
  `vac_tnd` int(50) NOT NULL,
  `vac_aod` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_birth_register`
--
ALTER TABLE `tbl_birth_register`
  ADD PRIMARY KEY (`br_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  ADD PRIMARY KEY (`vac_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_birth_register`
--
ALTER TABLE `tbl_birth_register`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
