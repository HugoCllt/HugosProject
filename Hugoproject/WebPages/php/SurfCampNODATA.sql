


CREATE DATABASE IF NOT EXISTS surfcamp2;
USE surfcamp2;

DROP TABLE IF EXISTS produit;
DROP TABLE IF EXISTS categorie;
DROP TABLE IF EXISTS utilisateur;
DROP TABLE IF EXISTS commande;
DROP TABLE IF EXISTS facture;

CREATE TABLE categorie (
  idCategorie int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  titre varchar(255) NOT NULL
);

CREATE TABLE utilisateur (
  idUtilisateur int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nom varchar(30) NOT NULL,
  prenom varchar(30) NOT NULL,
  dateNaiss date NOT NULL,
  sexe varchar(5) NOT NULL
);


CREATE TABLE produit (
  idProduit int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  lienImage varchar(20) NOT NULL,
  denomination varchar(255) NOT NULL,
  saison varchar(4) NOT NULL,
  descriptionProd text NULL,
  prix int NOT NULL,
  quantite int NOT NULL,
  idCategorie int NOT NULL,
  FOREIGN KEY (idCategorie) REFERENCES categorie(idCategorie)
);

CREATE TABLE commande (
  idCommande int NOT NULL AUTO_INCREMENT PRIMARY KEY,
  idUtilisateur int NOT NULL,
  FOREIGN KEY (idUtilisateur) REFERENCES utilisateur(idUtilisateur)
);

CREATE TABLE facture (
  idCommande int NOT NULL,
  idProduit int NOT NULL,
  quantite int(5) NOT NULL,
  CONSTRAINT pk_facture PRIMARY KEY (idCommande,idProduit),
  FOREIGN KEY (idCommande) REFERENCES commande(idCommande),
  FOREIGN KEY (idProduit) REFERENCES produit(idProduit)
);


