-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2018 at 05:32 PM
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
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`AdminNo`, `AdminName`, `Password`) VALUES
(3, 'JimBobo', 'f5d1278e8109edd94e1e4197e04873b9'),
(4, 'mmcclean', 'f5d1278e8109edd94e1e4197e04873b9');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `CommentNo` int(11) NOT NULL,
  `TopicNo` int(11) NOT NULL,
  `Comment` varchar(255) NOT NULL,
  `DateCreated` datetime NOT NULL,
  `CreatorNo` int(11) NOT NULL,
  `ReplyTo` int(11) DEFAULT NULL,
  `Likes` int(11) NOT NULL DEFAULT '0',
  `Deleted` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`CommentNo`, `TopicNo`, `Comment`, `DateCreated`, `CreatorNo`, `ReplyTo`, `Likes`, `Deleted`) VALUES
(3, 49, 'Hello Andrew', '2018-04-18 00:00:00', 84, NULL, 3, 0),
(5, 49, 'Hello!', '2018-04-18 00:00:00', 86, NULL, 2, 0),
(7, 11, 'Test', '2018-04-18 00:00:00', 84, NULL, 0, 0),
(8, 11, 'Test2', '2018-04-18 00:00:00', 84, NULL, 0, 0),
(9, 49, 'Test', '2018-04-18 00:00:00', 84, NULL, 0, 0),
(11, 17, 'Hello Matthew', '2018-04-18 00:00:00', 84, NULL, 5, 0),
(12, 49, 'Test24', '2018-04-18 16:04:06', 84, NULL, 0, 0),
(14, 49, 'Test', '2018-04-18 18:04:32', 86, 3, 0, 0),
(16, 49, 'Test Reply', '2018-04-18 19:04:08', 86, 14, 0, 0),
(17, 22, 'Hello Jaime', '2018-04-19 13:04:26', 86, NULL, 1, 0),
(18, 50, '[deleted]', '2018-04-19 16:04:03', 86, NULL, 0, 1),
(19, 50, '[deleted]', '2018-04-19 16:04:38', 86, NULL, 0, 1),
(20, 50, 'Reply', '2018-04-19 16:04:46', 86, 19, 0, 0),
(21, 50, '[deleted]', '2018-04-19 16:04:30', 86, NULL, 0, 1),
(22, 50, 'REply2', '2018-04-19 16:04:57', 86, 21, 0, 0);

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
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `CommentNo` int(11) NOT NULL,
  `MemberNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`CommentNo`, `MemberNo`) VALUES
(3, 84),
(3, 86),
(5, 84),
(10, 84),
(11, 84),
(15, 86),
(17, 86);

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
(1, 84, '2018-04-11', '09:20:00', 'Library Room 4', 'Team Project'),
(2, 86, '2018-04-19', '20:03:00', 'Library Room 1', 'Test');

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
(86, 'Matthew', 'Mcclean', 'matthew_mcclean_1_2_3', 'Mmcclean6@gmail.com', 'f5d1278e8109edd94e1e4197e04873b9', '2018-04-11', 1, 'assets/images/profile_pics/defaults/head_deep_blue.png'),
(87, 'Jim', 'Bob', 'jim_bob', 'Jimbob@gmail.com', 'f5d1278e8109edd94e1e4197e04873b9', '2018-04-12', 1, 'assets/images/profile_pics/defaults/head_emerald.png'),
(88, 'Jimb', 'Ob', 'jimb_ob', 'Jimbob1@gmail.com', 'f5d1278e8109edd94e1e4197e04873b9', '2018-04-12', 1, 'assets/images/profile_pics/defaults/head_emerald.png');

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
  `DateCreated` datetime NOT NULL,
  `CreatorNo` int(11) NOT NULL,
  `ModuleNo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `topic`
--

INSERT INTO `topic` (`TopicNo`, `TopicName`, `Details`, `DateCreated`, `CreatorNo`, `ModuleNo`) VALUES
(11, 'Test8', '', '2018-02-28 00:00:00', 0, 1),
(13, 'Test9', '', '2018-02-28 00:00:00', 0, 1),
(14, 'Test10', '', '2018-02-28 00:00:00', 0, 1),
(16, 'tet11', '', '2018-02-28 00:00:00', 0, 1),
(17, 'test12', '', '2018-02-28 00:00:00', 0, 1),
(18, 'Test13', '', '2018-02-28 00:00:00', 0, 1),
(19, 'Test14', '', '2018-02-28 00:00:00', 0, 1),
(21, 'test15', '', '2018-02-28 00:00:00', 0, 1),
(22, 'hi guys', '', '2018-03-01 00:00:00', 0, 2),
(23, 'chant', '', '2018-03-02 00:00:00', 0, 1),
(27, 'maths', '', '0000-00-00 00:00:00', 0, 0),
(29, 'trig', '', '0000-00-00 00:00:00', 0, 0),
(30, 'test', '', '2018-03-14 00:00:00', 0, 1),
(31, 'test51', '', '2018-03-14 00:00:00', 51, 1),
(32, 'TestA', 'faafafa', '2018-03-14 00:00:00', 51, 1),
(33, 'TestA', 'faafafa', '2018-03-14 00:00:00', 51, 1),
(34, 'TestA', 'faafafa', '2018-03-14 00:00:00', 51, 1),
(35, 'TestB', 'afjkalfjaj', '2018-03-14 00:00:00', 51, 1),
(36, 'TestC', 'Hello', '2018-03-14 00:00:00', 51, 1),
(37, 'test', 'Hello', '2018-03-19 00:00:00', 51, 2),
(38, 'hello', '', '2018-03-21 00:00:00', 51, 1),
(39, 'test', '', '2018-03-21 00:00:00', 51, 1),
(40, 'Hello', '', '2018-03-21 00:00:00', 51, 1),
(41, 'How to make HTML work?', '', '2018-03-21 00:00:00', 51, 2),
(42, 'New Topic', 'Afadadad', '2018-04-12 00:00:00', 84, 1),
(43, 'Maths ', 'Greate job', '2018-04-12 00:00:00', 84, 1),
(44, 'Test4194092887', '', '2018-04-12 00:00:00', 84, 1),
(45, 'Test094-81408', '', '2018-04-12 00:00:00', 87, 1),
(46, 'Test', 'TEs', '2018-04-12 00:00:00', 88, 1),
(47, 'Hello World', 'Tester', '2018-04-12 00:00:00', 87, 1),
(48, 'Test 3Million', 'Testy test', '2018-04-18 00:00:00', 84, 1),
(49, 'Topic 87', 'A Topic', '2018-04-18 00:00:00', 84, 1),
(50, '%ladja', 'Hello', '2018-04-18 16:04:10', 84, 1),
(51, 'Shane', 'Hello', '2018-04-19 13:04:35', 86, 4),
(52, '', '', '2018-04-19 15:04:24', 86, 1),
(53, '', '', '2018-04-19 15:04:34', 86, 1);

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
  ADD PRIMARY KEY (`CommentNo`);

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
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`CommentNo`,`MemberNo`);

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
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `CommentNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `CourseNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `meeting`
--
ALTER TABLE `meeting`
  MODIFY `MeetingNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
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
  MODIFY `TopicNo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
