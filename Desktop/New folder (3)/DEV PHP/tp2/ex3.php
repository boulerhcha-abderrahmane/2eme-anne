<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,th,td{ border:1px solid black;border-collapse:collapse;text-align:center;}
        td:first-of-type{background-color:tomato;}
        td:nth-child(2){background-color:lightgreen;}
        td:last-child{background-color:orange;}
    </style>
</head>
<body>
<?php 
$tabl=array('Janvier'=>31,'Février'=>28,'Mars'=>31,'Avril'=>30,'Mai'=>31,'Juin'=>30,'Juillet'=>31,'Aout'=>31,'Septembre'=>30,'Octobre'=>31,'Novembre'=>30,'Décembre'=>31);
?>
    <table>
        <thead>
            <th>Mois</th>
            <th>Numéro</th>
            <th>Nombre de jours</th>
        </thead>
        <tbody>
            <?php
            $c=0;$some=0;
            foreach($tabl as $mois=>$nbrj){
                $c++;$some+=$nbrj;
                echo "<tr> <td>$mois</td> <td>$c</td> <td>$nbrj</td> </tr>";
            }
            ?>
        </tbody>
    </table>
    <?php echo "<strong>Le total des jours est : $some</strong>";?>
</body>
</html>