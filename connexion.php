<?php
require_once("inc/init.inc.php");
//--------------------------------- TRAITEMENTS PHP ---------------------------------//
$gestion = new GestionMembre();
if(isset($_GET['action']))
	{
		$gestion->Deconnexion($_GET['action']);
	}
	$contenu .= $gestion->Connexion($_POST, $contenu);


//--------------------------------- AFFICHAGE HTML ---------------------------------//
?>
<?php require_once("inc/haut.inc.php"); ?>
<?php echo $contenu;
?>

<section class="connexion-container">
    <h1 class="title-connexion">Accèdez à votre compte.</h1>
    <div class="login">
    <div class="login-triangle"></div>

    <h2 class="login-header">Se Connecter</h2>

    <form class="login-container" action="" method="post">
        <p><input type="pseudo" name="pseudo" placeholder="Pseudo"></p>
        <p><input type="password" name="mdp" placeholder="Mot de passe"></p>
        <p><input type="submit" value="Connexion"></p>
    </form>
</div>
</section>


<?php require_once("inc/bas.inc.php"); ?>
