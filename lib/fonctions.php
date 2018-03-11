<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:53:22+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T22:07:43+01:00

function varDump($data)
{
  echo "<pre>";
  var_dump($data);
  echo "</pre>";
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

function internauteEstConnecte()
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

function internauteEstConnecteEtEstAdmin()
{
	if(internauteEstConnecte() && $_SESSION['statut'] == 1)
	{
			return true;
	}
	return false;
}
