-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2018 at 11:35 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

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
(2, 'Cat', 'Available', '2018-09-24 08:40:44');

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
  `user_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `username`, `Name`, `email_address`, `gender`, `password`, `contact_number`, `address`, `state`, `user_type`, `user_image`) VALUES
(3, 'crimson', 'frances reformado', 'reformado3@gmail.com', '', '1234567890', '0938471327', 'Talipapa', 'active', 'user', '38434476_2172077626360351_4424693965677133824_n.jpg'),
(4, 'mado', 'Frances', 'reformado@gmail.coom', '', 'francis', '098837413', 'Caloocan City', 'active', 'admin', 'download.jpg'),
(5, 'unknown', 'unknown', 'erhdfhjdhjf@gmail.com', '', 'zxcvbnm', '09013948873', 'dkfjdjfhjd', 'inactive', 'user', ''),
(6, 'Brybry', 'Bryan Alonzo', 'bryanalonzo@gmail.com', '', 'qwerty', '09491445889', 'Quezon City', 'inactive', 'user', ''),
(7, 'qwerty', 'ejdkfjdkdjk', 'erkjfkdjkdj@gmail.com', '', '1234567890', '09289893348', 'sdksjhdjhsjd', 'inactive', 'user', ''),
(8, 'testlang', 'Hello World', 'test@gmail.com', '', 'password123', '00000000000', 'test lang', '', 'user', 'default.jpg'),
(9, 'hello', 'Hello Worlds', 'testlang@gmail.com', 'Male', 'hmm', '00000000', 'test', '', 'user', 'default.jpg');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `loc_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pet_category`
--
ALTER TABLE `pet_category`
  MODIFY `petcat_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
