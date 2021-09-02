-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 09. Jul 2021 um 11:45
-- Server-Version: 10.4.19-MariaDB
-- PHP-Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kurseictbz_30715`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `creditpackages`
--

CREATE TABLE `creditpackages` (
  `id` int(11) NOT NULL,
  `kreditname` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `creditpackages`
--

INSERT INTO `creditpackages` (`id`, `kreditname`) VALUES
(1, 'Kredit Basic: 1k'),
(2, 'Kredit Basic: 2k'),
(3, 'Kredit Basic: 3k'),
(4, 'Kredit Basic: 4k'),
(5, 'Kredit Basic: 5k'),
(6, 'Kredit Basic: 6k'),
(7, 'Kredit Basic: 7k'),
(8, 'Kredit Basic: 8k'),
(9, 'Kredit Basic: 9k'),
(10, 'Kredit Basic: 10k'),
(11, 'Kredit Best: 1k'),
(12, 'Kredit Best: 2k'),
(13, 'Kredit Best: 3k'),
(14, 'Kredit Best: 4k'),
(15, 'Kredit Best: 5k'),
(16, 'Kredit Best: 6k'),
(17, 'Kredit Best: 7k'),
(18, 'Kredit Best: 8k'),
(19, 'Kredit Best: 9k'),
(20, 'Kredit Best: 10k'),
(21, 'Kredit Plus: 1k'),
(22, 'Kredit Plus: 2k'),
(23, 'Kredit Plus: 3k'),
(24, 'Kredit Plus: 4k'),
(25, 'Kredit Plus: 5k'),
(26, 'Kredit Plus: 6k'),
(27, 'Kredit Plus: 7k'),
(28, 'Kredit Plus: 8k'),
(29, 'Kredit Plus: 9k'),
(30, 'Kredit Plus: 10k'),
(31, 'Kredit Karma: 1k'),
(32, 'Kredit Karma: 2k'),
(33, 'Kredit Karma: 3k'),
(34, 'Kredit Karma: 4k'),
(35, 'Kredit Karma: 5k'),
(36, 'Kredit Karma: 6k'),
(37, 'Kredit Karma: 7k'),
(38, 'Kredit Karma: 8k'),
(39, 'Kredit Karma: 9k'),
(40, 'Kredit Karma: 10k');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `kreditdaten`
--

CREATE TABLE `kreditdaten` (
  `Id` int(11) NOT NULL,
  `Kundenname` text NOT NULL,
  `Telefon` text NOT NULL,
  `Email` text NOT NULL,
  `AnzahlRate` int(11) NOT NULL,
  `KreditPaket` int(11) NOT NULL,
  `VerleihStatus` tinyint(1) NOT NULL,
  `datum` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `kreditdaten`
--

INSERT INTO `kreditdaten` (`Id`, `Kundenname`, `Telefon`, `Email`, `AnzahlRate`, `KreditPaket`, `VerleihStatus`, `datum`) VALUES
(1, 'Frederick', '5558263698', 'fred@outlook.com', 3, 11, 1, '2021-08-23'),
(2, 'Brunner', '5634439837', 'Brunn.or@gmail.com', 3, 3, 0, '2021-08-23'),
(3, 'LS', '3423429285', 'hotsluz@hotmail.com', 10, 2, 0, '2021-12-06'),
(4, 'Sebastian', '3557708448', 'Seb.Peter@edulu.ch', 2, 5, 0, '2021-08-08'),
(5, 'SafeheavenAG', '0482940602', 'Safeheaven@chimpanzee.com', 1, 1, 0, '2021-07-24'),
(6, 'Astolfo', '2254759404', 'Astolfo@isekai.com', 1, 1, 0, '2021-07-24');

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `creditpackages`
--
ALTER TABLE `creditpackages`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `kreditdaten`
--
ALTER TABLE `kreditdaten`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `KreditPaket` (`KreditPaket`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `creditpackages`
--
ALTER TABLE `creditpackages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT für Tabelle `kreditdaten`
--
ALTER TABLE `kreditdaten`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
