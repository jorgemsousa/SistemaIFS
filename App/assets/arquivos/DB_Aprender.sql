-- MySQL Script generated by MySQL Workbench
-- Sex 01 Jun 2018 17:01:31 -03
-- Model: New Model    Version: 1.0
-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema DB_Aprender
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema DB_Aprender
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `DB_Aprender` DEFAULT CHARACTER SET utf8 ;
USE `DB_Aprender` ;

-- -----------------------------------------------------
-- Table `DB_Aprender`.`aluno`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_Aprender`.`aluno` (
  `idaluno` INT NOT NULL AUTO_INCREMENT,
  `nomealuno` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`idaluno`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Aprender`.`serie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_Aprender`.`serie` (
  `idserie` INT NOT NULL AUTO_INCREMENT,
  `nomeserie` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idserie`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Aprender`.`disciplina`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_Aprender`.`disciplina` (
  `iddisciplina` INT NOT NULL AUTO_INCREMENT,
  `nomedisciplina` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`iddisciplina`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Aprender`.`nota`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_Aprender`.`nota` (
  `nomenota` VARCHAR(20) NOT NULL,
  `valornota` DECIMAL(2,2) NULL,
  `datanota` DATE NULL,
  `aluno_idaluno` INT NOT NULL,
  `serie_idserie` INT NOT NULL,
  `disciplina_iddisciplina` INT NOT NULL,
  PRIMARY KEY (`aluno_idaluno`, `serie_idserie`, `disciplina_iddisciplina`),
  INDEX `fk_nota_aluno1_idx` (`aluno_idaluno` ASC),
  INDEX `fk_nota_serie1_idx` (`serie_idserie` ASC),
  INDEX `fk_nota_disciplina1_idx` (`disciplina_iddisciplina` ASC),
  CONSTRAINT `fk_nota_aluno1`
    FOREIGN KEY (`aluno_idaluno`)
    REFERENCES `DB_Aprender`.`aluno` (`idaluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_nota_serie1`
    FOREIGN KEY (`serie_idserie`)
    REFERENCES `DB_Aprender`.`serie` (`idserie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_nota_disciplina1`
    FOREIGN KEY (`disciplina_iddisciplina`)
    REFERENCES `DB_Aprender`.`disciplina` (`iddisciplina`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Aprender`.`aluno_has_serie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_Aprender`.`aluno_has_serie` (
  `aluno_idaluno` INT NOT NULL,
  `serie_idserie` INT NOT NULL,
  PRIMARY KEY (`aluno_idaluno`, `serie_idserie`),
  INDEX `fk_aluno_has_serie_serie1_idx` (`serie_idserie` ASC),
  INDEX `fk_aluno_has_serie_aluno1_idx` (`aluno_idaluno` ASC),
  CONSTRAINT `fk_aluno_has_serie_aluno1`
    FOREIGN KEY (`aluno_idaluno`)
    REFERENCES `DB_Aprender`.`aluno` (`idaluno`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_aluno_has_serie_serie1`
    FOREIGN KEY (`serie_idserie`)
    REFERENCES `DB_Aprender`.`serie` (`idserie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `DB_Aprender`.`administra`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `DB_Aprender`.`administra` (
  `idadministra` INT NOT NULL AUTO_INCREMENT,
  `nomeadministra` VARCHAR(100) NOT NULL,
  `emailadministra` VARCHAR(100) NOT NULL,
  `senhaadministra` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`idadministra`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

"INSERT INTO administra (nomeadministra, emailadministra, senhaadministra) VALUES ('Administrador', 'admin@admin.com', 'senha')";
