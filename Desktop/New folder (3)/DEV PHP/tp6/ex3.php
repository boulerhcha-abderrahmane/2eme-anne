<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Chercher un stagiairepar numéro</h1>
    <form action="" method="post">
        <table>
            <tr>
            <td>Numéro du Stagiaire :</td>
            <td><input type="text" name="num" id=""></td>
            <td><input type="submit" value="Valider"></td>
        </tr>
        <?php 
        $DBcnx = new PDO('mysql:host=localhost;dbname=ofppt','root','');
        if(isset($_POST['num']))
        {
            if(!empty($_POST['num'])){
                $id = $_POST['num'];
                $select = $DBcnx -> query ("select nom,prenom from stagiaires where ni = '$id' ");
                $table = $select -> fetchAll();?>
                <tr>
                    <td>Nom du stagiaire</td>
                    <td><?php echo $table[0][0] ?></td>
                </tr>
                <tr>
                    <td>Prénom du stagiaire :</td>
                    <td><?php echo $table[0][1] ?></td>
                </tr>
            <?php }
        }
        
        ?>

        </table>
    </form>
</body>
</html>