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

  public function setCategorie(){
    $db = new \lib\Database();

    if(!empty($_POST['nom_fr']) && !empty($_POST['nom_en'])){
      $req = $db->prepare('INSERT INTO style(nom_fr, nom_en) VALUES(:nom_fr, :nom_en)');
      $msg = $req->execute([
        'nom_fr' => $_POST['nom_fr'],
        'nom_en' => $_POST['nom_en'],
      ]);
      if($msg == 0){
        $msg = "<div class='alert alert-danger'>Erreur merci de réessayer.</div>";
      }
      else{
        $msg = "<div class='alert alert-success'>Paramètres modifiés avec succès.</div>";
      }
    }
    else{
      $msg = "<div class='alert alert-success'>Merci de remplir les champs obligatoires.</div>";
    }

    return $msg;
  }

  public function getStyle(){
    $db = new \lib\Database();
    $res = $db->query("SELECT * FROM style");

    return $res;
  }

  public function deleteCategorie(){
    $db = new \lib\Database();
    $res = $db->query("DELETE * FROM style");

    return $res;
  }

  public function setPhoto()
  {
    $db = new \lib\Database();

    if(!empty($_FILES['photo'])){
      $chemin = upload3($_FILES['photo']);
    }
    else{
      $msg = "Merci de remplir les champs";
    }

    if(empty($chemin)){
      echo "<div class='alert alert-warning'>Il manque des fichiers tels que l'image, le creatoke ou le morceau complet.</div>";
    }

    $req = $db->prepare('INSERT INTO image_chanson(image) VALUES(:image)');
    $msg = $req->execute([
      'image' => $chemin[0]
    ]);

    if($req)
    {
      $msg = "<div class='alert alert-success'>Votre chanson à été ajoutée avec succès</div>";
    }else{
      $msg = "<div class='alert alert-danger'>Erreur lors de l'ajout de votre chanson</div>";
    }

    return $msg;
  }


  /*** CHANSONS ***/


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
      'image' => $chemin[0]
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

      $req = $db->prepare("SELECT email, password FROM adm WHERE email = :email");
      $req->execute(array(
        'email' => $_POST['email']
      ));

      $resultat = $req->fetch();


      $isPasswordCorrect = password_verify($_POST['email'], $_POST['password']);


      if($isPasswordCorrect)
      {
        session_start();
        $_SESSION['pseudo'] = $resultat['email'];
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



  public function setTrad()
  {
    $db = new \lib\Database();


    if(!empty($_POST['titre-bloc1-fr']) && !empty($_POST['texte-bloc1-fr']) && !empty($_POST['titre-bloc1-en']) && !empty($_POST['texte-bloc1-en'])  && !empty($_POST['titre-bloc2-fr']) && !empty($_POST['texte-bloc2-fr']) && !empty($_POST['titre-bloc2-en']) && !empty($_POST['texte-bloc2-en'])){

      $req = $db->prepare('INSERT INTO text_fr(titre1, titre2, texte1, texte2, titre3, texte3, titre4, texte4, titre5, texte5, titre6, texte6) VALUES(:titre1, :titre2, :texte1, :texte2, :titre3, :texte3, :titre4, :texte4, :titre5, :texte5, :titre6, :texte6)');
      $msg = $req->execute([
        'titre1' =>  $_POST['titre-bloc1-fr'],
        'titre2' => $_POST['titre-bloc2-fr'],
        'texte1' => $_POST['texte-bloc2-fr'],
        'texte2' => $_POST['texte-bloc1-fr'],
        'titre3' => $_POST['titre-fr-chiffre'],
        'texte3' => $_POST['text-fr-chiffre'],
        'titre4' => $_POST['titre-bloc1-en'],
        'texte4' => $_POST['titre-bloc2-en'],
        'titre5' => $_POST['texte-bloc1-en'],
        'texte5' => $_POST['titre-en-chiffre'],
        'titre6' => $_POST['text-en-chiffre'],
        'texte6' => $_POST['texte-bloc2-en']
      ]);

      if($msg == 0){
        $msg = "<div class='alert alert-danger'>Erreur merci de réessayer.</div>";
      }
      else{
        $msg = "<div class='alert alert-success'>Paramètres modifiés avec succès.</div>";
      }
    }
    else{
      $msg = "<div class='alert alert-danger'>Merci de remplir les champs obligatoires.</div>";
    }

    return $msg;
  }

  public function setDiaporama()
  {
    $db = new \lib\Database();

    if(!empty($_FILES['image1']) && !empty($_FILES['image2']) && !empty($_FILES['image3']) && !empty($_FILES['image4'])){
      $chemin = upload2($_FILES['image1'], $_FILES['image2'], $_FILES['image3'],$_FILES['image4']);
    }
    else{
      $msg = "Merci de remplir les champs";
    }

    $req = $db->prepare('INSERT INTO diaporama(diapo1, diapo2, diapo3, diapo4) VALUES(:diapo1, :diapo2, :diapo3, :diapo4)');
    $msg = $req->execute([
      'diapo1' => $chemin[0],
      'diapo2' => $chemin[1],
      'diapo3' => $chemin[2],
      'diapo4' => $chemin[3]
    ]);

    if($msg == 0){
      $msg = "<div class='alert alert-danger'>Erreur merci de réessayer.</div>";
    }
    else{
      $msg = "<div class='alert alert-success'>Paramètres modifiés avec succès.</div>";
    }

    return $msg;
  }

  public function getChansonById($id)
  {
    $db = new \lib\Database();
    $req = $db->query("SELECT * FROM chansons where id = '$id'");
    return $req;
  }


  public function setChansonsUpdate($id)
  {
    $db = new \lib\Database();

    if(!empty($_FILES['creatoke']) && !empty($_FILES['image']) && !empty($_FILES['complet'])){
      $chemin = upload($_FILES['creatoke'], $_FILES['image'], $_FILES['complet']);
    }
    else{
      $msg = "Merci de remplir les champs";
    }

    if(!empty($_POST['titre']) && !empty($_POST['style']))
    {
      $titre = $_POST['titre'];
      $style = $_POST['style'];
      $description = $_POST['description_fr'];
      $descriptionen = $_POST['description_en'];
      $type = $_POST['type'];
      $online = $_POST['online'];
      $cdc = $_POST['enavant'];
      $lyrics = $_POST['lyrics'];
      $lyricsen = $_POST['lyricsen'];

      $image = $chemin[1];
      $chanson = $chemin[2];
      $creatoke = $chemin[0];


      $sql = "UPDATE chansons SET titre='$titre', style='$style', source='$chanson', image='$image', description='$description', descriptionen='$descriptionen', nblecture='2', types='$type', lectureoeuvre='2', online='$online', sourcecreatoke='$creatoke', enavant='$cdc', lyrics='$lyrics', lyricsen='$lyricsen' WHERE id='$id'";
      $req = $db->prepare($sql);
      $req->execute();
      varDump('OK');
    }else{
      varDump("Champs vides");
    }
  }

  public function getTrad()
  {
    $db = new \lib\Database();
    $req = $db->query("SELECT * FROM text_fr ORDER BY id DESC LIMIT 1 ");
    return $req;
  }

  public function deleteChanson($id)
  {
    $db = new \lib\Database();

    $sql = "DELETE FROM chansons WHERE id='$id'";
    $req = $db->prepare($sql);
    $req->execute();


  }
}
