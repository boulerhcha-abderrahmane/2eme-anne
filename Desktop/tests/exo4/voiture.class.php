<?php 

class voiture{
    protected $matricule ;
    protected $prix ;
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

    public function test(){
        return $this->prix ;
    }

    public function __get($matricule){
        echo "la matricule est inaccessible dans ce contexte !";
    }

    public function __set($matricule,$a){
        echo "Tu na pas le droit de modifier la valeur de la matricule avec la valeur ".$a;
    }
    public function __isset($matricule){
        echo "erreur" ;
    }

    public function __unset($matricule){
        echo "erreur de matricule " ;
    }
  
}

class Vehicule extends voiture{

    private $puissance;

    public function GetPuissance(){
        return $this->puissance ;
    }

    public function SetPuissance($a){
        $this->puissance=$a ;
    }

    public function __construct($mat,$pr,$pui){
        parent::__construct($mat,$pr);

        // $this->matricule=$mat ;
        // $this->prix=$pr ;
        $this->puissance=$pui ;
    }

    public function Afficher(){
        parent::Afficher();
        echo $this->puissance ;
    }

    public function test(){
        return parent::test()+ ($this->puissance)*0.02 ;
    }



}

// $v1=new voiture();
// $v1->SetMatricule("A11111") ;
// $v1->SetPrix(800000) ;

// $v1->Afficher() ;

// $vh=new Vehicule(); 
// $vh->SetMatricule("AB55555") ;
// $vh->SetPrix(600000) ;
// $vh->SetPuissance(200);

// $vh->Afficher() ;
// echo $vh->GetPuissance() ;

// $v2=new Vehicule("AZ7777",45555,200) ;
// // echo $v2->GetPuissance() ;
// $v2->Afficher() ;
// echo $v2->test() ;

$v3=new voiture("AAA",4000) ;
// echo $v3->matricule ;  //__get()

// $v3->matricule="AAAA" ; // __set()

// $r=isset($v3->matricule) ;
// $r=empty($v3->matricule) ;
unset($v3->matricule) ;
?>