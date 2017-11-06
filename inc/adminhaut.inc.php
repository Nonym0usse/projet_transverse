<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php RACINE_SITE ?>inc/css-admin/style.css" />

    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script></head>
</head>
<body>
<body class="skin-blue">
<div class="wrapper">

    <header class="main-header">
        <a href="#" class="logo">GESTION SITE</a>
        <!-- Header Navbar: style can be found in header.less -->
        <nav class="navbar navbar-static-top" role="navigation">
            <!-- Sidebar toggle button-->
            <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="navbar-custom-menu">
            </div>
        </nav>
    </header>
    <aside class="main-sidebar">
        <section class="sidebar">
            <ul class="sidebar-menu">
                <li role="presentation"><a href="http://crudkit.com/demo/?page=sqlite1&amp;action=view_page"><i class="fa fa-tachometer"></i> Tableau de bord</a></li>
                <li class="header">Gestion des commandes</li>
                <li role="presentation"><a href="admin/gestion_commande.php">
                        <i class="fa fa-server"></i>
                        <span class="server-id">Consulter</span><br>
                <li class="header">Gestion de la boutique</li>
                <li role="presentation"><a href="admin/gestion_boutique.php"><i class="fa fa-sign-out"></i>Gérer</a></li>

                <li class="header">Gestion des membres</li>
                <li role="presentation"><a href="admin/gestion_membre.php"><i class="fa fa-sign-out"></i>Editer</a></li>

                <li class="header">Mon compte</li>
                <li role="presentation"><a href="http://crudkit.com/demo/?__ckLogout=1"><i class="fa fa-sign-out"></i>Mon profil</a></li>
                <li role="presentation"><a href="connexion.php?action=deconnexion"><i class="fa fa-sign-out"></i>Déconnexion</a></li>

            </ul>
        </section>
    </aside>

    <div class="content-wrapper" style="min-height: 279px;">
        <section class="content-header">
            <div class="row">
                <div class="col-md-8">
                    <h3 style="margin-top: 5px"><i class="fa fa-folder"></i>Bienvenue <?php echo $_SESSION['membre']['pseudo']; ?>
                    </h3>
                </div>
                <div class="col-md-4">
                    <div class="pull-right">
                        <a href="http://crudkit.com/demo/?page=sqlite2&amp;action=page_function&amp;func=new_item" class="btn btn-primary"><i class="fa fa-plus-circle"></i> Upload New</a>
                    </div>
                </div>
            </div>
        </section>
        <div class="col-md-12">
            <div id="alertTarget">
            </div>
        </div>
    </div>

</html>
