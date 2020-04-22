<!DOCTYPE html>
<?php
	session_start();
	//$_SESSION = array();
	if(!isset($_SESSION['nomUtilisateur'])){
		header('Location: ./connexion.php');
		exit;
	}else{
		echo "Vous êtes actuellement connecté en tant que ";
		echo $_SESSION['nomUtilisateur'];
		echo " avec comme id : ";
		echo $_SESSION['idUtilisateur'];
		if($_SESSION['estMJ'] == 1){
			echo ". Vous êtes le MJ de ce JDR.";
		}else{
			echo ". Vous êtes un simple joueur de ce JDR.";
		}
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
	<script src="./tags/Vignette.riot" type="riot"></script>

	<script src="./tags/fiche/Aptitude.riot" type="riot"></script>
	<script src="./tags/fiche/Familier.riot" type="riot"></script>
	<script src="./tags/fiche/InfoPersonnage.riot" type="riot"></script>
	<script src="./tags/fiche/Objet.riot" type="riot"></script>

	<script src="./tags/form/add/NewAptitude.riot" type="riot"></script>
	<script src="./tags/form/add/NewChapitre.riot" type="riot"></script>
	<script src="./tags/form/add/NewFamilier.riot" type="riot"></script>
	<script src="./tags/form/add/NewObjet.riot" type="riot"></script>
	<script src="./tags/form/add/NewPersonnage.riot" type="riot"></script>

	<script src="./tags/form/update/UpdateAptitude.riot" type="riot"></script>
	<script src="./tags/form/update/UpdateChapitre.riot" type="riot"></script>
	<script src="./tags/form/update/UpdateFamilier.riot" type="riot"></script>
	<script src="./tags/form/update/UpdateObjet.riot" type="riot"></script>
	<script src="./tags/form/update/UpdatePersonnage.riot" type="riot"></script>

	<script src="https://cdn.jsdelivr.net/npm/riot@4/riot+compiler.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" charset="utf-8"></script>
	<script src="./js/radarChart.js"></script>
	<script src="./js/serviceAjax.js"></script>
</head>
<body>
	<app></app>
		<script>
			var sessionId = '<?php echo $_SESSION['idUtilisateur'];?>';
			var estMJ = '<?php echo $_SESSION['estMJ'];?>';
			riot.compile().then(()=>{

			riot.install(function(component){
				if (component.name == "app" ||
					
					component.name == "vignette" || 
					component.name == "aptitude" || 
					component.name == "chapitre" || 
					component.name == "familier" || 
					component.name == "objet" || 

					component.name == "newaptitude" ||
					component.name == "newchapitre" ||
					component.name == "newfamilier" || 
					component.name == "newobjet" ||
					component.name == "newpersonnage" ||
					
				 
					component.name == "updateaptitude" ||
					component.name == "updatechapitre" || 
					component.name == "updatefamilier" ||
					component.name == "updateobjet" ||
					component.name == "updatepersonnage" ){
					component.sa = makeServiceAjax()
				}
			});
			riot.mount('updateaptitude');
			riot.mount('updatechapitre');
			riot.mount('updatefamilier');
			riot.mount('updateobjet');
			riot.mount('updatepersonnage');

			riot.mount('newpersonnage');
			riot.mount('newchapitre');
			riot.mount('newfamilier');
			riot.mount('newobjet');
			riot.mount('newaptitude');
			
			riot.mount('aptitude');
			riot.mount('familier');
			riot.mount('infopersonnage');
			riot.mount('objet');

			riot.mount('vignette');
			riot.mount('chapitre');
			riot.mount('chart');
			riot.mount('fiche');
			riot.mount('app');
		})
	</script>
</body>
</html>