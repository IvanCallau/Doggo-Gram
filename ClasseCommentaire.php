<?php

class Commentaire{
    private $id;
    private $auteur;
    private $id_article;
    private $texteCommentaire;
    private $dateParutionCommentaire;

    public function __set($name, $value){
        
    }
    public function getId(){
        return $this->id;
    }
    public function getAuteur(){
        return $this->auteur;
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