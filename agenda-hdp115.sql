-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-06-2019 a las 05:04:28
-- Versión del servidor: 10.1.21-MariaDB
-- Versión de PHP: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `agenda-hdp115`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `avatar`
--

CREATE TABLE `avatar` (
  `id_avatar` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `avatar_url` varchar(200) NOT NULL,
  `tipo` varchar(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `avatar`
--

INSERT INTO `avatar` (`id_avatar`, `nombre`, `avatar_url`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Task', 'http://127.0.0.1:8000/AVATAR/aDIb1ZTu8MtcKEr79BE9nHe4i7VhzDw6D42bhvzu.png', 'publico', '2019-06-09 00:25:32', '2019-06-09 00:25:32'),
(2, 'Anime 1', 'http://127.0.0.1:8000/AVATAR/WWmhwAbD7x8ynuFvGru2iPMn9zH4bXR1d2i4wChO.jpeg', 'publico', '2019-06-09 00:26:02', '2019-06-09 00:26:02'),
(3, 'Zero two', 'http://127.0.0.1:8000/AVATAR/NjQw4cj3NUCyW8w4KAEMMulxMmk8Av8RfzcDrAkA.png', 'publico', '2019-06-09 00:26:20', '2019-06-09 00:26:20'),
(4, 'Anime 2', 'http://127.0.0.1:8000/AVATAR/LbAAAetFZpGxNGqvCgO7auIYXx8rj8n5pTYd7rqf.jpeg', 'publico', '2019-06-09 00:26:34', '2019-06-09 00:26:34'),
(5, 'Anime 3', 'http://127.0.0.1:8000/AVATAR/PS1BDonXbvxMndcvorlT7ohcbTMPVQER3OwXjnP5.png', 'publico', '2019-06-09 00:26:43', '2019-06-09 00:26:43'),
(6, 'Sonic', 'http://127.0.0.1:8000/AVATAR/9f1rocC4mDJyANoYDQtgCTmaYDqkPLf8GdCbqsmc.png', 'publico', '2019-06-09 00:28:57', '2019-06-09 00:28:57'),
(7, 'Sugar Cubs 1', 'http://127.0.0.1:8000/AVATAR/2eKynCTNnrU0iIcwsTDjZokOWCgI9JsThJL6twHC.jpg', 'xE2H41Gg10ws3iU95Gg', '2019-06-09 00:37:55', '2019-06-09 00:37:55'),
(8, 'Sugar cubs 2', 'http://127.0.0.1:8000/AVATAR/KqvUpfIsr4skVF6OINVuhFHgEJiyGVJPD9bVPlPj.jpg', 'xE2H41Gg10ws3iU95Gg', '2019-06-09 00:38:50', '2019-06-09 00:38:50');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo`
--

CREATE TABLE `grupo` (
  `codigo_grupo` varchar(100) NOT NULL,
  `nombre_grupo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci NOT NULL,
  `descripcion` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo`
--

INSERT INTO `grupo` (`codigo_grupo`, `nombre_grupo`, `descripcion`, `created_at`, `updated_at`) VALUES
('xE2H41Gg10ws3iU95Gg', 'Grupo Famila Cruz', 'Grupo familiar', '2019-06-08 23:34:06', '2019-06-08 23:34:06');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `grupo_user`
--

CREATE TABLE `grupo_user` (
  `id_grupo_user` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `codigo_grupo` varchar(100) NOT NULL,
  `rol` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `grupo_user`
--

INSERT INTO `grupo_user` (`id_grupo_user`, `user_id`, `codigo_grupo`, `rol`, `created_at`, `updated_at`) VALUES
(1, 2, 'xE2H41Gg10ws3iU95Gg', 'Administrador', '2019-06-08 23:34:06', '2019-06-08 23:34:06'),
(2, 3, 'xE2H41Gg10ws3iU95Gg', 'Usuario', '2019-06-08 23:37:25', '2019-06-08 23:37:25'),
(3, 4, 'xE2H41Gg10ws3iU95Gg', 'Usuario', '2019-06-08 23:38:36', '2019-06-08 23:38:36'),
(4, 5, 'xE2H41Gg10ws3iU95Gg', 'Usuario', '2019-06-08 23:39:23', '2019-06-08 23:39:23'),
(5, 6, 'xE2H41Gg10ws3iU95Gg', 'Usuario', '2019-06-08 23:39:54', '2019-06-08 23:39:54');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion`
--

CREATE TABLE `notificacion` (
  `id_noty` int(11) NOT NULL,
  `codigo_noty` varchar(200) DEFAULT NULL,
  `titulo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `cuerpo` text CHARACTER SET utf8 COLLATE utf8_spanish_ci,
  `creador` int(11) DEFAULT NULL,
  `grupo` varchar(200) DEFAULT NULL,
  `tarea_id` varchar(200) DEFAULT NULL,
  `tipo` varchar(200) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_user`
--

CREATE TABLE `notificacion_user` (
  `id` int(11) NOT NULL,
  `notificacion_id` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas`
--

CREATE TABLE `tareas` (
  `id_tarea` int(11) NOT NULL,
  `codigo_tarea` varchar(200) NOT NULL,
  `titulo` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci DEFAULT NULL,
  `cuerpo` text CHARACTER SET utf8mb4 COLLATE utf8mb4_spanish2_ci,
  `estado` varchar(100) DEFAULT NULL,
  `fecha_fin` date DEFAULT NULL,
  `creador` int(11) DEFAULT NULL,
  `grupo` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_usuarios`
--

CREATE TABLE `tareas_usuarios` (
  `id` int(11) NOT NULL,
  `tarea_id` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupo_activo` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `grupo_activo`, `avatar`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Juan Carlos Contreras', 'carloscontreras@gmail.com', '$2y$10$G88mkcdlWyjX6Olga3ehIu.iSM2k0i4gZ57ug0/zj1xKptDKD/rlW', 'owner', 'https://i.ibb.co/P5p1trd/contacts2.png', '0lusD2F9F80PimoJaBqBJYXHd1CLGlKXUnOjvGIhXfhZg1PjRkKstHtdWzP0', '2019-06-08 23:34:06', '2019-06-08 23:34:06'),
(2, 'Francisco Navas', 'navasfran98@gmail.com', '$2y$10$G88mkcdlWyjX6Olga3ehIu.iSM2k0i4gZ57ug0/zj1xKptDKD/rlW', 'xE2H41Gg10ws3iU95Gg', 'https://i.ibb.co/P5p1trd/contacts2.png', 'O2kqaOhJa1dpZxPRBlr5k7w5NggyRWIOTXBOt4pmKtRR0CfwlCPU2fF83FKk', '2019-06-08 23:34:06', '2019-06-08 23:34:06'),
(3, 'Carlos Canela', 'canela45@gmail.com', '$2y$10$FCcl9BsH1k7F6wnEhDB1GuEGSCIWSnincEuH1K9NggBZh7mfez8Ri', 'xE2H41Gg10ws3iU95Gg', 'https://i.ibb.co/P5p1trd/contacts2.png', 'm7PafOKsvsAIYGBKcMG6jdNvFSMSBk08DHW99479eM9jZ17bVrftUoWVUA2c', '2019-06-08 23:37:25', '2019-06-08 23:37:25'),
(4, 'karla Margarita', 'margatia66@gmail.com', '$2y$10$oBVzb8d2z9MBaBqkc./l6.tYWYkJVkWjwflfuNLBRUIkjcJkrSmOG', 'xE2H41Gg10ws3iU95Gg', 'https://i.ibb.co/P5p1trd/contacts2.png', 'KLbUiEZldVZjtQDMQvnhTP55hgoiJpjgIROd9sZabH1qwB8taaNmqUwnLFSy', '2019-06-08 23:38:36', '2019-06-08 23:38:36'),
(5, 'Diana Carolina Garcia', 'caro345@gmail.com', '$2y$10$I6cau0iB1UOGmKWldi2HUu6auvRfbdDqTlHmE1NW0LhEN3qAXV7yy', 'xE2H41Gg10ws3iU95Gg', 'https://i.ibb.co/P5p1trd/contacts2.png', 'LKix5TtB89mBb5lPIBZ8pAZhhK2T8O0RTlf0DAB3dj9Kc7vvmDEhbjgFI3Pd', '2019-06-08 23:39:23', '2019-06-08 23:39:23'),
(6, 'Hector Costa', 'costaH34@gmail.com', '$2y$10$PF1GukukBx/1sOQokoTdiO56xaY9FrLCgluIRMZn4Bwlb8ii9sD6S', 'xE2H41Gg10ws3iU95Gg', 'http://127.0.0.1:8000/AVATAR/LbAAAetFZpGxNGqvCgO7auIYXx8rj8n5pTYd7rqf.jpeg', NULL, '2019-06-08 23:39:54', '2019-06-09 01:24:23');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `avatar`
--
ALTER TABLE `avatar`
  ADD PRIMARY KEY (`id_avatar`);

--
-- Indices de la tabla `grupo`
--
ALTER TABLE `grupo`
  ADD PRIMARY KEY (`codigo_grupo`);

--
-- Indices de la tabla `grupo_user`
--
ALTER TABLE `grupo_user`
  ADD PRIMARY KEY (`id_grupo_user`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `codigo_grupo` (`codigo_grupo`);

--
-- Indices de la tabla `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD PRIMARY KEY (`id_noty`),
  ADD UNIQUE KEY `codigo_noty` (`codigo_noty`),
  ADD KEY `creador` (`creador`),
  ADD KEY `tarea_id` (`tarea_id`);

--
-- Indices de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notificacion_id` (`notificacion_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indices de la tabla `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indices de la tabla `tareas`
--
ALTER TABLE `tareas`
  ADD PRIMARY KEY (`id_tarea`),
  ADD UNIQUE KEY `codigo_tarea` (`codigo_tarea`),
  ADD KEY `creador` (`creador`),
  ADD KEY `grupo` (`grupo`);

--
-- Indices de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tarea_id` (`tarea_id`),
  ADD KEY `user_id` (`user_id`);

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
-- AUTO_INCREMENT de la tabla `avatar`
--
ALTER TABLE `avatar`
  MODIFY `id_avatar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT de la tabla `grupo_user`
--
ALTER TABLE `grupo_user`
  MODIFY `id_grupo_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_noty` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `grupo_user`
--
ALTER TABLE `grupo_user`
  ADD CONSTRAINT `grupo_user_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `grupo_user_ibfk_2` FOREIGN KEY (`codigo_grupo`) REFERENCES `grupo` (`codigo_grupo`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
