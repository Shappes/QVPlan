-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 07. Jul 2017 um 19:28
-- Server-Version: 10.1.24-MariaDB
-- PHP-Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `qvplan`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_07_04_154953_create_statuses_table', 1),
(4, '2017_07_04_162138_create_v_requests_table', 1);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `statuses`
--

CREATE TABLE `statuses` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `statuses`
--

INSERT INTO `statuses` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'approved', '2017-07-05 15:40:15', '2017-07-05 15:40:15'),
(2, 'declined', '2017-07-05 15:40:15', '2017-07-05 15:40:15'),
(3, 'pending', '2017-07-05 15:40:15', '2017-07-05 15:40:15');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin` tinyint(4) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mansour Yaacoubi', 'mansour@yaacoubi.com', '$2y$10$tQFR4awZtnwjIJvgoiuLnuMSy8LiEDfroNpigt9PM1HWDIk6dwKpK', 0, 'mCPuQpxkCHLNzybD3XFJW4JthiqHoK30WIqdlKbbRbyowlMtkFD9Lhtrijlj', '2017-07-05 09:12:55', '2017-07-05 09:12:55'),
(3, 'dl', 'dennislazar97@gmail.com', '$2y$10$NsEGHlBeeRDd6ARBlRjdA.sQh0VrkseM34Mg98IiP.Sr7EZi8L5p2', 1, 'tLRRDS9H1MpyUSqWo099ABk82IiDyHO7y68dVPgTpb0ErolJYqxP9kUCBhwt', '2017-07-05 10:47:07', '2017-07-05 10:47:07'),
(4, 'dla', 'dennislazar@gmail.com', '$2y$10$6dV3oTvaIvrOAJLRpg/h8Oj60giv6D9DyWVv6mNlpthyj.AiORTwu', 0, 'mGVIKGUlwamOSgPkzO7pXquhzcB9k1lXL1fLbYcJYq7W4LPn0066Bq1H74Rh', '2017-07-05 14:08:55', '2017-07-05 14:08:55');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `v_requests`
--

CREATE TABLE `v_requests` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `status_id` int(10) UNSIGNED NOT NULL DEFAULT '3',
  `vacation_start` date NOT NULL,
  `vacation_end` date NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Daten für Tabelle `v_requests`
--

INSERT INTO `v_requests` (`id`, `user_id`, `status_id`, `vacation_start`, `vacation_end`, `message`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2017-07-22', '2017-07-30', 'hallo', '2017-07-05 09:20:52', '2017-07-05 09:20:52'),
(2, 1, 3, '2017-07-16', '2017-07-22', 'Hallöle', '2017-07-05 09:36:14', '2017-07-05 09:36:14'),
(3, 3, 1, '2017-02-21', '2017-03-01', 'hallo 123', '2017-07-05 11:47:51', '2017-07-07 14:52:13'),
(9, 3, 3, '2017-07-14', '2017-07-09', 'asdasdasd', '2017-07-05 13:19:53', '2017-07-05 13:19:53'),
(10, 3, 3, '2017-07-13', '2017-07-22', 'asda', '2017-07-05 13:57:04', '2017-07-05 13:57:04'),
(11, 4, 3, '2017-07-13', '2017-08-06', 'adwasdasdasd', '2017-07-05 21:16:52', '2017-07-05 21:16:52'),
(12, 4, 3, '2017-07-29', '2017-07-31', 'sdawasdawaasdwdawdasdsdawasdawaasdwdawdasdsdawasdawaasdwdawdasdsdawasdawaasdwdawdasdshallossdawasdawaasdwdawdasdsdawasdawaasdwdawdasdsdawasdawaasdwdawdasdsdawasdawaasdwdawdasds', '2017-07-05 21:17:07', '2017-07-05 21:17:07'),
(13, 4, 3, '2017-06-26', '2017-07-11', 'sdasd12', '2017-07-05 21:17:24', '2017-07-05 21:17:24'),
(14, 3, 3, '2017-07-07', '2017-07-28', 'ad21e213asd12eqas', '2017-07-05 21:17:47', '2017-07-05 21:17:47'),
(15, 4, 3, '2017-07-13', '2017-07-22', 'adwdaydasadawdayds', '2017-07-06 06:38:09', '2017-07-06 06:38:09'),
(16, 3, 3, '2017-07-20', '2017-07-08', 'asdasda', '2017-07-06 07:08:20', '2017-07-06 07:08:20');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indizes für die Tabelle `statuses`
--
ALTER TABLE `statuses`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indizes für die Tabelle `v_requests`
--
ALTER TABLE `v_requests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `statuses`
--
ALTER TABLE `statuses`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT für Tabelle `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT für Tabelle `v_requests`
--
ALTER TABLE `v_requests`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
