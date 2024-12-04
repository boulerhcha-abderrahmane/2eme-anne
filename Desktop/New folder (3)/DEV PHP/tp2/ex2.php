<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $tab=array("H"=>"Hydrogène","He"=>"Helium","Li"=>"Lythium","Be"=>"Beryllium","B"=>"Bore","C"=>"Carbone","N"=>"Azote","O"=>"Oxygène","F"=>"Fluor","Ne"=>"Néon");
    ?>
    <table>
        <thead><th>Symbole</th><th>Elément</th></thead>
        <tbody>
            <?php 
            foreach($tab as $key=>$val){
                echo "<tr> <td> $key </td> <td> $val </td> </tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>