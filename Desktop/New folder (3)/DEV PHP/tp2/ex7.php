<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function code(){
        $elements='abcdefghij0123456789';
        $thecode='';
        for($x=0;$x<6;$x++){
            $thecode.=str_shuffle($elements)[rand(0,19)];
        }
        return $thecode;
    }
    ?>
    <label for="codee">voici votre code :</label>
    <input type="text" id="codee" value=<?php echo code()?> readonly>
</body>
</html>