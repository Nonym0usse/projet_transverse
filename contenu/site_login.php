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

<section class="title-txt">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br />
        <h1 class="section-heading text-uppercase">Connexion</h1>
        <br />
      </div>
    </div>
    <div class="row text-center">
      <div class="col align-self-center">
        <p class="text-white" style="text-align: justify">
          Connectez-vous à votre compte pour bénéficier de nombreux avantages. Pas encore inscrit ? Aucun problème, c'est entièrement gratuit.
        </p>
        <br />
      </div>
    </div>
  </div>
</section>

<section class="connexion-container txt-contact">
  <div class="container">
    <div class="login-container">
      <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label>Pseudo</label>
          <input type="pseudo" name="pseudo" class="form-control" placeholder="Pseudo">
          <label>Mot de passe</label>
          <input type="password" name="mdp" class="form-control" placeholder="Mot de passe">
        </div>
        <input type="submit" class="btn btn-danger" value="Connexion">
      </form>
      <br />
      <span>Pas encore inscrit ? </span><a href="<?= setLink('inscription')?>">Inscrivez-vous.</a>
    </div>
  </div>
</section>
<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title">PROJET ETUDIANT - Ingésup YNOV CAMPUS AIX EN PROVENCE</h5>
    <p class="card-text">Ce site fait partie d'un projet étudiant, merci de ne pas acheter les produits présentés sur ce site.</p>
  </div>
</div>
