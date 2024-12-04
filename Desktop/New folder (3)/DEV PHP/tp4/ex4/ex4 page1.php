<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

    <?php 
        if(isset($_POST['sent'])){
            setcookie('cobgcolor',$_POST['bgcolor'],time()+60*24*3600);
            setcookie('cotxtcolor',$_POST['txtcolor'],time()+60*24*3600); 
            header('refresh:0');
            ?>
          
    <?php }
        if(isset($_COOKIE['cobgcolor'])){ ?>
            body{
                background-color: <?php echo $_COOKIE['cobgcolor'];?>;
                color: <?php echo $_COOKIE['cotxtcolor'];?>;
            }
        <?php }?>
        
    </style>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>Color du fond :</td>
                <td><input type="text" name="bgcolor"></td>
            </tr>
            <tr>
                <td>Color du text :</td>
                <td><input type="text" name="txtcolor"></td>
            </tr>
            <tr>
                <td><input type="submit" value="envoyer" name="sent"></td>
            </tr>
        </table>
    </form>
</body>
</html>