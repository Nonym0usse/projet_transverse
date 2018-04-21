<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T19:30:46+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:18:26+01:00
?>
<div class="container-fluid panier">
  <div class="container contact">
    <h1 class="title-txt">Panier</h1>
    <p>
      Votre panier restera valide pendant une durée maximal de 25 min. A tout moment, vous pouvez compléter votre panier. Livraison à domicile ou en point de retrait colis.
    </p>
    <?php
    if($_SESSION['panier'] == NULL)
    {
      echo "<div class='alert alert-info'>Votre panier est vide</div>";
    }
    ?>
    <div class="row">
      <?php
      if($_SESSION['panier'] != NULL)
      {
        ?>
        <h3 class="title-panier">Nom de votre article : <?= $_SESSION['panier']?></h3>

        <?php
      }
      ?>
    </div>
  </div>
</div>
