
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

--
-- Volcado de datos para la tabla `notificacion`
--

INSERT INTO `notificacion` (`id_noty`, `codigo_noty`, `titulo`, `cuerpo`, `creador`, `grupo`, `tarea_id`, `tipo`, `created_at`, `updated_at`) VALUES
(1, 'Noty-7Il81-LFZiCZ830-67095OCplrn2v-4664TGi', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Hola soy Francisco, les acabo de asignar su primer tarea.', 2, 'xE2H41Gg10ws3iU95Gg', 'Task-Cdi58-4sHRxE131-12450IVw1sc8e-2886AVy', 'tarea', '2019-06-10 22:51:01', '2019-06-10 22:51:01'),
(2, 'Noty-hKM63-XzNBrW947-29663AnFyh714-5791G78', 'FRANCISCO NAVAS TE ASIGNO UNA NUEVA TAREA', 'Hola Carlos te asigne tu tarea.', 2, 'xE2H41Gg10ws3iU95Gg', 'Task-Ekt17-KebFX9276-32733yTzo96B8-48160fK', 'tarea', '2019-06-10 22:52:05', '2019-06-10 22:52:05'),
(3, 'Noty-Jjx59-xtaN0Z134-66866NYQtRMow-4833cbH', 'CAMBIÓ DE ESTADO LA TAREA', 'Diana Carolina Garcia ha cambiado el estado de la tarea ha EN PROCESO.', 5, 'xE2H41Gg10ws3iU95Gg', 'Task-Cdi58-4sHRxE131-12450IVw1sc8e-2886AVy', 'cambio', '2019-06-11 01:18:30', '2019-06-11 01:18:30'),
(4, 'Noty-bXK47-JhwtFy231-95728GemscHoU-20199lU', 'CAMBIÓ DE ESTADO LA TAREA', 'Diana Carolina Garcia ha cambiado el estado de la tarea ha FINALIZADO.', 5, 'xE2H41Gg10ws3iU95Gg', 'Task-Ekt17-KebFX9276-32733yTzo96B8-48160fK', 'cambio', '2019-06-11 01:38:47', '2019-06-11 01:38:47');

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

--
-- Volcado de datos para la tabla `notificacion_user`
--

INSERT INTO `notificacion_user` (`id`, `notificacion_id`, `user_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 'Noty-7Il81-LFZiCZ830-67095OCplrn2v-4664TGi', 4, 'SIN LEER', '2019-06-10 22:51:01', '2019-06-10 22:51:01'),
(2, 'Noty-7Il81-LFZiCZ830-67095OCplrn2v-4664TGi', 5, 'SIN LEER', '2019-06-10 22:51:01', '2019-06-10 22:51:01'),
(3, 'Noty-7Il81-LFZiCZ830-67095OCplrn2v-4664TGi', 6, 'SIN LEER', '2019-06-10 22:51:01', '2019-06-10 22:51:01'),
(4, 'Noty-hKM63-XzNBrW947-29663AnFyh714-5791G78', 3, 'SIN LEER', '2019-06-10 22:52:05', '2019-06-10 22:52:05'),
(5, 'Noty-Jjx59-xtaN0Z134-66866NYQtRMow-4833cbH', 4, 'SIN LEER', '2019-06-11 01:18:30', '2019-06-11 01:18:30'),
(6, 'Noty-Jjx59-xtaN0Z134-66866NYQtRMow-4833cbH', 6, 'SIN LEER', '2019-06-11 01:18:30', '2019-06-11 01:18:30'),
(7, 'Noty-bXK47-JhwtFy231-95728GemscHoU-20199lU', 3, 'SIN LEER', '2019-06-11 01:38:47', '2019-06-11 01:38:47');

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

--
-- Volcado de datos para la tabla `tareas`
--

INSERT INTO `tareas` (`id_tarea`, `codigo_tarea`, `titulo`, `cuerpo`, `estado`, `fecha_fin`, `creador`, `grupo`, `created_at`, `updated_at`) VALUES
(1, 'Task-Cdi58-4sHRxE131-12450IVw1sc8e-2886AVy', 'Tarea #1', 'cuerpo tarea 1', 'Proceso', '2019-06-27', 2, 'xE2H41Gg10ws3iU95Gg', '2019-06-10 22:51:01', '2019-06-11 01:18:30'),
(2, 'Task-Ekt17-KebFX9276-32733yTzo96B8-48160fK', 'Tarea #2', 'cuerpo tarea 2', 'Finalizado', '2019-06-29', 2, 'xE2H41Gg10ws3iU95Gg', '2019-06-10 22:52:05', '2019-06-11 01:38:47');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tareas_usuarios`
--

CREATE TABLE `tareas_usuarios` (
  `id` int(11) NOT NULL,
  `tarea_id` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `grupo_id` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tareas_usuarios`
--

INSERT INTO `tareas_usuarios` (`id`, `tarea_id`, `user_id`, `grupo_id`, `created_at`, `updated_at`) VALUES
(1, 'Task-Cdi58-4sHRxE131-12450IVw1sc8e-2886AVy', 4, 'xE2H41Gg10ws3iU95Gg', '2019-06-10 22:51:01', '2019-06-10 22:51:01'),
(2, 'Task-Cdi58-4sHRxE131-12450IVw1sc8e-2886AVy', 5, 'xE2H41Gg10ws3iU95Gg', '2019-06-10 22:51:01', '2019-06-10 22:51:01'),
(3, 'Task-Cdi58-4sHRxE131-12450IVw1sc8e-2886AVy', 6, 'xE2H41Gg10ws3iU95Gg', '2019-06-10 22:51:01', '2019-06-10 22:51:01'),
(4, 'Task-Ekt17-KebFX9276-32733yTzo96B8-48160fK', 3, 'xE2H41Gg10ws3iU95Gg', '2019-06-10 22:52:05', '2019-06-10 22:52:05'),
(5, 'Task-Ekt17-KebFX9276-32733yTzo96B8-48160fK', 5, 'xE2H41Gg10ws3iU95Gg', '2019-06-10 22:52:05', '2019-06-10 22:52:05');

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
(2, 'Francisco Navas', 'navasfran98@gmail.com', '$2y$10$G88mkcdlWyjX6Olga3ehIu.iSM2k0i4gZ57ug0/zj1xKptDKD/rlW', 'xE2H41Gg10ws3iU95Gg', 'http://127.0.0.1:8000/AVATAR/PS1BDonXbvxMndcvorlT7ohcbTMPVQER3OwXjnP5.png', 'viJtBbNNPjqA3EsxMyxwBwTNuITE06z13hmIesoe73W2JPXbZCblcqc1LERD', '2019-06-08 23:34:06', '2019-06-11 04:48:54'),
(3, 'Carlos Canela', 'canela45@gmail.com', '$2y$10$FCcl9BsH1k7F6wnEhDB1GuEGSCIWSnincEuH1K9NggBZh7mfez8Ri', 'xE2H41Gg10ws3iU95Gg', 'https://i.ibb.co/P5p1trd/contacts2.png', 'm7PafOKsvsAIYGBKcMG6jdNvFSMSBk08DHW99479eM9jZ17bVrftUoWVUA2c', '2019-06-08 23:37:25', '2019-06-08 23:37:25'),
(4, 'karla Margarita', 'margatia66@gmail.com', '$2y$10$oBVzb8d2z9MBaBqkc./l6.tYWYkJVkWjwflfuNLBRUIkjcJkrSmOG', 'xE2H41Gg10ws3iU95Gg', 'https://i.ibb.co/P5p1trd/contacts2.png', 'KLbUiEZldVZjtQDMQvnhTP55hgoiJpjgIROd9sZabH1qwB8taaNmqUwnLFSy', '2019-06-08 23:38:36', '2019-06-08 23:38:36'),
(5, 'Diana Carolina Garcia', 'caro345@gmail.com', '$2y$10$I6cau0iB1UOGmKWldi2HUu6auvRfbdDqTlHmE1NW0LhEN3qAXV7yy', 'xE2H41Gg10ws3iU95Gg', 'https://i.ibb.co/P5p1trd/contacts2.png', 'uf4Mu354G2EXYAb5BCPwX1NmkQuqRkllypARfta7h3oqLHlS6NMXVkY7qDFn', '2019-06-08 23:39:23', '2019-06-08 23:39:23'),
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
  MODIFY `id_noty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
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

--
-- Filtros para la tabla `notificacion`
--
ALTER TABLE `notificacion`
  ADD CONSTRAINT `notificacion_ibfk_1` FOREIGN KEY (`tarea_id`) REFERENCES `tareas` (`codigo_tarea`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  ADD CONSTRAINT `notificacion_user_ibfk_1` FOREIGN KEY (`notificacion_id`) REFERENCES `notificacion` (`codigo_noty`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  ADD CONSTRAINT `tareas_usuarios_ibfk_1` FOREIGN KEY (`tarea_id`) REFERENCES `tareas` (`codigo_tarea`) ON DELETE CASCADE ON UPDATE CASCADE;
