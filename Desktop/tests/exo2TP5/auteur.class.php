<?php 

class Auteur{
    private $nom;
    private $prenom ;
//les getters
    public function GetNom(){
        return $this->nom ;
    }

    public function GetPrenom(){
        return $this->prenom ;
    }
//les setters 
    public function SetNom($n){
        $this->nom=$n ;
    }

    public function SetPrenom($p){
        $this->prenom=$p ;
    }

    public function __toString(){
        return $this->nom ." \t".$this->prenom ;
    }

}


?>