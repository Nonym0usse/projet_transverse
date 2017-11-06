<?php
/**
 * Created by PhpStorm.
 * User: nonym0usse
 * Date: 17/10/2017
 * Time: 15:55
 */

class Site{

    public function title()
    {
        $title = "";

        $index = "/";
        $panier = "/panier.php";
        $boutique = "/boutique.php";
        $fiche = "/fiche.php";
        $contact = "/contact.php";
        $connexion = "/connexion.php";
        $inscription = "/inscription.php";
        $profil = "/profil.php";


        switch ($_SERVER['REQUEST_URI'])
        {
            case $_SERVER['REQUEST_URI'] == $panier:
                $title = "Votre panier";
                break;
            case $_SERVER['REQUEST_URI'] == $index:
                $title = "Bienvenue  sur Oxynov.";
                break;
            case $_SERVER['REQUEST_URI'] == $boutique:
                $title = "Bienvenue sur votre boutique";
                break;
            case $_SERVER['REQUEST_URI'] == $fiche:
                $title = "Bienvenue sur la canette";
                break;
            case $_SERVER['REQUEST_URI'] == $contact:
                $title = "Bienvenue sur la partie contact";
                break;
            case $_SERVER['REQUEST_URI'] == $connexion:
                $title = "Connectez-vous à votre compte.";
                break;
            case $_SERVER['REQUEST_URI'] == $inscription:
                $title = "Inscrivez-vous gratuitement à Oxynov.";
                break;
            case $_SERVER['REQUEST_URI'] == $profil:
                $title = "Bonjour ". $_SESSION['membre']['pseudo'];
                break;
            default:
                $title = "Oxynov, Vente de canettes d'air premium";
                break;

        }
        return $title;
    }

    public function my_keywords()
    {
        $keyword = "";

        $index = "/";
        $panier = "/panier.php";
        $boutique = "/boutique";
        $fiche = "/fiche";
        $contact = "/contact";

        switch ($_SERVER['REQUEST_URI'])
        {
            case $_SERVER['REQUEST_URI'] == $panier:
                $keyword = "Achat, domicile, colis, Oxynov";
                break;
            case $_SERVER['REQUEST_URI'] == $index:
                $keyword = "Air, canette, Oxynov, vente";
                break;
            case $_SERVER['REQUEST_URI'] == $boutique:
                $keyword = "Achat, Oxygène, air, canette";
                break;
            case $_SERVER['REQUEST_URI'] == $fiche:
                $keyword = "Canette, livraison, paiement, Oxynov";
                break;
            case $_SERVER['REQUEST_URI'] == $contact:
                $keyword = "Contact, questions, Oxynov";
                break;
        }
        return $keyword;
    }

    public function var_Dump($value)
    {
        echo "<pre>";
        var_dump($value);
        echo "</pre>";
    }
}