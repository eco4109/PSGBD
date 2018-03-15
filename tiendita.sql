-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-03-2018 a las 01:00:18
-- Versión del servidor: 10.1.30-MariaDB
-- Versión de PHP: 7.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `tiendita`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `articulo`
--

CREATE TABLE `articulo` (
  `id_articulo` int(11) NOT NULL,
  `des_articulo` varchar(50) NOT NULL,
  `precio_venta` int(11) NOT NULL,
  `existencias` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `articulo`
--

INSERT INTO `articulo` (`id_articulo`, `des_articulo`, `precio_venta`, `existencias`) VALUES
(161003, 'PROYECTOR EPSON', 9500, 50),
(251012, 'LASERJET 100', 2200, 12),
(321005, 'LAPTOP HP 6100', 7000, 15);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cliente`
--

CREATE TABLE `cliente` (
  `id_cliente` int(11) NOT NULL,
  `nombre_comprador` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `cliente`
--

INSERT INTO `cliente` (`id_cliente`, `nombre_comprador`) VALUES
(1, 'ARQUITECTOS ASOCIADOS'),
(2, 'CONSULTORES EN SISTEMAS'),
(3, 'INMOBILIARIA DASHUR');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra`
--

CREATE TABLE `compra` (
  `id_compra` int(11) NOT NULL,
  `fecha_compra` date NOT NULL,
  `ref_fact` varchar(10) NOT NULL,
  `id_proveedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra`
--

INSERT INTO `compra` (`id_compra`, `fecha_compra`, `ref_fact`, `id_proveedor`) VALUES
(100, '2018-02-01', 'A515003', 100),
(104, '2018-02-01', 'F104312', 101);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compra_articulo`
--

CREATE TABLE `compra_articulo` (
  `id_compra` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cant_compra` int(11) NOT NULL,
  `precio_compra` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `compra_articulo`
--

INSERT INTO `compra_articulo` (`id_compra`, `id_articulo`, `cant_compra`, `precio_compra`) VALUES
(100, 251012, 10, 2000),
(100, 321005, 22, 6000),
(104, 251012, 20, 1900),
(104, 161003, 5, 8000);

--
-- Disparadores `compra_articulo`
--
DELIMITER $$
CREATE TRIGGER `incrementa_existencia` BEFORE INSERT ON `compra_articulo` FOR EACH ROW UPDATE articulo SET existencias = existencias + new.cant_compra
WHERE articulo.id_articulo = new.id_articulo
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre_proveedor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre_proveedor`) VALUES
(100, 'Ingram'),
(101, 'CT Internacional');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `vendedor`
--

CREATE TABLE `vendedor` (
  `id_vendedor` int(11) NOT NULL,
  `nombre_vendedor` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `vendedor`
--

INSERT INTO `vendedor` (`id_vendedor`, `nombre_vendedor`) VALUES
(1, 'JUAN PEREZ'),
(2, 'CARMEN GARCIA');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta`
--

CREATE TABLE `venta` (
  `id_venta` int(11) NOT NULL,
  `fech_venta` date NOT NULL,
  `folio_factura` varchar(11) NOT NULL,
  `id_cliente` int(11) NOT NULL,
  `id_vendedor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta`
--

INSERT INTO `venta` (`id_venta`, `fech_venta`, `folio_factura`, `id_cliente`, `id_vendedor`) VALUES
(1, '2018-02-08', 'A2510', 1, 1),
(2, '2018-03-03', 'A2518', 2, 2),
(3, '2018-02-09', 'A2511', 2, 2),
(4, '2018-03-02', 'A2517', 3, 1),
(5, '2018-02-10', 'A2516', 2, 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `venta_articulo`
--

CREATE TABLE `venta_articulo` (
  `id_venta` int(11) NOT NULL,
  `id_articulo` int(11) NOT NULL,
  `cant_ventas` int(11) NOT NULL,
  `precio_ventas` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `venta_articulo`
--

INSERT INTO `venta_articulo` (`id_venta`, `id_articulo`, `cant_ventas`, `precio_ventas`) VALUES
(1, 251012, 1, 2200),
(1, 321005, 1, 7000),
(1, 161003, 1, 9500),
(2, 321005, 1, 7000),
(3, 321005, 2, 7000),
(3, 161003, 1, 10000),
(4, 251012, 2, 2200),
(4, 321005, 3, 7000),
(4, 161003, 1, 9500),
(5, 251012, 1, 2200),
(5, 321005, 2, 7000),
(5, 161003, 1, 9500);

--
-- Disparadores `venta_articulo`
--
DELIMITER $$
CREATE TRIGGER `decrementa_existencia` BEFORE INSERT ON `venta_articulo` FOR EACH ROW UPDATE articulo SET existencia = existencias - new.cant_ventas
WHERE articulo.id_articulo = new.id_articulo
$$
DELIMITER ;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `articulo`
--
ALTER TABLE `articulo`
  ADD PRIMARY KEY (`id_articulo`);

--
-- Indices de la tabla `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `compra`
--
ALTER TABLE `compra`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_proveedor` (`id_proveedor`);

--
-- Indices de la tabla `compra_articulo`
--
ALTER TABLE `compra_articulo`
  ADD KEY `id_compra` (`id_compra`),
  ADD KEY `id_articulo` (`id_articulo`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  ADD PRIMARY KEY (`id_vendedor`);

--
-- Indices de la tabla `venta`
--
ALTER TABLE `venta`
  ADD PRIMARY KEY (`id_venta`),
  ADD KEY `id_vendedor` (`id_vendedor`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `venta_articulo`
--
ALTER TABLE `venta_articulo`
  ADD KEY `id_articulo` (`id_articulo`),
  ADD KEY `id_venta` (`id_venta`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `compra`
--
ALTER TABLE `compra`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=105;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT de la tabla `vendedor`
--
ALTER TABLE `vendedor`
  MODIFY `id_vendedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `venta`
--
ALTER TABLE `venta`
  MODIFY `id_venta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `compra`
--
ALTER TABLE `compra`
  ADD CONSTRAINT `compra_ibfk_1` FOREIGN KEY (`id_proveedor`) REFERENCES `proveedor` (`id_proveedor`);

--
-- Filtros para la tabla `compra_articulo`
--
ALTER TABLE `compra_articulo`
  ADD CONSTRAINT `compra_articulo_ibfk_1` FOREIGN KEY (`id_compra`) REFERENCES `compra` (`id_compra`),
  ADD CONSTRAINT `compra_articulo_ibfk_2` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`);

--
-- Filtros para la tabla `venta`
--
ALTER TABLE `venta`
  ADD CONSTRAINT `venta_ibfk_2` FOREIGN KEY (`id_vendedor`) REFERENCES `vendedor` (`id_vendedor`),
  ADD CONSTRAINT `venta_ibfk_3` FOREIGN KEY (`id_cliente`) REFERENCES `cliente` (`id_cliente`);

--
-- Filtros para la tabla `venta_articulo`
--
ALTER TABLE `venta_articulo`
  ADD CONSTRAINT `venta_articulo_ibfk_1` FOREIGN KEY (`id_articulo`) REFERENCES `articulo` (`id_articulo`),
  ADD CONSTRAINT `venta_articulo_ibfk_2` FOREIGN KEY (`id_venta`) REFERENCES `venta` (`id_venta`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
