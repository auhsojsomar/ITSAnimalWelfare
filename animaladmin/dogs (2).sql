-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 27, 2018 at 01:18 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dogs`
--

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE `approved` (
  `approved_id` int(111) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `from_user` varchar(225) NOT NULL,
  `date_createds` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`approved_id`, `user_id`, `description`, `from_user`, `date_createds`) VALUES
(4, '3', 'Hello World', 'Frances', '2018-09-27 09:37:05');

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE `attachment` (
  `attach_id` int(111) NOT NULL,
  `attachment` varchar(225) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`attach_id`, `attachment`, `user_id`, `description`, `date_created`) VALUES
(3, 'WIN_20180906_07_16_38_Pro.jpg', '3', 'Test lang', '2018-09-27 06:23:33'),
(4, '', '', '', '2018-09-27 10:12:52');

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `loc_id` int(111) NOT NULL,
  `location_name` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `location_name`, `date_created`) VALUES
(2, 'Manila City', '2018-09-25 15:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `pet_category`
--

CREATE TABLE `pet_category` (
  `petcat_id` int(111) NOT NULL,
  `catname` varchar(225) NOT NULL,
  `statuss` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pet_category`
--

INSERT INTO `pet_category` (`petcat_id`, `catname`, `statuss`, `date_created`) VALUES
(1, 'Dog', 'Available', '2018-09-24 08:39:41'),
(2, 'Cat', 'Available', '2018-09-24 08:40:44'),
(3, 'Onggoy', 'notAvailable', '2018-09-27 02:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

CREATE TABLE `tbl_mail` (
  `mail_subject` varchar(200) NOT NULL,
  `mail_date` varchar(200) NOT NULL,
  `mail_status` varchar(100) NOT NULL,
  `mail_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pets`
--

CREATE TABLE `tbl_pets` (
  `pet_id` int(50) NOT NULL,
  `pet_name` varchar(50) NOT NULL,
  `pet_age` varchar(50) NOT NULL,
  `pet_type` varchar(100) NOT NULL,
  `pet_image` varchar(100) NOT NULL,
  `pet_details` varchar(200) NOT NULL,
  `pet_status` varchar(200) NOT NULL,
  `pet_location` varchar(200) NOT NULL,
  `pet_category` varchar(200) NOT NULL,
  `pet_gender` varchar(50) NOT NULL,
  `datecreated` int(20) NOT NULL,
  `user` int(20) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_pets`
--

INSERT INTO `tbl_pets` (`pet_id`, `pet_name`, `pet_age`, `pet_type`, `pet_image`, `pet_details`, `pet_status`, `pet_location`, `pet_category`, `pet_gender`, `datecreated`, `user`, `status`, `date_created`) VALUES
(23, 'Azkal', '1', 'Gala', 'HitMe Icon.jpg', 'test lang', '', 'Taguig City', 'Aso', 'Male', 0, 3, '1', '2018-09-25 05:49:47'),
(24, 'Azkal', '23', 'Gala', 'TH.jpg', 'Hahaha', '', 'Manila City', 'Dedication', 'Male', 0, 3, '1', '2018-09-25 05:54:13'),
(25, 'Pusa', '25', 'Gala', 'WIN_20180919_17_25_49_Pro.jpg', 'Pusa kat', '', 'Taguig City', 'Other Concern', 'Male', 0, 3, '1', '2018-09-25 06:45:22'),
(26, 'Azkal02', '23', 'Gala', 'WIN_20180824_19_49_28_Pro.jpg', 'Haha pusa', '', 'Taguig City', 'Other Concern', 'Female', 0, 3, '1', '2018-09-25 06:46:45'),
(27, 'Pusa', '22', 'Gala', 'WIN_20180810_08_22_32_Pro.jpg', 'Test lang', '', 'Taguig City', 'Dog', 'Male', 0, 3, '1', '2018-09-25 07:59:11');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userfeedback`
--

CREATE TABLE `tbl_userfeedback` (
  `id` int(11) NOT NULL,
  `message` varchar(500) NOT NULL,
  `date` int(20) NOT NULL,
  `user` int(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userfeedback`
--

INSERT INTO `tbl_userfeedback` (`id`, `message`, `date`, `user`, `subject`, `date_created`) VALUES
(1, 'helloasdjashdjkkhas', 1537082185, 3, 'hello', '2018-09-24 07:01:20'),
(2, 'djfhjdshjfhdsdfghjk.', 1537246931, 3, 'sfkjsfkjskf', '2018-09-24 07:01:20'),
(3, 'hjhgjhjl\r\n', 1537349082, 3, 'jhjh', '2018-09-24 07:01:20'),
(4, 'sdasd', 1537362631, 3, 'dkfd', '2018-09-24 07:01:51'),
(5, 'irutuirutiutiuiru', 1537413537, 4, 'irfirufuiu`', '2018-09-24 07:01:20');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE `user_tbl` (
  `user_id` int(20) NOT NULL,
  `username` varchar(100) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `email_address` varchar(100) NOT NULL,
  `gender` varchar(225) NOT NULL,
  `password` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `state` varchar(20) NOT NULL,
  `user_type` varchar(40) NOT NULL,
  `user_image` varchar(100) NOT NULL,
  `proved` int(111) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `username`, `Name`, `email_address`, `gender`, `password`, `contact_number`, `address`, `state`, `user_type`, `user_image`, `proved`) VALUES
(3, 'crimson', 'frances reformado', 'reformado3@gmail.com', '', '1234567890', '0938471327', 'Talipapa', 'active', 'user', '38434476_2172077626360351_4424693965677133824_n.jpg', 2),
(4, 'mado', 'Frances', 'reformado@gmail.coom', '', 'francis', '098837413', 'Caloocan City', 'active', 'admin', 'download.jpg', 0),
(5, 'unknown', 'unknown', 'erhdfhjdhjf@gmail.com', '', 'zxcvbnm', '09013948873', 'dkfjdjfhjd', 'inactive', 'user', '', 0),
(6, 'Brybry', 'Bryan Alonzo', 'bryanalonzo@gmail.com', '', 'qwerty', '09491445889', 'Quezon City', 'inactive', 'user', '', 0),
(7, 'qwerty', 'ejdkfjdkdjk', 'erkjfkdjkdj@gmail.com', '', '1234567890', '09289893348', 'sdksjhdjhsjd', 'inactive', 'user', '', 0),
(8, 'testlang', 'Hello World', 'test@gmail.com', '', 'password123', '00000000000', 'test lang', '', 'super', 'default.jpg', 0),
(9, 'hello', 'Hello Worlds', 'testlang@gmail.com', 'Male', 'hmm', '00000000', 'test', '', 'user', 'default.jpg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `approved`
--
ALTER TABLE `approved`
  ADD PRIMARY KEY (`approved_id`);

--
-- Indexes for table `attachment`
--
ALTER TABLE `attachment`
  ADD PRIMARY KEY (`attach_id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`loc_id`);

--
-- Indexes for table `pet_category`
--
ALTER TABLE `pet_category`
  ADD PRIMARY KEY (`petcat_id`);

--
-- Indexes for table `tbl_pets`
--
ALTER TABLE `tbl_pets`
  ADD UNIQUE KEY `pet_id` (`pet_id`);

--
-- Indexes for table `tbl_userfeedback`
--
ALTER TABLE `tbl_userfeedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_tbl`
--
ALTER TABLE `user_tbl`
  ADD UNIQUE KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `approved`
--
ALTER TABLE `approved`
  MODIFY `approved_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `attachment`
--
ALTER TABLE `attachment`
  MODIFY `attach_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loc_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_category`
--
ALTER TABLE `pet_category`
  MODIFY `petcat_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_pets`
--
ALTER TABLE `tbl_pets`
  MODIFY `pet_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_userfeedback`
--
ALTER TABLE `tbl_userfeedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user_tbl`
--
ALTER TABLE `user_tbl`
  MODIFY `user_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
