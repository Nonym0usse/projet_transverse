<?php

class GestionBoutique{

    public function getCategorie(){

        $categories_des_produits = executeRequete("SELECT DISTINCT categorie FROM produit");

        $row = array();

        while ($row = $categories_des_produits->fetch(PDO::FETCH_ASSOC))
		{
            echo $row['categorie'];
            echo "<br>";
        }

        return $row;
    }


    public function getProduit(){

        $donnees = executeRequete("SELECT id_produit,reference,titre,photo,prix FROM produit WHERE categorie='chemise'");
        //$_GET[categorie]

        $produit = array();

        while($row = $donnees->fetch(PDO::FETCH_ASSOC))
        {
            $produit[] = $row;
        }
        return $produit;
    }


    public function Affichage($contenu){
        require_once("inc/haut.inc.php");
        echo $contenu;
        require_once("inc/bas.inc.php");
    }

    // --- FICHE PRODUIT ---

    public function getFicheProduit()
	{
        if(isset($_GET['id_produit']))
        {
        	$resultat = executeRequete("SELECT * FROM produit WHERE id_produit = '$_GET[id_produit]'");
        }

        if($resultat->rowCount() <= 0)
        {
        	header("location:boutique.php"); exit();
        }

        $tableau = array();

        while($produit = $resultat->fetch(PDO::FETCH_ASSOC))
        {
            $tableau[] = $produit;

        }
        return $tableau;
    }


    public function AjouterPanier($element){
        if(isset($element['ajout_panier']))
        {	// debug($_POST);
            $resultat = executeRequete("SELECT * FROM produit WHERE id_produit='$element[id_produit]'");
            $produit = $resultat->fetch(PDO::FETCH_ASSOC);
            ajouterProduitDansPanier($produit['titre'],$element['id_produit'],$element['quantite'],$produit['prix']);
        }
    }

    public function ViderPanier($element){
        if(isset($element['action']) && $element['action'] == "vider")
        {
            unset($_SESSION['panier']);
        }
    }

    public function Paiement($element, $pdo, $contenu){
        if(isset($element['payer']))
        {
            if(!isset($_SESSION['panier'])){
                header("location:boutique.php");
            }
            for($i=0 ;$i < count($_SESSION['panier']['id_produit']) ; $i++)
            {
                $resultat = executeRequete("SELECT * FROM produit WHERE id_produit=" . $_SESSION['panier']['id_produit'][$i]);
                $produit = $resultat->fetch(PDO::FETCH_ASSOC);
                if($produit['stock'] < $_SESSION['panier']['quantite'][$i])
                {
                    $contenu .= '<hr /><div class="erreur">Stock Restant: ' . $produit['stock'] . '</div>';
                    $contenu .= '<div class="erreur">Quantité demandée: ' . $_SESSION['panier']['quantite'][$i] . '</div>';
                    if($produit['stock'] > 0)
                    {
                        $contenu .= '<div class="erreur">la quantité de l\'produit ' . $_SESSION['panier']['id_produit'][$i] . ' à été réduite car notre stock était insuffisant, veuillez vérifier vos achats.</div>';
                        $_SESSION['panier']['quantite'][$i] = $produit['stock'];
                    }
                    else
                    {
                        $contenu .= '<div class="erreur">l\'produit ' . $_SESSION['panier']['id_produit'][$i] . ' à été retiré de votre panier car nous sommes en rupture de stock, veuillez vérifier vos achats.</div>';
                        retirerproduitDuPanier($_SESSION['panier']['id_produit'][$i]);
                        $i--;
                    }
                    $erreur = true;
                }
            }
            if(!isset($erreur))
            {
                executeRequete("INSERT INTO commande (id_membre, montant, date_enregistrement) VALUES (" . $_SESSION['membre']['id_membre'] . "," . montantTotal() . ", NOW())");
                $id_commande = $pdo->lastInsertId();
                for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
                {
                    executeRequete("INSERT INTO details_commande (id_commande, id_produit, quantite, prix) VALUES ($id_commande, " . $_SESSION['panier']['id_produit'][$i] . "," . $_SESSION['panier']['quantite'][$i] . "," . $_SESSION['panier']['prix'][$i] . ")");
                }
                unset($_SESSION['panier']);
                mail($_SESSION['membre']['email'], "confirmation de la commande", "Merci votre n° de suivi est le $id_commande", "From:vendeur@dp_site.com");
                $contenu .= "<div class='validation'>Merci pour votre commande. votre n° de suivi est le $id_commande</div>";
            }
        }
    }

    public function AffichagePanier($contenu){
        include("inc/haut.inc.php");
        echo $contenu;
        echo "<div style='margin-left: 40%; padding-top: 5%;'>";
        echo "<table class='table-condensed' border='1' style='border-collapse: collapse' cellpadding='7'>";
        echo "<tr><td colspan='5'>Panier</td></tr>";
        echo "<tr><th>Titre</th><th>Produit</th><th>Quantité</th><th>Prix Unitaire</th><th>Action</th></tr>";
        if(empty($_SESSION['panier']['id_produit'])) // panier vide
        {
            echo "<tr><td colspan='5'>Votre panier est vide</td></tr>";
        }
        else
        {
            for($i = 0; $i < count($_SESSION['panier']['id_produit']); $i++)
            {
                echo "<tr>";
                echo "<td>" . $_SESSION['panier']['titre'][$i] . "</td>";
                echo "<td>" . $_SESSION['panier']['id_produit'][$i] . "</td>";
                echo "<td>" . $_SESSION['panier']['quantite'][$i] . "</td>";
                echo "<td>" . $_SESSION['panier']['prix'][$i] . "</td>";
                echo "</tr>";
            }
            echo "<tr><th colspan='3'>Total</th><td colspan='2'>" . montantTotal() . " euros</td></tr>";
            if(internauteEstConnecte())
            {
                echo '<form method="post" action="">';
                echo '<tr><td colspan="5"><input type="submit" name="payer" value="Valider et déclarer le paiement" /></td></tr>';
                echo '</form>';
            }
            else
            {
                echo '<tr><td colspan="3">Veuillez vous <a href="inscription.php">inscrire</a> ou vous <a href="connexion.php">connecter</a> afin de pouvoir payer</td></tr>';
            }
            echo "<tr><td colspan='5'><a href='?action=vider'>Vider mon panier</a></td></tr>";
        }
        echo "</table><br />";
        echo "</div>";
        echo "<center><i>Réglement par CHÈQUE uniquement à l'adresse suivante : Ynov Aix - Bureau Couscous-Vodka</i><br /></center>";

        include("inc/bas.inc.php");
    }
}

?>
