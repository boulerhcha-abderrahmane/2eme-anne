<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo 'Vous avez choisi :'; 
    for($x=1;$x<4;$x++){
        if( isset($_GET["check$x"])) {
            echo '</br>'.$_GET["check$x"];
        }
    }
    ?>
</body>
</html>