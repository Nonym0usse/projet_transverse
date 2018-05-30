<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-14T22:15:50+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T08:32:36+01:00
?>

<div class="container-fluid txt-contact">
  <div class="container contact2">
    <h1 class="title-txt"><?= $this->translateText('contactez')?></h1>
    <br />
    <p>
<?= $this->translateText('txt-contact')?>
    </p>
    <div class="form-login">
      <div class="row">
        <div class="col">
          <form class="form-horizontal">
            <div class="form-group">
              <label><?= $this->translateText('nom')?></label>
              <input type="text" class="form-control" placeholder="<?= $this->translateText('nom')?>">
              <label><?= $this->translateText('prenom')?></label>
              <input type="text" class="form-control" placeholder="<?= $this->translateText('prenom')?>">
            </div>
            <div class="form-group">
              <label>E-mail</label>
              <input type="text" class="form-control" placeholder="E-Mail">
              <label><?= $this->translateText('demande')?></label>
              <textarea type="text" class="form-control" placeholder="<?= $this->translateText('demande')?>..."></textarea>
            </div>
            <div class="form-group">
              <div class="g-recaptcha" data-sitekey="6LeCDVIUAAAAAP86GJ95Z-0OY8CeUaG-oEeIpYcF"></div>
            </div>
            <button class="btn btn-danger" type="submit"><?= $this->translateText('envoyer')?></button>
          </form>
          <br />
        </div>
        <div class="col">
          <div class="fb-page" style="margin-left: 100px;" data-href="https://www.facebook.com/oxynov13/" data-tabs="timeline" data-height="350" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/oxynov13/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/oxynov13/">Oxynov</a></blockquote></div>        </div>
        </div>
      </div>
    </div>
  </div>
  <div class="card text-white bg-danger mb-3 warning">
    <div class="card-header">ATTENTION</div>
    <div class="card-body">
      <h5 class="card-title"><?= $this->translateText('projet')?></h5>
      <p class="card-text"><?= $this->translateText('projet2')?></p>
    </div>
  </div>
