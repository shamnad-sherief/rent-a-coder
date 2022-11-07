-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 09, 2021 at 11:19 AM
-- Server version: 5.5.16
-- PHP Version: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `rent_a_coder`
--

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `card_no` varchar(70) NOT NULL,
  `exp_month` varchar(70) NOT NULL,
  `cvv` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `exp_year` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `etype` varchar(70) NOT NULL,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `card_no`, `exp_month`, `cvv`, `amount`, `exp_year`, `email`, `etype`) VALUES
(1, '032145678523', '12', 555, 495000, 2021, 'yuva@gmail.com', 'Organization'),
(2, '032145678520', '12', 159, 98000, 2021, 'faith@gmail.com', 'Organization'),
(3, '032145678521', '12', 321, 2000, 2021, 'joshi@gmail.com', 'Freelancer'),
(4, '032145678525', '12', 100, 5000, 2021, 'amla@gmail.com', 'Freelancer');

-- --------------------------------------------------------

--
-- Table structure for table `bidding`
--

CREATE TABLE IF NOT EXISTS `bidding` (
  `bid_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `date` date NOT NULL,
  `amount` int(11) NOT NULL,
  `bstatus` varchar(70) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`bid_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `bidding`
--

INSERT INTO `bidding` (`bid_id`, `job_id`, `date`, `amount`, `bstatus`, `email`) VALUES
(1, 3, '2021-02-01', 2000, 'Accept', 'joshi@gmail.com'),
(2, 3, '2021-02-01', 2200, 'Reject', 'amla@gmail.com'),
(14, 4, '2021-02-03', 5000, 'Accept', 'amla@gmail.com'),
(15, 4, '2021-02-03', 6000, 'Reject', 'joshi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `chatbox`
--

CREATE TABLE IF NOT EXISTS `chatbox` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `fid` int(11) NOT NULL,
  `oid` int(11) NOT NULL,
  `message` varchar(70) NOT NULL,
  `reply` varchar(70) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `chatbox`
--

INSERT INTO `chatbox` (`chat_id`, `fid`, `oid`, `message`, `reply`, `date`) VALUES
(1, 3, 1, 'Are you intrested to do another task?', 'Yes', '2021-02-09'),
(2, 1, 4, 'Are you free?', 'No', '2021-02-09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feed_id` int(11) NOT NULL AUTO_INCREMENT,
  `rating` int(11) NOT NULL,
  `date` date NOT NULL,
  `fromorg` varchar(200) NOT NULL,
  `tofree` varchar(200) NOT NULL,
  `details` varchar(200) NOT NULL,
  PRIMARY KEY (`feed_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feed_id`, `rating`, `date`, `fromorg`, `tofree`, `details`) VALUES
(2, 5, '2021-02-06', 'yuva@gmail.com', '1', 'Good Work');

-- --------------------------------------------------------

--
-- Table structure for table `forgotpassword`
--

CREATE TABLE IF NOT EXISTS `forgotpassword` (
  `forgot_password_id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(100) NOT NULL,
  `random_number` int(11) NOT NULL,
  PRIMARY KEY (`forgot_password_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `forgotpassword`
--

INSERT INTO `forgotpassword` (`forgot_password_id`, `username`, `random_number`) VALUES
(1, 'admin@gmail.com', 958262),
(2, 'admin@gmail.com', 986836),
(3, 'admin@gmail.com', 901819),
(4, 'admin@gmail.com', 983751),
(5, 'milus@gmail.com', 920672);

-- --------------------------------------------------------

--
-- Table structure for table `free_reg`
--

CREATE TABLE IF NOT EXISTS `free_reg` (
  `fid` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `phno` varchar(20) NOT NULL,
  `degree` varchar(30) NOT NULL,
  `institution` varchar(100) NOT NULL,
  `university` varchar(100) NOT NULL,
  `other_quali` varchar(120) DEFAULT NULL,
  `work_exp` varchar(100) DEFAULT NULL,
  `work_place` varchar(70) DEFAULT NULL,
  `post` varchar(100) DEFAULT NULL,
  `years_worked` varchar(50) DEFAULT NULL,
  `current_status` varchar(30) NOT NULL,
  `area_of_study` varchar(100) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date DEFAULT NULL,
  PRIMARY KEY (`fid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `free_reg`
--

INSERT INTO `free_reg` (`fid`, `name`, `address`, `phno`, `degree`, `institution`, `university`, `other_quali`, `work_exp`, `work_place`, `post`, `years_worked`, `current_status`, `area_of_study`, `email`, `dob`) VALUES
(1, 'Amla C Thomas', 'Amla Edukki Home', '9876782344', 'MSC', 'MGS', 'M G K', 'Nill', '2 years', 'Edukki', ' Software Developer', '2 years', 'Working', 'Computer', 'amla@gmail.com', '1993-01-13'),
(2, 'Milu S', 'MilusHome', '9876781234', 'B Tech', ' CUSAKK', 'M G K', 'php', '2 years', 'Kottayam', ' Software Developer', '2 years', 'Working', 'Information Technology', 'milus@gmail.com', '1998-01-28'),
(3, 'Joshina T', 'Joshina Home', '9876789878', 'B Tech', '   FUSAT', 'M G K', 'Nill', '2 years', 'Perunna', '   Software Developer', '2 years', 'Notworking', 'Information Technology', 'joshi@gmail.com', '1998-01-28'),
(4, 'Joseph', 'Joseph FarmHome', '9876789800', 'BSC', ' KUI', 'M G K', 'Html,css', '2 years', 'Pala', ' Software Developer', '2 years', 'Notworking', 'Computer Science', 'jos@gmail.com', '1998-01-28'),
(5, 'Manveer Sing', 'Manasarovar Home', '9876786543', 'B Tech', 'SAC', 'M G ', 'html', '2 years', 'Kidangoor', ' Designer Developer', '2 years', 'Notworking', 'Information Technology', 'manveer@gmail.com', '1995-01-10'),
(6, 'Posti', 'Postu', '9876767542', 'BSC', 'SDA', 'CJK', 'Nill', '2 years', 'Kozhicode', ' Software Developer', '2 years', 'Notworking', 'Computer Application', 'post@gmail.com', '1990-01-16');

-- --------------------------------------------------------

--
-- Table structure for table `job_post`
--

CREATE TABLE IF NOT EXISTS `job_post` (
  `job_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_post` varchar(100) NOT NULL,
  `category` varchar(70) NOT NULL,
  `description` varchar(100) NOT NULL,
  `type_of_pro` varchar(70) NOT NULL,
  `needed_skills` varchar(100) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `free_type` varchar(70) NOT NULL,
  `country1` varchar(70) NOT NULL,
  `lvl_of_exp` varchar(70) NOT NULL,
  `time_required` varchar(100) NOT NULL,
  `comp_mail` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `post_date` date NOT NULL,
  `pro_file` varchar(100) NOT NULL,
  `sal_expected` int(11) NOT NULL,
  `status` varchar(70) NOT NULL,
  PRIMARY KEY (`job_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `job_post`
--

INSERT INTO `job_post` (`job_id`, `job_post`, `category`, `description`, `type_of_pro`, `needed_skills`, `qualification`, `free_type`, `country1`, `lvl_of_exp`, `time_required`, `comp_mail`, `date`, `post_date`, `pro_file`, `sal_expected`, `status`) VALUES
(3, '   Develpoer', '   Software Administrater', '   Program Developer cum admin', '   College Type', '   c,c++,html,php', '   B tech', 'Freelancer', '   India', '   1 years', '   75 hs', 'faith@gmail.com', '2021-01-30', '2021-02-02', '1612032858.txt', 3000, 'Active'),
(4, '   Designer', '   Graphics designer', ' Need a Program graphics Developer ', '   College Type', '   c,c++,html,php', '   B tech', 'Freelancer', '  India', '   1 years', '   150 hrs', 'yuva@gmail.com', '2021-02-01', '2021-02-13', '1612192072b.docx', 10000, 'Active'),
(5, '        Tester', '        testing', '        Tester for project', '        web site', '        c,c++,html,php,java', '        BSC CS', 'Organization', ' India', '        1 years', '        100 hrs', 'faith@gmail.com', '2021-02-01', '2021-02-06', '1612192820b.jpg', 4000, 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `usertype` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`, `usertype`, `status`) VALUES
('admin@gmail.com', 'admin', 'admin', 'active'),
('amla@gmail.com', '123', 'Freelancer', 'active'),
('faith@gmail.com', '1234', 'Organization', 'active'),
('feba@gmail.com', 'feba123', 'Organization', 'rejected'),
('hitech@gmail.com', 'hi123', 'Organization', 'rejected'),
('jos@gmail.com', '147', 'Freelancer', 'rejected'),
('joshi@gmail.com', '2020', 'Freelancer', 'active'),
('manveer@gmail.com', 'manveer', 'Freelancer', 'active'),
('milus@gmail.com', 'milus', 'Freelancer', 'active'),
('post@gmail.com', 'poster', 'Freelancer', 'inactive'),
('yuva@gmail.com', 'yuva', 'Organization', 'active');

-- --------------------------------------------------------

--
-- Table structure for table `org_reg`
--

CREATE TABLE IF NOT EXISTS `org_reg` (
  `oid` int(11) NOT NULL AUTO_INCREMENT,
  `org_name` varchar(100) NOT NULL,
  `location` varchar(100) DEFAULT NULL,
  `address` text NOT NULL,
  `country` varchar(30) NOT NULL,
  `state` varchar(40) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(10) DEFAULT NULL,
  `license_no` varchar(20) NOT NULL,
  `ph_no` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `org_reg`
--

INSERT INTO `org_reg` (`oid`, `org_name`, `location`, `address`, `country`, `state`, `city`, `pincode`, `license_no`, `ph_no`, `email`) VALUES
(1, 'Faith Info', 'sedfcgv', 'sxdfcgv', 'dfcgvb', 'x v', 'fgvh', 686789, 'dfcvb7895656676', '9898989898', 'faith@gmail.com'),
(2, 'HI TECH', 'Kottayam', 'Hi Tech Kottayam\r\n', 'India', 'Kerala', 'Kottayam', 686789, '98A123233', '9898989855', 'hitech@gmail.com'),
(3, 'FEBA NET', 'Kochi', 'Feba Net Kochi', 'India', 'Kerala', 'Kochi', 686780, '98A123432', '9898954344', 'feba@gmail.com'),
(4, 'Yuva ', 'Chennai', 'Yuva Leners Study Centre\r\nChennai', 'India', 'Chennai', 'Chennai', 678654, '98B1243', '9878987665', 'yuva@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `pay_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_amount` int(11) NOT NULL,
  `tofree` int(11) NOT NULL,
  `card_no` varchar(70) NOT NULL,
  `from` int(11) NOT NULL,
  PRIMARY KEY (`pay_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`pay_id`, `job_id`, `pay_date`, `pay_amount`, `tofree`, `card_no`, `from`) VALUES
(1, 3, '2021-02-08', 2000, 3, '032145678521', 1),
(2, 4, '2021-02-08', 5000, 1, '032145678525', 4);

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE IF NOT EXISTS `request` (
  `req_id` int(11) NOT NULL AUTO_INCREMENT,
  `oemail` varchar(100) NOT NULL,
  `femail` varchar(100) NOT NULL,
  `job_id` int(11) NOT NULL,
  `status` varchar(70) NOT NULL,
  `accepted_date` date NOT NULL,
  `pro_percentage` int(11) NOT NULL,
  `complete_date` date NOT NULL,
  PRIMARY KEY (`req_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`req_id`, `oemail`, `femail`, `job_id`, `status`, `accepted_date`, `pro_percentage`, `complete_date`) VALUES
(1, 'faith@gmail.com', 'joshi@gmail.com', 3, 'Completed', '2021-02-03', 100, '2021-02-06'),
(3, 'yuva@gmail.com', 'amla@gmail.com', 4, 'Completed', '2021-02-03', 100, '2021-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE IF NOT EXISTS `task` (
  `task_id` int(11) NOT NULL AUTO_INCREMENT,
  `job_id` int(11) NOT NULL,
  `document` varchar(200) NOT NULL,
  `description1` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`task_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`task_id`, `job_id`, `document`, `description1`, `email`) VALUES
(1, 3, '1612467151.docx', 'Insert this content ', 'faith@gmail.com'),
(2, 5, '1612467217.txt', 'Insert this contents', 'faith@gmail.com'),
(3, 4, '1612468075.xlsx', 'Add this', 'yuva@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
