<?php

require('connexion.php');
$appli = new Connexion();


/*
if ($appli->getConnexion() !== null) {
	echo "Connection BD réussie.</br></br>";
}
else {
	echo "Connection BD échoué.</br>";
}
*/


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

	/*Afficher les article d'un chien*/
	$article = $appli->getAllArticle(3);

	foreach ($article as $value){
	echo $value->getId()." <br />";
	echo $value->getId_chien()."<br />";
	echo $value->getTexteArticle()."<br />";
	echo $value->getPhotoArticle()."<br />";
	echo $value->getdateParutionArticle()."<br />";
	}

	//                      Fin                     //

?>