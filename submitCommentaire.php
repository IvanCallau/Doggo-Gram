<?php

require "connexion.php";

$id = $_GET["id"];

$appli = new Connexion();


$texteCommentaire= $_POST["texteCommentaire"];
var_dump ($texteCommentaire);
$dateParutionCommentaire = date("Y-m-d");
var_dump ($dateParutionCommentaire);

$insertCommentaire = $appli->insertCommentaire($id,$texteCommentaire, $dateParutionCommentaire);

header ("Location:http://127.0.1.17//projets/Doggo-Gram/article.php?id=$id");
exit();
?>
