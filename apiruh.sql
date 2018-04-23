-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2018 at 02:48 AM
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
  `client_id` int(20) NOT NULL,
  `client_name` text NOT NULL,
  `client_addr` text NOT NULL,
  `client_poc` text NOT NULL,
  `client_poc_no` int(15) NOT NULL,
  `gstin` varchar(20) NOT NULL,
  `pan_no` varchar(20) NOT NULL,
  `agreement` varchar(256) NOT NULL,
  `support_docs` varchar(256) NOT NULL,
  `pic` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`client_id`, `client_name`, `client_addr`, `client_poc`, `client_poc_no`, `gstin`, `pan_no`, `agreement`, `support_docs`, `pic`) VALUES
(10, 'dwa', 'sfavfs', 'asfaf', 0, 'fasfasf', 'safasf', 'company/dwa/HOWTOMANAGEGEMSACCOUT-1.pptx', 'company/dwa/HOWTOMANAGEGEMSACCOUT-1.pptx', 'company/dwa/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(3) NOT NULL,
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

INSERT INTO `employee` (`id`, `emp_id`, `name`, `nat_emp`, `personal_no`, `email`, `dob`, `doj`, `design`, `pan_no`, `aadhar_no`, `perm_addr`, `contct_det`, `emr_cntct_per`, `emr_cntct_no`, `blood_grp`, `qualifications`, `supprt_docs`, `serv_agr`, `offr_letter`, `emp_pic`) VALUES
(1, 'EMP01011972001', 'DEFAULT', 'ADMIN', NULL, 'sudarshan@amirineni.co.in', '09-11-1997', '01-02-2018', 'Master Admin', NULL, NULL, NULL, NULL, NULL, NULL, 'O+ve', 'Admin', NULL, NULL, NULL, ''),
(2, 'EMP110320182', 'Alma Saunders', 'Employee', 'Quasi in quia dolores voluptates quisquam sunt hic', 'kezequte@mailinator.com', '01 Mar 2018', '11 Mar 2018', 'Necessitatibus dolor amet esse magni quos ipsum voluptas quia sit', '2398742525', '501485214585', 'Consequuntur architecto anim minus irure repudiandae aliquam dolore et inventore sint nulla omnis tempor obcaecati ut', 'Quasi in quia dolores voluptates quisquam sunt hic occaecat vitae sint dolorem provident totam nulla', 'Nostrum at est eligendi occaecat rerum dolor velit voluptas in est dolorem nisi dolore occaecat ut et aspernatur mollitia', 'Id sed et vero et aliqua', 'O -', 'Velit omnis nisi laudantium at reprehenderit a', 'employee/Alma Saunders', '', 'employee/Alma Saunders', 'employee/Alma Saunders');

-- --------------------------------------------------------

--
-- Table structure for table `emp_leaves`
--

CREATE TABLE `emp_leaves` (
  `emp_id` varchar(256) NOT NULL,
  `paid_leaves` int(3) NOT NULL,
  `unpaid_leaves` int(3) NOT NULL,
  `earned_leaves` int(3) NOT NULL,
  `counter` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `emp_leaves`
--

INSERT INTO `emp_leaves` (`emp_id`, `paid_leaves`, `unpaid_leaves`, `earned_leaves`, `counter`) VALUES
('EMP01011972001', 10, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `holidays`
--

CREATE TABLE `holidays` (
  `hol_id` int(20) NOT NULL,
  `hol_title` varchar(256) NOT NULL,
  `hol_type` text NOT NULL,
  `hol_desc` text NOT NULL,
  `hol_start` date NOT NULL,
  `hol_end` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `holidays`
--

INSERT INTO `holidays` (`hol_id`, `hol_title`, `hol_type`, `hol_desc`, `hol_start`, `hol_end`) VALUES
(2, 'TEst', 'Public Holiday', 'waefsgrd', '2018-02-20', '2018-02-23'),
(3, 'Test2', 'Admin Defined', 'Officia illo at consequatur Numquam enim omnis', '2018-03-01', '2018-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `leaves`
--

CREATE TABLE `leaves` (
  `leave_id` int(11) NOT NULL,
  `status` int(2) NOT NULL DEFAULT '0',
  `emp_id` varchar(256) NOT NULL,
  `title` varchar(500) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `day_type` varchar(100) NOT NULL,
  `leave_type` varchar(100) NOT NULL,
  `reason` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=ascii;

--
-- Dumping data for table `leaves`
--

INSERT INTO `leaves` (`leave_id`, `status`, `emp_id`, `title`, `start`, `end`, `day_type`, `leave_type`, `reason`) VALUES
(1, 1, 'EMP01011972001', 'Test', '2018-02-01', '2018-02-10', 'Half Day', 'Unpaid', 'Reason test'),
(2, 2, 'EMP01011972001', 'Dolor et est consectetur veniam est aspernatur eiusmod adipisicing commodi autem Nam', '2009-10-12', '1976-10-06', 'Full Day', 'Unpaid', 'Est harum ullam exercitation ullamco harum et placeat consectetur voluptates'),
(3, 1, 'EMP01011972001', 'Testing', '2018-02-01', '2018-02-24', 'Full Day', 'Paid', 'dsvxfcgn'),
(4, 0, 'EMP01011972001', 'Final Leave', '2018-03-01', '2018-04-07', 'Half Day', 'Unpaid', 'Vacation'),
(5, 1, 'EMP01011972001', 'Maiores et quae at incididunt unde', '2013-12-05', '2013-12-09', 'Full Day', 'Unpaid', 'Non dicta sapiente reprehenderit alias voluptas mollit facilis reprehenderit duis aliquid voluptatem aliquam accusamus quod');

-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

CREATE TABLE `privileges` (
  `emp_id` varchar(200) NOT NULL,
  `privilege` int(2) NOT NULL
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
  `status_id` int(200) NOT NULL,
  `client_id` varchar(256) NOT NULL,
  `emp_id` varchar(256) NOT NULL,
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
-- Dumping data for table `status_report`
--

INSERT INTO `status_report` (`status_id`, `client_id`, `emp_id`, `status_date`, `start_time`, `end_time`, `work_hrs`, `work_status`, `nat_work`, `work_subject`, `billed`, `add_comments`, `work_details`, `remarks`, `remb`) VALUES
(1, '10', 'EMP01011972001', '2018-04-11', '11:30:00', '11:30:00', 10, 'Completed', 'NOW 1', 'Subject 1', 'Yes', 'wqgew', 'fqgwg', 'egw', 0),
(2, '10', 'EMP01011972001', '2018-04-11', '12:00:00', '21:00:00', 9, 'Scheduled', 'NOW 4', 'Subject 2', 'No', 'Dolor ducimus eligendi magnam rerum ut suscipit in inventore id consectetur', 'Aspernatur placeat aut aut et non qui deserunt blanditiis nulla suscipit qui explicabo Ut quasi cupidatat consectetur repudiandae', 'Est qui optio magni autem eaque voluptate blanditiis voluptas enim ipsa ea laboris autem nisi et pariatur Perferendis', 0),
(3, '10', 'EMP01011972001', '0000-00-00', '00:00:00', '00:00:00', 0, 'Ongoing', 'NOW 3', 'Subject 2', 'No', 'Vel veniam ipsam magni libero consequatur', 'Nisi culpa do dolore commodi consequatur eligendi commodi unde facere ullam', 'Perspiciatis explicabo Voluptatum minima placeat eos maiores commodi quam quisquam', 0),
(4, '10', 'EMP01011972001', '2018-04-12', '00:00:00', '00:00:00', 0, 'Ongoing', 'NOW 3', 'Subject 2', 'No', 'Vel veniam ipsam magni libero consequatur', 'Nisi culpa do dolore commodi consequatur eligendi commodi unde facere ullam', 'Perspiciatis explicabo Voluptatum minima placeat eos maiores commodi quam quisquam', 0),
(5, '10', 'EMP01011972001', '2017-12-14', '09:10:00', '03:30:00', -6, 'Ongoing', 'NOW 3', 'Subject 4', 'No', 'Facere soluta aspernatur sit quo libero omnis reiciendis sint vero consequat Consectetur a ea', 'Optio ipsum id sint quo nulla officiis sunt incidunt similique qui commodi beatae ullam cillum non', 'Laborum Commodi cupiditate autem ducimus harum dolores quos aliquid est incidunt ipsam', 0),
(6, '10', 'EMP01011972001', '2018-04-14', '09:10:00', '15:15:00', 6, 'Scheduled', 'NOW 2', 'Subject 2', 'No', 'Maiores ut laboriosam sint laborum hic qui iure quo ut id aspernatur sed quisquam itaque consectetur aut', 'Deserunt laborum Cillum esse Nam laborum Minima sit at possimus vitae voluptas', 'Elit eius animi minima veritatis explicabo Pariatur Consequatur rerum sed aut voluptate assumenda et', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`client_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emp_id` (`emp_id`);

--
-- Indexes for table `emp_leaves`
--
ALTER TABLE `emp_leaves`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `holidays`
--
ALTER TABLE `holidays`
  ADD PRIMARY KEY (`hol_id`);

--
-- Indexes for table `leaves`
--
ALTER TABLE `leaves`
  ADD PRIMARY KEY (`leave_id`);

--
-- Indexes for table `privileges`
--
ALTER TABLE `privileges`
  ADD PRIMARY KEY (`emp_id`);

--
-- Indexes for table `status_report`
--
ALTER TABLE `status_report`
  ADD PRIMARY KEY (`status_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `client_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `holidays`
--
ALTER TABLE `holidays`
  MODIFY `hol_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `leaves`
--
ALTER TABLE `leaves`
  MODIFY `leave_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `status_report`
--
ALTER TABLE `status_report`
  MODIFY `status_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
