-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2026 at 02:28 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `newsite_laravel`
--

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
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `description`, `image`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Hand Tools', 'hand-tools', 'High quality Industrial Equipment for modern industries.', NULL, 1, 1, '2026-07-13 05:08:04', '2026-07-15 06:07:09'),
(2, 'Lubricant Equipment\'s', 'lubricant-equipments', 'High quality Automation Systems for modern industries.', NULL, 2, 1, '2026-07-13 05:08:04', '2026-07-15 06:07:39'),
(4, 'Industrial Tools', 'industrial-tools', NULL, NULL, 3, 1, '2026-07-13 06:25:06', '2026-07-15 06:07:54'),
(5, 'Garden Tool', 'garden-tool', NULL, NULL, 4, 1, '2026-07-13 06:25:21', '2026-07-15 06:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `contact_messages`
--

CREATE TABLE `contact_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `is_read` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_messages`
--

INSERT INTO `contact_messages` (`id`, `first_name`, `last_name`, `email`, `phone`, `company`, `subject`, `message`, `is_read`, `created_at`, `updated_at`) VALUES
(1, 'John', 'Tester', 'john@example.com', '123456789', 'Test Co', 'Admin panel test', 'This is a test message sent from the contact form.', 1, '2026-07-13 05:13:05', '2026-07-13 05:20:32'),
(2, 'Vivek', 'Panday', 'admin@admin.com', '8956236589', 'Testing', 'Test Subject', 'Test Message', 0, '2026-07-13 05:47:12', '2026-07-13 05:47:12');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2026_07_13_100001_create_categories_table', 1),
(6, '2026_07_13_100002_create_products_table', 1),
(8, '2026_07_13_100004_create_settings_table', 1),
(9, '2026_07_13_100005_create_contact_messages_table', 1),
(10, '2026_07_15_100001_create_page_metas_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `page_metas`
--

CREATE TABLE `page_metas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keywords` text DEFAULT NULL,
  `meta_description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `page_metas`
--

INSERT INTO `page_metas` (`id`, `slug`, `name`, `meta_title`, `meta_keywords`, `meta_description`, `created_at`, `updated_at`) VALUES
(1, 'home', 'Home', 'JIHI Hand Tools | Best Hand Tools Manufacturer in India', 'JIHI hand tools, hand tools manufacturer, quality tools India', 'JIHI Hand Tools - durable precision hand tools for professionals and workshops. Browse our product range.', '2026-07-14 23:33:47', '2026-07-14 23:40:26'),
(2, 'about', 'About', 'About Us | JIHI Hand Tools', 'JIHI Hand Tools, about, hand tools company', 'Learn about JIHI Hand Tools - a manufacturer of durable, precision hand tools with strict quality checks.', '2026-07-14 23:33:47', '2026-07-14 23:40:26'),
(3, 'products', 'Products', 'Our Products | JIHI Hand Tools', 'JIHI Hand Tools, hand tools, products', 'Browse the JIHI Hand Tools product range by category - quality hand tools built to last.', '2026-07-14 23:33:47', '2026-07-14 23:40:26'),
(4, 'contact', 'Contact', 'Contact Us | JIHI Hand Tools', 'JIHI Hand Tools, contact, enquiry', 'Get in touch with JIHI Hand Tools for product enquiries, bulk orders and support.', '2026-07-14 23:33:47', '2026-07-14 23:40:26');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `short_description` varchar(500) DEFAULT NULL,
  `description` longtext DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `sort_order` int(10) UNSIGNED NOT NULL DEFAULT 0,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `short_description`, `description`, `image`, `sort_order`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hydraulic Press Machine', 'hydraulic-press-machine', 'Reliable and efficient Hydraulic Press Machine built for demanding industrial environments.', '<p>The <strong>Hydraulic Press Machine</strong> is designed for performance and durability. It is part of our Industrial Equipment range and comes with full installation support and warranty.</p><p>Contact us for specifications, pricing and delivery options.</p>', 'images/resource/industry-1.jpg', 0, 1, '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(2, 1, 'CNC Milling Machine', 'cnc-milling-machine', 'Reliable and efficient CNC Milling Machine built for demanding industrial environments.', '<p>The <strong>CNC Milling Machine</strong> is designed for performance and durability. It is part of our Industrial Equipment range and comes with full installation support and warranty.</p><p>Contact us for specifications, pricing and delivery options.</p>', 'images/resource/industry-2.jpg', 1, 1, '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(3, 1, 'Conveyor Belt System', 'conveyor-belt-system', 'Reliable and efficient Conveyor Belt System built for demanding industrial environments.', '<p>The <strong>Conveyor Belt System</strong> is designed for performance and durability. It is part of our Industrial Equipment range and comes with full installation support and warranty.</p><p>Contact us for specifications, pricing and delivery options.</p>', 'images/resource/feature-1.jpg', 2, 1, '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(4, 2, 'Robotic Assembly Arm', 'robotic-assembly-arm', 'Reliable and efficient Robotic Assembly Arm built for demanding industrial environments.', '<p>The <strong>Robotic Assembly Arm</strong> is designed for performance and durability. It is part of our Automation Systems range and comes with full installation support and warranty.</p><p>Contact us for specifications, pricing and delivery options.</p>', 'images/resource/feature-2.jpg', 0, 1, '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(5, 2, 'PLC Control Panel', 'plc-control-panel', 'Reliable and efficient PLC Control Panel built for demanding industrial environments.', '<p>The <strong>PLC Control Panel</strong> is designed for performance and durability. It is part of our Automation Systems range and comes with full installation support and warranty.</p><p>Contact us for specifications, pricing and delivery options.</p>', 'images/resource/image-1.jpg', 1, 1, '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(6, 2, 'Sensor Monitoring Kit', 'sensor-monitoring-kit', 'Reliable and efficient Sensor Monitoring Kit built for demanding industrial environments.', '<p>The <strong>Sensor Monitoring Kit</strong> is designed for performance and durability. It is part of our Automation Systems range and comes with full installation support and warranty.</p><p>Contact us for specifications, pricing and delivery options.</p>', 'images/resource/image-2.jpg', 2, 1, '2026-07-13 05:08:04', '2026-07-13 05:08:04');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `key` varchar(255) NOT NULL,
  `value` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `key`, `value`, `created_at`, `updated_at`) VALUES
(1, 'phone', '+91 9041461412', '2026-07-13 05:08:04', '2026-07-15 06:26:16'),
(2, 'email', 'info.jihitools@gmail.com', '2026-07-13 05:08:04', '2026-07-15 06:03:50'),
(3, 'address', 'C - 104, Industrial Area, Jalandhar (Punjab)', '2026-07-13 05:08:04', '2026-07-15 06:26:16'),
(4, 'factory_address', 'C - 104, Industrial Area, Jalandhar (Punjab)', '2026-07-13 05:08:04', '2026-07-15 06:26:16'),
(5, 'working_hours', 'Mon to Sat: 9:am to 6pm', '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(6, 'top_bar_text', 'Quality hand tools built to last', '2026-07-13 05:08:04', '2026-07-14 23:33:54'),
(7, 'footer_about', 'JIHI Hand Tools manufactures durable, precision hand tools trusted by professionals, workshops and everyday users.', '2026-07-13 05:08:04', '2026-07-14 23:33:55'),
(8, 'copyright', '© 2026 JIHI Hand Tools. All rights reserved.', '2026-07-13 05:08:04', '2026-07-14 23:34:41'),
(9, 'facebook', '#', '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(10, 'twitter', '#', '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(11, 'linkedin', '#', '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(12, 'youtube', '#', '2026-07-13 05:08:04', '2026-07-13 05:08:04'),
(13, 'instagram', '#', '2026-07-13 05:08:04', '2026-07-13 05:08:04');

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', NULL, '$2y$12$9iIyMUyJ4P3XGhWIkPp1VehZyz4hRJ0TaJXStozm5lnDAG5dXMTjO', NULL, '2026-07-13 05:08:04', '2026-07-14 23:33:47');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `contact_messages`
--
ALTER TABLE `contact_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_metas`
--
ALTER TABLE `page_metas`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `page_metas_slug_unique` (`slug`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `settings_key_unique` (`key`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_messages`
--
ALTER TABLE `contact_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `page_metas`
--
ALTER TABLE `page_metas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
