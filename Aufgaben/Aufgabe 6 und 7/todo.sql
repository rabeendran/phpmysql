-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Erstellungszeit: 21. Okt 2013 um 17:19
-- Server Version: 5.5.32
-- PHP-Version: 5.3.10-1ubuntu3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Datenbank: `todo`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `main`
--

CREATE TABLE IF NOT EXISTS `main` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `datum` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `anrede` char(200) NOT NULL,
  `vorname` char(200) NOT NULL,
  `name` char(200) NOT NULL,
  `thema` char(20) NOT NULL,
  `inhalt` char(200) NOT NULL,
  `erledigt` char(60) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Daten für Tabelle `main`
--

INSERT INTO `main` (`id`, `datum`, `anrede`, `vorname`, `name`, `thema`, `inhalt`, `erledigt`) VALUES
(1, '2013-10-21 17:18:14', 'Herr', 'Rajeevan', 'Rabeendran', 'Hausaufgaben', 'Muss noch die Datenbank Aufgabe machen,', 'nein'),
(3, '2013-10-21 17:20:24', 'Herr', 'Hans', 'Mustergrad', 'Einkaufen', 'Muss Brot und Wurst kaufen bis 23.10.2013.', 'Ja');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
