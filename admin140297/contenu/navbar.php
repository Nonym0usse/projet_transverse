<?php
# @Author: VELLA CYRIL <nonym0usse>
# @Date:   2018-02-18T16:55:04+01:00
# @Email:  contact@vella.fr
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T09:13:30+01:00
?>

<!DOCTYPE HTML>
<html lang="fr">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>OXYNOV - ADMINISTRATION</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />
	<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/animate.min.css" rel="stylesheet"/>
	<link href="assets/css/light-bootstrap-dashboard.css?v=1.4.0" rel="stylesheet"/>
	<link href="assets/css/demo.css" rel="stylesheet" />
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <script src="https://cdn.ckeditor.com/4.8.0/standard/ckeditor.js"></script>
</head>
<body>

	<div class="wrapper">
		<div class="sidebar" data-color="dark" data-image="assets/img/sidebar-5.jpg" >
			<div class="sidebar-wrapper">
				<div class="logo">
					<a href="#" class="simple-text">
						OXYNOV
					</a>
				</div>

				<ul class="nav">
					<li>
						<a href="<?= setLink('') ?>">
							<i class="pe-7s-graph"></i>
							<p>Tableau de bord</p>
						</a>
					</li>
					<li class="active">
						<a href="<?= setLink('results-commande') ?>">
							<i class="pe-7s-ticket"></i>
							<p>Gérer les commandes</p>
						</a>
					</li>
					<li>
						<a href="<?= setLink('article') ?>">
							<i class="pe-7s-music"></i>
							<p>Gérer les articles</p>
						</a>
					</li>
					<li>
						<a href="<?= setLink('add-article') ?>">
							<i class="pe-7s-music"></i>
							<p>Ajouter un article</p>
						</a>
					</li>
					<li>
						<a href="maps.php">
							<i class="pe-7s-map-marker"></i>
							<p>Deconnexion</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
