-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 28. Feb 2019 um 17:53
-- Server-Version: 5.5.59-0+deb7u1
-- PHP-Version: 5.4.45-0+deb7u12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `jugendWettet`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Abstimmung`
--

CREATE TABLE IF NOT EXISTS `Abstimmung` (
  `SpielID` int(11) NOT NULL,
  `TeamID` int(11) NOT NULL,
  `Auswahl` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Spiel`
--

CREATE TABLE IF NOT EXISTS `Spiel` (
  `Name` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL,
  `offeneAbstimmung` tinyint(1) NOT NULL,
  `Sieger` tinyint(4) NOT NULL,
  `Name1` varchar(100) NOT NULL,
  `Name2` varchar(100) NOT NULL,
  `Name3` varchar(100) NOT NULL,
  `Name4` varchar(100) NOT NULL,
  `Mobbing` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `Spiel`
--

INSERT INTO `Spiel` (`Name`, `Id`, `offeneAbstimmung`, `Sieger`, `Name1`, `Name2`, `Name3`, `Name4`, `Mobbing`) VALUES
('Schlag den ', 32, 0, 0, 'Stefan H', 'Markus P', 'Lukas N', 'Silvanus', 0),
('Schlag den ', 32, 0, 0, 'Stefan H', 'Markus P', 'Lukas N', 'Silvanus', 0);

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `Team`
--

CREATE TABLE IF NOT EXISTS `Team` (
  `ShortID` int(11) NOT NULL,
  `UID` int(11) NOT NULL,
  `Name1` varchar(100) NOT NULL,
  `Name2` varchar(100) NOT NULL,
  `AnzahlStimmen` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Daten für Tabelle `Team`
--

INSERT INTO `Team` (`ShortID`, `UID`, `Name1`, `Name2`, `AnzahlStimmen`) VALUES
(1, 0, '', '', 0),
(2, 0, '3', '4', 0),
(1, 1, '', '', 11),
(2, 21, '3', '4', 22);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
