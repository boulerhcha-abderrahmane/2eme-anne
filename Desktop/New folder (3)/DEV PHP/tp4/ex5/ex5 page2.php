<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php echo 'Bienvenu '.$_SESSION['log'].'</br>'; ?>
    <a href='ex5 deconnexion.php'>Déconnexion</a>
</body>
</html>