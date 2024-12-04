<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    if( isset($_POST['btn']) ){
        $_SESSION['pre'] = $_POST['pre'];
        $_SESSION['nom'] = $_POST['nom'];
    }
    ?>
    Les donné du formulaire ont été mémorisées. <br>
    <a href="ex1 page3.php"> Cliquez sur ce lien pour vérifier.</a>
</body>
</html>