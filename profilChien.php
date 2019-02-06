<?php

require('connexion.php');

$appli = new Connexion();

$id = $_GET["id"];

$infosChien = $appli->getInfosChien($id);
$articles = $appli->getAllArticle($id);

include "Header.php";

?>

  <title>Doggo-Gram - Page Profil du Chien</title>

  <link href="profilChien.css" rel="stylesheet">

    <div id="page" class="container">
        <?php

        echo '<img src="' . $infosChien->getPhotoChien() . '" id="image" class="img-fluid col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  alt="beagle allongé avec une peluche"><br><br>';
        
        ?>
        <div id="infoChien" class= "text-center">
            <?php

            echo "<p><span><strong>Surnom:</strong>" . $infosChien->getSurnom() . "</span><span><strong>Né(e) le:</strong>" . $infosChien->getDateNaissance() . "</span><span><strong>Nom d'élevage:</strong>" . $infosChien->getNomElevage() . "</span><span><strong>Race:</strong>" . $infosChien->getRace() . "</span><span><strong>Sexe:</strong>" . $infosChien->getSexe() . "</span></p>";

            ?>
        </div>

        <div class= "text-center">
            <a href="insertionArticle.php">
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
                    echo '<a href="article.php">
                            <div class="info row">

                                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                                    <img id="photo" src="' . $article->getPhotoArticle() . '" class="img-fluid" alt="petit chiot">
                                </div>

                                <div class="nomChien col order-first order-lg-last text-center ">
                                    <p id ="résumé">' . $article->getTexteArticle() . '</p>
                                </div>

                            </div>
                        </a>';
                }
                else {
                    echo '<a href="article.php">
                            <div class="info row">
                                <div class="image  col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                                    <img id="photo" src="' . $article->getPhotoArticle() . '" class="img-fluid" alt="petit chiot">
                                </div>
                    
                                <div class="nomChien col align-self-start text-center">
                                    <p id ="résumé" >' . $article->getTexteArticle() . '</p>
                                </div>
                            </div>  
                        </a>';
                }
            }
            ?>     
    </div>

<?php

include "Footer.php";

?>