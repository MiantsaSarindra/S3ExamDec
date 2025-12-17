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

CREATE TABLE livraisonStatut(
    id INT PRIMARY KEY AUTO_INCREMENT,
    valeur VARCHAR(100)
);

CREATE TABLE livraisonStatut(
    id INT PRIMARY KEY AUTO_INCREMENT,
    valeur VARCHAR(100)
);

			-  : id, idColis, adresseDepart, adresseDestination, idStatut, idChauffeur, idVoiture, daty, salaire, montant, benefice
