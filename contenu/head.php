<?php
# @Author: CYRIL VELLA
# @Date:   2018-02-13T22:52:03+01:00
# @Email:  cyril.vella@yahoo.com
# @Last modified by:   CYRIL VELLA
# @Last modified time: 2018-03-11T17:44:17+01:00



//-------------------- choix des metas
switch($_REQUEST['op']){
  case 'boutique':
  $title = "Oxynov - Achat canette d'air. Large choix des grandes villes.";
  $description = "Découvrez un large choix de canette d'air des plus grandes villes. De Paris à Los Angeles, prenez un grand bol d'air en restant cheez vous !";
  $keywords = "canette, canette d'air, oxynov, Aix-En-Provence, ville, livraison, voyage, boutique, e-commerce, achat";
  break;
  case 'contact':
  $title = "Oxynov - Une question? Contactez-nous !";
  $description = "Contactez Oxynov pour plus d'informations";
  $keywords = "Canette, canette d'air, oxynov, contact, Aix-En-Provence, ville, informations";
  break;
  case 'connexion':
  $title = "Oxynov - Connexion à votre compte gratuitement.";
  $description = "Connectez-vous pour pouvoir bénéficier d'un large choix de canette d'air des plus grandes villes.";
  $keywords = "Connexion, canette d'air, oxynov, inscription, Aix-En-Provence";
  break;
  case 'panier':
  $title = "Oxynov - Votre panier.";
  $description = "Votre panier d'articles, ajoutez plusieurs canettes pas chères pour voyager encore pkus !";
  $keywords = "panier, oxynov, Aix-En-Provence, vente canettes d'air, canette";
  break;
  case 'inscription':
  $title = "Oxynov - Inscrivez-vous pour pouvoir accèder à de nombreuses destinations";
  $description = "Inscrivez-vous sur Oxynov pour pouvoir bénéficier d'un large choix de canettes (sensations garanties !)";
  $keywords = "inscription, canette, destination, oxynov, Aix-En-Provence, vente";
  break;

  case 'profil':
  $title = "Oxynov - ". $_SESSION['pseudo'];
  $description = "Bienvenue sur votre profil Oxynov";
  $keywords = "profil, oxynov, canette, destination, vente";
  break;

  case 'fiche_produit':
  $title = "Oxynov " . $_SESSION['produits'] . " Canette pas chère.";
  $description = "Découvrez un large choix de canette pas chères sur Oxynov. Prenez un grand bol d'air en restant chez vous";
  $keywords = "produit, achat, canette, Aix-En-Provence, destination, canette, canette d'air";
  break;
  default:
  $title = "Oxynov - Achat canette d'air de grandes destinations";
  $description = "Découvrez un large choix de canette pas chères sur Oxynov. Prenez un grand bol d'air en restant chez vous";
  $keywords = "produit, achat, canette, Aix-En-Provence, destination, canette, canette d'air, vente";
  break;
}
?>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta name="robots" content="index,follow,all">
<meta name="description" content="<?php echo $description ?>" />
<meta name="keywords" content="<?php echo $keywords ?>" />

<link rel="stylesheet" href="css/bootstrap-4.0.0/css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="stylesheet" href="css/font-awesome-4.7.0/css/font-awesome.css" type="text/css">

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-114994693-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-114994693-1');
</script>
<?php
if(!empty($og)){
  echo $og;
}
?>
<title><?php echo $title ?></title>
