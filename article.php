<?php

require "connexion.php";

$id = $_GET["id"];

$appli = new Connexion();

include "Header.php";

?>

    <title>Doggo-Gram - Page Article</title>

    <link rel="stylesheet" href="article.css">

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

<?php

include "Footer.php";

?>