-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 28-04-2024 a las 05:31:44
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `symfonymessagingapp`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `doctrine_migration_versions`
--

CREATE TABLE `doctrine_migration_versions` (
  `version` varchar(191) NOT NULL,
  `executed_at` datetime DEFAULT NULL,
  `execution_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Volcado de datos para la tabla `doctrine_migration_versions`
--

INSERT INTO `doctrine_migration_versions` (`version`, `executed_at`, `execution_time`) VALUES
('DoctrineMigrations\\Version20240411073936', '2024-04-11 09:39:41', 15),
('DoctrineMigrations\\Version20240411074308', '2024-04-11 09:43:14', 41),
('DoctrineMigrations\\Version20240411164805', '2024-04-11 18:48:12', 100),
('DoctrineMigrations\\Version20240411165353', '2024-04-11 18:54:00', 8),
('DoctrineMigrations\\Version20240412235017', '2024-04-13 01:50:24', 45),
('DoctrineMigrations\\Version20240413051955', '2024-04-13 07:20:00', 8),
('DoctrineMigrations\\Version20240413055422', '2024-04-13 07:54:25', 8),
('DoctrineMigrations\\Version20240416031707', '2024-04-16 05:17:23', 9),
('DoctrineMigrations\\Version20240416055327', '2024-04-16 07:53:35', 11),
('DoctrineMigrations\\Version20240416072815', '2024-04-16 09:28:36', 11);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `body` varchar(255) NOT NULL,
  `attachment_filename` varchar(255) DEFAULT NULL,
  `sent_at` datetime DEFAULT NULL COMMENT '(DC2Type:datetime_immutable)',
  `viewed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `message`
--

INSERT INTO `message` (`id`, `sender_id`, `subject`, `body`, `attachment_filename`, `sent_at`, `viewed`) VALUES
(35, 1, 'Hello Sam', 'It\'s me Jack!', 'pexels-photo-674010-662c9cb263d02.jpg', '2024-04-27 08:35:30', 1),
(36, 9, 'Hello Sam', 'It\'s me Amine', 'pexels-photo-674010-662c9d471ba42.jpg', '2024-04-27 08:37:59', 1),
(37, 2, 'Hello!', 'it\'s me Sam!', 'pexels-photo-674010-662c9e708da2c.jpg', '2024-04-27 08:42:56', 1),
(38, 2, 'Hello again', 'a message from Sam!', NULL, '2024-04-27 08:43:23', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `message_user`
--

CREATE TABLE `message_user` (
  `message_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `message_user`
--

INSERT INTO `message_user` (`message_id`, `user_id`) VALUES
(35, 2),
(36, 2),
(37, 1),
(37, 2),
(38, 9);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `reset_password_request`
--

CREATE TABLE `reset_password_request` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `selector` varchar(20) NOT NULL,
  `hashed_token` varchar(100) NOT NULL,
  `requested_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)',
  `expires_at` datetime NOT NULL COMMENT '(DC2Type:datetime_immutable)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `reset_password_request`
--

INSERT INTO `reset_password_request` (`id`, `user_id`, `selector`, `hashed_token`, `requested_at`, `expires_at`) VALUES
(1, 2, 'r7p9UvNzupW04VEItnqE', 'HWrrWIkHEyIhpIP7cCchx/2WdBRwXiRJo2V5GsqbNT0=', '2024-04-26 16:30:37', '2024-04-26 17:30:37');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `email` varchar(180) NOT NULL,
  `password` varchar(255) NOT NULL,
  `is_verified` tinyint(1) NOT NULL,
  `username` varchar(255) NOT NULL,
  `profile_picture_filename` varchar(255) DEFAULT NULL,
  `blocked` tinyint(1) NOT NULL,
  `roles` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL COMMENT '(DC2Type:json)' CHECK (json_valid(`roles`))
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Volcado de datos para la tabla `user`
--

INSERT INTO `user` (`id`, `email`, `password`, `is_verified`, `username`, `profile_picture_filename`, `blocked`, `roles`) VALUES
(1, 'Jack@gmail.com', '$2y$13$mvDUMn02Dyw7tG4u.GTFMOJ.QB7Tsq41Brq3xocvhxgZQThi41F7S', 1, 'Jack', '662c9c53b3b8b.png', 0, '[\"ROLE_USER\"]'),
(2, 'Sam@gmail.es', '$2y$13$B7BPN5eBUSGX.UCeemLLJ.GhDJ8n.4cCfHmnZJ6PJS.mOh6i75ume', 1, 'Sam', '662c9a9161921.png', 0, '[\"ROLE_ADMIN\"]'),
(9, 'amine@gmail.com', '$2y$13$B1vgSKbffwTfXevUqSISo.WmsdUd1ZMA568gwHIbE63C3cqblWMGO', 1, 'Amine', '662c9ce4574e5.png', 0, '[]');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `doctrine_migration_versions`
--
ALTER TABLE `doctrine_migration_versions`
  ADD PRIMARY KEY (`version`);

--
-- Indices de la tabla `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_B6BD307FF624B39D` (`sender_id`);

--
-- Indices de la tabla `message_user`
--
ALTER TABLE `message_user`
  ADD PRIMARY KEY (`message_id`,`user_id`),
  ADD KEY `IDX_24064D90537A1329` (`message_id`),
  ADD KEY `IDX_24064D90A76ED395` (`user_id`);

--
-- Indices de la tabla `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_7CE748AA76ED395` (`user_id`);

--
-- Indices de la tabla `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_IDENTIFIER_EMAIL` (`email`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT de la tabla `reset_password_request`
--
ALTER TABLE `reset_password_request`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `message`
--
ALTER TABLE `message`
  ADD CONSTRAINT `FK_B6BD307FF624B39D` FOREIGN KEY (`sender_id`) REFERENCES `user` (`id`);

--
-- Filtros para la tabla `message_user`
--
ALTER TABLE `message_user`
  ADD CONSTRAINT `FK_24064D90537A1329` FOREIGN KEY (`message_id`) REFERENCES `message` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_24064D90A76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE;

--
-- Filtros para la tabla `reset_password_request`
--
ALTER TABLE `reset_password_request`
  ADD CONSTRAINT `FK_7CE748AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
