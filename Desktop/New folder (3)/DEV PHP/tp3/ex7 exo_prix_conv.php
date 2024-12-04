<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(!empty($_GET['pf']) xor !empty($_GET['pe'])) {
        if(!empty($_GET['pf'])){
            echo 'Prix en Francs :'.$_GET['pf'].'</br>';
            echo 'Prix en Euros : '.((float)$_GET['pf']/6.66);
        }
        else{
            echo 'Prix en Euros :'.$_GET['pe'].'</br>';
            echo 'Prix en Francs : '.((float)$_GET['pe']*6.66);
        }
    }
    else{
        echo '<b>Il faut saisir un chiffre dans une seul cellule !</b>';
    }
    
    ?>
</body>
</html>