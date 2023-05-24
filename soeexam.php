-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 08:08 AM
-- Server version: 5.6.24
-- PHP Version: 5.5.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `soeexam`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `std_ID` int(11) NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `programe` varchar(255) DEFAULT NULL,
  `address` varchar(50) NOT NULL,
  `symbolNO` varchar(40) NOT NULL,
  `total_qn` int(10) NOT NULL,
  `corect_qn` int(11) NOT NULL,
  `marks` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`std_ID`, `first_name`, `middle_name`, `last_name`, `programe`, `address`, `symbolNO`, `total_qn`, `corect_qn`, `marks`) VALUES
(47, 'Sujan', 'Bahadur', 'Gaire', 'Civil', 'Bayarghari', '2394357', 5, 0, 0),
(50, '', '', '', 'Civil', '', '2394358', 5, 0, 0),
(52, 'lokesh', '', 'gurung', 'Civil', 'usa', '2394360', 5, 3, 60),
(53, 'Sagar', '', 'Gurung', 'Software', 'lekhnath', '2394369', 5, 4, 80),
(55, 'Kusum', '', 'Gurung', 'Civil', 'Bayarghari', '2394364', 5, 0, 0),
(57, 'Milan', '', 'Kafle', 'Computer', 'Bayarghari', '2394366', 5, 5, 100),
(58, 'Milan', '', 'Gurung', 'Civil', 'Walling', '2394366', 5, 5, 100),
(59, 'Saroj', '', 'Paudel', 'Software', 'Chauthey', '2394367', 5, 3, 60),
(60, 'rikesh', 'swag', 'baniya', 'Software', 'damside', '2394368', 5, 1, 20),
(61, 'Sagar', '', 'Gurung', 'Software', 'Pokhara', '2394369', 5, 4, 80),
(62, 'nigga', 'kumar', 'xakka', 'Software', 'mars', '2394371', 5, 4, 80),
(63, 'nigga', 'kumar', 'xakka', 'Software', 'mars', '2394371', 5, 4, 80);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`std_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `std_ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;