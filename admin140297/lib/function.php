<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-23T23:20:10+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:06:59+01:00

if($_SERVER['SERVER_NAME'] =='localhost'){
  define('NDD_PATH', "http://localhost/trans-final/admin140297/");
  //-- chemin des photos
}else{
  define("NDD_PATH", "http://oxy-nov.atspace.eu/admin140297/"); //url du site public
  ini_set('display_errors', 0);
}

function setLink($name = '', $return = false, $url = false){
  if($url){
    $link = $name;
  }
  else{
    $link = NDD_PATH . $name;
  }

  if($return){
    return $link;
  }
  else{
    echo $link;
  }
}

function varDump($data)
{
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
}
