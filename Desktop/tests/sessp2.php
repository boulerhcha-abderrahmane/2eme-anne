<?php 
session_start() ;
if(isset($_POST['btn'])){

    echo session_id() ."<br>";
    echo $_POST["nom"];

    $_SESSION['nom']=$_POST['nom'] ;
    echo $_SESSION['nom'] ;
    echo "<a href='sessp3.php' >allez vers page 3</a>";
}

?>