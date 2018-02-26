-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Tiempo de generación: 20-02-2018 a las 16:58:05
-- Versión del servidor: 10.1.26-MariaDB
-- Versión de PHP: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `symfonypets`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tasques`
--

CREATE TABLE `tasques` (
  `id_tasca` int(11) NOT NULL,
  `titol` text COLLATE utf8_spanish2_ci NOT NULL,
  `descripcio` text COLLATE utf8_spanish2_ci NOT NULL,
  `data_inici` date NOT NULL,
  `data_final` date NOT NULL,
  `estat` text COLLATE utf8_spanish2_ci NOT NULL,
  `prioritat` text COLLATE utf8_spanish2_ci NOT NULL,
  `departament` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `tasques`
--

INSERT INTO `tasques` (`id_tasca`, `titol`, `descripcio`, `data_inici`, `data_final`, `estat`, `prioritat`, `departament`) VALUES
(1, 'Redisseny pàgina producte', '', '2018/02/26', '2018/02/28', 'En procés', 'Mitja', 'Programació i disseny'),
(2, 'Maquetació landing', '', '2018/02/27', '2018/03/02', 'En procés', 'Baixa', 'Programació i disseny');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `tasques`
--
ALTER TABLE `tasques`
  ADD PRIMARY KEY (`id_tasca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tasques`
--
ALTER TABLE `tasques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

--
-- Estructura de tabla para la tabla `subtasques`
--

CREATE TABLE `subtasques` (
  `id_subtasca` int(11) NOT NULL,
  `id_tasca` int(11) NOT NULL,
  `titol` text COLLATE utf8_spanish2_ci NOT NULL,
  `descripcio` text COLLATE utf8_spanish2_ci NOT NULL,
  `data_inici` date NOT NULL,
  `data_final` date NOT NULL,
  `prioritat` text COLLATE utf8_spanish2_ci NOT NULL,
  `usuaris` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `subtasques`
--

INSERT INTO `subtasques` (`id_subtasca`, `id_tasca`, `titol`, `descripcio`, `data_inici`, `data_final`, `prioritat`, `usuaris`) VALUES
(1, 1, 'Redisseny pàgina producte', '', '2018/02/26', '2018/02/28',  'Mitja', 'usuaris'),
(2, 2, 'Maquetació landing', '', '2018/02/27', '2018/03/02', 'Baixa', 'usuaris');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `subtasques`
--
ALTER TABLE `subtasques`
  ADD PRIMARY KEY (`id_subtasca`),
  ADD FOREIGN KEY (`id_tasca`) REFERENCES `tasques`(`id_tasca`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `subtasques`
--
ALTER TABLE `subtasques`
  MODIFY `id_subtasca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;


--
-- Estructura de tabla para la tabla `usuaris`
--

CREATE TABLE `usuaris` (
  `id_usuari` int(11) NOT NULL,
  `nom` text COLLATE utf8_spanish2_ci NOT NULL,
  `cognoms` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` text COLLATE utf8_spanish2_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Volcado de datos para la tabla `usuaris`
--

INSERT INTO `tasques` (`id_usuari`, `nom`, `cognoms`, `email`, `perfil`) VALUES
(1, 'Victor', 'Auyanet', 'victor@symfonypets.com', 'superadministrador'),
(2, 'Judit', 'Moya', 'judit@symfonypets.com', 'superadministrador');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id_usuari`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `tasques`
--
ALTER TABLE `usuaris`
  MODIFY `id_usuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
