-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 09-11-2020 a las 05:35:55
-- Versión del servidor: 10.4.14-MariaDB
-- Versión de PHP: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `gumigames`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `administrador`
--

CREATE TABLE `administrador` (
  `AdministradorId` int(10) NOT NULL,
  `AdministradorNombre` varchar(50) NOT NULL,
  `AdministradorPrimerApellido` varchar(50) NOT NULL,
  `AdministradorSegundoApellido` varchar(50) NOT NULL,
  `AdministradorCorreo` varchar(50) NOT NULL,
  `AdministradorContraseña` varchar(50) NOT NULL,
  `AdministradorImagen` text NOT NULL,
  `AdministradorPais` varchar(50) NOT NULL,
  `AdministradorDescripcion` text NOT NULL,
  `AdministradorTelefono` varchar(10) NOT NULL,
  `AdministradorRol` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `administrador`
--

INSERT INTO `administrador` (`AdministradorId`, `AdministradorNombre`, `AdministradorPrimerApellido`, `AdministradorSegundoApellido`, `AdministradorCorreo`, `AdministradorContraseña`, `AdministradorImagen`, `AdministradorPais`, `AdministradorDescripcion`, `AdministradorTelefono`, `AdministradorRol`) VALUES
(1, 'Viviana', 'Vivero', 'Guzmán', 'viviana@gmail.com', '123456', 'admin_image.jpg', 'México', ' Este sitio es un Panel de Administrador hecha por el equipo 4\r\n:)', '4494615205', 'Programadora');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrito`
--

CREATE TABLE `carrito` (
  `CarritoId` int(11) NOT NULL,
  `AddIp` varchar(100) NOT NULL,
  `CarritoCantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `carrusel`
--

CREATE TABLE `carrusel` (
  `CarruselId` int(11) NOT NULL,
  `CarruselNombre` varchar(50) NOT NULL,
  `CarruselImagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `carrusel`
--

INSERT INTO `carrusel` (`CarruselId`, `CarruselNombre`, `CarruselImagen`) VALUES
(2, 'slider numero 1', 'slide_1.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categoria`
--

CREATE TABLE `categoria` (
  `CategoriaId` int(11) NOT NULL,
  `CategoriaTitulo` varchar(50) NOT NULL,
  `CategoriaDescripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `ClienteId` int(11) NOT NULL,
  `ClienteNombre` varchar(50) NOT NULL,
  `ClientePrimerApellido` varchar(50) NOT NULL,
  `ClienteSegundoApellido` varchar(50) NOT NULL,
  `ClienteCorreo` varchar(50) NOT NULL,
  `ClienteContraseña` varchar(20) NOT NULL,
  `ClientePais` varchar(50) NOT NULL,
  `ClienteCiudad` varchar(50) NOT NULL,
  `ClienteContraseñaEncriptada` varchar(100) NOT NULL,
  `ClienteTelefono` int(10) NOT NULL,
  `ClienteIp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `comentario`
--

CREATE TABLE `comentario` (
  `ComentarioId` int(11) NOT NULL,
  `Comentario` text NOT NULL,
  `Calificacion` int(1) NOT NULL,
  `ProductoId` int(11) NOT NULL,
  `ClienteId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `genero`
--

CREATE TABLE `genero` (
  `GeneroId` int(11) NOT NULL,
  `GeneroTitulo` varchar(50) NOT NULL,
  `GeneroDescripcion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `genero`
--

INSERT INTO `genero` (`GeneroId`, `GeneroTitulo`, `GeneroDescripcion`) VALUES
(1, 'Prueba genero 1', 'asdasdas genero 1'),
(2, 'Prueba 2 genero', 'Prueba 2 genero ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `listadeseo`
--

CREATE TABLE `listadeseo` (
  `ListaDeseosId` int(11) NOT NULL,
  `ProductoId` int(11) NOT NULL,
  `UsuarioIp` int(11) NOT NULL,
  `ClienteId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `orden`
--

CREATE TABLE `orden` (
  `OrdenId` int(11) NOT NULL,
  `ClienteId` int(11) NOT NULL,
  `FacturaNumero` int(11) NOT NULL,
  `ProductoId` int(11) NOT NULL,
  `OrdenCantidad` int(11) NOT NULL,
  `OrdenCantidadDeber` int(11) NOT NULL,
  `OrdenFecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pago`
--

CREATE TABLE `pago` (
  `PagoId` int(11) NOT NULL,
  `FacturaNumero` int(11) NOT NULL,
  `PagoCantidad` int(11) NOT NULL,
  `PagoModo` varchar(50) NOT NULL,
  `PagoNumeroReferencia` int(11) NOT NULL,
  `PagoCodigo` int(11) NOT NULL,
  `PagoFecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `producto`
--

CREATE TABLE `producto` (
  `ProductoId` int(10) NOT NULL,
  `ProductoTitulo` varchar(50) NOT NULL,
  `ProductoImagenUno` text NOT NULL,
  `ProductoImagenDos` text NOT NULL,
  `ProductoImagenTres` text NOT NULL,
  `ProductoPalabraClave` varchar(50) NOT NULL,
  `Date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `ProductoDescripcion` text NOT NULL,
  `GeneroId` int(11) NOT NULL,
  `CategoriaId` int(11) NOT NULL,
  `ProductoPrecio` int(10) NOT NULL,
  `ProductoCantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `visita`
--

CREATE TABLE `visita` (
  `VisitaId` int(11) NOT NULL,
  `VisitaCantidad` int(11) NOT NULL,
  `VisitaFecha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Volcado de datos para la tabla `visita`
--

INSERT INTO `visita` (`VisitaId`, `VisitaCantidad`, `VisitaFecha`) VALUES
(3, 3, '08/Nov/2020');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `administrador`
--
ALTER TABLE `administrador`
  ADD PRIMARY KEY (`AdministradorId`);

--
-- Indices de la tabla `carrito`
--
ALTER TABLE `carrito`
  ADD PRIMARY KEY (`CarritoId`);

--
-- Indices de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  ADD PRIMARY KEY (`CarruselId`);

--
-- Indices de la tabla `categoria`
--
ALTER TABLE `categoria`
  ADD PRIMARY KEY (`CategoriaId`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`ClienteId`);

--
-- Indices de la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD PRIMARY KEY (`ComentarioId`),
  ADD KEY `ClienteId` (`ClienteId`),
  ADD KEY `ProductoId` (`ProductoId`);

--
-- Indices de la tabla `genero`
--
ALTER TABLE `genero`
  ADD PRIMARY KEY (`GeneroId`);

--
-- Indices de la tabla `listadeseo`
--
ALTER TABLE `listadeseo`
  ADD PRIMARY KEY (`ListaDeseosId`),
  ADD KEY `ClienteId` (`ClienteId`),
  ADD KEY `ProductoId` (`ProductoId`);

--
-- Indices de la tabla `orden`
--
ALTER TABLE `orden`
  ADD PRIMARY KEY (`OrdenId`),
  ADD KEY `ClienteId` (`ClienteId`);

--
-- Indices de la tabla `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`PagoId`);

--
-- Indices de la tabla `producto`
--
ALTER TABLE `producto`
  ADD PRIMARY KEY (`ProductoId`),
  ADD KEY `GeneroId` (`GeneroId`),
  ADD KEY `CategoriaId` (`CategoriaId`);

--
-- Indices de la tabla `visita`
--
ALTER TABLE `visita`
  ADD PRIMARY KEY (`VisitaId`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `administrador`
--
ALTER TABLE `administrador`
  MODIFY `AdministradorId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `carrito`
--
ALTER TABLE `carrito`
  MODIFY `CarritoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `carrusel`
--
ALTER TABLE `carrusel`
  MODIFY `CarruselId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `categoria`
--
ALTER TABLE `categoria`
  MODIFY `CategoriaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `ClienteId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `comentario`
--
ALTER TABLE `comentario`
  MODIFY `ComentarioId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `genero`
--
ALTER TABLE `genero`
  MODIFY `GeneroId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `listadeseo`
--
ALTER TABLE `listadeseo`
  MODIFY `ListaDeseosId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `orden`
--
ALTER TABLE `orden`
  MODIFY `OrdenId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT de la tabla `pago`
--
ALTER TABLE `pago`
  MODIFY `PagoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT de la tabla `producto`
--
ALTER TABLE `producto`
  MODIFY `ProductoId` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `visita`
--
ALTER TABLE `visita`
  MODIFY `VisitaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `comentario`
--
ALTER TABLE `comentario`
  ADD CONSTRAINT `comentario_ibfk_1` FOREIGN KEY (`ProductoId`) REFERENCES `producto` (`ProductoId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `comentario_ibfk_2` FOREIGN KEY (`ClienteId`) REFERENCES `cliente` (`ClienteId`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `listadeseo`
--
ALTER TABLE `listadeseo`
  ADD CONSTRAINT `listadeseo_ibfk_1` FOREIGN KEY (`ProductoId`) REFERENCES `producto` (`ProductoId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `listadeseo_ibfk_2` FOREIGN KEY (`ClienteId`) REFERENCES `cliente` (`ClienteId`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `orden`
--
ALTER TABLE `orden`
  ADD CONSTRAINT `orden_ibfk_1` FOREIGN KEY (`ClienteId`) REFERENCES `cliente` (`ClienteId`) ON UPDATE CASCADE;

--
-- Filtros para la tabla `producto`
--
ALTER TABLE `producto`
  ADD CONSTRAINT `producto_ibfk_1` FOREIGN KEY (`GeneroId`) REFERENCES `genero` (`GeneroId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `producto_ibfk_2` FOREIGN KEY (`CategoriaId`) REFERENCES `categoria` (`CategoriaId`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
