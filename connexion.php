<?php

require "Chien.php";
require "Utilisateur.php";
require "class Article.php";
require "ClasseCommentaire.php";

class Connexion{

    //initialisation paramètre de connection
    //try-catch récupère les errreurs
    private $connexion;
    
    public function __construct(){
        $PARAM_hote = "localhost";
        $PARAM_port = "3306";
        $PARAM_nom_bd = "InstaDog";
        $PARAM_utilisateur = "adminInstaDog";
        $PARAM_mot_passe = "Inst@D0g";

        try{
            $this->connexion = new PDO (
                "mysql:host=".$PARAM_hote.";dbname=".$PARAM_nom_bd,
                $PARAM_utilisateur,
                $PARAM_mot_passe
            );
            $this->connexion->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND,"SET NAMES 'utf8'");
        }catch(Exception $e){
            echo "Erreur:".$e -> getMessage()."<br>";
            echo "N°:".$e -> getCode();
        }
      
    }
    
    //récupération de la connexion
    public function getConnexion(){
        return $this->connexion;
    }


    public function getMesChiens($idUtilisateur) {

        $requete_prepare = $this->connexion->prepare(
            "SELECT u.id,
            c.id as id,
            c.id_utilisateur as id_utilisateur,
            c.surnom as surnom,
            c.nomElevage as nomElevage,
            c.dateNaissance as dateNaissance,
            c.sexe as sexe,
            c.race as race,
            c.photo as photoChien
            FROM utilisateur u
            INNER JOIN chien c ON c.id_utilisateur = u.id
            WHERE u.id = :id");


        $requete_prepare->execute(
            array("id" => $idUtilisateur));

        $resultat = $requete_prepare->fetchALL(PDO::FETCH_CLASS, "Chien");

        return $resultat;
    }

    public function getInfosChien($idChien) {

        $requete_prepare = $this->connexion->prepare(
            "SELECT u.id,
            c.id as id,
            c.id_utilisateur as id_utilisateur,
            c.surnom as surnom,
            c.nomElevage as nomElevage,
            c.dateNaissance as dateNaissance,
            c.sexe as sexe,
            c.race as race,
            c.photo as photoChien
            FROM utilisateur u
            INNER JOIN chien c ON c.id_utilisateur = u.id
            WHERE c.id = :idChien");

        $requete_prepare->execute(
            array("idChien" => $idChien));

        $resultat = $requete_prepare->fetchObject("Chien");

        return $resultat;
    }
}

?>