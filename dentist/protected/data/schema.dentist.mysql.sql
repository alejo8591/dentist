SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_user` (
  `username` VARCHAR(64) NOT NULL ,
  `type_document` VARCHAR(128) NULL DEFAULT NULL ,
  `user_status` INT(11) NULL DEFAULT 0 ,
  `type_user` INT(11) NULL DEFAULT 0 ,
  `id_document` INT(11) NULL DEFAULT NULL ,
  `email` VARCHAR(128) NULL DEFAULT NULL ,
  `password` VARCHAR(128) NULL DEFAULT NULL ,
  `last_login_time` DATETIME NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  UNIQUE INDEX `id_document_UNIQUE` (`id_document` ASC) ,
  UNIQUE INDEX `email_UNIQUE` (`email` ASC) ,
  UNIQUE INDEX `username_UNIQUE` (`username` ASC) ,
  PRIMARY KEY (`username`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_anamnesis` (
  `id_tbl_anamnesis` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `name` VARCHAR(128) NULL DEFAULT NULL ,
  `surname` VARCHAR(128) NULL DEFAULT NULL ,
  `date_birth` DATE NULL DEFAULT NULL ,
  `place_of_birth` VARCHAR(128) NULL DEFAULT NULL ,
  `genre` INT(11) NULL DEFAULT NULL ,
  `blood_group` INT(11) NULL DEFAULT NULL ,
  `id_tbl_country` INT(11) NULL DEFAULT NULL ,
  `id_tbl_city` INT(11) NULL DEFAULT NULL ,
  `id_tbl_level_schooling` INT(11) NULL DEFAULT NULL ,
  `id_tbl_profession` INT(11) NULL DEFAULT NULL ,
  `occupation` VARCHAR(64) NULL DEFAULT NULL ,
  `contact` VARCHAR(64) NULL DEFAULT NULL ,
  `id_tbl_healt_regimen` INT(11) NULL DEFAULT NULL ,
  `id_tbl_healt_institution` INT(11) NULL DEFAULT NULL ,
  `description_healt` TEXT NULL DEFAULT NULL ,
  `family_history` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
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
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_country` (
  `id_tbl_country` INT(11) NOT NULL AUTO_INCREMENT ,
  `country_code` INT(11) NULL DEFAULT NULL ,
  `name_country` VARCHAR(128) NOT NULL ,
  `postal_code` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL COMMENT 'http://countrycode.org/' ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
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
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_city`) ,
  INDEX `fk_tbl_city_tbl_country1_idx` (`id_tbl_country` ASC) ,
  CONSTRAINT `fk_tbl_city_tbl_country`
    FOREIGN KEY (`id_tbl_country` )
    REFERENCES `dentist`.`tbl_country` (`id_tbl_country` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_address` (
  `id_tbl_address` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `type_address` VARCHAR(64) NULL DEFAULT NULL ,
  `address` VARCHAR(256) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_address`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_address_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_address_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_phone` (
  `id_tbl_phone` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `type_phone` VARCHAR(64) NULL DEFAULT NULL ,
  `phone` VARCHAR(64) NULL DEFAULT NULL ,
  `phone_extension` VARCHAR(64) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_phone`, `id_tbl_anamnesis`, `username`) ,
  INDEX `fk_tbl_phone_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_phone_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_level_schooling` (
  `id_tbl_level_schooling` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_level_schooling` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_level_schooling`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_profession` (
  `id_tbl_profession` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_profession` VARCHAR(45) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_profession`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_healt_regimen` (
  `id_tbl_healt_regimen` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_healt_institution` INT(11) NOT NULL ,
  `name_healt_regimen` VARCHAR(128) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_healt_regimen`) ,
  INDEX `fk_tbl_healt_regimen_tbl_healt_institution1_idx` (`id_tbl_healt_institution` ASC) ,
  CONSTRAINT `fk_tbl_healt_regimen_tbl_healt_institution`
    FOREIGN KEY (`id_tbl_healt_institution` )
    REFERENCES `dentist`.`tbl_healt_institution` (`id_tbl_healt_institution` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_healt_institution` (
  `id_tbl_healt_institution` INT(11) NOT NULL AUTO_INCREMENT ,
  `name_healt_institution` VARCHAR(128) NULL DEFAULT NULL ,
  `id_healt_institution` VARCHAR(45) NULL DEFAULT NULL ,
  `description` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_healt_institution`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_personal_background` (
  `id_tbl_personal_background` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_personal_background`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_personal_background_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_personal_background_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_physical_examination` (
  `id_tbl_physical_examination` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_physical_examination`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_physical_examination_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_atm` (
  `id_tbl_atm` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `observation_atm` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_atm`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_atm_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_atm_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm` (
  `id_tbl_option_atm` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_atm` INT(11) NOT NULL ,
  `name_option_atm` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_atm` INT(11) NULL DEFAULT NULL ,
  `observation_atm` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_atm`) ,
  INDEX `fk_tbl_options_atm_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_social_habits` (
  `id_tbl_option_social_habits` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_personal_background` INT(11) NOT NULL ,
  `name_option_social_habits` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_social_habits` INT(11) NULL DEFAULT NULL ,
  `observation_option_social_habits` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_social_habits`) ,
  INDEX `fk_tbl_options_social_habits_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_social_habits_tbl_personal_background1`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_oral_habits` (
  `id_ tbl_option_oral_habits` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_personal_background` INT(11) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `name_option_oral_habits` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_oral_habits` INT(11) NULL DEFAULT NULL ,
  `observation_option_oral_habits` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_ tbl_option_oral_habits`) ,
  INDEX `fk_tbl_options_oral_habits_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_oral_habits_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_dental_history` (
  `id_tbl_option_dental_history` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_personal_background` INT(11) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `name_option_dental_history` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_dental_history` INT(11) NULL DEFAULT NULL ,
  `observation_option_dental_history` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_dental_history`) ,
  INDEX `fk_tbl_options_dental_history_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_dental_history_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_pathological_history` (
  `id_tbl_option_pathological_history` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_personal_background` INT(11) NOT NULL ,
  `name_option_pathological_history` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_pathological_history` INT(11) NULL DEFAULT NULL ,
  `observation_option_pathological_history` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_pathological_history`) ,
  INDEX `fk_tbl_options_pathological_history_tbl_personal_background_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_pathological_history_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_obstetric_gynecology` (
  `id_tbl_option_obstetric_gynecology` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_personal_background` INT(11) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `name_option_obstetric_gynecology` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_option_obstetric_gynecology` INT(11) NULL DEFAULT NULL ,
  `observation_option_obstetric_gynecology` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_obstetric_gynecology`) ,
  INDEX `fk_tbl_options_obstetric_gynecology_tbl_personal_background_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_obstetric_gynecology_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_personal_background` (
  `id_tbl_option_personal_background` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_personal_background` INT(11) NOT NULL ,
  `name_option_personal_background` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_personal_background` INT(11) NULL DEFAULT NULL ,
  `observation_option_personal_background` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_personal_background`) ,
  INDEX `fk_tbl_options_personal_background_tbl_personal_background1_idx` (`id_tbl_personal_background` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_personal_background_tbl_personal_background`
    FOREIGN KEY (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_personal_background` (`id_tbl_personal_background` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_vital signs` (
  `id_tbl_option_vital signs` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_physical_examination` INT(11) NOT NULL ,
  `name_option_vital signs` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_vital signs` INT(11) NULL DEFAULT NULL ,
  `observation_option_vital signs` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_vital signs`) ,
  INDEX `fk_tbl_options_vital signs_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_vital signs_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_extraoral_examination` (
  `id_tbl_option_extraoral_examination` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_physical_examination` INT(11) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `name_option_extraoral_examination` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_extraoral_examination` INT(11) NULL DEFAULT NULL ,
  `observation_option_extraoral_examination` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_extraoral_examination`) ,
  INDEX `fk_tbl_options_extraoral_examination_tbl_physical_examinati_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_extraoral_examination_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_neck` (
  `id_tbl_option_neck` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_physical_examination` INT(11) NOT NULL ,
  `name_option_neck` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_neck` INT(11) NULL DEFAULT NULL ,
  `observation_option_neck` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_neck`) ,
  INDEX `fk_tbl_options_neck_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_neck_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_lymphadenopathy` (
  `id_ tbl_option_lymphadenopathy` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_physical_examination` INT(11) NOT NULL ,
  `name_option_lymphadenopathy` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_lymphadenopathy` INT(11) NULL DEFAULT NULL ,
  `observation_option_lymphadenopathy` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_ tbl_option_lymphadenopathy`) ,
  INDEX `fk_tbl_options_lymphadenopathy_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_lymphadenopathy_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_systems` (
  `id_ tbl_option_systems` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_physical_examination` INT(11) NOT NULL ,
  `name_option_systems` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_systems` INT(11) NULL DEFAULT NULL ,
  `type_option_systems` VARCHAR(64) NULL DEFAULT NULL ,
  `observation_option_systems` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_ tbl_option_systems`) ,
  INDEX `fk_tbl_options_systems_tbl_physical_examination1_idx` (`id_tbl_physical_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_systems_tbl_physical_examination`
    FOREIGN KEY (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_physical_examination` (`id_tbl_physical_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_mandibular_movements` (
  `id_tbl_option_atm_mandibular_movements` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_atm` INT(11) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `name_option_atm_mandibular_movements` VARCHAR(128) NULL DEFAULT NULL ,
  `type_option_atm_mandibular_movements` VARCHAR(64) NULL DEFAULT NULL ,
  `flag_option_atm_mandibular_movements` INT(11) NULL DEFAULT NULL ,
  `observation_atm_mandibular_movements` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_atm_mandibular_movements`) ,
  INDEX `fk_tbl_options_atm_mandibular_movements_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_mandibular_movements_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_soft_tissue` (
  `id_tbl_option_atm_soft_tissue` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_atm` INT(11) NOT NULL ,
  `name_option_atm_soft_tissue` VARCHAR(128) NULL DEFAULT NULL ,
  `flag_option_atm_soft_tissue` INT(11) NULL DEFAULT NULL ,
  `observation_atm_soft_tissue` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_atm_soft_tissue`) ,
  INDEX `fk_tbl_options_atm_soft_tissue_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_soft_tissue_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_intraoral_soft_tissue` (
  `id_tbl_option_atm_intraoral_soft_tissue` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_atm` INT(11) NOT NULL ,
  `name_option_atm_intraoral_soft_tissue` VARCHAR(128) NULL DEFAULT NULL ,
  `type_option_atm_intraoral_soft_tissue` INT(11) NULL DEFAULT NULL ,
  `observation_option_atm_intraoral_soft_tissue` TEXT NULL DEFAULT NULL ,
  `flag_option_atm_intraoral_soft_tissue` INT(11) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_atm_intraoral_soft_tissue`) ,
  INDEX `fk_tbl_options_atm_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_intraoral_soft_tissue_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_atm_intraoral_hard_tissue` (
  `id_tbl_option_atm_intraoral_hard_tissue` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_atm` INT(11) NOT NULL ,
  `name_option_atm_intraoral_hard_tissue` VARCHAR(128) NULL DEFAULT NULL ,
  `type_option_atm_intraoral_hard_tissue` INT(11) NULL DEFAULT NULL ,
  `observation_option_hard_intraoral_hard_tissue` TEXT NULL DEFAULT NULL ,
  `flag_option_atm_intraoral_hard_tissue` INT(11) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_atm_intraoral_hard_tissue`) ,
  INDEX `fk_tbl_options_atm_tbl_atm1_idx` (`id_tbl_atm` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_atm_intraoral_hard_tissue_atm_tbl_atm`
    FOREIGN KEY (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_atm` (`id_tbl_atm` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_dental_examination` (
  `id_tbl_dental_examination` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_dental_examination`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_physical_examination_tbl_anamnesis10`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_examination` (
  `id_tbl_periodontal_examination` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  `description_periodontal_examination` TEXT NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_periodontal_examination`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_physical_examination_tbl_anamnesis11`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_intcp` (
  `id_tbl_intcp` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT(11) NOT NULL ,
  `name_option_intcp` VARCHAR(128) NULL DEFAULT NULL ,
  `code_intcp` VARCHAR(64) NULL DEFAULT NULL ,
  `nt_intcp` VARCHAR(64) NULL DEFAULT NULL ,
  `observation_option_intcp` TEXT NULL DEFAULT NULL ,
  `flag_option_intcp` INT(11) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_intcp`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_intcp_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_intcp_silness_loe` (
  `id_tbl_intcp_silness_loe` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT(11) NOT NULL ,
  `flag_option_intcp_silness_loe` INT(11) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_intcp_silness_loe`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_intcp_silness_loe_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_chart` (
  `id_tbl_periodontal_chart` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT(11) NOT NULL ,
  `observations_periodontal_chart` TEXT NULL DEFAULT NULL ,
  `flag_option_periodontal_chart` INT(11) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_periodontal_chart`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_periodontal_chart_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_technique_brushing` (
  `id_tbl_periodontal_technique_brushing` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT(11) NOT NULL ,
  `name_option_periodontal_technique_brushing` VARCHAR(45) NULL DEFAULT NULL ,
  `flag_option_periodontal_technique_brushing` INT(11) NULL DEFAULT NULL ,
  `observations_periodontal_technique_brushing` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_periodontal_technique_brushing`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_periodontal_technique_brushing_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_brushing` (
  `id_tbl_periodontal_brushing` INT(11) NOT NULL AUTO_INCREMENT ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_periodontal_examination` INT(11) NOT NULL ,
  `name_option_periodontal_brushing` VARCHAR(45) NULL DEFAULT NULL ,
  `type_periodontal_brushing` INT(11) NULL DEFAULT NULL ,
  `flag_option_periodontal_brushing` INT(11) NULL DEFAULT NULL ,
  `observations_periodontal_brushing` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_periodontal_brushing`) ,
  INDEX `fk_tbl_intcp_tbl_periodontal_examination1_idx` (`id_tbl_periodontal_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_ tbl_periodontal_brushing_tbl_periodontal_examination`
    FOREIGN KEY (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_periodontal_examination` (`id_tbl_periodontal_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_dental_pieces` (
  `id_tbl_dental_piece` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_dental_examination` INT(11) NOT NULL ,
  `number_dental_piece` INT(11) NULL DEFAULT NULL ,
  `state_dental_piece` VARCHAR(256) NULL DEFAULT NULL ,
  `flag_dental_piece` INT(11) NULL DEFAULT NULL ,
  `type_dental_piece` VARCHAR(128) NULL DEFAULT NULL ,
  `observation_dental_piece` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_dental_piece`) ,
  INDEX `fk_tbl_dental_pieces_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_dental_pieces_tbl_dental_examination1`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_treatment_decision_dental_pieces` (
  `id_tbl_treatment_decision_dental_piece` INT(11) NOT NULL ,
  `id_tbl_dental_piece` INT(11) NOT NULL ,
  `name_treatment_decision_dental_piece` VARCHAR(64) NULL DEFAULT NULL ,
  `type_treatment_decision_dental_piece` INT(11) NULL DEFAULT NULL ,
  `observation_treatment_decision_dental_piece` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_treatment_decision_dental_piece`) ,
  INDEX `fk_tbl_treatment_decision_dental_pieces_tbl_dental_pieces1_idx` (`id_tbl_dental_piece` ASC) ,
  CONSTRAINT `fk_tbl_treatment_decision_dental_pieces_tbl_dental_pieces`
    FOREIGN KEY (`id_tbl_dental_piece` )
    REFERENCES `dentist`.`tbl_dental_pieces` (`id_tbl_dental_piece` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_caries_risk_classification` (
  `id_tbl_caries_risk_classification` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_dental_examination` INT(11) NOT NULL ,
  `name_caries_risk_classification` VARCHAR(64) NULL DEFAULT NULL ,
  `observation_caries_risk_classification` TEXT NULL DEFAULT NULL ,
  `score_caries_risk_classification` VARCHAR(64) NULL DEFAULT NULL ,
  `total_sector_caries_risk_classification` VARCHAR(64) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_caries_risk_classification`) ,
  INDEX `fk_tbl_caries_risk_classification_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_caries_risk_classification_tbl_dental_examination`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_risk_classification` (
  `id_tbl_periodontal_risk_classification` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_dental_examination` INT(11) NOT NULL ,
  `name_periodontal_risk_classification` VARCHAR(64) NULL DEFAULT NULL ,
  `flag_periodontal_risk_classification` INT(11) NULL DEFAULT NULL ,
  `observation_periodontal_risk_classification` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_periodontal_risk_classification`) ,
  INDEX `fk_tbl_caries_risk_classification_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_periodontal_risk_classification_tbl_dental_examination`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_periodontal_biohazard` (
  `id_tbl_periodontal_biohazard` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_dental_examination` INT(11) NOT NULL ,
  `name_periodontal_biohazard` VARCHAR(64) NULL DEFAULT NULL ,
  `flag_periodontal_biohazard` INT(11) NULL DEFAULT NULL ,
  `observation_periodontal_biohazard` TEXT NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_periodontal_biohazard`) ,
  INDEX `fk_tbl_caries_risk_classification_tbl_dental_examination1_idx` (`id_tbl_dental_examination` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_periodontal_biohazard_tbl_dental_examination`
    FOREIGN KEY (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_dental_examination` (`id_tbl_dental_examination` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_diagnosis` (
  `id_tbl_diagnosis` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_diagnosis`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_tbl_diagnosis_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_diagnosis` (
  `id_tbl_option_diagnosis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_diagnosis` INT(11) NOT NULL ,
  `name_option_diagnosis` VARCHAR(128) NULL DEFAULT NULL ,
  `type_option_diagnosis` INT(11) NULL DEFAULT NULL ,
  `observation_option_diagnosis` VARCHAR(45) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_diagnosis`) ,
  INDEX `fk_tbl_options_diagnosis_tbl_diagnosis1_idx` (`id_tbl_diagnosis` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_diagnosis_tbl_diagnosis`
    FOREIGN KEY (`id_tbl_diagnosis` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_diagnosis` (`id_tbl_diagnosis` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_prognosis` (
  `id_tbl_prognosis` INT(11) NOT NULL AUTO_INCREMENT ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_prognosis`, `username`, `id_tbl_anamnesis`) ,
  INDEX `fk_tbl_physical_examination_tbl_anamnesis1_idx` (`id_tbl_anamnesis` ASC, `username` ASC) ,
  CONSTRAINT `fk_ tbl_prognosis_tbl_anamnesis`
    FOREIGN KEY (`id_tbl_anamnesis` , `username` )
    REFERENCES `dentist`.`tbl_anamnesis` (`id_tbl_anamnesis` , `username` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;

CREATE  TABLE IF NOT EXISTS `dentist`.`tbl_options_prognosis` (
  `id_tbl_option_prognosis` INT(11) NOT NULL ,
  `username` VARCHAR(64) NOT NULL ,
  `id_tbl_anamnesis` INT(11) NOT NULL ,
  `id_tbl_prognosis` INT(11) NOT NULL ,
  `name_option_prognosis` VARCHAR(128) NULL DEFAULT NULL ,
  `type_option_prognosis` INT(11) NULL DEFAULT NULL ,
  `observation_option_prognosis` VARCHAR(45) NULL DEFAULT NULL ,
  `create_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `create_time` DATETIME NULL DEFAULT NULL ,
  `update_user_id` VARCHAR(64) NULL DEFAULT NULL ,
  `update_time` DATETIME NULL DEFAULT NULL ,
  PRIMARY KEY (`id_tbl_option_prognosis`) ,
  INDEX `fk_tbl_options_prognosis_tbl_prognosis1_idx` (`id_tbl_prognosis` ASC, `username` ASC, `id_tbl_anamnesis` ASC) ,
  CONSTRAINT `fk_tbl_options_prognosis_tbl_prognosis`
    FOREIGN KEY (`id_tbl_prognosis` , `username` , `id_tbl_anamnesis` )
    REFERENCES `dentist`.`tbl_prognosis` (`id_tbl_prognosis` , `username` , `id_tbl_anamnesis` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8
COLLATE = utf8_general_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
