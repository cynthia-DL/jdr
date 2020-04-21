<?php
session_start();
include './fonctions.php';

$bdd = generateDb();

switch ($_GET['case']) {
	case 'personnage':
		deletePersonnage($bdd, intval($_GET['id']));
		break;
	case 'all_animal':
		deleteAnimal($bdd, intval($_GET['id']));
		break;
	case 'all_classe':
		deleteClasse($bdd, intval($_GET['id']));
		break;
	case 'all_etat':
		deleteEtat($bdd, intval($_GET['id']));
		break;
	case 'all_genre':
		deleteGenre($bdd, intval($_GET['id']));
		break;
	case 'all_race':
		deleteRace($bdd, intval($_GET['id']));
		break;
	case 'all_type_inventaire':
		deleteTypeInventaire($bdd, intval($_GET['id']));
		break;
	case 'all_type_objet':
		deleteTypeObjet($bdd, intval($_GET['id']));
		break;
	case 'storyline':
		deleteChapitre($bdd, $_GET['id']);
		break;
	case 'aptitude':
		deleteAptitude($bdd, intval($_GET['id']));
		break;
	case 'objet':
		deleteObjet($bdd, intval($_GET['id']));
		break;
	case 'familier':
		deleteFamilier($bdd, intval($_GET['id']));
		break;

}

closeDb($bdd);
?>