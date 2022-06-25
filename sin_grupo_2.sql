-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 25-06-2022 a las 05:45:29
-- Versión del servidor: 10.4.24-MariaDB
-- Versión de PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `sin_grupo_2`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `boletas`
--

CREATE TABLE `boletas` (
  `idBoleta` int(11) NOT NULL,
  `total` double NOT NULL,
  `fecha` date NOT NULL,
  `estado` int(11) NOT NULL COMMENT '0= compra sin pago\r\n1= compra pagada pero sin entregar\r\n2= compra pagada y entregada',
  `dniCliente` varchar(100) NOT NULL,
  `idMedio` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `boletas`
--

INSERT INTO `boletas` (`idBoleta`, `total`, `fecha`, `estado`, `dniCliente`, `idMedio`) VALUES
(1, 5992, '2022-06-24', 0, '72040278', 1),
(2, 5992, '2022-06-25', 0, '72040278', 1),
(4, 5992, '2022-06-24', 0, '72040278', 1),
(5, 3343, '2022-06-24', 0, '72040278', 4),
(11, 12147, '2022-06-24', 0, '72040278', 1),
(13, 12152, '2022-06-24', 0, '72040278', 1),
(14, 7361, '2022-06-25', 0, '72040278', 1),
(16, 5523, '2022-06-25', 0, '72040283', 1);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `medios_de_pago`
--

CREATE TABLE `medios_de_pago` (
  `idMedio` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `medios_de_pago`
--

INSERT INTO `medios_de_pago` (`idMedio`, `nombre`) VALUES
(1, 'EFECTIVO'),
(2, 'VISA'),
(3, 'PAYPAL'),
(4, 'SAFETY PAY'),
(6, 'AMERICAN EXPRESS'),
(7, 'MASTERCARD');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `nombre` varchar(500) NOT NULL,
  `detalle` text NOT NULL,
  `stock` int(11) NOT NULL,
  `precio` double NOT NULL,
  `imagen` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `nombre`, `detalle`, `stock`, `precio`, `imagen`) VALUES
(1, 'Televisor LED UHD - Active HDR\r\n', 'Pantalla LED diseño que mejora tu experiencia visual\nActive HDR, detalles con más realismo\nSonido Ultra Surround, ', 17, 1500, 'https://www.lg.com/co/images/televisores/md07504655/gallery/1100_01_v1.jpg'),
(2, 'Televisor Xiaomi P1 43\"', 'Xiaomi Mi TV P1 43, Android 10, PatchWall, 4K-UHD, HDR, Bluetooth 5.0, Pantalla de 43\", Brillo mínimo 270 Nits, Angulo de visión 178 (H y V)', 18, 1369, 'https://xiaomioficial.pe/media/catalog/product/cache/fd79ca39c172cf5a18782c64c6340a1c/t/v/tv043xia05_2.png'),
(3, 'Xiaomi Poco X4 PRO 6.67\" 5G 6GB RAM', 'Memoria interna: 128GB, Memoria RAM: 6Gb, Cámara posterior: 108MP + 8MP + 2MP, Cámara frontal: 16MP', 26, 1505, 'https://oechsle.vteximg.com.br/arquivos/ids/9210155-1500-1500/2107799.jpg?v=637909334394030000'),
(4, 'Licuadora Pro 700W', 'Con la Licuadora podrás disfrutar de una gran variedad de bebidas, sopas y salsas a tu gusto', 26, 469, 'data:image/jpeg;base64,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'),
(5, 'LICUADORA OSTER CON TECNOLOGÍA REVERSIBLE', 'Potencia (Watts): 1100, Velocidades: 3, Capacidad (litros): 1.5, Material de vaso: Vidrio Boroclass®', 0, 458, 'https://home.ripley.com.pe/Attachment/WOP_5/2019250483868/2019250483868_2.jpg'),
(6, 'LAPTOP HP 13-BE0500LA 8GB DDR4 512GB', 'Procesador: AMD Ryzen 5-Memoria RAM: 8GB-Disco duro: 512GB-Tipo de disco duro: SSD', 0, 3549, 'https://home.ripley.com.pe/Attachment/WOP_5/2004270744075/2004270744075_2.jpg');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `dni` varchar(20) NOT NULL,
  `nombres` varchar(200) NOT NULL,
  `apellidos` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `usuario` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `tipoUsuario` int(11) NOT NULL COMMENT '0= cliente y 1 = administrador'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Volcado de datos para la tabla `usuario`
--

INSERT INTO `usuario` (`dni`, `nombres`, `apellidos`, `email`, `usuario`, `password`, `tipoUsuario`) VALUES
('41785236', 'Victor', 'Alva Ferrua', 'victor@alva.com', 'alvita', '0961938c985cf698294cd9ae0dd17dcb', 0),
('72040278', 'Marcos ', 'Cruz Adrianzen', 'cruzadrianzen@gmail.com', 'admi', '91f5167c34c400758115c2a6826ec2e3', 1),
('72040283', 'Marcos', 'Cruz Adrianzén', 'marcos@alum.udep.edu.pe', 'marcos', 'c5e3539121c4944f2bbe097b425ee774', 0),
('72044120', 'Katherine', 'Sueldo Villanueva', 'a@hotmail.com', 'kat', '3bad6af0fa4b8b330d162e19938ee981', 0);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `boletas`
--
ALTER TABLE `boletas`
  ADD PRIMARY KEY (`idBoleta`),
  ADD KEY `idClienteBoleta` (`dniCliente`),
  ADD KEY `idMedioBoleta` (`idMedio`);

--
-- Indices de la tabla `medios_de_pago`
--
ALTER TABLE `medios_de_pago`
  ADD PRIMARY KEY (`idMedio`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`dni`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `boletas`
--
ALTER TABLE `boletas`
  MODIFY `idBoleta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `medios_de_pago`
--
ALTER TABLE `medios_de_pago`
  MODIFY `idMedio` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `boletas`
--
ALTER TABLE `boletas`
  ADD CONSTRAINT `idClienteBoleta` FOREIGN KEY (`dniCliente`) REFERENCES `usuario` (`dni`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idMedioBoleta` FOREIGN KEY (`idMedio`) REFERENCES `medios_de_pago` (`idMedio`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
