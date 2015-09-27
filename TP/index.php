<!doctype html>
<html lang="fr">

	<head>

		<meta charset="UTF-8">
		<title>Devoir 3 - PHP - S'insrire au cerle</title>
	
		<link rel="stylesheet" href="style.css" type="text/css">
		<link rel="icon" type="image/png" href="favicon.png" />

		<?php include('meta.inc.php'); ?>
	</head>
	
	<body>


		<?php 

			if($_GET){
				//Déclaration des variables
                	$email = trim(strip_tags($_GET['email']));
                	$prenom= trim(strip_tags($_GET['prenom']));
                	$nom = trim(strip_tags($_GET['nom']));
                	$jour = $_GET['jour'];
                	$mois = $_GET['mois'];
                	$annee = $_GET['annee'];
                	$message = 'Formulaire pour un nouveau bleu:'."\r\n".'Prénom:'.$prenom."\r\n".'Nom:'.$nom."\r\n".'Adresse email:'.$email."\r\n".'Adresse postale: '.$adresse.' '.$ville.' '.$commune."\r\n".'Date de naissance: '.$jour." ".$mois." ".$annee."\r\n"."Pourquoi devenir bleu? ".$multiple ; 

                //Déclaration de la fonction pour approuver que l'adresse mail est valide
					function valid_email($email){
						return filter_var($email, FILTER_VALIDATE_EMAIL);
					}

				//Déclaration des conditions
             		if($prenom == ''){
                    	echo "<div class='erreur'><p class='echo'>Attention, tu as oublié de nous dire ton <span class='bold'>nom</span>.</p></div>";
                    }

					if($nom == ''){
                        echo "<div class='erreur'><p class='echo'>Comment t'appelles tu ? Tu ne nous as pas donné ton <span class='bold'>prénom</span>.</p></div>";
                    }

                    if(($jour == '') || ($mois == '') || ($annee == '')){
                        echo "<div class='erreur'><p class='echo'>Merci de remplir correctement ta <span class='bold'>date de naissance </span>correctement: jj/mm/aa.</p></div>";
                    }

                    if(($jour != '') && ($mois != '') && ($annee != '') && ($prenom != '') && ($nom != '') && (valid_email($email) != '')){
                    		$result = mail('movanoncem@gmail.com', 'Formulaire pour un nouveau bleu', $message);
                    		echo "<div class='erreur'><p class='echo'>Merci jeune bleu, nous te contacterons rapidement. <span class='bold'>Santé!</span> </p></div>";                       
                   		}else{
                    		echo "<div class='erreur'><p class='echo'>Peux tu entrer une <span class='bold'>adresse mail</span> valide, par exemple : morgane@formulaire.be</p></div>";
                    		$result = true;
                    }

                    if($result == false){
						echo "<div class='erreur'><p class='echo'>Oups, il y a eut un problème avec l'envoi de votre message, veuillez remplir à nouveau le formulaire.</p></div>";
					}
			}
				
            ?>




		<div class="container">
			<h1>Hello nouveau bleu ! </h1>
			<img src="opengraphImage.png" alt="Une petite bière ?">

			<p>Jeune padawan, si tu désires entrer dans le <span class="bold">cercle magique</span> et, à l'occasion, pouvoir siroter quelques <span class="bold">bières</span>, je te conseilles de remplir ce formulaire! </p>
			
			<form action method="get">

				<label for="nom">Nom *</label> 
				<input name="nom" type="text" value=""/>

				<label for="prenom">Prenom *</label> 
				<input name="prenom" type="text" value=""/>

				<label for="email">Adresse email *</label> 
				<input name="email" type="text" value=""/>

				<label for="date">Date de naissance</label> 
				<?php  include('date.inc.php');?>

				<label for="adresse">Adresse postale, n°</label> 
				<input name="adresse" type="text" value=""/>

				<label for="ville">Ville</label> 
				<input name="ville" type="text" value=""/>

				<label for="commune">Commune</label> 
				<input name="commune" type="text" value=""/>

				<label for="multiple">Pourquoi veux tu devenir un bleu ?</label> 
				<fieldset><input name="multiple" type="radio" value="a" class="radio" checked/>J'aimerais boire beaucoup de bières</fieldset>
				<fieldset><input name="multiple" type="radio" value="b" class="radio"/>Pour découvrir le baptème</fieldset>
				<fieldset><input name="multiple" type="radio" value="c" class="radio"/>J'aimerais recevoir des bières gratuites au Bunker</fieldset>
				<fieldset><input name="multiple" type="radio" value="d" class="radio"/>Je n'ai pas d'amis</fieldset>
				
				



				<input type="submit" value="Envoyer mon formulaire" class="verdict">
			
			</form>
		</div>
		
		<?php
			

		?>
				

		<footer>
			<p>Morgane Van Oncem - B2G22 - <a>Github</a></p>
		</footer>

	</body>

</html>