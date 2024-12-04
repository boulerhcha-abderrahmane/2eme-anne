<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="test8p1.php" method="post" >
        nom: <input type="text" name="nom" ><br>
        <input type="submit" name="btn" >
    </form>

    <?php 

if(isset($_POST['btn'])){
 
    echo $_POST['nom'] ;
    $x=$_POST['nom'] ;
    header("location:test8p3.php?a=$x");


   
    
}

echo "<a href='test8p3.php'>allez vers la page suivante</a>";
?>

</body>
</html>