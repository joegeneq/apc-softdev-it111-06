-- MySQL Script generated by MySQL Workbench
-- 02/19/15 19:01:24
-- Model: New Model    Version: 1.0
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
  `id_company` INT NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(225) NOT NULL,
  `company_address` VARCHAR(225) NOT NULL,
  `company_contact` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_company`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Supplier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Supplier` (
  `id_supplier` INT NOT NULL AUTO_INCREMENT,
  `supplier_name` VARCHAR(45) NOT NULL,
  `supplier_address` VARCHAR(225) NOT NULL,
  `supplier_contact` VARCHAR(45) NOT NULL,
  `supplier_createDate` DATE NULL,
  `supplier_updateDate` DATE NULL,
  PRIMARY KEY (`id_supplier`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Item`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Item` (
  `id_item` INT NOT NULL AUTO_INCREMENT,
  `item_name` VARCHAR(225) NOT NULL,
  `item_qty` INT NOT NULL,
  `item_unit` VARCHAR(45) NOT NULL,
  `item_price` DECIMAL NOT NULL,
  `item_serialNo` VARCHAR(45) NOT NULL,
  `item_status` CHAR NOT NULL,
  `item_createDate` DATE NULL,
  `item_updateDate` DATE NULL,
  `supplier_name` VARCHAR(225) NOT NULL,
  PRIMARY KEY (`id_item`),
  INDEX `fk_Item_Supplier1_idx` (`supplier_name` ASC),
  CONSTRAINT `fk_Item_Supplier1`
    FOREIGN KEY (`supplier_name`)
    REFERENCES `RBI`.`Supplier` (`supplier_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Customer` (
  `id_customer` INT NOT NULL AUTO_INCREMENT,
  `customer_name` VARCHAR(225) NOT NULL,
  `customer_address` VARCHAR(225) NOT NULL,
  `customer_contact` VARCHAR(45) NOT NULL,
  `customer_type` VARCHAR(45) NOT NULL,
  `customer_country` VARCHAR(45) NOT NULL,
  `customer_zipCode` INT NULL,
  `customer_createDate` DATE NULL,
  `customer_updateDate` DATE NULL,
  `customer_company` VARCHAR(225) NULL,
  PRIMARY KEY (`id_customer`),
  INDEX `fk_Customer_Company1_idx` (`customer_company` ASC),
  CONSTRAINT `fk_Customer_Company1`
    FOREIGN KEY (`customer_company`)
    REFERENCES `RBI`.`Company` (`company_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Sale`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Sale` (
  `id_sale` INT NOT NULL AUTO_INCREMENT,
  `sale_date` DATE NOT NULL,
  `sale_orNo` VARCHAR(45) NOT NULL,
  `customer_name` VARCHAR(225) NOT NULL,
  `item_name` VARCHAR(225) NOT NULL,
  PRIMARY KEY (`id_sale`),
  INDEX `fk_Sale_Customer1_idx` (`customer_name` ASC),
  INDEX `fk_Sale_Item1_idx` (`item_name` ASC),
  CONSTRAINT `fk_Sale_Customer1`
    FOREIGN KEY (`customer_name`)
    REFERENCES `RBI`.`Customer` (`customer_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Sale_Item1`
    FOREIGN KEY (`item_name`)
    REFERENCES `RBI`.`Item` (`item_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Order` (
  `id_order` INT NOT NULL,
  `order_date` DATE NOT NULL,
  `order_status` VARCHAR(45) NOT NULL,
  `order_no` INT NOT NULL AUTO_INCREMENT,
  `customer_name` VARCHAR(225) NOT NULL,
  `item_name` VARCHAR(225) NOT NULL,
  PRIMARY KEY (`id_order`),
  INDEX `fk_Order_Customer1_idx` (`customer_name` ASC),
  INDEX `fk_Order_Item1_idx` (`item_name` ASC),
  CONSTRAINT `fk_Order_Customer1`
    FOREIGN KEY (`customer_name`)
    REFERENCES `RBI`.`Customer` (`customer_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Order_Item1`
    FOREIGN KEY (`item_name`)
    REFERENCES `RBI`.`Item` (`item_name`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
