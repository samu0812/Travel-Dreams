-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 12:46 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_dreams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `personas_id_usuario` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clientes`
--

CREATE TABLE `clientes` (
  `id_clientes` int(11) NOT NULL,
  `personas_id_usuario` varchar(45) NOT NULL,
  `password` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `colectivo`
--

CREATE TABLE `colectivo` (
  `id_colectivo` int(11) NOT NULL,
  `transporte_id_transporte` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contratacion`
--

CREATE TABLE `contratacion` (
  `id_contratacion` varchar(45) NOT NULL,
  `usuario_cliente_id_cliente` int(11) NOT NULL,
  `paquete_id_paquete` varchar(45) DEFAULT NULL,
  `fecha_contratacion` varchar(45) DEFAULT NULL,
  `fecha_alta` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `cuota`
--

CREATE TABLE `cuota` (
  `id_cuota` int(11) NOT NULL,
  `numero_cuota` varchar(45) DEFAULT NULL,
  `monto_cuota` varchar(45) DEFAULT NULL,
  `fecha_pago_cuota` varchar(45) DEFAULT NULL,
  `metodo_pago_id` int(11) DEFAULT NULL,
  `pagos_id_pago` int(11) DEFAULT NULL,
  `vencimiento_cuota` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `hospedaje`
--

CREATE TABLE `hospedaje` (
  `id_hospedaje` int(11) NOT NULL,
  `direccion` varchar(255) DEFAULT NULL,
  `pension` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL,
  `lugares_id_destinos` int(11) DEFAULT NULL,
  `nombre_hospedaje` varchar(45) DEFAULT NULL,
  `estrellas` varchar(45) DEFAULT NULL,
  `contacto` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lugares`
--

CREATE TABLE `lugares` (
  `id_lugar` int(11) NOT NULL,
  `ubicacion` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `metodo_pago`
--

CREATE TABLE `metodo_pago` (
  `id_metodo_pago` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `mis_reservas`
--

CREATE TABLE `mis_reservas` (
  `id_reservas` int(11) NOT NULL,
  `historial` varchar(255) DEFAULT NULL,
  `estado_paquete` varchar(255) DEFAULT NULL,
  `descripcion` text DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pago`
--

CREATE TABLE `pago` (
  `id_pago` int(11) NOT NULL,
  `cuotas` int(11) DEFAULT NULL,
  `factura` varchar(45) DEFAULT NULL,
  `total` float DEFAULT NULL,
  `contratacion_id_contratacion` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paquetes`
--

CREATE TABLE `paquetes` (
  `id_paquete` int(11) NOT NULL,
  `disponibilidad` varchar(255) DEFAULT NULL,
  `cantidad_personas` int(11) DEFAULT NULL,
  `precio` float DEFAULT NULL,
  `fecha_inicio` date DEFAULT NULL,
  `fecha_final` date DEFAULT NULL,
  `fecha_vigencia` varchar(45) DEFAULT NULL,
  `fecha_fin_vig` varchar(45) DEFAULT NULL,
  `fecha_alta` varchar(45) DEFAULT NULL,
  `usuario_admin_id_admin` int(11) DEFAULT NULL,
  `fecha_baja_paquete` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paquetes_has_destinos`
--

CREATE TABLE `paquetes_has_destinos` (
  `id_paquete_lugares` varchar(43) NOT NULL,
  `paquetes_id_paquetes` int(11) DEFAULT NULL,
  `destinos_id_lugares` int(11) DEFAULT NULL,
  `transporte_id_transporte` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `personas`
--

CREATE TABLE `personas` (
  `id_usuario` int(11) NOT NULL,
  `fecha_nacimiento` varchar(45) DEFAULT NULL,
  `direccion` varchar(45) DEFAULT NULL,
  `telefono` int(11) DEFAULT NULL,
  `correo` varchar(45) DEFAULT NULL,
  `nombre` varchar(45) DEFAULT NULL,
  `apellido` varchar(45) DEFAULT NULL,
  `dni` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transporte`
--

CREATE TABLE `transporte` (
  `id_transporte` int(11) NOT NULL,
  `tipo_pasajero` varchar(45) DEFAULT NULL,
  `escala` varchar(45) DEFAULT NULL,
  `clase` varchar(45) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `vuelos`
--

CREATE TABLE `vuelos` (
  `id_vuelo` int(11) NOT NULL,
  `mascotas` varchar(45) DEFAULT NULL,
  `transporte_id_transporte` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`,`personas_id_usuario`);

--
-- Indexes for table `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`id_clientes`,`personas_id_usuario`);

--
-- Indexes for table `colectivo`
--
ALTER TABLE `colectivo`
  ADD PRIMARY KEY (`id_colectivo`),
  ADD KEY `transporte_id_transporte` (`transporte_id_transporte`);

--
-- Indexes for table `contratacion`
--
ALTER TABLE `contratacion`
  ADD PRIMARY KEY (`id_contratacion`);

--
-- Indexes for table `cuota`
--
ALTER TABLE `cuota`
  ADD PRIMARY KEY (`id_cuota`);

--
-- Indexes for table `hospedaje`
--
ALTER TABLE `hospedaje`
  ADD PRIMARY KEY (`id_hospedaje`);

--
-- Indexes for table `lugares`
--
ALTER TABLE `lugares`
  ADD PRIMARY KEY (`id_lugar`);

--
-- Indexes for table `metodo_pago`
--
ALTER TABLE `metodo_pago`
  ADD PRIMARY KEY (`id_metodo_pago`);

--
-- Indexes for table `mis_reservas`
--
ALTER TABLE `mis_reservas`
  ADD PRIMARY KEY (`id_reservas`);

--
-- Indexes for table `pago`
--
ALTER TABLE `pago`
  ADD PRIMARY KEY (`id_pago`);

--
-- Indexes for table `paquetes`
--
ALTER TABLE `paquetes`
  ADD PRIMARY KEY (`id_paquete`);

--
-- Indexes for table `paquetes_has_destinos`
--
ALTER TABLE `paquetes_has_destinos`
  ADD PRIMARY KEY (`id_paquete_lugares`);

--
-- Indexes for table `personas`
--
ALTER TABLE `personas`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indexes for table `transporte`
--
ALTER TABLE `transporte`
  ADD PRIMARY KEY (`id_transporte`);

--
-- Indexes for table `vuelos`
--
ALTER TABLE `vuelos`
  ADD PRIMARY KEY (`id_vuelo`),
  ADD KEY `transporte_id_transporte` (`transporte_id_transporte`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
