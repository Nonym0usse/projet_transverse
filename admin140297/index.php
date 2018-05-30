<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-15T23:22:19+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-02-18T19:36:36+01:00
require_once 'lib/Admin.php';

$admin = new Admin();

if(!empty($_POST['email']) && !empty($_POST['password']))
{
	echo $msg = $admin->setConnexion();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/accueil.css" rel="stylesheet" />

	<title>Oxynov - Administration</title>
</head>
<body>
	<center>
		<h1 style="color: #FFF; padding-top: 30px;">Connexion Oxynov</h1>
	</center>
	<div class="login-page">
		<div class="form">
			<form class="login-form" method="POST">
				<input type="text" name="email" placeholder="Pseudo"/>
				<input type="password" name="password" placeholder="Mot de passe"/>
				<button>COnnexion</button>
			</form>
		</div>
	</div>
</body>
</html>
