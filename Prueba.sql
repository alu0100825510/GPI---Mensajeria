-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 27-10-2016 a las 16:51:27
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `Prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `Datos_Personales`
--

CREATE TABLE `Datos_Personales` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(50) COLLATE utf8_spanish_ci NOT NULL,
  `NIF` varchar(9) COLLATE utf8_spanish_ci NOT NULL,
  `Nacido` date NOT NULL,
  `Altura` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci COMMENT='Tabla de datos personales';

--
-- Volcado de datos para la tabla `Datos_Personales`
--

INSERT INTO `Datos_Personales` (`ID`, `Nombre`, `NIF`, `Nacido`, `Altura`) VALUES
(55, 'all345', '7773477', '0000-00-00', 4.3),
(60, 'pepe', '8678', '2300-00-00', 7),
(62, 'fds', '987', '1999-00-00', 8798),
(63, 'pplberto', '987', '2011-12-01', 13),
(65, 'ouioh', '87676', '0000-00-00', 12),
(66, '', '23487623E', '0000-00-00', 0),
(67, 'aifh', '', '0000-00-00', 0),
(68, 'Avel', '666', '0040-00-00', 666);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `mensajes`
--

CREATE TABLE `mensajes` (
  `ID` int(11) NOT NULL,
  `usuario` int(11) NOT NULL,
  `Mensaje` text COLLATE utf8_spanish_ci NOT NULL,
  `Para` int(11) NOT NULL,
  `Fecha` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `mensajes`
--

INSERT INTO `mensajes` (`ID`, `usuario`, `Mensaje`, `Para`, `Fecha`) VALUES
(1, 1, 'aspsad', 2, NULL),
(2, 2, 'asdsad', 1, NULL),
(3, 2, 'abel es boob', 1, NULL),
(4, 2, 'asdasd', 1, NULL),
(5, 2, 'fdfddgfd', 1, NULL),
(6, 2, 'asdasaaaa', 1, '0000-00-00'),
(7, 2, 'dfdsfsfsd', 1, NULL);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `ID` int(11) NOT NULL,
  `Usuario` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Clave` varchar(20) COLLATE utf8_spanish_ci NOT NULL,
  `Email` varchar(50) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`ID`, `Usuario`, `Clave`, `Email`) VALUES
(1, 'Alberto', '1234567', 'alberto@gmail.com'),
(2, 'Pepe', '0000', 'pepe@hotmail.es');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `Datos_Personales`
--
ALTER TABLE `Datos_Personales`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `Datos_Personales`
--
ALTER TABLE `Datos_Personales`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;
--
-- AUTO_INCREMENT de la tabla `mensajes`
--
ALTER TABLE `mensajes`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
