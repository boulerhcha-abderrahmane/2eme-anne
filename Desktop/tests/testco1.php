<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
if(isset($_COOKIE['test'])){

    setcookie("test" ,"" , time()-90) ;
    echo $_COOKIE['test'] ;
}



?>

    <form action="testco2.php" method="post" >
        nom: <input type="text" name="nom" ><br>
        <input type="submit" name="btn" >
    </form>
    
</body>
</html>