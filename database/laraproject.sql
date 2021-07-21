-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июл 21 2021 г., 16:40
-- Версия сервера: 5.7.33
-- Версия PHP: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `laraproject`
--

-- --------------------------------------------------------

--
-- Структура таблицы `departments`
--

CREATE TABLE `departments` (
  `id` int(20) NOT NULL,
  `title` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `departments`
--

INSERT INTO `departments` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'хирургия', NULL, '2021-06-07 17:51:38'),
(2, 'неврология', NULL, NULL),
(3, 'психиатрия', NULL, NULL),
(4, 'онкология', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `doctors`
--

CREATE TABLE `doctors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `sur_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `specific` varchar(50) NOT NULL,
  `image` varchar(100) DEFAULT NULL,
  `room` int(20) NOT NULL,
  `department_id` int(20) NOT NULL,
  `status` int(10) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `schedule_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `doctors`
--

INSERT INTO `doctors` (`id`, `name`, `sur_name`, `last_name`, `phone`, `email`, `specific`, `image`, `room`, `department_id`, `status`, `created_at`, `updated_at`, `schedule_id`) VALUES
(1, 'Николай', 'Амосов', 'Владимирович', 236589, 'nikol@gmail.com', 'хирург', 'doctors-1.jpg', 105, 1, 1, NULL, '2021-06-30 15:04:12', 1),
(2, 'Владимир', 'Абрамов', 'Андреевич', 456321, 'vova@gmail.com', 'психиатр', 'doctors-2.jpg', 202, 1, 1, NULL, '2021-06-03 18:01:59', 2),
(3, 'Виктор', 'Василенко', 'Николаевич', 112365, 'victor@gmail.com', 'онколог', 'doctors-3.jpg', 303, 3, 1, NULL, NULL, 3),
(4, 'Татьяна', 'Звягинцева', 'Дмитриевна', 789654, 'tanya@gmail.com', 'гастроэнтеролог', 'doctors-4.jpg', 111, 3, 1, NULL, NULL, 4),
(5, 'Николай', 'Касьян', 'Андреевич', 456987, 'nik@gmail.com', 'остеопат', NULL, 222, 2, 1, NULL, NULL, 5),
(6, 'Георгий', 'Маркелов', 'Иванович', 147852, 'gosha@gmail.com', 'невропатолог', NULL, 333, 1, 1, NULL, NULL, 6),
(7, 'Артем', 'Прудов', 'Сергеевич', 6454334, 'art@gmail.com', 'нервопатолог', NULL, 205, 2, 1, NULL, NULL, 7),
(8, 'Сергей', 'Кулишов', 'Борисович', 437690, 'serg@gmail.com', 'Анестезиолог', NULL, 203, 1, NULL, '2021-06-17 14:14:54', '2021-06-17 14:14:54', 8),
(9, 'Аннастасия', 'Шаповалова', 'Николаевна', 876543, 'anastasia@gmail.com', 'Педиатр', NULL, 179, 3, NULL, '2021-06-17 14:26:44', '2021-06-17 14:26:44', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `doctor_user`
--

CREATE TABLE `doctor_user` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `doctor_id` int(10) UNSIGNED NOT NULL,
  `dateTime` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `doctor_user`
--

INSERT INTO `doctor_user` (`id`, `user_id`, `doctor_id`, `dateTime`, `created_at`, `updated_at`) VALUES
(1, 1, 1, NULL, NULL, NULL),
(2, 2, 1, NULL, NULL, NULL),
(3, 3, 2, NULL, NULL, NULL),
(4, 4, 3, NULL, NULL, NULL),
(5, 5, 3, NULL, NULL, NULL),
(6, 6, 4, NULL, NULL, NULL),
(7, 2, 2, NULL, NULL, NULL),
(8, 2, 4, NULL, NULL, NULL),
(9, 5, 1, NULL, NULL, NULL),
(10, 13, 5, NULL, NULL, NULL),
(11, 13, 3, NULL, NULL, NULL),
(12, 13, 3, NULL, NULL, NULL),
(13, 13, 3, NULL, NULL, NULL),
(14, 13, 3, NULL, NULL, NULL),
(15, 13, 3, '2021-06-17 00:00:00', NULL, NULL),
(16, 13, 3, '2021-06-17 00:00:00', NULL, NULL),
(17, 13, 3, '2021-06-17 00:00:00', NULL, NULL),
(18, 13, 3, '2021-06-17 00:00:00', NULL, NULL),
(19, 13, 3, '2021-06-17 00:00:00', NULL, NULL),
(20, 13, 3, NULL, NULL, NULL),
(21, 13, 3, NULL, NULL, NULL),
(22, 13, 3, NULL, NULL, NULL),
(23, 13, 3, NULL, NULL, NULL),
(24, 13, 3, NULL, NULL, NULL),
(25, 13, 3, NULL, NULL, NULL),
(26, 13, 3, NULL, NULL, NULL),
(27, 13, 3, NULL, NULL, NULL),
(28, 13, 3, NULL, NULL, NULL),
(29, 13, 3, NULL, NULL, NULL),
(30, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(31, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(32, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(33, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(34, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(35, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(36, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(37, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(38, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(39, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(40, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(41, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(42, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(43, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(44, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(45, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(46, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(47, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(48, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(49, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(50, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(51, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(52, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(53, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(54, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(55, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(56, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(57, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(58, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(59, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(60, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(61, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(62, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(63, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(64, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(65, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(66, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(67, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(68, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(69, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(70, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(71, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(72, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(73, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(74, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(75, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(76, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(77, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(78, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(79, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(80, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(81, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(82, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(83, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(84, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(85, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(86, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(87, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(88, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(89, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(90, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(91, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(92, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(93, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(94, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(95, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(96, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(97, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(98, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(99, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(100, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(101, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(102, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(103, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(104, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(105, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(106, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(107, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(108, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(109, 13, 3, '2021-06-18 00:00:00', NULL, NULL),
(110, 13, 3, '2021-06-18 00:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_05_30_095736_add_timestamp_to_doctors', 2),
(5, '2021_06_04_111719_create_records_table', 3),
(6, '2021_06_04_191012_create_doctors_users_table', 4),
(7, '2021_06_04_192207_create_doctor_user_table', 5),
(8, '2021_06_04_193807_create_doctor_user_table', 6),
(9, '2021_06_04_200829_create_doctor_user_table', 7),
(10, '2021_06_07_204254_add_timestamp_to_departments', 8),
(11, '2021_06_20_131442_create_roles_table', 9);

-- --------------------------------------------------------

--
-- Структура таблицы `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Структура таблицы `records`
--

CREATE TABLE `records` (
  `id` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `doctor_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dateTime` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `records`
--

INSERT INTO `records` (`id`, `doctor_id`, `user_id`, `dateTime`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2021-06-01', NULL, NULL),
(3, 1, 4, '2021-06-03', NULL, NULL),
(4, 3, 5, '2021-06-06', NULL, NULL),
(12, 5, 13, '2021-06-18', NULL, NULL),
(13, 6, 13, '2021-06-20', NULL, NULL),
(14, 5, 13, '2021-06-16', NULL, NULL),
(15, 5, 13, '2021-06-16', NULL, NULL),
(16, 1, 13, '2021-06-01', NULL, NULL),
(17, 1, 13, '2021-06-01', NULL, NULL),
(18, 2, 13, '2021-06-02', NULL, NULL),
(22, 6, 3, '2021-06-19', NULL, NULL),
(23, 8, 3, '2021-06-20', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', NULL, NULL),
(2, 'Moderator', NULL, NULL),
(3, 'Guest', NULL, NULL);

-- --------------------------------------------------------

--
-- Структура таблицы `schedules`
--

CREATE TABLE `schedules` (
  `id` int(10) UNSIGNED NOT NULL,
  `hours` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `schedules`
--

INSERT INTO `schedules` (`id`, `hours`, `created_at`, `updated_at`) VALUES
(1, '8,9,10,11,12,13,14,15,16,17', NULL, NULL),
(2, '8,9,10,11,12', NULL, NULL),
(3, '13,14,15,16,17', NULL, NULL),
(4, '8,9,10,11,12,13,14,15,16', NULL, NULL),
(5, '8,9,10,11,12,13,14,15,16', NULL, NULL),
(6, '13,14,15,16,17', NULL, NULL),
(7, '13,14,15,16,17', NULL, NULL),
(8, '8,9,10,11,12', NULL, NULL),
(9, '8,9,10,11,12', NULL, NULL),
(10, NULL, '2021-06-30 19:54:03', '2021-06-30 19:54:03'),
(11, NULL, '2021-06-30 19:54:14', '2021-06-30 19:54:14');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sur_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(50) DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` int(20) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `sur_name`, `last_name`, `phone`, `email`, `image`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Олег', 'Клясс', 'Константинович', 252025, 'oleg@gmail.com', NULL, NULL, '12345', NULL, '12345', NULL, '2021-06-17 15:35:01'),
(2, 'Наталья', 'Васильченко', 'Викторовна', 112365, 'olga@gmail.com', NULL, NULL, '67890', NULL, '67890', NULL, NULL),
(3, 'Максим', 'Ржевицкий', 'Евгеньевич', 789654, 'maxim@gmail.com', 'user1-128x128.jpg', NULL, '$2y$10$s.kZzHiT3.cG/BCok/H3tOUfCFS18XSEle8/XkmkuysQAM0GMQJp.', 1, NULL, '2021-05-17 16:07:54', '2021-05-17 16:07:54'),
(4, 'Сергей', 'Сергеев', 'Сергеевич', 456321, 'sergey@gmail.com', NULL, NULL, '12345', NULL, NULL, NULL, NULL),
(5, 'Александр', 'Чернявский', 'Викторович', 456321, 'alex@gmail.com', NULL, NULL, '12345', NULL, NULL, NULL, NULL),
(6, 'Катерина', 'Подсадная', 'Викторовна', 789654, 'katya@gmail.com', NULL, NULL, '12345', NULL, NULL, NULL, NULL),
(7, 'Ирина', 'Котлярова', 'Васильевна', 236589, 'ira@gmail.com', NULL, NULL, '12345', NULL, NULL, NULL, NULL),
(8, 'Виктор', 'Уваров', 'Викторович', 43434345, 'viktor@gmail.com', NULL, NULL, '12345', NULL, NULL, NULL, NULL),
(13, 'Наталья', 'Сытник', 'Вячеславовна', 124598, 'natal@gmail.com', 'user5-128x128.jpg', NULL, '$2y$10$uEhuUUVZYhqT2FUcYE2lIejzABfYzjAemIrtfizzFcx9iHeEor3gK', 2, NULL, '2021-06-09 15:36:51', '2021-06-09 15:36:52');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `doctor_user`
--
ALTER TABLE `doctor_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_user_user_id_foreign` (`user_id`),
  ADD KEY `doctor_user_doctor_id_foreign` (`doctor_id`);

--
-- Индексы таблицы `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Индексы таблицы `records`
--
ALTER TABLE `records`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
