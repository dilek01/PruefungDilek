-- --------------------------------------------------------
-- Host:                         192.168.99.100
-- Server Version:               10.3.6-MariaDB-1:10.3.6+maria~jessie - mariadb.org binary distribution
-- Server Betriebssystem:        debian-linux-gnu
-- HeidiSQL Version:             9.5.0.5196
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportiere Struktur von Tabelle db.Kategorie_Auswahl
CREATE TABLE IF NOT EXISTS `Kategorie_Auswahl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8 DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle db.Kategorie_Auswahl: ~2 rows (ungefähr)
/*!40000 ALTER TABLE `Kategorie_Auswahl` DISABLE KEYS */;
INSERT INTO `Kategorie_Auswahl` (`id`, `Name`) VALUES
	(2, 'Wohnen'),
	(3, 'Nahrung'),
	(5, 'Elektronik');
/*!40000 ALTER TABLE `Kategorie_Auswahl` ENABLE KEYS */;

-- Exportiere Struktur von Tabelle db.Kundendaten
CREATE TABLE IF NOT EXISTS `Kundendaten` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) CHARACTER SET utf8 NOT NULL,
  `Rechtsform` varchar(150) CHARACTER SET utf8 DEFAULT NULL,
  `Unterzeile` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Kurztext` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `Profil` text CHARACTER SET utf8 DEFAULT NULL,
  `Status` tinyint(4) DEFAULT NULL,
  `Kategorie_Auswahl` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- Exportiere Daten aus Tabelle db.Kundendaten: ~3 rows (ungefähr)
/*!40000 ALTER TABLE `Kundendaten` DISABLE KEYS */;
INSERT INTO `Kundendaten` (`id`, `Name`, `Rechtsform`, `Unterzeile`, `Kurztext`, `Profil`, `Status`, `Kategorie_Auswahl`) VALUES
	(1, 'Edeka', 'AG', 'Edeka AG & Co. KG', 'Edeka Konzern', 'Die Edeka-Gruppe ist ein genossenschaftlich organisierter kooperativer Unternehmensverbund im deutschen Einzelhandel.', 0, 3),
	(2, 'Ikea', 'OHG', 'Entdecke die Vielfalt von Ikea', 'Möbelhaus', 'Das größte Möbelhaus Deutschlands', 1, 2),
	(4, 'Media Markt', 'GmbH', 'MediaMarktSaturn Retail Group', 'Media Markt Konzern', 'Media-Saturn (Eigenbezeichnung seit Februar 2017 MediaMarktSaturn Retail Group, handelsrechtlich Media-Saturn-Holding GmbH) ist Betreiber einer deutschen Elektronik-Fachmarktkette, die zugleich die größte Europas ist.[2][3] Das Unternehmen fasst die ehemals eigenständigen Elektrohandelsketten Media Markt (Eigenschreibweise MediaMarkt) und Saturn (früher Saturn-Hansa) zusammen. 2011 übernahm es zudem den Onlinehändler redcoon.[4] Das Unternehmen gehört zum Ceconomy-Konzern (ehemals Metro Group). Die Hauptverwaltung befindet sich in Ingolstadt. ', 1, 5);
/*!40000 ALTER TABLE `Kundendaten` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
