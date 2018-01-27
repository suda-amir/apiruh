-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2018 at 07:05 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

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
  `empid` varchar(15) DEFAULT NULL,
  `name` varchar(500) DEFAULT NULL,
  `nat_emp` varchar(100) DEFAULT NULL,
  `personal_no` varchar(50) DEFAULT NULL,
  `dob` varchar(50) DEFAULT NULL,
  `doj` varchar(50) DEFAULT NULL,
  `design` varchar(200) DEFAULT NULL,
  `pan_no` varchar(10) DEFAULT NULL,
  `aadhar_no` int(12) DEFAULT NULL,
  `perm_addr` varchar(5000) DEFAULT NULL,
  `contct_det` varchar(100) DEFAULT NULL,
  `emr_cntct_per` varchar(200) DEFAULT NULL,
  `emr_cntct_no` varchar(100) DEFAULT NULL,
  `blood_grp` varchar(100) DEFAULT NULL,
  `qualifications` varchar(500) DEFAULT NULL,
  `supprt_docs` varchar(1000) DEFAULT NULL,
  `serv_agr` varchar(500) DEFAULT NULL,
  `offr_letter` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `empid` text NOT NULL,
  `paid_leaves` int(3) NOT NULL,
  `unpaid_leaves` int(3) NOT NULL,
  `earned_leaves` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `public` text NOT NULL,
  `admin_defined` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `empid` text NOT NULL,
  `priv` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

-- --------------------------------------------------------

--
-- Table structure for table `status_report`
--

CREATE TABLE `status_report` (
  `status_id` text NOT NULL,
  `emp_id` text NOT NULL,
  `client_id` text NOT NULL,
  `status_date` text NOT NULL,
  `start_time` text NOT NULL,
  `end_time` text NOT NULL,
  `work_hrs` int(3) NOT NULL,
  `work_status` text NOT NULL,
  `nat_work` text NOT NULL,
  `work_subject` text NOT NULL,
  `billed` text NOT NULL,
  `add_comments` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
