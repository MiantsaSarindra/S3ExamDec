CREATE DATABASE livraison.
USE livraison.

CREATE TABLE livraisonChauffeur (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
);

CREATE TABLE livraisonVoiture (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100)
);

CREATE TABLE livraisonColis (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    kg INT
);

CREATE TABLE livraisonStatut (
    id INT PRIMARY KEY AUTO_INCREMENT,
    valeur VARCHAR(100)
);

CREATE TABLE livraisonLivraison (
    id INT PRIMARY KEY AUTO_INCREMENT,
    idColis INT,
    adresseDepart VARCHAR(100),
    adresseDestination VARCHAR(100),
);

			-  : , , , , idStatut, idChauffeur, idVoiture, daty, salaire, montant, benefice
