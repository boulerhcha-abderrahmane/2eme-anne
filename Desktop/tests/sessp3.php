<?php 
session_start() ;
echo $_SESSION['nom'] ;

echo "<a href='deconnexion.php' > se deconnecter </a>";
?>