<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        strong{border:1px solid blue;display:block;}
        form{height:146px;width:350px;background-color:lightblue;position: relative;}
        input[type="submit"]{position: absolute;right:0%;}
    </style>
</head>
<body>
    <form action="ex7 exo_prix_conv.php">
    <p>Quel est le prix de votre voiture ?</p>
    <strong>
        Vous devez saisir une des deux valeurs,<br> et une seule :
    </strong>
    <table>
        <tr>
            <td>Prix en francs :</td>
            <td><input type="text" name="pf"></td>
        </tr>
        <tr>
            <td>Prix en euros :</td>
            <td><input type="text" name="pe"></td>
        </tr>
    </table>
    <input type="submit" value="Envoyer le prix">
    </form>
    
</body>
</html>