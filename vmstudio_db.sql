-- phpMyAdmin SQL Dump
-- version 5.2.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 20, 2026 at 05:32 PM
-- Server version: 8.4.7
-- PHP Version: 8.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vmstudio`
--
CREATE DATABASE IF NOT EXISTS `vmstudio` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
USE `vmstudio`;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

DROP TABLE IF EXISTS `banners`;
CREATE TABLE IF NOT EXISTS `banners` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Capture Life in Motion', 'Step into Visionary Motion Studio, where every frame tells a story and every moment becomes timeless.', 'banners/01KDG40Q7110J0WXRG7TWXNEVG.jpg', '2025-12-27 08:54:49', '2025-12-27 08:54:49'),
(2, 'Your Vision, Our Lens', 'At Visionary Motion Studio, we turn your ideas into stunning visuals that move and inspire.', 'banners/01KDG43ESYXAKV18M5GRG1P570.jpg', '2025-12-27 08:56:19', '2025-12-27 08:56:19'),
(3, 'Where Creativity Meets Clarity', 'Experience photography and videography like never before—crisp, vibrant, and full of life at Visionary Motion Studio.', 'banners/01KDG44RB5YXP7K8BYGZ92BFT7.jpg', '2025-12-27 08:57:01', '2025-12-27 08:57:01');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

DROP TABLE IF EXISTS `cache`;
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0:timer', 'i:1767435520;', 1767435520),
('laravel-cache-da4b9237bacccdf19c0760cab7aec4a8359010b0', 'i:1;', 1767435520),
('laravel-cache-livewire-rate-limiter:b9f79235b92dbe38cbf5ada85ef36e3df0f92c3a:timer', 'i:1768925655;', 1768925655),
('laravel-cache-livewire-rate-limiter:b9f79235b92dbe38cbf5ada85ef36e3df0f92c3a', 'i:1;', 1768925655);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

DROP TABLE IF EXISTS `cache_locks`;
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `featured_photos`
--

DROP TABLE IF EXISTS `featured_photos`;
CREATE TABLE IF NOT EXISTS `featured_photos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `featured_photos`
--

INSERT INTO `featured_photos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(17, 'featured-photos/featured_69551a9ccde37.webp', '2025-12-31 06:59:12', '2025-12-31 06:59:12'),
(16, 'featured-photos/featured_69551a73c142b.webp', '2025-12-31 06:58:31', '2025-12-31 06:58:31'),
(15, 'featured-photos/featured_69551a6464b3f.webp', '2025-12-31 06:58:16', '2025-12-31 06:58:16'),
(14, 'featured-photos/featured_69551a44f0fb9.webp', '2025-12-31 06:57:45', '2025-12-31 06:57:45'),
(13, 'featured-photos/featured_69551a3a00707.webp', '2025-12-31 06:57:34', '2025-12-31 06:57:34'),
(12, 'featured-photos/featured_69551a202e47f.webp', '2025-12-31 06:57:08', '2025-12-31 06:57:08'),
(11, 'featured-photos/featured_69551a129de7e.webp', '2025-12-31 06:56:54', '2025-12-31 06:56:54'),
(10, 'featured-photos/featured_695519dbb9a52.webp', '2025-12-31 06:55:04', '2025-12-31 06:55:59');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

DROP TABLE IF EXISTS `jobs`;
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `queue` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

DROP TABLE IF EXISTS `job_batches`;
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_12_21_155339_create_portfolio_categories_table', 2),
(5, '2025_12_21_160408_create_portfolio_items_table', 2),
(6, '2025_12_21_160413_create_services_table', 2),
(7, '2025_12_21_160418_create_testimonials_table', 2),
(8, '2025_12_21_160423_create_seo_settings_table', 2),
(9, '2025_12_22_124321_add_images_to_portfolio_items_table', 3),
(10, '2025_12_23_111205_create_portfolio_images_table', 4),
(11, '2025_12_23_111220_create_portfolio_tools_table', 4),
(12, '2025_12_23_111940_create_portfolio_items_table', 5),
(13, '2025_12_24_133035_change_image_url_to_json_in_portfolio_images_table', 6),
(14, '2025_12_26_163328_add_meta_columns_to_portfolio_items_table', 7),
(15, '2025_12_27_141516_create_banners_table', 8),
(16, '2025_12_27_141524_create_featured_photos_table', 8),
(17, '2025_12_27_143725_add_image_to_banners_table', 9),
(18, '2025_12_29_070121_create_spotlights_table', 10),
(19, '2025_12_29_120231_change_spotlights_image_to_json', 11),
(20, '2025_12_29_152802_refactor_portfolio_relations', 12),
(21, '2025_12_31_072339_create_videos_table', 13),
(22, '2025_12_31_140612_add_meta_fields_to_portfolio_tools_table', 14);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_categories`
--

DROP TABLE IF EXISTS `portfolio_categories`;
CREATE TABLE IF NOT EXISTS `portfolio_categories` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `sort_order` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `portfolio_categories_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_categories`
--

INSERT INTO `portfolio_categories` (`id`, `name`, `slug`, `description`, `cover_image`, `status`, `sort_order`, `created_at`, `updated_at`) VALUES
(4, 'Portrait Photography', 'portrait-photography', '<p>Portrait photography captures the personality, mood, and essence of a person or group, highlighting their expressions and emotions through carefully composed images.</p>', 'portfolio/categories/portfolio_cat_6955267a1a427.webp', 1, 0, '2025-12-31 07:49:50', '2025-12-31 07:49:50'),
(5, 'Wedding Photography', 'wedding-photography', '<p>Our wedding photography service focuses on telling your love story through beautiful, natural, and emotional images. We capture every detail of your special day—from candid moments to traditional rituals—ensuring memories that last a lifetime with elegance and authenticity.</p>', 'portfolio/categories/portfolio_cat_695527a2011d9.webp', 1, 0, '2025-12-31 07:54:46', '2025-12-31 07:54:46');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_images`
--

DROP TABLE IF EXISTS `portfolio_images`;
CREATE TABLE IF NOT EXISTS `portfolio_images` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_category_id` bigint UNSIGNED DEFAULT NULL,
  `image_url` json NOT NULL,
  `caption` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolio_images_portfolio_category_id_foreign` (`portfolio_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_images`
--

INSERT INTO `portfolio_images` (`id`, `portfolio_category_id`, `image_url`, `caption`, `created_at`, `updated_at`) VALUES
(4, 4, '[\"portfolio/images/portfolio_695526d873a63.webp\", \"portfolio/images/portfolio_695526d9189ec.webp\", \"portfolio/images/portfolio_6958ecd820c87.webp\", \"portfolio/images/portfolio_695526d979de4.webp\"]', 'Test Image', '2025-12-31 07:46:44', '2026-01-03 04:33:00'),
(3, 5, '[\"portfolio/images/portfolio_6955233e4c566.webp\", \"portfolio/images/portfolio_6955233e81f61.webp\", \"portfolio/images/portfolio_6955233eecfc9.webp\", \"portfolio/images/portfolio_6955233f3e0bd.webp\"]', 'wedding-photography', '2025-12-31 07:36:03', '2025-12-31 07:55:11');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_items`
--

DROP TABLE IF EXISTS `portfolio_items`;
CREATE TABLE IF NOT EXISTS `portfolio_items` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `date` date DEFAULT NULL,
  `category` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `testimonial` text COLLATE utf8mb4_unicode_ci,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL DEFAULT '0',
  `sort_order` int NOT NULL DEFAULT '0',
  `portfolio_category_id` bigint UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolio_items_portfolio_category_id_foreign` (`portfolio_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_items`
--

INSERT INTO `portfolio_items` (`id`, `title`, `meta_title`, `meta_description`, `date`, `category`, `description`, `testimonial`, `client_name`, `is_featured`, `sort_order`, `portfolio_category_id`, `created_at`, `updated_at`) VALUES
(1, 'Couple Wedding', NULL, NULL, '2025-12-15', NULL, '<p>Capture the magic of love with our couple and wedding photography. We specialize in creating timeless memories, from intimate moments to grand celebrations. Our team focuses on genuine emotions, candid smiles, and beautiful storytelling, ensuring every frame reflects the love and joy of your special day. Perfect for engagements, pre-wedding shoots, and wedding ceremonies.</p>', '<p>We are so grateful for the amazing photos captured on our wedding day. The team was professional, friendly, and made us feel comfortable throughout. Every moment was beautifully preserved, and the photos truly tell our love story. Highly recommend them!</p>', 'Anisha Gurung & Rohan Rai', 1, 1, 1, '2025-12-24 06:29:20', '2025-12-26 10:15:53'),
(2, 'Samir Portait Photos', NULL, NULL, '2025-12-24', NULL, '<p>eihdihda</p>', '<p>shdiwhd</p>', 'Samir Shakya', 1, 2, 2, '2025-12-27 04:34:20', '2025-12-27 04:34:20');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio_tools`
--

DROP TABLE IF EXISTS `portfolio_tools`;
CREATE TABLE IF NOT EXISTS `portfolio_tools` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `portfolio_category_id` bigint UNSIGNED DEFAULT NULL,
  `tool_name` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `portfolio_tools_portfolio_category_id_foreign` (`portfolio_category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `portfolio_tools`
--

INSERT INTO `portfolio_tools` (`id`, `portfolio_category_id`, `tool_name`, `meta_title`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 4, '<h3>Services:</h3><ol start=\"1\"><li><p>Camera Canon</p></li><li><p>Makeup</p></li><li><p>Clothes</p></li></ol>', NULL, NULL, '2025-12-27 04:35:37', '2025-12-31 07:51:45'),
(2, 5, '<p>We make your wedding moments unforgettable with our complete photography services. From getting ready shots to the final celebration, we capture every emotion with care and creativity.</p><p><strong>Services Offered:</strong></p><ul><li><p>Professional bridal and groom makeup</p></li><li><p>Wedding attire and wardrobe styling</p></li><li><p>Hair styling and accessories</p></li><li><p>Creative props and backdrops</p></li><li><p>Pre-wedding, wedding day, and post-wedding photography</p></li><li><p>Couple and family portraits</p></li><li><p>Event coverage from ceremonies to receptions</p></li><li><p>Customized photo albums and prints</p></li></ul>', NULL, NULL, '2025-12-31 05:52:42', '2025-12-31 07:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `seo_settings`
--

DROP TABLE IF EXISTS `seo_settings`;
CREATE TABLE IF NOT EXISTS `seo_settings` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `page` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `meta_description` text COLLATE utf8mb4_unicode_ci,
  `meta_keywords` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `seo_settings_page_unique` (`page`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

DROP TABLE IF EXISTS `services`;
CREATE TABLE IF NOT EXISTS `services` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci,
  `full_description` longtext COLLATE utf8mb4_unicode_ci,
  `icon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `services_slug_unique` (`slug`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `slug`, `short_description`, `full_description`, `icon`, `cover_image`, `status`, `created_at`, `updated_at`) VALUES
(4, 'Portrait & Studio Photography', 'portrait-studio-photography', 'Clean, professional, and expressive studio photography sessions.', '<p>Our portrait and studio photography services focus on capturing your best expressions in a comfortable studio environment. Whether for personal, family, or professional use, we deliver sharp, well-lit, and beautifully composed portraits.</p>', NULL, 'services/01KD84AH1H8JTQFXXFSW4JWFDD.jpg', 1, '2025-12-24 06:26:15', '2025-12-24 06:26:15'),
(3, 'Wedding Photography', 'wedding-photography', 'Timeless wedding photography capturing real emotions and unforgettable moments.', '<p>Our wedding photography service focuses on telling your love story through beautiful, natural, and emotional images. We capture every detail of your special day—from candid moments to traditional rituals—ensuring memories that last a lifetime with elegance and authenticity.</p>', NULL, 'services/01KD63K2992VGMVW0GE7VXE9MP.webp', 1, '2025-12-23 11:34:57', '2025-12-23 11:34:57');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('uQCgyqKi3sjeEINLfVxZfYOJAYsRIhm3evYkA1JQ', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/144.0.0.0 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiaFloZlZmZFJsa1RoTGlOS3FOQ1JleVRPYjN2SzBxelQxUmNwUkhmMCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly92bXN0dWRpby5sb2NhbCI7czo1OiJyb3V0ZSI7czo4OiJob21lcGFnZSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjA6e31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTIkb3FXODA2eXlxVS4ubS5yWDJobGdST1daM1NScTEyZFZoamI2bHZweDNDbnkuNFV3dmoxOE8iO3M6NjoidGFibGVzIjthOjc6e3M6NDA6IjI0YjhhZjk5ODI3YWZhYzRmNDJiZmM5ZTFlNTFhZTFhX2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjIyOiJwb3J0Zm9saW9DYXRlZ29yeS5uYW1lIjtzOjU6ImxhYmVsIjtzOjE4OiJQb3J0Zm9saW8gQ2F0ZWdvcnkiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6ImltYWdlX3VybCI7czo1OiJsYWJlbCI7czo1OiJJbWFnZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NzoiY2FwdGlvbiI7czo1OiJsYWJlbCI7czo3OiJDYXB0aW9uIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoiY3JlYXRlZF9hdCI7czo1OiJsYWJlbCI7czo3OiJDcmVhdGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI0NTEzYzhlNGRhMDU4M2RmYjg5MjRkODQ0ZjU0MGE5NV9jb2x1bW5zIjthOjM6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoyMjoicG9ydGZvbGlvQ2F0ZWdvcnkubmFtZSI7czo1OiJsYWJlbCI7czo5OiJQb3J0Zm9saW8iO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6InRvb2xfbmFtZSI7czo1OiJsYWJlbCI7czo5OiJUb29sIE5hbWUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjc6IkNyZWF0ZWQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9fXM6NDA6IjlmNmU3MjMyMTM2N2U1Y2IzM2U4OTQzNGQ1ZmQ4ZjBjX2NvbHVtbnMiO2E6NDp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6ImltYWdlIjtzOjU6ImxhYmVsIjtzOjU6IkltYWdlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MTthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo1OiJ0aXRsZSI7czo1OiJsYWJlbCI7czo1OiJUaXRsZSI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjE7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjA7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtOO31pOjI7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6ImNyZWF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IkNyZWF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO31pOjM7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6MTA6InVwZGF0ZWRfYXQiO3M6NToibGFiZWwiO3M6MTA6IlVwZGF0ZWQgYXQiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjowO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjoxO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7YjoxO319czo0MDoiYjJmYmY2ZWVjNDcxOGFiNTU3M2I1NTU3MGM3NGNkOTdfY29sdW1ucyI7YTozOntpOjA7YTo3OntzOjQ6InR5cGUiO3M6NjoiY29sdW1uIjtzOjQ6Im5hbWUiO3M6NToiaW1hZ2UiO3M6NToibGFiZWwiO3M6NToiSW1hZ2UiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJDcmVhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fX1zOjQwOiIwMWVhMjEwZmIzMjcxOGVkZTY1OWUxZWNhMDYwOTI5MV9jb2x1bW5zIjthOjM6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czo0OiJuYW1lIjtzOjU6ImxhYmVsIjtzOjQ6Ik5hbWUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6ImltYWdlIjtzOjU6ImxhYmVsIjtzOjU6IkltYWdlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoiY3JlYXRlZF9hdCI7czo1OiJsYWJlbCI7czo3OiJDcmVhdGVkIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fX1zOjQwOiI2YzQ0NDMyNDJjYTI3MTNjNDdhMWZjYjAwMDYyYjVkM19jb2x1bW5zIjthOjY6e2k6MDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMjoiY2xpZW50X3Bob3RvIjtzOjU6ImxhYmVsIjtzOjEyOiJDbGllbnQgSW1hZ2UiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjExOiJjbGllbnRfbmFtZSI7czo1OiJsYWJlbCI7czoxMToiQ2xpZW50IG5hbWUiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToyO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjY6InJhdGluZyI7czo1OiJsYWJlbCI7czo2OiJSYXRpbmciO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTozO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjY6InN0YXR1cyI7czo1OiJsYWJlbCI7czo2OiJTdGF0dXMiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aTo0O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJjcmVhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJDcmVhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9aTo1O2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjEwOiJ1cGRhdGVkX2F0IjtzOjU6ImxhYmVsIjtzOjEwOiJVcGRhdGVkIGF0IjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MDtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MTtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO2I6MTt9fXM6NDA6ImM2MDlmMzVmNTY0NThiMzAzZGViZWJmZTMwNzYzNmQ5X2NvbHVtbnMiO2E6NTp7aTowO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjk6InRodW1ibmFpbCI7czo1OiJsYWJlbCI7czo5OiJUaHVtYm5haWwiO3M6ODoiaXNIaWRkZW4iO2I6MDtzOjk6ImlzVG9nZ2xlZCI7YjoxO3M6MTI6ImlzVG9nZ2xlYWJsZSI7YjowO3M6MjQ6ImlzVG9nZ2xlZEhpZGRlbkJ5RGVmYXVsdCI7Tjt9aToxO2E6Nzp7czo0OiJ0eXBlIjtzOjY6ImNvbHVtbiI7czo0OiJuYW1lIjtzOjU6InRpdGxlIjtzOjU6ImxhYmVsIjtzOjU6IlRpdGxlIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MjthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMToieW91dHViZV91cmwiO3M6NToibGFiZWwiO3M6OToiRW1iZWQgVVJMIjtzOjg6ImlzSGlkZGVuIjtiOjA7czo5OiJpc1RvZ2dsZWQiO2I6MTtzOjEyOiJpc1RvZ2dsZWFibGUiO2I6MDtzOjI0OiJpc1RvZ2dsZWRIaWRkZW5CeURlZmF1bHQiO047fWk6MzthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoiY3JlYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiQ3JlYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fWk6NDthOjc6e3M6NDoidHlwZSI7czo2OiJjb2x1bW4iO3M6NDoibmFtZSI7czoxMDoidXBkYXRlZF9hdCI7czo1OiJsYWJlbCI7czoxMDoiVXBkYXRlZCBhdCI7czo4OiJpc0hpZGRlbiI7YjowO3M6OToiaXNUb2dnbGVkIjtiOjA7czoxMjoiaXNUb2dnbGVhYmxlIjtiOjE7czoyNDoiaXNUb2dnbGVkSGlkZGVuQnlEZWZhdWx0IjtiOjE7fX19fQ==', 1768930209);

-- --------------------------------------------------------

--
-- Table structure for table `spotlights`
--

DROP TABLE IF EXISTS `spotlights`;
CREATE TABLE IF NOT EXISTS `spotlights` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` json DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `spotlights`
--

INSERT INTO `spotlights` (`id`, `name`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Sanisha Bhattarai', '[\"spotlights/01KDN07YGBHXSY4MACSS7SJYJJ.jpg\", \"spotlights/01KDN07YHDWZJX3VGR3C782ZK9.jpg\", \"spotlights/01KDN07YHF9B4XNS657B3F2EXX.jpg\", \"spotlights/01KDN07YHJJ5ZEWFJQBW8WVGZT.jpg\", \"spotlights/01KDN07YHM4Y1TTXKPH83SC13J.jpg\", \"spotlights/01KDN07YHX05MQHDJASTWCJVYJ.jpg\"]', '2025-12-29 06:25:04', '2025-12-29 06:25:04'),
(2, 'Barsha Raut', '[\"spotlights/01KDN09APET2S7995RD2Z47X7F.jpg\", \"spotlights/01KDN09APJW4A3QHWPTXAV7XMN.jpg\", \"spotlights/01KDN09APPS4V0B6J859D58602.jpg\"]', '2025-12-29 06:25:49', '2025-12-29 06:25:49'),
(3, 'Durgesh Thapa', '[\"spotlights/01KDN0B35BM8S6MCPJJ7WG6H3R.jpg\", \"spotlights/01KDN0B35ES17EZ0C7TV06TFNY.jpg\", \"spotlights/01KDN0B35G3FCRBNTF5VF029T1.jpg\", \"spotlights/01KDN0B35KJ4GBEDRZV3BR4D8A.jpg\", \"spotlights/01KDN0B35VTT0EXS4DTD9P9WZT.jpg\"]', '2025-12-29 06:26:47', '2025-12-29 06:26:47');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

DROP TABLE IF EXISTS `testimonials`;
CREATE TABLE IF NOT EXISTS `testimonials` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `client_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `client_photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `review` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` tinyint NOT NULL DEFAULT '5',
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `client_name`, `client_photo`, `review`, `rating`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Ramesh Shrestha', 'testimonials/01KDDMWRGAYSC38JR29EETJY32.jpg', 'I had an excellent experience at this photo studio. The photographers were friendly and professional, and the photos came out amazing. Highly recommended!', 5, 1, '2025-12-26 09:52:02', '2025-12-26 09:52:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sahil', 'shakyasahil9860@gmail.com', NULL, '$2y$12$8jnwbq4u6yjf/DmaIhXjG.5uymLxpeVken/Os0jogQsUePesMhvri', NULL, '2025-12-21 10:06:42', '2025-12-21 10:06:42'),
(2, 'superadmin', 'superadmin@gmail.com', NULL, '$2y$12$oqW806yyqU..m.rX2hlgROWZ3SRq12dVhjb6lvpx3Cny.4Uwvj18O', NULL, '2025-12-23 04:44:27', '2025-12-26 01:31:58');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

DROP TABLE IF EXISTS `videos`;
CREATE TABLE IF NOT EXISTS `videos` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `youtube_url` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`id`, `title`, `youtube_url`, `thumbnail`, `created_at`, `updated_at`) VALUES
(1, 'Behind the scenes in our Photography Studio', 'https://www.youtube.com/embed/augfZ6lJnvw', 'videos/thumbnails/01KDSNQ2W2SD74YQY8XZS0J3T6.jpg', '2025-12-31 01:56:15', '2025-12-31 01:57:18'),
(2, 'Shooting a Luxury Fashion Editorial | Studio Behind The Scenes & Lighting Breakdown', 'https://www.youtube.com/embed/93u7msqS-jE', NULL, '2025-12-31 02:08:23', '2025-12-31 02:08:23');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
