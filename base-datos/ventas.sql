-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 01-10-2024 a las 00:05:21
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
-- Base de datos: `ventas`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_productos`
--

CREATE TABLE `t_productos` (
  `id_producto` int(11) NOT NULL,
  `marca` varchar(15) NOT NULL,
  `descripcion` varchar(255) NOT NULL,
  `precio` varchar(255) NOT NULL,
  `imagen` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `t_productos`
--

INSERT INTO `t_productos` (`id_producto`, `marca`, `descripcion`, `precio`, `imagen`) VALUES
(105, 'HP ProBook 440 ', 'Procesador Intel® Core™ i7 de 12.ª generaciónWindows 11 Pro (preinstalado con la versión anterior de Windows 10 Pro)Gráficos Intel® Iris® Xᵉ16 GB de RAM DDR4-3200 MHz (1 x 16 GB)A partir de 1,38 kg', '4.534.992', 'https://d34vmoxq6ylzee.cloudfront.net/catalog/product/cache/314dec89b3219941707ad62ccc90e585/7/6/76Q29LT-1_T1693504679.png'),
(106, 'HP ', 'ProBook 450 G9: Procesador Intel® Core™ i7 de 12.ª generación Windows 11 Pro (preinstalado con la versión anterior de Windows 10 Pro) Gráficos Intel® UHD 16 GB de RAM DDR4-3200 MHz (1 x 16 GB) A partir de 1,74 kg', '5.079.900', 'https://d34vmoxq6ylzee.cloudfront.net/catalog/product/cache/314dec89b3219941707ad62ccc90e585/7/6/76Q26LT-3_T1715642862.png'),
(108, 'hp', ' Elite x360 Convertible 1040 g10: Procesador Intel® Core™ i7 de 13.ª generaciónWindows 11 ProGráficos Intel® Iris® XRAM LPDDR5-6400 MHz de 32 GB (integrada)Peso inicial de 1,34 Kg', ' 9.949.900', 'https://d34vmoxq6ylzee.cloudfront.net/catalog/product/cache/314dec89b3219941707ad62ccc90e585/9/J/9J317LT-6_T1722624519.png'),
(109, 'hp', 'OMEN Transcend Portátil 14-bf0001la: Procesador Intel® Core™ Ultra 7Windows 11 Home Single Language14\" diagonal, 3K (2880 x 1800), OLED, 48-120 Hz, 0.2 ms response time, UWVA, edge-to-edge glass, micro-edge, Low Blue Light, SDR 400 nits, HDR 500 nits, 100', '8.999.900', 'https://d34vmoxq6ylzee.cloudfront.net/catalog/product/cache/314dec89b3219941707ad62ccc90e585/a/z/azure_a0dh6la_2imagenprincipalsintexto.jpg'),
(110, 'Lenovo', 'ThinkPad E16 - Graphite Black (Intel): Procesador Intel® Core™ i5-1335U de 13ᵃ Generación (núcleos E de hasta 3,40 GHz núcleos P de hasta 4,60 GHz), 16 GB DDR4-3200MHz - (8 GB SODIMM + 8 GB soldado)', '3.699.901', 'https://p2-ofp.static.pub/fes/cms/2023/05/12/lxh77n8zsrwe51sgrwdgzi2bd3a43j782441.png'),
(111, 'Lenovo', 'IdeaCentre AIO 3 6ta Gen (23.8\", AMD): PC all in one perfecta para el hogar de 23.8” con tecnología AMD  Pantalla FHD con bordes delgados  Altavoces certificados por Harman Kardon®', '1.759.901', 'https://p1-ofp.static.pub//fes/cms/2024/09/12/uh9f00loxi6fueqrhwlj6k8d395cnk854829.png'),
(112, 'Epson', 'Impresora Multifuncional EPSON Ecotank L3210 Hg - Negro', '759.000', 'https://www.alkosto.com/medias/010343958067-002-750Wx750H?context=bWFzdGVyfGltYWdlc3wxNzQ2MHxpbWFnZS93ZWJwfGFEY3pMMmcxTXk4eE5ETXdOalkyTlRVeU9UTTNOQzh3TVRBek5ETTVOVGd3TmpkZk1EQXlYemMxTUZkNE56VXdTQXxiZTEzNmFjY2VkMmZjMDk2NzQ3ZTNjMmM0YTBmNWVhZjIxMGM4MzE0MGE4ZTFiMWEzMmFiYmUzOThhMWM4MGQ2'),
(113, 'Epson', 'Impresora Multifuncional EPSON Ecotank L5590 WiFi Hg-Of - Negro', '1.269.000', 'https://www.alkosto.com/medias/010343973381-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wyMDg1NnxpbWFnZS93ZWJwfGFHTTFMMmd6T0M4eE5ETTBORGd5TURrNE1UYzVNQzh3TVRBek5ETTVOek16T0RGZk1EQXhYemMxTUZkNE56VXdTQXw5ZjNlZjZjNTdhYzUxYjY3ZmI5YmFkYTlkNDgxMzBhZjk3M2M4MmM1ZmFmOWEzMGNjZmM4NWM4ZTU5Yjg1MzA4'),
(114, 'PC Gamer', 'Pc Gamer Rgb Ryzen 5 5600g + 32gb + Ssd 512gb + Monitor 22\'\'', '2.099.900', 'https://http2.mlstatic.com/D_NQ_NP_2X_665942-MCO75637254938_042024-F.webp'),
(115, 'Asus', 'Computador Portátil Gamer ROG Strix SCAR 18\" Pulgadas G834JYR - Intel Core i9 - RAM 32GB - Disco SSD 2 TB - Negro', '17.999.000', 'https://www.ktronix.com/medias/4711387522660-004-750Wx750H?context=bWFzdGVyfGltYWdlc3wyNTExMHxpbWFnZS93ZWJwfGFETmpMMmczWWk4eE5ETTJPRE01TmpReE1Ea3hNQzgwTnpFeE16ZzNOVEl5TmpZd1h6QXdORjgzTlRCWGVEYzFNRWd8ZDdmMDQyODNhMTlmMmIwZjM0NDBjZjY0ODE5MTE2NTNiZjBiMGQ2M2RkOGIzNGY5NDc3MzNmNGRjMWI2N2U1Zg'),
(116, 'Lanus', 'COMPUTADOR GAMER JANUS INTEL CORE I9 14900F MEMORIA RAM 16GB RGB SSD 1TB M.2 RTX 4070 SUPER BOARD Z690 EXTREME REFRIGERACION LIQUIDA 360MM NEGRA FUENTE JANUS', '10,250,000', 'https://www.janus.com.co/cdn/shop/files/8051BK22PULGADASTECLADOGAMERINALAMBRICO_3ceeec5d-fcc2-49fe-867e-aaabb8a40301_940x.png?v=1724339009'),
(117, 'Samsung', ' Monitor SAMSUNG 24\" Pulgadas T350F Gris-Azul', '479.900', 'https://www.ktronix.com/medias/8806090677465-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wyOTUyOHxpbWFnZS93ZWJwfGFEZzRMMmd3TkM4eE5ESTVOVFV6TWpRM01ETXdNaTg0T0RBMk1Ea3dOamMzTkRZMVh6QXdNVjgzTlRCWGVEYzFNRWd8M2I1YmNlZGU1NmYyZDFlY2E5NWMyODU1NmRhYTU3NzU4MDgzMDNmNGIwNGY3MWU3MDcyNzUzNWFlYmU3YjBlOA'),
(118, 'Samsung', 'Monitor SAMSUNG 27\" Pulgadas Odyseey DG300 FHD Plano Negro', '899.900', 'https://www.ktronix.com/medias/887276836225-005-750Wx750H?context=bWFzdGVyfGltYWdlc3w0MDI1NHxpbWFnZS93ZWJwfGFEY3pMMmcyTVM4eE5EWTBPVGt6T1RnMU16TTBNaTg0T0RjeU56WTRNell5TWpWZk1EQTFYemMxTUZkNE56VXdTQXwyMGJiYjU3ZmQ4MWYyMmQxMmQ2NTE5M2M2YWFiZjZmODM3ZjIyMTk1YmE0NzMzYzNmMjRlNGNjNzRmNWY3MzM2'),
(119, 'Samsung', 'Monitor SAMSUNG 32\" Pulgadas DM801 Smart Plano 4K Blanco', '2.299.900', 'https://www.ktronix.com/medias/887276833590-001-750Wx750H?context=bWFzdGVyfGltYWdlc3wzMjg5NHxpbWFnZS93ZWJwfGFHUXlMMmcxTmk4eE5EVXpNak16T0RjM09ERTBNaTg0T0RjeU56WTRNek0xT1RCZk1EQXhYemMxTUZkNE56VXdTQXw5ZGIyMTJlNzQ2MmU0MmEzZDE5Yzk5ZWQ3ZWMyMjc1ZTRjYTk4MmYzNmUzMzA5ZWMwMGJmODE5ZGY2NzBhZjI3'),
(120, 'Canon', 'MAXIFY MB5410', '800.000', 'https://www.cla.canon.com/en_US/app/images/printer/MB5420/MB5410_4.png');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `t_usuarios`
--

CREATE TABLE `t_usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombres` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` text NOT NULL,
  `token` varchar(100) NOT NULL,
  `fecha_hora_creacion` datetime NOT NULL,
  `fecha_hora_actualizacion` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `t_usuarios`
--

INSERT INTO `t_usuarios` (`id_usuario`, `nombres`, `email`, `password`, `token`, `fecha_hora_creacion`, `fecha_hora_actualizacion`) VALUES
(1, 'Anderson Moreno Amaya', 'Ander.m.a79@gmail.com', '123456', '', '2024-07-18 02:42:51', '2024-07-18 02:42:51'),
(2, 'Jose Gomez', 'JoseGomez89@gmail.com', '654321', '', '2024-07-25 00:26:40', '2024-07-25 00:26:40'),
(3, 'Ana Amaya', 'AnaAmaya123@gmail.com', 'qwerty123', '', '2024-07-25 00:28:00', '2024-07-25 00:28:00'),
(4, 'Miguel', 'miguelA12345@gmail.com', '123456', '', '2024-08-31 02:21:52', '2024-08-31 02:21:52'),
(5, 'Carlos ', 'CarlosA1234563@gmail.com', '987654', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'Rene ', 'rene@gmail.com', 'qwerty', '', '2024-08-30 20:06:36', '0000-00-00 00:00:00'),
(7, '', '', '', '', '2024-08-31 14:41:47', '0000-00-00 00:00:00'),
(8, 'pepe x', 'pepex@gmail.com', '123456', '', '2024-09-11 19:12:52', '0000-00-00 00:00:00'),
(9, 'Margarita Garzon', 'MargaritaGarzon23@gmail.com', 'qwerty', '', '2024-09-29 18:38:47', '0000-00-00 00:00:00'),
(10, 'Sandra Amaya', 'SandraAmaya222@gmail.com', 'qwerty', '', '2024-09-29 19:07:41', '0000-00-00 00:00:00');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `t_productos`
--
ALTER TABLE `t_productos`
  ADD PRIMARY KEY (`id_producto`);

--
-- Indices de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `t_productos`
--
ALTER TABLE `t_productos`
  MODIFY `id_producto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;

--
-- AUTO_INCREMENT de la tabla `t_usuarios`
--
ALTER TABLE `t_usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
