SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

DROP DATABASE IF EXISTS `labottega`;
CREATE SCHEMA IF NOT EXISTS `labottega` DEFAULT CHARACTER SET utf8 ;
USE `labottega` ;

CREATE TABLE IF NOT EXISTS  `categorie` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(15) NOT NULL,
    PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `sottoCategorie` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(15) NOT NULL,
    `idCategoria` INT(5) NOT NULL,
    PRIMARY KEY (`id`),
    FOREIGN KEY (`idCategoria`) REFERENCES `categorie`(`id`)
);



CREATE TABLE IF NOT EXISTS `prodotti` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(50) NOT NULL,
    `marca` VARCHAR(30) NOT NULL,
    `descrizione` VARCHAR(600) NOT NULL,
    `prezzo` FLOAT(10) NOT NULL,
    `immagine` VARCHAR(100) NOT NULL,
    `quantità` INT(3) NOT NULL,
    `idSottoCategoria` INT(11) NOT NULL,
    `dataInserimento` DATE DEFAULT CURRENT_DATE,
    `sconto` INT(3) DEFAULT 0,


    PRIMARY KEY (`id`),
    FOREIGN KEY (`idSottoCategoria`) REFERENCES `sottoCategorie`(`id`)
);

CREATE TABLE IF NOT EXISTS `utenti`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(20),
    `cognome` VARCHAR(30),
    `email` VARCHAR(30) NOT NULL,
    `password` VARCHAR(80) NOT NULL,
    `tipo` INT(2) NOT NULL DEFAULT 0,
    PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS `prodottiInCarrello` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `quantitàDaComprare` INT(3) DEFAULT 1,
    `idUtente` INT(11) NOT NULL,
    `idProdotto` INT(11) NOT NULL,
    
    PRIMARY KEY (`id`),
    FOREIGN KEY (`idUtente`) REFERENCES `utenti`(`id`),
    FOREIGN KEY (`idProdotto`) REFERENCES `prodotti`(`id`)
);

CREATE TABLE IF NOT EXISTS `spedizioni`(
    `id` INT NOT NULL AUTO_INCREMENT,
    `indrizzo` VARCHAR(20) NOT NULL,
    `citta` VARCHAR(20) NOT NULL,
    `nazione` VARCHAR(30) NOT NULL,
    PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS `pagamenti` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `nomeCircuito` VARCHAR(20) NOT NULL,
    PRIMARY KEY(`id`)
);

CREATE TABLE IF NOT EXISTS `ordini` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `dataOrdine` DATE NOT NULL,
    `totaleOrdine` FLOAT NOT NULL,
    `idUtente` INT(5) NOT NULL,
    `idSpedizione` INT(5) NOT NULL,
    `tipoPagamento` INT(2) NOT NULL,
     PRIMARY KEY(`id`),
     FOREIGN KEY(`idUtente`) REFERENCES `utenti`(`id`),
     FOREIGN KEY(`idSpedizione`) REFERENCES `spedizioni`(`id`),
     FOREIGN KEY(`tipoPagamento`) REFERENCES `pagamenti`(`id`)
);

CREATE TABLE IF NOT EXISTS `dettagliOrdini` (
    `id` INT NOT NULL AUTO_INCREMENT,
    `idProdotto` INT(5) NOT NULL,
    `idOrdine` INT(5) NOT NULL,
    `prezzo` FLOAT NOT NULL,
    `quantita` INT(5) NOT NULL,
     PRIMARY KEY(`id`),
     FOREIGN KEY(`idProdotto`) REFERENCES `prodotti`(`id`),
     FOREIGN KEY(`idOrdine`) REFERENCES `ordini`(`id`)
);

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;