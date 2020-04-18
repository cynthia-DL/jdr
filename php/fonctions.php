<<<<<<< HEAD
<?php

	//Les fonctions pour ajouter des données dans la BD

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
	* Permet de rajouter un état dans la table jdrEtat de la BD
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
	* @param $idUtilisateur
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
	function addPersonnage($DB, $idUtilisateur, $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrPersonnage (idUtilisateur, idEtat, nom, prenom, niveau, age, idRace, idClasse, idGenre, pv, pvMax, armure, idStatistique, lore) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'iissiiiiiiiiis', $idUtilisateur, $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore);
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
	* @param $F pour la force
	* @param $A pour l'agilité
	* @param $S pour le social
	* @param $P pour la perception
	* @param $M pour le mental
	* @param $I pour l'intelligence
	* @param $C pour la constitution
	*/
	function addStatistique($DB, $F, $A, $S, $P, $M, $I, $C){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrStatistique (F, A, S, P, M, I, C) VALUES (?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'iiiiiii', $F, $A, $S, $P, $M, $I, $C);
		mysqli_execute($stmt);

		return mysqli_insert_id($DB);
	}

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

	//Pour la BD

	/**
	* Cette fonction permet de fermer une base de données
	* @param $DB la base de données à fermer.
	*/
	function closeDb($DB){
		mysqli_close($DB);
	}

	//Les fonctions pour supprimer des données de la BD

	/**
	 * Permet de supprimer un animal de la table jdrAnimal de la BD
	 * @param $idAnimal
	 */
	function deleteAnimal($DB, $idAnimal){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrAnimal WHERE idAnimal = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idAnimal);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une aptitude de la table jdrAptitude de la BD
	 * @param $idAptitude
	 */
	function deleteAptitude($DB, $idAptitude){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrAptitude WHERE idAptitude = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idAptitude);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une chapitre de la table jdrChapitre de la BD
	 * @param $date
	 */
	function deleteChapitre($DB, $date){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrChapitre WHERE date = ?");
		mysqli_stmt_bind_param($stmt, 's', $date);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une classe de la table jdrClasse de la BD
	 * @param $idClasse
	 */
	function deleteClasse($DB, $idClasse){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrClasse WHERE idClasse = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idClasse);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un état de la table jdrEtat de la BD
	 * @param $idEtat
	 */
	function deleteEtat($DB, $idEtat){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrEtat WHERE idEtat = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idEtat);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un familier de la table jdrFamilier de la BD
	 * @param $idFamilier
	 */
	function deleteFamilier($DB, $idFamilier){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrFamilier WHERE idFamilier = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idFamilier);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un genre de la table jdrGenre de la BD
	 * @param $idGenre
	 */
	function deleteGenre($DB, $idGenre){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrGenre WHERE idGenre = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idGenre);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un objet de la table jdrInventaire de la BD
	 * @param $idObjet
	 */
	function deleteObjet($DB, $idObjet){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrInventaire WHERE idObjet = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idObjet);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un personnage de la table jdrPersonnage de la BD
	 * @param $idPersonnage
	 */
	function deletePersonnage($DB, $idPersonnage){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrPersonnage WHERE idPersonnage = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une race de la table jdrRace de la BD
	 * @param $idRace
	 */
	function deleteRace($DB, $idRace){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrRace WHERE idRace = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idRace);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une statistique de la table jdrStatistique de la BD
	 * @param $idStatistique
	 */
	function deleteStatistique($DB, $idStatistique){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrStatistique WHERE idStatistique = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idStatistique);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une type d'inventaire de la table jdrTypeInventaire de la BD
	 * @param $idTypeInventaire
	 */
	function deleteTypeInventaire($DB, $idTypeInventaire){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrTypeInventaire WHERE idTypeInventaire = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idTypeInventaire);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une type d'objet de la table jdrTypeObjet de la BD
	 * @param $idTypeObjet
	 */
	function deleteTypeObjet($DB, $idTypeObjet){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrTypeObjet WHERE idTypeObjet = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idTypeObjet);
		mysqli_execute($stmt);
	}

	//Pour la BD

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

	//Les fonctions pour récupérer les données de la BD

	/**
	* Permet de récupérer tous les animaux
	* @param $DB
	* @return array de tous les animaux possibles
	*/
	function getArrayAnimal($DB){
		$resultat = mysqli_query($DB, "SELECT * FROM jdrAnimal");
		$arrayAnimal = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayAnimal[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrChapitre ORDER BY date DESC");
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrClasse");
		$arrayClasse = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayClasse[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrEtat");
		$arrayEtat = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayEtat[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrGenre");
		$arrayGenre = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayGenre[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrRace");
		$arrayRace = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayRace[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrTypeInventaire");
		$arrayTypeInventaire = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayTypeInventaire[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrTypeObjet");
		$arrayTypeObjet = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayTypeObjet[$i] = $ligne;
			$i++;
		}

		mysqli_free_result($resultat);

		return $arrayTypeObjet;
	}

	/**
	* Permet de récupérer toutes les preview de personnages
	* @param $DB
	* @return array de toutes les preview de personnages
	*/
	function getArrayVignette($DB){
		$resultat = mysqli_query($DB, "SELECT idPersonnage, idUtilisateur, prenom, pv, pvMax, armure, nomEtat, idStatistique FROM jdrPersonnage NATURAL JOIN jdrEtat");
		$arrayVignette = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayVignette[$i] = $ligne;
			$arrayVignette[$i]['statistiques'] = getStatistique($DB, $arrayVignette[$i]['idStatistique']);
			$i++;
		}

		mysqli_free_result($resultat);

		return $arrayVignette;
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
		$stmt = mysqli_prepare($DB, "SELECT nomEtat, nom, prenom, niveau, age, nomRace, nomClasse, nomGenre, pv, pvMax, armure, idStatistique, lore FROM jdrPersonnage NATURAL JOIN jdrEtat NATURAL JOIN jdrRace NATURAL JOIN jdrClasse NATURAL JOIN jdrGenre WHERE idPersonnage = ? ");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $etat, $nom, $prenom, $niveau, $age, $race, $classe, $genre, $pv, $pvMax, $armure, $idStatistique, $lore);
		
		$personnage = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
			
			$personnage["etat"] = $etat;
			$personnage["nom"] = $nom;
			$personnage["prenom"] = $prenom;
			$personnage["niveau"] = $niveau;
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
		$personnage["competences"] = getArrayCompetence($DB, $idPersonnage);
		$personnage["traits"] = getArrayTrait($DB, $idPersonnage);
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
		$resultat = mysqli_stmt_bind_result($stmt, $id, $F, $A, $S, $P, $M, $I, $C);
		
		$stats = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
			$stats["force"] = $F;
			$stats["agilite"] = $A;
			$stats["social"] = $S;
			$stats["perception"] = $P;
			$stats["mental"] = $M;
			$stats["intelligence"] = $I;
			$stats["constitution"] = $C;
			}
		}
		
		return $stats;
	}

	/**
	* Permet de modifier un animal dans la table jdrAnimal de la BD
	* @param $DB
	* @param $nomAnimal
	* @param $idAnimal
	*/
	function updateAnimal($DB, $nomAnimal, $idAnimal){
		$stmt = mysqli_prepare($DB, "UPDATE jdrAnimal SET nomAnimal = ? WHERE idAnimal = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomAnimal, $idAnimal);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une aptitude dans la table jdrAptitude de la BD
	* @param $DB
	* @param $estUneCompetence
	* @param $idPersonnage
	* @param $nomAptitude
	* @param $descriptionAptitude
	* @param $idAptitude
	*/
	function updateAptitude($DB, $estUneCompetence, $idPersonnage, $nomAptitude, $descriptionAptitude, $idAptitude){
		$stmt = mysqli_prepare($DB, "UPDATE jdrAptitude SET estUneCompetence = ?, idPersonnage = ?, nomAptitude = ?, descriptionAptitude = ? WHERE idAptitude = ?");
		mysqli_stmt_bind_param($stmt, 'iissi', $estUneCompetence, $idPersonnage, $nomAptitude, $descriptionAptitude, $idAptitude);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un chapitre dans la table jdrChapitre de la BD
	* @param $DB
	* @param $contenu
	* @param $date
	*/
	function updateChapitre($DB, $contenu, $date){
		$stmt = mysqli_prepare($DB, "UPDATE jdrChapitre SET contenu = ? WHERE date = ?");
		mysqli_stmt_bind_param($stmt, 'ss', $contenu, $date);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une classe dans la table jdrClasse de la BD
	* @param $DB
	* @param $nomClasse
	* @param $idClasse
	*/
	function updateClasse($DB, $nomClasse, $idClasse){
		$stmt = mysqli_prepare($DB, "UPDATE jdrClasse SET nomClasse = ? WHERE idClasse = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomClasse, $idClasse);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un état dans la table jdrEtat de la BD
	* @param $DB
	* @param $nomEtat
	* @param $idEtat
	*/
	function updateEtat($DB, $nomEtat, $idEtat){
		$stmt = mysqli_prepare($DB, "UPDATE jdrEtat SET nomEtat = ? WHERE idEtat = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomEtat, $idEtat);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un état dans la table jdrEtat de la BD
	* @param $DB
	* @param $idPersonnage
	* @param $nomFamilier
	* @param $pvFamilier
	* @param $pvMaxFamilier
	* @param $armureFamilier
	* @param $idStatistique
	* @param $descriptionFamilier
	* @param $idFamilier
	*/
	function updateFamilier($DB, $idPersonnage, $nomFamilier, $pvFamilier, $pvMaxFamilier, $armureFamilier, $idStatistique, $descriptionFamilier, $idFamilier){
		$stmt = mysqli_prepare($DB, "UPDATE jdrFamilier SET idPersonnage = ?, nomFamilier = ?, pvFamilier = ?, pvMaxFamilier = ?, armureFamilier = ?, idStatistique = ?, descriptionFamilier = ? WHERE idFamilier = ?");
		mysqli_stmt_bind_param($stmt, 'isiiiisi', $idPersonnage, $nomFamilier, $pvFamilier, $pvMaxFamilier, $armureFamilier, $idStatistique, $descriptionFamilier, $idFamilier);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un genre dans la table jdrGenre de la BD
	* @param $DB
	* @param $nomGenre
	* @param $idGenre
	*/
	function updateGenre($DB, $nomGenre, $idGenre){
		$stmt = mysqli_prepare($DB, "UPDATE jdrGenre SET nomGenre = ? WHERE idGenre = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomGenre, $idGenre);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un inventaire dans la table jdrInventaire de la BD
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
	* @param $idObjet
	*/
	function updateInventaire($DB, $idPersonnage, $idTypeInventaire, $nomObjet, $idTypeObjet, $degatObjet, $protectionObjet, $contenuObjet, $quantiteObjet, $idAnimal, $descriptionObjet, $idObjet){
		$stmt = mysqli_prepare($DB, "UPDATE jdrInventaire SET idPersonnage = ?, idTypeInventaire = ?, nomObjet = ?, idTypeObjet = ?, degatObjet = ?, protectionObjet = ?, contenuObjet = ?, quantiteObjet = ?, idAnimal = ?, descriptionObjet = ? WHERE idObjet = ?");
		mysqli_stmt_bind_param($stmt, 'iisiiisiisi', $idPersonnage, $idTypeInventaire, $nomObjet, $idTypeObjet, $degatObjet, $protectionObjet, $contenuObjet, $quantiteObjet, $idAnimal, $descriptionObjet, $idObjet);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un personnage dans la table jdrPersonnage de la BD
	* @param $DB
	* @param $idEtat
	* @param $nom
	* @param $prenom
	* @param $niveau
	* @param $age
	* @param $idRace
	* @param $idClasse
	* @param $idGenre
	* @param $pv
	* @param $pvMax
	* @param $armure
	* @param $idStatistique
	* @param $lore
	* @param $idPersonnage
	*/
	function updatePersonnage($DB, $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore, $idPersonnage){
		$stmt = mysqli_prepare($DB, "UPDATE jdrPersonnage SET idEtat = ?, nom = ?, prenom = ?, niveau = ?, age = ?, idRace = ?, idClasse = ?, idGenre = ?, pv = ?, pvMax = ?, armure = ?, idStatistique = ?, lore = ? WHERE idPersonnage = ?");
		mysqli_stmt_bind_param($stmt, 'issiiiiiiiiisi', $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore, $idPersonnage);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une race dans la table jdrRace de la BD
	* @param $DB
	* @param $nomRace
	* @param $idRace
	*/
	function updateRace($DB, $nomRace, $idRace){
		$stmt = mysqli_prepare($DB, "UPDATE jdrRace SET nomRace = ? WHERE idRace = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomRace, $idRace);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une statistique dans la table jdrStatistique de la BD
	* @param $DB
	* @param $F pour la force
	* @param $A pour l'agilité
	* @param $S pour le social
	* @param $P pour la perception
	* @param $M pour le mental
	* @param $I pour l'intelligence
	* @param $C pour la constitution
	* @param $idStatistique
	*/
	function updateStatistique($DB, $F, $A, $S, $P, $M, $I, $C, $idStatistique){
		$stmt = mysqli_prepare($DB, "UPDATE jdrStatistique SET F = ?, A = ?, S = ?, P = ?, M = ?, I = ?, C = ? WHERE idStatistique = ?");
		mysqli_stmt_bind_param($stmt, 'iiiiiiii', $F, $A, $S, $P, $M, $I, $C, $idStatistique);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un type d'inventaire dans la table jdrTypeInventaire de la BD
	* @param $DB
	* @param $nomTypeInventaire
	* @param $idTypeInventaire
	*/
	function updateTypeInventaire($DB, $nomTypeInventaire, $idTypeInventaire){
		$stmt = mysqli_prepare($DB, "UPDATE jdrTypeInventaire SET nomTypeInventaire = ? WHERE idTypeInventaire = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomTypeInventaire, $idTypeInventaire);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un type d'objet dans la table jdrTypeObjet de la BD
	* @param $DB
	* @param $nomTypeObjet
	* @param $idTypeObjet
	*/
	function updateTypeObjet($DB, $nomTypeObjet, $idTypeObjet){
		$stmt = mysqli_prepare($DB, "UPDATE jdrTypeObjet SET nomTypeObjet = ? WHERE idTypeObjet = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomTypeObjet, $idTypeObjet);
		mysqli_execute($stmt);
	}
=======
<?php

	//Les fonctions pour ajouter des données dans la BD

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
	* Permet de rajouter un état dans la table jdrEtat de la BD
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
	* @param $idUtilisateur
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
	function addPersonnage($DB, $idUtilisateur, $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrPersonnage (idUtilisateur, idEtat, nom, prenom, niveau, age, idRace, idClasse, idGenre, pv, pvMax, armure, idStatistique, lore) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'iissiiiiiiiiis', $idUtilisateur, $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore);
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
	* @param $F pour la force
	* @param $A pour l'agilité
	* @param $S pour le social
	* @param $P pour la perception
	* @param $M pour le mental
	* @param $I pour l'intelligence
	* @param $C pour la constitution
	*/
	function addStatistique($DB, $F, $A, $S, $P, $M, $I, $C){
		$stmt = mysqli_prepare($DB, "INSERT INTO jdrStatistique (F, A, S, P, M, I, C) VALUES (?, ?, ?, ?, ?, ?, ?)");
		mysqli_stmt_bind_param($stmt, 'iiiiiii', $F, $A, $S, $P, $M, $I, $C);
		mysqli_execute($stmt);

		return mysqli_insert_id($DB);
	}

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

	//Pour la BD

	/**
	* Cette fonction permet de fermer une base de données
	* @param $DB la base de données à fermer.
	*/
	function closeDb($DB){
		mysqli_close($DB);
	}

	//Les fonctions pour supprimer des données de la BD

	/**
	 * Permet de supprimer un animal de la table jdrAnimal de la BD
	 * @param $idAnimal
	 */
	function deleteAnimal($DB, $idAnimal){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrAnimal WHERE idAnimal = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idAnimal);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une aptitude de la table jdrAptitude de la BD
	 * @param $idAptitude
	 */
	function deleteAptitude($DB, $idAptitude){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrAptitude WHERE idAptitude = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idAptitude);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une chapitre de la table jdrChapitre de la BD
	 * @param $date
	 */
	function deleteChapitre($DB, $date){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrChapitre WHERE date = ?");
		mysqli_stmt_bind_param($stmt, 's', $date);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une classe de la table jdrClasse de la BD
	 * @param $idClasse
	 */
	function deleteClasse($DB, $idClasse){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrClasse WHERE idClasse = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idClasse);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un état de la table jdrEtat de la BD
	 * @param $idEtat
	 */
	function deleteEtat($DB, $idEtat){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrEtat WHERE idEtat = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idEtat);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un familier de la table jdrFamilier de la BD
	 * @param $idFamilier
	 */
	function deleteFamilier($DB, $idFamilier){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrFamilier WHERE idFamilier = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idFamilier);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un genre de la table jdrGenre de la BD
	 * @param $idGenre
	 */
	function deleteGenre($DB, $idGenre){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrGenre WHERE idGenre = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idGenre);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un objet de la table jdrInventaire de la BD
	 * @param $idObjet
	 */
	function deleteObjet($DB, $idObjet){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrInventaire WHERE idObjet = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idObjet);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer un personnage de la table jdrPersonnage de la BD
	 * @param $idPersonnage
	 */
	function deletePersonnage($DB, $idPersonnage){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrPersonnage WHERE idPersonnage = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une race de la table jdrRace de la BD
	 * @param $idRace
	 */
	function deleteRace($DB, $idRace){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrRace WHERE idRace = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idRace);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une statistique de la table jdrStatistique de la BD
	 * @param $idStatistique
	 */
	function deleteStatistique($DB, $idStatistique){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrStatistique WHERE idStatistique = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idStatistique);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une type d'inventaire de la table jdrTypeInventaire de la BD
	 * @param $idTypeInventaire
	 */
	function deleteTypeInventaire($DB, $idTypeInventaire){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrTypeInventaire WHERE idTypeInventaire = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idTypeInventaire);
		mysqli_execute($stmt);
	}

	/**
	 * Permet de supprimer une type d'objet de la table jdrTypeObjet de la BD
	 * @param $idTypeObjet
	 */
	function deleteTypeObjet($DB, $idTypeObjet){
		$stmt = mysqli_prepare($DB, "DELETE FROM jdrTypeObjet WHERE idTypeObjet = ?");
		mysqli_stmt_bind_param($stmt, 'i', $idTypeObjet);
		mysqli_execute($stmt);
	}

	//Pour la BD

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

	//Les fonctions pour récupérer les données de la BD

	/**
	* Permet de récupérer tous les animaux
	* @param $DB
	* @return array de tous les animaux possibles
	*/
	function getArrayAnimal($DB){
		$resultat = mysqli_query($DB, "SELECT * FROM jdrAnimal");
		$arrayAnimal = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayAnimal[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrChapitre ORDER BY date DESC");
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrClasse");
		$arrayClasse = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayClasse[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrEtat");
		$arrayEtat = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayEtat[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrGenre");
		$arrayGenre = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayGenre[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrRace");
		$arrayRace = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayRace[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrTypeInventaire");
		$arrayTypeInventaire = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayTypeInventaire[$i] = $ligne;
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
		$resultat = mysqli_query($DB, "SELECT * FROM jdrTypeObjet");
		$arrayTypeObjet = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayTypeObjet[$i] = $ligne;
			$i++;
		}

		mysqli_free_result($resultat);

		return $arrayTypeObjet;
	}

	/**
	* Permet de récupérer toutes les preview de personnages
	* @param $DB
	* @return array de toutes les preview de personnages
	*/
	function getArrayVignette($DB){
		$resultat = mysqli_query($DB, "SELECT idPersonnage, prenom, pv, pvMax, armure, nomEtat, idStatistique FROM jdrPersonnage NATURAL JOIN jdrEtat");
		$arrayVignette = array();
		$i = 0;
		
		while ($ligne = $resultat->fetch_assoc()){
			$arrayVignette[$i] = $ligne;
			$arrayVignette[$i]['statistiques'] = getStatistique($DB, $arrayVignette[$i]['idStatistique']);
			$i++;
		}

		mysqli_free_result($resultat);

		return $arrayVignette;
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
		$stmt = mysqli_prepare($DB, "SELECT nomEtat, nom, prenom, niveau, age, nomRace, nomClasse, nomGenre, pv, pvMax, armure, idStatistique, lore FROM jdrPersonnage NATURAL JOIN jdrEtat NATURAL JOIN jdrRace NATURAL JOIN jdrClasse NATURAL JOIN jdrGenre WHERE idPersonnage = ? ");
		mysqli_stmt_bind_param($stmt, 'i', $idPersonnage);
		mysqli_execute($stmt);
		$resultat = mysqli_stmt_bind_result($stmt, $etat, $nom, $prenom, $niveau, $age, $race, $classe, $genre, $pv, $pvMax, $armure, $idStatistique, $lore);
		
		$personnage = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
			
			$personnage["etat"] = $etat;
			$personnage["nom"] = $nom;
			$personnage["prenom"] = $prenom;
			$personnage["niveau"] = $niveau;
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
		$personnage["competences"] = getArrayCompetence($DB, $idPersonnage);
		$personnage["traits"] = getArrayTrait($DB, $idPersonnage);
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
		$resultat = mysqli_stmt_bind_result($stmt, $id, $F, $A, $S, $P, $M, $I, $C);
		
		$stats = array();
		
		if($resultat) {
			while(mysqli_stmt_fetch($stmt)){
			$stats["force"] = $F;
			$stats["agilite"] = $A;
			$stats["social"] = $S;
			$stats["perception"] = $P;
			$stats["mental"] = $M;
			$stats["intelligence"] = $I;
			$stats["constitution"] = $C;
			}
		}
		
		return $stats;
	}

	/**
	* Permet de modifier un animal dans la table jdrAnimal de la BD
	* @param $DB
	* @param $nomAnimal
	* @param $idAnimal
	*/
	function updateAnimal($DB, $nomAnimal, $idAnimal){
		$stmt = mysqli_prepare($DB, "UPDATE jdrAnimal SET nomAnimal = ? WHERE idAnimal = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomAnimal, $idAnimal);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une aptitude dans la table jdrAptitude de la BD
	* @param $DB
	* @param $estUneCompetence
	* @param $idPersonnage
	* @param $nomAptitude
	* @param $descriptionAptitude
	* @param $idAptitude
	*/
	function updateAptitude($DB, $estUneCompetence, $idPersonnage, $nomAptitude, $descriptionAptitude, $idAptitude){
		$stmt = mysqli_prepare($DB, "UPDATE jdrAptitude SET estUneCompetence = ?, idPersonnage = ?, nomAptitude = ?, descriptionAptitude = ? WHERE idAptitude = ?");
		mysqli_stmt_bind_param($stmt, 'iissi', $estUneCompetence, $idPersonnage, $nomAptitude, $descriptionAptitude, $idAptitude);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un chapitre dans la table jdrChapitre de la BD
	* @param $DB
	* @param $contenu
	* @param $date
	*/
	function updateChapitre($DB, $contenu, $date){
		$stmt = mysqli_prepare($DB, "UPDATE jdrChapitre SET contenu = ? WHERE date = ?");
		mysqli_stmt_bind_param($stmt, 'ss', $contenu, $date);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une classe dans la table jdrClasse de la BD
	* @param $DB
	* @param $nomClasse
	* @param $idClasse
	*/
	function updateClasse($DB, $nomClasse, $idClasse){
		$stmt = mysqli_prepare($DB, "UPDATE jdrClasse SET nomClasse = ? WHERE idClasse = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomClasse, $idClasse);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un état dans la table jdrEtat de la BD
	* @param $DB
	* @param $nomEtat
	* @param $idEtat
	*/
	function updateEtat($DB, $nomEtat, $idEtat){
		$stmt = mysqli_prepare($DB, "UPDATE jdrEtat SET nomEtat = ? WHERE idEtat = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomEtat, $idEtat);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un état dans la table jdrEtat de la BD
	* @param $DB
	* @param $idPersonnage
	* @param $nomFamilier
	* @param $pvFamilier
	* @param $pvMaxFamilier
	* @param $armureFamilier
	* @param $idStatistique
	* @param $descriptionFamilier
	* @param $idFamilier
	*/
	function updateFamilier($DB, $idPersonnage, $nomFamilier, $pvFamilier, $pvMaxFamilier, $armureFamilier, $idStatistique, $descriptionFamilier, $idFamilier){
		$stmt = mysqli_prepare($DB, "UPDATE jdrFamilier SET idPersonnage = ?, nomFamilier = ?, pvFamilier = ?, pvMaxFamilier = ?, armureFamilier = ?, idStatistique = ?, descriptionFamilier = ? WHERE idFamilier = ?");
		mysqli_stmt_bind_param($stmt, 'isiiiisi', $idPersonnage, $nomFamilier, $pvFamilier, $pvMaxFamilier, $armureFamilier, $idStatistique, $descriptionFamilier, $idFamilier);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un genre dans la table jdrGenre de la BD
	* @param $DB
	* @param $nomGenre
	* @param $idGenre
	*/
	function updateGenre($DB, $nomGenre, $idGenre){
		$stmt = mysqli_prepare($DB, "UPDATE jdrGenre SET nomGenre = ? WHERE idGenre = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomGenre, $idGenre);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un inventaire dans la table jdrInventaire de la BD
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
	* @param $idObjet
	*/
	function updateInventaire($DB, $idPersonnage, $idTypeInventaire, $nomObjet, $idTypeObjet, $degatObjet, $protectionObjet, $contenuObjet, $quantiteObjet, $idAnimal, $descriptionObjet, $idObjet){
		$stmt = mysqli_prepare($DB, "UPDATE jdrInventaire SET idPersonnage = ?, idTypeInventaire = ?, nomObjet = ?, idTypeObjet = ?, degatObjet = ?, protectionObjet = ?, contenuObjet = ?, quantiteObjet = ?, idAnimal = ?, descriptionObjet = ? WHERE idObjet = ?");
		mysqli_stmt_bind_param($stmt, 'iisiiisiisi', $idPersonnage, $idTypeInventaire, $nomObjet, $idTypeObjet, $degatObjet, $protectionObjet, $contenuObjet, $quantiteObjet, $idAnimal, $descriptionObjet, $idObjet);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un personnage dans la table jdrPersonnage de la BD
	* @param $DB
	* @param $idEtat
	* @param $nom
	* @param $prenom
	* @param $niveau
	* @param $age
	* @param $idRace
	* @param $idClasse
	* @param $idGenre
	* @param $pv
	* @param $pvMax
	* @param $armure
	* @param $idStatistique
	* @param $lore
	* @param $idPersonnage
	*/
	function updatePersonnage($DB, $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore, $idPersonnage){
		$stmt = mysqli_prepare($DB, "UPDATE jdrPersonnage SET idEtat = ?, nom = ?, prenom = ?, niveau = ?, age = ?, idRace = ?, idClasse = ?, idGenre = ?, pv = ?, pvMax = ?, armure = ?, idStatistique = ?, lore = ? WHERE idPersonnage = ?");
		mysqli_stmt_bind_param($stmt, 'issiiiiiiiiisi', $idEtat, $nom, $prenom, $niveau, $age, $idRace, $idClasse, $idGenre, $pv, $pvMax, $armure, $idStatistique, $lore, $idPersonnage);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une race dans la table jdrRace de la BD
	* @param $DB
	* @param $nomRace
	* @param $idRace
	*/
	function updateRace($DB, $nomRace, $idRace){
		$stmt = mysqli_prepare($DB, "UPDATE jdrRace SET nomRace = ? WHERE idRace = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomRace, $idRace);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier une statistique dans la table jdrStatistique de la BD
	* @param $DB
	* @param $F pour la force
	* @param $A pour l'agilité
	* @param $S pour le social
	* @param $P pour la perception
	* @param $M pour le mental
	* @param $I pour l'intelligence
	* @param $C pour la constitution
	* @param $idStatistique
	*/
	function updateStatistique($DB, $F, $A, $S, $P, $M, $I, $C, $idStatistique){
		$stmt = mysqli_prepare($DB, "UPDATE jdrStatistique SET F = ?, A = ?, S = ?, P = ?, M = ?, I = ?, C = ? WHERE idStatistique = ?");
		mysqli_stmt_bind_param($stmt, 'iiiiiiii', $F, $A, $S, $P, $M, $I, $C, $idStatistique);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un type d'inventaire dans la table jdrTypeInventaire de la BD
	* @param $DB
	* @param $nomTypeInventaire
	* @param $idTypeInventaire
	*/
	function updateTypeInventaire($DB, $nomTypeInventaire, $idTypeInventaire){
		$stmt = mysqli_prepare($DB, "UPDATE jdrTypeInventaire SET nomTypeInventaire = ? WHERE idTypeInventaire = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomTypeInventaire, $idTypeInventaire);
		mysqli_execute($stmt);
	}

	/**
	* Permet de modifier un type d'objet dans la table jdrTypeObjet de la BD
	* @param $DB
	* @param $nomTypeObjet
	* @param $idTypeObjet
	*/
	function updateTypeObjet($DB, $nomTypeObjet, $idTypeObjet){
		$stmt = mysqli_prepare($DB, "UPDATE jdrTypeObjet SET nomTypeObjet = ? WHERE idTypeObjet = ?");
		mysqli_stmt_bind_param($stmt, 'si', $nomTypeObjet, $idTypeObjet);
		mysqli_execute($stmt);
	}
>>>>>>> f167a144530f0ea10742f45c234de58b0c9e4871
?>