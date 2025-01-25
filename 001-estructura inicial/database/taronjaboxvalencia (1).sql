-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 23-01-2025 a las 13:36:20
-- Versión del servidor: 5.7.44
-- Versión de PHP: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `taronjaboxvalencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'nuevo bloj', 'muchas cosas', '2025-01-20 14:34:08'),
(3, 'gggffg', 'gffggffg', '2025-01-22 00:27:51'),
(4, 'fdf', 'fdsfds', '2025-01-22 00:44:16');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mensaje` text NOT NULL,
  `fecha_envio` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `mensaje`, `fecha_envio`) VALUES
(1, 'fds', 'taronjabox@gmail.com', 'fsdfds', '2025-01-20 15:57:22'),
(2, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', 'fggggf', '2025-01-20 16:23:29'),
(3, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', '  cv dfdfffg', '2025-01-20 16:25:53'),
(4, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', '  cv dfdfffg', '2025-01-20 16:26:34'),
(5, 'Luis Jahir Rodríguez Cedeño', 'taronjabox@gmail.com', '  sasacv dfdfffg', '2025-01-20 16:26:39');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisioterapia`
--

CREATE TABLE `fisioterapia` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `costo` decimal(10,2) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `fisioterapia`
--

INSERT INTO `fisioterapia` (`id`, `nombre`, `descripcion`, `costo`, `fecha_creacion`) VALUES
(1, 'fisioterapiago', 'fodio', 50.00, '2025-01-20 15:44:51');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `galeria`
--

CREATE TABLE `galeria` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `fecha_subida` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `galeria`
--

INSERT INTO `galeria` (`id`, `titulo`, `imagen`, `fecha_subida`) VALUES
(4, 'esto es una prueba sd', '1280369.png', '2025-01-18 19:43:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `nuestro_equipo`
--

CREATE TABLE `nuestro_equipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `puesto` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `nuestro_equipo`
--

INSERT INTO `nuestro_equipo` (`id`, `nombre`, `puesto`, `descripcion`, `fecha_creacion`) VALUES
(1, 'Juan Pérez', 'Entrenador Principal', 'Experto en entrenamientos funcionales con más de 10 años de experiencia en Crossfit.', '2025-01-20 15:39:55'),
(2, 'Ana López', 'Nutricionista', 'Especialista en nutrición deportiva, ayudando a los atletas a optimizar su rendimiento mediante una dieta adecuada.', '2025-01-20 15:39:55'),
(3, 'Carlos Sánchez', 'Entrenador de Cardio', 'Entrenador enfocado en mejorar la resistencia cardiovascular y la capacidad aeróbica.', '2025-01-20 15:39:55'),
(4, 'María García', 'Coordinadora de Clases', 'Responsable de la programación de las clases y del contacto con los miembros del gimnasio.', '2025-01-20 15:39:55');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes_somos`
--

CREATE TABLE `quienes_somos` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `quienes_somos`
--

INSERT INTO `quienes_somos` (`id`, `title`, `content`, `created_at`) VALUES
(1, 'quienes somos', 'somos crossfitvalencia', '2025-01-20 15:36:54');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_admin`
--

CREATE TABLE `usuarios_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `usuarios_admin`
--

INSERT INTO `usuarios_admin` (`id`, `username`, `password`, `created_at`) VALUES
(1, 'admin', 'admin', '2025-01-19 00:42:27'),
(2, 'nuevo_usuario', 'contraseña123', '2025-01-19 01:00:52');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `workouts`
--

CREATE TABLE `workouts` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `duration` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `workouts`
--

INSERT INTO `workouts` (`id`, `name`, `description`, `duration`, `created_at`) VALUES
(1, 'Entrenamiento de Fuerza', 'Entrenamiento para mejorar la fuerza general, incluye pesas y ejercicios funcionales.', 60, '2025-01-20 15:30:48'),
(2, 'Cardio Intensivo', 'Sesión de cardio de alta intensidad para mejorar resistencia y quemar calorías.', 45, '2025-01-20 15:30:48'),
(3, 'Flexibilidad y Estiramientos', 'Rutina enfocada en mejorar la flexibilidad y prevenir lesiones.', 30, '2025-01-20 15:30:48'),
(4, 'jiujitsu', 'jiujitsu brasileño', 60, '2025-01-20 15:33:21');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fisioterapia`
--
ALTER TABLE `fisioterapia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `galeria`
--
ALTER TABLE `galeria`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `nuestro_equipo`
--
ALTER TABLE `nuestro_equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `quienes_somos`
--
ALTER TABLE `quienes_somos`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indices de la tabla `workouts`
--
ALTER TABLE `workouts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `fisioterapia`
--
ALTER TABLE `fisioterapia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `galeria`
--
ALTER TABLE `galeria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `nuestro_equipo`
--
ALTER TABLE `nuestro_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `quienes_somos`
--
ALTER TABLE `quienes_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
