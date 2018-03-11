<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-14T22:15:07+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T15:54:20+01:00

$results = $this->getArticle();

?>


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
