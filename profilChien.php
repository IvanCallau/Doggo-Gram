<?php
// Inisialisation de la session.
session_start();

require "connexion.php";

$appli = new Connexion();

if (isset($_GET["id"])) {

    $infosChien = $appli->getInfosChien($_GET["id"]);
    $articles = $appli->getAllArticle($_GET["id"]);

    if ($infosChien) {

        $result = intval($infosChien->getId());

    }
    else {
        header ("Location:PageErreur.html");

        exit();
    }

}

$id = $_GET["id"];

if (isset($_SESSION['user_id'] )){
	//barre de navigation pour utilisateur logged
	include "loggedHeader.php";
}
else {
   include 'header.php';
}

?>

  <title>Doggo-Gram - Page Profil du Chien</title>

  <link href="profilChien.css" rel="stylesheet">

    <div id="page" class="container">

        <?php
        echo '<img src="' . $infosChien->getPhotoChien() . '"id="image" class="img-fluid mx-auto d-block col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12" ><br><br>';
        ?>
   

        <div id="infoChien" class= "text-center">
            <?php

            $d1 = new DateTime($infosChien->getDateNaissance());
            $d2 = new DateTime('today');
            $diff = $d1->diff($d2);

            $age_annees = $diff->y;
            $age_mois = $diff->m;

            if ($age_annees < 1) {
              $age = "$age_mois Mois";
            }
            else if ($age_annees == 1) {
              $age = "$age_annees An";
            }
            else {
              $age = "$age_annees Ans";
            }

            if ($age_mois < 1) {
              $age = "Nouveau née";
            }


            echo "<p><span><strong>Surnom:</strong>" . $infosChien->getSurnom() . "</span><span><strong>Age:</strong>" . $age . "</span><span><strong>Nom d'élevage:</strong>" . $infosChien->getNomElevage() . "</span><span><strong>Race:</strong>" . $infosChien->getRace() . "</span><span><strong>Sexe:</strong>" . $infosChien->getSexe() . "</span></p>";

            ?>
        </div>

        <div class= "text-center">

          <?php

          $id_user = null;

          if (isset($_SESSION['user_id'] )){
            
            $id_user = $_SESSION['user_id'];

          }

          if ($id_user == $infosChien->getId_utilisateur()) {

            echo  '<a href="insertionArticle.php?id=' . $id . '">
                    <button id="plus" class="btn btn-dark btn-circle btn-lg text-center">
                      <span class="fas fa-plus-circle"></span>
                    </button>
                  </a>';
          }

          ?>
        </div>

        <div class="chien">
            <?php

            $row = 0;

            foreach ($articles as $article) {

                $row += 1;

                if ($row % 2 == 0) {
                    echo '<a href="article.php?id='.$article->getId().'">
                            <div class="info row">
                              <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                                <img id="photo" src="' . $article->getPhotoArticle() . '" class="img-fluid">
                              </div>

                              <div class="nomChien col order-first order-lg-last text-center ">
                                <p>' . substr($article->getTexteArticle(),0,70) ."...". '</p>
                              </div>
                            </div>
                          </a>';
                }
                else {
                     echo '<a href="article.php?id='.$article->getId().'">
                            <div class="info row">
                              <div class="image  col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                                <img id="photo" src="' . $article->getPhotoArticle() . '" class="img-fluid">
                              </div>
                          
                              <div class="nomChien col align-self-start text-center">
                                <p >' . substr($article->getTexteArticle(),0,70) . "...". '</p>
                              </div>
                            </div>
                          </a>';
                }
            }
            ?>     
        </div>

<?php

include "footer.php";

?>