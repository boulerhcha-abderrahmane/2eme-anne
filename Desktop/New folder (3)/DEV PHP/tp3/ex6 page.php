<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $table = array('ahmed','achraf','akram','imad','mouad');
    echo 'voila un ensemble de noms :</br>';
    foreach($table as $nom){
        echo "$nom ,";
    }
    ?>
    <form action="">
        <b>Trier les noms en ordre :</b>
        <input type="radio" name="ordre" value="sort">croissant
        <input type="radio" name="ordre" value="rsort">décroissant
        <input type="submit" value="valider">
    </form>
    <?php 
    if(isset($_GET['ordre'])){
        $_GET['ordre']($table);
        foreach($table as $nom){
            echo "$nom</br>";
        }
    }
    
    ?>
</body>
</html>