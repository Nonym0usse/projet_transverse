<?php
//--------- BDD
try
{
	$pdo = new PDO('mysql:host=localhost;dbname=site', 'root', '', array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
}
catch(Exception $e)
{
    die('Erreur : '.$e->getMessage());
}
// $pdo->set_charset("utf8");

//--------- SESSION
session_start();

//--------- CHEMIN
define("RACINE_SITE","/SitePhp_POO/");

//--------- VARIABLES
$contenu = '';

//--------- AUTRES INCLUSIONS
require_once("fonction.inc.php");
require_once("class/GestionMembre.class.php");
require_once("class/Membre.class.php");
require_once("class/GestionAdmin.class.php");
require_once("class/GestionBoutique.class.php");
