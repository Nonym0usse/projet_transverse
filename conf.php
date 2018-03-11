<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T23:06:02+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-10T23:20:45+01:00

if($_SERVER['SERVER_NAME'] =='localhost'){
	define('NDD_PATH', "http://localhost/trans-final/");
	//-- chemin des photos
}else{
	define("NDD_PATH", "http://oxy-nov.atspace.eu/"); //url du site public
	ini_set('display_errors', 0);
}
