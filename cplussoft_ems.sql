-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 10, 2021 at 03:10 AM
-- Server version: 5.7.34-log-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cplussoft_ems`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_settings`
--

CREATE TABLE `account_settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `stripe_key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stripe_secret` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `account_settings`
--

INSERT INTO `account_settings` (`id`, `stripe_key`, `stripe_secret`, `created_at`, `updated_at`) VALUES
(2, 'pk_test_51IfzmYImuIxqY82OUbvT4Mr2ukJFkF8enSGaNHEqAm17CJWbUaRybpVfsIGQInS9DR19nI9llf6HLSgDzm7LXD4W003EYV8Gkc', 'sk_test_51IfzmYImuIxqY82OcAdozIG9cClYpBqqENZnlWbdnaem2ojcCiejLHji0DYfbGQzaG4cZ7eeTGPxAltgXwAkSmcH00n5P53aSh', '2021-05-10 15:36:06', '2021-05-10 15:36:06');

-- --------------------------------------------------------

--
-- Table structure for table `activity_candidates`
--

CREATE TABLE `activity_candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `activity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ip_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `activity_candidates`
--

INSERT INTO `activity_candidates` (`id`, `candidate`, `activity`, `ip_address`, `date`, `created_at`, `updated_at`) VALUES
(1, 'CAN_1-Cplussoft', 'logout', '39.33.253.200', '2021-05-06 09:50:46', '2021-05-06 16:50:46', '2021-05-06 16:50:46'),
(2, 'CAN_33-Bilawal', 'Login to EMS', '39.33.253.200', '2021-05-06 09:55:49', '2021-05-06 16:55:49', '2021-05-06 16:55:49'),
(3, 'CAN_33-Bilawal', 'Login to EMS', '206.84.142.101', '2021-05-06 14:18:32', '2021-05-06 21:18:32', '2021-05-06 21:18:32'),
(4, 'CAN_35-Bilawal', 'Login to EMS', '39.33.175.107', '2021-05-08 05:00:26', '2021-05-08 12:00:26', '2021-05-08 12:00:26'),
(5, 'CAN_1-Cplussoft', 'logout', '119.154.21.174', '2021-05-08 05:03:10', '2021-05-08 12:03:10', '2021-05-08 12:03:10'),
(6, 'CAN_35-Bilawal', 'Login to EMS', '119.154.21.174', '2021-05-08 05:06:19', '2021-05-08 12:06:19', '2021-05-08 12:06:19'),
(7, 'CAN_35-Bilawal', 'logout', '39.33.175.107', '2021-05-08 05:37:17', '2021-05-08 12:37:17', '2021-05-08 12:37:17'),
(8, 'CAN_35-Bilawal', 'Login to EMS', '39.33.175.107', '2021-05-08 05:37:35', '2021-05-08 12:37:35', '2021-05-08 12:37:35'),
(9, 'CAN_35-Bilawal', 'Login to EMS', '39.33.175.107', '2021-05-08 05:46:53', '2021-05-08 12:46:53', '2021-05-08 12:46:53'),
(10, 'CAN_35-Bilawal', 'logout', '39.33.175.107', '2021-05-08 05:50:41', '2021-05-08 12:50:41', '2021-05-08 12:50:41'),
(11, 'CAN_1-Cplussoft', 'logout', '39.33.175.107', '2021-05-08 05:51:09', '2021-05-08 12:51:09', '2021-05-08 12:51:09'),
(12, 'CAN_35-Bilawal', 'Login to EMS', '119.154.21.174', '2021-05-08 05:52:45', '2021-05-08 12:52:45', '2021-05-08 12:52:45'),
(13, 'CAN_1-Cplussoft', 'logout', '39.33.196.146', '2021-05-08 08:12:13', '2021-05-08 15:12:13', '2021-05-08 15:12:13'),
(14, 'CAN_35-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-08 08:12:38', '2021-05-08 15:12:38', '2021-05-08 15:12:38'),
(15, 'CAN_35-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-08 08:41:38', '2021-05-08 15:41:38', '2021-05-08 15:41:38'),
(16, 'CAN_35-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-08 08:47:30', '2021-05-08 15:47:30', '2021-05-08 15:47:30'),
(17, 'CAN_35-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-08 11:01:11', '2021-05-08 18:01:11', '2021-05-08 18:01:11'),
(18, 'CAN_1-Cplussoft', 'logout', '39.33.196.146', '2021-05-09 05:58:47', '2021-05-09 12:58:47', '2021-05-09 12:58:47'),
(19, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-09 06:07:14', '2021-05-09 13:07:14', '2021-05-09 13:07:14'),
(20, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-09 06:11:39', '2021-05-09 13:11:39', '2021-05-09 13:11:39'),
(21, 'CAN_40-Abaidullah', 'Login to EMS', '39.33.196.146', '2021-05-09 06:25:07', '2021-05-09 13:25:07', '2021-05-09 13:25:07'),
(22, 'CAN_41-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-09 11:13:21', '2021-05-09 18:13:21', '2021-05-09 18:13:21'),
(23, 'CAN_42-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-09 15:18:05', '2021-05-09 22:18:05', '2021-05-09 22:18:05'),
(24, 'CAN_42-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-09 15:27:16', '2021-05-09 22:27:16', '2021-05-09 22:27:16'),
(25, 'CAN_42-Bilawal', 'Login to EMS', '39.33.196.146', '2021-05-09 16:25:45', '2021-05-09 23:25:45', '2021-05-09 23:25:45'),
(26, 'CAN_42-Bilawal', 'Login to EMS', '182.191.178.222', '2021-05-10 03:38:54', '2021-05-10 10:38:54', '2021-05-10 10:38:54'),
(27, 'CAN_43-Abaidullah', 'Login to EMS', '182.191.178.222', '2021-05-10 09:09:14', '2021-05-10 16:09:14', '2021-05-10 16:09:14'),
(28, 'CAN_43-Abaidullah', 'Login to EMS', '119.158.56.156', '2021-05-11 03:35:12', '2021-05-11 10:35:12', '2021-05-11 10:35:12'),
(29, 'CAN_43-Abaidullah', 'Login to EMS', '39.33.180.241', '2021-05-18 05:41:18', '2021-05-18 12:41:18', '2021-05-18 12:41:18'),
(30, 'CAN_44-Irfan', 'Login to EMS', '39.33.239.89', '2021-05-18 08:18:56', '2021-05-18 15:18:56', '2021-05-18 15:18:56'),
(31, 'CAN_44-Irfan', 'logout', '39.33.239.89', '2021-05-18 09:00:09', '2021-05-18 16:00:09', '2021-05-18 16:00:09'),
(32, 'CAN_44-Irfan', 'Login to EMS', '39.33.239.89', '2021-05-18 09:00:16', '2021-05-18 16:00:16', '2021-05-18 16:00:16'),
(33, 'CAN_1-Cplussoft', 'logout', '39.33.239.89', '2021-05-18 13:13:14', '2021-05-18 20:13:14', '2021-05-18 20:13:14'),
(34, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-18 13:21:19', '2021-05-18 20:21:19', '2021-05-18 20:21:19'),
(35, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-18 13:28:20', '2021-05-18 20:28:20', '2021-05-18 20:28:20'),
(36, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-18 13:41:31', '2021-05-18 20:41:31', '2021-05-18 20:41:31'),
(37, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-18 13:41:35', '2021-05-18 20:41:35', '2021-05-18 20:41:35'),
(38, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-18 13:42:07', '2021-05-18 20:42:07', '2021-05-18 20:42:07'),
(39, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-18 13:42:55', '2021-05-18 20:42:55', '2021-05-18 20:42:55'),
(40, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-18 13:42:59', '2021-05-18 20:42:59', '2021-05-18 20:42:59'),
(41, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-18 13:49:51', '2021-05-18 20:49:51', '2021-05-18 20:49:51'),
(42, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-18 13:49:54', '2021-05-18 20:49:54', '2021-05-18 20:49:54'),
(43, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-18 14:10:26', '2021-05-18 21:10:26', '2021-05-18 21:10:26'),
(44, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-18 14:10:31', '2021-05-18 21:10:31', '2021-05-18 21:10:31'),
(45, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-18 14:10:40', '2021-05-18 21:10:40', '2021-05-18 21:10:40'),
(46, 'CAN_44-Irfan', 'Login to EMS', '39.33.133.41', '2021-05-19 03:35:39', '2021-05-19 10:35:39', '2021-05-19 10:35:39'),
(47, 'CAN_44-Irfan', 'Login to EMS', '39.33.133.41', '2021-05-19 04:39:01', '2021-05-19 11:39:01', '2021-05-19 11:39:01'),
(48, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-19 07:02:17', '2021-05-19 14:02:17', '2021-05-19 14:02:17'),
(49, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-19 07:10:09', '2021-05-19 14:10:09', '2021-05-19 14:10:09'),
(50, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-19 07:12:44', '2021-05-19 14:12:44', '2021-05-19 14:12:44'),
(51, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-19 07:13:16', '2021-05-19 14:13:16', '2021-05-19 14:13:16'),
(52, 'CAN_46-Asad', 'Login to EMS', '83.110.94.205', '2021-05-19 07:13:53', '2021-05-19 14:13:53', '2021-05-19 14:13:53'),
(53, 'CAN_46-Asad', 'logout', '83.110.94.205', '2021-05-19 07:15:57', '2021-05-19 14:15:57', '2021-05-19 14:15:57'),
(54, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-19 07:22:21', '2021-05-19 14:22:21', '2021-05-19 14:22:21'),
(55, 'CAN_46-Asad', 'Login to EMS', '83.110.94.205', '2021-05-19 07:22:47', '2021-05-19 14:22:47', '2021-05-19 14:22:47'),
(56, 'CAN_46-Asad', 'logout', '83.110.94.205', '2021-05-19 07:24:47', '2021-05-19 14:24:47', '2021-05-19 14:24:47'),
(57, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-19 07:29:57', '2021-05-19 14:29:57', '2021-05-19 14:29:57'),
(58, 'CAN_46-Asad', 'Login to EMS', '83.110.94.205', '2021-05-19 07:30:26', '2021-05-19 14:30:26', '2021-05-19 14:30:26'),
(59, 'CAN_46-Asad', 'logout', '83.110.94.205', '2021-05-19 07:51:02', '2021-05-19 14:51:02', '2021-05-19 14:51:02'),
(60, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-20 12:11:55', '2021-05-20 19:11:55', '2021-05-20 19:11:55'),
(61, 'CAN_46-Asad', 'Login to EMS', '83.110.94.205', '2021-05-20 12:11:59', '2021-05-20 19:11:59', '2021-05-20 19:11:59'),
(62, 'CAN_46-Asad', 'logout', '83.110.94.205', '2021-05-20 12:15:59', '2021-05-20 19:15:59', '2021-05-20 19:15:59'),
(63, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-20 12:16:19', '2021-05-20 19:16:19', '2021-05-20 19:16:19'),
(64, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-20 12:16:38', '2021-05-20 19:16:38', '2021-05-20 19:16:38'),
(65, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-20 12:17:24', '2021-05-20 19:17:24', '2021-05-20 19:17:24'),
(66, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-20 12:17:28', '2021-05-20 19:17:28', '2021-05-20 19:17:28'),
(67, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-20 13:55:46', '2021-05-20 20:55:46', '2021-05-20 20:55:46'),
(68, 'CAN_1-Cplussoft', 'logout', '39.33.160.65', '2021-05-22 06:39:35', '2021-05-22 13:39:35', '2021-05-22 13:39:35'),
(69, 'CAN_47-Malik', 'logout', '39.33.160.65', '2021-05-22 06:49:54', '2021-05-22 13:49:54', '2021-05-22 13:49:54'),
(70, 'CAN_44-Irfan', 'Login to EMS', '39.33.160.65', '2021-05-22 07:05:30', '2021-05-22 14:05:30', '2021-05-22 14:05:30'),
(71, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-22 10:43:57', '2021-05-22 17:43:57', '2021-05-22 17:43:57'),
(72, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-22 10:44:04', '2021-05-22 17:44:04', '2021-05-22 17:44:04'),
(73, 'CAN_48-test', 'logout', '111.119.177.28', '2021-05-22 11:01:45', '2021-05-22 18:01:45', '2021-05-22 18:01:45'),
(74, 'CAN_1-Cplussoft', 'logout', '111.119.177.28', '2021-05-22 11:03:05', '2021-05-22 18:03:05', '2021-05-22 18:03:05'),
(75, 'CAN_44-Irfan', 'Login to EMS', '111.119.177.28', '2021-05-22 11:03:39', '2021-05-22 18:03:39', '2021-05-22 18:03:39'),
(76, 'CAN_44-Irfan', 'logout', '111.119.177.28', '2021-05-22 11:05:42', '2021-05-22 18:05:42', '2021-05-22 18:05:42'),
(77, 'CAN_48-test', 'logout', '111.119.177.28', '2021-05-22 11:08:05', '2021-05-22 18:08:05', '2021-05-22 18:08:05'),
(78, 'CAN_45-Asad', 'Login to EMS', '83.110.94.205', '2021-05-22 13:02:35', '2021-05-22 20:02:35', '2021-05-22 20:02:35'),
(79, 'CAN_45-Asad', 'logout', '83.110.94.205', '2021-05-22 13:05:32', '2021-05-22 20:05:32', '2021-05-22 20:05:32'),
(80, 'CAN_1-Cplussoft', 'logout', '206.84.143.107', '2021-05-22 18:30:08', '2021-05-23 01:30:08', '2021-05-23 01:30:08'),
(81, 'CAN_44-Irfan', 'Login to EMS', '206.84.143.107', '2021-05-22 18:30:33', '2021-05-23 01:30:33', '2021-05-23 01:30:33'),
(82, 'CAN_44-Irfan', 'logout', '206.84.143.107', '2021-05-22 18:40:05', '2021-05-23 01:40:05', '2021-05-23 01:40:05'),
(83, 'CAN_1-Cplussoft', 'logout', '206.84.143.107', '2021-05-23 10:59:17', '2021-05-23 17:59:17', '2021-05-23 17:59:17'),
(84, 'CAN_1-Cplussoft', 'logout', '103.255.7.18', '2021-05-24 04:26:57', '2021-05-24 11:26:57', '2021-05-24 11:26:57'),
(85, 'CAN_44-Irfan', 'Login to EMS', '103.255.7.18', '2021-05-24 04:34:40', '2021-05-24 11:34:40', '2021-05-24 11:34:40'),
(86, 'CAN_47-Malik', 'logout', '103.255.7.18', '2021-05-24 04:35:46', '2021-05-24 11:35:46', '2021-05-24 11:35:46'),
(87, 'CAN_1-Cplussoft', 'logout', '103.255.7.18', '2021-05-24 04:46:49', '2021-05-24 11:46:49', '2021-05-24 11:46:49'),
(88, 'CAN_47-Malik', 'logout', '103.255.7.18', '2021-05-24 04:54:32', '2021-05-24 11:54:32', '2021-05-24 11:54:32'),
(89, 'CAN_1-Cplussoft', 'logout', '103.255.7.18', '2021-05-24 05:10:00', '2021-05-24 12:10:00', '2021-05-24 12:10:00'),
(90, 'CAN_47-Malik', 'logout', '103.255.7.18', '2021-05-24 05:17:39', '2021-05-24 12:17:39', '2021-05-24 12:17:39'),
(91, 'CAN_1-Cplussoft', 'logout', '103.255.7.18', '2021-05-24 05:19:50', '2021-05-24 12:19:50', '2021-05-24 12:19:50'),
(92, 'CAN_47-Malik', 'logout', '103.255.7.18', '2021-05-24 05:32:41', '2021-05-24 12:32:41', '2021-05-24 12:32:41'),
(93, 'CAN_1-Cplussoft', 'logout', '103.255.7.18', '2021-05-24 05:35:40', '2021-05-24 12:35:40', '2021-05-24 12:35:40'),
(94, 'CAN_47-Malik', 'logout', '39.33.156.105', '2021-05-24 11:33:54', '2021-05-24 18:33:54', '2021-05-24 18:33:54'),
(95, 'CAN_1-Cplussoft', 'logout', '39.33.156.105', '2021-05-24 11:51:27', '2021-05-24 18:51:27', '2021-05-24 18:51:27'),
(96, 'CAN_44-Irfan', 'Login to EMS', '39.33.156.105', '2021-05-24 11:51:49', '2021-05-24 18:51:49', '2021-05-24 18:51:49'),
(97, 'CAN_44-Irfan', 'logout', '39.33.156.105', '2021-05-24 11:52:51', '2021-05-24 18:52:51', '2021-05-24 18:52:51'),
(98, 'CAN_47-Malik', 'logout', '39.33.156.105', '2021-05-24 12:00:18', '2021-05-24 19:00:18', '2021-05-24 19:00:18'),
(99, 'CAN_47-Malik', 'logout', '39.33.156.105', '2021-05-24 12:11:23', '2021-05-24 19:11:23', '2021-05-24 19:11:23'),
(100, 'CAN_1-Cplussoft', 'logout', '39.33.156.105', '2021-05-24 12:13:20', '2021-05-24 19:13:20', '2021-05-24 19:13:20'),
(101, 'CAN_44-Irfan', 'Login to EMS', '39.33.156.105', '2021-05-24 12:13:53', '2021-05-24 19:13:53', '2021-05-24 19:13:53'),
(102, 'CAN_44-Irfan', 'logout', '39.33.156.105', '2021-05-24 12:14:39', '2021-05-24 19:14:39', '2021-05-24 19:14:39'),
(103, 'CAN_47-Malik', 'logout', '39.33.156.105', '2021-05-24 12:22:32', '2021-05-24 19:22:32', '2021-05-24 19:22:32'),
(104, 'CAN_1-Cplussoft', 'logout', '39.33.156.105', '2021-05-24 13:18:44', '2021-05-24 20:18:44', '2021-05-24 20:18:44'),
(105, 'CAN_1-Cplussoft', 'logout', '83.110.94.205', '2021-05-24 13:43:24', '2021-05-24 20:43:24', '2021-05-24 20:43:24'),
(106, 'CAN_1-Cplussoft', 'logout', '39.33.205.74', '2021-06-04 13:51:28', '2021-06-04 20:51:28', '2021-06-04 20:51:28'),
(107, 'CAN_1-Cplussoft', 'logout', '39.46.64.42', '2021-06-04 13:56:13', '2021-06-04 20:56:13', '2021-06-04 20:56:13'),
(108, 'CAN_1-Cplussoft', 'logout', '206.84.141.147', '2021-06-07 14:15:28', '2021-06-07 21:15:28', '2021-06-07 21:15:28');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_exams`
--

CREATE TABLE `candidate_exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED DEFAULT NULL,
  `exam_date` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `candidate_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_take_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Not Taken',
  `document_verification` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `exam_result_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_exams`
--

INSERT INTO `candidate_exams` (`id`, `candidate_id`, `exam_id`, `exam_date`, `marks`, `candidate_status`, `exam_take_status`, `document_verification`, `payment_status`, `comments`, `exam_result_status`, `created_at`, `updated_at`) VALUES
(9, 46, 11, '2021-05-18', '0', 'Approved', 'Taken', 'Yes', 'Paid', NULL, NULL, '2021-05-19 14:25:45', '2021-05-19 14:42:27'),
(10, 45, 11, '2021-05-20', NULL, 'Approved', 'Taken', 'Yes', 'Paid', NULL, NULL, '2021-05-20 19:17:11', '2021-05-20 19:37:11'),
(11, 44, 13, NULL, NULL, 'Approved', 'Not Taken', 'Yes', 'Paid', NULL, NULL, '2021-05-21 21:33:28', '2021-05-24 12:31:48'),
(12, 44, 11, '2021-05-22', NULL, 'Approved', 'Taken', 'Yes', 'Paid', 'He is fail', 'Fail', '2021-05-22 14:05:03', '2021-05-24 11:15:30'),
(13, 44, 11, NULL, NULL, 'Approved', 'Not Taken', 'Yes', NULL, NULL, NULL, '2021-06-07 21:13:15', '2021-06-07 21:13:15');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_information`
--

CREATE TABLE `candidate_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `auth_approval_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `prefix` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `middle_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nationality` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `place_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `request_date` date DEFAULT NULL,
  `passport_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone_no` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirates_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `generated_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_code` int(11) DEFAULT NULL,
  `emirates` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marital_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spoken_language` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `experience` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `emirates_attachs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passport_attachs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo_attachs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `qualification_attachs` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `comments` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidate_information`
--

INSERT INTO `candidate_information` (`id`, `candidate_id`, `auth_approval_id`, `prefix`, `username`, `fname`, `lname`, `middle_name`, `nationality`, `place_of_birth`, `dob`, `request_date`, `passport_no`, `email`, `mobile_no`, `phone_no`, `emirates_id`, `generated_id`, `gender`, `post_code`, `emirates`, `marital_status`, `spoken_language`, `experience`, `address`, `approval_id`, `emirates_attachs`, `passport_attachs`, `photo_attachs`, `qualification_attachs`, `status`, `comments`, `created_at`, `updated_at`) VALUES
(12, 44, NULL, 'Mr', 'irfan.elahi187@gmail.com', 'Irfan', 'Elahi', 'malik', 'Pakistan', 'Chakwal', '2021-05-20', '2021-05-24', '32466', 'irfan.elahi187@gmail.com', '34643656', '2454364365', '81221945fft%$^', '95129037567%$^', 'male', 45346, 'Abu Dhabi', 'Married', 'DA', NULL, NULL, NULL, '16213283921619581621.docx', '16213283921619581621.docx', '16213283921619581621.docx', '16213283921619581621.docx', 'Approved', NULL, '2021-05-18 15:16:55', '2021-06-07 21:13:51'),
(13, 45, 'ac%b^968746167%uy#', 'Mr', 'asad@falcon-works.com', 'Asad', 'Syed', NULL, 'Bangladesh', NULL, '1946-02-02', '2021-05-25', NULL, NULL, '0543417417', NULL, NULL, NULL, 'male', NULL, NULL, 'Married', NULL, NULL, NULL, NULL, '16213444542021 falcon works.jpg', '1621344454Popular-Design-Mashrabiya-Laser-Cut-Aluminum-Screen-Panel.jpg', '1621344454dddd.JPG', '1621344454719.jpg', 'Approved', NULL, '2021-05-18 20:19:08', '2021-05-24 18:50:21'),
(14, 46, NULL, 'select', 'training@falcon-works.com', 'Asad', 'Syed', NULL, 'Afganistan', 'Islamabad', '2008-01-01', '2021-05-30', NULL, NULL, NULL, NULL, '267965740fft%$^', '986008679567%$^', 'male', NULL, 'Abu Dhabi', 'Married', 'SQ', NULL, NULL, 'ac%b^851885827%uy#', '1621409055Popular-Design-Mashrabiya-Laser-Cut-Aluminum-Screen-Panel.jpg', '1621409055logo.png', '1621409055Falcon gas logo.JPG', '1621409055MOI Suppliers Application.pdf', 'Approved', NULL, '2021-05-19 14:11:26', '2021-05-24 11:59:43');

-- --------------------------------------------------------

--
-- Table structure for table `candidate_marks`
--

CREATE TABLE `candidate_marks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(25) NOT NULL,
  `marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `company_details`
--

CREATE TABLE `company_details` (
  `id` bigint(35) NOT NULL,
  `admin_id` bigint(23) NOT NULL,
  `organization_name` varchar(255) DEFAULT NULL,
  `time_zone` varchar(255) DEFAULT NULL,
  `daylight` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company_details`
--

INSERT INTO `company_details` (`id`, `admin_id`, `organization_name`, `time_zone`, `daylight`, `logo`, `created_at`, `updated_at`) VALUES
(1, 1, 'Falconworks', '(GMT-05:00) Bogota, Lima, Quito, Rio Branco', NULL, '1621315076logo.png', '2021-05-08 11:20:37', '2021-06-07 21:15:03');

-- --------------------------------------------------------

--
-- Table structure for table `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `duration` int(11) NOT NULL,
  `no_of_question` int(11) NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `conduct_time` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `authno` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `select_question_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show_result` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `result_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `send_result_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `record_audio_or_video` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `passing_marks` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price_of_exam` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exams`
--

INSERT INTO `exams` (`id`, `name`, `duration`, `no_of_question`, `status`, `conduct_time`, `authno`, `select_question_type`, `show_result`, `result_type`, `send_result_email`, `record_audio_or_video`, `passing_marks`, `price_of_exam`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Assistant Electrician', 60, 100, 'on', NULL, 'Assistant Electrician Standard', 'multilist', 'percentage', 'Pass/Fail', 'yes', 'yes', '70%', 'yes', '2021-05-19 12:27:29', '2021-05-22 12:36:31', NULL),
(12, 'Electrician', 60, 100, 'on', NULL, 'Electrician Standard', 'multilist', 'percentage', 'Pass/Fail', 'yes', 'yes', '80%', 'yes', '2021-05-19 12:29:45', '2021-05-19 12:29:45', NULL),
(13, 'Technical Supervisor', 60, 116, 'on', NULL, 'Technical Supervisor standard', 'multilist', 'percentage', 'Pass/Fail', 'yes', 'yes', '80%', 'yes', '2021-05-19 12:32:50', '2021-05-19 12:33:51', NULL),
(14, 'Assistant Engineer', 60, 100, 'on', NULL, 'Assistant Engineer Standard', 'multilist', 'percentage', 'Pass/Fail', 'yes', 'yes', '80%', 'yes', '2021-05-19 12:35:08', '2021-05-19 12:35:08', NULL),
(15, 'Engineer', 60, 100, 'on', NULL, 'Engineer Standard', 'multilist', 'percentage', 'Pass/Fail', 'yes', 'yes', '80%', 'yes', '2021-05-19 12:36:42', '2021-05-19 12:36:42', NULL),
(16, 'Senior Engineer', 60, 100, 'on', NULL, 'Senior Engineer Standard', 'multilist', 'percentage', 'Pass/Fail', 'yes', 'yes', '80%', 'yes', '2021-05-19 12:37:22', '2021-05-19 12:37:22', NULL),
(17, 'Exam A', 120, 100, 'on', NULL, 'a', 'multilist', 'percentage', 'Pass/Fail', 'yes', 'yes', '80%', 'yes', '2021-05-19 14:03:59', '2021-05-19 14:04:12', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news_updates`
--

CREATE TABLE `news_updates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading1` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripton` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripton2` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `descripton3` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `news_updates`
--

INSERT INTO `news_updates` (`id`, `image`, `heading`, `heading1`, `title`, `descripton`, `title2`, `descripton2`, `title3`, `descripton3`, `created_at`, `updated_at`) VALUES
(1, 'storage/newsupdate/image/1625310852blog1.jpg', 'Welcome to conexi company', 'News & Update', NULL, NULL, NULL, NULL, 'We ensure you that your journey is comfortable and safe', NULL, '2021-07-03 06:14:12', '2021-07-03 06:14:12');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `all_active` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_notification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `subject`, `description`, `all_active`, `email_notification`, `created_at`, `updated_at`) VALUES
(1, 'retreer', 'eryytu', 'All', 'on', '2021-05-10 13:20:45', '2021-05-10 13:20:45'),
(2, 'Test', 'Test', 'Selected', 'on', '2021-05-18 15:29:29', '2021-05-18 15:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `notification_attachments`
--

CREATE TABLE `notification_attachments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notification_id` bigint(20) UNSIGNED NOT NULL,
  `attachment` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notification_attachments`
--

INSERT INTO `notification_attachments` (`id`, `notification_id`, `attachment`, `created_at`, `updated_at`) VALUES
(1, 1, '/home/wdnglbxe1zoj/public_html/projects/EMS/storage/app/public/1620627645logo.png', '2021-05-10 13:20:45', '2021-05-10 13:20:45'),
(2, 2, '/home/wdnglbxe1zoj/public_html/projects/EMS/storage/app/public/1621326569irfan_elahi.docx', '2021-05-18 15:29:29', '2021-05-18 15:29:29');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `auth_approval_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_brand` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `exp_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `funding` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `candidate_id`, `exam_id`, `auth_approval_id`, `payment_id`, `amount`, `type`, `card_brand`, `exp_date`, `funding`, `payment_method`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
(30, 46, 11, NULL, 'ch_1IsjviImuIxqY82OwOlVyjjs', '100000', 'card', 'visa', '1-2023', 'credit', 'card_1IsjviImuIxqY82O4XqeaNuC', '2021-05-19', '2021-06-18', '2021-05-19 14:35:12', '2021-05-19 14:35:12'),
(31, 45, 11, 'ac%b^968746167%uy#', 'ch_1ItApNImuIxqY82Ot1TfRSyp', '10000', 'card', 'visa', '1-2023', 'credit', 'card_1ItApNImuIxqY82ObIfMK1Pk', '2021-05-20', '2021-06-19', '2021-05-20 19:18:31', '2021-05-20 19:18:31'),
(32, 44, 11, NULL, 'ch_1ItouHImuIxqY82OvBI3ivV1', '1200', 'card', 'visa', '1-2023', 'credit', 'card_1ItouHImuIxqY82O2FYbCykR', '2021-05-22', '2021-06-21', '2021-05-22 14:06:05', '2021-05-22 14:06:05'),
(33, 44, 13, NULL, 'ch_1IuWOBImuIxqY82Oe7NdW1AO', '23400', 'card', 'visa', '1-2023', 'credit', 'card_1IuWOAImuIxqY82OC8NvHjFn', '2021-05-24', '2021-06-23', '2021-05-24 12:31:48', '2021-05-24 12:31:48');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `explanation` text COLLATE utf8mb4_unicode_ci,
  `publish_draft` tinyint(1) DEFAULT NULL,
  `question_marks` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `description`, `exam_id`, `status`, `explanation`, `publish_draft`, `question_marks`, `created_at`, `updated_at`) VALUES
(54, '<p>The nominal voltage in UAE at LV shall be<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:40:35', '2021-05-19 12:40:35'),
(55, '<p>The nominal frequency shall be</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:42:45', '2021-05-19 12:42:45'),
(56, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; supplied and returning back to the same Protective Device</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:44:15', '2021-05-19 12:44:15'),
(57, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp;&nbsp;supplied and returning back to the same Protective Device</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:44:40', '2021-05-19 12:44:40'),
(58, '<p>A Circuit which is wired in a &lsquo;branch&rsquo; configuration, emanating from a Protective Device,<br />\r\nto the area to be supplied<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:45:35', '2021-05-19 12:45:35'),
(59, '<p>A Distribution Board which typically supplies Final Circuits only</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:46:34', '2021-05-19 12:46:34'),
(60, '<p>Between inspection and pulling points, Conduit shall be installed with a maximum of</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:48:58', '2021-05-19 12:48:58'),
(61, '<p>For fixed wiring in an Electrical Installation, the phase colours are included of&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:50:36', '2021-05-19 12:50:36'),
(62, '<p>The Items where connections must be made to the Circuit Earth Conductor:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:51:31', '2021-05-19 12:51:31'),
(63, '<p>The colours of phase and neutral inflexible cables for single-phase Appliances are in &nbsp;<br />\r\nrespectively:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:52:32', '2021-05-19 12:52:32'),
(64, '<p>The maximum number of 4mm&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter<br />\r\n25mm is:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:53:07', '2021-05-19 12:53:07'),
(65, '<p>The minimum distance of the back &amp; side clearance of LV switchboards must be:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:54:58', '2021-05-19 12:54:58'),
(66, '<p>Buried plastic conduits in walls or ceilings must be in minimum depth of&nbsp;<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:55:43', '2021-05-19 12:55:43'),
(67, '<p>During Electrical works and installation, which activity shall be kept and maintained:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:57:14', '2021-05-19 12:57:14'),
(68, '<p>&nbsp;During Electrical works and installation, which activity shall be strictly prohibited</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:58:03', '2021-05-19 12:58:03'),
(69, '<p>The minimum mounting height for accessories and socket-outlets above a worktop is:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:58:53', '2021-05-19 12:58:53'),
(70, '<p>The typical layout of internally installed Final Distribution Boards (FDB) shall include:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 12:59:59', '2021-05-19 12:59:59'),
(71, '<p>Items where connections must be made to the Circuit Earth Conductor&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:01:14', '2021-05-19 13:01:14'),
(72, '<p>For a radial circuit, the wire size to lighting appliances (heavy load) may be:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:03:35', '2021-05-19 13:03:35'),
(73, '<p>The maximum number of 2.5mm&nbsp;2&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter&nbsp;<br />\r\n20mm is:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:06:35', '2021-05-19 13:06:35'),
(74, '<p>For a ring circuit, the number and size of wires to socket outlets may be:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:07:26', '2021-05-19 13:07:26'),
(75, '<p>What is your action if you find this label on the door of a room you have a task in:</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621404589q23.png\" style=\"height:89px; width:205px\" /></p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:10:53', '2021-05-19 13:10:53'),
(76, '<p>If you get injured at the site while doing your works, you will:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:11:38', '2021-05-19 13:11:38'),
(77, '<p>PPE is usually consisting of:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:12:17', '2021-05-19 13:12:17'),
(78, '<p>The best thing for handling the excess LV cables and cut pieces of wire is:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:13:14', '2021-05-19 13:13:14'),
(79, '<p>To check the existence of live power in a socket use:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:13:50', '2021-05-19 13:13:50'),
(80, '<p>For the light appliances, the cable length dropped for required connection shall be:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:14:29', '2021-05-19 13:14:29'),
(81, '<p>The tool which is used for cutting and fabricating the cable tray and gi trunking :<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:16:09', '2021-05-19 13:16:09'),
(82, '<p>Safety procedures shall be taken while working in an elevated area using a 7 steps ladder<br />\r\nis:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:17:03', '2021-05-19 13:17:03'),
(83, '<p>If you a task that includes hot works such as cutting and grinding GI materials, you<br />\r\nshould:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:17:56', '2021-05-19 13:17:56'),
(84, '<p>While fixing wiring accessories including the switch and sockets, you should complete<br />\r\nthe job with:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:18:57', '2021-05-19 13:18:57'),
(85, '<p>During the process of laying a vertical cable on a cable tray, cables shall be:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:19:52', '2021-05-19 13:19:52'),
(86, '<p>&nbsp;If your task is completed before the scheduled time that is given, you should:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:20:53', '2021-05-19 13:20:53'),
(87, '<p>You need to fix the light using scaffolding that had a red tag indicating its unsafe you<br />\r\nwill:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:23:03', '2021-05-19 13:23:03'),
(88, '<p>What you will do if you found damaged insulation of temporarily laid cables feeding a<br />\r\nwelding machine:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:24:10', '2021-05-19 13:24:10'),
(89, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405611q39.png\" style=\"height:45px; width:74px\" />, it refers to:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:26:59', '2021-05-19 13:26:59'),
(90, '<p>if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405683q40.png\" style=\"height:85px; width:86px\" />, it refers to:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:28:42', '2021-05-19 13:28:42'),
(91, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405774q41.png\" style=\"height:54px; width:57px\" />, it refers to:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:30:17', '2021-05-19 13:30:17'),
(92, '<p>If you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405868q42.png\" style=\"height:63px; width:45px\" />, &nbsp;it refers to:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:31:47', '2021-05-19 13:31:47'),
(93, '<p>Tools and equipment that may be required for fixing a cable tray or GI trunking are:&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:38:15', '2021-05-19 13:38:15'),
(94, '<p>In the case of having worked in elevated platforms such as a man lift, you should consider<br />\r\nwearing:</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:39:05', '2021-05-19 13:39:05'),
(95, '<p>&ldquo;PWR&rdquo; is an abbreviation which contained in the load schedule and refers to:&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:39:41', '2021-05-19 13:39:41'),
(96, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:40:32', '2021-05-19 13:40:32'),
(97, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:41:18', '2021-05-19 13:41:18'),
(98, '<p>&ldquo;A/c&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:42:02', '2021-05-19 13:42:02'),
(99, '<p>The below picture indicates improper work done by an unskilled Electrician because:&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621406644q48.PNG\" style=\"height:153px; width:382px\" /></p>', 11, 0, NULL, NULL, 0, '2021-05-19 13:44:16', '2021-05-19 13:44:16'),
(100, '<p>The below element which is typically used with the connection of the light appliances is :<br />\r\n<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621408041q49.PNG\" style=\"height:128px; width:168px\" /></p>', 11, 0, NULL, NULL, 0, '2021-05-19 14:08:02', '2021-05-19 14:08:02');

-- --------------------------------------------------------

--
-- Table structure for table `question_answers`
--

CREATE TABLE `question_answers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `exam_id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `right_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wrong_answer` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `attempted` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_answers`
--

INSERT INTO `question_answers` (`id`, `candidate_id`, `exam_id`, `question`, `answer`, `right_answer`, `wrong_answer`, `attempted`, `created_at`, `updated_at`) VALUES
(11, 46, 11, '<p>The nominal voltage in UAE at LV shall be<br />\r\n&nbsp;</p>', '<p>230 V single-phase or 400 V three-phase.</p>', '<p>230 V single-phase or 400 V three-phase.</p>', NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:27'),
(12, 46, 11, '<p>The nominal frequency shall be</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(13, 46, 11, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; supplied and returning back to the same Protective Device</p>', '<p>Radial Circuit</p>', '<p>Radial Circuit</p>', NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:27'),
(14, 46, 11, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp;&nbsp;supplied and returning back to the same Protective Device</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(15, 46, 11, '<p>A Circuit which is wired in a &lsquo;branch&rsquo; configuration, emanating from a Protective Device,<br />\r\nto the area to be supplied<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(16, 46, 11, '<p>A Distribution Board which typically supplies Final Circuits only</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(17, 46, 11, '<p>Between inspection and pulling points, Conduit shall be installed with a maximum of</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(18, 46, 11, '<p>For fixed wiring in an Electrical Installation, the phase colours are included of&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(19, 46, 11, '<p>The Items where connections must be made to the Circuit Earth Conductor:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(20, 46, 11, '<p>The colours of phase and neutral inflexible cables for single-phase Appliances are in &nbsp;<br />\r\nrespectively:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(21, 46, 11, '<p>The maximum number of 4mm&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter<br />\r\n25mm is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(22, 46, 11, '<p>The minimum distance of the back &amp; side clearance of LV switchboards must be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(23, 46, 11, '<p>Buried plastic conduits in walls or ceilings must be in minimum depth of&nbsp;<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(24, 46, 11, '<p>During Electrical works and installation, which activity shall be kept and maintained:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(25, 46, 11, '<p>&nbsp;During Electrical works and installation, which activity shall be strictly prohibited</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(26, 46, 11, '<p>The minimum mounting height for accessories and socket-outlets above a worktop is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(27, 46, 11, '<p>The typical layout of internally installed Final Distribution Boards (FDB) shall include:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(28, 46, 11, '<p>Items where connections must be made to the Circuit Earth Conductor&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(29, 46, 11, '<p>For a radial circuit, the wire size to lighting appliances (heavy load) may be:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(30, 46, 11, '<p>The maximum number of 2.5mm&nbsp;2&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter&nbsp;<br />\r\n20mm is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(31, 46, 11, '<p>For a ring circuit, the number and size of wires to socket outlets may be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(32, 46, 11, '<p>What is your action if you find this label on the door of a room you have a task in:</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621404589q23.png\" style=\"height:89px; width:205px\" /></p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(33, 46, 11, '<p>If you get injured at the site while doing your works, you will:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(34, 46, 11, '<p>PPE is usually consisting of:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(35, 46, 11, '<p>The best thing for handling the excess LV cables and cut pieces of wire is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(36, 46, 11, '<p>To check the existence of live power in a socket use:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(37, 46, 11, '<p>For the light appliances, the cable length dropped for required connection shall be:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(38, 46, 11, '<p>The tool which is used for cutting and fabricating the cable tray and gi trunking :<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(39, 46, 11, '<p>Safety procedures shall be taken while working in an elevated area using a 7 steps ladder<br />\r\nis:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(40, 46, 11, '<p>If you a task that includes hot works such as cutting and grinding GI materials, you<br />\r\nshould:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(41, 46, 11, '<p>While fixing wiring accessories including the switch and sockets, you should complete<br />\r\nthe job with:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(42, 46, 11, '<p>During the process of laying a vertical cable on a cable tray, cables shall be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(43, 46, 11, '<p>&nbsp;If your task is completed before the scheduled time that is given, you should:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(44, 46, 11, '<p>You need to fix the light using scaffolding that had a red tag indicating its unsafe you<br />\r\nwill:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(45, 46, 11, '<p>What you will do if you found damaged insulation of temporarily laid cables feeding a<br />\r\nwelding machine:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(46, 46, 11, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405611q39.png\" style=\"height:45px; width:74px\" />, it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(47, 46, 11, '<p>if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405683q40.png\" style=\"height:85px; width:86px\" />, it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(48, 46, 11, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405774q41.png\" style=\"height:54px; width:57px\" />, it refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(49, 46, 11, '<p>If you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405868q42.png\" style=\"height:63px; width:45px\" />, &nbsp;it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(50, 46, 11, '<p>Tools and equipment that may be required for fixing a cable tray or GI trunking are:&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(51, 46, 11, '<p>In the case of having worked in elevated platforms such as a man lift, you should consider<br />\r\nwearing:</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(52, 46, 11, '<p>&ldquo;PWR&rdquo; is an abbreviation which contained in the load schedule and refers to:&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(53, 46, 11, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(54, 46, 11, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(55, 46, 11, '<p>&ldquo;A/c&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:15'),
(56, 46, 11, '<p>The below picture indicates improper work done by an unskilled Electrician because:&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621406644q48.PNG\" style=\"height:153px; width:382px\" /></p>', '<p>Exposed Unsheathed cable at termination points<br />\r\n&nbsp;</p>', '<p>Exposed Unsheathed cable at termination points<br />\r\n&nbsp;</p>', NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:27'),
(57, 46, 11, '<p>The below element which is typically used with the connection of the light appliances is :<br />\r\n<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621408041q49.PNG\" style=\"height:128px; width:168px\" /></p>', '<p>Ceiling Rose</p>', '<p>Ceiling Rose</p>', NULL, 'Yes', '2021-05-19 14:42:15', '2021-05-19 14:42:27'),
(58, 45, 11, '<p>The nominal voltage in UAE at LV shall be<br />\r\n&nbsp;</p>', '<p>120V single-Phase or 240 V three-Phase.</p>', NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(59, 45, 11, '<p>The nominal frequency shall be</p>', '<p>70 Hz</p>', NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(60, 45, 11, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; supplied and returning back to the same Protective Device</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(61, 45, 11, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp;&nbsp;supplied and returning back to the same Protective Device</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(62, 45, 11, '<p>A Circuit which is wired in a &lsquo;branch&rsquo; configuration, emanating from a Protective Device,<br />\r\nto the area to be supplied<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(63, 45, 11, '<p>A Distribution Board which typically supplies Final Circuits only</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(64, 45, 11, '<p>Between inspection and pulling points, Conduit shall be installed with a maximum of</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(65, 45, 11, '<p>For fixed wiring in an Electrical Installation, the phase colours are included of&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(66, 45, 11, '<p>The Items where connections must be made to the Circuit Earth Conductor:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(67, 45, 11, '<p>The colours of phase and neutral inflexible cables for single-phase Appliances are in &nbsp;<br />\r\nrespectively:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(68, 45, 11, '<p>The maximum number of 4mm&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter<br />\r\n25mm is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(69, 45, 11, '<p>The minimum distance of the back &amp; side clearance of LV switchboards must be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(70, 45, 11, '<p>Buried plastic conduits in walls or ceilings must be in minimum depth of&nbsp;<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(71, 45, 11, '<p>During Electrical works and installation, which activity shall be kept and maintained:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(72, 45, 11, '<p>&nbsp;During Electrical works and installation, which activity shall be strictly prohibited</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(73, 45, 11, '<p>The minimum mounting height for accessories and socket-outlets above a worktop is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(74, 45, 11, '<p>The typical layout of internally installed Final Distribution Boards (FDB) shall include:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(75, 45, 11, '<p>Items where connections must be made to the Circuit Earth Conductor&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(76, 45, 11, '<p>For a radial circuit, the wire size to lighting appliances (heavy load) may be:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(77, 45, 11, '<p>The maximum number of 2.5mm&nbsp;2&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter&nbsp;<br />\r\n20mm is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(78, 45, 11, '<p>For a ring circuit, the number and size of wires to socket outlets may be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(79, 45, 11, '<p>What is your action if you find this label on the door of a room you have a task in:</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621404589q23.png\" style=\"height:89px; width:205px\" /></p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(80, 45, 11, '<p>If you get injured at the site while doing your works, you will:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(81, 45, 11, '<p>PPE is usually consisting of:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(82, 45, 11, '<p>The best thing for handling the excess LV cables and cut pieces of wire is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(83, 45, 11, '<p>To check the existence of live power in a socket use:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(84, 45, 11, '<p>For the light appliances, the cable length dropped for required connection shall be:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(85, 45, 11, '<p>The tool which is used for cutting and fabricating the cable tray and gi trunking :<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(86, 45, 11, '<p>Safety procedures shall be taken while working in an elevated area using a 7 steps ladder<br />\r\nis:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(87, 45, 11, '<p>If you a task that includes hot works such as cutting and grinding GI materials, you<br />\r\nshould:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(88, 45, 11, '<p>While fixing wiring accessories including the switch and sockets, you should complete<br />\r\nthe job with:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(89, 45, 11, '<p>During the process of laying a vertical cable on a cable tray, cables shall be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(90, 45, 11, '<p>&nbsp;If your task is completed before the scheduled time that is given, you should:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(91, 45, 11, '<p>You need to fix the light using scaffolding that had a red tag indicating its unsafe you<br />\r\nwill:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(92, 45, 11, '<p>What you will do if you found damaged insulation of temporarily laid cables feeding a<br />\r\nwelding machine:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(93, 45, 11, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405611q39.png\" style=\"height:45px; width:74px\" />, it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(94, 45, 11, '<p>if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405683q40.png\" style=\"height:85px; width:86px\" />, it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(95, 45, 11, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405774q41.png\" style=\"height:54px; width:57px\" />, it refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(96, 45, 11, '<p>If you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405868q42.png\" style=\"height:63px; width:45px\" />, &nbsp;it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(97, 45, 11, '<p>Tools and equipment that may be required for fixing a cable tray or GI trunking are:&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(98, 45, 11, '<p>In the case of having worked in elevated platforms such as a man lift, you should consider<br />\r\nwearing:</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(99, 45, 11, '<p>&ldquo;PWR&rdquo; is an abbreviation which contained in the load schedule and refers to:&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(100, 45, 11, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(101, 45, 11, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(102, 45, 11, '<p>&ldquo;A/c&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(103, 45, 11, '<p>The below picture indicates improper work done by an unskilled Electrician because:&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621406644q48.PNG\" style=\"height:153px; width:382px\" /></p>', NULL, NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(104, 45, 11, '<p>The below element which is typically used with the connection of the light appliances is :<br />\r\n<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621408041q49.PNG\" style=\"height:128px; width:168px\" /></p>', '<p>Industrial Socket&nbsp;</p>', NULL, NULL, 'Yes', '2021-05-20 19:37:11', '2021-05-20 19:37:11'),
(105, 44, 11, '<p>The nominal voltage in UAE at LV shall be<br />\r\n&nbsp;</p>', '<p>230 V single-phase or 400 V three-phase.</p>', NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(106, 44, 11, '<p>The nominal frequency shall be</p>', '<p>60 Hz</p>', NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(107, 44, 11, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; supplied and returning back to the same Protective Device</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(108, 44, 11, '<p>A Circuit which is wired from a single Protective Device, being run through an area to be<br />\r\n&nbsp; &nbsp;&nbsp;supplied and returning back to the same Protective Device</p>', '<p>Final Circuit</p>', NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(109, 44, 11, '<p>A Circuit which is wired in a &lsquo;branch&rsquo; configuration, emanating from a Protective Device,<br />\r\nto the area to be supplied<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(110, 44, 11, '<p>A Distribution Board which typically supplies Final Circuits only</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(111, 44, 11, '<p>Between inspection and pulling points, Conduit shall be installed with a maximum of</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(112, 44, 11, '<p>For fixed wiring in an Electrical Installation, the phase colours are included of&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(113, 44, 11, '<p>The Items where connections must be made to the Circuit Earth Conductor:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(114, 44, 11, '<p>The colours of phase and neutral inflexible cables for single-phase Appliances are in &nbsp;<br />\r\nrespectively:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(115, 44, 11, '<p>The maximum number of 4mm&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter<br />\r\n25mm is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(116, 44, 11, '<p>The minimum distance of the back &amp; side clearance of LV switchboards must be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(117, 44, 11, '<p>Buried plastic conduits in walls or ceilings must be in minimum depth of&nbsp;<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(118, 44, 11, '<p>During Electrical works and installation, which activity shall be kept and maintained:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(119, 44, 11, '<p>&nbsp;During Electrical works and installation, which activity shall be strictly prohibited</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(120, 44, 11, '<p>The minimum mounting height for accessories and socket-outlets above a worktop is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(121, 44, 11, '<p>The typical layout of internally installed Final Distribution Boards (FDB) shall include:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(122, 44, 11, '<p>Items where connections must be made to the Circuit Earth Conductor&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(123, 44, 11, '<p>For a radial circuit, the wire size to lighting appliances (heavy load) may be:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(124, 44, 11, '<p>The maximum number of 2.5mm&nbsp;2&nbsp;&nbsp;conductors that can be pulled in a conduit of diameter&nbsp;<br />\r\n20mm is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(125, 44, 11, '<p>For a ring circuit, the number and size of wires to socket outlets may be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(126, 44, 11, '<p>What is your action if you find this label on the door of a room you have a task in:</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621404589q23.png\" style=\"height:89px; width:205px\" /></p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(127, 44, 11, '<p>If you get injured at the site while doing your works, you will:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(128, 44, 11, '<p>PPE is usually consisting of:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(129, 44, 11, '<p>The best thing for handling the excess LV cables and cut pieces of wire is:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(130, 44, 11, '<p>To check the existence of live power in a socket use:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(131, 44, 11, '<p>For the light appliances, the cable length dropped for required connection shall be:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(132, 44, 11, '<p>The tool which is used for cutting and fabricating the cable tray and gi trunking :<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(133, 44, 11, '<p>Safety procedures shall be taken while working in an elevated area using a 7 steps ladder<br />\r\nis:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(134, 44, 11, '<p>If you a task that includes hot works such as cutting and grinding GI materials, you<br />\r\nshould:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(135, 44, 11, '<p>While fixing wiring accessories including the switch and sockets, you should complete<br />\r\nthe job with:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(136, 44, 11, '<p>During the process of laying a vertical cable on a cable tray, cables shall be:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(137, 44, 11, '<p>&nbsp;If your task is completed before the scheduled time that is given, you should:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(138, 44, 11, '<p>You need to fix the light using scaffolding that had a red tag indicating its unsafe you<br />\r\nwill:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(139, 44, 11, '<p>What you will do if you found damaged insulation of temporarily laid cables feeding a<br />\r\nwelding machine:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(140, 44, 11, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405611q39.png\" style=\"height:45px; width:74px\" />, it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(141, 44, 11, '<p>if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405683q40.png\" style=\"height:85px; width:86px\" />, it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(142, 44, 11, '<p>&nbsp;if you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405774q41.png\" style=\"height:54px; width:57px\" />, it refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(143, 44, 11, '<p>If you saw this symbol<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621405868q42.png\" style=\"height:63px; width:45px\" />, &nbsp;it refers to:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(144, 44, 11, '<p>Tools and equipment that may be required for fixing a cable tray or GI trunking are:&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(145, 44, 11, '<p>In the case of having worked in elevated platforms such as a man lift, you should consider<br />\r\nwearing:</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(146, 44, 11, '<p>&ldquo;PWR&rdquo; is an abbreviation which contained in the load schedule and refers to:&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(147, 44, 11, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(148, 44, 11, '<p>&ldquo;LTG&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(149, 44, 11, '<p>&ldquo;A/c&rdquo; is an abbreviation contained in the load schedule and refers to:<br />\r\n&nbsp;</p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(150, 44, 11, '<p>The below picture indicates improper work done by an unskilled Electrician because:&nbsp;</p>\r\n\r\n<p><img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621406644q48.PNG\" style=\"height:153px; width:382px\" /></p>', NULL, NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10'),
(151, 44, 11, '<p>The below element which is typically used with the connection of the light appliances is :<br />\r\n<img alt=\"\" src=\"http://cplussoft.com/projects/EMS/public/storage/1621408041q49.PNG\" style=\"height:128px; width:168px\" /></p>', '<p>Intermediate Switch</p>', NULL, NULL, 'Yes', '2021-05-22 18:05:10', '2021-05-22 18:05:10');

-- --------------------------------------------------------

--
-- Table structure for table `question_options`
--

CREATE TABLE `question_options` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` bigint(20) UNSIGNED NOT NULL,
  `correct_answer` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `option` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_options`
--

INSERT INTO `question_options` (`id`, `question_id`, `correct_answer`, `created_at`, `updated_at`, `option`) VALUES
(153, 54, '<p>230 V single-phase or 400 V three-phase.</p>', NULL, '2021-05-19 12:40:35', '<p>230 V single-phase or 400 V three-phase.</p>'),
(154, 54, '0', NULL, NULL, '<p>120V single-Phase or 240 V three-Phase.</p>'),
(155, 54, '0', NULL, NULL, '<p>180 V single-Phase or 220 V three-Phase.<br />\r\n&nbsp;</p>'),
(156, 54, '0', NULL, NULL, '<p>440 V single-Phase or 630 V three-Phase.</p>'),
(157, 54, '0', NULL, NULL, NULL),
(158, 55, '<p>50 Hz</p>', NULL, '2021-05-19 12:42:45', '<p>40 Hz</p>'),
(159, 55, '0', NULL, NULL, '<p>60 Hz</p>'),
(160, 55, '0', NULL, NULL, '<p>50 Hz</p>'),
(161, 55, '0', NULL, NULL, '<p>70 Hz</p>'),
(162, 55, '0', NULL, NULL, NULL),
(163, 56, '<p>Ring &nbsp;Circuit</p>', NULL, '2021-05-19 12:44:15', '<p>Radial Circuit</p>'),
(164, 56, '0', NULL, NULL, '<p>Ring &nbsp;Circuit</p>'),
(165, 56, '0', NULL, NULL, '<p>Final Circuit</p>'),
(166, 56, '0', NULL, NULL, '<p>Connection Poin</p>'),
(167, 56, '0', NULL, NULL, NULL),
(168, 57, '<p>Ring &nbsp;Circuit</p>', NULL, '2021-05-19 12:44:40', '<p>Radial Circuit</p>'),
(169, 57, '0', NULL, NULL, '<p>Ring &nbsp;Circuit</p>'),
(170, 57, '0', NULL, NULL, '<p>Final Circuit</p>'),
(171, 57, '0', NULL, NULL, '<p>Connection Point</p>'),
(172, 57, '0', NULL, NULL, NULL),
(173, 58, '<p>Radial Circuit</p>', NULL, '2021-05-19 12:45:35', '<p>Radial Circuit</p>'),
(174, 58, '0', NULL, NULL, '<p>Ring Circuit&nbsp;</p>'),
(175, 58, '0', NULL, NULL, '<p>Final Circuit</p>'),
(176, 58, '0', NULL, NULL, '<p>Connection Point</p>'),
(177, 58, '0', NULL, NULL, NULL),
(178, 59, '<p>FDB</p>', NULL, '2021-05-19 12:46:34', '<p>LV Panel</p>'),
(179, 59, '0', NULL, NULL, '<p>MDB</p>'),
(180, 59, '0', NULL, NULL, '<p>SMDB</p>'),
(181, 59, '0', NULL, NULL, '<p>FDB</p>'),
(182, 59, '0', NULL, NULL, NULL),
(183, 60, '<p>Two 90&ordm; bends or three 120&ordm; bends</p>', NULL, '2021-05-19 12:48:58', '<p>Four 120&ordm; bends or six 120&ordm; bends</p>'),
(184, 60, '0', NULL, NULL, '<p>Three180&ordm; bends or five 360&ordm; bends</p>'),
(185, 60, '0', NULL, NULL, '<p>Two 90&ordm; bends or three 120&ordm; bends</p>'),
(186, 60, '0', NULL, NULL, '<p>No any bends are allowed</p>'),
(187, 60, '0', NULL, NULL, NULL),
(188, 61, '<p>Red, yellow and blue, whilst neutral as black</p>', NULL, '2021-05-19 12:50:36', '<p>Grey, white and yellow, whilst neutral as black</p>'),
(189, 61, '0', NULL, NULL, '<p>&nbsp;purple, pink and green, whilst neutral as yellow</p>'),
(190, 61, '0', NULL, NULL, '<p>Orange, brown and green, whilst neutral as blue</p>'),
(191, 61, '0', NULL, NULL, '<p>Red, yellow and blue, whilst neutral as black</p>'),
(192, 61, '0', NULL, NULL, NULL),
(193, 62, '<p>Metal Trucking, Cable Trays<br />\r\n&nbsp;</p>', NULL, '2021-05-19 12:51:31', '<p>Cupboards and offices</p>'),
(194, 62, '0', NULL, NULL, '<p>Metal Trucking, Cable Trays<br />\r\n&nbsp;</p>'),
(195, 62, '0', NULL, NULL, '<p>PVC Conduits</p>'),
(196, 62, '0', NULL, NULL, '<p>Office tables</p>'),
(197, 62, '0', NULL, NULL, NULL),
(198, 63, '<p>Brown &amp; Blue</p>', NULL, '2021-05-19 12:52:32', '<p>Brown &amp; Blue</p>'),
(199, 63, '0', NULL, NULL, '<p>Green &amp; Yellow</p>'),
(200, 63, '0', NULL, NULL, '<p>Black &amp; Cream<br />\r\n&nbsp;</p>'),
(201, 63, '0', NULL, NULL, '<p>Pink &amp; Green&nbsp;</p>'),
(202, 63, '0', NULL, NULL, NULL),
(203, 64, '<p>6</p>', NULL, '2021-05-19 12:53:07', '<p>3</p>'),
(204, 64, '0', NULL, NULL, '<p>6</p>'),
(205, 64, '0', NULL, NULL, '<p>9</p>'),
(206, 64, '0', NULL, NULL, '<p>12</p>'),
(207, 64, '0', NULL, NULL, NULL),
(208, 65, '<p>0.75 meter</p>', NULL, '2021-05-19 12:54:58', '<p>1 meter</p>'),
(209, 65, '0', NULL, NULL, '<p>0.75 meter</p>'),
(210, 65, '0', NULL, NULL, '<p>0.5 meter</p>'),
(211, 65, '0', NULL, NULL, '<p>0.25 meter</p>'),
(212, 65, '0', NULL, NULL, NULL),
(213, 66, '<p>50mm</p>', NULL, '2021-05-19 12:55:43', '<p>50mm</p>'),
(214, 66, '0', NULL, NULL, '<p>100mm</p>'),
(215, 66, '0', NULL, NULL, '<p>150mm</p>'),
(216, 66, '0', NULL, NULL, '<p>200mm</p>'),
(217, 66, '0', NULL, NULL, NULL),
(218, 67, '<p>Protection of high-temperature connections via heat resistant sleeves<br />\r\n&nbsp;</p>', NULL, '2021-05-19 12:57:14', '<p>Sharp edges on Cable Tray</p>'),
(219, 67, '0', NULL, NULL, '<p>Protection of high-temperature connections via heat resistant sleeves<br />\r\n&nbsp;</p>'),
(220, 67, '0', NULL, NULL, '<p>Exposed unsheathed cables at termination points</p>'),
(221, 67, '0', NULL, NULL, '<p>Loose connection and termination</p>'),
(222, 67, '0', NULL, NULL, NULL),
(223, 68, '<p>Terminal blocks (joints) and taped connections<br />\r\n&nbsp;</p>', NULL, '2021-05-19 12:58:03', '<p>Terminal blocks (joints) and taped connections<br />\r\n&nbsp;</p>'),
(224, 68, '0', NULL, NULL, '<p>Earth continuity connections across Cable Tray and conduit<br />\r\n&nbsp;</p>'),
(225, 68, '0', NULL, NULL, '<p>Flexible connections which limited to 3m in length and securely fixed<br />\r\n&nbsp;</p>'),
(226, 68, '0', NULL, NULL, '<p>None of the above</p>'),
(227, 68, '0', NULL, NULL, NULL),
(228, 69, '<p>10mm<br />\r\n&nbsp;</p>', NULL, '2021-05-19 12:58:53', '<p>10mm<br />\r\n&nbsp;</p>'),
(229, 69, '0', NULL, NULL, '<p>50mm<br />\r\n&nbsp;</p>'),
(230, 69, '0', NULL, NULL, '<p>100mm<br />\r\n&nbsp;</p>'),
(231, 69, '0', NULL, NULL, '<p>150mm<br />\r\n&nbsp;</p>'),
(232, 69, '0', NULL, NULL, NULL),
(233, 70, '<p>All of the above</p>', NULL, '2021-05-19 12:59:59', '<p>Load Schedule<br />\r\n&nbsp;</p>'),
(234, 70, '0', NULL, NULL, '<p>Earth Tail for the door<br />\r\n&nbsp;</p>'),
(235, 70, '0', NULL, NULL, '<p>Separated Bar for Neutral and Earth<br />\r\n&nbsp;</p>'),
(236, 70, '0', NULL, NULL, '<p>All of the above</p>'),
(237, 70, '0', NULL, NULL, NULL),
(238, 71, '<p>&nbsp;Luminaires&nbsp;<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:01:14', '<p>Wooden Doors&nbsp;<br />\r\n&nbsp;</p>'),
(239, 71, '0', NULL, NULL, '<p>&nbsp;Luminaires&nbsp;<br />\r\n&nbsp;</p>'),
(240, 71, '0', NULL, NULL, '<p>Gypsum False Ceiling&nbsp;<br />\r\n&nbsp;</p>'),
(241, 71, '0', NULL, NULL, '<p>Offices and tables</p>'),
(242, 71, '0', NULL, NULL, NULL),
(243, 72, '<p>2.5 mm2</p>', NULL, '2021-05-19 13:03:35', '<p>1.5 mm2</p>'),
(244, 72, '0', NULL, NULL, '<p>2.5 mm2</p>'),
(245, 72, '0', NULL, NULL, '<p>4 mm2</p>'),
(246, 72, '0', NULL, NULL, '<p>6mm2<br />\r\n&nbsp;</p>'),
(247, 72, '0', NULL, NULL, NULL),
(248, 73, '<p>5</p>', NULL, '2021-05-19 13:06:35', '<p>3</p>'),
(249, 73, '0', NULL, NULL, '<p>5</p>'),
(250, 73, '0', NULL, NULL, '<p>7</p>'),
(251, 73, '0', NULL, NULL, '<p>9</p>'),
(252, 73, '0', NULL, NULL, NULL),
(253, 74, '<p>2 x 4.0 mm2</p>', NULL, '2021-05-19 13:07:26', '<p>1 x 4.0 mm2</p>'),
(254, 74, '0', NULL, NULL, '<p>2 x 4.0 mm2</p>'),
(255, 74, '0', NULL, NULL, '<p>3 x 2.5 mm2<br />\r\n&nbsp;</p>'),
(256, 74, '0', NULL, NULL, '<p>2 x 2.5mm2</p>'),
(257, 74, '0', NULL, NULL, NULL),
(258, 75, '<p>Get the permission and wear the required PPE</p>', NULL, '2021-05-19 13:10:53', '<p>Enter the room and finish the work fast<br />\r\n&nbsp;</p>'),
(259, 75, '0', NULL, NULL, '<p>Get the permission and wear the required PPE</p>'),
(260, 75, '0', NULL, NULL, '<p>Ignore the task completely and forget about it&nbsp;</p>'),
(261, 75, '0', NULL, NULL, '<p>Ask your mate to enter the room with you</p>'),
(262, 75, '0', NULL, NULL, NULL),
(263, 76, '<p>Inform the Safety Officers and he will perform required First AED</p>', NULL, '2021-05-19 13:11:38', '<p>Leave the site and go home</p>'),
(264, 76, '0', NULL, NULL, '<p>Cover the wound and pretend nothing happened&nbsp;</p>'),
(265, 76, '0', NULL, NULL, '<p>Ask for your mate to continue the job and take a break</p>'),
(266, 76, '0', NULL, NULL, '<p>Inform the Safety Officers and he will perform required First AED</p>'),
(267, 76, '0', NULL, NULL, NULL),
(268, 77, '<p>All of above</p>', NULL, '2021-05-19 13:12:17', '<p>Vest Only</p>'),
(269, 77, '0', NULL, NULL, '<p>Shoes Only</p>'),
(270, 77, '0', NULL, NULL, '<p>Helmet On</p>'),
(271, 77, '0', NULL, NULL, '<p>All of above</p>'),
(272, 77, '0', NULL, NULL, NULL),
(273, 78, '<p>Tidy up the cables and leave the place cleaned</p>', NULL, '2021-05-19 13:13:14', '<p>Tidy up the cables and leave the place cleaned</p>'),
(274, 78, '0', NULL, NULL, '<p>Sell them to the scrap&nbsp;</p>'),
(275, 78, '0', NULL, NULL, '<p>Take them home</p>'),
(276, 78, '0', NULL, NULL, '<p>Leave them on the ground</p>'),
(277, 78, '0', NULL, NULL, NULL),
(278, 79, '<p>By a tester screwdriver</p>', NULL, '2021-05-19 13:13:50', '<p>Fork or a Spoon</p>'),
(279, 79, '0', NULL, NULL, '<p>Remove the socket and touch the wires&nbsp;</p>'),
(280, 79, '0', NULL, NULL, '<p>By a tester screwdriver</p>'),
(281, 79, '0', NULL, NULL, '<p>None of above<br />\r\n&nbsp;</p>'),
(282, 79, '0', NULL, NULL, NULL),
(283, 80, '<p>Extra Length shall be considered for future repairing</p>', NULL, '2021-05-19 13:14:29', '<p>Less than the required distance<br />\r\n&nbsp;</p>'),
(284, 80, '0', NULL, NULL, '<p>Exactly equal to the same distance<br />\r\n&nbsp;</p>'),
(285, 80, '0', NULL, NULL, '<p>Extra Length shall be considered for future repairing</p>'),
(286, 80, '0', NULL, NULL, '<p>None of the above</p>'),
(287, 80, '0', NULL, NULL, NULL),
(288, 81, '<p>Grinder cutting tool</p>', NULL, '2021-05-19 13:16:09', '<p>Drill Machine</p>'),
(289, 81, '0', NULL, NULL, '<p>GI bending machine<br />\r\n&nbsp;</p>'),
(290, 81, '0', NULL, NULL, '<p>Heat Gun<br />\r\n&nbsp;</p>'),
(291, 81, '0', NULL, NULL, '<p>Grinder cutting tool</p>'),
(292, 81, '0', NULL, NULL, NULL),
(293, 82, '<p>&nbsp;Ensure fixing ladder tightly &amp; call your mate to standby holding it<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:17:03', '<p>Leaning to the wall and hang yourself to the ceiling&nbsp;</p>'),
(294, 82, '0', NULL, NULL, '<p>&nbsp;Ensure fixing ladder tightly &amp; call your mate to standby holding it<br />\r\n&nbsp;</p>'),
(295, 82, '0', NULL, NULL, '<p>Go and finish the work fast before anyone notices&nbsp;</p>'),
(296, 82, '0', NULL, NULL, '<p>No safety precautions are required; there is no risk chance for falling from the ladder.</p>'),
(297, 82, '0', NULL, NULL, NULL),
(298, 83, '<p>Ask the safety officer for hot works permission and work according to his instructions<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:17:56', '<p>Finish the task quickly before the supervisor notice</p>'),
(299, 83, '0', NULL, NULL, '<p>Hand the job to your mate as he is skilled more&nbsp;</p>'),
(300, 83, '0', NULL, NULL, '<p>Ask the safety officer for hot works permission and work according to his instructions<br />\r\n&nbsp;</p>'),
(301, 83, '0', NULL, NULL, '<p>Ignore the task complete and do another job&nbsp;</p>'),
(302, 83, '0', NULL, NULL, NULL),
(303, 84, '<p>Checking the alignment and properly fixation of the wiring accessories</p>', NULL, '2021-05-19 13:18:57', '<p>Checking the alignment and properly fixation of the wiring accessories</p>'),
(304, 84, '0', NULL, NULL, '<p>Ignoring the loose connection and un tight termination</p>'),
(305, 84, '0', NULL, NULL, '<p>Disconnect the earth terminal as it&rsquo;s not important<br />\r\n&nbsp;</p>'),
(306, 84, '0', NULL, NULL, '<p>Remove the insulation of the single wires and expose it completely<br />\r\n&nbsp;</p>'),
(307, 84, '0', NULL, NULL, NULL),
(308, 85, '<p>Securely fix the cables using ties, clips or cleat</p>', NULL, '2021-05-19 13:19:52', '<p>Apply an insulation tape to stick the cable to the wall.<br />\r\n&nbsp;</p>'),
(309, 85, '0', NULL, NULL, '<p>Securely fix the cables using ties, clips or cleat</p>'),
(310, 85, '0', NULL, NULL, '<p>Fix &nbsp;them with a Nylon robe or cut piece wires</p>'),
(311, 85, '0', NULL, NULL, '<p>It&rsquo;s not important to tight and properly fix the laid cables, the end termination is enough<br />\r\nto hold them tight&nbsp;</p>'),
(312, 85, '0', NULL, NULL, NULL),
(313, 86, '<p>Inform your supervisors that your task is completed<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:20:53', '<p>Sleep and take a break for the rest of the time</p>'),
(314, 86, '0', NULL, NULL, '<p>Inform your supervisors that your task is completed<br />\r\n&nbsp;</p>'),
(315, 86, '0', NULL, NULL, '<p>Go to your mates and chat with them<br />\r\n&nbsp;</p>'),
(316, 86, '0', NULL, NULL, '<p>Give yourself another task and do it without informing anyone&nbsp;<br />\r\n&nbsp;</p>'),
(317, 86, '0', NULL, NULL, NULL),
(318, 87, '<p>Inform the supervisors, he will call the safety officers to check the scaffolding condition</p>', NULL, '2021-05-19 13:23:03', '<p>Replace the red tag with a green tag from another scaffolding and resume the works<br />\r\n&nbsp;</p>'),
(319, 87, '0', NULL, NULL, '<p>Inform the supervisors, he will call the safety officers to check the scaffolding condition</p>'),
(320, 87, '0', NULL, NULL, '<p>Finish the task quickly before anyone noticed<br />\r\n&nbsp;</p>'),
(321, 87, '0', NULL, NULL, '<p>Hand over the job to your mate &nbsp;</p>'),
(322, 87, '0', NULL, NULL, NULL),
(323, 88, '<p>Inform the supervisors and disconnect the power until the required maintenance is don</p>', NULL, '2021-05-19 13:24:10', '<p>Ignore it if the machine is energized and functioning</p>'),
(324, 88, '0', NULL, NULL, '<p>Apply the aluminium tape on the exposed part</p>'),
(325, 88, '0', NULL, NULL, '<p>Cover it with a stone or GI sheet and hide it&nbsp;</p>'),
(326, 88, '0', NULL, NULL, '<p>Inform the supervisors and disconnect the power until the required maintenance is don</p>'),
(327, 88, '0', NULL, NULL, NULL),
(328, 89, '<p>13A Socket outlet<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:26:59', '<p>Earth Connection</p>'),
(329, 89, '0', NULL, NULL, '<p>2-way switch<br />\r\n&nbsp;</p>'),
(330, 89, '0', NULL, NULL, '<p>13A Socket outlet<br />\r\n&nbsp;</p>'),
(331, 89, '0', NULL, NULL, '<p>CT meter</p>'),
(332, 89, '0', NULL, NULL, NULL),
(333, 90, '<p>CT meter</p>', NULL, '2021-05-19 13:28:42', '<p>Earth Connection</p>'),
(334, 90, '0', NULL, NULL, '<p>2-way switch<br />\r\n&nbsp;</p>'),
(335, 90, '0', NULL, NULL, '<p>13A Socket outlet<br />\r\n&nbsp;</p>'),
(336, 90, '0', NULL, NULL, '<p>CT meter</p>'),
(337, 90, '0', NULL, NULL, NULL),
(338, 91, '<p>2-way switch<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:30:17', '<p>Earth Connection<br />\r\n&nbsp;</p>'),
(339, 91, '0', NULL, NULL, '<p>2-way switch<br />\r\n&nbsp;</p>'),
(340, 91, '0', NULL, NULL, '<p>13A Socket outlet<br />\r\n&nbsp;</p>'),
(341, 91, '0', NULL, NULL, '<p>CT meter&nbsp;<br />\r\n&nbsp;</p>'),
(342, 91, '0', NULL, NULL, NULL),
(343, 92, '<p>Earth Connection</p>', NULL, '2021-05-19 13:31:47', '<p>Earth Connection</p>'),
(344, 92, '0', NULL, NULL, '<p>2-way switch</p>'),
(345, 92, '0', NULL, NULL, '<p>13A Socket outlet<br />\r\n&nbsp;</p>'),
(346, 92, '0', NULL, NULL, '<p>CT meter</p>'),
(347, 92, '0', NULL, NULL, NULL),
(348, 93, '<p>All of the above &nbsp;</p>', NULL, '2021-05-19 13:38:15', '<p>Screw and fishers&nbsp;</p>'),
(349, 93, '0', NULL, NULL, '<p>Metal thread rod&nbsp;</p>'),
(350, 93, '0', NULL, NULL, '<p>Slotted GI channel&nbsp;</p>'),
(351, 93, '0', NULL, NULL, '<p>All of the above &nbsp;</p>'),
(352, 93, '0', NULL, NULL, NULL),
(353, 94, '<p>Safety Belt</p>', NULL, '2021-05-19 13:39:05', '<p>Safety Belt</p>'),
(354, 94, '0', NULL, NULL, '<p>Sport Shoes</p>'),
(355, 94, '0', NULL, NULL, '<p>Cap or Hat&nbsp;</p>'),
(356, 94, '0', NULL, NULL, '<p>None of above</p>'),
(357, 94, '0', NULL, NULL, NULL),
(358, 95, '<p>Light Circuit<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:39:41', '<p>Light Circuit<br />\r\n&nbsp;</p>'),
(359, 95, '0', NULL, NULL, '<p>Power Circuit<br />\r\n&nbsp;</p>'),
(360, 95, '0', NULL, NULL, '<p>A/C circuit</p>'),
(361, 95, '0', NULL, NULL, '<p>Water Heater</p>'),
(362, 95, '0', NULL, NULL, NULL),
(363, 96, '<p>Light Circuit</p>', NULL, '2021-05-19 13:40:32', '<p>Light Circuit</p>'),
(364, 96, '0', NULL, NULL, '<p>Power Circuit<br />\r\n&nbsp;</p>'),
(365, 96, '0', NULL, NULL, '<p>A/C circuit</p>'),
(366, 96, '0', NULL, NULL, '<p>Water Heater<br />\r\n&nbsp;</p>'),
(367, 96, '0', NULL, NULL, NULL),
(368, 97, '<p>Light Circuit<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:41:18', '<p>Light Circuit<br />\r\n&nbsp;</p>'),
(369, 97, '0', NULL, NULL, '<p>Power Circuit</p>'),
(370, 97, '0', NULL, NULL, '<p>A/C circuit<br />\r\n&nbsp;</p>'),
(371, 97, '0', NULL, NULL, '<p>Water Heater<br />\r\n&nbsp;</p>'),
(372, 97, '0', NULL, NULL, NULL),
(373, 98, '<p>Air Conditioning Circuit</p>', NULL, '2021-05-19 13:42:02', '<p>Light Circuit<br />\r\n&nbsp;</p>'),
(374, 98, '0', NULL, NULL, '<p>Power Circuit<br />\r\n&nbsp;</p>'),
(375, 98, '0', NULL, NULL, '<p>Air Conditioning Circuit</p>'),
(376, 98, '0', NULL, NULL, '<p>Water Heater<br />\r\n&nbsp;</p>'),
(377, 98, '0', NULL, NULL, NULL),
(378, 99, '<p>Exposed Unsheathed cable at termination points<br />\r\n&nbsp;</p>', NULL, '2021-05-19 13:44:16', '<p>Exposed Unsheathed cable at termination points<br />\r\n&nbsp;</p>'),
(379, 99, '0', NULL, NULL, '<p>Weatherproof socket and light shall be replaced&nbsp;</p>'),
(380, 99, '0', NULL, NULL, '<p>Supports are not securely fixed &nbsp;</p>'),
(381, 99, '0', NULL, NULL, '<p>No any issue and the connection is terminated correctly &nbsp;</p>'),
(382, 99, '0', NULL, NULL, NULL),
(383, 100, '<p>Ceiling Rose</p>', NULL, '2021-05-19 14:08:02', '<p>2 Way Switch</p>'),
(384, 100, '0', NULL, NULL, '<p>Industrial Socket&nbsp;</p>'),
(385, 100, '0', NULL, NULL, '<p>Ceiling Rose</p>'),
(386, 100, '0', NULL, NULL, '<p>Intermediate Switch</p>'),
(387, 100, '0', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', NULL, NULL),
(2, 'candidate', 'web', NULL, NULL),
(3, 'invigilator', 'web', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`id`, `user_id`, `role_id`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL),
(13, 44, 2, '2021-05-18 15:16:55', '2021-05-18 15:16:55'),
(14, 45, 2, '2021-05-18 20:19:08', '2021-05-18 20:19:08'),
(15, 46, 2, '2021-05-19 14:11:26', '2021-05-19 14:11:26'),
(16, 47, 3, '2021-05-21 19:07:17', '2021-05-21 19:07:17'),
(17, 48, 3, '2021-05-22 17:46:26', '2021-05-22 17:46:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT 'Pending',
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `role`, `status`, `password`, `avatar`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Cplussoft', 'cplusoft@gmail.com', NULL, 'admin', '', '$2y$12$K1iMDqqLuEEQE5dUTN5cUebO7JdKAgr74YxNj5jAicFjZRCmj5R56', NULL, NULL, '2021-04-13 03:50:41', '2021-05-06 17:06:13', NULL),
(42, 'Bilawal', 'bilawalb92@gmail.com', NULL, 'candidate', 'Pending', '$2y$12$K1iMDqqLuEEQE5dUTN5cUebO7JdKAgr74YxNj5jAicFjZRCmj5R56', NULL, NULL, '2021-05-09 22:12:50', '2021-05-10 12:42:56', '2021-05-10 12:42:56'),
(44, 'Irfan', 'irfan.elahii187@gmail.com', NULL, 'candidate', 'Pending', '$2y$10$EPqTWiypC6WGfVqT73/GwOPSS.Ol8tKBDTRX3qHJnjwH5Wd83SoRu', '1621325815irfan.jpg', NULL, '2021-05-18 15:16:55', '2021-05-18 15:59:52', NULL),
(45, 'Asad', 'asad@falcon-works.com', NULL, 'candidate', 'Pending', '$2y$10$DzHE1G4GSRLKEgUqtropDOX7oe91HhvX1A6mQI4JgAOQpI/pC5.xS', '16213443352021 falcon works.jpg', NULL, '2021-05-18 20:19:08', '2021-05-18 20:25:35', NULL),
(46, 'Asad', 'training@falcon-works.com', NULL, 'candidate', 'Pending', '$2y$10$AKYwYzCLIr2HwHS9hVzLwuQPM2InJ0ktMhphHu65fDR9ZEIz6Mn/G', '16214082862.JPG', NULL, '2021-05-19 14:11:26', '2021-05-19 14:11:26', NULL),
(47, 'Malik', 'irfan.elahi187@gmail.com', NULL, 'invigilator', 'Pending', '$2y$10$csboWIFzCVh.eUQ6hutoK.aXGmHeeVHLAKQaILV4zjLmjBEY19Zmm', '1621598837irfan.jpg', NULL, '2021-05-21 19:07:17', '2021-05-21 19:07:17', NULL),
(48, 'test', 'arishakamran1997@gmail.com', NULL, 'invigilator', 'Pending', '$2y$10$w1pfDrpu3O5fAmDi17VFq.fU3kT9ZHDYRVvzC0t9TZCHo.GURkvwm', '1621680386khairil-yusof-5-_rvfUDiaM-unsplash.jpg', NULL, '2021-05-22 17:46:26', '2021-05-22 17:46:26', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_settings`
--
ALTER TABLE `account_settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `activity_candidates`
--
ALTER TABLE `activity_candidates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `candidate_exams`
--
ALTER TABLE `candidate_exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_exams_candidate_id_foreign` (`candidate_id`),
  ADD KEY `candidate_exams_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `candidate_information`
--
ALTER TABLE `candidate_information`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_information_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `candidate_marks`
--
ALTER TABLE `candidate_marks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidate_marks_candidate_id_foreign` (`candidate_id`),
  ADD KEY `candidate_marks_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `company_details`
--
ALTER TABLE `company_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `news_updates`
--
ALTER TABLE `news_updates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notification_attachments`
--
ALTER TABLE `notification_attachments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notification_attachments_notification_id_foreign` (`notification_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_candidate_id_foreign` (`candidate_id`),
  ADD KEY `payments_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `questions_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_answers_candidate_id_foreign` (`candidate_id`),
  ADD KEY `question_answers_exam_id_foreign` (`exam_id`);

--
-- Indexes for table `question_options`
--
ALTER TABLE `question_options`
  ADD PRIMARY KEY (`id`),
  ADD KEY `question_options_question_id_foreign` (`question_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_users_user_id_foreign` (`user_id`),
  ADD KEY `role_users_role_id_foreign` (`role_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_settings`
--
ALTER TABLE `account_settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `activity_candidates`
--
ALTER TABLE `activity_candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=109;

--
-- AUTO_INCREMENT for table `candidate_exams`
--
ALTER TABLE `candidate_exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `candidate_information`
--
ALTER TABLE `candidate_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `candidate_marks`
--
ALTER TABLE `candidate_marks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `company_details`
--
ALTER TABLE `company_details`
  MODIFY `id` bigint(35) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_updates`
--
ALTER TABLE `news_updates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `notification_attachments`
--
ALTER TABLE `notification_attachments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;

--
-- AUTO_INCREMENT for table `question_answers`
--
ALTER TABLE `question_answers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT for table `question_options`
--
ALTER TABLE `question_options`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=388;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `role_user`
--
ALTER TABLE `role_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_exams`
--
ALTER TABLE `candidate_exams`
  ADD CONSTRAINT `candidate_exams_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `candidate_exams_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `candidate_information`
--
ALTER TABLE `candidate_information`
  ADD CONSTRAINT `candidate_information_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `candidate_marks`
--
ALTER TABLE `candidate_marks`
  ADD CONSTRAINT `candidate_marks_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `candidate_marks_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `notification_attachments`
--
ALTER TABLE `notification_attachments`
  ADD CONSTRAINT `notification_attachments_notification_id_foreign` FOREIGN KEY (`notification_id`) REFERENCES `notifications` (`id`);

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `payments_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `questions`
--
ALTER TABLE `questions`
  ADD CONSTRAINT `questions_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `question_answers`
--
ALTER TABLE `question_answers`
  ADD CONSTRAINT `question_answers_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `question_answers_exam_id_foreign` FOREIGN KEY (`exam_id`) REFERENCES `exams` (`id`);

--
-- Constraints for table `question_options`
--
ALTER TABLE `question_options`
  ADD CONSTRAINT `question_options_question_id_foreign` FOREIGN KEY (`question_id`) REFERENCES `questions` (`id`);

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`),
  ADD CONSTRAINT `role_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
