-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema RBI
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema RBI
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `RBI` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `RBI` ;

-- -----------------------------------------------------
-- Table `RBI`.`Customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Customer` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(225) NOT NULL,
  `ContactNo` VARCHAR(45) NOT NULL,
  `HouseNo` VARCHAR(45) NOT NULL,
  `Street` VARCHAR(225) NOT NULL,
  `Area` VARCHAR(225) NOT NULL,
  `City` VARCHAR(225) NOT NULL,
  `ZipCode` INT NULL,
  `Country` VARCHAR(225) NOT NULL,
  `Email` VARCHAR(225) NOT NULL,
  `CreateDate` DATE NOT NULL,
  `UpdateDate` DATE NULL,
  `CreatedBy` VARCHAR(45) NOT NULL,
  `UpdatedBy` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Supplier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Supplier` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(225) NOT NULL,
  `ContactNo` VARCHAR(45) NOT NULL,
  `ContactPerson` VARCHAR(225) NOT NULL,
  `HouseNo` VARCHAR(45) NOT NULL,
  `Street` VARCHAR(225) NOT NULL,
  `Area` VARCHAR(225) NOT NULL,
  `City` VARCHAR(225) NOT NULL,
  `ZipCode` INT NULL,
  `Country` VARCHAR(225) NOT NULL,
  `Email` VARCHAR(45) NOT NULL,
  `CreateDate` DATE NOT NULL,
  `UpdateDate` DATE NULL,
  `CreatedBy` VARCHAR(45) NOT NULL,
  `UpdatedBy` VARCHAR(45) NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`ProductInventory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`ProductInventory` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(225) NOT NULL,
  `Description` VARCHAR(225) NOT NULL,
  `QoH` INT NOT NULL,
  `SerialNo` VARCHAR(45) NOT NULL,
  `Price` DECIMAL NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `CreateDate` DATE NOT NULL,
  `UpdateDate` DATE NULL,
  `CreatedBy` VARCHAR(45) NOT NULL,
  `UpdatedBy` VARCHAR(45) NULL,
  `Supplier_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Supplier_ID`),
  INDEX `fk_ProductInventory_Supplier1_idx` (`Supplier_ID` ASC),
  CONSTRAINT `fk_ProductInventory_Supplier1`
    FOREIGN KEY (`Supplier_ID`)
    REFERENCES `RBI`.`Supplier` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`CustomerContact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`CustomerContact` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(225) NOT NULL,
  `ContactNo` VARCHAR(45) NOT NULL,
  `Email` VARCHAR(225) NOT NULL,
  `CreateDate` DATE NOT NULL,
  `UpdateDate` DATE NULL,
  `CreatedBy` VARCHAR(45) NOT NULL,
  `UpdatedBy` VARCHAR(45) NULL,
  `Customer_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Customer_ID`),
  INDEX `fk_Customer_Contact_Customer1_idx` (`Customer_ID` ASC),
  CONSTRAINT `fk_Customer_Contact_Customer1`
    FOREIGN KEY (`Customer_ID`)
    REFERENCES `RBI`.`Customer` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Order` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Date` DATE NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `NumOfItems` INT NOT NULL,
  `Amount` DECIMAL NOT NULL,
  `Discount` DECIMAL NULL,
  `Customer_ID` INT NOT NULL,
  `ProductInventory_ID` INT NOT NULL,
  PRIMARY KEY (`ID`, `Customer_ID`, `ProductInventory_ID`),
  INDEX `fk_Order_Customer_idx` (`Customer_ID` ASC),
  INDEX `fk_Order_ProductInventory1_idx` (`ProductInventory_ID` ASC),
  CONSTRAINT `fk_Order_Customer`
    FOREIGN KEY (`Customer_ID`)
    REFERENCES `RBI`.`Customer` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Order_ProductInventory1`
    FOREIGN KEY (`ProductInventory_ID`)
    REFERENCES `RBI`.`ProductInventory` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
