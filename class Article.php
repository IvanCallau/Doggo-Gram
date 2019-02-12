<?php

class Article{
    private $id;
    private $id_utilisateur;
    private $texteArticle;
    private $photoArticle;
    private $dateParutionArticle;
    
    public function __set($name,$value){
    }

    public function getId(){
        return $this->id;
    }
    public function getId_Utilisateur(){
        return $this->id_utilisateur;
    }
    public function getTexteArticle(){
        return $this->texteArticle;
    }
    public function getPhotoArticle(){
        return $this->photoArticle;
    }
    public function getDateParutionArticle(){
        return $this->dateParutionArticle;
    }
}
?>