<?php
session_start();
if (isset($_SESSION['user_id'] )){
	//déjà loger alors redirection page profil
	header ("Location:profil.php");
	exit();
}
 
require ("connexion.php");

$appli = new Connexion();

include "header.php";

?>

		<title>Doggo-Gram - S'Identifier</title>

		<link rel="stylesheet" type="text/css" href="identifier.css" />

		<br/>

		<div id="page">
			<div id="formulaire" class="container">
				<form method="POST" name="login" action="login.php">

				<?php
					/*alerte si pseudo est faux*/
					$erreur = $_GET["erreur"];
					if($erreur==1){
						echo '<div class="alert alert-danger">
								<strong>Pseudo ou mot de passe inexistant!</strong> 
					  		 </div>';
					}
				
				?>


					<div class="champs col-12">
						<label id="pseudo">
							<h3 class="">
								Compte:<input id="pseudo" class="barre pseudo" type="text" name="pseudo" placeholder="Pseudo" required>
							</h3>
						</label>
					</div>

					</br>

					<div class="champs col-12 col-sm-12">
						<h3 class="">
							Mot de passe:<input id="mdp" class="barre" type="password" name="motDePasse" placeholder="Password" required>
						</h3>
					</div>

					</br>
					
					</br>
					
					<div class="row">
						<div class="col-4 col-sm-5"></div>

						<input id="create-dog" class="col-4 col-sm-2" type="SUBMIT" name="create-dog" value="Connexion">

						<div class="col-4 col-sm-5"></div>
					</div>
				</form>
			</div>
		</div>

<?php

include "footer.php";

?>