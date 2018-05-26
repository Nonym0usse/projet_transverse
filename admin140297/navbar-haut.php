<?php
/**
 * Created by PhpStorm.
 * User: nonym0usse
 * Date: 20/02/2018
 * Time: 20:11
 */?>

<nav class="navbar navbar-default navbar-fixed">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">ESPACE ADMINISTRATION</a>
        </div>
        <div class="collapse navbar-collapse">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <p>
                            Options
                            <b class="caret"></b>
                        </p>

                    </a>
                    <ul class="dropdown-menu">
                        <li><a href="style.php">Ajouter un style</a></li>
                        <li><a href="type.php">Ajouter un type </a></li>
                        <li class="divider"></li>
                        <li><a href="chansons.php">Ajouter une chanson</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">
                        <p>Deconnexion</p>
                    </a>
                </li>
                <li class="separator hidden-lg hidden-md"></li>
            </ul>
        </div>
    </div>
</nav>
