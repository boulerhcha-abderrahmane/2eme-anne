<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $txt="Bonjour;à;tous";
    
    echo "Before :</br>$txt</br>";
    $txt=str_replace(";"," ",$txt);
    echo "After :</br>$txt"


    ?>
</body>
</html>