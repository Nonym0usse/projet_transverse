<?php require_once("inc/init.inc.php");?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title ?></title>
<!-- Balises meta -->
<meta charset="utf-8"/>
<meta name="keywords" content="<?php echo $keywords ?>">
<meta name="description" content="<?php echo $keywords ?>">
<!-- CSS -->
<link rel="stylesheet" href="<?php RACINE_SITE ?>inc/css/index.css" />
<link rel="stylesheet" href="<?php RACINE_SITE ?>inc/css/responsive.css">
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">


<!-- JS -->
<script src="<?php RACINE_SITE ?>inc/js/jquery-3.2.1.js"></script>
<script src="<?php RACINE_SITE ?>inc/js/bootstrap.js"></script>

</head>
<script type="text/javascript" src="http://s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5283a6485ce1cb5a"></script>
<script type="text/javascript">
    addthis.layers({
        'theme' : 'transparent',
        'share' : {
            'position' : 'left',
            'numPreferredServices' : 3
        },
        'follow' : {
            'services' : [
                {'service': 'facebook', 'id': 'airdemontcuq'},
                {'service': 'twitter', 'id': 'airdemontcuq'}
            ]
        }
    });
</script>
<body class="fluid">


<header>
    <div id="home" class="header mockup">
        <div class="tint"></div>
        <div id="logo">
            <a href="index.html#" title="Site Title">
                <span>Your Site Title</span>
            </a>
        </div>
        <div id="menu_cover">

            <nav id="menu">
                <ul>

                    <?php

                    if(internauteEstConnecteEtEstAdmin()) // admin
                    {
                        echo '<li><a class="home_button" href="admin/gestion_membre.php">Gestion des membres</a></li>';
                        echo '<li><a href="admin/gestion_commande.php">Gestion des commandes</a></li>';
                        echo '<li><a href="admin/gestion_boutique.php">Gestion de la boutique</a></li>';
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
            </nav>
        </div>
        <div id="mockup_slider">

            <div class="header"></div>
            <p></p>

            <div id="cover">
                <a class="unslider-arrow prev"></a>
                <a class="unslider-arrow next"></a>
                <div class="banner">
                    <ul>
                        <li><img src="images/mockup/1.png" alt="Slide 1" /></li>
                        <li><img src="images/mockup/2.png" alt="Slide 2" /></li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</header>

<section class="product-canettes">
    <div class="container">
        <h1 class="title-product">Le produit</h1>
        <div class="row">
            <div class="col-md-6">
                <p>
                    nnrjjjijvjijjvijvijrivjijrijvijvijvirvjijvijrvjijrvjijvjirj
                </p>
            </div>
            <div class="col-md-6">
                <img src="canette.jpg" alt="canette">
            </div>
        </div>
    </div>
</section>



<?php
require_once("inc/bas.inc.php");
?>
