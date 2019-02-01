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

/* Utilisateur test 1 */
INSERT INTO `utilisateur` (
    `nom`, `prenom`, `pseudo`, 
    `mail`, `motDePasse`)
    VALUES (
    "Malcolm", "Bob", "Toobib",
    "groggy@maposte.com", "Password"
);


/* Utilisateur test 2 */
INSERT INTO `utilisateur`(
    `nom`, `prenom`, `pseudo`,
    `mail`, `motDePasse`)
    VALUES (
    "Vermont", "CloÃ©", "Kawaiidesu",
    "Desuchan@monemail.com", "ponponweywey"
);


/* Chien 1 Utilisateur 1 */
INSERT INTO `chien`(
    `id_utilisateur`, `surnom`,
    `nomElevage`, `dateNaissance`,
    `sexe`, `race`)
    VALUES (
    "1", "Choubi", 
    "Maurice", "1980-12-15",
    "Mâle", "Cocker"
);


/* Chien 2 Utilisateur 1 */
INSERT INTO `chien`(
    `id_utilisateur`, `surnom`,
    `nomElevage`, `dateNaissance`,
    `sexe`, `race`)
    VALUES ("1", "Croquette",
    "Auccun", "1999-10-4",
    "Femelle", "Beagle"
);


/* Chien 1 Utilisateur 2 */
INSERT INTO `chien`(
    `id_utilisateur`, `surnom`,
    `nomElevage`, `dateNaissance`,
    `sexe`, `race`)
    VALUES ("2", "Ponpon",
    "Fred", "2013-5-12",
    "Mâle", "Bichon maltais"
);


/* Article 1 Chien 1 Utilisateur 1 */
INSERT INTO `article`(
    `id_chien`, `texte`,
    `dateParution`)
    VALUES (
    "1", "Mon petit Choubi qui se relaxe sur notre chaise.",
    "2019-01-24"
);


/* Article 1 Chien 2 Utilisateur 1 */
INSERT INTO `article`(
    `id_chien`, `texte`,
    `dateParution`)
    VALUES (
    "2", "La petite Croquette s'amuse avec Choubi dehors.",
    "2019-01-26"
);


/* Article 1 Chien 1 Utilisateur 2 */
INSERT INTO `article`(
    `id_chien`, `texte`,
    `dateParution`)
    VALUES (
    "3", "Ponpon c'est perdu dans la neige!!! Mais ou est il???",
    "2019-01-17"
);


/* Article 2 Chien 1 Utilisateur 2 */
INSERT INTO `article`(
    `id_chien`, `texte`,
    `dateParution`)
    VALUES ("3", "Ponpon adore ce salir dans les flaques de boues....",
    "2019-01-20"
);
    

/* Commentaire d'Utilisateur 2 sur Article 1 Chien 1 d'Utilisateur 1 */
INSERT INTO `commentaire`(
    `id_utilisateur`, `id_article`,
    `texte`, `dateParution`)
    VALUES (
    "2", "1", "La chaise doit être pleine de poils. XDDDDD!!!!!",
    "2019-01-25"
);


/* Commentaire d'Utilisateur 1 sur Article 1 Chien 1 d'Utilisateur 1 */
INSERT INTO `commentaire`(
    `id_utilisateur`, `id_article`,
    `texte`, `dateParution`)
    VALUES ("1", "1", "Oui, on ne l'utilise plus.",
    "2019-01-25"
);


/* Commentaires d'Utilisateur 1 sur Article 1 Chien 1 d'Utilisateur 2 */
INSERT INTO `commentaire`(
    `id_utilisateur`, `id_article`,
    `texte`, `dateParution`)
    VALUES ("1", "3", "Effectivement, oú est-il?",
        "2019-01-24"
    );


/*  */