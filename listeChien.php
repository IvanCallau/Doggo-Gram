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

          echo '<a href="profilChien.php?id=' . $unChien->getId() . '">
                  <div class="info">
                    <div class="image">
                      <img src="' . $unChien->getPhotoChien() . '" class="img-responsive" alt="petit chiot">
                    </div>

                    <div class="nomChien">
                      <h3>' . $unChien->getSurnom() . '</h3>
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