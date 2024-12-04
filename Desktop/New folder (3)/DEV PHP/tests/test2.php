<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="test3.php"  method="post" >

<label for="">Nom :</label><input type="text" name="nom" ><br>
<label for="">Prenom</label><input type="text" name="prenom" ><br>

<select name="s" >
    <option value="1"  >A</option>
    <option value="2" >B</option>
    <option value="3" >C</option>
</select>

<input type="checkbox" name="c1"  ><label for="">python</label><br>
<input type="checkbox" name="c2" value="c" ><label for="">c#</label>

<input type="radio" name="Res" value="r1" ><label for="">Mme</label><br>
<input type="radio" name="Res" value="r2" ><label for="">Mr</label><br>




<button>OK</button>

</form>




<?php 
$x="karim" ;
$y=20 ;

echo "<a href='test3.php?a=$x&b=$y&c=100' > mon lien </a>" ;

$d="10" ;
$r=13 ;

$t=$d+$r ;

echo $t ;


?>
    
</body>
</html>