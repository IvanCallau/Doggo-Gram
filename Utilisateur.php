<?php

class Utilisateur {

	private $id;         /* idUser */
	private $nom;        /* nomUser */
	private $prenom;     /* prenomUser */
	private $pseudo;     /* pseudoUser */
	private $mail;       /* mailUser */
	private $motDePasse; /* motDePasseUser */

	public function __set($name, $value) {
	}

	public function getId() {
		return $this->id;
	}

	public function getNom() {
		return $this->nom;
	}

	public function getPrenom() {
		return $this->prenom;
	}

	public function getPseudo() {
		return $this->pseudo;
	}

	public function getMail() {
		return $this->mail;
	}

	public function getMotDePasse() {
		return $this->motDePasse;
	}
}

?>