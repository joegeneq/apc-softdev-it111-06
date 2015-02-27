-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema pratice
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema pratice
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `pratice` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `pratice` ;

-- -----------------------------------------------------
-- Table `pratice`.`Company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pratice`.`Company` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(32) NOT NULL,
  `company_description` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pratice`.`Branch`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pratice`.`Branch` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `branch_name` VARCHAR(32) NOT NULL,
  `branch_description` VARCHAR(32) NOT NULL,
  `Company_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Company_id`),
  INDEX `fk_Branch_Company1_idx` (`Company_id` ASC),
  CONSTRAINT `fk_Branch_Company1`
    FOREIGN KEY (`Company_id`)
    REFERENCES `pratice`.`Company` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `pratice`.`Department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `pratice`.`Department` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `department_name` VARCHAR(32) NOT NULL,
  `department_description` VARCHAR(32) NOT NULL,
  `Branch_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Branch_id`),
  INDEX `fk_Department_Branch_idx` (`Branch_id` ASC),
  CONSTRAINT `fk_Department_Branch`
    FOREIGN KEY (`Branch_id`)
    REFERENCES `pratice`.`Branch` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
