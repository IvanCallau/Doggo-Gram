<!DOCTYPE html>

<html lang="fr">

	<head>
		<meta charset="utf-8" />
		<meta http-equiv="x-ua-compatible" content="ie=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Doggo-Gram - Inscription User</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
		<link rel="stylesheet" type="text/css" href="inscriptionUser.css" />
	</head>

	<body>
		<div class="tete">
			<nav class="navbar haut">
				<div class="m-header container">
					<div class="doggos">
						<a href="listeChien.html">
							Doggos
						</a>
					</div>

					<div id="gram">
						<a class="navbar-brand">
							&nbsp&nbspDoggo-Gram
						</a>
					</div>

					<div>
						<a href="identifier.html">
							S'identifier
						</a>
					</div>
				</div>
			</nav>
		</div>

		</br>

		<div id="page">
			<div id="formulaire" class="container">
			
				<?php
					/*alerte si pseudo déjà utilisé*/
					$duplicate = $_GET["duplicate"];
					if($duplicate){
						echo '<div class="alert alert-danger">
								<strong>Pseudo duplication!</strong> Ce pseudo existe déjà.
					  			</div>';
					}
					/*alerte si mail déjà utilisé*/
					$duplicate1 = $_GET["duplicate1"];
					if($duplicate1){
						echo '<div class="alert alert-danger">
								<strong>Mail duplication!</strong> Ce mail existe déjà.
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

					</br>

					<div class="champs col-12">
						<h3 class="">
							Nom De Compte:<input id="accountName" class="barre" type="text" name="pseudo" required />
						</h3>
					</div>

					</br>
					
					<div class="champs col-12">
						<h3 class="">
							Adresse éléctronique:<input id="email" class="barre" type="text" name="mail" required />
						</h3>
					</div>

					</br>
					
					<div class="champs col-12">
						<h3 class="">
							Mot De Passe:<input type="password" id="password" class="barre" name="motDePasse" minlength="8" required />
						</h3>
					</div>

					</br>

					</br>
					
					</br>
					
					<div class="row">
						<div class="col-4"></div>
							<!-- boutton de validation-envoie formulaire BDD !--> 
						<input id="create-account" class="col-4" type="submit" name="createprofile" value="Créer profil" />
					
						<div class="col-4"></div>
					</div>
				</form>
			</div>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous" />
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous" />
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous" />
	</body>
</html>