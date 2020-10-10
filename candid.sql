-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2020 at 07:18 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `candid`
--

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE `announce` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`id`, `datetime`, `title`, `pdf`) VALUES
(1, 'May-16-2020  22: 16: 00', 'Four Year Integrated Classroom Course for Class IX to XII, NEET, Olympiads & NTSE', 'javascript_tutorial.pdf'),
(2, 'June-25-2020  16: 46: 38', 'Four Year Integrated Classroom Course for Class IX to XII, NEET, Olympiads & NTSE', 'Eloquent_JavaScript.pdf'),
(3, 'June-25-2020  16: 46: 49', 'Four Year Integrated Classroom Course for Class IX to XII, JEE ADVANCE, Olympiads & NTSE', 'Eloquent_JavaScript.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `board_p`
--

CREATE TABLE `board_p` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ca`
--

CREATE TABLE `ca` (
  `id` int(10) NOT NULL,
  `title` varchar(100) NOT NULL,
  `author` varchar(50) NOT NULL,
  `datetime` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ca`
--

INSERT INTO `ca` (`id`, `title`, `author`, `datetime`) VALUES
(1, 'Our Testinomials', 'Govind', 'May-16-2020  22: 11: 53'),
(2, 'Slide Image Gallery', 'Govind', 'May-16-2020  22: 12: 14');

-- --------------------------------------------------------

--
-- Table structure for table `cpost`
--

CREATE TABLE `cpost` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `course_class` int(11) NOT NULL,
  `course_stream` varchar(255) NOT NULL,
  `frequency` varchar(300) NOT NULL,
  `sbatch` varchar(100) NOT NULL,
  `ebatch` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpost`
--

INSERT INTO `cpost` (`id`, `datetime`, `author`, `category`, `title`, `course_class`, `course_stream`, `frequency`, `sbatch`, `ebatch`, `pdf`) VALUES
(1, '', '', 'Candid Course Post', 'IIT Jee starting New batch', 9, 'Engineering', '6 days  in week ', '16 may 2020', '16 may 2021', 'admin.png'),
(2, '', '', 'Candid Course Post', 'NEET Starting New Batch', 10, 'Medical', '6 days in week', '17 may 2020', '17 may 2021', 'admin.png'),
(3, '', '', 'Candid Course Post', 'NEET Starting New Batch', 11, 'Medical', '6 Days In A Week', '20 May 2020', '21 May 2021', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `cpost1`
--

CREATE TABLE `cpost1` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `title` varchar(500) NOT NULL,
  `frequency` varchar(300) NOT NULL,
  `sbatch` varchar(100) NOT NULL,
  `ebatch` varchar(100) NOT NULL,
  `pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpost1`
--

INSERT INTO `cpost1` (`id`, `datetime`, `author`, `category`, `title`, `frequency`, `sbatch`, `ebatch`, `pdf`) VALUES
(1, '', '', 'Candid Course Post', 'IIT Jee starting New batch', '6 days  in week ', '16 may 2020', '16 may 2021', 'admin.png');

-- --------------------------------------------------------

--
-- Table structure for table `c_r_p_u`
--

CREATE TABLE `c_r_p_u` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `adhar` text NOT NULL,
  `fname` varchar(50) NOT NULL,
  `foccupation` varchar(50) NOT NULL,
  `fmobile` text NOT NULL,
  `mname` varchar(50) NOT NULL,
  `moccupation` varchar(50) NOT NULL,
  `mmobile` text NOT NULL,
  `paddress` text NOT NULL,
  `ppincity` text NOT NULL,
  `pdistrict` varchar(50) NOT NULL,
  `caddress` text NOT NULL,
  `cpincity` text NOT NULL,
  `cdistrict` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `pclass` text NOT NULL,
  `board` varchar(50) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `admissionclass` text NOT NULL,
  `schoolname` varchar(200) NOT NULL,
  `schooladdress` text NOT NULL,
  `appare10thclass` varchar(50) NOT NULL,
  `passingyear10th` varchar(50) NOT NULL,
  `rollno10th` text NOT NULL,
  `marks10th` text NOT NULL,
  `appare12thclass` varchar(50) NOT NULL,
  `passingyear12th` text NOT NULL,
  `rollno12th` text NOT NULL,
  `marks12th` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `markssheet10th` varchar(50) NOT NULL,
  `markssheet12th` varchar(50) NOT NULL,
  `source` varchar(100) NOT NULL,
  `terms` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `c_r_p_u`
--

INSERT INTO `c_r_p_u` (`id`, `datetime`, `name`, `gender`, `mobile`, `email`, `dob`, `category`, `country`, `adhar`, `fname`, `foccupation`, `fmobile`, `mname`, `moccupation`, `mmobile`, `paddress`, `ppincity`, `pdistrict`, `caddress`, `cpincity`, `cdistrict`, `stream`, `pclass`, `board`, `medium`, `admissionclass`, `schoolname`, `schooladdress`, `appare10thclass`, `passingyear10th`, `rollno10th`, `marks10th`, `appare12thclass`, `passingyear12th`, `rollno12th`, `marks12th`, `photo`, `markssheet10th`, `markssheet12th`, `source`, `terms`) VALUES
(6, 'July-08-2020  18: 07: 11', 'Dhanwantpal Singh', 'Male', '+919027997165', 'Abhisheksingla0187@gmail.com', '2020-06-29', 'obc', 'Indian', '23456789', 'Raja Bhaiya', 'Bussinessmen', '2345678', 'Resham Devi', 'dfhgjh', '2345678', 'Bijnor (UP),India', 'Bijnor', 'UTTAR PRADESH', 'Bijnor (UP),India Jalandhar (Punjab),India', 'Jalandhar', 'Punjab', 'Medical', '9th', 'ICSE', 'hindi', '11th', 'AGIC', 'Bijnor (UP),India Jalandhar (Punjab),India', '', '', '', '', '', '', '', '', '18113027 DhanwantpalSingh MSM.pdf', '18113027 DhanwantpalSingh MSM.pdf', '18113027 DhanwantpalSingh MSM.pdf', 'Poster', 'agree'),
(7, 'July-08-2020  19: 04: 05', 'Dhanwantpal Singh', 'Male', '+919027997165', 'dhanwant.nitj@gmail.com', '2020-07-02', 'obc', 'Indian', '213456789', 'Jagpal ', 'Bussinessmen', '23456789', 'Resham Devi', 'dfhgjh', '23456789', 'Bijnor (UP),India Jalandhar (Punjab),India', 'Jalandhar', 'PB', 'Bijnor (UP),India Jalandhar (Punjab),India', 'Jalandhar', 'PB', 'Engineering', '8th', 'ICSE', 'hindi', '9th', 'AGIC', 'Bijnor (UP),India Jalandhar (Punjab),India', '', '', '', '', '', '', '', '', '18113027 DhanwantpalSingh MSM.pdf', 'Mock test question paper.pdf', 'Instructions to attempt Question paper.jpg', 'Internet', 'agree');

-- --------------------------------------------------------

--
-- Table structure for table `fee_s`
--

CREATE TABLE `fee_s` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(500) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `f_user`
--

CREATE TABLE `f_user` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `gender` varchar(10) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `f_user`
--

INSERT INTO `f_user` (`id`, `datetime`, `name`, `email`, `mobile`, `gender`, `stream`, `class`, `password`) VALUES
(2, 'June-20-2020  16: 17: 32', 'Dhanwant', 'example@gmail.com', '1234567890', 'Male', 'Medical', 'Dropper', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `hlogin`
--

CREATE TABLE `hlogin` (
  `id` int(10) NOT NULL,
  `username` varchar(50) NOT NULL,
  `Passward` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hlogin`
--

INSERT INTO `hlogin` (`id`, `username`, `Passward`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `inquiry`
--

CREATE TABLE `inquiry` (
  `id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `class` varchar(20) NOT NULL,
  `state` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `inquiry`
--

INSERT INTO `inquiry` (`id`, `name`, `email`, `mobile`, `stream`, `class`, `state`) VALUES
(1, 'Govind', 'govindsuman118@gmail.com', 9983904397, 'Engineering', '13th', 'RAJASTHAN'),
(2, 'Govind1', 'example@gmail.com', 9983904397, 'Engineering', '13th', 'Rajasthan');

-- --------------------------------------------------------

--
-- Table structure for table `jee_p`
--

CREATE TABLE `jee_p` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jee_r`
--

CREATE TABLE `jee_r` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `main` varchar(50) NOT NULL,
  `adv` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jee_r`
--

INSERT INTO `jee_r` (`id`, `datetime`, `author`, `category`, `sname`, `main`, `adv`, `image`, `program`) VALUES
(1, 'July-05-2020  16: 35: 51', 'Govind', 'Our Testinomials', 'Ajay Trando', 'JEE-Main / AIR-10', 'JEE-Advance / AIR-10', 'IMG_20191003_193446.jpg', 'Classroom Program');

-- --------------------------------------------------------

--
-- Table structure for table `kvpy_r`
--

CREATE TABLE `kvpy_r` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `kvpy` varchar(50) NOT NULL,
  `other` varchar(100) NOT NULL,
  `image` varchar(50) NOT NULL,
  `program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kvpy_r`
--

INSERT INTO `kvpy_r` (`id`, `datetime`, `author`, `category`, `sname`, `kvpy`, `other`, `image`, `program`) VALUES
(1, 'July-05-2020  16: 38: 20', 'Govind', 'Our Testinomials', 'Ajay Trando', 'KVPY / AIR-10', 'JEE-Advance / AIR-10', '2019-03-11-19-27-16-449.jpg', 'Classroom Program');

-- --------------------------------------------------------

--
-- Table structure for table `medical_p`
--

CREATE TABLE `medical_p` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `title` varchar(1000) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `medical_r`
--

CREATE TABLE `medical_r` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `author` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `neet` varchar(60) NOT NULL,
  `aims` varchar(60) NOT NULL,
  `image` varchar(50) NOT NULL,
  `program` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `medical_r`
--

INSERT INTO `medical_r` (`id`, `datetime`, `author`, `category`, `sname`, `neet`, `aims`, `image`, `program`) VALUES
(1, 'July-05-2020  16: 37: 51', 'Govind', 'Our Testinomials', 'Ajay Trando', 'NEET / AIR-10', 'AIIMS / AIR-10', 'IMG_20191027_140156.jpg', 'Classroom Program');

-- --------------------------------------------------------

--
-- Table structure for table `ne`
--

CREATE TABLE `ne` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `title` varchar(300) NOT NULL,
  `pdf` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ne`
--

INSERT INTO `ne` (`id`, `datetime`, `title`, `pdf`) VALUES
(1, 'May-16-2020  22: 19: 53', 'Four Year Integrated Classroom Course for Class IX to XII, JEE ADVANCE, Olympiads & NTSE', 'Eloquent_JavaScript.pdf'),
(2, 'June-25-2020  16: 45: 46', 'Four Year Integrated Classroom Course for Class IX to XII, JEE ADVANCE, Olympiads & NTSE', 'Eloquent_JavaScript.pdf'),
(3, 'June-25-2020  16: 46: 11', 'Four Year Integrated Classroom Course for Class IX to XII, JEE ADVANCE, Olympiads & NTSE', 'Eloquent_JavaScript.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE `offer` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `category` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `description` varchar(300) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`id`, `datetime`, `category`, `author`, `title`, `description`, `image`) VALUES
(1, 'June-21-2020  15: 53: 14', 'Slide Image Gallery', 'Govind', 'Web Development', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.\r\n', '1.PNG'),
(2, 'June-25-2020  16: 36: 11', 'Our Testinomials', 'Govind', 'Web Development', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', '5.PNG'),
(3, 'June-25-2020  16: 38: 12', 'Slide Image Gallery', 'Govind', 'Digital Marketing', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', '4.PNG'),
(4, 'June-25-2020  16: 38: 44', 'Slide Image Gallery', 'Govind', 'Scholarship Offer', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', '7.PNG'),
(5, 'June-25-2020  16: 39: 32', 'Slide Image Gallery', 'Govind', 'Digital Marketing', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', '8.PNG');

-- --------------------------------------------------------

--
-- Table structure for table `p_user`
--

CREATE TABLE `p_user` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `p_user`
--

INSERT INTO `p_user` (`id`, `datetime`, `name`, `email`, `mobile`, `gender`, `stream`, `class`, `password`) VALUES
(1, 'June-20-2020  16: 32: 46', 'Govind', 'govindsuman118@gmail.com', '123456765432', 'Male', 'Medical', '12th', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `reserve`
--

CREATE TABLE `reserve` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `mobile` text NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `category` varchar(20) NOT NULL,
  `country` varchar(20) NOT NULL,
  `adhar` text NOT NULL,
  `fname` varchar(50) NOT NULL,
  `foccupation` varchar(50) NOT NULL,
  `fmobile` text NOT NULL,
  `mname` varchar(50) NOT NULL,
  `moccupation` varchar(50) NOT NULL,
  `mmobile` text NOT NULL,
  `paddress` text NOT NULL,
  `ppincity` text NOT NULL,
  `pdistrict` varchar(50) NOT NULL,
  `caddress` text NOT NULL,
  `cpincity` text NOT NULL,
  `cdistrict` varchar(50) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `pclass` text NOT NULL,
  `board` varchar(50) NOT NULL,
  `medium` varchar(10) NOT NULL,
  `admissionclass` text NOT NULL,
  `schoolname` varchar(200) NOT NULL,
  `schooladdress` text NOT NULL,
  `appare10thclass` varchar(50) NOT NULL,
  `passingyear10th` varchar(50) NOT NULL,
  `rollno10th` text NOT NULL,
  `marks10th` text NOT NULL,
  `appare12thclass` varchar(50) NOT NULL,
  `passingyear12th` text NOT NULL,
  `rollno12th` text NOT NULL,
  `marks12th` text NOT NULL,
  `photo` varchar(50) NOT NULL,
  `markssheet10th` varchar(50) NOT NULL,
  `markssheet12th` varchar(50) NOT NULL,
  `source` varchar(100) NOT NULL,
  `terms` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reserve`
--

INSERT INTO `reserve` (`id`, `datetime`, `name`, `gender`, `mobile`, `email`, `dob`, `category`, `country`, `adhar`, `fname`, `foccupation`, `fmobile`, `mname`, `moccupation`, `mmobile`, `paddress`, `ppincity`, `pdistrict`, `caddress`, `cpincity`, `cdistrict`, `stream`, `pclass`, `board`, `medium`, `admissionclass`, `schoolname`, `schooladdress`, `appare10thclass`, `passingyear10th`, `rollno10th`, `marks10th`, `appare12thclass`, `passingyear12th`, `rollno12th`, `marks12th`, `photo`, `markssheet10th`, `markssheet12th`, `source`, `terms`) VALUES
(6, 'July-08-2020  18: 07: 11', 'Dhanwantpal Singh', 'Male', '+919027997165', 'Abhisheksingla0187@gmail.com', '2020-06-29', 'obc', 'Indian', '23456789', 'Raja Bhaiya', 'Bussinessmen', '2345678', 'Resham Devi', 'dfhgjh', '2345678', 'Bijnor (UP),India', 'Bijnor', 'UTTAR PRADESH', 'Bijnor (UP),India Jalandhar (Punjab),India', 'Jalandhar', 'Punjab', 'Medical', '9th', 'ICSE', 'hindi', '11th', 'AGIC', 'Bijnor (UP),India Jalandhar (Punjab),India', '', '', '', '', '', '', '', '', '18113027 DhanwantpalSingh MSM.pdf', '18113027 DhanwantpalSingh MSM.pdf', '18113027 DhanwantpalSingh MSM.pdf', 'Poster', 'agree'),
(7, 'July-08-2020  19: 06: 21', 'Dhanwantpal Singh', 'Male', '+919027997165', 'dhanwantpalsingh3@gmail.com', '2020-07-05', 'st', 'Indian', '2345678', 'Dhanwantpal Singh', 'Bussinessmen', '32456789', 'Resham Devi', 'dfhgjh', '32456789', 'Bijnor (UP),India Jalandhar (Punjab),India', 'Jalandhar', 'PB', 'Bijnor (UP),India Jalandhar (Punjab),India', 'Jalandhar', 'Punjab', 'Medical', '9th', 'CBSE', 'hindi', '9th', 'AGIC', 'Bijnor (UP),India Jalandhar (Punjab),India', 'Passed', '2015', '150302', '85%', 'Passed', '2017', '170302', '82%', 'Instructions to attempt Question paper.jpg', 'Mock test question paper.pdf', '18113027 DhanwantpalSingh MSM.pdf', 'Internet', 'agree'),
(8, 'July-09-2020  11: 00: 16', 'Govind', 'Male', '9983904397', 'govindsuman118@gmail.com', '2020-07-10', 'gn', 'Indian', '234565432', 'Hansram', 'dfgh', '3456567', 'fgh', 'jhgh', '56765', 'MBH F-Block\r\nRoom No.  121', 'Jalandhar City', 'Pb', 'MBH F-Block\r\nRoom No.  121', 'Jalandhar City', 'Pb', 'Engineering', '11th', 'ICSE', 'English', '12th', 'DPS', 'MBH F-Block\r\nRoom No.  121', 'Passed', '56765', '1092640', '80', 'Passed', '454', '565456', '80', 'Admin.png', '2019-03-11-19-27-16-449.jpg', '3.jpg', 'Internet', 'agree');

-- --------------------------------------------------------

--
-- Table structure for table `sch_user`
--

CREATE TABLE `sch_user` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` text NOT NULL,
  `gender` varchar(20) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sch_user`
--

INSERT INTO `sch_user` (`id`, `datetime`, `name`, `email`, `mobile`, `gender`, `stream`, `class`, `password`) VALUES
(1, 'June-20-2020  17: 13: 31', 'Kapil', 'govindsuman118@gmail.com', '1234567890', 'Female', 'Engineering', 'Dropper', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slide_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slide_image`) VALUES
(17, 'Upload/2.jpg'),
(19, 'Upload/4.jpg'),
(20, 'Upload/3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `testinomial`
--

CREATE TABLE `testinomial` (
  `id` int(10) NOT NULL,
  `datetime` varchar(50) NOT NULL,
  `author` varchar(20) NOT NULL,
  `category` varchar(50) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `smessage` varchar(300) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testinomial`
--

INSERT INTO `testinomial` (`id`, `datetime`, `author`, `category`, `sname`, `cname`, `smessage`, `image`) VALUES
(1, 'June-25-2020  16: 41: 16', 'Govind', 'Our Testinomials', 'Ajay Trando', 'JEE Main 2020', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', '2019-03-11-19-27-16-449.jpg'),
(2, 'June-25-2020  16: 41: 56', 'Govind', 'Our Testinomials', 'Ajay Trando', 'JEE - ADVANCE', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', 'IMG_20191003_193446.jpg'),
(3, 'June-25-2020  16: 42: 51', 'Govind', 'Our Testinomials', 'Ajay Trando', 'JEE Main 2020', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', 'IMG_20190807_140306.jpg'),
(4, 'June-25-2020  16: 43: 41', 'Govind', 'Our Testinomials', 'Ajay Trando', 'JEE - Advance 2020', 'hold 2 online classes for doubts/discussions by the end of this week.\r\nAgain I repeat, I will keep the final evaluation pretty simple.', 'IMG_20191010_223543.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `announce`
--
ALTER TABLE `announce`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `board_p`
--
ALTER TABLE `board_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ca`
--
ALTER TABLE `ca`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpost`
--
ALTER TABLE `cpost`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpost1`
--
ALTER TABLE `cpost1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_r_p_u`
--
ALTER TABLE `c_r_p_u`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee_s`
--
ALTER TABLE `fee_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_user`
--
ALTER TABLE `f_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hlogin`
--
ALTER TABLE `hlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inquiry`
--
ALTER TABLE `inquiry`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jee_p`
--
ALTER TABLE `jee_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jee_r`
--
ALTER TABLE `jee_r`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kvpy_r`
--
ALTER TABLE `kvpy_r`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_p`
--
ALTER TABLE `medical_p`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medical_r`
--
ALTER TABLE `medical_r`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ne`
--
ALTER TABLE `ne`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offer`
--
ALTER TABLE `offer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `p_user`
--
ALTER TABLE `p_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reserve`
--
ALTER TABLE `reserve`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sch_user`
--
ALTER TABLE `sch_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testinomial`
--
ALTER TABLE `testinomial`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `announce`
--
ALTER TABLE `announce`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `board_p`
--
ALTER TABLE `board_p`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ca`
--
ALTER TABLE `ca`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `cpost`
--
ALTER TABLE `cpost`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cpost1`
--
ALTER TABLE `cpost1`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_r_p_u`
--
ALTER TABLE `c_r_p_u`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `fee_s`
--
ALTER TABLE `fee_s`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `f_user`
--
ALTER TABLE `f_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `hlogin`
--
ALTER TABLE `hlogin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inquiry`
--
ALTER TABLE `inquiry`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jee_p`
--
ALTER TABLE `jee_p`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jee_r`
--
ALTER TABLE `jee_r`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kvpy_r`
--
ALTER TABLE `kvpy_r`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `medical_p`
--
ALTER TABLE `medical_p`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `medical_r`
--
ALTER TABLE `medical_r`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ne`
--
ALTER TABLE `ne`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `offer`
--
ALTER TABLE `offer`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `p_user`
--
ALTER TABLE `p_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reserve`
--
ALTER TABLE `reserve`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `sch_user`
--
ALTER TABLE `sch_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `testinomial`
--
ALTER TABLE `testinomial`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
