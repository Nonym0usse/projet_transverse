<?php
require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
$gestion_produit = new GestionBoutique();
$contenu .= $gestion_produit->FicheProduit($contenu);
//--------------------------------- AFFICHAGE HTML ---------------------------------//
$gestion_produit->Affichage($contenu);