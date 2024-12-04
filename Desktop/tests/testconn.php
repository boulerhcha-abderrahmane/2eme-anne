<?php 

//conn exion
try {
    $conn=new PDO("mysql:host=localhost;dbname=messtagiaires","root","") ;
}
catch(Exception $x){
     die("erreur de connexion à la base <br>".$x->getMessage());
}

$x='dahman' ;
$Req="SELECT * from stagiaires where nom='$x' ";
$Rs=$conn->query($Req);
$ligne=$Rs->fetch();
var_dump($ligne) ;

// $nombreLIgne=$Rs->rowCount();
// $nombrecol=$Rs->columnCount();

// while($ligne=$Rs->fetch()){
//    for($i=0 ;$i<$nombrecol ;$i++){
//     echo $ligne[$i]." ";
//    }
//    echo "<br>" ;

// }



// $l=$ligne=$Rs->fetch();
// echo $l["nom"];




// $Rs->closeCursor();

// $TabRe=$Rs->fetchAll(PDO::FETCH_BOTH) ;


// foreach($TabRe as $ligne){
//     echo $ligne["nom"]."<br>";
//     echo $ligne[0]."<br><br>" ;
// }


// echo $TabRe[0]['nom'];













?>