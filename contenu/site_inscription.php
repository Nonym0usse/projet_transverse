<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:29:20+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T20:03:18+01:00

if(!empty($_POST))
{
  echo $msg = $this->setInscription($_POST);
}

?>
<section class="inscription-container">
  <div class="container">
    <h1 class="title-txt"><?= $this->translateText('inscrivez-vous')?></h1>
    <p>
      Inscrivez-vous pour profiter de nombreux avantages.
    </p>
    <form class="form-horizontal" action="" method="post" accept-charset="UTF-8">
      <div class="row">
        <div class="col">
          <div class="form-group">
            <label>Pseudo</label>
            <input type="pseudo" class="form-control" name="pseudo" placeholder="Pseudo">
            <label><?= $this->translateText('mdp')?></label>
            <input type="password" class="form-control" name="mdp" placeholder="<?= $this->translateText('mdp')?>">
          </div>
          <div class="form-group">
            <label><?= $this->translateText('confirmez')?></label>
            <input type="password"  class="form-control" name="mdp2" placeholder="<?= $this->translateText('confirmez')?>">
            <label><?= $this->translateText('nom')?></label>
            <input type="text" class="form-control" name="nom" placeholder="<?= $this->translateText('nom')?>">
          </div>
          <div class="form-group">
            <label><?= $this->translateText('prenom')?></label>
            <input type="text"  class="form-control" name="prenom" placeholder="<?= $this->translateText('prenom')?>">
            <label>Email</label>
            <input type="email" class="form-control" name="email" placeholder="E-mail">
          </div>
        </div>
        <div class="col">
          <div class="form-group">
            <label><?= $this->translateText('ville')?></label>
            <input type="text" class="form-control" name="ville" placeholder="<?= $this->translateText('ville')?>" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_.">
            <label><?= $this->translateText('cp')?></label>
            <input type="text" class="form-control" name="code_postal" placeholder="<?= $this->translateText('cp')?>" />
          </div>
          <div class="form-group">
            <label><?= $this->translateText('adresse')?></label>
            <input type="text" class="form-control" name="adresse" placeholder="<?= $this->translateText('adresse')?>" />
          </div>
          <div class="form-group">
            <label><?= $this->translateText('homme')?></label>
            <input type="radio" value="m" name="civilite" checked id="civilite">
            <label><?= $this->translateText('femme')?></label>
            <input type="radio" value="f"  name="civilite" id="civilite" >
          </div>
          <input type="submit" class="btn btn-danger" value="<?= $this->translateText('envoyer')?>"></p>
        </div>
      </div>
    </form>
  </div>
</section>

<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title"><?= $this->translateText('projet')?></h5>
    <p class="card-text"><?= $this->translateText('projet2')?></p>
  </div>
</div>
