<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $chaine = "Demain sera mercredi";
    echo "La chaine est : $chaine </br>";

    echo "Longueur de la chaine : ".strlen($chaine)."</br>";
    $nbr_e=0;
    for ($i=0;$i<strlen($chaine);$i++) {
        if ($chaine[$i]=="e" || $chaine=="E") {
            $nbr_e++;
        };
    };
    echo "nombre des 'e' dans la chaine est : $nbr_e </br>";
    echo strrev($chaine);
    
    ?>
</body>
</html>