-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 23-06-2019 a las 07:02:08
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
(1, 'Task', 'http://127.0.0.1:8000/AVATAR/aDIb1ZTu8MtcKEr79BE9nHe4i7VhzDw6D42bhvzu.png', 'publico', '2019-06-09 06:25:32', '2019-06-09 06:25:32'),
(2, 'Anime 1', 'http://127.0.0.1:8000/AVATAR/WWmhwAbD7x8ynuFvGru2iPMn9zH4bXR1d2i4wChO.jpeg', 'publico', '2019-06-09 06:26:02', '2019-06-09 06:26:02'),
(3, 'Zero two', 'http://127.0.0.1:8000/AVATAR/NjQw4cj3NUCyW8w4KAEMMulxMmk8Av8RfzcDrAkA.png', 'publico', '2019-06-09 06:26:20', '2019-06-09 06:26:20'),
(4, 'Anime 2', 'http://127.0.0.1:8000/AVATAR/LbAAAetFZpGxNGqvCgO7auIYXx8rj8n5pTYd7rqf.jpeg', 'publico', '2019-06-09 06:26:34', '2019-06-09 06:26:34'),
(5, 'Anime 3', 'http://127.0.0.1:8000/AVATAR/PS1BDonXbvxMndcvorlT7ohcbTMPVQER3OwXjnP5.png', 'publico', '2019-06-09 06:26:43', '2019-06-09 06:26:43'),
(6, 'Sonic', 'http://127.0.0.1:8000/AVATAR/9f1rocC4mDJyANoYDQtgCTmaYDqkPLf8GdCbqsmc.png', 'publico', '2019-06-09 06:28:57', '2019-06-09 06:28:57'),
(7, 'Angry Emoji', 'http://127.0.0.1:8000/AVATAR/akU6L9LGfxcjJUwCNQ5GbgwZbWzqYJZQinadmVlc.png', 'FZx5252746jcuIs3027', '2019-06-23 06:41:21', '2019-06-23 06:41:21'),
(8, 'Android', 'http://127.0.0.1:8000/AVATAR/wQzJyAuA9QDbStNZTZV9LsRK8TqH6NEQfa9u9TiK.png', 'OUGj83QU64Z2b5c31QU', '2019-06-23 06:46:04', '2019-06-23 06:46:04'),
(9, 'AndryBirds', 'http://127.0.0.1:8000/AVATAR/PKdd8JkTe9jFskNKIaDvXTn0vwOFlQ30Y7spMKEo.png', 'OUGj83QU64Z2b5c31QU', '2019-06-23 06:46:35', '2019-06-23 06:46:35'),
(10, 'Belly', 'http://127.0.0.1:8000/AVATAR/Nsk9Hpy5uBlTz0IaQD5XvHxZJ9V08x1Xv1XOFvZy.png', 'OUGj83QU64Z2b5c31QU', '2019-06-23 06:47:01', '2019-06-23 06:47:01'),
(11, 'GeometryDash', 'http://127.0.0.1:8000/AVATAR/FuQGpQf5agIfNSRAoEbZ7peh7iHNXaDjhHNz1Cjk.png', 'OUGj83QU64Z2b5c31QU', '2019-06-23 06:47:27', '2019-06-23 06:47:27'),
(12, 'ceberous', 'http://127.0.0.1:8000/AVATAR/fgMRoLB1mGHP4m6AyqcZvo8mqtTBOBofi55TaURA.png', 'OUGj83QU64Z2b5c31QU', '2019-06-23 06:55:38', '2019-06-23 06:55:38'),
(13, 'Pencil', 'http://127.0.0.1:8000/AVATAR/Jo4iDfRSHXDTbbzemGdFGk9GqitmyQ5tprEsaIek.png', 'OUGj83QU64Z2b5c31QU', '2019-06-23 06:55:52', '2019-06-23 06:55:52'),
(14, 'Zooke', 'http://127.0.0.1:8000/AVATAR/joeEyJVAsmclnePSG3fpnCXdMNHaXvuG0SsRdjFG.png', 'XPFN303Z58kEHJh303Z', '2019-06-23 07:03:38', '2019-06-23 07:03:38'),
(15, 'Yahoo', 'http://127.0.0.1:8000/AVATAR/qvwGQ1rXHt1LymcdgxzAnA7BATGNzHe8J4tFT2li.png', 'XPFN303Z58kEHJh303Z', '2019-06-23 07:03:52', '2019-06-23 07:03:52'),
(16, 'Winds', 'http://127.0.0.1:8000/AVATAR/SpzAYWIylshmlpukJVotUijvd26qp0OI6IKFQ3Wb.png', 'XPFN303Z58kEHJh303Z', '2019-06-23 07:04:06', '2019-06-23 07:04:06'),
(17, 'Happy 1', 'http://127.0.0.1:8000/AVATAR/0dQOkh8IOAgLIcvOV7orGEcXVmD85YmEuGLHbqsB.png', 'XPFN303Z58kEHJh303Z', '2019-06-23 07:04:26', '2019-06-23 07:04:26'),
(18, 'Happy 2', 'http://127.0.0.1:8000/AVATAR/niS9x5XC6UA51n9pV5TEz5I1BqxOEKwMgerb9Oxu.png', 'XPFN303Z58kEHJh303Z', '2019-06-23 07:04:51', '2019-06-23 07:04:51'),
(19, 'Hip', 'http://127.0.0.1:8000/AVATAR/WHk0LFwjvooi8DgtBuzjdhuMBYGOqAmKYHdDxy2e.png', 'q8ep79XO34W0LDp74XO', '2019-06-23 07:06:27', '2019-06-23 07:06:27'),
(20, 'jellysplash', 'http://127.0.0.1:8000/AVATAR/drNVOo1H4vjpGKvBkjPCuiwm3JHajmiJBjDtla9D.png', 'q8ep79XO34W0LDp74XO', '2019-06-23 07:06:41', '2019-06-23 07:06:41'),
(21, 'man', 'http://127.0.0.1:8000/AVATAR/AP1eZlVfDY4QZNaRLV9ztyRUGTYGb2nkGqyJchL0.png', 'q8ep79XO34W0LDp74XO', '2019-06-23 07:07:05', '2019-06-23 07:07:05'),
(22, 'Plume', 'http://127.0.0.1:8000/AVATAR/ofKZ7bcjS3urw7CjupVCzyhsiruyAAvlbKhLYo7m.png', 'q8ep79XO34W0LDp74XO', '2019-06-23 07:07:18', '2019-06-23 07:07:18'),
(23, 'man 2', 'http://127.0.0.1:8000/AVATAR/UPOZsu7AnSzBX9pQux5AxPUPm30R3eggtnAxP7yU.png', 'q8ep79XO34W0LDp74XO', '2019-06-23 07:08:46', '2019-06-23 07:08:46'),
(24, 'Radian', 'http://127.0.0.1:8000/AVATAR/RIi6p2nCnRXNLPGto1JMEFNbiEsbhx14tTBoqLY7.png', 'q8ep79XO34W0LDp74XO', '2019-06-23 07:11:16', '2019-06-23 07:11:16'),
(25, 'Angry', 'http://127.0.0.1:8000/AVATAR/RdyGCGqkHufxI8ajSGvWxX9Y9ynVx0lXBV6Ml02s.png', 'q8ep79XO34W0LDp74XO', '2019-06-23 07:13:23', '2019-06-23 07:13:23'),
(26, 'Mus', 'http://127.0.0.1:8000/AVATAR/PlF785D3TbOXEu5qACGEfBPCM3ED0SRpce19oQ7f.png', 'mcve46ki8129lgy75ki', '2019-06-23 07:19:15', '2019-06-23 07:19:15'),
(27, 'Homero', 'http://127.0.0.1:8000/AVATAR/vaLkP8SBD2u22eYgsxlBCEiRXyApjVZtjIsl226g.png', 'mcve46ki8129lgy75ki', '2019-06-23 07:19:36', '2019-06-23 07:19:36'),
(28, 'fun', 'http://127.0.0.1:8000/AVATAR/Kh5PpzU2FTysIYK5X4myZKhf6I8gtqIcoLVl0Tlu.png', 'mcve46ki8129lgy75ki', '2019-06-23 07:21:19', '2019-06-23 07:21:19'),
(29, 'Instagram', 'http://127.0.0.1:8000/AVATAR/CkaJwCVZ6yQaRwXO3p2KeVqb8lhq5EoR7Y3due3n.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:28:47', '2019-06-23 07:28:47'),
(30, 'Monkey', 'http://127.0.0.1:8000/AVATAR/Ss9LmhQB0qvcZE0K74kUAYLtUFHAYJ91mOgiJic7.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:29:11', '2019-06-23 07:29:11'),
(31, 'llama', 'http://127.0.0.1:8000/AVATAR/3Va3MQQiFCEkK0tqWEddBBMF8O5wZojkK6RKgEix.png', '9Ss118TZ58PXfFJ46TZ', '2019-06-23 07:31:37', '2019-06-23 07:31:37'),
(32, 'Bad', 'http://127.0.0.1:8000/AVATAR/LVwlyAktujauzAze6W5u0K0WG5nCHPzjtaF7q8L9.png', '1SpH50NU66Q9h3F14NU', '2019-06-23 07:34:00', '2019-06-23 07:34:00'),
(33, 'Math', 'http://127.0.0.1:8000/AVATAR/ssIzEU4sM6DdeF0sORgAha2PrIuHmVaGzerQg0zR.png', 'mNaY79Ag25m0Au179Ag', '2019-06-23 07:35:55', '2019-06-23 07:35:55'),
(34, 'reddis', 'http://127.0.0.1:8000/AVATAR/fJgkXCmefOxdOEIM2ASmIh3xsK3kexZWK0qiuuVS.png', 'rtdH95bw16pYqs987bw', '2019-06-23 07:36:55', '2019-06-23 07:36:55'),
(35, 'Finder', 'http://127.0.0.1:8000/AVATAR/VGqrITrW6oZIFefttEmROEZwNX5iX5yfwgpeRWOB.png', 'POng19mW70okAER52mW', '2019-06-23 07:39:35', '2019-06-23 07:39:35'),
(36, 'Boy', 'http://127.0.0.1:8000/AVATAR/xTvLhOMU0DXq8XiE9dMGF9THMTQS0VaLt6WSTpAV.png', 'q1Op65BG11q8H5p79BG', '2019-06-23 07:42:02', '2019-06-23 07:42:02'),
(37, 'Gril', 'http://127.0.0.1:8000/AVATAR/aK5ljDe9bUmHEuvtKL9IAVJxUauiGcbjZGEYuz7I.png', 'S2Cl51eG55gkqCG81eG', '2019-06-23 07:43:31', '2019-06-23 07:43:31'),
(38, 'Boy 1', 'http://127.0.0.1:8000/AVATAR/uRnIMYWNJa8pJSXyx7SLZ6UmhWFPQDWV5Ncvbs4k.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:44:51', '2019-06-23 07:44:51'),
(39, 'Boy 2', 'http://127.0.0.1:8000/AVATAR/6qoztBQA5mWyqvPIY8kPOR4YTeffg5vNb3Urival.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:45:07', '2019-06-23 07:45:07'),
(40, 'Boy 3', 'http://127.0.0.1:8000/AVATAR/1Uly3PKOnN6R2vodJlEb3OoQRUL1piTHP5cmE07L.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:45:16', '2019-06-23 07:45:16'),
(41, 'Gril 1', 'http://127.0.0.1:8000/AVATAR/sdCuaOJNpWtEzqXIjkxUnxaiqe4BFJ47AjpKLkaG.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:45:36', '2019-06-23 07:45:36'),
(42, 'Gril 2', 'http://127.0.0.1:8000/AVATAR/QLafJlwiv8mOkgMCkZJCKO52pHhuBrG0r733WIIg.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:45:48', '2019-06-23 07:45:48'),
(43, 'Gril 3', 'http://127.0.0.1:8000/AVATAR/STgQvlgExPyVq4lMIJXUk24VRv8Mir8qgmCdXHDB.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:45:58', '2019-06-23 07:45:58'),
(44, 'Gril 4', 'http://127.0.0.1:8000/AVATAR/9zYxhHTfTevS94QaEEh1pYsJbXSV91Tx5J8JHKT2.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:46:10', '2019-06-23 07:46:10'),
(45, 'Gril 5', 'http://127.0.0.1:8000/AVATAR/F8e58plBWu7U88YAfgtC9gqsUbVf52fjcUREqU3S.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:46:20', '2019-06-23 07:46:20'),
(46, 'Gril 6', 'http://127.0.0.1:8000/AVATAR/lRTYSmgvGnF3GZp6JWjyESTjghiRaogBcdus1qic.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:46:30', '2019-06-23 07:46:30'),
(47, 'Man', 'http://127.0.0.1:8000/AVATAR/XEcKEOWs8wxKTQw29f6Xn9GRHpvUpp6WEU8fcgDA.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:46:40', '2019-06-23 07:46:40'),
(48, 'boy 4', 'http://127.0.0.1:8000/AVATAR/qxc0k7Ncq1qjtoKxPFc6Pg5GrZSGUwVG5GWf8ShQ.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:46:54', '2019-06-23 07:46:54'),
(49, 'Instagram 2', 'http://127.0.0.1:8000/AVATAR/Z2K5XUDejjPWAEOg33Rt4aF0F8SfGuQC7c1QAORc.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:47:31', '2019-06-23 07:47:31'),
(50, 'King', 'http://127.0.0.1:8000/AVATAR/yWT8RPuDHw3DT15OIJIoGVQRZ4y2qXhZ3F3w0ybt.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:48:04', '2019-06-23 07:48:04'),
(51, 'Police', 'http://127.0.0.1:8000/AVATAR/gyQHYtusW9NIIN5Myjw8tyHh4eyuSR6BWRoVenqS.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:48:23', '2019-06-23 07:48:23'),
(52, 'Anime 3', 'http://127.0.0.1:8000/AVATAR/8PSY63RNF92uHVrNPDGEXDmdj3OfUnlzne1aTX04.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:48:59', '2019-06-23 07:48:59'),
(53, 'Anime 4', 'http://127.0.0.1:8000/AVATAR/NapRYgR1208hmHZkR25Ml90JvOZ0yeqjhaz3u3LM.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:49:14', '2019-06-23 07:49:14'),
(54, 'Anime 5', 'http://127.0.0.1:8000/AVATAR/l7RqCEjfRqxqqkmPLe4hUbdZ5eAiy71KtKWmUKtF.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:49:24', '2019-06-23 07:49:24'),
(55, 'Anime 6', 'http://127.0.0.1:8000/AVATAR/VPvOF1FnhBXAMQTUihtPdoE9n8P1xBsAt05VAl7b.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:49:42', '2019-06-23 07:49:42'),
(56, 'Anime 7', 'http://127.0.0.1:8000/AVATAR/xwQHnYQLokstGDQ9YSWoJIwzJa5EIFZCTL4qYjsX.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:49:54', '2019-06-23 07:49:54'),
(57, 'Anime 8', 'http://127.0.0.1:8000/AVATAR/e4Xd9DuY3qNDZRTjshDtM06XHrhZ2aMXDUtDtNz7.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:50:12', '2019-06-23 07:50:12'),
(58, 'Anime 9', 'http://127.0.0.1:8000/AVATAR/mRvmXhnTUjXhyjScuvTKnl0PkTLgT04ifCEE31b3.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:50:23', '2019-06-23 07:50:23'),
(59, 'Angry', 'http://127.0.0.1:8000/AVATAR/akU6L9LGfxcjJUwCNQ5GbgwZbWzqYJZQinadmVlc.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:51:32', '2019-06-23 07:51:32'),
(60, 'Zoo', 'http://127.0.0.1:8000/AVATAR/MG8TVB7wCcdudtWM0GiOt8puEYJnyIGrb1VAzCfZ.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:52:12', '2019-06-23 07:52:12'),
(61, 'Wins', 'http://127.0.0.1:8000/AVATAR/88X8mGgyo7rRQ7yo4FgjEEHcWBGvPKTiQgWvgvrl.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:52:26', '2019-06-23 07:52:26'),
(62, 'Damiam', 'http://127.0.0.1:8000/AVATAR/xf71Y9AuhKyuBvvHrRTsw6nfXc71viwR65rPrxMe.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:52:39', '2019-06-23 07:52:39'),
(63, 'Guardian', 'http://127.0.0.1:8000/AVATAR/WhyowCwwhZjHHX6Fg1f3WOSefAWbk2P3LApVNvJx.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:52:54', '2019-06-23 07:52:54'),
(64, 'Talon', 'http://127.0.0.1:8000/AVATAR/AKK85zozqQsLfuSIMzOOoiMf3MPwztje4fj2F4nD.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:53:06', '2019-06-23 07:53:06'),
(65, 'Robin', 'http://127.0.0.1:8000/AVATAR/oS8tR1M69mqUEWFCUwap9ygPzS98GFMc1UqMG0Jm.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:53:22', '2019-06-23 07:53:22'),
(66, 'Pou', 'http://127.0.0.1:8000/AVATAR/L0ytNetJp0IrTq2jQ7O7j8fhcs88fsRILRQs5qn0.png', 'ebqv56Q445FPN9269Q4', '2019-06-23 07:55:00', '2019-06-23 07:55:00');

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
('1SpH50NU66Q9h3F14NU', 'Set Fire', 'Set Fire', '2019-06-23 07:33:41', '2019-06-23 07:33:41'),
('9Ss118TZ58PXfFJ46TZ', 'English Homework', 'English Homework', '2019-06-23 07:31:22', '2019-06-23 07:31:22'),
('CTJS65w766eENY939w7', 'Tareas de la iglesia', 'Tareas de la iglesia', '2019-06-23 09:44:26', '2019-06-23 09:44:26'),
('ebqv56Q445FPN9269Q4', 'follow for instagram', 'Grupo donde puedes entrar, se publican diariamente tareas a todos los usuarios para dar follow a determinados usuarios. Ten paciencia tu perfil sera publicado también\r\n\r\nAgrega tu usuario en este excel:\r\nhttps://tiuesedusv-my.sharepoint.com/:x:/r/personal/nh16001_ti_ues_edu_sv/_layouts/15/doc2.aspx?sourcedoc=%7B7F45AEE7-EC72-4642-845C-FF70C846B850%7D&file=Libro.xlsx&action=editnew&mobileredirect=true&wdNewAndOpenCt=1561253217259&wdPreviousSession=c8cc3a0e-e847-49cc-af70-55626c1eb22b&wdOrigin=ohpAppStartPages', '2019-06-23 07:27:54', '2019-06-23 07:27:54'),
('FZx5252746jcuIs3027', 'HDP115', 'Grupo de Herramientas de productividad.', '2019-06-23 06:40:17', '2019-06-23 06:40:17'),
('mcve46ki8129lgy75ki', 'Los machos FC', 'Grupo para coordinar tareas en el equipo de futbol', '2019-06-23 07:18:40', '2019-06-23 07:18:40'),
('mNaY79Ag25m0Au179Ag', 'Grupo de música', 'Grupo de música', '2019-06-23 07:35:24', '2019-06-23 07:35:24'),
('OUGj83QU64Z2b5c31QU', 'Hogar y Limpieza de CASA BLANCA', 'grupo para mantener informado sobre las tareas del Hogar Casa blaca', '2019-06-23 06:45:00', '2019-06-23 06:45:00'),
('POng19mW70okAER52mW', 'REPS', 'REPS', '2019-06-23 07:38:58', '2019-06-23 07:38:58'),
('q1Op65BG11q8H5p79BG', 'Viva la vida', 'Viva la vida', '2019-06-23 07:41:35', '2019-06-23 07:41:35'),
('q8ep79XO34W0LDp74XO', 'Aerobicos Santa Lucia', 'Grupo para el club de aerobicos de santa lucia.', '2019-06-23 07:05:58', '2019-06-23 07:05:58'),
('rtdH95bw16pYqs987bw', 'Grupo Famila Cruz', 'Grupo Famila Cruz', '2019-06-23 07:36:40', '2019-06-23 07:36:40'),
('S2Cl51eG55gkqCG81eG', 'tareas de Sociologia 1', 'tareas de Sociologia 1', '2019-06-23 07:43:16', '2019-06-23 07:43:16'),
('U80V66sa12EdDFM63sa', 'Reportes y mas (Casa TIC)', 'Reportes y mas (Casa TIC)', '2019-06-23 07:32:38', '2019-06-23 07:32:38'),
('uxbf33tb6lSoxzeICM73kBy2', 'Tarea de Logaritmos aplicados', 'Grupo para la tarea de logaritmos aplicados', '2019-06-23 06:56:56', '2019-06-23 06:56:56'),
('Xey8593C31hjPar343C', 'MAT315', 'grupo de matematicas 3 de la UES FIA', '2019-06-23 07:16:37', '2019-06-23 07:16:37'),
('XPFN303Z58kEHJh303Z', 'Have Fun', 'Grupo para organizar tareas de diversión escuela La Asunción Primer grado.', '2019-06-23 07:03:24', '2019-06-23 07:03:24');

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
(1, 1, 'FZx5252746jcuIs3027', 'Administrador', '2019-06-23 06:40:17', '2019-06-23 06:40:17'),
(2, 2, 'OUGj83QU64Z2b5c31QU', 'Administrador', '2019-06-23 06:45:00', '2019-06-23 06:45:00'),
(3, 3, 'OUGj83QU64Z2b5c31QU', 'Usuario', '2019-06-23 06:54:29', '2019-06-23 06:54:29'),
(4, 3, 'uxbf33tb6lSoxzeICM73kBy2', 'Administrador', '2019-06-23 06:56:56', '2019-06-23 06:56:56'),
(5, 4, 'uxbf33tb6lSoxzeICM73kBy2', 'Usuario', '2019-06-23 07:01:41', '2019-06-23 07:01:41'),
(6, 5, 'XPFN303Z58kEHJh303Z', 'Administrador', '2019-06-23 07:03:24', '2019-06-23 07:03:24'),
(7, 6, 'q8ep79XO34W0LDp74XO', 'Administrador', '2019-06-23 07:05:58', '2019-06-23 07:05:58'),
(8, 7, 'q8ep79XO34W0LDp74XO', 'Usuario', '2019-06-23 07:08:22', '2019-06-23 07:08:22'),
(9, 8, 'q8ep79XO34W0LDp74XO', 'Usuario', '2019-06-23 07:10:40', '2019-06-23 07:10:40'),
(10, 9, 'q8ep79XO34W0LDp74XO', 'Usuario', '2019-06-23 07:12:08', '2019-06-23 07:12:08'),
(11, 10, 'q8ep79XO34W0LDp74XO', 'Usuario', '2019-06-23 07:13:05', '2019-06-23 07:13:05'),
(12, 11, 'Xey8593C31hjPar343C', 'Administrador', '2019-06-23 07:16:37', '2019-06-23 07:16:37'),
(13, 12, 'mcve46ki8129lgy75ki', 'Administrador', '2019-06-23 07:18:40', '2019-06-23 07:18:40'),
(14, 13, 'mcve46ki8129lgy75ki', 'Usuario', '2019-06-23 07:20:18', '2019-06-23 07:20:18'),
(15, 14, 'mcve46ki8129lgy75ki', 'Usuario', '2019-06-23 07:21:06', '2019-06-23 07:21:06'),
(16, 15, 'mcve46ki8129lgy75ki', 'Usuario', '2019-06-23 07:23:28', '2019-06-23 07:23:28'),
(17, 16, 'ebqv56Q445FPN9269Q4', 'Administrador', '2019-06-23 07:27:54', '2019-06-23 07:27:54'),
(18, 17, '9Ss118TZ58PXfFJ46TZ', 'Administrador', '2019-06-23 07:31:22', '2019-06-23 07:31:22'),
(19, 18, 'U80V66sa12EdDFM63sa', 'Administrador', '2019-06-23 07:32:38', '2019-06-23 07:32:38'),
(20, 19, '1SpH50NU66Q9h3F14NU', 'Administrador', '2019-06-23 07:33:41', '2019-06-23 07:33:41'),
(21, 20, 'mNaY79Ag25m0Au179Ag', 'Administrador', '2019-06-23 07:35:24', '2019-06-23 07:35:24'),
(22, 21, 'rtdH95bw16pYqs987bw', 'Administrador', '2019-06-23 07:36:40', '2019-06-23 07:36:40'),
(23, 22, 'POng19mW70okAER52mW', 'Administrador', '2019-06-23 07:38:58', '2019-06-23 07:38:58'),
(24, 23, 'q1Op65BG11q8H5p79BG', 'Administrador', '2019-06-23 07:41:35', '2019-06-23 07:41:35'),
(25, 24, 'S2Cl51eG55gkqCG81eG', 'Administrador', '2019-06-23 07:43:16', '2019-06-23 07:43:16'),
(26, 25, 'ebqv56Q445FPN9269Q4', 'Usuario', '2019-06-23 07:44:39', '2019-06-23 07:44:39'),
(27, 7, 'ebqv56Q445FPN9269Q4', 'Usuario', '2019-06-23 08:14:28', '2019-06-23 08:14:28'),
(29, 21, 'ebqv56Q445FPN9269Q4', 'Usuario', '2019-06-23 09:07:55', '2019-06-23 09:07:55'),
(30, 1, 'ebqv56Q445FPN9269Q4', 'Usuario', '2019-06-23 09:18:41', '2019-06-23 09:18:41'),
(31, 8, 'ebqv56Q445FPN9269Q4', 'Usuario', '2019-06-23 09:31:27', '2019-06-23 09:31:27'),
(33, 22, 'ebqv56Q445FPN9269Q4', 'Usuario', '2019-06-23 09:43:15', '2019-06-23 09:43:15'),
(34, 26, 'CTJS65w766eENY939w7', 'Administrador', '2019-06-23 09:44:27', '2019-06-23 09:44:27'),
(35, 26, 'ebqv56Q445FPN9269Q4', 'Usuario', '2019-06-23 09:45:38', '2019-06-23 09:45:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `invitacion`
--

CREATE TABLE `invitacion` (
  `id_invitacion` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `creador` int(11) DEFAULT NULL,
  `grupo_id` varchar(200) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `invitacion`
--

INSERT INTO `invitacion` (`id_invitacion`, `user_id`, `creador`, `grupo_id`, `estado`, `created_at`, `updated_at`) VALUES
(1, 14, NULL, 'FZx5252746jcuIs3027', 'asking', '2019-06-23 01:22:07', '2019-06-23 01:22:07'),
(2, 1, 16, 'ebqv56Q445FPN9269Q4', 'aceptada', '2019-06-23 01:29:45', '2019-06-23 03:18:41'),
(3, 7, 16, 'ebqv56Q445FPN9269Q4', 'aceptada', '2019-06-23 01:29:57', '2019-06-23 02:18:07'),
(4, 12, 16, 'ebqv56Q445FPN9269Q4', 'pendiente', '2019-06-23 01:30:01', '2019-06-23 01:30:01'),
(5, 3, 16, 'ebqv56Q445FPN9269Q4', 'pendiente', '2019-06-23 01:30:05', '2019-06-23 01:30:05'),
(6, 21, NULL, 'ebqv56Q445FPN9269Q4', 'aceptadaAdmin', '2019-06-23 01:37:09', '2019-06-23 03:07:54'),
(7, 19, 21, 'rtdH95bw16pYqs987bw', 'pendiente', '2019-06-23 01:37:31', '2019-06-23 01:37:31'),
(8, 1, 5, 'XPFN303Z58kEHJh303Z', 'pendiente', '2019-06-23 02:19:05', '2019-06-23 02:19:05'),
(9, 1, 23, 'q1Op65BG11q8H5p79BG', 'pendiente', '2019-06-23 02:19:27', '2019-06-23 02:19:27'),
(10, 13, 16, 'ebqv56Q445FPN9269Q4', 'pendiente', '2019-06-23 02:20:06', '2019-06-23 02:20:06'),
(11, 14, NULL, 'ebqv56Q445FPN9269Q4', 'asking', '2019-06-23 02:20:34', '2019-06-23 02:20:34'),
(12, 4, NULL, 'ebqv56Q445FPN9269Q4', 'asking', '2019-06-23 02:20:58', '2019-06-23 02:20:58'),
(13, 2, NULL, 'ebqv56Q445FPN9269Q4', 'asking', '2019-06-23 02:21:29', '2019-06-23 02:21:29'),
(14, 2, NULL, 'FZx5252746jcuIs3027', 'asking', '2019-06-23 02:21:39', '2019-06-23 02:21:39'),
(15, 10, 16, 'ebqv56Q445FPN9269Q4', 'pendiente', '2019-06-23 03:09:07', '2019-06-23 03:09:07'),
(16, 8, NULL, 'ebqv56Q445FPN9269Q4', 'aceptadaAdmin', '2019-06-23 03:29:44', '2019-06-23 03:31:27'),
(17, 25, 16, 'ebqv56Q445FPN9269Q4', 'aceptada', '2019-06-23 03:33:03', '2019-06-23 03:34:14'),
(18, 22, 16, 'ebqv56Q445FPN9269Q4', 'aceptada', '2019-06-23 03:39:18', '2019-06-23 03:43:15'),
(19, 26, NULL, 'ebqv56Q445FPN9269Q4', 'aceptadaAdmin', '2019-06-23 03:44:39', '2019-06-23 03:45:38');

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
(1, 'Noty-HsO69-whD8jV301-25893pY8HrTew-4305F7Q', 'NOVAN MELTIN HA PEDIDO UNIRSE A TU GRUPO HDP115', 'Hola, El usuario Novan Meltin ha pedido unirse a tu grupo HDP115 puedes recharzar o aceptar la petición del usuario', 14, 'FZx5252746jcuIs3027', NULL, 'asking', '2019-06-23 01:22:07', '2019-06-23 01:22:07'),
(2, 'Noty-QGp58-l6L4Ne394-72080KOvgixBC-7221rU0', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacionPositiva', '2019-06-23 01:29:45', '2019-06-23 03:18:42'),
(3, 'Noty-mBC40-VzlyIT338-47841PGB5eDVH-1085wuM', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacionPositiva', '2019-06-23 01:29:57', '2019-06-23 02:18:07'),
(4, 'Noty-yF431-wD2Jml197-11531UNIOHuSw-3637a3T', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacion', '2019-06-23 01:30:01', '2019-06-23 01:30:01'),
(5, 'Noty-d1F29-bqkvWu456-37309NRo5sfLu-3225uVq', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacion', '2019-06-23 01:30:05', '2019-06-23 01:30:05'),
(6, 'Noty-epC19-hAQ3f3814-14405TZUeqsOn-5003f7k', 'ARIANA MARIE HA PEDIDO UNIRSE A TU GRUPO follow for instagram', 'Hola, El usuario Ariana Marie ha pedido unirse a tu grupo follow for instagram puedes recharzar o aceptar la petición del usuario', 21, 'ebqv56Q445FPN9269Q4', NULL, 'askingPositiva', '2019-06-23 01:37:09', '2019-06-23 03:07:55'),
(7, 'Noty-JDU63-2fuiZF108-4568894wHMoN8-80815ao', 'Se te ha enviado una invitación nueva', 'Ariana Marie te ha enviado una invitación para que te unas a su grupo.', 21, 'rtdH95bw16pYqs987bw', NULL, 'invitacion', '2019-06-23 01:37:31', '2019-06-23 01:37:31'),
(9, 'Noty-Oyj81-xL49S7627-119278uUR10q4-2214EOg', 'MADONNA HA ACEPTADO UNA INVITACIÓN TUYA', 'Madonna Ha aceptado la invitación a tu grupo: follow for instagram , ahora ya pertenece a tu grupo dale la bienvenida', 7, 'ebqv56Q445FPN9269Q4', NULL, 'aceptacion', '2019-06-23 02:18:07', '2019-06-23 02:18:07'),
(10, 'Noty-3E286-aPpZ4s828-58648mkgcRrxl-7914sFR', 'Se te ha enviado una invitación nueva', 'Johana Gabriela Perez te ha enviado una invitación para que te unas a su grupo.', 5, 'XPFN303Z58kEHJh303Z', NULL, 'invitacion', '2019-06-23 02:19:05', '2019-06-23 02:19:05'),
(11, 'Noty-sMH72-U50I5S900-24488WmdQNHnE-769787S', 'Se te ha enviado una invitación nueva', 'Briff Squeeze te ha enviado una invitación para que te unas a su grupo.', 23, 'q1Op65BG11q8H5p79BG', NULL, 'invitacion', '2019-06-23 02:19:27', '2019-06-23 02:19:27'),
(12, 'Noty-SAL41-gi9oNu843-18979znQR3PiV-84099Ln', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacion', '2019-06-23 02:20:07', '2019-06-23 02:20:07'),
(13, 'Noty-pEl11-d04yBK965-81311ir4QjmUH-425625F', 'NOVAN MELTIN HA PEDIDO UNIRSE A TU GRUPO follow for instagram', 'Hola, El usuario Novan Meltin ha pedido unirse a tu grupo follow for instagram puedes recharzar o aceptar la petición del usuario', 14, 'ebqv56Q445FPN9269Q4', NULL, 'asking', '2019-06-23 02:20:34', '2019-06-23 02:20:34'),
(14, 'Noty-NIP17-PhGE3R784-194790DMu9oSZ-5185ZPX', 'DIANA CAROLINA GARCIA HA PEDIDO UNIRSE A TU GRUPO follow for instagram', 'Hola, El usuario Diana Carolina Garcia ha pedido unirse a tu grupo follow for instagram puedes recharzar o aceptar la petición del usuario', 4, 'ebqv56Q445FPN9269Q4', NULL, 'asking', '2019-06-23 02:20:58', '2019-06-23 02:20:58'),
(15, 'Noty-cDJ87-C74EcZ189-84301XHzkFUjJ-4499HMp', 'KARLA GARAY HA PEDIDO UNIRSE A TU GRUPO follow for instagram', 'Hola, El usuario Karla Garay ha pedido unirse a tu grupo follow for instagram puedes recharzar o aceptar la petición del usuario', 2, 'ebqv56Q445FPN9269Q4', NULL, 'asking', '2019-06-23 02:21:29', '2019-06-23 02:21:29'),
(16, 'Noty-KvL88-ADg34P441-55393A1QxhdN9-2929F8P', 'KARLA GARAY HA PEDIDO UNIRSE A TU GRUPO HDP115', 'Hola, El usuario Karla Garay ha pedido unirse a tu grupo HDP115 puedes recharzar o aceptar la petición del usuario', 2, 'FZx5252746jcuIs3027', NULL, 'asking', '2019-06-23 02:21:39', '2019-06-23 02:21:39'),
(17, 'Noty-KWz10-JPMnHW657-35292rZW5XxA9-1582iwh', 'MARFE FOLLOW HA ACEPTADO TU SOLICITUD', 'Marfe Follow acepto tu solicitud a su grupo: follow for instagram', 16, 'ebqv56Q445FPN9269Q4', NULL, 'aceptacionUser', '2019-06-23 03:07:55', '2019-06-23 03:07:55'),
(18, 'Noty-ZO613-k9wAWU149-46334R96XojgM-7149TG2', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacion', '2019-06-23 03:09:07', '2019-06-23 03:09:07'),
(19, 'Noty-Ds669-uLoFGD808-35318agts2qkf-132683N', 'FRANCISCO NAVAS HA ACEPTADO UNA INVITACIÓN TUYA', 'Francisco Navas Ha aceptado la invitación a tu grupo: follow for instagram , ahora ya pertenece a tu grupo dale la bienvenida', 1, 'ebqv56Q445FPN9269Q4', NULL, 'aceptacion', '2019-06-23 03:18:42', '2019-06-23 03:18:42'),
(20, 'Noty-5EG31-tqeZXp671-42178a94vgJnp-1701JwZ', 'BONNIE THILLER HA PEDIDO UNIRSE A TU GRUPO follow for instagram', 'Hola, El usuario Bonnie Thiller ha pedido unirse a tu grupo follow for instagram puedes recharzar o aceptar la petición del usuario', 8, 'ebqv56Q445FPN9269Q4', NULL, 'askingPositiva', '2019-06-23 03:29:44', '2019-06-23 03:31:27'),
(21, 'Noty-VnC90-iPDZ1E108-92870ZsKOlcr8-9303kg8', 'MARFE FOLLOW HA ACEPTADO TU SOLICITUD', 'Marfe Follow acepto tu solicitud a su grupo: follow for instagram', 16, 'ebqv56Q445FPN9269Q4', NULL, 'aceptacionUser', '2019-06-23 03:31:27', '2019-06-23 03:31:27'),
(22, 'Noty-9nI83-VDTxVF197-90045h5JRsS4L-8523pXr', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacionPositiva', '2019-06-23 03:33:04', '2019-06-23 03:34:14'),
(23, 'Noty-AYs15-9Po1M4897-947967nZTUGiq-2945AZ3', 'JOSIAH HA ACEPTADO UNA INVITACIÓN TUYA', 'Josiah Ha aceptado la invitación a tu grupo: follow for instagram , ahora ya pertenece a tu grupo dale la bienvenida', 25, 'ebqv56Q445FPN9269Q4', NULL, 'aceptacion', '2019-06-23 03:34:14', '2019-06-23 03:34:14'),
(24, 'Noty-aOg43-ajfv6a147-83615nYCwWNug-8393cKx', 'Se te ha enviado una invitación nueva', 'Marfe Follow te ha enviado una invitación para que te unas a su grupo.', 16, 'ebqv56Q445FPN9269Q4', NULL, 'invitacionPositiva', '2019-06-23 03:39:18', '2019-06-23 03:43:15'),
(25, 'Noty-2Ml49-0Q9cxC500-86041CJFRTaxO-4826sjp', 'ESTELLA CORDERO HA ACEPTADO UNA INVITACIÓN TUYA', 'Estella Cordero Ha aceptado la invitación a tu grupo: follow for instagram , ahora ya pertenece a tu grupo dale la bienvenida', 22, 'ebqv56Q445FPN9269Q4', NULL, 'aceptacion', '2019-06-23 03:43:15', '2019-06-23 03:43:15'),
(26, 'Noty-a9O71-QhFwK7220-69940uL3QEHcj-5909JGN', 'CARLOS ALDAIR HA PEDIDO UNIRSE A TU GRUPO follow for instagram', 'Hola, El usuario Carlos Aldair ha pedido unirse a tu grupo follow for instagram puedes recharzar o aceptar la petición del usuario', 26, 'ebqv56Q445FPN9269Q4', NULL, 'askingPositiva', '2019-06-23 03:44:39', '2019-06-23 03:45:38'),
(27, 'Noty-zKH92-1yFHar568-146771odMYP9L-5573CBR', 'MARFE FOLLOW HA ACEPTADO TU SOLICITUD', 'Marfe Follow acepto tu solicitud a su grupo: follow for instagram', 16, 'ebqv56Q445FPN9269Q4', NULL, 'aceptacionUser', '2019-06-23 03:45:38', '2019-06-23 03:45:38'),
(28, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 'MARFE FOLLOW TE ASIGNO UNA NUEVA TAREA', 'Seguir al usuario @mandy34 en instagram', 16, 'ebqv56Q445FPN9269Q4', 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 'tarea', '2019-06-23 04:42:56', '2019-06-23 04:42:56');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `notificacion_user`
--

CREATE TABLE `notificacion_user` (
  `id` int(11) NOT NULL,
  `notificacion_id` varchar(200) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `estado` varchar(100) DEFAULT NULL,
  `grupo_id` varchar(100) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `notificacion_user`
--

INSERT INTO `notificacion_user` (`id`, `notificacion_id`, `user_id`, `estado`, `grupo_id`, `created_at`, `updated_at`) VALUES
(1, 'Noty-HsO69-whD8jV301-25893pY8HrTew-4305F7Q', 1, 'SIN LEER', 'global', '2019-06-23 01:22:07', '2019-06-23 01:22:07'),
(2, 'Noty-QGp58-l6L4Ne394-72080KOvgixBC-7221rU0', 1, 'LEIDA', 'global', '2019-06-23 01:29:45', '2019-06-23 03:22:03'),
(3, 'Noty-mBC40-VzlyIT338-47841PGB5eDVH-1085wuM', 7, 'LEIDA', 'global', '2019-06-23 01:29:57', '2019-06-23 02:18:27'),
(4, 'Noty-yF431-wD2Jml197-11531UNIOHuSw-3637a3T', 12, 'SIN LEER', 'global', '2019-06-23 01:30:01', '2019-06-23 01:30:01'),
(5, 'Noty-d1F29-bqkvWu456-37309NRo5sfLu-3225uVq', 3, 'SIN LEER', 'global', '2019-06-23 01:30:05', '2019-06-23 01:30:05'),
(6, 'Noty-epC19-hAQ3f3814-14405TZUeqsOn-5003f7k', 16, 'LEIDA', 'global', '2019-06-23 01:37:09', '2019-06-23 03:08:40'),
(7, 'Noty-JDU63-2fuiZF108-4568894wHMoN8-80815ao', 19, 'SIN LEER', 'global', '2019-06-23 01:37:31', '2019-06-23 01:37:31'),
(9, 'Noty-Oyj81-xL49S7627-119278uUR10q4-2214EOg', 16, 'SIN LEER', 'global', '2019-06-23 02:18:07', '2019-06-23 02:18:07'),
(10, 'Noty-3E286-aPpZ4s828-58648mkgcRrxl-7914sFR', 1, 'SIN LEER', 'global', '2019-06-23 02:19:05', '2019-06-23 02:19:05'),
(11, 'Noty-sMH72-U50I5S900-24488WmdQNHnE-769787S', 1, 'SIN LEER', 'global', '2019-06-23 02:19:28', '2019-06-23 02:19:28'),
(12, 'Noty-SAL41-gi9oNu843-18979znQR3PiV-84099Ln', 13, 'SIN LEER', 'global', '2019-06-23 02:20:07', '2019-06-23 02:20:07'),
(13, 'Noty-pEl11-d04yBK965-81311ir4QjmUH-425625F', 16, 'SIN LEER', 'global', '2019-06-23 02:20:34', '2019-06-23 02:20:34'),
(14, 'Noty-NIP17-PhGE3R784-194790DMu9oSZ-5185ZPX', 16, 'SIN LEER', 'global', '2019-06-23 02:20:58', '2019-06-23 02:20:58'),
(15, 'Noty-cDJ87-C74EcZ189-84301XHzkFUjJ-4499HMp', 16, 'SIN LEER', 'global', '2019-06-23 02:21:29', '2019-06-23 02:21:29'),
(16, 'Noty-KvL88-ADg34P441-55393A1QxhdN9-2929F8P', 1, 'SIN LEER', 'global', '2019-06-23 02:21:39', '2019-06-23 02:21:39'),
(17, 'Noty-KWz10-JPMnHW657-35292rZW5XxA9-1582iwh', 21, 'SIN LEER', 'global', '2019-06-23 03:07:55', '2019-06-23 03:07:55'),
(18, 'Noty-ZO613-k9wAWU149-46334R96XojgM-7149TG2', 10, 'SIN LEER', 'global', '2019-06-23 03:09:07', '2019-06-23 03:09:07'),
(19, 'Noty-Ds669-uLoFGD808-35318agts2qkf-132683N', 16, 'SIN LEER', 'global', '2019-06-23 03:18:42', '2019-06-23 03:18:42'),
(20, 'Noty-5EG31-tqeZXp671-42178a94vgJnp-1701JwZ', 16, 'LEIDA', 'global', '2019-06-23 03:29:44', '2019-06-23 03:31:43'),
(21, 'Noty-VnC90-iPDZ1E108-92870ZsKOlcr8-9303kg8', 8, 'LEIDA', 'global', '2019-06-23 03:31:27', '2019-06-23 03:31:53'),
(22, 'Noty-9nI83-VDTxVF197-90045h5JRsS4L-8523pXr', 25, 'LEIDA', 'global', '2019-06-23 03:33:04', '2019-06-23 03:37:41'),
(24, 'Noty-aOg43-ajfv6a147-83615nYCwWNug-8393cKx', 22, 'LEIDA', 'global', '2019-06-23 03:39:18', '2019-06-23 03:43:15'),
(25, 'Noty-2Ml49-0Q9cxC500-86041CJFRTaxO-4826sjp', 16, 'SIN LEER', 'global', '2019-06-23 03:43:15', '2019-06-23 03:43:15'),
(26, 'Noty-a9O71-QhFwK7220-69940uL3QEHcj-5909JGN', 16, 'LEIDA', 'global', '2019-06-23 03:44:39', '2019-06-23 03:46:00'),
(27, 'Noty-zKH92-1yFHar568-146771odMYP9L-5573CBR', 26, 'SIN LEER', 'global', '2019-06-23 03:45:38', '2019-06-23 03:45:38'),
(28, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 25, 'SIN LEER', 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(29, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 7, 'SIN LEER', 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(30, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 21, 'SIN LEER', 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(31, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 1, 'SIN LEER', 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(32, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 8, 'SIN LEER', 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(33, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 22, 'SIN LEER', 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(34, 'Noty-bec41-D6uF8v492-47137SNwUx6Pd-5614C8w', 26, 'SIN LEER', 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56');

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
(1, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 'Seguir al usuario @mandy34', '<h2><strong>Atenci&oacute;n:</strong></h2>\r\n\r\n<p>Seguir al usuario @mandy34 en instagram</p>', 'Inicio', '2019-06-26', 16, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:55', '2019-06-23 04:42:55');

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
(1, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 25, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(2, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 7, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(3, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 21, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(4, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 1, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(5, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 8, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(6, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 22, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56'),
(7, 'Task-Zor21-ghfV0l494-857008FTvUsYQ-2194Ypr', 26, 'ebqv56Q445FPN9269Q4', '2019-06-23 04:42:56', '2019-06-23 04:42:56');

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
(1, 'Francisco Navas', 'navasfran98@gmail.com', '$2y$10$s5FunhEyucxqOLyAzKH9y.NGqOPjuJVsJwkvo/dOUZir3BZYVUU9q', 'FZx5252746jcuIs3027', 'http://127.0.0.1:8000/AVATAR/akU6L9LGfxcjJUwCNQ5GbgwZbWzqYJZQinadmVlc.png', 'ea8j3qVXxEdeq0uq64egCzPZD8nYu8wuVuj7jvoKdwdOnEXJvEzky0KCKinY', '2019-06-23 06:40:17', '2019-06-23 06:41:27'),
(2, 'Karla Garay', 'garay001@htomail.com', '$2y$10$ernMmxXhPrrZ1hFZfwBigOPnBjlMPGNToCp74MlcZlOxJtLsGemHG', 'OUGj83QU64Z2b5c31QU', 'http://127.0.0.1:8000/AVATAR/Nsk9Hpy5uBlTz0IaQD5XvHxZJ9V08x1Xv1XOFvZy.png', 'sqiYvUxY98b3WbH8vs15r24zf7SeMs7ENXzepuFULKWa2gX2lg47E7fixJE6', '2019-06-23 06:45:00', '2019-06-23 06:47:35'),
(3, 'Carlos Canela', 'canela323@gmail.com', '$2y$10$NI4LV6QSMT7fxt.7NAVNDuctMpEFwkpXOKgdrWjpe7/IJQ03DhPwm', 'OUGj83QU64Z2b5c31QU', 'http://127.0.0.1:8000/AVATAR/fgMRoLB1mGHP4m6AyqcZvo8mqtTBOBofi55TaURA.png', '0UlXOlwhshQajTvXFLUaLeDFyrHbuNAeT4InDlwf0FSTvKrE8Jb2nkp6LkOV', '2019-06-23 06:54:29', '2019-06-23 06:55:41'),
(4, 'Diana Carolina Garcia', 'dian32343@gmail.com', '$2y$10$j4Oj9e62snnGJjFhQKmm1.NqKpLDv2n9CfmOz7kzeOQIfl.9I.pWu', 'uxbf33tb6lSoxzeICM73kBy2', 'https://i.ibb.co/P5p1trd/contacts2.png', 'ifcPILg1bFtOywKy3LTZQQw5WIeD4bj25adn5df0L71xlOanCSTAUeCCpwUd', '2019-06-23 07:01:41', '2019-06-23 07:01:41'),
(5, 'Johana Gabriela Perez', 'perezgabi43@gmail.com', '$2y$10$sZNpeSIxgt.1TF330owskOtxcYXzlaiKFS/n3NQ8zNUVIMdAgKkE.', 'XPFN303Z58kEHJh303Z', 'http://127.0.0.1:8000/AVATAR/qvwGQ1rXHt1LymcdgxzAnA7BATGNzHe8J4tFT2li.png', 'uDcsewRvnjFb5WsR1AbedwDQPOstVoktXe8MZsD88GuUyjFpeCtVSa5cf3Sx', '2019-06-23 07:03:24', '2019-06-23 07:04:09'),
(6, 'Teresa Gandilan', 'teres3234@gmail.com', '$2y$10$lC0gYpjzLSXfzrXtiLy1MesfMkHP4jif6mb4TYohy6LhVssdcY8c.', 'q8ep79XO34W0LDp74XO', 'http://127.0.0.1:8000/AVATAR/WHk0LFwjvooi8DgtBuzjdhuMBYGOqAmKYHdDxy2e.png', '8au2kBGoOJ9n7N0NoRP41EsewZJeunQ6jcfX89MIb26TiGiHDV3n92mU9FzV', '2019-06-23 07:05:58', '2019-06-23 07:07:21'),
(7, 'Madonna', 'marfe33@gmail.com', '$2y$10$xQggWRwordsw9dW90tq0WeHiwspf4NW2WFqL.daZOfef2OEN.Jq0a', 'q8ep79XO34W0LDp74XO', 'http://127.0.0.1:8000/AVATAR/UPOZsu7AnSzBX9pQux5AxPUPm30R3eggtnAxP7yU.png', 'pD1NNuOUWloWtTgF4R1BJcWBbDfOY3KKss2To2M980i3ja8ndwB58qbus3Nd', '2019-06-23 07:08:22', '2019-06-23 07:08:49'),
(8, 'Bonnie Thiller', 'Bonnie34@gmail.com', '$2y$10$71wvYD0hsIL.7ojhTXbaeuH3/KGecZ1h1oDRhN/J.B4KYU9iVkes6', 'ebqv56Q445FPN9269Q4', 'http://127.0.0.1:8000/AVATAR/WHk0LFwjvooi8DgtBuzjdhuMBYGOqAmKYHdDxy2e.png', 'aeAn603SasncBAWvqrVSsckjj4Fi6FigotcAgnFz6O4BlKHMCw6YnceBuLMl', '2019-06-23 07:10:40', '2019-06-23 09:32:05'),
(9, 'Wilber Tarzan', 'tarzan3454@gmail.com', '$2y$10$oBtEDAA6w/8E9YYAjrFReetymurSfBcnn9RR21kCwaUfyPXp71uli', 'q8ep79XO34W0LDp74XO', 'http://127.0.0.1:8000/AVATAR/9f1rocC4mDJyANoYDQtgCTmaYDqkPLf8GdCbqsmc.png', 'IaRW90ZXdqoFJxDtG0cnqEUHsvH7PdtMAPRhIRlnlGWYTTW4Ob06ItjyY6Lu', '2019-06-23 07:12:08', '2019-06-23 07:12:14'),
(10, 'Vilma Palma', 'vilmah55q@gmail.com', '$2y$10$oqLyj9yC.w1CAZmV7zP9huPM5jt84e8YrvGcsN1BbDDigiMSjPiRe', 'q8ep79XO34W0LDp74XO', 'http://127.0.0.1:8000/AVATAR/RdyGCGqkHufxI8ajSGvWxX9Y9ynVx0lXBV6Ml02s.png', '5GMHHNtjIduUnMalYknv1XZQVYkioRrZvhMUblY7agKdgZoDmaQjU9KhsMCr', '2019-06-23 07:13:05', '2019-06-23 07:13:27'),
(11, 'Pink Mecano', 'pin4445@gmail.com', '$2y$10$v1dYO/m5wrr8JVHvy8yl6eTmuyU7hbp0/PJLU0SnVnpWfYduLuM2i', 'Xey8593C31hjPar343C', 'http://127.0.0.1:8000/AVATAR/LbAAAetFZpGxNGqvCgO7auIYXx8rj8n5pTYd7rqf.jpeg', 'c3eGwwsIEC3SaWJ5P594HHvcwE8wDp1EuRg6qebHUsQwR5kI6V4Dk44QS8WE', '2019-06-23 07:16:37', '2019-06-23 07:16:41'),
(12, 'Daniel Figueroa', 'figue54@gmail.com', '$2y$10$x3VkNDp4eATGiJjwCyOGG.SflxbH7pCOJ2D.l/ZeXA7728RXKApZS', 'mcve46ki8129lgy75ki', 'http://127.0.0.1:8000/AVATAR/vaLkP8SBD2u22eYgsxlBCEiRXyApjVZtjIsl226g.png', 'Wh1FFkHbb77jQqfcOB2k0vNDy3D7NJoakbtiNykwc1jbxgAiUAmjI5SjDs59', '2019-06-23 07:18:40', '2019-06-23 07:19:39'),
(13, 'Milito Franco', 'franco33se@gmail.com', '$2y$10$FtvNeO.skz.XAqQzaXmxsuRMa3YyDVrtWWWcP1ZzoBVxFgPza6dkW', 'mcve46ki8129lgy75ki', 'http://127.0.0.1:8000/AVATAR/WWmhwAbD7x8ynuFvGru2iPMn9zH4bXR1d2i4wChO.jpeg', 'VH9rLJ45xz1rELUrLO06qHJqP93sqd8a4g6YKmRM7wer2PMvgjX6SSZ6kuot', '2019-06-23 07:20:18', '2019-06-23 07:20:24'),
(14, 'Novan Meltin', 'novan344@gmail.com', '$2y$10$0dXrA/NE5hr5uiGSCd37iuQyMhjNPxqcqLjZGxbdlYxtMqo5eMT9q', 'mcve46ki8129lgy75ki', 'http://127.0.0.1:8000/AVATAR/Kh5PpzU2FTysIYK5X4myZKhf6I8gtqIcoLVl0Tlu.png', 'camE2dbZbYACILqDUgiqkLHGrn4Dv9gFVVkVp2XIkZ8WQGX5ISD9nnj0A46I', '2019-06-23 07:21:06', '2019-06-23 07:21:22'),
(15, 'Hannah Near', 'near56@gmail.com', '$2y$10$HMyRm2rdujAqsnlltlvehu8tPGImMngysMxGeZdr9DfHjtcH0dyKu', 'mcve46ki8129lgy75ki', 'http://127.0.0.1:8000/AVATAR/LbAAAetFZpGxNGqvCgO7auIYXx8rj8n5pTYd7rqf.jpeg', 'zngUsTig03Zigi39JoiAbf7P3UbakwKpzqtcqBmESWxuthSD0P2zePwN4Dxg', '2019-06-23 07:23:28', '2019-06-23 07:23:35'),
(16, 'Marfe Follow', 'follow344@gmail.com', '$2y$10$jf4aHEV6XULDpSUaptN/CesC0jaoqPtKB3KAimJ0eNWEfpfzPB5qS', 'ebqv56Q445FPN9269Q4', 'http://127.0.0.1:8000/AVATAR/CkaJwCVZ6yQaRwXO3p2KeVqb8lhq5EoR7Y3due3n.png', 'ENfr0GUWHj3TBATmpjHKxGNK8KSu8r69Mf7u3osuBrFeeP0ktIsWuFQn6HzJ', '2019-06-23 07:27:54', '2019-06-23 07:29:13'),
(17, 'kristen olivier', 'kristel34@gmail.com', '$2y$10$tI/OfzslGlzkFZJ2HpvTvubrvuhpONL3kG1kuZ/EIJO3TPbbCBY9S', '9Ss118TZ58PXfFJ46TZ', 'http://127.0.0.1:8000/AVATAR/3Va3MQQiFCEkK0tqWEddBBMF8O5wZojkK6RKgEix.png', '6VoGtOMOgEy9fTZkfmIlhiD1fuAJF9xVRBfM8kkNWdFXSfWBFDUjIRddiQvR', '2019-06-23 07:31:22', '2019-06-23 07:31:39'),
(18, 'Paul', 'paul@gmail.com', '$2y$10$NpgXyFLGrdNoGeZQlh.8c.orBWsoL0Z4ArrwsynSlfjqY26IfTsR2', 'U80V66sa12EdDFM63sa', 'https://i.ibb.co/P5p1trd/contacts2.png', 'bJfhddrlixkxROO7E7fUuegLoS8udn4kaknUHxvyPgpfOX8OZzUjcQ7nfBFD', '2019-06-23 07:32:38', '2019-06-23 07:32:38'),
(19, 'Selena Roberts', 'selenita23335@mail.com', '$2y$10$HBBZNG3LjXO68GSaK36z9evV3V.09aqINSh7R1UGygU/EqNjiDlMK', '1SpH50NU66Q9h3F14NU', 'http://127.0.0.1:8000/AVATAR/LVwlyAktujauzAze6W5u0K0WG5nCHPzjtaF7q8L9.png', 'L6B8fHN5Xnr5tSSJ0cwh15hcWunf99sLY6h6UyhbKzV4dmPgVXL278NSVDkk', '2019-06-23 07:33:41', '2019-06-23 07:34:02'),
(20, 'Sylvia Rodriguez', 'sylvin@gmail.com', '$2y$10$K.lHt5pOGK32rfZitZW3iOoq3mG3pmUTscOllq0TanY2O1vaK.GPC', 'mNaY79Ag25m0Au179Ag', 'http://127.0.0.1:8000/AVATAR/ssIzEU4sM6DdeF0sORgAha2PrIuHmVaGzerQg0zR.png', 'RAnTKK2VGnR7fevPROh7LmXez5KsEouwig5SQipodx72zB1kOYLKoXADgMdb', '2019-06-23 07:35:24', '2019-06-23 07:35:58'),
(21, 'Ariana Marie', 'marie3@gmail.com', '$2y$10$VBav/vI.LtbfLme6XpdQpu6PgdB2vAyg0O/AUEwc3Pgzjkb238foK', 'rtdH95bw16pYqs987bw', 'http://127.0.0.1:8000/AVATAR/fJgkXCmefOxdOEIM2ASmIh3xsK3kexZWK0qiuuVS.png', 'elgexDYDiP7QI9I2QJHyhschdcEveCnywXzqf7uJzf8UzbE81HqtWhUVrwh5', '2019-06-23 07:36:40', '2019-06-23 07:36:58'),
(22, 'Estella Cordero', 'cordero4@gmail.com', '$2y$10$6ICLpD9EKfTgXDd8idH7peBwItefedTOnxy5R05e.BmdRKR8iq4nW', 'POng19mW70okAER52mW', 'http://127.0.0.1:8000/AVATAR/VGqrITrW6oZIFefttEmROEZwNX5iX5yfwgpeRWOB.png', 'kwN4i2OsGPUXORePMgOrw9Rw1jUvBmafO7C2WA3KabHdseeEvLI4ETFeRKD9', '2019-06-23 07:38:58', '2019-06-23 07:39:37'),
(23, 'Briff Squeeze', 'Squeeze5@gmail.com', '$2y$10$kkrdAJkKnA6ZiNUPArmJ2u1WYV.GN5H8HEDq/VQbJWKuMBsZtLWkK', 'q1Op65BG11q8H5p79BG', 'http://127.0.0.1:8000/AVATAR/xTvLhOMU0DXq8XiE9dMGF9THMTQS0VaLt6WSTpAV.png', '2nDsKdR4dfzOjukVd7qal4jrsceIQCsimNdSV8PaSbqqJ8IhaDDM8ZfZ4pIB', '2019-06-23 07:41:35', '2019-06-23 07:42:04'),
(24, 'Skinny Heater', 'dkinnyfff453@gmail.com', '$2y$10$shpUN0gMTxZHCkgaWOiaauW3EVonuA6fIHyPsW8c1Xk17k70oxxvi', 'S2Cl51eG55gkqCG81eG', 'http://127.0.0.1:8000/AVATAR/aK5ljDe9bUmHEuvtKL9IAVJxUauiGcbjZGEYuz7I.png', 'RoC2Yd5Cshza0abCeSHdkN5LNHXfTfXWMZ8Vb1qVJP5Z8kOIx9Ntxw6C1Etp', '2019-06-23 07:43:16', '2019-06-23 07:43:35'),
(25, 'Josiah', 'joshj444@gmail.com', '$2y$10$CWEF9UsFF5I/.HNuJ9TtFuIdu51kqXPgLT5HbZzKrYKLQcQVXDrZe', 'ebqv56Q445FPN9269Q4', 'http://127.0.0.1:8000/AVATAR/e4Xd9DuY3qNDZRTjshDtM06XHrhZ2aMXDUtDtNz7.png', 'JHPLK78R1ZR2PhbbHedumzL43SLlVw8bGx3Nvw7kxVjNL22B9ae3CPRwpoK9', '2019-06-23 07:44:39', '2019-06-23 09:35:21'),
(26, 'Carlos Aldair', 'aldair45@gmail.com', '$2y$10$SzX1UbI61CtNzsg1Qh/G4u/7Bw6SQ2UqsCkQPS64JniyjsK4WCzOu', 'CTJS65w766eENY939w7', 'http://127.0.0.1:8000/AVATAR/LbAAAetFZpGxNGqvCgO7auIYXx8rj8n5pTYd7rqf.jpeg', NULL, '2019-06-23 09:44:27', '2019-06-23 09:45:20');

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
-- Indices de la tabla `invitacion`
--
ALTER TABLE `invitacion`
  ADD PRIMARY KEY (`id_invitacion`);

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
  MODIFY `id_avatar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;
--
-- AUTO_INCREMENT de la tabla `grupo_user`
--
ALTER TABLE `grupo_user`
  MODIFY `id_grupo_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT de la tabla `invitacion`
--
ALTER TABLE `invitacion`
  MODIFY `id_invitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT de la tabla `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `notificacion`
--
ALTER TABLE `notificacion`
  MODIFY `id_noty` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- AUTO_INCREMENT de la tabla `notificacion_user`
--
ALTER TABLE `notificacion_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT de la tabla `tareas`
--
ALTER TABLE `tareas`
  MODIFY `id_tarea` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT de la tabla `tareas_usuarios`
--
ALTER TABLE `tareas_usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
