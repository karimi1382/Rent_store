-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 05, 2024 at 02:33 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

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
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `filds`
--

CREATE TABLE `filds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `filds`
--

INSERT INTO `filds` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'یک زمینه را انتخاب کنید', NULL, NULL),
(2, 'کیف و کفش', NULL, NULL),
(3, 'لوازم کامپیتر و تجهیزات جانبی', NULL, NULL),
(4, 'موبایل و تجهیزات جانبی', NULL, NULL),
(5, 'لوازم ساختمانی', NULL, NULL),
(6, 'فروشگاه خدماتی', NULL, NULL),
(7, 'شرکت های تجاری', NULL, NULL),
(8, 'شرکت های صنعتی', NULL, NULL),
(9, 'شرکت های نذم افزاری', NULL, NULL),
(10, ' واردات و صادرات', NULL, NULL),
(11, 'آموزشگاه و دانشگاه و مدارس', NULL, NULL),
(12, 'کلینیک های پزشکی و درمانی', NULL, NULL),
(13, 'سایر دسته ها', NULL, NULL),
(15, 'پوشاک', NULL, NULL);

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
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2019_08_19_000000_create_failed_jobs_table', 1),
(35, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(36, '2024_03_01_080356_create_project_types_table', 1),
(37, '2024_03_01_090910_create_projects_table', 1),
(38, '2024_03_01_115205_create_packeges_table', 2),
(39, '2024_03_01_115221_create_filds_table', 2),
(40, '2024_03_01_115300_create_orders_table', 2),
(41, '2024_03_01_115311_create_payments_table', 2),
(42, '2024_03_05_071358_create_user_detiles_table', 3),
(43, '2024_03_05_085411_add_column_to_user_detile', 4);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `project_id` bigint(20) UNSIGNED NOT NULL,
  `packege_id` bigint(20) UNSIGNED NOT NULL,
  `fild_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color_3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `admin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `takephoto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `Logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'در انتظار بررسی',
  `End_time` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `project_id`, `packege_id`, `fild_id`, `name`, `color_1`, `color_2`, `color_3`, `url`, `admin`, `takephoto`, `Logo`, `status`, `End_time`, `created_at`, `updated_at`) VALUES
(29, 1, 5, 2, 5, 'فروشگاه مهدی', '#563d7c', '#0000ff', '#000000', 'mahdi', NULL, NULL, NULL, 'در انتظار بررسی', '-1', '2024-03-02 13:16:25', '2024-03-02 13:18:35'),
(30, 1, 3, 2, 5, 'temp', '#563d7c', '#0000ff', '#000000', 'https://www.youtube.com/watch?v=Jpxc0TUr9BI', 'on', NULL, NULL, 'در حال بررسی', '+1', '2024-03-02 13:17:57', '2024-03-02 13:22:14'),
(31, 2, 2, 3, 7, 'فروشگاه مهدی', '#563d7c', '#0000ff', '#000000', 'ee', NULL, NULL, NULL, '1', '2024-07-02 16:56:08', '2024-03-02 13:25:37', '2024-03-02 13:26:08'),
(32, 2, 3, 2, 4, 'mahdi', '#563d7c', '#0000ff', '#000000', 'sdf', 'on', NULL, NULL, 'در انتظار بررسی', '-1', '2024-03-02 14:02:08', '2024-03-05 03:27:43'),
(33, 2, 1, 2, 4, 'تست با سیستم شرکت', '#563d7c', '#0000ff', '#000000', 'mobilesazan', 'on', NULL, NULL, '1', '2024-09-05 06:56:55', '2024-03-05 03:26:55', '2024-03-06 09:29:42'),
(34, 2, 1, 3, 2, 'تست user_detile', '#563d7c', '#0000ff', '#000000', 'www.rokaceram.oom', NULL, NULL, NULL, 'در انتظار بررسی', NULL, '2024-03-05 04:02:22', '2024-03-05 04:02:22'),
(35, 2, 1, 2, 2, 'تست user_detile 2', '#563d7c', '#0000ff', '#000000', 'www.rokaceram.oom', NULL, NULL, NULL, 'در انتظار بررسی', '-1', '2024-03-05 04:02:37', '2024-03-05 04:02:50');

-- --------------------------------------------------------

--
-- Table structure for table `packeges`
--

CREATE TABLE `packeges` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `detile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `packeges`
--

INSERT INTO `packeges` (`id`, `name`, `price`, `detile`, `created_at`, `updated_at`) VALUES
(1, 'پکیج ۳ ماهه', 2850000, 'ماهانه ۹۵۰ هزار تومان', NULL, NULL),
(2, 'پکیج ۶ ماهه', 5100000, 'ماهانه ۸۵۰ هزار تومان', NULL, NULL),
(3, 'پکیج ۱۲ ماهه', 9000000, 'ماهانه ۷۵۰ هزار تومان', NULL, NULL);

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
  `type` int(11) NOT NULL,
  `detile` text COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'در انتظار پرداخت',
  `status` varchar(225) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `type`, `detile`, `status`, `user_id`, `order_id`, `created_at`, `updated_at`) VALUES
(8, 1, '353545345', 'no', 1, 30, '2024-03-02 13:22:14', '2024-03-02 13:22:14'),
(9, 2, 'sldjknglsjgnsfjngdsfjkgnskjg', 'no', 2, 31, '2024-03-02 13:26:08', '2024-03-05 13:29:59'),
(10, 2, '88855522111444', 'no', 2, 33, '2024-03-05 03:29:42', '2024-03-05 07:29:42');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `project_type_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `title`, `pic`, `url`, `description`, `project_type_id`, `created_at`, `updated_at`) VALUES
(1, 'ارغوان', NULL, 'http://www.google.com', 'این قالب بسیار زیبا و حرفه ای است', 1, NULL, NULL),
(2, 'دریا', NULL, 'http://www.yahoo.com', 'در این قالب پرداخت آآنلاین دیده شده ااست', 1, NULL, NULL),
(3, 'شقایق', NULL, 'http://google.com', 'بسیار قاالب ساده و جذابی است', 2, NULL, NULL),
(4, 'آریایی', NULL, 'http://google.com', 'این قالب از المنهای ایران آریایی استفاده شده است', 1, NULL, NULL),
(5, 'افسانه', NULL, 'http://google.com', 'خیلی سایت خوبیه... بخلیدش تولوخدا', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `project_types`
--

CREATE TABLE `project_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `project_types`
--

INSERT INTO `project_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'فروشگاه', NULL, NULL),
(2, 'تجاری', NULL, NULL),
(3, 'شخصی', NULL, NULL),
(4, 'آکادمی', NULL, NULL),
(5, 'خدماتی', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'ادمین سایت', 'm.karimi1382@gmail.com', NULL, '$2y$10$QhvydJahsjw0L0ukrInw6.1q.bd2lCwvr5.rkd8iP/Qnd/nWv/EpG', NULL, '2024-03-01 07:59:14', '2024-03-05 07:02:33'),
(2, 'مهدی کریمی یزدی', 'nn@nn.com', NULL, '$2y$10$GKh7pctrmIBX9N922izYTu6lseC85UD.7MatFcyaN39W9pwW9BDce', NULL, '2024-03-02 13:57:42', '2024-03-05 06:42:46');

-- --------------------------------------------------------

--
-- Table structure for table `user_detiles`
--

CREATE TABLE `user_detiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verify` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `mobile_random_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_random_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `photo_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_detiles`
--

INSERT INTO `user_detiles` (`id`, `user_id`, `city`, `country`, `address`, `mobile`, `instagram`, `linkedin`, `mobile_verify`, `email_verify`, `mobile_random_code`, `email_random_code`, `created_at`, `updated_at`, `photo_address`) VALUES
(1, 1, 'تهران', 'ایران', 'تهران - باغ فیض', '09133528014', 'mahdi_programmerr', 'karimi1382', NULL, NULL, NULL, NULL, '2024-03-05 03:59:24', '2024-03-05 07:02:33', NULL),
(2, 2, 'تهران', 'ایران', 'تهران - خیابان اول کوچه دوم', '09133528014', 'mahdi_programmerr', 'karimi1382', NULL, NULL, NULL, NULL, '2024-03-05 04:02:23', '2024-03-05 06:26:42', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `filds`
--
ALTER TABLE `filds`
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
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_project_id_foreign` (`project_id`),
  ADD KEY `orders_packege_id_foreign` (`packege_id`),
  ADD KEY `orders_fild_id_foreign` (`fild_id`);

--
-- Indexes for table `packeges`
--
ALTER TABLE `packeges`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `payments_user_id_foreign` (`user_id`),
  ADD KEY `payments_order_id_foreign` (`order_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_project_type_id_foreign` (`project_type_id`);

--
-- Indexes for table `project_types`
--
ALTER TABLE `project_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_detiles`
--
ALTER TABLE `user_detiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_detiles_user_id_foreign` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `filds`
--
ALTER TABLE `filds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `packeges`
--
ALTER TABLE `packeges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_types`
--
ALTER TABLE `project_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_detiles`
--
ALTER TABLE `user_detiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_fild_id_foreign` FOREIGN KEY (`fild_id`) REFERENCES `filds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_packege_id_foreign` FOREIGN KEY (`packege_id`) REFERENCES `packeges` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `payments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_project_type_id_foreign` FOREIGN KEY (`project_type_id`) REFERENCES `project_types` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `user_detiles`
--
ALTER TABLE `user_detiles`
  ADD CONSTRAINT `user_detiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
