<?php

require_once 'lib/Admin.php';
require_once 'navbar.php';
$admin = new Admin();

$admin->deleteUser($_REQUEST['reference']);

header("Location: users.php");
 ?>
