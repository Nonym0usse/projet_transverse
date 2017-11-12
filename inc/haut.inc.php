<?php

require_once('class/Site.class.php');

$site = new Site();
$title = $site->title();
$keywords = $site->my_keywords();

?>


<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
        <!-- Balises meta -->
        <meta charset="utf-8"/>
        <meta name="keywords" content="<?php echo $keywords ?>">
        <meta name="description" content="<?php echo $keywords ?>">
        <!-- CSS -->
        <link rel="stylesheet" href="<?php RACINE_SITE ?>inc/css/style.css" />
        <link rel="stylesheet" href="<?php RACINE_SITE ?>inc/css/responsive.css">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


        <!-- JS -->
        <script src="<?php RACINE_SITE ?>inc/js/jquery-3.2.1.js"></script>
        <script src="<?php RACINE_SITE ?>inc/js/bootstrap.js"></script>

    </head>
    <body>


    <nav>
        <div class="wrapper">
            <ul>
                <li class="logo-fix"><img src="http://www.clker.com/cliparts/i/s/H/f/4/T/apple-logo-white-th.png" class="logo"></li>
                <?php


                    if(internauteEstConnecteEtEstAdmin()) // admin
                    {
                        echo '<li><a class="home_button" href="admin/gestion_membre.php">Gestion des membres</a></li>';
                        echo '<li><a href="admin/gestion_commande.php">Gestion des commandes</a></li>';
                        echo '<li><a href="admin/gestion_boutique.php">Gestion de la boutique</a></li>';
                        echo '<li><a href="connexion.php?action=deconnexion">Déconnexion</a></li>';

                    }
                    if(internauteEstConnecte()) // admin
                    {
                        echo '<li><a href="boutique.php">Boutique</a></li>';
                        echo '<li><a href="panier.php">Mon panier</a></li>';
                        echo '<li><a href="connexion.php?action=deconnexion">Déconnexion</a></li>';
                    }else{
                        echo '<li><a href="boutique.php">Boutique</a></li>';
                        echo '<li><a href="panier.php">Mon panier</a></li>';
                        echo '<li><a href="connexion.php">Connexion</a></li>';
                        echo '<li><a href="inscription.php">Inscription</a></li>';

                    }

                    ?>

            </ul>
        </div>
    </nav>


    <div class="conteneur">
