<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-14T22:15:07+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T15:54:20+01:00

$results = $this->getArticle();

?>


<div class="container col-xs-12">
  <h1 class="title-txt" style="text-align: center"><?= $this->translateText('boutique')?></h1>
  <p style="text-align: center;">
    <?= $this->translateText('boutique-txt')?>
  </p>
  <div class="row">
    <?php
    foreach ($results as $produit) {
      ?>
      <div class="col-md-4">
        <div class = "hovereffect">
          <img src="<?= $produit->image ?>" class="image-article">
          <div class = "overlay">
            <h2><?= $produit->nom?> </h2>
            <p>
              <a href="<?= setLink('product,'.$produit->idProduit)?>"><?= $this->translateText('decouvrir')?></a>
            </p>
          </div>
          <p class="text-white">
            <?= $this->translateText('provenance')?> : <?= $produit->provenance?>
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
    <h5 class="card-title"><?= $this->translateText('projet')?></h5>
    <p class="card-text"><?= $this->translateText('projet2')?></p>
  </div>
</div>
