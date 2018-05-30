<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:28:51+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T21:49:41+01:00
session_start();

if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
{
  echo $msg = $this->setConnexion($_POST);
}

?>

<section class="connexion-container txt-contact">
  <div class="container">
    <h1 class="title-txt"><?= $this->translateText('connexion')?></h1>
    <br />
    <p>
      <?= $this->translateText('connectez-vous')?>
    </p>
    <div class="login-container">
      <form class="form-horizontal" action="" method="post">
        <div class="form-group">
          <label>Pseudo</label>
          <input type="pseudo" name="pseudo" class="form-control" placeholder="Pseudo">
          <label><?= $this->translateText('mdp')?></label>
          <input type="password" name="mdp" class="form-control" placeholder="<?= $this->translateText('mdp')?>">
        </div>
        <input type="submit" class="btn btn-danger" value="Connexion">
      </form>
      <br />
      <span><?= $this->translateText('ask-ins')?> </span><a href="<?= setLink('inscription')?>"><?= $this->translateText('inscrivez-vous')?></a>
    </div>
  </div>
</section>
<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title"><?= $this->translateText('projet')?></h5>
    <p class="card-text"><?= $this->translateText('projet2')?></p>
  </div>
</div>
