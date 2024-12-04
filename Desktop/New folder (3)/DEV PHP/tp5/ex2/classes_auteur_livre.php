<?php 
class auteur{
    private $nom;
    private $prenom;

    public function get_nom(){return $this->nom;}
    public function get_prenom(){return $this->prenom;}

    public function set_nom($nom){$this->nom=$nom;}
    public function set_prenom($prenom){$this->prenom=$prenom;}

    public function __toString(){
        return 'Nom : ' . $this->nom .'<br> Prénom :'.$this->prenom;
    }
}

class livre{
    private $intitule_livre;
    private $nb_pages;
    private $auteur;

    public function get_intitule_livre(){return $this->intitule_livre;}
    public function get_nb_pages(){return $this->nb_pages;}
    public function get_auteur(){return $this->auteur;}

    public function set_intitule_livre($intitule){$this->intitule_livre=$intitule;}
    public function set_nb_pages($nb_pages){$this->nb_pages=$nb_pages;}

    public function associer($auteur){
        $this->auteur=$auteur;
    }
    public function DonneeLivre(){
        echo 'Auteur nom : ' . $this->auteur->get_nom();
        echo '<br>Auteur prénom : ' . $this->auteur->get_prenom();
    }
}
?>