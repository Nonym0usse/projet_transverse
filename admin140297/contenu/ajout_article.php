<?php
# @Author: VELLA CYRIL <nonym0usse>
# @Date:   2018-02-16T12:52:00+01:00
# @Email:  contact@vella.fr
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:18:08+01:00

require_once 'lib/Admin.php';
require_once 'navbar.php';

$admin = new Admin();


if(!empty($_POST)){
  $msg = $admin->setArticle($_POST);
}

?>
<div class="main-panel">
  <?php require_once 'navbar-haut.php' ?>
  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Ajouter un article</h4>
              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Titre de l'article</label>
                    <input type="text" name="titre" class="form-control" placeholder="Nom de l'article" required>
                  </div>
                  <div class="col-md-6">
                    <label>Prix de l'article</label>
                    <input type="text" name="prix" class="form-control" placeholder="Prix de l'article" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6">
                    <label>Provenance</label>
                    <input type="text" name="provenance" class="form-control" placeholder="Provenance de l'article" required>
                  </div>

                  <div class="col-md-6">
                    <label>Contenance en cl</label>
                    <input type="text" placeholder="Contenance en CL" class="form-control" name="contenanceCL">
                  </div>
                </div>
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Stock</label>
                    <input type="text" class="form-control" placeholder="Stock" name="stock">
                  </div>
                  <div class="col-md-6">
                    <label>Description</label>
                    <input type="text" class="form-control"  placeholder="Description" name="description">
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
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
