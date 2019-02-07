<?php

require "connexion.php";

$appli = new Connexion();

$id = $_GET["id"];

require"Header.php";

?>
        <title>Doggo-gram - Insertion Article</title>
        <link rel="stylesheet" href="insertionArticle.css">

    <?php

    echo '<form method="POST" action="enregistrementArticle.php?id=' . $id . '" enctype="multipart/form-data">';

    ?>
            <div class="champs col-12 col-sm-12">
						<h3 class="">
                            <input type="hidden" name="MAX_FILE_SIZE" value="1048576">
							Photo:<input id="photo" type="file" name="photo" required>
						</h3>
					</div>
                <div class="form-group">
                    <label for="contenu"> 
                                <!-- id = contenu-->
                        Contenu:<input id="contenu" type="text" name="contenu" required>
                    </label>  
                </div>
                <button type="submit" class="btn btn-primary">
                    Valider
                </button>
            </form>
        </div>

<?php

require "Footer.php";

?>