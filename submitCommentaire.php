<?php

session_start();

$id_user = null;

if (isset($_SESSION['user_id'] )){
	
	$id_user = $_SESSION['user_id'];
}

require "connexion.php";

$id = $_GET["id"];


$appli = new Connexion();


$texteCommentaire= $_POST["texteCommentaire"];
var_dump ($texteCommentaire);
$dateParutionCommentaire = date("Y-m-d");
var_dump ($dateParutionCommentaire);

$insertCommentaire = $appli->insertCommentaire($id_user,$id,$texteCommentaire, $dateParutionCommentaire);

header ("Location:article.php?id=$id");
exit();
?>
