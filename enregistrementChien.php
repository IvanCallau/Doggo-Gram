<?php

require "connexion.php";

$appli = new Connexion();

$id = $_GET["id"];


// Récupère les données insérées dans inscriptionChien.php selon leurs "name".
$race = $_POST["race"];
$surnom = $_POST["surnom"];
$elevage = $_POST["elevage"];
$sexe = $_POST["gender"];
$naissance = $_POST["naissance"];

// Variable pour ne pas avoir à écrire plusieurs fois les même choses dans le reste du code.
$chemin = "/projets/Doggo-Gram/";

$suffixe = date("Y-m-d-H-i-s");
$uploadedFileName = $_FILES["photo"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT'] . $chemin;
$destinationName =  "Chiens/photo-chien-" . $suffixe . "." . $fileExtension;

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $destinationFolder . $destinationName)){
    echo "<br/> fichier enregistré avec succes";
}


// Crée le nouvel utilisateur dans le tableau Personne et récupère son ID.
$nouvChien = $appli->insertChien($id, $surnom, $elevage, $naissance, $sexe, $race, $destinationName);

var_dump($nouvChien);

// Envoie directement vers la page profil en donnant l'ID du nouvel utilisateur comme valeur dans le lien.
header("Location: /Doggo-Gram/profilChien.php?id=$nouvChien", true, 303);

exit;

?>