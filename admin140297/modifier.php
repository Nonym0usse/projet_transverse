<?php
# @Author: VELLA CYRIL <nonym0usse>
# @Date:   2018-02-16T12:52:00+01:00
# @Email:  contact@vella.fr
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-05-19T14:59:58+02:00
ini_set('display_errors', 1);

require_once 'lib/Admin.php';
require_once 'navbar.php';

$admin = new Admin();
$chanson = $admin->getChanson();
$styles = $admin->getStyle();
$id = $admin->getChansonById($_REQUEST['reference']);


if(!empty($_POST)){
  $msg = $admin->setChansonsUpdate($_REQUEST['reference']);
}


?>
<div class="main-panel">
  <?php require_once 'navbar-haut.php'; ?>


  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Modifier une chanson</h4>
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Titre de la chanson</label>
                    <input type="text" name="titre" class="form-control" value="<?= $id[0]->titre?>" required>
                  </div>
                  <div class="col-md-6">
                    <label>Style de la chanson</label>
                    <select class="form-control" name="style">
                      <?php
                      foreach($styles as $res){
                        echo "<option value='$res->nom_fr'>" . $res->nom_fr . "</option>";
                      }
                      ?>
                    </select>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-md-6">
                    <label>Ou publier la chanson ?</label>
                    <select class="form-control" name="type">
                      <option value="1">Chansons à chanter</option>
                      <option value="2">Chansons sans paroles</option>
                      <option value="3">Chansons éditoriales </option>
                      <option value="4">Oeuvres originales</option>
                      <option value="5">Sonneries téléphone</option>
                      <option value="6">Virgules sonore</option>
                      <option value="7">Ambiance sonore</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <label>Ajouter un creatoke</label>
                    <input type="hidden" />
                    <input type="file" class="form-control" name="creatoke">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Ajouter une image</label>
                    <input type="hidden" />
                    <input type="file" class="form-control" name="image">
                  </div>
                  <div class="col-md-6">
                    <label>Ajouter le morceau complet</label>
                    <input type="hidden" />
                    <input type="file" class="form-control" name="complet">
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                    <label>Ajouter une description en français</label>
                    <textarea class="form-control" name="description_fr" value="<?= $id[0]->description?>"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                    <label>Ajouter une description en anglais</label>
                    <textarea class="form-control" name="description_en" value="<?= $id[0]->descriptionen?>"></textarea>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="customCheck1" value="<?= $id[0]->online?>"  name="online">
                      <label class="custom-control-label" for="customCheck1">Mettre la chanson en ligne</label>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" name="enavant" value="<?= $id[0]->enavant?>" id="customCheck1">
                      <label class="custom-control-label" for="customCheck1">Mettre en avant</label>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Lyrics de la chanson (français)</label>
                    <textarea type="text" name="lyrics-fr" class="form-control" placeholder="<?= $id[0]->lyrics?>"></textarea>
                  </div>
                  <div class="col-md-6">
                    <label>Lyrics de la chanson (anglais)</label>
                    <textarea type="text" name="lyrics-en" class="form-control" placeholder="<?= $id[0]->lyricsen?>"></textarea>
                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h4 class="title">Gérer les chansons - liste des titres</h4>
            </div>
            <div class="content table-responsive table-full-width">
              <table class="table table-hover table-striped">
                <thead>
                  <th>N°</th>
                  <th>Image</th>
                  <th>Titre</th>
                  <th>Style</th>
                  <th>En ligne</th>
                  <th>Mettre en avant</th>
                  <th>Lecture Creatoke</th>
                  <th>Lecture oeuvres</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                </thead>
                <tbody>
                  <?php
                  foreach($chanson as $chansons)
                  {
                    if($chansons->online == "1")
                    {
                      $online = "Oui";
                    }else{
                      $online = "Non";
                    }

                    if($chansons->enavant == "1")
                    {
                      $enavant = "Oui";
                    }else {
                      $enavant = "Non";
                    }
                    ?>
                    <tr>
                      <td><?= $chansons->id ?></td>
                      <td><?= $chansons->image ?></td>
                      <td><?= $chansons->titre ?></td>
                      <td><?= $chansons->style ?></td>
                      <td><?= $online ?></td>
                      <td><?= $enavant ?></td>
                      <td><?= $chansons->nblecture ?></td>
                      <td><?= $chansons->lectureoeuvre ?></td>
                      <td><a href="<?= setLink('modifier') . ",".$chansons->id?>"><i class='fas fa-edit'></i></a></td>
                      <td><a href="<?= setLink('supprimer') . ",".$chansons->id?>"><i class='fas fa-trash'></i></a></td>
                    </tr>
                    <?php
                  }
                  ?>
                </tbody>
              </table>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <?php
  require_once 'footer.php';
  ?>

</div>
</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
