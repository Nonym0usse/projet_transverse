<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-14T22:15:07+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T15:54:20+01:00

$results = $this->getArticle();

?>

<section class="text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br />
        <h1 class="section-heading text-uppercase">Boutique</h1>
        <h2 class="section-subheading text-white">Faites votre choix</h2>
        <br />
      </div>
    </div>
    <div class="row text-center">
      <div class="col align-self-center">
        <p class="text-white" style="text-align: center">
          Un instant de voyage à prix abordable.
          Canettes abordables à partir de 5€.
          Un large de choix de destinations avec une air de qualité supérieure filtrée & garantissant zéro pollution.
        </p>
        <br />
      </div>
    </div>
  </div>
</section>

<div class="container col-xs-12">
  <div class="row">
    <?php
    foreach ($results as $produit) {
      ?>
      <div class="col-md-4">
        <div class = "hovereffect">
          <img src="<?= NDD_PATH."/img/Canoxynov_detouree.png"?>" class="image-article">
          <div class = "overlay">
            <h2><?= $produit->nom?> </h2>
            <p>
              <a href="<?= setLink('product,'.$produit->idProduit)?>">Découvrir</a>
            </p>
          </div>
          <p class="text-white">
            Provenance : <?= $produit->provenance?>
          </p>
        </div>
      </div>
      <?php
    }
    ?>
  </div>
</div>

<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title">PROJET ETUDIANT - Ingésup YNOV CAMPUS AIX EN PROVENCE</h5>
    <p class="card-text">Ce site fait partie d'un projet étudiant, merci de ne pas acheter les produits présentés sur ce site.</p>
  </div>
</div>
