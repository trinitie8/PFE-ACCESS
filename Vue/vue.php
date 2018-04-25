<?php
function afficherAccueil(){
	$contenu='';
	require_once('acceuil.php');
	}
	
function setCharSetTo($charset){
	echo'<meta charset="'.$charset.'">';
}
	
function setCharSet(){
	echo'<meta charset="UTF-8">';
}
	
function afficherErreur($erreur){
	$contenu='<p>'.$erreur.'</p> <p> Par mesure de sécurité vous avez été déconnecté. </p>';
	require_once('acceuil.php');
	}

function afficherMenu(){
	echo '	
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Gestion/Recherche de doctorants" name="go_To_Gestion_Doctorants" />
	<input type="submit" value="Gestion des informations saisissables" name="go_To_Gestion_Saisies" />
	</form>'
	;
	}
	
function afficherGestionDoctorant(){
	
}

function afficherGestionSaisies(){

}

function afficherInscription(){
	echo'
			
	<form method="post" action="Doctorant.php">
	<fieldset>
		<legend>Inscription</legend>
		<br/>
		<label for="login" id="log">Nom d\'utilisateur</label>
		<input type="text" id="login" name="login" value=""  size="20" maxlength="20" />
		<br />
		<br/>

		<label for="password">Mot de passe </label>
		<input type="text" id="password" name="password" value="" size="20" maxlength="20" required/>
		<br />
		<br/>

		<label for="grade">Grade </label>
		<input type="text" id="grade" name="grade" value="" size="20" maxlength="20" required/>
		<br />
		<br/>
		
		<input type="submit" value="S\'inscrire" name="inscription" />
		
		<br />
		<br/>
		
		<?php echo $contenu; ?>
		
	</fieldset>
	</form>
	<form method="post" action="Doctorant.php">
		<input type="submit" value="Retour" name="go_To_Accueil" />
	</form>
	';
}

function afficherDeconnexion(){
	echo '
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Deconnexion" name="deconnexion" />
	</form>';

}

function afficherBoutonMenu(){
	echo '
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Retour au menu" name="go_To_Menu" />
	</form>';
}
/*function afficherDivers(){
	echo '<meta charset="UTF-8">
	<head>
		<link href="Contenu/style.css" type="text/css" rel="stylesheet" />
	</head>
<!-- Les liens qui renvoient vers tes <div> -->
<a href="#paragraphe-1">Aller au paragraphe 1</a><br>
<a href="#paragraphe-2">Aller au paragraphe 2</a><br>
<a href="#paragraphe-3">Aller au paragraphe 3</a><br><br>
 
<!-- Maintenant, les paragraphes -->
<div class="container">

<div id="paragraphe-1">
Lorem ipsu blablablabla
</div>
 
<div id="paragraphe-2">
Cotnenu de la page 2
</div>
 
<div id="paragraphe-3">
PARAGRAPHE 3
</div>

</div>';
	}*/

function afficherMessage($var){
	echo '<p>'.$var.'</p>';
	}
