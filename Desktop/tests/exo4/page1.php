<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<form method="post" action="page1.php" >

Choisir la couleur de fond : <input type="color" name="arr" ><br>
Choisir la couleur de texte : <input type="color" name="txt" ><br>

<input type="submit" name="btn" >
</form>

<?php 

if(isset($_POST['btn'])){

    setcookie("couleurF",$_POST['arr'], time() + 3600*24*60) ;
    setcookie("couleurT",$_POST['txt'], time() + 3600*24*60) ;
    header("location:page2.php");
}


?>
    
</body>
</html>