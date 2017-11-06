<?php

	class GestionMembre {

		public function Deconnexion($action)
		{
		if($action == "deconnexion")
			{
				session_destroy();
			}
		}

		public function Connexion($element, $contenu)
		{
			if(internauteEstConnecte())
			{
				header("location:profil.php");
			}
			if($element)
			{
				$resultat = executeRequete("SELECT * FROM membre WHERE pseudo='$element[pseudo]'");
				if($resultat->rowCount() != 0)
				{
					$membre = $resultat->fetch(PDO::FETCH_ASSOC);
					if($membre['mdp'] == $element['mdp'])
					{
						foreach($membre as $indice => $element)
						{
							if($indice != 'mdp')
							{
								$_SESSION['membre'][$indice] = $element;
							}
						}
						global $newMembre;
						$newMembre = new Membre(null,null,null,null,null,null,null,null,null,null,null);
						$newMembre->SetEmail($membre['email']);
						$newMembre->SetVille($membre['ville']);
						$newMembre->SetPostal($membre['code_postal']);
						$newMembre->SetAdresse($membre['adresse']);
						header("location:profil.php");
					}
					else
					{
						$contenu .= '<div class="erreur">Erreur de MDP</div>';
					}
				}
				else
				{
					$contenu .= '<div class="erreur">Erreur de pseudo</div>';
				}
			}
			return $contenu;
		}

		public function Inscription($element)
		{
			if($element)
			{
				$verif_caractere = preg_match('#^[a-zA-Z0-9._-]+$#', $element['pseudo']); 
				if(!$verif_caractere || strlen($element['pseudo']) < 1 || strlen($element['pseudo']) > 20 )
				{
					$contenu .= "<div class='erreur'>Le pseudo doit contenir entre 1 et 20 caractères. <br> Caractère accepté : Lettre de A à Z et chiffre de 0 à 9</div>";
				}
				if(empty($contenu))
				{
					$membre = executeRequete("SELECT * FROM membre WHERE pseudo='$element[pseudo]'");
					if($membre->rowCount() > 0)
					{
						$contenu .= "<div class='erreur'>Pseudo indisponible. Veuillez en choisir un autre svp.</div>";
					}
					else
					{
						foreach($element as $indice => $valeur)
						{
							$element[$indice] = htmlEntities(addSlashes($valeur));
						}
						executeRequete("INSERT INTO membre (pseudo, mdp, nom, prenom, email, civilite, ville, code_postal, adresse) VALUES ('$element[pseudo]', '$element[mdp]', '$element[nom]', '$element[prenom]', '$element[email]', '$element[civilite]', '$element[ville]', '$element[code_postal]', '$element[adresse]')");
						$contenu .= "<div class='validation'>Vous êtes inscrit à notre site web. <a href=\"connexion.php\"><u>Cliquez ici pour vous connecter</u></a></div>";
					}
				}
			}
		}

		public function Modification($msg)
		{
			if(!internauteEstConnecte())
			{
				header("location:connexion.php");
				exit();
			}
			if($_POST)
			{
				if(!empty($_POST['mdp']))
				{
					executeRequete("UPDATE membre SET
						mdp='$_POST[mdp]',
						nom='$_POST[nom]',
						prenom='$_POST[prenom]',
						email='$_POST[email]',
						civilite='$_POST[civilite]',
						ville='$_POST[ville]',
						code_postal='$_POST[code_postal]',
						adresse='$_POST[adresse]'

						WHERE id_membre='".$_SESSION['membre']['id_membre']."'");

					//unset($_SESSION['membre']);
					foreach($membre as $indice => $element)
					{
						if($indice != 'mdp')
						{
							$_SESSION['membre'][$indice] = $element;
						}
						else
						{
							$_SESSION['membre'][$indice] = $_POST['mdp'];
						}
					}
					header("Location:membres.php?action=modif");
				}
				else
				{
					$msg .= "le nouveau mot de passe doit être renseigné !";
				}
			}
			if(isset($_GET['action']) && $_GET['action'] == 'modif')
			{
				$msg .= "la modification à bien été prise en compte";
			}

			require_once("inc/haut.inc.php");
			if(!empty($msg))
			{
				echo "<div class='validation'>";
				echo $msg;
				echo "</div>";
			}


		}

	}

?>
