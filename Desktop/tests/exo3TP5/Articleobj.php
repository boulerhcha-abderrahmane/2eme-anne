<?php 

require_once 'Article.class.php';
session_start() ;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" >
    Prix :<input type="text" name="prix" ><br>
    Quantite en stock :<input type="text" name="qst" ><br>
    Quantite Minimale : <input type="text" name="qm" ><br>
    <input type="submit" name="btn" >

    </form>

    <?php 
    
    if(isset($_POST['btn'])){
       
        $article1=new Article($_POST['prix'],$_POST['qst'],$_POST['qm']) ;

        if(!isset($_SESSION['TabArt'])){
            $_SESSION['TabArt']=array();
        }

        array_push($_SESSION['TabArt'] ,$article1) ;

        foreach($_SESSION['TabArt'] as $element){
            $element->Afficher() ;
        }

       



    }

    ?>
</body>
</html>