-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 21-12-2020 a las 11:47:04
-- Versión del servidor: 10.4.11-MariaDB
-- Versión de PHP: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `php`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `courses`
--

CREATE TABLE `courses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_start` datetime NOT NULL,
  `date_end` datetime NOT NULL,
  `active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `courses`
--

INSERT INTO `courses` (`id`, `name`, `description`, `date_start`, `date_end`, `active`, `created_at`, `updated_at`) VALUES
(1, 'DAM', 'FPII Desarrollo Aplicaciones Multiplataforma', '2020-09-15 00:00:00', '2021-06-15 00:00:00', 1, NULL, NULL),
(2, 'DAW', 'FP de Desarrollo de aplicaciones WEB', '2020-09-15 00:00:00', '2021-06-15 00:00:00', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `evaluation`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `evaluation` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`id_class` varchar(255)
,`exam_name` varchar(255)
,`exam_mark` decimal(11,0)
,`work_name` varchar(255)
,`work_mark` int(11)
,`Evaluation_grade` decimal(14,1)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `eventos`
--

CREATE TABLE `eventos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) DEFAULT NULL,
  `course` varchar(255) NOT NULL,
  `color` varchar(20) DEFAULT NULL,
  `textColor` varchar(20) DEFAULT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `eventos`
--

INSERT INTO `eventos` (`id`, `title`, `description`, `course`, `color`, `textColor`, `start`, `end`, `created_at`, `updated_at`) VALUES
(14, 'PHP', 'PARCIAL 1', 'DAW', NULL, NULL, '2020-12-17 10:00:00', '2020-12-17 11:00:00', NULL, NULL),
(15, 'PHP', 'PRODUCTO 1', 'DAW', NULL, NULL, '2020-12-06 10:00:00', '2020-12-06 11:00:00', NULL, NULL),
(16, 'JAVA', 'PRODUCTO 1', 'DAW', NULL, NULL, '2020-12-08 10:00:00', '2020-12-08 11:00:00', NULL, NULL),
(17, 'JAVA', 'PARCIAL 1', 'DAW', NULL, NULL, '2020-12-16 10:00:00', '2020-12-16 11:00:00', NULL, NULL),
(18, 'BBDD', 'PARCIAL 1', 'DAM', NULL, NULL, '2020-12-15 10:00:00', '2020-12-15 11:00:00', NULL, NULL),
(19, 'BBDD', 'PRODUCTO 1', 'DAM', '#9d50dc', '#FFFFFF', '2020-12-10 10:00:00', '2020-12-10 10:00:00', NULL, '2020-12-21 09:38:41'),
(20, 'ZOCALOS', 'PRODUCTO 1', 'DAM', NULL, NULL, '2020-12-03 10:00:00', '2020-12-03 11:00:00', NULL, NULL),
(21, 'ZOCALOS', 'PARCIAL 1', 'DAM', NULL, NULL, '2020-12-17 10:00:00', '2020-12-17 11:00:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `exams`
--

CREATE TABLE `exams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_student` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` decimal(11,0) NOT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `exams`
--

INSERT INTO `exams` (`id`, `id_class`, `id_student`, `name`, `mark`, `course`, `created_at`, `updated_at`) VALUES
(1, 'PHP', 5, 'Parcial 1', '8', 'DAW', NULL, '2020-12-15 16:28:03'),
(2, 'JAVA', 5, 'Parcial 1', '6', 'DAW', NULL, '2020-12-15 16:28:03'),
(3, 'BBDD', 4, 'Parcial 1', '9', 'DAM', NULL, '2020-12-15 16:28:03'),
(4, 'ZOCALOS', 4, 'Parcial 1', '7', 'DAM', NULL, '2020-12-15 16:28:03'),
(5, 'BBDD', 11, 'Parcial 1', '10', 'DAM', NULL, NULL),
(6, 'BBDD', 10, 'Parcial 1', '8', 'DAM', NULL, NULL),
(7, 'BBDD', 7, 'Parcial 1', '6', 'DAM', NULL, NULL),
(8, 'BBDD', 11, 'Parcial 1', '9', 'DAM', NULL, NULL),
(9, 'BBDD', 8, 'Parcial 1', '7', 'DAM', NULL, NULL),
(10, 'BBDD', 6, 'Parcial 1', '4', 'DAM', NULL, NULL),
(11, 'ZOCALOS', 7, 'Parcial 1', '6', 'DAM', NULL, NULL),
(12, 'ZOCALOS', 8, 'Parcial 1', '7', 'DAM', NULL, NULL),
(13, 'ZOCALOS', 9, 'Parcial 1', '9', 'DAM', NULL, NULL),
(14, 'ZOCALOS', 10, 'Parcial 1', '10', 'DAM', NULL, NULL),
(15, 'ZOCALOS', 11, 'Parcial 1', '10', 'DAM', NULL, NULL),
(17, 'PHP', 14, 'Parcial 1', '8', 'DAW', NULL, NULL),
(18, 'PHP', 12, 'Parcial 1', '5', 'DAW', NULL, NULL),
(19, 'PHP', 16, 'Parcial 1', '5', 'DAW', NULL, NULL),
(20, 'PHP', 15, 'Parcial 1', '10', 'DAW', NULL, NULL),
(21, 'PHP', 13, 'Parcial 1', '4', 'DAW', NULL, NULL),
(22, 'PHP', 17, 'Parcial 1', '8', 'DAW', NULL, NULL),
(23, 'JAVA', 16, 'Parcial 1', '4', 'DAW', NULL, NULL),
(24, 'JAVA', 13, 'Parcial 1', '4', 'DAW', NULL, NULL),
(25, 'JAVA', 12, 'Parcial 1', '9', 'DAW', NULL, NULL),
(26, 'JAVA', 14, 'Parcial 1', '7', 'DAW', NULL, NULL),
(27, 'JAVA', 15, 'Parcial 1', '10', 'DAW', NULL, NULL),
(28, 'JAVA', 17, 'Parcial 1', '7', 'DAW', NULL, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `failed_jobs`
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
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1),
(13, '2020_12_05_084945_create_courses_table', 1),
(14, '2020_12_05_180735_create_students_table', 1),
(15, '2020_12_07_201154_create_schedules_table', 1),
(16, '2020_12_07_211555_create_works_table', 1),
(17, '2020_12_07_214612_create_exams_table', 1),
(18, '2020_12_12_164651_create_eventos_table', 1),
(19, '2020_12_14_154730_create_permission_tables', 2),
(20, '2020_12_15_210446_create_evaluations_table', 3),
(21, '2020_12_16_132342_create_evaluation_view', 4),
(22, '2020_12_16_135813_create_evaluation_view', 5),
(23, '2020_12_19_183940_notifications_view', 6);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura Stand-in para la vista `notifications`
-- (Véase abajo para la vista actual)
--
CREATE TABLE `notifications` (
`id` bigint(20) unsigned
,`name` varchar(255)
,`course` varchar(255)
,`notifications` varchar(10)
,`id_class` varchar(255)
,`exam_name` varchar(255)
,`exam_mark` decimal(11,0)
,`work_name` varchar(255)
,`work_mark` int(11)
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time_start` date NOT NULL,
  `time_end` date NOT NULL,
  `day` date DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colour` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `teacher` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `schedules`
--

INSERT INTO `schedules` (`id`, `id_class`, `time_start`, `time_end`, `day`, `course`, `colour`, `teacher`, `created_at`, `updated_at`) VALUES
(2, 'PHP', '2020-10-15', '2021-01-15', '2020-11-26', 'DAW', '#42f5f2', '1', NULL, '2020-12-16 15:41:04'),
(4, 'JAVA', '2020-11-15', '2021-01-15', '2020-11-18', 'DAW', '#f00a47', '2', NULL, '2020-12-16 15:41:28'),
(6, 'ZOCALOS', '2020-09-15', '2021-01-15', '2020-11-17', 'DAM', '#36995c', '3', NULL, '2020-12-16 15:41:44'),
(7, 'BBDD', '2020-10-15', '2021-01-15', '2020-11-23', 'DAM', '#0a4ff0', '4', NULL, '2020-12-16 15:42:01');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `students`
--

CREATE TABLE `students` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pass` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_registered` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `teachers`
--

CREATE TABLE `teachers` (
  `id_teacher` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `telephone` varchar(50) NOT NULL,
  `nif` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `teachers`
--

INSERT INTO `teachers` (`id_teacher`, `name`, `surname`, `telephone`, `nif`, `email`) VALUES
(1, 'Gerard', 'Marquez', '626626650', '35472525T', 'gerard@gerard.com'),
(2, 'Hector', 'Esquerdo', '623623623', '35735757G', 'hector@hector.com'),
(3, 'Toni', 'Estirado', '699699699', '98778952C', 'toni@toni.com'),
(4, 'Pepe', 'Estirado', '621621621', '98778944C', 'pepe@pepe.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `notifications` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telephone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nif` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` int(11) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `class` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `notifications`, `name`, `surname`, `telephone`, `nif`, `email`, `tipo`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `course`, `class`, `username`) VALUES
(1, 'no', 'admin', '', '', '', 'admin@admin.com', 1, NULL, '$2y$10$UMMDtKmewJ39xoF5legvq.r0niwz1/Qk1bMyyn4vYGloNd5ZIsAHO', NULL, '2020-12-14 16:18:09', '2020-12-18 16:17:29', '', NULL, 'admin1'),
(2, 'YES', 'teacherDAM', '', '', '', 'teacherDAM@gmail.com', 2, NULL, '$2y$10$ro3ojXChM1Rtt6kCWvSRKOAjpkunPwx3WKfsLsj8ZFQuVT0NNhfqS', NULL, '2020-12-14 14:22:37', '2020-12-19 12:05:56', '', 'BBDD', 'teacherDAM1'),
(3, 'NO', 'teacherDAW', '', '', '', 'teacherDAW@gmail.com', 3, NULL, '$2y$10$cm6.KC/2rgO/4M1C93fYzu2rnVKehZM3wnAaJ.nx0dewzO39y3v5O', NULL, '2020-12-15 16:13:34', '2020-12-19 12:18:59', '', 'PHP', 'teacherDAW1'),
(4, 'NO', 'userDAM', 'userDAM', '21354651', '131385438', 'userDAM@gmail.com', 4, NULL, '$2y$10$TJwD5yubs2xB44OklVXmKuzccPlBpZ2jf5luqIjncgFzodZdc4nIG', NULL, '2020-12-15 16:45:45', '2020-12-19 12:27:58', 'DAM', NULL, 'userDAM'),
(5, 'NO', 'userDAW', 'userDAW', '231546', '321354135', 'userDAW@gmail.com', 5, NULL, '$2y$10$6gKtYPQDn2B0j3V6njw5ZOjhCcbK.M56vgFtYgJDvj5VpnGh8m6le', NULL, '2020-12-16 13:55:55', '2020-12-21 09:46:08', 'DAW', NULL, 'userDAW1'),
(6, 'YES', 'Pearline', 'Wassung', '807-769-3293', '0093-1052', 'pwassung0@live.com', 4, NULL, '1234', NULL, NULL, NULL, 'DAM', NULL, 'pwassung0'),
(7, 'NO', 'Thornie', 'Rollins', '534-210-6606', '59779-109', 'trollins1@xinhuanet.com', 4, NULL, '1234', NULL, NULL, NULL, 'DAM', NULL, 'trollins1'),
(8, 'YES', 'Shannon', 'Hews', '535-571-9639', '11489-071', 'shews2@shareasale.com', 4, NULL, '1234', NULL, NULL, NULL, 'DAM', NULL, 'shews2'),
(9, 'YES', 'Corey', 'Tearle', '501-401-3360', '0781-2350', 'ctearle3@nhs.uk', 4, NULL, '1234', NULL, NULL, NULL, 'DAM', NULL, 'ctearle3'),
(10, 'NO', 'Roana', 'Ferrulli', '180-683-6324', '63717-875', 'rferrulli4@state.tx.us', 4, NULL, '1234', NULL, NULL, NULL, 'DAM', NULL, 'rferrulli4'),
(11, 'YES', 'Mitchael', 'Bradbury', '492-475-3103', '36987-2159', 'mbradbury5@tmall.com', 4, NULL, '1234', NULL, NULL, NULL, 'DAM', NULL, 'mbradbury5'),
(12, 'NO', 'Ebony', 'Hursey', '154-627-2243', '54868-5033', 'ehursey0@wikispaces.com', 5, NULL, '1234', NULL, NULL, NULL, 'DAW', NULL, 'ehursey0'),
(13, 'YES', 'Hyman', 'Shelper', '223-562-5531', '68788-9539', 'hshelper1@plala.or.jp', 5, NULL, '1234', NULL, NULL, NULL, 'DAW', NULL, 'hshelper1'),
(14, 'NO', 'Ronnie', 'Farish', '156-354-5777', '50114-6035', 'rfarish2@drupal.org', 5, NULL, '1234', NULL, NULL, NULL, 'DAW', NULL, 'rfarish2'),
(15, 'YES', 'Erhard', 'Margery', '658-179-7720', '68599-5301', 'emargery3@tuttocitta.it', 5, NULL, '1234', NULL, NULL, NULL, 'DAW', NULL, 'emargery3'),
(16, 'NO', 'Uta', 'Burth', '751-342-0363', '63940-536', 'uburth4@businessweek.com', 5, NULL, '1234', NULL, NULL, NULL, 'DAW', NULL, 'uburth4'),
(17, 'YES', 'Easter', 'Arber', '537-228-6519', '61355-570', 'earber5@cocolog-nifty.com', 5, NULL, '1234', NULL, NULL, NULL, 'DAW', NULL, 'earber5');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `works`
--

CREATE TABLE `works` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_class` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_student` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mark` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `course` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `works`
--

INSERT INTO `works` (`id`, `id_class`, `id_student`, `name`, `mark`, `created_at`, `updated_at`, `course`) VALUES
(1, 'PHP', 5, 'Producto 1', 8, NULL, NULL, 'DAW'),
(2, 'JAVA', 5, 'Producto 1', 5, NULL, NULL, 'DAW'),
(3, 'BBDD', 4, 'Producto 1', 9, NULL, NULL, 'DAM'),
(4, 'ZOCALOS', 4, 'Producto 1', 5, NULL, NULL, 'DAM'),
(5, 'JAVA', 16, 'Producto 1', 5, NULL, NULL, 'DAW'),
(6, 'JAVA', 17, 'Producto 1', 9, NULL, NULL, 'DAW'),
(7, 'JAVA', 14, 'Producto 1', 8, NULL, NULL, 'DAW'),
(8, 'JAVA', 12, 'Producto 1', 5, NULL, NULL, 'DAW'),
(9, 'JAVA', 13, 'Producto 1', 9, NULL, NULL, 'DAW'),
(10, 'JAVA', 15, 'Producto 1', 7, NULL, NULL, 'DAW'),
(11, 'PHP', 12, 'Producto 1', 10, NULL, NULL, 'DAW'),
(12, 'PHP', 17, 'Producto 1', 5, NULL, NULL, 'DAW'),
(13, 'PHP', 16, 'Producto 1', 6, NULL, NULL, 'DAW'),
(14, 'PHP', 15, 'Producto 1', 10, NULL, NULL, 'DAW'),
(15, 'PHP', 13, 'Producto 1', 4, NULL, NULL, 'DAW'),
(16, 'PHP', 14, 'Producto 1', 7, NULL, NULL, 'DAW'),
(17, 'BBDD', 6, 'Producto 1', 5, NULL, NULL, 'DAM'),
(18, 'BBDD', 11, 'Producto 1', 6, NULL, NULL, 'DAM'),
(19, 'BBDD', 8, 'Producto 1', 7, NULL, NULL, 'DAM'),
(20, 'BBDD', 7, 'Producto 1', 5, NULL, NULL, 'DAM'),
(21, 'BBDD', 10, 'Producto 1', 7, NULL, NULL, 'DAM'),
(22, 'BBDD', 9, 'Producto 1', 9, NULL, NULL, 'DAM'),
(23, 'ZOCALOS', 8, 'Producto 1', 6, NULL, NULL, 'DAM'),
(24, 'ZOCALOS', 9, 'Producto 1', 5, NULL, NULL, 'DAM'),
(25, 'ZOCALOS', 10, 'Producto 1', 6, NULL, NULL, 'DAM'),
(26, 'ZOCALOS', 7, 'Producto 1', 7, NULL, NULL, 'DAM'),
(27, 'ZOCALOS', 6, 'Producto 1', 7, NULL, NULL, 'DAM'),
(28, 'ZOCALOS', 11, 'Producto 1', 9, NULL, NULL, 'DAM');

-- --------------------------------------------------------

--
-- Estructura para la vista `evaluation`
--
DROP TABLE IF EXISTS `evaluation`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `evaluation`  AS  select `users`.`id` AS `id`,`users`.`name` AS `name`,`exams`.`id_class` AS `id_class`,`exams`.`name` AS `exam_name`,`exams`.`mark` AS `exam_mark`,`works`.`name` AS `work_name`,`works`.`mark` AS `work_mark`,`exams`.`mark` * 0.6 + `works`.`mark` * 0.4 AS `Evaluation_grade` from ((`users` join `exams` on(`users`.`id` = `exams`.`id_student`)) join `works` on(`users`.`id` = `works`.`id_student`)) group by `users`.`id`,`users`.`name`,`exams`.`id_class` order by `users`.`id` ;

-- --------------------------------------------------------

--
-- Estructura para la vista `notifications`
--
DROP TABLE IF EXISTS `notifications`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `notifications`  AS  select `users`.`id` AS `id`,`users`.`name` AS `name`,`users`.`course` AS `course`,`users`.`notifications` AS `notifications`,`exams`.`id_class` AS `id_class`,`exams`.`name` AS `exam_name`,`exams`.`mark` AS `exam_mark`,`works`.`name` AS `work_name`,`works`.`mark` AS `work_mark` from ((`users` join `exams` on(`users`.`id` = `exams`.`id_student`)) join `works` on(`users`.`id` = `works`.`id_student`)) where `users`.`notifications` = 'YES' group by `users`.`id` order by `users`.`id` ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `eventos`
--
ALTER TABLE `eventos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `exams`
--
ALTER TABLE `exams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mark` (`mark`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indices de la tabla `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_class` (`id_class`),
  ADD KEY `course` (`course`);

--
-- Indices de la tabla `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id_teacher`);

--
-- Indices de la tabla `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `id` (`id`);

--
-- Indices de la tabla `works`
--
ALTER TABLE `works`
  ADD PRIMARY KEY (`id`),
  ADD KEY `mark` (`mark`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `courses`
--
ALTER TABLE `courses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `eventos`
--
ALTER TABLE `eventos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `exams`
--
ALTER TABLE `exams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT de la tabla `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT de la tabla `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT de la tabla `students`
--
ALTER TABLE `students`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id_teacher` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT de la tabla `works`
--
ALTER TABLE `works`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
