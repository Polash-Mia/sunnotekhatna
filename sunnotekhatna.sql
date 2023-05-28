-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2023 at 12:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sunnotekhatna`
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
-- Table structure for table `formfillups`
--

CREATE TABLE `formfillups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `age` int(11) NOT NULL,
  `emgMobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `father` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fatherWork` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mother` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `motherWork` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `week` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `one` tinyint(4) NOT NULL,
  `two` tinyint(4) NOT NULL,
  `three` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `formfillups`
--

INSERT INTO `formfillups` (`id`, `name`, `age`, `emgMobile`, `mobile`, `father`, `fatherWork`, `mother`, `motherWork`, `address`, `date`, `week`, `one`, `two`, `three`, `created_at`, `updated_at`) VALUES
(1, 'Arafat', 7, '01737115041', '01737115041', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Kurigram', '2023-05-29', 'Monday', 0, 0, 1, '2023-05-25 21:57:13', '2023-05-25 21:57:13'),
(2, 'khokon', 6, '01737115041', '1234567895', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Rangpur', '2023-05-21', 'Wednesday', 1, 0, 1, '2023-05-27 02:33:20', '2023-05-27 02:33:20'),
(3, 'nayem', 6, '01737115041', '1234567895', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Kurigram', '2023-05-29', 'Monday', 1, 0, 1, '2023-05-27 02:40:45', '2023-05-27 02:40:45'),
(4, 'asif', 5, '01737115041', '1234567895', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Kurigram', '2023-05-30', 'Wednesday', 1, 0, 1, '2023-05-27 02:42:40', '2023-05-27 02:42:40'),
(5, 'arif', 7, '01737115041', '12345678952', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Rangpur', '2023-05-31', 'Tuesday', 1, 0, 1, '2023-05-27 02:44:12', '2023-05-27 02:44:12'),
(6, 'balal', 8, '01737115041', '1234567895', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Kurigram', '2023-05-31', 'Friday', 1, 0, 1, '2023-05-27 04:55:09', '2023-05-27 04:55:09'),
(7, 'kalam', 8, '01737115041', '1234567895', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Rangpur', '2023-05-29', 'বুধবার', 1, 0, 1, '2023-05-27 04:58:25', '2023-05-27 04:58:25'),
(8, 'Asad', 8, '01737115041', '12345678952', 'Asraful', 'Teacher', 'Afroja', 'House Wife', 'Rangpur', '2023-05-29', 'বুধবার', 1, 0, 1, '2023-05-27 10:01:12', '2023-05-27 10:01:12');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_05_25_041408_create_sessions_table', 1),
(7, '2023_05_25_110956_create_formfillups_table', 2),
(8, '2023_05_26_164815_create_slides_table', 3),
(9, '2023_05_26_170252_create_slide_twos_table', 4),
(10, '2023_05_26_182314_create_testimonials_table', 5),
(11, '2023_05_26_204514_create_settings_table', 6);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1yhTKtPWQBWs1exUBZvPDXM7QDgqlgWSMCMrankJ', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiYUVwdVZSczlHZHkzVzJCcXRUdktqeHpHa1g2MWIxYXdscHVoVllSVCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1685220910),
('7Ua8zCbtF46Yu5jyJNQsofXbE6KIOaJwGQkhhZBT', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/113.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSHZNNXAwcW5aNW1xYzJKN25oVFRIQ3A2UkJGc01odHdJb0YydWxOaCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1685270896);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mobile` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pixel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `mobile`, `logo`, `title`, `pixel`, `created_at`, `updated_at`) VALUES
(2, '01737115041', 'website/logo/logo1685134989.jpg', 'sunnote Khatna', '990455715259391', '2023-05-26 15:03:09', '2023-05-26 15:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Slide/headerimage/Slide1685120354.jpg', '2023-05-26 10:59:14', '2023-05-26 10:59:14'),
(5, 'Slide/headerimage/Slide1685137890.jpg', '2023-05-26 15:51:30', '2023-05-26 15:51:30');

-- --------------------------------------------------------

--
-- Table structure for table `slide_twos`
--

CREATE TABLE `slide_twos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slide_twos`
--

INSERT INTO `slide_twos` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SlideTwo/slidetwoimage/SlideTwo1685124352.jpg', '2023-05-26 12:05:52', '2023-05-26 12:05:52'),
(2, 'SlideTwo/slidetwoimage/SlideTwo1685138532.jpg', '2023-05-26 16:02:12', '2023-05-26 16:02:12'),
(3, 'SlideTwo/slidetwoimage/SlideTwo1685138537.jpg', '2023-05-26 16:02:17', '2023-05-26 16:02:17'),
(4, 'SlideTwo/slidetwoimage/SlideTwo1685138541.jpg', '2023-05-26 16:02:21', '2023-05-26 16:02:21'),
(5, 'SlideTwo/slidetwoimage/SlideTwo1685138546.jpg', '2023-05-26 16:02:26', '2023-05-26 16:02:26'),
(6, 'SlideTwo/slidetwoimage/SlideTwo1685138550.jpg', '2023-05-26 16:02:30', '2023-05-26 16:02:30'),
(7, 'SlideTwo/slidetwoimage/SlideTwo1685138555.jpg', '2023-05-26 16:02:35', '2023-05-26 16:02:35'),
(8, 'SlideTwo/slidetwoimage/SlideTwo1685138560.jpg', '2023-05-26 16:02:40', '2023-05-26 16:02:40');

-- --------------------------------------------------------

--
-- Table structure for table `testimonials`
--

CREATE TABLE `testimonials` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `testimonials`
--

INSERT INTO `testimonials` (`id`, `name`, `image`, `comment`, `created_at`, `updated_at`) VALUES
(2, 'Arafat', 'upload/testimonial/testimonial1685133359.jpg', 'lorem adkfkla asdjfklajd adfjdksljf jassdfjklaj a ak', '2023-05-26 14:35:59', '2023-05-26 14:35:59'),
(3, 'Rafan', 'upload/testimonial/testimonial1685138932.jpg', 'lorem adkfkla asdjfklajd adfjdksljf jassdfjklaj a aksjdfkljasdk vkljasdfie jjastdf asdfg jkl;jkl;jkl;jk; a', '2023-05-26 16:08:52', '2023-05-26 16:08:52'),
(4, 'sayem', 'upload/testimonial/testimonial1685138944.jpg', 'lorem adkfkla asdjfklajd adfjdksljf jassdfjklaj a aksjdfkljasdk vkljasdfie jjastdf asdfg jkl;jkl;jkl;jk; a', '2023-05-26 16:09:04', '2023-05-26 16:09:04'),
(5, 'maruf', 'upload/testimonial/testimonial1685138972.jpg', 'lorem adkfkla asdjfklajd adfjdksljf jassdfjklaj a aksjdfkljasdk vkljasdfie jjastdf asdfg jkl;jkl;jkl;jk; a', '2023-05-26 16:09:32', '2023-05-26 16:09:32'),
(6, 'atik', 'upload/testimonial/testimonial1685139008.jpg', 'lorem adkfkla asdjfklajd adfjdksljf jassdfjklaj a aksjdfkljasdk vkljasdfie jjastdf asdfg jkl;jkl;jkl;jk; a', '2023-05-26 16:10:08', '2023-05-26 16:10:08');

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
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$l7EZR22.zCK7FlEPmHMI3u6gU0jeJ8yh7PraMfdeL7Y1gfccQdqWu', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-24 22:18:41', '2023-05-26 15:18:28'),
(2, 'Polash Mia', 'polash@gmail.com', NULL, '$2y$10$iaYFjx/f087ZAaOGTyhCtuFL6BJZ/r9bffMhhAR.9BgWlDLKx5zxq', NULL, NULL, NULL, NULL, NULL, NULL, '2023-05-26 09:07:40', '2023-05-26 09:07:40');

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
-- Indexes for table `formfillups`
--
ALTER TABLE `formfillups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_twos`
--
ALTER TABLE `slide_twos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testimonials`
--
ALTER TABLE `testimonials`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `formfillups`
--
ALTER TABLE `formfillups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slide_twos`
--
ALTER TABLE `slide_twos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `testimonials`
--
ALTER TABLE `testimonials`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
