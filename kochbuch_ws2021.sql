-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Erstellungszeit: 11. Jan 2021 um 11:33
-- Server-Version: 10.4.10-MariaDB
-- PHP-Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Datenbank: `kochbuch_ws2021`
--

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `personen`
--

CREATE TABLE `personen` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `altersan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `rezepte`
--

CREATE TABLE `rezepte` (
  `id` int(3) NOT NULL,
  `name` varchar(50) NOT NULL,
  `kurztext` text NOT NULL,
  `dauer` varchar(10) NOT NULL,
  `schwierig` varchar(50) NOT NULL,
  `bild` varchar(50) NOT NULL,
  `kategorie` varchar(50) NOT NULL,
  `beschreibung` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `rezepte`
--

INSERT INTO `rezepte` (`id`, `name`, `kurztext`, `dauer`, `schwierig`, `bild`, `kategorie`, `beschreibung`) VALUES
(1, 'Baozi', 'schmecken auch noch nach dem auftauen gut', '2 Stunden', 'schwer', 'bild1.jpg', 'Teigtaschen', 'chinesische Teigtaschen, häufig mit Gemüse gefüllt'),
(2, 'jiaozi', 'schmecken auch noch nach dem auftauen nicht mehr gut', '2 Stunden', 'sehr schwer', 'bild1.jpg', 'Teigtaschen', 'chinesische Teigtaschen, häufig in Suppe serviert'),
(28, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(29, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(30, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(31, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(32, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(33, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(34, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(35, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(36, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(37, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(38, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '', 'DC', 'jbakcjbqlj'),
(39, 'Kuchen', 'lecker Kuchen ', '38', 'ja', '1608720009AA04FollowMeKlein.jpg', 'DC', 'jbakcjbqlj'),
(40, 'Kuchen', 'lecker Kuchen ', '37', 'ja', '1610360726AA04FollowMeBanner.jpg', 'DC', 'jbakcjbqlj');

-- --------------------------------------------------------

--
-- Tabellenstruktur für Tabelle `zutaten`
--

CREATE TABLE `zutaten` (
  `id` int(3) NOT NULL,
  `menge` int(4) NOT NULL,
  `einheit` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `rezeptid` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Daten für Tabelle `zutaten`
--

INSERT INTO `zutaten` (`id`, `menge`, `einheit`, `name`, `rezeptid`) VALUES
(1, 300, 'Gramm', 'Mehl', 1),
(2, 1, 'Päckchen', 'Hefe', 1),
(3, 300, 'ml', 'Wasser', 2);

--
-- Indizes der exportierten Tabellen
--

--
-- Indizes für die Tabelle `personen`
--
ALTER TABLE `personen`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  ADD PRIMARY KEY (`id`);

--
-- Indizes für die Tabelle `zutaten`
--
ALTER TABLE `zutaten`
  ADD PRIMARY KEY (`id`),
  ADD KEY `rezeptid` (`rezeptid`);

--
-- AUTO_INCREMENT für exportierte Tabellen
--

--
-- AUTO_INCREMENT für Tabelle `personen`
--
ALTER TABLE `personen`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT für Tabelle `rezepte`
--
ALTER TABLE `rezepte`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT für Tabelle `zutaten`
--
ALTER TABLE `zutaten`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
