<!doctype html>
<html lang="fr">

	<head>

		<meta charset="UTF-8">
		<title>Devoir 2 - PHP - Preter sa voiture</title>
	
		<link rel="stylesheet" href="style/style.css" type="text/css">

	</head>
	
	<body>
		<div class="container">
			<h1>Papa, prête moi ta voiture ! </h1>
			<p>Rempli ce formulaire et trouve la <span class="bold">combinaison magique</span> qui te premettra d'avoir la voiture de ton père en pret pour une soirée.</p>
			
			<form action method="get">

				<fieldset>
					<legend>Vas-tu boire de l'acool à cette soirée ? </legend>
						<label for="question1" class="oui">Oui</label>
						<input id="question1" type="radio" name="combi1" value="true" checked <?php if( $_GET['combi1']=='true'){ echo 'checked="checked"';} ?> required>
						<label for="question12" class="non">Non</label>
						<input id="question12" type="radio" name="combi1" value="false" <?php if( $_GET['combi1']=='false'){ echo 'checked="checked"';} ?> required>
				</fieldset>

				<fieldset>
					<legend>Connais-tu Bob ?</legend>
						<label for="question2" class="oui">Oui</label>
						<input id="question2"type="radio" name="combi2" value="true" checked <?php if( $_GET['combi2']=='true'){ echo 'checked="checked"';} ?> required>
						<label for="question22" class="non">Non</label>
						<input id="question22" type="radio" name="combi2" value="false" <?php if( $_GET['combi2']=='false'){ echo 'checked="checked"';} ?> required>
				</fieldset>
					
				<fieldset>	
					<legend>Est ce qu'il neige ?</legend>
						<label for="question3" class="oui">Oui</label>
						<input id="question3" type="radio" name="combi3" value="true" checked <?php if( $_GET['combi3']=='true'){ echo 'checked="checked"';} ?> required>
						<label for="question32" class="non">Non</label>
						<input id="question32" type="radio" name="combi3" value="false" <?php if( $_GET['combi3']=='false'){ echo 'checked="checked"';} ?> required>
				</fieldset>

				<fieldset>
					<legend>As tu de l'argent pour mettre de l'essence? </legend>
						<label for="question4" class="oui">Oui</label>
						<input id="question4" type="radio" name="combi4" value="true" checked <?php if( $_GET['combi4']=='true'){ echo 'checked="checked"';} ?> required>
						<label for="question42" class="non">Non</label>
						<input id="question42" type="radio" name="combi4" value="false" <?php if( $_GET['combi4']=='false'){ echo 'checked="checked"';} ?> required>
				</fieldset>

				<fieldset>
					<legend>Comptes tu encore aller jusque maastricht?</legend>
						<label for="question5" class="oui">Oui</label>
						<input id="question5" type="radio" name="combi5" value="true" checked <?php if( $_GET['combi5']=='true'){ echo 'checked="checked"';} ?> required>
						<label for="question52" class="non">Non</label>
						<input id="question52" type="radio" name="combi5" value="false" <?php if( $_GET['combi5']=='false'){ echo 'checked="checked"';} ?> required>
				</fieldset>
				<fieldset>
					<legend>Vas-tu ramener tes copains qui boivent toujours trop ?</legend>
						<label for="question6" class="oui">Oui</label>
						<input id="question6" type="radio" name="combi6" value="true" checked <?php if( $_GET['combi6']=='true'){ echo 'checked="checked"';} ?> required>
						<label for="question61" class="non">Non</label>
						<input id="question61" type="radio" name="combi6" value="false" <?php if( $_GET['combi6']=='false'){ echo 'checked="checked"';} ?>required>
				</fieldset>


				<input type="submit" value="Verdict" class="verdict">
			
			</form>
		</div>
		
		<?php
			

			//Mes fonctions 
				//Fonction qui approuve le pret de la voiture
				function jePrete() {
					echo "<div class='reponse'><img class='bmw' src='bmw.png' alt='Image illustrant la BMW' /><p>Combinaison magique trouvée! Voici la voiture !</p></div>" ;
				}

				//Fontion qui approuve le pret de la voiture avec condition
				function jeDisNon() {
					echo "<p class='reponse'>Essaies encore, ton père ne te pretera pas sa voiture si facilement !</p>" ;	
				}	
			
				//Fonction qui désapprouve le pret de la voiture.
				function jeConditionne() {
					echo "<p class='reponse'>Ok pour cette fois, mais n'oublies pas de me ramener quelque chose alors !</p>" ;				
				}

			//Création des variables boléènnes et récupération des données entrées dans le formulaire
			$combi1 = $_GET['combi1'];
			$combi2 = $_GET['combi2'];
			$combi3 = $_GET['combi3'];
			$combi4 = $_GET['combi4'];
			$combi5 = $_GET['combi5'];
			$combi6 = $_GET['combi6'];

			//IF pour lancer les fonction qui donnent le vedict et vérification des variables boléènnes.
			if ($combi1 == "false" && $combi2 == "true" && $combi3 == "false"  && $combi4 == "true" && $combi5 == "false"  && $combi6 == "false") {
				echo jePrete() ;				
			} else if ($combi1 == "false" && $combi2 == "true" && $combi3 == "false"  && $combi4 == "true" && $combi5 =="true" && $combi6 == "false") {
				echo jeConditionne() ;
			} else{
				echo jeDisNon() ;
			}



		?>
				

		<footer>
			<p>Morgane Van Oncem - B2G22 - <a href="">Github</a></p>
		</footer>

	</body>

</html>