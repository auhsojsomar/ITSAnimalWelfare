-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 21, 2018 at 06:51 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `onlineanimal`
--

-- --------------------------------------------------------

--
-- Table structure for table `adoption`
--

CREATE TABLE IF NOT EXISTS `adoption` (
  `adopt_id` int(111) NOT NULL AUTO_INCREMENT,
  `pets` varchar(225) NOT NULL,
  `users_id` varchar(225) NOT NULL,
  `fullname_adoption` varchar(225) NOT NULL,
  `date_adopt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `from_owner` varchar(225) NOT NULL,
  `approved` int(111) NOT NULL DEFAULT '0',
  `seen` int(111) NOT NULL DEFAULT '1',
  PRIMARY KEY (`adopt_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `adoption`
--

INSERT INTO `adoption` (`adopt_id`, `pets`, `users_id`, `fullname_adoption`, `date_adopt`, `from_owner`, `approved`, `seen`) VALUES
(6, '24', '3', 'frances reformado', '2018-09-30 12:52:48', 'frances reformado', 1, 0),
(7, '23', '6', 'Bryan Alonzo', '2018-09-30 12:36:43', 'frances reformado', 1, 0),
(8, '26', '6', 'Bryan Alonzo', '2018-10-21 00:58:31', '', 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `approved`
--

CREATE TABLE IF NOT EXISTS `approved` (
  `approved_id` int(111) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `from_user` varchar(225) NOT NULL,
  `date_createds` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`approved_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `approved`
--

INSERT INTO `approved` (`approved_id`, `user_id`, `description`, `from_user`, `date_createds`) VALUES
(4, '3', 'Hello World', 'Frances', '2018-09-27 09:37:05'),
(5, '6', '3f3f4f4rrf', 'Francis', '2018-09-30 07:57:29');

-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

CREATE TABLE IF NOT EXISTS `attachment` (
  `attach_id` int(111) NOT NULL AUTO_INCREMENT,
  `attachment` varchar(225) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `description` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `enabled` int(111) NOT NULL DEFAULT '1',
  PRIMARY KEY (`attach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `attachment`
--

INSERT INTO `attachment` (`attach_id`, `attachment`, `user_id`, `description`, `date_created`, `enabled`) VALUES
(3, 'WIN_20180906_07_16_38_Pro.jpg', '3', 'Test lang', '2018-09-27 06:23:33', 1),
(10, 'Capture.PNG', '6', '3eef3rfrf', '2018-09-30 07:56:47', 1);

-- --------------------------------------------------------

--
-- Table structure for table `compose`
--

CREATE TABLE IF NOT EXISTS `compose` (
  `compose_id` int(111) NOT NULL AUTO_INCREMENT,
  `to_user` varchar(225) NOT NULL,
  `from_user` varchar(225) NOT NULL,
  `name_userfrom` varchar(225) NOT NULL,
  `name_userto` varchar(225) NOT NULL,
  `files` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `date_creates` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(111) NOT NULL DEFAULT '1',
  PRIMARY KEY (`compose_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `compose`
--

INSERT INTO `compose` (`compose_id`, `to_user`, `from_user`, `name_userfrom`, `name_userto`, `files`, `subject`, `message`, `date_creates`, `status`) VALUES
(2, '3', '9', 'Hello world', 'francis', '', 'Interested', 'Hello World', '2018-10-19 03:01:20', 1),
(3, '6', '3', 'francis', 'Bryan Alonzo', '', 'G', 'Kilan', '2018-10-19 03:00:36', 1),
(4, '3', '6', 'Bryan Alonzo', 'francis', '', 'Hello Kuya', 'hahahaha', '2018-10-19 03:00:56', 1);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE IF NOT EXISTS `location` (
  `loc_id` int(111) NOT NULL AUTO_INCREMENT,
  `location_name` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`loc_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `location`
--

INSERT INTO `location` (`loc_id`, `location_name`, `date_created`) VALUES
(2, 'Manila City', '2018-09-25 15:35:35');

-- --------------------------------------------------------

--
-- Table structure for table `pet_category`
--

CREATE TABLE IF NOT EXISTS `pet_category` (
  `petcat_id` int(111) NOT NULL AUTO_INCREMENT,
  `catname` varchar(225) NOT NULL,
  `statuss` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`petcat_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `pet_category`
--

INSERT INTO `pet_category` (`petcat_id`, `catname`, `statuss`, `date_created`) VALUES
(1, 'Dog', 'Available', '2018-09-24 08:39:41'),
(2, 'Cat', 'Available', '2018-09-24 08:40:44'),
(3, 'Onggoy', 'notAvailable', '2018-09-27 02:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `product1`
--

CREATE TABLE IF NOT EXISTS `product1` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(150) NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `product_image` varchar(500) NOT NULL,
  `product_category` varchar(150) NOT NULL,
  `num` int(11) NOT NULL,
  `num1` int(11) NOT NULL,
  `pa` varchar(100) NOT NULL,
  `month` varchar(225) NOT NULL,
  `date` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `product_desc` varchar(500) NOT NULL,
  `wish` varchar(11) NOT NULL,
  `adds` int(111) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=45 ;

--
-- Dumping data for table `product1`
--

INSERT INTO `product1` (`id`, `product_name`, `product_price`, `product_quantity`, `product_image`, `product_category`, `num`, `num1`, `pa`, `month`, `date`, `year`, `product_desc`, `wish`, `adds`) VALUES
(6, 'Shirt', 432, 2, 'product_image/8f96377590be22c4c45e1d5451bc6490I_5054577099368_50_20160201-1.jpg', 'Option 2', 0, 0, '', '', 0, 0, 'Add to cart', '0', 0),
(9, 'Product45', 123, 2, 'product_image/ea24180da489a5439223c5c03caa1e1dI_5054577099719_50_20160201-1.jpg', 'Option 2', 0, 0, '', '', 0, 0, 'Add to cart\r\n', '', 0),
(10, 'product5', 324, 4, 'product_image/8a41a1de0aaca55159925138fa86f6abimages (8).jpg', 'Option 2', 0, 0, '', '', 0, 0, 'Add to cart', '', 0),
(12, 'Product1', 34000, 2, 'product_image/760d6c0c143279fba810e0c04013597bbench-navy-bench-womens-crawley-bag-spinningfield-product-3-6565813-803682112.jpeg', 'Option 2', 0, 0, '', '', 0, 0, 'Add to cart', '', 1),
(16, 'Product1', 123, 1, 'product_image/c6455b7a541cfbd4b0227f9ac80832ce1393488285-1-o.jpg', 'Option 2', 0, 0, '', '', 0, 0, 'Add to cart', '', 1),
(32, 'Product4', 321, 2, 'product_image/9ec7f9af9c9f6306d3a060a640739d92bench-polo-shirts-bench-kidbrother-b-polo-shirt-total-eclipse.jpg', 'Option 2', 7, 17, 'pm', 'August', 3, 2017, 'Add to cart', '', 0),
(33, 'Product1', 123, 1, 'product_image/972333cac18ed00f18b5133b790fe187bench-polo-shirts-bench-kidbrother-b-polo-shirt-total-eclipse.jpg', 'Option 2', 7, 24, 'pm', 'August', 3, 2017, 'Add to cart', '', 0),
(34, 'xczxc', 123, 1, 'product_image/7af65c7933f03f0974334220f4ce5916I_5053722698593_50_20150225.jpg', 'Option 2', 7, 37, 'pm', 'August', 3, 2017, 'Add to cart', '', 1),
(38, 'SanaRunning', 1111, 1, 'product_image/cba0198cf0a83a5711fd7a42465a7344bench-459-923164-1.jpg', 'Option 2', 1, 22, 'am', 'August', 30, 2017, 'Add to cart', '', 0),
(39, 'Polo tshirt at bench online store', 1200, 1, 'product_image/3cc38a0c3eb89117df95f07bd8d050cfbench-gray-right-turn-crew-neck-graphic-t-shirt-product-1-26331840-1-746110120-normal.jpeg', 'Option 2', 1, 21, 'am', 'August', 30, 2017, 'Add to cart', '', 1),
(42, 'ProductTesting', 11111, 3, 'product_image/ea17d6d36b06bc87322203d7b5a2790astatuse.PNG', 'Option 2', 1, 22, 'pm', 'September', 3, 2017, 'Add to cart', '', 0),
(43, 'ProductTestulit', 123, 1, 'product_image/be060153627a1e3b5dc58c3d746bac05status1.PNG', 'Category', 1, 33, 'pm', 'Month:', 0, 0, 'Add to cart', '', 1),
(44, 'sdsad', 8999, 8, 'product_image/f12950d30cb8c9dab0648436f02c154387-full-107.jpg', 'Option 2', 9, 6, 'am', 'March', 12, 2016, 'asdasdasdasd', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mail`
--

CREATE TABLE IF NOT EXISTS `tbl_mail` (
  `mail_subject` varchar(200) NOT NULL,
  `mail_date` varchar(200) NOT NULL,
  `mail_status` varchar(100) NOT NULL,
  `mail_id` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pets`
--

CREATE TABLE IF NOT EXISTS `tbl_pets` (
  `pet_id` int(50) NOT NULL AUTO_INCREMENT,
  `pet_name` varchar(50) NOT NULL,
  `pet_age` varchar(50) NOT NULL,
  `pet_type` varchar(100) NOT NULL,
  `pet_image` varchar(100) NOT NULL,
  `pet_details` varchar(200) NOT NULL,
  `pet_status` varchar(200) NOT NULL,
  `pet_location` varchar(200) NOT NULL,
  `pet_category` varchar(200) NOT NULL,
  `pet_gender` varchar(50) NOT NULL,
  `vax` varchar(225) NOT NULL,
  `dex` varchar(225) NOT NULL,
  `datecreated` int(20) NOT NULL,
  `user` int(20) NOT NULL,
  `status` varchar(225) NOT NULL DEFAULT '1',
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `get_adopt` int(111) NOT NULL DEFAULT '0',
  UNIQUE KEY `pet_id` (`pet_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=39 ;

--
-- Dumping data for table `tbl_pets`
--

INSERT INTO `tbl_pets` (`pet_id`, `pet_name`, `pet_age`, `pet_type`, `pet_image`, `pet_details`, `pet_status`, `pet_location`, `pet_category`, `pet_gender`, `vax`, `dex`, `datecreated`, `user`, `status`, `date_created`, `get_adopt`) VALUES
(23, 'Cutie', '1', 'Gala', 'HitMe Icon.jpg', 'test lang', '', 'Taguig City', 'Aso', 'Male', '', '', 0, 3, '0', '2018-10-21 02:32:39', 1),
(24, 'Paulo', '23', 'Gala', 'TH.jpg', 'Hahaha', '', 'Manila City', 'Dedication', 'Male', '', '', 0, 3, '0', '2018-10-21 02:32:53', 1),
(25, 'Jordan', '25', 'Gala', 'WIN_20180919_17_25_49_Pro.jpg', 'Pusa kat', '', 'Taguig City', 'Other Concern', 'Male', '', '', 0, 3, '0', '2018-10-21 02:32:58', 1),
(26, 'James', '23', 'Gala', 'WIN_20180824_19_49_28_Pro.jpg', 'Haha pusa', '', 'Taguig City', 'Other Concern', 'Female', '', '', 0, 3, '0', '2018-10-21 02:33:02', 1),
(27, 'Dog', '22', 'Gala', 'WIN_20180810_08_22_32_Pro.jpg', 'Test lang', '', 'Taguig City', 'Dog', 'Male', '', '', 0, 3, '1', '2018-10-21 02:33:08', 0),
(28, 'Carl', '12', 'g\\dog', '42826105_544305622694290_5424296592494559232_n.jpg', 't5tg5gt', '', 'Quezon City', 'Cat', 'Female', '', '', 0, 6, '1', '2018-10-21 02:33:13', 0),
(29, 'Racky', '12', 'haha', 'Email-Resignation-Letter-Example-PDF-Free-Download.jpg', 'asdasdasd', '', 'Quezon City', 'Dog', 'Female', '', '', 0, 3, '1', '2018-10-21 02:33:23', 0),
(30, 'Ricks', '12', 'hka', 'Email-Resignation-Letter-Example-PDF-Free-Download.jpg', 'asdasdasd', '', 'Quezon City', 'Dog', 'Female', '', '', 0, 3, '1', '2018-10-21 02:33:18', 0),
(31, 'Ror', '12', 'nmansd', 'e7a91f3c1d1603b5d847e7b555c04691--resignation-sample-letters.jpg', 'asdasdasd', '', 'Quezon City', 'Dog', 'Female', '', '', 0, 3, '1', '2018-10-21 02:33:32', 0),
(32, 'Ace', '12', 'hehehe', 'Email-Resignation-Letter-Example-PDF-Free-Download.jpg', 'Test lang', '', 'Quezon City', 'Dog', 'Male', '', '', 0, 3, '1', '2018-10-21 02:33:36', 0),
(33, 'Gogie', '12', 'hehe', '42826105_544305622694290_5424296592494559232_n.jpg', 'asdasdasd', '', 'Quezon City', 'Dog', 'Male', '', '', 0, 3, '1', '2018-10-21 02:33:41', 0),
(34, 'Man', '12', 'ydasdasdasd', 'Email-Resignation-Letter-Example-PDF-Free-Download.jpg', 'hahahaha', '', 'Quezon City', 'Dog', 'Female', '', '', 0, 3, '1', '2018-10-21 02:33:47', 0),
(35, 'Carl', '15', 'test lang', '42826105_544305622694290_5424296592494559232_n.jpg', 'sadasdasdasd', '', 'Quezon City', 'Dog', 'Female', '', '', 0, 3, '1', '2018-10-21 02:33:56', 0),
(36, 'hello worlds', '21', 'asdasd', 'Email-Resignation-Letter-Example-PDF-Free-Download.jpg', 'asdasdasd', '', 'Quezon City', 'Cat', 'Female', '', '', 0, 3, '1', '2018-10-02 01:51:22', 0),
(37, 'Sweetie', '23', 'asasdasd', 'Capture.PNG', 'test lang haha', '', 'Quezon City', 'Dog', 'Male', '', '', 0, 3, '1', '2018-10-21 02:34:02', 0),
(38, 'Cats', '1223', 'sdfsdf', 'Email-Resignation-Letter-Example-PDF-Free-Download.jpg', 'sadasd', '', 'Quezon City', 'Dog', 'Male', '', '', 0, 3, '1', '2018-10-21 02:34:08', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userfeedback`
--

CREATE TABLE IF NOT EXISTS `tbl_userfeedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` varchar(500) NOT NULL,
  `date` int(20) NOT NULL,
  `user` int(20) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

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

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `user_id` int(20) NOT NULL AUTO_INCREMENT,
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
  `proved` int(111) NOT NULL DEFAULT '0',
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`user_id`, `username`, `Name`, `email_address`, `gender`, `password`, `contact_number`, `address`, `state`, `user_type`, `user_image`, `proved`) VALUES
(3, 'crimson', 'frances reformado', 'reformado3@gmail.com', '', '1234567890', '0938471327', 'Talipapa', 'active', 'user', 'default.jpg', 2),
(4, 'mado', 'Francis', 'francis@gmail.com', '', 'francis', '0988374139', 'Caloocan Citys', 'active', 'admin', 'default.jpg', 0),
(5, 'unknown', 'unknown', 'erhdfhjdhjf@gmail.com', '', 'zxcvbnm', '09013948873', 'dkfjdjfhjd', 'active', 'user', 'default.jpg', 0),
(6, 'Brybry', 'Bryan Alonzo', 'bryanalonzo@gmail.com', '', 'qwerty', '09491445889', 'Quezon City', 'active', 'user', 'default.jpg', 2),
(7, 'qwerty', 'ejdkfjdkdjk', 'erkjfkdjkdj@gmail.com', '', '1234567890', '09289893348', 'sdksjhdjhsjd', 'inactive', 'user', 'default.jpg', 0),
(8, 'super', 'Hello World', 'test@gmail.com', 'Male', 'password123', '00000000000', 'test lang', 'active', 'super', 'default.jpg', 0),
(9, 'hello', 'Hello Worlds', 'testlang@gmail.com', 'Male', 'hmm', '00000000', 'test', 'inactive', 'user', 'default.jpg', 0),
(10, 'trytest', 'Dummy', 'tryingerror@email.com', 'Male', '0123', '09001211120', 'asdfsdfsdfsdf', 'active', 'user', 'default.jpg', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
