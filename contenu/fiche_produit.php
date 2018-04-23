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

<section class="text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br />
        <h2 class="section-heading text-uppercase"><?= $results['nom']?></h2>
        <h4 class="section-subheading text-white">Informations sur votre choix</h4>
        <br />
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-6 offset-md-3 align-self-center">
      <p class="text-white text-justify">
        Découvrez nos canettes fabriquées artisanalement par des étudiants à Aix-En-Provence.
        Chacun de nos produits contient plus de 300 ml d’air de votre destination qui est contenu dans un emballage écologique vous garantissant une fraîcheur la plus authentique.
        Emballage cadeau disponible. Livraison sous 15 jours & paiement avec PayPal, Visa, Maestro.
      </p>
      <br />
    </div>
  </div>
</section>

<div class="col-md-6 offset-md-3">
<h1 class="title-produit">Fiche produit n° <?= $results['idProduit'] ?>
<h3 class="title-produit">Nom du produit : <?= $results['nom'] ?></h3>
<h3 class="title-produit">Provenance du produit : <?= $results['provenance'] ?></h3>
<h3 class="title-produit">Stock : <?= $stock ?> disponible(s)</h3>

<br />

<form method="POST">
  <input type="hidden" value="<?= $results['nom'] ?>" name="produit">
  <button type="submit" class="btn btn-primary">Ajouter au panier</button>
</form>

<br />
</div>

<section class="text-white">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br />
        <h2 class="section-heading text-uppercase">Nos Produits</h2>
        <h4 class="section-subheading text-white">Informations sur les produit</h4>
        <br />
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-6 offset-md-3 align-self-center">
      <p class="text-white text-justify">
        New York, Calcutta, Sydney, Paris, Pékin... Découvrez ici toutes les saveurs de l’air à travers le monde grâce à nos produits.
        En proposant les produits ci-dessous, Oxynov vous garantit la qualité d’un voyage express sans devoir payer un déplacement trop onéreux.
        La canette diffusera l’air dont elle dispose, libérant ainsi une douce atmosphère de vacances vous donnant l’impression de voyager pendant un instant autant magique qu’éphémère, mais néanmoins inoubliable.
      </p>
      <br />
    </div>
  </div>
</section>

<section style="background-color: rgb(255,255,255);">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br />
        <h2 class="section-heading text-uppercase">Deux tailles de canettes différentes</h2>
        <br />
      </div>
    </div>
  </div>
  <div class="row text-center">
    <div class="col-md-4 offset-md-1">
      <h4 class="text-muted">Normale</h4>
      <p class="text-muted" style="text-align: justify;">
        <ul class="list-unstyled text-muted">
          <li>
            Canette 33 Cl
          </li>
          <li>
            Hauteur : 116 mm
          </li>
          <li>
            Largeur : 66 mm
          </li>
          <li>
            Volume : 33 cl
          </li>
          <li>
            Poids net : 14,45 grammes
          </li>
        </ul>
      </p>
    </div>
    <div class="col-md-4 offset-md-2">
      <h4 class="text-muted">Grande</h4>
      <p class="text-muted">
        <ul class="list-unstyled text-muted">
          <li>
            Canette 50 Cl
          </li>
          <li>
            Hauteur : 190 mm
          </li>
          <li>
            Largeur : 75 mm
          </li>
          <li>
            Volume : 33 cl
          </li>
          <li>
            Poids net : 18,5 grammes
          </li>
        </ul>
      </p>
    </div>
    <br />
  </div>
</section>

<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title">PROJET ETUDIANT - Ingésup YNOV CAMPUS AIX EN PROVENCE</h5>
    <p class="card-text">Ce site fait partie d'un projet étudiant, merci de ne pas acheter les produits présentés sur ce site.</p>
  </div>
</div>
