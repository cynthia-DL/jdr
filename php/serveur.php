<?php
/**
* Cette fonction permet de fermer une base de donnée
* @param $DB la base de donnée a fermer.
*/
function closeDb($DB){
	mysqli_close($DB);
}

/**
* Cette fonction permet de générer une base de donnée.
* @return un lien vers la base de donnée, rien sinon
*/
function generateDb(){
	$DB=mysqli_connect("xxx","xxx","xxx","xxx");
	if(!$DB){
		die("<p>connexion impossible</p>");
	}
	else return $DB;
}

/**
* Permet de recuperer tout les etats
* @param $DB
* @return array de touts les etats possibles
*/
function getArrayEtat($DB) {
	$res = mysqli_query($DB, "SELECT nomEtat from jdrEtat");
	$res = mysqli_stmt_bind_result($stmt, $IDPkm);
	$arrayEtat = array();
	
	if($res->num_rows != 0) {
		while($row = $res->fetch_assoc){
			array_push($arrayEtat, $row);
		}
	}
	return $arrayEtat;
}
?>