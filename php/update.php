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
}

closeDb($bdd);
?>