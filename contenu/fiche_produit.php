<?php
# @Author: CYRIL VELLA
# @Date:   2018-03-10T20:46:39+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:43:55+01:00
$results = $this->getProduit($_GET['id']);
if(!empty($_POST))
{
  $msg = $this->setPanier($_POST['produit']);
  echo $msg;

}


$_SESSION['produits'] = $results['nom'] . " - " . $results['provenance'];

if($results['stock'] == "0")
{
  $stock = "Produit indisponible";
}else{
  $stock = $results['stock'];
}
?>
<h1 class="title-produit">Fiche produit n° <?= $results['idProduit'] ?>
<h3 class="title-produit">Nom du produit : <?= $results['nom'] ?></h3>
<h3 class="title-produit">Provenance du produit : <?= $results['provenance'] ?></h3>
<h3 class="title-produit">Stock : <?= $stock ?> disponible(s)</h3>

<form method="POST">
  <input type="hidden" value="<?= $results['nom'] ?>" name="produit">
  <button type="submit" class="btn btn-primary">Ajouter au panier</button>
</form>
