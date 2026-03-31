CREATE DATABASE caisse;
USE caisse;

CREATE TABLE produit (
    id_produit INT AUTO_INCREMENT PRIMARY KEY,
    designation VARCHAR(100) NOT NULL,
    prix DECIMAL(10,2) NOT NULL,
    quantite_stock INT NOT NULL,
    date_creation TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE caisse (
    id_caisse INT AUTO_INCREMENT PRIMARY KEY,
    numero_caisse INT NOT NULL,
    statut VARCHAR(50) DEFAULT 'ouverte'
);

CREATE TABLE achat (
    id_achat INT AUTO_INCREMENT PRIMARY KEY,
    id_caisse INT NOT NULL,
    date_achat TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (id_caisse) REFERENCES caisse(id_caisse)
);

CREATE TABLE detail_achat (
    id_detail INT AUTO_INCREMENT PRIMARY KEY,
    id_achat INT NOT NULL,
    id_produit INT NOT NULL,
    quantite INT NOT NULL,
    prix_unitaire DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_achat) REFERENCES achat(id_achat),
    FOREIGN KEY (id_produit) REFERENCES produit(id_produit)
);

INSERT INTO produit (designation, prix, quantite_stock) VALUES
('Riz blanc 1kg', 2500, 50),
('Lait', 1800, 30),
('Biscuit', 1200, 40),
('Huile', 7000, 20),
('Sucre 1kg', 3000, 25);

INSERT INTO caisse (numero_caisse) VALUES
(1),
(2);

