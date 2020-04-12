<?php
include './fonctions.php';
$bdd = generateDb();

switch ($_GET['case']) {
	case 'personnage':
		$idStat = addStatistique($bdd, $_GET["force"], $_GET["agilite"], $_GET["social"], $_GET["perception"], $_GET["mental"], $_GET["intelligence"], $_GET["constitution"]);
		addPersonnage($bdd, 2, $_GET["nom"], $_GET["prenom"], $_GET["niveau"], $_GET["age"], $_GET["race"], $_GET["classe"], $_GET["genre"], $_GET["pv"], $_GET["pv"], 0, $idStat, $_GET["lore"]);
		break;

	case 'objet':
		addObjet($bdd, $_GET["idPersonnage"], $_GET["typeInventaire"], $_GET["nom"], $_GET["typeObjet"], $_GET["degats"], $_GET["protection"], $_GET["contenu"], $_GET["quantite"], $_GET["typeAnimal"], $_GET["description"]);
		break;

	case 'chapitre':
		addChapitre($bdd, $_GET["contenu"]);
		break;

	case 'familier':
		$idStat = addStatistique($bdd, $_GET["force"], $_GET["agilite"], $_GET["social"], $_GET["perception"], $_GET["mental"], $_GET["intelligence"], $_GET["constitution"]);
		addFamilier($bdd, $_GET["idPersonnage"], $_GET["nom"], $_GET["pv"], $_GET["pv"], $_GET["armure"], $idStat, $_GET["description"]);
		break;

	case 'aptitude':
		addAptitude($bdd, $_POST["estUneCompetence"], $_POST["idPersonnage"], $_POST["nom"], $_POST["description"]);
		break;
	
	default:
		$res = false;
		break;
}
closeDb($bdd);
?>