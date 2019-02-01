<?php

class Commentaire{
    private $id;
    private $id_utilisateur;
    private $id_article;
    private $textCommentaire;
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
    public function getTextCommentaire(){
        return $this->textCommentaire;
    }
    public function getDateParution(){
        return $this->dateParution;
    }



}

?>