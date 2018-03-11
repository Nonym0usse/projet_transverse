<?php
# @Author: VELLA CYRIL <nonym0usse>
# @Date:   2018-02-16T12:52:00+01:00
# @Email:  contact@vella.fr
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:18:55+01:00

require_once 'navbar.php';


if(!empty($_POST)){
  $msg = $this->setArticle();
}


$article = $this->getArticle();

?>
<div class="main-panel">
  <?php require_once 'navbar-haut.php'; ?>


  <div class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12">
          <div class="card">
            <div class="header">
              <h4 class="title">Gérer les commandes - liste des commandes</h4>
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
                  <th>Modifier</th>
                  <th>Supprimer</th>
                </thead>
                <tbody>
                  <?php
                  foreach($article as $chansons)
                  {
                    echo "<tr>";
                    echo "<td>". $chansons->idProduit."</td>";
                    echo "<td>". $chansons->nom."</td>";
                    echo "<td>". $chansons->prix."</td>";
                    echo "<td>". $chansons->description."</td>";
                    echo "<td>". $chansons->provenance."</td>"; //a modifier
                    echo "<td>". $chansons->contenanceCL."</td>"; //a modifier
                    echo "<td>". $chansons->stock."</td>"; // a modifier
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
