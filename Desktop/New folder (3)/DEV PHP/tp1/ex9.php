<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $mix = "0123456789abcdefghijklmnopqrstuvwxyz";
    $code = "";
    for ($i=0 ; $i<6 ; $i++) {
        $code.= $mix [rand(0,strlen($mix)-1)];
    }
    echo "code : $code";
    ?>
</body>
</html>