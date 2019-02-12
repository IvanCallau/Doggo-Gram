<?php
// Initialisation de la session.
session_start();

if (isset($_SESSION['user_id'] )){
	//barre de navigation pour utilisateur logged
	include ("loggedHeader.php");
}

require "connexion.php";

$appli = new Connexion();

//$toutLesChiens = $appli->getAllChiens();


//session_start();
//if (isset($_SESSION['user_id'] )) {
 // include "HeaderLogued.php";
//} else {
//  include "HeaderAnonyme.php";
//}
 include 'header.php';

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
                    <div class="image">
                      <img src="' . $unChien->photo . '" class="img-responsive" alt="petit chiot">
                    </div>

                    <div class="nomChien">
                      <h3>' . $unChien->surnom . '</h3>
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