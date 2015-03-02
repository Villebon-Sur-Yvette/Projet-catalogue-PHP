
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`type`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`type` (
  `id_type` INT NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_type`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`genre`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`genre` (
  `id_genre` INT NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_genre`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`editeur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`editeur` (
  `id_editeur` INT NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_editeur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`traduteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`traduteur` (
  `id_traduteur` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_traduteur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`langue_originale`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`langue_originale` (
  `id_langue_originale` INT NOT NULL AUTO_INCREMENT,
  `langue_originale` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_langue_originale`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`langue`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`langue` (
  `id_langue` INT NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_langue`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`Document`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`Document` (
  `id_document` INT NOT NULL AUTO_INCREMENT,
  `titre` VARCHAR(200) NOT NULL,
  `sous-titre` VARCHAR(200) NOT NULL,
  `id_type` INT NOT NULL,
  `id_genre` INT NOT NULL,
  `id_langue` INT NOT NULL,
  `id_traducteur` INT NULL,
  `date_publication` YEAR NOT NULL,
  `lieu_publication` VARCHAR(45) NOT NULL,
  `id_editeur` INT NOT NULL,
  `cote` VARCHAR(45) NOT NULL,
  `isbn` VARCHAR(45) NOT NULL,
  `description` VARCHAR(200) NOT NULL,
  `langue_originale` INT NULL,
  PRIMARY KEY (`id_document`),
  INDEX `fk_Document_type_idx` (`id_type` ASC),
  INDEX `fk_Document_genre1_idx` (`id_genre` ASC),
  INDEX `fk_Document_editeur1_idx` (`id_editeur` ASC),
  INDEX `fk_Document_traduteur1_idx` (`id_traducteur` ASC),
  INDEX `fk_Document_langue_originale1_idx` (`langue_originale` ASC),
  INDEX `fk_Document_langue1_idx` (`id_langue` ASC),
  CONSTRAINT `fk_Document_type`
    FOREIGN KEY (`id_type`)
    REFERENCES `mydb`.`type` (`id_type`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Document_genre1`
    FOREIGN KEY (`id_genre`)
    REFERENCES `mydb`.`genre` (`id_genre`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Document_editeur1`
    FOREIGN KEY (`id_editeur`)
    REFERENCES `mydb`.`editeur` (`id_editeur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Document_traduteur1`
    FOREIGN KEY (`id_traducteur`)
    REFERENCES `mydb`.`traduteur` (`id_traduteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Document_langue_originale1`
    FOREIGN KEY (`langue_originale`)
    REFERENCES `mydb`.`langue_originale` (`id_langue_originale`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Document_langue1`
    FOREIGN KEY (`id_langue`)
    REFERENCES `mydb`.`langue` (`id_langue`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`auteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`auteur` (
  `id_auteur` INT NOT NULL AUTO_INCREMENT,
  `nom` VARCHAR(45) NOT NULL,
  `prenom` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_auteur`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`document_auteur`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`document_auteur` (
  `id_document_auteur` INT NOT NULL AUTO_INCREMENT,
  `id_document` INT NOT NULL,
  `id_auteur` INT NOT NULL,
  PRIMARY KEY (`id_document_auteur`),
  INDEX `fk_document_auteur_Document1_idx` (`id_document` ASC),
  INDEX `fk_document_auteur_auteur1_idx` (`id_auteur` ASC),
  CONSTRAINT `fk_document_auteur_Document1`
    FOREIGN KEY (`id_document`)
    REFERENCES `mydb`.`Document` (`id_document`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_document_auteur_auteur1`
    FOREIGN KEY (`id_auteur`)
    REFERENCES `mydb`.`auteur` (`id_auteur`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`theme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`theme` (
  `id_theme` INT NOT NULL AUTO_INCREMENT,
  `intitule` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id_theme`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`document_theme`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`document_theme` (
  `id_document_theme` INT NOT NULL AUTO_INCREMENT,
  `id_document` INT NOT NULL,
  `id_theme` INT NOT NULL,
  PRIMARY KEY (`id_document_theme`),
  INDEX `fk_document_theme_Document1_idx` (`id_document` ASC),
  INDEX `fk_document_theme_theme1_idx` (`id_theme` ASC),
  CONSTRAINT `fk_document_theme_Document1`
    FOREIGN KEY (`id_document`)
    REFERENCES `mydb`.`Document` (`id_document`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_document_theme_theme1`
    FOREIGN KEY (`id_theme`)
    REFERENCES `mydb`.`theme` (`id_theme`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
