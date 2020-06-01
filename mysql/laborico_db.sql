SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema Laborico
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `Laborico` ;

-- -----------------------------------------------------
-- Schema Laborico
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `Laborico` DEFAULT CHARACTER SET utf8mb4 ;
USE `Laborico` ;

-- -----------------------------------------------------
-- Table `Laborico`.`Usuarios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Laborico`.`Usuarios` ;

CREATE TABLE IF NOT EXISTS `Laborico`.`Usuarios` (
 `IdUsuario` INT NOT NULL AUTO_INCREMENT,
 `TipoIdentificacion` varchar (50)  
	check (TipoIdentificacion in ('CEDULA','TARJETA IDENTIDAD','PASAPORTE','CEDULA EXTRANJERIA')),
 `NumeroIdentificacion` varchar(50) NOT NULL,
 `Nombres` varchar(255) NOT NULL,
 `Apellidos` varchar(255) NOT NULL,
 `Direccion` varchar(255) NOT NULL,
 `TelefonoFijo` varchar(10) NOT NULL,
 `TelefonoCelular` varchar(10) NOT NULL, 
 PRIMARY KEY (`IdUsuario`));


-- -----------------------------------------------------
-- Table `Laborico`.`Roles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Laborico`.`Roles` ;

CREATE TABLE IF NOT EXISTS `Laborico`.`Roles` (
 `IdRol` INT NOT NULL AUTO_INCREMENT,
 `Nombre` varchar(255) NOT NULL,
 PRIMARY KEY (`IdRol`));
 
 -- -----------------------------------------------------
-- Table `Laborico`.`UsuarioRoles`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Laborico`.`UsuarioRoles` ;

CREATE TABLE IF NOT EXISTS `Laborico`.`UsuarioRoles` (
 `IdUsuarioRoles` INT NOT NULL AUTO_INCREMENT,
 `IdUsuario` INT NOT NULL ,
 `idRol` varchar(255) NOT NULL,
 PRIMARY KEY (`IdUsuarioRoles`));



-- -----------------------------------------------------
-- Table `Laborico`.`Category`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Laborico`.`Categorias` ;

CREATE TABLE IF NOT EXISTS `Laborico`.`Categories` (
 `IdCategoria` INT NOT NULL AUTO_INCREMENT,
 `Nombre` varchar(255) NOT NULL,
 PRIMARY KEY (`IdCategoria`));

-- -----------------------------------------------------
-- Table `Laborico`.`Servicios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Laborico`.`Servicios` ;

CREATE TABLE IF NOT EXISTS `Laborico`.`Servicios` (
 `IdServicio` INT NOT NULL AUTO_INCREMENT,
 `Idcategoria` INT NOT NULL,
 `Nombre` varchar(255) NOT NULL,
 PRIMARY KEY (`IdServicio`),
 CONSTRAINT `Idcategoria`
		FOREIGN KEY (`Idcategoria`)
        REFERENCES `Laborico`.`Categorias` (`Idcategoria`)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT
 );

-- -----------------------------------------------------
-- Table `Laborico`.`Citas`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Laborico`.`Citas` ;

CREATE TABLE IF NOT EXISTS `Laborico`.`Citas` (
 `IdCita` INT NOT NULL AUTO_INCREMENT,
 `IdServicio` INT NOT NULL ,
 `Fecha` date,
 `Direccion` varchar(255) ,
 `Virtual` BIT  ,
 `PlataformaVirtual` varchar(255),
 `Hora` time,
 PRIMARY KEY (`IdCita`),
 CONSTRAINT `IdServicio`
		FOREIGN KEY (`IdServicio`)
        REFERENCES `Laborico`.`Servicios` (`IdServicio`)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT
 );


-- -----------------------------------------------------
-- Table `Laborico`.`UsuarioServicios`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `Laborico`.`UsuarioServicios` ;

CREATE TABLE IF NOT EXISTS `Laborico`.`UsuarioServicios` (
 `IdUsuarioServicios` INT NOT NULL AUTO_INCREMENT,
 `IdUsuario` INT NOT NULL ,
 `IdServicio` INT NOT NULL ,
 `Costo` decimal (18,2) ,
 `CantidadHoras` decimal (10,2)  ,
 `PlataformaVirtual` varchar(100),
 `DescripcionServicio` varchar(255),
 PRIMARY KEY (`IdUsuarioServicios`),
 CONSTRAINT `IdServicio2`
		FOREIGN KEY (`IdServicio`)
        REFERENCES `Laborico`.`Servicios` (`IdServicio`)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT,
CONSTRAINT `IdUsuario`
		FOREIGN KEY (`IdUsuario`)
        REFERENCES `Laborico`.`Usuarios` (`IdUsuario`)
		ON DELETE RESTRICT
		ON UPDATE RESTRICT
 );





SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;