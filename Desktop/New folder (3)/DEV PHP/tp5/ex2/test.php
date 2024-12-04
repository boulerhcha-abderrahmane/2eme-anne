<?php
include 'classes_auteur_livre.php';

$aut1=new auteur();
$aut1->set_nom('Charquaoui');
$aut1->set_prenom('Adham');

$liv1=new livre();
$liv1->set_intitule_livre('DES MESSAGES DU QURAN');
$liv1->set_nb_pages(200);
$liv1->associer($aut1);

$liv1->DonneeLivre();
?>