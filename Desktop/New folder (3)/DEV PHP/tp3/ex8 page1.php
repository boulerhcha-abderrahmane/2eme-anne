<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{background-color:lightblue;width:500px}
        span{color:red;}
    </style>
</head>
<body>
    <form action="">
        <p>Saisissez les informations ci-après,<br>
    puis cliquez sur <b>'ENVOYER'</b>.</p>
    <br>
    <table>
        <tr>
            <td><b>Vos nom :</b><span>*</span></td>
            <td><input type="text" name="nom"></td>
        </tr>
        <tr>
            <td><b>Prénom :</b><span>*</span></td>
            <td><input type="text" name="pre"></td>
        </tr>
        <tr>
            <td><b>Email :</b><span>*</span></td>
            <td><input type="email" name="mail"></td>
        </tr>
        <tr>
            <td>Commentaires:</td>
            <td><textarea name="cmt"></textarea></td>
        </tr>
    </table>
    <input type="submit" value="ENVOYER">
    <br>
    <p><span>*</span> : Données nécessaires</p>
    </form>
</body>
</html>