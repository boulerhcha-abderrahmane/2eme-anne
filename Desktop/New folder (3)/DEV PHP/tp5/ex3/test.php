<?php 
require 'class.article.php';
session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            display:flex;
        }
    </style>
</head>
<body>
    <div id="1">
        <form action="class.article.php" method="post">
        <table>
            <tr>
                <td>Prix hors taxe :</td>
                <td><input type="number" name="prix" id=""></td>
            </tr>
            <tr>
                <td>Quantite en stock :</td>
                <td><input type="number" name="qteStock" id=""></td>
            </tr>
            <tr>
                <td>Quantite minimale :</td>
                <td><input type="number" name="qteMin" id=""></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enregistrer" name='sent'></td>
            </tr>
        </table>
        </form>
        <a href="test.php?a=deco">Deconnect</a>
    </div>

    <div id="2">
        <ol>
        <?php 
        if (isset($_GET['t'])){
            echo 'Array length : '.count($_SESSION['TabArticles']);
            for ($i=0; $i < count($_SESSION['TabArticles']);$i++){
                echo '<li>' . $_SESSION['TabArticles'][$i] . '</li>';
            }
        }
        ?>
        </ol>
    </div>
    
    <?php             
    if ( isset($_GET['a'])) {
        setcookie(session_name(),'',time()-20,'/');
        session_unset();
        session_destroy();
        header('location:test.php');
    }
    ?>
</body>
</html>