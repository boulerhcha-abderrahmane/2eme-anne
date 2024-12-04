<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{border:1px solid black;border-collapse:collapse;}
    </style>
</head>
<body>
    <?php 
    $ages ['toto']=20;
    $ages ['titi']=30;
    $ages ['tata']=25;
    $ages ['tutu']=28;
    asort($ages);//question 1
    arsort($ages);//question 2
    ksort($ages);//question 3
    krsort($ages);//quetion 4
    ?>
    <table>
        <tr><td>Clefs</td><td>Valeurs</td></tr>
        <?php 
        foreach($ages as $clf=>$val){
            echo "<tr> <td>$clf</td><td>$val</td></tr>";
        }
        ?>
    </table>
    <br>
    
</body>
</html>