<?php
include './fonctions.php';
$bdd = generateDb();

switch ($_GET['case']) {
	case 'personnage':
		$idStat = addStatistique($bdd, $_GET["force"], $_GET["agilite"], $_GET["social"], $_GET["perception"], $_GET["mental"], $_GET["intelligence"], $_GET["constitution"]);
		addPersonnage($bdd, 2, $_GET["nom"], $_GET["prenom"], $_GET["niveau"], $_GET["age"], $_GET["race"], $_GET["classe"], $_GET["genre"], $_GET["pv"], $_GET["pv"], 0, $idStat, $_GET["lore"]);
		break;
	
	default:
		$res = false;
		break;
}
closeDb($bdd);
?>