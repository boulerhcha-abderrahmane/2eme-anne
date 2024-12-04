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
    <table>

        <tr>
            <th>Nombre</th> <th>Carré</th> <th>Racine carré</th>
        </tr>
        
        <?php for ($i=1;$i<11;$i++){?>
            <tr>
                <td><?php echo $i?></td>
                <td><?php echo $i*$i?></td>
                <td><?php echo sqrt($i)?></td>
            </tr>
        <?php }?>
    </table>
</body>
</html>