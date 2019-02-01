<?php
class Profil{
    private $listeChien;
        
    public function __set($name,$value){
    }
    public function getId(){
        return $this->id;
    }
    public function getId_chien(){
        return $this->listeChien;
    }
}
?>