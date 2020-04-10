<?php
include './fonctions.php';

$bdd = generateDb();

if ($_GET['case'] == 'personnage'){
	$res = getPersonnage($bdd, intval($_GET['id']));
} else if ($_GET['case'] == 'all_animal'){
	$res = getArrayAnimal($bdd);
} else if ($_GET['case'] == 'all_classe'){
	$res = getArrayClasse($bdd);
} else if ($_GET['case'] == 'all_etat'){
	$res = getArrayEtat($bdd);
} else if ($_GET['case'] == 'all_genre'){
	$res = getArrayGenre($bdd);
} else if ($_GET['case'] == 'all_race'){
	$res = getArrayRace($bdd);
} else if ($_GET['case'] == 'all_type_inventaire'){
	$res = getArrayTypeInventaire($bdd);
} else if ($_GET['case'] == 'all_type_objet'){
	$res = getArrayTypeObjet($bdd);
} else 
if ($_GET['case'] == 'storyline'){
	$res = getArrayChapitre($bdd);
}

echo json_encode($res);
closeDb($bdd);
?>