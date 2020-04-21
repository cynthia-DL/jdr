<?php
include './fonctions.php';
$bdd = generateDb();

switch ($_GET['case']) {
		case 'aptitude':
		updateAptitude($bdd, $_GET["estUneCompetence"], $_GET["idPersonnage"], $_GET["nom"], $_GET["description"], $_GET["idAptitude"]);
		break;

		case 'objet' :
		updateInventaire($bdd, $_GET["idPersonnage"], $_GET["idTypeInventaire"], $_GET["nomObjet"], $_GET["idTypeObjet"], $_GET["degatObjet"], $_GET["protectionObjet"], $_GET["contenuObjet"], $_GET["quantiteObjet"], $_GET["idAnimal"], $_GET["descriptionObjet"], $_GET["idObjet"]);
		break;

		case 'chapitre' :
		updateChapitre($bdd, $_GET["contenu"], $_GET["id"]);
		break;

		case 'familier' :
		updateStatistique($bdd, $_GET["force"], $_GET["agilite"], $_GET["social"], $_GET["perception"], $_GET["mental"], $_GET["intelligence"], $_GET["constitution"], $_GET["idStatistique"]);
		updateFamilier($bdd, $_GET["idPersonnage"], $_GET["nom"], $_GET["pv"], $_GET["pvMax"], $_GET["armure"], $_GET["idStatistique"], $_GET["description"], $_GET["idFamilier"]);
		break;
}

closeDb($bdd);
?>