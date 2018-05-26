<?php
# @Author: CYRIL VELLA
# @Date:   2017-11-12T11:05:27+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T16:11:56+01:00
$e = NDD_PATH.'/img/Canoxynov.png';
?>

<section class="canette-accueil presentation"></section>

<section class="container-fluid presentation">
  <div class="container" style="padding-top: 250px">
    <h4>Une nouvelle ère.</h4>
    <div class="row">
      <div class="col">
        <p class="txt-ere">
          Née de l'initiative d'étudiant de la ville d'Aix-en-Provence, OxYnov est la promesse d'une nouvelle méthode pour voyager, facilement tout en restant chez vous. En effet, il s'agit de commercialiser des cannetes d'air naturel et original venant des quatres coins du monde.
        </p>
      </div>
      <div class="col">
          <img src="<?= NDD_PATH."img/aix.png"?>" id="aix" >
      </div>
    </div>
  </div>
</section>


<section class="container-fluid presentation">
  <div class="container" style="padding-top: 250px">
    <div class="row">
      <div class="col">
        <p>
          <img src="<?= NDD_PATH."img/contact.png"?>" id="canette" class="img-contact">
        </p>
      </div>
      <div class="col">
        <p class="txt-ere">
          <h4>Un nouveau souffle.</h4>
          Les avancées technologiques nous permettent aujourd'hui de capturer, de conserver, de manière optimale et saine, la quantité précise d'air, sans souillier l'environnement. Une fois scellée, son contenu reste intact jusqu'a son ouverture et sa consommation. Chaque canette est numérotée, elles sont donc unique !
        </p>
      </div>
    </div>
  </div>
</section>


<section class="container-fluid presentation">
  <div class="container" style="padding-top: 250px">
    <div class="row">
    <div class="col">
      <p class="txt-ere">
        <h4>Un air de chez soi</h4>
        Vous avez le mal du pays? Il suffit d'ouvrir une canette assemblé directement dans votre région !
        Vous souhaitez explorer de nouveaux horizons mais n'avez pas les moyens ni le temps? Utilisez une canette assemblée pour vous et voyagez dans les endroits les plus exotiques !      </p>
      </div>
    </div>
      <div class="col">
          <center>
            <img src="<?= NDD_PATH."img/contact.png"?>" id="canette2" class="img-contact">
          </center>
      </div>
    </div>
  </section>

  <div class="container col-xs-12">
    <div class="row">
      <div class="col-md-4">
        <div class = "hovereffect">
            <img src="<?= NDD_PATH."/img/Canoxynov_detouree.png"?>" class="image-article">
          <div class = "overlay">
            <h2>NOUVEAU !</h2>
            <p>
              <a href="<?= setLink('boutique') ?>">Découvrir</a>
            </p>
          </div>
          <p class="text-white">
            Notre nouvelle canette
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class = "hovereffect">
          <img src="<?= NDD_PATH."/img/Canoxynov_detouree.png"?>" class="image-article">
          <div class = "overlay">
            <h2>L'INCONTOURNABLE</h2>
            <p>
              <a href="<?= setLink('boutique') ?>">Découvrir</a>
            </p>
          </div>
          <p class="text-white">
            La plus populaire
          </p>
        </div>
      </div>
      <div class="col-md-4">
        <div class = "hovereffect">
          <img src="<?= NDD_PATH."/img/Canoxynov_detouree.png"?>" class="image-article">
          <div class = "overlay">
            <h2>LA MEILLEURE</h2>
            <p>
              <a href="<?= setLink('boutique') ?>">Découvrir</a>
            </p>
          </div>
          <p class="text-white">
            La mieux noté
          </p>
        </div>
      </div>
    </div>
  </div>


  <div class="container-fluid">
    <div class="card text-white bg-danger mb-3 warning">
      <div class="card-header">ATTENTION</div>
      <div class="card-body">
        <h5 class="card-title">PROJET ETUDIANT - Ingésup YNOV CAMPUS AIX EN PROVENCE</h5>
        <p class="card-text">Ce site fait partie d'un projet étudiant, merci de ne pas acheter les produits présentés sur ce site.</p>
      </div>
    </div>
  </div>

  <script>
  $.scrollify({
    section : "section",
    sectionName : "presentation",
    interstitialSection : "",
    easing: "easeOutExpo",
    scrollSpeed: 1100,
    offset : 0,
    scrollbars: true,
    standardScrollElements: "",
    setHeights: true,
    overflowScroll: true,
    updateHash: true,
    touchScroll:true,
    before:function() {},
    after:function() {},
    afterResize:function() {},
    afterRender:function() {}
  });

  </script>

  <script>
  $(window).scroll(function (event) {
    var scroll = $(window).scrollTop();
    if(scroll > 900)
    {
      $("#aix").addClass("animated fadeInDownBig");
    }
    if(scroll > 1800)
    {
      $("#canette").addClass("animated fadeInLeft");
    }
    if(scroll > 2800)
    {
      $("#canette2").addClass("animated fadeInUp");
    }
  });
  </script>
