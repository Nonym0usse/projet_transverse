<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-23T23:20:10+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-05-19T14:45:35+02:00




function varDump($data){
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
}

$dossier_name = 'projet_transverse/admin140297';


if($_SERVER['SERVER_NAME'] =='localhost'){
  define('NDD_PATH', $_SERVER['DOCUMENT_ROOT']);
  define('URL',"http://localhost:8888/".$dossier_name);
  define('TAILLE', 23);
  error_reporting(E_ALL & ~E_NOTICE);
}else{
  define("NDD_PATH", $_SERVER['DOCUMENT_ROOT']);
  define("URL", ""); //url du site public
  define('TAILLE', 32);
  ini_set('display_errors', 0);
  $mailto = 1;
}

function upload($image){

  $extensions_valides = ['jpg', 'jpeg', 'png', 'mp3'];

  if(!empty($image)){

    $file = $image['name'];
    $extension_upload = strtolower(substr(strrchr($file, '.'), 1));
    $folder = NDD_PATH.'/upload/img/';

    if(move_uploaded_file($image['tmp_name'], $folder . $file)){
      $err = 0;


      $_REQUEST['image'] = '../upload/img/'. $file;
    }
    else{
      $_REQUEST['image'] = "NC";
      $err = 1;
    }
  }else {
    $image = "NC";
  }

  if($err > 0){
    echo "<div class='alert alert-danger'>Erreur lors de l'upload.</div>";
  }

  return $_REQUEST['image'];
}


function setLink($name = '', $return = false, $url = false){
  if($url){
    $link = $name;
  }
  else{
    $link = '/'. $name;
  }

  if($return){
    return $link;
  }
  else{
    echo $link;
  }
}
