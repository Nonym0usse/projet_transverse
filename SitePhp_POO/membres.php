<?php
require_once("inc/init.inc.php");
$msg = null;
$gestion_modif = new GestionMembre();
$gestion_modif->Modification($msg);

echo $msg;
?>
<div>
			<h2> Modification de vos informations </h2>
			<?php
				print "vous êtes connecté sous le pseudo: " . $_SESSION['membre']['pseudo'];
			?><br /><br />
			<form method="post" enctype="multipart/form-data" action="membres.php">
			<input type="hidden" id="id_membre" name="id_membre" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['id_membre']; ?>" />
				<label for="pseudo">Pseudo</label>
					<input disabled type="text" id="pseudo" name="pseudo" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['pseudo']; ?>"/><br />
					<input type="hidden" id="pseudo" name="pseudo" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['pseudo']; ?>"/>
				
				<label for="mdp">Nouv. Mot de passe</label>
					<input type="text" id="mdp" name="mdp" value="<?php if(isset($mdp)) print $mdp; ?>"/><br /><br />
				
				<label for="nom">Nom</label>
					<input type="text" id="nom" name="nom" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['nom']; ?>"/><br />
				
				<label for="prenom">Prénom</label>
					<input type="text" id="prenom" name="prenom" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['prenom']; ?>"/><br />

				<label for="email">Email</label>
					<input type="text" id="email" name="email" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['email']; ?>"/><br />
				
				<label for="civilite">Sexe</label>
						<select id="civilite" name="civilite">
							<option value="m" <?php if(isset($_SESSION['utilisateur']['civilite']) && $_SESSION['utilisateur']['civilite'] == "m") print "selected"; ?>>Homme</option>
							<option value="f" <?php if(isset($_SESSION['utilisateur']['civilite']) && $_SESSION['utilisateur']['civilite'] == "f") print "selected"; ?>>Femme</option>
						</select><br />
						
				<label for="ville">Ville</label>
					<input type="text" id="ville" name="ville" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['ville']; ?>"/><br />
				
			<label for="code_postal">Cp</label>
				<input type="text" id="code_postal" name="code_postal" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['code_postal']; ?>"/><br />
				
			<label for="adresse">Adresse</label>
						<textarea id="adresse" name="adresse"><?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['adresse']; ?></textarea>
						<input type="hidden" name="statut" value="<?php if(isset($_SESSION['utilisateur'])) print $_SESSION['utilisateur']['statut']; ?>"/><br />
				<br /><br />
				<input type="submit" class="submit" name="modification" value="modification"/>
			</form><br />
		</div>
<?php require("inc/bas.inc.php"); ?>