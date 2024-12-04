<?php session_start();
if (!isset($_SESSION['login']) || !isset($_SESSION['mdp'])) {
    header('location:auth_1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <h1 style="color:lightgreen;"><?php echo $_SESSION ['login'];?></h1> 
   <h3>Vous êtes le bienvenu sur notre site</h3>
   <form id='sent' method='get'><input type="hidden" name="lien"><a href='#' onclick="page1()">page 1</a></form>
   <script>function page1(){document.getElementById('sent').submit()}</script>
   <?php 
   if (isset($_GET['lien'])){
    setcookie(session_name(),'',time()-20,'/');
    session_unset();
    session_destroy();
    header('location:auth_1.php');
   }
   ?>

</body>
</html>