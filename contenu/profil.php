<?php

$user = $this->getInfos();


?>
<div class="container-fluid profil">
  <h1 style="color: #FFF; text-align: center">Votre profil</h1>


  <div class="container" style="margin-top: 100px;">
    <div class="span3 well">
      <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3 style="color: #FFF;"><?= $_SESSION['pseudo'] ?></h3>
        <em style="color: #fff;">Cliquez sur la photo pour les informations</em>
      </center>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
            <h4 class="modal-title" style="text-align: center" id="myModalLabel">Vos informations</h4>
          </div>
          <div class="modal-body">
            <center>
              <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
              <h3 class="media-heading"><?= $_SESSION['pseudo'] ?> <small>FR</small></h3>

              <center>
                <p class="text-left" style="color: #000"><strong style="color: #000">Infos :  </strong><br>
                  Nom : <?= $user[0]['nom'] ?> <br />
                  Prénom : <?= $user[0]['prenom'] ?><br />
                  Adresse : <?= $user[0]['adresse'] ?><br />
                  Mail :  <?= $user[0]['mail'] ?><br />
                  Civilité :  <?= $user[0]['gender'] ?><br />
                </p>
                <br>
              </center>
            </div>
            <div class="modal-footer">
              <center>
                <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
              </center>
            </div>
          </div>
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
