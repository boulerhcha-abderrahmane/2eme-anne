<?php 
if (! isset ($_COOKIE ['login']))  {
    header('location:auth_1.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <b>bonjour <?php echo $_COOKIE['login']; ?></b>
    <form action="" method="post">
        <table>
            <tr>
                <td>Saisir votre mot de passe :</td>
                <td><input type="password" name="mdp"></td>
            </tr>
            <tr id="msg" style="display:none;">
                <td style="color:red;font-weight:bold;">Votre mot de passe est incorrect.</td>
            </tr>
            <tr>
                <td><input type="submit" name="valider" value="valider"></td>
            </tr>
        </table>
    </form>
    <?php 
    if ( isset($_POST['valider'])) {
        if ( $_POST['mdp'] == 'admin'  ) {
            session_start();
            $_SESSION ['login'] = $_COOKIE['login'];
            $_SESSION ['mdp'] = $_POST['mdp'];
            header('location:auth_2.php');
        }
        else {?>
        <script>document.getElementById('msg').removeAttribute('style')</script>
    <?php }
    }
    ?>
</body>
</html>