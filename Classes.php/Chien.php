<?php

class Chien {

	private $id;             /* idChien */
	private $id_utilisateur: /* idUserChien */
	private $surnom;         /* surnomChien */
	private $nomElevage;     /* nomElevageChien */
	private $dateNaissance;  /* dateNaissanceChien */
	private $sexe;           /* sexeChien */
	private $race;           /* raceChien */
	private $photo;          /* photoChien */

	public function __set($name, $value) {
	}

	public function getId() {
		return $this->id;
	}

	public function getId_utilisateur() {
		return $this->id_utilisateur;
	}

	public function getSurnom() {
		return $this->nomElevage;
	}

	public function getDateNaissance() {
		return $this->dateNaissance;
	}

	public function getSexe() {
		return $this->sexe;
	}

	public function getRace() {
		return $this->race;
	}

	public function getPhoto() {
		return $this->photo;
	}
}

?>