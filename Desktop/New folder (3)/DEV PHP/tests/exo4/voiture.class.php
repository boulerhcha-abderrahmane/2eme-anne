<?php 

class voiture{
    private $matricule ;
    private $prix ;
    private static $fabriquant="Renault" ;
    //compteur des instances
    private static $c=0 ;

    //les getters
    public function GetMatricule(){
        return $this -> matricule ;
    }

    public function Getprix(){
        return $this->prix ;
    }

    //les setters

    public function SetMatricule($x){
        $this->matricule=$x ;
    }

    public function SetPrix($x){
        $this->prix=$x ;
    }

    public function Afficher(){
        echo "Matricule :".$this->matricule . "<br> "."Prix :".$this->prix ;
        echo self ::$fabriquant ;
    }

    public function __toString(){
        return "Matricule :".$this->matricule . "<br> "."Prix :".$this->prix ;
    }

    //constructeur

    public function __construct($a, $b=100000 ){
        //self c est la classe actuelle 
        // :: pour acceder à mon eleemnt à partir de la classe
        self::$c++ ;

        $this->matricule=$a ;
        $this->prix=$b ;
    }

    //definir methode de classe pour retrourner le nombre d'instances
    public static function NbInstance(){
       
        return self::$c ;
    }


}


?>