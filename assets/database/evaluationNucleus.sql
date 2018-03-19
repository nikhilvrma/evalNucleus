-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 19, 2018 at 07:33 PM
-- Server version: 5.7.21-0ubuntu0.16.04.1
-- PHP Version: 7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evaluationNucleus`
--

-- --------------------------------------------------------

--
-- Table structure for table `assessmentTestAndSubTestMapping`
--

CREATE TABLE `assessmentTestAndSubTestMapping` (
  `assessmentTestAndSubTestMappingID` int(5) NOT NULL,
  `assessmentTestID` int(5) NOT NULL,
  `subTestID` int(5) NOT NULL,
  `numberOfQuestions` int(5) DEFAULT NULL,
  `testTime` int(5) DEFAULT NULL,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `assessmentTests`
--

CREATE TABLE `assessmentTests` (
  `assessmentTestID` int(5) NOT NULL,
  `assessmentTestName` varchar(255) NOT NULL,
  `assessmentTestSlug` varchar(255) NOT NULL,
  `createdFor` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `assessmentTests`
--

INSERT INTO `assessmentTests` (`assessmentTestID`, `assessmentTestName`, `assessmentTestSlug`, `createdFor`, `createdAt`, `active`) VALUES
(1, 'Appraisal Assessment Test for Tech-Jockey', 'appraisal-assessment-test-for-tech-jockey', 1, '2018-03-13 18:53:24', 1);

-- --------------------------------------------------------

--
-- Table structure for table `assessmentTestUsers`
--

CREATE TABLE `assessmentTestUsers` (
  `assessmentTestUserID` int(5) NOT NULL,
  `fullName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` bigint(10) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `behaviourQuestions`
--

CREATE TABLE `behaviourQuestions` (
  `behaviourQuestionID` int(5) NOT NULL,
  `behaviourQuestion` text NOT NULL,
  `options` text NOT NULL,
  `behaviourCategoryID` int(5) NOT NULL,
  `subTestID` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbackQuestions`
--

CREATE TABLE `feedbackQuestions` (
  `feedbackQuestionID` int(5) NOT NULL,
  `feedbackQuestion` text NOT NULL,
  `options` text NOT NULL,
  `subTestID` int(5) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedbackRemarks`
--

CREATE TABLE `feedbackRemarks` (
  `remarkID` int(5) NOT NULL,
  `assessmentTestUserID` int(5) NOT NULL,
  `remark` text NOT NULL,
  `addedAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subTests`
--

CREATE TABLE `subTests` (
  `subTestID` int(5) NOT NULL,
  `subTestName` varchar(255) NOT NULL,
  `testType` int(11) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subTests`
--

INSERT INTO `subTests` (`subTestID`, `subTestName`, `testType`, `createdAt`, `active`) VALUES
(1, 'Behaviour Assessment Test', 1, '2018-03-13 19:03:23', 1),
(2, 'Feedback Test', 2, '2018-03-13 19:03:23', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `useriD` int(5) NOT NULL,
  `companyName` varchar(255) NOT NULL,
  `companySlug` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `createdAt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `active` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`useriD`, `companyName`, `companySlug`, `username`, `password`, `createdAt`, `active`) VALUES
(1, 'Techjockey', 'tech-jockey', 'techjockey', 'f049b34edbe46fb05a054d1973e823da', '2018-03-13 18:58:13', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `assessmentTestAndSubTestMapping`
--
ALTER TABLE `assessmentTestAndSubTestMapping`
  ADD PRIMARY KEY (`assessmentTestAndSubTestMappingID`);

--
-- Indexes for table `assessmentTests`
--
ALTER TABLE `assessmentTests`
  ADD PRIMARY KEY (`assessmentTestID`);

--
-- Indexes for table `assessmentTestUsers`
--
ALTER TABLE `assessmentTestUsers`
  ADD PRIMARY KEY (`assessmentTestUserID`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile` (`mobile`);

--
-- Indexes for table `behaviourQuestions`
--
ALTER TABLE `behaviourQuestions`
  ADD PRIMARY KEY (`behaviourQuestionID`);

--
-- Indexes for table `feedbackQuestions`
--
ALTER TABLE `feedbackQuestions`
  ADD PRIMARY KEY (`feedbackQuestionID`);

--
-- Indexes for table `feedbackRemarks`
--
ALTER TABLE `feedbackRemarks`
  ADD PRIMARY KEY (`remarkID`);

--
-- Indexes for table `subTests`
--
ALTER TABLE `subTests`
  ADD PRIMARY KEY (`subTestID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`useriD`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `assessmentTestAndSubTestMapping`
--
ALTER TABLE `assessmentTestAndSubTestMapping`
  MODIFY `assessmentTestAndSubTestMappingID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `assessmentTests`
--
ALTER TABLE `assessmentTests`
  MODIFY `assessmentTestID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `assessmentTestUsers`
--
ALTER TABLE `assessmentTestUsers`
  MODIFY `assessmentTestUserID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `behaviourQuestions`
--
ALTER TABLE `behaviourQuestions`
  MODIFY `behaviourQuestionID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedbackQuestions`
--
ALTER TABLE `feedbackQuestions`
  MODIFY `feedbackQuestionID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `feedbackRemarks`
--
ALTER TABLE `feedbackRemarks`
  MODIFY `remarkID` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subTests`
--
ALTER TABLE `subTests`
  MODIFY `subTestID` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `useriD` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
