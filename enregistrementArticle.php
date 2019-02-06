<?php

require "connexion.php";

$appli = new Connexion();

$id = $_GET["id"];

// Récupère les données insérées dans inscriptionArticle.php selon leurs "name".
$contenu = $_POST["contenu"];
$photo = $_POST["photo"];

var_dump($_POST);
echo "$photo </br> $contenu";

$nouvArticle = $appli->insertArticle($id, $contenu, $photo);
var_dump($_GET);

header("Location: /Doggo-Gram/article.php?id=$nouvArticle", true, 303);
exit;

?>