<?php session_start(); 
setcookie(session_name(),'',time()-10,'/');
session_unset();
session_destroy();
header('location:ex5 page1.php');
?>