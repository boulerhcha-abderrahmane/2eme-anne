<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chercher un stagiaire par numéro</h1>
    <form action="" method="post">
        <table>
            <tr>
                <td>Numéro du Stagiaire :</td>
                <td>
                    <select name="num" id="">
                    <?php 
                    $DBcnx = new PDO('mysql:host=localhost;dbname=ofppt','root','');
                    $select = $DBcnx -> query ('select ni from stagiaires;');
                    $result = $select -> fetchAll(PDO::FETCH_NUM);
                    foreach($result as $index => $ary){
                        foreach($ary as $i => $val){
                            echo "<option>$val</option>";
                        }
                    }
                    ?>
                    </select>
                </td>
                <td><input type="submit" value="Valider"></td>
            </tr>
            <?php 
            if ( isset ($_POST['num'])) {
                
                if (!empty($_POST['num'])){
                    $ni = $_POST['num'] ;
                    $select = $DBcnx -> query ("select nom,prenom from stagiaires where ni = '$ni';");
                    foreach(($select->fetchAll(PDO::FETCH_ASSOC))[0] as $att => $val){
                        echo "<tr>
                        <td>$att du stagiaire :</td> <td>$val</td>
                        </tr>";

                    }

                }
            }
            
            ?>
        </table>
    </form>
</body>
</html>