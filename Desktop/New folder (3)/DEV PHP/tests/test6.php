<?php 
session_start() ;
echo session_id() ;

echo $_SESSION['nom'] ;

echo "<a href='deco.php' >deconnexion</a>";

?>