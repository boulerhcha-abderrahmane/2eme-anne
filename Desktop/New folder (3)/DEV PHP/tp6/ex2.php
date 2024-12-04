<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            text-align:center;
        }
    </style>
</head>
<body>
    <table>
    <thead>
        <tr>
            <th>Numéro d'inscription</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>NumFilière</th>
        </tr>
    </thead>
    <tbody>
    <?php       //PHP Data Objects
    $DBcnx = new PDO ('mysql:host=localhost;dbname=ofppt','root','');
    $result = $DBcnx ->query ('select ni,nom,prenom,filiere from stagiaires ;');
    $stagiaires = $result->fetchAll(PDO::FETCH_NUM);
    foreach($stagiaires as $stagiaire){
        echo '<tr>';
        foreach($stagiaire as $num=>$value){
            echo "<td>$value</td>";
        }
        echo '</tr>';
    }
    ?>

    </tbody>
    </table>
    <?php 
    echo '<p> Nous avons en total '.count($stagiaires).' stagiaires';
    ?>
</body>
</html>