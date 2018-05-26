<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-11T07:57:13+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T08:12:10+01:00
?>

<nav class="navbar navbar-expand-md navbar-light">
  <div class="container">
    <a class="navbar-brand" href="<?= setlink('') ?>"><img class="logo" src="<?= NDD_PATH.'img/logobleuoxynov.png'?>"></a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <?php
        if(internauteEstConnecte()) // admin
        {
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('') ?>">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('boutique') ?>">Boutique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('contact') ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('panier') ?>">Mon panier</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('profil') ?>">Bonjour, <?= $_SESSION['pseudo'] ?></a>
          </li>
          <?php
        }else{
          ?>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('') ?>">Accueil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('boutique') ?>">Boutique</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('contact') ?>">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('connexion') ?>">Connexion</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= setlink('panier') ?>">Mon panier</a>
          </li>
          <?php
        }

        ?>

      </ul>
      <form class="form-inline my-lg-0 mr-auto">
        <input class="form-control mr-sm-2 form-search" type="text" placeholder="Rechercher">
        <button class="btn  my-2 my-sm-0" type="submit"><i class="fa fa-fw fa-search"></i></button>
      </form>
    </div>
  </div>
</nav>
