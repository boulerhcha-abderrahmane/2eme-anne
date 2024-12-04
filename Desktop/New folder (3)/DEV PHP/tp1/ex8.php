<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="ex8.php">
    <input type="text" name="inp" >
    <input type="submit">
    </form>
    
    <?php 
    $CH = $_GET["inp"];
    for ($i = 0; $i<strlen($CH); $i++) {
        if (ctype_lower ($CH[$i]) ) {
            $CH [$i] = strtoupper ($CH [$i]);
        }
        else {
            $CH [$i] = strtolower ($CH [$i]);
        }
    }
    echo $CH ;
    ?>
</body>
</html>