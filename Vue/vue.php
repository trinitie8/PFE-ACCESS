<?php
function afficherAccueil(){
	$contenu='';
	require_once('acceuil.php');
	}
	
function afficherErreur($erreur){
	$contenu='<p>'.$erreur.'</p> <p> Par mesure de sécurité vous avez été déconnecté. </p>';
	require_once('acceuil.php');
	}

function afficherMenu(){
	echo '<meta charset="UTF-8">
	<head>
		<link href="Contenu/style.css" type="text/css" rel="stylesheet" />
	</head>
	
	<div id="menu">
			<ul id="onglets">
				<li class="active"><a href="Doctorant.php"> Accueil </a></li>
				<li ><a href="acceuil.php"> Forums </a></li>
				<li><a href="#paragraphe2"> Livre dor </a></li>
				<li><a href="#paragraphe3"> Léquipe </a></li>
				<li><a href="Inscription.html"> Sinscrire </a></li>
				<li><a href="Connexion.html"> Se connecter </a></li>
			</ul>
	</div>
			
	<div id="container1">
			<div id="paragraphe2">
				<br/>
				<label for="login" id="log">Nom d\'utilisateur</label>
				<input type="text" id="login" name="login" value=""  size="20" maxlength="20" />
				<br />
				Cotnenu de la page 2 bla 
				bla <br/> bli <br/> <br/> bleu <br/>
			</div>
 
			<div id="paragraphe3">
				<input type="radio" id="contactChoice1" name="contact" value="email">
				<label for="contactChoice1">Email</label>
		
				<input type="radio" id="contactChoice2" name="contact" value="telephone">
				<label for="contactChoice2">Téléphone</label>

				<input type="radio" id="contactChoice3" name="contact" value="courrier">
				<label for="contactChoice3">Courrier</label>
				PARAGRAPHE 3 <br/> rouge <br/> blouge <br/> <br/> heuuuu <br/> essai <br/> <br/> bref.... <br/> ciao <br/> bon appetit <br/>
			</div>
			
		</div>';
	}

function afficherDivers(){
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
	}

function afficherMessage($var){
	echo $var;
	}
