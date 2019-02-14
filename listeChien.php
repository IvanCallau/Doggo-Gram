<?php
// Initialisation de la session.
session_start();

if (isset($_SESSION['user_id'] )){
	//barre de navigation pour utilisateur logged
	include ("loggedHeader.php");
}else{
   include 'header.php';
}

require "connexion.php";

$appli = new Connexion();

 $pattern = "";
 // Si mon pattern existe et est rempli
 if(isset($_GET["recherche"])){
     // Alors je set mon pattern
   $pattern = $_GET["recherche"];
 }
 $recherche = $appli->SelectChienByPattern($pattern);

 ?>

  <title>Doggo-Gram - Liste des Chiens</title>

  <link href="listeChien.css" rel="stylesheet">

  <div class="container">

    <h1 id="titre">Nos Compagnons</h1>

    <div class="chien">

      <?php

        foreach ($recherche as $unChien) {

         echo ' <a href="profilChien.php?id=' . $unChien->id . '">
                  <div class="info">
                    <div class="image col-8 col-sm-8 col-md-8 col-lg-8 col-xl-8">
                      <img src="' . $unChien->photo . '" class="img-responsive" alt="petit chiot">
                    </div>

                    <div class="nomChien col-4 col-sm-4 col-md-4 col-lg-4 col-xl-4">
                      <h4>' . $unChien->surnom . '</h4>
                    </div>
                  </div>
                </a>';
        

      }
      ?>

    </div>

  </div>

<?php

include "footer.php";

?>