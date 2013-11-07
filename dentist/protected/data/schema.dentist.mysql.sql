SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `dentist` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `dentist` ;

-- -----------------------------------------------------
-- Table `dentist`.`tbl_user`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_user` (
  `username` VARCHAR(64) NOT NULL ,
  `type_document` VARCHAR(128) NULL ,
  `user_status` INT NULL DEFAULT 0 ,
  `type_user` INT NULL DEFAULT 0 ,
  `id_document` INT NULL ,
  `email` VARCHAR(128) NULL ,
  `password` VARCHAR(128) NULL ,
  `last_login_time` DATETIME NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  UNIQUE INDEX `id_document_UNIQUE` (`id_document` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) ,
  PRIMARY KEY (`username`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_country`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_country` (
  `id_tbl_country` INT NOT NULL AUTO_INCREMENT ,
  `country_code` INT NULL ,
  `name_country` VARCHAR(128) NOT NULL ,
  `postal_code` VARCHAR(128) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL COMMENT 'http://countrycode.org/' ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_country`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_city`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_city` (
  `id_tbl_city` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_country` INT NOT NULL ,
  `city_code` INT NULL ,
  `name_city` VARCHAR(128) NULL ,
  `postal_code` VARCHAR(128) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_city`) ,
  INDEX `fk_tbl_city_tbl_country1_idx` (`id_tbl_country` ASC) ,
  CONSTRAINT `fk_tbl_city_tbl_country`
    FOREIGN KEY (`id_tbl_country` )
    REFERENCES `dentist`.`tbl_country` (`id_tbl_country` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_level_schooling`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_level_schooling` (
  `id_tbl_level_schooling` INT NOT NULL AUTO_INCREMENT ,
  `name_level_schooling` VARCHAR(128) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_level_schooling`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_profession`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_profession` (
  `id_tbl_profession` INT NOT NULL AUTO_INCREMENT ,
  `name_profession` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_profession`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_healt_institution`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_healt_institution` (
  `id_tbl_healt_institution` INT NOT NULL AUTO_INCREMENT ,
  `name_healt_institution` VARCHAR(128) NULL ,
  `id_healt_institution` VARCHAR(45) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_healt_institution`) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_healt_regimen`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_healt_regimen` (
  `id_tbl_healt_regimen` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_healt_institution` INT NOT NULL ,
  `name_healt_regimen` VARCHAR(128) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_healt_regimen`) ,
  INDEX `fk_tbl_healt_regimen_tbl_healt_institution1_idx` (`id_tbl_healt_institution` ASC) ,
  CONSTRAINT `fk_tbl_healt_regimen_tbl_healt_institution`
    FOREIGN KEY (`id_tbl_healt_institution` )
    REFERENCES `dentist`.`tbl_healt_institution` (`id_tbl_healt_institution` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_anamnesis`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_anamnesis` (
  `id_tbl_anamnesis` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `name` VARCHAR(128) NULL ,
  `surname` VARCHAR(128) NULL ,
  `date_birth` DATE NULL ,
  `place_of_birth` VARCHAR(128) NULL ,
  `genre` INT NULL ,
  `blood_group` INT NULL ,
  `id_tbl_country` INT NULL ,
  `id_tbl_city` INT NULL ,
  `id_tbl_level_schooling` INT NULL ,
  `id_tbl_profession` INT NULL ,
  `occupation` VARCHAR(64) NULL ,
  `contact` VARCHAR(64) NULL ,
  `id_tbl_healt_regimen` INT NULL ,
  `id_tbl_healt_institution` INT NULL ,
  `description_healt` TEXT NULL ,
  `family_history` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_anamnesis`, `username`) ,
  UNIQUE INDEX `id_anamnesis_UNIQUE` (`id_tbl_anamnesis` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_country1_idx` (`id_tbl_country` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_city1_idx` (`id_tbl_city` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_level_schooling1_idx` (`id_tbl_level_schooling` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_profession1_idx` (`id_tbl_profession` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_healt_regimen1_idx` (`id_tbl_healt_regimen` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_healt_institution1_idx` (`id_tbl_healt_institution` ASC) ,
  INDEX `fk_tbl_anamnesis_tbl_user1_idx` (`username` ASC) ,
  CONSTRAINT `fk_tbl_anamnesis_tbl_country`
    FOREIGN KEY (`id_tbl_country` )
    REFERENCES `dentist`.`tbl_country` (`id_tbl_country` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_city`
    FOREIGN KEY (`id_tbl_city` )
    REFERENCES `dentist`.`tbl_city` (`id_tbl_city` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_level_schooling`
    FOREIGN KEY (`id_tbl_level_schooling` )
    REFERENCES `dentist`.`tbl_level_schooling` (`id_tbl_level_schooling` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_profession`
    FOREIGN KEY (`id_tbl_profession` )
    REFERENCES `dentist`.`tbl_profession` (`id_tbl_profession` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_healt_regimen`
    FOREIGN KEY (`id_tbl_healt_regimen` )
    REFERENCES `dentist`.`tbl_healt_regimen` (`id_tbl_healt_regimen` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_healt_institution`
    FOREIGN KEY (`id_tbl_healt_institution` )
    REFERENCES `dentist`.`tbl_healt_institution` (`id_tbl_healt_institution` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tbl_anamnesis_tbl_user`
    FOREIGN KEY (`username` )
    REFERENCES `dentist`.`tbl_user` (`username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_address`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_address` (
  `id_tbl_address` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `type_address` VARCHAR(64) NULL ,
  `address` VARCHAR(256) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_address`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_address_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_address_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_phone`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_phone` (
  `id_tbl_phone` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `type_phone` VARCHAR(64) NULL ,
  `phone` VARCHAR(64) NULL ,
  `phone_extension` VARCHAR(64) NULL ,
  `description` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_phone`, `id_tbl_anamnesis`, `username`) ,
  INDEX `fk_tbl_phone_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_phone_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_personal_background`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_personal_background` (
  `id_tbl_personal_background` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_personal_background`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_personal_background_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_personal_background_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_physical_examination`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_physical_examination` (
  `id_tbl_physical_examination` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_physical_examination`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_physical_examination_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_atm`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_atm` (
  `id_tbl_atm` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `observation_atm` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_atm`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_atm_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_atm_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_atm`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm` (
  `id_tbl_option_atm` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_atm` INT NOT NULL ,
  `name_option_atm` VARCHAR(128) NULL ,
  `flag_option_atm` INT NULL ,
  `observation_atm` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_atm`) ,
  INDEX `fk_tbl_options_atm_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_social_habits`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_social_habits` (
  `id_tbl_option_social_habits` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_personal_background` INT NOT NULL ,
  `name_option_social_habits` VARCHAR(128) NULL ,
  `flag_option_social_habits` INT NULL ,
  `observation_option_social_habits` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_social_habits`) ,
  INDEX `fk_tbl_options_social_habits_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_social_habits_tbl_personal_background1`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_oral_habits`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_oral_habits` (
  `id_tbl_option_oral_habits` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_personal_background` INT NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `name_option_oral_habits` VARCHAR(128) NULL ,
  `flag_option_oral_habits` INT NULL ,
  `observation_option_oral_habits` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_oral_habits`) ,
  INDEX `fk_tbl_options_oral_habits_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_oral_habits_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_dental_history`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_dental_history` (
  `id_tbl_option_dental_history` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_personal_background` INT NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `name_option_dental_history` VARCHAR(128) NULL ,
  `flag_option_dental_history` INT NULL ,
  `observation_option_dental_history` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_dental_history`) ,
  INDEX `fk_tbl_options_dental_history_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_dental_history_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_pathological_history`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_pathological_history` (
  `id_tbl_option_pathological_history` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_personal_background` INT NOT NULL ,
  `name_option_pathological_history` VARCHAR(128) NULL ,
  `flag_option_pathological_history` INT NULL ,
  `observation_option_pathological_history` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_pathological_history`) ,
  INDEX `fk_tbl_options_pathological_history_tbl_personal_background_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_pathological_history_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_obstetric_gynecology`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_obstetric_gynecology` (
  `id_tbl_option_obstetric_gynecology` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_personal_background` INT NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `name_option_obstetric_gynecology` VARCHAR(128) NULL ,
  `flag_option_option_obstetric_gynecology` INT NULL ,
  `observation_option_obstetric_gynecology` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_obstetric_gynecology`) ,
  INDEX `fk_tbl_options_obstetric_gynecology_tbl_personal_background_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_obstetric_gynecology_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_personal_background`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_personal_background` (
  `id_tbl_option_personal_background` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_personal_background` INT NOT NULL ,
  `name_option_personal_background` VARCHAR(128) NULL ,
  `flag_option_personal_background` INT NULL ,
  `observation_option_personal_background` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_personal_background`) ,
  INDEX `fk_tbl_options_personal_background_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_personal_background_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_vital_signs`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_vital_signs` (
  `id_tbl_option_vital_signs` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_physical_examination` INT NOT NULL ,
  `name_option_vital_signs` VARCHAR(128) NULL ,
  `flag_option_vital_signs` INT NULL ,
  `observation_option_vital_signs` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_vital_signs`) ,
  INDEX `fk_tbl_options_vital signs_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_vital_signs_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_extraoral_examination`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_extraoral_examination` (
  `id_tbl_option_extraoral_examination` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_physical_examination` INT NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `name_option_extraoral_examination` VARCHAR(128) NULL ,
  `flag_option_extraoral_examination` INT NULL ,
  `observation_option_extraoral_examination` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_extraoral_examination`) ,
  INDEX `fk_tbl_options_extraoral_examination_tbl_physical_examinati_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_extraoral_examination_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_neck`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_neck` (
  `id_tbl_option_neck` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_physical_examination` INT NOT NULL ,
  `name_option_neck` VARCHAR(128) NULL ,
  `flag_option_neck` INT NULL ,
  `observation_option_neck` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_neck`) ,
  INDEX `fk_tbl_options_neck_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_neck_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_lymphadenopathy`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_lymphadenopathy` (
  `id_tbl_option_lymphadenopathy` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_physical_examination` INT NOT NULL ,
  `name_option_lymphadenopathy` VARCHAR(128) NULL ,
  `flag_option_lymphadenopathy` INT NULL ,
  `observation_option_lymphadenopathy` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_lymphadenopathy`) ,
  INDEX `fk_tbl_options_lymphadenopathy_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_lymphadenopathy_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_systems`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_systems` (
  `id_tbl_option_systems` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_physical_examination` INT NOT NULL ,
  `name_option_systems` VARCHAR(128) NULL ,
  `flag_option_systems` INT NULL ,
  `type_option_systems` VARCHAR(64) NULL ,
  `observation_option_systems` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_systems`) ,
  INDEX `fk_tbl_options_systems_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_systems_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_atm_mandibular_movements`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_mandibular_movements` (
  `id_tbl_option_atm_mandibular_movements` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_atm` INT NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `name_option_atm_mandibular_movements` VARCHAR(128) NULL ,
  `type_option_atm_mandibular_movements` VARCHAR(64) NULL ,
  `flag_option_atm_mandibular_movements` INT NULL ,
  `observation_atm_mandibular_movements` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_atm_mandibular_movements`) ,
  INDEX `fk_tbl_options_atm_mandibular_movements_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_mandibular_movements_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_atm_soft_tissue`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_soft_tissue` (
  `id_tbl_option_atm_soft_tissue` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_atm` INT NOT NULL ,
  `name_option_atm_soft_tissue` VARCHAR(128) NULL ,
  `flag_option_atm_soft_tissue` INT NULL ,
  `observation_atm_soft_tissue` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_atm_soft_tissue`) ,
  INDEX `fk_tbl_options_atm_soft_tissue_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_soft_tissue_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_atm_intraoral_soft_tissue`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_intraoral_soft_tissue` (
  `id_tbl_option_atm_intraoral_soft_tissue` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_atm` INT NOT NULL ,
  `name_option_atm_intraoral_soft_tissue` VARCHAR(128) NULL ,
  `type_option_atm_intraoral_soft_tissue` INT NULL ,
  `observation_option_atm_intraoral_soft_tissue` TEXT NULL ,
  `flag_option_atm_intraoral_soft_tissue` INT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_atm_intraoral_soft_tissue`) ,
  INDEX `fk_tbl_options_atm_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_intraoral_soft_tissue_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_atm_intraoral_hard_tissue`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_intraoral_hard_tissue` (
  `id_tbl_option_atm_intraoral_hard_tissue` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_atm` INT NOT NULL ,
  `name_option_atm_intraoral_hard_tissue` VARCHAR(128) NULL ,
  `type_option_atm_intraoral_hard_tissue` INT NULL ,
  `observation_option_hard_intraoral_hard_tissue` TEXT NULL ,
  `flag_option_atm_intraoral_hard_tissue` INT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_atm_intraoral_hard_tissue`) ,
  INDEX `fk_tbl_options_atm_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_intraoral_hard_tissue_atm_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_dental_examination`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_dental_examination` (
  `id_tbl_dental_examination` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_dental_examination`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_physical_examination_tbl_anamnesis10`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_periodontal_examination`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_examination` (
  `id_tbl_periodontal_examination` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  `description_periodontal_examination` TEXT NULL ,
  PRIMARY KEY (`id_tbl_periodontal_examination`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_physical_examination_tbl_anamnesis11`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_intcp`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_intcp` (
  `id_tbl_intcp` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT NOT NULL ,
  `name_option_intcp` VARCHAR(128) NULL ,
  `code_intcp` VARCHAR(64) NULL ,
  `nt_intcp` VARCHAR(64) NULL ,
  `observation_option_intcp` TEXT NULL ,
  `flag_option_intcp` INT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_intcp`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_intcp_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_intcp_silness_loe`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_intcp_silness_loe` (
  `id_tbl_intcp_silness_loe` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT NOT NULL ,
  `flag_option_intcp_silness_loe` INT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_intcp_silness_loe`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_intcp_silness_loe_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_periodontal_chart`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_chart` (
  `id_tbl_periodontal_chart` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT NOT NULL ,
  `observations_periodontal_chart` TEXT NULL ,
  `flag_option_periodontal_chart` INT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_periodontal_chart`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_periodontal_chart_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_periodontal_technique_brushing`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_technique_brushing` (
  `id_tbl_periodontal_technique_brushing` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT NOT NULL ,
  `name_option_periodontal_technique_brushing` VARCHAR(45) NULL ,
  `flag_option_periodontal_technique_brushing` INT NULL ,
  `observations_periodontal_technique_brushing` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_periodontal_technique_brushing`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_periodontal_technique_brushing_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_periodontal_brushing`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_brushing` (
  `id_tbl_periodontal_brushing` INT NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT NOT NULL ,
  `name_option_periodontal_brushing` VARCHAR(45) NULL ,
  `type_periodontal_brushing` INT NULL ,
  `flag_option_periodontal_brushing` INT NULL ,
  `observations_periodontal_brushing` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_periodontal_brushing`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_ tbl_periodontal_brushing_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_dental_pieces`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_dental_pieces` (
  `id_tbl_dental_piece` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_dental_examination` INT NOT NULL ,
  `number_dental_piece` INT NULL ,
  `state_dental_piece` VARCHAR(256) NULL ,
  `flag_dental_piece` INT NULL ,
  `type_dental_piece` VARCHAR(128) NULL ,
  `observation_dental_piece` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_dental_piece`) ,
  INDEX `fk_tbl_dental_pieces_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_dental_pieces_tbl_dental_examination1`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_treatment_decision_dental_pieces`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_treatment_decision_dental_pieces` (
  `id_tbl_treatment_decision_dental_piece` INT NOT NULL ,
  `id_tbl_dental_piece` INT NOT NULL ,
  `name_treatment_decision_dental_piece` VARCHAR(64) NULL ,
  `type_treatment_decision_dental_piece` INT NULL ,
  `observation_treatment_decision_dental_piece` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  PRIMARY KEY (`id_tbl_treatment_decision_dental_piece`) ,
  INDEX `fk_tbl_treatment_decision_dental_pieces_tbl_dental_pieces1_idx` (`id_tbl_dental_piece` ASC) ,
  CONSTRAINT `fk_tbl_treatment_decision_dental_pieces_tbl_dental_pieces`
    FOREIGN KEY (`id_tbl_dental_piece` )
    REFERENCES `dentist`.`tbl_dental_pieces` (`id_tbl_dental_piece` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_caries_risk_classification`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_caries_risk_classification` (
  `id_tbl_caries_risk_classification` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_dental_examination` INT NOT NULL ,
  `name_caries_risk_classification` VARCHAR(64) NULL ,
  `observation_caries_risk_classification` TEXT NULL ,
  `score_caries_risk_classification` VARCHAR(64) NULL ,
  `total_sector_caries_risk_classification` VARCHAR(64) NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_caries_risk_classification`) ,
  INDEX `fk_tbl_caries_risk_classification_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_caries_risk_classification_tbl_dental_examination`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_periodontal_risk_classification`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_risk_classification` (
  `id_tbl_periodontal_risk_classification` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_dental_examination` INT NOT NULL ,
  `name_periodontal_risk_classification` VARCHAR(64) NULL ,
  `flag_periodontal_risk_classification` INT NULL ,
  `observation_periodontal_risk_classification` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_periodontal_risk_classification`) ,
  INDEX `fk_tbl_caries_risk_classification_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_periodontal_risk_classification_tbl_dental_examination`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_periodontal_biohazard`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_biohazard` (
  `id_tbl_periodontal_biohazard` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_dental_examination` INT NOT NULL ,
  `name_periodontal_biohazard` VARCHAR(64) NULL ,
  `flag_periodontal_biohazard` INT NULL ,
  `observation_periodontal_biohazard` TEXT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_periodontal_biohazard`) ,
  INDEX `fk_tbl_caries_risk_classification_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_periodontal_biohazard_tbl_dental_examination`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_diagnosis`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_diagnosis` (
  `id_tbl_diagnosis` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_diagnosis`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_diagnosis_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_diagnosis`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_diagnosis` (
  `id_tbl_option_diagnosis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_diagnosis` INT NOT NULL ,
  `name_option_diagnosis` VARCHAR(128) NULL ,
  `type_option_diagnosis` INT NULL ,
  `observation_option_diagnosis` VARCHAR(45) NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_diagnosis`) ,
  INDEX `fk_tbl_options_diagnosis_tbl_diagnosis1_idx` (`id_tbl_diagnosis` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_diagnosis_tbl_diagnosis`
    FOREIGN KEY (`id_tbl_diagnosis` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_diagnosis` (`id_tbl_diagnosis` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_prognosis`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_prognosis` (
  `id_tbl_prognosis` INT NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_prognosis`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_ tbl_prognosis_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `dentist`.`tbl_options_prognosis`
-- -----------------------------------------------------
CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_prognosis` (
  `id_tbl_option_prognosis` INT NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT NOT NULL ,
  `id_tbl_prognosis` INT NOT NULL ,
  `name_option_prognosis` VARCHAR(128) NULL ,
  `type_option_prognosis` INT NULL ,
  `observation_option_prognosis` VARCHAR(45) NULL ,
  `create_user_id` VARCHAR(64) NULL ,
  `create_time` DATETIME NULL ,
  `update_user_id` VARCHAR(64) NULL ,
  `update_time` DATETIME NULL ,
  PRIMARY KEY (`id_tbl_option_prognosis`) ,
  INDEX `fk_tbl_options_prognosis_tbl_prognosis1_idx` (`id_tbl_prognosis` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_prognosis_tbl_prognosis`
    FOREIGN KEY (`id_tbl_prognosis` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_prognosis` (`id_tbl_prognosis` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;

USE `dentist` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
