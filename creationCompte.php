<!DOCTYPE html>
<?php
    session_start();
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>Gestionnaire de JDR</title>

		<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	</head>
	<body>
		<div class="row text-center">
			<form class="mx-auto col-6" action="confirmationCreationCompte.php" method="POST">
				<h1 class="text-primary">Créer un compte</h1>
				<br>
				<div class="form-group">
					<label class="text-primary" for="name">Nom d'utilisateur</label>
					<input type="text" id="name" class="form-control" placeholder="Entrer le nom d'utilisateur" name="username" required>
				</div>
				<div class="form-group">
					<label class="text-primary" for="password">Mot de passe</label>
					<input type="password" id="password" class="form-control" placeholder="Entrer le mot de passe" name="password" required>
				</div>
				<div class="form-group">
					<label class="text-primary" for="password">Confirmation mot de passe</label>
					<input type="password" id="confirmPassword" class="form-control" placeholder="Entrer le mot de passe" name="confirmPassword" required>
				</div>
				<button class="btn btn-primary" type="submit" id='submit'>
					<i class="fa fa-sign-in" aria-hidden="true"></i>
					Créer un compte
				</button>
				<?php
					if(isset($_GET['erreur'])){
						$err = $_GET['erreur'];
						if($err==1){
							echo "<p class='text-danger'>Le mot de passe et la confirmation du mot de passe ne sont pas les mêmes</p>";
						}
						else if($err==2){
							echo "<p class='text-danger'>Utilisateur ou mot de passe ou confirmation du mot de passe vide</p>";
						}
					}
				?>
			</form>
		</div>
	</body>
</html>