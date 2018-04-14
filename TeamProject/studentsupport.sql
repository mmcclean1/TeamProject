-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 12, 2018 at 05:02 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentsupport`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `AdminNo` int(11) NOT NULL,
  `AdminName` varchar(255) NOT NULL,
  `Password` varchar(255) NOT NULL,
  `user_lastname` varchar(255) NOT NULL,
  `created_at` date NOT NULL,
  `addedby` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminNo`, `AdminName`, `Password`, `user_lastname`, `created_at`, `addedby`) VALUES
(3, 'JimBobo', '7ddf32e17a6ac5ce04a8ecbf782ca509', '', '0000-00-00', ''),
(4, 'mmcclean', 'f5d1278e8109edd94e1e4197e04873b9', '', '0000-00-00', '');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `Comment_id` int(11) NOT NULL,
  `TopicNo` int(11) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `dateCreated` date NOT NULL,
  `creatorNo` int(11) NOT NULL,
  `replyTo` int(11) DEFAULT NULL,
  `likes` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`Comment_id`, `TopicNo`, `Comment`, `dateCreated`, `creatorNo`, `replyTo`, `likes`) VALUES
(0, 0, '', '2018-04-12', 84, NULL, 0),
(1, 0, 'hi everhone', '0000-00-00', 23, NULL, 0),
(4, 0, 'hi everhone', '2018-02-15', 24, NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `CourseNo` int(11) NOT NULL,
  `CourseName` varchar(255) NOT NULL,
  `Length` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`CourseNo`, `CourseName`, `Length`) VALUES
(1, 'BSc Computing', 3),
(2, 'Cloud', 3),
(3, 'Gaming', 3),
(5, 'Digital Forensics', 2);

-- --------------------------------------------------------

--
-- Table structure for table `coursemodule`
--

CREATE TABLE `coursemodule` (
  `CourseNo` int(11) NOT NULL,
  `ModuleNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursemodule`
--

INSERT INTO `coursemodule` (`CourseNo`, `ModuleNo`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 9),
(2, 1),
(3, 1),
(5, 1);

-- --------------------------------------------------------

--
-- Table structure for table `meeting`
--

CREATE TABLE `meeting` (
  `MeetingNo` int(11) NOT NULL,
  `CreatorNo` int(11) NOT NULL,
  `Date` date NOT NULL,
  `time` time NOT NULL,
  `room` varchar(255) NOT NULL,
  `details` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `meeting`
--

INSERT INTO `meeting` (`MeetingNo`, `CreatorNo`, `Date`, `time`, `room`, `details`) VALUES
(1, 84, '2018-04-11', '09:20:00', 'Library Room 4', 'Team Project');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(11) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `signup_date` date NOT NULL,
  `courseNo` int(11) NOT NULL,
  `profile_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `first_name`, `last_name`, `username`, `email`, `password`, `signup_date`, `courseNo`, `profile_pic`) VALUES
(51, 'Matthew', 'Mcclean', 'matthew_mcclean', 'Mmcclean@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', '2018-02-25', 1, ''),
(61, 'Johnlee', 'Heaney', 'johnlee_heaney', 'L00063777@student.lyit.ie', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-03-01', 1, ''),
(76, 'Rihana', 'Roo', 'rihana_roo', 'Rooch@hotmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-03-02', 1, 'assets/images/profile_pics/defaults/head_emerald.png'),
(79, 'Marge', 'Simpson', 'marge_simpson', 'Simpson@hotmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-03-02', 1, 'assets/images/profile_pics/defaults/head_deep_blue.png'),
(80, 'John', 'West', 'john_west', 'Pass@hotmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-03-02', 1, 'newWave.jpg'),
(81, 'Jen', 'Jenny', 'jen_jenny', 'Jenny@hotmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-03-05', 1, 'assets/images/profile_pics/defaults/head_emerald.png'),
(82, 'John', 'Doe', 'john_doe', 'Doe@hotmail.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-03-07', 1, 'assets/images/profile_pics/defaults/head_deep_blue.png'),
(83, 'John', 'Hean', 'john_hean', 'Heaney@hotm.com', '5f4dcc3b5aa765d61d8327deb882cf99', '2018-03-07', 1, 'homer1.jpg'),
(84, 'Matthew', 'Mcclean', 'matthew_mcclean_1', 'Mmcclean1@gmail.com', 'f5d1278e8109edd94e1e4197e04873b9', '2018-03-30', 3, 'assets/images/profile_pics/defaults/head_emerald.png'),
(85, 'Matthew', 'Mcclean', 'matthew_mcclean_1_2', 'Mmcclean2@gmail.com', 'ae2b1fca515949e5d54fb22b8ed95575', '2018-03-30', 2, 'assets/images/profile_pics/defaults/head_deep_blue.png'),
(86, 'Matthew', 'Mcclean', 'matthew_mcclean_1_2_3', 'Mmcclean6@gmail.com', 'f5d1278e8109edd94e1e4197e04873b9', '2018-04-11', 1, 'assets/images/profile_pics/defaults/head_deep_blue.png');

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `ModuleNo` int(11) NOT NULL,
  `ModuleName` varchar(255) NOT NULL,
  `Lecturer` varchar(255) NOT NULL,
  `Year` int(11) NOT NULL,
  `Semester` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`ModuleNo`, `ModuleName`, `Lecturer`, `Year`, `Semester`) VALUES
(1, 'Team Project', 'Helen McMahon', 3, 1),
(2, 'Web Development', 'Edwina Sweeney', 2, 1),
(3, 'Robots', 'Thomas Devine', 1, 2),
(4, 'Networks', 'Martina Quinn', 2, 2),
(5, 'Server Side Application Development', 'Gerard McCloskey', 3, 2),
(6, 'Client Side Application Development', 'Thomas Devine', 3, 1),
(7, 'Object Orientated GUI Programming', 'Maria Boyle', 2, 2),
(9, 'Server Side Application Dev', 'Gerard McCloskey', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `ReportNo` int(11) NOT NULL,
  `ReportType` varchar(255) NOT NULL,
  `ReportContent` varchar(255) NOT NULL,
  `Status` tinyint(1) NOT NULL,
  `ContentNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `topic`
--

CREATE TABLE `topic` (
  `TopicNo` int(11) NOT NULL,
  `TopicName` varchar(255) NOT NULL,
  `Details` varchar(255) DEFAULT NULL,
  `DateCreated` date NOT NULL,
  `CreatorNo` int(11) NOT NULL,
  `ModuleNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`TopicNo`, `TopicName`, `Details`, `DateCreated`, `CreatorNo`, `ModuleNo`) VALUES
(11, 'Test8', '', '2018-02-28', 0, 1),
(13, 'Test9', '', '2018-02-28', 0, 1),
(14, 'Test10', '', '2018-02-28', 0, 1),
(16, 'tet11', '', '2018-02-28', 0, 1),
(17, 'test12', '', '2018-02-28', 0, 1),
(18, 'Test13', '', '2018-02-28', 0, 1),
(19, 'Test14', '', '2018-02-28', 0, 1),
(21, 'test15', '', '2018-02-28', 0, 1),
(22, 'hi guys', '', '2018-03-01', 0, 2),
(23, 'chant', '', '2018-03-02', 0, 1),
(27, 'maths', '', '0000-00-00', 0, 0),
(29, 'trig', '', '0000-00-00', 0, 0),
(30, 'test', '', '2018-03-14', 0, 1),
(31, 'test51', '', '2018-03-14', 51, 1),
(32, 'TestA', 'faafafa', '2018-03-14', 51, 1),
(33, 'TestA', 'faafafa', '2018-03-14', 51, 1),
(34, 'TestA', 'faafafa', '2018-03-14', 51, 1),
(35, 'TestB', 'afjkalfjaj', '2018-03-14', 51, 1),
(36, 'TestC', 'Hello', '2018-03-14', 51, 1),
(37, 'test', 'Hello', '2018-03-19', 51, 2),
(38, 'hello', '', '2018-03-21', 51, 1),
(39, 'test', '', '2018-03-21', 51, 1),
(40, 'Hello', '', '2018-03-21', 51, 1),
(41, 'How to make HTML work?', '', '2018-03-21', 51, 2),
(42, 'New Topic', 'Afadadad', '2018-04-12', 84, 1),
(43, 'Maths ', 'Greate job', '2018-04-12', 84, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`AdminNo`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`Comment_id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`CourseNo`);

--
-- Indexes for table `coursemodule`
--
ALTER TABLE `coursemodule`
  ADD PRIMARY KEY (`CourseNo`,`ModuleNo`);

--
-- Indexes for table `meeting`
--
ALTER TABLE `meeting`
  ADD PRIMARY KEY (`MeetingNo`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`ModuleNo`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`ReportNo`);

--
-- Indexes for table `topic`
--
ALTER TABLE `topic`
  ADD PRIMARY KEY (`TopicNo`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `AdminNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `MeetingNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=87;
--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `ModuleNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `ReportNo` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `topic`
--
ALTER TABLE `topic`
  MODIFY `TopicNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
