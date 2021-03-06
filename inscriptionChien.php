<?php
// Initialisation de la session.
session_start();

if (!isset($_SESSION['user_id'] )){
    //si pas loger alors redirection page identifier
    header ("Location:identifier.php?erreur=0");
    exit();
}

if (isset($_SESSION['user_id'] )){
	//barre de navigation pour utilisateur logged
	include ("loggedHeader.php");
}
else {
	include "header.php";
}

require "connexion.php";

$id = $_GET["id"];

$appli = new Connexion();

?>

	<title>Doggo-Gram - Inscription Chien</title>

	<link rel="stylesheet" type="text/css" href="inscriptionChien.css" />
		
		<br>

		<div id="page">
			<div id="formulaire" class="container">
				<?php
				echo '<form method="POST" action="enregistrementChien.php?id=' . $id . '" enctype="multipart/form-data">';
				?>

					<div class="champs col-12 col-sm-12">
						<h3 class="">
							<input type="hidden" name="MAX_FILE_SIZE" value="1048576">
							Photo:<input id="photo" class="barre" type="file" name="photo" required>
						</h3>
					</div>

					<br>
					
					<div class="champs col-12">
						<label id="race">
							<h3 class="">
								Race:
							</h3>
						</label>

						<select size="1" id="race" class="barre col-sm-6" name="race" required>
							<?php

							include "Races.php";

							?>
						</select>
					</div>

					<br>
					
					<div class="champs col-12 col-sm-12">
						<h3 class="">
							Surnom:<input id="surnom" class="barre col-sm-6" type="text" name="surnom" required>
						</h3>
					</div>

					<br>
					
					<div class="champs col-12 col-sm-12">
						<h3 class="">
							Nom d'élevage:<input id="elevage" class="barre" type="text" name="elevage" required>
						</h3>
					</div>

					<div class="champs gender col-12 col-sm-12">
				        <input id="bouton1" type="radio" name="gender" value="Mâle" required>
							<label for="bouton1">
								<div class="genre">
									Mâle
								</div>
							</label>
						</input>
						
						<input id="bouton2" type="radio" name="gender" value="Femelle" required>
							<label for="bouton2">
								<div class="genre">
									Femelle
								</div>
							</label>
						</input>
					</div>

					<div class="champs col-12 col-sm-12">
						<?php

						echo '<h3>
								Date de naissance:<input id="naissance" type="date" class="barre" name="naissance" min="1994-12-31" required>
							</h3>';

						?>
				    </div>

					<br>
					
					<div class="row">
						<div class="col-4 col-sm-5"></div>

						<input id="create-dog" class="col-4 col-sm-2" type="SUBMIT" name="create-dog" value="Ajouter Chien">

						<div class="col-4 col-sm-5"></div>
					</div>
				</form>
			</div>
		</div>
<?php

include "footer.php";

?>