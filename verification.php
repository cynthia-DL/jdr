<?php
	session_start();
	include './php/fonctions.php';
	if(isset($_POST['username']) && isset($_POST['password'])){
		$DB = generateDb();
		$username = $_POST['username']; 
		$password = $_POST['password'];
		
		if($username !== "" && $password !== ""){
			$stmt = mysqli_prepare($DB, "SELECT * FROM jdrUtilisateur WHERE nomUtilisateur = ?");
			mysqli_stmt_bind_param($stmt, 's', $username);
			mysqli_execute($stmt);
			$resultat = mysqli_stmt_bind_result($stmt, $idUtilisateur, $nomUtilisateur, $mdpUtilisateur);
			
			mysqli_stmt_fetch($stmt);

			if($password == $mdpUtilisateur){ // Le mot de passe rentré est le bon
				$_SESSION['username'] = $username;
				header('Location: index.php');
			}else{
				header('Location: connexion.php?erreur=1'); // Utilisateur ou mot de passe incorrect
			}
		}else{
			header('Location: connexion.php?erreur=2'); // Utilisateur ou mot de passe vide
		}
	}else{
		header('Location: connexion.php');
	}
	closeDb($DB); // On ferme la connexion avec la BD
?>