SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL';

DROP SCHEMA IF EXISTS `m102` ;
CREATE SCHEMA IF NOT EXISTS `m102` DEFAULT CHARACTER SET latin1 ;
USE `m102` ;

-- -----------------------------------------------------
-- Table `m102`.`ci_sessions`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`ci_sessions` ;

CREATE  TABLE IF NOT EXISTS `m102`.`ci_sessions` (
  `session_id` VARCHAR(40) NOT NULL DEFAULT '0' ,
  `ip_address` VARCHAR(45) NOT NULL DEFAULT '0' ,
  `user_agent` VARCHAR(120) NOT NULL ,
  `last_activity` INT(10) UNSIGNED NOT NULL DEFAULT '0' ,
  `user_data` TEXT NOT NULL ,
  PRIMARY KEY (`session_id`) ,
  INDEX `last_activity_idx` (`last_activity` ASC) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `m102`.`hotel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`hotel` ;

CREATE  TABLE IF NOT EXISTS `m102`.`hotel` (
  `Code` TINYINT(4) NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(45) NOT NULL ,
  `street` VARCHAR(45) NOT NULL ,
  `pobox` INT(11) NOT NULL ,
  `city` VARCHAR(50) NOT NULL ,
  `wifi` TINYINT(4) NOT NULL ,
  `parking` TINYINT(4) NOT NULL ,
  `tv` TINYINT(4) NOT NULL ,
  `ac` TINYINT(4) NOT NULL ,
  PRIMARY KEY (`Code`) )
ENGINE = InnoDB
AUTO_INCREMENT = 2
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `m102`.`posts`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`posts` ;

CREATE  TABLE IF NOT EXISTS `m102`.`posts` (
  `postID` INT(10) NOT NULL AUTO_INCREMENT ,
  `title` VARCHAR(255) NOT NULL ,
  `post` TEXT NOT NULL ,
  `date_added` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP ,
  `userID` INT(4) NOT NULL ,
  `active` TINYINT(1) NOT NULL ,
  PRIMARY KEY (`postID`) )
ENGINE = InnoDB
AUTO_INCREMENT = 9
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `m102`.`roomtype`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`roomtype` ;

CREATE  TABLE IF NOT EXISTS `m102`.`roomtype` (
  `Code` TINYINT(4) NOT NULL AUTO_INCREMENT ,
  `description` VARCHAR(45) NOT NULL ,
  PRIMARY KEY (`Code`) )
ENGINE = InnoDB
AUTO_INCREMENT = 4
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `m102`.`room`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`room` ;

CREATE  TABLE IF NOT EXISTS `m102`.`room` (
  `Code` TINYINT(4) NOT NULL AUTO_INCREMENT ,
  `hotelcode` TINYINT(4) NOT NULL ,
  `roomtype` TINYINT(4) NOT NULL ,
  `quantity` TINYINT(4) NOT NULL ,
  `price` FLOAT NOT NULL ,
  `foto` VARCHAR(255) NULL DEFAULT NULL ,
  PRIMARY KEY (`Code`) ,
  INDEX `fk_room_1` (`hotelcode` ASC) ,
  INDEX `fk_roomtype` (`roomtype` ASC) ,
  CONSTRAINT `fk_hotel`
    FOREIGN KEY (`hotelcode` )
    REFERENCES `m102`.`hotel` (`Code` ),
  CONSTRAINT `fk_roomtype`
    FOREIGN KEY (`roomtype` )
    REFERENCES `m102`.`roomtype` (`Code` ))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `m102`.`user`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`user` ;

CREATE  TABLE IF NOT EXISTS `m102`.`user` (
  `Code` TINYINT(4) NOT NULL AUTO_INCREMENT ,
  `email` VARCHAR(255) NOT NULL ,
  `username` VARCHAR(80) NOT NULL ,
  `password` VARCHAR(255) NOT NULL ,
  `user_type` ENUM('admin','manager','client') NOT NULL ,
  `name` VARCHAR(30) NOT NULL ,
  `id_number` VARCHAR(15) NOT NULL ,
  `doctype` VARCHAR(15) NOT NULL ,
  `street` VARCHAR(30) NOT NULL ,
  `pobox` INT(6) NOT NULL ,
  `city` VARCHAR(30) NOT NULL ,
  `country` VARCHAR(30) NOT NULL ,
  `remark` VARCHAR(40) NOT NULL ,
  PRIMARY KEY (`Code`) )
ENGINE = InnoDB
AUTO_INCREMENT = 3
DEFAULT CHARACTER SET = latin1;


-- -----------------------------------------------------
-- Table `m102`.`reservation`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`reservation` ;

CREATE  TABLE IF NOT EXISTS `m102`.`reservation` (
  `Code` INT(11) NOT NULL AUTO_INCREMENT ,
  `roomcode` TINYINT(4) NOT NULL ,
  `clientcode` TINYINT(4) NOT NULL ,
  `referencecode` TINYINT(4) NOT NULL ,
  `checkin` DATE NOT NULL ,
  `checkout` DATE NOT NULL ,
  `personnum` INT(11) NOT NULL ,
  `price` DECIMAL(10,0) NOT NULL ,
  `breakfast` TINYINT(1) NOT NULL ,
  `remarks` VARCHAR(50) NOT NULL ,
  `reservationdate` DATE NOT NULL ,
  PRIMARY KEY (`Code`) ,
  INDEX `fk_room` (`roomcode` ASC) ,
  INDEX `fk_client` (`clientcode` ASC) ,
  CONSTRAINT `fk_room`
    FOREIGN KEY (`roomcode` )
    REFERENCES `m102`.`room` (`Code` ),
  CONSTRAINT `fk_client`
    FOREIGN KEY (`clientcode` )
    REFERENCES `m102`.`user` (`Code` ))
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;


-- -----------------------------------------------------
-- Table `m102`.`reserved`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `m102`.`reserved` ;

CREATE  TABLE IF NOT EXISTS `m102`.`reserved` (
  `Code` BIGINT(20) NOT NULL ,
  `ReseravtionCode` BIGINT(20) NOT NULL ,
  `ReaservedDate` DATE NOT NULL )
ENGINE = InnoDB
DEFAULT CHARACTER SET = utf8;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
