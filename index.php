<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:39:05+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T22:59:05+01:00

session_start();


error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors','on');

//Connexion à la base de données
require_once 'lib/Database.php';

//Fonctionnalités du site
require_once 'lib/fonctions.php';

//Classes du site
require_once 'lib/Site.php';

//autres paramètres
include_once 'conf.php';

$oSite = new Site();


require_once 'contenu/base_html.php';
?>
