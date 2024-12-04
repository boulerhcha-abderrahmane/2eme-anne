<?php 
class article{
    private $num;
    private $prix;
    private $quantite_en_stock;
    private $quantite_minimale;
    private static $nbrArticle = 0;

    public function afficher(){
        echo'Numéro : '.$this->num;
        echo 'Prix hors taxe : '.$this->prix;
        echo 'Quantité en stock : '.$this->quantite_en_stock;
        echo 'Quantité minimale : '.$this->quantite_minimale;
    }
    public function __toString(){
        return 'Num :'.$this->num.'<tab> Prix:'.$this->prix;
}
    public function getNum(){
        return $this->num;
    }
    public function getPrix(){
        return $this->prix;
    }
    public function getQuantiteEnStock(){
        return $this->quantite_en_stock;
    }
    public function getQuantiteMin(){
        return $this->quantite_minimale;
    }

    public function setPrix($prix){
        $this->prix = $prix;
    }
    public function setQuantiteMin($quantite_min){
        $this->quantite_minimale = $quantite_min;
    }

    public function __construct(float $prix,int $quantite_stock,int $quantite_min=0){
        self::$nbrArticle++ ;
        $this->num = 'REF'.self::$nbrArticle;
        $this->prix = $prix;
        $this->quantite_en_stock = $quantite_stock;
        $this->quantite_minimale = $quantite_min;
    }

    public static function get_nbrArticle(){
        return self::$nbrArticle;
    }
    public static function set_nbrArticles(int $nombre){
        self::$nbrArticle = $nombre;
    }
    public function sapprovisionner(int $qte){
        $this->quantite_en_stock+=$qte;
    }
    public function achat(int $qte){
        $qte_stock=$this->quantite_en_stock;
        if ($qte_stock-$qte>$this->quantite_minimale){
            $this->quantite_en_stock-=$qte;
        }
        else{
            echo "Il y a que '$qte_stock' articles dans le stock !";
        }
    }
}
?>

<?php 

if ( isset($_POST['prix']) && isset($_POST['qteStock']) && isset($_POST['qteMin']) ) {
    session_start();
    if (!isset($_SESSION['TabArticles'])) {
        $_SESSION['TabArticles'] = array();
    }
    if (isset($_SESSION['TabArticles'])){
        article::set_nbrArticles(count($_SESSION['TabArticles']));
    }
    
    // require 'class.article.php';
    $article = new article(
        $_POST['prix'],
        $_POST['qteStock'],
        $_POST['qteMin']            
    );
    array_push($_SESSION['TabArticles'],$article);
    header('location:test.php?t=true');
}
?>