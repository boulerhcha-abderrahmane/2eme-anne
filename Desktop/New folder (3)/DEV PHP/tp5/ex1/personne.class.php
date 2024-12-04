<?php 
class Personne{
    protected $cin;
    protected $nom;
    protected $pre;
    protected $age;

    public function get_cin(){return $this -> cin;}
    public function get_nom(){return $this -> nom;}
    public function get_pre(){return $this -> pre;}
    public function get_age(){return $this -> age;}

    public function set_cin($cin){$this -> cin = $cin;}
    public function set_nom($nom){$this -> nom = $nom;}
    public function set_pre($pre){$this -> pre = $pre;}
    public function set_age($age){$this -> age = $age;}

    public function afficher(){
        echo '<b>CIN : </b>'. $this->cin;
        echo '<br><b>NOM : </b>'. $this->nom;
        echo '<br><b>PRENOM : </b>'. $this->pre;
        echo '<br><b>AGE : </b>'. $this->age;
    }
    public function __construct($cin,$nom,$pre,$age){
        $this -> cin=$cin;
        $this -> nom=$nom;
        $this -> pre=$pre;
        $this -> age=$age;
    }
}


?>