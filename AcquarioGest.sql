-- phpMyAdmin SQL Dump
-- version 4.0.6
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generato il: Nov 03, 2013 alle 13:42
-- Versione del server: 5.5.33
-- Versione PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `AcquarioGest`
--
CREATE DATABASE IF NOT EXISTS `AcquarioGest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `AcquarioGest`;

-- --------------------------------------------------------

--
-- Struttura della tabella `Acquarium`
--

CREATE TABLE `Acquarium` (
  `idAcquario` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Height` int(11) DEFAULT '0',
  `Width` int(11) DEFAULT '0',
  `Depth` int(11) DEFAULT '0',
  `Liters` int(11) DEFAULT '0',
  `idUser` int(11) NOT NULL,
  PRIMARY KEY (`idAcquario`,`idUser`),
  KEY `fk_Acquarium_User1_idx` (`idUser`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dump dei dati per la tabella `Acquarium`
--

INSERT INTO `Acquarium` (`idAcquario`, `Name`, `Height`, `Width`, `Depth`, `Liters`, `idUser`) VALUES
(1, 'Askoll 100', 0, 0, 0, 0, 0),
(2, 'Asckool 100', 0, 0, 0, 0, 1);

-- --------------------------------------------------------

--
-- Struttura della tabella `Fertilization`
--

CREATE TABLE `Fertilization` (
  `idFertilization` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL COMMENT ' /* comment truncated */ /*		*/',
  `Dosation` varchar(45) DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL,
  `idAcquario` int(11) NOT NULL,
  PRIMARY KEY (`idFertilization`,`idAcquario`),
  KEY `fk_Fertilization_Acquarium_idx` (`idAcquario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `Fish`
--

CREATE TABLE `Fish` (
  `idFish` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `PH_Min_Fish` int(11) DEFAULT NULL,
  `GH_Min_Fish` int(11) DEFAULT NULL,
  `KH_Min_Fish` int(11) DEFAULT NULL,
  `PH_Max_Fish` int(11) DEFAULT NULL,
  `GH_Max_Fish` int(11) DEFAULT NULL,
  `KH_Max_Fish` int(11) DEFAULT NULL,
  `Species` varchar(45) DEFAULT NULL,
  `Tipology` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idFish`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `Fish_has_Acquarium`
--

CREATE TABLE `Fish_has_Acquarium` (
  `Fish_idFish` int(11) NOT NULL,
  `Acquario_idAcquario` int(11) NOT NULL,
  PRIMARY KEY (`Fish_idFish`,`Acquario_idAcquario`),
  KEY `fk_Fish_has_Acquario_Acquario_idx` (`Acquario_idAcquario`),
  KEY `fk_Fish_has_Acquario_Fish_idx` (`Fish_idFish`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `Image`
--

CREATE TABLE `Image` (
  `idImage` int(11) NOT NULL,
  `Url` varchar(200) NOT NULL COMMENT ' /* comment truncated */ /*	*/',
  `Name` varchar(45) DEFAULT NULL,
  `Type` varchar(45) NOT NULL,
  `Plant_idPlant` int(11) NOT NULL,
  `Fish_idFish` int(11) NOT NULL,
  `Acquarium_idAcquario` int(11) NOT NULL,
  `Acquarium_idUser` int(11) NOT NULL,
  PRIMARY KEY (`idImage`,`Plant_idPlant`,`Fish_idFish`,`Acquarium_idAcquario`,`Acquarium_idUser`),
  KEY `fk_Image_Plant_idx` (`Plant_idPlant`),
  KEY `fk_Image_Fish_idx` (`Fish_idFish`),
  KEY `fk_Image_Acquarium_idx` (`Acquarium_idAcquario`,`Acquarium_idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `Light`
--

CREATE TABLE `Light` (
  `idLight` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Watt` varchar(45) DEFAULT NULL COMMENT ' /* comment truncated */ /*	*/',
  `Lumen` varchar(45) DEFAULT NULL,
  `Type` varchar(45) DEFAULT NULL COMMENT ' /* comment truncated */ /*	*/',
  `Start_Date` date DEFAULT NULL,
  `idAcquario` int(11) NOT NULL,
  PRIMARY KEY (`idLight`,`idAcquario`),
  KEY `fk_Light_Acquarium_idx` (`idAcquario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `Plant`
--

CREATE TABLE `Plant` (
  `idPlant` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(45) NOT NULL,
  `Description` varchar(45) DEFAULT NULL,
  `PH_Min_Plant` int(11) DEFAULT NULL,
  `GH_Min_Plant` int(11) DEFAULT NULL,
  `KH_Min_Plant` int(11) DEFAULT NULL,
  `PH_Max_Plant` int(11) DEFAULT NULL,
  `GH_Max_Plant` int(11) DEFAULT NULL,
  `KH_Max_Plant` int(11) DEFAULT NULL,
  `Species` varchar(45) DEFAULT NULL,
  `Color` varchar(45) DEFAULT NULL,
  `Tipology` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idPlant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struttura della tabella `Plant_has_Acquarium`
--

CREATE TABLE `Plant_has_Acquarium` (
  `Plant_idPlant` int(11) NOT NULL,
  `Acquario_idAcquario` int(11) NOT NULL,
  PRIMARY KEY (`Plant_idPlant`,`Acquario_idAcquario`),
  KEY `fk_Plant_has_Acquario_Acquario_idx` (`Acquario_idAcquario`),
  KEY `fk_Plant_has_Acquario_Plant_idx` (`Plant_idPlant`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Struttura della tabella `User`
--

CREATE TABLE `User` (
  `idUser` int(11) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `Name` varchar(45) DEFAULT NULL,
  `Surname` varchar(45) DEFAULT NULL,
  `Email` varchar(45) NOT NULL,
  `Phone` varchar(45) DEFAULT NULL,
  `Avatar` varchar(45) DEFAULT NULL,
  `Birthday` date DEFAULT NULL,
  `RegDate` datetime NOT NULL,
  PRIMARY KEY (`idUser`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dump dei dati per la tabella `User`
--

INSERT INTO `User` (`idUser`, `Username`, `Password`, `Name`, `Surname`, `Email`, `Phone`, `Avatar`, `Birthday`, `RegDate`) VALUES
(0, 'eamania', 'andrea', 'Andrea', 'Vignando', 'eamania02@gmail.com', '3204941479', NULL, NULL, '0000-00-00 00:00:00'),
(1, 'eamania', 'andrea', NULL, NULL, 'eamania02@gmail.com', NULL, NULL, NULL, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Struttura della tabella `Values`
--

CREATE TABLE `Values` (
  `idValues` int(11) NOT NULL AUTO_INCREMENT,
  `KH` int(11) DEFAULT NULL,
  `GH` int(11) DEFAULT NULL,
  `PH` int(11) DEFAULT NULL,
  `N02` int(11) DEFAULT NULL,
  `N03` int(11) DEFAULT NULL,
  `PO4` int(11) DEFAULT NULL,
  `Date` date DEFAULT NULL,
  `idAcquario` int(11) NOT NULL,
  PRIMARY KEY (`idValues`,`idAcquario`),
  KEY `fk_Values_Acquario_idx` (`idAcquario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `Fertilization`
--
ALTER TABLE `Fertilization`
  ADD CONSTRAINT `fk_Fertilization_Acquarium` FOREIGN KEY (`idAcquario`) REFERENCES `Acquarium` (`idAcquario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Fish_has_Acquarium`
--
ALTER TABLE `Fish_has_Acquarium`
  ADD CONSTRAINT `fk_Fish_has_Acquario_Acquario` FOREIGN KEY (`Acquario_idAcquario`) REFERENCES `Acquarium` (`idAcquario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Fish_has_Acquario_Fish` FOREIGN KEY (`Fish_idFish`) REFERENCES `Fish` (`idFish`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Image`
--
ALTER TABLE `Image`
  ADD CONSTRAINT `fk_Image_Acquarium1` FOREIGN KEY (`Acquarium_idAcquario`, `Acquarium_idUser`) REFERENCES `Acquarium` (`idAcquario`, `idUser`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Image_Fish` FOREIGN KEY (`Fish_idFish`) REFERENCES `Fish` (`idFish`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Image_Plant` FOREIGN KEY (`Plant_idPlant`) REFERENCES `Plant` (`idPlant`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Light`
--
ALTER TABLE `Light`
  ADD CONSTRAINT `fk_Light_Acquarium` FOREIGN KEY (`idAcquario`) REFERENCES `Acquarium` (`idAcquario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Plant_has_Acquarium`
--
ALTER TABLE `Plant_has_Acquarium`
  ADD CONSTRAINT `fk_Plant_has_Acquario_Acquario` FOREIGN KEY (`Acquario_idAcquario`) REFERENCES `Acquarium` (`idAcquario`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Plant_has_Acquario_Plant` FOREIGN KEY (`Plant_idPlant`) REFERENCES `Plant` (`idPlant`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limiti per la tabella `Values`
--
ALTER TABLE `Values`
  ADD CONSTRAINT `fk_Values_Acquario` FOREIGN KEY (`idAcquario`) REFERENCES `Acquarium` (`idAcquario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
