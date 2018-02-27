-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2018 at 09:37 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apiruh`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `client_id` text NOT NULL,
  `client_name` text NOT NULL,
  `client_addr` text NOT NULL,
  `client_poc` text NOT NULL,
  `client_poc_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(15) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `nat_emp` varchar(100) DEFAULT NULL,
  `personal_no` varchar(50) DEFAULT NULL,
  `email` varchar(256) NOT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `doj` varchar(50) DEFAULT NULL,
  `design` varchar(200) DEFAULT NULL,
  `pan_no` varchar(10) DEFAULT NULL,
  `aadhar_no` varchar(20) DEFAULT NULL,
  `perm_addr` varchar(5000) DEFAULT NULL,
  `contct_det` varchar(100) DEFAULT NULL,
  `emr_cntct_per` varchar(200) DEFAULT NULL,
  `emr_cntct_no` varchar(100) DEFAULT NULL,
  `blood_grp` varchar(100) DEFAULT NULL,
  `qualifications` varchar(500) DEFAULT NULL,
  `supprt_docs` varchar(1000) DEFAULT NULL,
  `serv_agr` varchar(500) DEFAULT NULL,
  `offr_letter` varchar(500) DEFAULT NULL,
  `emp_pic` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `nat_emp`, `personal_no`, `email`, `dob`, `doj`, `design`, `pan_no`, `aadhar_no`, `perm_addr`, `contct_det`, `emr_cntct_per`, `emr_cntct_no`, `blood_grp`, `qualifications`, `supprt_docs`, `serv_agr`, `offr_letter`, `emp_pic`) VALUES
('EMP01011972001', 'DEFAULT', 'ADMIN', NULL, 'sudarshan@amirineni.co.in', '09-11-1997', '01-02-2018', 'Master Admin', NULL, NULL, NULL, NULL, NULL, NULL, 'O+ve', 'Admin', NULL, NULL, NULL, '');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `emp_id` text NOT NULL,
  `paid_leaves` int(3) NOT NULL,
  `unpaid_leaves` int(3) NOT NULL,
  `earned_leaves` int(3) NOT NULL,
  `counter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `hol_type` text NOT NULL,
  `hol_date` date NOT NULL,
  `hol_desc` text NOT NULL,
  `hol_start` date NOT NULL,
  `hol_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL,
  `emp_id` varchar(256) NOT NULL,
  `title` varchar(500) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `day_type` varchar(100) NOT NULL,
  `leave_type` varchar(100) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `emp_id` text NOT NULL,
  `priv` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `reimbursement`
--

CREATE TABLE `reimbursement` (
  `rem_id` text NOT NULL,
  `status_id` text NOT NULL,
  `rem_desc` text NOT NULL,
  `approval` int(2) NOT NULL DEFAULT '0',
  `rem_suprt` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `status_report`
--

CREATE TABLE `status_report` (
  `status_id` text NOT NULL,
  `emp_id` text NOT NULL,
  `client_id` text NOT NULL,
  `status_date` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `work_hrs` int(3) NOT NULL,
  `work_status` text NOT NULL,
  `nat_work` text NOT NULL,
  `work_subject` text NOT NULL,
  `billed` text NOT NULL,
  `add_comments` text NOT NULL,
  `work_details` text NOT NULL,
  `remarks` text NOT NULL,
  `remb` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
