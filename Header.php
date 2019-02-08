<!DOCTYPE html>

<html lang="fr">
	<head>
		<meta charset="utf-8" />

		<meta http-equiv="x-ua-compatible" content="ie=edge" />

		<meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous" />
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"crossorigin="anonymous">


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
                        <a class="nav-link" href="inscriptionUser.php?duplicate=0">
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
                                Profil
                            </a>

                            <a class="dropdown-item" href="inscriptionUser.php?duplicate=0">
                                S'inscrire
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="identifier.php">
                                S'identifié
                            </a>
                        </div>
                    </li>
                </ul>
          
                    <form action="listeChien.php" class="form-inline my-2 my-lg-0">
                    <?php
                   
                    echo '<input class="form-control mr-sm-2" type="search" name="recherche" placeholder="Rechercher" aria-label="Search">';

                    echo '<button class="btn btn-outline-success my-2 my-sm-0 fas fa-search type=" submit></button>';
                 
                    ?>
                    </form>

                      </div>
        </nav>