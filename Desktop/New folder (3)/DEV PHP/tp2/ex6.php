<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function ispalindrom($chaine){
        echo substr($chaine,0,ceil(strlen($chaine)/2));
        echo "</br>".strrev(substr($chaine,floor(strlen($chaine)/2)));

        if (substr($chaine,0,ceil(strlen($chaine)/2)) == strrev(substr($chaine,floor(strlen($chaine)/2))) ){
            echo "</br>cette chaine est palindrome.";
        }
        else{
            echo "</br>cette chaine n'est pas palindrome.";
        }
    }
    ispalindrom("vandamadnav");
    
    ?>
</body>
</html>