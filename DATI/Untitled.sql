SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `AcquarioGest` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `AcquarioGest` ;

-- -----------------------------------------------------
-- Table `AcquarioGest`.`User`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`User` (
  `idUser` INT NOT NULL,
  `Username` VARCHAR(45) NOT NULL,
  `Password` VARCHAR(45) NOT NULL,
  `Name` VARCHAR(45) NULL,
  `Surname` VARCHAR(45) NULL,
  `Email` VARCHAR(45) NOT NULL,
  `Phone` VARCHAR(45) NULL,
  `Avatar` VARCHAR(45) NULL,
  `Birthday` DATE NULL,
  `RegDate` DATETIME NOT NULL,
  PRIMARY KEY (`idUser`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Acquarium`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Acquarium` (
  `idAcquario` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Height` DOUBLE NULL DEFAULT 0,
  `Width` DOUBLE NULL DEFAULT 0,
  `Depth` DOUBLE NULL DEFAULT 0,
  `Liters` DOUBLE NULL DEFAULT 0,
  `idUser` DOUBLE NOT NULL,
  PRIMARY KEY (`idAcquario`, `idUser`),
  INDEX `fk_Acquarium_User1_idx` (`idUser` ASC))
ENGINE = MyISAM;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Values`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Values` (
  `idValues` INT NOT NULL AUTO_INCREMENT,
  `KH` DOUBLE NULL,
  `GH` DOUBLE NULL,
  `PH` DOUBLE NULL,
  `N02` DOUBLE NULL,
  `N03` DOUBLE NULL,
  `PO4` DOUBLE NULL,
  `Date` DATE NULL,
  `idAcquario` INT NOT NULL,
  PRIMARY KEY (`idValues`, `idAcquario`),
  INDEX `fk_Values_Acquario_idx` (`idAcquario` ASC),
  CONSTRAINT `fk_Values_Acquario`
    FOREIGN KEY (`idAcquario`)
    REFERENCES `AcquarioGest`.`Acquarium` (`idAcquario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Fish`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Fish` (
  `idFish` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `ScientificName` VARCHAR(155) NULL,
  `Family` VARCHAR(155) NULL,
  `Location` VARCHAR(155) NULL,
  `AdultSizeMin` DOUBLE NULL,
  `AdultSizeMax` DOUBLE NULL,
  `TankLitersMin` DOUBLE NULL,
  `TemperatureMIn` DOUBLE NULL,
  `TemperatureMax` DOUBLE NULL,
  `Temperament` VARCHAR(45) NULL,
  `TemperamentDetails` LONGTEXT NULL,
  `BeginnerLike` VARCHAR(45) NULL,
  `WaterArea` VARCHAR(45) NULL,
  `Diet` LONGTEXT NULL,
  `PH_Min_Fish` DOUBLE NULL,
  `GH_Min_Fish` DOUBLE NULL,
  `KH_Min_Fish` DOUBLE NULL,
  `PH_Max_Fish` DOUBLE NULL,
  `GH_Max_Fish` DOUBLE NULL,
  `KH_Max_Fish` DOUBLE NULL,
  PRIMARY KEY (`idFish`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Plant`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Plant` (
  `idPlant` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Description` VARCHAR(45) NULL,
  `PH_Min_Plant` DOUBLE NULL,
  `GH_Min_Plant` DOUBLE NULL,
  `KH_Min_Plant` DOUBLE NULL,
  `PH_Max_Plant` DOUBLE NULL,
  `GH_Max_Plant` DOUBLE NULL,
  `KH_Max_Plant` DOUBLE NULL,
  `Species` VARCHAR(45) NULL,
  `Color` VARCHAR(45) NULL,
  `Tipology` VARCHAR(45) NULL,
  PRIMARY KEY (`idPlant`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Fish_has_Acquarium`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Fish_has_Acquarium` (
  `Fish_idFish` INT NOT NULL,
  `Acquario_idAcquario` INT NOT NULL,
  PRIMARY KEY (`Fish_idFish`, `Acquario_idAcquario`),
  INDEX `fk_Fish_has_Acquario_Acquario_idx` (`Acquario_idAcquario` ASC),
  INDEX `fk_Fish_has_Acquario_Fish_idx` (`Fish_idFish` ASC),
  CONSTRAINT `fk_Fish_has_Acquario_Fish`
    FOREIGN KEY (`Fish_idFish`)
    REFERENCES `AcquarioGest`.`Fish` (`idFish`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Fish_has_Acquario_Acquario`
    FOREIGN KEY (`Acquario_idAcquario`)
    REFERENCES `AcquarioGest`.`Acquarium` (`idAcquario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Plant_has_Acquarium`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Plant_has_Acquarium` (
  `Plant_idPlant` INT NOT NULL,
  `Acquario_idAcquario` INT NOT NULL,
  PRIMARY KEY (`Plant_idPlant`, `Acquario_idAcquario`),
  INDEX `fk_Plant_has_Acquario_Acquario_idx` (`Acquario_idAcquario` ASC),
  INDEX `fk_Plant_has_Acquario_Plant_idx` (`Plant_idPlant` ASC),
  CONSTRAINT `fk_Plant_has_Acquario_Plant`
    FOREIGN KEY (`Plant_idPlant`)
    REFERENCES `AcquarioGest`.`Plant` (`idPlant`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Plant_has_Acquario_Acquario`
    FOREIGN KEY (`Acquario_idAcquario`)
    REFERENCES `AcquarioGest`.`Acquarium` (`idAcquario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Fertilization`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Fertilization` (
  `idFertilization` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL COMMENT ' /* comment truncated */ /*		*/',
  `Dosation` VARCHAR(45) NULL,
  `Start_Date` DATE NULL,
  `Type` VARCHAR(45) NULL,
  `idAcquario` INT NOT NULL,
  PRIMARY KEY (`idFertilization`, `idAcquario`),
  INDEX `fk_Fertilization_Acquarium_idx` (`idAcquario` ASC),
  CONSTRAINT `fk_Fertilization_Acquarium`
    FOREIGN KEY (`idAcquario`)
    REFERENCES `AcquarioGest`.`Acquarium` (`idAcquario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Light`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Light` (
  `idLight` INT NOT NULL,
  `Name` VARCHAR(45) NOT NULL,
  `Watt` VARCHAR(45) NULL COMMENT ' /* comment truncated */ /*	*/',
  `Lumen` VARCHAR(45) NULL,
  `Type` VARCHAR(45) NULL COMMENT ' /* comment truncated */ /*	*/',
  `Start_Date` DATE NULL,
  `idAcquario` INT NOT NULL,
  PRIMARY KEY (`idLight`, `idAcquario`),
  INDEX `fk_Light_Acquarium_idx` (`idAcquario` ASC),
  CONSTRAINT `fk_Light_Acquarium`
    FOREIGN KEY (`idAcquario`)
    REFERENCES `AcquarioGest`.`Acquarium` (`idAcquario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `AcquarioGest`.`Image`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `AcquarioGest`.`Image` (
  `idImage` INT NOT NULL,
  `Url` VARCHAR(200) NOT NULL COMMENT ' /* comment truncated */ /*	*/',
  `Name` VARCHAR(45) NULL,
  `Type` VARCHAR(45) NOT NULL,
  `Plant_idPlant` INT NOT NULL,
  `Fish_idFish` INT NOT NULL,
  `Acquarium_idAcquario` INT NOT NULL,
  `Acquarium_idUser` INT NOT NULL,
  PRIMARY KEY (`idImage`, `Plant_idPlant`, `Fish_idFish`, `Acquarium_idAcquario`, `Acquarium_idUser`),
  INDEX `fk_Image_Plant_idx` (`Plant_idPlant` ASC),
  INDEX `fk_Image_Fish_idx` (`Fish_idFish` ASC),
  INDEX `fk_Image_Acquarium_idx` (`Acquarium_idAcquario` ASC, `Acquarium_idUser` ASC),
  CONSTRAINT `fk_Image_Plant`
    FOREIGN KEY (`Plant_idPlant`)
    REFERENCES `AcquarioGest`.`Plant` (`idPlant`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Image_Fish`
    FOREIGN KEY (`Fish_idFish`)
    REFERENCES `AcquarioGest`.`Fish` (`idFish`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Image_Acquarium1`
    FOREIGN KEY (`Acquarium_idAcquario` , `Acquarium_idUser`)
    REFERENCES `AcquarioGest`.`Acquarium` (`idAcquario` , `idUser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
