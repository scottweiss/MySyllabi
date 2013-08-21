-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 22, 2013 at 01:00 AM
-- Server version: 5.6.12
-- PHP Version: 5.5.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `scottawe_tbd`
--
CREATE DATABASE IF NOT EXISTS `scottawe_tbd` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `scottawe_tbd`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `userID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `assignments`
--

CREATE TABLE IF NOT EXISTS `assignments` (
  `ID` int(20) NOT NULL AUTO_INCREMENT,
  `creatorID` int(20) NOT NULL,
  `name` int(50) NOT NULL,
  `dueDate` date NOT NULL,
  `type` int(2) NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `assignmentType`
--

CREATE TABLE IF NOT EXISTS `assignmentType` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `assignmentType` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `assignmentType`
--

INSERT INTO `assignmentType` (`ID`, `assignmentType`) VALUES
(1, 'Homework'),
(2, 'Test'),
(3, 'Final');

-- --------------------------------------------------------

--
-- Table structure for table `classAssignments`
--

CREATE TABLE IF NOT EXISTS `classAssignments` (
  `ID` int(4) NOT NULL AUTO_INCREMENT,
  `classID` int(10) NOT NULL,
  `assignmentID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classDays`
--

CREATE TABLE IF NOT EXISTS `classDays` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `classID` int(10) NOT NULL,
  `dayID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE IF NOT EXISTS `classes` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `creatorID` int(10) NOT NULL,
  `name` varchar(12) NOT NULL,
  `section` int(5) NOT NULL,
  `startTime` time NOT NULL,
  `endTime` time NOT NULL,
  `professor` varchar(40) NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `officeHoursStart` time DEFAULT NULL,
  `officeHoursEnd` time DEFAULT NULL,
  `officeHoursLocation` varchar(40) DEFAULT NULL,
  `classLocation` varchar(40) DEFAULT NULL,
  `CRN` int(5) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID`, `creatorID`, `name`, `section`, `startTime`, `endTime`, `professor`, `description`, `officeHoursStart`, `officeHoursEnd`, `officeHoursLocation`, `classLocation`, `CRN`) VALUES
(1, 1, 'INFO 415', 1, '14:00:00', '15:50:00', 'Dr. Maureen P. Kinke', 'This overview class introduces issues in the management and delivery of IT services, specifically: Service Level Management, Service Level Agreements, Service Oriented Architecture, Help Desk and Services for Open Source and Social Software.  Many modern forces are changing the IT service paradigm, among them increased budgetary restraints on the department, a new breed of technologically sophisticated and demanding users, massively greater numbers of users, processes, applications and interconn', NULL, NULL, NULL, 'RUSH 005', NULL),
(2, 1, 'INFO 424', 1, '18:00:00', '18:50:00', 'Professor Glenn Booker', NULL, NULL, NULL, NULL, 'RUSH 213', NULL),
(3, 1, 'PSY 330', 1, '12:00:00', '12:50:00', 'Professor Tits McGee', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classInSubject`
--

CREATE TABLE IF NOT EXISTS `classInSubject` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `subjectID` int(10) NOT NULL,
  `classID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `daysType`
--

CREATE TABLE IF NOT EXISTS `daysType` (
  `ID` int(1) NOT NULL AUTO_INCREMENT,
  `longDay` varchar(10) NOT NULL,
  `shortDay` varchar(4) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `daysType`
--

INSERT INTO `daysType` (`ID`, `longDay`, `shortDay`) VALUES
(1, 'Sunday', 'Sun'),
(2, 'Monday', 'Mon'),
(3, 'Tuesday', 'Tues'),
(4, 'Wednesday', 'Wed'),
(5, 'Thursday', 'Thur'),
(6, 'Friday', 'Fri'),
(7, 'Saturday', 'Sat');

-- --------------------------------------------------------

--
-- Table structure for table `flagErrors`
--

CREATE TABLE IF NOT EXISTS `flagErrors` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `flagID` int(10) NOT NULL,
  `errorFieled` int(11) NOT NULL,
  `correctionField` int(11) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `flags`
--

CREATE TABLE IF NOT EXISTS `flags` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `flagType` int(10) NOT NULL,
  `IDofWhatsWrong` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `flagType`
--

CREATE TABLE IF NOT EXISTS `flagType` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `flagType` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `schoolName` varchar(30) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `schoolID` int(10) NOT NULL,
  `subjectName` int(30) NOT NULL,
  `subjectShortName` int(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `userClasses`
--

CREATE TABLE IF NOT EXISTS `userClasses` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `userID` int(10) NOT NULL,
  `classID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userID` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(50) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(60) NOT NULL,
  `accountLocked` int(1) NOT NULL DEFAULT '0',
  `timeStampLastFail` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `failedAttempts` int(1) NOT NULL,
  `intNotificationRange` int(2) NOT NULL,
  `extNotificationRange` int(2) NOT NULL,
  `emailPublicToggle` int(1) NOT NULL DEFAULT '0',
  `usernamePublicToggle` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userID`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
