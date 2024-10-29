-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 29, 2024 at 07:04 AM
-- Server version: 8.0.30
-- PHP Version: 8.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `email_verified_at` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`id`, `name`, `email`, `password`, `image`, `status`, `email_verified_at`, `created_at`, `updated_at`) VALUES
(1, 'Macy Parsons', 'wirol@mailinator.com', '$2y$12$Zn20Ev.OSzN6WFQRX5.zw.0LgLcqoGrABcGIaoTAAF8IZPhBVGoc.', NULL, '1', '2024-09-09', '2024-09-09 12:08:16', '2024-10-14 02:46:31'),
(2, 'himel', 'himel@gmail.com', '$2y$12$v/GAF4b1vKDp4a0ZAjJ7O.UggrO2dy5NS3xnqrxO6X3UICFYsj6.2', '1726392852.PNG', '1', '2024-09-09', '2024-09-11 09:51:48', '2024-09-16 03:24:49'),
(3, 'Tanisha Woods', 'dyvezonem@mailinator.com', '$2y$12$LpmTpZblcmlyVGXWsoSU6OnRY1Tn6GenQsFDFdMVtNchUuF4m/yNS', NULL, '1', '2024-09-09', '2024-09-12 04:16:31', '2024-09-13 10:27:11'),
(14, 'Guy Kennedy', 'lavek@mailinator.com', '$2y$12$SZaKxafDVvS3AdekSQLtiuh6Gkm27gBry5f/.u.iQMYmRF.SQGXgq', NULL, '1', '2024-09-09', '2024-10-05 02:39:37', '2024-10-05 09:41:04'),
(31, 'Dorian Peterson', 'zaxodaji@mailinator.com', '$2y$12$FVJJhJwvfRTzEJcQoUYY3.RDzQMqV91RaIOTUW.gymLETf7RNDMNy', NULL, '1', '2024-09-09', '2024-10-05 09:06:32', '2024-10-05 09:41:09'),
(32, 'lovelu', 'lovelu500564@gmail.com', '$2y$12$nFfZaypmRY0jxMgOYLktPuT6yXQzTAET8kpHrJovsNgmSP6RdThtK', NULL, '1', '2024-09-09', '2024-10-05 09:27:02', '2024-10-08 09:27:26'),
(33, 'Himels', 'mdnohiduzzamanhimel@gmail.com', '$2y$12$n39/C7IOLz2pjXhak9tmHOSv67CAzkotYucUF/54n8QMYPAF5AWpm', NULL, '1', '2024-09-09', '2024-10-05 09:31:46', '2024-10-05 09:41:15'),
(34, 'Wyatt Lara', 'tybysazi@mailinator.com', '$2y$12$rFjt6WUaO3Q3Wa5QWMqqIu0o0OwDjSfHGVMCpFXzb36d3syX7yCUu', NULL, '1', NULL, '2024-10-16 11:23:21', '2024-10-16 11:24:37');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('info@gmail.com|127.0.0.1', 'i:1;', 1729875814),
('info@gmail.com|127.0.0.1:timer', 'i:1729875814;', 1729875814),
('super@admin.com|127.0.0.1', 'i:1;', 1728321245),
('super@admin.com|127.0.0.1:timer', 'i:1728321245;', 1728321245);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_image`, `deleted_at`, `created_at`, `updated_at`) VALUES
(1, 'ZaRa', '66df067b8e89c.jpg', NULL, '2024-09-09 08:30:21', '2024-10-09 08:37:06'),
(2, 'Education', '66df06fc216f3.png', NULL, '2024-09-09 08:32:28', NULL),
(3, 'Polytics', '66df073c7d750.png', NULL, '2024-09-09 08:33:32', NULL),
(4, 'Sports', '66df078c108c0.png', NULL, '2024-09-09 08:34:52', NULL),
(5, 'Design', '66df083edddba.png', NULL, '2024-09-09 08:37:51', NULL),
(6, 'technology', '66eda2422635c.jpg', NULL, '2024-09-20 10:26:44', NULL),
(7, 'technology', '66eda2451d0f5.jpg', '2024-09-20 10:26:56', '2024-09-20 10:26:45', '2024-09-20 10:26:56'),
(8, 'fashion', '66eda2701be18.jpg', NULL, '2024-09-20 10:27:28', NULL),
(9, 'food', '66eda2a05a1fa.jpg', NULL, '2024-09-20 10:28:16', NULL),
(10, 'international', '66f18fb45ac36.jpg', NULL, '2024-09-23 09:56:39', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
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
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `mail_verifies`
--

CREATE TABLE `mail_verifies` (
  `id` bigint UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mail_verifies`
--

INSERT INTO `mail_verifies` (`id`, `author_id`, `token`, `created_at`, `updated_at`) VALUES
(1, 29, '6701530864fd2', '2024-10-05 08:54:00', '2024-10-05 08:54:00'),
(2, 30, '67015545e8446', '2024-10-05 09:03:34', '2024-10-05 09:03:34'),
(3, 31, '670155f972aa2', '2024-10-05 09:06:33', '2024-10-05 09:06:33'),
(5, 33, '67015be2e58d3', '2024-10-05 09:31:47', '2024-10-05 09:31:47'),
(6, 34, '670ff689be8f8', '2024-10-16 11:23:23', '2024-10-16 11:23:23');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(5, '2024_09_02_152809_create_categories_table', 2),
(6, '2024_09_08_091531_create_tags_table', 3),
(7, '2024_09_09_170638_create_authors_table', 4),
(8, '2024_09_18_142331_create_posts_table', 5),
(9, '2024_09_29_163154_create_populers_table', 6),
(10, '2024_10_01_081033_create_permission_tables', 7),
(11, '2024_10_05_144241_create_mail_verifies_table', 8),
(12, '2024_10_13_171053_create_pass_resets_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pass_resets`
--

CREATE TABLE `pass_resets` (
  `id` bigint UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pass_resets`
--

INSERT INTO `pass_resets` (`id`, `author_id`, `token`, `created_at`, `updated_at`) VALUES
(8, 1, '670cdb01ea919', '2024-10-14 02:49:06', '2024-10-14 02:49:06');

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'user_add', 'web', '2024-10-01 02:28:51', '2024-10-01 02:28:51'),
(2, 'Category_add', 'web', '2024-10-01 02:29:05', '2024-10-01 02:29:05'),
(3, 'Tags_add', 'web', '2024-10-01 02:29:24', '2024-10-01 02:29:24'),
(4, 'post_add', 'web', '2024-10-01 02:30:36', '2024-10-01 02:30:36'),
(5, 'user_delete', 'web', '2024-10-01 02:30:50', '2024-10-01 02:30:50'),
(6, 'tag', 'web', '2024-10-01 02:30:58', '2024-10-01 02:30:58'),
(7, 'post', 'web', '2024-10-01 02:31:07', '2024-10-01 02:31:07'),
(8, 'category', 'web', '2024-10-01 02:31:18', '2024-10-01 02:31:18'),
(9, 'category_del', 'web', '2024-10-01 02:31:47', '2024-10-01 02:31:47');

-- --------------------------------------------------------

--
-- Table structure for table `populers`
--

CREATE TABLE `populers` (
  `id` bigint UNSIGNED NOT NULL,
  `post_id` int NOT NULL,
  `total` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `populers`
--

INSERT INTO `populers` (`id`, `post_id`, `total`, `created_at`, `updated_at`) VALUES
(1, 5, 17, NULL, '2024-10-28 03:05:05'),
(2, 6, 14, NULL, '2024-10-28 03:49:42'),
(3, 4, 3, NULL, '2024-10-28 02:52:11'),
(4, 10, 6, NULL, '2024-10-28 03:48:58'),
(5, 9, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `author_id` int NOT NULL,
  `category_id` int NOT NULL,
  `read_time` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desp` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `priview` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author_id`, `category_id`, `read_time`, `title`, `slug`, `desp`, `thumbnail`, `priview`, `tags`, `status`, `created_at`, `updated_at`) VALUES
(4, 1, 5, 5, 'Hotel Restorant Design', 'hotel restorant design-1962', '<p><span style=\"color: rgb(105, 105, 105); font-family: helvetica, arial, sans-serif; font-size: 20px;\">This hotel restaurant design effortlessly combines elegance, luxury, and comfort. The high ceilings and grand arches, framed in soft beige and gray tones, provide hotel guests with a tranquil and spacious dining experience. Golden accents and warm wood textures bring a touch of modern sophistication, making the space feel both inviting and refined. Subtle touches of natural greenery enhance the cozy atmosphere, while contemporary lighting fixtures cast a stylish glow over the interiors. Here, guests can savor not only exquisite flavors but also the stunning design as they dine in this elegantly appointed restaurant.</span><br></p>', '1726734950.jpeg', '1726734950.jpeg', '8', 1, '2024-09-19 02:35:50', '2024-10-08 09:29:15'),
(5, 1, 4, 5, 'হারলে বা জিতলে কী হবে, সেটা নিয়ে এখন ভাবেন না নাজমুলরা', 'হারলে বা জিতলে কী হবে, সেটা নিয়ে এখন ভাবেন না নাজমুলরা-1220', '<p><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; font-size: 18px;\">নতুন সিরিজ—চেন্নাইয়ে সংবাদ সম্মেলনে দুই দলের প্রতিনিধিদের মুখ থেকেই কথাটি এল। নতুন সিরিজ মানে সবকিছু নতুন, অতীত সাফল্য বড়জোর আত্মবিশ্বাস জোগাতে পারে; কিন্তু মাঠের লড়াইয়ে ওসব কাজে আসবে না।&nbsp;</span><a target=\"_blank\" href=\"https://www.prothomalo.com/sports/cricket/ymds2uqbmv\" style=\"color: var(--lochmara-blue); font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; font-size: 18px;\">ভারতের কোচ গৌতম গম্ভীর আগের সংবাদ সম্মেলনে এসে অভিনন্দন জানিয়েছেন বাংলাদেশকে</a><span style=\"color: rgb(18, 18, 18); font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; font-size: 18px;\">। তা যে পাকিস্তানকে টেস্ট সিরিজে ধবলধোলাইয়ের জন্য, সে তো জানাই। এরপর একটু সতর্কবার্তার সুরেই মনে করিয়ে দেন, (ভারতের বিপক্ষে) এটা কিন্তু নতুন সিরিজ। এরপর বাংলাদেশের অধিনায়ক নাজমুল হোসেন সংবাদ সম্মেলনে এসেও মনে করিয়ে দিলেন, এটা কিন্তু নতুন সিরিজ।</span><br></p>', '1726759928.webp', '1726759928.webp', '9,8', 1, '2024-09-19 09:32:08', '2024-09-19 09:33:15'),
(6, 1, 2, 6, 'শিখো–প্রথম আলো জিপিএ-৫ প্রাপ্ত কৃতী সংবর্ধনা ২০২৪', 'শিখো–প্রথম আলো জিপিএ-৫ প্রাপ্ত কৃতী সংবর্ধনা ২০২৪-2657', '<p style=\"margin-right: 0px; margin-bottom: 8px; margin-left: 0px; font-size: 20px; color: rgb(255, 255, 255); font-family: &quot;Noto Sans Bengali&quot;, sans-serif; padding: 0px; line-height: 30px; max-width: 600px; background-color: rgba(16, 20, 46, 0.2);\">প্রথম আলোর আয়োজনে ও শিক্ষার ডিজিটাল প্ল্যাটফর্ম ‘শিখো’র পৃষ্ঠপোষকতায় আবারও আয়োজিত হতে যাচ্ছে জিপিএ–৫ প্রাপ্ত কৃতী সংবর্ধনা ২০২৪।</p><p style=\"margin-right: 0px; margin-bottom: 8px; margin-left: 0px; font-size: 20px; color: rgb(255, 255, 255); font-family: &quot;Noto Sans Bengali&quot;, sans-serif; padding: 0px; line-height: 30px; max-width: 600px; background-color: rgba(16, 20, 46, 0.2);\">সারা দেশে ২০২৪ সালে এসএসসি ও সমমানের পরীক্ষায় জিপিএ–৫ প্রাপ্ত শিক্ষার্থীদের ৬৪ জেলায় এ সংবর্ধনা দেওয়া হবে। আয়োজনটি পাওয়ার্ড বাই বিকাশ এবং সহযোগিতায় থাকছে কনকর্ড গ্রুপ, ফ্রেশ, বহুব্রীহি, সানকুইক, কনকা–গ্রি, মিউচুয়াল ট্রাস্ট ব্যাংক পিএলসি, বার্জার পেইন্টস বাংলাদেশ লিমিটেড, ইউসিএসআই ইউনিভার্সিটি বাংলাদেশ শাখা ক্যাম্পাস, ইউনিভার্সিটি অব লিবারেল আর্টস বাংলাদেশ, এটিএন বাংলা ও প্রথম আলো বন্ধুসভা।</p>', '1726842576.webp', '1726842577.webp', '10,8', 1, '2024-09-20 08:29:37', '2024-09-20 08:30:00'),
(7, 2, 3, 5, 'Torch march-meeting in the capital to demand justice for killing two people in two universities', 'শিখো–প্রথম আলো জিপিএ-৫ প্রাপ্ত কৃতী সংবর্ধনা ২০২৪-2657', '<p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; color: rgb(18, 18, 18);\"><font style=\"vertical-align: inherit;\">The students protested and held torch marches and rallies to demand a fair investigation into the killing of two people in Dhaka and Jahangirnagar universities <b>through mob violence.</b></font></p><p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; color: rgb(18, 18, 18);\"><font style=\"vertical-align: inherit;\">This torch march and rally was held in the capital yesterday Thursday. The general secretary of Bangladesh Students Federation Saikat Arif addressed the rally led by author-anthropologist Rehnuma Ahmed, artist Farzana Wahid Shayan, organizer of Samgeet Cultural Complex Jihad Hossain, president of Bangladesh Students Federation Moshiur Rahman Khan Richard, general secretary of Bangladesh Chhatra League (JSD) Mahmudul Hasan Mukt and</font></p>', '1726842773.webp', '1726842773.webp', '2,4,9', 1, '2024-09-20 08:32:53', '2024-09-20 08:35:22'),
(8, 2, 4, 5, '\'We want to score another 120-150\', says Jadeja', 'শিখো–প্রথম আলো জিপিএ-৫ প্রাপ্ত কৃতী সংবর্ধনা ২০২৪-2657', '<p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; color: rgb(18, 18, 18);\"><font style=\"vertical-align: inherit;\">How long India\'s lead will be and what Bangladesh can do – or what they can do in the second innings – is the question at the end of the second day of the Chennai Test. Ravindra Jadeja spoke about India\'s target in the second innings and their plans against Bangladesh in a short interview given to broadcast television at the end of the day\'s play.</font></p><p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; color: rgb(18, 18, 18);\"><font style=\"vertical-align: inherit;\">India\'s spinning all-rounder Jadeja said about his goals, \'We have to make a good score in the second innings. We want to add another 120 to 150 runs.\' After that, about the plan against Bangladesh in the second innings, Jadeja said, \'I want to get them all out as soon as possible.\'</font></p>', '1726842903.webp', '1726842903.webp', '10,9', 1, '2024-09-20 08:35:03', '2024-09-20 08:35:20'),
(9, 2, 10, 5, 'যোগাযোগের যন্ত্র ব্যবহারে নিষেধাজ্ঞা ইরানের রেভল্যুশনারি গার্ডসের', 'যোগাযোগের যন্ত্র ব্যবহারে নিষেধাজ্ঞা ইরানের রেভল্যুশনারি গার্ডসের-2774', '<div class=\"story-page-hero RJoJJ\" style=\"cursor: text; margin: var(--space2_4) auto var(--space1_6); position: relative; max-width: 622px; font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; font-size: 18px;\"><div class=\"cdKYX\" style=\"--meta-color: var(--light-grey); border-bottom: var(--border1-0_12); font-size: var(--fs-16); margin: var(--space0_8) 0 0; padding-bottom: var(--space1_0);\"><figcaption class=\"story-element-image-caption custom-gallery-image\" style=\"\"><b style=\"background-color: rgb(255, 255, 0);\">ইরানের রাজধানী তেহরানে একটি সমাবেশে রেভল্যুশনারি গার্ডস কোরের সদস্যরা<span class=\"custom-gallery-image _3bj2K SZnJd\" style=\"--title-color: var(--light-grey); font-size: var(--fs-13); font-style: italic; margin-left: var(--space0_8); padding-left: var(--space0_8); position: relative;\">ফাইল ছবি: রয়টার্স</span></b></figcaption></div></div><div class=\"VzzDZ\" style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; font-size: 18px;\"><div id=\"ef19b690-fcc0-4d90-8444-cf4a572e24d6\"><div class=\"storyCard eyOoS\" style=\"--borderColor: var(--primaryColor); color: var(--black); font-size: var(--fs-13); margin: var(--space2_4) auto 0; max-width: 622px;\"><div class=\"   \r\n                  story-element\" style=\"margin-bottom: var(--space1_6);\"><div class=\"story-element story-element-text\" style=\"margin: 0px auto; max-width: 622px; padding: 0px;\"><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7;\">লেবাননে সশস্ত্র গোষ্ঠী হিজবুল্লাহর পেজার (যোগাযোগের যন্ত্র) ও ওয়াকিটকিতে বিস্ফোরণের ঘটনার পর সতর্ক অবস্থান নিয়েছে ইরানের প্রভাবশালী রেভল্যুশনারি গার্ডস কোর (আইআরজিসি)। নিজেদের সদস্যদের যেকোনো ধরনের যোগাযোগের যন্ত্র ব্যবহারের ওপর নিষেধাজ্ঞা দিয়েছে তারা। ইরানের জ্যেষ্ঠ এক নিরাপত্তা কর্মকর্তা রয়টার্সকে এ তথ্য নিশ্চিত করেছেন।</p><p style=\"font-family: var(--font-2); margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7;\">ওই কর্মকর্তা রয়টার্সকে বলেছেন, নিজেদের ব্যবহার করা যন্ত্রগুলো নিয়ে বড় ধরনের পদক্ষেপ নিয়েছে আইআরজিসি। শুধু যোগাযোগ নয়, সব ধরনের যন্ত্র পরীক্ষা–নিরীক্ষা করে দেখছে তারা। এই যন্ত্রগুলোর বেশির ভাগই নিজস্বভাবে ইরানে তৈরি, না হয় চীন ও রাশিয়া থেকে আমদানি করা।</p></div></div></div></div></div>', '1727107095.webp', '1727107095.webp', '2,4,9', 1, '2024-09-23 09:58:15', '2024-09-25 08:47:13'),
(10, 2, 10, 6, '‘হত্যাকারী’ অভিবাসীরা যুক্তরাষ্ট্রে খারাপ জিন ছড়াচ্ছে: ডোনাল্ড ট্রাম্প', '‘হত্যাকারী’ অভিবাসীরা যুক্তরাষ্ট্রে খারাপ জিন ছড়াচ্ছে: ডোনাল্ড ট্রাম্প-2671', '<p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; color: rgb(18, 18, 18);\"><b>অভিবাসীবিরোধী বক্তব্য দিয়ে আবারও তোলপাড় সৃষ্টি করেছেন ডোনাল্ড ট্রাম্প। মার্কিন প্রেসিডেন্ট নির্বাচনে রিপাবলিকান পার্টির এই প্রার্থীর দাবি, খুনের দায়ে দোষী সাব্যস্ত হাজারো অভিবাসী যুক্তরাষ্ট্রে ‘খারাপ জিন’ ছড়াচ্ছে।</b></p><p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; color: rgb(18, 18, 18);\">গতকাল সোমবার একটি রেডিওতে দেওয়া সাক্ষাৎকারে ট্রাম্প এ মন্তব্য করেন। সাক্ষাৎকার নেন রেডিও টক শো উপস্থাপক হিউ হিউইট। এ সময় মার্কিন ভাইস প্রেসিডেন্ট কমলা হ্যারিসের অভিবাসননীতির কড়া সমালোচনা করেন তিনি।</p><p style=\"font-family: Shurjo, &quot;Siyam Rupali&quot;, Roboto, Arial, Helvetica, monospace; margin-right: 0px; margin-bottom: var(--space1_6); margin-left: 0px; padding: 0px; font-size: var(--fs-18); line-height: 1.7; color: rgb(18, 18, 18);\">ডোনাল্ড ট্রাম্প বলেন, উন্মুক্ত সীমান্ত দিয়ে যুক্তরাষ্ট্রে ঢুকে পড়েছে ১৩ হাজার খুনি। তারা দেশটিতে সুখে–শান্তিতে বসবাস করছে। ট্রাম্পের এ মন্তব্য মার্কিন অভিবাসন ও শুল্ক আইন প্রয়োগকারী সংস্থার (আইসিই) তথ্যের সঙ্গে সাংঘর্ষিক। হোয়াইট হাউস তাৎক্ষণিকভাবে এ মন্তব্যের নিন্দা জানিয়েছে।</p>', '1728401779.webp', '1728401779.webp', '12,9,13', 1, '2024-10-08 09:36:19', '2024-10-08 09:37:03');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `team_id` bigint UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `team_id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, NULL, 'Super_Admin', 'web', '2024-10-01 03:29:10', '2024-10-01 03:29:10'),
(2, NULL, 'Admin', 'web', '2024-10-01 07:11:12', '2024-10-01 07:11:12'),
(3, NULL, 'Editor', 'web', '2024-10-01 08:14:22', '2024-10-01 08:14:22');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 1),
(2, 1),
(3, 1),
(4, 1),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(2, 2),
(3, 2),
(4, 2),
(6, 2),
(8, 2),
(2, 3),
(8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('n3tjeMSLmYamQwqoPFXYDnUR9gjXJWXxPauCfE6q', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoicEYyU1d6cFJYTGFXYVVRMzlIVDdXS1c1aVN4eUI4VmF2U2RicTZrUSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1730108992);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` bigint UNSIGNED NOT NULL,
  `tag_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`, `created_at`, `updated_at`) VALUES
(2, 'BNP', '2024-09-08 03:34:34', NULL),
(4, 'BAP', '2024-09-08 03:35:15', NULL),
(8, 'Students', '2024-09-12 02:45:56', NULL),
(9, 'polythic', '2024-09-19 02:37:28', NULL),
(10, 'Education', '2024-09-19 02:37:38', NULL),
(11, 'Sport', '2024-09-20 10:16:48', NULL),
(12, 'Criem', '2024-09-20 10:17:07', NULL),
(13, 'World', '2024-09-20 10:17:16', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admins', 'admin@gmail.com', NULL, '$2y$12$ccncrVadNvhlSd72TrA5LOqMdF9OVnfInN3873jad6D0asexi6bZ.', '1725206260.jpg', NULL, '2024-08-26 11:48:16', '2024-09-01 09:57:40'),
(2, 'Grace Rivera', 'zopy@mailinator.com', NULL, '$2y$12$yAUXabW6SJb.w58Q1Z5HNOCTm1LJxocIOlq2forA9/DvSV7mfpKdq', NULL, NULL, '2024-08-26 11:48:25', '2024-08-26 11:48:25'),
(6, 'Drake Chandler', 'vozucezyn@mailinator.com', NULL, '$2y$12$HUKDaWxS4xOUEwYLAj5FGO4V6OWHUMOO8djSgLlfPfYAiXHxMx9GO', NULL, NULL, '2024-09-01 12:26:51', '2024-09-01 12:26:51'),
(7, 'Ursula Austin', 'kijega@mailinator.com', NULL, '$2y$12$KquvZH/OPTsAcHen8kzs0OMp1s9gWCs1JTO3iLBPfYJovImldXfKK', NULL, NULL, '2024-09-01 12:27:06', '2024-09-01 12:27:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `authors_email_unique` (`email`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
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
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mail_verifies`
--
ALTER TABLE `mail_verifies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`team_id`,`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_permissions_permission_id_foreign` (`permission_id`),
  ADD KEY `model_has_permissions_team_foreign_key_index` (`team_id`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`team_id`,`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`),
  ADD KEY `model_has_roles_role_id_foreign` (`role_id`),
  ADD KEY `model_has_roles_team_foreign_key_index` (`team_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pass_resets`
--
ALTER TABLE `pass_resets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Indexes for table `populers`
--
ALTER TABLE `populers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_team_id_name_guard_name_unique` (`team_id`,`name`,`guard_name`),
  ADD KEY `roles_team_foreign_key_index` (`team_id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tags_tag_name_unique` (`tag_name`);

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
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `mail_verifies`
--
ALTER TABLE `mail_verifies`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pass_resets`
--
ALTER TABLE `pass_resets`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `populers`
--
ALTER TABLE `populers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Constraints for dumped tables
--

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
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
