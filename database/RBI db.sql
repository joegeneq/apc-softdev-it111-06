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
  `company_contact` INT NOT NULL,
  PRIMARY KEY (`id_company`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Customer` (
  `id_customer` INT NOT NULL AUTO_INCREMENT,
  `customer_firstName` VARCHAR(45) NOT NULL,
  `customer_lastName` VARCHAR(45) NOT NULL,
  `customer_address` VARCHAR(225) NOT NULL,
  `customer_contact` INT NOT NULL,
  `customer_type` CHAR NOT NULL,
  `customer_country` VARCHAR(45) NOT NULL,
  `customer_zipCode` INT NULL,
  `customer_createDate` DATE NULL,
  `customer_updateDate` DATE NULL,
  `Company_id_company` INT NOT NULL,
  PRIMARY KEY (`id_customer`),
  INDEX `fk_Customer_Company_idx` (`Company_id_company` ASC),
  CONSTRAINT `fk_Customer_Company`
    FOREIGN KEY (`Company_id_company`)
    REFERENCES `RBI`.`Company` (`id_company`)
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
  `Customer_id_customer` INT NOT NULL,
  PRIMARY KEY (`id_sale`),
  INDEX `fk_Sale_Customer1_idx` (`Customer_id_customer` ASC),
  CONSTRAINT `fk_Sale_Customer1`
    FOREIGN KEY (`Customer_id_customer`)
    REFERENCES `RBI`.`Customer` (`id_customer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Order` (
  `id_order` INT NOT NULL AUTO_INCREMENT,
  `order_date` DATE NOT NULL,
  `order_status` CHAR NOT NULL,
  `Customer_id_customer` INT NOT NULL,
  PRIMARY KEY (`id_order`),
  INDEX `fk_Order_Customer1_idx` (`Customer_id_customer` ASC),
  CONSTRAINT `fk_Order_Customer1`
    FOREIGN KEY (`Customer_id_customer`)
    REFERENCES `RBI`.`Customer` (`id_customer`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`Supplier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`Supplier` (
  `id_supplier` INT NOT NULL AUTO_INCREMENT,
  `supplier_name` VARCHAR(45) NOT NULL,
  `supplier_address` VARCHAR(225) NOT NULL,
  `supplier_contact` INT NOT NULL,
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
  `Sale_id_sale` INT NOT NULL,
  `Order_id_order` INT NOT NULL,
  `Supplier_id_supplier` INT NOT NULL,
  PRIMARY KEY (`id_item`),
  INDEX `fk_Item_Sale1_idx` (`Sale_id_sale` ASC),
  INDEX `fk_Item_Order1_idx` (`Order_id_order` ASC),
  INDEX `fk_Item_Supplier1_idx` (`Supplier_id_supplier` ASC),
  CONSTRAINT `fk_Item_Sale1`
    FOREIGN KEY (`Sale_id_sale`)
    REFERENCES `RBI`.`Sale` (`id_sale`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Item_Order1`
    FOREIGN KEY (`Order_id_order`)
    REFERENCES `RBI`.`Order` (`id_order`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Item_Supplier1`
    FOREIGN KEY (`Supplier_id_supplier`)
    REFERENCES `RBI`.`Supplier` (`id_supplier`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
