<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T20:46:39+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:43:55+01:00
$results = $this->getProduit($_GET['id']);
$prod = $this->getLimit();

if(!empty($_GET['id']))
{
  $msg = $this->setPanier($_GET['id']);
  echo $msg;

}



?>

<div aria-label="Main content" role="main" class="product-detail">
  <div itemscope itemtype="http://schema.org/Product">
    <div class="shadow">
      <div class="_cont detail-top">
        <div class="cols">
          <div class="left-col">
            <div class="big">
              <span class="bdo-custom"><?= $results['prix']?>€</span>
              <span id="big-image" class="img" quickbeam="image" style="background-image: url('<?= NDD_PATH .'/img/canette.png'?>')" data-src="../img/Canoxynov_detouree.png"></span>
              <div class="detail-socials">
                <div class="social-sharing" data-permalink="http://html-koder-test.myshopify.com/products/tommy-hilfiger-t-shirt-new-york">
                  <a target="_blank"  class="share-facebook" title="Share"></a>
                  <a target="_blank"  class="share-twitter" title="Tweet"></a>
                  <a target="_blank"  class="share-pinterest" title="Pin it"></a>
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name" style="color: #FFF;"><?= $results['nom'] ?></h1>
            <div class="tabs">
              <div class="tab-labels">
                <span data-id="1" class="active">Descriptif</span>
              </div>
              <div class="tab-slides">
                <div id="tab-slide-1" itemprop="description"  class="slide active" style="color: #FFF;">
                  Description détaillée :<br /> <?= $results['description'] ?><br /><br />
                  Quantité disponible : <?= $results['stock'] ?><br />
                  Provenance : <?= $results['provenance'] ?><br />
                  Volume : <?= $results['contenanceCL'] ?> ml<br />
                  <br />
                  Nos canettes sont issues de l'agriculture biologique. Chaque produit contient l'air le plus pur possible de la ville d'origine. Livraison sous 48h en France métropolitaine uniquement.
                </div>
                <br />
                <form method="post" action="">
                  <button type="submit" value="panier" name="panier" class="btn btn-danger">Ajouter au panier</button>
                </form>
              </div>
            </div>
            <div class="social-sharing-btn-wrapper">
              <span id="social_sharing_btn">Share</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <aside class="related">
    <div class="_cont">

      <h2 class="title-product">Vous allez aimer aussi</h2>
      <div class="row">
        <?php
        foreach ($prod as $test) {

          ?>
          <div class="col-3">
            <div class="collection-list" id="collection-list" data-products-per-page="4">
              <a class="product-box">
                <span class="img">
                  <span style="background-image: url('<?= NDD_PATH .'/img/canette.png'?>')" class="i first"></span>
                </span>
              </a>
            </div>
          </div>
          <?php

        }
        ?>
      </div>

      <div class="more-products" id="more-products-wrap">
        <span id="more-products" style="background: black;" data-rows_per_page="1"><a href="<?= setLink('boutique') ?>">Découvrir</a></span>
      </div>
    </div>
  </aside>
</div>
