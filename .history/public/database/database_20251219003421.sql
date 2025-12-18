CREATE DATABASE livraison
USE livraison

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
    benefice DECIMAL(15,2),
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

CREATE TABLE Equivalence (
    id INT PRIMARY KEY AUTO_INCREMENT,
    kg INT,
    montant DECIMAL(15,2)
);

-- Insertion pour livraisonChauffeur
INSERT INTO livraisonChauffeur (nom) VALUES
('Jean Rakoto'),
('Paul Andriamanitra'),
('Marc Rasoanaivo'),
('Lucas Randriamihaja'),
('Hery Ramanantsoa'),
('Tiana Razafindrakoto'),
('Ando Ratsimbazafy'),
('Mickael Andrianina'),
('Nomena Rakotomalala'),
('Tojo Raharison');

-- Insertion pour livraisonVoiture
INSERT INTO livraisonVoiture (nom) VALUES
('Toyota Hilux'),
('Nissan Navara'),
('Isuzu D-Max'),
('Ford Ranger'),
('Toyota Land Cruiser'),
('Hyundai H100'),
('Peugeot Boxer'),
('Renault Master'),
('Mercedes Sprinter'),
('Volkswagen Crafter');

-- Insertion pour livraisonColis
INSERT INTO livraisonColis (nom, kg) VALUES
('Ordinateur portable', 3),
('Unité centrale', 8),
('Écran 24 pouces', 6),
('Imprimante', 12),
('Télévision 55 pouces', 20),
('Micro-ondes', 15),
('Réfrigérateur', 70),
('Machine à laver', 80),
('Carton de livres', 25),
('Colis alimentaire', 10);


-- Insertion pour livraisonStatut
INSERT INTO livraisonStatut (valeur) VALUES 
("attente"),
("livré"),
("annulé");