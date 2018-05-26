<?php
# @Author: VELLA CYRIL <nonym0usse>
# @Date:   2018-02-16T12:52:00+01:00
# @Email:  contact@vella.fr
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-05-19T14:17:50+02:00

require_once 'lib/Admin.php';
require_once 'navbar.php';

$admin = new Admin();
$chanson = $admin->getChanson();
$styles = $admin->getStyle();


?>
<div class="main-panel">

  <?php require_once 'navbar-haut.php';

  if(!empty($_POST['titre-bloc1-fr'])){
    echo $msg = $admin->setTrad();
  }

  if(!empty($_FILES['image1'])){
      varDump("ok");
    echo $msg = $admin->setDiaporama();
  }

  if(!empty($_FILES['photo']))
  {
      echo $msg = $admin->setPhoto();
  }

  ?>

  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Modifier les traductions</h4>
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <h4>Accueil</h4>

                <div class="form-group">
                  <div class="col-md-6">
                    <img src="assets/img/template1.png" class="img-translate"/>
                  </div>
                  <div class="col-md-6">
                    <label>Titre en français</label>
                    <input type="text" name="titre-bloc1-fr" class="form-control" placeholder="Nom du style en français" required>
                    <label>Texte en français</label>
                    <textarea name="texte-bloc1-fr" class="form-control" placeholder="Nom du style en français" required></textarea>
                    <hr />
                    <label>Titre en anglais</label>
                    <input type="text" name="titre-bloc1-en" class="form-control" placeholder="Nom du style en français" required>
                    <label>Texte en anglais</label>
                    <textarea name="texte-bloc1-en" class="form-control" placeholder="Nom du style en français" required></textarea>
                  </div>
                </div>

                <hr />

                <div class="form-group">
                  <div class="col-md-6">
                    <img src="assets/img/template2.png" class="img-translate"/>
                  </div>
                  <div class="col-md-6">
                    <label>Titre en français</label>
                    <input type="text" name="titre-bloc2-fr" class="form-control" placeholder="Nom du style en français" required>
                    <label>Texte en français</label>
                    <textarea name="texte-bloc2-fr" class="form-control" placeholder="Nom du style en français" required></textarea>
                    <hr />
                    <label>Titre en anglais</label>
                    <input type="text" name="titre-bloc2-en" class="form-control" placeholder="Nom du style en français" required>
                    <label>Texte en anglais</label>
                    <textarea name="texte-bloc2-en" class="form-control" placeholder="Nom du style en français" required></textarea>
                  </div>
                </div>
                <hr />

                <div class="form-group">
                  <div class="col-md-6">
                    <img src="assets/img/template3.png" class="img-translate"/>
                  </div>
                  <div class="col-md-6">
                    <label>Titre en français</label>
                    <input type="text" name="titre-fr-chiffre" class="form-control" placeholder="Nom du style en français" required>
                    <label>Texte en français</label>
                    <textarea name="text-fr-chiffre" class="form-control" placeholder="Nom du style en français" required></textarea>
                    <hr />
                    <label>Titre en anglais</label>
                    <input type="text" name="titre-en-chiffre" class="form-control" placeholder="Nom du style en français" required>
                    <label>Texte en anglais</label>
                    <textarea name="text-en-chiffre" class="form-control" placeholder="Nom du style en français" required></textarea>
                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
              </form>
              <hr />
              <h4>Modifier les images du diaporama</h4>
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-md-12">
                    <label>Choisir la première image</label>
                    <input type="file" name="image1" class="form-control">
                    <label>Choisir la deuxième image</label>
                    <input type="file" name="image2" class="form-control">
                    <label>Choisir la troisième image</label>
                    <input type="file" name="image3" class="form-control" >
                    <label>Choisir la quatrième image</label>
                    <input type="file" name="image4" class="form-control" >
                  </div>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
              </form>

                <h4>Modifier image des chansons</h4>
                <form class="form-horizontal" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <div class="col-md-12">
                            <label>Choisir une image</label>
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
                </form>
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
<script>
CKEDITOR.replace('desc-fr');
</script>
<script>
CKEDITOR.replace('desc-en');
</script>

<!--   Core JS Files   -->
<script src="assets/js/jquery.3.2.1.min.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js?v=1.4.0"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

</html>
