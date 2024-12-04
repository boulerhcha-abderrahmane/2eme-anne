<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$x = 15;
if (isset($x)) {
    if ($x % 3 == 0 && $x % 5 == 0) {
        echo "votre nombre est <strong> multiple de 3 et 5 à la fois </strong>";
    }
    else {
        echo "votre nombre <strong> n'est pas un multiple de 3 et 5 à la fois";
    }
}
else {
    echo "Votre variable n'est pas <strong> initialisée </strong>";
};

?>
</body>
</html>