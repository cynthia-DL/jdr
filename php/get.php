<?php
include './fonctions.php';

$bdd = generateDb();

if ($_GET['case'] == 'story_line'){
	$res = getArrayChapitre($bdd);
}

echo json_encode($res);
closeDb($bdd);
?>