-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-08-2024 a las 22:38:36
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tecnooda`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cargo`
--

CREATE TABLE `cargo` (
  `ID` int(11) NOT NULL,
  `cargo` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cargo`
--

INSERT INTO `cargo` (`ID`, `cargo`) VALUES
(1, 'Distribuidor'),
(2, 'Gestor'),
(8, 'Proveedor'),
(9, 'Administrador\r\n');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `documento`
--

CREATE TABLE `documento` (
  `ID` int(11) NOT NULL,
  `documento` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `documento`
--

INSERT INTO `documento` (`ID`, `documento`) VALUES
(7, 'Tarjeta de Identidad'),
(8, 'Cedula de Ciudadania'),
(9, 'Cedula de Extranjeria'),
(10, 'Pasaporte'),
(11, 'NIUP');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `ID` int(11) NOT NULL,
  `Nombre` varchar(25) DEFAULT NULL,
  `Cantidad` int(11) DEFAULT NULL,
  `Proveedor` int(11) DEFAULT NULL,
  `Valor` int(11) DEFAULT NULL,
  `Ubicacion` varchar(30) DEFAULT NULL,
  `Fecha` date DEFAULT NULL,
  `Marca` varchar(25) DEFAULT NULL,
  `Codigo` int(11) DEFAULT NULL,
  `Descripcion` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `ID` int(11) NOT NULL,
  `Proveedor` varchar(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `ID` int(11) NOT NULL,
  `Cargo` int(11) DEFAULT NULL,
  `Usuario` varchar(15) DEFAULT NULL,
  `P_Nombre` varchar(20) DEFAULT NULL,
  `P_Apellido` varchar(20) DEFAULT NULL,
  `Tipo_Doc` int(11) DEFAULT NULL,
  `Num_Doc` varchar(15) DEFAULT NULL,
  `Correo` varchar(30) DEFAULT NULL,
  `Telefono` varchar(15) DEFAULT NULL,
  `Contrasenia` varchar(20) DEFAULT NULL,
  `Direccion` varchar(30) DEFAULT NULL,
  `token_password` varchar(30) DEFAULT NULL,
  `token_request` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`ID`, `Cargo`, `Usuario`, `P_Nombre`, `P_Apellido`, `Tipo_Doc`, `Num_Doc`, `Correo`, `Telefono`, `Contrasenia`, `Direccion`, `token_password`, `token_request`) VALUES
(2, 1, 'a', 'a', 'a', 7, '1', '1', '1', '1', NULL, NULL, NULL),
(3, 1, 'Ale', 'Mauro', 'Moreno', 7, NULL, 'gokussjxddd1@gmail.com', '3213639957', '123', NULL, '4564987987894161', 1),
(5, 1, 's', 's', 's', 7, NULL, 'a@gmail.com', '321', '12', NULL, NULL, NULL),
(7, 8, 'Contacto', 'Contacto', 'Correo', 7, NULL, 'TecnoODA@outlook.com', '1', 'pato5', NULL, NULL, 0),
(8, 2, 'Andres', 'Andres', 'Vasquez', 8, NULL, 'martinesandres526@gmail.com', '3248757667', 'andres123', NULL, NULL, 0),
(9, 1, 'Tecno', 'a', 'a', 7, NULL, 'TecnoODA@outlook.com', '121', '123', NULL, NULL, 1),
(10, 2, 'Demond', 'Ale', 'Mor', 7, '1456788410', 'mamoreno.bob@gmail.com', '321459782', '123456789', NULL, NULL, 0),
(11, 8, 'ZDELMAXZ', 'Cris', 'Pam', 8, '156456165', 'camilo.milo177@gmail.com', '3215616', '123', NULL, NULL, 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `cargo`
--
ALTER TABLE `cargo`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `documento`
--
ALTER TABLE `documento`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Proveedor` (`Proveedor`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`ID`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `Cargo` (`Cargo`),
  ADD KEY `Tipo_Doc` (`Tipo_Doc`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cargo`
--
ALTER TABLE `cargo`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `documento`
--
ALTER TABLE `documento`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `productos_ibfk_1` FOREIGN KEY (`Proveedor`) REFERENCES `proveedor` (`ID`);

--
-- Filtros para la tabla `registro`
--
ALTER TABLE `registro`
  ADD CONSTRAINT `registro_ibfk_1` FOREIGN KEY (`Cargo`) REFERENCES `cargo` (`ID`),
  ADD CONSTRAINT `registro_ibfk_2` FOREIGN KEY (`Tipo_Doc`) REFERENCES `documento` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
