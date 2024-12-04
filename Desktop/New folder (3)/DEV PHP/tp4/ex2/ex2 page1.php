<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Login</label><input type="text" name="log"><br>
        <label for="">Password</label><input type="text" name="psw"><br>
        <span id="msg" style="display:none;color:red;">Error</span>
        <input type="submit" value="Envoyer" name="btn">
    </form>
    <?php 
    
    if (isset($_POST['btn'])){
        if($_POST['log']=='admin' && $_POST['psw']=='admin'){
            session_start();
            $_SESSION['login']=$_POST['log'];
            $_SESSION['password']=$_POST['psw'];
            header("location:ex2 page2.php");
        }
        else{ ?>
            <script>
                let p=document.getElementById("msg");
                p.style.display="block";
            </script>
        <?php }
    }
    
    ?>
</body>
</html>