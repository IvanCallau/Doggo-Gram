<?php

// On se connecte à la base de données
require("connexion.php");

session_start();

$appli = new Connexion();


// obtenir le pseudo entrée par une variable
$pseudo = $_POST["pseudo"];

//récupération du mot de passe entré
$motDePasse = $_POST["motDePasse"];


$utilisateur = $appli->getAllInfosUtilisateur($pseudo);

$utilisateurMdpBDD = $utilisateur->motDePasse;

if($appli->isLoginExists($pseudo)){
	$_SESSION['user_id'] = $utilisateur->id;
	header ("Location: profil.php");
}
else {
    header ("Location: identifier.php?erreur=1");
    exit();
}

if(password_verify($motDePasse, $utilisateurMdpBDD)) {
    echo 'OK';
    $_SESSION['user_id'] = $utilisateur->id;
    header ("Location: profil.php");
 } else {
    header ("Location: identifier.php?erreur=1");
     echo 'ERREUR';
exit();
 }




//echo "<br>";
//var_dump($pseudo);
//echo "<br>";
//var_dump($motDePasse);
//echo "<br>";
//var_dump($_SESSION['user_id']);




?>