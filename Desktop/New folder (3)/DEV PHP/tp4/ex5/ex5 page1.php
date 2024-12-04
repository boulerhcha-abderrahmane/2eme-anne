<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <table>
            <tr>
                <td>login</td>
                <td><input type="text" name="log" id='l'></td>
            </tr>
            <tr>
                <td>Mot de passe</td>
                <td><input type="password" name="psw" id='p'></td>
            </tr>
            <tr>
                <td>Se souvenir de moi ?</td>
                <td><input type="checkbox" name="check">oui</td>
            </tr>
            <tr>
                <td><input type="submit" value="connexion" name="cnx"></td>
            </tr>
        </table>
    </form>
    <?php 
    if (  isset ($_COOKIE ['login'])  ) {?>

        <script>
            let l=document.getElementById('l');
            l.style.backgroundColor='lightgrey';
            l.value ="<?php echo $_COOKIE ['login']?>"
            
            let p=document.getElementById('p')
            p.style.backgroundColor='lightgrey';
            p.value ="<?php echo $_COOKIE ['password']?>"
        </script>

    <?php }

    if (   isset ($_POST['cnx'])   )  {
        if ( $_POST['log'] == 'admin' &&  $_POST['psw'] == 'admin' ) {
            session_start() ;
            $_SESSION['log']=$_POST['log'];
            $_SESSION['psw']=$_POST['psw'];
            
            if ( isset($_POST['check']) ) {
                setcookie  ('login',$_POST['log'],time()+30*24*3600);
                setcookie  ('password',$_POST['psw'],time()+30*24*3600);
            }
            header ('location:ex5 page2.php') ;
        }
        else { ?>
            <script>
                alert('votre login ou mot de passe est incorrecte !') ;
            </script>
        <?php }
    }
    
    ?>
</body>
</html>