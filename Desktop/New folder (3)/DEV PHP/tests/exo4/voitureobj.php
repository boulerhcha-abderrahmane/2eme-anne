<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="#" method="post" >
    Matricule : <input type="text" name="mt" ><br>
    Prix : <input type="text" name="pr" ><br>
    <input type="submit" name="btn" >

</form>
 
<?php 
if(isset($_POST['btn'])){
//importer la classe

include "voiture.class.php" ;

// require "voiture.class.php" ;

//créer un objet voiture avec constructeur par defaut
// $voiture1=new voiture() ;

$voiture2=new voiture("B1111");
$voiture3=new voiture("A33333",40000) ;
echo $voiture2;

// $voiture2->SetMatricule($_POST['mt']) ;
$voiture2->SetPrix($_POST['pr']) ;


// echo "Matricule :" . $voiture1->GetMatricule()."<br>" ;
// echo "Prix :" .$voiture1->Getprix();

// $voiture1->Afficher() ;

// echo $voiture2;
echo "<br>";

echo voiture :: NbInstance() ;
$voiture3->Afficher() ;


}

?>
</body>
</html>
