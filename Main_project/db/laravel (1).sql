-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2024 at 01:52 PM
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
-- Table structure for table `answer_tickets`
--

CREATE TABLE `answer_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `main_ticket_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `file_id` bigint(20) UNSIGNED DEFAULT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `file_address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `answer_tickets`
--

INSERT INTO `answer_tickets` (`id`, `main_ticket_id`, `user_id`, `file_id`, `answer`, `created_at`, `updated_at`, `status`, `file_address`) VALUES
(11, 6, 1, NULL, 'شما میتوانید در قسمت سرویس های خریداری شده زمان بارگذاری خود را مشاهده نمایید', '2024-03-09 10:13:13', '2024-03-09 10:13:13', 1, NULL),
(12, 7, 2, NULL, 'gggg', '2024-03-10 06:10:28', '2024-03-10 06:10:28', 1, '1710063628_0752b719743a35c91407c47fd6814da5.jpg'),
(13, 7, 2, NULL, 'sdfsfsdf', '2024-03-10 06:14:16', '2024-03-10 06:14:16', 1, '1710063856_537069.webp'),
(14, 7, 1, NULL, 'sdf', '2024-03-10 06:25:20', '2024-03-10 06:25:20', 1, '1710064520_image7-3.webp'),
(15, 7, 1, NULL, 'sfgsg', '2024-03-10 06:36:59', '2024-03-10 06:36:59', 1, '1710065219_Screenshot (334).png'),
(16, 7, 2, NULL, 'dfsdf', '2024-03-10 06:41:03', '2024-03-10 06:41:03', 1, NULL),
(17, 7, 1, NULL, 'ddssfsdf', '2024-03-10 06:42:36', '2024-03-10 06:42:36', 1, NULL),
(18, 7, 2, NULL, 'sdfsdf', '2024-03-10 06:42:50', '2024-03-10 06:42:50', 1, '1710065570_Awesome-Natural-Desktop-Background-wallpaper.jpg');

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
-- Table structure for table `files`
--

CREATE TABLE `files` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `file_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `main_tickets`
--

CREATE TABLE `main_tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_type_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `main_tickets`
--

INSERT INTO `main_tickets` (`id`, `ticket_type_id`, `user_id`, `text`, `status`, `created_at`, `updated_at`, `file`) VALUES
(6, 2, 2, 'با سلام\r\nلطفا زمان بارگذاری سایت را به بنده اطلاع دهید\r\nبا تشکر', 0, '2024-03-09 10:10:56', '2024-03-09 10:13:46', NULL),
(7, 6, 2, 'لطفا راهنمایی کنید چطونه این عکس را در لوگو قرار دهم', 1, '2024-03-10 03:26:26', '2024-03-10 03:26:26', '1710053786_4834ee1901f8243fb6495e1f9f0d2a868985ff1a.jpeg');

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
(43, '2024_03_05_085411_add_column_to_user_detile', 4),
(44, '2024_03_07_093425_create_noti_types_table', 5),
(45, '2024_03_07_093457_create_noti_sends_table', 5),
(46, '2024_03_07_132032_create_ticket_types_table', 6),
(47, '2024_03_07_132059_create_main_tickets_table', 6),
(48, '2024_03_07_132118_create_files_table', 6),
(49, '2024_03_07_132124_create_answer_tickets_table', 6),
(50, '2024_03_07_143024_add_paid_to_answer_tickets_table', 7),
(51, '2024_03_07_144553_add_paid_to_main_tickets_table', 8),
(52, '2024_03_10_093832_add_columnname_to_tablename_answer_tickets', 9);

-- --------------------------------------------------------

--
-- Table structure for table `noti_sends`
--

CREATE TABLE `noti_sends` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `noti_type_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `seen` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noti_sends`
--

INSERT INTO `noti_sends` (`id`, `noti_type_id`, `order_id`, `user_id`, `seen`, `created_at`, `updated_at`) VALUES
(24, 3, 47, 2, 1, '2024-03-09 10:04:15', '2024-03-09 10:04:34'),
(25, 2, 47, 2, 1, '2024-03-09 10:04:43', '2024-03-09 10:04:51'),
(26, 3, 47, 2, 1, '2024-03-09 10:04:59', '2024-03-09 10:10:04'),
(27, 1, 47, 2, 1, '2024-03-09 10:09:37', '2024-03-09 10:10:07'),
(28, 3, 48, 2, 1, '2024-03-10 07:01:31', '2024-03-10 07:02:27'),
(29, 1, 48, 2, 1, '2024-03-10 07:02:51', '2024-03-10 07:03:01'),
(30, 3, 46, 1, 0, '2024-03-10 08:51:12', '2024-03-10 08:51:12'),
(31, 1, 48, 2, 0, '2024-03-10 08:51:24', '2024-03-10 08:51:24');

-- --------------------------------------------------------

--
-- Table structure for table `noti_types`
--

CREATE TABLE `noti_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `noti_types`
--

INSERT INTO `noti_types` (`id`, `subject`, `text`, `url`, `created_at`, `updated_at`) VALUES
(1, 'تایید پرداخت', 'درخواست پرداخت شما بررسی و مورد تایید قرار گرفت. لطفا جهت دیدن روند کار به صفحه زیر مراجعه نمایید', 'myservice', NULL, NULL),
(2, 'پرداخت شما تایید نشد', 'کد پیگیری درج شده توسط شما جهت پرداخت سرویس مورد نظر در سیستم یافت نشد و پرداخت شما به حالت قبل بازگشت. لطفا مجددا به صفحه سبد خرید بازگشته و اطلاعات پرداخت خود را با دقت بیشتر وارد نمایید. جهت شماهده صفحه سبد خرید میتوانید از لینک زیر استفاده کنید.', 'cartshow', NULL, NULL),
(3, 'ارسال اطلاعات پرداخت برای ادمین', 'اطلاعات پرداخت شما برای ادمین ارسال شد. در صورت تایید و یا عدم تایید پرداخت شما برای شما اطلاعیه صادر خواهد شد پس تا زمان تایید منتظر بمانید. همکاران ما در کمتر از ۱ ساعت اطلاعات پرداخت شما را بررسی خواهند کرد.', '/cartshow', NULL, NULL),
(4, 'انصراف از پرداخت', 'به درخواست شما پرداخت اجاره وب سایت مورد نظر لغو شد. برای ثبت مجدد سفارش میتوایند به لینک زیر مراجعه نمایید.', '#services', NULL, NULL);

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
(46, 1, 4, 3, 11, 'تست', '#000000', '#000000', '#000000', 'test', NULL, NULL, NULL, '1', '2025-03-10 15:51:18', NULL, '2024-03-10 08:51:18'),
(47, 2, 1, 2, 15, 'فروشگاه لباس مرمر', '#563d7c', '#0000ff', '#000000', 'marmar', 'on', NULL, '2.png', '1', '2024-09-09 17:05:06', '2024-03-09 10:03:45', '2024-03-09 10:05:06'),
(48, 2, 3, 1, 2, 'ffgdfg', '#563d7c', '#0000ff', '#000000', 'fsf', 'on', NULL, '1710066686_937.jpg', '1', '2024-06-10 14:01:38', '2024-03-10 07:01:26', '2024-03-10 07:01:38');

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

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('m.karimi1382@gmail.com', '$2y$10$BnFiSnkSe5OSdfUR8RlZAei1p5TI56dy65O5y2Hk0/F5zJ8lWl6ju', '2024-03-06 15:04:05');

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
(39, 1, '23423', '6600000', 2, 47, '2024-03-09 10:04:59', '2024-03-09 14:04:59'),
(40, 1, 'wefsdfsf', '3600000', 2, 48, '2024-03-10 07:01:31', '2024-03-10 07:01:31'),
(41, 2, '25535345', '9000000', 1, 46, '2024-03-10 08:51:12', '2024-03-10 08:51:12');

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
-- Table structure for table `ticket_types`
--

CREATE TABLE `ticket_types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ticket_types`
--

INSERT INTO `ticket_types` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'در خصوص واریز مبلغ سایت', NULL, NULL),
(2, 'خطا در بارگزاری سایت', NULL, NULL),
(3, 'در خصوص دیتای سایت', NULL, NULL),
(4, 'تمدید اشتراک سایت', NULL, NULL),
(5, 'در سایت باگی مشاهده شده', NULL, NULL),
(6, 'راهنمایی در هر زمینه', NULL, NULL);

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
(2, 'افسانه فرهنگ', 'nn@nn.com', NULL, '$2y$10$GKh7pctrmIBX9N922izYTu6lseC85UD.7MatFcyaN39W9pwW9BDce', NULL, '2024-03-02 13:57:42', '2024-03-06 14:52:46'),
(3, 'مریم', 'maryam@yahoo.com', NULL, '$2y$10$hrlpfRxjyz.0oX3.AXg//uI3TmgymsmT2U2IXXuRd4ASuwCYlzYVy', NULL, '2024-03-07 09:53:43', '2024-03-07 09:53:43');

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
(1, 1, 'تهران', 'ایران', 'تهران - باغ فیض', '09133528014', 'mahdi_programmerr', 'karimi1382', NULL, NULL, NULL, NULL, '2024-03-05 03:59:24', '2024-03-10 06:41:56', '1710065516_How_tracking_user_behavior_on_your_website_can_improve_customer_experience.png'),
(2, 2, 'تهران', 'ایران', 'تهران - خیابان اول کوچه دوم', '09133528014', 'mahdi_programmerr', 'karimi1382', NULL, NULL, NULL, NULL, '2024-03-05 04:02:23', '2024-03-10 07:02:16', '1710066736_1OGxc8.jpg'),
(3, 3, 'یزد', 'ایران', 'یزد - خیابان کاشانی', '۰۹۱۳۳۵۲۴۲۵۲', 'maryammm', 'jsdnvjsd', NULL, NULL, NULL, NULL, '2024-03-07 09:55:03', '2024-03-09 07:43:55', '1709982835_profile-img.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer_tickets`
--
ALTER TABLE `answer_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `answer_tickets_main_ticket_id_foreign` (`main_ticket_id`),
  ADD KEY `answer_tickets_user_id_foreign` (`user_id`),
  ADD KEY `answer_tickets_file_id_foreign` (`file_id`);

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
-- Indexes for table `files`
--
ALTER TABLE `files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `main_tickets`
--
ALTER TABLE `main_tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `main_tickets_ticket_type_id_foreign` (`ticket_type_id`),
  ADD KEY `main_tickets_user_id_foreign` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `noti_sends`
--
ALTER TABLE `noti_sends`
  ADD PRIMARY KEY (`id`),
  ADD KEY `noti_sends_noti_type_id_foreign` (`noti_type_id`),
  ADD KEY `noti_sends_order_id_foreign` (`order_id`),
  ADD KEY `noti_sends_user_id_foreign` (`user_id`);

--
-- Indexes for table `noti_types`
--
ALTER TABLE `noti_types`
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
-- Indexes for table `ticket_types`
--
ALTER TABLE `ticket_types`
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
-- AUTO_INCREMENT for table `answer_tickets`
--
ALTER TABLE `answer_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

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
-- AUTO_INCREMENT for table `files`
--
ALTER TABLE `files`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `main_tickets`
--
ALTER TABLE `main_tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `noti_sends`
--
ALTER TABLE `noti_sends`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `noti_types`
--
ALTER TABLE `noti_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `packeges`
--
ALTER TABLE `packeges`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

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
-- AUTO_INCREMENT for table `ticket_types`
--
ALTER TABLE `ticket_types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_detiles`
--
ALTER TABLE `user_detiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer_tickets`
--
ALTER TABLE `answer_tickets`
  ADD CONSTRAINT `answer_tickets_file_id_foreign` FOREIGN KEY (`file_id`) REFERENCES `files` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_tickets_main_ticket_id_foreign` FOREIGN KEY (`main_ticket_id`) REFERENCES `main_tickets` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `answer_tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `main_tickets`
--
ALTER TABLE `main_tickets`
  ADD CONSTRAINT `main_tickets_ticket_type_id_foreign` FOREIGN KEY (`ticket_type_id`) REFERENCES `ticket_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `main_tickets_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `noti_sends`
--
ALTER TABLE `noti_sends`
  ADD CONSTRAINT `noti_sends_noti_type_id_foreign` FOREIGN KEY (`noti_type_id`) REFERENCES `noti_types` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `noti_sends_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `noti_sends_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

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
