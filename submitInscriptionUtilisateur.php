<?php

// On se connecte à la base de données
require ('connexion.php');
$appli = new Connexion();

// redirection sur inscriptionUser si pseudo déjà utilisé
$pseudo = $_POST["pseudo"];
if($appli->isLoginExists($pseudo)){
    header ("Location:inscriptionUser.php?duplicate=1");
    exit();
}

// redirection sur inscriptionUser si mail déjà utilisé
$mail = $_POST["mail"];
if($appli->isMailExists($mail)){
    header ("Location:inscriptionUser.php?duplicate=2");
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
//var_dump($nom);
$prenom = $_POST["prenom"];
//var_dump($prenom);
$pseudo = $_POST["pseudo"];
//var_dump($pseudo);
$email = $_POST["mail"];
//var_dump($email);
$mdp_hash = password_hash($_POST["motDePasse"],PASSWORD_BCRYPT);
//var_dump($mdp_hash);

$id = $appli->insertPersonne($nom,$prenom,$pseudo,$email,$mdp_hash);
//var_dump($id);
echo "connexion réussie";




 //on récupère les foction dans page login afin que quand l'utilisateur s'inscrit
 //il puisse se logger en même temps
 
session_start();

$appli = new Connexion();


// obtenir le pseudo entrée par une variable
$pseudo = $_POST["pseudo"];


//récupération du mot de passe entré
$motDePasse = $_POST["motDePasse"];


$utilisateur = $appli->getAllInfosUtilisateur($pseudo);

$utilisateurMdpBDD = $utilisateur->motDePasse;

if(password_verify($motDePasse, $utilisateurMdpBDD)) {
    echo 'OK';
    $_SESSION['user_id'] = $utilisateur->id;
    header ("Location: profil.php");
 } else {
     echo 'ERREUR';
 }



echo "<br>";
//var_dump($pseudo);
echo "<br>";
//var_dump($motDePasse);
echo "<br>";
//var_dump($_SESSION['user_id']);

header ("Location:profil.php?id=$id");
    exit();


?>