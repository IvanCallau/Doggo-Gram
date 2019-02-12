 <?php
// Initialisation de la session.
// Si vous utilisez un autre nom
// session_name("autrenom")
session_start();

// Détruit toutes les variables de session
$_SESSION = array();

// Finalement, on détruit la session.
session_destroy();
header ('location: acceuil.php');
?>