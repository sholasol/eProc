-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 07, 2022 at 10:58 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `eproc`
--

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `approval` bigint(20) DEFAULT NULL,
  `head` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `name`, `approval`, `head`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Procurement', 800000, NULL, 2, '2021-10-30 09:17:21', '2021-10-30 09:21:24'),
(2, 'Human Resources', 500000, NULL, 4, '2021-10-30 20:40:59', '2021-10-30 20:42:40'),
(3, 'Finance', NULL, NULL, NULL, '2021-11-01 10:59:16', '2021-11-01 10:59:16');

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
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2021_09_18_150633_create_sessions_table', 1),
(7, '2021_09_19_192315_create_departments_table', 1),
(8, '2021_09_20_220826_create_vendors_table', 1),
(9, '2021_10_30_121010_create_requests_table', 2);

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `item` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `quantity` int(10) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_approval` bigint(20) DEFAULT NULL,
  `dept_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proc_approval` bigint(20) DEFAULT NULL,
  `proc_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fin_approval` bigint(20) DEFAULT NULL,
  `fin_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cfo_approval` bigint(20) DEFAULT NULL,
  `cfo_remark` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `final_approval` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `approval_date` date DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `reqNo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `user_id`, `item`, `price`, `quantity`, `image`, `category`, `department`, `dept_approval`, `dept_remark`, `proc_approval`, `proc_remark`, `fin_approval`, `fin_remark`, `cfo_approval`, `cfo_remark`, `final_approval`, `approval_date`, `description`, `reqNo`, `created_at`, `updated_at`) VALUES
(1, 3, 'HP Laptop', NULL, 2, NULL, NULL, 'Procurement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Core i7 HP laptops', 'OM-1B3cU', '2021-10-30 13:15:34', '2021-10-30 13:15:34'),
(2, 3, 'Laserjet Printer', NULL, 1, NULL, NULL, 'Procurement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'HP Laserjet Printer', 'OM-1B3cU', '2021-10-30 13:15:34', '2021-10-30 13:15:34'),
(3, 3, 'Wireless Presentation Device', NULL, 5, NULL, NULL, 'Procurement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'A wireless presentation device for the conference room. This allows users to connect wirelessly', 'OM-2JYhv', '2021-10-30 16:41:34', '2021-10-30 16:41:34'),
(4, 3, 'Wireless Mouse', NULL, 5, NULL, NULL, 'Procurement', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Digitech Optical wireless mouse for seamless system control', 'OM-2JYhv', '2021-10-30 16:41:34', '2021-10-30 16:41:34'),
(5, 5, 'Water Dispenser ', NULL, 5, NULL, NULL, 'Human Resources', NULL, 'Kindly revise the quantity of water dispenser needed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Water dispenser for five locations', 'OM-OmDmH', '2021-10-31 18:02:44', '2021-11-04 10:50:21'),
(6, 5, 'Tissue Paper', NULL, 3, NULL, NULL, 'Human Resources', NULL, 'Kindly revise the quantity of water dispenser needed', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '3 packs of tissue paper', 'OM-OmDmH', '2021-10-31 18:02:44', '2021-11-04 10:50:21'),
(7, 5, 'Projector screen', NULL, 1, NULL, NULL, 'Human Resources', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Hp Projector screen', 'OM-CPMpS', '2021-11-01 11:16:31', '2021-11-01 11:16:31'),
(8, 5, 'Cable TV', NULL, 1, NULL, NULL, 'Human Resources', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DSTV cable TV', 'OM-CPMpS', '2021-11-01 11:16:31', '2021-11-01 11:16:31'),
(9, 5, 'Water Dispenser', NULL, 3, NULL, NULL, 'Human Resources', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Watre dispenser in three locations', 'OM-CPMpS', '2021-11-01 11:16:31', '2021-11-01 11:16:31');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('mUnADaXrkuXCaUGMHJBz2f4OFOlinUGZj3BgrVTE', 3, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36', 'YTo3OntzOjY6Il90b2tlbiI7czo0MDoiUjMwYmJJajNvdmtWVklFeENQa3FQUzNqUzNxYUVlMXNJV3lxTXZkWCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvdXNlci9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTozO3M6MTc6InBhc3N3b3JkX2hhc2hfd2ViIjtzOjYwOiIkMnkkMTAkcVRKa3ZqN3hzQ29ia2pWb24vNnpIdXZpNTFBMTZkZWs0MktMUzNmMzVLWFNWMVF1eWVZMGkiO3M6MjE6InBhc3N3b3JkX2hhc2hfc2FuY3R1bSI7czo2MDoiJDJ5JDEwJHFUSmt2ajd4c0NvYmtqVm9uLzZ6SHV2aTUxQTE2ZGVrNDJLTFMzZjM1S1hTVjFRdXllWTBpIjt9', 1636038138),
('QOZUl7JcaiR1EhtCxJplspykBjWgIiptJmbY9DW3', NULL, '127.0.0.1', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:93.0) Gecko/20100101 Firefox/93.0', 'YTo1OntzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQ2bTVtZVMyeHRJSG5qOXE0ZTFpSElPSnN6SGdnbXlDdE14NU40NlRISUpCeUQ5TFBWNEpYUyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NjoiX3Rva2VuIjtzOjQwOiJIbFhvWU1RREh6UG5CaXNtbnJ5S2c1cldOYk1INDhBcXBxUkpNNEZ5IjtzOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjQ5OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvaC1yL3JlcXVlc3QtZGV0YWlsL09NLU9tRG1IIjt9fQ==', 1636037655);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `utype` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'USR' COMMENT 'USR is for users,  ADM for admins',
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cemail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cphone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dept_head` bigint(20) DEFAULT NULL,
  `department` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `utype`, `phone`, `company`, `cemail`, `cphone`, `dept_head`, `department`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`, `address`, `status`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', 'ADM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '$2y$10$MI.qjz.EvXmXDg0aSfHMTemtnWQSAPs5C.0u3a8lW8Xk2qzL6eEZW', NULL, NULL, NULL, NULL, '1035587577.jpg', '2021-10-30 08:28:45', '2021-10-30 08:28:45', NULL, 'Pending'),
(2, 'John', 'Doe', 'john@procurement.com', 'PROC', '09023455500', NULL, NULL, NULL, NULL, 'Procurement', NULL, '$2y$10$S17h1E/ogbLTmyPMNsfmpeDn5XUDQtfFcByna7J4opIV289tNZE/e', NULL, NULL, NULL, NULL, '1635587577.jpg', '2021-10-30 08:52:57', '2021-10-30 08:52:57', NULL, 'Pending'),
(3, 'Joy', 'Crown', 'joy@procurement.com', 'USR', '09077788800', NULL, NULL, NULL, NULL, 'Procurement', NULL, '$2y$10$qTJkvj7xsCobkjVon/6zHuvi51A16dek42KLS3f35KXSV1QuyeY0i', NULL, NULL, NULL, NULL, '1635591746.png', '2021-10-30 10:02:26', '2021-10-30 10:02:26', NULL, 'Pending'),
(4, 'Ayo', 'HRM', 'ayo@hrm.com', 'HRM', '09099900090', NULL, NULL, NULL, NULL, 'Human Resources', NULL, '$2y$10$6m5meS2xtIHnj9q4e1iHIOJszHggmyCtMx5N46THIJByD9LPV4JXS', NULL, NULL, NULL, NULL, '1635630136.png', '2021-10-30 20:42:16', '2021-10-30 20:42:16', NULL, 'Pending'),
(5, 'Joyce', 'HRM', 'joyce@hrm.com', 'USR', '09087655544', NULL, NULL, NULL, NULL, 'Human Resources', NULL, '$2y$10$hZCG9WMx/8eLo2vBsqNX3.T8OEQq30DdCA/x0CTMpPA4PCgaegNKq', NULL, NULL, NULL, NULL, '1635706834.png', '2021-10-31 18:00:34', '2021-10-31 18:00:34', NULL, 'Pending'),
(6, 'Solomon', 'Ojo', 'info@hybridsoft.com', 'VEN', '09077709000', 'Hybridsoft', 'info@hybridsoft.com', '09077788800', NULL, 'Vendor', NULL, '$2y$10$SroHc0H8cz5ojFMXBvMhQeCWHNptvyoxt0VML.0SGCpjIIeMoHzqa', NULL, NULL, NULL, NULL, '1635759672.jpg', '2021-11-01 08:41:12', '2021-11-01 10:40:06', 'Ajah', 'Approved'),
(7, 'Ade', 'Queen', 'info@ven.com', 'VEN', '08099900011', 'VenIT', 'info@ven.com', '01234567899', NULL, 'Vendor', NULL, '$2y$10$/ZMJUJ3N1sRjV741dAoZdO1PcI.GbAzn88emw0f2n9VHfyE0HqQOK', NULL, NULL, NULL, NULL, NULL, '2021-11-01 09:14:08', '2021-11-01 11:26:43', 'Ajah', 'Approved'),
(8, 'Bose', 'Henry', 'bose@finance.com', 'FIN', '09088877788', NULL, NULL, NULL, NULL, 'Finance', NULL, '$2y$10$LEMOlPnOVwk/WreqR9wsEOSZghir8D2imUExtiymwZRaU/K6kUI1q', NULL, NULL, NULL, NULL, '1635768013.jpg', '2021-11-01 11:00:13', '2021-11-01 11:00:13', NULL, 'Pending'),
(9, 'Ade', 'Vend', 'info@opensource.com', 'VEN', '08012345678', 'OpenSource', 'info@opensource.com', '08099900011', NULL, 'Vendor', NULL, '$2y$10$vBZ5gOffQDzItSZgMd4Ue.pGdB/p55SEHkL7CosiuQ/uvZKCpgkKq', NULL, NULL, NULL, NULL, NULL, '2021-11-04 08:31:49', '2021-11-04 08:32:50', 'Ajah', 'Declined');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

CREATE TABLE `vendors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `regno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact_phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `vendors`
--
ALTER TABLE `vendors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vendors_email_unique` (`email`),
  ADD UNIQUE KEY `vendors_contact_email_unique` (`contact_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `vendors`
--
ALTER TABLE `vendors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
