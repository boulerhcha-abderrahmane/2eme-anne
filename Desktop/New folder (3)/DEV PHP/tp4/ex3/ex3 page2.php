<?php 
session_start(); 
if(!isset($_SESSION['NI'])){header('location:ex3 page1.html');}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1 style="color:green;">
    Bonjour M/Mme <?php echo $_SESSION['NOM'].' '.$_SESSION['PRE'] ?>
    votre numéro : <?php echo $_SESSION['NI']; ?>
</h1>
<a href="ex3 page3.php">vers page3</a><br>
<a href="ex3 page4.php">vers page4</a><br>
<a href="ex3 deco.php">Se déconnecter</a>
</body>
</html>