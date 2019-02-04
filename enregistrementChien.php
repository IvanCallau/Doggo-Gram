<?php

require "/home/cf/projets/(IVAN)Tests-PHP/Connexion.php";

$appli = new Connexion();

$id = $_GET["id"];

// Récupère les données insérées dans inscriptionChien.php selon leurs "name".
$race = $_POST["race"];
$photo = $_POST["photo"];
$surnom = $_POST["surnom"];
$elevage = $_POST["elevage"];
$sexe = $_POST["gender"];
$naissance = $_POST["naissance"];

var_dump($_POST);
echo "$race </br> $photo </br> $surnom </br> $elevage </br> $sexe </br> $naissance";


$nouvChien = $appli->insertChien($id, $surnom, $elevage, $naissance, $sexe, $race, $photo);

var_dump($_GET);
/*
// Crée le nouvel utilisateur dans le tableau Personne et récupère son ID.
$nouvelId = $appliBD->insertPersonne($lastname, $firstname, $photo, $anniversaire, $status);

// Fait des insertions dans le tableau RelationMusique pour chaque valeur séléctionnée dans "musiques".
foreach ($musiques as $musique) {

	// Insère 1 à 1 les relations.
	$mesMusiques = $appliBD->insertPersonneMusique($nouvelId, $musique);

}

// Fait des insertions dans le tableau RelationHobby pour chaque valeur séléctionnée dans "hobbies".
foreach ($hobbies as $hobby) {

	// Insère 1 à 1 les relations.
	$mesHobbies = $appliBD->insertPersonneHobby($nouvelId, $hobby);

}

// Fais des insertions dans le tableau RelationPersonne pour chaque personne séléctionnée dans "contacts" ainsi que le type qui a été écrit dans la barre.
foreach ($relationType as $personeId => $personeRelation) {

	// Insère 1 à 1 les relations SI il y en a.
	if ($personeRelation != "") {
		$mesRelations = $appliBD->insertRelationPersonne($nouvelId, $personeId, $personeRelation);
	}
}
*/
// Envoie directement vers la page profil en donnant l'ID du nouvel utilisateur comme valeur dans le lien.
header("Location: /Doggo-Gram/profilChien.php?id=$nouvChien", true, 303);

exit;

?>