<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-19T22:27:37+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-05-19T15:17:11+02:00

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Database.php';
require_once 'function.php';

class Admin{

  public function getArticle()
  {
    $db = new \lib\Database();
    $data = $db->query("SELECT * FROM produit");
    return $data;
  }



  public function setArticle()
  {
    $db = new \lib\Database();

    if(!empty($_FILES['image'])){
      $chemin = upload($_FILES['image']);
      varDump($chemin);
    }
    else{
      $msg = "Merci de remplir les champs";
    }

    $req = $db->prepare("INSERT INTO produit(nom, prix, description, provenance, contenanceCL, stock, image) VALUES (:nom, :prix, :description, :provenance, :contenanceCL, :stock, :image)");
    $req->execute(array(
      'nom' => $_POST['nom'],
      'prix' => $_POST['prix'],
      'description' => $_POST['description'],
      'provenance' => $_POST['provenance'],
      'contenanceCL' => $_POST['contenanceCL'],
      'stock' => $_POST['stock'],
      'image' => $chemin
    ));

    if($req)
    {
      $msg = "<div class='alert alert-success'>Article ajouté avec succès</div>";
    }else{
      $msg = "<div class='alert alert-danger'>Erreur lors de l'ajoute de l'article</div>";
    }
    return $msg;
  }
  /** TYPE */


  public function internauteEstConnecte()
  {
    if(!isset($_SESSION['pseudo']))
    {
      return false;
    }
    else
    {
      return true;
    }
  }

  public function setConnexion()
  {
    $db = new \lib\Database();

    if($this->internauteEstConnecte())
    {
      header("location:dashboard.php");
      exit();
    }

    if(!empty($_POST['email']) && !empty($_POST['password']))
    {

      $req = $db->prepare("SELECT login, passwd FROM clients WHERE login = :login");
      $req->execute(array(
        'login' => $_POST['email']
      ));

      $resultat = $req->fetch();

      $pass = hash('sha256', $_POST['password']);

      if($pass == $resultat['passwd'])
      {
        session_start();
        $_SESSION['pseudo'] = $resultat['login'];
        header('Location: dashboard.php');
        exit();
      }else {
        $msg = "<div class='alert alert-warning'>Mot de passe incorrect.</div>";
      }
    }
    else{
      $msg = "<div class='alert alert-warning'>Merci de renseigner un identifiant et un mot de passe.</div>";
    }
    return $msg;
  }




  public function getArticlebyId($id)
  {
    $db = new \lib\Database();
    $req = $db->query("SELECT * FROM produit where idProduit = '$id'");
    return $req;
  }


  public function setArticleUpdate($id)
  {
    $db = new \lib\Database();

    if(!empty($_POST['nom']) && !empty($_POST['prix']))
    {
      $nom = $_POST['nom'];
      $prix = $_POST['prix'];
      $provenance = $_POST['provenance'];
      $contenance = $_POST['contenanceCL'];
      $stock = $_POST['stock'];
      $description = $_POST['description'];

      $sql = "UPDATE produit SET nom='$nom', prix='$prix', provenance='$provenance', contenance='$contenance', stock='$stock', description='$description' WHERE id='$id'";
      $req = $db->prepare($sql);
      $req->execute();
    }else{
      varDump("Champs vides");
    }
  }

  public function deleteArticle($id)
  {
    $db = new \lib\Database();

    $sql = "DELETE FROM produit WHERE idProduit='$id'";
    $req = $db->prepare($sql);
    $req->execute();


  }

  public function setInscription($data)
  {
    $db = new \lib\Database();

    $hash = password_hash($data['mdp'], PASSWORD_DEFAULT);

    $req = $db->prepare("INSERT INTO clients(login, passwd, nom, prenom, dateNaissance, dateInscription, adresse, mail, telFixe, telPort, cRole, gender) VALUES (:login, :passwd, :nom, :prenom, :dateNaissance, :dateInscription, :adresse, :mail, :telFixe, :telPort, :cRole, :gender)");
    $req->execute(array(
      'login' => $data['pseudo'],
      'passwd' => $hash,
      'nom' => $data['nom'],
      'prenom' => $data['prenom'],
      'dateNaissance' => $data['dateNaissance'],
      'dateInscription' => $data['dateInscription'],
      'adresse' => $data['adresse'],
      'mail' => $data['email'],
      'telFixe' => $data['telFixe'],
      'telPort' => $data['telPort'],
      'cRole' => 0,
      'gender' => $data['civilite']
    ));
  }

  public function getUsers()
  {
    $db = new \lib\Database();
    $req = $db->query("SELECT * FROM clients");
    return $req;
  }

  public function deleteUser($id)
  {
    $db = new \lib\Database();

    $sql = "DELETE FROM clients WHERE login='$id'";
    $req = $db->prepare($sql);
    $req->execute();
  }

  public function getCommande()
  {
    $db = new \lib\Database();
    $req = $db->query("SELECT * FROM commande");
    return $req;
  }

  public function deleteCommande($id)
  {
    $db = new \lib\Database();

    $sql = "DELETE FROM commande WHERE idCommande='$id'";
    $req = $db->prepare($sql);
    $req->execute();
  }
}
