<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $T1=array(11,-2,15,3,-4);
    $T2=array();
    $T3=array();
    foreach($T1 as $number){
        if($number>=0){
            array_push($T2,$number);
        }
        else{
            array_push($T3,$number);
        }
    }
    print_r($T2);
    print_r($T3);
    ?>
</body>
</html>