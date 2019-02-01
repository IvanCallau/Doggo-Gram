<?php

class Commentaire{
    private $id;
    private $id_utilisateur;
    private $id_article;
    private $text;
    private $dateParution;

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
    public function getText(){
        return $this->text;
    }
    public function getDateParution(){
        return $this->dateParution;
    }



}

?>