<?php

require "connexion.php";

$id = $_GET["id"];

$appli = new Connexion();

include "Header.php";

$appli = new Connexion();
//récupération de l'article dans BDD
$article = $appli ->getArticle($_GET["id"]);
//récupération des commentaires dans BDD
$commentaire = $appli ->getAllCommentaire($_GET["id"]);

?>

    <title>Doggo-Gram - Page Article</title>

    <link rel="stylesheet" href="article.css">

        <div class="container-fluid text-center">

        <?php   echo '<img class="icon" src="'.$article->getPhotoArticle().'" alt="photo profil">';  ?>

        </div>

        <div class="ecran">
           
            <p> 
                <?php  
          			
                    echo '<p class="text-center">'.$article->getTexteArticle().'</p>'. "</br>"
                        .'<p class="text-right">' .$article->getDateParutionArticle().'</p>'; 
                    
                ?> 
           </p>
            
           <form method="post" action=<?php echo "submitCommentaire.php?id=".$id ?>>
            <section class="well">
                <div class="form-group">
                    <label for="comment"  class="text-left">
                        Comment:
                    </label>

                    <textarea name="texteCommentaire" class="form-control " rows="3" id="comment"></textarea>

                   

                    <div class="text-right">
                        <button type="submit" class="btn btn-primary">
                            Valider
                        </button>
                    </div>
                </div>
                </form>

                <?php
                 foreach ($commentaire as $value){

                echo '<div class="input-group">';
                    echo '<p>';
                   
                    
                   
                    
                       echo $value->getTexteCommentaire().'</br>';
              
                            		
                    

                    
                    echo '</p>';
                echo '</div>';
                echo '<div class="text-right">';
                   echo '<p>'; 
                   
                
                    echo $value->getDateParutionCommentaire().'</br>';
                    
                    
                   echo '</p>';
                echo '</div>';
                 }
                 ?>
            </section>  
        </div>

<?php

include "Footer.php";

?>