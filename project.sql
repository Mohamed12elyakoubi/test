-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 10 jan 2024 om 20:54
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `bier`
--

CREATE TABLE `bier` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL,
  `valt_onder_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `bier`
--

INSERT INTO `bier` (`id`, `naam`, `valt_onder_id`, `categorie_id`) VALUES
(1, 'Heineken', NULL, 1),
(2, 'Amstel', NULL, 1),
(3, 'Heineken 0.0', 1, 2),
(4, 'Heineken Silver', 1, 1),
(5, 'Grolsch', NULL, 1),
(6, 'Grolsch 0.0', 5, 2),
(7, 'Grolsch Radler', 5, 4),
(8, 'Grolsch Radler Citroen', 7, 4),
(9, 'Grolsch Radler Limoen', 7, 4),
(10, 'Grolsch Kanon', 5, 6),
(11, 'Grolsch Bokbier', 5, 7),
(12, 'Heineken Bokbier', 1, 7),
(13, 'Bavaria', NULL, 1),
(14, 'Bavaria 0.0', 13, 2);

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `categorie`
--

CREATE TABLE `categorie` (
  `id` int(11) NOT NULL,
  `naam` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `categorie`
--

INSERT INTO `categorie` (`id`, `naam`) VALUES
(1, 'Pils'),
(2, 'Alcoholvrij'),
(3, 'Blond'),
(4, 'Radler'),
(5, 'Dubbel'),
(6, 'Lager'),
(7, 'Bok');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `bier`
--
ALTER TABLE `bier`
  ADD PRIMARY KEY (`id`),
  ADD KEY `valt_onder_id` (`valt_onder_id`),
  ADD KEY `categorie_id` (`categorie_id`);

--
-- Indexen voor tabel `categorie`
--
ALTER TABLE `categorie`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `bier`
--
ALTER TABLE `bier`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT voor een tabel `categorie`
--
ALTER TABLE `categorie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Beperkingen voor geëxporteerde tabellen
--

--
-- Beperkingen voor tabel `bier`
--
ALTER TABLE `bier`
  ADD CONSTRAINT `bier_ibfk_1` FOREIGN KEY (`valt_onder_id`) REFERENCES `bier` (`id`),
  ADD CONSTRAINT `bier_ibfk_2` FOREIGN KEY (`categorie_id`) REFERENCES `categorie` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
