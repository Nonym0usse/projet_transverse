<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:29:20+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T20:03:18+01:00

if(!empty($_POST))
{
  $msg = $this->setInscription($_POST);
}

?>
<section class="inscription-container">
  <div class="container">
    <h1 class="title-txt">Inscription</h1>
    <p>
      Inscrivez-vous pour profiter de nombreux avantages.
    </p>
    <form class="form-horizontal" action="" method="post" accept-charset="UTF-8">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label>Pseudo</label>
            <input type="pseudo" class="form-control" name="pseudo" placeholder="Pseudo">
            <label>Mot de passe</label>
            <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
          </div>
          <div class="form-group">
            <label>Confirmez votre mot de passe</label>
            <input type="password"  class="form-control" name="mdp2" placeholder="Confirmez votre mot de passe">
            <label>Nom</label>
            <input type="text" class="form-control" name="nom" placeholder="Nom">
          </div>
          <div class="form-group">
            <label>Prénom</label>
            <input type="text"  class="form-control" name="prenom" placeholder="Prénom">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label>Ville</label>
            <input type="text" class="form-control" name="ville" placeholder="Ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_.">
            <label>Code postal</label>
            <input type="text" class="form-control" name="code_postal" placeholder="Code postal" />
          </div>
          <div class="form-group">
            <label>Adresse</label>
            <input type="text" class="form-control" name="adresse" placeholder="Adresse" />
          </div>
          <div class="form-group">
            <label>Homme</label>
            <input type="radio" value="m" name="civilite" checked id="civilite">
            <label>Femme</label>
            <input type="radio" value="f"  name="civilite" id="civilite" >
          </div>
          <input type="submit" class="btn btn-danger" value="Inscription"></p>
        </div>
      </div>
    </form>
  </div>
</section>
<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title">PROJET ETUDIANT - Ingésup YNOV CAMPUS AIX EN PROVENCE</h5>
    <p class="card-text">Ce site fait partie d'un projet étudiant, merci de ne pas acheter les produits présentés sur ce site.</p>
  </div>
</div>
