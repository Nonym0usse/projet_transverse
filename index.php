<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:39:05+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T22:59:05+01:00

session_start();


//Connexion à la base de données
require_once 'lib/Database.php';

//Fonctionnalités du site
require_once 'lib/fonctions.php';

//Classes du site
require_once 'lib/Site.php';

//autres paramètres
include_once 'conf.php';

// Fichier de Traductions
require_once 'lib/lang.php';

$oSite = new Site();


require_once 'contenu/base_html.php';
?>
