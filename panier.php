<?php
require_once("inc/init.inc.php");
require_once("inc/haut.inc.php");

//--------------------------------- TRAITEMENTS PHP ---------------------------------//
$gestion_panier = new GestionBoutique();
//--- AJOUT PANIER ---//
$gestion_panier->AjouterPanier($_POST);
//--- VIDER PANIER ---//
$gestion_panier->ViderPanier($_GET);
//--- PAIEMENT ---//
$gestion_panier->Paiement($_POST, $pdo, $contenu);
//--------------------------------- AFFICHAGE HTML ---------------------------------//
//$gestion_panier->AffichagePanier($contenu);
?>

<header id="site-header">
    <div class="container">
        <h1>Shopping cart <span>[</span> <em><a href="https://codepen.io/tag/rodeo-007" target="_blank">CodePen Challange</a></em> <span class="last-span is-open">]</span></h1>
    </div>
</header>

<div class="container">

    <section id="cart">
        <article class="product">
            <header>
                <a class="remove">
                    <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/1.jpg" alt="">

                    <h3>Remove product</h3>
                </a>
            </header>

            <div class="content">

                <h1>Lorem ipsum</h1>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.

            </div>

            <footer class="content">
                <span class="qt-minus">-</span>
                <span class="qt">2</span>
                <span class="qt-plus">+</span>

                <h2 class="full-price">
                    29.98€
                </h2>

                <h2 class="price">
                    14.99€
                </h2>
            </footer>
        </article>

        <article class="product">
            <header>
                <a class="remove">
                    <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/3.jpg" alt="">

                    <h3>Remove product</h3>
                </a>
            </header>

            <div class="content">

                <h1>Lorem ipsum dolor</h1>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.

            </div>

            <footer class="content">

                <span class="qt-minus">-</span>
                <span class="qt">1</span>
                <span class="qt-plus">+</span>

                <h2 class="full-price">
                    79.99€
                </h2>

                <h2 class="price">
                    79.99€
                </h2>
            </footer>
        </article>

        <article class="product">
            <header>
                <a class="remove">
                    <img src="http://www.astudio.si/preview/blockedwp/wp-content/uploads/2012/08/5.jpg" alt="">

                    <h3>Remove product</h3>
                </a>
            </header>

            <div class="content">

                <h1>Lorem ipsum dolor ipsdu</h1>

                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta, numquam quis perspiciatis ea ad omnis provident laborum dolore in atque.
            </div>

            <footer class="content">

                <span class="qt-minus">-</span>
                <span class="qt">3</span>
                <span class="qt-plus">+</span>

                <h2 class="full-price">
                    53.99€
                </h2>

                <h2 class="price">
                    17.99€
                </h2>
            </footer>
        </article>

    </section>

</div>

<footer id="site-footer">
    <div class="container clearfix">

        <div class="left">
            <h2 class="subtotal">Subtotal: <span>163.96</span>€</h2>
            <h3 class="tax">Taxes (5%): <span>8.2</span>€</h3>
            <h3 class="shipping">Shipping: <span>5.00</span>€</h3>
        </div>

        <div class="right">
            <h1 class="total">Total: <span>177.16</span>€</h1>
            <a class="btn">Checkout</a>
        </div>

    </div>
</footer>
</div>

<script type="text/javascript">
    var check = false;

    function changeVal(el) {
        var qt = parseFloat(el.parent().children(".qt").html());
        var price = parseFloat(el.parent().children(".price").html());
        var eq = Math.round(price * qt * 100) / 100;

        el.parent().children(".full-price").html( eq + "€" );

        changeTotal();
    }

    function changeTotal() {

        var price = 0;

        $(".full-price").each(function(index){
            price += parseFloat($(".full-price").eq(index).html());
        });

        price = Math.round(price * 100) / 100;
        var tax = Math.round(price * 0.05 * 100) / 100
        var shipping = parseFloat($(".shipping span").html());
        var fullPrice = Math.round((price + tax + shipping) *100) / 100;

        if(price == 0) {
            fullPrice = 0;
        }

        $(".subtotal span").html(price);
        $(".tax span").html(tax);
        $(".total span").html(fullPrice);
    }

    $(document).ready(function(){

        $(".remove").click(function(){
            var el = $(this);
            el.parent().parent().addClass("removed");
            window.setTimeout(
                function(){
                    el.parent().parent().slideUp('fast', function() {
                        el.parent().parent().remove();
                        if($(".product").length == 0) {
                            if(check) {
                                $("#cart").html("<h1>The shop does not function, yet!</h1><p>If you liked my shopping cart, please take a second and heart this Pen on <a href='https://codepen.io/ziga-miklic/pen/xhpob'>CodePen</a>. Thank you!</p>");
                            } else {
                                $("#cart").html("<h1>No products!</h1>");
                            }
                        }
                        changeTotal();
                    });
                }, 200);
        });

        $(".qt-plus").click(function(){
            $(this).parent().children(".qt").html(parseInt($(this).parent().children(".qt").html()) + 1);

            $(this).parent().children(".full-price").addClass("added");

            var el = $(this);
            window.setTimeout(function(){el.parent().children(".full-price").removeClass("added"); changeVal(el);}, 150);
        });

        $(".qt-minus").click(function(){

            child = $(this).parent().children(".qt");

            if(parseInt(child.html()) > 1) {
                child.html(parseInt(child.html()) - 1);
            }

            $(this).parent().children(".full-price").addClass("minused");

            var el = $(this);
            window.setTimeout(function(){el.parent().children(".full-price").removeClass("minused"); changeVal(el);}, 150);
        });

        window.setTimeout(function(){$(".is-open").removeClass("is-open")}, 1200);

        $(".btn").click(function(){
            check = true;
            $(".remove").click();
        });
    });
</script>