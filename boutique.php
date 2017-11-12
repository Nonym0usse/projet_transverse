<?php
require_once("inc/init.inc.php");
require_once("inc/haut.inc.php");

$boutique = new GestionBoutique();


$boutique->display_Product();

require_once("inc/bas.inc.php");

?>


<form method="post">

    <?php foreach ($boutique->getCategorie() as $produit)
    {
        echo "<input type='checkbox' name='produit'>";
    }
    ?>

</form>

