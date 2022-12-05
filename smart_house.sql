-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1:3306
-- Tiempo de generación: 05-12-2022 a las 02:35:01
-- Versión del servidor: 5.7.36
-- Versión de PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `smart_house`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `adquisisiones`
--

DROP TABLE IF EXISTS `adquisisiones`;
CREATE TABLE `adquisisiones` (
  `id_adquisicion` int(11) NOT NULL,
  `id_proveedor` int(11) DEFAULT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `costo_unitario` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `capacitaciones`
--

DROP TABLE IF EXISTS `capacitaciones`;
CREATE TABLE `capacitaciones` (
  `id_capacitacion` int(11) NOT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `tipo_cap` varchar(20) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `comentarios` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `capacitaciones`
--

INSERT INTO `capacitaciones` (`id_capacitacion`, `id_empleado`, `tipo_cap`, `descripcion`, `comentarios`, `fecha`) VALUES
(1, 1, 'Soporte', 'Soporte hacia clientes', 'Paso satisfactoriamente todo', '2022-10-10');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE `clientes` (
  `id_cliente` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `correo` varchar(30) DEFAULT NULL,
  `num_tel` varchar(10) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nombre`, `apellidos`, `fecha_nac`, `sexo`, `correo`, `num_tel`, `direccion`, `estatus`) VALUES
(1, 'Carlos', 'Gonzalez', '2000-09-29', 'M', 'carlos@hotmail.com', '3221353749', 'Av. Siempre viva #117', 0),
(2, 'Samuel', 'Garcia', '2000-12-05', 'M', 'samuel@hotmail.com', '3221325477', 'Hidalgo 36', 0),
(3, 'Josue', 'Adame', '1998-08-09', 'M', 'josue@hotmail.com', '3221478965', 'Jupiter 1', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cod_promocion`
--

DROP TABLE IF EXISTS `cod_promocion`;
CREATE TABLE `cod_promocion` (
  `id_codigo` int(11) NOT NULL,
  `codigo` varchar(10) DEFAULT NULL,
  `cantidad` int(11) DEFAULT NULL,
  `disponibilidad` int(11) DEFAULT NULL,
  `activo` tinyint(1) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contactanos`
--

DROP TABLE IF EXISTS `contactanos`;
CREATE TABLE `contactanos` (
  `nd` int(11) NOT NULL,
  `nombre` varchar(100) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `descripcion` varchar(256) NOT NULL,
  `fecha` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contactanos`
--

INSERT INTO `contactanos` (`nd`, `nombre`, `correo`, `descripcion`, `fecha`) VALUES
(7, 'josue adame  godinez', 'josueadame@gmail.com', 'todo  chevere', '2022-12-04'),
(6, 'josue adame  godinez', 'josueadame@gmail.com', 'klfajsdhglkasdfjnbgv', '2022-12-04');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

DROP TABLE IF EXISTS `empleados`;
CREATE TABLE `empleados` (
  `id_empleado` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `apellidos` varchar(20) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL,
  `pass` varchar(256) NOT NULL,
  `num_tel` varchar(10) DEFAULT NULL,
  `fecha_contratacion` date DEFAULT NULL,
  `puesto` varchar(15) DEFAULT NULL,
  `direccion` varchar(50) DEFAULT NULL,
  `estatus` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`id_empleado`, `nombre`, `apellidos`, `sexo`, `fecha_nac`, `rfc`, `correo`, `pass`, `num_tel`, `fecha_contratacion`, `puesto`, `direccion`, `estatus`) VALUES
(1, 'Ana', 'Lopez', 'F', '2000-07-21', 'AND4103974128', 'Ana@gmail.com', '147258', '3221472836', '2021-10-12', 'Instaladora', 'Gorro 8', 1),
(2, 'Javier', 'Gamba', 'M', '2000-08-01', 'JG47123587412', 'Jav@gmail.com', '123456', '3221407943', '2020-09-05', 'Gerente', 'Josias 102', 0),
(3, 'Aldo', 'Nomad', 'M', '1999-01-20', 'AN14752369874', 'Ald@gmail.com', '', '3221398703', '2022-01-06', 'Soporte', 'Lolo 3', 0),
(5, 'Josue', 'Adame', 'M', '2000-09-20', 'dfjbdskfgdsb', 'josue@gmail.com', '147258', '3223683458', '2020-10-12', 'Supervisor', 'Gorro 5', 0);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pre_venta`
--

DROP TABLE IF EXISTS `pre_venta`;
CREATE TABLE `pre_venta` (
  `nd` int(11) NOT NULL,
  `img` varchar(256) NOT NULL,
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(60) NOT NULL,
  `precio` int(5) NOT NULL,
  `unidades` int(4) NOT NULL,
  `fecha` date NOT NULL,
  `estatus` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Disparadores `pre_venta`
--
DROP TRIGGER IF EXISTS `respaldoventa`;
DELIMITER $$
CREATE TRIGGER `respaldoventa` BEFORE DELETE ON `pre_venta` FOR EACH ROW insert into ventas  (img,id_producto,nombre,total_venta,fecha)
    values(old.img,old.id_producto,old.nombre,old.precio,now())
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

DROP TABLE IF EXISTS `productos`;
CREATE TABLE `productos` (
  `id_producto` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `marcha` varchar(10) DEFAULT NULL,
  `descripcion` varchar(50) DEFAULT NULL,
  `precio` int(11) DEFAULT NULL,
  `inventario` int(11) DEFAULT NULL,
  `estatus` int(11) NOT NULL,
  `img` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`id_producto`, `nombre`, `marcha`, `descripcion`, `precio`, `inventario`, `estatus`, `img`) VALUES
(1, 'TV', 'Samsung', '32\" 4K Dolby Atmos', 4999, 10, 0, 'tv.jpg'),
(2, 'Alexa', 'Amazon', 'Echo dot 4', 6999, 11, 0, 'alexa.jpeg'),
(3, 'Foco', 'Philips', 'Exteriores RGB', 199, 7, 0, 'foco.jpg'),
(4, 'Minisplit', 'Mirage', 'Mini split de 1 ton', 10000, 17, 0, 'minisplit.jpg'),
(5, 'Smart plug', 'Mydlink', 'Enchufe inteligente', 800, 19, 0, 'enchufe.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `promocion`
--

DROP TABLE IF EXISTS `promocion`;
CREATE TABLE `promocion` (
  `id_promocion` int(11) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `disponibilidad` int(11) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
CREATE TABLE `proveedor` (
  `id_proveedor` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `rfc` varchar(13) DEFAULT NULL,
  `razon_social` varchar(20) DEFAULT NULL,
  `representante` varchar(30) DEFAULT NULL,
  `telefono` varchar(10) DEFAULT NULL,
  `correo` varchar(20) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proveedor`
--

INSERT INTO `proveedor` (`id_proveedor`, `nombre`, `rfc`, `razon_social`, `representante`, `telefono`, `correo`) VALUES
(1, 'Samsung', 'SM74128796358', 'Samsung electro', 'Jael Lopez', '3292824785', 'samsung@hotmail.co,'),
(2, 'Amazon', 'AM12369874123', 'Amazon Etp', 'Alondra Lu', '3221745985', 'amaz@hotmail.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

DROP TABLE IF EXISTS `proyectos`;
CREATE TABLE `proyectos` (
  `id_proyecto` int(11) NOT NULL,
  `nombre` varchar(20) DEFAULT NULL,
  `id_encargado` int(11) DEFAULT NULL,
  `estado` varchar(10) DEFAULT NULL,
  `tiempo_estimado` int(11) DEFAULT NULL,
  `tiempo_finalizado` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `costo` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyectos`
--

INSERT INTO `proyectos` (`id_proyecto`, `nombre`, `id_encargado`, `estado`, `tiempo_estimado`, `tiempo_finalizado`, `id_cliente`, `costo`) VALUES
(1, 'Proyecto Ara', 2, 'En espera', 3, NULL, 1, 2999),
(2, 'Proyecto Loma', 1, 'En curso', 10, NULL, 2, 5999);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyecto_trabajador`
--

DROP TABLE IF EXISTS `proyecto_trabajador`;
CREATE TABLE `proyecto_trabajador` (
  `id_proyecto` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `proyecto_trabajador`
--

INSERT INTO `proyecto_trabajador` (`id_proyecto`, `id_empleado`) VALUES
(1, 2),
(2, 2),
(1, 1),
(1, 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `report_sug`
--

DROP TABLE IF EXISTS `report_sug`;
CREATE TABLE `report_sug` (
  `id_reporte` int(11) NOT NULL,
  `id_cliente` int(11) DEFAULT NULL,
  `id_empleado` int(11) DEFAULT NULL,
  `comentario` varchar(100) DEFAULT NULL,
  `estatus` int(11) DEFAULT NULL,
  `respuesta` varchar(100) DEFAULT NULL,
  `fecha` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tickets`
--

DROP TABLE IF EXISTS `tickets`;
CREATE TABLE `tickets` (
  `nd` int(11) NOT NULL,
  `user` varchar(256) DEFAULT NULL,
  `correo` varchar(50) DEFAULT NULL,
  `descripcion` varchar(256) DEFAULT NULL,
  `estatus` varchar(50) DEFAULT NULL,
  `asignar` varchar(15) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tickets`
--

INSERT INTO `tickets` (`nd`, `user`, `correo`, `descripcion`, `estatus`, `asignar`) VALUES
(1, 'joshep1', 'joshep@gmail.com', 'no puedo conectarme al servidor de riot games', 'eliminado', 'Ingeniero'),
(2, 'admin', 'gukummdo@gmail.com', 'no puedo conectarme al servidor de riot games', 'finalizado', 'Tecnico'),
(4, 'VaidrollTeam3', 'itzel@gmail.com', 'no puedo conectarme al servidor de riot games', 'revisando', 'DiseÃ±ador'),
(16, 'samuel', 'samuel@gmail.com', 'no puedo conectarme al servidor de riot games', 'revisando', 'Tecnico'),
(17, 'josue', 'josue@gmail.com', 'no puedo conectarme al servidor de riot games', 'recibido', 'DiseÃ±ador'),
(18, 'josue', 'josue@gmail.com', 'todo mal', 'recibido', 'Ingeniero'),
(19, 'josue', 'josue@gmail.com', 'todo mal', 'recibido', 'Tecnico'),
(20, 'josue', 'josueadame32@gmail.com', 'presento problemas con los microfonos de la cocina', 'recibido', 'Tecnico'),
(21, 'josue', 'josueadame28@gmail.com', 'falata en yarda 20', 'recibido', 'DiseÃ±ador');

--
-- Disparadores `tickets`
--
DROP TRIGGER IF EXISTS `respaldo`;
DELIMITER $$
CREATE TRIGGER `respaldo` AFTER DELETE ON `tickets` FOR EACH ROW insert into bitacora (user,	correo,	descripcion, estatus, asignar, fecha	)
    values (old.user, old.correo, old.descripcion, old.estatus, old.asignar, now() )
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

DROP TABLE IF EXISTS `ventas`;
CREATE TABLE `ventas` (
  `id_ventas` int(11) NOT NULL,
  `img` varchar(50) NOT NULL,
  `id_producto` int(11) DEFAULT NULL,
  `nombre` varchar(100) NOT NULL,
  `total_venta` int(11) DEFAULT NULL,
  `fecha` date DEFAULT NULL,
  `id_proyecto` int(11) DEFAULT NULL,
  `id_promocion` int(11) DEFAULT NULL,
  `id_codigo` int(11) DEFAULT NULL,
  `id_cliente` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`id_ventas`, `img`, `id_producto`, `nombre`, `total_venta`, `fecha`, `id_proyecto`, `id_promocion`, `id_codigo`, `id_cliente`) VALUES
(1, '0', 1, '', 4999, '2022-10-13', NULL, NULL, NULL, 1),
(2, '0', 1, '', 4999, '2022-10-13', NULL, NULL, NULL, 2),
(3, '0', 2, '', 6999, '2021-10-13', NULL, NULL, NULL, 3),
(5, 'foco.jpg', 3, 'Foco', 398, '2022-12-04', NULL, NULL, NULL, NULL),
(6, 'minisplit.jpg', 4, 'Minisplit', 10000, '2022-12-04', NULL, NULL, NULL, NULL),
(7, 'enchufe.jpg', 5, 'Smart plug', 800, '2022-12-04', NULL, NULL, NULL, NULL),
(8, 'alexa.jpeg', 2, 'Alexa', 6999, '2022-12-04', NULL, NULL, NULL, NULL),
(9, 'enchufe.jpg', 5, 'Smart plug', 800, '2022-12-04', NULL, NULL, NULL, NULL),
(10, 'minisplit.jpg', 4, 'Minisplit', 10000, '2022-12-04', NULL, NULL, NULL, NULL),
(11, 'foco.jpg', 3, 'Foco', 398, '2022-12-04', NULL, NULL, NULL, NULL);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `adquisisiones`
--
ALTER TABLE `adquisisiones`
  ADD PRIMARY KEY (`id_adquisicion`),
  ADD KEY `id_proveedor` (`id_proveedor`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  ADD PRIMARY KEY (`id_capacitacion`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_cliente`);

--
-- Indices de la tabla `cod_promocion`
--
ALTER TABLE `cod_promocion`
  ADD PRIMARY KEY (`id_codigo`);

--
-- Indices de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  ADD PRIMARY KEY (`nd`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`id_empleado`);

--
-- Indices de la tabla `pre_venta`
--
ALTER TABLE `pre_venta`
  ADD PRIMARY KEY (`nd`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `promocion`
--
ALTER TABLE `promocion`
  ADD PRIMARY KEY (`id_promocion`),
  ADD KEY `id_producto` (`id_producto`);

--
-- Indices de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  ADD PRIMARY KEY (`id_proveedor`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`id_proyecto`),
  ADD KEY `id_encargado` (`id_encargado`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- Indices de la tabla `proyecto_trabajador`
--
ALTER TABLE `proyecto_trabajador`
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `report_sug`
--
ALTER TABLE `report_sug`
  ADD PRIMARY KEY (`id_reporte`),
  ADD KEY `id_cliente` (`id_cliente`),
  ADD KEY `id_empleado` (`id_empleado`);

--
-- Indices de la tabla `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`nd`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`id_ventas`),
  ADD KEY `id_producto` (`id_producto`),
  ADD KEY `id_proyecto` (`id_proyecto`),
  ADD KEY `id_promocion` (`id_promocion`),
  ADD KEY `id_codigo` (`id_codigo`),
  ADD KEY `id_cliente` (`id_cliente`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `adquisisiones`
--
ALTER TABLE `adquisisiones`
  MODIFY `id_adquisicion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `capacitaciones`
--
ALTER TABLE `capacitaciones`
  MODIFY `id_capacitacion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `id_cliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `cod_promocion`
--
ALTER TABLE `cod_promocion`
  MODIFY `id_codigo` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `contactanos`
--
ALTER TABLE `contactanos`
  MODIFY `nd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `id_empleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `pre_venta`
--
ALTER TABLE `pre_venta`
  MODIFY `nd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `promocion`
--
ALTER TABLE `promocion`
  MODIFY `id_promocion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `proveedor`
--
ALTER TABLE `proveedor`
  MODIFY `id_proveedor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  MODIFY `id_proyecto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `report_sug`
--
ALTER TABLE `report_sug`
  MODIFY `id_reporte` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `tickets`
--
ALTER TABLE `tickets`
  MODIFY `nd` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `id_ventas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
