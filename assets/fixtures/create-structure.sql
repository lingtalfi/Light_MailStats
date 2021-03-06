-- MySQL Script generated by MySQL Workbench
-- Fri Jun 18 07:51:42 2021
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Table `lms_tracker`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lms_tracker` ;

CREATE TABLE IF NOT EXISTS `lms_tracker` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `group` VARCHAR(64) NOT NULL,
  `name` VARCHAR(64) NOT NULL,
  `url` VARCHAR(256) NOT NULL,
  `date_sent` DATETIME NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `lms_stats`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `lms_stats` ;

CREATE TABLE IF NOT EXISTS `lms_stats` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `group` VARCHAR(64) NOT NULL,
  `name` VARCHAR(64) NOT NULL,
  `url` VARCHAR(256) NOT NULL,
  `date_sent` DATETIME NULL,
  `date_opened` DATETIME NULL,
  `host` VARCHAR(64) NOT NULL,
  `user_agent` VARCHAR(256) NOT NULL,
  `accept_language` VARCHAR(64) NOT NULL,
  `remote_address` VARCHAR(32) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
