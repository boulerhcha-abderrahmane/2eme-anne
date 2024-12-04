<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border:1px solid black;
        }
    </style>
</head>
<body>
    <form action="" method="post">
    <table>
        <tr>
            <td>Saisir votre login :</td>
            <td><input type="text" name="login"></td>
        </tr>
        <tr>
            <td>saisir votre mot de passe :</td>
            <td><input type="password" name="mdp"></td>
        </tr>
        <tr>
            <td>se souvenir du mot de passe :<input type="checkbox" name="check"></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" name="valider" value="valider"></td>
        </tr>
    </table>
    </form>
    <?php 
        if (  isset($_COOKIE ['login']))  {
            header('location:user_page.php');
        }
        if(  isset($_POST['valider'])  ) {
            if ( $_POST['login'] == 'admin' && $_POST['mdp'] == 'admin' ) {
                session_start();
                $_SESSION ['login'] = $_POST['login'];
                $_SESSION ['mdp'] = $_POST['mdp'];

                if ( $_POST['check'] == 'on' ) {
                    setcookie ('login','admin',time()+5*60);
                }
                
                header('location:auth_2.php');
            }
        else {?>
                <script>alert('votre login ou mot de passe est incorrect !')</script>
        <?php }
        }
        ?>

</body>
</html>