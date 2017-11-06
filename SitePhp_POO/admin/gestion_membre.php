<?php

require_once("../inc/init.inc.php");
if(!internauteEstConnecteEtEstAdmin())
{
	header("location:../connexion.php");
	exit();
}
if(isset($_GET['msg']) && $_GET['msg'] == "supok")
{
	executeRequete("delete from membre where id_membre=$_GET[id_membre]");
	header("Location:gestion_membre.php");
}
//-------------------------------------------------- Affichage ---------------------------------------------------------//
$GestionMembre = new GestionAdmin();

$GestionMembre->AffichageMembre();
