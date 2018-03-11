<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:28:51+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T21:49:41+01:00
session_start();

if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
{
  $msg = $this->setConnexion($_POST);
}

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
