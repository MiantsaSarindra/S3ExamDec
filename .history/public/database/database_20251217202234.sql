CREATE DATABASE livraison.
USE livraison.

CREATE TABLE livraisonChauffeur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
);

CREATE TABLE livraisonVoiture(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
);

			-  : id, nom, kg
CREATE TABLE livraisonColis(
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    nom VARCHAR(100),
);