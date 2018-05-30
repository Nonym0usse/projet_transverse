<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:50:04+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:17:48+01:00

/**
*
*/

require_once 'Database.php';

class Site
{

  public function load_content()
  {

    if(!empty($_REQUEST['op'])){

      $file = 'contenu/' . $_REQUEST['op'] . '.php';
      if(file_exists($file)){
        require_once $file;
      }
      else{
        require_once 'contenu/site_accueil.php';
      }
    }
    else{
      require_once 'contenu/site_accueil.php';
    }

  }

  public function getLimit()
  {
    $db = new \lib\Database();
    $data = $db->query("SELECT * FROM produit LIMIT 4");
    return $data;
  }

  public function getArticle()
  {
    $db = new \lib\Database();
    $data = $db->query("SELECT * FROM produit");
    return $data;
  }

  public function getProduit($data)
  {
    $db = new \lib\Database();

    $req = $db->prepare("SELECT * FROM produit WHERE idProduit = :idProduit");
    $req->execute(array(
      'idProduit' => $data
    ));

    $resultat = $req->fetch();
    return $resultat;
  }


  public function setConnexion($data)
  {
    $db = new \lib\Database();

    if(internauteEstConnecte())
    {
      header("location:profil.php");
      exit();
    }

    if(!empty($data['pseudo']) && !empty($data['mdp']))
    {

      $req = $db->prepare("SELECT login, passwd, cRole FROM clients WHERE login = :login");
      $req->execute(array(
        'login' => $data['pseudo']
      ));

      $resultat = $req->fetch();


      if($resultat['cRole'] == "1")
      {
        header('Location:'. NDD_PATH.'admin140297/dashboard.php');
        exit();
        $_SESSION['statut'] = 1;
      }


      $pass = hash('sha256', $data['mdp']);


      if($resultat['passwd'] == $pass)
      {
        session_start();
        $_SESSION['pseudo'] = $resultat['login'];
        $_SESSION['adresse'] = $resultat['adresse'];
        header('Location:'.NDD_PATH.'contenu/profil.php');
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

  public function setInscription($data)
  {
    $db = new \lib\Database();

    $hash = hash('sha256', $data['mdp']);

    $req = $db->prepare("INSERT INTO clients(login, passwd, nom, prenom, dateNaissance, dateInscription, adresse, mail, telFixe, telPort, cRole, gender) VALUES (:login, :passwd, :nom, :prenom, :dateNaissance, :dateInscription, :adresse, :mail, :telFixe, :telPort, :cRole, :gender)");
    $e = $req->execute(array(
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

    if($e)
    {
      $msg = "<div class='alert alert-success'>Votre inscription à bien été pris en compte.</div>";
    }else{
      $msg = "<div class='alert alert-danger'>Erreur lors de l'inscription</div>";
    }
    return $msg;
  }

  public function translateText($name)
  {
    return $GLOBALS['lang'][$name];
  }

  public function setPanier($data){
    if(!empty($data))
    {
      $db = new \lib\Database();
      $sql = "SELECT * FROM produit where idProduit='$data'";
      $req = $db->query2($sql);

      if($req[0]['stock'] == 0)
      {
        $msg = "<div class='alert alert-danger'>Produit indisponible !</div>";
      }else{
        if (!isset($_SESSION['panier'])){
          $_SESSION['panier'] = array();
          $_SESSION['panier']['nomProduit'] = array();
          $_SESSION['panier']['qteProduit'] = array();
          $_SESSION['panier']['prixProduit'] = array();
        }

        array_push( $_SESSION['panier']['nomProduit'], $req[0]['nom']);
        array_push( $_SESSION['panier']['qteProduit'], $req[0]['stock']);
        array_push( $_SESSION['panier']['prixProduit'], $req[0]['prix']);

        $msg = "<div class='alert alert-info'>Ajouté au panier !</div>";
      }
    }else{
      $msg = "<div class='alert alert-danger'>Erreur ajout panier !</div>";
    }
    return $msg;
  }

  public function viderPanier($nomProduit)
  {
    $tmp=array();
    $tmp['nomProduit'] = array();
    $tmp['qteProduit'] = array();
    $tmp['prixProduit'] = array();


    for($i = 0; $i < count($_SESSION['panier']['nomProduit']); $i++)
    {
      if ($_SESSION['panier']['nomProduit'][$i] !== $nomProduit)
      {
        array_push( $tmp['nomProduit'],$_SESSION['panier']['nomProduit'][$i]);
        array_push( $tmp['qteProduit'],$_SESSION['panier']['qteProduit'][$i]);
        array_push( $tmp['prixProduit'],$_SESSION['panier']['prixProduit'][$i]);

        $msg = "<div class='alert alert-info'>Votre article à été supprimé !</div>";
      }
    }

    $_SESSION['panier'] =  $tmp;
    unset($tmp);
    return $msg;
  }

  public function validerPanier()
  {
    $db = new \lib\Database();

    $req = $db->prepare('INSERT INTO commande(adresseLivraison, adresseFacturation, login) VALUES(:adresseLivraison, :adresseFacturation, :login)');
    $data = $req->execute([
      'adresseLivraison' => $_SESSION['adresse'],
      'adresseFacturation' => $_SESSION['adresse'],
      'login' => $_SESSION['pseudo']
    ]);


    if($data)
    {
      $msg = "<div class='alert alert-success'>Votre commande à été prise en compte</div>";

      $req = $db->prepare('INSERT INTO detailscommande(paiement, methodeLivraison, etapeLivraison) VALUES(:paiement, :methodeLivraison, :etapeLivraison)');
      $data = $req->execute([
        'paiement' => $_POST['radios'],
        'methodeLivraison' => 'Mondial relay',
        'etapeLivraison' => 'En transition'
      ]);
      unset($_SESSION['panier']);
    }else{
      $msg = "<div class='alert alert-danger'>Erreur de la commande. Merci de réessayer.</div>";
    }

    return $msg;
  }

  public function getHistorique()
  {

  }

  public function setCommentaire()
  {
    $db = new \lib\Database();

    $req = $db->prepare('INSERT INTO commentaire(image) VALUES(:image)');
    $msg = $req->execute([
      'image' => $chemin[0]
    ]);
  }

  public function getInfos()
  {
    $db = new \lib\Database();

    $user = $_SESSION['pseudo'];

    $data = $db->query2("SELECT * FROM clients WHERE login='$user'");
    return $data;
  }
}
