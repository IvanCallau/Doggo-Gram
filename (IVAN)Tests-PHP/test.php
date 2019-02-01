<?php

require ('connexion.php');
$appli = new Connexion();


/*
if ($appli->getConnexion() !== null) {
	echo "Connection BD réussie.</br></br>";
}
else {
	echo "Connection BD échoué.</br>";
}
*/


$mesChiens = $appli->getMesChiens(1);

foreach ($mesChiens as $chien) {

	echo "<li>" . $chien . "</li></br>";

}


?>