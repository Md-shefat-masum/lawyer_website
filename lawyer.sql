-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2020 at 01:10 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lawyer`
--

-- --------------------------------------------------------

--
-- Table structure for table `area_of_practices`
--

CREATE TABLE `area_of_practices` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `icon` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `area_of_practices`
--

INSERT INTO `area_of_practices` (`id`, `icon`, `title`, `description`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/icon/1604431018.png', 'Family Law', '<div style=\"line-height: 19px;\"><div style=\"\">Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.Delectus&nbsp;reiciendis&nbsp;atque&nbsp;odit&nbsp;esse&nbsp;aperiam,&nbsp;exercitationem&nbsp;dolor&nbsp;qui&nbsp;voluptas&nbsp;expedita?&nbsp;Nulla&nbsp;provident,accusantium&nbsp;pariatur&nbsp;necessitatibus&nbsp;voluptatibus&nbsp;numquam&nbsp;porro&nbsp;vero&nbsp;consectetur&nbsp;eaque?</div><br></div>', 1, '1105fa1acaadfc1e', 1, '2020-11-03 13:16:58', '2020-11-03 13:16:58'),
(2, 'uploads/icon/1604431060.png', 'IMMIGRATION', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.Delectus&nbsp;reiciendis&nbsp;atque&nbsp;odit&nbsp;esse&nbsp;aperiam,&nbsp;exercitationem&nbsp;dolor&nbsp;qui&nbsp;voluptas&nbsp;expedita?&nbsp;Nulla&nbsp;provident,accusantium&nbsp;pariatur&nbsp;necessitatibus&nbsp;voluptatibus&nbsp;numquam&nbsp;porro&nbsp;vero&nbsp;consectetur&nbsp;eaque?<br></p>', 1, '2105fa1acd4c4803', 1, '2020-11-03 13:17:40', '2020-11-03 13:17:40'),
(3, 'uploads/icon/1604431079.png', 'WILLS AND ESTATE', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.Delectus&nbsp;reiciendis&nbsp;atque&nbsp;odit&nbsp;esse&nbsp;aperiam,&nbsp;exercitationem&nbsp;dolor&nbsp;qui&nbsp;voluptas&nbsp;expedita?&nbsp;Nulla&nbsp;provident,accusantium&nbsp;pariatur&nbsp;necessitatibus&nbsp;voluptatibus&nbsp;numquam&nbsp;porro&nbsp;vero&nbsp;consectetur&nbsp;eaque?<br></p>', 1, '3105fa1ace7544fd', 1, '2020-11-03 13:17:59', '2020-11-03 13:17:59'),
(4, 'uploads/icon/1604431112.png', 'POWER OF ATTORNEY', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.Delectus&nbsp;reiciendis&nbsp;atque&nbsp;odit&nbsp;esse&nbsp;aperiam,&nbsp;exercitationem&nbsp;dolor&nbsp;qui&nbsp;voluptas&nbsp;expedita?&nbsp;Nulla&nbsp;provident,accusantium&nbsp;pariatur&nbsp;necessitatibus&nbsp;voluptatibus&nbsp;numquam&nbsp;porro&nbsp;vero&nbsp;consectetur&nbsp;eaque?<br></p>', 1, '4105fa1ad0896e03', 1, '2020-11-03 13:18:32', '2020-11-03 13:18:32'),
(5, 'uploads/icon/1604431139.png', 'REAL ESTATE', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.Delectus&nbsp;reiciendis&nbsp;atque&nbsp;odit&nbsp;esse&nbsp;aperiam,&nbsp;exercitationem&nbsp;dolor&nbsp;qui&nbsp;voluptas&nbsp;expedita?&nbsp;Nulla&nbsp;provident,accusantium&nbsp;pariatur&nbsp;necessitatibus&nbsp;voluptatibus&nbsp;numquam&nbsp;porro&nbsp;vero&nbsp;consectetur&nbsp;eaque?<br></p>', 1, '5105fa1ad2352f02', 1, '2020-11-03 13:18:59', '2020-11-03 13:18:59'),
(6, 'uploads/icon/1604431156.png', 'NOTARIZATION', '<p>Lorem&nbsp;ipsum&nbsp;dolor&nbsp;sit&nbsp;amet&nbsp;consectetur&nbsp;adipisicing&nbsp;elit.Delectus&nbsp;reiciendis&nbsp;atque&nbsp;odit&nbsp;esse&nbsp;aperiam,&nbsp;exercitationem&nbsp;dolor&nbsp;qui&nbsp;voluptas&nbsp;expedita?&nbsp;Nulla&nbsp;provident,accusantium&nbsp;pariatur&nbsp;necessitatibus&nbsp;voluptatibus&nbsp;numquam&nbsp;porro&nbsp;vero&nbsp;consectetur&nbsp;eaque?<br></p>', 1, '6105fa1b0ed8f497', 1, '2020-11-03 13:35:09', '2020-11-03 13:35:09');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `heading_1` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `heading_2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner_image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `heading_1`, `heading_2`, `banner_image`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'teat adf Your solutions start here……..', 'edt N Jahan Legal Professional Corporation', 'uploads/banner/1604427706.png', 1, '1105fa1a018d740e', 1, '2020-11-03 11:55:59', '2020-11-03 12:24:56'),
(2, 'Your solutions start here……..', 'N Jahan Legal Professional Corporation', 'uploads/banner/1604426218.png', 1, '2105fa199ea9fcd3', 1, '2020-11-03 11:56:58', '2020-11-03 12:25:17'),
(3, 'Your solutions start here……..', 'N Jahan Legal Professional Corporation', 'uploads/banner/1604426334.png', 1, '3105fa19a5e65104', 1, '2020-11-03 11:58:54', '2020-11-03 11:58:54');

-- --------------------------------------------------------

--
-- Table structure for table `basic_information`
--

CREATE TABLE `basic_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profile_pic` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no_1` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_no_2` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `twitter` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `linkedin` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `youtube` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `pinterest` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `skype` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT '#',
  `footer_short_about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `work_time` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `map` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copy_right` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `basic_information`
--

INSERT INTO `basic_information` (`id`, `full_name`, `logo`, `profile_pic`, `email_1`, `email_2`, `mobile_no_1`, `mobile_no_2`, `facebook`, `twitter`, `linkedin`, `youtube`, `pinterest`, `skype`, `footer_short_about`, `address`, `work_time`, `map`, `copy_right`, `created_at`, `updated_at`) VALUES
(1, 'NUSRAT JAHAN', 'uploads/logo/bFKGOfNsN9SqtdQ6rPvDmp4WDZBj5X0wCpHxD7ff.png', 'uploads/profile_pic/4YHMwfPQrnblJjB0xLCB9aAydLKhsaXECr6O9PzA.png', 'njahan.nusrat@gmail.com', 'info@njahan.ca', '647-226-1614', '647-226-1614', '#', '#', '#', '#', '#', '#', 'We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.  Righteous indignation and dislike men who are so the charms.', '11, MacdufCres, Toronto, ON M1M 1X6', '9:00 AM - 05:00 PM', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2883.281289630025!2d-79.2448586844999!3d43.72548307911883!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89d4cfcb79fd729d%3A0xda7d49e0e9f6cbef!2s11%20Macduff%20Crescent%2C%20Scarborough%2C%20ON%20M1M%201X6%2C%20Canada!5e0!3m2!1sen!2sbd!4v1604147688532!5m2!1sen!2sbd', '© 2020 All Rights Reserved', '2020-11-03 17:15:16', '2020-11-03 17:15:16');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `website` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `phone`, `website`, `message`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Shefat Masum', 'shefat@gmail.com', '+880123234345', 'http://mdshefat.com', 'We denounce with righteous indignation and dislike men who are so beguiled perfectly simple.\r\nand demoralized by the charms of pleasure of the moment, so blinded by desire.', NULL, '1105fa1d8442b3c4', 1, '2020-11-03 16:23:00', '2020-11-03 16:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `descriptive_abouts`
--

CREATE TABLE `descriptive_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `banner` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `descriptive_abouts`
--

INSERT INTO `descriptive_abouts` (`id`, `image`, `banner`, `description`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/descriptive_about/lSqRWArYRLntTWpYKfsWV9QO2epPH7e74QABIpsI.jpeg', 'uploads/descriptive_about/H2YcQPTTzmTCfd6rhjJd8oucA354jILmAeY1t9wg.jpeg', '<div class=\"sec-title mb-24\" style=\"margin-bottom: 24px;\"><h2 class=\"title mb-0\" style=\"margin-right: 0px; margin-left: 0px; line-height: 48px;\">Welcome To N Jahan Legal Professional Corporation</h2></div><p class=\"des mb-36\" style=\"margin-right: 0px; margin-bottom: 36px; margin-left: 0px; line-height: 1.8;\">At N Jahan Legal Professional Corporation, we take the time to understand your concerns and find the best possible path going forward. Our clients and colleagues have acknowledged our sterling work and unblemished work ethics in the areas of Immigration and Refugee Laws, Family, Real Estate, Wills and Estate. The associates of the firm are well equipped to further enrich and enhance the law practice in Ontario at the same time provide valuable legal services to clients over legal matters in Bangladesh.</p><p class=\"des\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8;\">We are a law firm that plays a vital role in helping our clients to prepare for complex legal situations with apt solutions. With an ability to comprehend law with its solution based approach, the firm is a preferred partner for legal assistance to numerous private clients, Banks and Financial Institutions.</p>', 1, NULL, 1, '2020-11-03 12:56:37', '2020-11-03 12:56:37');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `free_consultations`
--

CREATE TABLE `free_consultations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `law_name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `free_consultations`
--

INSERT INTO `free_consultations` (`id`, `name`, `email`, `phone`, `law_name`, `message`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'noakhali', 'shefat@gmail.com', '+880123234345', '2', 'dfadfs', NULL, '1105fa1c5b47f13d', 1, '2020-11-03 15:03:48', '2020-11-03 15:03:48'),
(2, 'Shefat Masum', 'shefat@gmail.com', '+880123234345', '2', 'fa sdf ds', 1, '2105fa1c5c19f470', 1, '2020-11-03 15:04:01', '2020-11-03 15:04:01'),
(3, 'Shefat Masum', 'shefat@gmail.com', '+880123234345', '2', 'fa sdf ds', 1, '3105fa1c5def25f7', 1, '2020-11-03 15:04:30', '2020-11-03 15:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `f_a_q_s`
--

CREATE TABLE `f_a_q_s` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `f_a_q_s`
--

INSERT INTO `f_a_q_s` (`id`, `question`, `answer`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Why should I trust your firm for my case?', 'We cannot solve our problems with the same level of thinking that created them', 1, '1105fa1b2954f1e4', 1, '2020-11-03 13:42:13', '2020-11-03 13:42:13'),
(2, 'What types of cases does your law firm handle?', 'We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.', 1, '2105fa1b307a66ce', 1, '2020-11-03 13:44:07', '2020-11-03 13:44:07'),
(3, 'What are your opening hours?', 'We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.', 1, '3105fa1b31f879a2', 1, '2020-11-03 13:44:31', '2020-11-03 13:44:31'),
(4, 'Do you charge for consultations?', 'We denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms.', 1, '4105fa1b33a5043e', 1, '2020-11-03 13:44:58', '2020-11-03 13:45:54'),
(5, 'test', 'adf', 1, '5105fa1b39f405b7', 0, '2020-11-03 13:46:39', '2020-11-03 13:46:48');

-- --------------------------------------------------------

--
-- Table structure for table `law_lists`
--

CREATE TABLE `law_lists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(130) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `law_lists`
--

INSERT INTO `law_lists` (`id`, `name`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Business Law', 1, '1105fa1b6537e5d5', 1, '2020-11-03 13:58:11', '2020-11-03 13:58:11'),
(2, 'Traffic Law', 1, '2105fa1b65ba89db', 1, '2020-11-03 13:58:19', '2020-11-03 13:58:19'),
(3, 'Criminal Law', 1, '3105fa1b6625d7b3', 1, '2020-11-03 13:58:26', '2020-11-03 13:58:26'),
(4, 'Family Law', 1, '4105fa1b669a062d', 1, '2020-11-03 13:58:33', '2020-11-03 13:58:41'),
(5, 'test', 1, '5105fa1b6782583c', 0, '2020-11-03 13:58:48', '2020-11-03 13:58:51');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_30_134343_create_user_roles_table', 2),
(6, '2020_11_03_164805_create_basic_information_table', 3),
(7, '2020_11_03_173152_create_banners_table', 4),
(8, '2020_11_03_183620_create_short_abouts_table', 5),
(9, '2020_11_03_184948_create_descriptive_abouts_table', 6),
(10, '2020_11_03_185711_create_area_of_practices_table', 7),
(11, '2020_11_03_192638_create_f_a_q_s_table', 8),
(13, '2020_11_03_195033_create_law_lists_table', 9),
(15, '2020_11_03_200137_create_free_consultations_table', 10),
(16, '2020_11_03_204936_create_reviews_table', 10),
(17, '2020_11_03_212730_create_subscribers_table', 11),
(18, '2020_11_03_214905_create_service_detais_table', 12),
(19, '2020_11_03_215835_create_team_leads_table', 13),
(20, '2020_11_03_220616_create_our_privileges_table', 14),
(21, '2020_11_03_221117_create_contact_us_table', 15);

-- --------------------------------------------------------

--
-- Table structure for table `our_privileges`
--

CREATE TABLE `our_privileges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `our_privileges`
--

INSERT INTO `our_privileges` (`id`, `description`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '<h3 class=\"fs-30\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 40px; color: rgb(31, 40, 57); letter-spacing: normal; background-color: rgb(255, 255, 255);\">We accept the honour and privilege, duty and responsibility of serving you in your legal needs.</h3><ul class=\"listing-style modify mb-38\" style=\"margin-right: 0px; margin-bottom: 38px; margin-left: 0px; list-style: outside none none; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\"><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">• We protect and defend your rights and interests.</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">• We conduct all cases faithfully and to the best of our ability.</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">• We neglect no one’s interest and faithfully serve and diligently represent the best interests of our client.</li></ul><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">We shall champion the rule of law and safeguard the rights and freedoms of all persons.</p>', 1, NULL, 1, '2020-11-03 16:10:13', '2020-11-03 16:10:13');

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
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `star` int(11) DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `banner`, `name`, `description`, `star`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/review/f0RPSZ5LN864tTg5Kjqvf2y257RkjDXNvozmfN9c.jpeg', 'cris', '“Sometimes when I’m enjoying time with my children, my lawyer crosses my mind and I feel so indebted. I owe so much of my peace of mind to the hard work of the lawyers at Wood Gold.', 5, 1, '1105fa1c87bd898c', 1, '2020-11-03 15:15:39', '2020-11-03 15:15:39'),
(2, 'uploads/review/nCjc7cA3LXKJgZ6IA8VfAZGYfbrdYu1I1HCF9Pdc.jpeg', 'brayan', '“Sometimes when I’m enjoying time with my children, my lawyer crosses my mind and I feel so indebted. I owe so much of my peace of mind to the hard work of the lawyers at Wood Gold.', 5, 1, '2105fa1c898e1f55', 1, '2020-11-03 15:16:08', '2020-11-03 15:23:58');

-- --------------------------------------------------------

--
-- Table structure for table `service_detais`
--

CREATE TABLE `service_detais` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `service_detais`
--

INSERT INTO `service_detais` (`id`, `description`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, '<h3 class=\"fs-30\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 40px; color: rgb(31, 40, 57); letter-spacing: normal; background-color: rgb(255, 255, 255);\">IMMIGRATION:</h3><h4 style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 30px; color: rgb(31, 40, 57); font-size: 20px; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Helping people from all over the world … Cost-effective solutions to Canadian immigration problems.</h4><p style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">We are usually engaged to find solutions to difficult situations, for example:</p><ul class=\"listing-style modify mb-38\" style=\"margin-right: 0px; margin-bottom: 38px; margin-left: 0px; list-style: outside none none; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\"><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">Where applications to the CIC have been refused</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">Where an immigration position needs to be regularized and made legal</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">Where unusual applications need to be made.</li></ul><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">We give a high quality service, keeping our clients informed of the work that is done for them and the cost incurred.Our task is to achieve security for those whose future is otherwise uncertain, and to navigate carefully so that problems can be avoided.</p><h3 class=\"fs-30\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 40px; color: rgb(31, 40, 57); letter-spacing: normal; background-color: rgb(255, 255, 255);\">FAMILY LAWS:</h3><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">We provide legal services to individuals who need help with divorce and separation, custody, access, child support and spousal support, marriage contracts and cohabitation agreements, property division, legal opinion on foreign divorce, separation agreements and adoption.</p><h3 class=\"fs-30\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 40px; color: rgb(31, 40, 57); letter-spacing: normal; background-color: rgb(255, 255, 255);\">WILLS AND ESTATE:</h3><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Ontarians should have a valid Will. Not having one could lead to various consequences. If you do not make a Will the Provincial laws and regulations will take over and your property may be distributed in a different manner and proportion than you may have originally wished. We encourage our clients to have a Will to better manage their Estate.</p><h3 class=\"fs-30\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 40px; color: rgb(31, 40, 57); letter-spacing: normal; background-color: rgb(255, 255, 255);\">POWER OF ATTORNEY:</h3><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Sometimes clients will have no control over thedecisions regarding their health or unable to handle their financial issues due to health concerns. It is better to have a Power of Attorney in place to handle such situations. We advise our clients to prepare a Power of Attorney along with the Will.</p><h3 class=\"fs-30\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 40px; color: rgb(31, 40, 57); letter-spacing: normal; background-color: rgb(255, 255, 255);\">REAL ESTATE:</h3><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">We PROVIDE free review of your Agreement of Purchase and sale and from thereon offer competitive packages with exceptional services and care.</p><h3 class=\"fs-30\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; font-family: &quot;Playfair Display&quot;, serif; line-height: 40px; color: rgb(31, 40, 57); letter-spacing: normal; background-color: rgb(255, 255, 255);\">NOTARIZATION:</h3><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">We notarize documents, swear affidavits and statutory declarations, provide certified copies of documents.</p>', 1, NULL, 1, '2020-11-03 16:05:35', '2020-11-03 16:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `short_abouts`
--

CREATE TABLE `short_abouts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `short_abouts`
--

INSERT INTO `short_abouts` (`id`, `image`, `description`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/short_about/LTQ5vdbtqtorLyq5Gn9iAxcY1P2mrpX3oL9k00WQ.png', '<div class=\"sec-title mb-24\" style=\"margin-bottom: 24px;\"><h2 class=\"title mb-0\" style=\"margin-right: 0px; margin-left: 0px; line-height: 48px;\">Welcome To N Jahan Legal Professional Corporation</h2></div><p class=\"des mb-36\" style=\"margin-right: 0px; margin-bottom: 36px; margin-left: 0px; line-height: 1.8;\">At N Jahan Legal Professional Corporation, we take the time to understand your concerns and find the best possible path going forward. Our clients and colleagues have acknowledged our sterling work and unblemished work ethics in the areas of Immigration and Refugee Laws, Family, Real Estate, Wills and Estate. The associates of the firm are well equipped to further enrich and enhance the law practice in Ontario at the same time provide valuable legal services to clients over legal matters in Bangladesh.</p><p class=\"des\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8;\">We are a law firm that plays a vital role in helping our clients to prepare for complex legal situations with apt solutions. With an ability to comprehend law with its solution based approach, the firm is a preferred partner for legal assistance to numerous private clients, Banks and Financial Institutions.</p>', 1, NULL, 1, '2020-11-03 12:48:35', '2020-11-03 12:48:35');

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

CREATE TABLE `subscribers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribers`
--

INSERT INTO `subscribers` (`id`, `email`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'myphoto204@gmail.come', 1, '1105fa1cdf019753', 0, '2020-11-03 15:38:56', '2020-11-03 15:39:07'),
(2, 'admin@gmail.com', 1, '2105fa1ce01e8d0d', 1, '2020-11-03 15:39:13', '2020-11-03 15:39:13'),
(3, 'user1@gmail.com', NULL, '3105fa1cf0e002aa', 1, '2020-11-03 15:43:41', '2020-11-03 15:43:42');

-- --------------------------------------------------------

--
-- Table structure for table `team_leads`
--

CREATE TABLE `team_leads` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `creator` int(11) DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `team_leads`
--

INSERT INTO `team_leads` (`id`, `image`, `description`, `creator`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'uploads/image/K13uy3WXX6OZgVDaBuAtm0yf0ZouOK1iZNNPTYgh.png', '<p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">N Jahan, a Commonwealth Chevening Scholar, an acclaimed Advocate, Barrister (of UK &amp; Ontario) has been practising law over 20 years.</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Nusrat gained vast experience in Constitutional, Administrative and Judicial Review Petitions, Quasi Criminal Trials and Applications, Civil Revisions, Appeals and different types of Motions through her legal practice at the Supreme Court of Bangladesh. She worked as an Assistant Attorney General for the Govt. of Bangladesh.</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Nusrat has been providing numerous legal services to Canadians, mainly Bangladeshi Canadians, through her law chamber at the Bangladesh Supreme Court Bar since 2013. Nusrat worked as a Pro Bono Lawyer at the Leasehold Valuation Tribunal (London, UK) and served many litigant clients, who could not afford to pay their legal expenses. She is associated with the Canadian Resource Management Alliance (CRMA), an immigration services office in Dhaka (Navana Tower, Gulshan).</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Nusrat, a former UN staff member (UNDP and WHO), managed the ‘Access to Justice and Promoting Human Rights’ program in UNDP Bangladesh. She played an important role in establishing a Legal Aid Network and the first Human Rights Commission in Bangladesh. She was a key player in implementing the core principles of the United Nations Framework Convention on Tobacco Control (UNFCTC) within the Bangladesh National Tobacco Control Laws and regulations. She also served NGOs and private sectors.</p><p class=\"desc\" style=\"margin-right: 0px; margin-bottom: 26px; margin-left: 0px; line-height: 1.8; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\">Nusrat facilitated many community legal workshops in Toronto jointly with the Osgoode Hall Law School, York University and other Institutions. She currently serves at the Board of Progressive Action for Community Empowerment (PACE), a non-profit in Toronto, Ontario.</p><ul class=\"listing-style modify mb-38\" style=\"margin-right: 0px; margin-bottom: 38px; margin-left: 0px; list-style: outside none none; color: rgb(118, 118, 118); font-family: &quot;Open Sans&quot;, sans-serif; letter-spacing: normal; background-color: rgb(255, 255, 255);\"><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">Barrister and Solicitor, Law Society of Ontario</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">Certificate of Qualification issued by the NCA, the Federation of Law Societies of Canada</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">Bar Vocational Training Course (BVC) - The College of Law, London, UK</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">Post Graduate Diploma in Laws, Brunel University, Middlesex, UK</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">LL.M in Public International Law, University College London, UK</li><li style=\"position: relative; padding-left: 23px; line-height: 34px;\">LLB, LLM, University of Dhaka, Bangladesh</li></ul>', 1, NULL, 1, '2020-11-03 16:05:07', '2020-11-03 16:05:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT 3,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'avatar.png',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `last_name`, `email`, `phone`, `photo`, `email_verified_at`, `password`, `slug`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'N.JAHAN', 'LPC', 'njahan@gmail.com', '016463760150', 'uploads/user/1shefat_125fa1db1744a0c.png', NULL, '$2y$10$uC8v7o28n8zXnPO14GfH4OkKpaeSC4FTlp/lBX0MAAa4yGoljk3AS', '1shefat', 1, 'IO8wKPLSkaYg1ZKmEcuziNteP1ZpUVEOeB5UwN40471fA1WDglyDj2MHHhqt', '2020-07-30 07:42:03', '2020-11-03 16:35:03'),
(2, 2, 'admin', 'press', 'admin@gmail.com', '21324135', 'avatar.png', NULL, '$2y$10$UEbtpXnmgQP9GOjjwOvl8e.M12zGlZtpOhApyvenkZcI17I5/D8Aq', '2admin', 1, NULL, '2020-07-30 07:42:03', '2020-07-30 12:07:30'),
(3, 3, 'user', 'panel', 'user@gmail.com', '2563221120', 'avatar.png', NULL, '$2y$10$UEbtpXnmgQP9GOjjwOvl8e.M12zGlZtpOhApyvenkZcI17I5/D8Aq', 'user1', 1, NULL, '2020-07-30 07:42:03', '2020-07-30 12:35:31'),
(4, 3, 'user2', NULL, 'user2@gmail.com', NULL, 'avatar.png', NULL, '$2y$10$mxtj7LhUaofWcWiN.gfgeuJHcSRbgRubJJWKAYkCr8NY8MYbbINrG', 'user2', 0, NULL, '2020-07-30 12:38:38', '2020-07-30 13:04:08'),
(5, 3, 'user3', NULL, 'user3@gmail.com', NULL, 'avatar.png', NULL, '$2y$10$7Fw/Bl3t6wuBRYiKAlFnSuVDkJ8qA6JJibVnfEDW4bU9UPKROemn6', '5user3', 0, NULL, '2020-07-30 12:41:43', '2020-07-30 13:03:36'),
(20, 3, 'test1', 'Masum', 'test1gmail.com', '+88012323434534', 'uploads/user/_125f42a2c58183b.png', NULL, '$2y$10$BmsD0bVEjcGo7cXrACKhH.MOFwoTu/mxwLE2mceQnH9v7Tvz9rbqi', 'test120', 1, NULL, '2020-08-23 11:09:25', '2020-08-23 11:09:25'),
(21, 3, 'test2', 'testasdf', 'test2@gmail.com', '+880123234345asdf', 'uploads/user/_125f42a54c0e1ea.png', NULL, '$2y$10$6ZgiRl7z7opbTx01k6FUDuvlhA1pcln.CIuZOc2himdouot6heLNO', 'test221', 1, NULL, '2020-08-23 11:20:12', '2020-08-23 11:20:12');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role_serial` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(35) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `name`, `role_serial`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'super admin', '1', 'super-admin', 1, '2020-07-30 13:46:22', NULL),
(2, 'admin', '2', 'admin', 1, '2020-07-30 13:46:22', NULL),
(3, 'user', '3', 'user', 1, '2020-07-30 13:46:22', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `area_of_practices`
--
ALTER TABLE `area_of_practices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basic_information`
--
ALTER TABLE `basic_information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `descriptive_abouts`
--
ALTER TABLE `descriptive_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `free_consultations`
--
ALTER TABLE `free_consultations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `law_lists`
--
ALTER TABLE `law_lists`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `our_privileges`
--
ALTER TABLE `our_privileges`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service_detais`
--
ALTER TABLE `service_detais`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `short_abouts`
--
ALTER TABLE `short_abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribers`
--
ALTER TABLE `subscribers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team_leads`
--
ALTER TABLE `team_leads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `area_of_practices`
--
ALTER TABLE `area_of_practices`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `basic_information`
--
ALTER TABLE `basic_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `descriptive_abouts`
--
ALTER TABLE `descriptive_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `free_consultations`
--
ALTER TABLE `free_consultations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `f_a_q_s`
--
ALTER TABLE `f_a_q_s`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `law_lists`
--
ALTER TABLE `law_lists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `our_privileges`
--
ALTER TABLE `our_privileges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `service_detais`
--
ALTER TABLE `service_detais`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `short_abouts`
--
ALTER TABLE `short_abouts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `subscribers`
--
ALTER TABLE `subscribers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `team_leads`
--
ALTER TABLE `team_leads`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
