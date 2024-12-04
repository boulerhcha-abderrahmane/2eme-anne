<?php 

class Article{
    //les attributs
    private $numserie ;
    private $prix ;
    private $qtstock;
    private $qtmin ;

    //attribut static = attribut de classe
    private static $c=0 ;
    
    public function Afficher(){
        echo $this->numserie."<br>";
        echo $this->prix."<br>";
        echo $this->qtstock."<br>";
        echo $this->qtmin."<br>";

    }

    public function __toString(){
        return $this->numserie."\t".$this->prix."\t".$this->qtstock."\t".$this->qtmin ;
    }

    public function __construct($p,$qts,$qm){
        self::$c++;
        // $this->numserie="REF".self::$c ;
      
        if(!isset($_SESSION['num'])){
            $_SESSION['num']=0 ;
        }

        $this->numserie="REF".$_SESSION['num']++ ;
        $this->prix=$p ;
        $this->qtstock=$qts ;
        $this->qtmin=$qm ;

        //$this reference l'objet : on utilise ->
        //self reference la classe: on utilise ::
    }

    //getters
    public function GetNumeroSerie(){
        return $this->numserie ;
    }
    public function GetPrixHorsTaxe(){
        return $this->prix ;
    }
    public function GetQuantiteStock(){
        return $this->qtstock ;
    }
    public function GetQuantiteMin(){
        return $this->qtmin ;
    }

    //les setters

    public function SetPrixHorsTaxe($p){
         $this->prix=$p ;
    }
    public function SetQuantiteStock($qs){
        $this->qtstock=$qs ;
    }
    public function SetQuantiteMin($q){
        $this->qtmin=$q ;
    }

    //methode de classe=methode static 
    public static function GetnbInstances(){
        return self::$c;
    }

    public function Sapprivisioner($qte){
        // $this->qtstock=$this->qtstock+$qte ;
        $this->qtstock+=$qte ;
    }

    public function Achat($qt){

        $x=$this->qtstock-$qt ;

        if($x>$this->qtmin){
            $this->qtstock=$x ;
        }
        else{
            echo "Le stock ne doit pas être inf à la quantité minimale ";
        }
    }
}

// $art1=new Article(4000,100,10) ;
// $art2=new Article(500,30,5) ;

// echo "le nombre d'article crées :".Article::GetnbInstances()."<br>" ;

// $art1->Sapprivisioner(23);
// echo $art1->GetQuantiteStock() ;

// $art1->Achat(120);
// $art1->GetQuantiteStock() ;








?>