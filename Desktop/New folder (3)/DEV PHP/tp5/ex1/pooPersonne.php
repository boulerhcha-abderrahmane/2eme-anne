<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <fieldset>
        <h3>vauillez remplir le formulaire suivant :</h3>
        CIN : <input type="text" name="cin" id=""><br>
        NOM : <input type="text" name="nom" id=""><br>
        PRENOM : <input type="text" name="pre" id=""><br>
        Age : <input type="number" name="age" id=""><br>
        <input type="submit" name="sent" value="Valider">

    </fieldset>
    </form>
    
    <?php 
    if( isset($_POST['sent'])) {
        include 'personne.class.php';
        $P = new Personne(
            $_POST['cin'],$_POST['nom'],
            $_POST['pre'],$_POST['age']
        );
        // $P->set_cin($_POST['cin']);
        // $P->set_nom($_POST['nom']);
        // $P->set_pre($_POST['pre']);
        // $P->set_age($_POST['age']);
        

        $P->afficher();
    }
    
    ?>
</body>
</html>