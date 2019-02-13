<?php
// Initialisation de la session.
session_start();

if (!isset($_SESSION['user_id'] )){
    //si pas loger alors redirection page identifier
    header ("Location:identifier.php");
    exit();
}

if (isset($_SESSION['user_id'] )){
	//barre de navigation pour utilisateur logged
	include ("loggedHeader.php");
}else{
    require"header.php";
}


require "connexion.php";

$appli = new Connexion();

$id = $_GET["id"];



?>
    <title>Doggo-gram - Insertion Article</title>
    
    <link rel="stylesheet" href="insertionArticle.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    



    <?php

    echo '<form method="POST" action="enregistrementArticle.php?id=' . $id . '" enctype="multipart/form-data">';

    ?>
<!--         la prrtie input photo  -->
        <div class="form-div">
            
                <label type="hidden" for="file" name="MAX_FILE_SIZE" value="1048576" class="input-label">
                <i class="fas fa-upload"></i><span id="label_span">
                Select a file to upload </span></label>
                <input id="file" type="file" name="photo" required>
           
        </div>
        <!-- la partie textarea  -->       
        <div id="textarea">
            <label for="contenu" id="center"><span id="contenu1"><strong>Contenu: </strong></span> 
                <textarea id="contenu" type="text" name="contenu" required></textarea>
            </label>   
        </div>
        <!-- Le button de Valider -->
        <div id="button">
            <button type="submit" class="btn btn-primary center">Valider</button>
        </div>
                    
    </form>     
 
<?php

require "footer.php";

?>


