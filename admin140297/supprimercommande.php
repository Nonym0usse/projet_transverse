<?php

require_once 'lib/Admin.php';
require_once 'navbar.php';
$admin = new Admin();

$admin->deleteCommande($_REQUEST['reference']);

header("Location: commande.php");
?>
