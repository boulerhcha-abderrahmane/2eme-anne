<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <select name="filiere">
            <?php 
            $DBcnx = new PDO('mysql:host=localhost;dbname=ofppt',
            'root','');
            $select = $DBcnx -> query('select id,nom from filieres;');
            $data = $select -> fetchAll(PDO::FETCH_ASSOC);
            // print_r($data) ;
            foreach($data as $filiere){
                $id= $filiere['id'];$nom= $filiere['nom'];
                echo "<option value='$id'>$nom</option>";
            }
            ?>
        </select>
        <input type="submit" value="chercher">
    </form>
    <ol>
    <?php
    if(isset($_POST['filiere'])){
        $filnum= $_POST['filiere'];
        $select = $DBcnx -> query("select * from stagiaires 
        where filiere='$filnum' ;");
        $data = $select -> fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $stg){
            echo '<li>';
            foreach($stg as $att => $val){
                echo "<br>$att: $val";
            }
            echo '</li>';
        }
    }
    ?>
    </ol>
    
</body>
</html>