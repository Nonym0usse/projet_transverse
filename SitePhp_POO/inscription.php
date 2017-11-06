<?php
require_once("inc/init.inc.php");
$gestion_I = new GestionMembre();
$gestion_I->Inscription($_POST);
?>
<?php require_once("inc/haut.inc.php"); ?>
<?php echo $contenu; ?>

<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-primary">
                <div class="panel-heading">Inscription</div>
                <div class="panel-body">
                    <form role="form" method="post" action="" accept-charset="UTF-8">

                        <label for="pseudo">Pseudo</label>
                        <input type="text" id="pseudo" class="form-control" name="pseudo" placeholder="Exemple: Jean" pattern="[a-zA-Z0-9-_.]{1,20}" title="Caractères acceptés : a-zA-Z0-9-_." required="required">

                        <label for="mdp">Mot de Passe</label>
                        <input type="password" id="mdp" class="form-control" name="mdp" placeholder="Mot de passe">

                        <label for="nom">Nom</label>
                        <input type="text" id="nom" class="form-control" name="nom" placeholder="Nom">

                        <label for="prebom">Prénom</label>
                        <input type="text" id="mdp" class="form-control" name="prenom" placeholder="Prénom">

                        <label for="email" class="m-t-10">Email</label>
                        <input type="text" id="email" class="form-control" name="email" placeholder="jean.dylan@gmail.com">

                        <label for="civilite">Civilité</label><br>
                        <input name="civilite" value="m" checked="" type="radio">Homme
                        <input name="civilite" value="f" type="radio">Femme<br><br>

                        <label for="ville" class="m-t-10">Ville</label>
                        <input type="text" id="ville" class="form-control" name="ville" placeholder="Paris" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_.">

                        <label for="cp" class="m-t-10">Code Postal</label>
                        <input type="text" id="code_postal" class="form-control" name="code_postal" placeholder="Code Postal">

                        <label for="adresse" class="m-t-10">Adresse</label>
                        <input type="text" id="adresse" class="form-control" name="adresse" placeholder="2 Rue du Corbusier">
                        <br />

                        <center><input type="submit" class="btn btn-primary m-t-10" id="submitbtn" name="submit" value="Submit"></center>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("inc/bas.inc.php"); ?>
