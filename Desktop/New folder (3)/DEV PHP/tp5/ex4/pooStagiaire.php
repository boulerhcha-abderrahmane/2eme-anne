<?php include 'class.stagiaire.php'; session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        br+table{
            margin:auto;
            border:1px solid black;
        }
        br+table th{
            width:60px;
            border:1px solid black;
        }
        br+table tr,br+table td{
            border:1px solid black;
            text-align:center;
        }
    </style>
</head>
<body>
    
    <form action="" method="post">
    <table>
        <tr>
            <td>CIN :</td>
            <td><input type="text" name="cin" id=""></td>
        </tr>
        <tr>
            <td>Nom :</td>
            <td><input type="text" name="nom" id=""></td>
        </tr>
        <tr>
            <td>Prénom :</td>
            <td><input type="text" name="pre" id=""></td>
        </tr>
        <tr>
            <td>Age :</td>
            <td><input type="number" name="age" id=""></td>
        </tr>
        <tr>
            <td>Numéro d'inscription :</td>
            <td><input type="text" name="ni" id=""></td>
        </tr>
        <tr>
            <td>Filière :</td>
            <td><input type="text" name="filiere" id=""></td>
        </tr>
        <tr>
            <td><input type="submit" value="Envoyer" name="sent"></td>
        </tr>
    </table>
    </form>
    <?php 
if (!isset($_SESSION['TAB_STAGIAIRES'])){
    $_SESSION['TAB_STAGIAIRES'] = array() ;
}
if (isset($_POST['sent'])) {
    $stagiaire= new stagiaire($_POST['cin'],$_POST['nom'],$_POST['pre'],$_POST['age'],$_POST['ni'],$_POST['filiere']);
    $stagiaire->afficher() ;
    array_push  ($_SESSION['TAB_STAGIAIRES']   ,   $stagiaire) ;
}
?>

    <br><br>

    <table>
        <thead>
        <tr>
            <th>CIN</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Age</th>
            <th>NI</th>
            <th>Filière</th>
        </tr>
        </thead>
        <tbody>
        <?php 
        if (isset($_POST['sent'])) {
        foreach($_SESSION['TAB_STAGIAIRES'] as $stagiaire) {
            echo "
            <tr>
            <td>".$stagiaire->get_cin()."</td><td>".$stagiaire->get_nom()."</td>
            <td>".$stagiaire->get_pre()."</td><td>".$stagiaire->get_age()."</td>
            <td>".$stagiaire->get_ni()."</td><td>".$stagiaire->get_filiere()."</td>
            </tr>";
        }
        }
        ?>
        </tbody>
    
    
    </table>
    
 
    <a href="pooStagiaire.php?deco=true">Déconnecté</a>
    <?php if(isset($_GET['deco'])){setcookie(session_name(),'',time()-10,'/');session_unset();session_destroy();
    header('location:pooStagiaire.php');
    }?>
</body>
</html>