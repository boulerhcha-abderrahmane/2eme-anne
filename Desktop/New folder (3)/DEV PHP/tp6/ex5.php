<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    Saisir le nom : <input type="text" name="nom"><br>
    Choisir l'intervalle de la date de naissance :
    Entre <input type="text" name="d1"> ET
    <input type="text" name="d2"><br>
    <input type="submit" value="chercher">

    </form>

    <?php 
    try{
        $DBcnx = new PDO('mysql:host=localhost;dbname=ofppt',
    'root','');
    }
    catch(Exception $exp){
        echo $exp->getMessage();
    }
    if ( isset ($_POST['nom']) && isset($_POST['d1']) && 
    isset($_POST['d2'])){
        $nom = $_POST['nom'];
        $d1 = $_POST['d1'];
        $d2 = $_POST['d2'];
        $select =    $DBcnx -> query ("select * from stagiaires
        where nom like '$nom%' 
        and ddn between '$d1' and '$d2' ;");
        while ($data = $select -> fetch(PDO::FETCH_ASSOC)){
            foreach($data as $att => $value){
                echo "$att: $value </br>";
            }
        }     
        
    }
    

    
    ?>
</body>
</html>