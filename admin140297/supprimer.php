<?php

require_once 'lib/Admin.php';
require_once 'navbar.php';
$admin = new Admin();

$admin->deleteArticle($_REQUEST['reference']);

header("Location: article.php");
 ?>
