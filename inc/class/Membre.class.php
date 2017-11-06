<?php

	class Membre {
		
		private $id_membre;
		private $pseudo;
		private $mdp;
		private $nom;
		private $prenom;
		private $email;
		private $civilite;
		private $ville;
		private $code_postal;
		private $adresse;
		private $statut;
		
		public function __construct($id_membre, $pseudo, $mdp, $nom, $prenom, $email, $civilite, $ville, $code_postal, $adresse, $statut) 
		{ 
			$this->id_membre = $id_membre; 
			$this->pseudo = $pseudo; 
			$this->mdp = $mdp;
			$this->nom = $nom; 
			$this->prenom = $prenom;
			$this->email = $email;
			$this->civilite = $civilite;
			$this->ville = $ville;
			$this->code_postal = $code_postal;
			$this->adresse = $adresse;
			$this->statut = $statut;
		}
		public function GetId() { return $this->id_membre; }
		
		public function GetPseudo() { return $this->pseudo; }
		public function SetPseudo($newPseudo) { $this->pseudo = $newPseudo; }
		
		public function GetMdp() { return $this->mdp; }
		public function SetMdp($newMdp) { $this->mdp = $newMdp; }
		
		public function GetNom() { return $this->nom; }
		public function SetNom($newNom) { $this->nom = $newNom; }
		
		public function GetPrenom() { return $this->prenom; }
		public function SetPrenom($newPrenom) { $this->prenom = $newPrenom; }
		
		public function GetEmail() { return $this->email; }
		public function SetEmail($newEmail) { $this->email = $newEmail; }
		
		public function GetCivilite() { return $this->civilite; }
		public function SetCivilite($newCivilite) { $this->civilite = $newCivilite; }
		
		public function GetVille() { return $this->ville; }
		public function SetVille($newVille) { $this->ville = $newVille; }
		
		public function GetPostal() { return $this->code_postal; }
		public function SetPostal($newPostal) { $this->code_postal = $newPostal; }
		
		public function GetAdresse() {return $this->adresse; }
		public function SetAdresse($newAdresse) { $this->adresse = $newAdresse; }
		
		public function GetStatut() { return $this->statut; }
		public function SetStatut($newStatut) { $this->statut = $newStatut; }
	}


?>