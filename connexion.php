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

    //récupérer les données de l'utilisateur
    public function getInfosUtilisateur($id_utilisateur) {
        $requete_prepare = $this->connexion->prepare(
            "SELECT u.nom, u.prenom, u.pseudo, u.mail
            FROM utilisateur u
            WHERE u.id = :id");

        $requete_prepare->execute(array("id"=> $id_utilisateur));

        $resultat=$requete_prepare->fetchObject("Utilisateur");  

        return $resultat;
    }

    //visualiser-afficher toutes les informations de la personne
    public function displayPersonne($utilisateur){
        $str = $utillisateur->getNom()." "
                .$utillisateur->getPrenom()." "
                .$utillisateur->getPseudo()." "
                .$utillisateur->getMail()." ";
        
        echo $str;
    }

    //récupération l'article par son id
    public function getArticle($id){
        $requete_prepare = $this->connexion->prepare(
            "SELECT a.id,a.id_chien,a.texte as texteArticle,a.photo as photoArticle,a.dateParution as dateParutionArticle,
            ch.id,ch.id_utilisateur,ch.surnom,ch.nomElevage,ch.dateNaissance,ch.sexe,ch.race,ch.photo as photoChien
            FROM article a
            INNER Join chien ch
            ON a.id_chien = ch.id
            WHERE a.id = :idArticle");

        $requete_prepare ->execute(array("idArticle" => $id));
        $article = $requete_prepare->fetchObject('Article');
            
        return $article;
    }

    //récupération tous les articles
    public function getAllArticle($id){
        $requete_prepare = $this->connexion->prepare(
            "SELECT a.id,a.id_chien,a.texte as texteArticle,a.photo as photoArticle,a.dateParution as dateParutionArticle,
            ch.id,ch.id_utilisateur,ch.surnom,ch.nomElevage,ch.dateNaissance,ch.sexe,ch.race,ch.photo as photoChien
            FROM article a
            INNER Join chien ch
            ON a.id_chien = ch.id
            WHERE a.id_chien = :id");
            
        $requete_prepare ->execute(array("id" => $id));
        $listeArticle = $requete_prepare->fetchAll(PDO::FETCH_CLASS,'Article');
            
            return $listeArticle;
    }

    /* Rahmat La relation entre la table commentaire et la table article */

    public function getCommentaire($id){
        $requete = $this->connexion->prepare("
            SELECT c.id,c.id_utilisateur,c.id_article,c.texte AS texteCommentaire,c.dateParution as dateParutionCommentaire,
                   a.id,a.id_chien,a.texte as texteArticle,a.photo as photoArticle,a.dateParution as dateParutionArticle
            FROM commentaire c
            INNER JOIN article a
            ON c.id_article = a.id
            WHERE c.id = :idCommentaire");
            $requete->execute(array("idCommentaire" => $id));

             $commentaire = $requete->fetchObject ("Commentaire");
 
            return $commentaire;
    }

    public function getAllCommentaire($id){
        $requete = $this->connexion->prepare("
            SELECT c.id,c.id_utilisateur,c.id_article,c.texte AS texteCommentaire,c.dateParution as dateParutionCommentaire,
                   a.id,a.id_chien,a.texte as texteArticle,a.photo as photoArticle,a.dateParution as dateParutionArticle
            FROM commentaire c
            INNER JOIN article a
            ON c.id_article = a.id
            WHERE c.id_article = :id");
            $requete->execute(array("id" => $id));

             $listecommentaire = $requete->fetchAll(PDO::FETCH_CLASS, "Commentaire");
 
            return $listecommentaire;
    }
/*     Rahmat fin de relation entre les tables commentaire et article */ 


  //insertion Information de l'utilisateur dans BDD
  public function insertPersonne($nom, $prenom,$pseudo,$mail,$motDePasse){
    $succes = true;
    try{
        $requete_prepare = $this->connexion -> prepare(
            "INSERT INTO  utilisateur (nom, prenom, pseudo, mail, motDePasse)
                    VALUES (:nom,:prenom,:pseudo,:mail,:motDePasse)");

        $requete_prepare->execute(
            array(  "nom" =>$nom, 
                    "prenom" =>$prenom, 
                    "pseudo" =>$pseudo, 
                    "mail" =>$mail, 
                    "motDePasse" =>$motDePasse)
        );


         //Récupération de l'ID de la dernière insertion
         $id = $this->connexion->lastInsertId();

        }catch(Exception $e){
            echo "Erreur:".$e -> getMessage()."<br>";
            $succes = false;
        }
        return $id;
    }

    public function isLoginExists($login){
        //preparer la requete en base de donnée
        $stmt = $this->connexion->prepare(
            "SELECT * FROM utilisateur WHERE pseudo = :pseudo"
        );
        //exécuter la requête en lui passant le paramètre
        $stmt->execute(array("pseudo"=>$login));
        $nbFound = $stmt->rowCount();
        
        if($nbFound > 0){
            return true;
        }
        return false;
    }

    public function isMailExists($login){
        //preparer la requete en base de donnée
        $stmt = $this->connexion->prepare(
            "SELECT * FROM utilisateur WHERE mail = :mail"
        );
        //exécuter la requête en lui passant le paramètre
        $stmt->execute(array("mail"=>$login));
        $nbFound = $stmt->rowCount();
        
        if($nbFound > 0){
            return true;
        }
        return false;
    }

    //selectionner les personne par leur ID
    public function selectPersonneById( $id){
       
    $requete_prepare=$this->connexion -> prepare(
        "SELECT * FROM Personne WHERE Id = :id");

    $requete_prepare ->execute (array("id"=>$id));

    $resultat=$requete_prepare->fetch(PDO::FETCH_OBJ);

    return $resultat;
}



}

?>