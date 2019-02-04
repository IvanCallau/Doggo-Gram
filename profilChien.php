<!doctype html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Doggo-Gram</title>

  <!-- Bootstrap CSS CDN -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/"
    crossorigin="anonymous">
  <link href="profilChien.css" rel="stylesheet">

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

                <button class="btn btn-outline-success my-2 my-sm-0 fas fa-search type=" submit"></button>
            </form>
        </div>
    </nav>


    <div id="page" class="container">

        <img src="paddy.jpeg" id="image" class="img-fluid col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12"  alt="beagle allongé avec une peluche"><br><br>
        

        <div id="infoChien" class= "text-center">
            <p>
                <span><strong>Surnom:</strong> Paddy</span>
                <span><strong>Né(e) le:</strong>24.10.1981</span>
                <span><strong>Nom d'élevage:</strong> Marie</span>
                <span><strong>Race:</strong> Beagle</span>
                <span><strong>Sexe:</strong>femelle</span>
            </p>
        </div>

        <div class= "text-center">
            <a href="insertionArticle.php">
                <button id="plus" class="btn btn-dark btn-circle btn-lg text-center"><span class="fas fa-plus-circle"></span>
                </button>
            </a>
        </div>

        <div class="chien">

        <a href="article.php">
            <div class="info row">
                <div class="image  col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>
        
                <div class="nomChien col align-self-start text-center">
                    <h3 id="titre">Doggy mon petit lion</h3>
                    <p id ="résumé" >Aujourd'hui Doggy a grandi ,il a fait son premier rugissement....</p>
                </div>
            </div>  
        </a>

        <a href="article.php">
            <div class="info row">

                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>

                <div class="nomChien col order-first order-lg-last text-center ">
                    <h3 id="titre">Paddy chez le vétérinaire!</h3>
                    <p id ="résumé">Oh mon paddy est aujourd'hui chez le vétérinaire pour subir une opération et je stresse au max....</p>
                </div>

            </div>
        </a>


        <a href="article.php">
            <div class="info row">

                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>
        
                <div class="nomChien  col align-self-start text-center">
                    <h3 id="titre">Doggy mon petit lion</h3>
                    <p id ="résumé" >La peur est une émotion qui sert à l’origine à survivre. 
                            Elle est donc indispensable, que ce soit pour nous, ou pour nos chiens. 
                            C’est donc un système d’alarme qui nous permet de se mettre en sécurité.
                            Cette émotion complexe peut varier de manifestation, mais aussi d’intensité selon les individus.
                            On ne le répète jamais […]</p>
                </div>
                    
            </div> 
        </a> 
    
        <a href="article.php">
            <div class="info row">
        
                <div class="image col-6 col-sm-6 col-md-6 col-lg-12 col-xl-12 text-center">
                    <img id="photo" src="doggy.jpeg" class="img-fluid" alt="petit chiot">
                </div>
                
                <div class="nomChien col order-first order-lg-last text-center">
                    <h3 id="titre">Paddy chez le vétérinaire!</h3>
                    <p id ="résumé">Oh mon paddy est aujourd'hui chez le vétérinaire pour subir une opération et je stresse au max....</p>
                </div>
        
            </div>
        </a>
    














    </div>


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
    crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut"
    crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k"
    crossorigin="anonymous"></script>


</body>

</html>