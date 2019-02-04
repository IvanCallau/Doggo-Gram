<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Doggo-Gram - Profil</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
        crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
        crossorigin="anonymous">
    <link rel="stylesheet" href="profil.css">

</head>

<body>
    <!-- le debut de navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Doggo-Gram</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="profil.html">
                        Profil<span class="sr-only">(current)</span>
                    </a>
                </li>

                <li class="nav-item active ">
                    <a class="nav-link" href="inscriptionUser.html">
                        S'inscrire
                    </a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="identifier.html">
                        S'indentifié
                    </a>
                </li>

                <li class="nav-item dropdown">
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="profil.html">
                            Profil</a>

                        <a class="dropdown-item" href="inscriptionUser.html">
                            S'inscrire
                        </a>

                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="identifier.html">
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
    <!-- Fin de Navbar -->


    <div class="container">
        <form>
            <!-- La partie Noms -->
            <div class="jumbotron mt-3">
                <div class="row">
                    <div class="col-2">
                        <p>Nom: </p>
                    </div>
                    <div class="col-7  ml-3 mr-2">
                        <p class="test">Akaba</p>
                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>

                <div class="row mt-3">
                    <div class="col-2 mr-0">
                        <p>Prenom: </p>
                    </div>
                    <div class="col-7  ml-3 mr-2">
                        <p class="test">jeneffer</p>
                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>

                <div class="row mt-3">
                    <div class="col-2 mr-0">
                        <p>Pseudo: </p>
                    </div>
                    <div class="col-7  ml-3 mr-2">
                        <p class="test">sharazade</p>
                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>

                <div class="row mt-3">
                    <div class="col-2 mr-0">
                        <p>Email: </p>
                    </div>
                    <div class="col-7  ml-3 mr-2">
                        <p class="test">sharazade@yahoo.com</p>
                    </div>
                    <div class="col-2"><i style="cursor:pointer;" class="fas fa-pencil-alt modifier"></i></div>
                </div>
                <div class="row mt-3">
                    <div class="col md-auto text-center">
                        <button class="btn btn-success btn-md">valider</button>
                    </div>
                </div>

            </div>
            <!-- fin de la partie Noms avec button de valider -->
            
            <div class= "text-center">
                <a href="inscriptionChien.html" id="boutonRond">
                    <span class="fas fa-plus-circle"></span>
                </a>
           </div>

            <div class="row">
                <div class="col md-auto text-center grandir mt-4">
                    <a href="profilChien.html">
                        <img src="imageDePageProfil.jpg" alt="image" width="130x" class="m-1">
                    </a>

                    <a href="profilChien.html">
                        <img src="imageDePageProfil.jpg" alt="image" width="130x" class="m-1">
                    </a>
                </div>
            </div>



            <!-- la partie de ajouter les images et affichage d'images -->
            <div id="footer">
                <div class="text-center">


                    <div>
                    </div>
                    <!-- fin de la partie de ajouter les images et affichage d'images -->
        </form>
    </div>




    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
        crossorigin="anonymous"></script>




    <script>


        $(".modifier").click(function () {

            var h = $(this).parents(".row").children(".col-7").children(".test").html();
            $(this).parents(".row").children(".col-7").children(".test").remove();
            $(this).parents(".row").children(".col-7").html("<input type=text value='" + h + "'>");
            $(this).remove();


        });




    </script>

</body>

</html>