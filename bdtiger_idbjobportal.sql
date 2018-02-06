-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 06, 2018 at 01:27 PM
-- Server version: 10.0.34-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdtiger_idbjobportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `academics`
--

CREATE TABLE `academics` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED DEFAULT NULL,
  `lavelofeducation_id` int(10) UNSIGNED DEFAULT NULL,
  `groupormajor_id` int(10) UNSIGNED DEFAULT NULL,
  `exam_title_id` int(10) UNSIGNED DEFAULT NULL,
  `result` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `marks` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passing_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `achievment` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `academics`
--

INSERT INTO `academics` (`id`, `jobseeker_id`, `lavelofeducation_id`, `groupormajor_id`, `exam_title_id`, `result`, `marks`, `institute`, `passing_year`, `duration`, `achievment`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, 3, '1st division', '566', 'Rajshahi com', '2004', '4', 'good', '2017-04-28 18:00:00', '2017-04-28 18:00:00'),
(2, 2, 1, 1, 3, '1st class', '900kjkj', 'RU', NULL, '4', 'goodsadsd hfgf', '2017-04-28 18:00:00', '2017-05-04 10:53:45'),
(5, 2, 1, 1, 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 1, 1, 8, 'dsfgsd', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 2, 3, 6, 7, 'A+', '900000', 'Poti', '2017', '21040252', '102', '2017-05-04 05:08:02', '2017-05-04 05:08:02'),
(8, 2, 4, 9, 11, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-04 06:09:43', '2017-05-04 06:09:43'),
(9, 2, 3, 5, 7, '1st class', '645', 'RU', '2014', '4', 'good', '2017-05-04 06:39:21', '2017-05-04 06:39:21'),
(10, 2, 5, 12, 12, '1st class', '645', 'RU', '2014', '4', 'good', '2017-05-04 06:40:11', '2017-05-04 06:40:11'),
(11, 2, 5, 12, 12, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-04 07:57:34', '2017-05-04 07:57:34'),
(13, 10, 1, 7, 6, '3.02', NULL, NULL, NULL, '4', NULL, '2017-05-05 09:04:04', '2017-05-07 01:42:31'),
(14, 10, 4, 10, 11, '4.30', NULL, 'DR. ARMC JESSORE', '2009', '2', NULL, '2017-05-05 09:31:21', '2017-05-05 09:31:21'),
(17, 10, 5, 13, 12, '4.13', NULL, 'MKSM', '2007', NULL, NULL, '2017-05-05 09:43:08', '2017-05-05 09:43:08'),
(24, 10, 3, 16, 10, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-05 10:11:34', '2017-05-05 10:11:34'),
(25, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 14, 1, 1, 3, '400', '111', 'jhghgfggt', NULL, '362525', '11111111', NULL, '2017-05-21 12:41:23'),
(29, 14, 1, 1, 3, '400', '111', 'jhghgfggt', '25165', '362525', '11111111', '2017-05-21 12:38:54', '2017-05-21 12:38:54'),
(30, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 16, 4, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-29 14:02:03', '2017-05-29 14:02:03'),
(34, 11, 4, 9, 11, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-19 20:12:59', '2017-08-19 20:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `applicationinfos`
--

CREATE TABLE `applicationinfos` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED DEFAULT NULL,
  `career_objective` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `career_summary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `special_qualification` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lookingfor` enum('entry','mid','top') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `availablefor` enum('partime','fulltime') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `presentsalary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `expectedsalary` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_job_category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_district` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_division` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `preferred_organization_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applicationinfos`
--

INSERT INTO `applicationinfos` (`id`, `jobseeker_id`, `career_objective`, `career_summary`, `special_qualification`, `lookingfor`, `availablefor`, `presentsalary`, `expectedsalary`, `preferred_job_category`, `preferred_district`, `preferred_division`, `preferred_organization_type`, `created_at`, `updated_at`) VALUES
(2, 9, '1', '1', '1', 'entry', 'partime', '1', '1', '1', '1', '1', NULL, NULL, NULL),
(4, 8, NULL, NULL, NULL, 'entry', 'partime', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 2, 'aaaaaaaaa', NULL, NULL, 'top', 'partime', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-04 05:15:26'),
(7, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(100) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `short_list` int(11) DEFAULT '0',
  `expected_salary` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `employer_id`, `jobseeker_id`, `job_id`, `short_list`, `expected_salary`, `created_at`, `updated_at`) VALUES
(21, 5, 10, 11, 1, '1500', '2017-05-18 07:15:00', '2017-05-18 07:15:00'),
(22, 5, 10, 8, 1, '25000', '2017-05-18 07:15:45', '2017-05-18 07:15:45'),
(23, 5, 10, 12, 1, '15000', '2017-05-18 08:03:03', '2017-05-18 08:03:03'),
(24, 5, 12, 12, 0, '50000', '2017-05-19 20:53:00', '2017-05-19 20:53:00'),
(25, 5, 9, 11, 0, '344444', '2017-05-20 18:00:00', '2017-05-20 18:00:00'),
(26, 5, 9, 9, 0, '344455', '2017-05-20 18:00:00', '2017-05-20 18:00:00'),
(27, 5, 8, 9, 0, '34566', '2017-05-20 18:00:00', '2017-05-20 18:00:00'),
(28, 5, 3, 9, 0, '40000', '2017-05-20 18:00:00', '2017-05-20 18:00:00'),
(29, 5, 14, 32, 0, '40000', '2017-05-21 12:48:44', '2017-05-21 12:48:44'),
(30, 5, 10, 32, 0, '10000', '2017-05-21 14:55:50', '2017-05-21 14:55:50'),
(31, 5, 10, 33, 0, '1000000', '2017-05-22 07:11:23', '2017-05-22 07:11:23'),
(32, 37, 15, 27, 0, '15000', '2017-05-23 03:40:59', '2017-05-23 03:40:59'),
(33, 36, 15, 14, 0, '20000', '2017-05-23 03:49:16', '2017-05-23 03:49:16'),
(34, 4, 10, 34, 0, '10000', '2017-05-23 19:14:06', '2017-05-23 19:14:06'),
(35, 5, 10, 7, 0, '4000', '2017-06-10 14:08:03', '2017-06-10 14:08:03');

-- --------------------------------------------------------

--
-- Table structure for table `areas`
--

CREATE TABLE `areas` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `district_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `areas`
--

INSERT INTO `areas` (`id`, `country_id`, `division_id`, `district_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 1, 'Poylanpur', '2017-05-01 14:50:22', '2017-05-01 14:50:22'),
(2, 2, 1, 1, 'sadhupara', '2017-05-01 14:50:44', '2017-05-01 14:50:44'),
(3, 2, 1, 1, 'gobinda', '2017-05-01 14:50:59', '2017-05-01 14:50:59');

-- --------------------------------------------------------

--
-- Table structure for table `assists`
--

CREATE TABLE `assists` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_email` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(200) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `assists`
--

INSERT INTO `assists` (`id`, `employer_email`, `email`, `name`, `password`, `created_at`, `updated_at`) VALUES
(7, 'ajr.jahid@gmail.com', 'ajr.jahid@gmail.com', 'Anwar', '$2y$10$gW6Nn0wot2Ibv9BRtB71HuTw35aVLh8blC9ryrGjwPASSprI3tBKG', '2017-05-15 02:38:13', '2017-05-15 02:38:13');

-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

CREATE TABLE `blocks` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blocks`
--

INSERT INTO `blocks` (`id`, `jobseeker_id`, `employer_id`, `created_at`, `updated_at`) VALUES
(3, 11, 4, '2017-05-21 12:59:07', '2017-05-21 12:59:07'),
(4, 11, 5, '2017-05-21 12:59:12', '2017-05-21 12:59:12'),
(5, 11, 35, '2017-05-21 12:59:16', '2017-05-21 12:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagoryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `catimage` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagoryname`, `catimage`, `created_at`, `updated_at`) VALUES
(12, 'Bank/ Non-Bank Fin', '', '2017-05-01 00:54:25', '2017-05-17 14:11:54'),
(14, 'HR/Org. Development', '', '2017-05-04 08:41:38', '2017-05-17 13:55:07'),
(15, 'Garments/Textile', '', '2017-05-01 08:11:50', '2017-05-17 13:54:47'),
(16, 'Engineer/Architects', '', '2017-05-01 08:10:13', '2017-05-17 13:54:24'),
(18, 'Education/Training', '', '2017-05-01 08:10:06', '2017-05-17 13:54:02'),
(19, 'Commercial/Supply', '', '2017-05-01 00:54:39', '2017-05-17 14:18:03'),
(20, 'Design/Creative', '', '2017-05-15 03:32:57', '2017-05-17 13:56:34'),
(21, 'Web Development', '', '2017-05-15 03:33:23', '2017-05-15 03:33:23'),
(22, 'Production/Operation', '', '2017-05-15 05:11:40', '2017-05-17 13:56:52'),
(23, 'Hospitality/ Travel/ Tourism', '', '2017-05-17 12:02:01', '2017-05-17 13:57:14'),
(24, 'Electrician/ Construction/ Repair', NULL, '2017-05-17 14:05:55', '2017-05-17 14:08:28'),
(25, 'IT/Telicommunication', NULL, '2017-05-18 03:57:30', '2017-05-18 03:57:30'),
(26, 'Accounting/Financet', NULL, '2017-05-04 02:41:38', '2017-05-17 07:55:07'),
(27, 'Research/Consultancy', NULL, '2017-05-01 02:11:50', '2017-05-17 07:54:47'),
(28, 'Beauty Care/ Health & Fitness', NULL, '2017-05-01 02:10:13', '2017-05-17 07:54:24'),
(29, 'Gen Mgt/Admin', NULL, '2017-05-01 02:10:06', '2017-05-17 07:54:02'),
(30, 'Marketing/Sales', NULL, '2017-04-30 18:54:39', '2017-05-17 08:18:03'),
(31, 'Customer Support/Call Centre', NULL, '2017-05-14 21:32:57', '2017-05-17 07:56:34'),
(32, 'Media/Ad./Event Mgt.', NULL, '2017-05-14 21:33:23', '2017-05-14 21:33:23'),
(34, 'Medical/Pharma', NULL, '2017-05-14 23:11:40', '2017-05-17 07:56:52'),
(35, 'Agro (Plant/Animal/Fisheries)', NULL, '2017-05-17 06:02:01', '2017-05-17 07:57:14'),
(36, 'NGO/Development', NULL, '2017-05-17 08:05:55', '2017-05-17 08:08:28'),
(37, 'Data Entry/Operator/BPO', NULL, '2017-05-17 21:57:30', '2017-05-17 21:57:30'),
(38, 'Driving/Motor Technician', NULL, '2017-05-17 21:57:30', '2017-05-17 21:57:30'),
(39, 'Law/Legal', NULL, '2017-05-17 21:57:30', '2017-05-17 21:57:30'),
(40, 'Others', NULL, '2017-05-17 21:57:30', '2017-05-17 21:57:30');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Bangladesh', '2017-04-28 23:56:07', '2017-04-30 22:18:18');

-- --------------------------------------------------------

--
-- Table structure for table `coursedurations`
--

CREATE TABLE `coursedurations` (
  `id` int(10) UNSIGNED NOT NULL,
  `courseduration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cvs`
--

CREATE TABLE `cvs` (
  `id` int(100) NOT NULL,
  `jobseeker_id` int(100) NOT NULL,
  `cv_name` varchar(200) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cvs`
--

INSERT INTO `cvs` (`id`, `jobseeker_id`, `cv_name`, `created_at`, `updated_at`) VALUES
(2, 10, '/cv/10.pdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `districts`
--

CREATE TABLE `districts` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL DEFAULT '2',
  `division_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `country_id`, `division_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'pabna_default', '2017-05-01 15:11:33', '2017-05-01 15:11:33'),
(76, 2, 2, 'Bogra', '2016-12-01 10:34:57', '2017-05-19 10:38:44'),
(77, 2, 2, 'Chapainawabganj', '2016-12-01 10:35:45', '2017-05-19 10:38:44'),
(78, 2, 2, 'Joypurhat', '2016-12-01 10:36:13', '2017-05-19 10:38:44'),
(79, 2, 2, 'Naogaon', '2016-12-01 10:36:45', '2017-05-19 10:38:44'),
(80, 2, 2, 'Natore', '2016-12-01 10:37:00', '2017-05-19 10:38:44'),
(81, 2, 2, 'Pabna', '2016-12-01 10:37:18', '2017-05-19 10:38:44'),
(82, 2, 2, 'Rajshahi', '2016-12-01 10:37:35', '2017-05-19 10:38:44'),
(83, 2, 2, 'Sirajganj', '2016-12-01 10:37:53', '2017-05-19 10:38:44'),
(84, 2, 6, 'Habiganj', '2016-12-01 10:40:13', '2017-05-19 10:38:44'),
(85, 2, 6, 'Moulvibazar', '2016-12-01 10:40:32', '2017-05-19 10:38:44'),
(86, 2, 6, 'Sunamganj', '2016-12-01 10:41:03', '2017-05-19 10:38:44'),
(87, 2, 6, 'Sylhet ', '2016-12-01 10:41:21', '2017-05-19 10:38:44'),
(88, 2, 7, 'Rangpur', '2016-12-01 10:42:04', '2017-05-19 10:38:44'),
(89, 2, 7, 'Dinajpur', '2016-12-01 10:42:27', '2017-05-19 10:38:44'),
(90, 2, 7, 'Kurigram', '2016-12-01 10:42:47', '2017-05-19 10:38:44'),
(91, 2, 7, 'Gaibandha', '2016-12-01 10:43:00', '2017-05-19 10:38:44'),
(92, 2, 7, 'Nilphamari', '2016-12-01 10:43:21', '2017-05-19 10:38:44'),
(93, 2, 7, 'Panchagarh', '2016-12-01 10:43:40', '2017-05-19 10:38:44'),
(94, 2, 7, 'Thakurgaon', '2016-12-01 10:44:00', '2017-05-19 10:38:44'),
(95, 2, 8, 'Jamalpur', '2016-12-01 10:45:27', '2017-05-19 10:38:44'),
(96, 2, 8, 'Mymensingh', '2016-12-01 10:46:32', '2017-05-19 10:38:44'),
(97, 2, 8, 'Netrokona', '2016-12-01 10:47:01', '2017-05-19 10:38:44'),
(98, 2, 8, 'Sherpur', '2016-12-01 10:47:20', '2017-05-19 10:38:44'),
(99, 2, 7, 'Lalmonirhat', '2016-12-01 10:49:15', '2017-05-19 10:38:44'),
(100, 2, 4, 'Bagerhat', '2016-12-01 10:51:10', '2017-05-19 10:38:44'),
(101, 2, 4, 'Chuadanga', '2016-12-01 10:51:25', '2017-05-19 10:38:44'),
(102, 2, 4, 'Jessore', '2016-12-01 10:51:41', '2017-05-19 10:38:44'),
(103, 2, 4, 'Jhenaidah', '2016-12-01 10:51:57', '2017-05-19 10:38:44'),
(104, 2, 4, 'Khulna', '2016-12-01 10:52:14', '2017-05-19 10:38:44'),
(105, 2, 4, 'Kushtia', '2016-12-01 10:52:33', '2017-05-19 10:38:44'),
(106, 2, 4, 'Magura ', '2016-12-01 10:52:51', '2017-05-19 10:38:44'),
(107, 2, 4, 'Meherpur', '2016-12-01 10:53:05', '2017-05-19 10:38:44'),
(108, 2, 4, 'Narail ', '2016-12-01 10:53:25', '2017-05-19 10:38:44'),
(109, 2, 4, 'Satkhira', '2016-12-01 10:53:50', '2017-05-19 10:38:44'),
(110, 2, 1, 'Dhaka ', '2016-12-01 10:59:20', '2017-05-19 10:38:44'),
(111, 2, 1, 'Faridpur', '2016-12-01 10:59:39', '2017-05-19 10:38:44'),
(112, 2, 1, 'Gazipur', '2016-12-01 10:59:53', '2017-05-19 10:38:44'),
(113, 2, 1, 'Gopalganj', '2016-12-01 11:00:16', '2017-05-19 10:38:44'),
(114, 2, 1, 'Kishoreganj', '2016-12-01 11:00:33', '2017-05-19 10:38:44'),
(115, 2, 1, 'Madaripur', '2016-12-01 11:00:56', '2017-05-19 10:38:44'),
(116, 2, 1, 'Manikganj ', '2016-12-01 11:01:14', '2017-05-19 10:38:44'),
(117, 2, 1, 'Munshiganj', '2016-12-01 11:01:31', '2017-05-19 10:38:44'),
(118, 2, 1, 'Narayanganj ', '2016-12-01 11:01:55', '2017-05-19 10:38:44'),
(119, 2, 1, 'Narsingdi', '2016-12-01 11:02:11', '2017-05-19 10:38:44'),
(120, 2, 1, 'Rajbari ', '2016-12-01 11:02:35', '2017-05-19 10:38:44'),
(121, 2, 1, 'Shariatpur', '2016-12-01 11:02:52', '2017-05-19 10:38:44'),
(122, 2, 1, 'Tangail', '2016-12-01 11:03:11', '2017-05-19 10:38:44'),
(123, 2, 5, 'Barisal', '2016-12-01 11:05:04', '2017-05-19 10:38:44'),
(124, 2, 5, 'Barguna ', '2016-12-01 11:05:19', '2017-05-19 10:38:44'),
(125, 2, 5, 'Bhola', '2016-12-01 11:05:42', '2017-05-19 10:38:44'),
(126, 2, 5, 'Jhalokati', '2016-12-01 11:05:55', '2017-05-19 10:38:44'),
(127, 2, 5, 'Patuakhali', '2016-12-01 11:06:15', '2017-05-19 10:38:44'),
(128, 2, 5, 'Pirojpur', '2016-12-01 11:06:35', '2017-05-19 10:38:44'),
(129, 2, 3, 'Bandarban', '2016-12-01 11:08:22', '2017-05-19 10:38:44'),
(130, 2, 3, 'Brahmanbaria', '2016-12-01 11:08:38', '2017-05-19 10:38:44'),
(131, 2, 3, 'Chandpur ', '2016-12-01 11:09:32', '2017-05-19 10:38:44'),
(132, 2, 3, 'Chittagong', '2016-12-01 11:10:01', '2017-05-19 10:38:44'),
(133, 2, 3, 'Comilla ', '2016-12-01 11:10:25', '2017-05-19 10:38:44'),
(134, 2, 3, 'Feni', '2016-12-01 11:11:05', '2017-05-19 10:38:44'),
(135, 2, 3, 'Khagrachhari', '2016-12-01 11:11:31', '2017-05-19 10:38:44'),
(136, 2, 3, 'Lakshmipur', '2016-12-01 11:11:52', '2017-05-19 10:38:44'),
(138, 2, 3, 'Rangamati', '2016-12-01 11:12:36', '2017-05-19 10:38:44'),
(139, 2, 3, 'Noakhali', '2016-12-01 11:13:08', '2017-05-19 10:38:44'),
(140, 2, 3, 'Cox\'s Bazar', '2016-12-01 11:17:17', '2017-05-19 10:38:44');

-- --------------------------------------------------------

--
-- Table structure for table `divisions`
--

CREATE TABLE `divisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `country_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `divisions`
--

INSERT INTO `divisions` (`id`, `country_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 'Dhaka', '2017-04-28 23:56:42', '2017-04-30 22:18:40'),
(2, 2, 'Rajshahi', '2017-04-30 22:18:51', '2017-04-30 22:18:51'),
(3, 2, 'Chittagong', '2017-04-30 22:28:52', '2017-04-30 22:28:52'),
(4, 2, 'Khulna', '2017-04-30 22:29:03', '2017-04-30 22:29:03'),
(5, 2, 'Barisal', '2017-04-30 22:29:15', '2017-04-30 22:29:15'),
(6, 2, 'Sylhet', '2017-04-30 22:29:30', '2017-04-30 22:29:30'),
(7, 2, 'Rangpur', '2017-05-18 18:00:00', '2017-05-18 18:00:00'),
(8, 2, 'Mymensingh', '2017-05-18 18:00:00', '2017-05-18 18:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `online_status` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifyToken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `name`, `email`, `password`, `slug`, `status`, `online_status`, `remember_token`, `verifyToken`, `created_at`, `updated_at`) VALUES
(4, 'imran', 'anwar@gmail.com', '$2y$10$6P67RaGSQ1b/NWwd6q1H2eXGXZeUY7CkN5ZNAoo3MBTbtyuh58Qzq', '123456', 1, NULL, '37jJkRgl5CIK6ej5lvkF22jaQ5fVwgUrCOsBVIlWBC4mUF1gx21UTbsQP9hc', '', '2017-05-03 21:56:30', '2017-05-21 12:11:15'),
(5, 'emon', 'ajr.jahid@gmail.com', '$2y$10$bv72JFXaxtwY9jEL4DDQIOHQ04x6vpyTnTID/epazvETF5cwc72YO', '123456', 1, '2017-05-20 07:12:52', 'xdzMSkAnzdyBlubDJN0O1TIfTOJRkzsJl9fq6VHAcMr0Pr7La9XHdzCnQY2b', '', '2017-05-04 13:26:08', '2017-05-21 12:11:24'),
(12, 'MD ANWAR JAHID', 'ajr.jahifd@gmail.com', '$2y$10$PcgXOgn.W.tEppk90iaMLeHAIbuSPvbolsxyAk/lP9PaEVXNfL5Yu', '123456', 1, NULL, NULL, 'kBUAPB49IHtiyfLajvJNl2B6gbG4fzYbUtqE0VSt', '2017-05-08 04:28:17', '2017-05-08 04:28:17'),
(33, 'anwar', 'bdtigerwin@gmail.com', '$2y$10$bv72JFXaxtwY9jEL4DDQIOHQ04x6vpyTnTID/epazvETF5cwc72YO', '123456', 1, NULL, 'zNlsGKU6mI3mGWOzFbgkQaS9rVbbph0BaKAdpUzVbC19i2iVYer3Vd0e4UpS', '', '2017-05-08 05:57:18', '2017-05-08 05:57:29'),
(34, 'Anwar', 'idbjobportal@gmail.com', '$2y$10$OiuFXcdB2WBujID3.yCz7OTYbttCqaAR0mAMR2tCJcrUjDUO13qjC', 'idb', 1, NULL, NULL, 'AnpqICF8hDJHStZ2zdNdnVMFmYspAZvsR0Ai9Bhp', '2017-05-14 23:23:18', '2017-09-11 15:45:33'),
(36, 'afruz', 'afruz23@gmail.com', '$2y$10$iAHWX1zZA18HU4KhWjbSeeXPE7gD7I.GzOFyHAq2Dkbi9AhM0cf3.', '123456', 1, '2017-05-19 23:51:57', 'Fb3Hjz6f1mIvj1FUPCiNPbKgmss16slXRGXnvhBLwlXjx6vPZ7IaZYgzh4EL', '', '2017-05-19 21:11:34', '2017-05-19 23:51:57'),
(37, 'sweet', 'ahsweet92@gmail.com', '$2y$10$1t9XGl/orqltJ45qZtgYY.GDb0roJJUGspLdw4/6SEsI3ctaeb8uK', 'sweet', 1, '2017-05-21 06:11:57', '7j2hDLSCYB8lmPgL1Al9oLFwWanQqo52q3iFirsXloMXcPKxsPQB6lnWZbq3', '', '2017-05-19 23:53:18', '2017-05-21 06:11:57'),
(39, 'masruba', 'masrubaakterjan25@gmail.com', '$2y$10$4q5WwXnXFkKfyAc3sLIrNuFpLVTWpWB8qAjbjN0.qJpaVaW.gUgJO', 'mas', 1, '2017-05-20 03:05:44', NULL, '', '2017-05-20 01:17:48', '2017-05-20 03:05:44'),
(40, 'imran', 'imran@gmail.com', '$2y$10$ZygFbMNwT2fFQ9et7tkTXO8aYp2ssneDyvTLK0xp45eC7i7DSQL3G', '123456', 1, NULL, NULL, 'T0IIlHfoTutCCh74aTwy1Er5Uaap7R2DINm3zyRF', '2017-05-20 03:28:16', '2017-09-11 15:45:37'),
(41, 'sweet', 'abc@gmail.com', '$2y$10$TqDuIfksvY0TuK/AaYD7R.x9nIFjlJ7HEZrBLPy9l3ChetY5D7zhi', 'hdgysg', 1, NULL, NULL, 'e9cHQh0IYU99jG9XvRZCkRiYte66moNB85d0PUCR', '2017-05-21 13:01:27', '2017-09-11 15:45:38'),
(42, 'mamun', 'mamun@gmail.com', '$2y$10$FTvSrxvIcC4ZUY5zcCADW.ji/0RUMOFtcl4yJgbqskAaCdPHV.69O', 'mamun', 1, NULL, NULL, 'iA3odVVIQjqXbLlHD6sqBM1yqRDrKfrSeiqNznNp', '2017-05-23 03:51:38', '2017-09-11 15:45:39'),
(43, 'mamun', 'mamun1@gmail.com', '$2y$10$OW4NXTgBYE7FmcrzJ4mtP.KkDalciubwtLINBKG4knd/xxNQ7i1oK', 'mamun', 1, NULL, NULL, 'yJ9D05lFV47MxwDC0HhiDeeUl3vOXz2tA7ZC74Cl', '2017-05-23 03:52:07', '2017-09-11 15:45:43'),
(44, 'mamun2', 'mamun2@gmail.com', '$2y$10$oZBXMyx3k/EsWXt9CmuS6uvBhy4iQ5tklEbigdSy7BO6aZ69N2o.u', 'mamun2', 1, NULL, NULL, 'qWxmnsntuhnx2P1K15fVw3LbCzCJLapciWpvJCwa', '2017-05-23 03:52:49', '2017-09-11 15:45:43'),
(45, 'idbmamun', 'idbmamun@gmail.com', '$2y$10$O70s2jFdFGp1/uvTmVYM/.COcUgQwY9IUUloZfhICijPKpR6MmO6K', 'idbmamun', 1, NULL, NULL, 'eLhAejDtJQbbMybG6XJLpxNswsH7ini0ZfZyt7lg', '2017-05-23 03:53:34', '2017-09-11 15:45:42'),
(46, 'asamamun.web', 'asamamun.web@gmail.com', '$2y$10$kP4WOPCB2oFdq3HtFRrmL.qIFtYob3HbOva8NNAbTDdEgs7WZlGHW', 'asamamun', 1, NULL, NULL, 'OYmLJ5QJl2XLWMH1mRgdaoQzPuqucVGUGFYLMn1Q', '2017-05-23 03:54:46', '2017-09-11 15:45:42');

--
-- Triggers `employers`
--
DELIMITER $$
CREATE TRIGGER `employer_default_profile5` AFTER INSERT ON `employers` FOR EACH ROW BEGIN 
            INSERT INTO empprofiles (`employer_id`) VALUES (NEW.id); 
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `employer_password_resets`
--

CREATE TABLE `employer_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `empprofiles`
--

CREATE TABLE `empprofiles` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(11) NOT NULL,
  `companyname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT 'company',
  `altcompanyname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactperson` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industrytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT '2',
  `division` int(11) DEFAULT '1',
  `district` int(11) DEFAULT '1',
  `area` int(11) DEFAULT '1',
  `billingaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactPhone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ContactEmail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `websiteaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companylogo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `empprofiles`
--

INSERT INTO `empprofiles` (`id`, `employer_id`, `companyname`, `altcompanyname`, `contactperson`, `designation`, `industrytype`, `companyaddress`, `country`, `division`, `district`, `area`, `billingaddress`, `ContactPhone`, `ContactEmail`, `websiteaddress`, `companylogo`, `created_at`, `updated_at`) VALUES
(4, 4, 'Company', 'Alternative Company Name', 'Contact Person', 'Contact Person', NULL, 'ff', 2, 1, 1, 1, NULL, NULL, NULL, NULL, '2267e55cc5ad248bb5585dc2cb33ba8a.png', NULL, '2017-05-23 03:57:40'),
(5, 5, 'IT Solution Ltd.', NULL, 'imran hossain', 'CEO', 'Advertising Ageny,Indenting', 'Mirpur-10', 2, 1, 1, 1, 'mirpur-10', '01750042986', 'imran@gmail.com', 'imran.wpsi.com', 'ef869c9ac967ef17c5c1c4d9f00aeffa.png', NULL, '2017-08-19 13:05:26'),
(35, 35, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(36, 36, 'sweet & company', 'webexpart.website', 'asmaul hasnat', 'manager, human resource division', 'Advertising Ageny,Indenting,Indenting Firm,Indenting Firm', '366/1,Rajshahi', 2, 2, 76, 2, '366/1,Rajshahi', '01750042986', 'imran@gmail.com', 'imran.wpsi.com', '61ea34c038a27126940eeb7bd3b8e8b7.png', NULL, '2017-05-19 23:51:48'),
(37, 37, 'hasnat agency', 'webexpart.website', 'asmaul hasnat', 'manager, human resource division', 'Advertising Ageny,Indenting,Indenting Firm', '366/1,chapai', 2, 2, 77, 2, '366/1,chapai', '01750042986', 'ahsweet92@gmail.com', 'asmaulhasnat.com', '25048bf650da9735aee78c233bcee7d4.png', NULL, '2017-05-20 00:01:38'),
(38, 38, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(39, 39, 'masru &co', 'masru  group', 'masruba', 'ceo', NULL, '42/1,Rajshahi,new market', 2, 2, 82, 3, '42/1,Rajshahi,new market', '01750042986', 'masrubaakterjan25@gmail.com', 'www.masru.bd.com', 'dbe903719b1005accad18d876f15a8de.png', NULL, '2017-05-20 01:21:29'),
(40, 40, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(41, 41, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(42, 42, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(43, 43, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(44, 44, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(45, 45, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(46, 46, 'company', NULL, NULL, NULL, NULL, NULL, 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `exam_titles`
--

CREATE TABLE `exam_titles` (
  `id` int(10) UNSIGNED NOT NULL,
  `levelofeducation_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `exam_titles`
--

INSERT INTO `exam_titles` (`id`, `levelofeducation_id`, `name`, `created_at`, `updated_at`) VALUES
(3, 1, 'MBA', '2017-04-30 03:08:57', '2017-04-30 03:08:57'),
(4, 1, 'MSS', '2017-04-30 03:09:13', '2017-04-30 03:09:13'),
(5, 1, 'MSc', '2017-04-30 03:09:32', '2017-04-30 03:09:32'),
(6, 1, 'MA', '2017-04-30 03:09:45', '2017-04-30 03:09:45'),
(7, 3, 'BBA', '2017-04-30 03:10:08', '2017-04-30 03:10:08'),
(8, 3, 'BSS', '2017-04-30 03:10:24', '2017-04-30 03:10:24'),
(9, 3, 'BSC', '2017-04-30 03:10:42', '2017-04-30 03:10:42'),
(10, 3, 'BA', '2017-04-30 03:10:51', '2017-04-30 03:10:51'),
(11, 4, 'HSC', '2017-04-30 03:20:26', '2017-04-30 03:20:26'),
(12, 5, 'SSC', '2017-04-30 03:20:40', '2017-04-30 03:20:40'),
(13, 6, 'JSC', '2017-04-30 03:20:52', '2017-04-30 03:20:52');

-- --------------------------------------------------------

--
-- Table structure for table `extraactivities`
--

CREATE TABLE `extraactivities` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED DEFAULT NULL,
  `extracaruculamname` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `details` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `extraactivities`
--

INSERT INTO `extraactivities` (`id`, `jobseeker_id`, `extracaruculamname`, `details`, `created_at`, `updated_at`) VALUES
(1, 1, 'valothaka valo na', 'shuke', NULL, NULL),
(2, 1, 'anowar', 'anowar valo na', NULL, NULL),
(3, 8, NULL, NULL, NULL, NULL),
(4, 9, NULL, NULL, NULL, NULL),
(5, 10, NULL, NULL, NULL, NULL),
(6, 11, NULL, NULL, NULL, NULL),
(7, 12, NULL, NULL, NULL, NULL),
(8, 13, NULL, NULL, NULL, NULL),
(9, 14, NULL, NULL, NULL, NULL),
(10, 15, NULL, NULL, NULL, NULL),
(11, 16, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `employer_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `jobseeker_id`, `employer_id`, `created_at`, `updated_at`) VALUES
(2, 14, 4, '2017-05-21 12:45:49', '2017-05-21 12:45:49'),
(3, 16, 37, '2017-05-29 13:59:22', '2017-05-29 13:59:22');

-- --------------------------------------------------------

--
-- Table structure for table `frontpagethemes`
--

CREATE TABLE `frontpagethemes` (
  `id` int(100) NOT NULL,
  `pagename` varchar(200) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `frontpagethemes`
--

INSERT INTO `frontpagethemes` (`id`, `pagename`, `status`, `created_at`, `updated_at`) VALUES
(2, 'newblue', 0, '2017-05-14 20:13:48', '2017-05-22 09:42:23'),
(3, 'newblue', 0, '2017-05-14 20:14:04', '2017-05-14 20:14:04'),
(4, 'default', 0, '2017-05-18 03:25:59', '2017-05-18 03:25:59');

-- --------------------------------------------------------

--
-- Table structure for table `groupoormajors`
--

CREATE TABLE `groupoormajors` (
  `id` int(10) UNSIGNED NOT NULL,
  `levelofeducation_id` int(10) UNSIGNED NOT NULL,
  `exam_title_id` int(10) UNSIGNED NOT NULL,
  `groupname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groupoormajors`
--

INSERT INTO `groupoormajors` (`id`, `levelofeducation_id`, `exam_title_id`, `groupname`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 'Accounting', '2017-04-30 03:11:25', '2017-04-30 03:15:35'),
(2, 1, 3, 'Finance and Banking', '2017-04-30 03:11:53', '2017-04-30 03:11:53'),
(3, 1, 3, 'Marketing', '2017-04-30 03:12:14', '2017-04-30 03:12:14'),
(4, 1, 3, 'Management', '2017-04-30 03:12:36', '2017-04-30 03:12:36'),
(5, 3, 7, 'Accounting', '2017-04-30 03:15:44', '2017-04-30 03:15:44'),
(6, 3, 7, 'Finance and Banking', '2017-04-30 03:16:22', '2017-04-30 03:16:22'),
(7, 3, 7, 'Marketing', '2017-04-30 03:16:43', '2017-04-30 03:16:43'),
(8, 3, 7, 'Management', '2017-04-30 03:17:12', '2017-04-30 03:17:12'),
(9, 4, 11, 'Science', '2017-04-30 03:21:36', '2017-04-30 03:21:36'),
(10, 4, 11, 'Arts', '2017-04-30 03:22:09', '2017-04-30 03:22:09'),
(11, 4, 11, 'Business Studies', '2017-04-30 03:22:32', '2017-04-30 03:22:32'),
(12, 5, 12, 'Science', '2017-04-30 03:22:52', '2017-04-30 03:22:52'),
(13, 5, 12, 'Arts', '2017-04-30 03:23:06', '2017-04-30 03:23:06'),
(14, 5, 12, 'Business Studies', '2017-04-30 03:23:21', '2017-04-30 03:23:21'),
(15, 6, 13, 'General', '2017-04-30 03:23:46', '2017-04-30 03:23:46'),
(16, 3, 10, 'History', '2017-05-04 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `guest_support`
--

CREATE TABLE `guest_support` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(150) NOT NULL,
  `message` text NOT NULL,
  `ticket` varchar(100) NOT NULL,
  `read_status` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `guest_support`
--

INSERT INTO `guest_support` (`id`, `name`, `email`, `subject`, `message`, `ticket`, `read_status`, `created_at`, `updated_at`) VALUES
(1, 'ssssss', 's@d.c', 'service', 'sssssssssss asssssss asssss', 'guest2166', 0, NULL, NULL),
(2, 'fdsfs', 'fdsfds@gmail.com', 'suggestions', 'dsfdsfsd', 'guest67954', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `industrytypes`
--

CREATE TABLE `industrytypes` (
  `id` int(10) UNSIGNED NOT NULL,
  `industrytypename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `industrytypes`
--

INSERT INTO `industrytypes` (`id`, `industrytypename`, `created_at`, `updated_at`) VALUES
(4, 'NGO', '2017-05-04 14:45:14', '2017-05-04 14:45:14'),
(5, 'Garments', '2017-05-05 19:13:36', '2017-05-05 19:13:36'),
(6, 'Advertising', '2017-05-04 08:45:14', '2017-05-04 08:45:14'),
(7, 'Energy', '2017-05-05 13:13:36', '2017-05-05 13:13:36'),
(8, 'Entertainment & Recreation', '2017-05-05 13:13:36', '2017-05-05 13:13:36'),
(9, 'Financial Services', '2017-05-05 13:13:36', '2017-05-05 13:13:36'),
(10, 'Health', '2017-05-05 13:13:36', '2017-05-05 13:13:36'),
(11, 'Manufacturing', '2017-05-05 13:13:36', '2017-05-05 13:13:36'),
(12, 'Retail', '2017-05-05 13:13:36', '2017-05-05 13:13:36'),
(13, 'Technology', '2017-05-05 13:13:36', '2017-05-05 13:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `inspectors`
--

CREATE TABLE `inspectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `online_status` datetime NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inspectors`
--

INSERT INTO `inspectors` (`id`, `name`, `email`, `password`, `online_status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'imran', 'imran@gmail.com', '$2y$10$nrWmG4eLP0C86RzpHcZnleDY8dU.hS3D7MtRScTcGy9h36j2EVMvW', '0000-00-00 00:00:00', 'lwH3MudrT7UPH7ASZv9hCGdKGlZSQJ6D2rtb2Nmoud416tm2cgacQvOhrZ1J', '2017-05-04 19:59:22', '2017-05-04 19:59:22'),
(2, 'MD ANWAR JAHID', 'ajr.jahid@gmail.com', '$2y$10$Rrlc.CCY4QizPLQrXJLMmepm/cH80nRZjUM3B43EQKsbTLmaBcCIK', '0000-00-00 00:00:00', '2BFLp3VLXQOVXA2oksQRIXzBZsadxWtr9T6HFeRuCnHzoKQ8hnHOm3zk0nE2', '2017-05-05 08:55:33', '2017-05-05 08:55:33');

-- --------------------------------------------------------

--
-- Table structure for table `inspector_password_resets`
--

CREATE TABLE `inspector_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(10) UNSIGNED DEFAULT NULL,
  `catagory_id` int(10) UNSIGNED DEFAULT NULL,
  `industrytype_id` int(10) UNSIGNED DEFAULT NULL,
  `division_id` int(10) UNSIGNED DEFAULT NULL,
  `district_id` int(10) UNSIGNED DEFAULT NULL,
  `agerange` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobtype` enum('full-time','part-time','contactual') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `joblevel` enum('Entry','Mid','Expert') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `educational_qualification` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_responsibilities` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_experiences_year` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `job_experiences_field` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `salaryrange` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobtitle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `vacancies` int(11) DEFAULT NULL,
  `instruction` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `deadline` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactperson` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `published` int(11) DEFAULT '0',
  `delete_status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `catagory_id`, `industrytype_id`, `division_id`, `district_id`, `agerange`, `jobtype`, `joblevel`, `educational_qualification`, `job_responsibilities`, `job_experiences_year`, `job_experiences_field`, `salaryrange`, `jobtitle`, `vacancies`, `instruction`, `email`, `deadline`, `contactperson`, `designation`, `published`, `delete_status`, `created_at`, `updated_at`) VALUES
(7, 5, 25, 4, 2, 78, '18 -30', 'full-time', 'Entry', 'graduation in any field', 'javascript, jquery , php', '1', 'javascript', '৳20000 -৳ 50622', 'JavaScript Expert', 13, 'To maintain and grow food &amp; beverage sales as well as Conference, Catering services.To develop an effective sales strategy to attract new &amp; additional catering sales, in', 'imranhossain3020@yahoo.com', '05/31/2017', 'imran hossain', 'project manager', 1, 0, '2017-05-18 04:14:55', '2017-05-18 04:14:55'),
(8, 5, 25, 4, 1, 3, '18 -29', 'full-time', 'Mid', 'Bachelor from any reported university on relevant subject.', 'To maintain and grow food & beverage sales as well as Conference, Catering services.\r\nTo develop an effective sales strategy to attract new & additional catering sales, in conjunction with the sales team\r\nTo create and prepare banqueting proposals for potential customers, ensuring that all likely additional costs relating to the event have been assessed accurately and communicated', '5', 'php', '৳20000 -৳ 72458', 'PHP Expert', 10, '5 to 7 year(s)\r\nThe applicants should have experience in the following area(s):\r\nCatering\r\nThe applicants should have experience in the following business area(s):\r\nHotel', 'ajr.jahid@gmail.com', '05/31/2017', 'Anwar jahid', 'Designation', 1, 0, '2017-05-18 04:18:10', '2017-05-18 04:18:10'),
(9, 5, 12, 4, 1, 1, '18 -31', 'full-time', 'Expert', 'Bachelor from any reported university on relevant subject.', 'Efficiently respond to all customer enquires in a polite and timely manner\r\nWork closely and effectively with the Team, in order to ensure that all catering contracts are delivered to a high standard\r\nCreate and prepare accurate catering proposals for potential customers, ensuring that the catering offer matches the profile of the event in terms of product selection and budget', '4', 'finance & banking', '৳20000 -৳ 87935', 'Sonali Bank Manager', 10, '5 to 7 year(s)\r\nThe applicants should have experience in the following area(s):\r\nCatering\r\nThe applicants should have experience in the following business area(s):\r\nHotel', 'ehumaonkabir@yahoo.com', '05/31/2017', '01684125412', 'GM', 0, 0, '2017-05-18 04:21:05', '2017-05-18 04:21:05'),
(10, 5, 21, 4, 1, 1, '18 -33', 'full-time', 'Mid', 'Educational Qualification', 'Educational Qualification', '15', 'web designer', '৳20000 -৳ 38020', 'Web developer', 15, 'Apply Instruction(s)', 'babu@gmail.com', '05/18/2017', 'ddddd', 'aaaa', 0, 0, '2017-05-18 06:29:05', '2017-05-18 06:29:05'),
(11, 5, 25, 4, 1, 1, '18 -27', 'full-time', 'Entry', 'Educational Qualification', 'Educational Qualification', '15', 'web designer', '৳20000 -৳ 36546', 'job title', 12, 'Educational Qualification', 'babu@gmail.com', '05/31/2017', 'ddddd', 'aaaa', 1, 0, '2017-05-18 07:12:06', '2017-05-18 07:12:06'),
(12, 5, 25, 5, 1, 1, '18 -29', 'full-time', 'Entry', 'http://127.0.0.1:8000/jobseeker/portofolio/10http://127.0.0.1:8000/jobseeker/portofolio/10', 'http://127.0.0.1:8000/jobseeker/portofolio/10', '15', 'web designer', '৳20000 -৳ 33965', 'web developer', 12, 'http://127.0.0.1:8000/jobseeker/portofolio/10', 'babu@gmail.com', '05/31/2017', 'ddddd', 'aaaa', 1, 0, '2017-05-18 08:00:23', '2017-05-18 08:00:23'),
(13, 36, 27, 13, 1, 112, '18 -35', 'part-time', 'Mid', 'graduation in any disipline', 'work in multi sector in developing process.', '2', 'php,laravel,html ,css', '৳28254 -৳ 42499', 'laravel expart', 10, 'apply  on online', 'afruz23@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-19 23:08:26', '2017-05-19 23:08:26'),
(14, 36, 15, 5, 1, 110, NULL, 'contactual', NULL, 'diploma in computer education', 'work at least 8 hours  in 6 days in a week.\r\nemployee must have a nice in behave.', NULL, NULL, '৳9086 -৳ 23175', 'Data entry oprator', 100, 'apply on online', 'afruz23@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-19 23:14:46', '2017-05-19 23:14:46'),
(15, 36, 26, 6, 2, 78, '30 -40', 'contactual', 'Expert', 'M.B.A', 'should be hard working and dynamic in decision making', '6', 'financial advisor', '৳29194 -৳ 100161', 'financial analyst', 2, 'drop cv on our email address', 'afruz23@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-19 23:20:05', '2017-05-19 23:20:05'),
(16, 36, 26, 11, 2, 76, '30 -50', 'full-time', 'Expert', 'CA', 'should be a complete person in problem solving attitude', '5', 'accountency', '৳100640 -৳ 200000', 'Accounts officer', 1, 'drop cv in our mail address', 'afruz23@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-19 23:26:03', '2017-05-19 23:26:03'),
(17, 37, 29, 7, 3, 135, '21 -40', 'contactual', 'Expert', 'post graduate in public administration', 'making decision in unique lavel', '6', 'administrative', '৳156534 -৳ 200000', 'chief administrator', 1, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:06:10', '2017-05-20 00:06:10'),
(18, 37, 14, 8, 3, 133, '19 -30', 'full-time', 'Mid', 'Masters in any desiplane', 'good knowledge in customer motivation', '2', 'marketing', '৳20000 -৳ 28067', 'Marketing executive', 100, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:12:04', '2017-05-20 00:12:04'),
(19, 37, 31, 6, 4, 102, '21 -30', 'full-time', 'Mid', 'graduate in any discipline', 'good in communication', '1', 'communication', '৳20000 -৳ 42403', 'customer care', 60, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:21:17', '2017-05-20 00:21:17'),
(20, 37, 16, 13, 4, 103, '20 -36', 'contactual', 'Expert', 'M.sc in cse', 'good in programing', '2', 'php,laravel,html ,css', '৳121883 -৳ 200000', 'Assistant eng', 2, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:25:15', '2017-05-20 00:25:15'),
(21, 37, 18, 6, 4, 103, '27 -40', 'contactual', 'Expert', 'diploma in diplomacy', 'good in teaching', '5', 'teaching', '৳98854 -৳ 200000', 'assistant trainer', 3, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:28:06', '2017-05-20 00:28:06'),
(22, 37, 19, 11, 5, 123, '26 -37', 'contactual', 'Expert', 'MBA', 'good in supply chain management', '5', 'production', '৳55844 -৳ 100120', 'production officer', 10, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:38:20', '2017-05-20 00:38:20'),
(23, 37, 20, 11, 5, 124, '28 -33', 'part-time', 'Mid', 'minimum diploma in graphics', 'good in design', '2', 'design', '৳55844 -৳ 106130', 'graphics designer', 10, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:42:08', '2017-05-20 00:42:08'),
(24, 37, 22, 11, 5, 125, '28 -38', 'part-time', 'Expert', 'ssc', 'hard working person', '2', 'production', '৳36424 -৳ 51656', 'chief operator', 10, 'contract our main branch', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:46:00', '2017-05-20 00:46:00'),
(25, 37, 23, 7, 6, 87, '21 -30', 'contactual', 'Mid', 'M.A in english', 'good in communication skill', '2', 'communication', '৳34520 -৳ 54977', 'guide', 5, 'contract our office', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:50:15', '2017-05-20 00:50:15'),
(26, 37, 28, 6, 6, 87, '22 -30', 'full-time', 'Entry', 'masters in nutrition', 'good in health care', '0', 'health', '৳35330 -৳ 54977', 'Heath advisor', 5, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 00:53:27', '2017-05-20 00:53:27'),
(27, 37, 21, 13, 7, 88, '19 -30', 'full-time', 'Entry', 'diploma in wpsi', 'good in creativity', '0', 'javascript', '৳21250 -৳ 36177', 'JavaScript expart', 5, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 01:00:41', '2017-05-20 01:00:41'),
(28, 37, 24, 13, 7, 88, '25 -30', 'full-time', 'Entry', 'BSc in electrical eng', 'creativeness', '1', 'electronics', '৳20000 -৳ 89627', 'electrical eng', 5, 'apply on online', 'ahsweet92@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 01:03:40', '2017-05-20 01:03:40'),
(29, 39, 34, 10, 8, 98, '19 -30', 'part-time', 'Entry', 'BA', 'good in motivation', '1', 'motivating', '৳20000 -৳ 41706', 'Medical assistence', 100, 'apply on online', 'masrubajan25@gmail.com', '06/30/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 01:24:31', '2017-05-20 01:24:31'),
(30, 39, 30, 12, 8, 95, '18 -29', 'full-time', 'Expert', 'Graduation in any discipline', 'Good in communication skill', '5', 'Marketing', '৳20000 -৳ 94050', 'Chief marketing executive officer', 50, 'online', 'masrubaakterjan25@gmail.com', '05/31/2017', 'asmaul hasnat', 'manager, human resource division', 1, 0, '2017-05-20 01:33:45', '2017-05-20 01:33:45'),
(31, 39, 30, 12, 2, 81, '18 -26', 'part-time', 'Mid', 'Graduation of any discipline', 'Good in marketing skill', '1', 'marketing', '৳20000 -৳ 30279', 'Sell marketing officer', 100, 'online', 'masrubaakterjan25@gmail.com', '05/29/2017', 'asmaul hasnat', 'human resource division', 1, 0, '2017-05-20 01:54:53', '2017-05-20 01:54:53'),
(32, 5, 25, 13, 1, 112, '18 -31', 'contactual', 'Mid', 'Graduation in any discipline', 'Expert in Graphic desing', '1', 'Graphic', '৳20000 -৳ 52470', 'Graphic Desiner', 10, 'online', 'imran@gmail.com', '05/31/2017', 'imran hossain', 'Graphic Desiner', 1, 0, '2017-05-20 03:48:30', '2017-05-20 03:48:30'),
(33, 5, 25, 13, 1, 113, '18 -28', 'full-time', 'Entry', 'jjEducational Qualificationjj', 'Educational Qualification', '10', 'php', '৳20000 -৳ 36219', 'it expert', 10, 'Apply Instruction(s)', 'ajr.jahid@gmail.com', '05/31/2017', 'ddddd', 'sdfsdf sdf sdfsdf', 1, 0, '2017-05-22 07:08:04', '2017-05-22 07:08:04'),
(34, 4, 25, 13, 1, 110, '18 -40', 'part-time', 'Mid', 'HSC', 'some desc', '2', 'PHP, Magento', '৳10952 -৳ 31049', 'Magento Developer', 3, 'sadfdsf', 'anwar@gmail.com', '05/31/2017', 'anwar', 'Developer', 1, 0, '2017-05-23 04:00:16', '2017-05-23 04:00:16'),
(35, 5, 12, 4, 1, 121, '18 -29', 'full-time', 'Entry', 'Kombo Expert', 'Kono kam nai', NULL, NULL, '৳5000 -৳ 27650', 'Sweet', 12, 'ddsd', 'voc1@projuktijobs.com', '08/31/2017', 'ddd', 'ddd', 0, 0, '2017-08-19 11:16:04', '2017-08-19 11:16:04');

-- --------------------------------------------------------

--
-- Table structure for table `jobseekers`
--

CREATE TABLE `jobseekers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifyToken` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `online_status` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `verifyToken`, `online_status`, `created_at`, `updated_at`) VALUES
(1, 'imran', 'imran@gmail.com', '$2y$10$DIRSRPqwvcoblsolQne6POqdgpfV8o1wJAzF04N.PbYwxnpOGwhrO', 1, NULL, NULL, '0000-00-00 00:00:00', '2017-04-28 23:45:19', '2017-05-04 20:53:30'),
(2, 'sweet vai', 'asm.sweet@gmail.com', '$2y$10$K4QV9ycSN2TWZzTWNxmHre8L4ulepYzbWhC6fVZNvaEU0X/73yjGm', 1, 'SguVQV0lkjIZc54y44P3bRaJVz9CrJlLKhIdRBETD2Mn7NRtJGV2fz9ARURb', NULL, '0000-00-00 00:00:00', '2017-05-01 21:48:29', '2017-05-04 20:53:25'),
(3, 'babu vai', 'babu@gmail.com', '$2y$10$BPal9VeVPSrmoHD8QdmJue1g4cFx6eYYCHPu7qhUA0HoO.0MqqiTO', 1, NULL, NULL, '0000-00-00 00:00:00', '2017-05-01 23:50:21', '2017-05-04 20:53:28'),
(8, 'imran', 'sadf@gamilc.omc', '$2y$10$25oT0U87XCY7valC8s8bwOLOq2M0P8GQvUV1cw2U9k4XZahtYQ6bq', 1, NULL, NULL, '0000-00-00 00:00:00', '2017-05-03 19:45:15', '2017-05-04 20:53:21'),
(9, 'emon', 'sadf@gamilc.omca', '$2y$10$SvGKQasULT1bNFAqZPqs3uqxKp3ozEHuok8MtRgh9V1emQjB8wbqS', 1, NULL, NULL, '0000-00-00 00:00:00', '2017-05-03 19:45:49', '2017-05-04 20:53:21'),
(10, 'MD ANWAR JAHID', 'ajr.jahid@gmail.com', '$2y$10$x0JPc0jR71BpDR0JDgsSweXV8XcXF419gVv9SJhZkec.e6M1EuQZ2', 1, 'SxqmH5dhrDCqr5ywiGxQjMEBIUwNLhTTswiffynPY4ugw9cbpCxNKecTA2TM', NULL, '2017-05-20 08:02:31', '2017-05-05 08:51:41', '2017-05-20 08:02:31'),
(11, 'asmaul hasnat', 'ahsweet92@gmail.com', '$2y$10$PADb/2qxdBRWN55AkYf4UuHWEfZc93MziyIr9DqTr8cQQjth71tZ2', 1, 'q7nC6kLbVabvbJZFW91xnMHhCUDaoZLs4o80OrEmSwr2rrBQxcSEosYVoVAe', NULL, '2017-05-19 20:35:52', '2017-05-19 20:35:06', '2017-05-19 20:35:52'),
(12, 'masruba', 'masrubajan25@gmail.com', '$2y$10$ofIFiuil/R10xKG.dTJK0OZs5/9rlfSYiXhWs2XfNJbQgKDNGrUhy', 1, NULL, NULL, '2017-05-19 20:53:18', '2017-05-19 20:37:09', '2017-05-19 20:53:18'),
(13, 'Iqbal Hossain', 'iqbal700049@gmail.com', '$2y$10$j35ioa.fwZe08lo5/XLFFuqYR02TUa8oUEPY5f/yGj4pZ1knBlJhy', 1, 'zioMelmjmaFglKthEgfRvKzbeRH8lcWZk2QVBgZlJObr9i2CQpaqxrtl4ao8', NULL, NULL, '2017-05-21 11:33:42', '2017-05-21 11:33:42'),
(14, 'admin', 'babuaaa@gmail.com', '$2y$10$aLymRncUeRhwEdpXl2SFMuAZbvgJlEurxgeC7G4MySKABiwIDGQtu', 1, NULL, NULL, NULL, '2017-05-21 12:14:02', '2017-05-21 12:14:02'),
(15, 'mamun', 'mamun@gmail.com', '$2y$10$Vw6W8wk4csP5BkKMPEKEk.xPdwimeGYUSfGtoPiV7SdPYb.H/NSUK', 1, 'FgmDcAS3zZqfTektdyoZne7HJct7g00FouwUYLZKLeq8qKiOE06dp8BcJ35e', NULL, NULL, '2017-05-23 03:39:13', '2017-05-23 03:39:13'),
(16, 'Jon Doe', 'jon@exam.com', '$2y$10$Zst9.fAxjeFKPUequdKoheDj24AsxbEkOif3h.wK3mQhvfA9Tjf2G', 1, '3DBodj5X1C2snrQKIBdsymmboQKbMb6ig6S3i0tYs3UMf4n1NzFh3F6zdg9i', NULL, NULL, '2017-05-29 13:57:24', '2017-05-29 13:57:24');

--
-- Triggers `jobseekers`
--
DELIMITER $$
CREATE TRIGGER `jobseekers_default_profile` AFTER INSERT ON `jobseekers` FOR EACH ROW BEGIN 
            INSERT INTO applicationinfos (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO personaldetails (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO academics (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO `js_references` (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO specializations (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO trainings (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO languagepros (`jobseeker_id`) VALUES (NEW.id); 
            INSERT INTO extraactivities (`jobseeker_id`) VALUES (NEW.id); 
            END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_contact_me`
--

CREATE TABLE `jobseeker_contact_me` (
  `id` int(11) NOT NULL,
  `jobseekerid` int(11) NOT NULL,
  `sendername` varchar(255) NOT NULL,
  `senderemail` varchar(255) NOT NULL,
  `Number` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jobseeker_password_resets`
--

CREATE TABLE `jobseeker_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobseeker_password_resets`
--

INSERT INTO `jobseeker_password_resets` (`email`, `token`, `created_at`) VALUES
('iqbal700049@gmail.com', '$2y$10$SKSCGIThhlK3ySjljVA7EOqLOwYNu/JsvnP63vr48lQh4dfamzphu', '2017-05-30 07:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `js_option`
--

CREATE TABLE `js_option` (
  `id` int(100) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `option_name` varchar(255) DEFAULT NULL,
  `option_value` text,
  `slug` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `js_option`
--

INSERT INTO `js_option` (`id`, `jobseeker_id`, `option_name`, `option_value`, `slug`, `created_at`, `updated_at`) VALUES
(1, 10, 'about me', 'this is me', NULL, NULL, NULL),
(2, 10, 'facebook', 'www.facebook.com', NULL, NULL, NULL),
(3, 10, 'twitter', 'www.twitter.com', NULL, NULL, NULL),
(4, 10, 'linkedin', 'www.linkedin.com', NULL, NULL, NULL),
(5, 10, 'google-plus', 'www.google.com', NULL, NULL, NULL),
(6, 10, 'The Brief Introduction Of Myself', 'Ut in ligula sollicitudin, auctor elit vel, mollis tortor. Nullam id magna in eros mollis porttitor vel et eros.Phasellus sed iaculis nibh, non suscipit tortor. Aenean ante massa, lobortis et dolor eget, sollicitudin luctus arcu. Donec eros tortor, ultrices in lectus quis, aliquet commodo lectus.\r\nPhasellus facilisis, est et tempus aliquet, odio purus pretium felis, sit amet imperdiet tortor ex vel purus.Nulla mattis venenatis rutrum. Nunc molestie elit tellus, id iaculis lectus feugiat id.', 'about_me', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `js_projects`
--

CREATE TABLE `js_projects` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `projictimage` varchar(50) DEFAULT NULL,
  `projecttitle` varchar(50) DEFAULT NULL,
  `projecturl` varchar(200) NOT NULL,
  `project_description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `js_projects`
--

INSERT INTO `js_projects` (`id`, `jobseeker_id`, `projictimage`, `projecttitle`, `projecturl`, `project_description`, `created_at`, `updated_at`) VALUES
(1, 10, '2004-2005', 'manager', '', 'working with live lob portal in west bengal', NULL, NULL),
(2, 10, '2006-2007', 'system analist', '', 'project annalist in whole development process.', NULL, NULL),
(3, 10, '2007-2008', 'general manager', '', 'hfjfjfj  jfha fh ah gf ffd ', NULL, NULL),
(4, 10, '2007-2008', 'general manager', '', 'hfjfjfj  jfha fh ah gf ffd ', NULL, NULL),
(5, 10, '2007-2008', 'general manager', '', 'jobseeker_id', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `js_references`
--

CREATE TABLE `js_references` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED DEFAULT NULL,
  `reference_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `organization` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disignation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `home_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `relation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `js_references`
--

INSERT INTO `js_references` (`id`, `jobseeker_id`, `reference_name`, `organization`, `disignation`, `address`, `office_phone`, `home_phone`, `mobile`, `email`, `relation`, `created_at`, `updated_at`) VALUES
(1, 2, 'anowar jahid', 'praxis', 'ceo', 'mirpur10', '0154545554', '4889888989', '46554444', 'jahid@gmail.com', 'brother', NULL, NULL),
(2, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 9, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 10, 'MD ANWAR JAHID', 'IDB_BISEW.com bla bla', NULL, 'Dhaka, Monipuripara, Farmgate , Dhaka', '1737956549', '1737956549', '1737956549', 'ajr.jahid@gmail.com', NULL, NULL, NULL),
(9, 10, 'MD ANWAR JAHID', 'IDB_BISEW.com bla bla', 'WEb developer', 'Dhaka, Monipuripara, Farmgate , Dhaka', '1737956549', '1737956549', '1737956549', 'ajr.jahid@gmail.com', 'Me', NULL, NULL),
(11, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 15, 'qwe', 'qwe', 'qwe', 'qwe', '54545', '454545', '4354545', 'idbbisew@idbbisew.com', 'Instructor', NULL, NULL),
(16, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `js_skill`
--

CREATE TABLE `js_skill` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `skill_name` varchar(50) DEFAULT NULL,
  `value` varchar(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `js_skill`
--

INSERT INTO `js_skill` (`id`, `jobseeker_id`, `skill_name`, `value`, `created_at`, `updated_at`) VALUES
(1, 10, 'php', '90', NULL, NULL),
(2, 10, 'laravel', '70', NULL, NULL),
(3, 10, 'jquery', '95', NULL, NULL),
(4, 10, 'html', '100', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `js_workexperience`
--

CREATE TABLE `js_workexperience` (
  `id` int(11) NOT NULL,
  `jobseeker_id` int(11) NOT NULL,
  `year` varchar(10) DEFAULT NULL,
  `position` varchar(50) DEFAULT NULL,
  `work_description` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `js_workexperience`
--

INSERT INTO `js_workexperience` (`id`, `jobseeker_id`, `year`, `position`, `work_description`, `created_at`, `updated_at`) VALUES
(1, 10, '2004-2005', 'manager', 'working with live lob portal in west bengal', NULL, NULL),
(2, 10, '2006-2007', 'system analist', 'project annalist in whole development process.', NULL, NULL),
(3, 10, '2007-2008', 'general manager', 'hfjfjfj  jfha fh ah gf ffd ', NULL, NULL),
(4, 10, '2007-2008', 'general manager', 'hfjfjfj  jfha fh ah gf ffd ', NULL, NULL),
(5, 10, '2007-2008', 'general manager', 'jobseeker_id', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `languagepros`
--

CREATE TABLE `languagepros` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED DEFAULT NULL,
  `jobseeker_language` enum('english','bangla','others') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_reading` enum('good','medium') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_writing` enum('good','medium') COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobseeker_speaking` enum('good','medium') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `languagepros`
--

INSERT INTO `languagepros` (`id`, `jobseeker_id`, `jobseeker_language`, `jobseeker_reading`, `jobseeker_writing`, `jobseeker_speaking`, `created_at`, `updated_at`) VALUES
(1, 1, 'english', 'good', 'good', 'good', NULL, NULL),
(2, 1, 'bangla', 'good', 'good', 'good', NULL, NULL),
(3, 8, 'english', 'good', 'good', 'good', NULL, NULL),
(4, 9, 'english', 'good', 'good', 'good', NULL, NULL),
(5, 10, 'english', 'good', 'good', 'good', NULL, NULL),
(6, 11, 'english', 'good', 'good', 'good', NULL, NULL),
(7, 12, 'english', 'good', 'good', 'good', NULL, NULL),
(8, 13, 'english', 'good', 'good', 'good', NULL, NULL),
(9, 14, 'english', 'good', 'good', 'good', NULL, NULL),
(10, 15, 'english', 'good', 'good', 'good', NULL, NULL),
(11, 16, 'english', 'good', 'good', 'good', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `levelofeducations`
--

CREATE TABLE `levelofeducations` (
  `id` int(10) UNSIGNED NOT NULL,
  `edulavelname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `levelofeducations`
--

INSERT INTO `levelofeducations` (`id`, `edulavelname`, `created_at`, `updated_at`) VALUES
(1, 'Post graduate', '2017-04-29 04:31:53', '2017-04-30 03:06:11'),
(3, 'Graduate', '2017-04-29 04:48:13', '2017-04-30 03:06:28'),
(4, 'Higher Secondary', '2017-04-30 03:07:04', '2017-04-30 03:07:04'),
(5, 'Secondary', '2017-04-30 03:07:28', '2017-04-30 03:07:28'),
(6, 'Junior school certificate', '2017-04-30 03:08:08', '2017-04-30 03:08:08');

-- --------------------------------------------------------

--
-- Table structure for table `logdatas`
--

CREATE TABLE `logdatas` (
  `id` int(11) NOT NULL,
  `employer_id` int(11) DEFAULT NULL,
  `jobseeker_id` int(11) DEFAULT NULL,
  `guest_ip` varchar(200) DEFAULT NULL,
  `links` varchar(200) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logdatas`
--

INSERT INTO `logdatas` (`id`, `employer_id`, `jobseeker_id`, `guest_ip`, `links`, `created_at`, `updated_at`) VALUES
(119, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer', '2017-05-19 22:59:26', NULL),
(120, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 22:59:26', NULL),
(121, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 22:59:36', NULL),
(122, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 22:59:36', NULL),
(123, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 22:59:38', NULL),
(124, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 22:59:43', NULL),
(125, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 22:59:45', NULL),
(126, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:00:31', NULL),
(127, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:00:33', NULL),
(128, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:00:49', NULL),
(129, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:00:50', NULL),
(130, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:00:52', NULL),
(131, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:00:53', NULL),
(132, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:01:02', NULL),
(133, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-19 23:08:26', NULL),
(134, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:08:26', NULL),
(135, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-19 23:08:31', NULL),
(136, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:09:35', NULL),
(137, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:09:37', NULL),
(138, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:09:40', NULL),
(139, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-19 23:14:46', NULL),
(140, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:14:46', NULL),
(141, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:14:59', NULL),
(142, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-19 23:20:05', NULL),
(143, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:20:05', NULL),
(144, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:20:37', NULL),
(145, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-19 23:26:03', NULL),
(146, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:26:03', NULL),
(147, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:26:08', NULL),
(148, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:26:11', NULL),
(149, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:30:55', NULL),
(150, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:30:56', NULL),
(151, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:31:05', NULL),
(152, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:31:05', NULL),
(153, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:33:12', NULL),
(154, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:33:13', NULL),
(155, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:33:16', NULL),
(156, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:33:17', NULL),
(157, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:33:19', NULL),
(158, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:33:20', NULL),
(159, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:33:21', NULL),
(160, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:33:22', NULL),
(161, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:33:34', NULL),
(162, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:33:35', NULL),
(163, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:33:37', NULL),
(164, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:33:38', NULL),
(165, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:34:53', NULL),
(166, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:34:54', NULL),
(167, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:35:14', NULL),
(168, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:35:15', NULL),
(169, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:35:40', NULL),
(170, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:35:41', NULL),
(171, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:38:15', NULL),
(172, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-19 23:41:01', NULL),
(173, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-19 23:41:02', NULL),
(174, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:45:07', NULL),
(175, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:45:09', NULL),
(176, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:46:22', NULL),
(177, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:46:23', NULL),
(178, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:46:23', NULL),
(179, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:46:46', NULL),
(180, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:46:46', NULL),
(181, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:46:46', NULL),
(182, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:49:23', NULL),
(183, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:49:23', NULL),
(184, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:49:24', NULL),
(185, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:51:55', NULL),
(186, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/36', '2017-05-19 23:51:57', NULL),
(187, 36, NULL, NULL, 'http://127.0.0.1:8000/employer/logout', '2017-05-19 23:52:48', NULL),
(188, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:52:48', NULL),
(189, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/register', '2017-05-19 23:52:56', NULL),
(190, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/register', '2017-05-19 23:53:17', NULL),
(191, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:53:22', NULL),
(192, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:53:56', NULL),
(193, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:53:56', NULL),
(194, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:54:06', NULL),
(195, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:54:06', NULL),
(196, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:56:41', NULL),
(197, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-19 23:56:58', NULL),
(198, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:56:58', NULL),
(199, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:57:01', NULL),
(200, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:59:14', NULL),
(201, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:59:14', NULL),
(202, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:59:14', NULL),
(203, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:59:58', NULL),
(204, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:59:59', NULL),
(205, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-19 23:59:59', NULL),
(206, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-20 00:00:24', NULL),
(207, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-20 00:00:24', NULL),
(208, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-20 00:00:24', NULL),
(209, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:01:43', NULL),
(210, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 00:01:45', NULL),
(211, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:01:47', NULL),
(212, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:06:10', NULL),
(213, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:06:10', NULL),
(214, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 00:06:14', NULL),
(215, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:06:24', NULL),
(216, 37, NULL, NULL, 'http://127.0.0.1:8000/employer', '2017-05-20 00:08:01', NULL),
(217, 37, NULL, NULL, 'http://127.0.0.1:8000/employer', '2017-05-20 00:08:02', NULL),
(218, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:08:09', NULL),
(219, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 00:08:10', NULL),
(220, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:08:12', NULL),
(221, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:12:04', NULL),
(222, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:12:04', NULL),
(223, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:17:25', NULL),
(224, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:21:17', NULL),
(225, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:21:17', NULL),
(226, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:22:12', NULL),
(227, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:25:14', NULL),
(228, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:25:15', NULL),
(229, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:25:26', NULL),
(230, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:28:06', NULL),
(231, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:28:06', NULL),
(232, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:30:41', NULL),
(233, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:35:09', NULL),
(234, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:35:09', NULL),
(235, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:35:09', NULL),
(236, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:35:09', NULL),
(237, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:35:16', NULL),
(238, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:35:16', NULL),
(239, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:35:27', NULL),
(240, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-20 00:35:27', NULL),
(241, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-20 00:35:28', NULL),
(242, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:35:35', NULL),
(243, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 00:35:37', NULL),
(244, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:35:44', NULL),
(245, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:38:20', NULL),
(246, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:38:20', NULL),
(247, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:38:34', NULL),
(248, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:42:07', NULL),
(249, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:42:08', NULL),
(250, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:42:35', NULL),
(251, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:46:00', NULL),
(252, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:46:00', NULL),
(253, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:46:15', NULL),
(254, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 00:46:17', NULL),
(255, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:46:19', NULL),
(256, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:50:15', NULL),
(257, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:50:15', NULL),
(258, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:50:23', NULL),
(259, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:53:27', NULL),
(260, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:53:27', NULL),
(261, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:54:03', NULL),
(262, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 00:54:04', NULL),
(263, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:54:05', NULL),
(264, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 00:57:41', NULL),
(265, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:57:42', NULL),
(266, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:57:42', NULL),
(267, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:57:42', NULL),
(268, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:57:48', NULL),
(269, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:57:48', NULL),
(270, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:57:51', NULL),
(271, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:57:52', NULL),
(272, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 00:58:05', NULL),
(273, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-20 00:58:05', NULL),
(274, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-20 00:58:06', NULL),
(275, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:58:08', NULL),
(276, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 00:58:09', NULL),
(277, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 00:58:19', NULL),
(278, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 01:00:41', NULL),
(279, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:00:41', NULL),
(280, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:00:47', NULL),
(281, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:00:49', NULL),
(282, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:00:55', NULL),
(283, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:00:56', NULL),
(284, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:00:59', NULL),
(285, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 01:03:40', NULL),
(286, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:03:40', NULL),
(287, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:12:49', NULL),
(288, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:12:50', NULL),
(289, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:13:03', NULL),
(290, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:13:04', NULL),
(291, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/logout', '2017-05-20 01:13:21', NULL),
(292, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 01:13:21', NULL),
(293, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/register', '2017-05-20 01:13:25', NULL),
(294, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/register', '2017-05-20 01:13:58', NULL),
(295, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 01:14:03', NULL),
(296, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/register', '2017-05-20 01:17:20', NULL),
(297, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/register', '2017-05-20 01:17:47', NULL),
(298, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 01:17:52', NULL),
(299, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 01:17:58', NULL),
(300, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 01:18:06', NULL),
(301, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:18:06', NULL),
(302, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:18:09', NULL),
(303, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:20:15', NULL),
(304, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:20:15', NULL),
(305, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:20:16', NULL),
(306, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:21:07', NULL),
(307, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:21:08', NULL),
(308, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:21:08', NULL),
(309, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:21:34', NULL),
(310, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:21:34', NULL),
(311, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:21:55', NULL),
(312, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:21:56', NULL),
(313, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:21:59', NULL),
(314, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 01:24:31', NULL),
(315, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:24:32', NULL),
(316, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:29:23', NULL),
(317, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:29:24', NULL),
(318, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:29:30', NULL),
(319, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:29:31', NULL),
(320, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:29:33', NULL),
(321, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:30:05', NULL),
(322, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:30:06', NULL),
(323, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:30:10', NULL),
(324, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 01:33:45', NULL),
(325, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:33:45', NULL),
(326, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:33:55', NULL),
(327, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 01:37:00', NULL),
(328, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 01:47:39', NULL),
(329, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:49:26', NULL),
(330, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 01:49:28', NULL),
(331, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:49:31', NULL),
(332, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:49:43', NULL),
(333, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/postjob', '2017-05-20 01:54:53', NULL),
(334, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 01:54:53', NULL),
(335, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:59:56', NULL),
(336, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 01:59:58', NULL),
(337, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:00:03', NULL),
(338, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:00:04', NULL),
(339, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 02:01:46', NULL),
(340, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/39', '2017-05-20 02:01:47', NULL),
(341, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:01:54', NULL),
(342, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:01:56', NULL),
(343, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:02:04', NULL),
(344, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:02:06', NULL),
(345, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:02:09', NULL),
(346, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:09:57', NULL),
(347, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:10:09', NULL),
(348, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:10:10', NULL),
(349, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:10:12', NULL),
(350, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:10:35', NULL),
(351, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:10:36', NULL),
(352, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:10:39', NULL),
(353, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:10:49', NULL),
(354, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:10:50', NULL),
(355, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:10:52', NULL),
(356, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:11:11', NULL),
(357, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:12:12', NULL),
(358, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:13:52', NULL),
(359, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:13:53', NULL),
(360, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:13:54', NULL),
(361, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:16:20', NULL),
(362, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:16:22', NULL),
(363, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:16:24', NULL),
(364, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:25:43', NULL),
(365, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:25:44', NULL),
(366, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:25:45', NULL),
(367, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:27:00', NULL),
(368, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:27:02', NULL),
(369, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:27:04', NULL),
(370, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:29:42', NULL),
(371, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:29:48', NULL),
(372, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:29:50', NULL),
(373, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:31:43', NULL),
(374, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:31:46', NULL),
(375, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:31:48', NULL),
(376, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:32:27', NULL),
(377, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:32:29', NULL),
(378, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:32:30', NULL),
(379, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:33:49', NULL),
(380, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:33:50', NULL),
(381, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:33:52', NULL),
(382, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:34:38', NULL),
(383, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:36:28', NULL),
(384, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:37:32', NULL),
(385, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/details', '2017-05-20 02:37:35', NULL),
(386, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:37:41', NULL),
(387, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:37:47', NULL),
(388, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:38:04', NULL),
(389, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:39:22', NULL),
(390, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:40:46', NULL),
(391, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:40:47', NULL),
(392, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:40:50', NULL),
(393, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/details', '2017-05-20 02:41:02', NULL),
(394, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:41:07', NULL),
(395, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:41:52', NULL),
(396, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:41:53', NULL),
(397, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:41:55', NULL),
(398, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:48:08', NULL),
(399, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:48:10', NULL),
(400, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:48:10', NULL),
(401, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:48:23', NULL),
(402, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:51:08', NULL),
(403, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:51:10', NULL),
(404, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:51:11', NULL),
(405, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:54:14', NULL),
(406, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:54:16', NULL),
(407, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:54:17', NULL),
(408, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 02:56:09', NULL),
(409, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 02:56:10', NULL),
(410, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:56:12', NULL),
(411, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 02:56:19', NULL),
(412, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 03:04:33', NULL),
(413, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/edit_jobs', '2017-05-20 03:04:56', NULL),
(414, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 03:05:32', NULL),
(415, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 03:05:33', NULL),
(416, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-20 03:05:43', NULL),
(417, 39, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-20 03:05:44', NULL),
(418, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 07:12:33', NULL),
(419, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-20 07:12:49', NULL),
(420, 5, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/5', '2017-05-20 07:12:49', NULL),
(421, 5, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/5', '2017-05-20 07:12:51', NULL),
(422, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker/login', '2017-05-20 08:02:29', NULL),
(423, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker', '2017-05-20 08:02:30', NULL),
(424, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker', '2017-05-20 08:02:31', NULL),
(425, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker/portofolio/10', '2017-05-20 08:02:55', NULL),
(426, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker/portofolio/10.jpeg', '2017-05-20 08:02:55', NULL),
(427, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker/portofolio/10.jpeg', '2017-05-20 08:02:56', NULL),
(428, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker/portofolio/10', '2017-05-20 08:03:40', NULL),
(429, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker/portofolio/10.jpeg', '2017-05-20 08:03:40', NULL),
(430, NULL, 10, NULL, 'http://127.0.0.1:8000/jobseeker/portofolio/10.jpeg', '2017-05-20 08:03:40', NULL),
(431, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:29:58', NULL),
(432, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:30:01', NULL),
(433, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:30:06', NULL),
(434, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:30:14', NULL),
(435, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:34:29', NULL),
(436, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:34:41', NULL),
(437, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:34:58', NULL),
(438, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:35:00', NULL),
(439, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:40:32', NULL),
(440, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:42:11', NULL),
(441, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:42:18', NULL),
(442, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:42:39', NULL),
(443, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:45:51', NULL),
(444, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:45:54', NULL),
(445, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:45:55', NULL),
(446, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:47:47', NULL),
(447, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:47:47', NULL),
(448, NULL, NULL, '127.0.0.1', 'http://127.0.0.1:8000/employer/login', '2017-05-21 03:47:53', NULL),
(449, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-21 03:47:54', NULL),
(450, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/profile/37', '2017-05-21 03:47:58', NULL),
(451, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/managejobs', '2017-05-21 05:00:37', NULL),
(452, 37, NULL, NULL, 'http://127.0.0.1:8000/employer/showjob', '2017-05-21 05:00:40', NULL),
(453, 37, NULL, NULL, 'http://127.0.0.1:8000/employer', '2017-05-21 06:11:36', NULL),
(454, 37, NULL, NULL, 'http://127.0.0.1:8000/employer', '2017-05-21 06:11:56', NULL),
(455, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-21 11:30:46', NULL),
(456, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 11:30:47', NULL),
(457, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-21 11:31:01', NULL),
(458, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 11:31:02', NULL),
(459, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-21 11:32:55', NULL),
(460, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-21 11:33:42', NULL),
(461, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 11:33:45', NULL),
(462, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 11:34:00', NULL),
(463, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-21 11:43:06', NULL),
(464, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 11:43:08', NULL),
(465, NULL, NULL, '43.224.116.19', 'http://www.bdtiger.win/database/public/jobseeker', '2017-05-21 12:03:16', NULL),
(466, NULL, NULL, '43.224.116.19', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:03:17', NULL),
(467, NULL, NULL, '43.224.116.19', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:03:33', NULL),
(468, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-21 12:06:26', NULL),
(469, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:06:27', NULL),
(470, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:06:43', NULL),
(471, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-21 12:09:48', NULL),
(472, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:09:48', NULL),
(473, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:11:47', NULL),
(474, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-21 12:11:59', NULL),
(475, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:13:20', NULL),
(476, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-21 12:13:23', NULL),
(477, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-21 12:13:24', NULL),
(478, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-21 12:13:30', NULL),
(479, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-21 12:13:30', NULL),
(480, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-21 12:13:50', NULL),
(481, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-21 12:13:51', NULL),
(482, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-21 12:14:02', NULL),
(483, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:14:03', NULL),
(484, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:14:17', NULL),
(485, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-21 12:15:05', NULL),
(486, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:15:06', NULL),
(487, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:15:16', NULL),
(488, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-21 12:16:20', NULL),
(489, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-21 12:16:22', NULL),
(490, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/logout', '2017-05-21 12:16:29', NULL),
(491, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-21 12:16:30', NULL),
(492, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-21 12:16:34', NULL),
(493, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/portofolio/10', '2017-05-21 12:18:26', NULL),
(494, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/portofolio/10.jpeg', '2017-05-21 12:18:28', NULL),
(495, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-21 12:19:03', NULL),
(496, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:19:04', NULL),
(497, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 12:19:28', NULL),
(498, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-05-21 12:58:20', NULL),
(499, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-05-21 12:58:26', NULL),
(500, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/newmessage', '2017-05-21 13:06:18', NULL),
(501, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/newmessage', '2017-05-21 13:06:21', NULL),
(502, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/sent', '2017-05-21 13:07:12', NULL),
(503, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/sent', '2017-05-21 13:07:16', NULL),
(504, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:21', NULL),
(505, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:27', NULL),
(506, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:32', NULL),
(507, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:33', NULL),
(508, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:37', NULL),
(509, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:38', NULL),
(510, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:42', NULL),
(511, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:43', NULL),
(512, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:47', NULL),
(513, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:48', NULL),
(514, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:52', NULL),
(515, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:53', NULL),
(516, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:57', NULL),
(517, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:07:58', NULL),
(518, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:02', NULL),
(519, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:02', NULL),
(520, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:08', NULL),
(521, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:11', NULL),
(522, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:14', NULL),
(523, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:16', NULL),
(524, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:18', NULL),
(525, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:19', NULL),
(526, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:22', NULL),
(527, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:23', NULL),
(528, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:27', NULL),
(529, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:28', NULL),
(530, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:32', NULL),
(531, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:33', NULL),
(532, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:37', NULL),
(533, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:38', NULL),
(534, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:42', NULL),
(535, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:44', NULL),
(536, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:47', NULL),
(537, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:48', NULL),
(538, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:52', NULL),
(539, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:08:54', NULL),
(540, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:02', NULL),
(541, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:03', NULL),
(542, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:07', NULL),
(543, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:08', NULL),
(544, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:12', NULL),
(545, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:13', NULL),
(546, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:17', NULL),
(547, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:17', NULL),
(548, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:22', NULL),
(549, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:22', NULL),
(550, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:27', NULL),
(551, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:32', NULL),
(552, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:33', NULL),
(553, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:37', NULL),
(554, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:38', NULL),
(555, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:42', NULL),
(556, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:43', NULL),
(557, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:47', NULL),
(558, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:48', NULL),
(559, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:52', NULL),
(560, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:09:54', NULL),
(561, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:07', NULL),
(562, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:11', NULL),
(563, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:14', NULL),
(564, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:16', NULL),
(565, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:19', NULL),
(566, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:21', NULL),
(567, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:22', NULL),
(568, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:23', NULL),
(569, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:24', NULL),
(570, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:24', NULL),
(571, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:25', NULL),
(572, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:27', NULL),
(573, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:28', NULL),
(574, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:32', NULL),
(575, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:34', NULL),
(576, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:37', NULL),
(577, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:39', NULL),
(578, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:42', NULL),
(579, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:43', NULL),
(580, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:47', NULL),
(581, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:49', NULL),
(582, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:52', NULL),
(583, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:53', NULL),
(584, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:57', NULL),
(585, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:10:58', NULL),
(586, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:02', NULL),
(587, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:03', NULL),
(588, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:07', NULL),
(589, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:08', NULL),
(590, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:12', NULL),
(591, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:13', NULL),
(592, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:17', NULL),
(593, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:18', NULL),
(594, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:22', NULL),
(595, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:23', NULL),
(596, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:27', NULL),
(597, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:28', NULL),
(598, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:32', NULL),
(599, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:33', NULL),
(600, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:37', NULL),
(601, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:38', NULL),
(602, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:42', NULL),
(603, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:44', NULL),
(604, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:47', NULL),
(605, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:49', NULL),
(606, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:52', NULL),
(607, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:11:54', NULL),
(608, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:02', NULL),
(609, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:03', NULL),
(610, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:07', NULL),
(611, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:08', NULL),
(612, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:12', NULL),
(613, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:12', NULL),
(614, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:17', NULL),
(615, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:17', NULL),
(616, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:22', NULL),
(617, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:23', NULL),
(618, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:27', NULL),
(619, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:28', NULL);
INSERT INTO `logdatas` (`id`, `employer_id`, `jobseeker_id`, `guest_ip`, `links`, `created_at`, `updated_at`) VALUES
(620, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:32', NULL),
(621, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:33', NULL),
(622, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:37', NULL),
(623, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:38', NULL),
(624, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:42', NULL),
(625, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:43', NULL),
(626, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:47', NULL),
(627, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:48', NULL),
(628, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:52', NULL),
(629, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:53', NULL),
(630, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:57', NULL),
(631, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:12:58', NULL),
(632, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:02', NULL),
(633, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:03', NULL),
(634, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:07', NULL),
(635, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:08', NULL),
(636, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:12', NULL),
(637, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:12', NULL),
(638, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:17', NULL),
(639, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:18', NULL),
(640, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:22', NULL),
(641, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:27', NULL),
(642, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:28', NULL),
(643, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:32', NULL),
(644, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:37', NULL),
(645, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:38', NULL),
(646, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:42', NULL),
(647, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:43', NULL),
(648, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:47', NULL),
(649, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/inbox', '2017-05-21 13:13:48', NULL),
(650, NULL, NULL, '168.235.201.222', 'http://bdtiger.win/database/public/jobseeker', '2017-05-21 14:55:06', NULL),
(651, NULL, NULL, '168.235.201.222', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 14:55:07', NULL),
(652, NULL, NULL, '168.235.201.222', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 14:55:17', NULL),
(653, NULL, NULL, '103.230.5.3', 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-05-21 16:57:33', NULL),
(654, NULL, NULL, '103.230.5.3', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 16:57:34', NULL),
(655, NULL, NULL, '103.230.5.3', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 16:57:43', NULL),
(656, NULL, NULL, '103.58.95.99', 'http://bdtiger.win/database/public/jobseeker/uloadingcv', '2017-05-21 17:30:58', NULL),
(657, NULL, NULL, '103.58.95.99', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-21 17:30:59', NULL),
(658, NULL, NULL, '123.49.2.106', 'http://www.bdtiger.win/database/public/jobseeker', '2017-05-22 04:54:58', NULL),
(659, NULL, NULL, '123.49.2.106', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-22 04:54:58', NULL),
(660, NULL, NULL, '123.49.2.106', 'http://www.bdtiger.win/database/public/employer', '2017-05-22 04:55:04', NULL),
(661, NULL, NULL, '123.49.2.106', 'http://www.bdtiger.win/database/public/employer/login', '2017-05-22 04:55:05', NULL),
(662, NULL, NULL, '123.49.2.106', 'http://www.bdtiger.win/database/public/employer/password/reset', '2017-05-22 04:55:07', NULL),
(663, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-05-22 07:03:45', NULL),
(664, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-22 07:03:45', NULL),
(665, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-22 07:03:49', NULL),
(666, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-05-22 07:04:48', NULL),
(667, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-22 07:04:49', NULL),
(668, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-22 07:04:51', NULL),
(669, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-22 07:04:56', NULL),
(670, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-22 07:04:59', NULL),
(671, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-22 07:05:43', NULL),
(672, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-05-22 07:05:47', NULL),
(673, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-22 07:06:17', NULL),
(674, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/postjob', '2017-05-22 07:08:03', NULL),
(675, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-22 07:08:04', NULL),
(676, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-22 07:10:39', NULL),
(677, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-22 07:10:39', NULL),
(678, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-22 07:10:51', NULL),
(679, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-22 07:10:52', NULL),
(680, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker', '2017-05-22 07:10:52', NULL),
(681, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker', '2017-05-22 07:10:54', NULL),
(682, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-05-22 07:11:01', NULL),
(683, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-05-22 07:11:03', NULL),
(684, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/alljobsshow/33', '2017-05-22 07:11:15', NULL),
(685, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/alljobsshow/33', '2017-05-22 07:11:16', NULL),
(686, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-22 07:11:23', NULL),
(687, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-05-22 07:11:24', NULL),
(688, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-05-22 07:11:25', NULL),
(689, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-22 07:11:32', NULL),
(690, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-05-22 07:11:36', NULL),
(691, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-22 07:11:49', NULL),
(692, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-22 07:11:52', NULL),
(693, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-05-22 07:12:54', NULL),
(694, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-05-22 07:12:59', NULL),
(695, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-22 09:39:52', NULL),
(696, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-22 09:39:52', NULL),
(697, NULL, NULL, '103.85.156.102', 'http://bdtiger.win/database/public/jobseeker', '2017-05-22 17:39:45', NULL),
(698, NULL, NULL, '103.85.156.102', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-22 17:39:46', NULL),
(699, NULL, NULL, '103.85.156.102', 'http://bdtiger.win/database/public/employer', '2017-05-22 17:39:55', NULL),
(700, NULL, NULL, '103.85.156.102', 'http://bdtiger.win/database/public/employer/login', '2017-05-22 17:39:55', NULL),
(701, NULL, NULL, '103.85.156.102', 'http://bdtiger.win/database/public/jobseeker/portofolio/10', '2017-05-22 17:41:14', NULL),
(702, NULL, NULL, '103.85.156.102', 'http://bdtiger.win/database/public/jobseeker/portofolio/10.jpeg', '2017-05-22 17:41:15', NULL),
(703, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-23 03:38:26', NULL),
(704, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 03:38:28', NULL),
(705, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-23 03:38:42', NULL),
(706, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-23 03:38:59', NULL),
(707, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-23 03:39:00', NULL),
(708, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-23 03:39:13', NULL),
(709, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 03:39:16', NULL),
(710, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 03:39:29', NULL),
(711, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-23 03:49:39', NULL),
(712, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer', '2017-05-23 03:50:52', NULL),
(713, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 03:50:54', NULL),
(714, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:51:00', NULL),
(715, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:51:38', NULL),
(716, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:52:07', NULL),
(717, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:52:25', NULL),
(718, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:52:27', NULL),
(719, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:52:48', NULL),
(720, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:53:02', NULL),
(721, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:53:34', NULL),
(722, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:54:08', NULL),
(723, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:54:46', NULL),
(724, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:54:59', NULL),
(725, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/register', '2017-05-23 03:55:14', NULL),
(726, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 03:55:18', NULL),
(727, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 03:55:29', NULL),
(728, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 03:55:30', NULL),
(729, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 03:56:34', NULL),
(730, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 03:56:49', NULL),
(731, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/4', '2017-05-23 03:56:51', NULL),
(732, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/4', '2017-05-23 03:57:02', NULL),
(733, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-23 03:57:44', NULL),
(734, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-05-23 03:57:52', NULL),
(735, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-23 03:58:02', NULL),
(736, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 03:58:03', NULL),
(737, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-23 03:58:07', NULL),
(738, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/postjob', '2017-05-23 04:00:16', NULL),
(739, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-23 04:00:17', NULL),
(740, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-05-23 04:04:14', NULL),
(741, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 04:04:15', NULL),
(742, 4, NULL, NULL, 'http://bdtiger.win/database/public/employer/logout', '2017-05-23 04:10:59', NULL),
(743, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 04:11:00', NULL),
(744, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer', '2017-05-23 08:07:44', NULL),
(745, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 08:07:45', NULL),
(746, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-23 08:07:52', NULL),
(747, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 08:07:53', NULL),
(748, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer', '2017-05-23 09:02:55', NULL),
(749, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 09:02:55', NULL),
(750, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 09:03:15', NULL),
(751, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 09:03:16', NULL),
(752, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 09:03:33', NULL),
(753, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 09:03:33', NULL),
(754, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/employer', '2017-05-23 17:01:05', NULL),
(755, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker', '2017-05-23 17:01:05', NULL),
(756, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 17:01:06', NULL),
(757, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/employer', '2017-05-23 17:05:59', NULL),
(758, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker', '2017-05-23 17:05:59', NULL),
(759, NULL, NULL, '103.205.134.58', 'http://bdtiger.win/database/public/employer', '2017-05-23 17:27:23', NULL),
(760, NULL, NULL, '103.205.134.58', 'http://bdtiger.win/database/public/employer/login', '2017-05-23 17:27:23', NULL),
(761, NULL, NULL, '103.205.134.58', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-23 17:30:02', NULL),
(762, NULL, NULL, '103.205.134.58', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 17:30:03', NULL),
(763, NULL, NULL, '103.58.92.14', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-23 18:08:05', NULL),
(764, NULL, NULL, '103.58.92.14', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 18:08:05', NULL),
(765, NULL, NULL, '103.58.92.14', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 18:08:16', NULL),
(766, NULL, NULL, '103.205.134.59', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 18:49:15', NULL),
(767, NULL, NULL, '103.58.92.14', 'http://bdtiger.win/database/public/jobseeker', '2017-05-23 19:28:17', NULL),
(768, NULL, NULL, '103.58.92.14', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-23 19:28:17', NULL),
(769, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-24 07:50:08', NULL),
(770, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-24 07:50:08', NULL),
(771, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker', '2017-05-25 03:22:20', NULL),
(772, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-25 03:22:21', NULL),
(773, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer', '2017-05-25 03:22:45', NULL),
(774, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-25 03:22:47', NULL),
(775, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer', '2017-05-25 03:22:52', NULL),
(776, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-25 03:22:55', NULL),
(777, NULL, NULL, '43.224.116.19', 'http://bdtiger.win/database/public/employer/login', '2017-05-25 03:24:11', NULL),
(778, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker', '2017-05-25 11:28:58', NULL),
(779, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-25 11:28:59', NULL),
(780, NULL, NULL, '168.235.201.222', 'http://bdtiger.win/database/public/jobseeker', '2017-05-27 16:13:57', NULL),
(781, NULL, NULL, '168.235.201.222', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-27 16:13:57', NULL),
(782, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker', '2017-05-28 19:25:10', NULL),
(783, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-28 19:25:10', NULL),
(784, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker', '2017-05-28 19:25:11', NULL),
(785, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-28 19:25:11', NULL),
(786, NULL, NULL, '103.89.244.42', 'http://bdtiger.win/database/public/employer', '2017-05-29 10:37:20', NULL),
(787, NULL, NULL, '103.89.244.42', 'http://bdtiger.win/database/public/employer/login', '2017-05-29 10:37:20', NULL),
(788, NULL, NULL, '103.89.244.42', 'http://bdtiger.win/database/public/jobseeker', '2017-05-29 10:37:28', NULL),
(789, NULL, NULL, '103.89.244.42', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-29 10:37:29', NULL),
(790, NULL, NULL, '103.78.54.50', 'http://bdtiger.win/database/public/jobseeker', '2017-05-29 13:42:33', NULL),
(791, NULL, NULL, '103.78.54.50', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-29 13:42:33', NULL),
(792, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-29 13:56:51', NULL),
(793, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-29 13:56:52', NULL),
(794, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-29 13:57:03', NULL),
(795, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-29 13:57:24', NULL),
(796, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-29 13:57:26', NULL),
(797, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-29 13:57:41', NULL),
(798, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker', '2017-05-29 14:02:29', NULL),
(799, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-29 14:02:30', NULL),
(800, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-05-29 14:02:40', NULL),
(801, NULL, NULL, '45.114.91.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-29 14:02:41', NULL),
(802, NULL, NULL, '103.58.92.14', 'http://www.bdtiger.win/database/public/jobseeker', '2017-05-30 04:04:56', NULL),
(803, NULL, NULL, '103.58.92.14', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:04:57', NULL),
(804, NULL, NULL, '103.58.92.14', 'http://www.bdtiger.win/database/public/jobseeker', '2017-05-30 04:05:13', NULL),
(805, NULL, NULL, '103.58.92.14', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:05:13', NULL),
(806, NULL, NULL, '103.58.92.14', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:05:49', NULL),
(807, NULL, NULL, '103.58.92.14', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:05:50', NULL),
(808, NULL, NULL, '103.58.92.14', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:06:10', NULL),
(809, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-05-30 04:08:31', NULL),
(810, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-05-30 04:08:35', NULL),
(811, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/managejobs', '2017-05-30 04:09:12', NULL),
(812, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/showjob', '2017-05-30 04:09:15', NULL),
(813, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/edit_jobs', '2017-05-30 04:09:19', NULL),
(814, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/details', '2017-05-30 04:09:31', NULL),
(815, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/details', '2017-05-30 04:09:38', NULL),
(816, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker', '2017-05-30 04:30:49', NULL),
(817, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:30:50', NULL),
(818, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:31:00', NULL),
(819, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:31:00', NULL),
(820, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 04:31:35', NULL),
(821, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-30 04:33:42', NULL),
(822, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-30 04:33:46', NULL),
(823, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-30 04:33:50', NULL),
(824, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-30 04:33:53', NULL),
(825, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-05-30 04:34:15', NULL),
(826, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-05-30 04:34:18', NULL),
(827, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-30 04:34:44', NULL),
(828, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-05-30 04:34:47', NULL),
(829, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-05-30 04:34:51', NULL),
(830, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-05-30 04:34:59', NULL),
(831, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-05-30 04:35:05', NULL),
(832, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-30 04:35:36', NULL),
(833, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-30 04:35:38', NULL),
(834, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-05-30 04:35:41', NULL),
(835, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-05-30 04:35:43', NULL),
(836, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker', '2017-05-30 06:59:00', NULL),
(837, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 06:59:01', NULL),
(838, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 06:59:15', NULL),
(839, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 06:59:15', NULL),
(840, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-30 06:59:19', NULL),
(841, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-30 06:59:52', NULL),
(842, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/register', '2017-05-30 06:59:52', NULL),
(843, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 07:00:07', NULL),
(844, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/password/reset', '2017-05-30 07:00:13', NULL),
(845, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/password/email', '2017-05-30 07:00:19', NULL),
(846, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/jobseeker/password/email', '2017-05-30 07:00:44', NULL),
(847, NULL, NULL, '119.30.38.111', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-30 08:42:14', NULL),
(848, NULL, NULL, '119.30.38.111', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 08:42:14', NULL),
(849, NULL, NULL, '103.91.144.2', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-05-30 09:02:49', NULL),
(850, NULL, NULL, '103.91.144.2', 'http://bdtiger.win/database/public/jobseeker/login', '2017-05-30 09:02:49', NULL),
(851, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/employer', '2017-05-31 05:40:59', NULL),
(852, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/employer/login', '2017-05-31 05:41:00', NULL),
(853, NULL, NULL, '103.77.62.4', 'http://bdtiger.win/database/public/employer/login', '2017-05-31 05:41:14', NULL),
(854, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-31 05:41:15', NULL),
(855, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-31 05:41:18', NULL),
(856, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-31 05:41:26', NULL),
(857, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-05-31 05:41:29', NULL),
(858, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-05-31 05:41:53', NULL),
(859, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-05-31 05:41:55', NULL),
(860, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-05-31 05:41:59', NULL),
(861, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-05-31 05:42:05', NULL),
(862, NULL, NULL, '45.118.63.223', 'http://bdtiger.win/database/public/employer/login', '2017-05-31 06:29:33', NULL),
(863, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-31 06:29:33', NULL),
(864, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-05-31 06:29:40', NULL),
(865, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker', '2017-06-02 05:48:29', NULL),
(866, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker/login', '2017-06-02 05:48:30', NULL),
(867, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-06-02 05:49:27', NULL),
(868, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/jobseeker/login', '2017-06-02 05:49:28', NULL),
(869, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/employer', '2017-06-02 05:51:58', NULL),
(870, NULL, NULL, '124.6.234.138', 'http://bdtiger.win/database/public/employer/login', '2017-06-02 05:51:59', NULL),
(871, NULL, NULL, '103.89.244.42', 'http://www.bdtiger.win/database/public/jobseeker/apply', '2017-06-10 14:05:53', NULL),
(872, NULL, NULL, '103.89.244.42', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-06-10 14:05:54', NULL),
(873, NULL, NULL, '103.89.244.42', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-06-10 14:06:30', NULL),
(874, NULL, NULL, '103.76.196.162', 'http://bdtiger.win/database/public/jobseeker', '2017-06-19 17:31:32', NULL),
(875, NULL, NULL, '103.76.196.162', 'http://bdtiger.win/database/public/jobseeker/login', '2017-06-19 17:31:33', NULL),
(876, NULL, NULL, '103.76.196.162', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-06-19 19:40:16', NULL),
(877, NULL, NULL, '103.76.196.162', 'http://bdtiger.win/database/public/jobseeker/login', '2017-06-19 19:40:17', NULL),
(878, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 07:20:47', NULL),
(879, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 07:22:45', NULL),
(880, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 07:28:56', NULL),
(881, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 07:29:25', NULL),
(882, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 07:29:47', NULL),
(883, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker', '2017-08-19 07:29:59', NULL),
(884, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 07:30:00', NULL),
(885, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 07:30:19', NULL),
(886, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 07:33:28', NULL),
(887, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 07:33:31', NULL),
(888, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 08:05:53', NULL),
(889, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 08:05:55', NULL),
(890, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-08-19 08:06:27', NULL),
(891, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-08-19 08:06:30', NULL),
(892, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:06:38', NULL),
(893, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:06:46', NULL),
(894, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:06:51', NULL),
(895, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:06:56', NULL),
(896, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:01', NULL),
(897, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:12', NULL),
(898, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:17', NULL),
(899, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:33', NULL),
(900, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:37', NULL),
(901, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:44', NULL),
(902, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:48', NULL),
(903, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-08-19 08:07:52', NULL),
(904, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:02', NULL),
(905, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:05', NULL),
(906, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:10', NULL),
(907, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:10', NULL),
(908, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:22', NULL),
(909, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:22', NULL),
(910, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:26', NULL),
(911, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:27', NULL),
(912, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:32', NULL),
(913, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:32', NULL),
(914, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:37', NULL),
(915, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:38', NULL),
(916, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:42', NULL),
(917, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:43', NULL),
(918, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:47', NULL),
(919, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:47', NULL),
(920, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:52', NULL),
(921, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:53', NULL),
(922, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:57', NULL),
(923, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:08:58', NULL),
(924, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:02', NULL),
(925, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:03', NULL),
(926, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:07', NULL),
(927, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:08', NULL),
(928, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:12', NULL),
(929, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:13', NULL),
(930, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:17', NULL),
(931, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:18', NULL),
(932, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:21', NULL),
(933, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:22', NULL),
(934, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:27', NULL),
(935, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:27', NULL),
(936, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:32', NULL),
(937, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:33', NULL),
(938, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:37', NULL),
(939, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:38', NULL),
(940, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:42', NULL),
(941, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:43', NULL),
(942, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:47', NULL),
(943, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:09:47', NULL),
(944, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:47', NULL),
(945, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:09:48', NULL),
(946, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:52', NULL),
(947, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:52', NULL),
(948, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:09:52', NULL),
(949, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:09:53', NULL),
(950, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:57', NULL),
(951, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:09:57', NULL),
(952, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:09:57', NULL),
(953, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:09:58', NULL),
(954, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:02', NULL),
(955, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:02', NULL),
(956, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:02', NULL),
(957, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:03', NULL),
(958, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:07', NULL),
(959, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:07', NULL),
(960, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:07', NULL),
(961, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:08', NULL),
(962, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:12', NULL),
(963, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:12', NULL),
(964, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:12', NULL),
(965, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:13', NULL),
(966, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:17', NULL),
(967, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:17', NULL),
(968, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:17', NULL),
(969, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:18', NULL),
(970, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:22', NULL),
(971, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:22', NULL),
(972, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:22', NULL),
(973, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:23', NULL),
(974, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:27', NULL),
(975, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:27', NULL),
(976, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:27', NULL),
(977, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:28', NULL),
(978, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:32', NULL),
(979, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:32', NULL),
(980, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:32', NULL),
(981, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:33', NULL),
(982, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:37', NULL),
(983, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:37', NULL),
(984, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:37', NULL),
(985, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:38', NULL),
(986, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:42', NULL),
(987, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:42', NULL),
(988, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:42', NULL),
(989, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:43', NULL),
(990, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:47', NULL),
(991, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:47', NULL),
(992, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:47', NULL),
(993, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:48', NULL),
(994, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:52', NULL),
(995, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:52', NULL),
(996, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:52', NULL),
(997, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:53', NULL),
(998, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:57', NULL),
(999, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:10:57', NULL),
(1000, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:57', NULL),
(1001, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:10:58', NULL),
(1002, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:02', NULL),
(1003, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:02', NULL),
(1004, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:02', NULL),
(1005, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:03', NULL),
(1006, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:07', NULL),
(1007, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:07', NULL),
(1008, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:07', NULL),
(1009, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:08', NULL),
(1010, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:12', NULL),
(1011, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:12', NULL),
(1012, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:12', NULL),
(1013, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:13', NULL),
(1014, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:17', NULL),
(1015, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:17', NULL),
(1016, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:17', NULL),
(1017, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:18', NULL),
(1018, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:22', NULL),
(1019, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:22', NULL),
(1020, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:22', NULL),
(1021, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:23', NULL),
(1022, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:27', NULL),
(1023, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:27', NULL),
(1024, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:27', NULL),
(1025, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:28', NULL),
(1026, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:32', NULL),
(1027, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:32', NULL),
(1028, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:32', NULL),
(1029, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:33', NULL),
(1030, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:37', NULL),
(1031, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:37', NULL),
(1032, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:37', NULL),
(1033, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:38', NULL),
(1034, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:42', NULL),
(1035, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:42', NULL),
(1036, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:42', NULL),
(1037, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:43', NULL),
(1038, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:47', NULL),
(1039, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:47', NULL),
(1040, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:48', NULL),
(1041, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:48', NULL),
(1042, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:52', NULL),
(1043, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:52', NULL),
(1044, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:52', NULL),
(1045, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:53', NULL),
(1046, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:57', NULL),
(1047, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:11:57', NULL),
(1048, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:58', NULL),
(1049, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:11:58', NULL),
(1050, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:02', NULL),
(1051, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:02', NULL),
(1052, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:02', NULL),
(1053, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:03', NULL),
(1054, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:07', NULL),
(1055, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:07', NULL),
(1056, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:07', NULL),
(1057, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:08', NULL),
(1058, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:12', NULL),
(1059, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:12', NULL),
(1060, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:12', NULL),
(1061, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:13', NULL),
(1062, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:17', NULL),
(1063, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:17', NULL);
INSERT INTO `logdatas` (`id`, `employer_id`, `jobseeker_id`, `guest_ip`, `links`, `created_at`, `updated_at`) VALUES
(1064, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:17', NULL),
(1065, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:18', NULL),
(1066, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:22', NULL),
(1067, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:22', NULL),
(1068, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:22', NULL),
(1069, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:23', NULL),
(1070, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:27', NULL),
(1071, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:27', NULL),
(1072, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:27', NULL),
(1073, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:28', NULL),
(1074, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:32', NULL),
(1075, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:32', NULL),
(1076, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:32', NULL),
(1077, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:33', NULL),
(1078, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:37', NULL),
(1079, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:37', NULL),
(1080, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:37', NULL),
(1081, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:38', NULL),
(1082, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:42', NULL),
(1083, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:42', NULL),
(1084, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:42', NULL),
(1085, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:43', NULL),
(1086, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:47', NULL),
(1087, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:47', NULL),
(1088, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:47', NULL),
(1089, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:48', NULL),
(1090, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:52', NULL),
(1091, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:52', NULL),
(1092, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:52', NULL),
(1093, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:53', NULL),
(1094, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:57', NULL),
(1095, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:12:57', NULL),
(1096, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:57', NULL),
(1097, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:12:58', NULL),
(1098, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:02', NULL),
(1099, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:02', NULL),
(1100, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:02', NULL),
(1101, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:03', NULL),
(1102, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:07', NULL),
(1103, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:07', NULL),
(1104, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:07', NULL),
(1105, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:08', NULL),
(1106, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:12', NULL),
(1107, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:12', NULL),
(1108, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:12', NULL),
(1109, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:13', NULL),
(1110, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:17', NULL),
(1111, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:17', NULL),
(1112, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:17', NULL),
(1113, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:18', NULL),
(1114, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:22', NULL),
(1115, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:22', NULL),
(1116, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:22', NULL),
(1117, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:23', NULL),
(1118, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:27', NULL),
(1119, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:27', NULL),
(1120, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:27', NULL),
(1121, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:28', NULL),
(1122, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:32', NULL),
(1123, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:32', NULL),
(1124, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:32', NULL),
(1125, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:33', NULL),
(1126, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:37', NULL),
(1127, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:37', NULL),
(1128, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:37', NULL),
(1129, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:38', NULL),
(1130, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:42', NULL),
(1131, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:42', NULL),
(1132, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:42', NULL),
(1133, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:43', NULL),
(1134, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:47', NULL),
(1135, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:47', NULL),
(1136, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:47', NULL),
(1137, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:48', NULL),
(1138, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:52', NULL),
(1139, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:52', NULL),
(1140, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/inbox', '2017-08-19 08:13:52', NULL),
(1141, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:53', NULL),
(1142, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer', '2017-08-19 08:13:54', NULL),
(1143, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:13:54', NULL),
(1144, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 08:14:04', NULL),
(1145, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 08:14:05', NULL),
(1146, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 08:14:09', NULL),
(1147, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 08:14:21', NULL),
(1148, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 08:14:23', NULL),
(1149, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-08-19 08:14:27', NULL),
(1150, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-08-19 08:14:30', NULL),
(1151, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-08-19 08:14:32', NULL),
(1152, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-08-19 08:14:34', NULL),
(1153, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-08-19 08:14:39', NULL),
(1154, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/postjob', '2017-08-19 08:16:04', NULL),
(1155, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-08-19 08:16:04', NULL),
(1156, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-08-19 08:16:21', NULL),
(1157, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-08-19 08:16:22', NULL),
(1158, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker', '2017-08-19 08:16:47', NULL),
(1159, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 08:16:47', NULL),
(1160, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 08:16:56', NULL),
(1161, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 08:16:57', NULL),
(1162, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker', '2017-08-19 08:16:57', NULL),
(1163, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker', '2017-08-19 08:16:58', NULL),
(1164, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-08-19 08:17:01', NULL),
(1165, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/infoupdate', '2017-08-19 09:00:17', NULL),
(1166, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/infoupdate', '2017-08-19 09:00:17', NULL),
(1167, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/followEmployer', '2017-08-19 09:01:34', NULL),
(1168, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/followEmployer', '2017-08-19 09:01:35', NULL),
(1169, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/follow/46', '2017-08-19 09:01:39', NULL),
(1170, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/followEmployer', '2017-08-19 09:01:39', NULL),
(1171, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/followEmployer', '2017-08-19 09:01:40', NULL),
(1172, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/unfollow/46', '2017-08-19 09:01:43', NULL),
(1173, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/followEmployer', '2017-08-19 09:01:43', NULL),
(1174, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/followEmployer', '2017-08-19 09:01:44', NULL),
(1175, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-08-19 09:01:49', NULL),
(1176, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-08-19 09:19:24', NULL),
(1177, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 09:19:24', NULL),
(1178, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 09:20:51', NULL),
(1179, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 09:20:51', NULL),
(1180, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/applicantlist', '2017-08-19 10:04:19', NULL),
(1181, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 10:04:19', NULL),
(1182, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 10:04:28', NULL),
(1183, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 10:04:29', NULL),
(1184, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-19 10:04:35', NULL),
(1185, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 10:04:36', NULL),
(1186, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 10:04:37', NULL),
(1187, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 10:05:05', NULL),
(1188, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 10:05:06', NULL),
(1189, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-19 10:05:07', NULL),
(1190, NULL, NULL, '103.58.95.83', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-19 17:11:37', NULL),
(1191, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 03:03:54', NULL),
(1192, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker', '2017-08-20 03:04:01', NULL),
(1193, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 03:04:01', NULL),
(1194, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 03:04:05', NULL),
(1195, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 06:19:04', NULL),
(1196, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 06:33:14', NULL),
(1197, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker', '2017-08-20 06:35:43', NULL),
(1198, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 06:35:43', NULL),
(1199, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 06:36:07', NULL),
(1200, NULL, NULL, '107.178.195.157', 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-08-20 06:58:45', NULL),
(1201, NULL, NULL, '107.178.195.157', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 06:58:46', NULL),
(1202, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-20 07:01:59', NULL),
(1203, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-08-20 07:02:01', NULL),
(1204, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker', '2017-08-20 07:06:09', NULL),
(1205, 5, NULL, NULL, 'http://bdtiger.win/database/public/jobseeker', '2017-08-20 07:06:10', NULL),
(1206, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/logout', '2017-08-20 07:08:02', NULL),
(1207, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-20 07:08:03', NULL),
(1208, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-20 07:08:08', NULL),
(1209, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/logout', '2017-08-20 07:08:19', NULL),
(1210, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-20 07:08:19', NULL),
(1211, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer', '2017-08-20 07:09:26', NULL),
(1212, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-20 07:09:26', NULL),
(1213, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer', '2017-08-20 07:09:28', NULL),
(1214, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-08-20 07:09:29', NULL),
(1215, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-08-20 07:19:25', NULL),
(1216, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 07:19:25', NULL),
(1217, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 07:19:37', NULL),
(1218, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-08-20 09:11:11', NULL),
(1219, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:11:11', NULL),
(1220, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/blockEmployer', '2017-08-20 09:11:19', NULL),
(1221, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:11:19', NULL),
(1222, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/followEmployer', '2017-08-20 09:11:23', NULL),
(1223, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:11:24', NULL),
(1224, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/uloadingcv', '2017-08-20 09:11:29', NULL),
(1225, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:11:30', NULL),
(1226, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/managejobs', '2017-08-20 09:11:39', NULL),
(1227, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:11:39', NULL),
(1228, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-08-20 09:14:51', NULL),
(1229, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:14:51', NULL),
(1230, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-08-20 09:15:04', NULL),
(1231, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:15:04', NULL),
(1232, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/uloadingcv', '2017-08-20 09:16:19', NULL),
(1233, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-20 09:16:19', NULL),
(1234, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-08-24 11:35:00', NULL),
(1235, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-08-27 07:30:48', NULL),
(1236, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/jobseeker', '2017-08-28 09:54:30', NULL),
(1237, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/jobseeker/login', '2017-08-28 09:54:31', NULL),
(1238, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer', '2017-08-28 09:54:36', NULL),
(1239, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:54:37', NULL),
(1240, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:54:55', NULL),
(1241, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:54:56', NULL),
(1242, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:55:06', NULL),
(1243, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:55:07', NULL),
(1244, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:55:14', NULL),
(1245, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:55:14', NULL),
(1246, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:55:24', NULL),
(1247, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-08-28 09:55:24', NULL),
(1248, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/apply', '2017-09-18 05:17:21', NULL),
(1249, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-09-18 05:17:21', NULL),
(1250, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-09-18 05:17:29', NULL),
(1251, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker', '2017-10-04 11:04:55', NULL),
(1252, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-10-04 11:04:55', NULL),
(1253, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-10-04 11:05:14', NULL),
(1254, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-10-04 11:05:15', NULL),
(1255, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-10-04 11:05:28', NULL),
(1256, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-10-09 03:01:49', NULL),
(1257, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-10-09 03:01:50', NULL),
(1258, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-10-09 03:01:53', NULL),
(1259, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-10-09 03:01:57', NULL),
(1260, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-10-09 03:01:58', NULL),
(1261, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/logout', '2017-10-09 03:02:00', NULL),
(1262, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-10-09 03:02:00', NULL),
(1263, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-10-09 03:02:20', NULL),
(1264, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-08 11:47:15', NULL),
(1265, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker', '2017-11-08 11:49:05', NULL),
(1266, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-08 11:49:06', NULL),
(1267, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-11-08 11:49:22', NULL),
(1268, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-11-08 11:49:23', NULL),
(1269, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-11-08 11:49:26', NULL),
(1270, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/managejobs', '2017-11-08 11:49:31', NULL),
(1271, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/showjob', '2017-11-08 11:49:34', NULL),
(1272, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-11-08 11:49:37', NULL),
(1273, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-11-08 11:49:44', NULL),
(1274, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/details', '2017-11-08 11:49:47', NULL),
(1275, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-11-08 11:49:51', NULL),
(1276, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/profile/5', '2017-11-08 11:49:52', NULL),
(1277, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-11-08 11:49:55', NULL),
(1278, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer', '2017-11-08 11:49:58', NULL),
(1279, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-11-08 11:51:44', NULL),
(1280, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-11-08 11:51:45', NULL),
(1281, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-11-08 11:52:10', NULL),
(1282, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-11-08 11:52:11', NULL),
(1283, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-11-08 11:52:16', NULL),
(1284, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/applicantlist', '2017-11-08 11:52:17', NULL),
(1285, 5, NULL, NULL, 'http://bdtiger.win/database/public/employer/logout', '2017-11-08 11:55:45', NULL),
(1286, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/employer/login', '2017-11-08 11:55:45', NULL),
(1287, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-08 11:56:19', NULL),
(1288, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-11-08 12:02:30', NULL),
(1289, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-08 12:02:31', NULL),
(1290, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-08 12:02:53', NULL),
(1291, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/resume/edit', '2017-11-09 03:16:59', NULL),
(1292, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-09 03:16:59', NULL),
(1293, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-12 06:06:57', NULL),
(1294, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker', '2017-11-17 14:13:06', NULL),
(1295, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-17 14:13:06', NULL),
(1296, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker', '2017-11-17 14:13:11', NULL),
(1297, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-17 14:13:11', NULL),
(1298, NULL, NULL, '163.53.149.98', 'http://bdtiger.win/database/public/jobseeker/login', '2017-11-17 14:13:25', NULL),
(1299, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer', '2017-12-04 08:50:44', NULL),
(1300, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-12-04 08:50:44', NULL),
(1301, NULL, NULL, '163.53.149.98', 'http://www.bdtiger.win/database/public/employer/login', '2017-12-04 08:50:53', NULL),
(1302, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-12-04 08:50:54', NULL),
(1303, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-12-04 08:50:57', NULL),
(1304, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/managejobs', '2017-12-04 08:50:58', NULL),
(1305, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/showjob', '2017-12-04 08:51:01', NULL),
(1306, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/managejobs', '2017-12-04 08:51:03', NULL),
(1307, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer', '2017-12-04 08:52:27', NULL),
(1308, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer', '2017-12-04 08:52:30', NULL),
(1309, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/applicantlist', '2017-12-04 08:53:28', NULL),
(1310, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/applicantlist', '2017-12-04 08:53:31', NULL),
(1311, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/applicantlist', '2017-12-04 08:53:50', NULL),
(1312, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/applicantlist', '2017-12-04 08:53:51', NULL),
(1313, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-12-04 08:53:58', NULL),
(1314, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-12-04 08:53:59', NULL),
(1315, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-12-04 09:14:40', NULL),
(1316, 5, NULL, NULL, 'http://www.bdtiger.win/database/public/employer/profile/5', '2017-12-04 09:14:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(100) NOT NULL,
  `jobseeker_sender_id` int(100) DEFAULT NULL,
  `employer_sender_id` int(100) DEFAULT NULL,
  `jobseeker_recepent_id` int(100) DEFAULT NULL,
  `employer_recepent_id` int(100) DEFAULT NULL,
  `parent_message_id` int(11) DEFAULT NULL,
  `subject` varchar(200) NOT NULL,
  `messages` varchar(1000) CHARACTER SET utf8 NOT NULL,
  `read_status` tinyint(1) NOT NULL DEFAULT '0',
  `trash` tinyint(1) NOT NULL DEFAULT '0',
  `draft` tinyint(1) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `jobseeker_sender_id`, `employer_sender_id`, `jobseeker_recepent_id`, `employer_recepent_id`, `parent_message_id`, `subject`, `messages`, `read_status`, `trash`, `draft`, `created_at`, `updated_at`) VALUES
(17, NULL, 5, 10, NULL, NULL, 'opencart translation', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, 0, '2017-05-13 17:31:35', '2017-05-14 10:41:09'),
(16, NULL, 5, 10, NULL, NULL, 'refund', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, 0, '2017-05-13 17:31:23', '2017-05-14 10:31:56'),
(15, NULL, 5, 10, NULL, NULL, 'opencart translation', 'bgcolor: #337ab7 !important;', 1, 0, 0, '2017-05-13 17:31:13', '2017-05-13 19:33:04'),
(7, NULL, 5, 10, NULL, NULL, 'opencart translation', 'sjkhkf jjfkjhfhfgk', 1, 0, 0, NULL, '2017-05-13 18:49:05'),
(8, NULL, 5, 10, NULL, NULL, 'opencart translation', 'sjkhkf jjfkjhfhfgk', 1, 0, 0, NULL, '2017-05-13 19:29:25'),
(9, NULL, 5, 10, NULL, NULL, 'hi this is subject', 'How can i help you sir', 1, 0, 0, '2017-05-12 19:12:12', '2017-05-13 19:29:05'),
(10, NULL, 5, 10, NULL, NULL, 'opencart translation', 'message', 1, 0, 0, '2017-05-12 19:22:44', '2017-05-13 19:39:21'),
(11, NULL, 5, 10, NULL, NULL, 'opencart translation', 'messgae', 1, 0, 0, '2017-05-12 19:22:59', '2017-05-13 18:23:01'),
(12, NULL, 5, 10, NULL, NULL, 'Subject', 'message body', 1, 0, 0, '2017-05-12 19:24:20', '2017-05-13 18:53:01'),
(18, NULL, 5, 10, NULL, NULL, 'opencart translation', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, 0, '2017-05-13 17:31:46', '2017-05-14 10:34:26'),
(14, NULL, 5, 10, NULL, NULL, 'message subject', 'Message body', 1, 0, 0, '2017-05-13 17:03:24', '2017-05-13 21:46:56'),
(19, NULL, 5, 10, NULL, NULL, 'refund', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, 0, '2017-05-13 17:31:59', '2017-05-13 21:39:13'),
(20, NULL, 5, 10, NULL, NULL, 'Message subject', 'Sometimes you may want to group several middleware under a single key to make them easier to assign to routes. You may do this using the $middlewareGroups property of your HTTP kernel.\r\n\r\nOut of the box, Laravel comes with web and api middleware groups that contains common middleware you may want to apply to your web UI and API routes:', 1, 0, 0, '2017-05-13 19:47:34', '2017-05-13 21:46:28'),
(21, 10, NULL, NULL, 5, NULL, 'opencart translation', 'this is message body for replay', 1, 0, 0, '2017-05-14 10:44:02', '2017-05-14 16:39:04'),
(22, NULL, 5, 10, NULL, NULL, 'opencart translation', 'Hi this is replay from employer', 1, 0, 0, '2017-05-14 11:53:43', '2017-05-14 12:00:26'),
(23, NULL, 5, 10, NULL, NULL, 'opencart translation', 'this is message from employer', 1, 0, 0, '2017-05-14 11:54:46', '2017-05-14 12:00:23'),
(24, NULL, 5, 10, NULL, NULL, 'opencart translation', 'this is third repaly', 1, 0, 0, '2017-05-14 11:55:57', '2017-05-14 16:38:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_04_16_095955_create_employers_table', 1),
(4, '2017_04_16_095956_create_employer_password_resets_table', 1),
(5, '2017_04_16_100952_create_jobseekers_table', 1),
(6, '2017_04_16_100953_create_jobseeker_password_resets_table', 1),
(7, '2017_04_17_101144_create_countries_table', 1),
(8, '2017_04_17_111939_create_divisions_table', 1),
(9, '2017_04_17_112807_create_districts_table', 1),
(10, '2017_04_17_113150_create_areas_table', 1),
(11, '2017_04_17_180349_create_personaldetails_table', 1),
(12, '2017_04_17_180525_create_languagepros_table', 1),
(13, '2017_04_17_180620_create_references_table', 1),
(14, '2017_04_17_180657_create_extraactivities_table', 1),
(15, '2017_04_17_180859_create_specializations_table', 1),
(16, '2017_04_17_181008_create_applicationinfos_table', 1),
(17, '2017_04_17_181039_create_trainings_table', 1),
(18, '2017_04_17_191150_create_empprofiles_table', 1),
(19, '2017_04_19_190114_create_employer_trigger', 1),
(20, '2017_04_20_204832_create_catagories_table', 1),
(21, '2017_04_20_213417_create_industrytypes_table', 1),
(23, '2017_04_24_161933_create_applied_jobs_table', 1),
(24, '2017_04_25_235914_create_sessions_table', 1),
(25, '2017_04_28_132743_create_results_table', 1),
(26, '2017_04_28_133022_create_resultgpautofs_table', 1),
(27, '2017_04_28_133118_create_yearofpassings_table', 1),
(28, '2017_04_28_133158_create_coursedurations_table', 1),
(29, '2017_04_28_133450_create_resultdisions_table', 1),
(30, '2017_04_28_130625_create_levelofeducations_table', 2),
(31, '2017_04_24_165945_create_exam_titles_table', 3),
(32, '2017_04_28_131524_create_groupoormajors_table', 4),
(33, '2017_04_17_181131_create_academics_table', 5),
(34, '2017_05_01_124117_public_option', 6),
(35, '2017_05_01_231318_create_blocks_table', 6),
(36, '2017_05_03_052054_create_followers_table', 6),
(37, '2017_05_03_104540_jobseeker_trigger', 6),
(38, '2017_04_20_213824_create_jobs_table', 1),
(39, '2017_05_05_015633_create_inspectors_table', 7),
(40, '2017_05_05_015634_create_inspector_password_resets_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `notice` text NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`id`, `title`, `notice`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', 'Its an amazing offer for who are interested to make a career on IT field...', 1, '2017-05-21 05:15:47', '0000-00-00 00:00:00'),
(2, 'Lorem Ipsum', 'Its an amazing offer for who are interested to build  career on IT field...', 1, '2017-05-21 05:34:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personaldetails`
--

CREATE TABLE `personaldetails` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_father_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_mother_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_dob` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_gender` enum('male','female','other') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_maritalstatus` enum('single','married','unmarried') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_nationality` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_national_id_no` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_religion` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_permanent_address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_current_address` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_current_location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_phone1` varchar(30) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_phone2` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_email` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jobseeker_email2` varchar(60) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_img` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `personaldetails`
--

INSERT INTO `personaldetails` (`id`, `jobseeker_id`, `full_name`, `jobseeker_father_name`, `jobseeker_mother_name`, `jobseeker_dob`, `jobseeker_gender`, `jobseeker_maritalstatus`, `jobseeker_nationality`, `jobseeker_national_id_no`, `jobseeker_religion`, `jobseeker_permanent_address`, `jobseeker_current_address`, `jobseeker_current_location`, `jobseeker_phone1`, `jobseeker_phone2`, `jobseeker_email`, `jobseeker_email2`, `profile_img`, `created_at`, `updated_at`) VALUES
(1, 1, '', 'Robiul islam', 'ismot ara', '1992-11-06', 'male', 'single', 'Bangladeshi', '4646543468456', 'Islam', 'Pabna', 'Mirpur,Dhaka', 'Praxis', '01750042986', '01645635264', 'imran.wpsi@gmail.com', 'imranhossain3020@yahoo.com', NULL, '2017-04-29 18:00:00', '2017-04-29 18:00:00'),
(3, 2, '', 'Abbaghg', 'zxzx', NULL, 'male', '', NULL, NULL, NULL, NULL, NULL, 'khulna', NULL, NULL, 'a@c.c', NULL, NULL, NULL, '2017-05-03 22:04:54'),
(5, 10, 'MD ANWAR JAHID', 'MD. AINAL HOSSAIN', 'MRS. RAHIMA KHATUN', '1992-01-01', 'male', 'married', 'Bangladesh', '199233144000005', 'Islam', 'Kaligonj, Jhenidah', 'Farmgate, Dhaka', 'dhaka', '+8801737956549', '+8801737956549', 'ajr.jahid@gmail.com', 'ajr.jahid@gmail.com', '10.jpeg', NULL, '2017-08-20 09:36:41'),
(6, 11, 'jghj', NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-08-20 09:44:25'),
(7, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 15, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 16, NULL, NULL, NULL, NULL, NULL, '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-29 14:01:45');

-- --------------------------------------------------------

--
-- Table structure for table `public_options`
--

CREATE TABLE `public_options` (
  `id` int(10) UNSIGNED NOT NULL,
  `option_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `option_value` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `public_options`
--

INSERT INTO `public_options` (`id`, `option_name`, `option_value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'site_name', 'idbjobportal', '1', '2017-05-02 18:00:00', NULL),
(2, 'site_email', 'a@gmail.com', '1', '2017-05-02 18:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resultdisions`
--

CREATE TABLE `resultdisions` (
  `id` int(10) UNSIGNED NOT NULL,
  `resultname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `resultgpautofs`
--

CREATE TABLE `resultgpautofs` (
  `id` int(10) UNSIGNED NOT NULL,
  `resultgpaname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `id` int(10) UNSIGNED NOT NULL,
  `resultname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL,
  `icon` varchar(100) NOT NULL,
  `details` varchar(600) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `specializations`
--

CREATE TABLE `specializations` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED DEFAULT NULL,
  `specializationorskill` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `skilldescription` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specializations`
--

INSERT INTO `specializations` (`id`, `jobseeker_id`, `specializationorskill`, `skilldescription`, `created_at`, `updated_at`) VALUES
(2, 2, 'html', 'nothing is unpossible', NULL, NULL),
(16, 2, 'HTML', 'Canvas,Div', NULL, NULL),
(19, 12, NULL, NULL, NULL, NULL),
(20, 13, NULL, NULL, NULL, NULL),
(21, 14, NULL, NULL, NULL, NULL),
(22, 15, NULL, NULL, NULL, NULL),
(23, 15, 'JavaScript', NULL, NULL, NULL),
(24, 15, 'JavaScript', 'sadfsdfsadf', NULL, NULL),
(25, 15, 'Php', 'dfgfdgfg', NULL, NULL),
(26, 16, NULL, NULL, NULL, NULL),
(28, 11, 'sdfsd', 'sadfasdf', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trainings`
--

CREATE TABLE `trainings` (
  `id` int(10) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED DEFAULT NULL,
  `training_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `topic` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `institute` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `duration` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trainings`
--

INSERT INTO `trainings` (`id`, `jobseeker_id`, `training_title`, `topic`, `institute`, `country`, `location`, `year`, `duration`, `created_at`, `updated_at`) VALUES
(1, 8, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 11, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 13, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(6, 14, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 15, 'asd', 'asd', 'asd', 'Bangladesh', 'asd', '2016', '2 monthes', NULL, NULL),
(10, 15, 'qwe', 'qwe', 'qwe', 'Bangladesh', 'qwe', '2016', '3 monthes', NULL, NULL),
(11, 16, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'emon', 'asm.sweet@gmail.com', '$2y$10$01N2zJtBqKD1LU513dEU0ef.nHd49hHN4tu/ux9qamQihXpTewwaK', NULL, '2017-05-04 14:21:34', '2017-05-04 14:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `yearofpassings`
--

CREATE TABLE `yearofpassings` (
  `id` int(10) UNSIGNED NOT NULL,
  `passingyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academics`
--
ALTER TABLE `academics`
  ADD PRIMARY KEY (`id`),
  ADD KEY `academics_exam_title_id_foreign` (`exam_title_id`),
  ADD KEY `academics_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `applicationinfos`
--
ALTER TABLE `applicationinfos`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicationinfos_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applied_jobs_jobseeker_id_foreign` (`jobseeker_id`),
  ADD KEY `applied_jobs_job_id_foreign` (`job_id`),
  ADD KEY `employer_id` (`employer_id`);

--
-- Indexes for table `assists`
--
ALTER TABLE `assists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blocks`
--
ALTER TABLE `blocks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coursedurations`
--
ALTER TABLE `coursedurations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cvs`
--
ALTER TABLE `cvs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `districts_country_id_foreign` (`country_id`),
  ADD KEY `districts_division_id_foreign` (`division_id`);

--
-- Indexes for table `divisions`
--
ALTER TABLE `divisions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `divisions_country_id_foreign` (`country_id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employers_email_unique` (`email`);

--
-- Indexes for table `employer_password_resets`
--
ALTER TABLE `employer_password_resets`
  ADD KEY `employer_password_resets_email_index` (`email`),
  ADD KEY `employer_password_resets_token_index` (`token`);

--
-- Indexes for table `empprofiles`
--
ALTER TABLE `empprofiles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `exam_titles`
--
ALTER TABLE `exam_titles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `exam_titles_levelofeducation_id_foreign` (`levelofeducation_id`);

--
-- Indexes for table `extraactivities`
--
ALTER TABLE `extraactivities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `extraactivities_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `frontpagethemes`
--
ALTER TABLE `frontpagethemes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `groupoormajors`
--
ALTER TABLE `groupoormajors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupoormajors_levelofeducation_id_foreign` (`levelofeducation_id`),
  ADD KEY `groupoormajors_exam_title_id_foreign` (`exam_title_id`);

--
-- Indexes for table `guest_support`
--
ALTER TABLE `guest_support`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `industrytypes`
--
ALTER TABLE `industrytypes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspectors`
--
ALTER TABLE `inspectors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `inspectors_email_unique` (`email`);

--
-- Indexes for table `inspector_password_resets`
--
ALTER TABLE `inspector_password_resets`
  ADD KEY `inspector_password_resets_email_index` (`email`),
  ADD KEY `inspector_password_resets_token_index` (`token`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_catagory_id_foreign` (`catagory_id`),
  ADD KEY `jobs_industrytype_id_foreign` (`industrytype_id`),
  ADD KEY `jobs_employer_id_foreign` (`employer_id`),
  ADD KEY `jobs_division_id_foreign` (`division_id`);

--
-- Indexes for table `jobseekers`
--
ALTER TABLE `jobseekers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `jobseekers_email_unique` (`email`);

--
-- Indexes for table `jobseeker_contact_me`
--
ALTER TABLE `jobseeker_contact_me`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobseeker_password_resets`
--
ALTER TABLE `jobseeker_password_resets`
  ADD KEY `jobseeker_password_resets_email_index` (`email`),
  ADD KEY `jobseeker_password_resets_token_index` (`token`);

--
-- Indexes for table `js_option`
--
ALTER TABLE `js_option`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js_projects`
--
ALTER TABLE `js_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js_references`
--
ALTER TABLE `js_references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `references_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `js_skill`
--
ALTER TABLE `js_skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `js_workexperience`
--
ALTER TABLE `js_workexperience`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languagepros`
--
ALTER TABLE `languagepros`
  ADD PRIMARY KEY (`id`),
  ADD KEY `languagepros_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `levelofeducations`
--
ALTER TABLE `levelofeducations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logdatas`
--
ALTER TABLE `logdatas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD PRIMARY KEY (`id`),
  ADD KEY `personaldetails_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `public_options`
--
ALTER TABLE `public_options`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultdisions`
--
ALTER TABLE `resultdisions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `resultgpautofs`
--
ALTER TABLE `resultgpautofs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

--
-- Indexes for table `specializations`
--
ALTER TABLE `specializations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `specializations_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `trainings`
--
ALTER TABLE `trainings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `trainings_jobseeker_id_foreign` (`jobseeker_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `yearofpassings`
--
ALTER TABLE `yearofpassings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `academics`
--
ALTER TABLE `academics`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `applicationinfos`
--
ALTER TABLE `applicationinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `assists`
--
ALTER TABLE `assists`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `coursedurations`
--
ALTER TABLE `coursedurations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cvs`
--
ALTER TABLE `cvs`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=141;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `empprofiles`
--
ALTER TABLE `empprofiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
--
-- AUTO_INCREMENT for table `exam_titles`
--
ALTER TABLE `exam_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `extraactivities`
--
ALTER TABLE `extraactivities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `frontpagethemes`
--
ALTER TABLE `frontpagethemes`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `groupoormajors`
--
ALTER TABLE `groupoormajors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `guest_support`
--
ALTER TABLE `guest_support`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `industrytypes`
--
ALTER TABLE `industrytypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `inspectors`
--
ALTER TABLE `inspectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `jobseeker_contact_me`
--
ALTER TABLE `jobseeker_contact_me`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `js_option`
--
ALTER TABLE `js_option`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `js_projects`
--
ALTER TABLE `js_projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `js_references`
--
ALTER TABLE `js_references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `js_skill`
--
ALTER TABLE `js_skill`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `js_workexperience`
--
ALTER TABLE `js_workexperience`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `languagepros`
--
ALTER TABLE `languagepros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `levelofeducations`
--
ALTER TABLE `levelofeducations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `logdatas`
--
ALTER TABLE `logdatas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1317;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `notice`
--
ALTER TABLE `notice`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `public_options`
--
ALTER TABLE `public_options`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `resultdisions`
--
ALTER TABLE `resultdisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `resultgpautofs`
--
ALTER TABLE `resultgpautofs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `results`
--
ALTER TABLE `results`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `yearofpassings`
--
ALTER TABLE `yearofpassings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `academics`
--
ALTER TABLE `academics`
  ADD CONSTRAINT `academics_exam_title_id_foreign` FOREIGN KEY (`exam_title_id`) REFERENCES `exam_titles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `academics_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applicationinfos`
--
ALTER TABLE `applicationinfos`
  ADD CONSTRAINT `applicationinfos_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  ADD CONSTRAINT `applied_jobs_ibfk_1` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`),
  ADD CONSTRAINT `applied_jobs_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`),
  ADD CONSTRAINT `applied_jobs_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`);

--
-- Constraints for table `districts`
--
ALTER TABLE `districts`
  ADD CONSTRAINT `districts_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `districts_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

--
-- Constraints for table `divisions`
--
ALTER TABLE `divisions`
  ADD CONSTRAINT `divisions_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`);

--
-- Constraints for table `exam_titles`
--
ALTER TABLE `exam_titles`
  ADD CONSTRAINT `exam_titles_levelofeducation_id_foreign` FOREIGN KEY (`levelofeducation_id`) REFERENCES `levelofeducations` (`id`);

--
-- Constraints for table `extraactivities`
--
ALTER TABLE `extraactivities`
  ADD CONSTRAINT `extraactivities_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `groupoormajors`
--
ALTER TABLE `groupoormajors`
  ADD CONSTRAINT `groupoormajors_exam_title_id_foreign` FOREIGN KEY (`exam_title_id`) REFERENCES `exam_titles` (`id`),
  ADD CONSTRAINT `groupoormajors_levelofeducation_id_foreign` FOREIGN KEY (`levelofeducation_id`) REFERENCES `levelofeducations` (`id`);

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_catagory_id_foreign` FOREIGN KEY (`catagory_id`) REFERENCES `catagories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`),
  ADD CONSTRAINT `jobs_employer_id_foreign` FOREIGN KEY (`employer_id`) REFERENCES `employers` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_industrytype_id_foreign` FOREIGN KEY (`industrytype_id`) REFERENCES `industrytypes` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `js_references`
--
ALTER TABLE `js_references`
  ADD CONSTRAINT `references_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `languagepros`
--
ALTER TABLE `languagepros`
  ADD CONSTRAINT `languagepros_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `personaldetails`
--
ALTER TABLE `personaldetails`
  ADD CONSTRAINT `personaldetails_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `specializations`
--
ALTER TABLE `specializations`
  ADD CONSTRAINT `specializations_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `trainings`
--
ALTER TABLE `trainings`
  ADD CONSTRAINT `trainings_jobseeker_id_foreign` FOREIGN KEY (`jobseeker_id`) REFERENCES `jobseekers` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
