-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 10, 2018 at 03:21 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `notifyme`
--

-- --------------------------------------------------------

--
-- Table structure for table `announcements`
--

DROP TABLE IF EXISTS `announcements`;
CREATE TABLE IF NOT EXISTS `announcements` (
  `tid` varchar(50) NOT NULL,
  `announcement` varchar(300) NOT NULL,
  `adate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`adate`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `announcements`
--

INSERT INTO `announcements` (`tid`, `announcement`, `adate`) VALUES
('veena@gmail.com', 'Climate quiz on 11-09-2018', '2018-08-10 10:15:52');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

DROP TABLE IF EXISTS `links`;
CREATE TABLE IF NOT EXISTS `links` (
  `descriptn` text,
  `place` varchar(50) DEFAULT NULL,
  `event_date` date DEFAULT NULL,
  `event_time` time DEFAULT NULL,
  `link` varchar(200) NOT NULL,
  `edate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`link`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`descriptn`, `place`, `event_date`, `event_time`, `link`, `edate`) VALUES
('1st International Conference on Multidisciplinary Research, Email: editor@conferenceworld.in', 'NIILM University, Kaithal, Haryana,India (UGC Appr', '2018-08-04', '09:30:00', 'http://conferenceworld.in/Conference.php?cID=1227', '2018-08-06 06:05:29'),
('International Conference on Recent Developments in “Education, Social Science & Humanities” (ESH-18) Email: eshm@conferenceworld.in', 'YWCA of Delhi, Ashoka Road, Connaught Place, New D', '2018-08-05', '10:00:00', 'http://conferenceworld.in/Conference.php?cID=1228', '2018-08-06 06:05:29'),
('nternational Conference on Recent Developments in Science, Engineering, Management (SEM-18) Email: submission@conferenceworld.in', 'YWCA of Delhi, Ashoka Road, Connaught Place, New D', '2018-08-05', '10:00:00', 'http://conferenceworld.in/Conference.php?cID=1229', '2018-08-06 06:05:29'),
('International Conference on New Frontiers of Engineering, Management, Social Science and Education (EMSSE-2018) Email: ic@conferenceworld.in', '(IETE)The Institution of Electronics and Telecommu', '2018-08-12', '10:00:00', 'http://conferenceworld.in/Conference.php?cID=1230', '2018-08-06 06:05:29'),
('3rd International Conference on Research Developments in Applied Science, Engineering & Management (AEM- 2018) Email: eshm@conferenceworld.in\r\n\r\n', 'The Indian Council of Social Science Research (ICS', '2018-08-19', '10:00:00', 'http://conferenceworld.in/Conference.php?cID=1232', '2018-08-06 06:05:29'),
('3rd International Conference on Research Developments in Arts, Social Science, & Humanities (ASH-2018) E-Mail : editor@conferenceworld.in\r\n\r\n', 'The Indian Council of Social Science Research (ICS', '2018-08-19', '10:00:00', 'http://conferenceworld.in/Conference.php?cID=1233', '2018-08-06 06:05:29'),
('2nd International Conference on Emerging Trends in Science, Engineering & Technology (ICETSET-2018) Email : ic@conferenceworld.in\r\n\r\n', 'Dr D Y Patil School of Engineering Dr. D. Y. Patil', '2018-09-26', '10:00:00', 'http://conferenceworld.in/Conference.php?cID=1237', '2018-08-06 06:05:29'),
('7th World Conference on Applied Science, Engineering and Management\r\n\r\n', 'The American Business School of Paris , Paris', '2018-10-26', '09:00:00', 'http://conferenceworld.in/Conference.php?cID=1218', '2018-08-06 06:05:29'),
('The Second International Conference on Eco-Sustainable Construction Technologies and Materials (ICESCM-2), Turkey,Email: ic@conferenceworld.in\r\n\r\n', 'Turkey', '2018-11-04', '10:00:00', 'http://conferenceworld.in/Conference.php?cID=1214\r\n\r\n', '2018-08-06 06:05:29'),
('codehunt', 'bangalore', '2018-08-31', '12:30:00', 'https://www.geeksforgeeks.org/', '2018-08-09 21:11:53'),
('chaincodes', 'hydrabad', '2018-08-28', '23:30:00', 'https://www.indiabix.com/', '2018-08-09 21:27:51'),
('codechef', 'Bangalore', '2018-08-03', '15:00:00', 'https://www.codechef.com', '2018-08-10 10:03:54');

-- --------------------------------------------------------

--
-- Table structure for table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub` varchar(30) NOT NULL,
  `course` varchar(30) NOT NULL,
  `description` varchar(300) DEFAULT NULL,
  `t_mail` varchar(150) NOT NULL,
  `notes` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notes`
--

INSERT INTO `notes` (`id`, `sub`, `course`, `description`, `t_mail`, `notes`, `date`) VALUES
(1, 'DBMS', 'B.E', 'assingment1', 'veena@gmail.com', 'tuploads/DBMSassingment1.pdf', '2018-08-10 10:20:58'),
(2, 'DBMS', 'B.E', 'assingment2', 'veena@gmail.com', 'tuploads/DBMSassingment2.pdf', '2018-08-10 10:24:08'),
(4, 'DBMS', 'B.E', 'notes1', 'veena@gmail.com', 'tuploads/DBMSnotes1.doc', '2018-08-10 11:24:48'),
(6, 'DBMS', 'B.E', 'notes2', 'veena@gmail.com', 'tuploads/DBMSnotes2.docx', '2018-08-10 11:28:06');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE IF NOT EXISTS `student` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `course` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`name`, `email`, `phone`, `branch`, `course`, `password`) VALUES
('Vivek', 'vk@gmail.com', '8976543413', 'CSE', 'B.E', 'vivek'),
('Rishi Kumar', 'rishikr@gmail.com', '8997001234', 'CSE', 'B.E', 'rishi'),
('Prashant Yadav', 'pyadav@gmail.com', '7411912789', 'CSE', 'B.E', 'prashant'),
('Tathagat Ankit', 'ankit@gmail.com', '8966351234', 'CSE', 'B.E', 'ankit');

-- --------------------------------------------------------

--
-- Table structure for table `submission`
--

DROP TABLE IF EXISTS `submission`;
CREATE TABLE IF NOT EXISTS `submission` (
  `sname` varchar(30) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `notes` varchar(300) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` varchar(300) NOT NULL,
  PRIMARY KEY (`date`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `submission`
--

INSERT INTO `submission` (`sname`, `s_email`, `subject`, `notes`, `date`, `description`) VALUES
('Vivek', 'vk@gmail.com', 'DBMS', 'suploads/DBMSassingment1_submission.pdf', '2018-08-10 11:16:53', 'assingment1_submission'),
('Vivek', 'vk@gmail.com', 'DBMS', 'suploads/DBMSassingment2_sol.pdf', '2018-08-10 11:20:51', 'assingment2_sol');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

DROP TABLE IF EXISTS `teacher`;
CREATE TABLE IF NOT EXISTS `teacher` (
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`name`, `email`, `phone`, `degree`, `subject`, `password`) VALUES
('Veena K R', 'veena@gmail.com', '8912346700', 'M Tech', 'DBMS', 'veena'),
('Arun Kumar S', 'arun@gmail.com', '9448475177', 'M Tech', 'O.S..', 'arun');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
