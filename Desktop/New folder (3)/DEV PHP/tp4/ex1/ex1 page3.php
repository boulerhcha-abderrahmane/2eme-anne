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
    echo $_SESSION['pre'].'</br>'.$_SESSION['nom'];
    setcookie(session_name(),"",time()-1,"/");
    ?>
    <a href="ex1 page1.php">go back to page 1</a>
</body>
</html>