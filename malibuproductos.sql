-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tiempo de generación: 25-04-2015 a las 18:25:25
-- Versión del servidor: 5.6.24
-- Versión de PHP: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de datos: `malibuproductos`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_imagens`
--

CREATE TABLE IF NOT EXISTS `tabla_imagens` (
  `id_imagen` int(11) NOT NULL,
  `id_prod` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL,
  `titulo` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_imagens`
--

INSERT INTO `tabla_imagens` (`id_imagen`, `id_prod`, `imagen`, `titulo`) VALUES
(10, 1000, 'malibu-original.jpg', 'Malibu Original'),
(12, 1001, 'malibu-black.jpg', 'Malibu Black');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tabla_productos`
--

CREATE TABLE IF NOT EXISTS `tabla_productos` (
  `id_prod` int(11) NOT NULL,
  `nombre` varchar(30) NOT NULL,
  `descripcion` varchar(350) NOT NULL,
  `precios` int(11) NOT NULL,
  `unid` int(11) NOT NULL,
  `imagen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `tabla_productos`
--

INSERT INTO `tabla_productos` (`id_prod`, `nombre`, `descripcion`, `precios`, `unid`, `imagen`) VALUES
(1000, 'Malibu Original', 'MALIBU ORIGINAL no hay nada como el original , y MALIBU no solo es un original , es ron 
  caribeño de mayor venta en el mundo con sabor a coco natural. El sabor de Malibu es el sol en una botella suave , sabor de coco fresco, 
  con un final dulce perfecto para traer la isla bañada por el sol a cualquier hora.', 180, 7, 'malibu-original.jpg'),

(1001, 'Malibu Black', 'MALIBU BLACK combina el sabor de coco liso que usted ama con mayor prueba de dulzura y menos para un sabor 
  más audaz del Caribe.', 210, 8, 'malibu-black.jpg'),

(1002, 'Malibu Red', 'MALIBU RED una deliciosa mezcla y plata ardiente tequila presentada a usted en 
  colaboración con la cantante ganadora del premio Grammy , compositor y actor Ne-Yo. 
  Disfruta de una noche de verano rojo caliente en cualquier momento y en cualquier lugar.', 250, 12, 'malibu-red.jpg'),

(1003, 'Malibu Island Spiced', 'Malibu Island una mezcla característica de Malibu de ron del Caribe y el 
  licor de coco con especias , vainilla luz ahumado, canela y un toque de dulzura natural con 
  Truvia, edulcorante sin calorías. El resultado es una alternativa de ron especiado baja en calorías, lleno de sabor.', 220, 18, 'malibu-island-spiced.jpg'),

(1004, 'Malibu Sunshine', 'MALIBU SUNSHINE es una muestra de sol con cada sorbo. El mismo ron caribeño te 
  enamorará con un toque sunkissed de sabores cítricos. Cuando limón, lima y coco se juntan, es una de las partes en cada botella.', 210, 22, 'malibu-sunshine.jpg'),

(1005, 'Malibu Tropical Banana', 'Malibu TROPICAL BANANA ese sabor, ese ritmo, esa energía del Caribe : está en cada botella. Añadir sabor a plátano y cremosa que tenga el espíritu 
  perfecta para todas las ocasiones.', 280, 14, 'malibu-banana.jpg'),

(1006, 'Malibu Passion Fruit', 'MALIBU PASSION FRUIT completa, madura sabor fruta de la pasión se reúne ron caribeño suave. Ese es el ron para las personas con una pasión por la vida.', 245, 8, 'malibu-passion-fruit.jpg'),

(1007, 'Malibu Peach Sparkler', 'MALIBU PEACH SPARKLER combina MALIBU con la frescura del agua de coco y el sabor del melocotón suave y les infunde con burbujas refrescantes.', 300, 3, 'malibu-peach.jpg');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tabla_imagens`
--
ALTER TABLE `tabla_imagens`
  ADD PRIMARY KEY (`id_imagen`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
