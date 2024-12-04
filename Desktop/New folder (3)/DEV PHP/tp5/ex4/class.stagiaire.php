<?php 
include '..\\ex1\\personne.class.php';

class stagiaire extends Personne {
    private $ni ;
    private $filiere ;

    public function get_ni(){
        return $this->ni;
    }
    public function get_filiere(){
        return $this->filiere;
    }

    public function __construct($cin,$nom,$pre,$age,$ni,$fil){
        parent::__construct($cin,$nom,$pre,$age);
        $this->ni=$ni;
        $this->filiere=$fil;
    }

    public function __toString(){
        return 'CIN: '.$this->cin.
        '   NOM: '.$this->nom.
        '   PRENOM: '.$this->pre.
        '   AGE : '.$this->age.
        '   NUM INSCRIPTION: '.$this->ni.
        '   FILIERE: '.$this->filiere;
    }

    public function afficher(){
        parent::afficher();
        echo '<br><b>Numéro d\'inscription : </b>'.$this->ni;
        echo '<br><b>Filière : </b>'.$this->filiere;
    }   
}
?>