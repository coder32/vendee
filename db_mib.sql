-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 13, 2018 at 02:21 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET FOREIGN_KEY_CHECKS=0;
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mib`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `amount` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`id`, `user_id`, `amount`, `created_at`, `updated_at`) VALUES
(1, 7, '42413.04', '2018-12-06 11:58:45', '2018-12-06 06:58:45'),
(2, 5, '410', '2018-12-01 07:15:37', '2018-12-01 02:16:53'),
(4, 9, '0', '2018-12-01 03:07:37', '2018-12-01 03:07:37'),
(7, 1, '100', '2018-12-06 10:09:57', '2018-12-06 05:09:57'),
(8, 8, '1000', '2018-12-06 10:23:12', '2018-12-06 05:23:12'),
(9, 28, '0', '2018-12-06 09:25:35', '2018-12-06 09:25:35'),
(11, 49, '0', '2018-12-08 07:24:27', '2018-12-08 07:24:27'),
(12, 27, '0', '2018-12-10 01:07:58', '2018-12-10 01:07:58'),
(13, 43, '0', '2018-12-10 01:08:12', '2018-12-10 01:08:12'),
(14, 3, '116', '2018-12-13 08:30:29', '2018-12-13 03:30:29'),
(15, 113, '184', '2018-12-13 08:30:29', '2018-12-13 03:30:29');

-- --------------------------------------------------------

--
-- Table structure for table `account_history`
--

DROP TABLE IF EXISTS `account_history`;
CREATE TABLE IF NOT EXISTS `account_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `action` varchar(256) NOT NULL,
  `amount` int(11) NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '1',
  `method` varchar(256) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_history`
--

INSERT INTO `account_history` (`id`, `account_id`, `action`, `amount`, `user_id`, `method`, `created_at`, `updated_at`) VALUES
(1, 1, 'Deposit', 300, 2, 'Paypal', '2018-12-03 13:36:38', '0000-00-00 00:00:00'),
(2, 1, 'Deposit', 200, 1, 'Card', '2018-12-01 06:45:57', '0000-00-00 00:00:00'),
(3, 1, 'Withdraw', 100, 1, 'Skrill', '2018-12-01 06:45:54', '0000-00-00 00:00:00'),
(4, 2, 'Deposit', 40, 1, 'Paypal', '2018-12-01 02:15:01', '2018-12-01 02:15:01'),
(5, 2, 'Deposit', 100, 1, 'Skrill', '2018-12-01 02:15:18', '2018-12-01 02:15:18'),
(6, 2, 'Deposit', 100, 1, 'Skrill', '2018-12-01 02:16:37', '2018-12-01 02:16:37'),
(7, 2, 'Deposit', 30, 1, 'Card', '2018-12-01 02:16:53', '2018-12-01 02:16:53'),
(8, 1, 'Deposit', 50, 1, 'BTC', '2018-12-01 09:13:33', '2018-12-01 09:13:33'),
(9, 1, 'Deposit', 700, 1, 'LiteCoin', '2018-12-03 08:34:22', '2018-12-03 08:34:22'),
(10, 1, 'Deposit', 700, 1, 'LiteCoin', '2018-12-03 08:37:07', '2018-12-03 08:37:07'),
(11, 1, 'Deposit', 700, 1, 'LiteCoin', '2018-12-03 08:38:13', '2018-12-03 08:38:13'),
(12, 1, 'Deposit', 700, 1, 'LiteCoin', '2018-12-03 08:42:12', '2018-12-03 08:42:12'),
(13, 1, 'Deposit', 45, 1, 'BTC', '2018-12-04 05:34:59', '2018-12-04 05:34:59'),
(14, 1, 'Deposit', 10, 1, 'mid', '2018-12-06 05:03:27', '2018-12-06 05:03:27'),
(15, 1, 'Deposit', 500, 1, 'PAYPAL', '2018-12-06 05:03:49', '2018-12-06 05:03:49'),
(16, 1, 'Deposit', 50, 1, 'withdraw', '2018-12-06 05:05:24', '2018-12-06 05:05:24'),
(17, 7, 'Deposit', 10, 1, 'skill', '2018-12-06 05:08:19', '2018-12-06 05:08:19'),
(18, 7, 'Deposit', 10, 1, 'skill', '2018-12-06 05:08:31', '2018-12-06 05:08:31'),
(19, 7, 'Deposit', 10, 1, 'skill', '2018-12-06 05:08:41', '2018-12-06 05:08:41'),
(20, 7, 'Deposit', 10, 1, 'skill', '2018-12-06 05:08:48', '2018-12-06 05:08:48'),
(21, 7, 'Deposit', 10, 1, 'skill', '2018-12-06 05:09:13', '2018-12-06 05:09:13'),
(22, 7, 'Deposit', 50, 1, 'ok', '2018-12-06 05:09:57', '2018-12-06 05:09:57'),
(23, 8, 'Deposit', 1000, 1, 'bank draft', '2018-12-06 05:23:12', '2018-12-06 05:23:12'),
(24, 1, 'Deposit', 4324, 1, 'fdf', '2018-12-06 06:58:25', '2018-12-06 06:58:25'),
(25, 1, 'Deposit', 34234, 1, 'DFM', '2018-12-06 06:58:45', '2018-12-06 06:58:45'),
(26, 10, 'Deposit', 324, 1, 'dfd', '2018-12-06 09:25:50', '2018-12-06 09:25:50');

-- --------------------------------------------------------

--
-- Table structure for table `account_requests`
--

DROP TABLE IF EXISTS `account_requests`;
CREATE TABLE IF NOT EXISTS `account_requests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `amount` varchar(256) NOT NULL,
  `type` varchar(256) NOT NULL,
  `status` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account_requests`
--

INSERT INTO `account_requests` (`id`, `account_id`, `user_id`, `amount`, `type`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 7, '50', 'Deposit', 'complete', '2018-12-01 10:42:22', '2018-12-01 05:43:38'),
(2, 1, 7, '40', 'Deposit', 'complete', '2018-12-01 10:36:35', '0000-00-00 00:00:00'),
(3, 4, 9, '200', 'WITHDRAW', 'complete', '2018-12-06 09:59:01', '2018-12-06 04:59:01');

-- --------------------------------------------------------

--
-- Table structure for table `activity_logs`
--

DROP TABLE IF EXISTS `activity_logs`;
CREATE TABLE IF NOT EXISTS `activity_logs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `action` varchar(256) DEFAULT NULL,
  `type` varchar(256) DEFAULT NULL,
  `performee_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=461 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `activity_logs`
--

INSERT INTO `activity_logs` (`id`, `user_id`, `action`, `type`, `performee_id`, `created_at`, `updated_at`) VALUES
(421, 1, 'DELETE Category Testing A', 'category', 0, '2018-12-12 04:54:32', '2018-12-12 04:54:32'),
(422, 1, 'DELETE Category test', 'category', 0, '2018-12-12 04:55:51', '2018-12-12 04:55:51'),
(423, 1, 'Create Category Testing b', 'category', 0, '2018-12-12 04:57:36', '2018-12-12 04:57:36'),
(424, 1, 'Insert Project', 'project', 8, '2018-12-12 05:02:04', '2018-12-12 05:02:04'),
(425, 1, 'Insert Project', 'project', 9, '2018-12-12 05:02:16', '2018-12-12 05:02:16'),
(426, 1, 'Insert Project', 'project', 10, '2018-12-12 05:08:20', '2018-12-12 05:08:20'),
(427, 1, 'Insert Project', 'project', 11, '2018-12-12 05:13:05', '2018-12-12 05:13:05'),
(428, 1, 'Insert Project', 'project', 12, '2018-12-12 05:41:18', '2018-12-12 05:41:18'),
(429, 1, 'Insert Project', 'project', 13, '2018-12-12 05:42:33', '2018-12-12 05:42:33'),
(430, 1, 'Insert Project', 'project', 14, '2018-12-12 05:43:02', '2018-12-12 05:43:02'),
(431, 1, 'Insert Project', 'project', 15, '2018-12-12 05:43:25', '2018-12-12 05:43:25'),
(432, 1, 'Insert Project', 'project', 16, '2018-12-12 05:43:36', '2018-12-12 05:43:36'),
(433, 1, 'Insert Project', 'project', 17, '2018-12-12 06:02:45', '2018-12-12 06:02:45'),
(434, 1, 'Insert Project', 'project', 18, '2018-12-12 06:16:03', '2018-12-12 06:16:03'),
(435, 1, 'Insert Project', 'project', 19, '2018-12-12 06:17:37', '2018-12-12 06:17:37'),
(436, 1, 'Insert Project', 'project', 20, '2018-12-12 06:20:07', '2018-12-12 06:20:07'),
(437, 1, 'Insert Project', 'project', 21, '2018-12-12 06:20:33', '2018-12-12 06:20:33'),
(438, 1, 'VERIFY PROFILE OF', 'verifyProfile', 52, '2018-12-12 06:21:25', '2018-12-12 06:21:25'),
(439, 1, 'VERIFY PROFILE OF', 'verifyProfile', 52, '2018-12-12 06:50:15', '2018-12-12 06:50:15'),
(440, 1, 'VERIFY PROFILE OF', 'verifyProfile', 71, '2018-12-12 06:58:46', '2018-12-12 06:58:46'),
(441, 1, 'VERIFY PROFILE OF', 'verifyProfile', 1, '2018-12-12 07:36:55', '2018-12-12 07:36:55'),
(442, 113, 'VERIFY PROFILE OF', 'verifyProfile', 49, '2018-12-12 09:41:43', '2018-12-12 09:41:43'),
(443, 1, 'Add Manager', 'addUser', 130, '2018-12-12 09:44:45', '2018-12-12 09:44:45'),
(444, 1, 'Add Manager', 'addUser', 131, '2018-12-12 09:45:05', '2018-12-12 09:45:05'),
(445, 1, 'VERIFY PROFILE OF', 'verifyProfile', 131, '2018-12-12 09:45:15', '2018-12-12 09:45:15'),
(446, 1, 'VERIFY PROFILE OF', 'verifyProfile', 126, '2018-12-12 09:45:19', '2018-12-12 09:45:19'),
(447, 1, 'Add Moderator', 'addUser', 132, '2018-12-12 09:47:49', '2018-12-12 09:47:49'),
(448, 1, 'Add Moderator', 'addUser', 133, '2018-12-12 09:48:14', '2018-12-12 09:48:14'),
(449, 1, 'DISABLE USER', 'disableUser', 130, '2018-12-12 09:48:23', '2018-12-12 09:48:23'),
(450, 1, 'DISABLE USER', 'disableUser', 133, '2018-12-12 09:48:31', '2018-12-12 09:48:31'),
(451, 1, 'Disable Project ', 'Project', 49, '2018-12-12 09:48:47', '2018-12-12 09:48:47'),
(452, 1, 'Approve Project ', 'Project', 51, '2018-12-12 09:48:59', '2018-12-12 09:48:59'),
(453, 1, 'Disable Project ', 'Project', 51, '2018-12-12 09:49:00', '2018-12-12 09:49:00'),
(454, 1, 'Disable Project ', 'Project', 51, '2018-12-12 09:49:10', '2018-12-12 09:49:10'),
(455, 1, 'VERIFY PROFILE OF', 'verifyProfile', 132, '2018-12-12 09:49:37', '2018-12-12 09:49:37'),
(456, 1, 'VERIFY PROFILE OF', 'verifyProfile', 81, '2018-12-12 09:50:07', '2018-12-12 09:50:07'),
(457, 1, 'Disable Project ', 'Project', 49, '2018-12-12 10:05:22', '2018-12-12 10:05:22'),
(458, 1, 'Approve Project ', 'Project', 49, '2018-12-12 10:05:23', '2018-12-12 10:05:23'),
(459, 1, 'DISABLE USER', 'disableUser', 47, '2018-12-12 10:06:08', '2018-12-12 10:06:08'),
(460, 1, 'Approve Project ', 'Project', 48, '2018-12-12 10:06:43', '2018-12-12 10:06:43');

-- --------------------------------------------------------

--
-- Table structure for table `bid_comment`
--

DROP TABLE IF EXISTS `bid_comment`;
CREATE TABLE IF NOT EXISTS `bid_comment` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Active',
  `bid_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `bid_comment_bid_id_index` (`bid_id`),
  KEY `bid_comment_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bid_comment`
--

INSERT INTO `bid_comment` (`id`, `status`, `bid_id`, `user_id`, `comment`, `created_at`, `updated_at`) VALUES
(5, 'Active', 11, 43, 'Hello Developer', '2018-12-05 05:54:51', '2018-12-05 05:54:51'),
(6, 'Active', 18, 115, 'Hi Waqas', '2018-12-11 04:22:52', '2018-12-11 04:22:52'),
(7, 'Active', 23, 113, 'Am ready for your project .With my expert Skills', '2018-12-11 04:23:28', '2018-12-11 04:23:28'),
(8, 'Active', 23, 113, 'Hello users', '2018-12-11 04:35:01', '2018-12-11 04:35:01'),
(9, 'Active', 19, 115, 'asdas', '2018-12-11 05:04:36', '2018-12-11 05:04:36'),
(10, 'Active', 19, 115, 'asdgasd', '2018-12-11 05:25:37', '2018-12-11 05:25:37'),
(11, 'Active', 16, 40, 'tgf', '2018-12-11 09:17:03', '2018-12-11 09:17:03'),
(12, 'Active', 16, 40, 'hfgh', '2018-12-11 09:17:05', '2018-12-11 09:17:05'),
(13, 'Active', 19, 115, 'ddasd', '2018-12-12 00:53:54', '2018-12-12 00:53:54'),
(14, 'Active', 16, 40, 'The RTL offers several bus lines to facilitate commuting to certain schools in the Longueuil agglomeration. There are more than 65 bus lines serving the school clientele, following agreements reached with two school boards, the Commission scolaire Marie-Victorin and the Riverside School Board, as well as with a few private schools.   The integrated school lines bear the bus lines serial numbers in the 500 or 600. You will find a complete list of bus lines on the menu bar at the top of each website page. You can consult the schedule and route of each line by selecting a line and a date, and clicking on the “Schedule” or “Map” button.   The RTL carries close to 5000 students every day. It’s important to know that students benefit from reduced rates. You will find all the details on how to benefit from reduced rates on our website.', '2018-12-12 11:34:49', '2018-12-12 11:34:49'),
(15, 'Active', 17, 40, 'The RTL offers several bus lines to facilitate commuting to certain schools in the Longueuil agglomeration. There are more than 65 bus lines serving the school clientele, following agreements reached with two school boards, the Commission scolaire Marie-Victorin and the Riverside School Board, as well as with a few private schools.   The integrated school lines bear the bus lines serial numbers in the 500 or 600. You will find a complete list of bus lines on the menu bar at the top of each website page. You can consult the schedule and route of each line by selecting a line and a date, and clicking on the “Schedule” or “Map” button.   The RTL carries close to 5000 students every day. It’s important to know that students benefit from reduced rates. You will find all the details on how to benefit from reduced rates on our website.', '2018-12-13 00:48:29', '2018-12-13 00:48:29');

-- --------------------------------------------------------

--
-- Table structure for table `buybitcoins`
--

DROP TABLE IF EXISTS `buybitcoins`;
CREATE TABLE IF NOT EXISTS `buybitcoins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `amount_to_buy` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount_to_process` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bitcoins_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sms_pin` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `count_users` int(11) NOT NULL,
  `count_pending_users_requests` int(11) NOT NULL,
  `count_active_users` int(11) NOT NULL,
  `count_comments` int(11) NOT NULL,
  `count_trashed_users` int(11) NOT NULL,
  `count_trashed_projects` int(11) NOT NULL,
  `count_pending_projects` int(11) NOT NULL,
  `count_active_projects` int(11) NOT NULL,
  `count_projects` int(11) NOT NULL,
  `count_contact` int(11) NOT NULL,
  `count_feedback` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`id`, `count_users`, `count_pending_users_requests`, `count_active_users`, `count_comments`, `count_trashed_users`, `count_trashed_projects`, `count_pending_projects`, `count_active_projects`, `count_projects`, `count_contact`, `count_feedback`, `updated_at`, `created_at`) VALUES
(1, 16, 0, 0, 0, 0, 0, 0, 0, 12, 4, 2, '2018-12-03 06:50:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Mobile Development', 'Active', NULL, NULL),
(2, 'WEB', 'Active', NULL, NULL),
(9, 'Testing B', 'Active', '2018-12-12 04:23:07', '2018-12-12 04:23:07'),
(10, 'Testing b', 'Active', '2018-12-12 04:57:36', '2018-12-12 04:57:36');

-- --------------------------------------------------------

--
-- Table structure for table `company_detail`
--

DROP TABLE IF EXISTS `company_detail`;
CREATE TABLE IF NOT EXISTS `company_detail` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `company_detail_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `company_detail`
--

INSERT INTO `company_detail` (`id`, `user_id`, `name`, `info`, `description`, `address`, `verification`, `logo`, `created_at`, `updated_at`) VALUES
(2, 5, 'Zee Company', 'Its Software House', 'Its good', 'Its Working', 'No', 'ad4.png', '2018-11-26 06:46:34', '2018-11-26 06:46:34');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `msg` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contactus`
--

DROP TABLE IF EXISTS `contactus`;
CREATE TABLE IF NOT EXISTS `contactus` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` text NOT NULL,
  `number` text,
  `company_name` varchar(244) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contactus`
--

INSERT INTO `contactus` (`id`, `name`, `email`, `number`, `company_name`, `subject`, `message`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'asdas', 'asdsd', '231231', 'fsdfsd', 'dfds', 'fdsfds', NULL, '2018-12-01 09:27:48', '0000-00-00 00:00:00'),
(2, 'Zuhair Ahmad', 'zuhair@gmail.com', NULL, 'fsdf', 'asdasd', 'asdasd', NULL, '2018-12-01 04:56:33', '2018-12-01 04:56:33'),
(3, 'sadas', 'zuhairjutt.bzu@gmail.com', '32121312', 'fdfsdf', 'dsfd', 'fdsfd', NULL, '2018-12-01 04:57:11', '2018-12-01 04:57:11'),
(4, 'Zuhair Ahmad Langah', 'MotaG@hahhaa.coim', '43543523534', 'dfg', 'asdasd', 'dfdsfsdfsdfds', NULL, '2018-12-01 04:59:32', '2018-12-01 04:59:32'),
(5, 'zain', 'zain@gmail.com', '4344534534', 'megasoft1323', 'h gjkfgdl\'f,g;f', 'df;kljlfkj;df\'[fg;lmkfl\r\n\r\n\r\ndsfgflkgjkfj;kf\r\nd ]\r\nfds\r\ndffkfds;lkfs', NULL, '2018-12-01 09:07:34', '2018-12-01 09:07:34');

-- --------------------------------------------------------

--
-- Table structure for table `dispute_project`
--

DROP TABLE IF EXISTS `dispute_project`;
CREATE TABLE IF NOT EXISTS `dispute_project` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `bid_id` int(11) NOT NULL,
  `dispute_type_id` int(11) NOT NULL,
  `query` text NOT NULL,
  `status` varchar(64) NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispute_project`
--

INSERT INTO `dispute_project` (`id`, `user_id`, `project_id`, `bid_id`, `dispute_type_id`, `query`, `status`, `created_at`, `updated_at`) VALUES
(2, 113, 57, 23, 1, 'Hi this is a fraud project/user kindly review it', 'Pending', '2018-12-13 01:31:31', '2018-12-13 01:31:31');

-- --------------------------------------------------------

--
-- Table structure for table `dispute_types`
--

DROP TABLE IF EXISTS `dispute_types`;
CREATE TABLE IF NOT EXISTS `dispute_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dispute_types`
--

INSERT INTO `dispute_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Fraud', '2018-12-13 05:33:09', '0000-00-00 00:00:00'),
(2, 'Urgent Feedback', '2018-12-13 05:33:23', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `document_type_table`
--

DROP TABLE IF EXISTS `document_type_table`;
CREATE TABLE IF NOT EXISTS `document_type_table` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `region` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `zone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `document_type_table`
--

INSERT INTO `document_type_table` (`id`, `name`, `region`, `zone`, `status`, `created_at`, `updated_at`) VALUES
(1, 'default', 'lahore', 'lahore', 'enabled', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` text NOT NULL,
  `exception` text NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(222) NOT NULL,
  `email` text NOT NULL,
  `number` text NOT NULL,
  `company_name` varchar(232) NOT NULL,
  `subject` varchar(222) NOT NULL,
  `message` text NOT NULL,
  `remember_token` varchar(222) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `number`, `company_name`, `subject`, `message`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Waqas', 'zuhair123@gmail.com', '3413432', 'ewrewr', 'dfsgdg', 'fdgdfg', NULL, '2018-12-01 05:11:13', '2018-12-01 05:11:13'),
(2, 'xzcvdsfgf', 'abc@gmail.com', '03244311840', 'dssd', 'fg', 'xczx;odhfjkd\r\nsd\r\ndsa\r\n\r\nas\r\nd\r\ndsa\r\nd\r\n\r\nasd\r\n\r\nd\r\nasd\r\n\r\nd\r\nas\r\nd\r\nads\r\nda\r\nda', NULL, '2018-12-01 09:05:35', '2018-12-01 09:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

DROP TABLE IF EXISTS `messages`;
CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from_user_id` varchar(32) NOT NULL,
  `to_user_id` varchar(32) NOT NULL,
  `text` text NOT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=86 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `from_user_id`, `to_user_id`, `text`, `is_read`, `created_at`) VALUES
(1, '113', '3', 'csd', 1, '2018-12-13 13:50:53'),
(2, '37', '43', 'csd', 0, '2018-12-08 01:37:29'),
(3, '37', '43', 'dsfsdfd', 0, '2018-12-08 01:38:09'),
(4, '37', '43', 'sadasda', 0, '2018-12-08 01:41:02'),
(5, '37', '43', 'cc', 0, '2018-12-08 01:41:24'),
(6, '37', '43', 'cc', 0, '2018-12-08 01:41:27'),
(7, '37', '43', 'kkkkk', 0, '2018-12-08 01:50:54'),
(8, '37', '43', 'kkkkk', 0, '2018-12-08 01:50:55'),
(9, '37', '43', 'kkkkk', 0, '2018-12-08 01:50:56'),
(10, '37', '43', 'kkkkk', 0, '2018-12-08 01:51:30'),
(11, '37', '43', 'kkkkk', 0, '2018-12-08 01:51:32'),
(12, '37', '43', 'vvvv', 0, '2018-12-08 01:51:39'),
(13, '37', '43', 'vvvv', 0, '2018-12-08 01:53:25'),
(14, '37', '43', 'vvvv', 0, '2018-12-08 01:53:26'),
(15, '37', '43', 'kkk', 0, '2018-12-08 01:56:37'),
(16, '37', '43', 'kkk', 0, '2018-12-08 02:02:41'),
(17, '37', '43', 'ffff', 0, '2018-12-08 02:02:56'),
(18, '37', '43', 'ffff', 0, '2018-12-08 02:03:09'),
(19, '37', '43', 'ffff', 0, '2018-12-08 02:03:11'),
(20, '37', '43', 'hi', 0, '2018-12-08 02:04:15'),
(21, '37', '43', 'lll', 0, '2018-12-08 02:05:07'),
(22, '37', '43', 'lll', 0, '2018-12-08 02:05:17'),
(23, '37', '43', 'kkkkkk', 0, '2018-12-08 02:05:30'),
(24, '37', '43', 'kkk', 0, '2018-12-08 02:06:44'),
(25, '37', '43', 'fkldjfdlkfjdlk', 0, '2018-12-08 02:10:33'),
(26, '37', '43', 'fkldjfdlkfjdlk', 0, '2018-12-08 02:12:43'),
(27, '37', '43', 'ssss', 0, '2018-12-08 02:14:20'),
(28, '37', '43', 'oooo', 0, '2018-12-08 02:14:24'),
(29, '37', '43', 'klkok', 0, '2018-12-08 02:15:03'),
(30, '37', '43', 'klkok', 0, '2018-12-08 02:16:11'),
(31, '37', '43', 'll', 0, '2018-12-08 02:16:16'),
(32, '37', '43', 'jjj', 0, '2018-12-08 02:19:56'),
(33, '37', '43', 'kkkk', 0, '2018-12-08 02:20:30'),
(34, '37', '43', 'kkkk', 0, '2018-12-08 02:24:25'),
(35, '37', '43', 'kkkk', 0, '2018-12-08 02:26:10'),
(36, '37', '43', 'vvvv', 0, '2018-12-08 02:30:51'),
(37, '37', '43', 'cccc', 0, '2018-12-08 02:32:17'),
(38, '37', '43', 'hello', 0, '2018-12-08 02:34:32'),
(39, '43', '37', 'ffff', 0, '2018-12-08 02:34:46'),
(40, '37', '43', 'cccccc', 0, '2018-12-08 02:44:37'),
(41, '37', '43', 'ccccccc', 0, '2018-12-08 02:46:21'),
(42, '37', '43', 'xxxxxx', 0, '2018-12-08 02:48:14'),
(43, '37', '43', 'aaaaaaa', 0, '2018-12-08 02:49:00'),
(44, '37', '43', 'aaaaa', 0, '2018-12-08 02:51:05'),
(45, '37', '43', 'aaaaa', 0, '2018-12-08 02:55:04'),
(46, '37', '43', 'aaaaa', 0, '2018-12-08 02:56:33'),
(47, '37', '43', 'dawdwwdwd', 0, '2018-12-08 02:56:44'),
(48, '37', '43', 'dawdwwdwd', 0, '2018-12-08 02:59:35'),
(49, '37', '43', 'helloooo', 0, '2018-12-08 03:01:31'),
(50, '37', '43', 'oooo', 0, '2018-12-08 03:06:56'),
(51, '43', '37', '000000', 0, '2018-12-08 03:07:05'),
(52, '37', '40', 'jkbhj', 0, '2018-12-08 06:36:51'),
(53, '43', '37', 'ggrfg', 0, '2018-12-08 07:02:37'),
(54, '43', '37', 'eeeeeeeeee', 0, '2018-12-08 07:02:46'),
(55, '37', '43', 'tttttttt', 0, '2018-12-08 07:02:52'),
(56, '43', '37', 'dy do yr', 0, '2018-12-08 08:04:01'),
(57, '43', '37', 'bbmjfdl;kj', 0, '2018-12-08 08:04:12'),
(58, '37', '43', 'Salam', 0, '2018-12-08 08:04:18'),
(59, '37', '43', 'Bhai chat chal ri hai kya..', 0, '2018-12-08 08:04:27'),
(60, '43', '37', 'many ni dana project aap ko paj jao', 0, '2018-12-08 08:04:31'),
(61, '37', '43', 'ok barey bhai..', 0, '2018-12-08 08:04:43'),
(62, '37', '43', 'hello', 0, '2018-12-08 08:05:05'),
(63, '37', '43', 'baray bhai issue solve ho gay hain', 0, '2018-12-08 08:05:27'),
(64, '37', '43', 'reply to karain main wait kar raha hn', 0, '2018-12-08 08:05:42'),
(65, '37', '43', 'Heelllloooo', 0, '2018-12-08 08:10:16'),
(66, '43', '37', 'gfhfhgf', 0, '2018-12-08 08:26:44'),
(67, '43', '37', 'gfhfhgf', 0, '2018-12-08 08:26:46'),
(68, '43', '37', 'mmmmm', 0, '2018-12-08 08:27:19'),
(69, '37', '43', 'Hellooo...', 0, '2018-12-08 08:28:04'),
(70, '43', '37', 'yrtyrtyrtytryrt', 0, '2018-12-08 08:28:09'),
(71, '43', '37', 'yrtyrtyrtytryrt', 0, '2018-12-08 08:28:11'),
(72, '43', '37', 'hi', 0, '2018-12-08 08:31:19'),
(73, '43', '37', 'tahir here', 0, '2018-12-08 08:31:28'),
(74, '37', '43', 'hI Tahir', 0, '2018-12-08 08:31:38'),
(75, '37', '43', 'dafa hop', 0, '2018-12-08 08:31:45'),
(76, '37', '43', 'zain herre', 0, '2018-12-08 08:40:20'),
(77, '37', '43', 'dsds', 0, '2018-12-08 08:40:32'),
(78, '37', '43', 'sadsad', 0, '2018-12-08 08:40:35'),
(79, '37', '43', 'sadds', 0, '2018-12-08 08:40:40'),
(80, '37', '43', 'ddfds', 0, '2018-12-08 08:40:56'),
(81, '43', '37', 'aa raha', 0, '2018-12-08 08:41:08'),
(82, '37', '43', 'qweq', 0, '2018-12-10 06:16:10'),
(83, '113', '43', 'Hi', 0, '2018-12-11 04:24:26'),
(84, '113', '43', 'fdsfsdf', 0, '2018-12-11 04:34:38'),
(85, '113', '43', 'fdsfsdf', 0, '2018-12-11 04:34:42');

-- --------------------------------------------------------

--
-- Table structure for table `mib_notification`
--

DROP TABLE IF EXISTS `mib_notification`;
CREATE TABLE IF NOT EXISTS `mib_notification` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  `type` varchar(128) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mib_notification`
--

INSERT INTO `mib_notification` (`id`, `user_id`, `title`, `description`, `type`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hello', 'This is a test notification', 'type_user', '2018-11-29 07:28:22', '2018-11-29 07:28:22'),
(2, 1, 'Hello', 'This is a test notification', 'type_user', '2018-11-29 07:40:47', '2018-11-29 07:40:47'),
(3, 1, 'Hello', 'This is a test notification', 'type_user', '2018-11-29 07:41:02', '2018-11-29 07:41:02'),
(4, 1, 'Hello', 'This is a test notification', 'type_user', '2018-11-29 07:42:00', '2018-11-29 07:42:00'),
(5, 1, 'Hello', 'This is a test notification', 'type_user', '2018-11-29 07:43:21', '2018-11-29 07:43:21'),
(6, 1, 'Hello', 'This is a test notification', 'type_user', '2018-11-29 07:43:49', '2018-11-29 07:43:49'),
(7, 1, 'Hello', 'This is a test notification', 'type_user', '2018-11-29 07:44:01', '2018-11-29 07:44:01'),
(8, 1, 'Notification_New', 'jfdfkldjsfklds', 'type_user', '2018-11-29 08:31:16', '2018-11-29 08:31:16'),
(9, 1, 'Hello', 'This is a test notification', 'type_admin', '2018-11-30 08:45:50', '2018-11-30 08:45:50'),
(10, 1, 'hi', 'tahir here', 'type_system', '2018-12-06 04:58:17', '2018-12-06 04:58:17'),
(11, 1, 'hi', 'tahir here', 'type_system', '2018-12-06 04:58:23', '2018-12-06 04:58:23'),
(12, 1, 'hi', 'tahir here', 'type_system', '2018-12-06 04:58:29', '2018-12-06 04:58:29'),
(13, 1, 'hi', 'hi', 'type_system', '2018-12-06 04:58:43', '2018-12-06 04:58:43'),
(14, 1, 'hi', 'hi', 'type_system', '2018-12-06 04:58:47', '2018-12-06 04:58:47'),
(15, 1, 'MIB', 'MIB', 'type_user', '2018-12-06 05:19:51', '2018-12-06 05:19:51'),
(16, 1, 'MIB', 'MIB', 'type_user', '2018-12-06 05:20:01', '2018-12-06 05:20:01'),
(17, 1, 'busy', 'due to checkup', 'type_user', '2018-12-10 04:54:04', '2018-12-10 04:54:04'),
(18, 1, 'late', 'due to ilness', 'type_admin', '2018-12-10 04:54:42', '2018-12-10 04:54:42'),
(19, 1, 'late', 'due to checkup', 'type_system', '2018-12-10 04:55:07', '2018-12-10 04:55:07'),
(20, 1, 'Testing', 'Testing ABC', 'type_user', '2018-12-12 04:27:01', '2018-12-12 04:27:01'),
(21, 1, 'Testing', 'Testing ABC', 'type_user', '2018-12-12 04:28:31', '2018-12-12 04:28:31'),
(22, 1, 'Testing', 'Testing ABC', 'type_user', '2018-12-12 04:28:40', '2018-12-12 04:28:40'),
(23, 1, 'Testing', 'Testing ABC', 'type_user', '2018-12-12 04:29:18', '2018-12-12 04:29:18'),
(24, 1, 'asd', 'asd', 'type_admin', '2018-12-12 04:33:46', '2018-12-12 04:33:46'),
(25, 1, 'asd', 'asd', 'type_admin', '2018-12-12 04:34:19', '2018-12-12 04:34:19'),
(26, 1, 'zuhair', 'fsdfsd', 'type_system', '2018-12-12 04:34:30', '2018-12-12 04:34:30'),
(27, 1, 'zuhair', 'fsdfsd', 'type_system', '2018-12-12 04:35:33', '2018-12-12 04:35:33'),
(28, 1, 'zuhair', 'Yes its ok', 'type_user', '2018-12-12 04:35:52', '2018-12-12 04:35:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_17_085927_create_permission_tables', 1),
(20, '2014_10_18_183830_create_chats_table', 3),
(21, '2014_10_18_183949_create_chat_messages_table', 3),
(22, '2018_09_10_063140_create_contacts_table', 3),
(23, '2018_09_10_064738_create_buybitcoins_table', 3),
(24, '2017_06_13_101135_create_messages_table', 4),
(25, '2017_06_21_032341_create_receivers_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `milestone_subtask`
--

DROP TABLE IF EXISTS `milestone_subtask`;
CREATE TABLE IF NOT EXISTS `milestone_subtask` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(222) NOT NULL,
  `description` text NOT NULL,
  `complition_date` varchar(128) DEFAULT NULL,
  `ms_id` int(11) DEFAULT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `milestone_subtask`
--

INSERT INTO `milestone_subtask` (`id`, `title`, `description`, `complition_date`, `ms_id`, `is_completed`, `created_at`, `updated_at`) VALUES
(2, 'testing', ' Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. ', '2018-12-03', 1, 0, NULL, NULL),
(3, 'testing', ' Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. ', '2018-12-03', 1, 0, NULL, NULL),
(6, 'fjkdslfdkl', 'kfdsljfsdlkfjsdlk', NULL, NULL, 0, '2018-12-10 02:50:31', '2018-12-10 02:50:31'),
(7, 'jkdsfjsdl', 'fjdslkfjsdlkj', NULL, NULL, 0, '2018-12-10 02:51:36', '2018-12-10 02:51:36'),
(8, 'jkdsfjsdl', 'fjdslkfjsdlkj', NULL, NULL, 0, '2018-12-10 02:51:42', '2018-12-10 02:51:42'),
(9, 'jkdsfjsdl', 'fjdslkfjsdlkj', NULL, NULL, 0, '2018-12-10 02:52:13', '2018-12-10 02:52:13'),
(10, 'kfjdslf', 'fdjkslfjsdklfjsdl', NULL, NULL, 0, '2018-12-10 02:52:36', '2018-12-10 02:52:36'),
(11, 'fksdfjk', 'fkdslfjslk', NULL, NULL, 0, '2018-12-10 02:53:55', '2018-12-10 02:53:55'),
(12, 'fksdfj', 'fdklfdjkl', NULL, NULL, 0, '2018-12-10 02:54:30', '2018-12-10 02:54:30'),
(13, 'kvjdlkdj', 'jfdklsjfsldk', NULL, NULL, 0, '2018-12-10 02:55:14', '2018-12-10 02:55:14'),
(14, 'fksd;f', 'dfklfdlk', NULL, NULL, 0, '2018-12-10 02:55:49', '2018-12-10 02:55:49'),
(15, 'kdsjflk', 'fjkdslfjsdlk', NULL, NULL, 0, '2018-12-10 02:57:13', '2018-12-10 02:57:13'),
(16, 'kdsjflk', 'fjkdslfjsdlk', NULL, NULL, 0, '2018-12-10 02:57:41', '2018-12-10 02:57:41'),
(17, 'ksdf', 'fdkslfjslk', NULL, NULL, 0, '2018-12-10 02:58:26', '2018-12-10 02:58:26'),
(18, 'ksdf', 'fdkslfjslk', NULL, NULL, 0, '2018-12-10 02:58:32', '2018-12-10 02:58:32'),
(19, 'dkl;dfks;', 'kfdsl;fk;lk', NULL, NULL, 0, '2018-12-10 03:00:57', '2018-12-10 03:00:57'),
(20, 'dkl;dfks;', 'kfdsl;fk;lk', NULL, NULL, 0, '2018-12-10 03:01:08', '2018-12-10 03:01:08'),
(21, 'dskjdskl', 'dklfjskld', NULL, NULL, 0, '2018-12-10 03:05:15', '2018-12-10 03:05:15'),
(22, 'jdadk', 'djskfhsjkfhsdjkfds', NULL, NULL, 0, '2018-12-10 03:05:56', '2018-12-10 03:05:56'),
(23, 'test', 'testetete', '2018-12-01', NULL, 0, '2018-12-10 03:10:28', '2018-12-10 03:10:28'),
(24, 'task deadline', 'deadline deadline deadline deadline deadline deadline deadline deadline deadline \ndeadline deadline deadline deadline deadline \n deadline deadline', '2018-12-01', NULL, 0, '2018-12-10 03:17:11', '2018-12-10 03:17:11'),
(25, 'aaaaaa', 'aaaaaaa', '2018-12-08', 5, 0, '2018-12-10 03:17:57', '2018-12-10 03:17:57'),
(26, 'dss', 'fdfsfdfs', '2018-12-16', 5, 0, '2018-12-10 04:15:28', '2018-12-10 04:15:28'),
(27, 'dddd', 'dddddd', '2018-12-06', 5, 0, '2018-12-10 04:15:53', '2018-12-10 04:15:53'),
(28, 'kkkkk', 'kkkkkkk', '2018-12-16', 5, 0, '2018-12-10 04:18:03', '2018-12-10 04:18:03'),
(29, 'kkkkk', 'kkkkkkk', '2018-12-16', 5, 0, '2018-12-10 04:18:36', '2018-12-10 04:18:36'),
(30, 'Hi', 'Hihihihi', '2018-12-21', 5, 0, '2018-12-10 04:21:45', '2018-12-10 04:21:45'),
(31, 'ooooo', 'oooooooo', '2018-12-15', 5, 0, '2018-12-10 04:25:52', '2018-12-10 04:25:52'),
(32, 'ppppppp', 'pppppppp', '2018-12-08', 5, 0, '2018-12-10 04:31:19', '2018-12-10 04:31:19'),
(33, 'hello', 'teask done', '2018-12-07', 5, 0, '2018-12-10 04:34:35', '2018-12-10 04:34:35'),
(34, 'ddddd', 'aaaaaaa', '2018-12-08', 5, 0, '2018-12-10 04:35:51', '2018-12-10 04:35:51'),
(35, 'hhgggggg', 'fsdfksdflsdfld', '2018-12-29', 4, 0, '2018-12-10 04:37:32', '2018-12-10 04:37:32'),
(36, 'Admin Panel', 'create complete admin apnel', '2018-12-19', 7, 0, '2018-12-10 05:25:56', '2018-12-10 05:25:56'),
(37, 'dasd', 'dssad', '2018-12-05', 9, 0, '2018-12-10 06:42:12', '2018-12-10 06:42:12'),
(38, 'qweq', 'qweqw', '2018-12-21', 9, 0, '2018-12-10 06:42:40', '2018-12-10 06:42:40'),
(39, 'asd', 'asd', '2018-11-30', 10, 0, '2018-12-10 06:53:22', '2018-12-10 06:53:22'),
(40, 'asdasdasdasdasdsad', 'asdasdasdsadsad', '2018-11-09', 10, 0, '2018-12-10 06:53:32', '2018-12-10 06:53:32'),
(41, 'adas', 'asdasd', '2018-12-20', 12, 0, '2018-12-10 06:57:23', '2018-12-10 06:57:23'),
(42, 'asdas', 'asdasd', '2018-12-10', 17, 0, '2018-12-10 07:29:37', '2018-12-10 07:29:37'),
(43, 'wqeqwe', 'qwewq', '2018-12-20', 17, 0, '2018-12-10 07:52:12', '2018-12-10 07:52:12'),
(44, 'yqhiqhido', 'iayhaouirfy oroy ufwehg uih weuf wiul f98weh fud sgsdflihgh dhgsd go0iudf oi hou;hgoiudgd fhoiugbfjg hodif gjdhgojdf jgdh fjg hdoufg oudf hgjkdf hgdf goiu;d jlgvnxckjv hdifub kjdshfiasnbcf ncvnsdkjvh sduiobvsk njdbn', '2018-12-29', 19, 0, '2018-12-10 08:06:10', '2018-12-10 08:06:10'),
(45, 'yqhiqhido', 'iayhaouirfy oroy ufwehg uih weuf wiul f98weh fud sgsdflihgh dhgsd go0iudf oi hou;hgoiudgd fhoiugbfjg hodif gjdhgojdf jgdh fjg hdoufg oudf hgjkdf hgdf goiu;d jlgvnxckjv hdifub kjdshfiasnbcf ncvnsdkjvh sduiobvsk njdbn', '2018-12-29', 19, 0, '2018-12-10 08:06:13', '2018-12-10 08:06:13'),
(46, 'yqhiqhido', 'iayhaouirfy oroy ufwehg uih weuf wiul f98weh fud sgsdflihgh dhgsd go0iudf oi hou;hgoiudgd fhoiugbfjg hodif gjdhgojdf jgdh fjg hdoufg oudf hgjkdf hgdf goiu;d jlgvnxckjv hdifub kjdshfiasnbcf ncvnsdkjvh sduiobvsk njdbn', '2018-12-29', 19, 0, '2018-12-10 08:06:14', '2018-12-10 08:06:14'),
(47, 'yqhiqhido', 'iayhaouirfy oroy ufwehg uih weuf wiul f98weh fud sgsdflihgh dhgsd go0iudf oi hou;hgoiudgd fhoiugbfjg hodif gjdhgojdf jgdh fjg hdoufg oudf hgjkdf hgdf goiu;d jlgvnxckjv hdifub kjdshfiasnbcf ncvnsdkjvh sduiobvsk njdbn', '2018-12-29', 19, 0, '2018-12-10 08:06:17', '2018-12-10 08:06:17'),
(48, 'yqhiqhido', 'iayhaouirfy oroy ufwehg uih weuf wiul f98weh fud sgsdflihgh dhgsd go0iudf oi hou;hgoiudgd fhoiugbfjg hodif gjdhgojdf jgdh fjg hdoufg oudf hgjkdf hgdf goiu;d jlgvnxckjv hdifub kjdshfiasnbcf ncvnsdkjvh sduiobvsk njdbn', '2018-12-29', 19, 0, '2018-12-10 08:06:20', '2018-12-10 08:06:20'),
(49, 'Admin Panel', 'This is a testing ialjfldsakfjsdklf', '2018-12-14', 20, 0, '2018-12-10 08:15:18', '2018-12-10 08:15:18'),
(50, 'sdfsd', 'sdfs', '2018-12-13', 22, 0, '2018-12-10 08:57:15', '2018-12-10 08:57:15'),
(51, 'sdfsd', 'sdfs', '2018-12-13', 22, 0, '2018-12-10 08:57:18', '2018-12-10 08:57:18'),
(52, 'dd', 'asdasd', '2018-12-06', 23, 1, '2018-12-10 08:58:07', '2018-12-11 09:10:24'),
(53, 'asdas', 'dasd', '2018-12-15', 23, 1, '2018-12-10 08:59:17', '2018-12-11 09:10:24'),
(54, 'asdad', 'asdasd', '2018-12-19', 23, 1, '2018-12-10 08:59:53', '2018-12-11 09:10:24'),
(55, 'User managment', 'Create complete user managment', '2018-12-13', 25, 0, '2018-12-12 09:14:43', '2018-12-12 09:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `mile_stone`
--

DROP TABLE IF EXISTS `mile_stone`;
CREATE TABLE IF NOT EXISTS `mile_stone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `complition_date` date NOT NULL,
  `is_started` tinyint(1) NOT NULL DEFAULT '0',
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mile_stone`
--

INSERT INTO `mile_stone` (`id`, `project_id`, `title`, `description`, `complition_date`, `is_started`, `is_completed`, `created_at`, `updated_at`, `remember_token`) VALUES
(23, 48, 'asdsad', 'Education in Pakistan is overseen by the Federal Ministry of Education and the provincial governments, whereas the federal government mostly assists in curriculum development, accreditation and in the financing of research and development. Article 25-A of Constitution of Pakistan obligates the state to provide free and compulsory quality education to children of the age group 5 to 16 years. \"The State shall provide free and compulsory education to all children of the age of five to sixteen years in such a manner as may be determined by law\".[3]\r\n\r\nThe education system in Pakistan[4] is generally divided into six levels: preschool (for the age from 3 to 5 years), primary (grades one through five), middle (grades six through eight), high (grades nine and ten, leading to the Secondary School Certificate or SSC), intermediate (grades eleven and twelve, leading to a Higher Secondary School Certificate or HSSC), and university programs leading to undergraduate and graduate degrees.[5]\r\n\r\nThe literacy rate ranges from 87% in Islamabad to 20% in the Kohlu District.[6] Between 2000 and 2004, Pakistanis in the age group 55–64 had a literacy rate of almost 38%, those ages 45–54 had a literacy rate of nearly 46%, those 25–34 had a literacy rate of 57%, and those ages 15–24 had a literacy rate of 72%.[7] Literacy rates vary regionally, particularly by sex. In tribal areas female literacy is 9.5%.[8] While Azad Jammu & Kashmir has a literacy rate of 74%.[9] Moreover, English is fast spreading in Pakistan, with more than 92 million Pakistanis (49% of the population) having a command over the English language,[10] which makes it one of the top English-speaking nations in the world. On top of that, Pakistan produces about 445,000 university graduates and 10,000 computer science graduates per year.[11] Despite these statistics, Pakistan still has one of the lowest literacy rates in the world[12] and the second largest out of school population (5.1 million children) after Nigeria.[13]', '2019-01-25', 1, 0, '2018-12-10 08:58:00', '2018-12-12 09:26:07', NULL),
(24, 49, 'dfsfds', 'fdsfdsf', '2018-12-21', 0, 0, '2018-12-12 00:57:24', '2018-12-12 00:57:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news_feed`
--

DROP TABLE IF EXISTS `news_feed`;
CREATE TABLE IF NOT EXISTS `news_feed` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(128) NOT NULL,
  `status` varchar(128) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news_feed`
--

INSERT INTO `news_feed` (`id`, `user_id`, `title`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(10, 1, 'NVNNNXNVNB', ',SNV,NV,X,VN,XCVN', 'set later', 'Active', '2018-12-06 04:50:44', '2018-12-06 04:50:44'),
(12, 1, ',V FS,NAN', 'lnSVLLANVNL', 'set later', 'Active', '2018-12-06 04:51:30', '2018-12-06 04:51:30'),
(13, 1, 'V F,FNVNS,ANV', 'M,NFSv,n,mafv', 'set later', 'Active', '2018-12-06 04:51:49', '2018-12-06 04:51:49'),
(15, 1, 'dsd', 'qwe', 'set later', 'Active', '2018-12-06 09:36:35', '2018-12-06 09:36:35'),
(16, 1, 'rfr', 'fsdfsd', 'set later', 'Active', '2018-12-07 07:21:10', '2018-12-07 07:21:10'),
(17, 1, 'aaaaaaaaa', 'aaaaaaaaaaaaa', 'set later', 'Active', '2018-12-07 07:24:34', '2018-12-07 07:24:34'),
(18, 1, 'asdas', 'asd', 'client1.jpg', 'Active', '2018-12-07 07:48:34', '2018-12-07 07:48:34'),
(19, 1, 'xczx', 'czxc', 'team4.png', 'Active', '2018-12-07 07:51:32', '2018-12-07 07:51:32'),
(21, 1, 'zxczxc', 'zxczxc', 'gallery6.jpg', 'Active', '2018-12-12 02:39:28', '2018-12-12 02:39:28');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

DROP TABLE IF EXISTS `payment`;
CREATE TABLE IF NOT EXISTS `payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_name` text,
  `payment_icon` text,
  `number_of_fields` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_detail`
--

DROP TABLE IF EXISTS `payment_detail`;
CREATE TABLE IF NOT EXISTS `payment_detail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payment_id` text,
  `field_name` text,
  `field_type` text,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_a` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `payment_history`
--

DROP TABLE IF EXISTS `payment_history`;
CREATE TABLE IF NOT EXISTS `payment_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `project_id` int(11) NOT NULL,
  `milestone_id` int(11) NOT NULL DEFAULT '-1',
  `bid_id` int(11) NOT NULL,
  `amount` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=49 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'viewFreelancer', 'viewFreelancer', NULL, NULL),
(2, 'approveFreelancerAccount', 'approveFreelancerAccount', NULL, NULL),
(3, 'disableFreelancer', 'disableFreelancer', NULL, NULL),
(4, 'deleteFreelancer', 'deleteFreelancer', NULL, NULL),
(5, 'viewEmployer', 'viewEmployer', NULL, NULL),
(6, 'approveEmployerAccount', 'approveEmployerAccount', NULL, NULL),
(7, 'disableEmployer', 'disableEmployer', NULL, NULL),
(8, 'deleteEmployer', 'deleteEmployer', NULL, NULL),
(9, 'viewModerator', 'viewModerator', NULL, NULL),
(10, 'approveModeratorAccount', 'approveModeratorAccount', NULL, NULL),
(11, 'disableModerator', 'disableModerator', NULL, NULL),
(12, 'deleteModerator', 'deleteModerator', NULL, NULL),
(13, 'viewManager', 'viewManager', NULL, NULL),
(14, 'approveManagerAccount', 'approveManagerAccount', NULL, NULL),
(15, 'disableManager', 'disableManager', NULL, NULL),
(16, 'deleteManager', 'deleteManager', NULL, NULL),
(17, 'changeUserRole', 'changeUserRole', NULL, NULL),
(18, 'viewTestimonial', 'viewTestimonial', NULL, NULL),
(19, 'addTestimonial', 'addTestimonial', NULL, NULL),
(20, 'deleteTestimonial', 'deleteTestimonial', NULL, NULL),
(21, 'viewProject', 'viewProject', NULL, NULL),
(22, 'approveProject', 'approveProject', NULL, NULL),
(23, 'disableProject', 'disableProject', NULL, NULL),
(24, 'deleteProject', 'deleteProject', NULL, NULL),
(25, 'viewBid', 'viewBid', NULL, NULL),
(26, 'deleteBid', 'deleteBid', NULL, NULL),
(27, 'disableBid', 'disableBid', NULL, NULL),
(28, 'editComment', 'editComment', NULL, NULL),
(29, 'viewComment', 'viewComment', NULL, NULL),
(30, 'deleteComment', 'deleteComment', NULL, NULL),
(31, 'replyComment', 'replyComment', NULL, NULL),
(32, 'Roles', 'Roles', NULL, NULL),
(33, 'Accounts', 'Accounts', NULL, NULL),
(34, 'depositMoney', 'depositMoney', NULL, NULL),
(35, 'Notification', 'Notification', NULL, NULL),
(36, 'viewCategory', 'viewCategory', NULL, NULL),
(37, 'Testimonial', 'Testimonial', NULL, NULL),
(38, 'Logs', 'Logs', NULL, NULL),
(39, 'viewFeed', 'viewFeed', NULL, NULL),
(40, 'postFeed', 'postFeed', NULL, NULL),
(41, 'disableFeed', 'disableFeed', NULL, NULL),
(42, 'deleteFeed', 'deleteFeed', NULL, NULL),
(43, 'viewSkill', 'viewSkill', NULL, NULL),
(44, 'addSkill', 'addSkill', NULL, NULL),
(45, 'deleteSkill', 'deleteSkill', NULL, NULL),
(46, 'disableSkill', 'disableSkill', NULL, NULL),
(47, 'insertCategory', 'insertCategory', NULL, NULL),
(48, 'deleteCategory', 'deleteCategory', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_bid`
--

DROP TABLE IF EXISTS `project_bid`;
CREATE TABLE IF NOT EXISTS `project_bid` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `status` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT 'Active',
  `bid_status` varchar(64) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `project_id` int(10) UNSIGNED DEFAULT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `requirements` text COLLATE utf8mb4_unicode_ci,
  `delivery_time` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bid_amount` int(11) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_completed` tinyint(1) NOT NULL DEFAULT '0',
  `documents` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_bid_project_id_index` (`project_id`),
  KEY `project_bid_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_bid`
--

INSERT INTO `project_bid` (`id`, `status`, `bid_status`, `project_id`, `user_id`, `requirements`, `delivery_time`, `bid_amount`, `description`, `is_completed`, `documents`, `created_at`, `updated_at`) VALUES
(5, 'disable', 'Assigned', 45, 113, 'Baji ka rista', '2018-12-13 00:00:00', 500, 'hello', 1, NULL, '2018-12-03 08:49:09', '2018-12-12 07:45:32'),
(9, 'disable', 'Pending', 45, 37, NULL, '2018-12-13 00:00:00', 45, 'fkafjads;lfj jfakljfadlskj fadsklj fadl;k', 0, NULL, '2018-12-05 02:34:23', '2018-12-12 02:39:07'),
(11, 'Active', 'Pending', 45, 43, 'Hello', '2018-12-13 00:00:00', 300, 'Hello', 0, NULL, '2018-12-05 05:54:38', '2018-12-05 05:54:38'),
(16, 'Active', 'Pending', 45, 40, 'qweq', '2018-12-08 00:00:00', 2312, 'qweq', 0, NULL, '2018-12-08 05:07:46', '2018-12-08 05:07:46'),
(17, 'Active', 'Pending', 45, 40, 'qweq', '2018-12-08 00:00:00', 2312, 'qweq', 0, NULL, '2018-12-08 05:08:02', '2018-12-08 05:08:02'),
(18, 'disable', 'Assigned', 48, 113, 'Its ok donen many parts of the world, schools also help children learn things about life. In school, pupils develop their personality. Schools teach pupils about religion and ethics. Schools help people recognise socially accepted norms and behaviour. Pedagogy is the science of teaching children. Different schools use different ways of teaching. There is quite a lot of disagreement about what and how students should be taught.[3] Many countries solve this by allowing different types of school, so parents and children have some choice. Choices may include home education.', '2018-12-14 00:00:00', 32, 'Its ok donen many parts of the world, schools also help children learn things about life. In school, pupils develop their personality. Schools teach pupils about religion and ethics. Schools help people recognise socially accepted norms and behaviour. Pedagogy is the science of teaching children. Different schools use different ways of teaching. There is quite a lot of disagreement about what and how students should be taught.[3] Many countries solve this by allowing different types of school, so parents and children have some choice. Choices may include home education.', 1, NULL, '2018-12-11 04:22:27', '2018-12-12 10:06:31'),
(19, 'Active', 'Pending', 45, 115, 'and behaviour. Pedagogy is the science of teaching children. Different schools use different ways of teaching. There is quite a lot of disagreement about what and how students should be taught.[3] Many countries solve this by allowing different types of schoo', '2018-11-30 00:00:00', 43543, 'and behaviour. Pedagogy is the science of teaching children. Different schools use different ways of teaching. There is quite a lot of disagreement about what and how students should be taught.[3] Many countries solve this by allowing different types of schoo', 0, NULL, '2018-12-11 05:02:40', '2018-12-11 05:02:40'),
(21, 'Active', 'Pending', 48, 40, 'sdfsd', '2018-12-13 00:00:00', 234234, 'sdfsd', 0, NULL, '2018-12-12 01:08:08', '2018-12-12 01:08:08'),
(22, 'Active', 'Pending', 48, 40, 'sdfsd', '2018-12-13 00:00:00', 234234, 'sdfsd', 0, NULL, '2018-12-12 01:08:09', '2018-12-12 01:08:09'),
(23, 'Active', 'Assigned', 57, 113, 'I will deliver in two days', '2018-12-15 00:00:00', 28, 'I will deliver in two days', 0, NULL, '2018-12-12 08:12:53', '2018-12-12 08:14:18'),
(24, 'Active', 'Assigned', 58, 113, 'fjadklfjsdkfjsdlk', '2018-12-13 00:00:00', 8, 'fjadklfjsdkfjsdlk', 1, NULL, '2018-12-12 09:03:47', '2018-12-12 09:06:44'),
(25, 'Active', 'Assigned', 59, 113, 'gfdgsgrts', '2018-12-26 00:00:00', 48, 'gfdgsgrts', 1, NULL, '2018-12-12 09:15:45', '2018-12-12 09:18:49');

-- --------------------------------------------------------

--
-- Table structure for table `project_catagories`
--

DROP TABLE IF EXISTS `project_catagories`;
CREATE TABLE IF NOT EXISTS `project_catagories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `project_type`
--

DROP TABLE IF EXISTS `project_type`;
CREATE TABLE IF NOT EXISTS `project_type` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(128) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_type`
--

INSERT INTO `project_type` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'default', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `receivers`
--

DROP TABLE IF EXISTS `receivers`;
CREATE TABLE IF NOT EXISTS `receivers` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `message_id` int(10) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=83 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `receivers`
--

INSERT INTO `receivers` (`id`, `user_id`, `message_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 5, 1, 1, '2018-12-02 08:59:22', '2018-12-02 08:59:22'),
(2, 5, 2, 1, '2018-12-02 08:59:24', '2018-12-02 08:59:24'),
(3, 5, 3, 1, '2018-12-02 08:59:24', '2018-12-02 08:59:24'),
(4, 5, 4, 1, '2018-12-02 08:59:24', '2018-12-02 08:59:24'),
(5, 5, 5, 1, '2018-12-02 08:59:25', '2018-12-02 08:59:25'),
(6, 5, 6, 1, '2018-12-02 08:59:25', '2018-12-02 08:59:25'),
(7, 5, 7, 1, '2018-12-02 08:59:25', '2018-12-02 08:59:25'),
(8, 5, 8, 1, '2018-12-02 09:29:20', '2018-12-02 09:29:20'),
(9, 5, 9, 1, '2018-12-02 09:29:24', '2018-12-02 09:29:24'),
(10, 5, 10, 1, '2018-12-02 09:31:27', '2018-12-02 09:31:27'),
(11, 5, 11, 1, '2018-12-02 09:31:29', '2018-12-02 09:31:29'),
(12, 7, 12, 1, '2018-12-02 09:33:35', '2018-12-02 09:33:35'),
(13, 9, 13, 1, '2018-12-02 09:33:39', '2018-12-02 09:33:39'),
(14, 10, 14, 1, '2018-12-02 09:33:42', '2018-12-02 09:33:42'),
(15, 1, 15, 1, '2018-12-02 09:38:38', '2018-12-02 09:38:38'),
(16, 6, 16, 1, '2018-12-02 09:38:43', '2018-12-02 09:38:43'),
(17, 1, 17, 1, '2018-12-02 09:39:43', '2018-12-02 09:39:43'),
(18, 1, 18, 1, '2018-12-02 09:39:43', '2018-12-02 09:39:43'),
(19, 1, 19, 1, '2018-12-02 09:39:43', '2018-12-02 09:39:43'),
(20, 1, 20, 1, '2018-12-02 09:39:43', '2018-12-02 09:39:43'),
(21, 1, 21, 1, '2018-12-02 09:39:43', '2018-12-02 09:39:43'),
(22, 1, 22, 1, '2018-12-02 09:39:43', '2018-12-02 09:39:43'),
(23, 1, 23, 1, '2018-12-02 09:39:44', '2018-12-02 09:39:44'),
(24, 1, 24, 1, '2018-12-02 09:39:44', '2018-12-02 09:39:44'),
(25, 1, 25, 1, '2018-12-02 09:39:44', '2018-12-02 09:39:44'),
(26, 1, 26, 1, '2018-12-02 09:39:44', '2018-12-02 09:39:44'),
(27, 1, 27, 1, '2018-12-02 09:39:44', '2018-12-02 09:39:44'),
(28, 1, 28, 1, '2018-12-02 09:39:44', '2018-12-02 09:39:44'),
(29, 1, 29, 1, '2018-12-02 09:39:44', '2018-12-02 09:39:44'),
(30, 1, 30, 1, '2018-12-02 09:39:45', '2018-12-02 09:39:45'),
(31, 1, 31, 1, '2018-12-02 09:39:45', '2018-12-02 09:39:45'),
(32, 1, 32, 1, '2018-12-02 09:39:45', '2018-12-02 09:39:45'),
(33, 1, 33, 1, '2018-12-02 09:39:45', '2018-12-02 09:39:45'),
(34, 1, 34, 1, '2018-12-02 09:39:45', '2018-12-02 09:39:45'),
(35, 1, 35, 1, '2018-12-02 09:39:46', '2018-12-02 09:39:46'),
(36, 1, 36, 1, '2018-12-02 09:39:46', '2018-12-02 09:39:46'),
(37, 1, 37, 1, '2018-12-02 09:39:46', '2018-12-02 09:39:46'),
(38, 1, 38, 1, '2018-12-02 09:39:46', '2018-12-02 09:39:46'),
(39, 1, 39, 1, '2018-12-02 09:39:46', '2018-12-02 09:39:46'),
(40, 1, 40, 1, '2018-12-02 09:39:46', '2018-12-02 09:39:46'),
(41, 1, 41, 1, '2018-12-02 09:39:47', '2018-12-02 09:39:47'),
(42, 1, 42, 1, '2018-12-02 09:39:47', '2018-12-02 09:39:47'),
(43, 1, 43, 1, '2018-12-02 09:39:47', '2018-12-02 09:39:47'),
(44, 1, 44, 1, '2018-12-02 09:39:47', '2018-12-02 09:39:47'),
(45, 1, 45, 1, '2018-12-02 09:39:47', '2018-12-02 09:39:47'),
(46, 6, 46, 1, '2018-12-02 09:49:33', '2018-12-02 09:49:33'),
(47, 7, 47, 1, '2018-12-02 09:49:36', '2018-12-02 09:49:36'),
(48, 7, 48, 1, '2018-12-02 09:49:37', '2018-12-02 09:49:37'),
(49, 8, 49, 1, '2018-12-02 09:49:40', '2018-12-02 09:49:40'),
(50, 8, 50, 1, '2018-12-02 09:49:42', '2018-12-02 09:49:42'),
(51, 10, 51, 1, '2018-12-02 09:56:17', '2018-12-02 09:56:17'),
(52, 10, 52, 1, '2018-12-02 09:56:17', '2018-12-02 09:56:17'),
(53, 10, 53, 1, '2018-12-02 09:56:17', '2018-12-02 09:56:17'),
(54, 10, 54, 1, '2018-12-02 09:56:18', '2018-12-02 09:56:18'),
(55, 10, 55, 1, '2018-12-02 09:56:18', '2018-12-02 09:56:18'),
(56, 10, 56, 1, '2018-12-02 09:56:18', '2018-12-02 09:56:18'),
(57, 5, 57, 1, '2018-12-02 09:56:31', '2018-12-02 09:56:31'),
(58, 5, 58, 1, '2018-12-02 09:56:31', '2018-12-02 09:56:31'),
(59, 5, 59, 1, '2018-12-02 09:56:31', '2018-12-02 09:56:31'),
(60, 5, 60, 1, '2018-12-02 09:56:32', '2018-12-02 09:56:32'),
(61, 3, 61, 1, '2018-12-02 09:56:36', '2018-12-02 09:56:36'),
(62, 3, 62, 1, '2018-12-02 09:56:37', '2018-12-02 09:56:37'),
(63, 3, 63, 1, '2018-12-02 09:56:37', '2018-12-02 09:56:37'),
(64, 3, 64, 1, '2018-12-02 09:56:38', '2018-12-02 09:56:38'),
(65, 3, 65, 1, '2018-12-02 09:56:38', '2018-12-02 09:56:38'),
(66, 10, 66, 1, '2018-12-02 09:57:57', '2018-12-02 09:57:57'),
(67, 3, 67, 1, '2018-12-02 09:58:09', '2018-12-02 09:58:09'),
(68, 2, 68, 1, '2018-12-03 06:00:16', '2018-12-03 06:00:16'),
(69, 2, 69, 1, '2018-12-03 06:00:17', '2018-12-03 06:00:17'),
(70, 2, 70, 1, '2018-12-03 06:00:17', '2018-12-03 06:00:17'),
(71, 2, 71, 1, '2018-12-03 06:00:17', '2018-12-03 06:00:17'),
(72, 5, 72, 1, '2018-12-03 06:57:20', '2018-12-03 06:57:20'),
(73, 27, 73, 1, '2018-12-03 11:06:19', '2018-12-03 11:06:19'),
(74, 27, 74, 1, '2018-12-03 11:06:19', '2018-12-03 11:06:19'),
(75, 27, 75, 1, '2018-12-03 11:06:19', '2018-12-03 11:06:19'),
(76, 27, 76, 1, '2018-12-03 11:06:20', '2018-12-03 11:06:20'),
(77, 27, 77, 1, '2018-12-03 11:06:20', '2018-12-03 11:06:20'),
(78, 27, 78, 1, '2018-12-03 11:06:20', '2018-12-03 11:06:20'),
(79, 27, 79, 1, '2018-12-03 11:06:20', '2018-12-03 11:06:20'),
(80, 27, 80, 1, '2018-12-03 16:14:57', '2018-12-03 16:14:57'),
(81, 27, 81, 1, '2018-12-03 16:14:57', '2018-12-03 16:14:57'),
(82, 27, 82, 1, '2018-12-03 16:14:58', '2018-12-03 16:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', NULL, NULL),
(2, 'manager', 'manager', NULL, NULL),
(3, 'moderator', 'moderator', NULL, NULL),
(4, 'employer', 'employer', NULL, NULL),
(5, 'employee', 'employee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

DROP TABLE IF EXISTS `role_has_permissions`;
CREATE TABLE IF NOT EXISTS `role_has_permissions` (
  `permission_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(10, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(17, 2),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(22, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(32, 2),
(33, 1),
(34, 1),
(35, 1),
(36, 1),
(37, 1),
(38, 1),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(42, 1),
(43, 1),
(44, 1),
(45, 1),
(46, 1),
(47, 1),
(48, 1);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ip_address` text NOT NULL,
  `user_agent` text NOT NULL,
  `payload` text NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

DROP TABLE IF EXISTS `skills`;
CREATE TABLE IF NOT EXISTS `skills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cat_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `skills_cat_id_index` (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `name`, `cat_id`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Web', 2, 'Active', '2018-12-12 06:43:17', '2018-12-12 06:43:17'),
(3, 'Web', 2, 'Active', '2018-12-12 06:43:21', '2018-12-12 06:43:21'),
(4, 'asdsad', 2, 'Active', '2018-12-12 06:43:26', '2018-12-12 06:43:26'),
(5, 'asdsad', 2, 'Active', '2018-12-12 06:43:29', '2018-12-12 06:43:29'),
(6, 'asdsad', 2, 'Active', '2018-12-12 06:43:31', '2018-12-12 06:43:31'),
(7, 'asdsad', 2, 'Active', '2018-12-12 06:44:08', '2018-12-12 06:44:08'),
(9, 'sdfsd', 9, 'Active', '2018-12-12 06:45:01', '2018-12-12 06:45:01');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

DROP TABLE IF EXISTS `subscription`;
CREATE TABLE IF NOT EXISTS `subscription` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` int(11) NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `point` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

DROP TABLE IF EXISTS `testimonial`;
CREATE TABLE IF NOT EXISTS `testimonial` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `filename` text NOT NULL,
  `status` varchar(128) NOT NULL DEFAULT 'Active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id`, `user_id`, `title`, `description`, `filename`, `status`, `created_at`, `updated_at`) VALUES
(2, 1, 'Mega Wallet', 'Educational institutions are the true seats of learning. The students, who are really anxious to learn, can develop healthy habits only in the schools. In a school we are taught how to move in society, how to behave with others and how to progress in life. \r\n\r\n\r\nI read in the St. John’s Higher Secondary School - Andaman and Chennai. With a lush garden outside, the school building presents a magnificent view. Its grassy lawns and gravel path with flowers along its sides and the Asoka trees growing near the gate add to its beauty. Any outsider may form the idea that it is perhaps a memorial building. \r\n\r\n\r\nBesides the beautiful building, spacious grounds and flowered beds, there are other things which attract our particular attentions. There is a grand swimming pool where every facility is provided to the students to learn swimming. The school has its own canteen where some eatables - hot tea or coffee and cold drinks - are always avail at subsidized rates. Hygienic conditions prevail in and around the school canteen. Besides, there is a cycle stand where the teachers and students park their cycles and scooters. An attendant is there who looks after the vehicles. \r\n\r\n\r\nOur school has many firsts to its credit. It has won many trophies in inner-school debates and declamation contests. The hockey and basketball teams of our school are adjudged the best in the inner-school sports meet for the past four years. ', 'registration.jpg', 'Disable', '2018-12-08 07:40:26', '2018-12-01 08:06:41'),
(3, 1, 'Sarfraz Ali Sial', 'Educational institutions are the true seats of learning. The students, who are really anxious to learn, can develop healthy habits only in the schools. In a school we are taught how to move in society, how to behave with others and how to progress in life. \r\n\r\n\r\nI read in the St. John’s Higher Secondary School - Andaman and Chennai. With a lush garden outside, the school building presents a magnificent view. Its grassy lawns and gravel path with flowers along its sides and the Asoka trees growing near the gate add to its beauty. Any outsider may form the idea that it is perhaps a memorial building. \r\n\r\n\r\nBesides the beautiful building, spacious grounds and flowered beds, there are other things which attract our particular attentions. There is a grand swimming pool where every facility is provided to the students to learn swimming. The school has its own canteen where some eatables - hot tea or coffee and cold drinks - are always avail at subsidized rates. Hygienic conditions prevail in and around the school canteen. Besides, there is a cycle stand where the teachers and students park their cycles and scooters. An attendant is there who looks after the vehicles. \r\n\r\n\r\nOur school has many firsts to its credit. It has won many trophies in inner-school debates and declamation contests. The hockey and basketball teams of our school are adjudged the best in the inner-school sports meet for the past four years. ', 'xmas beautiful wallpapers.jpg', 'Disable', '2018-12-08 07:40:33', '2018-12-06 05:36:26'),
(4, 1, 'Testing new', 'Educational institutions are the true seats of learning. The students, who are really anxious to learn, can develop healthy habits only in the schools. In a school we are taught how to move in society, how to behave with others and how to progress in life. \r\n\r\n\r\nI read in the St. John’s Higher Secondary School - Andaman and Chennai. With a lush garden outside, the school building presents a magnificent view. Its grassy lawns and gravel path with flowers along its sides and the Asoka trees growing near the gate add to its beauty. Any outsider may form the idea that it is perhaps a memorial building. \r\n\r\n\r\nBesides the beautiful building, spacious grounds and flowered beds, there are other things which attract our particular attentions. There is a grand swimming pool where every facility is provided to the students to learn swimming. The school has its own canteen where some eatables - hot tea or coffee and cold drinks - are always avail at subsidized rates. Hygienic conditions prevail in and around the school canteen. Besides, there is a cycle stand where the teachers and students park their cycles and scooters. An attendant is there who looks after the vehicles. \r\n\r\n\r\nOur school has many firsts to its credit. It has won many trophies in inner-school debates and declamation contests. The hockey and basketball teams of our school are adjudged the best in the inner-school sports meet for the past four years. ', '', 'Active', '2018-12-08 07:40:38', '2018-12-06 05:40:07'),
(5, 1, 'vjdklfjdskl', 'Educational institutions are the true seats of learning. The students, who are really anxious to learn, can develop healthy habits only in the schools. In a school we are taught how to move in society, how to behave with others and how to progress in life. \r\n\r\n\r\nI read in the St. John’s Higher Secondary School - Andaman and Chennai. With a lush garden outside, the school building presents a magnificent view. Its grassy lawns and gravel path with flowers along its sides and the Asoka trees growing near the gate add to its beauty. Any outsider may form the idea that it is perhaps a memorial building. \r\n\r\n\r\nBesides the beautiful building, spacious grounds and flowered beds, there are other things which attract our particular attentions. There is a grand swimming pool where every facility is provided to the students to learn swimming. The school has its own canteen where some eatables - hot tea or coffee and cold drinks - are always avail at subsidized rates. Hygienic conditions prevail in and around the school canteen. Besides, there is a cycle stand where the teachers and students park their cycles and scooters. An attendant is there who looks after the vehicles. \r\n\r\n\r\nOur school has many firsts to its credit. It has won many trophies in inner-school debates and declamation contests. The hockey and basketball teams of our school are adjudged the best in the inner-school sports meet for the past four years. ', 'mock-23-4.jpg', 'Active', '2018-12-08 07:40:41', '2018-12-06 05:42:14'),
(6, 1, 'adas', 'Educational institutions are the true seats of learning. The students, who are really anxious to learn, can develop healthy habits only in the schools. In a school we are taught how to move in society, how to behave with others and how to progress in life. \r\n\r\n\r\nI read in the St. John’s Higher Secondary School - Andaman and Chennai. With a lush garden outside, the school building presents a magnificent view. Its grassy lawns and gravel path with flowers along its sides and the Asoka trees growing near the gate add to its beauty. Any outsider may form the idea that it is perhaps a memorial building. \r\n\r\n\r\nBesides the beautiful building, spacious grounds and flowered beds, there are other things which attract our particular attentions. There is a grand swimming pool where every facility is provided to the students to learn swimming. The school has its own canteen where some eatables - hot tea or coffee and cold drinks - are always avail at subsidized rates. Hygienic conditions prevail in and around the school canteen. Besides, there is a cycle stand where the teachers and students park their cycles and scooters. An attendant is there who looks after the vehicles. \r\n\r\n\r\nOur school has many firsts to its credit. It has won many trophies in inner-school debates and declamation contests. The hockey and basketball teams of our school are adjudged the best in the inner-school sports meet for the past four years. ', 'blog2.png,client1.jpg,client2.jpg', 'Active', '2018-12-08 07:40:44', '2018-12-06 07:17:58'),
(7, 1, 'adas', 'Educational institutions are the true seats of learning. The students, who are really anxious to learn, can develop healthy habits only in the schools. In a school we are taught how to move in society, how to behave with others and how to progress in life. \r\n\r\n\r\nI read in the St. John’s Higher Secondary School - Andaman and Chennai. With a lush garden outside, the school building presents a magnificent view. Its grassy lawns and gravel path with flowers along its sides and the Asoka trees growing near the gate add to its beauty. Any outsider may form the idea that it is perhaps a memorial building. \r\n\r\n\r\nBesides the beautiful building, spacious grounds and flowered beds, there are other things which attract our particular attentions. There is a grand swimming pool where every facility is provided to the students to learn swimming. The school has its own canteen where some eatables - hot tea or coffee and cold drinks - are always avail at subsidized rates. Hygienic conditions prevail in and around the school canteen. Besides, there is a cycle stand where the teachers and students park their cycles and scooters. An attendant is there who looks after the vehicles. \r\n\r\n\r\nOur school has many firsts to its credit. It has won many trophies in inner-school debates and declamation contests. The hockey and basketball teams of our school are adjudged the best in the inner-school sports meet for the past four years. ', 'blog2.png,client1.jpg,client2.jpg', 'Active', '2018-12-08 07:40:47', '2018-12-06 07:18:25'),
(8, 1, 'asd', 'sdads', '2924ae866491021c38ff19b5e8c9e0f7_M.jpg,442254-barcelona-champs-league2015.jpg,hqdefault.jpg', 'Disable', '2018-12-12 10:02:28', '2018-12-12 05:02:28'),
(10, 1, 'Test ABC', 'ABC Tesing', 'perf.jpg,perfjpg.jpg,photo.jpg', 'Active', '2018-12-12 05:08:20', '2018-12-12 05:08:20'),
(11, 1, 'Test ABC', 'ABC Tesing', 'perf.jpg,perfjpg.jpg,photo.jpg', 'Active', '2018-12-12 05:13:05', '2018-12-12 05:13:05'),
(12, 1, 'Chal gaya  a oya tahir', 'Yes its done it', '[\"bd92680a-d8fe-4fd4-bc73-55a6df431f27.jpg\"]', 'Active', '2018-12-12 05:41:18', '2018-12-12 05:41:18'),
(13, 1, 'Chal gaya  a oya tahir', 'Yes its done it', '[\"FB_IMG_1542707870940.jpg\",\"t-shirt.jpg\",\"logo2.png\",\"IMG-20181117-WA0015.jpg\"]', 'Active', '2018-12-12 05:42:33', '2018-12-12 05:42:33'),
(14, 1, 'Chal gaya  a oya tahir', 'Yes its done it', '[\"FB_IMG_1542707870940.jpg\",\"t-shirt.jpg\",\"logo2.png\",\"IMG-20181117-WA0015.jpg\"]', 'Active', '2018-12-12 05:43:02', '2018-12-12 05:43:02'),
(15, 1, 'Chal gaya  a oya tahir', 'Yes its done it', '[\"FB_IMG_1542707870940.jpg\",\"t-shirt.jpg\",\"logo2.png\",\"IMG-20181117-WA0015.jpg\"]', 'Active', '2018-12-12 05:43:25', '2018-12-12 05:43:25'),
(16, 1, 'asdasd', 'asdasd', '[\"5c94ece71ea1b52d377c069c27eebfcd.jpg\",\"97373484-8515-4639-afd3-040af6b7a1ba.jpg\"]', 'Active', '2018-12-12 05:43:36', '2018-12-12 05:43:36'),
(17, 1, 'asdasd', 'asdasd', '[\"5c94ece71ea1b52d377c069c27eebfcd.jpg\",\"abc.png\",\"5c94ece71ea1b52d377c069c27eebfcd.jpg\"]', 'Active', '2018-12-12 06:02:45', '2018-12-12 06:02:45'),
(18, 1, 'asd', 'asd', '[\"desg.png\"]', 'Active', '2018-12-12 06:16:03', '2018-12-12 06:16:03'),
(19, 1, 'dfgdfgdf', 'dfgdfg', '[\"z.png\"]', 'Active', '2018-12-12 06:17:37', '2018-12-12 06:17:37'),
(20, 1, 'dfgdfgdf', 'dfgdfg', '[\"z.png\"]', 'Active', '2018-12-12 06:20:07', '2018-12-12 06:20:07'),
(21, 1, 'asd', 'asd', '[\"Chrysanthemum.jpg\"]', 'Active', '2018-12-12 06:20:33', '2018-12-12 06:20:33');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_path` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `role_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `is_trashed` int(11) NOT NULL DEFAULT '0',
  `image` text COLLATE utf8mb4_unicode_ci,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'In-Active',
  `phone` text COLLATE utf8mb4_unicode_ci,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verified` tinyint(1) NOT NULL DEFAULT '0',
  `avrage_rating` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `role_id` (`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=134 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `image_path`, `email_verified_at`, `password`, `address`, `role_id`, `is_trashed`, `image`, `status`, `phone`, `remember_token`, `verified`, `avrage_rating`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@email.com', '../storage/app/public/images/', '2018-12-12 07:36:55', '$2y$10$RlGOKfpqLfOnzRgn0qwky.oqX9/gBxthzKrSB9iKdAeFtXepnteQy', NULL, 1, 0, 'me.jpg', 'Active', '03001212121', 'WfVckeMtwfMBz9glpp8U3es105qf6AT59TqmvqVYX240iP1o1Mo8mB4kvLZv', 1, '0', NULL, '2018-11-30 07:16:24'),
(3, 'Zuhair Ahmad', 'zuhair@gmail.com', '../storage/app/public/images/1212.jpg', '2018-12-03 21:43:32', '$2y$10$U4N51FZDGUlu4sNjKAkqquGku.gsmQbsMJD6L3vfiQ5nj.0m/JFJO', NULL, 4, 0, '1.jpg', 'Active', NULL, 'rtCxfUoNAAghFFtQO4BrwWrsR9iQmi7B7g50jj1oj41WAvyNpPEOvNRgHjz6', 1, '0', '2018-11-30 08:35:35', '2018-12-04 09:43:32'),
(5, 'Zuhair Ahmad', 'zuhairrtyrty@gmail.com', 'storage/app/public/images/', '2018-11-30 21:14:29', '$2y$10$OjtuwshVT4NyJpOZ2NLUTOH/ha3v2DdYAkjhraxX74x4vxN7LSA6S', NULL, 3, 1, '1.jpg', 'Active', NULL, NULL, 0, '', '2018-11-30 08:57:15', '2018-12-01 09:14:37'),
(8, 'Ahmad', 'ahmad@gmail.com', NULL, '2018-12-10 05:05:26', '$2y$10$lLarFEIw1Kj2UJ7CBcR8ceOzEXbH5PLveAMjvKpKC2.cqVdJ61iqS', NULL, 5, 1, '1.jpg', 'Active', NULL, NULL, 0, '', '2018-11-30 10:24:18', '2018-12-03 02:22:51'),
(9, 'Sir Ajmad', 'majmalakbar@gmail.com', NULL, '2018-12-12 02:18:30', '$2y$10$wMxAjusWEUGEXoiVj0FcKeNQ2Kor0SbwWmTgOK4XBwstgi/jm9ZRi', NULL, 5, 0, '1.jpg', 'Active', NULL, NULL, 0, '', '2018-11-30 10:25:03', '2018-12-06 04:33:21'),
(27, 'Zuhair Ahmad', 'dsfsfsdf', NULL, NULL, '$2y$10$wMxAjusWEUGEXoiVj0FcKeNQ2Kor0SbwWmTgOK4XBwstgi/jm9ZRi', 'testing', 5, 0, '1.jpg', 'In-Active', '03057311111', 'qXdh3cZ3WOXRE4AwqujBRqn97k2DUvkpoCiqYqlKnId6afXRLbvhJpaY4LiV', 0, '', '2018-12-03 06:37:52', '2018-12-03 06:47:36'),
(28, 'aaaaaa', '33333333', NULL, '2018-12-10 05:05:17', '$2y$10$wMxAjusWEUGEXoiVj0FcKeNQ2Kor0SbwWmTgOK4XBwstgi/jm9ZRi', NULL, 5, 1, '1.jpg', 'Active', NULL, NULL, 0, '', '2018-12-03 06:39:13', '2018-12-06 04:33:08'),
(30, 'shoaib', 's.akram', NULL, '2018-12-12 02:18:32', '$2y$10$oDhKnEx7.0Awr20tAinAlOfgMkCTjJmY8l28lDRU4IHN5GkYZsWxi', NULL, 5, 0, '1.jpg', 'Active', NULL, NULL, 0, '', '2018-12-04 04:50:27', '2018-12-06 02:54:07'),
(31, 'shoaib', 'sssss', NULL, NULL, '$2y$10$HnXwM8OKQmXlKgGTzpWieOipyG6tUbQORw5WDCWlJwrAR8fmAffma', NULL, 5, 0, '1.jpg', 'In-Active', NULL, NULL, 0, '', '2018-12-04 04:51:13', '2018-12-04 04:51:13'),
(36, 'shoaib', 'wwwwww', NULL, NULL, '$2y$10$madvpZY17U1za/vv/AKoPOJ9CaIC0LPQE6GXh1BpD9v/BO0nUYpua', NULL, 5, 0, '1.jpg', 'In-Active', NULL, 'PKILlrOLjcQZY6eIRwqe4Zb7G8eerRaO4RHpvopEPl8eDrluzKe0aXNFK0ye', 1, '', '2018-12-04 04:55:30', '2018-12-04 04:56:25'),
(37, 'testUser', 's.akram@mega-softtech.com123', NULL, '2018-12-06 02:55:02', '$2y$10$zM.W.29FCfDMCrzSTB1L9u7nmbKSL3h9zAgyQO5GBQh8VZDbDDiLi', NULL, 4, 0, 'logo_transparent.png', 'Active', NULL, 'cUXrdMZMm9iX2pA6pShTDCyI8WQ0NZB1PcryqN1MAzCjCH95yrq3HSE1RGf3', 1, '', '2018-12-04 05:38:41', '2018-12-06 02:55:02'),
(38, 'tahir', '2222222', NULL, '2018-12-06 04:31:29', '$2y$10$7nenBs7LvIvgCI35d4K/Wudgk1tt4j1.PFyI1uifcR/hPb2b3WXXW', NULL, 5, 0, '1.jpg', 'Active', NULL, '940iQkh2LsAmzzTNoj1qH6J3jxVyKBGEBNRtjuuHTvGsjhaztFcJq8cg0Dhk', 1, '', '2018-12-04 09:51:29', '2018-12-06 04:31:29'),
(40, 'Zuhair Ahmad', 'zuhairjutt.bzu@gmail.com', NULL, NULL, '$2y$10$EsFXW.H9I3b7k0Qk7AHzPeSCXnGql5LlSCTKfM64oniKCZazNtMtW', NULL, 5, 0, '1.jpg', 'Active', NULL, 'mD4bAUFvMQIhJ4UbJLJqwC84sFLvAsASykh5JrLLfqTG3YY44rP8cN21iEOl', 1, '0', '2018-12-05 02:56:10', '2018-12-05 02:56:10'),
(42, 'Zuhair Ahmad', 'z.ahmed@mega-softtech.com', NULL, '2018-12-06 04:31:00', '$2y$10$KseZLeoxo3Fm2Ji3LRhu3u2yhbOQLmlpGKJSaaCtSR8mcsL7r30e2', NULL, 5, 0, '1.jpg', 'Active', NULL, 'Vcts9odcLTNY9av4ofTpdeFBzLGauxFlQ0CR6rIXalOONwzMZ1PlDrbo1y1k', 0, '', '2018-12-05 04:12:33', '2018-12-06 04:31:00'),
(43, 'FreeLancer', 'FreeLancer@gmail.com', NULL, '2018-12-04 22:24:19', '$2y$10$wN2lh/X0O4MP9391X8QzOek7.oenEi8d6OTmF.zlbGh4Pf4g52IUW', NULL, 4, 0, '1.jpg', 'Active', NULL, 'AAeuTPrbvv7KdE4hiAC21abkva1W90R5S3i3eTQA99JxmPnpUJMmRsWLY7qG', 1, '', '2018-12-05 05:47:47', '2018-12-05 05:47:47'),
(44, 'Arslan', 'zuhairjutt47@gmail.com', NULL, '2018-12-06 21:33:03', '$2y$10$Q3DvIpE7qYjGnZakXHZmMe/bd1PwSmW6wRdiCSJs0XE10/Mx0CroG', NULL, 4, 0, '1.jpg', 'Active', NULL, 'EelXbu5fyMroN2GWTKL7KyuJ8omHn28MDjtTW8oDLweJWHhFD5EeyrKSgUXu', 1, '0', '2018-12-06 03:15:44', '2018-12-07 09:33:03'),
(45, 'sadas', 'zuhair@gmail.comadsad', NULL, NULL, '112312321', 'zuhairahmad786', 1, 0, NULL, 'Actie', '123213', NULL, 0, '', '2018-12-07 01:53:15', '2018-12-07 01:53:15'),
(47, 'asdas', 'zuhairasdas@gmail.com', NULL, '2018-12-08 02:31:40', 'dasd', 'fdasd', 3, 1, '1.jpg', 'Active', '3213', NULL, 0, '', '2018-12-07 02:53:59', '2018-12-08 02:31:40'),
(49, 'dsad', 'zuhairasdasd@gmail.com', NULL, '2018-12-11 21:41:43', '1323', '3123123', 3, 0, '1.jpg', 'Active', '123123', NULL, 0, '', '2018-12-07 02:55:56', '2018-12-07 02:55:56'),
(50, 'asdas', 'adminadasdas@email.com', NULL, '2018-12-10 05:16:39', 'adasdasda', 'dasds', 3, 0, NULL, 'Active', '12312312', NULL, 0, '', '2018-12-07 04:48:13', '2018-12-07 04:48:13'),
(52, 'asdasd', 'zuhairasdasd231232@gmail.com', NULL, '2018-12-12 06:50:15', '3424234', 'eweqw', 2, 1, NULL, 'Active', '12312312', NULL, 0, '', '2018-12-07 04:48:51', '2018-12-08 02:26:21'),
(55, 'adasdasd', 'zuhair213123dasdasd@gmail.com', NULL, '2018-12-06 21:31:47', '23123213', '123123', 4, 1, NULL, 'Active', '13213123', NULL, 0, '', '2018-12-07 04:59:30', '2018-12-07 09:31:47'),
(57, 'asdsad', 'zuhairsadasdas@gmail.com', NULL, '2018-12-10 02:28:55', '213213', '12312', 5, 0, NULL, 'Active', '113123', NULL, 0, '', '2018-12-07 05:05:43', '2018-12-07 05:05:43'),
(58, 'asdasdasd', 'zuhair3123aaaaaaaaaa@gmail.com', NULL, '2018-12-08 03:08:31', '$2y$10$FvCmFGOAqxjnqdUZ8UUIue6m.FtJlCBXzGXvL6OeB9vS1Dm58vH7y', 'eqwqwe', 2, 1, NULL, 'Active', '03057370832', NULL, 0, '', '2018-12-07 06:48:24', '2018-12-08 03:08:31'),
(61, 'adasdsadasdasd', 'zuhairasdaeqweasde321@gmail.com', NULL, '2018-12-08 03:08:33', '$2y$10$R0lDgui4.4hdmxMmk6RTjeYqWA3fEGxVY8mb/21L3qlyqqf3S/QuW', 'qeddasd', 2, 1, NULL, 'Active', '123123123', NULL, 0, '', '2018-12-07 06:49:25', '2018-12-08 03:08:33'),
(62, '343432', 'zuhair12312333213213@gmail.com', NULL, '2018-12-08 03:08:32', '$2y$10$/lAySnHqmZeQHU0if3HTVuAPs5T0kTR7QqeOyfb.GmDI4m/zvhEra', '3123123', 2, 1, NULL, 'Active', '312312312', NULL, 0, '', '2018-12-07 06:57:02', '2018-12-08 03:08:32'),
(63, '123123123', 'zuhair11111111111111111@gmail.com', NULL, '2018-12-12 02:01:05', '$2y$10$FCE2kU4cWm.eLBELXekV1ex1SZKf/77UCGNMxiiwVemdJ6mMqNiTe', '1111111111111111111111111', 2, 1, NULL, 'Active', '111111111111111', NULL, 0, '', '2018-12-07 06:57:29', '2018-12-08 03:08:34'),
(64, '123123', '13123123@gmail.com', NULL, '2018-12-08 03:08:35', '$2y$10$3eO1gHjtsjfucQ5x796AoOo9Otr1Fns6nzGFPYRHyGyNTTrN0ca0q', '12312312', 2, 0, NULL, 'Active', '3213123', NULL, 0, '', '2018-12-07 06:58:12', '2018-12-08 03:08:35'),
(66, 'Raja bhai', 'raja@gmail.com', NULL, '2018-12-08 07:45:32', '$2y$10$s4usON08YoQvowEMBIkpfOJZVal4en/x29diOFUN2TjhFbnGCVkLG', 'xxxxxxxxxxxxx', 3, 0, NULL, 'Active', '34343434344534', NULL, 0, '', '2018-12-08 07:45:23', NULL),
(68, 'testmmmm', 'mm@mm.com', NULL, '2018-12-10 05:09:21', '$2y$10$VDouWbzxXqe8GxpQnPGir.wktwbCd5aHSt3br4YkGFDphC.gpY9hi', 'fdsfsdfsdfsdfsdfsdfsdfdsf', 3, 0, NULL, 'Active', '121212121212', NULL, 0, '', '2018-12-08 07:53:33', NULL),
(69, 'vvxc', 'vvv@www.cccc', NULL, NULL, '$2y$10$d/4FyviCWP.4Muu9zPtIVObEcF.EPl3UvoVR.cJlTJPceSXgws0Le', '111111111111111111', 3, 1, NULL, 'Active', '1111111111111', NULL, 0, '', '2018-12-08 07:55:03', NULL),
(71, 'vvxc', 'vvv@www.cccsssc', NULL, '2018-12-12 06:58:46', '$2y$10$XGfckYK3EIWOnAI3AqgWneis/q4R.bNwFfLgG5MArayEuLCoplOk.', '111111111111111111', 3, 0, NULL, 'Active', '1111111111111', NULL, 0, '', '2018-12-08 07:55:29', NULL),
(72, 'zzzz', 'zz@www.ghfgh', NULL, '2018-12-08 07:57:14', '$2y$10$MnveUd10t1oS7cFbAl9isOtY9O6SMbAizawD.H.wgoNxfuGs2Eqri', '4353453454353', 3, 0, NULL, 'Active', '545435435345', NULL, 0, '', '2018-12-08 07:57:04', NULL),
(73, 'dvdfgvd', 'sss@qqq.gfgdf', NULL, NULL, '$2y$10$2ca57V9NQ7itwYA86kdGi.35dV/.d7iHGxj4Up5taGsZa4EFGllzC', 'gfdgdfgdfgfd', 4, 0, NULL, 'Active', '5445454', NULL, 0, '', '2018-12-08 07:59:16', NULL),
(75, 'fazi', 'fazi98@gmail.com', NULL, NULL, '$2y$10$HAMGaDzG/I7Si35oxnxft.zZdhFSJ5vLvhsEM1Wo4IFvxSIOymzEu', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 05:20:08', NULL),
(76, 'faizanch', 'faizan.haider727@gmail.comddd', NULL, NULL, '$2y$10$1MFNQRYlEl.ctAT5zS4XCulTiQWaupixjORHKu35PD6eA8ajdSEVa', NULL, 4, 0, NULL, 'In-Active', NULL, '5lHuw6qd4jApZ4fjTbbUJgnbBKv3b41sKEC01ODeecOQ5zDQc9e5B7Dotek3', 0, '', '2018-12-10 05:21:16', NULL),
(78, 'zain', 'socialmedia@megasoftware.nl', NULL, NULL, '$2y$10$ZAe9MnK.IhPKk0Q10dnN/.w1iBcuA8.dZSiiQ1B1ahHp7UOz5dZme', NULL, 4, 0, NULL, 'In-Active', NULL, 'Pcm0tL0DMtxLl7Oce62VUzI2FFcVwE0V3mpRLgsc5IqjPVyySfk1XWOeB06u', 0, '', '2018-12-10 06:50:26', NULL),
(79, 'fizan', 'faizan.haider727@gmail.com', NULL, NULL, '$2y$10$XUaKSD0usfO1Po3nKnoB9e86igr2hRGQltd1JJXDs0.lXsdfN7Sme', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:21:04', NULL),
(80, 'fizan', 's.akram@mega-softtech.comfdsfsdfs', NULL, NULL, '$2y$10$TEbKPFc4Rb2/3W8l7LlkduhpeQU/54Xib3ZKLpZb439gv.ITa5CFO', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:22:12', NULL),
(81, 'dsds', 'ssssssss', NULL, '2018-12-11 21:50:07', '$2y$10$G3a1zb5jXiuIE520go04yeBCnhWneBvqKkPg2L6szTomJRyEAWdUe', NULL, 5, 0, NULL, 'Active', NULL, NULL, 0, '', '2018-12-10 07:25:01', NULL),
(82, 'Shoaib Akram', 's.akram@mega-softtech.com', NULL, NULL, '$2y$10$d2J9mo3Q8FEsPaI2gRhkS.exYPVV6sU3DILl9coEN56Yz04SiLkoO', NULL, 4, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:36:58', NULL),
(83, 'Sami', 'zuhair123@gmail.com', NULL, NULL, '$2y$10$A..RFTBPWZzcHcIqaXKcLO6G7iNLyU5Z4WZp5CjJk9aKX8KAUZwdq', NULL, 4, 0, NULL, 'In-Active', NULL, 'fvRAfIsNYEv47AlvWsv1fquGZrakdGnzfqIdQKR1BuZ19s4XbCSyh8u9XrST', 0, '', '2018-12-10 07:40:34', NULL),
(84, 'Shoaib Akram', 's.akram@mega-softtech.comcdsd', NULL, NULL, '$2y$10$kViCS/ibrnkOPJ/Zjn0NOOKJPtx31qmO12WUTpxT/L8oVxiSBhXHW', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:40:57', NULL),
(85, 'Sami Ahmad', 'sami@gmail.com', NULL, NULL, '$2y$10$5Cq2mpuM8LkLmh/E8GFrBu9JCHWWwtzuqgODFsh3rGPcis4AvF7v6', NULL, 4, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:41:09', NULL),
(86, 'Shoaib Akram', 's.akram@mega-softtech.comdadsdsdwede', NULL, NULL, '$2y$10$3WUYgd8GojwBYPIaWiuH0Om9DBdnpmVK6xbMOs8qHzUN6it4cr16K', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:41:35', NULL),
(87, 'Shoaib Akram', 's.akram@mega-softtech.comfdfdsfewfwe', NULL, NULL, '$2y$10$8gUil3Mc6btf/s3vR7hLve6AYm/TEE6ihSYypcfJSbKwHz.EEmRY.', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:49:41', NULL),
(88, 'Dawood Siddiq', 'd.siddiq@mega-softtech.com', NULL, NULL, '$2y$10$o0dybiDhtatJ9qRo0k3hWuSmmYG2SyFDwJpxv7Tc78HmPpfHuD.BS', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:51:03', NULL),
(89, 'Shoaib Akram', 'wwdadssdsfds', NULL, NULL, '$2y$10$wiL4KKsz6gPVuDXwRzTgFuJFd29kaiin00/fTNspWa2VTSOyc.a5m', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:53:43', NULL),
(90, 'Shoaib Akram', 'qqqq', NULL, NULL, '$2y$10$3FHTkCTGTTrRKEOt8rkJtOjEATeew/cgdr33p/awgy0Z4wfLpp.RS', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:54:58', NULL),
(91, 'Shoaib Akram', 'ssssssssssfdsfds', NULL, NULL, '$2y$10$JmCrfUjmppA2LPlIWhSyjetVddOnWgNoDOfzwUuIeD1TIW1p3fA4q', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:56:45', NULL),
(92, 'Shoaib Akram', 'dsafsasdfsvcsvcs', NULL, NULL, '$2y$10$2/XFzt.Ce7Qfs0bFtZeey.UUGhWq11c2aYvO1gfCFxDc/pHDyISqK', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 07:59:05', NULL),
(93, 'Shoaib Akram', 'vjklsdfajdfjdkslz;fja', NULL, NULL, '$2y$10$O6xP2ESaYGAX2a.EmORfX.yxcmWS8kSdzc.ez5lGKrNrZGcBLqX4S', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:04:19', NULL),
(94, 'Shoaib Akram', 'qwertyuiopi;lkjhgfds', NULL, NULL, '$2y$10$E6lvwBhRV3lQjr5J4U.vjuqNPf3Lz/.F0vF6flWzFh6F7VwldjrOO', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:06:28', NULL),
(96, 'Shoaib Akram', 'bfsdfadfdsa', NULL, NULL, '$2y$10$533Rm3cU44XHmXQL2jxCYuhveslKvnf2LTri46QMO/HFs1bfTINaK', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:11:04', NULL),
(97, 'Shoaib Akram', 'sdfghbajsfhdbjankfjbds', NULL, NULL, '$2y$10$tv/zW7neWKMcESnz1U9BJ.x4CBIdqvWJFVBOy3I.8rZz7ueqnkaby', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:12:17', NULL),
(98, 'Shoaib Akram', 'fdgsafdsadfsa', NULL, NULL, '$2y$10$J0CNz1VJwfeuekl/n4A/B.F2L5r39ALral1OVOEsYJvvkTmK10Q3G', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:17:02', NULL),
(99, 'Shoaib Akram', 'ghfdsgdfsdfsa', NULL, NULL, '$2y$10$V./oMisS7pRAdWc7kedOou91evTIJlqD2RSzGfb1A1iSjqKFvTIsW', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:18:37', NULL),
(100, 'Shoaib Akram', 'gfdsdfsabdfsadfsa', NULL, NULL, '$2y$10$dZxKfrjcbE9yvI.fbaPUCuaeewObA/TV.DdlhWQh7S9xVwWHJNWfu', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:20:04', NULL),
(101, 'Shoaib Akram', 'fgdsgafsdafds', NULL, NULL, '$2y$10$mXCi.rnHnW1sDfynXCs6q.U4CH86cZTI4YNDm9Y89txczB.i6hg5y', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:22:36', NULL),
(102, 'Shoaib Akram', 'fdsaafdsadsa', NULL, NULL, '$2y$10$K6mFiFZ8AzBF/yuyMiSg4O0qFS.q9KACwPE.lhkWJEl.LT7rYKi7u', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:26:44', NULL),
(103, 'Shoaib Akram', 'wwwwwwww', NULL, NULL, '$2y$10$S75N9l24kCrZ/TcInYQloe6I5/rqQgX.0xzT0g1joiq9fqVop6UqS', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:46:39', NULL),
(104, 'Shoaib Akram', 'wqeqwdefdsvff', NULL, NULL, '$2y$10$u90q6DL.CyOvq1bN24D9Auh5QXN7iPiKKnAITNcJ/z5MQl1dwfsaq', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:47:57', NULL),
(105, 'Shoaib Akram', 'cdskfsjfewfjwo', NULL, NULL, '$2y$10$rpCfGzb8Pt6UpJeEiKz0oeo9bQCGzDTBj2f8krhMEAgdVBaaXhwki', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:49:02', NULL),
(106, 'Shoaib Akram', 'qqqqqqqqqqqqqq', NULL, NULL, '$2y$10$AthCWwreR6pPGhxnkAkOZOnKwO37HfMlIy80dfwtVFbudlphXSZVO', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:52:11', NULL),
(107, 'Shoaib Akram', 'qqqdfkewfiokfpr', NULL, NULL, '$2y$10$wsUGrUn//XYnkRIRZA7ONuypp5SP/vtP5cGUKqNfjtVOc5cqJ10ry', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 08:55:11', NULL),
(108, 'Shoaib Akram', '123123', NULL, NULL, '$2y$10$r4Bjksz1PWlo3uIAK0KvDu/wpgUfAL0EyoeFgjskIHz2kxRYExydK', NULL, 5, 0, NULL, 'In-Active', NULL, 'Ra34P9fPuzd5B6bW9HPE1iIxQpU1RJ1ce6tntD8NQxuNMABcA74KLMToQVCh', 0, '', '2018-12-10 08:57:22', NULL),
(109, 'Shoaib Akram', 'e21312e3wdw', NULL, NULL, '$2y$10$GEjk5t0qGPVb4z86NqOceew9Vc4ta/jqaKUmy6eEWxKyIDGWe.L5.', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 09:03:31', NULL),
(110, 'Shoaib Akram', 'qqqqqqqqfrrfrfr', NULL, NULL, '$2y$10$NdHHv7ZyUEogTOXa41FX1etyfh7omszmK6pMIZFsuRCrG1AAvWU9.', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 09:05:21', NULL),
(111, 'Shoaib Akram', 'wqe21e23rfefwefe4w', NULL, NULL, '$2y$10$1mMOwFmHxEOQ.FLE0OoBh.9d23xSGeTZaxywUWmBGa.1OY8TGsop6', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 09:07:11', NULL),
(112, 'Shoaib Akram', 'mkfdlgmreioejo', NULL, NULL, '$2y$10$a.FmCBric57VgHMpcujsxOyyJveU2xAtDGz2EUMkF2Ux6Dc28Tvaa', NULL, 5, 0, NULL, 'In-Active', NULL, NULL, 0, '', '2018-12-10 09:08:49', NULL),
(113, 'Shoaib Akram', 'Shoaib.akram@yahoo.com', NULL, NULL, '$2y$10$HwEG7PT51yHScVIBOWzxVeNZZuS73bzEuTIW/LXRCGwsMBx23hMpC', NULL, 5, 0, NULL, 'Active', NULL, 'x69LANqnYIfOWP2GFHIGf1geGZ5SYxKn2gHwZWBAoGkEE1syJM1Hbt7aRcJ1', 1, '0.21666666666666667', '2018-12-10 09:09:28', NULL),
(114, 'Tahir', 't.jamil@mega-softtech.com', NULL, NULL, '$2y$10$g1ft6iyvK8xCP8ZaB4Pqn.lhykZU9KdDL/XdAACCzhGbw8d/lLYg.', NULL, 5, 0, NULL, 'In-Active', '0224 3255322', 'GZZtDMB7eN8MWFK43aKNs7y1ca4K8PntBci0E1IuMzcWGG6hDm2S43CBa1WV', 1, '', '2018-12-10 13:48:26', NULL),
(115, 'Waqas', 'waqas@gmail.com', NULL, NULL, '$2y$10$t/HwTa2RnT0hC7vcoCyw4..uIFifm6kHZBfQhPnQryt.Pq8KqYJQq', NULL, 5, 0, 'gallery6.jpg', 'Active', '03124565789223', 'OeXTcrKBr14xtB0pytbdZIyQkANm3ZpYxkV7KUF1DhpI2Sh3DpBbSBMIpmeQ', 1, '', '2018-12-11 04:06:50', NULL),
(116, 'Final Testing', 'test@gmail.com', NULL, '2018-12-12 02:00:12', '$2y$10$t4u..4y5yT0kgZBBcQ/nMOSwVe283P1gPIxXM8dbMeF75BHTrxZKu', 'ABCDEFGH', 2, 0, NULL, 'Active', '1212312312', NULL, 0, '', '2018-12-12 01:40:28', NULL),
(118, 'sadsad', 'zuhairjutt23432.bzu@gmail.com344332423', NULL, NULL, '$2y$10$MM1fMxZra9s6OBQxAe5jwehVPJaHcn4p5L5XP3.BK/RnZpOUesMJu', '313weqeqweqw', 2, 1, NULL, 'Active', '312312312', NULL, 0, '', '2018-12-12 01:46:57', NULL),
(123, 'asdasd', 'zuhair12312sdda@gmail.com', NULL, '2018-12-12 02:05:52', '$2y$10$ueRlcT2BQ8Ro0MHveaYweuVHT4uasgHj5LofkV8yHBqXWnVVmwt3a', 'wqeqweqwe', 3, 0, NULL, 'Active', '213123123123', NULL, 0, '', '2018-12-12 02:04:53', NULL),
(124, 'wqeqwe', 'zuhair23432542353123@gmail.com', NULL, '2018-12-12 02:14:38', '$2y$10$XwQcsxka6pMp6V9H3eJpYuuN97xA617Wapr2W.Xw9d4mbzNk7Imfm', 'eweqweqwew', 3, 0, NULL, 'Active', '03057370832123', NULL, 0, '', '2018-12-12 02:05:31', NULL),
(126, 'Zuhair Ahmad', 'zuhairwerwer@gmail.com', NULL, '2018-12-11 21:45:19', '$2y$10$J51zVoyiUx0mF7H4xDC1R.JwxK.5SPr9cajKYxgAUNpd4wkubDrBy', 'wrewr', 2, 0, NULL, 'Active', '234324324', NULL, 0, '', '2018-12-12 02:11:17', NULL),
(127, 'Zuhair Ahmad', 'zuhairjutt.bzqweqwu@gmail.com', NULL, NULL, '$2y$10$39oD3vhhuVbRP5cbvB/OueLzPXQigN3IzQzKmJjNitz4LVVg3VuCS', '3weqweqweqwe', 5, 0, NULL, 'Active', '12312321', NULL, 0, '', '2018-12-12 02:16:57', NULL),
(128, 'Zuhair Ahmad', 'a.ahmed434342@mega-softtech.com', NULL, NULL, '$2y$10$ndp7EDxEVB7ZjNUpJD52t.GPx7kWHWqLSCgYtoVMkPGktmau41uBq', 'fdfds <a href=\"./\" class=\"btn btn-danger\">Back</a> <a href=\"./\" class=\"btn btn-danger\">Back</a> <a href=\"./\" class=\"btn btn-danger\">Back</a> <a href=\"./\" class=\"btn btn-danger\">Back</a> <a href=\"./\" class=\"btn btn-danger\">Back</a>', 5, 0, NULL, 'Active', '3243243243', NULL, 0, '', '2018-12-12 02:18:00', NULL),
(129, 'wewqe', 'zuhair123213wqeqwe@gmail.com', NULL, NULL, '$2y$10$TzdgaQgFDyB1f.lWEQvA0uII5nVH4McK6zLVNRQgahlJJLqUNk1Oa', 'dasdasdasdasd', 4, 0, NULL, 'Active', '123123', NULL, 0, '', '2018-12-12 02:21:08', NULL),
(130, 'fghfgh', 't.jamil12312323@mega-softtech.com', NULL, NULL, '$2y$10$8rGi6nI.jV9mm/mRz0iDxOYdO9p2OkBM2GEQGtCP08OLh0qA.U4HO', '213213', 2, 1, NULL, 'Active', '13123213', NULL, 0, NULL, '2018-12-12 09:44:45', NULL),
(131, 'wewaewa', 'awewaewae@gmail.com', NULL, '2018-12-11 21:45:15', '$2y$10$Y6KQpVyBCRdbxOkD8aAzJ.QNmRc3evdAT526QNAluV2pRHrwzJIjq', 'dgdds', 2, 0, NULL, 'Active', '909890099', NULL, 0, NULL, '2018-12-12 09:45:05', NULL),
(132, 'ew', 'ew@gmai', NULL, '2018-12-11 21:49:37', '$2y$10$7k1x9NRyhNv4SVyKwjupp.wHIU3TqMq4cfDlWxAbxKhJPgsUPYqiG', 'ew', 3, 0, NULL, 'Active', '344334', NULL, 0, NULL, '2018-12-12 09:47:49', NULL),
(133, 'N/A', 't.jamil@rt', NULL, NULL, '$2y$10$eClPcCYUqrOxNWIezfLzK.cZjUth01.NPYAk1rcQKQH8EyWW3sLbG', '234', 3, 1, NULL, 'Active', '1343214', NULL, 0, NULL, '2018-12-12 09:48:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_document_table`
--

DROP TABLE IF EXISTS `user_document_table`;
CREATE TABLE IF NOT EXISTS `user_document_table` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `document_type_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `document_url` varchar(128) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verification_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'No',
  `image_front` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_document_table_user_id_index` (`user_id`),
  KEY `user_document_table_document_type_id_index` (`document_type_id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_document_table`
--

INSERT INTO `user_document_table` (`id`, `user_id`, `document_type_id`, `document_url`, `verification_status`, `image_front`, `image_back`, `created_at`, `updated_at`) VALUES
(12, 115, 1, 'blog3.png', 'No', NULL, NULL, '2018-12-11 07:07:35', '2018-12-11 07:07:35'),
(13, 115, 1, 'z19.jpg', 'No', NULL, NULL, '2018-12-11 07:12:23', '2018-12-11 07:12:23'),
(14, 115, 1, 'client1.png', 'No', NULL, NULL, '2018-12-11 07:20:22', '2018-12-11 07:20:22'),
(15, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:20:29', '2018-12-11 07:20:29'),
(16, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:20:34', '2018-12-11 07:20:34'),
(17, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:20:52', '2018-12-11 07:20:52'),
(18, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:22:29', '2018-12-11 07:22:29'),
(19, 115, 1, 'logo.png', 'No', NULL, NULL, '2018-12-11 07:22:37', '2018-12-11 07:22:37'),
(20, 115, 1, 'gallery1.jpg', 'No', NULL, NULL, '2018-12-11 07:24:00', '2018-12-11 07:24:00'),
(21, 115, 1, 'gallery1.jpg', 'No', NULL, NULL, '2018-12-11 07:24:18', '2018-12-11 07:24:18'),
(22, 115, 1, 'gallery1.jpg', 'No', NULL, NULL, '2018-12-11 07:25:29', '2018-12-11 07:25:29'),
(23, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:25:47', '2018-12-11 07:25:47'),
(24, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:25:54', '2018-12-11 07:25:54'),
(25, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:26:00', '2018-12-11 07:26:00'),
(26, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:37:19', '2018-12-11 07:37:19'),
(27, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:37:51', '2018-12-11 07:37:51'),
(28, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:39:07', '2018-12-11 07:39:07'),
(29, 113, 1, NULL, 'No', NULL, NULL, '2018-12-11 07:43:33', '2018-12-11 07:43:33'),
(30, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 08:08:29', '2018-12-11 08:08:29'),
(31, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 08:17:57', '2018-12-11 08:17:57'),
(32, 113, 1, NULL, 'No', NULL, NULL, '2018-12-11 08:25:26', '2018-12-11 08:25:26'),
(33, 113, 1, NULL, 'No', NULL, NULL, '2018-12-11 08:33:12', '2018-12-11 08:33:12'),
(34, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 08:35:27', '2018-12-11 08:35:27'),
(35, 115, 1, NULL, 'No', NULL, NULL, '2018-12-11 08:36:41', '2018-12-11 08:36:41');

-- --------------------------------------------------------

--
-- Table structure for table `user_models`
--

DROP TABLE IF EXISTS `user_models`;
CREATE TABLE IF NOT EXISTS `user_models` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `model_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_models`
--

INSERT INTO `user_models` (`id`, `model_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', NULL, NULL),
(2, 'manager', NULL, NULL),
(3, 'moderator', NULL, NULL),
(4, 'employer', NULL, NULL),
(5, 'employee', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_points`
--

DROP TABLE IF EXISTS `user_points`;
CREATE TABLE IF NOT EXISTS `user_points` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `remaining_points` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_points_user_id_index` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_portfolio`
--

DROP TABLE IF EXISTS `user_portfolio`;
CREATE TABLE IF NOT EXISTS `user_portfolio` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(32) NOT NULL,
  `description` text NOT NULL,
  `ref_url` varchar(128) DEFAULT NULL,
  `images` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_portfolio`
--

INSERT INTO `user_portfolio` (`id`, `user_id`, `title`, `description`, `ref_url`, `images`, `created_at`, `updated_at`) VALUES
(1, 115, 'asd', 'asd', 'asd', 'gallery3.jpg', '2018-12-11 09:10:31', '2018-12-11 09:10:31'),
(2, 115, 'asdsadasdsad', 'asdsad', 'asddasd', 'gallery2.jpg', '2018-12-11 09:11:29', '2018-12-11 09:11:29'),
(3, 40, 'asdasd', 'asdasd', 'asd', 'gallery3.jpg', '2018-12-11 09:30:57', '2018-12-11 09:30:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_projects`
--

DROP TABLE IF EXISTS `user_projects`;
CREATE TABLE IF NOT EXISTS `user_projects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `project_type_id` int(10) UNSIGNED NOT NULL DEFAULT '1',
  `user_id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` text COLLATE utf8mb4_unicode_ci,
  `budget` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_time` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `end_time` datetime DEFAULT NULL,
  `url` text COLLATE utf8mb4_unicode_ci,
  `filename` text COLLATE utf8mb4_unicode_ci,
  `project_description` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_started` tinyint(1) NOT NULL DEFAULT '0',
  `admin_action` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `required_bid_amount` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_projects_project_type_id_index` (`project_type_id`),
  KEY `user_projects_user_id_index` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_projects`
--

INSERT INTO `user_projects` (`id`, `project_type_id`, `user_id`, `title`, `description`, `tags`, `budget`, `start_time`, `end_time`, `url`, `filename`, `project_description`, `status`, `is_started`, `admin_action`, `required_bid_amount`, `created_at`, `updated_at`) VALUES
(45, 1, 3, 'SEO', 'In many parts of the world, schools also help children learn things about life.\r\n\r\nIn school, pupils develop their personality.\r\nSchools teach pupils about religion and ethics.\r\nSchools help people recognise socially accepted norms and behaviour.\r\nPedagogy is the science of teaching children. Different schools use different ways of teaching. There is quite a lot of disagreement about what and how students should be taught.[3] Many countries solve this by allowing different types of school, so parents and children have some choice. Choices may include home education.', 'seo and social media', '100', NULL, NULL, 'https://www.google.com/search?q=ios+test&oq=ios+test&aqs=chrome..69i57j0j69i60l3j0.1479j0j7&sourceid=chrome&ie=UTF-8', '[\"811xG9X-RcL._UX569_.jpg\",\"addTransfer.png\",\"register.png\",\"addressbook.png\",\"Screenshot 2018-10-08 at 17.36.25.png\"]', NULL, 'Assigned', 1, 'Pending', NULL, '2018-11-30 09:50:58', '2018-12-12 07:47:54'),
(48, 1, 3, 'MIB', 'In many parts of the world, schools also help children learn things about life.\r\n\r\nIn school, pupils develop their personality.\r\nSchools teach pupils about religion and ethics.\r\nSchools help people recognise socially accepted norms and behaviour.\r\nPedagogy is the science of teaching children. Different schools use different ways of teaching. There is quite a lot of disagreement about what and how students should be taught.[3] Many countries solve this by allowing different types of school, so parents and children have some choice. Choices may include home education.', 'Web', '23', NULL, '2019-02-08 00:00:00', NULL, NULL, NULL, 'Assigned', 1, 'Active', NULL, NULL, '2018-12-12 10:06:43'),
(49, 1, 44, 'asdas', 'asdasd', NULL, NULL, NULL, '2018-12-13 00:00:00', NULL, NULL, NULL, NULL, 0, 'Active', NULL, '2018-12-10 08:41:32', '2018-12-12 10:05:23'),
(51, 1, 44, 'dfgdfg', '24234', NULL, '23423432', NULL, '2018-12-14 00:00:00', NULL, NULL, NULL, NULL, 0, 'trash', NULL, '2018-12-10 08:42:03', '2018-12-12 09:49:00'),
(55, 1, 44, 'fsdf', 'sdfsdf', NULL, '343214', NULL, '2018-12-21 00:00:00', NULL, NULL, NULL, NULL, 0, 'Pending', NULL, '2018-12-10 09:01:41', '2018-12-10 09:01:41'),
(57, 1, 3, 'PaymentTesting Project', 'This is a new testing project for users to test this product', NULL, '30', NULL, '2018-12-09 00:00:00', NULL, NULL, NULL, 'Assigned', 1, 'Pending', NULL, '2018-12-12 08:11:51', '2018-12-12 08:13:59'),
(58, 1, 3, 'Sarfaraz', 'Hihihihihihihihihihih', NULL, '10', NULL, '2018-12-15 00:00:00', NULL, NULL, NULL, 'Assigned', 1, 'Pending', NULL, '2018-12-12 09:02:37', '2018-12-12 09:06:24'),
(59, 1, 3, 'Tahir', 'gffr fgdhkjh  \r\nf\r\nfgdfg\r\ndg\r\neargergrtghshsgs', NULL, '50', NULL, '2018-12-28 00:00:00', NULL, NULL, NULL, 'Assigned', 1, 'Pending', NULL, '2018-12-12 09:13:33', '2018-12-12 09:17:21'),
(60, 1, 44, 'Testing', 'Testing is ok sir', NULL, '32', NULL, '2018-12-20 00:00:00', NULL, NULL, NULL, 'Pending', 0, 'Pending', NULL, '2018-12-13 05:34:54', '2018-12-13 05:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_rating`
--

DROP TABLE IF EXISTS `user_rating`;
CREATE TABLE IF NOT EXISTS `user_rating` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `ratee_user_id` int(11) NOT NULL,
  `rating_skill` decimal(10,0) NOT NULL,
  `rating_time` decimal(10,0) NOT NULL,
  `rating_coordination` decimal(10,0) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_rating`
--

INSERT INTO `user_rating` (`id`, `user_id`, `ratee_user_id`, `rating_skill`, `rating_time`, `rating_coordination`, `created_at`, `updated_at`) VALUES
(1, 3, 113, '5', '2', '4', '2018-12-12 05:44:43', '2018-12-12 05:44:43'),
(2, 3, 113, '3', '5', '1', '2018-12-12 05:46:03', '2018-12-12 05:46:03'),
(3, 3, 113, '4', '4', '1', '2018-12-12 08:03:28', '2018-12-12 08:03:28'),
(4, 3, 113, '5', '5', '2', '2018-12-12 08:14:53', '2018-12-12 08:14:53'),
(5, 3, 113, '4', '5', '4', '2018-12-12 09:08:09', '2018-12-12 09:08:09'),
(6, 3, 113, '4', '5', '2', '2018-12-12 09:20:15', '2018-12-12 09:20:15');

-- --------------------------------------------------------

--
-- Table structure for table `user_skills`
--

DROP TABLE IF EXISTS `user_skills`;
CREATE TABLE IF NOT EXISTS `user_skills` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `skill_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_skills_user_id_index` (`user_id`),
  KEY `user_skills_skill_id_index` (`skill_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_subscription`
--

DROP TABLE IF EXISTS `user_subscription`;
CREATE TABLE IF NOT EXISTS `user_subscription` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED NOT NULL,
  `sub_id` int(10) UNSIGNED NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user_subscription_user_id_index` (`user_id`),
  KEY `user_subscription_sub_id_index` (`sub_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user_type`
--

DROP TABLE IF EXISTS `user_type`;
CREATE TABLE IF NOT EXISTS `user_type` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `verify_users`
--

DROP TABLE IF EXISTS `verify_users`;
CREATE TABLE IF NOT EXISTS `verify_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `verify_users`
--

INSERT INTO `verify_users` (`id`, `user_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 32, '7Xy4D7Faf8EZwy7AoQ3YvYkMY8yvMH4LfOQaEFFu', '2018-12-04 04:52:07', '2018-12-04 04:52:07'),
(2, 33, 'RbwhdFx7ZGlnTi0xvgRgQLeaV8V18cUsXgrRrREl', '2018-12-04 04:52:30', '2018-12-04 04:52:30'),
(3, 34, 'ImaGBRJUj4AkN7jnsLnACfSjGKsJpN4RW7YO1fkx', '2018-12-04 04:52:54', '2018-12-04 04:52:54'),
(4, 35, 'PGEnYTO3cG6vZT03OggvxEyWPHMV4DCFoa4IgGr9', '2018-12-04 04:53:41', '2018-12-04 04:53:41'),
(5, 36, 'HwkGa0ogWKMxEFYOsS92BpOSmTiddOzkKz3ISZMS', '2018-12-04 04:55:30', '2018-12-04 04:55:30'),
(6, 37, 'kpuO8S7AQmlEVfxHNUeG8JFbaN7FYEl09Jhwaz4H', '2018-12-04 05:38:41', '2018-12-04 05:38:41'),
(7, 38, 'oHPfBJlUWxx37ksajdfup9605NNRYduTyRTaLTh1', '2018-12-04 09:51:29', '2018-12-04 09:51:29'),
(8, 39, 'LEASDXW0tk6qSjHcI5KBSslllBIAySJsIFJTS0T7', '2018-12-05 02:51:21', '2018-12-05 02:51:21'),
(9, 40, 'MC9UvwJYQMRJ49cbgP7s4IEApxAG7vzkMhUDNxZs', '2018-12-05 02:56:10', '2018-12-05 02:56:10'),
(10, 41, 'SUicmzfqm5oqV72ggt9RjxngMup97exVovwcY7zs', '2018-12-05 02:57:37', '2018-12-05 02:57:37'),
(11, 42, 'YctkpPy7pMxrlz6RVMUJ08PsfKzcEeEJB5GLzZ7E', '2018-12-05 04:12:33', '2018-12-05 04:12:33'),
(12, 43, 'gIQN5iC1XHYDRmA4M7HXaKLck6wGjYgkTn6hHzCh', '2018-12-05 05:47:47', '2018-12-05 05:47:47'),
(13, 44, '0ZK7AnUWxVEtRGT6fVFTNUvwWMCke7or94Vooc4d', '2018-12-06 03:15:44', '2018-12-06 03:15:44'),
(14, 75, 'BkJKlR8EPh8nTD86awW16MwrB9o4HOFIY43joLJ4', '2018-12-10 05:20:08', '2018-12-10 05:20:08'),
(15, 76, '7pTQhMt4gkgzCCwviYUSFHAPjdtMimcTlG4Y16Vu', '2018-12-10 05:21:16', '2018-12-10 05:21:16'),
(16, 78, 'aqA7ytKASyCZEMxD7g2pWCBL2aApy9DhDbkimCrD', '2018-12-10 06:50:26', '2018-12-10 06:50:26'),
(17, 79, '0iaLCJZyPVBIKQUISOEM4O0r5Nop2wQ9OiYvXhLU', '2018-12-10 07:21:04', '2018-12-10 07:21:04'),
(18, 80, 'UP65DWduZvKt97qEoi3fSw2izOX39ECYhiAxtOKU', '2018-12-10 07:22:12', '2018-12-10 07:22:12'),
(19, 81, 'XcyOflLjryiT1xQ8Jbj2aRGWLjocFEsxWmuQAe8g', '2018-12-10 07:25:01', '2018-12-10 07:25:01'),
(20, 82, 'M0B2CbopY2WuSiI41sCMLm2fh5L6fvIS6m5rCvPn', '2018-12-10 07:36:58', '2018-12-10 07:36:58'),
(21, 83, 'LFAOYpDUJBP97ddJgmyTXD1vRJVZLryTHCR53uP7', '2018-12-10 07:40:34', '2018-12-10 07:40:34'),
(22, 84, 'qtrruFpuPHxRyAdK63kEa2nEN8YO1wAq3MTYJ5ni', '2018-12-10 07:40:57', '2018-12-10 07:40:57'),
(23, 85, '0hsY6AvdG649VLGTVt0nyv2qDO7d7by2Mm7wPzRt', '2018-12-10 07:41:09', '2018-12-10 07:41:09'),
(24, 86, 'BXzaJP5nk072bExZFFNDpuMw8a2ti1tMgihVUyMd', '2018-12-10 07:41:35', '2018-12-10 07:41:35'),
(25, 87, 'py0GOIag9AzSl9S6lUAx7tAerXtJLTXkN3TZnU7G', '2018-12-10 07:49:41', '2018-12-10 07:49:41'),
(26, 88, 'UVqbPrawMtDZ5KhMX5V3lWg1j55CimuqSt4tgfJ9', '2018-12-10 07:51:03', '2018-12-10 07:51:03'),
(27, 89, 'TucOHLK3QgJcNP9pykvd1FkIf1KPEe9eMYYqP5lU', '2018-12-10 07:53:43', '2018-12-10 07:53:43'),
(28, 90, 'qoojSlmRWqhGUAdTRQ13DkVYSl1Buh7MMddBz34A', '2018-12-10 07:54:58', '2018-12-10 07:54:58'),
(29, 91, 'XBKvoyJf0v1HIhPWptfqztzAQAmWoFVA4RiFt9Nn', '2018-12-10 07:56:45', '2018-12-10 07:56:45'),
(30, 92, 'o9lbhu3WONgJEPv9BHbo5MStDdhash6aEZWQcgLS', '2018-12-10 07:59:05', '2018-12-10 07:59:05'),
(31, 93, 'sY1M7gMOPRWY7V9ZoT158adsMw7kdcJK29ayG3Bf', '2018-12-10 08:04:19', '2018-12-10 08:04:19'),
(32, 94, 'XndL8oLGA2YLWFAshihhdmhRmfjyBFsFt0sVrKdS', '2018-12-10 08:06:28', '2018-12-10 08:06:28'),
(33, 95, 'dln5B6gVYlsD0G12vNniBU5FCR57hk1bFCTrDQHy', '2018-12-10 08:07:21', '2018-12-10 08:07:21'),
(34, 98, 'ZF6A5TgU3s1ISCjpTqn0VjtlF5zrZA7TjyiXFRc9', '2018-12-10 08:17:02', '2018-12-10 08:17:02'),
(35, 100, 'vVHvUWJNy6KusXQE04au7bi1d0h43pUM4gJWC2cH', '2018-12-10 08:20:05', '2018-12-10 08:20:05'),
(36, 101, 'GFdmGRtPS5b9sX9EoqbvBtIwHGlqy0isZPnPItzj', '2018-12-10 08:22:36', '2018-12-10 08:22:36'),
(37, 102, 'niOsk8WqXRp8RLRtdq12EQASX8LWPohEfWLPnCkX', '2018-12-10 08:26:44', '2018-12-10 08:26:44'),
(38, 103, 'KR6lRKBRSIJduWW6DsfFLM0KQcygTlWJVlciuuov', '2018-12-10 08:46:39', '2018-12-10 08:46:39'),
(39, 105, 'FnOdDDrv2Vl5KPx9rGqahjU94KF35ZtOQa0Qx6ay', '2018-12-10 08:49:02', '2018-12-10 08:49:02'),
(40, 106, 'BPrvCaoDnnIosxm9LnHqJew282WFiC9rTy4Gn9ze', '2018-12-10 08:52:11', '2018-12-10 08:52:11'),
(41, 107, 'qUi7hbSf4hPtUf5C4yyGOehvvPNrMXSjetrslGwu', '2018-12-10 08:55:11', '2018-12-10 08:55:11'),
(42, 108, 'dA34825SDzTC6D5n8vME3KXYM0dFsEV7Jtc0tOeP', '2018-12-10 08:57:22', '2018-12-10 08:57:22'),
(43, 109, 'MSpg90Wf3b0w0Q26yRSrE5QKUcW7jArbV3K6zPPx', '2018-12-10 09:03:31', '2018-12-10 09:03:31'),
(44, 110, 'UddxajbgMlA6SNloMOUQO4PURL2imcis1sMISvbW', '2018-12-10 09:05:21', '2018-12-10 09:05:21'),
(45, 111, 'r9Ny3GbRxPj7HYQgab1Z7NjVv0IqSF5Uyvy5Xv6t', '2018-12-10 09:07:15', '2018-12-10 09:07:15'),
(46, 112, 'duIjELDluwZKcn54nYOejh2ZA18Zgf6YMvXZEmk4', '2018-12-10 09:08:49', '2018-12-10 09:08:49'),
(47, 113, 'Df3CLp4qVjW95tKRW9X6r7n1Rvf5fe6YetIXL8KG', '2018-12-10 09:09:28', '2018-12-10 09:09:28'),
(48, 114, 'sC8BR6oMw6kRSxND09dcXfPbskqLkV4zOn1vLvrk', '2018-12-10 13:48:26', '2018-12-10 13:48:26'),
(49, 115, 'qoDVD1XmZuu3EzxiiHwkUjtF2bdIvCaK7qFaAoo2', '2018-12-11 04:06:50', '2018-12-11 04:06:50');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bid_comment`
--
ALTER TABLE `bid_comment`
  ADD CONSTRAINT `bid_comment_bid_id_foreign` FOREIGN KEY (`bid_id`) REFERENCES `project_bid` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `bid_comment_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `company_detail`
--
ALTER TABLE `company_detail`
  ADD CONSTRAINT `company_detail_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `project_bid`
--
ALTER TABLE `project_bid`
  ADD CONSTRAINT `project_bid_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `user_projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `project_bid_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`);

--
-- Constraints for table `user_document_table`
--
ALTER TABLE `user_document_table`
  ADD CONSTRAINT `user_document_table_document_type_id_foreign` FOREIGN KEY (`document_type_id`) REFERENCES `document_type_table` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_document_table_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_points`
--
ALTER TABLE `user_points`
  ADD CONSTRAINT `user_points_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_projects`
--
ALTER TABLE `user_projects`
  ADD CONSTRAINT `user_projects_project_type_id_foreign` FOREIGN KEY (`project_type_id`) REFERENCES `project_type` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_projects_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_skills`
--
ALTER TABLE `user_skills`
  ADD CONSTRAINT `user_skills_skill_id_foreign` FOREIGN KEY (`skill_id`) REFERENCES `skills` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_subscription`
--
ALTER TABLE `user_subscription`
  ADD CONSTRAINT `user_subscription_sub_id_foreign` FOREIGN KEY (`sub_id`) REFERENCES `subscription` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_subscription_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
SET FOREIGN_KEY_CHECKS=1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
