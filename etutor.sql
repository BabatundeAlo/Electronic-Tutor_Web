-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2017 at 08:57 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `uname`, `pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `business`
--

CREATE TABLE `business` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `book_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `business`
--

INSERT INTO `business` (`book_id`, `book_name`, `book`, `image`, `book_cost`, `capacity`, `status`) VALUES
(1, 'Business Management', 'Fosiya_Sh_A_Guled_ID_3795.pdf', 'bm.jpg', 2000, 4, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `engineering`
--

CREATE TABLE `engineering` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `book_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `engineering`
--

INSERT INTO `engineering` (`book_id`, `book_name`, `book`, `image`, `book_cost`, `capacity`, `status`) VALUES
(1, 'CGI Mechanics', 'amied_design_story.pdf', 'Cgi.jpg', 76768, 8, 'Available'),
(2, 'Intro to eng', 'starburn.txt', 'akrapovic_wallpaper-1920x1200-final-08.jpg', 500, 7, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `faculty_id` int(11) NOT NULL,
  `user` varchar(9000) NOT NULL,
  `pass` varchar(700) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`faculty_id`, `user`, `pass`) VALUES
(1, 'dean', 'dean');

-- --------------------------------------------------------

--
-- Table structure for table `law`
--

CREATE TABLE `law` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `book_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `law`
--

INSERT INTO `law` (`book_id`, `book_name`, `book`, `image`, `book_cost`, `capacity`, `status`) VALUES
(1, 'Crime Case 101', '12_chapter 2.pdf', 'lb.jpg', 677, 9, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `msg_id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `time` datetime NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`msg_id`, `email`, `message`, `status`, `subject`, `time`, `name`) VALUES
(1, 'alo.babatunde@gmail.com', 'Its awesome', 'Unread', 'Review', '2017-07-05 01:16:32', 'Babs'),
(2, 'egboegboprecious490@gmail.com', 'I want to request for Computer graphics book', 'Unread', 'Book needed', '2017-07-13 00:14:53', 'egboegbo'),
(3, 'alo.babatunde@gmail.com', 'Loved this project', 'Unread', 'Comment', '2017-07-13 00:16:06', 'Babatunde Alo');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `news_id` int(11) NOT NULL,
  `content` varchar(9000) NOT NULL,
  `title` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `extras` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`news_id`, `content`, `title`, `image`, `extras`, `time`) VALUES
(2, 'Hello world', 'new stuff', 'dummy-1200.jpg', 1, '2017-07-13 15:52:43'),
(0, 'the school final exams comences on monday', 'simple', '_gix2720_fase 2.jpg', 1, '2017-07-13 16:21:47');

-- --------------------------------------------------------

--
-- Table structure for table `philosophy`
--

CREATE TABLE `philosophy` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `book_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `philosophy`
--

INSERT INTO `philosophy` (`book_id`, `book_name`, `book`, `image`, `book_cost`, `capacity`, `status`) VALUES
(1, 'History Of Rome', '9781783289592_Chapter_09.pdf', 'rmh.jpg', 300, 7, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `psychology`
--

CREATE TABLE `psychology` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `book_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `psychology`
--

INSERT INTO `psychology` (`book_id`, `book_name`, `book`, `image`, `book_cost`, `capacity`, `status`) VALUES
(1, 'Human Psychology', '1.pdf', 'hp.jpg', 500, 5, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `science`
--

CREATE TABLE `science` (
  `book_id` int(11) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `book` varchar(700) NOT NULL,
  `image` text NOT NULL,
  `book_cost` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `science`
--

INSERT INTO `science` (`book_id`, `book_name`, `book`, `image`, `book_cost`, `capacity`, `status`) VALUES
(1, 'Applying UML', 'applying-uml-and-patterns.pdf', 'uml.jpg', 500000, 5, 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `student_id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_no` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`student_id`, `fname`, `email`, `id_no`, `phone`, `location`, `gender`) VALUES
(3, 'Alo Babatunde', 'alo.babatunde@gmail.com', '676767', '2147483647', 'Computer Science', 'Male'),
(4, 'precious egbo gbo', 'egboegbo@gmail.com', 'preshedo9', '+229456377', 'mascom', 'Male'),
(5, 'Abdul Rasheed', 'AbdulRasheed@yahoo.com', '7878', '0080800800', 'Mass communication', 'Male');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `title` varchar(9000) NOT NULL,
  `video` text NOT NULL,
  `extras` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `title`, `video`, `extras`, `time`) VALUES
(2, 'java', 'videoplayback(7).mp4', 1, '2017-07-13 16:44:18'),
(0, 'simple', 'IMG_0942.mp4', 1, '2017-07-13 19:35:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `business`
--
ALTER TABLE `business`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `engineering`
--
ALTER TABLE `engineering`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`faculty_id`);

--
-- Indexes for table `law`
--
ALTER TABLE `law`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `philosophy`
--
ALTER TABLE `philosophy`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `psychology`
--
ALTER TABLE `psychology`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `science`
--
ALTER TABLE `science`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `business`
--
ALTER TABLE `business`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `engineering`
--
ALTER TABLE `engineering`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `faculty_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `law`
--
ALTER TABLE `law`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `philosophy`
--
ALTER TABLE `philosophy`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `psychology`
--
ALTER TABLE `psychology`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `science`
--
ALTER TABLE `science`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `student_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
