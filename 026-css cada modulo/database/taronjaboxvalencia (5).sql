-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-02-2025 a las 13:51:06
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
-- Base de datos: `taronjaboxvalencia`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `admin_menu`
--

CREATE TABLE `admin_menu` (
  `id` int(11) NOT NULL,
  `titulo` varchar(100) NOT NULL,
  `enlace` varchar(255) NOT NULL,
  `orden` int(11) DEFAULT 0,
  `icono` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `admin_menu`
--

INSERT INTO `admin_menu` (`id`, `titulo`, `enlace`, `orden`, `icono`) VALUES
(1, 'Inicio', 'dashboard.php', 1, NULL),
(3, 'Contacto', 'admin/contacto/index.php', 3, NULL),
(4, 'Nuestro Equipo', 'admin/nuestro_equipo/index.php', 4, NULL),
(5, 'Precios', 'admin/precios/index.php', 5, NULL),
(6, 'Fisioterapia', 'admin/fisioterapia/index.php', 6, NULL),
(8, 'Quiénes Somos', 'admin/quienes_somos/index.php', 8, NULL),
(9, 'Cerrar Sesión', 'logout.php', 9, 'sign-out-alt');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `blog_posts`
--

CREATE TABLE `blog_posts` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `blog_posts`
--

INSERT INTO `blog_posts` (`id`, `title`, `content`, `created_at`) VALUES
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
  `fecha_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id`, `nombre`, `email`, `mensaje`, `fecha_envio`) VALUES
(6, 'Luis jahir', 'luis@hola.com', 'hola klkl', '2025-01-24 18:27:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `destacados`
--

CREATE TABLE `destacados` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL,
  `enlace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `destacados`
--

INSERT INTO `destacados` (`id`, `titulo`, `descripcion`, `imagen`, `enlace`) VALUES
(1, '¿Por qué elegirnos?', 'En Taronja Box Valencia no solo nos preocupamos por mejorar tu rendimiento físico, sino también cuidamos de tu salud y bienestar a largo plazo.\r\n\r\nEn un ambiente acogedor y familiar, nos comprometemos a guiarte hacia tus objetivos con profesionalismo y compromiso total.', 'img/workout-destacado.jpg', 'modulos/quienes-somos/quienes-somos.php');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `equipo`
--

CREATE TABLE `equipo` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `cargo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `equipo`
--

INSERT INTO `equipo` (`id`, `nombre`, `cargo`, `descripcion`, `imagen`) VALUES
(1, 'Luis Rodríguez', 'Entrenador Principal', 'Especialista en crossfit y alto rendimiento.', 'img/luis.jpg'),
(2, 'María Pérez', 'Nutricionista', 'Experta en dietas deportivas y salud nutricional.', 'img/maria.jpg'),
(3, 'Carlos Gómez', 'Preparador Físico', 'Encargado de diseñar planes de entrenamiento personalizados.', 'img/carlos.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fisioterapia`
--

CREATE TABLE `fisioterapia` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fisioterapia`
--

INSERT INTO `fisioterapia` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Tratamientos Personalizados', 'Ofrecemos sesiones de fisioterapia personalizadas para mejorar tu recuperación.', 'img/tratamientos.jpg'),
(2, 'Rehabilitación Deportiva', 'Especialistas en recuperación de lesiones deportivas.', 'img/rehabilitacion.jpg'),
(3, 'Masajes Terapéuticos', 'Relaja tus músculos y mejora tu bienestar con nuestros masajes terapéuticos.', 'img/masajes.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `header`
--

CREATE TABLE `header` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `enlace` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `header`
--

INSERT INTO `header` (`id`, `nombre`, `enlace`) VALUES
(1, 'Inicio', 'index.php'),
(2, 'Quienes somos', 'modulos/quienes-somos/quienes-somos.php'),
(3, 'Nuestro equipo', 'modulos/nuestro-equipo/nuestro-equipo.php'),
(4, 'Fisioterapia', 'modulos/fisioterapia/fisioterapia.php'),
(5, 'Entrenamientos', 'modulos/workouts/workouts.php'),
(6, 'Horario', 'modulos/horarios/horarios.php'),
(7, 'Tarifas', 'modulos/planes-suscripcion/planes-suscripcion.php'),
(8, 'Zona Socios', 'https://wodbuster.com/account/login.aspx?cb=taronja&ReturnUrl=https%3a%2f%2ftaronja.wodbuster.com%2fuser%2fdefault.aspx'),
(9, 'Contacto', 'modulos/contacto/contacto.php'),
(10, 'Localización', 'https://maps.app.goo.gl/zr4VLaquZoFY7sJA6');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `heroes`
--

CREATE TABLE `heroes` (
  `id` int(11) NOT NULL,
  `nombre_seccion` varchar(255) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `subtitulo` text DEFAULT NULL,
  `imagen_fondo` varchar(255) NOT NULL,
  `texto_boton` varchar(50) DEFAULT NULL,
  `enlace_boton` varchar(255) DEFAULT NULL,
  `fecha_creacion` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `heroes`
--

INSERT INTO `heroes` (`id`, `nombre_seccion`, `titulo`, `subtitulo`, `imagen_fondo`, `texto_boton`, `enlace_boton`, `fecha_creacion`) VALUES
(1, 'bienvenida', 'Bienvenidos a TaronjaBoxx', 'Tu lugar de CrossFit en Valencia.', '/img/entrenamiento.jpg', 'Quiénes somos', 'modulos/quienes-somos/quienes-somos.php', '2025-01-30 10:30:26');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `planes_suscripcion`
--

CREATE TABLE `planes_suscripcion` (
  `id` int(11) NOT NULL,
  `nombre` varchar(255) NOT NULL,
  `beneficios` text NOT NULL,
  `precio` decimal(10,2) NOT NULL,
  `duracion` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `planes_suscripcion`
--

INSERT INTO `planes_suscripcion` (`id`, `nombre`, `beneficios`, `precio`, `duracion`) VALUES
(1, 'Plan Básico', 'Acceso a clases generales y uso de las instalaciones.', 29.99, '1 mes'),
(2, 'Plan Avanzado', 'Acceso a todas las clases y entrenamientos personales.', 49.99, '3 meses'),
(3, 'Plan Premium', 'Acceso total + asesoramiento nutricional y seguimiento.', 69.99, '6 meses');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `quienes_somos`
--

CREATE TABLE `quienes_somos` (
  `id` int(11) NOT NULL,
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `quienes_somos`
--

INSERT INTO `quienes_somos` (`id`, `titulo`, `descripcion`, `imagen`) VALUES
(1, 'Nuestra Historia', 'Somos un equipo apasionado por el fitness y la salud.', 'img/historia.jpg'),
(2, 'Nuestra Misión', 'Ayudar a nuestros clientes a alcanzar sus objetivos deportivos.', 'img/mision.jpg'),
(3, 'Nuestros Valores', 'Compromiso, disciplina y trabajo en equipo.', 'img/valores.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_admin`
--

CREATE TABLE `usuarios_admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `titulo` varchar(255) NOT NULL,
  `descripcion` text NOT NULL,
  `duracion` varchar(50) NOT NULL,
  `imagen` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `workouts`
--

INSERT INTO `workouts` (`id`, `titulo`, `descripcion`, `duracion`, `imagen`) VALUES
(1, 'Entrenamiento de Alta Intensidad', 'Rutina explosiva para mejorar fuerza y resistencia.', '45 minutos', 'img/workout.jpg'),
(2, 'Yoga y Movilidad', 'Sesión enfocada en la flexibilidad y control corporal.', '60 minutos', 'img/yoga.jpg'),
(3, 'Levantamiento Olímpico', 'Ejercicios para mejorar la técnica y potencia en halterofilia.', '90 minutos', 'img/levantamiento.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `admin_menu`
--
ALTER TABLE `admin_menu`
  ADD PRIMARY KEY (`id`);

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
-- Indices de la tabla `destacados`
--
ALTER TABLE `destacados`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `equipo`
--
ALTER TABLE `equipo`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `fisioterapia`
--
ALTER TABLE `fisioterapia`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `header`
--
ALTER TABLE `header`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `heroes`
--
ALTER TABLE `heroes`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `planes_suscripcion`
--
ALTER TABLE `planes_suscripcion`
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
-- AUTO_INCREMENT de la tabla `admin_menu`
--
ALTER TABLE `admin_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `blog_posts`
--
ALTER TABLE `blog_posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `destacados`
--
ALTER TABLE `destacados`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `equipo`
--
ALTER TABLE `equipo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `fisioterapia`
--
ALTER TABLE `fisioterapia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `header`
--
ALTER TABLE `header`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `heroes`
--
ALTER TABLE `heroes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `planes_suscripcion`
--
ALTER TABLE `planes_suscripcion`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- AUTO_INCREMENT de la tabla `workouts`
--
ALTER TABLE `workouts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
