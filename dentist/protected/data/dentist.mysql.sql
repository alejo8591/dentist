SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `dentist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;

USE `dentist`;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_user` (
  `id_tbl_user` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_document` INT(11) NULL DEFAULT NULL ,
  `email` VARCHAR(128) NULL DEFAULT NULL ,
  `password` VARCHAR(128) NULL DEFAULT NULL ,
  `last_login_time` DATETIME NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_user`) ,
  UNIQUE INDEX `id_document_UNIQUE` (`id_document` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_anamnesis` (
  `id_tbl_anamnesis` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_user` INT(11) NOT NULL ,
  `name` VARCHAR(64) NULL DEFAULT NULL ,
  `surname` VARCHAR(128) NULL DEFAULT NULL ,
  `date_birth` DATE NULL DEFAULT NULL ,
  `place_of_birth` INT(11) NULL DEFAULT NULL ,
  `genre` VARCHAR(128) NULL DEFAULT NULL ,
  `blood_group` VARCHAR(4) NULL DEFAULT NULL ,
  `id_tbl_country` INT(11) NULL DEFAULT NULL ,
  `id_tbl_city` INT(11) NULL DEFAULT NULL ,
  `id_tbl_level_schooling` INT(11) NULL DEFAULT NULL ,
  `id_tbl_profession` INT(11) NULL DEFAULT NULL ,
  `occupation` VARCHAR(64) NULL DEFAULT NULL ,
  `contact` INT(11) NULL DEFAULT NULL ,
  `id_tbl_healt_regimen` INT(11) NULL DEFAULT NULL ,
  `id_tbl_healt_institution` INT(11) NULL DEFAULT NULL ,
  `id_tbl_during_consultation` INT(11) NULL DEFAULT NULL ,
  `description_healt` TEXT NULL DEFAULT NULL ,
  `family_history` TEXT NULL DEFAULT NULL ,
  `data_personal_history` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_anamnesis`) ,
  UNIQUE INDEX `id_anamnesis_UNIQUE` (`id_tbl_anamnesis` ASC) ,
  INDEX `fk_anamnesis_tbl_user_idx` (`id_tbl_user` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_country1_idx` (`id_tbl_country` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_city1_idx` (`id_tbl_city` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_level_schooling1_idx` (`id_tbl_level_schooling` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_profession1_idx` (`id_tbl_profession` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_anamnesis1_idx` (`contact` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_healt_regimen1_idx` (`id_tbl_healt_regimen` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_healt_institution1_idx` (`id_tbl_healt_institution` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_during_consultation1_idx` (`id_tbl_during_consultation` ASC) ,
  CONSTRAINT `fk_anamnesis_tbl_user`
    FOREIGN KEY (`id_tbl_user` )
    REFERENCES `dentist`.`tbl_user` (`id_tbl_user` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_country1`
    FOREIGN KEY (`id_tbl_country` )
    REFERENCES `dentist`.`tbl_country` (`id_tbl_country` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_city1`
    FOREIGN KEY (`id_tbl_city` )
    REFERENCES `dentist`.`tbl_city` (`id_tbl_city` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_level_schooling1`
    FOREIGN KEY (`id_tbl_level_schooling` )
    REFERENCES `dentist`.`tbl_level_schooling` (`id_tbl_level_schooling` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_profession1`
    FOREIGN KEY (`id_tbl_profession` )
    REFERENCES `dentist`.`tbl_profession` (`id_tbl_profession` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_anamnesis1`
    FOREIGN KEY (`contact` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_healt_regimen1`
    FOREIGN KEY (`id_tbl_healt_regimen` )
    REFERENCES `dentist`.`tbl_healt_regimen` (`id_tbl_healt_regimen` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_healt_institution1`
    FOREIGN KEY (`id_tbl_healt_institution` )
    REFERENCES `dentist`.`tbl_healt_institution` (`id_tbl_healt_institution` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_during_consultation1`
    FOREIGN KEY (`id_tbl_during_consultation` )
    REFERENCES `dentist`.`tbl_during_consultation` (`id_tbl_during_consultation` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_country` (
  `id_tbl_country` INT(11) NOT NULL AUTO_INCREMENT ,
  `country_code` INT(11) NULL DEFAULT NULL ,
  `name_country` VARCHAR(128) NOT NULL ,
  `postal_code` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL COMMENT 'http://countrycode.org/' ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_country`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_city` (
  `id_tbl_city` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_country` INT(11) NOT NULL ,
  `city_code` INT(11) NULL DEFAULT NULL ,
  `name_city` VARCHAR(128) NULL DEFAULT NULL ,
  `postal_code` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_city`) ,
  INDEX `fk_tbl_city_tbl_country1_idx` (`id_tbl_country` ASC) ,
  CONSTRAINT `fk_tbl_city_tbl_country1`
    FOREIGN KEY (`id_tbl_country` )
    REFERENCES `dentist`.`tbl_country` (`id_tbl_country` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_address` (
  `id_tbl_address` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_user` INT(11) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NULL DEFAULT NULL ,
  `type_address` VARCHAR(64) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_address`) ,
  INDEX `fk_tbl_address_tbl_user1_idx` (`id_tbl_user` ASC) ,
  INDEX `fk_tbl_address_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_address_tbl_user1`
    FOREIGN KEY (`id_tbl_user` )
    REFERENCES `dentist`.`tbl_user` (`id_tbl_user` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_address_tbl_anamnesis1`
    FOREIGN KEY (`id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_phone` (
  `id_tbl_phone` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_user` INT(11) NULL DEFAULT NULL ,
  `id_tbl_anamnesis` INT(11) NULL DEFAULT NULL ,
  `type_phone` VARCHAR(64) NULL DEFAULT NULL ,
  `phone` VARCHAR(64) NULL DEFAULT NULL ,
  `phone_extension` VARCHAR(64) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_phone`) ,
  INDEX `fk_tbl_phone_tbl_user1_idx` (`id_tbl_user` ASC) ,
  INDEX `fk_tbl_phone_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_phone_tbl_user1`
    FOREIGN KEY (`id_tbl_user` )
    REFERENCES `dentist`.`tbl_user` (`id_tbl_user` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_phone_tbl_anamnesis1`
    FOREIGN KEY (`id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_level_schooling` (
  `id_tbl_level_schooling` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_level_schooling` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_level_schooling`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_profession` (
  `id_tbl_profession` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_profession` VARCHAR(45) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_profession`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_healt_regimen` (
  `id_tbl_healt_regimen` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_healt_regimen` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_healt_regimen`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_healt_institution` (
  `id_tbl_healt_institution` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_healt_regimen` INT(11) NULL DEFAULT NULL ,
  `name_healt_institution` VARCHAR(128) NULL DEFAULT NULL ,
  `id_healt_institution` VARCHAR(45) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_healt_institution`) ,
  INDEX `fk_tbl_healt_institution_tbl_healt_regimen1_idx` (`id_tbl_healt_regimen` ASC) ,
  CONSTRAINT `fk_tbl_healt_institution_tbl_healt_regimen1`
    FOREIGN KEY (`id_tbl_healt_regimen` )
    REFERENCES `dentist`.`tbl_healt_regimen` (`id_tbl_healt_regimen` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_during_consultation` (
  `id_tbl_during_consultation` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_during_consultation` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_during_consultation`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_personal_history` (
  `id_tbl_personal_history` INT(11) NOT NULL AUTO_INCREMENT ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_personal_history`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_background` (
  `id_tbl_background` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_personal_history` INT(11) NOT NULL ,
  `name_background` VARCHAR(256) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_background`) ,
  INDEX `fk_tbl_background_tbl_personal_history1_idx` (`id_tbl_personal_history` ASC) ,
  CONSTRAINT `fk_tbl_background_tbl_personal_history1`
    FOREIGN KEY (`id_tbl_personal_history` )
    REFERENCES `dentist`.`tbl_personal_history` (`id_tbl_personal_history` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_option_background` (
  `id_tbl_option_background` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_background` INT(11) NOT NULL ,
  `name_option_background` VARCHAR(256) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_background`) ,
  INDEX `fk_tbl_option_background_tbl_background1_idx` (`id_tbl_background` ASC) ,
  CONSTRAINT `fk_tbl_option_background_tbl_background1`
    FOREIGN KEY (`id_tbl_background` )
    REFERENCES `dentist`.`tbl_background` (`id_tbl_background` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_detail_option_background` (
  `id_tbl_detail_option_background` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_option_background` INT(11) NOT NULL ,
  `name_detail_option_background` VARCHAR(256) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `flag_detail_option_background` INT(11) NULL DEFAULT NULL ,
  `create_user_id` INT(11) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` INT(11) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_detail_option_background`) ,
  INDEX `fk_tbl_detail_option_background_tbl_option_background1_idx` (`id_tbl_option_background` ASC) ,
  CONSTRAINT `fk_tbl_detail_option_background_tbl_option_background1`
    FOREIGN KEY (`id_tbl_option_background` )
    REFERENCES `dentist`.`tbl_option_background` (`id_tbl_option_background` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_physical_history` (
  `id_tbl_physical_history` INT(11) NOT NULL AUTO_INCREMENT ,
  `tbl_physical_historycol` VARCHAR(45) NULL DEFAULT NULL ,
  `id_tbl_anamnesis` INT(11) NULL DEFAULT NULL ,
  `tbl_physical_historycol1` VARCHAR(45) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_physical_history`) ,
  INDEX `fk_tbl_physical_history_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_physical_history_tbl_anamnesis1`
    FOREIGN KEY (`id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
