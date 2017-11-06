<?php
require_once("inc/init.inc.php");
$gestion_I = new GestionMembre();
$gestion_I->Inscription($_POST);
?>
<?php require_once("inc/haut.inc.php"); ?>



<section class="inscription-container">
    <h1 class="title-inscription">Profitez de nombreux avantages.</h1>
    <div class="login">
        <div class="login-triangle"></div>

        <h2 class="login-header">Inscription</h2>

        <form class="login-container" action="" method="post" accept-charset="UTF-8">
            <p><input type="pseudo" name="pseudo" placeholder="Pseudo"></p>
            <p><input type="password" name="mdp" placeholder="Mot de passe"></p>
            <p><input type="password" name="mdp2" placeholder="Confirmez votre mot de passe"></p>
            <p><input type="text" name="nom" placeholder="Nom"></p>
            <p><input type="text" name="prenom" placeholder="Prénom"></p>
            <p><input type="text" name="nom" placeholder="Nom"></p>
            <p><input type="email" name="email" placeholder="E-mail"></p>
            <p><input type="radio" value="m" name="civilite" checked></p>
            <p><input type="radio" value="f"  name="civilite" ></p>
            <p><input type="text" name="ville" placeholder="Ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_."></p>
            <p><input type="text" name="code_postal" placeholder="Code postal" ></p>
            <p><input type="text" name="adresse" placeholder="Adresse" ></p>
            <p><input type="submit" value="Inscription"></p>
        </form>
    </div>
</section>


<?php require_once("inc/bas.inc.php"); ?>
