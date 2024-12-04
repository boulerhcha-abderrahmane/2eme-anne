<?php 


// var_dump($_GET) ;

// if(isset($_GET['a']) && isset($_GET['b'])){
//     echo "Le nom :".$_GET['a']." et son age :". $_GET['b'] ;
// }

// if(isset($_POST['nom']) && $_POST['prenom']){
//     echo $_POST['nom']."  ".$_POST['prenom'] ;
// }
// else{
//     echo "attention, vous devez passer par le formulaire !" ;
//     header("location:test2.php") ;
// }

var_dump($_POST) ; 

if(isset($_POST['c1'])){
    echo $_POST['c1'] ;
}
if(isset($_POST['Res'])){
    echo $_POST['Res'] ;
}



?>