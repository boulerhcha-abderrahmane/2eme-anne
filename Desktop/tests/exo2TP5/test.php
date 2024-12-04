<?php 
include 'auteur.class.php';
include 'livre.class.php';

$aut1=new Auteur() ;
$aut1->SetNom("Slimnai") ;
$aut1->SetPrenom('Mouhamed') ;

$liv1=new Livre() ;
$liv1->SetIntitule("Titre1 ") ;
$liv1->SetNbpage(200);

$liv1->Associer($aut1) ;
$liv1->DonneeLivre() ;




?>