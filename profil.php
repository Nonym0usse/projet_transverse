<?php
require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte())
{
	header("location:connexion.php");
}


//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("inc/haut.inc.php");
echo $contenu;
?>

