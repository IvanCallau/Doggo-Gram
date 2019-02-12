<?php
// Initialisation de la session.
session_start();
require "connexion.php";

$appli = new Connexion();

?>

<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Doggo-Gram - Inscription User</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="inscriptionUser.css" />
	</head>

	<body>
		<div class="tete">
			<nav class="navbar haut">
				<div class="m-header container">
					<div class="doggos">
						<a href="listeChien.php">
							Doggos
						</a>
					</div>

					<div id="gram">
						<a class="navbar-brand">
							&nbsp&nbspDoggo-Gram
						</a>
					</div>

					<div>
						<a href="identifier.php">
							S'identifier
						</a>
					</div>
				</div>
			</nav>
		</div>

		<br/>

		<div id="page">
			<div id="formulaire" class="container">
			
				<?php
					/*alerte si pseudo déjà utilisé*/
					$duplicate = $_GET["duplicate"];
					if($duplicate==1){
						echo '<div class="alert alert-danger">
								<strong>Compte existant!</strong> Ce nom de compte existe déjà.
					  		 </div>';
					}
					/*alerte si mail déjà utilisé*/
					if($duplicate==2){
						echo '<div class="alert alert-danger">
								<strong>Email existant!</strong> Cet email existe déjà.
					  		 </div>';
					}
				?>
				
			<form action="submitInscriptionUtilisateur.php" method="post" id="formID">
					<div class="prenom-nom row">
						<div id="nom" class="champs col-6 col-sm-12">
							<h3>
								Nom:<input id="lastName" class="barre" type="text" name="nom" required />
							</h3>
						</div>

						<div id="p-nom" class="champs col-6 col-sm-12">
							<h3>
								Prénom:<input id="firstName" class="barre" type="text" name="prenom" required />
							</h3>
						</div>
					</div>

					<br>

					<div class="champs col-12">
						<h3 class="">
							Nom De Compte:<input id="accountName" class="barre" type="text" name="pseudo" required />
						</h3>
					</div>

					<br>
					
					<div class="champs col-12">
						<h3 class="">
							Adresse éléctronique:<input id="email" class="barre" type="text" name="mail" required />
						</h3>
					</div>

					<br>
					
					<div class="champs col-12">
						<h3 class="">
							Mot De Passe:<input type="password" id="password" class="barre" name="motDePasse" minlength="8" required />
						</h3>
					</div>

					</br>

					<br>
					
					<br>
					
					<div class="row">
						<div class="col-4"></div>
							<!-- boutton de validation-envoie formulaire BDD !--> 
						<input id="create-account" class="col-4" type="submit" name="createprofile" value="Créer profil" />
					
						<div class="col-4"></div>
					</div>
				</form>
			</div>
		</div>

<?php

include "footer.php";

?>