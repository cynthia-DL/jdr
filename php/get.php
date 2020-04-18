<?php
session_start();
include './fonctions.php';

$bdd = generateDb();

switch ($_GET['case']) {
	case 'personnage':
		$res = getPersonnage($bdd, intval($_GET['id']));
		break;
	case 'all_animal':
		$res = getArrayAnimal($bdd);
		break;
	case 'all_classe':
		$res = getArrayClasse($bdd);
		break;
	case 'all_etat':
		$res = getArrayEtat($bdd);
		break;
	case 'all_genre':
		$res = getArrayGenre($bdd);
		break;
	case 'all_race':
		$res = getArrayRace($bdd);
		break;
	case 'all_type_inventaire':
		$res = getArrayTypeInventaire($bdd);
		break;
	case 'all_type_objet':
		$res = getArrayTypeObjet($bdd);
		break;
	case 'storyline':
		$res = getArrayChapitre($bdd);
		break;
	case 'vignette':
		$res = getArrayVignette($bdd);
		break;
	default:
		$res = [];
		break;
}

echo json_encode($res);
closeDb($bdd);
?>