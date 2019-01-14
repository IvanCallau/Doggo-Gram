Doggo-Gram.


CREATE DATABASE InstaDog;

CREATE USER 'adminInstaDog'@'localhost' IDENTIFIED BY 'Inst@D0g';

GRANT ALL PRIVILEGES ON InstaDog.* TO 'adminInstaDog'@'localhost';


CREATE TABLE utilisateur (
	id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
	nom VARCHAR(100),
	prenom VARCHAR(100),
	pseudo VARCHAR(100),
	mail VARCHAR(100),
	motDePasse VARCHAR(100)
);


CREATE TABLE chien (
    id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT(100),
    surnom VARCHAR(100),
    nomElevage VARCHAR(100),
    dateNaissance DATE,
    sexe VARCHAR(100),
    race VARCHAR(100),
    photo VARCHAR(1000),
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id)
);


CREATE TABLE article (
    id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_chien INT(100),
    texte VARCHAR(10000),
    photo VARCHAR(1000),
    dateParution DATE,
    FOREIGN KEY (id_chien) REFERENCES chien(id)
);


CREATE TABLE commentaire(
    id INT(100) NOT NULL PRIMARY KEY AUTO_INCREMENT,
    id_utilisateur INT(100),
    id_article INT(100),
    texte VARCHAR(10000),
    dateParution DATE,
    FOREIGN KEY (id_utilisateur) REFERENCES utilisateur(id),
	FOREIGN KEY (id_article) REFERENCES article(id)
	);