<?php
include './fonctions.php';

$bdd = generateDb();

if ($_GET['case'] == 'story_line'){
	$res = getArrayChapitre($bdd);
} else if ($_GET['case'] == 'personnage'){
	$res = getPersonnage($bdd, intval($_GET['id']));
}

echo json_encode($res);
closeDb($bdd);
?>