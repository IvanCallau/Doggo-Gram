<?php

require "connexion.php";

$appli = new Connexion();

$toutLesChiens = $appli->getAllChiens();

include "Header.php";

?>

  <title>Doggo-Gram - Liste des Chiens</title>

  <link href="listeChien.css" rel="stylesheet">

  <div class="container">

    <h1 id="titre">Nos Compagnons</h1>

    <div class="chien">

      <?php

        foreach ($toutLesChiens as $unChien) {

          // Stocke la date de naissance du chien.
          $date1 = new DateTime($unChien->getDateNaissance()); 
          // Stocke la date d'aujourd'hui.
          $date2 = new DateTime('today');
          // Stock la différence entre les deux dates.
          $diff = $date1->diff($date2); 
          // Nous donne cette différence en années.
          $age = $diff->y;
          $mois = $diff->m;

          echo '<a href="profilChien.php?id=' . $unChien->getId() . '">
                  <div class="info">
                    <div class="image">
                      <img src="' . $unChien->getPhotoChien() . '" class="img-responsive" alt="petit chiot">
                    </div>

                    <div class="nomChien">
                      <h3>' . $unChien->getSurnom() . '</h3>';
            if ($age !== 0) {
                      echo '<h3>' . $age . ' Ans</h3>';
            }
                      echo '<h3>' . $mois . ' Mois</h3>
                    </div>
                  </div>
                </a>';

      }
      ?>

    </div>

  </div>

<?php

include "Footer.php";

?>