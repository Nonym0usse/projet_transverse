<?php
# @Author: VELLA CYRIL <nonym0usse>
# @Date:   2018-02-16T12:52:00+01:00
# @Email:  contact@vella.fr
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:09:51+01:00


require_once 'lib/Admin.php';
require_once 'navbar.php';

$admin = new Admin();


$users = $admin->getUsers();

if(!empty($_POST['pseudo']))
{
  $msg = $admin->setInscription($_POST);
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
              <h4 class="title">Ajouter un membre</h4>

              <form class="form-horizontal" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="col">
                    <div class="form-group">
                      <label>Pseudo</label>
                      <input type="pseudo" class="form-control" name="pseudo" placeholder="Pseudo">
                      <label>Moridier le mot de passe</label>
                      <input type="password" class="form-control" name="mdp" placeholder="Mot de passe">
                    </div>
                    <div class="form-group">
                      <label>Confirmez le mot de passe</label>
                      <input type="password"  class="form-control" name="mdp2" placeholder="Confirmez le mot de passe">
                      <label>Nom</label>
                      <input type="text" class="form-control" name="nom" placeholder="Nom">
                    </div>
                    <div class="form-group">
                      <label>Prénom</label>
                      <input type="text"  class="form-control" name="prenom" placeholder="Prénom">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" placeholder="E-mail">
                    </div>
                  </div>
                  <div class="col">
                    <div class="form-group">
                      <label>Ville</label>
                      <input type="text" class="form-control" name="ville" placeholder="ville" pattern="[a-zA-Z0-9-_.]{5,15}" title="caractères acceptés : a-zA-Z0-9-_.">
                      <label>Code postal</label>
                      <input type="text" class="form-control" name="code_postal" placeholder="cp" />
                    </div>
                    <div class="form-group">
                      <label>Adresse</label>
                      <input type="text" class="form-control" name="adresse" placeholder="adresse" />
                    </div>
                    <div class="form-group">
                      <label>Homme</label>
                      <input type="radio" value="m" name="civilite" checked id="civilite">
                      <label>Femme</label>
                      <input type="radio" value="f"  name="civilite" id="civilite" >
                    </div>
                    <input type="submit" class="btn btn-danger" value="Envoyer"></p>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="card">
            <div class="header">
              <h4 class="title">Gérer les membres</h4>
            </div>
            <div class="content table-responsive table-full-width">
              <table class="table table-hover table-striped">
                <thead>
                  <th>Login</th>
                  <th>Mot de passe</th>
                  <th>Nom</th>
                  <th>Prénom</th>
                  <th>Date Naissance</th>
                  <th>Date Insciption</th>
                  <th>Adresse</th>
                  <th>Mail</th>
                  <th>Tel. fixe</th>
                  <th>Tel. port</th>
                  <th>Admin</th>
                  <th>Civilité</th>
                  <th>Modifier</th>
                  <th>Supprimer</th>
                </thead>
                <tbody>
                  <?php
                  foreach($users as $client)
                  {
                    if($client->cRole == 1)
                    {
                      $adm = "Oui";
                    }else{
                      $adm = "Non";
                    }

                    if($client->gender == "m")
                    {
                      $gender = "Homme";
                    }else{
                      $gender = "Femme";
                    }
                    ?>
                    <tr>
                      <td><?= $client->login ?></td>
                      <td><?= $client->passwd ?></td>
                      <td><?= $client->nom ?></td>
                      <td><?= $client->prenom ?></td>
                      <td><?= $client->dateNaissance ?></td>
                      <td><?= $client->dateInscription ?></td>
                      <td><?= $client->adresse ?></td>
                      <td><?= $client->mail ?></td>
                      <td><?= $client->telFixe ?></td>
                      <td><?= $client->telPort ?></td>
                      <td><?= $client->$adm ?></td>
                      <td><?= $client->$gender ?></td>
                      <td><a href="<?= setLink('admin140297/modifieruser') . ",".$client->login?>"><i class='fas fa-edit'></i></a></td>
                      <td><a href="<?= setLink('admin140297/supprimeruser') . ",".$client->login?>"><i class='fas fa-trash'></i></a></td>
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
