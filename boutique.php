<?php
require_once("inc/init.inc.php");
require_once("inc/haut.inc.php");

$boutique = new GestionBoutique();

?>

<div id="sidebar">
    <h3>PANIER</h3>
    <div id="cart">
        <span class="empty">No items in cart.</span>
    </div>

    <h3>CATEGORIES</h3>
    <div class="checklist categories">
        <ul>
            <?php foreach ($boutique->getCategorie() as $value)
            {
                echo "<input type='checkbox' value='categorie' class=\"filled-in\">";
                echo "<label for='categorie'>". $value['categorie']."</label>";

            }
            ?>
        </ul>
    </div>



    <input type="checkbox" id="music" name="interest" value="music">

    <h3>VOLUME</h3>
    <div class="checklist colors">
        <ul>
            <li><a href=""><span></span>Beige</a></li>
            <li><a href=""><span style="background:#222"></span>Black</a></li>
            <li><a href=""><span style="background:#6e8cd5"></span>Blue</a></li>
            <li><a href=""><span style="background:#f56060"></span>Brown</a></li>
            <li><a href=""><span style="background:#44c28d"></span>Green</a></li>
        </ul>

        <ul>
            <li><a href=""><span style="background:#999"></span>Grey</a></li>
            <li><a href=""><span style="background:#f79858"></span>Orange</a></li>
            <li><a href=""><span style="background:#b27ef8"></span>Purple</a></li>
            <li><a href=""><span style="background:#f56060"></span>Red</a></li>
            <li><a href=""><span style="background:#fff;border: 1px solid #e8e9eb;width:13px;height:13px;"></span>White</a></li>
        </ul>
    </div>

    <h3>PRIX</h3>
    <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/245657/price-range.png" alt="" />
</div>

<div id="grid-selector">
    <div id="grid-menu">
        View:
        <ul>
            <li class="largeGrid"><a href=""></a></li>
            <li class="smallGrid"><a class="active" href=""></a></li>
        </ul>
    </div>
    <?php
    $sql = executeRequete("SELECT COUNT(categorie) FROM produit");


    echo count($boutique->getProduit()). " résultats trouvés sur " .$sql; ?>
</div>

<div id="grid-product">
    <div class="container">

        <?php foreach ($boutique->getProduit() as $value)
        {
            echo "<figure class='snip1418'><img src='". $value['photo']. "' alt='sample85'/>";
            echo "<div class='add-to-cart'> <i class='ion-android-add'></i><span>Voir</span></div>";
            echo  "<figcaption>";
            echo "<h3>" .$value['titre']. "</h3>";
            echo "<p>All this modern technology just makes people try to do everything at once.</p>";
            echo "<div class='price'>";
            echo  $value['prix']. " €";
            echo "</div>";
            echo "</figcaption><a href='#'></a>";
            echo "</figure>";
        }
        ?>
    </div>
</div>

<script type="text/javascript">
    $(".user-menu").click(function() {
        $(this).toggleClass("show");
    });

</script>


<?php require_once("inc/bas.inc.php"); ?>

