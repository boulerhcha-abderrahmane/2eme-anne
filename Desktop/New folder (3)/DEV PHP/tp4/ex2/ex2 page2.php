<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Bienvenu <?php echo $_SESSION['login']; ?></h1>
    <form method="post" id="dec" >
    <a onclick="sent()" href="#">clicker ici pour se déconnecter</a>
    <input type="text" name="lien" style="display:none;">
    </form>
    <script>
    function sent(){let a= document.getElementById('dec');a.submit()}
    </script>
    <?php
    if(isset($_POST['lien'])){
        setcookie(session_name(),"",time()-10,"/");
        session_unset();
        session_destroy();
        header("location:ex2 page1.php");
    }
    ?>
</body>
</html>