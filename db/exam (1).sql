-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 21, 2017 at 09:44 PM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

--
-- Database: `exam`
--

CREATE DATABASE IF NOT EXISTS `exam`;

USE `exam`;

-- --------------------------------------------------------

--
-- Table structure for table `class`
--

CREATE TABLE `class` (
  `class_id` int(11) NOT NULL,
  `class_name` varchar(255) NOT NULL,
  `numeric_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class`
--

INSERT INTO `class` (`class_id`, `class_name`, `numeric_name`) VALUES
(1, 'first', '1'),
(2, 'second', '2'),
(3, 'third', '3'),
(4, 'fourth', '4'),
(13, 'fifth', '5'),
(14, 'Seven', '7');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `mark_id` int(10) NOT NULL,
  `stud_adm` varchar(25) NOT NULL,
  `sub1` int(3) NOT NULL,
  `sub2` int(3) NOT NULL,
  `sub3` int(3) NOT NULL,
  `sub4` int(3) NOT NULL,
  `sub5` int(3) NOT NULL,
  `sub6` int(3) NOT NULL,
  `sub7` int(3) NOT NULL,
  `sub8` int(3) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marks`
--

INSERT INTO `marks` (`mark_id`, `stud_adm`, `sub1`, `sub2`, `sub3`, `sub4`, `sub5`, `sub6`, `sub7`, `sub8`) VALUES
(6, 'CIT-221-010/2014', 78, 76, 90, 78, 65, 98, 89, 57),
(3, 'CIT-221-011/2014', 54, 67, 98, 67, 34, 56, 54, 35),
(10, 'BUS-224-001/2017', 85, 78, 85, 47, 78, 58, 47, 85),
(8, 'ICS-211-001/2016', 12, 43, 34, 43, 43, 45, 64, 34),
(11, 'MCS-221-010/2014', 90, 32, 78, 90, 98, 72, 56, 90),
(12, 'BIT-222-001/2014', 12, 35, 65, 76, 34, 65, 23, 65);

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

CREATE TABLE `registered` (
  `sub_mark_id` int(11) NOT NULL,
  `stud_adm` varchar(25) NOT NULL,
  `sub_id` int(10) NOT NULL,
  `sub_1` varchar(10) NOT NULL,
  `sub_2` varchar(10) NOT NULL,
  `sub_3` varchar(10) NOT NULL,
  `sub_4` varchar(10) NOT NULL,
  `sub_5` varchar(10) NOT NULL,
  `sub_6` varchar(10) NOT NULL,
  `sub_7` varchar(10) NOT NULL,
  `sub_8` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`sub_mark_id`, `stud_adm`, `sub_id`, `sub_1`, `sub_2`, `sub_3`, `sub_4`, `sub_5`, `sub_6`, `sub_7`, `sub_8`) VALUES
(12, 'BIT-222-001/2014', 1, 'BIT 2000', 'BIT 2001', 'BIT 2002', 'BIT 2003', 'BIT 2004', 'BIT 2005', 'BIT 2006', 'BIT 2007'),
(11, 'MCS-221-010/2014', 3, 'MCS 2000', 'MCS 2001', 'MCS 2002', 'MCS 2003', 'MCS 2004', 'MCS 2005', 'MCS 2006', 'MCS 2007'),
(8, 'ICS-211-001/2016', 2, 'ICS 2000', 'ICS 2001', 'ICS 2002', 'ICS 2003', 'ICS 2004', 'ICS 2005', 'ICS 2006', 'ICS 2007'),
(10, 'BUS-224-001/2017', 5, 'BUS 2000', 'BUS 2001', 'BUS 2002', 'BUS 2003', 'BUS 2004', 'BUS 2005', 'BUS 2006', 'BUS 2007'),
(5, 'CIT-221-011/2014', 4, 'CIT 2000', 'CIT 2001', 'CIT 2002', 'CIT 2003', 'CIT 2004', 'CIT 2005', 'CIT 2006', 'CIT 2007'),
(6, 'CIT-221-010/2014', 4, 'CIT 2000', 'CIT 2001', 'CIT 2002', 'CIT 2003', 'CIT 2004', 'CIT 2005', 'CIT 2006', 'CIT 2007');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `s_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `gender` varchar(25) NOT NULL,
  `dob` varchar(25) NOT NULL,
  `id` int(25) NOT NULL,
  `nation` varchar(25) NOT NULL,
  `phone` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `county` varchar(25) NOT NULL,
  `town` varchar(25) NOT NULL,
  `address` varchar(25) NOT NULL,
  `adm` varchar(255) NOT NULL,
  `yos` varchar(25) NOT NULL,
  `type` varchar(25) NOT NULL,
  `residence` varchar(25) NOT NULL,
  `pic` longblob NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`s_id`, `name`, `gender`, `dob`, `id`, `nation`, `phone`, `email`, `county`, `town`, `address`, `adm`, `yos`, `type`, `residence`, `pic`) VALUES
(11, 'Joshua Ongaga', 'male', '2017-03-02', 25896314, 'Kenyan', 717132274, 'jonga@gmail.com', 'Kisii', 'Keroka', '123-78900', 'BUS-224-001/2017', 'first', 'kuccps', 'hostel', 0x2e2e2f696d672f726f73652d33313431312e706e67),
(12, 'Nancy Naneu', 'male', '2017-04-05', 258741369, 'Sudanese', 715935741, 'naneu@gmail.com', 'Juba', 'Khartoum', '1452-30200', 'MCS-221-010/2014', 'first', 'kuccps', 'hostel', 0x2e2e2f696d672f68656172742d3236383135315f313932302e6a7067),
(9, 'Stella Nzula', 'male', '2/12/1996', 28994342, 'Sudanese', 725874123, 'nzula@gmail.com', 'Makueni', 'Makueni', '410-30200', 'ICS-211-001/2016', 'first', 'kuccps', 'hostel', 0x2e2e2f696d672f726f73652d33313431312e706e67),
(7, 'Felix Watilah', 'male', '08/01/1991', 29007776, 'Kenyan', 712423121, 'fwatilah@gmail.com', 'Trans-Nzoia', 'Kitale', '123-00100', 'CIT-221-010/2014', 'first', 'kuccps', 'hostel', 0x2e2e2f696d672f486f772d6172746966696369616c2d696e74656c6c6967656e63652d69732d616964696e672d7468652d66697273742d616761696e73742d63796265726372696d652d312d36333478302d632d64656661756c742e6a706567),
(6, 'Brenda Wafulah', 'male', '2/4/1992', 23567876, 'Tanzania', 723543239, 'brendah@gmail.com', 'Mumias', 'Mumias', '23-200320', 'CIT-221-011/2014', 'first', 'kuccps', 'hostel', 0x2e2e2f696d672f646565702d6c6f76652d71756f7465732d333030783330302e6a7067),
(13, 'Sarafine Jeptum', 'female', 'jeptum', 346543211, 'Kenyan', 712343212, 'seraff@gmail.com', 'Kapsabet', 'Kapsabet', '654-100100', 'BIT-222-001/2014', 'first', 'kuccps', 'hostel', 0x2e2e2f696d672f6566363633612e6a7067);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `unit_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `unit_name`) VALUES
(1, 'BIT 2000', 'HIV/AIDS'),
(2, 'BIT 2001', 'Communication'),
(3, 'BIT 2002', 'Marketing Principles'),
(4, 'BIT 2003', 'Maths for Science'),
(5, 'BIT 2004', 'Probability & Statistics I'),
(6, 'BIT 2005', 'Physics'),
(7, 'BIT 2006', 'Electronics'),
(8, 'BIT 2007', 'OOP I'),
(9, 'ICS 2000', 'OOP II'),
(10, 'ICS 2001', 'Advanced Programming'),
(11, 'ICS 2002', 'Structured Programming'),
(12, 'ICS 2003', 'Introduction to Programming'),
(13, 'ICS 2004', 'System Analysis and Design'),
(14, 'ICS 2005', 'Software Engineering'),
(15, 'ICS 2006', 'Internet Application'),
(16, 'ICS 2007', 'Application Programming I'),
(17, 'CIT 2000', 'Application Programming II'),
(18, 'CIT 2001', 'Business Systems Modelling'),
(19, 'CIT 2002', 'Research Methodology'),
(20, 'CIT 2003', 'Object Oriented System Analysis and Design'),
(21, 'CIT 2004', 'ICT and Society'),
(22, 'CIT 2005', 'Introduction to Internet'),
(23, 'CIT 2006', 'Calculus I'),
(24, 'CIT 2007', 'Probability and Statistics II'),
(49, 'BUS 2000', 'Marketing Principles');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `user_type` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_type`, `username`, `password`) VALUES
(1, 'Admin', 'admin', 'admin'),
(2, 'Lecturer', 'LEC-001', 'lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class`
--
ALTER TABLE `class`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_name` (`class_name`),
  ADD UNIQUE KEY `numeric_name` (`numeric_name`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`mark_id`),
  ADD UNIQUE KEY `stud_adm` (`stud_adm`);

--
-- Indexes for table `registered`
--
ALTER TABLE `registered`
  ADD PRIMARY KEY (`sub_mark_id`),
  ADD UNIQUE KEY `stud_adm` (`stud_adm`),
  ADD KEY `sub_id` (`sub_id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`),
  ADD UNIQUE KEY `subject_name` (`subject_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class`
--
ALTER TABLE `class`
  MODIFY `class_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `mark_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `registered`
--
ALTER TABLE `registered`
  MODIFY `sub_mark_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;