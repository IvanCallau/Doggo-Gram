<?php
// Initialisation de la session.
session_start();

if (isset($_SESSION['user_id'] )){
	//barre de navigation pour utilisateur logged
	include ("loggedHeader.php");
    exit();
}

require "connexion.php";

$appli = new Connexion();

$id = $_GET["id"];

// Récupère les données insérées dans inscriptionArticle.php selon leurs "name".
$contenu = $_POST["contenu"];

$dateParution = date("Y-m-d");


$chemin = "/projets/Doggo-Gram/";

$suffixe = date("Y-m-d-H-i-s");
$uploadedFileName = $_FILES["photo"]["name"];
$uploadedFile = new SplFileInfo($uploadedFileName);
$fileExtension = $uploadedFile->getExtension();
$destinationFolder = $_SERVER['DOCUMENT_ROOT'] . $chemin;
$destinationName =  "Chiens/photo-article-" . $suffixe . "." . $fileExtension;

if(move_uploaded_file($_FILES["photo"]["tmp_name"], $destinationFolder . $destinationName)){
    echo "<br/> fichier enregistré avec succes";
}


echo '<br>';
var_dump($_FILES);
echo '<br>';
var_dump($_POST);

$nouvArticle = $appli->insertArticle($id, $contenu, $destinationName, $dateParution);

header("Location: /Doggo-Gram/article.php?id=$nouvArticle", true, 303);
exit;

?>