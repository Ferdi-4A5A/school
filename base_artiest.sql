-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server versie:                10.1.17-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Versie:              9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Databasestructuur van Artiest wordt geschreven
CREATE DATABASE IF NOT EXISTS `Artiest` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `Artiest`;

-- Structuur van  tabel Artiest.Album wordt geschreven
CREATE TABLE IF NOT EXISTS `Album` (
  `AlbumID` int(11) NOT NULL AUTO_INCREMENT,
  `ArtiestID` int(11) NOT NULL DEFAULT '0',
  `AlbumUitgave` date NOT NULL,
  `AlbumType` varchar(50) NOT NULL DEFAULT '0',
  `AlbumNaam` varchar(50) NOT NULL DEFAULT '0',
  `AlbumPrijs` decimal(10,2) NOT NULL DEFAULT '0.00',
  PRIMARY KEY (`AlbumID`),
  KEY `ArtiestID` (`ArtiestID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporteren was gedeselecteerd
-- Structuur van  tabel Artiest.AlbumGenre wordt geschreven
CREATE TABLE IF NOT EXISTS `AlbumGenre` (
  `AlbumGenreID` int(11) NOT NULL AUTO_INCREMENT,
  `AlbumID` int(11) NOT NULL,
  `GenreID` int(11) NOT NULL,
  PRIMARY KEY (`AlbumGenreID`),
  KEY `AlbumID` (`AlbumID`),
  KEY `GenreID` (`GenreID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporteren was gedeselecteerd
-- Structuur van  tabel Artiest.Artiest wordt geschreven
CREATE TABLE IF NOT EXISTS `Artiest` (
  `ArtiestID` int(11) NOT NULL AUTO_INCREMENT,
  `ArtiestNaam` varchar(50) NOT NULL,
  `ArtiestTelefoon` varchar(15) NOT NULL,
  `ArtiestEmail` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ArtiestID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporteren was gedeselecteerd
-- Structuur van  tabel Artiest.Genre wordt geschreven
CREATE TABLE IF NOT EXISTS `Genre` (
  `GenreID` int(11) NOT NULL AUTO_INCREMENT,
  `GenreTitle` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`GenreID`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Data exporteren was gedeselecteerd
-- Structuur van  tabel Artiest.Platenlabel wordt geschreven
CREATE TABLE IF NOT EXISTS `Platenlabel` (
  `PlatenlabelID` int(11) NOT NULL AUTO_INCREMENT,
  `ArtiestID` int(11) NOT NULL,
  `PlatenlabelNaam` varchar(50) NOT NULL DEFAULT '0',
  `PlatenlabelKleur` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`PlatenlabelID`),
  KEY `ArtiestID` (`ArtiestID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporteren was gedeselecteerd
-- Structuur van  tabel Artiest.Studio wordt geschreven
CREATE TABLE IF NOT EXISTS `Studio` (
  `StudioID` int(11) NOT NULL AUTO_INCREMENT,
  `ArtiestID` int(11) NOT NULL DEFAULT '0',
  `StudioNaam` varchar(50) NOT NULL DEFAULT '0',
  `StudioTelefoon` varchar(15) NOT NULL DEFAULT '0',
  `StudioEmail` varchar(50) NOT NULL DEFAULT '0',
  PRIMARY KEY (`StudioID`),
  KEY `ArtiestID` (`ArtiestID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Data exporteren was gedeselecteerd
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
