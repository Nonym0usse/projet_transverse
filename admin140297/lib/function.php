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


function upload($image){

  $extensions_valides = ['jpg', 'jpeg', 'png', 'mp3'];

  if(!empty($image)){

    $file = $image['name'];
    $extension_upload = strtolower(substr(strrchr($file, '.'), 1));
    $folder = getExtension($extension_upload);

    if(move_uploaded_file($image['tmp_name'], $folder . $file)){
      $err = 0;

      $dest = substr($folder, TAILLE);

      $_REQUEST['image'] = $dest. $file;
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

function getExtension($file){

  if($file == 'jpg'){
    return $folder = NDD_PATH.'/upload/img/';
  }
  elseif($file == 'jpeg'){
    return $folder = NDD_PATH.'/upload/img/';
  }
  elseif($file == 'png'){
    return $folder = NDD_PATH.'/upload/img/';
  }
  elseif($file == 'mp3'){
    return $folder = NDD_PATH.'/upload/music/';
  }

  return $file;
}

$dossier_name = 'projet_transverse';


if($_SERVER['SERVER_NAME'] =='localhost'){
  define('NDD_PATH', $_SERVER['DOCUMENT_ROOT']);
  define('URL',"http://localhost:8888/".$dossier_name);
  define('TAILLE', 23);
  error_reporting(E_ALL & ~E_NOTICE);
}else{
  define("NDD_PATH", $_SERVER['DOCUMENT_ROOT']);
  define("URL", ""); //url du site public
  define('TAILLE', 35);
  ini_set('display_errors', 0);
  $mailto = 1;
}




function setLink($name = '', $return = false, $url = false){
    if($url){
        $link = $name;
    }
    else{
        $link = URL .'/'. $name;
    }

    if($return){
        return $link;
    }
    else{
        echo $link;
    }
}



function upload2($diapo1, $diapo2, $diapo3, $diapo4){

  $extensions_valides = ['jpg', 'jpeg', 'png', 'mp3'];

  if(!empty($diapo1)){

    $file = $diapo1['name'];
    $extension_upload = strtolower(substr(strrchr($file, '.'), 1));
    $folder = getExtension($extension_upload);

    if(move_uploaded_file($diapo1['tmp_name'], $folder . $file)){
      $err = 0;

      $dest = substr($folder, TAILLE);

      $_REQUEST['diapo1'] = $dest. $file;
    }
    else{
      $_REQUEST['diapo1'] = "NC";
      $err = 1;
    }
  }

  if(!empty($diapo2)){
    $file = $diapo2['name'];

    $extension_upload = strtolower(substr(strrchr($file, '.'), 1));
    $folder = getExtension($extension_upload);

    if(move_uploaded_file($diapo2['tmp_name'], $folder . $file)){
      $err = 0;

      $dest = substr($folder, TAILLE);

      $_REQUEST['diapo2'] = $dest . $file;
    }
    else{
      $_REQUEST['diapo2'] = "NC";
      $err = 1;
    }
  }

  if(!empty($diapo3)){

    $file = $diapo3['name'];
    $extension_upload = strtolower(substr(strrchr($file, '.'), 1));
    $folder = getExtension($extension_upload);

    if(move_uploaded_file($diapo3['tmp_name'], $folder . $file)){
      $err = 0;

      $dest = substr($folder, TAILLE);
      $_REQUEST['diapo3'] = $dest . $file;
    }
    else{
      $_REQUEST['diapo3'] = "NC";
      $err = 1;
    }
  }

  if(!empty($diapo4)){

    $file = $diapo4['name'];
    $extension_upload = strtolower(substr(strrchr($file, '.'), 1));
    $folder = getExtension($extension_upload);

    if(move_uploaded_file($diapo4['tmp_name'], $folder . $file)){
      $err = 0;

      $dest = substr($folder, TAILLE);
      $_REQUEST['diapo4'] = $dest . $file;
    }
    else{
      $_REQUEST['diapo4'] = "NC";
      $err = 1;
    }
  }


  $r['infos'] = [ $_REQUEST['diapo1'], $_REQUEST['diapo2'], $_REQUEST['diapo3'], $_REQUEST['diapo4']];

  if($err > 0){
    echo "<div class='alert alert-danger'>Erreur lors de l'upload.</div>";
  }

  return $r['infos'];
}


function upload3($photo){

    $extensions_valides = ['jpg', 'jpeg', 'png', 'mp3'];

    if(!empty($photo)){

        $file = $photo['name'];
        $extension_upload = strtolower(substr(strrchr($file, '.'), 1));
        $folder = getExtension($extension_upload);

        if(move_uploaded_file($photo['tmp_name'], $folder . $file)){
            $err = 0;

            $dest = substr($folder, TAILLE);

            $_REQUEST['diapo1'] = $dest. $file;
        }
        else{
            $_REQUEST['diapo1'] = "NC";
            $err = 1;
        }
    }

    $r['infos'] = [ $_REQUEST['diapo1']];

    if($err > 0){
        echo "<div class='alert alert-danger'>Erreur lors de l'upload.</div>";
    }

    return $r['infos'];
}
