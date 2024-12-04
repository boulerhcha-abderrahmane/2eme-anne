<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form action="test5.php" method="post" id="f1" >

<label for="">lundi </label><input type="checkbox" name="c1" value="lundi" ><br>
<label for="">mardi </label><input type="checkbox" name="c2" value="mardi" ><br>
<label for="">mercredi </label><input type="checkbox" name="c3" value="mercredi" ><br>
<input type="text" name="age" id="age" ><br>
<input type="button" value="valider" onclick="verif()" >

</form>

<script>
    function verif(){
       if( document.getElementById("age").value=="" ){
        document.getElementById("age").style.border="1px solid red" ;
       }
       else{
        document.getElementById("f1").submit() ;
       }
    }
</script>
    
</body>
</html>