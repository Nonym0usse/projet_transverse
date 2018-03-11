<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-19T22:27:37+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:05:01+01:00

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

require_once 'Database.php';
require_once 'function.php';

class Admin{

  public function load_content()
  {

    if(!empty($_REQUEST['op'])){

      $file = 'contenu/' . $_REQUEST['op'] . '.php';
      if(file_exists($file)){
        require_once $file;
      }
      else{
        require_once 'contenu/dashboard.php';
      }
    }
    else{
      require_once 'contenu/dashboard.php';
    }

  }


  public function setArticle($data)
  {
    $db = new \lib\Database();

    $req = $db->prepare("INSERT INTO produit(nom, prix, description, provenance, contenanceCL, stock) VALUES (:nom, :prix, :description, :provenance, :contenanceCL, :stock)");
    $req->execute(array(
      'nom' => $data['titre'],
      'prix' => $data['prix'],
      'description' => $data['description'],
      'provenance' => $data['provenance'],
      'contenanceCL' => $data['contenanceCL'],
      'stock' => $data['stock'],
    ));
  }


  public function getArticle()
  {
    $db = new \lib\Database();
    $data = $db->query("SELECT * FROM produit");
    return $data;
  }
}
