-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 27, 2013 at 11:12 PM
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

--
-- Truncate table before insert `admin`
--

TRUNCATE TABLE `admin`;
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

--
-- Truncate table before insert `assignments`
--

TRUNCATE TABLE `assignments`;
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
-- Truncate table before insert `assignmentType`
--

TRUNCATE TABLE `assignmentType`;
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

--
-- Truncate table before insert `classAssignments`
--

TRUNCATE TABLE `classAssignments`;
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

--
-- Truncate table before insert `classDays`
--

TRUNCATE TABLE `classDays`;
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
-- Truncate table before insert `classes`
--

TRUNCATE TABLE `classes`;
--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`ID`, `creatorID`, `name`, `section`, `startTime`, `endTime`, `professor`, `description`, `officeHoursStart`, `officeHoursEnd`, `officeHoursLocation`, `classLocation`, `CRN`) VALUES
(1, 1, 'INFO 415', 1, '14:00:00', '15:50:00', 'Dr. Maureen P. Kinke', 'This overview class introduces issues in the management and delivery of IT services, specifically: Service Level Management, Service Level Agreements, Service Oriented Architecture, Help Desk and Services for Open Source and Social Software.  Many modern forces are changing the IT service paradigm, among them increased budgetary restraints on the department, a new breed of technologically sophisticated and demanding users, massively greater numbers of users, processes, applications and interconn', NULL, NULL, NULL, 'RUSH 005', NULL),
(2, 1, 'INFO 424', 1, '18:00:00', '18:50:00', 'Professor Glenn Booker', NULL, NULL, NULL, NULL, 'RUSH 213', NULL),
(3, 1, 'PSY 330', 1, '12:00:00', '12:50:00', 'Professor Maureen Gibney', NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `classInSubject`
--

CREATE TABLE IF NOT EXISTS `classInSubject` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `subjectID` int(10) NOT NULL,
  `classID` int(10) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Truncate table before insert `classInSubject`
--

TRUNCATE TABLE `classInSubject`;
--
-- Dumping data for table `classInSubject`
--

INSERT INTO `classInSubject` (`ID`, `subjectID`, `classID`) VALUES
(1, 112, 1),
(2, 112, 2);

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
-- Truncate table before insert `daysType`
--

TRUNCATE TABLE `daysType`;
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

--
-- Truncate table before insert `flagErrors`
--

TRUNCATE TABLE `flagErrors`;
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

--
-- Truncate table before insert `flags`
--

TRUNCATE TABLE `flags`;
-- --------------------------------------------------------

--
-- Table structure for table `flagType`
--

CREATE TABLE IF NOT EXISTS `flagType` (
  `ID` int(2) NOT NULL AUTO_INCREMENT,
  `flagType` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Truncate table before insert `flagType`
--

TRUNCATE TABLE `flagType`;
-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE IF NOT EXISTS `school` (
  `ID` int(3) NOT NULL AUTO_INCREMENT,
  `schoolName` varchar(55) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Truncate table before insert `school`
--

TRUNCATE TABLE `school`;
--
-- Dumping data for table `school`
--

INSERT INTO `school` (`ID`, `schoolName`) VALUES
(1, 'Antoinette Westphal COMAD'),
(2, 'Arts and Sciences'),
(3, 'Bennett S. LeBow College of Business'),
(4, 'Close School of Entrepreneurship'),
(5, 'College of Engineering'),
(6, 'Information Science and Technology'),
(7, 'Miscellaneous'),
(8, 'Nursing and Health Professions'),
(9, 'Pennoni Honors College'),
(10, 'School of Biomedical Engineering, Science, and Heath'),
(11, 'School of Education'),
(12, 'School of Public Health'),
(13, 'School of Technical and Professional Studies');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE IF NOT EXISTS `subject` (
  `ID` int(10) NOT NULL AUTO_INCREMENT,
  `schoolID` int(10) NOT NULL,
  `subjectName` varchar(50) NOT NULL,
  `subjectCode` varchar(5) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=175 ;

--
-- Truncate table before insert `subject`
--

TRUNCATE TABLE `subject`;
--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`ID`, `schoolID`, `subjectName`, `subjectCode`) VALUES
(1, 1, 'Advertising Design', 'ADGD'),
(2, 1, 'Animation', 'ANIM'),
(3, 1, 'Architecture', 'ARCH'),
(4, 1, 'Art History', 'ARTH'),
(5, 1, 'Arts Administration', 'AADM'),
(6, 1, 'Dance', 'DANC'),
(7, 1, 'Design & Merchandising', 'DSMR'),
(8, 1, 'Digital Media', 'DIGM'),
(9, 1, 'Entertainment & Arts Management', 'EAM'),
(10, 1, 'Fashion Design', 'FASH'),
(11, 1, 'Film & Video', 'FMVD'),
(12, 1, 'Film Studies', 'FMST'),
(13, 1, 'Game Art and Production', 'GMAP'),
(14, 1, 'Graphic Design', 'VSCM'),
(15, 1, 'Interior Design', 'INTR'),
(16, 1, 'Museum Leadership', 'MUSL'),
(17, 1, 'Music', 'MUSC'),
(18, 1, 'Music Industry Program', 'MIP'),
(19, 1, 'Photography', 'PHTO'),
(20, 1, 'Product Design', 'PROD'),
(21, 1, 'Screenwriting & Playwriting', 'SCRP'),
(22, 1, 'TV Industry & Enterprise', 'TVIE'),
(23, 1, 'TV Production', 'TVPR'),
(24, 1, 'TV Studies', 'TVST'),
(25, 1, 'Television Management', 'TVMN'),
(26, 1, 'Theater', 'THTR'),
(27, 1, 'University-Wide Courses', 'UNIV'),
(28, 1, 'Visual Studies', 'VSST'),
(29, 1, 'WEST Studies', 'WEST'),
(30, 1, 'Web & Motion Graphics', 'WMGD'),
(31, 1, 'Web Development', 'WBDV'),
(32, 2, 'Africana Studies', 'AFAS'),
(33, 2, 'Anthropology', 'ANTH'),
(34, 2, 'Arabic', 'ARBC'),
(35, 2, 'Arts & Sciences-Interdisp Stud', 'AS-I'),
(36, 2, 'Bioscience & Biotechnology', 'BIO'),
(37, 2, 'Chemical Engineering Chemistry', 'CHEC'),
(38, 2, 'Chemistry', 'CHEM'),
(39, 2, 'Chinese', 'CHIN'),
(40, 2, 'Communication', 'COM'),
(41, 2, 'Criminal Justice', 'CJ'),
(42, 2, 'English', 'ENDK'),
(43, 2, 'Environmental Policy', 'ENVP'),
(44, 2, 'Environmental Science', 'ENVS'),
(45, 2, 'French', 'FREN'),
(46, 2, 'Geoscience ', 'GEO'),
(47, 2, 'German', 'GER'),
(48, 2, 'Greek', 'GREC'),
(49, 2, 'Hebrew', 'HBRW'),
(50, 2, 'History', 'HIST'),
(51, 2, 'Humanities, General', 'HUM'),
(52, 2, 'International Area Studies', 'IAS'),
(53, 2, 'Italian', 'ITAL'),
(54, 2, 'Japanese', 'JAPN'),
(55, 2, 'Judaic Studies', 'JUDA'),
(56, 2, 'Korean', 'KOR'),
(57, 2, 'Language', 'LANG'),
(58, 2, 'Linguistics', 'LING'),
(59, 2, 'Mathematics', 'MATH'),
(60, 2, 'Philosophy', 'PHIL'),
(61, 2, 'Physics', 'PHYS'),
(62, 2, 'Physics-Environmental Science', 'PHEV'),
(63, 2, 'Political Studies', 'PSCI'),
(64, 2, 'Portuguese', 'PORT'),
(65, 2, 'Psychology', 'PSY'),
(66, 2, 'Public Policy', 'PLCY'),
(67, 2, 'Publication Management', 'PMGT'),
(68, 2, 'Russian', 'RUSS'),
(69, 2, 'Sociology', 'SOC'),
(70, 2, 'Spanish', 'SPAN'),
(71, 2, 'University-Wide Courses', 'UNIV'),
(72, 2, 'Women''s Studies', 'WMST'),
(73, 2, 'Writing', 'WRIT'),
(74, 3, 'Accounting', 'ACCT'),
(75, 3, 'Business Statistics', 'STAT'),
(76, 3, 'Economics', 'ECON'),
(77, 3, 'Finance', 'FIN'),
(78, 3, 'General Business', 'BUSN'),
(79, 3, 'Human Resource Management', 'HRMT'),
(80, 3, 'International Business', 'INTB'),
(81, 3, 'Legal Studies', 'BLAW'),
(82, 3, 'Management', 'MGMT'),
(83, 3, 'Management Information System', 'MIS'),
(84, 3, 'Marketing', 'MKTG'),
(85, 3, 'Operations Management', 'OPM'),
(86, 3, 'Operations Research', 'OPR'),
(87, 3, 'Organizational Behavior', 'ORGB'),
(88, 3, 'Production Operations Mgmt', 'POM'),
(89, 3, 'Taxation', 'TAX'),
(90, 3, 'University-Wide Courses', 'UNIV'),
(91, 4, 'Entrepreneurship & Innovation', 'ENTP'),
(92, 5, 'Architectural Engineering', 'AE'),
(93, 5, 'Chemical Engineering', 'CHE'),
(94, 5, 'Civil & Arch Engineering', 'CAE'),
(95, 5, 'Civil Engineering', 'CHE'),
(96, 5, 'Civil, Arch & Envr Engr', 'CAEE'),
(97, 5, 'Computer Science', 'CS'),
(98, 5, 'Elec & Computer Engr-Computers', 'ECEC'),
(99, 5, 'Elec & Computer Engr-Electroph', 'ECEE'),
(100, 5, 'Elec & Computer Engr-Power Eng', 'ECEP'),
(101, 5, 'Elec & Computer Engr-Systems', 'ECES'),
(102, 5, 'Elec & Computer Engr-Telecom', 'ECET'),
(103, 5, 'Electrical & Computer Engr', 'ECE'),
(104, 5, 'Electrical Engineering Lab', 'ECEL'),
(105, 5, 'Engineering Management', 'EGMT'),
(106, 5, 'Engineering, General', 'ENGR'),
(107, 5, 'Environmental Engineering', 'ENVE'),
(108, 5, 'Materials Engineering', 'MATE'),
(109, 5, 'Mechanical Engr & Mechanics', 'MEM'),
(110, 5, 'Software Engineering', 'SE'),
(111, 5, 'University-Wide Courses', 'UNIV'),
(112, 6, 'Information Science & System', 'INFO'),
(113, 6, 'Software Engineering', 'SE'),
(114, 7, 'Career Integrated Education', 'CIE'),
(115, 7, 'Common Exams', 'EXAM'),
(116, 7, 'Cooperative Education', 'COOP'),
(117, 7, 'Military Science', 'MLSC'),
(118, 8, 'Anatomy', 'ANAT'),
(119, 8, 'Behavioral & Addictions Couns', 'BACS'),
(120, 8, 'Complement. & Integrative Ther', 'CIT'),
(121, 8, 'Couple & Family Therapy', 'CFTP'),
(122, 8, 'Creative Arts in Therapy', 'ARTS'),
(123, 8, 'Health Sciences', 'HSCI'),
(124, 8, 'Health Services Administration', 'HSAD'),
(125, 8, 'Medical Billing and Coding', 'MBC'),
(126, 8, 'Medical Family Therapy', 'MFTP'),
(127, 8, 'Nursing', 'NURS'),
(128, 8, 'Nutrition & Food Science', 'NFS'),
(129, 8, 'Physical Therapy Rehab Science', 'PTRS'),
(130, 8, 'Physician Assistant', 'PA'),
(131, 8, 'Physiology', 'PHGY'),
(132, 8, 'Radiologic Sciences', 'RADI'),
(133, 8, 'Rehabilitation Sciences', 'RHAB'),
(134, 8, 'Research', 'RSCH'),
(135, 8, 'Statistics', 'STS'),
(136, 8, 'University-Wide Courses', 'UNIV'),
(137, 9, 'Civic Engagement', 'CIVC'),
(138, 9, 'Custom-Designed Major', 'CSDN'),
(139, 9, 'Horors Program', 'HNRS'),
(140, 9, 'University-Wide Courses', 'UNIV'),
(141, 10, 'Biomedical Engineering & Sci', 'BMES'),
(142, 11, 'Ed:Global & International Ed', 'EDGI'),
(143, 11, 'Education Human Resource Devel', 'EHRD'),
(144, 11, 'Education Learning Tech', 'EDLT'),
(145, 11, 'Educational Administration', 'EDAM'),
(146, 11, 'Educational Policy', 'EDPO'),
(147, 11, 'Higher Education', 'EDHE'),
(148, 11, 'Mathematics Education', 'MTED'),
(149, 11, 'Special Education', 'EDEX'),
(150, 11, 'Teacher Education', 'EDUC'),
(151, 12, 'Public Health', 'PBHL'),
(152, 13, 'Biomedical Engineering Tech', 'BET'),
(153, 13, 'Communications & Applied Tech', 'CAT'),
(154, 13, 'Computing & Security Tech', 'CST'),
(155, 13, 'Computing Technology', 'CT'),
(156, 13, 'Construction Management', 'CMGT'),
(157, 13, 'Creativity Studies', 'CRTV'),
(158, 13, 'Culinary Arts', 'CULA'),
(159, 13, 'E-Learning Leadership', 'ELL'),
(160, 13, 'Electrical Engr Technology', 'EET'),
(161, 13, 'Emergency Management', 'EMER'),
(162, 13, 'Engineering Technology', 'ET'),
(163, 13, 'Food Science', 'FDSC'),
(164, 13, 'General Studies', 'GSTD'),
(165, 13, 'Homeland Security Mgmt', 'HSM'),
(166, 13, 'Hotel & Restaurant Management', 'HRM'),
(167, 13, 'Manufacturing Engr Technology', 'MET'),
(168, 13, 'Mechanical Engr Technology', 'MHT'),
(169, 13, 'Professional Studies', 'PRST'),
(170, 13, 'Project Management', 'PROJ'),
(171, 13, 'Property Management', 'PRMT'),
(172, 13, 'Real Estate', 'REAL'),
(173, 13, 'Retail Leadership', 'RETL'),
(174, 13, 'Sport Management', 'SMT');

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

--
-- Truncate table before insert `userClasses`
--

TRUNCATE TABLE `userClasses`;
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
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Truncate table before insert `users`
--

TRUNCATE TABLE `users`;
--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `email`, `username`, `password`, `accountLocked`, `timeStampLastFail`, `failedAttempts`, `intNotificationRange`, `extNotificationRange`, `emailPublicToggle`, `usernamePublicToggle`) VALUES
(7, 'scott.a.weiss@gmail.com', 'scottweiss', '$2y$10$gbRSMLgRiIjlVlM0MzKIF.1ESbbCbhmav922xH/YCpKsofq6xUkEy', 0, '2013-08-26 02:18:19', 0, 0, 0, 0, 0),
(8, 'asd@aol.com', 'asdasd', '$2y$10$zb8oapUck9ntowDnlRofzu4mHclCBib3h82xqQnda8ZtxCFoAEtcW', 0, '2013-08-27 17:12:03', 0, 0, 0, 0, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
