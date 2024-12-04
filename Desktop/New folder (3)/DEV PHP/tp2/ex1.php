<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tabl=array("Salim","Laila","Mouhamed","Fatima","Hakima");
    echo "<ol>";

    // for ($x=0;$x<5;$x++){
    //     echo "<li> $tabl[$x] </li>";
    // }
    
    foreach($tabl as $name){
        echo "<li> $name </li>";
    }
    
    echo "</ol>";
    sort($tabl);
    print_r($tabl);
    ?>
</body>
</html>