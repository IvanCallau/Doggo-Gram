<!DOCTYPE html>

<html lang="fr">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <title>Doggo-gram - Insertion Article</title>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link rel="stylesheet" href="insertionArticle.css">
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
                            S'indentifier
                        </a>
                    </li>

                    <li class="nav-item dropdown">
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="profil.php">
                                Profil</a>

                            <a class="dropdown-item" href="inscriptionUser.php?duplicate=0">
                                S'inscrire
                            </a>

                            <div class="dropdown-divider"></div>

                            <a class="dropdown-item" href="identifier.php">
                                S'identifier
                            </a>
                        </div>
                    </li>
                </ul>

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0 fas fa-search type=" submit></button>
                </form>
            </div>
        </nav>

    <!-- La partie principale de page -->

        <div class="container text-center" id="main">
            <div id="meme">
                <button id="ecran">
                    <img src="#" alt="Photo d'article">
                </button>
            </div>
           
            <form action="">
                <div class="form-group">
                    <label for="contenu">
                        Contenu:
                    </label>
                    <textarea class="form-control" rows="6" id="textarea" name="textarea"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">
                    Valider
                </button>
            </form>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>
    </body>

</html>