<?php 

class Livre{

private $intitule ;
private $nbpage ;
private $auteur;  //objet auteur 

//les getters
public function GetIntitule(){
    return $this->intitule ;
}
public function GetNbPage(){
    return $this->nbpage ;
}
public function GetAuteur(){
    return $this->auteur ;
}

//les setters
public function SetIntitule($in){
    $this->intitule=$in;
}

public function SetNbpage($in){
    $this->nbpage=$in;
}

public function SetAuteur(Auteur $aut){
    $this->auteur=$aut;
}

public function Associer(Auteur $Aut){
    $this->auteur=$Aut ;
}

public function DonneeLivre(){
    echo "Intitule :".$this->intitule."<br>";
    echo "Nombre de pages :".$this->nbpage."<br>" ;
    echo "AUteur du livre :".$this->auteur ;

}


}


?>