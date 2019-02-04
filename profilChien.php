<?php

require('connexion.php');

$appli = new Connexion();

$id = $_GET["id"];

$infosChien = $appli->getInfosChien($id);

include "Header.php";

?>

  <title>Doggo-Gram - Page Profil du Chien</title>

  <link href="profilChien.css" rel="stylesheet">

    <div id="page" class="container">

        <img src="paddy.jpeg" id="image" class="img-fluid col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  alt="beagle allongé avec une peluche"><br><br>
        

        <div id="infoChien" class= "text-center">
            <?php

            echo "<p><span><strong>Surnom:</strong>" . $infosChien->getSurnom($id) . "</span><span><strong>Né(e) le:</strong>" . $infosChien->getDateNaissance($id) . "</span><span><strong>Nom d'élevage:</strong>" . $infosChien->getNomElevage($id) . "</span><span><strong>Race:</strong>" . $infosChien->getRace($id) . "</span><span><strong>Sexe:</strong>" . $infosChien->getSexe($id) . "</span></p>";

            ?>
        </div>

        <div class= "text-center">
            <a href="insertionArticle.php">
                <button id="plus" class="btn btn-dark btn-circle btn-lg text-center"><span class="fas fa-plus-circle"></span>
                </button>
            </a>
        </div>

        <div class="chien">

        <a href="article.php">
            <div class="info row">
                <div class="image  col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>
        
                <div class="nomChien col align-self-start text-center">
                    <h3 id="titre">Doggy mon petit lion</h3>
                    <p id ="résumé" >Aujourd'hui Doggy a grandi ,il a fait son premier rugissement....</p>
                </div>
            </div>  
        </a>

        <a href="article.php">
            <div class="info row">

                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>

                <div class="nomChien col order-first order-lg-last text-center ">
                    <h3 id="titre">Paddy chez le vétérinaire!</h3>
                    <p id ="résumé">Oh mon paddy est aujourd'hui chez le vétérinaire pour subir une opération et je stresse au max....</p>
                </div>

            </div>
        </a>


        <a href="article.php">
            <div class="info row">

                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>
        
                <div class="nomChien  col align-self-start text-center">
                    <h3 id="titre">Doggy mon petit lion</h3>
                    <p id ="résumé" >La peur est une émotion qui sert à l’origine à survivre. 
                            Elle est donc indispensable, que ce soit pour nous, ou pour nos chiens. 
                            C’est donc un système d’alarme qui nous permet de se mettre en sécurité.
                            Cette émotion complexe peut varier de manifestation, mais aussi d’intensité selon les individus.
                            On ne le répète jamais […]</p>
                </div>
                    
            </div> 
        </a> 
    
        <a href="article.php">
            <div class="info row">
        
                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>
                
                <div class="nomChien col order-first order-lg-last text-center">
                    <h3 id="titre">Paddy chez le vétérinaire!</h3>
                    <p id ="résumé">Oh mon paddy est aujourd'hui chez le vétérinaire pour subir une opération et je stresse au max....</p>
                </div>
        
            </div>
        </a>

    </div>

<?php

include "Footer.php";

?>