-- phpMyAdmin SQL Dump
-- version 4.8.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 17, 2018 at 05:08 PM
-- Server version: 5.6.40
-- PHP Version: 7.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cloudpanda-hitme_demo`
--

-- --------------------------------------------------------

--
-- Table structure for table `arm_bg`
--

CREATE TABLE `arm_bg` (
  `id` int(11) NOT NULL,
  `bg_name` varchar(255) NOT NULL,
  `date_created` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `date_updated` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `enabled` int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `arm_bg`
--

INSERT INTO `arm_bg` (`id`, `bg_name`, `date_created`, `date_updated`, `enabled`) VALUES
(1, 'bg.jpg', '2018-05-21 11:09:13', '2018-05-21 11:09:13', 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_offline`
--

CREATE TABLE `feedback_offline` (
  `off_id` int(111) NOT NULL,
  `fullname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `message` varchar(225) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback_offline`
--

INSERT INTO `feedback_offline` (`off_id`, `fullname`, `email`, `subject`, `message`, `date_created`) VALUES
(1, 'asdasd', 'asdasd', 'asdasd', 'asdasdas', '2018-08-13 17:15:28'),
(2, 'sdfds', 'sdfsdf', 'sdfsdf', 'sdfsdfsd', '2018-08-13 17:29:29'),
(3, 'asdsadsad', 'asdsadsad', 'asdasdasdasd', 'Test', '2018-08-13 17:30:01'),
(4, 'qweqwe', 'test lang ulit', 'asdasd', 'asdasdsd', '2018-08-13 17:45:14'),
(5, 'Test', 'sdsds', 'sdfdsfsdf', 'Lorem', '2018-08-13 18:13:22'),
(6, 'Lorems', 'haha', 'dsfdsf', 'sdfdfsdf', '2018-08-13 18:14:40'),
(7, 'Test', 'lang', 'test', 'apps', '2018-08-13 19:22:52'),
(8, 'gshs', 'hshs@gmail.com', 'gshhsjs', 'hsusjsjsjsjsjsjjsjjsjsjsvshshhshhsksjsjsjsjs', '2018-08-13 19:27:38'),
(9, 'uifbf', 'vhhhh', 'vggghh', 'hhjdbbddj', '2018-08-13 19:29:20');

-- --------------------------------------------------------

--
-- Table structure for table `hitme_admin`
--

CREATE TABLE `hitme_admin` (
  `admin_id` int(11) NOT NULL,
  `admin_first_name` varchar(55) NOT NULL,
  `admin_middle_name` varchar(55) NOT NULL,
  `admin_surname` varchar(55) NOT NULL,
  `admin_email` varchar(55) NOT NULL,
  `admin_contact_number` varchar(55) NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_admin`
--

INSERT INTO `hitme_admin` (`admin_id`, `admin_first_name`, `admin_middle_name`, `admin_surname`, `admin_email`, `admin_contact_number`, `enabled`) VALUES
(4, 'Cloud', 'DH', 'Panda', 'admin@cloudpanda.ph', '0939181xxx', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_announcements`
--

CREATE TABLE `hitme_announcements` (
  `announcement_id` int(11) NOT NULL,
  `subject` varchar(55) NOT NULL,
  `content` text NOT NULL,
  `display_until` date NOT NULL,
  `posted_by` int(11) NOT NULL,
  `posted_on` date NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hitme_announcements`
--

INSERT INTO `hitme_announcements` (`announcement_id`, `subject`, `content`, `display_until`, `posted_by`, `posted_on`, `date_created`, `date_updated`, `enabled`) VALUES
(4, 'Puregold History', 'Puregold Price Club, Inc. (“Puregold” or “the Company”) was incorporated on September 8, 1998 and opened its first Puregold hypermarket store in Mandaluyong City in December of the same year. In 2001, it began its expansion by building 2 additional hypermarket stores in Manila and Paranaque. It also launched its loyalty program, which was eventually renamed as “Tindahan ni Aling Puring” in 2004. Between 2002 to 2006, Puregold continued its expansion at an average of 3 new stores every year and established operations in North and South Luzon.\r\n\r\n \r\n\r\nIn 2008, Puregold was recognized by Reader’s Digest Asia’s as the Most Trusted Brand in supermarket category. To expedite market coverage, a new format called “Puregold Jr. Supermarket” was introduced in the 4th quarter of 2008. By mid-2009, the Company gained market leadership being the second largest hypermarket and supermarket retailer in the Philippines in terms of net sales. By 2010, it was already operating 62 stores, and launched another format called, “Puregold Extra”. In the same year and henceforth, Puregold was recognized by Retail Asia Pacific as one of the top 500 retailers among the 14 economies of the region.\r\n\r\n \r\n\r\n2011 saw the highest number of store openings in Puregold history with the launch of 38 new stores making its number of stores to a total of 100.  In the succeeding year, Puregold acquired a related retail company, Kareila Management Corporation, with 6 S&amp;amp;R Membership Shopping Warehouses (patterned after the Costco and Sam’s Club in the USA), opened 31 new Puregold organic stores and acquired Gant Group of Companies known as “Parco supermarkets” with 19 stores.\r\n\r\n \r\n\r\nIn 2013, Puregold acquired another supermarket chain, Company E Corporation, with 15 stores and opened 40 new stores. S&amp;amp;R opened 2 warehouses located in Davao Province and Mandaluyong City. Company E and Gant Group of Companies later merged with Puregold.\r\n\r\n \r\n\r\nIn 2014, Puregold opened 28 stores, 1 S&amp;amp;R store and 4 S&amp;amp;R New York Style Pizza/quick service restaurants (QSR). It also partnered with Lawson, Inc. and Lawson Asia Pacific Pte Ltd. under a joint venture company called PG Lawson, Inc. PG Lawson plans to build and operate a chain of Lawson convenient stores all over the Philippines targetting a total of 500 stores by 2020. The parties’ investment share is 70% Puregold and 30% Lawson.\r\n\r\n \r\n\r\nIn 2015, Puregold opened 15 hypermarkets, 11 supermarkets, 1 S&amp;amp;R Warehouse and 10 QSRs.\r\n\r\n \r\n\r\nIn 2016, Puregold opened another 15 hypermarkets, 8 supermarkets, 2 extras,  1 minimart, 2 S&amp;amp;R Warehouse and 7 QSRs.\r\n\r\n \r\n\r\nBy the end of 2016, Puregold was operating a total of 147 hypermarkets, 100 supermarkets, 29 extra, 1 minimart, 12 S&amp;amp;R warehouse clubs, 23 S&amp;amp;R-QSRs, 9 stores under NE Bodega and 8 Budgetlane stores, for a total of 329 stores located in the following areas:', '2018-12-31', 2, '2018-06-26', '2018-06-26 10:50:33', '2018-08-04 09:33:16', 1),
(5, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.', '2018-07-19', 2, '2018-07-06', '2018-07-06 11:41:56', '2018-07-06 11:57:52', 0),
(6, 'Declaration Policy', 'Declaration of Policy\r\nSed egestas egestas fringilla phasellus. In fermentum et sollicitudin ac. Ut lectus arcu bibendum at varius. Nisl suscipit adipiscing bibendum est ultricies. Ac turpis egestas sed tempus urna et. Amet risus nullam eget felis eget nunc lobortis mattis. Tempor orci eu lobortis elementum. Blandit volutpat maecenas volutpat blandit aliquam etiam erat. Eget lorem dolor sed viverra ipsum. Volutpat lacus laoreet non curabitur gravida arcu ac tortor dignissim. Consequat id porta nibh venenatis cras sed. Egestas sed sed risus pretium. Consequat id porta nibh venenatis cras sed felis.', '2018-07-14', 59, '2018-07-06', '2018-07-06 11:59:15', '2018-07-06 11:59:15', 1),
(7, 'X', 'X', '2018-07-12', 2, '2018-07-11', '2018-07-11 09:55:29', '2018-07-11 09:55:29', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_banners`
--

CREATE TABLE `hitme_banners` (
  `banner_id` int(11) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_is_enabled` int(1) NOT NULL,
  `banner_is_news_and_promo` int(111) NOT NULL DEFAULT '0',
  `banner_is_sold` int(11) NOT NULL,
  `banner_start_date` date NOT NULL,
  `banner_valid_until` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hitme_banners`
--

INSERT INTO `hitme_banners` (`banner_id`, `banner_image`, `banner_is_enabled`, `banner_is_news_and_promo`, `banner_is_sold`, `banner_start_date`, `banner_valid_until`) VALUES
(1, '1.jpg', 1, 0, 0, '0000-00-00', '0000-00-00'),
(2, '2.jpg', 1, 0, 0, '0000-00-00', '0000-00-00'),
(3, '3.jpg', 1, 0, 1, '0000-00-00', '0000-00-00'),
(4, '4.jpg', 1, 1, 0, '0000-00-00', '0000-00-00'),
(5, '5.jpg', 1, 0, 0, '0000-00-00', '0000-00-00'),
(47, '47.png', 0, 0, 0, '0000-00-00', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `hitme_branches`
--

CREATE TABLE `hitme_branches` (
  `branch_id` int(111) NOT NULL,
  `promo_assigned_partner_id` varchar(225) NOT NULL,
  `branch_name` varchar(225) NOT NULL,
  `branch_address` varchar(225) NOT NULL,
  `branch_opening_hours` varchar(225) NOT NULL,
  `branch_closing_hours` varchar(225) NOT NULL,
  `branch_details` text NOT NULL,
  `branch_longitude` varchar(225) NOT NULL,
  `branch_latitude` varchar(225) NOT NULL,
  `branch_image` varchar(225) NOT NULL,
  `branch_redeem_qr` varchar(225) NOT NULL,
  `branch_is_snapanalo` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `enabled` int(11) NOT NULL,
  `control_number` int(111) NOT NULL,
  `branch_partner_id` varchar(225) NOT NULL,
  `partnership_logo` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_branches`
--

INSERT INTO `hitme_branches` (`branch_id`, `promo_assigned_partner_id`, `branch_name`, `branch_address`, `branch_opening_hours`, `branch_closing_hours`, `branch_details`, `branch_longitude`, `branch_latitude`, `branch_image`, `branch_redeem_qr`, `branch_is_snapanalo`, `date_created`, `date_updated`, `enabled`, `control_number`, `branch_partner_id`, `partnership_logo`) VALUES
(1, '1519966451', 'Jollibee', 'Puregold Taguig, Gen. Luna Street, Taguig, Metro Manila, Philippines', '06:00 AM', '12:00 AM', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '121.09269760000006', '14.6179143', 'download.jpg', '1813096907.png', 0, '2018-06-12 14:47:34', '2018-06-12 14:47:34', 1, 0, '1', 'jollibee_logo.png'),
(2, '2', 'Mang Inasal', 'Puregold Price Club, Inc. Libertad, Taft Avenue, Pasay, Metro Manila, Philippines', '06:00 AM', '12:00 AM', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '120.99887060000003', '14.5475369', 'download.jpg', '1215633683.png', 0, '2018-06-12 14:49:44', '2018-06-12 14:49:44', 1, 0, '2', 'Mang_Inasal.jpg'),
(3, '1519966451', 'Jollibee', 'Puregold Price Club, Inc. Libertad, Taft Avenue, Pasay, Metro Manila, Philippines', '06:00 AM', '12:00 AM', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', '120.99887060000003', '14.5475369', 'download.jpg', '1215633683.png', 0, '2018-06-12 14:49:44', '2018-06-12 14:49:44', 1, 0, '1', 'jollibee_logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `hitme_coupon_wallet`
--

CREATE TABLE `hitme_coupon_wallet` (
  `coupon_id` int(111) NOT NULL,
  `customer_id` int(11) DEFAULT NULL COMMENT 'Can be null for users without accounts.',
  `promo_id` int(11) NOT NULL,
  `coupon_serial` int(10) UNSIGNED ZEROFILL NOT NULL,
  `coupon_date_acquired` datetime NOT NULL,
  `is_redeemed` int(1) NOT NULL,
  `coupon_is_expired` int(1) NOT NULL,
  `coupon_redeemed_by` int(11) NOT NULL COMMENT 'Branch Cashier ID',
  `coupon_date_redeemed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hitme_coupon_wallet`
--

INSERT INTO `hitme_coupon_wallet` (`coupon_id`, `customer_id`, `promo_id`, `coupon_serial`, `coupon_date_acquired`, `is_redeemed`, `coupon_is_expired`, `coupon_redeemed_by`, `coupon_date_redeemed`) VALUES
(1, 26, 4, 0000000010, '2018-08-14 09:04:02', 0, 0, 0, NULL),
(2, 1, 159, 0000000132, '2018-07-03 16:10:25', 1, 0, 123456, '2018-07-09 01:08:10'),
(3, 1, 159, 0000000133, '2018-07-03 16:13:16', 1, 0, 123456, '2018-07-09 01:09:14'),
(4, 1, 159, 0000000134, '2018-07-03 16:20:05', 0, 0, 123456, '2018-07-05 15:16:42'),
(5, 4, 159, 0000000135, '2018-07-03 16:24:36', 0, 0, 123456, '2018-07-05 15:15:51'),
(6, 4, 2, 0000000136, '2018-07-04 12:11:01', 0, 0, 0, '2018-07-06 00:00:00'),
(7, 4, 2, 0000000137, '2018-07-04 12:16:44', 1, 0, 123456, '2018-07-24 17:33:01'),
(8, 4, 2, 0000000138, '2018-07-04 12:20:11', 0, 0, 0, '2018-07-19 00:00:00'),
(9, 4, 2, 0000000139, '2018-07-04 13:33:58', 0, 0, 0, '2018-07-01 00:00:00'),
(10, 1, 159, 0000000028, '2018-08-06 11:27:08', 0, 0, 0, NULL),
(11, 1, 159, 0000000029, '2018-08-06 11:27:09', 0, 0, 0, NULL),
(12, 1, 159, 0000000030, '2018-08-06 11:27:09', 0, 0, 0, NULL),
(13, 1, 159, 0000000031, '2018-08-06 11:28:37', 0, 0, 0, NULL),
(14, 1, 159, 0000000032, '2018-08-06 11:28:38', 0, 0, 0, NULL),
(15, 1, 159, 0000000033, '2018-08-06 14:27:01', 0, 0, 0, NULL),
(16, 1, 159, 0000000034, '2018-08-06 14:27:02', 0, 0, 0, NULL),
(17, 8, 4, 0000000008, '2018-08-09 17:23:44', 0, 0, 0, NULL),
(18, 9, 4, 0000000009, '2018-08-09 17:26:16', 0, 0, 0, NULL),
(19, 31, 4, 0000000013, '2018-08-14 14:12:55', 0, 0, 0, NULL),
(20, NULL, 5, 0000000011, '2018-08-15 11:20:01', 0, 0, 0, NULL),
(21, NULL, 5, 0000000013, '2018-08-15 11:45:26', 0, 0, 0, NULL),
(22, NULL, 5, 0000000015, '2018-08-15 11:47:52', 0, 0, 0, NULL),
(23, NULL, 5, 0000000017, '2018-08-15 11:54:26', 0, 0, 0, NULL),
(24, NULL, 5, 0000000019, '2018-08-15 11:54:52', 0, 0, 0, NULL),
(25, NULL, 5, 0000000021, '2018-08-15 13:06:38', 0, 0, 0, NULL),
(26, NULL, 5, 0000000023, '2018-08-15 13:12:44', 0, 0, 0, NULL),
(27, NULL, 5, 0000000025, '2018-08-15 13:19:53', 0, 0, 0, NULL),
(28, NULL, 5, 0000000027, '2018-08-15 13:22:41', 0, 0, 0, NULL),
(29, NULL, 5, 0000000029, '2018-08-15 13:46:53', 0, 0, 0, NULL),
(30, NULL, 5, 0000000031, '2018-08-15 13:57:19', 0, 0, 0, NULL),
(31, NULL, 5, 0000000033, '2018-08-15 14:02:17', 0, 0, 0, NULL),
(32, NULL, 5, 0000000035, '2018-08-15 14:05:50', 0, 0, 0, NULL),
(33, NULL, 5, 0000000037, '2018-08-15 14:16:40', 0, 0, 0, NULL),
(34, NULL, 5, 0000000039, '2018-08-15 14:17:05', 0, 0, 0, NULL),
(35, NULL, 5, 0000000041, '2018-08-15 14:22:07', 0, 0, 0, NULL),
(36, NULL, 5, 0000000043, '2018-08-15 14:23:52', 0, 0, 0, NULL),
(37, NULL, 5, 0000000045, '2018-08-15 14:29:21', 0, 0, 0, NULL),
(38, NULL, 5, 0000000047, '2018-08-15 14:32:57', 0, 0, 0, NULL),
(39, NULL, 5, 0000000049, '2018-08-15 14:37:01', 0, 0, 0, NULL),
(40, NULL, 5, 0000000051, '2018-08-15 14:38:35', 0, 0, 0, NULL),
(41, NULL, 5, 0000000053, '2018-08-15 14:39:30', 0, 0, 0, NULL),
(42, NULL, 5, 0000000055, '2018-08-15 14:42:19', 0, 0, 0, NULL),
(43, NULL, 5, 0000000057, '2018-08-15 14:46:21', 0, 0, 0, NULL),
(44, NULL, 5, 0000000059, '2018-08-15 14:47:48', 0, 0, 0, NULL),
(45, NULL, 5, 0000000061, '2018-08-15 14:55:36', 0, 0, 0, NULL),
(46, NULL, 5, 0000000063, '2018-08-15 15:02:04', 0, 0, 0, NULL),
(47, NULL, 5, 0000000065, '2018-08-15 15:11:28', 0, 0, 0, NULL),
(48, 7, 5, 0000000067, '2018-08-15 15:21:02', 0, 0, 0, NULL),
(49, 7, 5, 0000000069, '2018-08-15 15:31:58', 1, 0, 2, '2018-08-15 15:41:09'),
(50, 7, 5, 0000000071, '2018-08-18 01:03:18', 0, 0, 0, NULL),
(51, 7, 5, 0000000074, '2018-08-18 01:07:38', 0, 0, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_credentials`
--

CREATE TABLE `hitme_credentials` (
  `provider` varchar(55) NOT NULL,
  `usecase` varchar(55) NOT NULL,
  `client_access_key` varchar(55) NOT NULL,
  `client_secret_key` varchar(55) NOT NULL,
  `server_access_key` varchar(55) NOT NULL,
  `server_secret_key` varchar(55) NOT NULL,
  `vuforia_url` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_credentials`
--

INSERT INTO `hitme_credentials` (`provider`, `usecase`, `client_access_key`, `client_secret_key`, `server_access_key`, `server_secret_key`, `vuforia_url`) VALUES
('Vuforia', 'Hitme Cloud Database', '83d50ad813650d266772d46d0bc3e3109cfede73', 'e8e1134136ea38c87221e0bbc7fa8bf9d11cfd81', '4b10ab207ae6d809d9ce8c0568d8de0f8077d659', '7ffbe7a655bffe2b8f44343683f94c38a5e6573a', 'https://vws.vuforia.com');

-- --------------------------------------------------------

--
-- Table structure for table `hitme_customers`
--

CREATE TABLE `hitme_customers` (
  `customer_id` int(111) NOT NULL,
  `customer_assigned_client_id` varchar(50) DEFAULT NULL,
  `customer_user_id` int(11) NOT NULL,
  `customer_facebook_user_id` varchar(255) DEFAULT NULL,
  `customer_email` varchar(255) DEFAULT NULL,
  `customer_first_name` varchar(255) NOT NULL,
  `customer_last_name` varchar(255) NOT NULL,
  `customer_contact_num` varchar(255) DEFAULT NULL,
  `customer_birthdate` date DEFAULT NULL,
  `customer_gender` varchar(6) DEFAULT NULL,
  `customer_address` text,
  `customer_city` varchar(255) DEFAULT NULL,
  `customer_country` varchar(255) DEFAULT NULL,
  `customer_spinuwerte_history` text,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `enabled` int(1) NOT NULL,
  `customer_is_verified` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `hitme_customers`
--

INSERT INTO `hitme_customers` (`customer_id`, `customer_assigned_client_id`, `customer_user_id`, `customer_facebook_user_id`, `customer_email`, `customer_first_name`, `customer_last_name`, `customer_contact_num`, `customer_birthdate`, `customer_gender`, `customer_address`, `customer_city`, `customer_country`, `customer_spinuwerte_history`, `date_created`, `date_updated`, `enabled`, `customer_is_verified`) VALUES
(1, '1519966451', 28, NULL, 'renzo.cloudpanda@email.com', 'Renzo', 'Balatong', '000000000000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-14 09:26:34', '2018-08-14 09:26:34', 1, 0),
(2, '1519966451', 181, NULL, 'myutini@gmail.com', 'Alvir', 'Marquez', '09154458854', NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-27 16:34:57', '2018-07-27 16:34:57', 1, 1),
(3, '1519966451', 182, NULL, 'alvirmarquez@gmail.com', 'Alvir', 'Marquez', '09420434545', '1988-11-25', 'Male', 'Parada', 'Santa Maria', NULL, NULL, '2018-07-27 20:00:45', '2018-07-27 20:00:45', 1, 1),
(4, '1519966451', 183, NULL, 'juanmangjuan@email.com', 'Mang Juan', 'Chicharon', '09218998712', NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-28 09:43:11', '2018-07-28 09:43:11', 1, 0),
(5, '1519966451', 184, NULL, 'mangjuan@gmail.com', 'Mang', 'Juan', '09110910911', NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-28 09:47:25', '2018-07-28 09:47:25', 1, 0),
(6, '1519966451', 187, NULL, 'viralvyrrh@gmail.com', 'Alvir', 'Marquez', '09152232214', NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-30 10:45:02', '2018-07-30 10:45:02', 1, 1),
(7, '1519966451', 26, NULL, 'samantha.cloudpanda@gmail.com', 'Samantha', 'Del Carmen', '09112300011', NULL, 'Female', NULL, NULL, NULL, NULL, '2018-08-14 09:15:47', '2018-08-14 09:15:47', 1, 1),
(8, NULL, 0, '111111111122222', NULL, 'Alvirr', 'Marquezz', '9420434520', '1988-11-25', 'Male', 'Parada', 'Santa Maria', NULL, NULL, '2018-07-30 17:28:54', '2018-07-30 17:28:54', 1, 1),
(9, NULL, 0, '10205170170690276', NULL, 'Alvir', 'Marquez', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-07-31 17:25:25', '2018-07-31 17:25:25', 1, 1),
(10, NULL, 0, '137660483806495', NULL, 'Samantha', 'Cloud Panda', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-01 11:55:53', '2018-08-01 11:55:53', 1, 1),
(11, '1519966451', 6, NULL, 'sample@email.com', 'Sample', 'Lang', '00000000000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-09 17:09:45', '2018-08-09 17:09:45', 1, 0),
(12, '1519966451', 7, NULL, 'sdsd@email.com', 'Sdasd', 'Sdasd', '00000000000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-09 17:13:53', '2018-08-09 17:13:53', 1, 0),
(13, '1519966451', 8, NULL, 'loremipsum@email.com', 'Lorem', 'Ipsum', '00000000000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-09 17:23:44', '2018-08-09 17:23:44', 1, 0),
(14, '1519966451', 24, NULL, 'ipsums@email.com', 'Lorems', 'Ipsum', '00000000000', '0000-00-00', '', '', '', NULL, NULL, '0000-00-00 00:00:00', '2018-08-09 17:26:15', 1, 1),
(15, '1519966451', 29, NULL, 'sdfsdf@g.g', 'Sdfsdf', 'Sdfdsf', '0000000000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-14 09:38:33', '2018-08-14 09:38:33', 1, 0),
(16, '1519966451', 30, NULL, 'hays@email.com', 'Sample', 'Haha', '00000000000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-14 09:39:39', '2018-08-14 09:39:39', 1, 1),
(17, '1519966451', 31, NULL, 'juanmang@gmail.com', 'Juan', 'Mang', '00000000000', NULL, NULL, NULL, NULL, NULL, NULL, '2018-08-14 14:12:54', '2018-08-14 14:12:54', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_feedback`
--

CREATE TABLE `hitme_feedback` (
  `feedback_id` int(111) NOT NULL,
  `subject` varchar(225) NOT NULL,
  `comment` varchar(225) NOT NULL,
  `user_id` varchar(225) NOT NULL,
  `date_created` datetime NOT NULL,
  `enabled` int(111) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `hitme_feedback`
--

INSERT INTO `hitme_feedback` (`feedback_id`, `subject`, `comment`, `user_id`, `date_created`, `enabled`) VALUES
(1, '', 'Hello World', '35', '2018-08-13 17:52:59', 1),
(2, '', 'Hello World!!', '35', '2018-08-13 17:54:43', 1),
(3, '', 'Hello World!!', '35', '2018-08-13 17:54:45', 1),
(4, 'sample lang', 'hahaha', '16', '2018-08-14 10:00:52', 1),
(5, 'hellow worlds', 'Worlds!!', '7', '2018-08-14 11:01:09', 1),
(6, 'hello', 'Worlds!!!!', '7', '2018-08-14 15:14:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_partners`
--

CREATE TABLE `hitme_partners` (
  `partner_id` int(11) NOT NULL,
  `partner_brand` varchar(55) NOT NULL,
  `partner_contact_number` varchar(55) NOT NULL,
  `partner_contact_person` varchar(55) NOT NULL,
  `partner_email` varchar(55) NOT NULL,
  `enabled` int(11) NOT NULL,
  `approved` int(11) NOT NULL,
  `partner_logo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_partners`
--

INSERT INTO `hitme_partners` (`partner_id`, `partner_brand`, `partner_contact_number`, `partner_contact_person`, `partner_email`, `enabled`, `approved`, `partner_logo`) VALUES
(0, 'Sample', '123123', 'Sample', 'sample@gmail.com', 1, 1, ''),
(1, 'Starbucks', '0935135515', 'Buck Star', 'starbucks@email.com', 1, 1, ''),
(2, 'FDA', '123', 'Mr. FDA', 'fda@cloudpanda.com', 1, 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `hitme_partners_points`
--

CREATE TABLE `hitme_partners_points` (
  `points_id` int(11) NOT NULL,
  `partner_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `total_promo_points` int(11) NOT NULL,
  `total_target_points` int(11) NOT NULL,
  `date_buy` datetime NOT NULL,
  `date_use` datetime NOT NULL,
  `date_expiry` datetime NOT NULL,
  `status` int(11) NOT NULL,
  `verification_code` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_partners_points`
--

INSERT INTO `hitme_partners_points` (`points_id`, `partner_id`, `package_id`, `total_promo_points`, `total_target_points`, `date_buy`, `date_use`, `date_expiry`, `status`, `verification_code`) VALUES
(1, 1, 1, 2, 9, '2018-08-09 06:00:00', '2018-08-09 17:38:25', '2018-08-14 17:38:25', 1, 'ABC123'),
(2, 2, 1, 92, 51, '2018-08-09 04:00:00', '2018-08-09 19:52:25', '2018-08-14 19:52:25', 1, 'DEF345'),
(3, 1, 2, 29, 10, '2018-08-09 05:22:22', '2018-08-09 17:14:10', '2018-08-10 00:00:00', 1, 'GHI678');

-- --------------------------------------------------------

--
-- Table structure for table `hitme_points_packages`
--

CREATE TABLE `hitme_points_packages` (
  `package_id` int(11) NOT NULL,
  `promo_points` int(11) NOT NULL,
  `target_points` int(11) NOT NULL,
  `package_price` float NOT NULL,
  `package_name` varchar(55) NOT NULL,
  `enabled` int(11) NOT NULL,
  `package_start_date` date NOT NULL,
  `package_valid_until` date NOT NULL,
  `package_number_of_days_valid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_points_packages`
--

INSERT INTO `hitme_points_packages` (`package_id`, `promo_points`, `target_points`, `package_price`, `package_name`, `enabled`, `package_start_date`, `package_valid_until`, `package_number_of_days_valid`, `status`) VALUES
(1, 20, 10, 10000, 'Package 1', 1, '2018-08-07', '2018-08-31', 5, 1),
(2, 1, 1, 1, 'w', 1, '2018-08-09', '2018-08-30', 1, 0),
(1, 20, 10, 10000, 'Package 1', 1, '2018-08-07', '2018-08-31', 5, 1),
(2, 1, 1, 1, 'w', 1, '2018-08-09', '2018-08-30', 1, 0),
(1, 20, 10, 10000, 'Package 1', 1, '2018-08-07', '2018-08-31', 5, 1),
(2, 1, 1, 1, 'w', 1, '2018-08-09', '2018-08-30', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_position`
--

CREATE TABLE `hitme_position` (
  `position_id` int(11) NOT NULL,
  `position` varchar(55) NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_position`
--

INSERT INTO `hitme_position` (`position_id`, `position`, `enabled`) VALUES
(1, 'Admin', 1),
(2, 'Partner', 1),
(1, 'Admin', 1),
(2, 'Partner', 1),
(1, 'Admin', 1),
(2, 'Partner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_promos`
--

CREATE TABLE `hitme_promos` (
  `promo_id` int(111) NOT NULL,
  `promo_assigned_partner_id` int(11) NOT NULL,
  `promo_caption` varchar(55) NOT NULL,
  `promo_product` varchar(55) NOT NULL,
  `promo_image` varchar(55) NOT NULL,
  `promo_media_type` varchar(55) NOT NULL,
  `promo_media_youtube` varchar(55) NOT NULL,
  `promo_media_image` varchar(55) NOT NULL,
  `promo_thumbnail` varchar(55) NOT NULL,
  `promo_details` varchar(55) NOT NULL,
  `promo_is_unlimited_redeem` int(11) NOT NULL,
  `promo_max_redeemed_qty` int(11) NOT NULL,
  `promo_max_acquired_qty` int(11) NOT NULL,
  `promo_is_unlimited_acquisition` int(11) NOT NULL,
  `coupon_acquired_qty` int(11) NOT NULL,
  `promo_start_date` date NOT NULL,
  `promo_valid_until` date NOT NULL,
  `promo_qr_code` varchar(55) NOT NULL,
  `promo_qr_text` varchar(55) NOT NULL,
  `promo_is_bonus` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `enabled` int(11) NOT NULL,
  `is_generating_coupon` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_promos`
--

INSERT INTO `hitme_promos` (`promo_id`, `promo_assigned_partner_id`, `promo_caption`, `promo_product`, `promo_image`, `promo_media_type`, `promo_media_youtube`, `promo_media_image`, `promo_thumbnail`, `promo_details`, `promo_is_unlimited_redeem`, `promo_max_redeemed_qty`, `promo_max_acquired_qty`, `promo_is_unlimited_acquisition`, `coupon_acquired_qty`, `promo_start_date`, `promo_valid_until`, `promo_qr_code`, `promo_qr_text`, `promo_is_bonus`, `date_created`, `date_updated`, `enabled`, `is_generating_coupon`) VALUES
(1, 1, '100 For a Grande', 'Pop\'zel Coffee', '1.png', 'YouTube', '', '', '', 'Get a Grande for only 100 PHP', 0, 4, 0, 1, 0, '2018-08-04', '2018-08-24', '120485291.png', 'Pop', 0, '2018-08-02 15:42:28', '2018-08-04 09:53:58', 1, 0),
(2, 1, 'Nescafe', 'Test', '2.png', 'YouTube', '', '', '', 'test', 0, 3, 0, 1, 0, '2018-08-02', '2018-08-09', '24660448.png', 'test', 0, '2018-08-02 10:47:27', '2018-08-04 09:54:35', 0, 0),
(3, 2, ' ', ' ', '3.png', 'Image', '', 'ed857406d3556af7368c61efb6cc8e62.png', '', ' ', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-15', '2136274452.png', '1', 0, '2018-08-07 09:32:53', '2018-08-07 09:32:53', 0, 0),
(4, 2, ' ', ' ', '4.png', 'Image', '', '1a34bf2a2b68788e3e4e6aae1102fbe4.png', '', ' ', 1, 0, 0, 1, 13, '2018-08-07', '2018-08-15', '1125988830.png', '1', 1, '2018-08-07 09:33:03', '2018-08-07 09:33:03', 1, 0),
(5, 2, 'Dunkin Donut\'s', 'Choco Butternut', '5.png', 'YouTube', '', '', '', 's', 1, 0, 0, 1, 74, '2018-08-07', '2018-08-15', '1091577183.png', 's', 0, '2018-08-07 10:12:53', '2018-08-07 10:12:53', 1, 1),
(6, 2, 'x', 'x', '6.png', 'YouTube', 'x', '', '', 'x', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-16', '971569650.png', 'x', 0, '2018-08-07 10:44:58', '2018-08-07 10:44:58', 0, 1),
(7, 1, 'test', 'test', '7.png', 'YouTube', '', '', '', 'test', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-23', '1919809201.png', 'test', 0, '2018-08-08 11:40:09', '2018-08-08 11:40:09', 1, 1),
(8, 1, 'test', 'test', '8.png', 'YouTube', '', '', '', 'test', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '1051599443.png', 'test', 0, '2018-08-08 11:48:11', '2018-08-08 11:48:11', 1, 1),
(9, 2, 'text', 'text', '9.png', 'Image', '', '9ac8cd751dfe7a61dcc855f4c7a3bace.txt', '', 'text', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '696897828.png', 'text', 0, '2018-08-08 17:00:44', '2018-08-08 17:00:44', 0, 0),
(10, 2, 'text', 'text', '10.png', 'Image', '', 'e0b2a2f5c0c438c6c3f21b3f915bf038.txt', '', 'text', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '360417983.png', 'text', 0, '2018-08-08 17:00:49', '2018-08-08 17:00:49', 0, 0),
(11, 2, 'text', 'text', '11.png', 'Image', '', 'OrganicBarley_certs.jpg', '', 'text', 1, 0, 0, 1, 40, '2018-08-08', '2018-08-22', '64011400.png', 'text', 0, '2018-08-08 17:00:58', '2018-08-08 17:01:52', 0, 0),
(12, 1, '100 For a Grande', 'Pop\'zel Coffee', '1.png', 'YouTube', '', '', '', 'Get a Grande for only 100 PHP', 0, 4, 0, 1, 0, '2018-08-04', '2018-08-24', '120485291.png', 'Pop', 0, '2018-08-02 15:42:28', '2018-08-04 09:53:58', 1, 0),
(13, 1, 'Nescafe', 'Test', '2.png', 'YouTube', '', '', '', 'test', 0, 3, 0, 1, 0, '2018-08-02', '2018-08-09', '24660448.png', 'test', 0, '2018-08-02 10:47:27', '2018-08-04 09:54:35', 0, 0),
(14, 2, ' ', ' ', '3.png', 'Image', '', 'ed857406d3556af7368c61efb6cc8e62.png', '', ' ', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-15', '2136274452.png', '1', 0, '2018-08-07 09:32:53', '2018-08-07 09:32:53', 0, 0),
(15, 2, ' ', ' ', '4.png', 'Image', '', '1a34bf2a2b68788e3e4e6aae1102fbe4.png', '', ' ', 1, 0, 0, 1, 9, '2018-08-07', '2018-08-15', '1125988830.png', '1', 1, '2018-08-07 09:33:03', '2018-08-07 09:33:03', 1, 0),
(16, 2, 's', 's', '5.png', 'YouTube', '', '', '', 's', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-15', '1865074638.png', 's', 0, '2018-08-07 10:12:53', '2018-08-07 10:12:53', 0, 1),
(17, 2, 'x', 'x', '6.png', 'YouTube', 'x', '', '', 'x', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-16', '971569650.png', 'x', 0, '2018-08-07 10:44:58', '2018-08-07 10:44:58', 0, 1),
(18, 1, 'test', 'test', '7.png', 'YouTube', '', '', '', 'test', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-23', '1919809201.png', 'test', 0, '2018-08-08 11:40:09', '2018-08-08 11:40:09', 1, 1),
(19, 1, 'test', 'test', '8.png', 'YouTube', '', '', '', 'test', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '1051599443.png', 'test', 0, '2018-08-08 11:48:11', '2018-08-08 11:48:11', 1, 1),
(20, 2, 'text', 'text', '9.png', 'Image', '', '9ac8cd751dfe7a61dcc855f4c7a3bace.txt', '', 'text', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '696897828.png', 'text', 0, '2018-08-08 17:00:44', '2018-08-08 17:00:44', 0, 0),
(21, 2, 'text', 'text', '10.png', 'Image', '', 'e0b2a2f5c0c438c6c3f21b3f915bf038.txt', '', 'text', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '360417983.png', 'text', 0, '2018-08-08 17:00:49', '2018-08-08 17:00:49', 0, 0),
(22, 2, 'text', 'text', '11.png', 'Image', '', 'OrganicBarley_certs.jpg', '', 'text', 1, 0, 0, 1, 40, '2018-08-08', '2018-08-22', '64011400.png', 'text', 0, '2018-08-08 17:00:58', '2018-08-08 17:01:52', 0, 0),
(23, 1, '100 For a Grande', 'Pop\'zel Coffee', '1.png', 'YouTube', '', '', '', 'Get a Grande for only 100 PHP', 0, 4, 0, 1, 0, '2018-08-04', '2018-08-24', '120485291.png', 'Pop', 0, '2018-08-02 15:42:28', '2018-08-04 09:53:58', 1, 0),
(24, 1, 'Nescafe', 'Test', '2.png', 'YouTube', '', '', '', 'test', 0, 3, 0, 1, 0, '2018-08-02', '2018-08-09', '24660448.png', 'test', 0, '2018-08-02 10:47:27', '2018-08-04 09:54:35', 0, 0),
(25, 2, ' ', ' ', '3.png', 'Image', '', 'ed857406d3556af7368c61efb6cc8e62.png', '', ' ', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-15', '2136274452.png', '1', 0, '2018-08-07 09:32:53', '2018-08-07 09:32:53', 0, 0),
(26, 2, ' ', ' ', '4.png', 'Image', '', '1a34bf2a2b68788e3e4e6aae1102fbe4.png', '', ' ', 1, 0, 0, 1, 9, '2018-08-07', '2018-08-15', '1125988830.png', '1', 1, '2018-08-07 09:33:03', '2018-08-07 09:33:03', 0, 0),
(27, 2, 's', 's', '5.png', 'YouTube', '', '', '', 's', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-15', '1865074638.png', 's', 0, '2018-08-07 10:12:53', '2018-08-07 10:12:53', 0, 1),
(28, 2, 'x', 'x', '6.png', 'YouTube', 'x', '', '', 'x', 1, 0, 0, 1, 0, '2018-08-07', '2018-08-16', '971569650.png', 'x', 0, '2018-08-07 10:44:58', '2018-08-07 10:44:58', 0, 1),
(29, 1, 'test', 'test', '7.png', 'YouTube', '', '', '', 'test', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-23', '1919809201.png', 'test', 0, '2018-08-08 11:40:09', '2018-08-08 11:40:09', 1, 1),
(30, 1, 'test', 'test', '8.png', 'YouTube', '', '', '', 'test', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '1051599443.png', 'test', 0, '2018-08-08 11:48:11', '2018-08-08 11:48:11', 1, 1),
(31, 2, 'text', 'text', '9.png', 'Image', '', '9ac8cd751dfe7a61dcc855f4c7a3bace.txt', '', 'text', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '696897828.png', 'text', 0, '2018-08-08 17:00:44', '2018-08-08 17:00:44', 0, 0),
(32, 2, 'text', 'text', '10.png', 'Image', '', 'e0b2a2f5c0c438c6c3f21b3f915bf038.txt', '', 'text', 1, 0, 0, 1, 0, '2018-08-08', '2018-08-22', '360417983.png', 'text', 0, '2018-08-08 17:00:49', '2018-08-08 17:00:49', 0, 0),
(33, 2, 'text', 'text', '11.png', 'Image', '', 'OrganicBarley_certs.jpg', '', 'text', 1, 0, 0, 1, 40, '2018-08-08', '2018-08-22', '64011400.png', 'text', 0, '2018-08-08 17:00:58', '2018-08-08 17:01:52', 0, 0),
(34, 2, 'Good Leaf Ashitaba', 'Good Leaf Ashitaba', '0.png', 'Image', '', '833ef3b8cbedb5c5968de4f9bf5e05f3.jpg', '', 'test', 1, 0, 0, 1, 0, '2018-08-13', '2019-01-31', '890041007.png', 'test', 0, '2018-08-13 16:13:13', '2018-08-13 16:13:13', 0, 0),
(35, 2, 'GoodLeafAshitabaMorning', 'GoodLeafAshitabaMorning1', '35.png', 'Image', '', '8b4e067b63e1b888ddabcd10715c8ee7.jpg', '', 'GoodLeafAshitabaMorning1', 1, 0, 0, 1, 2, '2018-08-01', '2019-08-16', '865637792.png', 'GoodLeafAshitabaMorning1', 0, '2018-08-13 16:23:21', '2018-08-14 13:55:42', 1, 0),
(36, 2, 'Barley', 'Barley', '36.png', 'Image', '', '0c5ae7cb797fd37f0fd0c6f21919f618.jpg', '', 'Barley', 1, 0, 0, 1, 19, '2018-07-01', '2019-01-31', '631717825.png', 'Barley', 0, '2018-08-13 16:58:35', '2018-08-14 13:54:55', 1, 0),
(37, 2, 'Supremo', 'Supremo', '37.png', 'Image', '', '0d42af7ec8cbd29bb9a9ca7ff745ca3a.jpg', '', 'Supremo', 1, 0, 0, 1, 2, '2018-08-01', '2018-12-28', '1375267628.png', 'Supremo', 0, '2018-08-13 18:44:48', '2018-08-14 13:53:41', 1, 0),
(38, 2, 'Conditioner', 'Conditioner', '38.png', 'Image', '', 'ea0220441ad10b8d448f7d8c071f186b.jpg', '', 'Conditioner', 1, 0, 0, 1, 0, '2018-08-13', '2019-01-18', '1369619623.png', 'Conditioner', 0, '2018-08-13 18:45:19', '2018-08-13 18:45:19', 0, 1),
(39, 2, 'conditioner', 'conditioner', '39.png', 'Image', '', '344bf54251e81280c539910764dca964.jpg', '', 'conditioner', 1, 0, 0, 1, 0, '2018-08-06', '2018-12-20', '298727308.png', 'conditioner', 0, '2018-08-13 18:46:11', '2018-08-13 18:46:11', 0, 1),
(40, 2, 'conditioner', 'conditioner', '40.png', 'Image', '', 'a07e0353a10565a648f8f9ff7335de11.jpg', '', 'conditioner', 1, 0, 0, 1, 1, '2018-08-13', '2018-11-28', '1936749163.png', 'conditioner', 0, '2018-08-13 18:47:00', '2018-08-14 13:53:18', 1, 0),
(41, 2, 'toothpaste', 'toothpaste', '41.png', 'Image', '', '4b10c306ca12273ed39945d64bceb61f.jpg', '', 'toothpaste', 1, 0, 0, 1, 4, '2018-08-13', '2018-08-29', '630915115.png', 'toothpaste', 0, '2018-08-13 18:47:25', '2018-08-14 13:52:54', 1, 0),
(42, 2, 'omnifit', 'omnifit', '42.png', 'Image', '', '9d4157977c109d827e1a40092035a31d.jpg', '', 'omnifit', 1, 0, 0, 1, 4, '2018-08-13', '2018-10-19', '380682646.png', 'omnifit', 0, '2018-08-13 18:48:16', '2018-08-14 13:52:22', 1, 0),
(43, 2, 'shampoo', 'shampoo', '43.png', 'Image', '', 'e2370641455318ac30932f03f380cf10.jpg', '', 'test', 1, 0, 0, 1, 0, '2018-08-13', '2018-10-26', '2079952884.png', 's', 0, '2018-08-13 19:37:03', '2018-08-14 13:52:05', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `hitme_targets`
--

CREATE TABLE `hitme_targets` (
  `target_id` varchar(55) NOT NULL,
  `target_assigned_partner_id` int(11) NOT NULL,
  `target_assigned_promo_id` varchar(55) NOT NULL,
  `target_image` varchar(55) NOT NULL,
  `target_name` varchar(55) NOT NULL,
  `target_tracking_rating` int(11) NOT NULL,
  `date_created` datetime NOT NULL,
  `enabled` int(11) NOT NULL,
  `status` varchar(11) NOT NULL,
  `remarks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_targets`
--

INSERT INTO `hitme_targets` (`target_id`, `target_assigned_partner_id`, `target_assigned_promo_id`, `target_image`, `target_name`, `target_tracking_rating`, `date_created`, `enabled`, `status`, `remarks`) VALUES
('2aa44917b64b4927830dc6675b341768', 1, '1', 'd14ec682-750f-4b00-8bda-f2e2d2b1ca90_2.61ab56905f1bcd38', 'Target', 5, '2018-08-08 11:59:45', 0, 'active', ''),
('3a3b15bc595a4c6496b6c69ab0f7a8fb', 1, '2', 'IMG_20180611_153958.jpg', 'asdsads', 5, '2018-08-02 13:35:20', 0, 'inactive', ''),
('519c7e4994cb4222b4f9fee722b28678', 1, '2', 'fita.jpg', 'sssssssss', 5, '2018-08-02 13:48:55', 0, 'active', ''),
('9a2872f130ca47138c0b747d277b71a8', 1, '1', 'nes1.jpg', 'New Target', 5, '2018-08-02 13:48:09', 1, 'active', ''),
('d67172efc260475088c4561db6489612', 1, '1', 'fita2.jpg', 'Target 22', 5, '2018-08-04 11:00:34', 0, 'active', ''),
('2aa44917b64b4927830dc6675b341768', 1, '1', 'd14ec682-750f-4b00-8bda-f2e2d2b1ca90_2.61ab56905f1bcd38', 'Target', 5, '2018-08-08 11:59:45', 0, 'active', ''),
('3a3b15bc595a4c6496b6c69ab0f7a8fb', 1, '2', 'IMG_20180611_153958.jpg', 'asdsads', 5, '2018-08-02 13:35:20', 0, 'inactive', ''),
('519c7e4994cb4222b4f9fee722b28678', 1, '2', 'fita.jpg', 'sssssssss', 5, '2018-08-02 13:48:55', 0, 'active', ''),
('9a2872f130ca47138c0b747d277b71a8', 1, '1', 'nes1.jpg', 'New Target', 5, '2018-08-02 13:48:09', 1, 'active', ''),
('d67172efc260475088c4561db6489612', 1, '1', 'fita2.jpg', 'Target 22', 5, '2018-08-04 11:00:34', 0, 'active', ''),
('2aa44917b64b4927830dc6675b341768', 1, '1', 'd14ec682-750f-4b00-8bda-f2e2d2b1ca90_2.61ab56905f1bcd38', 'Target', 5, '2018-08-08 11:59:45', 0, 'active', ''),
('3a3b15bc595a4c6496b6c69ab0f7a8fb', 1, '2', 'IMG_20180611_153958.jpg', 'asdsads', 5, '2018-08-02 13:35:20', 0, 'inactive', ''),
('519c7e4994cb4222b4f9fee722b28678', 1, '2', 'fita.jpg', 'sssssssss', 5, '2018-08-02 13:48:55', 0, 'active', ''),
('9a2872f130ca47138c0b747d277b71a8', 1, '1', 'nes1.jpg', 'New Target', 5, '2018-08-02 13:48:09', 1, 'active', ''),
('d67172efc260475088c4561db6489612', 1, '1', 'fita2.jpg', 'Target 22', 5, '2018-08-04 11:00:34', 0, 'active', ''),
('d94e892cfa754919af864eb7b2d61320', 2, '35', 'GoodLeafAshitabaMorning1.jpg', 'GoodLeafAshitabaMorning101', 4, '2018-08-13 16:23:54', 0, 'active', ''),
('f0d05074f5ab40e48aabeaa60008b145', 2, '35', 'GoodLeafAshitaba_certs.jpg', 'Ashitaba', 1, '2018-08-13 16:33:07', 0, 'active', ''),
('069ef2b9c3d34ea3a53803223f7d1a09', 2, '35', 'GoodLeafAshitabaMorning1.jpg', 'Ashitaba1001', 4, '2018-08-13 16:33:59', 1, 'active', ''),
('ba7201cc30c5448faa65d73d4ea6d430', 2, '36', 'barley.jpg', 'Barley101', 3, '2018-08-13 16:59:12', 1, 'active', ''),
('3aa96379e294465c8bff5478949de364', 2, '42', 'Omnifit4.jpg', 'OmnifitFront', 2, '2018-08-13 18:49:16', 1, 'active', ''),
('eb29823f417845ca817d228fb36dfc48', 2, '37', 'KapeSupremo8.jpg', 'Supremo', 3, '2018-08-13 18:50:09', 1, 'active', ''),
('11c674661fbf4721abc80fd87e36ea9f', 2, '40', 'NaturesOwnConditioner4.jpg', 'Conditione1', 1, '2018-08-13 18:50:47', 1, 'active', ''),
('06648fb0285f40fab93963238ae24d6d', 2, '41', 'NaturesOwnToothpaste1.jpg', 'toothpaste101', 3, '2018-08-13 18:51:28', 1, 'active', ''),
('297b4c5ae09b4f87abc5969f6a1ec22a', 2, '35', 'GoodLeafAshitabaMorning2.jpg', 'Ashitaba10101', 2, '2018-08-13 19:16:56', 1, 'active', ''),
('6d731c71ffb244c69be400662e459bd3', 2, '35', 'GoodLeafAshitabaMorning4.jpg', 'Ashitaba1012', 2, '2018-08-13 19:17:17', 1, 'active', ''),
('cb851db5ab864e9c81ad49705afc2e89', 2, '35', 'GoodLeafAshitabaMorning5.jpg', 'Ashitaba10103', 2, '2018-08-13 19:17:42', 1, 'active', ''),
('b5d84085ec7c405292f985170127f104', 2, '35', 'GoodLeafAshitabaMorning6.jpg', 'Ashitaba1014', 0, '2018-08-13 19:18:16', 1, 'active', ''),
('4638bca8dccf4b8d8dc5a1831002ca60', 2, '35', 'GoodLeafAshitabaMorning9.jpg', 'Ashitaba1015', 0, '2018-08-13 19:18:42', 1, 'active', ''),
('add0580740ba4b9eb259e4a54ed2eadc', 2, '35', 'GoodLeafAshitabaMorning10.jpg', 'Ashitaba1016', 0, '2018-08-13 19:19:09', 1, 'active', ''),
('281af90aeb854f7c911bb45e65de2088', 2, '35', 'GoodLeafAshitabaMorning12.jpg', 'Ashitaba10107', 4, '2018-08-13 19:19:59', 1, 'active', ''),
('69c4ad44eeb240a79c6bd8edac33c70a', 2, '35', 'GoodLeafAshitabaMorning14.jpg', 'Ashitaba101033', 1, '2018-08-13 19:20:40', 1, 'active', ''),
('a26116bfd9664411abc91f7239900c06', 2, '35', 'GoodLeafAshitabaMorning20.jpg', 'Ashitaba10221', 1, '2018-08-13 19:21:07', 1, 'active', ''),
('820cfff97bb146c2842429bcf3061bc2', 2, '35', 'GoodLeafAshitabaMorning21.jpg', 'Ashitaba1010212', 5, '2018-08-13 19:21:43', 1, 'active', ''),
('cb0db36e1ee1413ca00795e301b9a689', 2, '37', 'KapeSupremo1.jpg', 'Supremo101012', 4, '2018-08-13 19:22:18', 1, 'active', ''),
('c16641607f5e43fba51ca26c59ace6ee', 2, '37', 'KapeSupremo5.jpg', 'Supremo1231', 3, '2018-08-13 19:22:46', 1, 'active', ''),
('3e54b9d4465841689dbee0f75c63ad9a', 2, '37', 'KapeSupremo8.jpg', 'Supremo13213', 3, '2018-08-13 19:23:17', 1, 'active', ''),
('090827b838cb465ba83de9167871d13a', 2, '37', 'KapeSupremo9.jpg', 'Supremo123123', 4, '2018-08-13 19:23:42', 1, 'active', ''),
('f8e1bdbfb8234a9daac6a64cee54b83f', 2, '37', 'KapeSupremo10.jpg', 'Supremo5345', 3, '2018-08-13 19:24:15', 1, 'active', ''),
('3dba1ff0de1343a280d2a5edb6ca8f16', 2, '37', 'KapeSupremo12.jpg', 'Suopremo0323', 3, '2018-08-13 19:24:47', 1, 'active', ''),
('ff7fa58568b04217bed1267431df27a8', 2, '37', 'KapeSupremo15.jpg', 'Supremo12320', 3, '2018-08-13 19:25:22', 1, 'active', ''),
('6c3226cc9aa6492f91dcd65232736278', 2, '37', 'KapeSupremo18.jpg', 'Supremo2938192', 2, '2018-08-13 19:25:49', 1, 'active', ''),
('edb21bd3dcb444a4bc99e8372ec7f972', 2, '37', 'KapeSupremo23.jpg', 'Supremo23123', 4, '2018-08-13 19:26:23', 1, 'active', ''),
('c919e46db9494227906ba8bf238b20c6', 2, '37', 'KapeSupremo24.jpg', 'Supremo213213ww', 5, '2018-08-13 19:26:45', 1, 'active', ''),
('2aac14d4999546e78af18106dc7b4a55', 2, '37', 'KapeSupremo25.jpg', 'Supremosd123', 5, '2018-08-13 19:27:10', 1, 'active', ''),
('41c5a0cdd1db49508e1fc7e4d85620e1', 2, '37', 'KapeSupremo32.jpg', 'Suprem006o', 3, '2018-08-13 19:27:53', 1, 'active', ''),
('8d85bdea5af945cd8022bd5394fe9ca7', 2, '36', 'OrganicBarleyJuicePowderMix1.jpg', 'Barley23213', 3, '2018-08-13 19:28:28', 1, 'active', ''),
('a417265cd5c2424d8b9de53a43c8688f', 2, '36', 'OrganicBarleyJuicePowderMix5.jpg', 'Barley', 3, '2018-08-13 19:28:58', 1, 'active', ''),
('3048ccd1dae54d3183bbab590eb49775', 2, '36', 'OrganicBarleyJuicePowderMix17.jpg', 'Barley2312', 3, '2018-08-13 19:29:31', 1, 'active', ''),
('ebdd9e49b38848779237fb263d4a5ea6', 2, '36', 'OrganicBarleyJuicePowderMix21.jpg', 'Barleyq', 3, '2018-08-13 19:29:54', 1, 'active', ''),
('4a9aeb6858e64056b3017919af6963e1', 2, '40', 'NaturesOwnConditioner1.jpg', 'Conditioner32', 1, '2018-08-13 19:30:45', 1, 'active', ''),
('3df26ceb474247f68696d28012eeb384', 2, '40', 'NaturesOwnConditioner2.jpg', 'Conditioner32sd', 0, '2018-08-13 19:31:18', 1, 'active', ''),
('0e7f128720774dedaa08a75f42a497ca', 2, '40', 'NaturesOwnConditioner35.jpg', 'Conditioner32ee', 2, '2018-08-13 19:31:46', 1, 'active', ''),
('3589599ffd554b31874e331467e02bef', 2, '40', 'NaturesOwnConditioner33.jpg', 'Conditioner323', 1, '2018-08-13 19:32:19', 1, 'active', ''),
('b45731aa677b46b48a27e8548d51853d', 2, '41', 'NaturesOwnToothpaste1.jpg', 'toothpaste23', 3, '2018-08-13 19:32:53', 1, 'active', ''),
('3a431062ddea4d25a8335f56b43f89c7', 2, '41', 'NaturesOwnToothpaste2.jpg', 'toothpaste23d', 3, '2018-08-13 19:33:14', 1, 'active', ''),
('0fe5f3c352a14455929a9a083c567d07', 2, '41', 'NaturesOwnToothpaste3.jpg', 'toothpaste23ff', 1, '2018-08-13 19:33:42', 1, 'active', ''),
('bf2ec56236d14acaa55cd8a9305656d1', 2, '41', 'NaturesOwnToothpaste4.jpg', 'toothpaste23s', 4, '2018-08-13 19:34:09', 1, 'active', ''),
('f4230ff26b6d4038be06b7ab3e3ce4bd', 2, '42', 'Omnifit1.jpg', 'omnifit', 0, '2018-08-13 19:34:52', 1, 'active', ''),
('5e8b90a824dd479ba7dfb6b4cd19de49', 2, '42', 'Omnifit5.jpg', 'omnifite', 2, '2018-08-13 19:35:17', 1, 'active', ''),
('49bd93d8be8344c680e1a70610a21029', 2, '42', 'Omnifit6.jpg', 'omnifitww', 2, '2018-08-13 19:35:48', 1, 'active', ''),
('4858e1b0333040ec9e28129a0d870575', 2, '42', 'Omnifit3.jpg', 'omnifiterwew', 1, '2018-08-13 19:36:11', 1, 'active', ''),
('f91f8ffb8e234068b3854e4aae5a52d6', 2, '43', 'NaturesOwnShampoo1.jpg', 'shampoo', 1, '2018-08-13 19:37:46', 1, 'active', ''),
('ac9c0beb9e6246e1a212f1d8a06dadb5', 2, '43', 'NaturesOwnShampoo3.jpg', 'shampoosd', 1, '2018-08-13 19:38:14', 1, 'active', ''),
('3df3d5040a484aaa953e71845965b34d', 2, '43', 'NaturesOwnShampoo4.jpg', 'shampoo33', 2, '2018-08-13 19:38:40', 1, 'active', ''),
('b1058b3872fe40838e335fab3c94799c', 2, '43', 'NaturesOwnShampoo16.jpg', 'shampoosds', 1, '2018-08-13 19:39:05', 1, 'active', '');

-- --------------------------------------------------------

--
-- Table structure for table `hitme_users`
--

CREATE TABLE `hitme_users` (
  `user_id` int(111) NOT NULL,
  `user_email` varchar(55) NOT NULL,
  `password` varchar(1000) NOT NULL,
  `position_id` int(11) NOT NULL,
  `date_activated` datetime NOT NULL,
  `date_created` datetime NOT NULL,
  `date_updated` datetime NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hitme_users`
--

INSERT INTO `hitme_users` (`user_id`, `user_email`, `password`, `position_id`, `date_activated`, `date_created`, `date_updated`, `enabled`) VALUES
(1, 'admin@cloudpanda.ph', '$2y$12$irrIK2y4pWhiD0chndJ2AuRXX.PQxJhFSdtXrca/vtrq/fX0qZ51u', 1, '0000-00-00 00:00:00', '2018-08-01 11:35:16', '2018-08-01 11:35:16', 1),
(2, 'starbucks@email.com', '$2y$12$ARLWKbAD1xy3iLWeQJTYbeIe27MtojN80BjEUme987V5JLTG4dA0e', 2, '0000-00-00 00:00:00', '2018-08-01 14:03:39', '2018-08-01 14:03:39', 1),
(3, 'fda@cloudpanda.com', '$2y$12$SRDPDy0XW7GOKq2gI/UlV.RYJAVhrlneMzGXbvPfTLQR28b6H.ODm', 2, '0000-00-00 00:00:00', '2018-08-07 09:22:34', '2018-08-07 09:22:34', 1),
(4, 'ipsum@email.com', '$2y$12$PIrzetXozj1vbXYjSbd9Q.TTAygpixudF42MO7RA6.ej42sQKzmFK', 4, '0000-00-00 00:00:00', '2018-08-09 17:01:26', '2018-08-09 17:01:26', 1),
(5, 'sample@email.com', '$2y$12$.p6DjI/EQEKUdcInhQt59uYu0KQ76WL5BDyEorbBGGEPJ0egHzBve', 4, '2018-08-09 17:09:45', '2018-08-09 17:09:45', '2018-08-09 17:09:45', 1),
(6, 'sdsd@email.com', '$2y$12$LwfkSWYaxLS8iCoCuxqi1uWpcXPJiL8E2PXmIuKHQUsR040chWPl2', 4, '2018-08-09 17:13:52', '2018-08-09 17:13:52', '2018-08-09 17:13:52', 1),
(7, 'loremipsum@email.com', '$2y$12$7EQYqLoWl72CisH.F3g/6es8PMCPagw5wrnq8bDmqukxrLXYD9Z.C', 4, '2018-08-09 17:23:43', '2018-08-09 17:23:43', '2018-08-09 17:23:43', 1),
(8, 'ipsums@email.com', '$2y$12$Nd7E8WlpsaDeIC8zJmX9CursPHEljzCnt94W/J80US1VIeBwRSQLO', 4, '2018-08-09 17:26:15', '2018-08-09 17:26:15', '2018-08-09 17:26:15', 1),
(9, 'admin@cloudpanda.ph', '$2y$12$irrIK2y4pWhiD0chndJ2AuRXX.PQxJhFSdtXrca/vtrq/fX0qZ51u', 1, '0000-00-00 00:00:00', '2018-08-01 11:35:16', '2018-08-01 11:35:16', 1),
(10, 'starbucks@email.com', '$2y$12$ARLWKbAD1xy3iLWeQJTYbeIe27MtojN80BjEUme987V5JLTG4dA0e', 2, '0000-00-00 00:00:00', '2018-08-01 14:03:39', '2018-08-01 14:03:39', 1),
(11, 'fda@cloudpanda.com', '$2y$12$SRDPDy0XW7GOKq2gI/UlV.RYJAVhrlneMzGXbvPfTLQR28b6H.ODm', 2, '0000-00-00 00:00:00', '2018-08-07 09:22:34', '2018-08-07 09:22:34', 1),
(12, 'ipsum@email.com', '$2y$12$PIrzetXozj1vbXYjSbd9Q.TTAygpixudF42MO7RA6.ej42sQKzmFK', 4, '0000-00-00 00:00:00', '2018-08-09 17:01:26', '2018-08-09 17:01:26', 1),
(13, 'sample@email.com', '$2y$12$.p6DjI/EQEKUdcInhQt59uYu0KQ76WL5BDyEorbBGGEPJ0egHzBve', 4, '2018-08-09 17:09:45', '2018-08-09 17:09:45', '2018-08-09 17:09:45', 1),
(14, 'sdsd@email.com', '$2y$12$LwfkSWYaxLS8iCoCuxqi1uWpcXPJiL8E2PXmIuKHQUsR040chWPl2', 4, '2018-08-09 17:13:52', '2018-08-09 17:13:52', '2018-08-09 17:13:52', 1),
(15, 'loremipsum@email.com', '$2y$12$7EQYqLoWl72CisH.F3g/6es8PMCPagw5wrnq8bDmqukxrLXYD9Z.C', 4, '2018-08-09 17:23:43', '2018-08-09 17:23:43', '2018-08-09 17:23:43', 1),
(16, 'ipsums@email.com', '$2y$12$Nd7E8WlpsaDeIC8zJmX9CursPHEljzCnt94W/J80US1VIeBwRSQLO', 4, '2018-08-09 17:26:15', '2018-08-09 17:26:15', '2018-08-09 17:26:15', 1),
(17, 'admin@cloudpanda.ph', '$2y$12$irrIK2y4pWhiD0chndJ2AuRXX.PQxJhFSdtXrca/vtrq/fX0qZ51u', 1, '0000-00-00 00:00:00', '2018-08-01 11:35:16', '2018-08-01 11:35:16', 1),
(18, 'starbucks@email.com', '$2y$12$ARLWKbAD1xy3iLWeQJTYbeIe27MtojN80BjEUme987V5JLTG4dA0e', 2, '0000-00-00 00:00:00', '2018-08-01 14:03:39', '2018-08-01 14:03:39', 1),
(19, 'fda@cloudpanda.com', '$2y$12$SRDPDy0XW7GOKq2gI/UlV.RYJAVhrlneMzGXbvPfTLQR28b6H.ODm', 2, '0000-00-00 00:00:00', '2018-08-07 09:22:34', '2018-08-07 09:22:34', 1),
(20, 'ipsum@email.com', '$2y$12$PIrzetXozj1vbXYjSbd9Q.TTAygpixudF42MO7RA6.ej42sQKzmFK', 4, '0000-00-00 00:00:00', '2018-08-09 17:01:26', '2018-08-09 17:01:26', 1),
(21, 'sample@email.com', '$2y$12$.p6DjI/EQEKUdcInhQt59uYu0KQ76WL5BDyEorbBGGEPJ0egHzBve', 4, '2018-08-09 17:09:45', '2018-08-09 17:09:45', '2018-08-09 17:09:45', 1),
(22, 'sdsd@email.com', '$2y$12$LwfkSWYaxLS8iCoCuxqi1uWpcXPJiL8E2PXmIuKHQUsR040chWPl2', 4, '2018-08-09 17:13:52', '2018-08-09 17:13:52', '2018-08-09 17:13:52', 1),
(23, 'loremipsum@email.com', '$2y$12$7EQYqLoWl72CisH.F3g/6es8PMCPagw5wrnq8bDmqukxrLXYD9Z.C', 4, '2018-08-09 17:23:43', '2018-08-09 17:23:43', '2018-08-09 17:23:43', 1),
(24, 'ipsums@email.com', '$2y$12$Nd7E8WlpsaDeIC8zJmX9CursPHEljzCnt94W/J80US1VIeBwRSQLO', 4, '2018-08-09 17:26:15', '2018-08-09 17:26:15', '2018-08-09 17:26:15', 1),
(25, 'sample@gmail.com', '$2y$12$ma5Vmkjpuvf0cYAiTPx2UeE9vxyBlxgY8rsxQeyp7koB1kGuqubHW', 2, '0000-00-00 00:00:00', '2018-08-13 18:31:25', '2018-08-13 18:31:25', 1),
(26, 'samantha.cloudpanda@gmail.com', '$2y$12$n2lWbzuw63ItoEP9ppVUaeiusooxpbnfns43SmuopJQXt4aNjPov6', 4, '2018-08-14 09:04:01', '2018-08-14 09:04:01', '2018-08-14 09:04:01', 1),
(28, 'renzo.cloudpanda@email.com', '$2y$12$vlPcHAgLrQgWRpl7JLizV.wYe.O/vDntC7EQ8RX6xRQgOhxfxcriy', 4, '2018-08-14 09:26:34', '2018-08-14 09:26:34', '2018-08-14 09:26:34', 1),
(29, 'sdfsdf@g.g', '$2y$12$m.hPqggCDbA8xRNU9rFqu..guRum/I3ell5X7xQYaI8SPtpY5lMze', 4, '2018-08-14 09:38:32', '2018-08-14 09:38:32', '2018-08-14 09:38:32', 1),
(30, 'hays@email.com', '$2y$12$kHq/y/Wky3audu/gvB2bNuVMag9pdW09krE3CpYnjcA4vQi4If2/S', 4, '2018-08-14 09:39:39', '2018-08-14 09:39:39', '2018-08-14 09:39:39', 1),
(31, 'juanmang@gmail.com', '$2y$12$7K3KwI57RVW.qaMKqdR41.kJvLdr75fLy5Ios4yaWxIMEdiM7hufO', 4, '2018-08-14 14:12:54', '2018-08-14 14:12:54', '2018-08-14 14:12:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `onesignal_credentials`
--

CREATE TABLE `onesignal_credentials` (
  `app_id` varchar(55) NOT NULL,
  `authorization_key` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `onesignal_credentials`
--

INSERT INTO `onesignal_credentials` (`app_id`, `authorization_key`) VALUES
('2851ead5-0921-4e77-a03b-e31aadfa1b5d', 'N2JkYjI0NDMtOGVjMC00ZDZiLTg5YjgtYjIxYTRlZjlkMWRk'),
('2851ead5-0921-4e77-a03b-e31aadfa1b5d', 'N2JkYjI0NDMtOGVjMC00ZDZiLTg5YjgtYjIxYTRlZjlkMWRk'),
('2851ead5-0921-4e77-a03b-e31aadfa1b5d', 'N2JkYjI0NDMtOGVjMC00ZDZiLTg5YjgtYjIxYTRlZjlkMWRk');

-- --------------------------------------------------------

--
-- Table structure for table `one_signal_segments`
--

CREATE TABLE `one_signal_segments` (
  `id` int(11) NOT NULL,
  `segment_name` varchar(55) NOT NULL,
  `segment_filter` text NOT NULL,
  `enabled` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `one_signal_segments`
--

INSERT INTO `one_signal_segments` (`id`, `segment_name`, `segment_filter`, `enabled`) VALUES
(1, 'Manila', 'location 5 13.1313 123.1232 |', 0),
(2, 'Visayas', 'location 9 12.15245 13.25455 |', 0),
(3, 'Mindanao', 'location 6 12313 123123 |', 0),
(4, 'Multiple Loacation', 'location 3 333 333 | location 5 323 123 |', 0),
(5, 'Test', 'location 1 2 3 |', 0),
(6, 'Huawei', 'session_time > 6000 |', 1),
(7, 'l', 'location 1 2 2 |', 0),
(8, 'TESTING', 'location 5 12.2313 13.12313 |', 0),
(9, 'Amount Spent', 'amount_spent = 500 |', 0),
(10, 'All filters', 'last_session < 2 | session_count = 3 | session_time < 4 | amount_spent = 5 | bought_sku 6 = 6 | app_version = 7 | tag 8 = 8 | location 9 9 9 | first_session < 1 |', 0),
(11, 'test device', 'session_time > 6000 |', 0),
(12, 'AllFilters', 'first_session < 1 | last_session < 2 | session_count = 3 | session_time < 4 | amount_spent = 5 | bought_sku 6 = 6 | app_version = 7 | tag 8 = 8 | location 9 9 9 |', 1),
(1, 'Manila', 'location 5 13.1313 123.1232 |', 0),
(2, 'Visayas', 'location 9 12.15245 13.25455 |', 0),
(3, 'Mindanao', 'location 6 12313 123123 |', 0),
(4, 'Multiple Loacation', 'location 3 333 333 | location 5 323 123 |', 0),
(5, 'Test', 'location 1 2 3 |', 0),
(6, 'Huawei', 'session_time > 6000 |', 1),
(7, 'l', 'location 1 2 2 |', 0),
(8, 'TESTING', 'location 5 12.2313 13.12313 |', 0),
(9, 'Amount Spent', 'amount_spent = 500 |', 0),
(10, 'All filters', 'last_session < 2 | session_count = 3 | session_time < 4 | amount_spent = 5 | bought_sku 6 = 6 | app_version = 7 | tag 8 = 8 | location 9 9 9 | first_session < 1 |', 0),
(11, 'test device', 'session_time > 6000 |', 0),
(12, 'AllFilters', 'first_session < 1 | last_session < 2 | session_count = 3 | session_time < 4 | amount_spent = 5 | bought_sku 6 = 6 | app_version = 7 | tag 8 = 8 | location 9 9 9 |', 1),
(1, 'Manila', 'location 5 13.1313 123.1232 |', 0),
(2, 'Visayas', 'location 9 12.15245 13.25455 |', 0),
(3, 'Mindanao', 'location 6 12313 123123 |', 0),
(4, 'Multiple Loacation', 'location 3 333 333 | location 5 323 123 |', 0),
(5, 'Test', 'location 1 2 3 |', 0),
(6, 'Huawei', 'session_time > 6000 |', 1),
(7, 'l', 'location 1 2 2 |', 0),
(8, 'TESTING', 'location 5 12.2313 13.12313 |', 0),
(9, 'Amount Spent', 'amount_spent = 500 |', 0),
(10, 'All filters', 'last_session < 2 | session_count = 3 | session_time < 4 | amount_spent = 5 | bought_sku 6 = 6 | app_version = 7 | tag 8 = 8 | location 9 9 9 | first_session < 1 |', 0),
(11, 'test device', 'session_time > 6000 |', 0),
(12, 'AllFilters', 'first_session < 1 | last_session < 2 | session_count = 3 | session_time < 4 | amount_spent = 5 | bought_sku 6 = 6 | app_version = 7 | tag 8 = 8 | location 9 9 9 |', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `arm_bg`
--
ALTER TABLE `arm_bg`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- Indexes for table `feedback_offline`
--
ALTER TABLE `feedback_offline`
  ADD PRIMARY KEY (`off_id`);

--
-- Indexes for table `hitme_admin`
--
ALTER TABLE `hitme_admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `admin_id` (`admin_id`);

--
-- Indexes for table `hitme_announcements`
--
ALTER TABLE `hitme_announcements`
  ADD PRIMARY KEY (`announcement_id`) USING BTREE;

--
-- Indexes for table `hitme_banners`
--
ALTER TABLE `hitme_banners`
  ADD PRIMARY KEY (`banner_id`);

--
-- Indexes for table `hitme_branches`
--
ALTER TABLE `hitme_branches`
  ADD PRIMARY KEY (`branch_id`);

--
-- Indexes for table `hitme_coupon_wallet`
--
ALTER TABLE `hitme_coupon_wallet`
  ADD PRIMARY KEY (`coupon_id`);

--
-- Indexes for table `hitme_credentials`
--
ALTER TABLE `hitme_credentials`
  ADD UNIQUE KEY `client_access_key` (`client_access_key`);

--
-- Indexes for table `hitme_customers`
--
ALTER TABLE `hitme_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `hitme_feedback`
--
ALTER TABLE `hitme_feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `hitme_partners`
--
ALTER TABLE `hitme_partners`
  ADD PRIMARY KEY (`partner_id`),
  ADD UNIQUE KEY `partner_id` (`partner_id`);

--
-- Indexes for table `hitme_partners_points`
--
ALTER TABLE `hitme_partners_points`
  ADD PRIMARY KEY (`points_id`);

--
-- Indexes for table `hitme_promos`
--
ALTER TABLE `hitme_promos`
  ADD PRIMARY KEY (`promo_id`);

--
-- Indexes for table `hitme_users`
--
ALTER TABLE `hitme_users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback_offline`
--
ALTER TABLE `feedback_offline`
  MODIFY `off_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `hitme_coupon_wallet`
--
ALTER TABLE `hitme_coupon_wallet`
  MODIFY `coupon_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `hitme_customers`
--
ALTER TABLE `hitme_customers`
  MODIFY `customer_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `hitme_feedback`
--
ALTER TABLE `hitme_feedback`
  MODIFY `feedback_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hitme_partners_points`
--
ALTER TABLE `hitme_partners_points`
  MODIFY `points_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `hitme_promos`
--
ALTER TABLE `hitme_promos`
  MODIFY `promo_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `hitme_users`
--
ALTER TABLE `hitme_users`
  MODIFY `user_id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
