<?php
class Article{
    private $id;
    private $id_chien;
    private $texte;
    private $photo;
    private $dateParution;
    
    public function __set($name,$value){
    }

    public function getId(){
        return $this->id;
    }
    public function getId_chien(){
        return $this->id_chien;
    }
    public function getTexte(){
        return $this->texte;
    }
    public function getPhoto(){
        return $this->photo;
    }
    public function getdateParution(){
        return $this->dateParution;
    }
}
?>