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
    <h4><?= $this->translateText('nouvelle')?></h4>
    <div class="row">
      <div class="col">
        <p class="txt-ere">
          <?= $this->translateText('txt-ere')?>
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
          <h4><?= $this->translateText('souffle')?></h4>
          <?= $this->translateText('souffle-txt')?>
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
          <h4><?= $this->translateText('chez-soi')?></h4>
          <?= $this->translateText('chez-soi-txt')?>
        </p>
      </div>
    </div>
    <div class="col">
      <center>
        <img src="<?= NDD_PATH."img/contact.png"?>" id="canette2" class="img-contact">
      </center>
    </div>
  </div>
</section>



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
