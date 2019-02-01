<?php

class Commentaire{
    private $id;
    private $id_utilisateur;
    private $id_article;
    private $texteCommentaire;
    private $dateParutionCommentaire;

    public function __set($name, $value){
        void;
    }
    public function getId(){
        return $this->id;
    }
    public function getIdUtilisateur(){
        return $this->id_utilisateur;
    }
    public function getIdArticle(){
        return $this->id_article;
    }
    public function getTexteCommentaire(){
        return $this->texteCommentaire;
    }
    public function getDateParutionCommentaire(){
        return $this->dateParutionCommentaire;
    }



}

?>