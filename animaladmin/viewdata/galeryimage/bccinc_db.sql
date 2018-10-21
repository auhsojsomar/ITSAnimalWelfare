-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2018 at 09:11 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bccinc_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `adminID` int(111) NOT NULL AUTO_INCREMENT,
  `aprofiles` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `aemail` varchar(225) NOT NULL,
  `acontact` varchar(111) NOT NULL,
  `branch` varchar(225) NOT NULL,
  `Bday` date NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `userlvl` varchar(111) NOT NULL,
  `datess` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`adminID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `aprofiles`, `firstname`, `lastname`, `aemail`, `acontact`, `branch`, `Bday`, `username`, `password`, `userlvl`, `datess`) VALUES
(1, 'default.jpg', 'Renzo', 'Balatong', 'darkenchong@gmail.com', '09161135092', 'CA', '2018-03-14', 'enchongs', '1234', 'Admin', '2018-03-21 07:58:46'),
(2, 'default.jpg', 'sdasds', 'sadasd', 'ghfghfgh@yahoo.com', '09214810313', '', '2018-03-13', 'test', '123', 'Branchuseradmin', '2018-03-22 00:20:48');

-- --------------------------------------------------------

--
-- Table structure for table `announce`
--

CREATE TABLE IF NOT EXISTS `announce` (
  `announceid` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(111) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `banner` varchar(225) NOT NULL,
  `anndescrip` varchar(225) NOT NULL,
  `status` int(225) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`announceid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `announce`
--

INSERT INTO `announce` (`announceid`, `userid`, `start`, `end`, `banner`, `anndescrip`, `status`, `date_created`) VALUES
(6, 1, '2018-08-14', '2018-08-15', '14009993_540150386171513_1225391158_n.jpg', 'Sample', 1, '2018-09-14 16:18:00'),
(7, 1, '2018-08-15', '2018-08-17', 'BD_ShapesForms.jpg', 'Samples', 1, '2018-09-14 16:18:00'),
(8, 1, '2018-08-14', '2018-08-15', '14009993_540150386171513_1225391158_n.jpg', 'sample', 1, '2018-09-14 16:18:00'),
(10, 1, '2018-09-09', '2018-09-12', 'HitMe Icon.jpg', 'yey', 1, '2018-09-14 16:18:00'),
(11, 4, '0000-00-00', '2018-09-19', 'SEF-BL_lg.jpg', 'QWEQWE', 1, '2018-09-14 16:18:00'),
(12, 4, '0000-00-00', '2018-09-16', 'IMG_0183.JPG', 'ghjghjghj', 1, '2018-09-14 16:24:21'),
(13, 4, '0000-00-00', '2018-07-30', '800px_COLOURBOX4634205.jpg', 'sdadasd', 1, '2018-09-14 16:26:26');

-- --------------------------------------------------------

--
-- Table structure for table `announces`
--

CREATE TABLE IF NOT EXISTS `announces` (
  `announceid` int(111) NOT NULL AUTO_INCREMENT,
  `adminID` varchar(225) NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `banner` varchar(225) NOT NULL,
  `anndescrip` varchar(225) NOT NULL,
  `status` int(111) NOT NULL DEFAULT '1',
  PRIMARY KEY (`announceid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE IF NOT EXISTS `appointment` (
  `appointment_id` int(111) NOT NULL AUTO_INCREMENT,
  `subject` varchar(222) NOT NULL,
  `description` varchar(225) NOT NULL,
  `postal_id` int(111) NOT NULL,
  `userid` varchar(111) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enabled` int(111) NOT NULL DEFAULT '1',
  PRIMARY KEY (`appointment_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`appointment_id`, `subject`, `description`, `postal_id`, `userid`, `date_created`, `enabled`) VALUES
(6, 'this is so accurate', 'hahahahha', 1, '2', '2018-08-27 00:16:42', 1),
(7, 'Testing', 'Ber months', 3, '2', '2018-09-07 14:07:38', 1);

-- --------------------------------------------------------

--
-- Table structure for table `archive`
--

CREATE TABLE IF NOT EXISTS `archive` (
  `archive_id` int(111) NOT NULL AUTO_INCREMENT,
  `userid` varchar(111) NOT NULL,
  `archive_code` int(111) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `archive` int(111) NOT NULL DEFAULT '1',
  `fullname` varchar(225) NOT NULL,
  PRIMARY KEY (`archive_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `archive`
--

INSERT INTO `archive` (`archive_id`, `userid`, `archive_code`, `date_created`, `archive`, `fullname`) VALUES
(4, '3', 9, '2018-09-07 19:57:50', 1, ''),
(5, '3', 10, '2018-09-07 20:06:00', 1, ''),
(6, '4', 0, '2018-09-14 14:45:24', 1, ''),
(7, '4', 0, '2018-09-14 15:02:58', 1, '0'),
(8, '4', 0, '2018-09-14 15:17:49', 1, 'Super Admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `catID` int(111) NOT NULL AUTO_INCREMENT,
  `userid` varchar(111) NOT NULL,
  `catname` varchar(225) NOT NULL,
  `statuss` varchar(225) NOT NULL,
  `datestat` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`catID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catID`, `userid`, `catname`, `statuss`, `datestat`) VALUES
(5, '4', 'Widding', 'Available', '2018-08-26 09:52:15'),
(6, '4', 'Dedication', 'Available', '2018-09-07 12:26:06'),
(7, '4', 'Other Concern', 'Available', '2018-09-07 14:20:04'),
(8, '4', 'kasal', 'Available', '2018-09-14 14:06:48'),
(9, '4', 'wwww', 'notAvailable', '2018-09-14 14:07:07'),
(10, '4', 'Child Dedication', 'Available', '2018-09-14 14:09:30'),
(11, '4', 'eerttt', 'Available', '2018-09-14 14:09:46'),
(12, '4', 'a', 'Available', '2018-09-14 14:14:05'),
(13, '4', 'z', 'Available', '2018-09-14 14:14:13');

-- --------------------------------------------------------

--
-- Table structure for table `children`
--

CREATE TABLE IF NOT EXISTS `children` (
  `id` int(111) NOT NULL AUTO_INCREMENT,
  `userid` varchar(225) NOT NULL,
  `name` varchar(225) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `children`
--

INSERT INTO `children` (`id`, `userid`, `name`) VALUES
(11, '6', 'sdasdasd'),
(12, '6', 'sadasdasd'),
(13, '7', 'asdasdsad'),
(14, '7', 'asdasdsad'),
(15, '5', 'hmm'),
(16, '5', 'hmm'),
(17, '8', 'danadn'),
(18, '8', ' djniw ');

-- --------------------------------------------------------

--
-- Table structure for table `contribution`
--

CREATE TABLE IF NOT EXISTS `contribution` (
  `cont_id` int(111) NOT NULL AUTO_INCREMENT,
  `userid` varchar(225) NOT NULL,
  `tithes` varchar(225) NOT NULL,
  `offering` varchar(225) NOT NULL,
  `operation` varchar(225) NOT NULL,
  `ministry` varchar(225) NOT NULL,
  `pledge` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `nametbl` varchar(225) NOT NULL DEFAULT 'Contribution',
  `enabled` int(111) NOT NULL DEFAULT '1',
  `archive` int(111) NOT NULL DEFAULT '0',
  PRIMARY KEY (`cont_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `contribution`
--

INSERT INTO `contribution` (`cont_id`, `userid`, `tithes`, `offering`, `operation`, `ministry`, `pledge`, `date_created`, `nametbl`, `enabled`, `archive`) VALUES
(9, '1', '15', '15', '15', '15', '15', '2018-09-07 19:57:50', 'Contribution', 1, 1),
(10, '5', '200', '100', '100', '20', '20', '2018-09-07 20:06:00', 'Contribution', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE IF NOT EXISTS `event` (
  `eventID` int(111) NOT NULL AUTO_INCREMENT,
  `title` varchar(225) NOT NULL,
  `userid` varchar(225) NOT NULL,
  `month` varchar(225) NOT NULL,
  `day` varchar(225) NOT NULL,
  `year` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`eventID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3796 ;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`eventID`, `title`, `userid`, `month`, `day`, `year`, `description`, `date_created`) VALUES
(3794, '4', '1', 'January', '1', '2018', 'Sample', '2018-08-05 09:56:28'),
(3795, '----Select Option----', '----Select Option----', 'Month:', '0', '0', '', '2018-08-05 10:33:04');

-- --------------------------------------------------------

--
-- Table structure for table `galery`
--

CREATE TABLE IF NOT EXISTS `galery` (
  `galeryID` int(111) NOT NULL AUTO_INCREMENT,
  `stallid` varchar(225) NOT NULL,
  `userid` varchar(111) NOT NULL,
  `galeryImage` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `status` varchar(111) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`galeryID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `galery`
--

INSERT INTO `galery` (`galeryID`, `stallid`, `userid`, `galeryImage`, `type`, `status`, `dates`) VALUES
(8, '7', '1', 'abc-s-learn-gifs.gif', 'galery', '1', '2018-03-21 07:19:07'),
(12, '7', '1', '14054800_540144939505391_747998737_n.jpg', 'galery', '1', '2018-03-21 07:46:00'),
(13, '7', '1', 'Capture1.PNG', 'galery', '1', '2018-03-22 00:10:53'),
(14, '4', '4', 'HitMe Icon.jpg', '', '1', '2018-09-09 04:12:53'),
(15, '7', '4', 'IMG_0183.JPG', '', '1', '2018-09-14 17:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `galleryid` int(111) NOT NULL AUTO_INCREMENT,
  `userid` varchar(225) NOT NULL,
  `title` varchar(225) NOT NULL,
  `date_end` date NOT NULL,
  `description` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enabled` int(111) NOT NULL DEFAULT '1',
  PRIMARY KEY (`galleryid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`galleryid`, `userid`, `title`, `date_end`, `description`, `date_created`, `enabled`) VALUES
(6, '4', 'Software Developer', '0000-00-00', 'haha', '2018-09-09 13:49:08', 1),
(7, '', 'general assembly', '0000-00-00', 'hahahaha', '2018-09-14 17:01:12', 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE IF NOT EXISTS `inventory` (
  `productID` int(111) NOT NULL AUTO_INCREMENT,
  `adminID` int(111) NOT NULL,
  `productName` varchar(225) NOT NULL,
  `productPrice` varchar(225) NOT NULL,
  `productQuantity` varchar(225) NOT NULL,
  `month` varchar(225) NOT NULL,
  `date` int(111) NOT NULL,
  `year` int(111) NOT NULL,
  `productImage` varchar(225) NOT NULL,
  `productCategory` varchar(225) NOT NULL,
  `productDescrip` varchar(225) NOT NULL,
  `dates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`productID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`productID`, `adminID`, `productName`, `productPrice`, `productQuantity`, `month`, `date`, `year`, `productImage`, `productCategory`, `productDescrip`, `dates`) VALUES
(8, 1, 'Sample', '900', '11', 'March', 15, 2018, '87-full-107.jpg', 'CA', 'haha', '2018-03-15 13:29:46');

-- --------------------------------------------------------

--
-- Table structure for table `leadership`
--

CREATE TABLE IF NOT EXISTS `leadership` (
  `lead_id` int(111) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `profile` varchar(225) NOT NULL,
  `position` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enabled` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`lead_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `leadership`
--

INSERT INTO `leadership` (`lead_id`, `firstname`, `lastname`, `profile`, `position`, `date_created`, `enabled`) VALUES
(2, 'Juan', 'Promise', '800px_COLOURBOX4634205.jpg', 'Pres', '2018-09-15 03:53:02', 1);

-- --------------------------------------------------------

--
-- Table structure for table `membership_form`
--

CREATE TABLE IF NOT EXISTS `membership_form` (
  `formid` int(111) NOT NULL AUTO_INCREMENT,
  `userid` varchar(225) NOT NULL,
  `middlename` varchar(225) NOT NULL,
  `nickname` varchar(225) NOT NULL,
  `address` varchar(225) NOT NULL,
  `place_of_birth` varchar(225) NOT NULL,
  `month` varchar(225) NOT NULL,
  `day` int(111) NOT NULL,
  `year` varchar(225) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `civil_status` varchar(225) NOT NULL,
  `blood_type` varchar(225) NOT NULL,
  `telephone_number` varchar(225) NOT NULL,
  `mobile_number` varchar(225) NOT NULL,
  `email_address` varchar(225) NOT NULL,
  `educational_attainment` varchar(225) NOT NULL,
  `degree_earned` varchar(225) NOT NULL,
  `school_graduated` varchar(225) NOT NULL,
  `year_graduated` varchar(225) NOT NULL,
  `line_of_work` varchar(225) NOT NULL,
  `occupation` varchar(225) NOT NULL,
  `place_of_work` varchar(225) NOT NULL,
  `skills` varchar(225) NOT NULL,
  `date_of_spiritual` date NOT NULL,
  `date_of_water_baptism` date NOT NULL,
  `place_of_water_baptism` varchar(225) NOT NULL,
  `status_member` int(111) NOT NULL DEFAULT '0',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enabled` int(111) NOT NULL DEFAULT '1',
  `type_of_marriage` varchar(225) NOT NULL,
  `date_of_marriage` date NOT NULL,
  `name_of_spouse` varchar(225) NOT NULL,
  PRIMARY KEY (`formid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `membership_form`
--

INSERT INTO `membership_form` (`formid`, `userid`, `middlename`, `nickname`, `address`, `place_of_birth`, `month`, `day`, `year`, `gender`, `civil_status`, `blood_type`, `telephone_number`, `mobile_number`, `email_address`, `educational_attainment`, `degree_earned`, `school_graduated`, `year_graduated`, `line_of_work`, `occupation`, `place_of_work`, `skills`, `date_of_spiritual`, `date_of_water_baptism`, `place_of_water_baptism`, `status_member`, `date_created`, `enabled`, `type_of_marriage`, `date_of_marriage`, `name_of_spouse`) VALUES
(14, '7', 'Hmm', 'Hmm', 'test', '', '', 0, '', 'Female', 'Single', 'AB', '67000', '09123456789', 'jeanette.queen11@gmail.com', 'STI College Cubao', 'BSIT', 'Hmm', '2014', '6700', 'Hmm dik ammo?', 'hahaha', 'hmm', '2018-09-10', '0000-00-00', 'haha', 1, '2018-09-14 12:52:22', 1, 'Civil', '2018-09-11', 'Hmm duterte'),
(15, '8', 'asd', 'sd', 'sadasd', '', '', 0, '', 'Male', 'Single', 'B', '09123123', '0000000000', 'weqwewq@gmail.com', 'wqeqwe', 'wqeqwe', 'qweqwe', '213123', '12123123', 'sadasd', 'asdasdasd', 'asdwewrwer', '2018-09-12', '0000-00-00', 'werwerwerwer', 1, '2018-09-14 15:58:54', 1, 'Civil', '2018-09-12', 'sadasd');

-- --------------------------------------------------------

--
-- Table structure for table `postal_care`
--

CREATE TABLE IF NOT EXISTS `postal_care` (
  `postal_id` int(111) NOT NULL AUTO_INCREMENT,
  `catID` varchar(225) NOT NULL,
  `userid` varchar(225) NOT NULL,
  `month` varchar(225) NOT NULL,
  `day` int(111) NOT NULL,
  `year` varchar(111) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `description` varchar(225) NOT NULL,
  `status` int(111) NOT NULL DEFAULT '0',
  `postal_created` int(111) NOT NULL DEFAULT '1',
  `archive` int(111) NOT NULL DEFAULT '0',
  `nametbl` varchar(225) NOT NULL DEFAULT 'Pastoral  Care',
  PRIMARY KEY (`postal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `postal_care`
--

INSERT INTO `postal_care` (`postal_id`, `catID`, `userid`, `month`, `day`, `year`, `date_created`, `description`, `status`, `postal_created`, `archive`, `nametbl`) VALUES
(1, '5', '2', 'January', 1, '2018', '2018-09-07 17:05:12', 'Ha ha ha', 5, 1, 0, 'Pastoral  Care'),
(2, '5', '2', 'February', 1, '2018', '2018-09-07 17:18:40', 'hahahahha', 5, 1, 0, 'Pastoral  Care'),
(3, '5', '2', 'January', 2, '2018', '2018-09-07 18:40:30', 'Happy New Year', 5, 1, 0, 'Pastoral  Care'),
(4, '5', '2', 'January', 2, '2018', '2018-09-07 16:52:50', 'Hahaha', 5, 1, 0, 'Pastoral  Care'),
(5, '7', '2', 'March', 3, '2014', '2018-09-07 16:50:41', 'Haha', 5, 1, 0, 'Pastoral  Care'),
(6, '5', '2', 'January', 5, '0', '2018-09-07 16:52:41', 'Testings', 5, 1, 0, 'Pastoral  Care'),
(7, '5', '2', 'January', 3, '0', '2018-09-14 16:21:10', 'test', 2, 1, 0, 'Pastoral  Care'),
(8, '5', '2', 'March', 3, '0', '2018-09-07 17:19:22', 'hahaha', 5, 1, 0, 'Pastoral  Care'),
(9, '5', '2', 'February', 1, '', '2018-09-14 15:17:49', 'sadasd', 2, 1, 1, 'Pastoral  Care'),
(10, '6', '2', 'April', 4, '1234', '2018-09-14 14:25:38', 'haha', 5, 1, 0, 'Pastoral  Care'),
(11, '6', '5', 'December', 6, '2018', '2018-09-07 18:41:28', 'pabinyag ng anak ko', 5, 1, 0, 'Pastoral  Care'),
(12, '7', '7', 'March', 2, '2019', '2018-09-14 16:23:14', 'test', 0, 1, 0, 'Pastoral  Care'),
(13, '5', '7', 'January', 2, '2019', '2018-09-14 16:23:14', 'asdasd', 0, 1, 0, 'Pastoral  Care'),
(14, '5', '5', 'January', 2, 'weqw', '2018-09-14 16:23:14', 'asdsaaaaaaaaaaaaaaaaaaaa', 0, 1, 0, 'Pastoral  Care');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `userid` int(111) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `contact` varchar(225) NOT NULL,
  `bday` date NOT NULL,
  `gender` varchar(225) NOT NULL,
  `profile` varchar(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL,
  `user_level` varchar(225) NOT NULL DEFAULT 'None',
  `date_create` datetime NOT NULL,
  `date_update` datetime NOT NULL,
  `enabled` int(11) NOT NULL DEFAULT '1',
  `status_member` int(111) NOT NULL DEFAULT '0',
  `stat` int(111) NOT NULL DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userid`, `firstname`, `lastname`, `email`, `contact`, `bday`, `gender`, `profile`, `username`, `password`, `user_level`, `date_create`, `date_update`, `enabled`, `status_member`, `stat`) VALUES
(1, 'Mang', 'Juan', 'mangjuan@email.com', '00000000000', '2018-07-29', 'M', 'default.jpg', 'Sample', '123', 'Admin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1),
(2, 'ChiCha', 'Ron', 'chicharon@email.com', '00000000000', '2018-07-29', 'M', 'default.jpg', 'Chicha', '0000', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 0, 0, 0),
(3, 'Finance', 'Sample', 'finance@email.com', '000000000', '2018-08-07', 'Male', 'default.jpg', 'finance', '123', 'Finance', '2018-08-25 00:00:00', '2018-08-25 00:00:00', 1, 1, 1),
(4, 'Super', 'Admin', 'superadmin@gmail.com', '000000000', '2018-08-07', 'Male', 'default.jpg', 'Super', '123', 'Super', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 1),
(5, 'Jakeh', 'Magpugay', '', '', '0000-00-00', '', '', 'jakeh', '123', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 0),
(6, 'Sam', 'Pinto', '', '', '0000-00-00', '', '', 'test', '123', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0),
(7, 'Queen Jeanette', 'Dela Cruz', '', '', '0000-00-00', '', '', 'Queen123', '321', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 0),
(8, 'jeane', 'dela cruz', '', '', '0000-00-00', '', '', 'light', '123', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 1, 0),
(9, 'Pepe', 'Jose', '', '', '0000-00-00', '', '', 'pepe', '123', '2', '0000-00-00 00:00:00', '0000-00-00 00:00:00', 1, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user_level`
--

CREATE TABLE IF NOT EXISTS `user_level` (
  `userlvl_id` int(111) NOT NULL AUTO_INCREMENT,
  `title_userlevel` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `statuss` varchar(225) NOT NULL,
  `enabled` int(225) NOT NULL DEFAULT '1',
  PRIMARY KEY (`userlvl_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user_level`
--

INSERT INTO `user_level` (`userlvl_id`, `title_userlevel`, `date_created`, `statuss`, `enabled`) VALUES
(2, 'Member', '2018-09-15 05:56:41', 'Available', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
