<?php
	session_start();
	include './php/fonctions.php';
	if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['confirmPassword'])){
		$DB = generateDb();
		$username = $_POST['username']; 
		$password = $_POST['password'];
		$confirmPassword = $_POST['confirmPassword'];

		if($password !== $confirmPassword){
			header('Location: creationCompte.php?erreur=1'); // Les 2 mots de passes renseignés ne sont pas les mêmes
		}else{
			if($username !== "" && $password !== "" && $confirmPassword !== ""){
				$passwordHashed = password_hash($password , PASSWORD_BCRYPT);
				$stmt = mysqli_prepare($DB, "INSERT INTO jdrUtilisateur (`nomUtilisateur`, `mdpUtilisateur`, `estMJ`) VALUES (?, ?, 0)");
				mysqli_stmt_bind_param($stmt, 'ss', $username, $passwordHashed);
				mysqli_execute($stmt);
				header('Location: index.php');
			}else{
				header('Location: connexion.php?erreur=2'); // Utilisateur ou mot de passe ou confirmation du mot de passe vide
			}
		}
	}else{
		header('Location: creationCompte.php');
	}
	closeDb($DB); // On ferme la connexion avec la BD
?>