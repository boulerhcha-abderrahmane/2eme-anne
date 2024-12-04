<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Liste des stagiaires</h1>
    <?php 
    try{
        //1/ Se connecter à la base des données
        $DBcnx = new PDO('mysql:host=localhost;dbname=ofppt','root','');
    }
    catch (Exception $err){
        echo 'erreur : '.$err->getMessage();
    }
    // 2/ On écrit la requete qu'on veut et on stock la résultat
    $resultat = $DBcnx ->query ('select * from stagiaires ;');

    // 3/ On lit la résultat (dans ce cas ligne par ligne)
    echo '<ol>';
    while ( $ligne = $resultat -> fetch(PDO::FETCH_ASSOC)) {
        echo '<li>';
        foreach($ligne as $att=>$value){
            echo "<br>$att :   $value  ";
        }
        echo '</li>';
    }
    echo '</ol>';
    ?>
</body>
</html>