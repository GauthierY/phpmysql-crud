CREATE DATABASE gestion_stocks;

USE gestion_stocks;

CREATE TABLE produit(
id INT AUTO_INCREMENT PRIMARY KEY,
    nom varchar(20),
    prix decimal(6,2)  
);

INSERT INTO `produit`(`nom`, `prix`) VALUES ('ps5',500.00);

UPDATE `produit` SET 
nom = 'xbox',
prix = 1000.90
WHERE id = 1;

DELETE FROM `produit` WHERE id = 1