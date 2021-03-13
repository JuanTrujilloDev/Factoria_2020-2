-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 13-03-2021 a las 01:48:38
-- Versión del servidor: 10.4.17-MariaDB
-- Versión de PHP: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `fundacion`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresa`
--

CREATE TABLE `empresa` (
  `id` int(11) NOT NULL,
  `nombre_empresa` varchar(50) NOT NULL,
  `NIT` int(30) NOT NULL,
  `email` varchar(60) NOT NULL,
  `contrasena` varchar(50) NOT NULL,
  `direccion` varchar(50) NOT NULL,
  `telefono` int(11) NOT NULL,
  `departamento` varchar(40) NOT NULL,
  `ciudad` varchar(40) NOT NULL,
  `imagen_documento` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `empresa`
--

INSERT INTO `empresa` (`id`, `nombre_empresa`, `NIT`, `email`, `contrasena`, `direccion`, `telefono`, `departamento`, `ciudad`, `imagen_documento`) VALUES
(1, '', 0, '', '', '', 0, '', '', ''),
(2, '', 1995, 'leonardoortiz8282@gmail.com', '123', 'Cra 1F #12-60', 13245, 'Huila', '', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067),
(3, '', 19956, 'leonardoortiz7474@gmail.com', '123', 'Cra 1F #12-60', 2324, 'Huila', '', 0x3134303538393836355f3830343830363730373034343931395f323831363935313432363431313432373638345f6e2e6a7067),
(4, '', 19956, 'leonardoortiz7474@gmail.com', '123', 'Cra 1F #12-60', 2324, 'Huila', '', 0x3134303538393836355f3830343830363730373034343931395f323831363935313432363431313432373638345f6e2e6a7067),
(5, '', 19956, 'leonardoortiz7474@gmail.com', '123', 'Cra 1F #12-60', 2324, 'Huila', '', 0x3134303538393836355f3830343830363730373034343931395f323831363935313432363431313432373638345f6e2e6a7067),
(6, '', 19958, 'leonardoortiz06@gmail.com', '123', 'Cra 1F #12-60', 2147483647, 'Huila', 'Popayan', 0x3134303538393836355f3830343830363730373034343931395f323831363935313432363431313432373638345f6e2e6a7067),
(7, '', 19959, 'leonardoortiz8@gmail.com', '123', 'Cra 1F #12-60', 2147483647, 'Huila', 'Santa Elena', 0x313130393233332e6a7067),
(8, '', 1995878, 'leonardoortiz09@gmail.com', '123', 'Cra 1F #12-60', 2147483647, 'Antioquia', 'Neiva', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067),
(9, '', 123, 'leonardoortiz0@gmail.com', '123', 'Cra 1F #12-60', 2147483647, 'Huila', 'Neiva', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067),
(10, '', 5566, 'empresa@correo.com', '202cb962ac59075b964b07152d234b70', 'Cra 1F #12-60', 9988, 'Huila', 'Neiva', 0x313130393233332e6a7067),
(11, '', 9999, 'arrocito@correo.com', '3f088ebeda03513be71d34d214291986', 'Cra 1F #12-59', 2147483647, 'Huila', 'Neiva', 0x3134303538393836355f3830343830363730373034343931395f323831363935313432363431313432373638345f6e2e6a7067);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `persona`
--

CREATE TABLE `persona` (
  `id` int(11) NOT NULL,
  `tipo_documento` int(11) NOT NULL,
  `numero_documento` int(20) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `imagen_documento` mediumblob NOT NULL,
  `direccion` varchar(60) NOT NULL,
  `activo` tinyint(4) NOT NULL DEFAULT 1,
  `telefono` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contrasena` varchar(50) CHARACTER SET latin1 NOT NULL,
  `departamento` varchar(30) NOT NULL,
  `ciudad` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `persona`
--

INSERT INTO `persona` (`id`, `tipo_documento`, `numero_documento`, `nombre`, `lastname`, `imagen_documento`, `direccion`, `activo`, `telefono`, `email`, `contrasena`, `departamento`, `ciudad`) VALUES
(16, 1, 12345678, 'Holman Leonardo', 'Aroca', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067, 'Cra 1F #12-60', 1, 573229084080, 'leonardoortiz06@gmail.com', '12345', 'Huila', 'Neiva'),
(17, 2, 12345, 'Pepe', 'Aroca', '', 'Cra 1F #12-60', 1, 2233, 'leonardoortiz@gmail.com', '123', 'Huila', 'Neiva'),
(18, 1, 1255, 'Lola', 'Ortiz', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067, 'Cra 1F #12-60', 1, 3229084080, 'leonardoortiz2020@gmail.com', '123', 'Huila', 'Neiva'),
(19, 1, 12345789, 'Pepa', 'Pig', '', 'Cra 1F #12-60', 1, 32290840804, 'leonardoortiz20204@gmail.com', '1234', 'Huila', 'Neiva'),
(20, 1, 1789, 'juanita', 'perez', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067, 'Cra 1F #12-60', 1, 1245, 'pepita@gmail.com', '0f759dd1ea6c4c76cedc299039ca4f23', 'Huila', 'Neiva'),
(21, 1, 99, 'Jose Gomez', 'Tapiero', '', 'Cra 1F #12-60', 1, 4477, 'naruto6@gmail.com', '0f759dd1ea6c4c76cedc299039ca4f23', 'Huila', 'Neiva'),
(22, 1, 9900, 'Naruto', 'Uzumaki', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067, 'Cra 1F #12-60', 1, 3159084080, 'correo@correo.com', '202cb962ac59075b964b07152d234b70', 'Huila', 'Neiva'),
(23, 1, 2147483647, 'Andres', 'Herrera', 0x376531323262623037333761613461393864616136323764336236663531323338346338383030323762343237666436313966333964613133653431343839362e6a7067, 'Cra 1F #12-60', 1, 573229084080, 'andres@gmail.com', '202cb962ac59075b964b07152d234b70', 'Huila', 'Neiva'),
(24, 2, 1997, 'Juan', 'Trujillo', 0x373062373830343065386235613062613163333335313063623663313239663835363133653134373938336665323631303630616365633736666137623832342e6a7067, 'Cra 1F #12-60', 1, 77777777777, 'juan@correo.com', 'a94652aa97c7211ba8954dd15a3cf838', 'Huila', 'Neiva');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `imagen_producto` varchar(40) NOT NULL,
  `descripcion` varchar(400) NOT NULL,
  `usuario` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `producto`
--

INSERT INTO `producto` (`id`, `nombre`, `imagen_producto`, `descripcion`, `usuario`) VALUES
(1, 'arroz', 'arroz.png', 'arroz de perro', '0'),
(2, 'arroz', 'comidarapida.jpg', 'para los otakus ', 'Carlos'),
(3, 'lentejas', 'lentejas.jpg', 'para los gatos', 'Leo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_documento`
--

CREATE TABLE `tipo_documento` (
  `id` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `tipo_documento`
--

INSERT INTO `tipo_documento` (`id`, `nombre`) VALUES
(1, 'Cedula'),
(2, 'Tarjeta Identidad');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `empresa`
--
ALTER TABLE `empresa`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `persona`
--
ALTER TABLE `persona`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tipo_documento` (`tipo_documento`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `empresa`
--
ALTER TABLE `empresa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `persona`
--
ALTER TABLE `persona`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `tipo_documento`
--
ALTER TABLE `tipo_documento`
  ADD CONSTRAINT `tipo_documento_ibfk_1` FOREIGN KEY (`nombre`) REFERENCES `persona` (`tipo_documento`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
