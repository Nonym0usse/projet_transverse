<!Doctype html>
<html>
    <head>
        <title>Mon Site</title>
        <link rel="stylesheet" href="<?php echo RACINE_SITE; ?>inc/css/style.css" />
        <meta charset="utf-8"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    </head>
    <body>
				<nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Menu</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">

					<?php

					if(internauteEstConnecteEtEstAdmin()) // admin
					{ // BackOffice
						echo '<li><a href="' . RACINE_SITE . 'admin/gestion_membre.php">Gestion des membres</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'admin/gestion_commande.php">Gestion des commandes</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'admin/gestion_boutique.php">Gestion de la boutique</a></li>';
					}
					if(internauteEstConnecte()) // membre et admin
					{
						echo '<li><a href="' . RACINE_SITE . 'profil.php">Voir votre profil</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'connexion.php?action=deconnexion">Se déconnecter</a></li>';
					}
					else // visiteur
					{
						echo '<li><a href="' . RACINE_SITE . 'inscription.php">Inscription</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'connexion.php">Connexion</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'boutique.php">Accès à la boutique</a></li>';
						echo '<li><a href="' . RACINE_SITE . 'panier.php">Voir votre panier</a></li>';
					}
					// visiteur=4 liens - membre=4 liens - admin=7 liens
					?>
          </ul>
            </div>
            </div>
  		  </nav>
			<div class="conteneur">
