<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td,th{border: 1px solid black;}
    </style>
</head>
<body>
   <?php 
    echo "<table>
    <thead>
        <tr>
            <th>Nombre</th> <th>Carré</th> <th>Racine carré</th>
        </tr>
    </thead>
    
    <tbody>";
    for ($i=1;$i<11;$i++) {
        echo "<tr> <td>$i</td> <td>".$i*$i."</td> <td>".sqrt($i)."</td> </tr>";
    }
    echo "</tbody> </table>";
    ?>
</body>
</html>