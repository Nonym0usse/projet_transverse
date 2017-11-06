<?php
require_once("../inc/init.inc.php");

//--------------------------------- TRAITEMENTS PHP ---------------------------------//
//--- VERIFICATION ADMIN ---//
if(!internauteEstConnecteEtEstAdmin())
{
	header("location:../connexion.php");
	exit();
}

//--- SUPPRESSION PRODUIT ---//
$contenu;
$newGestionAdmin = new GestionAdmin();
$contenu.= $newGestionAdmin->Suppression($contenu);
//--- ENREGISTREMENT PRODUIT ---//
$contenu.= $newGestionAdmin->Enregistrer($_POST, $contenu);
//--- LIENS PRODUITS ---//
$contenu .= '<center><h1>Interface - Gestion de la boutique</h1></center>';
$contenu .= '<a href="?action=affichage"><button class="\btn btn-primary btn-lg">Affichage des produits</button></a><br /><br />';
$contenu .= '<a href="?action=ajout"><button class="\btn btn-danger btn-lg">Ajout d\'un produit</button></a><br /><br /><hr /><br />';
//--- AFFICHAGE PRODUITS ---//
$contenu .= $newGestionAdmin->AffichageProduits($contenu);
//--------------------------------- AFFICHAGE HTML ---------------------------------//

$newGestionAdmin->affichage($contenu);
?>
