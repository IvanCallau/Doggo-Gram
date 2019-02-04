<?php

require "/home/cf/projets/(IVAN)Tests-PHP/Connexion.php";

$id = $_GET["id"];

$appli = new Connexion();


?>

<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8" />

		<meta http-equiv="x-ua-compatible" content="ie=edge" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<title>Doggo-Gram - Inscription Chien</title>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="inscriptionChien.css" />


	</head>

	<body>	
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Doggo-Gram</a>

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="profil.php">
                            Profil<span class="sr-only">(current)</span>
                        </a>
                    </li>

                     <li class="nav-item active ">
                        <a class="nav-link" href="inscriptionUser.php">
                            S'inscrire
                        </a>
                    </li>

                    <li class="nav-item active">
                        <a class="nav-link" href="identifier.php">
                            S'indentifié
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profil.php">
                                Profi
                            l</a>

                            <a class="dropdown-item" href="inscriptionUser.php">
                                S'inscrire
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="identifier.php">
                                S'identifié
                            </a>
                        </div>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0 fas fa-search type=" submit"></button>
                </form>
            </div>
        </nav>
		

		</br>

		
		<div id="page">
			<div id="formulaire" class="container">
				<form method="POST" action="enregistrementChien.php?id=2">
					<div class="champs col-12">
						<label id="race">
							<h3 class="">
								Race:
							</h3>
						</label>

						<select size="1" id="race" class="barre col-sm-6 " name="race" required>
							<option value="blank" selected>--Selectionner--</option>

							<option value="Corgi">Corgi</option>

							<option value="Terrier">Terrier</option>

							<option value="Cocker">Cocker</option>

							<option value="Yorkshare">Yorkshare</option>

							<option value="Beagle">Beagle</option>

							<option value="Berger">Berger</option>
							
							<option value="Bulldog">Bulldog</option>
						</select>
					</div>

					</br>

					<div class="champs col-12 col-sm-12">
						<h3 class="">
							Photo:<input id="photo" class="barre" type="text" name="photo" required>
						</h3>
					</div>

					</br>
					
					<div class="champs col-12 col-sm-12">
						<h3 class="">
							Surnom:<input id="surnom" class="barre col-sm-6" type="text" name="surnom" required>
						</h3>
					</div>

					</br>
					
					<div class="champs col-12 col-sm-12">
						<h3 class="">
							Nom d'élevage:<input id="elevage" class="barre" type="text" name="elevage" required>
						</h3>
					</div>

					<div class="champs gender col-12 col-sm-12">
				        <input id="bouton1" type="radio" name="gender" value="Mâle">
							<label for="bouton1">
								<div class="genre">
									Mâle
								</div>
							</label>
						</input>
						
						<input id="bouton2" type="radio" name="gender" value="Femelle">
							<label for="bouton2">
								<div class="genre">
									Femelle
								</div>
							</label>
						</input>
					</div>

					<div class="champs col-12 col-sm-12">
						<h3>
							Date de naissance:<input id="naissance" type="date" class="barre" name="naissance" required>
						</h3>
				    </div>

					</br>
					
					<div class="row">
						<div class="col-4 col-sm-5"></div>

						<input id="create-dog" class="col-4 col-sm-2" type="SUBMIT" name="create-dog" value="Ajouter Chien">

						<div class="col-4 col-sm-5"></div>
					</div>
				</form>
			</div>
		</div>

<!-- JavaScript -->

		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

<!-- Race Picker -->



	</body>
</html>