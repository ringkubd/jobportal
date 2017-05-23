-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2017 at 04:31 PM
-- Server version: 5.7.14
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idbjobportal`
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
(24, 10, 3, 16, 10, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-05 10:11:34', '2017-05-05 10:11:34');

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
(7, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `applied_jobs`
--

CREATE TABLE `applied_jobs` (
  `id` int(10) UNSIGNED NOT NULL,
  `employer_id` int(100) UNSIGNED NOT NULL,
  `jobseeker_id` int(10) UNSIGNED NOT NULL,
  `job_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `applied_jobs`
--

INSERT INTO `applied_jobs` (`id`, `employer_id`, `jobseeker_id`, `job_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 1, '2017-05-03 19:53:18', '2017-05-03 19:53:18'),
(2, 1, 10, 1, '2017-05-07 17:25:56', '2017-05-07 17:25:56'),
(3, 5, 10, 3, '2017-05-10 18:09:36', '2017-05-10 18:09:36'),
(4, 4, 10, 2, '2017-05-11 19:01:27', '2017-05-11 19:01:27'),
(12, 5, 10, 5, '2017-05-11 19:32:03', '2017-05-11 19:32:03');

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
(1, 2, 1, 1, 'Poylanpur', '2017-05-01 20:50:22', '2017-05-01 20:50:22'),
(2, 2, 1, 1, 'sadhupara', '2017-05-01 20:50:44', '2017-05-01 20:50:44'),
(3, 2, 1, 1, 'gobinda', '2017-05-01 20:50:59', '2017-05-01 20:50:59');

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

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `id` int(10) UNSIGNED NOT NULL,
  `catagoryname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`id`, `catagoryname`, `created_at`, `updated_at`) VALUES
(1, 'imran', '2017-05-01 06:54:25', '2017-05-01 14:03:21'),
(3, 'sweet', '2017-05-01 06:54:39', '2017-05-01 06:54:39'),
(5, 'emon', '2017-05-01 14:10:06', '2017-05-01 14:10:06'),
(6, 'kazi', '2017-05-01 14:10:13', '2017-05-01 14:10:13'),
(7, 'imam', '2017-05-01 14:11:50', '2017-05-01 14:11:50'),
(8, 'Bank', '2017-05-04 14:41:38', '2017-05-04 14:41:38'),
(9, 'Garments', '2017-05-05 19:14:15', '2017-05-05 19:14:15');

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
(1, 'India', '2017-05-01 14:57:33', '2017-05-01 14:57:33'),
(2, 'Bangladesh', '2017-04-28 23:56:07', '2017-04-30 22:18:18'),
(4, 'UK', '2017-05-01 14:57:41', '2017-05-01 14:57:41'),
(5, 'Chad', '2017-05-04 15:10:41', '2017-05-04 15:10:41');

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
  `country_id` int(10) UNSIGNED NOT NULL,
  `division_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `districts`
--

INSERT INTO `districts` (`id`, `country_id`, `division_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 'pabna', '2017-05-01 15:11:33', '2017-05-01 15:11:33'),
(2, 2, 1, 'nator', '2017-05-01 15:11:43', '2017-05-01 15:11:43'),
(3, 2, 1, 'rajshahi', '2017-05-01 15:11:54', '2017-05-01 15:11:54'),
(4, 2, 2, 'Dhaka', '2017-05-05 19:15:16', '2017-05-05 19:15:16');

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
(1, 2, 'rajshahi', '2017-04-28 23:56:42', '2017-04-30 22:18:40'),
(2, 2, 'dhaka', '2017-04-30 22:18:51', '2017-04-30 22:18:51'),
(3, 2, 'barisal', '2017-04-30 22:28:52', '2017-04-30 22:28:52'),
(4, 2, 'khulna', '2017-04-30 22:29:03', '2017-04-30 22:29:03'),
(5, 2, 'shylet', '2017-04-30 22:29:15', '2017-04-30 22:29:15'),
(6, 2, 'chittagong', '2017-04-30 22:29:30', '2017-04-30 22:29:30');

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
  `online_status` tinyint(1) DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `verifyToken` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `name`, `email`, `password`, `slug`, `status`, `online_status`, `remember_token`, `verifyToken`, `created_at`, `updated_at`) VALUES
(1, 'jkkkkok', 'iqbal700049@gmail.com', '$2y$10$WPPGpehUaNOM9HmsUNZMeubB1TH8WdDvZUPp5BULvq/aDGG1X/A/C', 'kl,l', 1, 0, NULL, '', '2017-04-29 04:21:41', '2017-05-05 03:14:42'),
(2, 'imran', 'asm.imran@gmail.com', '$2y$10$fHt26Z5HLHlDGwkfUZbU5umtd291QZgfjUcOiyI.y6gnmMNIMEdgO', 'sdfasdf', 1, 0, NULL, '', '2017-05-01 22:01:36', '2017-05-05 03:24:09'),
(3, 'emon', 'emon@gmail.com', '$2y$10$YNGZinl0X.MtJp/LW22nUe5vaTEqVj1lKAw/ImoYlT90sITkMBEaW', 'sdhfsdfhaaadfsdfsaaaaaaaaa', 1, 0, NULL, '', '2017-05-01 23:48:40', '2017-05-01 23:48:40'),
(4, 'imran', 'anwar@gmail.com', '$2y$10$6P67RaGSQ1b/NWwd6q1H2eXGXZeUY7CkN5ZNAoo3MBTbtyuh58Qzq', '123456', 1, 0, NULL, '', '2017-05-03 21:56:30', '2017-05-03 21:56:30'),
(5, 'emon', 'ajr.jahid@gmail.com', '$2y$10$bv72JFXaxtwY9jEL4DDQIOHQ04x6vpyTnTID/epazvETF5cwc72YO', '123456', 1, 0, 'LEe9R4IA1CnFA079iVn1XJsRQTvmonJP1OWNkmzVqxmeCRNlbdpcLt4AEJZB', '', '2017-05-04 13:26:08', '2017-05-04 13:26:08'),
(12, 'MD ANWAR JAHID', 'ajr.jahifd@gmail.com', '$2y$10$PcgXOgn.W.tEppk90iaMLeHAIbuSPvbolsxyAk/lP9PaEVXNfL5Yu', '123456', 1, 0, NULL, 'kBUAPB49IHtiyfLajvJNl2B6gbG4fzYbUtqE0VSt', '2017-05-08 04:28:17', '2017-05-08 04:28:17'),
(33, 'anwar', 'bdtigerwin@gmail.com', '$2y$10$bv72JFXaxtwY9jEL4DDQIOHQ04x6vpyTnTID/epazvETF5cwc72YO', '123456', 1, 0, 'zNlsGKU6mI3mGWOzFbgkQaS9rVbbph0BaKAdpUzVbC19i2iVYer3Vd0e4UpS', '', '2017-05-08 05:57:18', '2017-05-08 05:57:29');

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
  `companyname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `altcompanyname` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contactperson` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `industrytype` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `companyaddress` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` int(11) DEFAULT '1',
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
(1, 1, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 2, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(3, 3, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(4, 4, 'Company', 'Alternative Company Name', 'Contact Person', 'Contact Person', NULL, '4', 2, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, '2017-05-03 21:58:29'),
(5, 5, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, 'e07a17ff1644977adb11f34ae6a4b756.jpeg', NULL, '2017-05-05 13:21:25'),
(6, 6, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, 7, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, 8, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, 9, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(10, 10, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, 11, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(12, 12, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 13, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(14, 14, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 15, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(16, 16, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, 17, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 18, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 19, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 20, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, 21, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, 22, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 23, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, 24, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 25, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 26, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(27, 27, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(28, 28, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(29, 29, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(30, 30, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(31, 31, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(32, 32, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(33, 33, NULL, NULL, NULL, NULL, NULL, NULL, 1, 1, 1, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
(5, 10, NULL, NULL, NULL, NULL);

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
(1, 'imran hossain', '2017-05-01 14:38:07', '2017-05-01 14:38:07'),
(2, 'kazi babu', '2017-05-01 14:38:17', '2017-05-01 14:38:17'),
(3, 'sweet', '2017-05-01 14:39:07', '2017-05-01 14:49:43'),
(4, 'NGO', '2017-05-04 14:45:14', '2017-05-04 14:45:14'),
(5, 'Garments', '2017-05-05 19:13:36', '2017-05-05 19:13:36');

-- --------------------------------------------------------

--
-- Table structure for table `inspectors`
--

CREATE TABLE `inspectors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inspectors`
--

INSERT INTO `inspectors` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'imran', 'asm.sweet@gmail.com', '$2y$10$nrWmG4eLP0C86RzpHcZnleDY8dU.hS3D7MtRScTcGy9h36j2EVMvW', NULL, '2017-05-04 19:59:22', '2017-05-04 19:59:22'),
(2, 'MD ANWAR JAHID', 'ajr.jahid@gmail.com', '$2y$10$Rrlc.CCY4QizPLQrXJLMmepm/cH80nRZjUM3B43EQKsbTLmaBcCIK', NULL, '2017-05-05 08:55:33', '2017-05-05 08:55:33');

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
  `joblevel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `employer_id`, `catagory_id`, `industrytype_id`, `division_id`, `district_id`, `agerange`, `jobtype`, `joblevel`, `educational_qualification`, `job_responsibilities`, `job_experiences_year`, `job_experiences_field`, `salaryrange`, `jobtitle`, `vacancies`, `instruction`, `email`, `deadline`, `contactperson`, `designation`, `published`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 1, '12-12', 'full-time', 'mid', 'ba', 'ggg', '2525', 'ffff', '44555', 'Job title', 15, 'Instruction', 'a@b.com', '12-12-2015', 'Sweet', 'md', 1, '2017-05-03 18:00:00', NULL),
(2, 4, 1, 1, 1, 2, '18 -31', 'full-time', '0', 'carrer_tablecarrer_tablecarrer_ tablecarrer_tablecarrer _tableca rrer_ tablecarrer_ tablecarrer_tablecarrer_tablecarrer_tablecarrer_table', 'carrer_table', '12', '12', '৳20000 -৳ 51730', 'qqq', 12, 'carrer_table', 'asm.sweet@gmail.com', '05/17/2017', 'carrer_table', 'carrer_table', 1, '2017-05-03 22:06:45', '2017-05-03 22:06:45'),
(3, 5, 1, 1, 1, 1, '18 -27', 'full-time', '0', 'Educational Qualification', 'Job Responsibilities', '12', 'WPSi', '৳20000 -৳ 43778', 'Test Job', 12, 'Apply Instruction(s)', 'asm.sweet@gmail.com', '05/19/2017', 'carrer_table', 'Designation', 1, '2017-05-04 13:28:07', '2017-05-04 13:28:07'),
(5, 5, 1, 5, 1, 1, '18 -33', 'full-time', '0', 'Educational Qualification', 'Job Responsibilities', '5', 'web developer', '৳20000 -৳ 79048', 'This is job title hme problem', 500, 'Apply Instruction(s)', 'ajr.jahid@gmail.com', '05/26/2017', 'Kazi', 'kichu na', 1, '2017-05-11 19:17:49', '2017-05-11 19:17:49');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobseekers`
--

INSERT INTO `jobseekers` (`id`, `name`, `email`, `password`, `status`, `remember_token`, `verifyToken`, `created_at`, `updated_at`) VALUES
(1, 'imran', 'imran@gmail.com', '$2y$10$DIRSRPqwvcoblsolQne6POqdgpfV8o1wJAzF04N.PbYwxnpOGwhrO', 1, NULL, NULL, '2017-04-28 23:45:19', '2017-05-04 20:53:30'),
(2, 'sweet vai', 'asm.sweet@gmail.com', '$2y$10$K4QV9ycSN2TWZzTWNxmHre8L4ulepYzbWhC6fVZNvaEU0X/73yjGm', 1, 'SguVQV0lkjIZc54y44P3bRaJVz9CrJlLKhIdRBETD2Mn7NRtJGV2fz9ARURb', NULL, '2017-05-01 21:48:29', '2017-05-04 20:53:25'),
(3, 'babu vai', 'babu@gmail.com', '$2y$10$BPal9VeVPSrmoHD8QdmJue1g4cFx6eYYCHPu7qhUA0HoO.0MqqiTO', 1, NULL, NULL, '2017-05-01 23:50:21', '2017-05-04 20:53:28'),
(8, 'imran', 'sadf@gamilc.omc', '$2y$10$25oT0U87XCY7valC8s8bwOLOq2M0P8GQvUV1cw2U9k4XZahtYQ6bq', 1, NULL, NULL, '2017-05-03 19:45:15', '2017-05-04 20:53:21'),
(9, 'emon', 'sadf@gamilc.omca', '$2y$10$SvGKQasULT1bNFAqZPqs3uqxKp3ozEHuok8MtRgh9V1emQjB8wbqS', 1, NULL, NULL, '2017-05-03 19:45:49', '2017-05-04 20:53:21'),
(10, 'MD ANWAR JAHID', 'ajr.jahid@gmail.com', '$2y$10$x0JPc0jR71BpDR0JDgsSweXV8XcXF419gVv9SJhZkec.e6M1EuQZ2', 1, 'lX3d6CIZFkTHg63jEVOdRx5hyygb7HXPmLWLgcs2VhJqiA3F5q9JnFWAUbE6', NULL, '2017-05-05 08:51:41', '2017-05-05 08:51:41');

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
-- Table structure for table `jobseeker_password_resets`
--

CREATE TABLE `jobseeker_password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(9, 10, 'MD ANWAR JAHID', 'IDB_BISEW.com bla bla', 'WEb developer', 'Dhaka, Monipuripara, Farmgate , Dhaka', '1737956549', '1737956549', '1737956549', 'ajr.jahid@gmail.com', 'Me', NULL, NULL);

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
(5, 10, 'english', 'good', 'good', 'good', NULL, NULL);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `jobseeker_sender_id`, `employer_sender_id`, `jobseeker_recepent_id`, `employer_recepent_id`, `parent_message_id`, `subject`, `messages`, `read_status`, `trash`, `created_at`, `updated_at`) VALUES
(17, NULL, 5, 10, NULL, NULL, 'opencart translation', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, '2017-05-13 17:31:35', '2017-05-14 10:41:09'),
(16, NULL, 5, 10, NULL, NULL, 'refund', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, '2017-05-13 17:31:23', '2017-05-14 10:31:56'),
(15, NULL, 5, 10, NULL, NULL, 'opencart translation', 'bgcolor: #337ab7 !important;', 1, 0, '2017-05-13 17:31:13', '2017-05-13 19:33:04'),
(7, NULL, 5, 10, NULL, NULL, 'opencart translation', 'sjkhkf jjfkjhfhfgk', 1, 0, NULL, '2017-05-13 18:49:05'),
(8, NULL, 5, 10, NULL, NULL, 'opencart translation', 'sjkhkf jjfkjhfhfgk', 1, 0, NULL, '2017-05-13 19:29:25'),
(9, NULL, 5, 10, NULL, NULL, 'hi this is subject', 'How can i help you sir', 1, 0, '2017-05-12 19:12:12', '2017-05-13 19:29:05'),
(10, NULL, 5, 10, NULL, NULL, 'opencart translation', 'message', 1, 0, '2017-05-12 19:22:44', '2017-05-13 19:39:21'),
(11, NULL, 5, 10, NULL, NULL, 'opencart translation', 'messgae', 1, 0, '2017-05-12 19:22:59', '2017-05-13 18:23:01'),
(12, NULL, 5, 10, NULL, NULL, 'Subject', 'message body', 1, 0, '2017-05-12 19:24:20', '2017-05-13 18:53:01'),
(18, NULL, 5, 10, NULL, NULL, 'opencart translation', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, '2017-05-13 17:31:46', '2017-05-14 10:34:26'),
(14, NULL, 5, 10, NULL, NULL, 'message subject', 'Message body', 1, 0, '2017-05-13 17:03:24', '2017-05-13 21:46:56'),
(19, NULL, 5, 10, NULL, NULL, 'refund', 'bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;bgcolor: #337ab7 !important;', 1, 0, '2017-05-13 17:31:59', '2017-05-13 21:39:13'),
(20, NULL, 5, 10, NULL, NULL, 'Message subject', 'Sometimes you may want to group several middleware under a single key to make them easier to assign to routes. You may do this using the $middlewareGroups property of your HTTP kernel.\r\n\r\nOut of the box, Laravel comes with web and api middleware groups that contains common middleware you may want to apply to your web UI and API routes:', 1, 0, '2017-05-13 19:47:34', '2017-05-13 21:46:28'),
(21, 10, NULL, NULL, 5, NULL, 'opencart translation', 'this is message body for replay', 1, 0, '2017-05-14 10:44:02', '2017-05-14 11:55:43'),
(22, NULL, 5, 10, NULL, NULL, 'opencart translation', 'Hi this is replay from employer', 1, 0, '2017-05-14 11:53:43', '2017-05-14 12:00:26'),
(23, NULL, 5, 10, NULL, NULL, 'opencart translation', 'this is message from employer', 1, 0, '2017-05-14 11:54:46', '2017-05-14 12:00:23'),
(24, NULL, 5, 10, NULL, NULL, 'opencart translation', 'this is third repaly', 1, 0, '2017-05-14 11:55:57', '2017-05-14 12:00:19');

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
(4, 9, '', NULL, NULL, NULL, 'male', 'single', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(5, 10, 'MD ANWAR JAHID', 'MD. AINAL HOSSAIN', 'MRS. RAHIMA KHATUN', '1992-01-01', 'male', '', 'Bangladesh', '199233144000005', 'Islam', 'Kaligonj, Jhenidah', 'Farmgate, Dhaka', 'dhaka', '+8801737956549', '+8801737956549', 'ajr.jahid@gmail.com', 'ajr.jahid@gmail.com', '10.jpeg', NULL, '2017-05-07 01:42:07');

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
(17, 10, NULL, NULL, NULL, NULL);

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
(2, 10, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
-- Indexes for table `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`),
  ADD KEY `areas_country_id_foreign` (`country_id`),
  ADD KEY `areas_division_id_foreign` (`division_id`),
  ADD KEY `areas_district_id_foreign` (`district_id`);

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
-- Indexes for table `groupoormajors`
--
ALTER TABLE `groupoormajors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `groupoormajors_levelofeducation_id_foreign` (`levelofeducation_id`),
  ADD KEY `groupoormajors_exam_title_id_foreign` (`exam_title_id`);

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
-- Indexes for table `jobseeker_password_resets`
--
ALTER TABLE `jobseeker_password_resets`
  ADD KEY `jobseeker_password_resets_email_index` (`email`),
  ADD KEY `jobseeker_password_resets_token_index` (`token`);

--
-- Indexes for table `js_references`
--
ALTER TABLE `js_references`
  ADD PRIMARY KEY (`id`),
  ADD KEY `references_jobseeker_id_foreign` (`jobseeker_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
--
-- AUTO_INCREMENT for table `applicationinfos`
--
ALTER TABLE `applicationinfos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `applied_jobs`
--
ALTER TABLE `applied_jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `blocks`
--
ALTER TABLE `blocks`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `catagories`
--
ALTER TABLE `catagories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `divisions`
--
ALTER TABLE `divisions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `empprofiles`
--
ALTER TABLE `empprofiles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `exam_titles`
--
ALTER TABLE `exam_titles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `extraactivities`
--
ALTER TABLE `extraactivities`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `groupoormajors`
--
ALTER TABLE `groupoormajors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `industrytypes`
--
ALTER TABLE `industrytypes`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `inspectors`
--
ALTER TABLE `inspectors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `jobseekers`
--
ALTER TABLE `jobseekers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `js_references`
--
ALTER TABLE `js_references`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `languagepros`
--
ALTER TABLE `languagepros`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `levelofeducations`
--
ALTER TABLE `levelofeducations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
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
-- AUTO_INCREMENT for table `personaldetails`
--
ALTER TABLE `personaldetails`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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
-- AUTO_INCREMENT for table `specializations`
--
ALTER TABLE `specializations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `trainings`
--
ALTER TABLE `trainings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- Constraints for table `areas`
--
ALTER TABLE `areas`
  ADD CONSTRAINT `areas_country_id_foreign` FOREIGN KEY (`country_id`) REFERENCES `countries` (`id`),
  ADD CONSTRAINT `areas_district_id_foreign` FOREIGN KEY (`district_id`) REFERENCES `districts` (`id`),
  ADD CONSTRAINT `areas_division_id_foreign` FOREIGN KEY (`division_id`) REFERENCES `divisions` (`id`);

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
