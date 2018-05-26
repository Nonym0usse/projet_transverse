<?php

require_once 'lib/Admin.php';
require_once 'navbar.php';
$admin = new Admin();

$admin->deleteChanson($_REQUEST['reference']);

header("Location: list_chansons.php");
 ?>
