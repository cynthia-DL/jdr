<?php
	/**
	* Cette fonction permet de fermer une base de données
	* @param $DB la base de données à fermer.
	*/
	function closeDb($DB){
		mysqli_close($DB);
	}

	/**
	* Cette fonction permet de générer une base de données.
	* @return un lien vers la base de données, rien sinon
	*/
	function generateDb(){
		$DB = mysqli_connect("dwarves.iut-fbleau.fr", "costandi", "sqldwarves", "costandi");
		if(!$DB){
			die("<p>connexion impossible</p>");
		}
		else return $DB;
	}

	/**
	* Permet de récupérer tous les animaux
	* @param $DB
	* @return array de tous les animaux possibles
	*/
	function getArrayAnimal($DB){
		$resultat = mysqli_query($DB, "SELECT nomAnimal from jdrAnimal");
		$arrayAnimal = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayAnimal[$i] = $ligne["nomAnimal"];
			$i++;
		}

		mysqli_free_result($resultat);

		print_r($arrayAnimal);

		return $arrayAnimal;
	}

	/**
	* Permet de récupérer toutes les classes
	* @param $DB
	* @return array de toutes les classes possibles
	*/
	function getArrayClasse($DB){
		$resultat = mysqli_query($DB, "SELECT nomClasse from jdrClasse");
		$arrayClasse = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayClasse[$i] = $ligne["nomClasse"];
			$i++;
		}

		mysqli_free_result($resultat);

		print_r($arrayClasse);
		
		return $arrayClasse;
	}

	/**
	* Permet de récupérer toutes les comptétences
	* @param $DB
	* @param $idPersonnage
	* @return array de toutes les compétences possibles pour un personnage donné
	*/
	function getArrayCompetence($DB, $idPersonnage){
		$stmt = mysqli_prepare($DB, "SELECT nomAptitude, descriptionAptitude FROM jdrAptitude WHERE estUneCompetence = 1 AND idPersonnage = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $nom, $description);
		$arrayCompetence = array();
		$i = 0;
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
				$arrayCompetence[$i] = array();
				$arrayCompetence[$i][0] = $nom;
				$arrayCompetence[$i][1] = $description;
				$i++;
			}
		}

		print_r($arrayCompetence);
		
		return $arrayCompetence;
	}

	/**
	* Permet de récupérer tous les états
	* @param $DB
	* @return array de tous les états possibles
	*/
	function getArrayEtat($DB){
		$resultat = mysqli_query($DB, "SELECT nomEtat from jdrEtat");
		$arrayEtat = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayEtat[$i] = $ligne["nomEtat"];
			$i++;
		}

		mysqli_free_result($resultat);

		print_r($arrayEtat);
		
		return $arrayEtat;
	}

	/**
	* Permet de récupérer tous les genres
	* @param $DB
	* @return array de tous les genres possibles
	*/
	function getArrayGenre($DB){
		$resultat = mysqli_query($DB, "SELECT nomGenre from jdrGenre");
		$arrayGenre = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayGenre[$i] = $ligne["nomGenre"];
			$i++;
		}

		mysqli_free_result($resultat);

		print_r($arrayGenre);
		
		return $arrayGenre;
	}

	/**
	* Permet de récupérer tous les races
	* @param $DB
	* @return array de tous les races possibles
	*/
	function getArrayRace($DB){
		$resultat = mysqli_query($DB, "SELECT nomRace from jdrRace");
		$arrayRace = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayRace[$i] = $ligne["nomRace"];
			$i++;
		}

		mysqli_free_result($resultat);

		print_r($arrayRace);
		
		return $arrayRace;
	}

	/**
	* Permet de récupérer toutes les traits
	* @param $DB
	* @param $idPersonnage
	* @return array de toutes les traits possibles pour un personnage donné
	*/
	function getArrayTrait($DB, $idPersonnage){
		$stmt = mysqli_prepare($DB, "SELECT nomAptitude, descriptionAptitude FROM jdrAptitude WHERE estUneCompetence = 0 AND idPersonnage = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $nom, $description);
		$arrayTrait = array();
		$i = 0;
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
				$arrayTrait[$i] = array();
				$arrayTrait[$i][0] = $nom;
				$arrayTrait[$i][1] = $description;
				$i++;
			}
		}

		print_r($arrayTrait);
		
		return $arrayTrait;
	}

	/**
	* Permet de récupérer tous les types d'inventaire
	* @param $DB
	* @return array de tous les types d'inventaire possibles
	*/
	function getArrayTypeInventaire($DB){
		$resultat = mysqli_query($DB, "SELECT nomTypeInventaire from jdrTypeInventaire");
		$arrayTypeInventaire = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayTypeInventaire[$i] = $ligne["nomTypeInventaire"];
			$i++;
		}

		mysqli_free_result($resultat);

		print_r($arrayTypeInventaire);
		
		return $arrayTypeInventaire;
	}

	/**
	* Permet de récupérer tous les types d'objet
	* @param $DB
	* @return array de tous les types d'objet possibles
	*/
	function getArrayTypeObjet($DB){
		$resultat = mysqli_query($DB, "SELECT nomTypeObjet from jdrTypeObjet");
		$arrayTypeObjet = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayTypeObjet[$i] = $ligne["nomTypeObjet"];
			$i++;
		}

		mysqli_free_result($resultat);

		print_r($arrayTypeObjet);
		
		return $arrayTypeObjet;
	}

	/**
	* Permet de récupérer un personnage
	* @param $DB
	* @param $idPersonnage l'ID du personnage
	* @return array de tout ce que contient le personnage
	*/
	function getPersonnage($DB, $idPersonnage){
		$stmt = mysqli_prepare($DB, "SELECT nomEtat, nom, prenom, age, nomRace, nomClasse, nomGenre, pv, pvMax, armure, lore FROM jdrPersonnage NATURAL JOIN jdrEtat NATURAL JOIN jdrRace NATURAL JOIN jdrClasse NATURAL JOIN jdrGenre WHERE idPersonnage = ? ");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $etat, $nom, $prenom, $age, $race, $classe, $genre, $pv, $pvMax, $armure, $lore);
		
		$personnage = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
			
			$personnage["etat"] = $etat;
			$personnage["nom"] = $nom;
			$personnage["prenom"] = $prenom;
			$personnage["age"] = $age;
			$personnage["race"] = $race;
			$personnage["classe"] = $classe;
			$personnage["genre"] = $genre;
			$personnage["pv"] = $pv;
			$personnage["pvMax"] = $pvMax;
			$personnage["armure"] = $armure;
			$personnage["lore"] = $lore;
			}
		}

		print_r($personnage);
		
		return $personnage;
	}

	$DB = generateDb();

	$arrayEtat = getArrayEtat($DB);
	echo("<br/>");
	$arrayAnimal = getArrayAnimal($DB);
	echo("<br/>");
	$arrayClasse = getArrayClasse($DB);
	echo("<br/>");
	$arrayGenre = getArrayGenre($DB);
	echo("<br/>");
	$arrayRace = getArrayRace($DB);
	echo("<br/>");
	$arrayTypeInventaire = getArrayTypeInventaire($DB);
	echo("<br/>");
	$arrayTypeObjet = getArrayTypeObjet($DB);
	echo("<br/>");
	$arrayCompetence = getArrayCompetence($DB, 1);
	echo("<br/>");
	$arrayTrait = getArrayTrait($DB, 1);
	echo("<br/>");
	$personnage = getPersonnage($DB, 1);

	closeDb($DB);
?>