-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Servidor: localhost
-- Temps de generació: 23-03-2018 a les 17:51:35
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
-- Estructura de la taula `departament`
--

CREATE TABLE `departament` (
  `id_departament` int(11) NOT NULL,
  `nom` text COLLATE utf8_spanish2_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `departament`
--

INSERT INTO `departament` (`id_departament`, `nom`) VALUES
(1, 'Programació'),
(2, 'Disseny'),
(3, 'Contingut');

-- --------------------------------------------------------

--
-- Estructura de la taula `subtasques`
--

CREATE TABLE `subtasques` (
  `idSubtasca` int(11) NOT NULL,
  `idTasca` int(11) NOT NULL,
  `titol` text COLLATE utf8_spanish2_ci NOT NULL,
  `descripcio` text COLLATE utf8_spanish2_ci NOT NULL,
  `data_inici` date NOT NULL,
  `data_final` date NOT NULL,
  `prioritat` text COLLATE utf8_spanish2_ci NOT NULL,
  `usuaris` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `subtasques`
--

INSERT INTO `subtasques` (`idSubtasca`, `idTasca`, `titol`, `descripcio`, `data_inici`, `data_final`, `prioritat`, `usuaris`) VALUES
(1, 1, 'Redisseny pàgina producte', '', '2018-02-26', '2018-02-28', 'Mitja', 0),
(2, 2, 'Maquetació landing', '', '2018-02-27', '2018-03-02', 'Baixa', 0),
(9, 1, 'vbngfh', 'gnhfgnhf', '2013-01-01', '2016-01-01', 'baixa', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `tasques`
--

CREATE TABLE `tasques` (
  `idTasca` int(11) NOT NULL,
  `titol` text COLLATE utf8_spanish2_ci NOT NULL,
  `descripcio` text COLLATE utf8_spanish2_ci NOT NULL,
  `data_inici` date NOT NULL,
  `data_final` date NOT NULL,
  `estat` text COLLATE utf8_spanish2_ci NOT NULL,
  `prioritat` text COLLATE utf8_spanish2_ci NOT NULL,
  `departament` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `tasques`
--

INSERT INTO `tasques` (`idTasca`, `titol`, `descripcio`, `data_inici`, `data_final`, `estat`, `prioritat`, `departament`) VALUES
(1, 'Redisseny pàgina producte', 'dfhfgh', '2018-02-26', '2018-02-28', 'Acabada', 'mitja', 2),
(2, 'Maquetació landing', '', '2018-02-27', '2018-03-02', 'En procés', 'Baixa', 1),
(3, 'Crear formulari', '', '2018-04-01', '2018-07-01', 'En procés', 'baixa', 1),
(5, 'Afegir imatge home', 'sdfgg', '2013-01-01', '2013-01-01', 'dfgd', 'alta', 1),
(6, 'fghj', 'vmbhmbn', '2015-01-01', '2018-01-05', 'cvngfbv', 'alta', 3);

-- --------------------------------------------------------

--
-- Estructura de la taula `usuaris`
--

CREATE TABLE `usuaris` (
  `id_usuari` int(11) NOT NULL,
  `nom` text COLLATE utf8_spanish2_ci NOT NULL,
  `cognoms` text COLLATE utf8_spanish2_ci NOT NULL,
  `email` text COLLATE utf8_spanish2_ci NOT NULL,
  `role` text COLLATE utf8_spanish2_ci NOT NULL,
  `password` text COLLATE utf8_spanish2_ci NOT NULL,
  `departament` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish2_ci;

--
-- Bolcant dades de la taula `usuaris`
--

INSERT INTO `usuaris` (`id_usuari`, `nom`, `cognoms`, `email`, `role`, `password`, `departament`) VALUES
(1, 'Victor', 'Auyanet', 'victor.auyanet@gmail.com', 'ADMIN', '$2y$10$IJ5Wm6cV4TCGUPdYeX7Ele6xh/7lsY1tuK1NCH3iT9e8RDLB3lRyG', 1),
(2, 'Judit', 'Moya', 'judit.7492@gmail.com', 'ADMIN', '$2y$10$IJ5Wm6cV4TCGUPdYeX7Ele6xh/7lsY1tuK1NCH3iT9e8RDLB3lRyG', 1),
(4, 'Exemple', 'sdgsdff', 'asf@gmail.com', 'DISSENY', '$1$jZOlVnoe$D6p7x9mqzmxCnBGmdoHPu1', 2);

--
-- Indexos per taules bolcades
--

--
-- Index de la taula `departament`
--
ALTER TABLE `departament`
  ADD PRIMARY KEY (`id_departament`);

--
-- Index de la taula `subtasques`
--
ALTER TABLE `subtasques`
  ADD PRIMARY KEY (`idSubtasca`),
  ADD KEY `id_tasca` (`idTasca`),
  ADD KEY `usuaris` (`usuaris`);

--
-- Index de la taula `tasques`
--
ALTER TABLE `tasques`
  ADD PRIMARY KEY (`idTasca`),
  ADD KEY `departament` (`departament`);

--
-- Index de la taula `usuaris`
--
ALTER TABLE `usuaris`
  ADD PRIMARY KEY (`id_usuari`),
  ADD KEY `departament` (`departament`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `departament`
--
ALTER TABLE `departament`
  MODIFY `id_departament` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT per la taula `subtasques`
--
ALTER TABLE `subtasques`
  MODIFY `idSubtasca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la taula `tasques`
--
ALTER TABLE `tasques`
  MODIFY `idTasca` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la taula `usuaris`
--
ALTER TABLE `usuaris`
  MODIFY `id_usuari` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
