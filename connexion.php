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
		<form class="mx-auto col-6" action="verification.php" method="POST">
		<h1 class="text-primary">Connexion</h1>
		<br>
		<div class="form-group">
	      <label class="text-primary" for="name">Nom d'utilisateur</label>
	      <input type="text" id="name" class="form-control" placeholder="Entrer le nom d'utilisateur" name="username" required>
	    </div>
	    <div class="form-group">
	      <label class="text-primary" for="password">Mot de passe</label>
		  <input type="password" id="password" class="form-control" placeholder="Entrer le mot de passe" name="password" required>
	    </div>
	    <button class="btn btn-primary" type="submit" id='submit'>
	    	<i class="fa fa-sign-in" aria-hidden="true"></i>
	    	Connexion
	    </button>
		<?php
			if(isset($_GET['erreur'])){
				$err = $_GET['erreur'];
				if($err==1 || $err==2){
					echo "<p class='text-danger'>Utilisateur ou mot de passe incorrect</p>";
				}
            }
        ?>
    </form>
	</div>
</body>
</html>