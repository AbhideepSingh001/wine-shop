-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2026 at 10:15 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wine_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `subtitle` varchar(255) DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `button_text` varchar(255) DEFAULT NULL,
  `button_link` varchar(255) DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'White', 'desi', 'make with fruits and rice water after few days of fermentation', 'categories/p0kO7pne0vHFLnytjd10scvZLSPk0jQsscNGguDt.jpg', '2026-03-09 06:26:21', '2026-03-10 00:13:27'),
(2, 'Red', 'american', 'this is made with some fruits and store for long time', 'categories/6GeGZhcVedK87UXbaDyTc6troifHXZB57rz9EwG0.jpg', '2026-03-09 23:41:24', '2026-03-10 00:12:57'),
(3, 'Dessert', 'dessert-wine', 'Dessert wine is a broad category of sweet, often high-alcohol (8–20% ABV) wines typically enjoyed at the end of a meal or paired with dessert', 'categories/UdcNMoDqSn6HGpgDwfB7up0ypN81f4xI45mbWDWJ.jpg', '2026-03-10 00:20:18', '2026-03-11 00:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `collections`
--

CREATE TABLE `collections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collections`
--

INSERT INTO `collections` (`id`, `name`, `slug`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Desi', 'desi', 'Desi wine refers to locally made wine produced using traditional methods and locally available fruits or ingredients. It usually has a strong flavor and higher alcohol content, reflecting the unique taste and culture of the region where it is made.', 'collections/CwAZkzZEphuriCSoRNXnT3j6zIjnyjt2oPNwlKWw.jpg', '2026-03-09 06:28:44', '2026-03-10 01:55:53'),
(2, 'Ad Gefrin Whisky', 'ad-gefrin-whisky', 'Ad Gefrin is a Northumberland-based distillery reviving historic Northumbrian whisky-making with a focus on local, sustainable, \"field-to-glass\" production.', 'collections/0jCzrEtpIxXGXKG330BWyZr95X0NW8f9x4zeaTHw.jpg', '2026-03-09 22:58:46', '2026-03-10 00:03:12'),
(3, 'Signature Collection', 'signature-collection', 'The Signature Collection features carefully selected premium wines known for their rich flavors, balanced aromas, and exceptional quality.', 'collections/GyKs9KjKzJSwwSTL08bOxwrcZIG97ZMf8jzExcCY.jpg', '2026-03-10 01:00:33', '2026-03-10 01:00:33'),
(4, 'Premium Selection', 'premium-selection', 'The Premium Selection includes high-quality wines crafted for a refined taste, offering exceptional flavor, aroma, and elegance.', 'collections/T5T743Y9uthQJdDnb42LbNpqW16bTimfmpFnBkt1.jpg', '2026-03-10 01:02:11', '2026-03-10 01:02:11');

-- --------------------------------------------------------

--
-- Table structure for table `collection_wine`
--

CREATE TABLE `collection_wine` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `wine_id` bigint(20) UNSIGNED NOT NULL,
  `collection_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `collection_wine`
--

INSERT INTO `collection_wine` (`id`, `wine_id`, `collection_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, NULL, NULL),
(2, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `subject`, `message`, `created_at`, `updated_at`, `is_read`) VALUES
(1, 'Abhideep Singh', 'abhideep23124@gmail.com', 'wine taste', 'the taste of the wine is good and sweet', '2026-03-10 23:53:32', '2026-03-10 23:53:32', 0),
(2, 'manjeet singh', 'manjeet@gmail.com', 'how to serve', 'serving at room temperature is good buddy', '2026-03-10 23:57:17', '2026-03-10 23:57:17', 0),
(4, 'Abhideep singh', 'abhideep23124@gmail.com', 'efwewew', 'wefw', '2026-03-10 23:59:41', '2026-03-10 23:59:41', 0);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2026_03_07_041958_create_admins_table', 1),
(5, '2026_03_07_042008_create_categories_table', 1),
(6, '2026_03_07_042019_create_wines_table', 1),
(7, '2026_03_07_042024_create_collections_table', 1),
(8, '2026_03_07_042029_create_collection_wine_table', 1),
(9, '2026_03_07_042039_create_banners_table', 1),
(10, '2026_03_07_042043_create_wine_guides_table', 1),
(11, '2026_03_07_042048_create_wishlist_orders_table', 1),
(12, '2026_03_07_042052_create_contacts_table', 1),
(13, '2026_03_10_053705_add_image_to_categories_table', 2),
(14, '2026_03_10_054746_add_slug_to_categories_table', 3),
(15, '2026_03_10_063951_add_type_to_wine_guides_table', 4),
(17, '2026_03_10_093856_add_role_to_users_table', 5),
(18, '2026_03_11_043040_create_contacts_table', 6),
(19, '2026_03_11_045558_create_settings_table', 6),
(20, '2026_03_11_051334_add_is_read_to_contacts_table', 6),
(21, '2026_03_11_043040_create_contacts_table', 1),
(22, '2026_03_11_062819_add_role_to_users_table', 7);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `wine_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) DEFAULT 1,
  `price` decimal(10,2) NOT NULL,
  `status` varchar(50) DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `table_number` varchar(20) DEFAULT NULL,
  `address` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `wine_id`, `quantity`, `price`, `status`, `created_at`, `updated_at`, `name`, `phone`, `table_number`, `address`) VALUES
(1, 2, 2, 1, 50000.00, 'pending', '2026-03-11 06:31:12', '2026-03-11 06:31:12', NULL, NULL, NULL, NULL),
(2, 2, 2, 1, 50000.00, 'pending', '2026-03-11 06:35:54', '2026-03-11 06:35:54', NULL, NULL, NULL, NULL),
(4, 2, 2, 1, 50000.00, 'preparing', '2026-03-11 22:53:49', '2026-03-11 23:13:36', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `map` varchar(255) NOT NULL,
  `opening_hours` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`) VALUES
(1, 'manjeet', 'manjeet@gmail.com', NULL, '$2y$12$4YDK5SbYadScMIuBMsVBOuOgfeitv06CWV3f/0LzN6ssHtIUFcdZi', NULL, '2026-03-11 04:28:40', '2026-03-11 23:45:22', 'admin'),
(2, 'Abhideep singh', 'abhideep23124@gmail.com', NULL, '$2y$12$YUrpXqGo7Q/1mQR5QKPqA.IHRfmgnHpQDppBuEiOUFrrWlAgZrtEu', NULL, '2026-03-11 04:29:43', '2026-03-11 04:29:43', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `wines`
--

CREATE TABLE `wines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `brand` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `alcohol_percentage` decimal(4,1) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL,
  `rating` double DEFAULT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wines`
--

INSERT INTO `wines` (`id`, `category_id`, `name`, `slug`, `brand`, `country`, `year`, `alcohol_percentage`, `price`, `rating`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 2, 'Malbec', 'malbec', 'Vintage', 'Yakima Valley', '2020', 80.0, 7850.00, 9.5, 'Main fruit flavors: Black cherry, blackberry, red plum.', 'wines/X4uHuE8n8OZM1tK5kbscqbzhmSyRLPD36JMaLupP.jpg', '2026-03-09 06:27:45', '2026-03-10 00:42:48'),
(2, 2, 'Zinfandel', 'zinfandel', 'Zinfandel brands', 'California', '1924', 75.0, 50000.00, 9.6, 'flavours of Ripe Red Cherry, Black Cherry, Blackberry, Black Pepper and Baking Spice.', 'wines/2pBi5hFF91yCYL92UtjsGib16iN4XjtM1RglKpwq.webp', '2026-03-09 23:42:55', '2026-03-10 00:47:14'),
(3, 1, 'Riesling', 'riesling', 'Dr. Loosen “L” Riesling', 'Mosel, Germany', '2022', 8.0, 3000.00, 10, 'Riesling ek aromatic white wine hai jo fruity flavors (apple, peach, citrus) aur refreshing acidity ke liye famous hai.', 'wines/EH049cMjamXtYjsykgwB2itDlyfIJcevXo33JP2c.jpg', '2026-03-10 00:52:48', '2026-03-10 00:52:48'),
(4, 1, 'Moscatoo', 'moscatoo', 'Barefoot Moscato', 'California, USA', '2022', 22.0, 3725.00, 8.4, 'Moscato ek sweet aur fruity white wine hai jisme peach, orange blossom aur citrus ke light refreshing flavors milte hain.', 'wines/piF3AiUFFfylSMzpsKQhuLKbWJpHvNeVhoSD5UEp.jpg', '2026-03-10 00:55:41', '2026-03-11 00:05:15');

-- --------------------------------------------------------

--
-- Table structure for table `wine_guides`
--

CREATE TABLE `wine_guides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wine_guides`
--

INSERT INTO `wine_guides` (`id`, `title`, `slug`, `type`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Red Wine', 'red-wine', 'types', 'Red wines are made from dark-colored grape varieties. They are rich, bold and often paired with red meat and hearty dishes.', 'wineGuide/4USpSjb1d1ojqlHX4aPawwv6htiNFFyzMtvunwsL.webp', '2026-03-10 01:26:58', '2026-03-10 01:26:58'),
(2, 'Serve at the Right Temperature', 'serve-at-the-right-temperature', 'tips', 'Red wines are best served slightly below room temperature (about 15–18°C), while white wines taste better when chilled (8–12°C).', NULL, '2026-03-10 01:30:07', '2026-03-10 01:30:07'),
(3, 'Look', 'look', 'tasting', 'Observe the wine’s color and clarity in the glass. The shade can reveal information about the grape variety, age, and style of the wine.', NULL, '2026-03-10 01:39:51', '2026-03-10 01:41:42'),
(4, 'White Wine', 'white-wine', 'types', 'White wine is made primarily from green or yellow-colored grapes and is known for its light, crisp, and refreshing taste.', NULL, '2026-03-10 01:43:43', '2026-03-10 01:43:43'),
(5, 'Rose Wine', 'rose-wine', 'types', 'Rosé wine is known for its beautiful pink color and refreshing flavor. It is made from red grapes, but the grape skins stay in contact with the juice for only a short time, giving the wine its light pink shade instead of a deep red color.', NULL, '2026-03-10 01:44:23', '2026-03-10 01:44:23'),
(6, 'Sparkling Wine', 'sparkling-wine', 'types', 'Sparkling wines usually have flavors of green apple, citrus, pear, and toasted bread, depending on the grape variety and production method. They can range from dry (Brut) to sweet (Demi-Sec) styles.', NULL, '2026-03-10 01:45:10', '2026-03-10 01:45:10'),
(7, 'Swirl', 'swirl', 'tasting', 'Gently swirl the wine in the glass. This helps mix the wine with oxygen, which releases its aromas and enhances the tasting experience.', NULL, '2026-03-10 01:52:53', '2026-03-10 01:52:53'),
(8, 'Smell', 'smell', 'tasting', 'Bring the glass close to your nose and take a deep breath. Try to identify different aromas such as fruits, flowers, spices, or earthy notes.', NULL, '2026-03-10 01:53:18', '2026-03-10 01:53:18'),
(9, 'Taste', 'taste', 'tasting', 'Take a small sip and let the wine coat your palate. Notice the balance between sweetness, acidity, tannins, and alcohol.', NULL, '2026-03-10 01:53:40', '2026-03-10 01:53:40'),
(10, 'Use the Correct Glass', 'use-the-correct-glass', 'tips', 'Different wine glasses enhance the aroma and flavor of wine. A wide bowl glass is ideal for red wine, while narrow glasses work better for white wine.', NULL, '2026-03-10 01:54:28', '2026-03-10 01:54:28'),
(11, 'Let the Wine Breathe', 'let-the-wine-breathe', 'tips', 'Some wines, especially red wines, benefit from a few minutes of exposure to air after opening. This helps release aromas and improve flavor.', NULL, '2026-03-10 01:54:52', '2026-03-10 01:54:52');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist_orders`
--

CREATE TABLE `wishlist_orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `wine_id` bigint(20) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `table_number` varchar(50) DEFAULT NULL,
  `note` text DEFAULT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `wishlist_orders`
--

INSERT INTO `wishlist_orders` (`id`, `user_id`, `wine_id`, `quantity`, `table_number`, `note`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 1, 1, NULL, NULL, 'pending', '2026-03-10 05:40:58', '2026-03-10 05:40:58'),
(2, NULL, 1, 1, NULL, NULL, 'pending', '2026-03-10 05:41:05', '2026-03-10 05:41:05'),
(6, 2, 2, 1, NULL, NULL, 'pending', '2026-03-11 06:15:56', '2026-03-11 06:15:56'),
(7, 2, 3, 1, NULL, NULL, 'pending', '2026-03-11 23:30:49', '2026-03-11 23:30:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `collections`
--
ALTER TABLE `collections`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `collections_slug_unique` (`slug`);

--
-- Indexes for table `collection_wine`
--
ALTER TABLE `collection_wine`
  ADD PRIMARY KEY (`id`),
  ADD KEY `collection_wine_wine_id_foreign` (`wine_id`),
  ADD KEY `collection_wine_collection_id_foreign` (`collection_id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user_orders` (`user_id`),
  ADD KEY `fk_wine_orders` (`wine_id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wines`
--
ALTER TABLE `wines`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wines_slug_unique` (`slug`),
  ADD KEY `wines_category_id_foreign` (`category_id`);

--
-- Indexes for table `wine_guides`
--
ALTER TABLE `wine_guides`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `wine_guides_slug_unique` (`slug`);

--
-- Indexes for table `wishlist_orders`
--
ALTER TABLE `wishlist_orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_user` (`user_id`),
  ADD KEY `fk_wine` (`wine_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `collections`
--
ALTER TABLE `collections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `collection_wine`
--
ALTER TABLE `collection_wine`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wines`
--
ALTER TABLE `wines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `wine_guides`
--
ALTER TABLE `wine_guides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `wishlist_orders`
--
ALTER TABLE `wishlist_orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `collection_wine`
--
ALTER TABLE `collection_wine`
  ADD CONSTRAINT `collection_wine_collection_id_foreign` FOREIGN KEY (`collection_id`) REFERENCES `collections` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `collection_wine_wine_id_foreign` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `fk_user_orders` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_wine_orders` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wines`
--
ALTER TABLE `wines`
  ADD CONSTRAINT `wines_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `wishlist_orders`
--
ALTER TABLE `wishlist_orders`
  ADD CONSTRAINT `fk_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `fk_wine` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlist_orders_wine_id_foreign` FOREIGN KEY (`wine_id`) REFERENCES `wines` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
