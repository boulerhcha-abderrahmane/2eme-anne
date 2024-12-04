<?php 
if(isset($_POST['btn'])){
    $x=$_POST['nom'] ;

    setcookie("test" , $x , time()+120) ;
}



?>