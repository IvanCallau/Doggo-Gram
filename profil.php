<?php

session_start();
if (!isset($_SESSION['user_id'] )){
	//si pas loger alors redirection page identifier
	header ("Location:http://127.0.1.17//projets/Doggo-Gram/identifier.php");
	exit();
}

include ("Header.php");

?>
    <title>Doggo-Gram - Profil</title>

    <link rel="stylesheet" href="profil.css">

<?php 
 //  inclut le contenu d'un autre fichier appelé, et provoque une erreur bloquante s'il est indisponible
require('connexion.php');

$id = $_SESSION['user_id'];

// appel de mes fonctions qui se trouvent dans mon fichier "connexion.php"
$appli = new Connexion();
$personne = $appli->selectPersonneById($id);//($_GET["id"])=récupération de l'id en BDD
$utilisateur = $appli ->getInfosUtilisateur($id);

?>


    <div class="container">

            <!-- La partie Noms -->
        <form method="post" action=<?php echo "update.php?id=".$id ?>>
            <div class="jumbotron mt-3">
                <div class="row">
                    <div class="col-2">
                        <p>Nom: </p>
                       
                    </div>
                    <div class="col-7  ml-3 mr-2">
                        
                        <p id="nom"> <?php echo($utilisateur->getNom()." "); ?> </p>
                       
                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>

                <div class="row mt-3">
                    <div class="col-2 mr-0">
                        <p>Prenom: </p>
                    </div>
                    <div class="col-7  ml-3 mr-2">
                        
                      <p id="prenom">  <?php echo($utilisateur->getPrenom()." "); ?> </p>
                    
                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>

                <div class="row mt-3">
                    <div class="col-2 mr-0">
                        <p>Pseudo: </p>
                    </div>
                    <div class="col-7  ml-3 mr-2">

                        <p id="pseudo"> <?php echo($utilisateur->getPseudo()." "); ?> </p>

                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>

                <div class="row mt-3">
                    <div class="col-2 mr-0">
                        <p>Email: </p>
                    </div>
                    <div class="col-7  ml-3 mr-2">

                    <p id="mail">  <?php echo($utilisateur->getMail()." "); ?> </p>

                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>
                <div class="row mt-3">
                    <div class="col md-auto text-center">
                        <button  disabled id="valider" class="btn btn-success btn-md">valider</button>
                    </div>

                </div>

                </form>

            </div>
            <!-- fin de la partie Noms avec button de valider -->
            
            <div class= "text-center">
                <?php

                echo '<a href="inscriptionChien.php?id=' . $id . '" id="boutonRond">
                    <span class="fas fa-plus-circle"></span>
                </a>';

                ?>
           </div>

            <div class="row">
                <div class="col md-auto text-center grandir mt-4">
                    <a href="profilChien.php">
                        <img src="imageDePageProfil.jpg" alt="image" width="130x" class="m-1">
                    </a>

                    <a href="profilChien.php">
                        <img src="imageDePageProfil.jpg" alt="image" width="130x" class="m-1">
                    </a>
                </div>
            </div>



            <!-- la partie de ajouter les images et affichage d'images -->
            <div id="footer">
                <div class="text-center">


                    <div>
                    </div>
                    <!-- fin de la partie de ajouter les images et affichage d'images -->
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>





    <script>


        $(".modifier").click(function () {

            var valeur = $(this).parents(".row").children(".col-7").children(".mr-2 p").html();
            var id = $(this).parents(".row").children(".col-7").children(".mr-2 p").attr("id");
            $(this).parents(".row").children(".col-7").children(".mr-2 p").remove();
            $(this).parents(".row").children(".col-7").html("<input type=text name='" + id + "' value='" + valeur + "'>");
            $(this).remove();
            $("#valider").css('visibility','visible');
            $("#valider").removeAttr("disabled");

        });




    </script>



</body>

</html>