-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 03-11-2016 a las 22:30:29
-- Versión del servidor: 10.1.16-MariaDB
-- Versión de PHP: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `mydb`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `contacto`
--

CREATE TABLE `contacto` (
  `id_contacto` int(11) NOT NULL,
  `nombre` varchar(100) DEFAULT NULL,
  `telefono` varchar(45) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `direccion` varchar(200) DEFAULT NULL,
  `web` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `contacto`
--

INSERT INTO `contacto` (`id_contacto`, `nombre`, `telefono`, `email`, `direccion`, `web`) VALUES
(1, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(2, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(3, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(4, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(5, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(6, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(7, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(8, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(9, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(10, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(11, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(12, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(13, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(14, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(15, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(16, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(17, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(18, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(19, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx'),
(20, 'COINHI', '771708000', 'coinhi@hidalgo.gob.mx', 'pachuca de soto hidalgo', 'www.hidalgo.gob.mx');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empresas`
--

CREATE TABLE `empresas` (
  `id_empresa` int(11) NOT NULL,
  `proyecto` varchar(200) DEFAULT NULL,
  `empresa` varchar(200) DEFAULT NULL,
  `ubicacion` varchar(200) DEFAULT NULL,
  `municipio` varchar(200) DEFAULT NULL,
  `origen` varchar(45) DEFAULT NULL,
  `sector` varchar(100) DEFAULT NULL,
  `inversion` decimal(10,0) DEFAULT NULL,
  `empleos` int(11) DEFAULT NULL,
  `dependencia` varchar(45) DEFAULT NULL,
  `giro` varchar(200) NOT NULL,
  `fase` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `empresas`
--

INSERT INTO `empresas` (`id_empresa`, `proyecto`, `empresa`, `ubicacion`, `municipio`, `origen`, `sector`, `inversion`, `empleos`, `dependencia`, `giro`, `fase`) VALUES
(1, 'M', 'M', 'Region Apan', 'Apan', 'MÃ©xico', 'Alimentos', '14000000', 2000, 'SECRETARIO/SUBSECRETARIA DE INVERSIONES/COFOI', 'Cervezas', '1'),
(2, 'ASSOCIATED SPRINGS', 'ASSOCIATED SPRINGS', 'PLATHA', 'Villa de Tezontepec', 'Estados Unidos', 'Electrico', '114000', 50, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Resortes para Vehiculos', '1'),
(3, 'S', 'S', 'PLATHA', 'Villa de Tezontepec', 'MÃ©xico', 'Logistico', '950000', 2000, 'DESPACHO SECRETARIO/ SUBSECRETARIA DE INVERSI', 'Centro de DistribuciÃ³n', '1'),
(4, 'EMBOTELLADORA NIÃGARA', 'NIÃGARA', 'PLATHA', 'Villa de Tezontepec', 'Estados Unidos', 'Alimentos', '2755000', 120, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Agua Embotellada', '1'),
(5, 'RICARDO & BARBOSA', 'RICARDO & BARBOSA', 'PLATHA/QUMA', 'Villa de Tezontepec', 'Portugal', 'Sector', '0', 150, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Herramientas de Alata PrecisiÃ³n', '1'),
(6, 'WILLIAMS & HUGHES', 'WILLIAMS & HUGHES', 'PLATHA/ALTIPLANO/QUMA/PRITSA', 'Villa de Tezontepec', 'Reino Unido', 'Metal Mecanico', '21557300', 100, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Cortes de Aluminio', '1'),
(7, 'WR CONTROLS', 'WR CONTROLS', 'PLATHA/ALTIPLANO', 'Villa de Tezontepec', 'Suecia', 'Electrico', '0', 60, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Cables de Control', '1'),
(8, 'PEGAS NONWOVENS', 'PEGAS NONWOVENS', 'PLATHA/QUMA', 'Villa de Tezontepec', 'Rep. Checa', 'Textiil', '840000', 60, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Textiles no Tejidos', '1'),
(9, 'CONDUMEX', 'CONDUMEX', 'PROGRESO', 'Progreso de ObregÃ³n', 'MÃ©xico', 'Electrico', '76000000', 600, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Arneses ElÃ©ctricos Automotrices', '1'),
(10, 'DELPHI', 'DELPHI', 'PROGRESO/IXMIQUILPAN', 'Ixmiquilpan', 'MÃ©xico', 'Sector', '0', 750, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Componentes Automotrices', '1'),
(11, 'SCA', 'SCA', 'Parque industrial sahagun', 'Tepeapulco', 'Suecia', 'Papel', '4085000', 600, 'SUBSECRETARIA DE INV/COFOIN/DESPACHO SEDECO', 'Papel Higienico', '2'),
(12, 'QUEVEDO', 'QUEVEDO', 'NULL', 'AcatlÃ¡n', 'Abjasia', 'CosntrucciÃ³n', '1500000', 0, 'COFON', 'Desarrollo de Parque Industrial', '2'),
(13, 'SNF FLOEGER', 'SNF FLOEGER', 'ATITALAQUIA', 'Atitalaquia', 'Francia', 'Bienes de Capital', '400000', 70, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Material Para Tratamiento de Agua', '2'),
(14, 'CMPC', 'CMPC', 'EMILIANO ZAPATA', 'Emiliano Zapata', 'Chile', 'Papel', '3800000', 600, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Papel ', '2'),
(15, 'FRIALSA', 'FRIALSA', 'TEPEJI DEL RIO', 'Tepeji del RÃ­o de Ocampo', 'MÃ©xico', 'Logistico', '190000000', 50, 'COFOIN', 'Centro Logistico Cadena Frio', '2'),
(16, 'GPI', 'GPI', 'TEPEJI DEL RIO', 'Tepeji del RÃ­o de Ocampo', 'MÃ©xico', 'Metal Mecanico', '95000', 25, 'COFOIN', 'FabricaciÃ³n de Estructuras Metalicas', '2'),
(17, 'BIMBO', 'BIMBO', 'TEPEJI DEL RIO', 'Tepeji del RÃ­o de Ocampo', 'MÃ©xico', 'Alimentos', '133000000', 120, 'COFOIN', 'Alimentos', '2'),
(18, 'QUALIA', 'QUALIA', 'PACHUC', 'Pachuca de Soto', 'MÃ©xico', 'CosntrucciÃ³n', '550000000', 0, 'DESPACHO SEDECO', 'Construccion de tres Edificios Verticales', '2'),
(19, 'GICSA', 'GICSA', 'PACHUCA', 'Pachuca de Soto', 'MÃ©xico', 'CosntrucciÃ³n', '1500000000', 0, 'COFOIN', 'CosntrucciÃ³n de Plaza Comercial', '2'),
(20, 'GENERAC ', 'GENERAC Power Systems', 'PLATHA', 'Villa de Tezontepec', 'Estados Unidos', 'Electrico', '600000000', 500, 'SUBSECRETARIA DE INV/DIRECCIÃ“N GENERAL DE IN', 'Generadores elÃ©ctricos industriales', '2');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal`
--

CREATE TABLE `personal` (
  `id` int(11) NOT NULL,
  `nombre` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `personal`
--

INSERT INTO `personal` (`id`, `nombre`) VALUES
(1, 'Marko Robles'),
(2, 'brandon'),
(3, 'pancho');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proyectos`
--

CREATE TABLE `proyectos` (
  `idproyectos` int(11) NOT NULL,
  `nom_proyecto` varchar(45) DEFAULT NULL,
  `empresa` varchar(45) DEFAULT NULL,
  `proyectoscol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tipo_usuario`
--

CREATE TABLE `tipo_usuario` (
  `id` int(11) NOT NULL,
  `tipo` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tipo_usuario`
--

INSERT INTO `tipo_usuario` (`id`, `tipo`) VALUES
(1, 'Administrador'),
(2, 'Usuario');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `pass` varchar(30) COLLATE utf8_spanish_ci NOT NULL,
  `email` varchar(40) COLLATE utf8_spanish_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`id`, `user`, `pass`, `email`) VALUES
(1, 'omarfayad', 'admin', 'omar.fayad@hidalgo.gob.mx'),
(2, 'jose', 'pepe7540', 'josemi@hidalgo.gob.mx'),
(3, 'gobernador', 'hidalgo', 'gobernador@gmail.com'),
(4, 'admin', '123456', 'admin@admin.com');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `usuario` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  `id_personal` int(11) NOT NULL,
  `id_tipo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id`, `usuario`, `password`, `id_personal`, `id_tipo`) VALUES
(1, 'marko', '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 1, 1),
(2, 'brandon', '1234', 2, 2),
(3, 'pancho7', '7b52009b64fd0a2a49e6d8a939753077792b0554', 3, 1);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `contacto`
--
ALTER TABLE `contacto`
  ADD PRIMARY KEY (`id_contacto`);

--
-- Indices de la tabla `empresas`
--
ALTER TABLE `empresas`
  ADD PRIMARY KEY (`id_empresa`);

--
-- Indices de la tabla `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `proyectos`
--
ALTER TABLE `proyectos`
  ADD PRIMARY KEY (`idproyectos`);

--
-- Indices de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `contacto`
--
ALTER TABLE `contacto`
  MODIFY `id_contacto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `empresas`
--
ALTER TABLE `empresas`
  MODIFY `id_empresa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT de la tabla `personal`
--
ALTER TABLE `personal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT de la tabla `tipo_usuario`
--
ALTER TABLE `tipo_usuario`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
