<?php 

// var_dump($_POST) ;

foreach($_POST as $k=>$elem){
    for($i=0 ;$i<3 ;$i++){
        if($k=="c".$i){
            echo $elem."<br>";
        }
    }
   
}

session_start() ;
echo session_id() ;
echo session_name() ; 
$_SESSION['nom']="karim" ;

echo "<a href='test6.php' >lien</a>";
?>