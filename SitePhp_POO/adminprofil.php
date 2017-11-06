<?php
require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
if(!internauteEstConnecte())
{
    header("location:connexion.php");
}
$contenu .= '<center><h2>Bonjour <strong>' . $_SESSION['membre']['pseudo'] . '</strong></h2></center>'; // exercice: tenter d'afficher le pseudo de l'internaute pour lui dire Bonjour.
$contenu .= '<center><div class="cadre"><h2> Voici vos informations de profil </h2>';



$contenu .= '<p> votre email est: ' . $_SESSION['membre']['email'] . '<br>';
$contenu .= 'votre ville est: ' . $_SESSION['membre']['ville'] . '<br>';
$contenu .= 'votre cp est: ' . $_SESSION['membre']['code_postal'] . '<br>';
$contenu .= 'votre adresse est: ' . $_SESSION['membre']['adresse'] . '</p></div></center><br /><br />';




//--------------------------------- AFFICHAGE HTML ---------------------------------//
require_once("inc/haut.inc.php");
echo $contenu;
require_once("inc/bas.inc.php");
?>

