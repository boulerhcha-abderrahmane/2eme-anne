<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{border:1px solid red;width:50%}
    </style>
</head>
<body>
    <strong>Quel jour préférez-vous ?</strong>
    <form action="ex3 page2.php">
    <table>
        <tr>
            <td><input type="radio" name="jours" value="Lundi" id=""></td>
            <td><input type="text" value="Lundi" id=""></td>
        </tr>
        <tr>
            <td><input type="radio" name="jours" value="Mardi" id=""></td>
            <td><input type="text" value="Mardi" id=""></td>
        </tr>
        <tr>
            <td><input type="radio" name="jours" value="Mercredi" id=""></td>
            <td><input type="text" value="Mercredi" id=""></td>
        </tr>
        <tr>
            <td><input type="radio" name="jours" value="Jeudi" id=""></td>
            <td><input type="text" value="Jeudi" id=""></td>
        </tr>
        <tr>
            <td><input type="radio" name="jours" value="Vendredi" id=""></td>
            <td><input type="text" value="Vendredi" id=""></td>
        </tr>
    </table>
    <input type="submit" value="envoyer">
    </form>
</body>
</html>