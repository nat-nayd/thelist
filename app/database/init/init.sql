SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `thelist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `thelist` ;

-- -----------------------------------------------------
-- Table `thelist`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `thelist`.`user` ;

CREATE TABLE IF NOT EXISTS `thelist`.`user` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `username` VARCHAR(45) NOT NULL,
  `password` VARCHAR(256) NOT NULL,
  `remember_token` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `thelist`.`house`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `thelist`.`house` ;

CREATE TABLE IF NOT EXISTS `thelist`.`house` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(128) NULL,
  `motto` TINYTEXT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `thelist`.`character`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `thelist`.`character` ;

CREATE TABLE IF NOT EXISTS `thelist`.`character` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(45) NULL,
  `house_id` INT NOT NULL,
  PRIMARY KEY (`id`, `house_id`),
  INDEX `fk_character_house_idx` (`house_id` ASC),
  CONSTRAINT `fk_character_house`
    FOREIGN KEY (`house_id`)
    REFERENCES `thelist`.`house` (`id`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
