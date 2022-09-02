-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2022 at 10:05 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(11) NOT NULL,
  `cshort` varchar(80) CHARACTER SET utf16 NOT NULL,
  `cfull` varchar(100) CHARACTER SET utf32 NOT NULL,
  `cdate` varchar(100) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `cshort`, `cfull`, `cdate`) VALUES
(19, 'dss', 'datastructuer', '01-09-2022'),
(27, 'co', 'compiler', '02-09-2022');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(80) CHARACTER SET utf16 NOT NULL,
  `password` varchar(100) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `password`) VALUES
(1, 'zead', '1234'),
(2, 'mohamed', '12345'),
(3, 'darwish', '135');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(80) CHARACTER SET utf16 NOT NULL,
  `middlename` varchar(100) CHARACTER SET utf16 NOT NULL,
  `lastname` varchar(100) CHARACTER SET utf16 NOT NULL,
  `gender` varchar(50) CHARACTER SET utf16 NOT NULL,
  `nationality` varchar(100) CHARACTER SET utf16 NOT NULL,
  `famillyincome` varchar(60) CHARACTER SET utf16 NOT NULL,
  `mobillenumber` varchar(100) CHARACTER SET utf16 NOT NULL,
  `emailid` varchar(100) CHARACTER SET utf32 NOT NULL,
  `occupation` varchar(70) CHARACTER SET utf16 NOT NULL,
  `category` varchar(80) CHARACTER SET utf16 NOT NULL,
  `physically` varchar(30) NOT NULL,
  `guardianname` varchar(60) CHARACTER SET utf16 NOT NULL,
  `cshort` varchar(100) CHARACTER SET utf16 NOT NULL,
  `sub` varchar(80) CHARACTER SET utf16 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `middlename`, `lastname`, `gender`, `nationality`, `famillyincome`, `mobillenumber`, `emailid`, `occupation`, `category`, `physically`, `guardianname`, `cshort`, `sub`) VALUES
(12, 'zead', 'ahmed', 'darwish', 'other', 'egypt', '500000', '037467543', 'zy@yahoo.com', 'computer', 'sc', 'no', 'mohamed', '12', 'zezo');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `cfull` varchar(100) CHARACTER SET utf16 NOT NULL,
  `sub1` varchar(80) CHARACTER SET utf16 NOT NULL,
  `sub2` varchar(80) CHARACTER SET utf32 NOT NULL,
  `sub3` varchar(80) CHARACTER SET utf16 NOT NULL,
  `cshort` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `cfull`, `sub1`, `sub2`, `sub3`, `cshort`) VALUES
(3, 'datastructuer', 'zeaze', 'od', 'rrr', 19),
(4, 'datastructuer', 'zx', 'is', 'simulation', 19);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
