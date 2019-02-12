<?php
require "connexion.php";
$appli = new Connexion();

$id = $_GET["id"];

if(isset($_POST["nom"])){
    $nom = $_POST["nom"];
    var_dump($nom);
    $succes = $appli->modifierNomPersonne($id,$nom);
    var_dump($succes);
}

if(isset($_POST["prenom"])){
    $prenom = $_POST["prenom"];
    var_dump($prenom);
    $succes = $appli->modifierPrenomPersonne($id,$prenom);
    var_dump($succes);

}if(isset($_POST["pseudo"])){
    $pseudo = $_POST["pseudo"];
    var_dump($pseudo);
    $succes = $appli->modifierPseudoPersonne($id,$pseudo);
    var_dump($succes);

}if(isset($_POST["mail"])){
    $mail = $_POST["mail"];
    var_dump($mail);
    $succes = $appli->modifierMailPersonne($id,$mail);
    var_dump($succes);
}




header ("Location:http://127.0.1.17//projets/Doggo-Gram/profil.php?id=$id");
exit();


?>