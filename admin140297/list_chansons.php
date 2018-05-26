<?php
# @Author: VELLA CYRIL <nonym0usse>
# @Date:   2018-02-16T12:52:00+01:00
# @Email:  contact@vella.fr
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:09:51+01:00


require_once 'lib/Admin.php';
require_once 'navbar.php';

$admin = new Admin();

$article = $admin->getArticle();

if(!empty($_POST)){
  echo $msg = $admin->setArticle();
}

//varDump($article);

?>
<div class="main-panel">
  <?php require_once 'navbar-haut.php'; ?>
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
                    <label>Nom du produit</label>
                    <input type="text" name="nom" class="form-control" placeholder="Nom du produit" required>
                  </div>

                  <div class="col-md-6">
                    <label>Prix du produit</label>
                    <input type="text" name="prix" class="form-control" placeholder="Prix du produit" required>
                  </div>
                </div>


                <div class="form-group">
                  <div class="col-md-6">
                    <label>Ajouter une image</label>
                    <input type="hidden" />
                    <input type="file" class="form-control" name="image">
                  </div>
                  <div class="col-md-6">
                    <label>Provenance du produit</label>
                    <input type="text" name="provenance" class="form-control" placeholder="Provenance du produit" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-6">
                    <label>contenanceCL du produit</label>
                    <input type="text" name="contenanceCL" class="form-control" placeholder="Contenance CL" required>
                  </div>
                  <div class="col-md-6">
                    <label>Stock</label>
                    <input type="text" name="stock" class="form-control" placeholder="Stock" required>
                  </div>
                </div>

                <div class="form-group">
                  <div class="col-md-12">
                    <label>Description du produit</label>
                    <textarea class="form-control" name="description" placeholder="Description du produit"></textarea>
                  </div>
                </div>


                <button type="submit" name="submit" class="btn btn-primary">Enregistrer</button>
              </form>
            </div>
          </div>
          <div class="card">
            <div class="header">
              <h4 class="title">Gérer les articles</h4>
            </div>
            <div class="content table-responsive table-full-width">
              <table class="table table-hover table-striped">
                <thead>
                  <th>N°</th>
                  <th>Nom</th>
                  <th>Prix</th>
                  <th>Description</th>
                  <th>Provenance</th>
                  <th>ContenanceCL</th>
                  <th>Stock</th>
                  <th>Image</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                </thead>
                <tbody>
                  <?php
                  foreach($article as $produit)
                  {
                    ?>
                    <tr>
                      <td><?= $produit->idProduit ?></td>
                      <td><?= $produit->nom ?></td>
                      <td><?= $produit->prix ?></td>
                      <td><?= $produit->description ?></td>
                      <td><?= $produit->provenance ?></td>
                      <td><?= $produit->contenanceCL ?></td>
                      <td><?= $produit->stock ?></td>
                      <td><?= $produit->image ?></td>
                      <td><a href="<?= setLink('modifier') . ",".$produit->idProduit?>"><i class='fas fa-edit'></i></a></td>
                      <td><a href="<?= setLink('supprimer') . ",".$produit->idProduit?>"><i class='fas fa-trash'></i></a></td>
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
