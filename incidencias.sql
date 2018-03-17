-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 17-03-2018 a las 05:55:24
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `incidencias`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `project_id`, `created_at`, `updated_at`) VALUES
(1, 'Categoría A1', '', 1, '2018-02-23 09:46:15', '2018-02-23 09:46:15'),
(2, 'Categoría A2', '', 1, '2018-02-23 09:46:15', '2018-02-23 09:46:15'),
(3, 'Categoría B1', '', 2, '2018-02-23 09:46:15', '2018-02-23 09:46:15'),
(4, 'Categoría B2', '', 2, '2018-02-23 09:46:15', '2018-02-23 09:46:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `incidents`
--

CREATE TABLE `incidents` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `severity` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) UNSIGNED DEFAULT NULL,
  `level_id` int(10) UNSIGNED DEFAULT NULL,
  `client_id` int(10) UNSIGNED NOT NULL,
  `support_id` int(10) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `incidents`
--

INSERT INTO `incidents` (`id`, `title`, `description`, `severity`, `category_id`, `level_id`, `client_id`, `support_id`, `created_at`, `updated_at`) VALUES
(2, 'Incidencia de prueba', 'Descripción de prueba', 'Menor', NULL, NULL, 2, NULL, '2018-02-23 09:47:58', '2018-02-23 09:47:58'),
(3, 'Putas', 'Error de prueba #PPCDSALVC', 'Menor', NULL, NULL, 2, NULL, '2018-02-23 10:39:31', '2018-02-23 10:39:31');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `levels`
--

CREATE TABLE `levels` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `project_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2018_02_23_013634_create_projects_table', 1),
(28, '2018_02_23_013958_create_categories_table', 1),
(29, '2018_02_23_014318_create_levels_table', 1),
(30, '2018_02_23_014401_create_incidents_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `projects`
--

CREATE TABLE `projects` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `projects`
--

INSERT INTO `projects` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Proyecto A', 'El proyecto A consiste en desarrollar un sitio web moderno.', '2018-02-23 09:46:14', '2018-02-23 09:46:14'),
(2, 'Proyecto B', 'El proyecto B consiste en desarrollar una App Android.', '2018-02-23 09:46:15', '2018-02-23 09:46:15');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` smallint(6) NOT NULL DEFAULT '2',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Eduardo', 'ed_ramos95@hotmail.com', '$2y$10$fRjFtPklZV1cUhTWit1K4eMOgvTDDCk0OlLn5qAIBLXAVL7mcQEue', 0, 'bWIUEyDPegcn4wEARHFmhjTMraLMA9vxOTs7nnxLJPLkDUbzebmhf7vG3IUC', '2018-02-23 09:46:14', '2018-02-23 09:46:14'),
(2, 'Delia', 'delia_lopez01@hotmail.com', '$2y$10$LBi2y4WnnGzXanLP3NqtSezebjdlt7RiWVPVcAZGqIn29LIgTe0IC', 1, '8FR4n2wLZBggi6b8vrks1hU5pTTx0kKxyIikrj5lTytm5tNnp4nnEOLWmJcV', '2018-02-23 09:46:14', '2018-02-23 09:46:14'),
(3, 'Jonathan', 'jony_sn04@hotmail.com', '$2y$10$7u2Jg0vuHv0HoU5vLeA11eMdUpFEzQktlRXkh4Z9GtBLum3GpXN5C', 2, NULL, '2018-02-23 09:46:14', '2018-02-23 09:46:14');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `categories_project_id_foreign` (`project_id`);

--
-- Indices de la tabla `incidents`
--
ALTER TABLE `incidents`
  ADD PRIMARY KEY (`id`),
  ADD KEY `incidents_category_id_foreign` (`category_id`),
  ADD KEY `incidents_level_id_foreign` (`level_id`),
  ADD KEY `incidents_client_id_foreign` (`client_id`),
  ADD KEY `incidents_support_id_foreign` (`support_id`);

--
-- Indices de la tabla `levels`
--
ALTER TABLE `levels`
  ADD PRIMARY KEY (`id`),
  ADD KEY `levels_project_id_foreign` (`project_id`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `incidents`
--
ALTER TABLE `incidents`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `levels`
--
ALTER TABLE `levels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT de la tabla `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Filtros para la tabla `incidents`
--
ALTER TABLE `incidents`
  ADD CONSTRAINT `incidents_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `incidents_client_id_foreign` FOREIGN KEY (`client_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `incidents_level_id_foreign` FOREIGN KEY (`level_id`) REFERENCES `levels` (`id`),
  ADD CONSTRAINT `incidents_support_id_foreign` FOREIGN KEY (`support_id`) REFERENCES `users` (`id`);

--
-- Filtros para la tabla `levels`
--
ALTER TABLE `levels`
  ADD CONSTRAINT `levels_project_id_foreign` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
