<?php 
session_start();
setcookie(session_name(),"",time()-10,"/");
session_unset();
session_destroy();
header("location:ex3 page1.html");
?>