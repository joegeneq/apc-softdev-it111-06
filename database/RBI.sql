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
-- Table `RBI`.`Company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Company` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(225) NOT NULL,
  `Address` VARCHAR(225) NOT NULL,
  `ContactNo` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Supplier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Supplier` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(45) NOT NULL,
  `Address` VARCHAR(225) NOT NULL,
  `ContactNo` VARCHAR(45) NOT NULL,
  `CreateDate` DATE NULL,
  `UpdateDate` DATE NULL,
  PRIMARY KEY (`ID`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Item` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(225) NOT NULL,
  `Qty` INT NOT NULL,
  `Unit` VARCHAR(45) NOT NULL,
  `Price` DECIMAL NOT NULL,
  `SerialNo` VARCHAR(45) NOT NULL,
  `Status` CHAR NOT NULL,
  `CreateDate` DATE NULL,
  `UpdateDate` DATE NULL,
  `Supplier_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Item_Supplier1_idx` (`Supplier_ID` ASC),
  CONSTRAINT `fk_Item_Supplier1`
    FOREIGN KEY (`Supplier_ID`)
    REFERENCES `RBI`.`Supplier` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Customer` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Name` VARCHAR(225) NOT NULL,
  `Address` VARCHAR(225) NOT NULL,
  `ContactNo` VARCHAR(45) NOT NULL,
  `Country` VARCHAR(45) NOT NULL,
  `ZipCode` INT NULL,
  `CreateDate` DATE NULL,
  `UpdateDate` DATE NULL,
  `Company_ID` INT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Customer_Company_idx` (`Company_ID` ASC),
  CONSTRAINT `fk_Customer_Company`
    FOREIGN KEY (`Company_ID`)
    REFERENCES `RBI`.`Company` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Sale`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Sale` (
  `ID` INT NOT NULL AUTO_INCREMENT,
  `Date` DATE NOT NULL,
  `ReceiptNo` VARCHAR(45) NOT NULL,
  `Customer_ID` INT NOT NULL,
  `Item_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Sale_Customer1_idx` (`Customer_ID` ASC),
  INDEX `fk_Sale_Item1_idx` (`Item_ID` ASC),
  CONSTRAINT `fk_Sale_Customer1`
    FOREIGN KEY (`Customer_ID`)
    REFERENCES `RBI`.`Customer` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sale_Item1`
    FOREIGN KEY (`Item_ID`)
    REFERENCES `RBI`.`Item` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Order` (
  `ID` INT NOT NULL,
  `Date` DATE NOT NULL,
  `Status` VARCHAR(45) NOT NULL,
  `OrderNo` INT NOT NULL AUTO_INCREMENT,
  `Customer_ID` INT NOT NULL,
  `Item_ID` INT NOT NULL,
  PRIMARY KEY (`ID`),
  INDEX `fk_Order_Customer1_idx` (`Customer_ID` ASC),
  INDEX `fk_Order_Item1_idx` (`Item_ID` ASC),
  CONSTRAINT `fk_Order_Customer1`
    FOREIGN KEY (`Customer_ID`)
    REFERENCES `RBI`.`Customer` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Order_Item1`
    FOREIGN KEY (`Item_ID`)
    REFERENCES `RBI`.`Item` (`ID`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
