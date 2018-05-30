<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T20:46:39+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:43:55+01:00
$results = $this->getProduit($_GET['id']);
$prod = $this->getLimit();

if(!empty($_POST['panierok']))
{
  echo $msg = $this->setPanier($_POST['panierok']);
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
              <span id="big-image" class="img" quickbeam="image" style="background-image: url('<?= $results['image'] ?>')" data-src="../img/Canoxynov_detouree.png"></span>
              <div class="detail-socials">
                <div class="social-sharing">
                  <div class="fb-like" data-href="https://www.facebook.com/oxynov13/" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="right-col">
            <h1 itemprop="name" style="color: #FFF;"><?= $results['nom'] ?></h1>
            <div class="tabs">
              <div class="tab-labels">
                <span data-id="1" class="active"><?= translateText('descriptif')?></span>
              </div>
              <div class="tab-slides">
                <div id="tab-slide-1" itemprop="description"  class="slide active" style="color: #FFF;">
                  <?= translateText('description-detaillee')?> :<br /> <?= $results['description'] ?><br /><br />
                  <?= translateText('quantite')?> : <?= $results['stock'] ?><br />
                  <?= translateText('provenance')?> : <?= $results['provenance'] ?><br />
                  Volume : <?= $results['contenanceCL'] ?> ml<br />
                  <br />
                  Commentaire :
                  <br />
                  <?= translateText('txt-detail')?>
                </div>
                <br />
                <form method="post" action="">
                  <input type="hidden" name="panierok" value="<?= $_GET['id'] ?>"/>
                  <button type="submit" value="panier" name="panier" class="btn btn-danger"><?= translateText('ajouter')?></button>
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

      <h2 class="title-product"><?= translateText('suggestion')?></h2>
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
        <span id="more-products" style="background: black;" data-rows_per_page="1"><a href="<?= setLink('boutique') ?>"><?= translateText('decouvrir')?></a></span>
      </div>
    </div>
  </aside>
</div>
<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title"><?= $this->translateText('projet')?></h5>
    <p class="card-text"><?= $this->translateText('projet2')?></p>
  </div>
</div>
