<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php 

    for ($i = 5; $i > 0 ; $i--) {

        echo "<h$i> Bonjour !! </h$i>";

    }
    ?>  -->

<?php for ($i = 5; $i > 0 ; $i--) { ?>
    <h<?php echo "$i";?>>Bonjour !!</h<?php echo "$i";?>>
<?php }?>

</body>
</html>