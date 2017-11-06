<?php
class GestionAdmin
{

  public function Suppression($contenu)
  {
    if(isset($_GET['action']) && $_GET['action'] == "suppression")
    {	// $contenu .= $_GET['id_produit']
    	$resultat = executeRequete("SELECT * FROM produit WHERE id_produit=$_GET[id_produit]");
    	$produit_a_supprimer = $resultat->fetch(PDO::FETCH_ASSOC);
    	$chemin_photo_a_supprimer = $_SERVER['DOCUMENT_ROOT'] . $produit_a_supprimer['photo'];
    	if(!empty($produit_a_supprimer['photo']) && file_exists($chemin_photo_a_supprimer))	unlink($chemin_photo_a_supprimer);
    	$contenu .= '<div class="validation">Suppression du produit : ' . $_GET['id_produit'] . '</div>';
    	executeRequete("DELETE FROM produit WHERE id_produit=$_GET[id_produit]");
    	$_GET['action'] = 'affichage';

      return $contenu;
    }
  }

  public function Enregistrer($element, $content)
  {
    if(!empty($element))
    {	// debug($element);
    	$photo_bdd = "";
    	if(isset($_GET['action']) && $_GET['action'] == 'modification')
    	{
    		$photo_bdd = $element['photo_actuelle'];
    	}
    	if(!empty($_FILES['photo']['name']))
    	{	// debug($_FILES);
    		$nom_photo = $element['reference'] . '_' .$_FILES['photo']['name'];
    		$photo_bdd = RACINE_SITE . "photo/$nom_photo";
    		$photo_dossier = $_SERVER['DOCUMENT_ROOT'] . RACINE_SITE . "/photo/$nom_photo";
    		copy($_FILES['photo']['tmp_name'],$photo_dossier);
    	}
    	foreach($element as $indice => $valeur)
    	{
    		$element[$indice] = htmlEntities(addSlashes($valeur));
    	}
    	executeRequete("REPLACE INTO produit (reference, categorie, titre, description, couleur, taille, public, photo, prix, stock) values ('$element[reference]', '$element[categorie]', '$element[titre]', '$element[description]', '$element[couleur]', '$element[taille]', '$element[public]',  '$photo_bdd',  '$element[prix]',  '$element[stock]')");
    	$content .= '<div class="validation">Le produit a été enregistré</div>';
    	$_GET['action'] = 'affichage';
    }
    return $content;
  }

  public function AffichageProduits($contenu)
  {

    if(isset($_GET['action']) && $_GET['action'] == "affichage")
    {
        $contenu = null;
      	$resultat = executeRequete("SELECT * FROM produit");

      	$contenu .= '<h2> Affichage des produits </h2>';
      	$contenu .= 'Nombre de produit(s) dans la boutique : ' . $resultat->rowCount() . '<br>';
      	$contenu .= '<table class="table" cellpadding="5"><tr>';

      	for($j=0; $j<$resultat->columnCount(); $j++)
      	{
      		$colonne = $resultat->getColumnMeta($j);
      		$contenu .= '<th>' . $colonne['name'] . '</th>';
      	}
      	$contenu .= '<th>Modification</th>';
      	$contenu .= '<th>Supression</th>';
      	$contenu .= '</tr>';

      	while ($ligne = $resultat->fetch(PDO::FETCH_ASSOC))
      	{
      		$contenu .= '<tr>';
      		foreach ($ligne as $indice => $information)
      		{
      			if($indice == "photo")
      			{
      				$contenu .= '<td><img src="' . $information . '" width="70" height="70" /></td>';
      			}
      			else
      			{
      				$contenu .= '<td>' . $information . '</td>';
      			}
      		}
      		$contenu .= '<td><a href="?action=modification&id_produit=' . $ligne['id_produit'] .'"><img src="../inc/img/edit.png" /></a></td>';
      		$contenu .= '<td><a href="?action=suppression&id_produit=' . $ligne['id_produit'] .'" OnClick="return(confirm(\'En �tes vous certain ?\'));"><img src="../inc/img/delete.png" /></a></td>';
      		$contenu .= '</tr>';
      	}
      	$contenu .= '</table><br /><hr /><br />';

        return $contenu;
    }
  }

  public function affichage($contenu)
  {
    require_once("../inc/haut.inc.php");

    echo $contenu;
    if(isset($_GET['action']) && ($_GET['action'] == 'ajout' || $_GET['action'] == 'modification'))
    {
    	if(isset($_GET['id_produit']))
    	{
    		$resultat = executeRequete("SELECT * FROM produit WHERE id_produit=$_GET[id_produit]");
    		$produit_actuel = $resultat->fetch(PDO::FETCH_ASSOC);
    	}
    	echo '
    	<center><h1> Formulaire Produits </h1></center>

    	<form method="post" enctype="multipart/form-data" action="">

    		<input type="hidden" id="id_produit" name="id_produit" value="'; if(isset($produit_actuel['id_produit'])) echo $produit_actuel['id_produit']; echo '" />

        <div class="form-group">
    		  <label for="reference">reference</label><br />
    		    <input type="text" id="reference" name="reference" placeholder="la référence de produit"  class="form-control required" value="'; if(isset($produit_actuel['reference'])) echo $produit_actuel['reference']; echo '" /><br /><br />
        </div>

        <div class="form-group">
    		  <label for="categorie">categorie</label><br />
    		  <input type="text" id="categorie" name="categorie" placeholder="la categorie de produit"  class="form-control required" value="'; if(isset($produit_actuel['categorie'])) echo $produit_actuel['categorie']; echo '"  /><br /><br />
        </div>

        <div class="form-group">
    		  <label for="titre">titre</label><br />
    		  <input type="text" id="titre" name="titre" placeholder="le titre du produit"  class="form-control required" value="'; if(isset($produit_actuel['titre'])) echo $produit_actuel['titre']; echo '"  /> <br /><br />
        </div>

        <div class="form-group">
    		  <label for="description">description</label><br />
    		  <textarea name="description" id="description" class="form-control" placeholder="la description du produit">'; if(isset($produit_actuel['description'])) echo $produit_actuel['description']; echo '</textarea><br /><br />
        </div>

        <div class="form-group">
    		  <label for="couleur">couleur</label><br />
    		  <input type="text" id="couleur" name="couleur" placeholder="la couleur du produit"  class="form-control required"  value="'; if(isset($produit_actuel['couleur'])) echo $produit_actuel['couleur']; echo '" /> <br /><br />
        </div>

        <div class="form-group">
    		<label for="taille">Taille</label><br />
    		<select class="form-control" name="taille">
    			<option value="S"'; if(isset($produit_actuel) && $produit_actuel['taille'] == 'S') echo ' selected '; echo '>S</option>
    			<option value="M"'; if(isset($produit_actuel) && $produit_actuel['taille'] == 'M') echo ' selected '; echo '>M</option>
    			<option value="L"'; if(isset($produit_actuel) && $produit_actuel['taille'] == 'L') echo ' selected '; echo '>L</option>
    			<option value="XL"'; if(isset($produit_actuel) && $produit_actuel['taille'] == 'XL') echo ' selected '; echo '>XL</option>
    		</select><br /><br />
        </div>

        <div class="form-group">
    		<label for="public">public</label><br />
    		<input type="radio" class="radio-inline" name="public" value="m"'; if(isset($produit_actuel) && $produit_actuel['public'] == 'm') echo ' checked '; elseif(!isset($produit_actuel) && !isset($_POST['public'])) echo 'checked'; echo '/>Homme
    		<input type="radio" class="radio-inline" name="public" value="f"'; if(isset($produit_actuel) && $produit_actuel['public'] == 'f') echo ' checked '; echo '/>Femme<br /><br />
    		<label for="photo">photo</label><br />
    		<input type="file" id="photo" name="photo" /><br /><br />
        </div>';
    		if(isset($produit_actuel))
    		{
    			echo '<i>Vous pouvez uplaoder une nouvelle photo si vous souhaitez la changer</i><br />';
    			echo '<img src="' . $produit_actuel['photo'] . '"  width="90" height="90" /><br />';
    			echo '<input type="hidden" name="photo_actuelle" value="' . $produit_actuel['photo'] . '" /><br />';
    		}
    		echo '
        <div class="form-group">
    		<label for="prix">prix</label><br />
    		<input type="text" id="prix" name="prix" placeholder="le prix du produit" required class="form-control required" value="' ; if(isset($produit_actuel['prix'])) echo $produit_actuel['prix']; echo '" /><br /><br />
        </div>

        <div class="form-group">
    		<label for="stock">stock</label><br />
    		<input type="text" id="stock" name="stock" placeholder="le stock du produit"  class="form-control required" value="'; if(isset($produit_actuel['stock'])) echo $produit_actuel['stock']; echo '" /><br /><br />
        </div>

    		<input type="submit" value="'; echo ucfirst($_GET['action']) . ' du produit"/>
    	</form>';
    }
    require_once("../inc/bas.inc.php");
  }

  public function AffichageCommande()
  {
    echo '<center><h1> Voici les commandes passées sur le site </h1></center>';
  	echo '<table border="1"><tr>';
  	$information_sur_les_commandes = executeRequete("select * from commande");
  	echo "Nombre de commande(s) : " . $information_sur_les_commandes->rowCount();
  	echo "<table class='table'  style='border-color:red' border=10> <tr>";
  	for($h=0; $h<$information_sur_les_commandes->columnCount(); $h++)
  	{
  		$colonne = $information_sur_les_commandes->getColumnMeta($h);
  		echo '<th>' . $colonne['name'] . '</th>';

  	}
  	echo "</tr>";
  	$chiffre_affaire = 0;
  	while ($commande = $information_sur_les_commandes->fetch(PDO::FETCH_ASSOC))
  	{
  		$chiffre_affaire += $commande['montant'];
  		echo '<div>';
  		echo '<tr>';
  		echo '<td><a href="gestion_commande.php?suivi=' . $commande['id_commande'] . '">Voir la commande ' . $commande['id_commande'] . '</a></td>';
  		echo '<td>' . $commande['id_membre'] . '</td>';
  		echo '<td>' . $commande['montant'] . '</td>';
  		echo '<td>' . $commande['date_enregistrement'] . '</td>';
  		echo '<td>' . $commande['etat'] . '</td>';
  		echo '</tr>	';
  		echo '</div>';
  	}
  	echo '</table><br />';
  	echo 'Calcul du montant total des revenus:  <br />';
  	echo "le chiffre d'affaires de la societe est de : $chiffre_affaire €";

  	echo '<br />';
  	if(isset($_GET['suivi']))
  	{
  		echo "<h1> Voici les détails pour la commande n°". $_GET['suivi']."</h1>";
  		echo '<table border="1">';
  		echo '<tr>';
  		$information_sur_une_commande = executeRequete("select * from details_commande where id_commande=$_GET[suivi]");

  		$nbcol = $information_sur_une_commande->columnCount();
  		echo "<table class='table' style='border-color:red' border=10> <tr>";
  		for ($i=0; $i < $nbcol; $i++)
  		{
  			$colonne = $information_sur_une_commande->getColumnMeta($i);
  			echo '<th>' . $colonne['name'] . '</th>';
  		}
  		echo "</tr>";

  		while ($details_commande = $information_sur_une_commande->fetch(PDO::FETCH_ASSOC))
  		{
  			echo '<tr>';
  				echo '<td>' . $details_commande['id_details_commande'] . '</td>';
  				echo '<td>' . $details_commande['id_commande'] . '</td>';
  				echo '<td>' . $details_commande['id_produit'] . '</td>';
  				echo '<td>' . $details_commande['quantite'] . '</td>';
  				echo '<td>' . $details_commande['prix'] . '</td>';
  			echo '</tr>';
  		}
  		echo '</table>';
  	}
  }

  public function AffichageMembre()
  {
    require_once("../inc/haut.inc.php");
    //require_once("../inc/menu.inc.php");
    echo '<h1> Voici les membres inscrit au site </h1>';
    	$resultat = executeRequete("SELECT * FROM membre");
    	echo "Nombre de membre(s) : " . $resultat->rowCount();
    	echo "<table class='table' style='border-color:red' border=10> <tr>";
    	for($i=0; $i<$resultat->columnCount(); $i++)
    	{
    		$colonne = $resultat->getColumnMeta($i);
    		echo '<th>' . $colonne['name'] . '</th>';
    	}
    	echo '<th> Supprimer </th>';
    	echo "</tr>";
    	while ($membre = $resultat->fetch(PDO::FETCH_ASSOC))
    	{
    		echo '<tr>';
    		foreach ($membre as $information)
    		{
    			echo '<td>' . $information . '</td>';
    		}
    		echo "<td><a href='gestion_membre.php?msg=supok&&id_membre=" . $membre['id_membre'] . "' onclick='return(confirm(\"Etes-vous sûr de vouloir supprimer ce membre?\"));'> X </a></td>";
    		echo '</tr>';
    	}
    	echo '</table>';


  }





}



 ?>
