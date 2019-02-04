<?php

// On se connecte à la base de données
require_once('connexion.php');
$appli = new Connexion();

// redirection sur inscriptionUser si pseudo déjà utilisé
$pseudo = $_POST["pseudo"];
if($appli->isLoginExists($pseudo)){
    header ("Location:http://127.0.1.17//projets/Doggo-Gram/inscriptionUser.php?duplicate=1");
    exit();
}

// redirection sur inscriptionUser si mail déjà utilisé
$mail = $_POST["mail"];
if($appli->isMailExists($mail)){
    header ("Location:http://127.0.1.17//projets/Doggo-Gram/inscriptionUser.php?duplicate=2");
    exit();
}


//Hash avec algorithme spécifique
$pass = 'Mot de passe';
$hash = password_hash($pass,PASSWORD_BCRYPT);

//Comparer hash et mot de passe Sélectionnez

//if(password_verify('ADMIN', '$2a$10$GlvaE1qXuYE6O/ICVtPTeOf3QwE6QNB2quHgqpbK2JKzDYCNnyAL6')) {
   // echo 'OK';
//} else {
    //echo 'ERREUR';
//}
$nom = $_POST["nom"];
var_dump($nom);
$prenom = $_POST["prenom"];
var_dump($prenom);
$pseudo = $_POST["pseudo"];
var_dump($pseudo);
$email = $_POST["mail"];
var_dump($email);
$mdp_hash = password_hash($_POST["motDePasse"],PASSWORD_BCRYPT);
var_dump($mdp_hash);

$id = $appli->insertPersonne($nom,$prenom,$pseudo,$email,$mdp_hash);
var_dump($id);
echo "connexion réussie";

header ("Location:http://127.0.1.17//projets/Doggo-Gram/profil.php?id=$id");
    exit();
?>