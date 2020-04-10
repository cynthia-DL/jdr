<?php

	/**
	* Permet de rajouter un animal dans la table jdrAnimal de la BD
	* @param $DB
	* @param $nomAnimal
	*/
	function addAnimal($DB, $nomAnimal){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrAnimal (nomAnimal) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $nomAnimal);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter une aptitude dans la table jdrAptitude de la BD
	* @param $DB
	* @param $nomAptitude
	*/
	function addAptitude($DB, $estUneCompetence, $idPersonnage, $nomAptitude, $descriptionAptitude){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrAptitude (estUneCompetence, idPersonnage, nomAptitude, descriptionAptitude) VALUES (?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'iiss', $estUneCompetence, $idPersonnage, $nomAptitude, $descriptionAptitude);
		mysqli_execute($stmt);
	}	

	/**
	* Permet de rajouter un chapitre dans la table jdrChapitre de la BD
	* @param $DB
	* @param $contenu
	*/
	function addChapitre($DB, $contenu){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrChapitre (contenu) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $contenu);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter une classe dans la table jdrClasse de la BD
	* @param $DB
	* @param $nomClasse
	*/
	function addClasse($DB, $nomClasse){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrClasse (nomClasse) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $nomClasse);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter un etat dans la table jdrEtat de la BD
	* @param $DB
	* @param $nomEtat
	*/
	function addEtat($DB, $nomEtat){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrEtat (nomEtat) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $nomEtat);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter un familier dans la table jdrFamilier de la BD
	* @param $DB
	* @param $idPersonnage
	* @param $nomFamilier
	* @param $pvFamilier
	* @param $pvMaxFamilier
	* @param $armureFamilier
	* @param $idStatistique
	* @param $descriptionFamilier
	*/
	function addFamilier($DB, $idPersonnage, $nomFamilier, $pvFamilier, $pvMaxFamilier, $armureFamilier, $idStatistique, $descriptionFamilier){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrFamilier (idPersonnage, nomFamilier, pvFamilier, pvMaxFamilier, armureFamilier, idStatistique, descriptionFamilier) VALUES (?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'isiiiis', $idPersonnage, $nomFamilier, $pvFamilier, $pvMaxFamilier, $armureFamilier, $idStatistique, $descriptionFamilier);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter un genre dans la table jdrGenre de la BD
	* @param $DB
	* @param $nomGenre
	*/
	function addGenre($DB, $nomGenre){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrGenre (nomGenre) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $nomGenre);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter un objet dans la table jdrInventaire de la BD
	* @param $DB
	* @param $idPersonnage
	* @param $idTypeInventaire
	* @param $nomObjet
	* @param $idTypeObjet
	* @param $degatObjet
	* @param $protectionObjet
	* @param $contenuObjet
	* @param $quantiteObjet
	* @param $idAnimal
	* @param $descriptionObjet
	*/
	function addObjet($DB, $idPersonnage, $idTypeInventaire, $nomObjet, $idTypeObjet, $degatObjet, $protectionObjet, $contenuObjet, $quantiteObjet, $idAnimal, $descriptionObjet){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrInventaire (idPersonnage, idTypeInventaire, nomObjet, idTypeObjet, degatObjet, protectionObjet, contenuObjet, quantiteObjet, idAnimal, descriptionObjet) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'iisiiisiis', $idPersonnage, $idTypeInventaire, $nomObjet, $idTypeObjet, $degatObjet, $protectionObjet, $contenuObjet, $quantiteObjet, $idAnimal, $descriptionObjet);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter un personnage dans la table jdrPersonnage de la BD
	* @param $DB
	* @param $idEtat
	* @param $nom
	* @param $prenom
	* @param $age
	* @param $idRace
	* @param $idClasse
	* @param $idGenre
	* @param $pv
	* @param $pvMax
	* @param $armure
	* @param $idStatistique
	* @param $lore
	*/
	function addPersonnage($DB, $idEtat, $nom, $prenom, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrPersonnage (idEtat, nom, prenom, age, idRace, idClasse, idGenre, pv, pvMax, armure, idStatistique, lore) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'issiiiiiiiis', $idEtat, $nom, $prenom, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter une race dans la table jdrRace de la BD
	* @param $DB
	* @param $nomRace
	*/
	function addRace($DB, $nomRace){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrRace (nomRace) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $nomRace);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter une statistique dans la table jdrStatistique de la BD
	* @param $DB
	* @param $force
	* @param $agilite
	* @param $social
	* @param $perception
	* @param $mental
	* @param $intelligence
	* @param $constitution
	*/
	/*function addStatistique($DB, $force, $agilite, $social, $perception, $mental, $intelligence, $constitution){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrStatistique (force, agilite, social, perception, mental, intelligence, constitution) VALUES (?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'iiiiiii', $force, $agilite, $social, $perception, $mental, $intelligence, $constitution);
		mysqli_execute($stmt);
	}*/

	/**
	* Permet de rajouter un type d'inventaire dans la table jdrTypeInventaire de la BD
	* @param $DB
	* @param $nomTypeInventaire
	*/
	function addTypeInventaire($DB, $nomTypeInventaire){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrTypeInventaire (nomTypeInventaire) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $nomTypeInventaire);
		mysqli_execute($stmt);
	}

	/**
	* Permet de rajouter un type d'objet dans la table jdrTypeObjet de la BD
	* @param $DB
	* @param $nomTypeObjet
	*/
	function addTypeObjet($DB, $nomTypeObjet){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrTypeObjet (nomTypeObjet) VALUES (?)");
		mysqli_stmt_bind_param($stmt, 's', $nomTypeObjet);
		mysqli_execute($stmt);
	}






	

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

		return $arrayAnimal;
	}

	/**
	* Permet de récupérer tous les chapitres
	* @param $DB
	* @return array de tous les chapitres
	*/
	function getArrayChapitre($DB){
		$resultat = mysqli_query($DB, "SELECT * from jdrChapitre ORDER BY date DESC");
		$arrayChapitre = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayChapitre[$i] = $ligne;
			$i++;
		}

		mysqli_free_result($resultat);
		
		return $arrayChapitre;
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

		return $arrayTypeObjet;
	}

		/**
	* Permet de récupérer les familiers d'un personnage
	* @param $DB
	* @param $idPersonnage l'ID du personnage
	* @return array de tout les familiers du personnage
	*/
	function getFamilier($DB, $idPersonnage){
		$i = 0;
		$stmt = mysqli_prepare($DB, "SELECT nomFamilier, pvFamilier, pvMaxFamilier, armureFamilier, idStatistique, descriptionFamilier FROM jdrFamilier WHERE idPersonnage = ? ");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $nom, $pv, $pvMax, $armure, $idStatistique, $description);
		
		$familier = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
				$familier[$i]["nom"] = $nom;
				$familier[$i]["pv"] = $pv;
				$familier[$i]["pvMax"] = $pvMax;
				$familier[$i]["armure"] = $armure;
				$familier[$i]["description"] = $description;
				$familier[$i]["statistiques"] = $idStatistique;

				$i++;
			}
		}

		for ($i = 0; $i < count($familier); $i++)
			$familier[$i]["statistiques"] = getStatistique($DB, $familier[$i]["statistiques"]);

		return $familier;
	}

	/**
	* Permet de récupérer l'inventaire d'un personnage
	* @param $DB
	* @param $idPersonnage l'ID du personnage
	* @return array de tout l'inventaire du personnage
	*/
	function getInventaire($DB, $idPersonnage){
		$i = 0;
		$stmt = mysqli_prepare($DB, "SELECT nomTypeInventaire, nomObjet, nomTypeObjet, degatObjet, protectionObjet, contenuObjet, quantiteObjet, nomAnimal, descriptionObjet FROM jdrInventaire NATURAL JOIN jdrTypeInventaire NATURAL JOIN jdrTypeObjet NATURAL JOIN jdrAnimal WHERE idPersonnage = ? ");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $typeInventaire, $nom, $type, $degat, $protection, $contenu, $quantite, $animal, $description);
		
		$inventaire = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
				if(isset($inventaire[$typeInventaire]))
					$i = count($inventaire[$typeInventaire]);
				else $i = 0;

				$inventaire[$typeInventaire][$i]["nom"] = $nom;
				$inventaire[$typeInventaire][$i]["type"] = $type;
				$inventaire[$typeInventaire][$i]["degat"] = $degat;
				$inventaire[$typeInventaire][$i]["protection"] = $protection;
				$inventaire[$typeInventaire][$i]["contenu"] = $contenu;
				$inventaire[$typeInventaire][$i]["quantite"] = $quantite;
				$inventaire[$typeInventaire][$i]["animal"] = $animal;
				$inventaire[$typeInventaire][$i]["description"] = $description;
			}
		}

		return $inventaire;
	}

	/**
	* Permet de récupérer un personnage
	* @param $DB
	* @param $idPersonnage l'ID du personnage
	* @return array de tout ce que contient le personnage
	*/
	function getPersonnage($DB, $idPersonnage){
		$stmt = mysqli_prepare($DB, "SELECT nomEtat, nom, prenom, age, nomRace, nomClasse, nomGenre, pv, pvMax, armure, idStatistique, lore FROM jdrPersonnage NATURAL JOIN jdrEtat NATURAL JOIN jdrRace NATURAL JOIN jdrClasse NATURAL JOIN jdrGenre WHERE idPersonnage = ? ");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $etat, $nom, $prenom, $age, $race, $classe, $genre, $pv, $pvMax, $armure, $idStatistique, $lore);
		
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
			$personnage["statistiques"] = $idStatistique;
			}
		}

		$personnage["statistiques"] = getStatistique($DB, $personnage["statistiques"]);
		$personnage["inventaire"] = getInventaire($DB, $idPersonnage);
		$personnage["familier"] = getFamilier($DB, $idPersonnage);
		
		return $personnage;
	}

	/**
	* Permet de récupérer des statistiques a partir d'un idStatistique
	* @param $DB
	* @param $idStatistique l'ID du personnage
	* @return array de tout ce que contient le personnage
	*/
	function getStatistique($DB, $idStatistique){
		$stmt = mysqli_prepare($DB, "SELECT * FROM jdrStatistique WHERE idStatistique = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idStatistique);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $id, $force, $agilite, $social, $perception, $mental, $intelligence, $constitution);
		
		$stats = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
			$stats["force"] = $force;
			$stats["agilite"] = $agilite;
			$stats["social"] = $social;
			$stats["perception"] = $perception;
			$stats["mental"] = $mental;
			$stats["intelligence"] = $intelligence;
			$stats["constitution"] = $constitution;
			}
		}
		
		return $stats;
	}

	$DB = generateDb();

	//addStatistique($DB, 50, 50, 50, 50, 50, 50, 50);

	closeDb($DB);
?>