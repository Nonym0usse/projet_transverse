<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:30:46+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:18:26+01:00
session_start();

if(!empty($_POST['tmpvide']))
{
  echo $msg = $this->viderPanier($_POST['tmpvide']);
}


?>
<div class="container-fluid panier">
  <h1 class="title-txt"><?= translateText('panier')?></h1>
  <p>
    <?= translateText('txt-panier')?>
  </p>

  <?php
  if($_SESSION['panier']['nomProduit'] == NULL)
  {
    echo translateText('alert-panier');
  }
  ?>
  <div class="container">
    <?php
    if($_SESSION['panier'] != NULL)
    {
      $nbArticles = count($_SESSION['panier']['nomProduit']);
      for ($i=0 ;$i < $nbArticles ; $i++){
        ?>

        <figure class="snip1583">
          <img src="<?= NDD_PATH."/img/canette.png"?>" style="background-color: #000; border: 1px solid white;" alt="image canette" />
          <figcaption>
            <h3><?= $_SESSION['panier']['nomProduit'][$i] ?></h3>
            <div class="price"><?= $_SESSION['panier']['prixProduit'][$i] ?>€</div>
            <div class="price">Stock : <?= $_SESSION['panier']['qteProduit'][$i] ?></div>
            <form method="POST" action="<?= setLink('panier') ?>">
              <input type="hidden" name="tmpvide" value="<?= $_SESSION['panier']['nomProduit'][$i] ?>"/>
              <button class="btn btn-danger" type="submit">Supprimer</button>
            </form>
          </figcaption>
        </figure>

        <?php
      }
      ?>
      <form method="POST" action="<?= setLink('payer')?>">
        <button class="btn btn-primary"  type="submit">Passer à la caisse</button>
      </form>
      <bR />
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
