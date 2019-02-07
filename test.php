<?php

require('connexion.php');
$appli = new Connexion();



if ($appli->getConnexion() !== null) {
	echo "Connection BD réussie.</br></br>";
}
else {
	echo "Connection BD échoué.</br>";
}

$toutLesChiens = $appli->getAllChiens();


foreach ($toutLesChiens as $unChien) {

	echo '<a href="profilChien.php?id=' . $unChien->getId() . '">
            <div class="info">
              <div class="image">
                <img src="' . $unChien->getPhotoChien() . '" class="img-responsive" alt="petit chiot">
              </div>

              <div class="nomChien">
                <h3>' . $unChien->getSurnom() . '</h3>
              </div>
            </div>
          </a>';

}

// Affiche les données dans le tableau "chien" //

$infosChien = $appli->getInfosChien(3);

echo $infosChien->getId();
echo "</br>";
echo $infosChien->getId_utilisateur();
echo "</br>";
echo $infosChien->getSurnom();
echo "</br>";
echo $infosChien->getNomElevage();
echo "</br>";
echo $infosChien->getDateNaissance();
echo "</br>";
echo $infosChien->getSexe();
echo "</br>";
echo $infosChien->getRace();
echo "</br>";
echo $infosChien->getPhotoChien();

// 						Fin 					//


//  Afficher tout les chiens d'un utilisateur   //

$mesChiens = $appli->getMesChiens(1);

foreach ($mesChiens as $chien) {

	echo "<li>" . $chien->getSurnom() . "</li></br>";
	echo "<li>" . $chien->getPhotoChien() . "</li></br>";

}


//                      Fin                     //

	//Afficher les article d'un chien
	$article = $appli->getAllArticle(3);

	foreach ($article as $value){
	echo $value->getId()." <br />";
	echo $value->getId_chien()."<br />";
	echo $value->getTexteArticle()."<br />";
	echo $value->getPhotoArticle()."<br />";
	echo $value->getdateParutionArticle()."<br />";
	}

	//                      Fin                     //


//	afficher les commentaire d'un article 
	$commentaire = $appli->getAllCommentaire(1);

	foreach($commentaire as $value){
		echo $value->getId();
		echo "</br>";
		echo $value->getIdUtilisateur();
		echo "</br>";
		echo $value->getIdArticle();
		echo "</br>";
		echo $value->getTexteCommentaire();
		echo "</br>";
		echo $value->getDateParutionCommentaire();
		echo "</br>";
	}
// 	fin */




?>