-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Temps de generació: 26-02-2018 a les 16:22:10
-- Versió del servidor: 10.1.28-MariaDB
-- Versió de PHP: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `symfonypets`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `subtasques`
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
-- Bolcant dades de la taula `subtasques`
--

INSERT INTO `subtasques` (`id_subtasca`, `id_tasca`, `titol`, `descripcio`, `data_inici`, `data_final`, `prioritat`, `usuaris`) VALUES
(1, 1, 'Redisseny pàgina producte', '', '2018-02-26', '2018-02-28', 'Mitja', 'usuaris'),
(2, 2, 'Maquetació landing', '', '2018-02-27', '2018-03-02', 'Baixa', 'usuaris');

-- --------------------------------------------------------

--
-- Estructura de la taula `tasques`
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
-- Bolcant dades de la taula `tasques`
--

INSERT INTO `tasques` (`id_tasca`, `titol`, `descripcio`, `data_inici`, `data_final`, `estat`, `prioritat`, `departament`) VALUES
(1, 'Redisseny pàgina producte', '', '2018-02-26', '2018-02-28', 'En procés', 'Mitja', 'Programació i disseny'),
(2, 'Maquetació landing', '', '2018-02-27', '2018-03-02', 'En procés', 'Baixa', 'Programació i disseny');

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE TABLE `usuaris` (
  `id_usuari` int(11) NOT NULL,
  `nom` text COLLATE utf8_spanish2_ci NOT NULL,
  `cognoms` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` text COLLATE utf8_spanish2_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `usuaris`
--

INSERT INTO `usuaris` (`id_usuari`, `nom`, `cognoms`, `email`, `perfil`) VALUES
(1, 'Victor', 'Auyanet', 'victor@symfonypets.com', 'superadministrador'),
(2, 'Judit', 'Moya', 'judit@symfonypets.com', 'superadministrador');

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `subtasques`
--
ALTER TABLE `subtasques`
  ADD PRIMARY KEY (`id_subtasca`),
  ADD KEY `id_tasca` (`id_tasca`);

--
-- Index de la taula `tasques`
--
ALTER TABLE `tasques`
  ADD PRIMARY KEY (`id_tasca`);

--
-- Index de la taula `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id_usuari`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `subtasques`
--
ALTER TABLE `subtasques`
  MODIFY `id_subtasca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `tasques`
--
ALTER TABLE `tasques`
  MODIFY `id_tasca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT per la taula `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id_usuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Restriccions per taules bolcades
--

--
-- Restriccions per la taula `subtasques`
--
ALTER TABLE `subtasques`
  ADD CONSTRAINT `subtasques_ibfk_1` FOREIGN KEY (`id_tasca`) REFERENCES `tasques` (`id_tasca`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;