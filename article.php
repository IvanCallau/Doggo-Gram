<?php
// Initialisation de la session.
session_start();

$id_user = null;
    
if (isset($_SESSION['user_id'] )){
	//barre de navigation pour utilisateur logged
	include ("loggedHeader.php");

    $id_user = $_SESSION['user_id'];
}
else {
    include "header.php";
}

require "connexion.php";

$id = $_GET["id"];

$appli = new Connexion();

$appli = new Connexion();
//récupération de l'article dans BDD
$article = $appli->getArticle($_GET["id"]);
//récupération des commentaires dans BDD
$commentaire = $appli->getAllCommentaire($_GET["id"]);

?>

    <title>Doggo-Gram - Page Article</title>

    <link rel="stylesheet" href="article.css">

        <div class="container-fluid text-center">

        <?php   echo '<img class="icon" src="'.$article->getPhotoArticle().'" alt="photo profil">';  ?>

        </div>

        <div class="ecran">
           
            <?php
      			
                echo '<div class="row justify-content-md-center">
                        <p class="text-center col-lg-6">
                            '.$article->getTexteArticle().'
                        </p>'. "</div>"
                    .'<div class="row justify-content-md-center"><p class="col-lg-5 text-right">' .$article->getDateParutionArticle().'</p></div>'; 
                
            ?>  

           <form id="submit" method="post" action=<?php echo "submitCommentaire.php?id=".$id ?>>
            <section class="well">
                <div class="form-group">
                    <label for="comment"  class="text-left">
                        Comment:
                    </label>

                    <textarea name="texteCommentaire" type="text" class="form-control" wrap="hard"  rows="3" id="comment" required></textarea>

                   

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            Valider
                        </button>
                    </div>
                </div>
                </form>

            <div style = "max-height:500px; overflow:scroll;">

                <?php
        
                foreach ($commentaire as $value){

                    echo '<div class="input-group">
                            <p>' . $value->getAuteur() . ':&nbsp&nbsp&nbsp' . $value->getTexteCommentaire() . '</br>
                            </p>
                          </div>

                          <div class="text-right">
                            <p>' . $value->getDateParutionCommentaire() . '</br>
                            </p>
                          </div>';
                }

                ?>

            </div>

            </section>  
        </div>

<?php

include "footer.php";

?>
  