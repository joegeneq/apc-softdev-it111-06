-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema practice
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema practice
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `practice` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `practice` ;

-- -----------------------------------------------------
-- Table `practice`.`Company`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practice`.`Company` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `company_name` VARCHAR(32) NOT NULL,
  `company_description` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `practice`.`Branch`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practice`.`Branch` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `branch_name` VARCHAR(32) NOT NULL,
  `branch_description` VARCHAR(32) NOT NULL,
  `Company_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Company_id`),
  INDEX `fk_Branch_Company1_idx` (`Company_id` ASC),
  CONSTRAINT `fk_Branch_Company1`
    FOREIGN KEY (`Company_id`)
    REFERENCES `practice`.`Company` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `practice`.`Department`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `practice`.`Department` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `department_name` VARCHAR(32) NOT NULL,
  `department_description` VARCHAR(32) NOT NULL,
  `Branch_id` INT NOT NULL,
  PRIMARY KEY (`id`, `Branch_id`),
  INDEX `fk_Department_Branch_idx` (`Branch_id` ASC),
  CONSTRAINT `fk_Department_Branch`
    FOREIGN KEY (`Branch_id`)
    REFERENCES `practice`.`Branch` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
