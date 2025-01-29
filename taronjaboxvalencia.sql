-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost:8889
-- Tiempo de generación: 29-01-2025 a las 08:26:25
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
(15, 'aaaa', 'bbbb', '2025-01-24 17:52:11'),
(16, 'Prueba conexion', 'Frontend cnnection', '2025-01-25 10:43:04');

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
(6, 'Luis jahir', 'luis@hola.com', 'hola klkl', '2025-01-24 18:27:46');

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
(7, 'Luis', 'Fisioterapeuta', 100.00, '2025-01-24 16:06:04');

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
(5, 'dfdfdf', 'fddffd', 'fddffd', '2025-01-24 16:09:22');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `precios`
--

CREATE TABLE `precios` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `descripcion` text,
  `precio` decimal(10,2) NOT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `precios`
--

INSERT INTO `precios` (`id`, `nombre`, `descripcion`, `precio`, `fecha_creacion`) VALUES
(1, 'Elite', 'Clases ilimitadas y acceso total al box', 80.00, '2025-01-24 16:15:17'),
(3, 'dsds', 'dsdsds', 20000.00, '2025-01-24 18:26:57'),
(4, 'rwre', 'rwerew', 3000.00, '2025-01-25 13:09:46');

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
(1, 'Nuestra historia', 'Somos TaronjaBox!!!', '2025-01-20 15:36:54');

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
(1, 'admin', 'admin', '2025-01-19 00:42:27');

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
-- Indices de la tabla `nuestro_equipo`
--
ALTER TABLE `nuestro_equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `precios`
--
ALTER TABLE `precios`
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
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `fisioterapia`
--
ALTER TABLE `fisioterapia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `nuestro_equipo`
--
ALTER TABLE `nuestro_equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `precios`
--
ALTER TABLE `precios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `quienes_somos`
--
ALTER TABLE `quienes_somos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `usuarios_admin`
--
ALTER TABLE `usuarios_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
