<?php 
if(isset($_POST['btn'])){
    session_start();
    $_SESSION['NI']=$_POST['ni'];
    $_SESSION['NOM']=$_POST['nom'];
    $_SESSION['PRE']=$_POST['pre'];
    $_SESSION['FIL']=$_POST['filiere'];
    header('location:ex3 page2.php');
}
?>