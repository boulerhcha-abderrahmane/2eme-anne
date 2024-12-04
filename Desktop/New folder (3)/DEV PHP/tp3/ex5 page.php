<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#">
        <fieldset>
            <legend>Infos</legend>
            Nom : <input type="text" name="Nom"><br>
            Débutant : <input type="radio" value="Débutant" name="niveau"> Intié : <input type="radio" value="Intié" name="niveau"><br>
            <input type="submit" value="Envoyer">
            <input type="reset" value="Effacer">
        </fieldset>
    </form>
    <?php 
    if (isset($_GET['Nom']) && isset($_GET['niveau'])){
        echo "<h1> Bonjour $_GET[Nom] vous êtes $_GET[niveau] en PHP";
    }
    ?>
</body>
</html>