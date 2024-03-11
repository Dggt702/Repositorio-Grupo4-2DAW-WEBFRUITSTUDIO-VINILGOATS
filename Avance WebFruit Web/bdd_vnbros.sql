-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-03-2024 a las 00:58:29
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
-- Base de datos: `bdd_vnbros`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `email` varchar(80) NOT NULL,
  `password` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `nombre`, `email`, `password`) VALUES
(1, 'Dioggo', 'dioggo@hotmail.com', 'Admin1234*'),
(2, 'Martin', 'martin@hotmail.com', 'Admin1234*'),
(3, 'Javier', 'javier@hotmail.com', 'Admin1234*'),
(4, 'Claudia', 'claudia@hotmail.com', 'Admin1234*');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `albumes`
--

CREATE TABLE `albumes` (
  `id_album` int(5) NOT NULL,
  `nombre` varchar(50) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `precio` decimal(4,2) NOT NULL,
  `stock` int(20) NOT NULL,
  `imagen` varchar(200) NOT NULL,
  `anio` year(4) NOT NULL,
  `duracion` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `albumes`
--

INSERT INTO `albumes` (`id_album`, `nombre`, `id_artista`, `precio`, `stock`, `imagen`, `anio`, `duracion`) VALUES
(23, 'The Miracle', 5, 20.00, 10, 'Queen_The_Miracle.png', '1989', '00:41:17'),
(25, 'Innuendo ', 5, 21.00, 10, 'innuendo queen.jpg', '1991', '00:53:52'),
(27, 'Rodeo', 2, 37.49, 11, 'Rodeo - Travis Scott.jpg', '2015', '01:15:02'),
(28, 'Nimrod', 3, 28.27, 32, 'Nimrod - Green Day.jpg', '1997', '00:49:06'),
(29, 'El Último Tour del Mundo', 4, 50.00, 32, 'EL ÚLTIMO TOUR DEL MUNDO - Bad Bunny.jpg', '2020', '00:47:19'),
(30, '3MEN2 KBRN', 6, 50.00, 23, '3men2 kbrn eladio carrion.jpg', '2023', '00:54:51'),
(31, 'News Of The World', 5, 25.00, 6, 'news of the world queen.jpg', '1977', '00:39:15'),
(34, 'Off The Wall', 1, 23.45, 22, 'off the wall michael jackson.jpg', '1979', '00:42:24'),
(35, 'Pray For Paris', 9, 23.45, 23, 'pray for paris wsg.jpg', '2020', '00:36:25'),
(36, 'Get A Grip', 8, 19.99, 12, 'get_aGrip.jpg', '1993', '01:02:00'),
(37, 'American Idiot', 3, 17.69, 4, 'american idiot green dat.jpg', '2004', '00:57:23'),
(38, 'Sauce Boyz', 6, 19.98, 5, 'sauce_boyz.jfif', '2020', '00:59:08'),
(39, 'Whole Lotta Red', 10, 20.15, 13, 'wlr playboi carti.png', '2020', '01:03:00'),
(40, 'More Life', 11, 23.90, 23, 'more life.jpg', '2017', '01:21:00'),
(41, 'Heroes & Villians', 12, 23.10, 6, 'Metro_Boomin_-_Heroes_&_Villains.png', '2022', '00:48:04'),
(42, 'Nada Personal', 13, 18.20, 5, 'nada_personal.jpg', '2006', '00:39:57'),
(43, 'Thriller', 1, 19.99, 10, 'thriller.jpg', '1982', '00:42:21'),
(44, 'Mi Sangre', 14, 24.59, 23, 'mi_sangre.jpg', '2004', '00:45:21'),
(45, 'A Night At The Opera', 5, 30.00, 4, 'a night at the opera.jpg', '1975', '00:43:05'),
(46, 'Apettite For Desctruction', 15, 29.00, 5, 'apettite for destruction.jpg', '1987', '00:53:46');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artista/album`
--

CREATE TABLE `artista/album` (
  `id_album` int(11) NOT NULL,
  `id_artista` int(11) NOT NULL,
  `id_relacion` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artistas`
--

CREATE TABLE `artistas` (
  `nombre` varchar(100) NOT NULL,
  `id_artista` int(5) NOT NULL,
  `descripcion` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artistas`
--

INSERT INTO `artistas` (`nombre`, `id_artista`, `descripcion`) VALUES
('Michael Jackson', 1, 'El Rey del Pop'),
('Travis Scott', 2, 'Travi$'),
('Green Day', 3, 'Banda de Grunge'),
('Bad Bunny', 4, 'Un cantante'),
('Queen', 5, 'Banda de Rock británica'),
('Eladio Carrion', 6, 'Coño Eladio'),
('Pink Floyd', 7, 'Banda de Rock psicodélico'),
('Aerosmith', 8, 'Los Chicos Malos de Boston'),
('Westside Gunn', 9, 'Rapero Americano'),
('Playboi Carti', 10, 'Rapero'),
('Drake', 11, 'Rapero'),
('Metro Boomin', 12, 'Rapero que apareció en Spiderman Beyond the Spiderverse'),
('Soda Stereo', 13, 'Ya estás feliz Gorge?'),
('Juanes', 14, 'Uno por pobre y feo, hombre Pero antoja\'o, ay ome'),
('Guns N\' Roses', 15, 'Esa banda que canta la de megamente');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `canciones`
--

CREATE TABLE `canciones` (
  `id_cancion` int(5) NOT NULL,
  `id_album` int(11) NOT NULL,
  `duracion` time NOT NULL,
  `num_pista` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `canciones`
--

INSERT INTO `canciones` (`id_cancion`, `id_album`, `duracion`, `num_pista`, `nombre`) VALUES
(1, 23, '00:02:24', 1, 'Party'),
(2, 23, '00:02:47', 2, 'Khashoggi\'s Ship'),
(3, 23, '00:05:21', 3, 'The Miracle'),
(4, 23, '00:04:40', 4, 'I Want It All');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `paises`
--

CREATE TABLE `paises` (
  `nombre` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `paises`
--

INSERT INTO `paises` (`nombre`) VALUES
('Alemania'),
('Andorra'),
('Argentina'),
('Colombia'),
('España'),
('Francia'),
('Italia'),
('México'),
('Perú'),
('Portugal');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `sexo`
--

CREATE TABLE `sexo` (
  `nombre` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `sexo`
--

INSERT INTO `sexo` (`nombre`) VALUES
('Femenino'),
('Masculino'),
('Otro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `nombre` varchar(50) NOT NULL,
  `correo` varchar(125) NOT NULL,
  `contraseña` varchar(50) NOT NULL,
  `sexo` varchar(10) DEFAULT NULL,
  `fecha_de_nacimiento` date DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `pais` varchar(100) DEFAULT NULL,
  `DNI` varchar(9) DEFAULT NULL,
  `tarjeta_de_credito` int(16) DEFAULT NULL,
  `notificaciones` tinyint(1) DEFAULT NULL,
  `revista_digital` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`nombre`, `correo`, `contraseña`, `sexo`, `fecha_de_nacimiento`, `direccion`, `pais`, `DNI`, `tarjeta_de_credito`, `notificaciones`, `revista_digital`) VALUES
('Elena Martinez', 'e.martinez@ggnet.com', 'Alumno123*', 'masculino', '0000-00-00', '', 'espana', '', 0, 0, 0),
('Javier Herce Sánchez', 'javierhs2003@gmail.com', '$Ccontraseña123', 'masculino', '2003-08-20', 'mI CASA 2', 'espana', '51740969P', 2147483647, 0, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD PRIMARY KEY (`id_album`),
  ADD KEY `fk_id_artista` (`id_artista`);

--
-- Indices de la tabla `artista/album`
--
ALTER TABLE `artista/album`
  ADD PRIMARY KEY (`id_relacion`);

--
-- Indices de la tabla `artistas`
--
ALTER TABLE `artistas`
  ADD PRIMARY KEY (`id_artista`);

--
-- Indices de la tabla `canciones`
--
ALTER TABLE `canciones`
  ADD PRIMARY KEY (`id_cancion`);

--
-- Indices de la tabla `paises`
--
ALTER TABLE `paises`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `sexo`
--
ALTER TABLE `sexo`
  ADD PRIMARY KEY (`nombre`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`correo`),
  ADD KEY `sexo` (`sexo`),
  ADD KEY `pais` (`pais`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `albumes`
--
ALTER TABLE `albumes`
  MODIFY `id_album` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT de la tabla `artistas`
--
ALTER TABLE `artistas`
  MODIFY `id_artista` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `canciones`
--
ALTER TABLE `canciones`
  MODIFY `id_cancion` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `albumes`
--
ALTER TABLE `albumes`
  ADD CONSTRAINT `fk_id_artista` FOREIGN KEY (`id_artista`) REFERENCES `artistas` (`id_artista`);

--
-- Filtros para la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD CONSTRAINT `usuarios_ibfk_1` FOREIGN KEY (`sexo`) REFERENCES `sexo` (`nombre`),
  ADD CONSTRAINT `usuarios_ibfk_2` FOREIGN KEY (`pais`) REFERENCES `paises` (`nombre`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
