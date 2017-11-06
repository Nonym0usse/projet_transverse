<?php
require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
$gestion_panier = new GestionBoutique();
//--- AJOUT PANIER ---//
$gestion_panier->AjouterPanier($_POST);
//--- VIDER PANIER ---//
$gestion_panier->ViderPanier($_GET);
//--- PAIEMENT ---//
$gestion_panier->Paiement($_POST, $pdo, $contenu);
//--------------------------------- AFFICHAGE HTML ---------------------------------//
$gestion_panier->AffichagePanier($contenu);