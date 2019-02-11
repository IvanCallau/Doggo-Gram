<?php
// Inisialisation de la session.
session_start();

require('connexion.php');

$appli = new Connexion();

$id = $_GET["id"];

$infosChien = $appli->getInfosChien($id);
$articles = $appli->getAllArticle($id);

include "header.php";

?>

  <title>Doggo-Gram - Page Profil du Chien</title>

  <link href="profilChien.css" rel="stylesheet">

    <div id="page" class="container">
        <?php

        echo '<img src="' . $infosChien->getPhotoChien() . '" id="image" class="img-fluid col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  alt="beagle allongé avec une peluche"><br><br>';
        
        ?>
        <div id="infoChien" class= "text-center">
            <?php

            $d1 = new DateTime($infosChien->getDateNaissance());
            $d2 = new DateTime('today');
            $diff = $d1->diff($d2);

            $age_annees = $diff->y;
            $age_mois = $diff->m;

            if ($age_annees < 1) {
              $age = $age_mois;
            }
            else {
              $age = $age_annees;
            }

            if ($age_mois < 1) {
              $age = "Nouveau née";
            }


            echo "<p><span><strong>Surnom:</strong>" . $infosChien->getSurnom() . "</span><span><strong>Age:</strong>" . $age . "</span><span><strong>Nom d'élevage:</strong>" . $infosChien->getNomElevage() . "</span><span><strong>Race:</strong>" . $infosChien->getRace() . "</span><span><strong>Sexe:</strong>" . $infosChien->getSexe() . "</span></p>";

            ?>
        </div>

        <div class= "text-center">
          <?php

            echo '<a href="insertionArticle.php?id=' . $id . '">';

          ?>
                <button id="plus" class="btn btn-dark btn-circle btn-lg text-center"><span class="fas fa-plus-circle"></span>
                </button>
            </a>
        </div>

        <div class="chien">
            <?php



            $row = 0;

            foreach ($articles as $article) {

                $row += 1;

                if ($row % 2 == 0) {
                    echo '
                            <div class="info row">

                                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                                
                                  <a href="article.php?id='.$article->getId().'">
                                  <img id="photo" src="' . $article->getPhotoArticle() . '" class="img-fluid" alt="petit chiot">
                               </a>
                               </div>

                                <div class="nomChien col order-first order-lg-last text-center ">
                                <div style = "max-height:155px; overflow:scroll">
                                    <p id ="résumé">' . $article->getTexteArticle() . '</p>
                                </div>
                                </div>

                            </div>'
                        ;
                }
                else {
                     echo 
                            '<div class="info row">
                           
                                <div class="image  col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                                    <a href="article.php?id='.$article->getId().'">
                                     <img id="photo" src="' . $article->getPhotoArticle() . '" class="img-fluid" alt="petit chiot">
                                    </a> 
                                </div>
                            

                                <div class="nomChien col align-self-start text-center">
                                <div style = "max-height:155px; overflow:scroll">
                                <p id ="résumé" >' . $article->getTexteArticle() . '</p>
                                </div>
                                </div>
                            </div>'
                      ;
                }
            }
            ?>     
    </div>

<?php

include "footer.php";

?>
<script>
var text_court
   
   window.onload = function(){
       
       text_court = document.getElementById("résumé").innerHTML;
       document.getElementById("résumé").innerHTML = text_court.substring(0,100)+'<span style="color:blue;cursor:pointer;" onclick="rendre_court()">...suite<span>';
   }

   function rendre_court(){

       document.getElementById("résumé").innerHTML = text_court;
   }

</script>