-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2022 at 12:13 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `equiz`
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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2022_08_29_172051_create_question_table', 1),
(16, '2022_08_29_172051_create_student_m_table', 1),
(17, '2022_08_29_172051_create_subject_table', 1),
(18, '2022_08_29_181333_create_sessions_table', 1);

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
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `answer` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `masks` int(11) NOT NULL,
  `question` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt1` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt2` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt3` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `opt4` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `answer`, `masks`, `question`, `opt1`, `opt2`, `opt3`, `opt4`, `subject`) VALUES
(1, 'C', 2, 'A sum of money at simple interest amounts to Rs. 815 in 3 years and to Rs. 854 in 4 years. The sum is:', 'A. Rs. 650', 'B. Rs. 690', 'C. Rs. 698', 'D. Rs. 700', 1),
(2, 'A', 2, 'Mr. Thomas invested an amount of Rs. 13,900 divided in two different schemes A and B at the simple interest rate of 14% p.a. and 11% p.a. respectively. If the total amount of simple interest earned in 2 years be Rs. 3508, ', 'A. Rs. 6400', 'B. Rs. 6500\r\n', 'C. Rs. 7200\r\n', 'D. Rs. 7500\r\n', 1),
(3, 'D', 2, 'A sum fetched a total simple interest of Rs. 4016.25 at the rate of 9 p.c.p.a. in 5 years. What is the sum?', 'A. Rs. 4462.50\r\n', 'B. Rs. 8032.50\r\n', 'C. Rs. 8900', 'D. Rs. 8925', 1),
(4, 'B', 2, 'How much time will it take for an amount of Rs. 450 to yield Rs. 81 as interest at 4.5% per annum of simple interest?', 'A. 3.5 years\r\n', 'B. 4 years', 'C. 4.5 years', 'D. 5 years', 1),
(5, 'B', 2, 'Reena took a loan of Rs. 1200 with simple interest for as many years as the rate of interest. If she paid Rs. 432 as interest at the end of the loan period, what was the rate of interest?', 'A. 3.6\r\n', 'B. 6\r\n', 'C. 18', 'D. Cannot be determined', 1),
(6, 'B', 2, 'The cost price of 20 articles is the same as the selling price of x articles. If the profit is 25%, then the value of x is:', 'A. 15', 'B. 16 ', 'C. 18', 'D. 25', 1),
(7, 'B', 2, 'Alfred buys an old scooter for Rs. 4700 and spends Rs. 800 on its repairs. If he sells the scooter for Rs. 5800, his gain percent is:', 'A. 45/11%\r\n	\r\n\r\n', 'B. 60/11%\r\n', 'C. 10%', 'D. 12%', 1),
(8, 'B', 2, 'If selling price is doubled, the profit triples. Find the profit percent.', 'A. 70', 'B. 100', 'C. 20/70', 'D. 120', 1),
(9, 'C', 2, 'In a certain store, the profit is 320% of the cost. If the cost increases by 25% but the selling price remains constant, approximately what percentage of the selling price is the profit?', 'A. 30%', 'B. 100%', 'C. 70%', 'D. 250%', 1),
(10, 'C', 2, 'A vendor bought toffees at 6 for a rupee. How many for a rupee must he sell to gain 20%?', 'A. 3\r\n', 'B. 4\r\n', 'C. 5', 'D. 6', 1),
(11, 'A', 2, 'Fate smiles ...... those who untiringly grapple with stark realities of life.', 'A. with\r\n', 'B. over\r\n', 'C. on\r\n', 'D. round', 2),
(12, 'A', 2, 'The miser gazed ...... at the pile of gold coins in front of him.', 'A. avidly', 'B. admiringly', 'C. thoughtfully', 'D. earnestly', 2),
(13, 'A', 2, 'Catching the earlier train will give us the ...... to do some shopping.', 'A. chance\r\n', 'B. luck', 'C. possiblity', 'D. occasion', 2),
(14, 'C', 2, 'I saw a ...... of cows in the field.', 'A. ready', 'B. mature', 'C. ripe', 'D. advanced', 2),
(15, 'C', 2, 'The grapes are now ...... enough to be picked.', 'A. ready\r\n', 'B. mature\r\n', 'C. ripe\r\n', 'D. advanced\r\n', 2),
(16, 'C', 2, 'To make clean breast of', 'A. To gain prominence\r\n', 'B. To praise oneself\r\n', 'C. To confess without of reserve\r\n', 'D. To destroy before it blooms\r\n', 2),
(17, 'B', 2, 'To keeps one\'s temper', 'A. To become hungry\r\n', 'B. To be in good mood\r\n', 'C. To preserve one’s energy\r\n', 'D. To be aloof from\r\n', 2),
(18, 'B', 2, 'To catch a tartar', 'A. To trap wanted criminal with great difficulty\r\n', 'B. To catch a dangerous person\r\n', 'C. To meet with disaster\r\n', 'D. To deal with a person who is more than one\'s match\r\n', 2),
(19, 'D', 2, 'To drive home', 'A. To find one\'s roots\r\n', 'B. To return to place of rest\r\n', 'C. Back to original position\r\n', 'D. To emphasize\r\n', 2),
(20, 'A', 2, 'To have an axe to grind', 'A. A private end to serve\r\n', 'B. To fail to arouse interest\r\n', 'C. To have no result\r\n', 'D. To work for both sides\r\n', 2),
(21, 'D', 2, 'If one-third of one-fourth of a number is 15, then three-tenth of that number is:', 'A. 35\r\n', 'B. 36\r\n', 'C. 45\r\n', 'D. 54\r\n', 3),
(22, 'D', 2, 'Three times the first of three consecutive odd integers is 3 more than twice the third. The third integer is:', 'A. 9\r\n', 'B. 11\r\n', 'C. 13\r\n', 'D. 15\r\n', 3),
(23, 'B', 2, 'The difference between a two-digit number and the number obtained by interchanging the positions of its digits is 36. What is the difference between the two digits of that number?', 'A. 3', 'B. 4', 'C. 9', 'D. Cannot be determined\r\n', 3),
(24, 'B', 2, 'The difference between a two-digit number and the number obtained by interchanging the digits is 36. What is the difference between the sum and the difference of the digits of the number if the ratio between the digits of ', 'A. 4', 'B. 8', 'C. 16', 'D.\r\nNone of these\r\n', 3),
(25, 'B', 2, 'A two-digit number is such that the product of the digits is 8. When 18 is added to the number, then the digits are reversed. The number is:', 'A. 18\r\n', 'B. 24\r\n', 'C. 42\r\n', 'D. 81\r\n', 3),
(26, 'D', 2, 'The sum of the digits of a two-digit number is 15 and the difference between the digits is 3. What is the two-digit number?', 'A. 69\r\n', 'B. 78\r\n', 'C. 96\r\n', 'D. Cannot be determined\r\n', 3),
(27, 'A', 2, 'The sum of the squares of three numbers is 138, while the sum of their products taken two at a time is 131. Their sum is:', 'A. 20', 'B. 30', 'C. 40', 'D. None of these\r\n', 3),
(28, 'D', 2, 'A number consists of two digits. If the digits interchange places and the new number is added to the original number, then the resulting number will be divisible by:', 'A. 3', 'B. 5', 'C. 9', 'D. 11', 3),
(29, 'A', 2, 'In a two-digit, if it is known that its unit\'s digit exceeds its ten\'s digit by 2 and that the product of the given number and the sum of its digits is equal to 144, then the number is:', 'A. 24', 'B. 26', 'C. 42', 'D. 46', 3),
(30, 'A', 2, 'Find a positive number which when increased by 17 is equal to 60 times the reciprocal of the number.', 'A. 3', 'B. 10 ', 'C. 17', 'D. 20', 3),
(31, 'B', 2, 'Brass gets discolored in air because of the presence of which of the following gases in air?', 'A. Oxygen\r\n', 'B. Hydrogen sulphide\r\n', 'C. Carbon dioxide\r\n', 'D. Nitrogen\r\n', 4),
(32, 'B', 2, 'Which of the following is a non metal that remains liquid at room temperature?', 'A. Phosphorous\r\n', 'B. Bromine\r\n', 'C. Chlorine\r\n', 'D. Helium', 4),
(33, 'B', 2, 'Chlorophyll is a naturally occurring chelate compound in which central metal is', 'A. copper\r\n', 'B. magnesium\r\n', 'C. iron\r\n', 'D. calcium', 4),
(34, 'A', 2, 'Which of the following is used in pencils?', 'A. Graphite\r\n', 'B. Silicon\r\n', 'C. Charcoal\r\n', 'D. Phosphorous\r\n', 4),
(35, 'B', 2, 'Which of the following metals forms an amalgam with other metals?', 'A. Tin\r\n', 'B. Mercury\r\n', 'C. Lead\r\n', 'D. Zinc\r\n', 4),
(36, 'B', 2, 'Chemical formula for water is', 'A. NaAlO2', 'B. H2O\r\n', 'C. Al2O3\r\n', 'D.\r\nCaSiO3\r\nD. CaSiO3\r\n', 4),
(37, 'A', 2, 'The gas usually filled in the electric bulb is', 'A. nitrogen\r\n', 'B. hydrogen\r\n', 'C. carbon dioxide\r\n', 'D. oxygen\r\n', 4),
(38, 'A', 2, 'Washing soda is the common name for', 'A. Sodium carbonate\r\n', 'B. Calcium bicarbonate\r\n', 'C. Sodium bicarbonate\r\n', 'D. Calcium carbonate\r\n', 4),
(39, 'A', 2, 'Quartz crystals normally used in quartz clocks etc. is chemically', 'A. silicon dioxide\r\n', 'B. germanium oxide\r\n', 'C. a mixture of germanium oxide and silicon dioxide\r\n', 'D. sodium silicate\r\n', 4),
(40, 'D', 2, 'Which of the gas is not known as green house gas?', 'A. Methane\r\n', 'B. Nitrous oxide\r\n', 'C. Carbon dioxide\r\n', 'D. Hydrogen\r\n', 4);

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
('37uB1aY9Tybh3piajwPtZnja5TfGb0evAzuivfOB', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiQXlKcEI0aEZNVFdtcnF0MEtYYjJKa0pLV0xJVjFMQ2g4TEJTaUtMMiI7czo3OiJzdWJqZWN0IjtpOjQ7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9xdWl6NCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1661934584),
('WwMuc2VPMC5J7WT5DERxZaGIyd3lCjbtVP2rLIvb', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/104.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiNE5MQVhSS2pFanZCSUl1SDFHdVk4Y3Z1V3psVlNRdWhxYXhON0Q1RSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9xdWl6MyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoyMToicGFzc3dvcmRfaGFzaF9zYW5jdHVtIjtzOjYwOiIkMnkkMTAkQ0RKdm4zRTdBSGhHSnlSRHlnbHdTT3d4QWhaWUdUZnJMUzZCV3ZEV1c2WEJOekxnckV4VmUiO3M6Nzoic3ViamVjdCI7aTo0O30=', 1661934309);

-- --------------------------------------------------------

--
-- Table structure for table `student_m`
--

CREATE TABLE `student_m` (
  `id` int(11) NOT NULL,
  `sub_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` int(222) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `name` varchar(222) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `name`) VALUES
(1, 'Aptitute'),
(2, 'English'),
(3, 'Math'),
(4, 'Science');

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
(1, 'prince', 'prince@gmail.com', NULL, '$2y$10$CDJvn3E7AHhGJyRDyglwSOwxAhZYGTfrLS6BWvDWW6XBNzLgrExVe', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-29 13:31:29', '2022-08-29 13:31:29');

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
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `student_m`
--
ALTER TABLE `student_m`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `student_m`
--
ALTER TABLE `student_m`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
