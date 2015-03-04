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
-- Table `RBI`.`customer`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`customer` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(225) NOT NULL,
  `contact_no` VARCHAR(45) NOT NULL,
  `house_no` VARCHAR(45) NOT NULL,
  `street` VARCHAR(225) NOT NULL,
  `area` VARCHAR(225) NOT NULL,
  `city` VARCHAR(225) NOT NULL,
  `zip_code` INT NULL,
  `country` VARCHAR(225) NOT NULL,
  `email` VARCHAR(225) NOT NULL,
  `create_date` DATE NOT NULL,
  `update_date` DATE NULL,
  `created_by` VARCHAR(45) NOT NULL,
  `updated_by` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`supplier`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`supplier` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(225) NOT NULL,
  `contact_no` VARCHAR(45) NOT NULL,
  `contact_person` VARCHAR(225) NOT NULL,
  `house_no` VARCHAR(45) NOT NULL,
  `street` VARCHAR(225) NOT NULL,
  `area` VARCHAR(225) NOT NULL,
  `city` VARCHAR(225) NOT NULL,
  `zip_code` INT NULL,
  `country` VARCHAR(225) NOT NULL,
  `email` VARCHAR(45) NOT NULL,
  `create_date` DATE NOT NULL,
  `update_date` DATE NULL,
  `created_by` VARCHAR(45) NOT NULL,
  `updated_by` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`productinventory`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`productinventory` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(225) NOT NULL,
  `description` VARCHAR(225) NOT NULL,
  `qoh` INT NOT NULL,
  `serial_no` VARCHAR(45) NOT NULL,
  `price` DECIMAL NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `create_date` DATE NOT NULL,
  `update_date` DATE NULL,
  `created_by` VARCHAR(45) NOT NULL,
  `updated_by` VARCHAR(45) NULL,
  `supplier_id` INT NOT NULL,
  PRIMARY KEY (`id`, `supplier_id`),
  INDEX `fk_productinventory_supplier1_idx` (`supplier_id` ASC),
  CONSTRAINT `fk_productinventory_supplier1`
    FOREIGN KEY (`supplier_id`)
    REFERENCES `RBI`.`supplier` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`customercontact`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`customercontact` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(225) NOT NULL,
  `contact_no` VARCHAR(45) NOT NULL,
  `email` VARCHAR(225) NOT NULL,
  `create_date` DATE NOT NULL,
  `update_date` DATE NULL,
  `created_by` VARCHAR(45) NOT NULL,
  `updated_by` VARCHAR(45) NULL,
  `customer_id` INT NOT NULL,
  PRIMARY KEY (`id`, `customer_id`),
  INDEX `fk_customercontact_customer1_idx` (`customer_id` ASC),
  CONSTRAINT `fk_customercontact_customer1`
    FOREIGN KEY (`customer_id`)
    REFERENCES `RBI`.`customer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`order`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`order` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `date` DATE NOT NULL,
  `status` VARCHAR(45) NOT NULL,
  `num_items` INT NOT NULL,
  `amount` DECIMAL NOT NULL,
  `discount` DECIMAL UNSIGNED NULL,
  `customer_id` INT NOT NULL,
  `productinventory_id` INT NOT NULL,
  PRIMARY KEY (`id`, `customer_id`, `productinventory_id`),
  INDEX `fk_order_customer_idx` (`customer_id` ASC),
  INDEX `fk_order_productinventory1_idx` (`productinventory_id` ASC),
  CONSTRAINT `fk_order_customer`
    FOREIGN KEY (`customer_id`)
    REFERENCES `RBI`.`customer` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_order_productinventory1`
    FOREIGN KEY (`productinventory_id`)
    REFERENCES `RBI`.`productinventory` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `RBI`.`table1`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `RBI`.`table1` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `status` VARCHAR(45) NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
