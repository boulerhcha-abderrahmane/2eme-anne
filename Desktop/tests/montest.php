<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="montest.php" method="post" >
<input type="text" name="r" ><input type="text" name="rr" ><input type="submit" name="btn" >
    </form>
</body>
</html>
<?php 

class personne{
    private $nom ;
    private $prenom ;
     public function getNom(){
        return $this->nom ;
     }
     public function setNom($x){
        $this->nom=$x ;
     }
     public function getprenom(){
        return $this->prenom ;
     }
     public function setprenom($x){
        $this->prenom=$x ;
     }
}

if(isset($_POST['btn'])){
    
    session_start() ;
   
    if(!isset($_SESSION['tab'])){
        $_SESSION['tab']=array() ;
    }
    $p=new personne();
    $p->setNom($_POST['r']);
    $p->setprenom($_POST['rr']) ;
    

    array_push($_SESSION['tab'],$p) ;
    var_dump($_SESSION['tab']);

    foreach($_SESSION['tab'] as $elem){
        echo ($elem->getNom());
    }
}




?>