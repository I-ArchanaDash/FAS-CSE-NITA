-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2022 at 06:31 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fasdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admintb`
--

CREATE TABLE `admintb` (
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admintb`
--

INSERT INTO `admintb` (`username`, `password`) VALUES
('admin', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `cid` int(20) NOT NULL,
  `course` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`cid`, `course`) VALUES
(1, 'MTech (AI)'),
(2, 'MTech (DS)'),
(3, 'MTech (CS)'),
(4, 'MCA'),
(5, 'BTech');

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `prog` text NOT NULL,
  `sem` int(5) NOT NULL,
  `code` varchar(20) NOT NULL,
  `subName` text NOT NULL,
  `credits` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`prog`, `sem`, `code`, `subName`, `credits`) VALUES
('MCA', 1, 'MCA01C01', 'Data and File Structures', 4),
('MCA', 1, 'MCA01C02', 'DIGITAL CIRCUIT AND LOGIC DESIGN', 4),
('MCA', 1, 'MCA01C03', 'DISCRETE MATHEMATICAL  STRUCTURE', 4),
('MCA', 1, 'MCA01C04', 'Web Technology', 4),
('MCA', 1, 'MCA01H01', 'PRINCIPLES OF MANAGEMENT AND  PRACTICES', 3);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `pid` int(11) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `password` varchar(30) NOT NULL,
  `cpassword` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`pid`, `fname`, `lname`, `email`, `contact`, `password`, `cpassword`) VALUES
(1, 'john', 'doe', 'john@gmail.com', '9876543210', 'john123', 'john123'),
(2, 'charlie', 'puth', 'charlie@gmail.com', '6543217890', 'char123', 'char123'),
(3, 'Jane', 'Doe', 'jane@gmail.com', '9070897653', 'jane123', 'jane123'),
(4, 'Archana', 'Dash', 'archanadash@gmail.com', '3567770001', 'arch123', 'arch123'),
(7, 'Kunal', '', 'kc@gmail.com', '8788787889', 'kc12345', 'kc12345');

-- --------------------------------------------------------

--
-- Table structure for table `hod`
--

CREATE TABLE `hod` (
  `username` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hod`
--

INSERT INTO `hod` (`username`, `email`, `password`) VALUES
('Mrinal Kanti Debbarma', 'mkdb@gmail.com', 'mkdb123');

-- --------------------------------------------------------

--
-- Table structure for table `hodhist`
--

CREATE TABLE `hodhist` (
  `sno` int(11) NOT NULL,
  `hodName` text NOT NULL,
  `email` varchar(20) NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `publication`
--

CREATE TABLE `publication` (
  `type` varchar(100) NOT NULL,
  `title` text NOT NULL,
  `auth` varchar(100) NOT NULL,
  `vol` int(10) NOT NULL,
  `issue` int(10) NOT NULL,
  `year` year(4) NOT NULL,
  `ind` varchar(10) NOT NULL,
  `publ` varchar(100) NOT NULL,
  `isn` varchar(20) DEFAULT NULL,
  `faculty` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `publication`
--

INSERT INTO `publication` (`type`, `title`, `auth`, `vol`, `issue`, `year`, `ind`, `publ`, `isn`, `faculty`) VALUES
('Journal', 'Lorem ipsum dolor sit amet.', 'Manas', 23, 3, 2022, 'others', 'SN Computer Science, Springer', '2007-9737', 'john doe'),
('conf', 'sdfsfsdfdf', 'gdfgdfgf', 1, 0, 2021, 'SCI', 'loreeemmsdfjdsjfhjd', 'isbn', 'john doe'),
('conf', 'sdfsfsdfdf', 'gdfgdfgf', 1, 0, 2021, 'SCI', 'loreeemmsdfjdsjfhjd', 'isbn', 'john doe'),
('conf', 'sdfsfsdfdf', 'gdfgdfgf', 1, 0, 2021, 'SCI', 'loreeemmsdfjdsjfhjd', 'isbn', 'john doe'),
('conf', 'sdfsfsdfdf', 'gdfgdfgf', 1, 0, 2021, 'SCI', 'loreeemmsdfjdsjfhjd', 'isbn', 'john doe'),
('conf', 'sdfsfsdfdf', 'gdfgdfgf', 1, 0, 2021, 'SCI', 'loreeemmsdfjdsjfhjd', 'isbn', 'john doe'),
('conf', 'sdfsfsdfdf', 'gdfgdfgf', 1, 0, 2021, 'SCI', 'loreeemmsdfjdsjfhjd', 'isbn', 'john doe'),
('Conference', 'dsfsdfds', 'sssdsad', 0, 0, 2022, 'SCI', 'gvggfhfzas', 'ISBN', 'john doe');

-- --------------------------------------------------------

--
-- Table structure for table `responsibility`
--

CREATE TABLE `responsibility` (
  `sno` int(10) NOT NULL,
  `respArea` text DEFAULT NULL,
  `resp` text NOT NULL,
  `from` date NOT NULL,
  `to` date NOT NULL,
  `faculty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `responsibility`
--

INSERT INTO `responsibility` (`sno`, `respArea`, `resp`, `from`, `to`, `faculty`) VALUES
(1, 'Institute', 'Associate dean', '2022-11-19', '2022-11-25', 'john doe');

-- --------------------------------------------------------

--
-- Table structure for table `teaching`
--

CREATE TABLE `teaching` (
  `sno` int(11) NOT NULL,
  `course` text NOT NULL,
  `sem` int(3) NOT NULL,
  `sub` text NOT NULL,
  `year` year(4) NOT NULL,
  `faculty` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teaching`
--

INSERT INTO `teaching` (`sno`, `course`, `sem`, `sub`, `year`, `faculty`) VALUES
(1, 'MTECH(AI)', 1, 'web tech', 2020, 'john doe');

-- --------------------------------------------------------

--
-- Table structure for table `thesis`
--

CREATE TABLE `thesis` (
  `sno` int(11) NOT NULL,
  `course` varchar(50) NOT NULL,
  `thesis` text NOT NULL,
  `name` text NOT NULL,
  `enroll` varchar(20) NOT NULL,
  `year` year(4) NOT NULL,
  `stype` varchar(20) NOT NULL,
  `faculty` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `thesis`
--

INSERT INTO `thesis` (`sno`, `course`, `thesis`, `name`, `enroll`, `year`, `stype`, `faculty`) VALUES
(1, 'MTECH(AI)', ' perspiciatis unde omnis iste natus ', 'Charlie', '19PCS009', 2020, 'Single', 'john doe'),
(2, 'BTech', 'Sed ut perspiciatis unde omnis iste natus error sit', 'Vaishali', '20ucs012', 2022, 'Single', 'john doe'),
(3, 'MTECH(AI)', 'Succinct Representation of Privacy Policy Documents', 'Charkie', '20pcs12', 2021, 'Single', 'john doe');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `hodhist`
--
ALTER TABLE `hodhist`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `responsibility`
--
ALTER TABLE `responsibility`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `teaching`
--
ALTER TABLE `teaching`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `thesis`
--
ALTER TABLE `thesis`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `cid` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `hodhist`
--
ALTER TABLE `hodhist`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `responsibility`
--
ALTER TABLE `responsibility`
  MODIFY `sno` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `teaching`
--
ALTER TABLE `teaching`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `thesis`
--
ALTER TABLE `thesis`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
