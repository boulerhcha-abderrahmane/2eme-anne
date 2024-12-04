<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $Dbcnx=new PDO('mysql:host=localhost;dbname=ofppt',
    'root','');
    ?>
<table>
    <thead>
        <th>Numéro d'inscription</th>
        <th>Nom du stagiaire</th>
        <th>Prénom du stagiaire</th>
        <th>Date de naissance</th>
        <th>Nom de filière</th>
    </thead>
    <tbody>
        <?php 
        $DATA =$Dbcnx->query('select s.ni,s.nom,s.prenom,s.ddn
        ,f.nom from stagiaires s inner join filieres f
        on s.filiere=f.id
        order by s.filiere;')->fetchAll(PDO::FETCH_NUM);
        foreach($DATA as $stg){
            echo '<tr>';
            foreach($stg as $att=>$val){
                echo "<td>$val</td>";
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
<br>
<br>
<table>
    <thead>
        <th>Nombre de stagiaires</th>
        <th>Filière</th>
    </thead>
    <tbody>
        <?php 
        $DATA=$Dbcnx->query('select count(*) as nb_stg,f.nom from stagiaires s
        join filieres f on s.filiere=f.id
        group by s.filiere;')->fetchAll(PDO::FETCH_NUM);
        foreach($DATA as $ligne){
            echo '<tr>';
            foreach($ligne as $i=>$val){
                echo "<td>$val</td>";
            }
            echo '</tr>';
        }
        ?>
    </tbody>
</table>
</body>
</html>