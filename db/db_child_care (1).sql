-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 22, 2020 at 04:56 PM
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
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `ad_id` int(11) NOT NULL,
  `ad_email` varchar(250) NOT NULL,
  `ad_password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`ad_id`, `ad_email`, `ad_password`) VALUES
(1, 'nafaachowdhury@gmail.com', '1234'),
(2, 'sayedacchowdhury@gmail.com', '5678');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin_view`
--

CREATE TABLE `tbl_admin_view` (
  `br_id` int(11) NOT NULL,
  `d_o_r` date NOT NULL,
  `d_o_i` date NOT NULL,
  `birth_reg_no` varchar(250) NOT NULL,
  `full_name` varchar(250) NOT NULL,
  `d_o_b` date NOT NULL,
  `gender` varchar(250) NOT NULL,
  `p_o_b` varchar(250) NOT NULL,
  `f_name` varchar(250) NOT NULL,
  `f_nationality` varchar(250) NOT NULL,
  `m_name` varchar(250) NOT NULL,
  `m_nationality` varchar(250) NOT NULL,
  `permanent_addr` varchar(250) NOT NULL,
  `present_addr` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin_view`
--

INSERT INTO `tbl_admin_view` (`br_id`, `d_o_r`, `d_o_i`, `birth_reg_no`, `full_name`, `d_o_b`, `gender`, `p_o_b`, `f_name`, `f_nationality`, `m_name`, `m_nationality`, `permanent_addr`, `present_addr`) VALUES
(1, '2012-02-23', '2012-02-23', '23396297657836587264', 'Samina khan', '2012-02-23', 'Female', 'Ibn sina  hospital,sylhet', 'Rakib khan', 'Bangladeshi', 'Amina akter', 'Bangladeshi', 'sylhet', 'sylhet'),
(2, '2019-09-23', '2019-09-23', '236587694837', 'hfuwhr', '2019-09-23', 'hfsuhg', 'ojbut89bh', 'vbuisr', 'bvuiwrg', 'bcyuwg', 'bcvyeg', 'bveyg', 'aj89rut');

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
(1, '1998-04-24', '1998-04-24', 234561789, 'dfffauyg', '1998-04-24', 'make', 'fheuihgfhh', 'guyfdayue', 'fgyuegrfg', 'gdyubcyuegr', 'guydetgfuyg', 'fegufyyugf', 'ugfyedgfuyg'),
(4, '2019-09-23', '2019-09-23', 2147483647, 'hfuwhr', '2019-09-23', 'hfsuhg', 'ojbut89bh', 'vbuisr', 'bvuiwrg', 'bcyuwg', 'bcvyeg', 'bveyg', 'aj89rut');

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
  `us_name` varchar(50) NOT NULL,
  `us_email` varchar(100) NOT NULL,
  `us_password` text NOT NULL,
  `us_verification_key` varchar(100) NOT NULL,
  `us_is_email_verified` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `us_name`, `us_email`, `us_password`, `us_verification_key`, `us_is_email_verified`) VALUES
(7, 'sayeda', 'sayedacchowdhury@gmail.com', '37f525bf681753752af3ace6b85f1432d53e784e6d52ce05d8101c40232ab55dd3f2cdadda58686450f576aeed0b9abca6c96568e3219204fe8b616c5f6d6636fPkHIJ7UxOccXbGSWl/2pzH2V3yeXxZrB0NP2sideqo=', '7be07df41ec99be9a68a630115f7bded', 'yes');

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
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `tbl_admin_view`
--
ALTER TABLE `tbl_admin_view`
  ADD PRIMARY KEY (`br_id`);

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
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `ad_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_admin_view`
--
ALTER TABLE `tbl_admin_view`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_birth_register`
--
ALTER TABLE `tbl_birth_register`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_vaccine`
--
ALTER TABLE `tbl_vaccine`
  MODIFY `vac_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
