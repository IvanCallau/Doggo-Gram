<?php
class Article{
    private $id;
    private $id_chien;
    private $texteArticle;
    private $photoArticle;
    private $dateParutionArticle;
    
    public function __set($name,$value){
    }

    public function getId(){
        return $this->id;
    }
    public function getId_chien(){
        return $this->id_chien;
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