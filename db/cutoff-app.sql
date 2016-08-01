-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2016 at 07:33 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cutoff-app`
--

-- --------------------------------------------------------

--
-- Table structure for table `branches`
--

CREATE TABLE IF NOT EXISTS `branches` (
`BRANCH_ID` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branches`
--

INSERT INTO `branches` (`BRANCH_ID`, `NAME`) VALUES
(1, 'Civil Engineering'),
(2, 'Computer Science and Engineering'),
(3, 'Information Technology'),
(4, 'Electrical Engineering'),
(5, 'Electronics Design Technology'),
(6, 'Electronics and Communication Engineering'),
(7, 'Electronics Engineering'),
(8, 'Industrial Engineering'),
(9, 'Mechanical Engineering'),
(10, 'Electronics Engineering'),
(11, 'Computer Technology'),
(12, 'Bio Technology'),
(13, 'Chemical Engineering'),
(14, 'Power Engineering'),
(15, 'Mining Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
`CATEGORY_ID` int(11) NOT NULL,
  `NAME` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`CATEGORY_ID`, `NAME`) VALUES
(1, 'OPEN'),
(2, 'SC'),
(3, 'ST'),
(4, 'NT1'),
(5, 'NT2'),
(6, 'NT3'),
(7, 'OBC'),
(8, 'SBC/OBC'),
(9, 'AI');

-- --------------------------------------------------------

--
-- Table structure for table `colleges`
--

CREATE TABLE IF NOT EXISTS `colleges` (
`COLLEGES_ID` int(11) NOT NULL,
  `NAME` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `colleges`
--

INSERT INTO `colleges` (`COLLEGES_ID`, `NAME`) VALUES
(1, 'Ankush Shikshan Sanstha''s G.H.Raisoni College of Engineering, Nagpur'),
(2, 'Shri Ramdeobaba College of Engineering and Management, Nagpur'),
(3, 'Yeshwantrao Chavan College of Engineering,Wanadongri, Nagpur'),
(4, 'Priyadarshini Institute of Engineering and Technology, Nagpur'),
(5, 'K.D.K. College of Engineering, Nagpur'),
(6, 'Rajiv Gandhi College of Engineering & Research, Hingna Road, Nagpur');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE IF NOT EXISTS `master` (
`MASTER_ID` int(11) NOT NULL,
  `COLLEGE` int(11) NOT NULL,
  `BRANCH` int(11) NOT NULL,
  `QUOTA` int(11) NOT NULL,
  `OPEN` int(11) NOT NULL,
  `SC` int(11) NOT NULL,
  `ST` int(11) NOT NULL,
  `VJ` int(11) NOT NULL,
  `NT1` int(11) NOT NULL,
  `NT2` int(11) NOT NULL,
  `NT3` int(11) NOT NULL,
  `OBC` int(11) NOT NULL,
  `AI` int(11) NOT NULL,
  `CREATED_AT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `quotas`
--

CREATE TABLE IF NOT EXISTS `quotas` (
`QUOTA_ID` int(5) NOT NULL,
  `NAME` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quotas`
--

INSERT INTO `quotas` (`QUOTA_ID`, `NAME`) VALUES
(1, 'GOPENH'),
(2, 'LOPENH'),
(3, 'GOPENO'),
(4, 'LOPENO'),
(5, 'DEFO'),
(6, 'AI'),
(7, 'PHCO'),
(8, 'GSCH'),
(9, 'GSTH'),
(10, 'GVJH'),
(11, 'GNT1H'),
(12, 'GNT3H'),
(13, 'GOBCH'),
(14, 'LSCH'),
(15, 'LSTH'),
(16, 'GSCO'),
(17, 'GSTO'),
(18, 'GVJO'),
(19, 'GNT2O'),
(20, 'GOBCO'),
(21, 'LSCO'),
(22, 'LNT1O'),
(23, 'LVJH'),
(24, 'LOBCO'),
(25, 'GNT2H'),
(26, 'LNT1H');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branches`
--
ALTER TABLE `branches`
 ADD PRIMARY KEY (`BRANCH_ID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`CATEGORY_ID`);

--
-- Indexes for table `colleges`
--
ALTER TABLE `colleges`
 ADD PRIMARY KEY (`COLLEGES_ID`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
 ADD PRIMARY KEY (`MASTER_ID`);

--
-- Indexes for table `quotas`
--
ALTER TABLE `quotas`
 ADD PRIMARY KEY (`QUOTA_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branches`
--
ALTER TABLE `branches`
MODIFY `BRANCH_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
MODIFY `CATEGORY_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `colleges`
--
ALTER TABLE `colleges`
MODIFY `COLLEGES_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
MODIFY `MASTER_ID` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `quotas`
--
ALTER TABLE `quotas`
MODIFY `QUOTA_ID` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
