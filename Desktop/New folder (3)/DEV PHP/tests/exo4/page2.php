<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body{
            background-color: <?php if(isset($_COOKIE['couleurF'])){ echo $_COOKIE['couleurF'] ;}  ?> ;
            color:<?php if(isset($_COOKIE['couleurT'])){ echo $_COOKIE['couleurT']  ;} ?> ;
        }
    </style>
</head>
<body>
  

<p>
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis vero quis voluptatum, aliquam aut saepe doloribus cupiditate vel beatae, ullam eaque blanditiis minus corrupti inventore id. Ipsam ipsum laudantium earum!
</p>
    
</body>
</html>