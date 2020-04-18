<?php
include './fonctions.php';
$bdd = generateDb();

switch ($_GET['case']) {
		case 'aptitude':
		updateAptitude($bdd, $_GET["estUneCompetence"], $_GET["idPersonnage"], $_GET["nom"], $_GET["description"], $_GET["idAptitude"]);
		break;
}

closeDb($bdd);
?>