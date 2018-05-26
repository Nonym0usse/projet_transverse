<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-15T23:22:19+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-02-19T23:07:05+01:00


require_once 'lib/Admin.php';
require_once 'navbar.php';

$admin = new Admin();
$results = $admin->getStyle();

if(!empty($_POST)){
    $msg = $admin->setCategorie();
}


?>
<div class="main-panel">
  <?php require_once 'navbar-haut.php' ?>

    <?php if(isset($msg)){ echo $msg; } ?>

    <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Ajouter un style</h4>
              <form class="form-horizontal" method="post">
                <div class="form-group">
                  <div class="col-md-6">
                    <label>Nom du style en français</label>
                    <input type="text" name="nom_fr" class="form-control" placeholder="Nom du style en français" required>
                  </div>
                  <div class="col-md-6">
                    <label>Nom du style en anglais</label>
                    <input type="text" name="nom_en" class="form-control" placeholder="Nom du style en anglais" required>
                  </div>
                </div>
                <button type="submit" class="btn btn-primary">Enregistrer</button>
              </div>
            </div>
          </div>

          <div class="col-md-12">
            <div class="card">
              <div class="header">
                <h4 class="title">Gérer les styles de chansons</h4>
              </div>
              <div class="content table-responsive table-full-width">
                <table class="table table-hover table-striped">
                  <thead>
                    <th>N°</th>
                    <th>Nom en français</th>
                    <th>Nom en anglais</th>
                    <th>Modifier</th>
                    <th>Supprimer</th>
                  </thead>
                  <tbody>
                  <?php

                  foreach($results as $style)
                  {
                      echo "<tr>";
                      echo "<td>". $style->id."</td>";
                      echo "<td>". $style->nom_fr."</td>";
                      echo "<td>". $style->nom_en."</td>";
                      echo "<td><a onClick='modifier();'><i class='fas fa-edit'></i></a></td>";
                      echo "<td><i class='fas fa-trash' onClick='delete();'></i></td>";
                      echo "</tr>";
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
