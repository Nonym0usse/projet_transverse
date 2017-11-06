<?php
require_once("../inc/init.inc.php");
if(!internauteEstConnecteEtEstAdmin())
{
	header("location:../connexion.php");
	exit();
}
$gestionCommande = new GestionAdmin();
//-------------------------------------------------- Affichage ---------------------------------------------------------//
require_once("../inc/haut.inc.php");
$gestionCommande->AffichageCommande();
//require_once("../inc/menu.inc.php");
