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
    idStatut INT,
    idChauffeur INT,
    idVoiture INT,
    daty DATE,
    salaire DECIMAL(15,2),
    montant DECIMAL(15,2),
    benefice DECIMAL(15,2)
    FOREIGN KEY (idColis) REFERENCES livraisonColis(id),
    FOREIGN KEY (idStatut) REFERENCES livraisonStatut(id),
    FOREIGN KEY (idChauffeur) REFERENCES livraisonChauffeur(id),
    FOREIGN KEY (idVoiture) REFERENCES livraisonVoiture(id)
);

CREATE TABLE livraisonSociete (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nom VARCHAR(100),
    chiffreAffaire DECIMAL(15,2),
    coutRevient DECIMAL(15,2)
);

CREATE TABLE livraisonSocieteEntrepot (
    id INT PRIMARY KEY AUTO_INCREMENT,
    entrepot VARCHAR(100),
    idSociete INT,
    FOREIGN KEY (idSociete) REFERENCES livraisonSociete(id)
);


