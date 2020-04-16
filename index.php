<!DOCTYPE html>
<?php
	session_start();
	//$_SESSION = array();
	if(!isset($_SESSION['username'])){
		header('Location: ./connexion.php');
		exit;
	}else{
		echo $_SESSION['username'];
	}
?>
<html>
<head>
	<meta charset="utf-8">
	<title>Gestionnaire de JDR</title>

	<link rel="stylesheet" href="https://bootswatch.com/4/solar/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


	<script src="./tags/App.riot" type="riot"></script>
	<script src="./tags/Chart.riot" type="riot"></script>
	<script src="./tags/Chapitre.riot" type="riot"></script>
	<script src="./tags/Fiche.riot" type="riot"></script>
	<script src="./tags/form/add/NewAptitude.riot" type="riot"></script>
	<script src="./tags/form/add/NewChapitre.riot" type="riot"></script>
	<script src="./tags/form/add/NewFamilier.riot" type="riot"></script>
	<script src="./tags/form/add/NewObjet.riot" type="riot"></script>
	<script src="./tags/form/add/NewPersonnage.riot" type="riot"></script>
	<script src="./tags/Vignette.riot" type="riot"></script>

	<script src="https://cdn.jsdelivr.net/npm/riot@4/riot+compiler.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
	<script src="./js/radarChart.js"></script>
	<script src="./js/serviceAjax.js"></script>
</head>
<body>
	<app></app>
		<script>
			riot.compile().then(()=>{

			riot.install(function(component){
				if (component.name == "app"){
					component.sa = makeServiceAjax()
				}
			});
			riot.mount('newpersonnage');
			riot.mount('newchapitre');
			riot.mount('newfamilier');
			riot.mount('newobjet');
			riot.mount('newaptitude');
			riot.mount('vignette');
			riot.mount('chapitre');
			riot.mount('chart');
			riot.mount('fiche');
			riot.mount('app');
		})
	</script>
</body>
</html>
