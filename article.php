<!DOCTYPE html>

<html lang="fr">
    <head>
    <meta charset="UTF-8">
    <title>Doggo-Gram - Page Article</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="article.css">


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
                                Profi
                            l</a>

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

                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">

                    <button class="btn btn-outline-success my-2 my-sm-0 fas fa-search type=" submit></button>
                </form>
            </div>
        </nav>

        <div class="container-fluid text-center">
            <img src="dogOnWater.jpg" alt="dogImg" class="img-thumbnail">
        </div>

        <div class="ecran">
            <h4 class="font-weight-bold">
                Title
            </h4>

            <p>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quia, porro libero itaque voluptatem iusto voluptas dolores consequuntur eaque eum aliquam, aut veniam id officiis, quo sapiente totam quisquam inventore quos beatae quae est odio ipsum repellat. Enim omnis atque aspernatur?
            </p>

            <section class="well">
                <div class="form-group">
                    <label for="comment"  class="text-left">
                        Comment:
                    </label>

                    <textarea class="form-control " rows="3" id="comment"></textarea>

                    <div class="text-right">
                        <button type="button" class="btn btn-primary">
                            Valider
                        </button>
                    </div>
                </div>

                <div class="input-group">
                    <p>
                        Pseudo: les commentaire
                    </p>
                </div>
                <div class="text-right">
                    <p>
                        date: 22/1/2019
                    </p>
                </div>
            </section>  
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    </body>
</html>