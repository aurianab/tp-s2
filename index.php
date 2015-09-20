<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>PHP 1 - TP S2 | Auriana Bastian</title>
		<meta charset="UTF-8" />

		<link rel="stylesheet" href="_styles/style.css">
	
		<link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>

	</head>
	<body>

		<div class="container">

			<h1>Maman, je peux emprunter la voiture ?</h1>
			<form action="" method="GET">

				<fieldset>

					<legend>Tu as déjà demandé à ton pére ?</legend>

					<input name="question1" type="radio" value="true" required <?php if( $_GET['question1']=='true'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="oui">Oui</label>

					<input name="question1" type="radio" value="false" required <?php if( $_GET['question1']=='false'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="non">Non</label>
					
				</fieldset>

				<fieldset>

					<legend>Pour aller loin ?</legend>

					<input name="question2" type="radio" value="true" required <?php if( $_GET['question2']=='true'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="oui">Oui</label>

					<input name="question2" type="radio" value="false" required <?php if( $_GET['question2']=='false'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="non">Non</label>

				</fieldset>

				<fieldset>

					<legend>Tu vas boire de l'alcool ?</legend>

					<input name="question3" type="radio" value="true" required <?php if( $_GET['question3']=='true'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="oui">Oui</label>

					<input name="question3" type="radio" value="false" required <?php if( $_GET['question3']=='false'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="non">Non</label>

				</fieldset>

				<fieldset>

					<legend>Il y aura beaucoup de monde ?</legend>

					<input name="question4" type="radio" value="true" required <?php if( $_GET['question4']=='true'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="oui">Oui</label>

					<input name="question4" type="radio" value="false" required <?php if( $_GET['question4']=='false'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="non">Non</label>

				</fieldset>

				<fieldset>

					<legend>Tu feras l'essence ?</legend>

					<input name="question5" type="radio" value="true" required <?php if( $_GET['question5']=='true'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="oui">Oui</label>

					<input name="question5" type="radio" value="false" required <?php if( $_GET['question5']=='false'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="non">Non</label>

				</fieldset>

				<fieldset>

					<legend>Tu l'abîmeras ?</legend>

					<input name="question6" type="radio" value="true" required <?php if( $_GET['question6']=='true'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="oui">Oui</label>

					<input name="question6" type="radio" value="false" required <?php if( $_GET['question6']=='false'){ echo 'checked="checked"';} ?>>
					<label for="answer" class="non">Non</label>

				</fieldset>

				<input type="submit" name="send" value="Maman répond" id="btn">

			</form>

			<?php

				$question1 = $_GET['question1'];
				$question2 = $_GET['question2'];
				$question3 = $_GET['question3'];
				$question4 = $_GET['question4'];
				$question5 = $_GET['question5'];
				$question6 = $_GET['question6'];

				function daccord() {
					echo '<p class="texte yes">Voilà les clés !</p><img src="_images/bmw.jpg" class="lavoiture" alt="voiture"><style>form{display:none;}</style>';
				}

				function pasdaccord() {
					echo '<p class="texte no">Non, pas aujourd\'hui !</p><img src="_images/nobmw.jpg" class="novoiture" alt="pas de voiture">';
				}

				function essai() {
					echo '<p class="texte no">Réfléchis-y et retente.</p><img src="_images/nobmw.jpg" class="novoiture" alt="pas de voiture">';
				}

				if (isset($_GET) && count($_GET)>0){
					if( ($question1 == "true") && ($question2 == "false") && ($question3 == "false") && ($question4 == "false") && ($question5 == "true") && ($question6 == "false") ){
						echo daccord();

					} else if( ($question1 == "true") && ($question2 == "false") && ($question3 == "false") && ($question4 == "true") || ($question5 == "false") && ($question6 == "false") ) {
						echo essai(); 

					} else {
						echo pasdaccord();
					}
				}

				

			?>

		</div>

		<footer>

			<p>Auriana Bastian . B2G22</p>

		</footer>

 </body>
</html>