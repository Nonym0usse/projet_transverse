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
<?php echo $contenu; ?>

<div class="connexion" style="height: 100%;">
	<div class="container">
    <div class="row">
        <div class="col-sm-6 col-md-4 col-md-offset-4">
            <h1 class="text-center login-title">Se connecter</h1>
            <div class="account-wall">
                <img class="profile-img" src="https://lh5.googleusercontent.com/-b0-k99FZlyE/AAAAAAAAAAI/AAAAAAAAAAA/eu7opA4byxI/photo.jpg?sz=120"
                    alt="">
                <form class="form-signin" action="" method="post">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" id="pseudo" required autofocus>
                <input type="password" name="mdp" class="form-control" placeholder="Mot de passe" id=mdp required>
                <button class="btn btn-lg btn-primary btn-block" type="submit">
                    CONNEXION</button>
                </form>
            </div>
        </div>
    </div>
	</div>
</div>

<?php require_once("inc/bas.inc.php"); ?>
