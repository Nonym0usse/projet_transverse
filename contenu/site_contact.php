<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-14T22:15:50+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T08:32:36+01:00
?>

<section class="title-txt">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center">
        <br />
        <h1 class="section-heading text-uppercase">Contact</h1>
        <h2 class="section-subheading text-white">Une question ?</h2>
        <br />
      </div>
    </div>
    <div class="row text-center">
      <div class="col align-self-center">
        <p class="text-white" style="text-align: center">
          Contactez notre service consommateur.
          Service à l'écoute 24h/24 7j/7.
          Pour plus d'informations contactez notre service au 08.98.95.12.44.
        </p>
        <br />
      </div>
    </div>
  </div>
</section>

<div class="container-fluid txt-contact">
  <div class="container contact2">
    <div class="form-login">
      <div class="row">
        <div class="col">
          <form class="form-horizontal">
            <div class="form-group">
              <label>Nom</label>
              <input type="text" class="form-control" placeholder="Nom">
              <label>Prénom</label>
              <input type="text" class="form-control" placeholder="Prénom">
            </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="text" class="form-control" placeholder="E-Mail">
              <label>Demande</label>
              <textarea type="text" class="form-control" placeholder="Votre demande..."></textarea>
            </div>
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LeCDVIUAAAAAP86GJ95Z-0OY8CeUaG-oEeIpYcF"></div>
            </div>
            <button class="btn btn-danger" type="submit">Envoyer</button>
          </form>
          <br />
        </div>
        <div class="col">
          <img src="<?= NDD_PATH."img/contact.png"?>" class="img-contact">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="card text-white bg-danger mb-3 warning">
  <div class="card-header">ATTENTION</div>
  <div class="card-body">
    <h5 class="card-title">PROJET ETUDIANT - Ingésup YNOV CAMPUS AIX EN PROVENCE</h5>
    <p class="card-text">Ce site fait partie d'un projet étudiant, merci de ne pas acheter les produits présentés sur ce site.</p>
  </div>
</div>
