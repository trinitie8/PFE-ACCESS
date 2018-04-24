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
				<li id="active"><a href="#accueil"> Accueil </a></li>
				<li><a href="#doctorant"> Menu des Doctorant </a></li>
				<li><a href="#etat"> Menu états </a></li>
				<li><a href="#stat"> Statistiques </a></li>
				<li><a href="#1"> Sinscrire </a></li>
				<li><a href="#2"> Se connecter </a></li>
			</ul>
	</div>
			
	<div id="container">
			<div id="accueil">
				Bien le bonjour !
			</div>
	
			<div id="doctorant">
				<label for="nomDoctorant" id="nomD">Nom du Doctorant</label>
				<input type="text" id="nomDoctorant" name="nomDoc" value=""  size="20" maxlength="20" />
				
				<label for="prenomDoctorant" id="prenomD">Prénom du Doctorant</label>
				<input type="text" id="prenomDoctorant" name="prenomDoc" value=""  size="20" maxlength="20" />  
				
				<label for="sexeDoctorant" id="sexeD">Sexe</label>
				<input type="text" id="sexeDoctorant" name="sexeDoc" value=""  size="5" maxlength="3" />
				<br/><br/>
				
				<label for="nomDepouse" id="nomDep">Nom d\'épouse</label>
				<input type="text" id="nomDepouse" name="nomDepouse" value=""  size="20" maxlength="20" />  
				
				<label for="dateNaissance" id="dateN">Date de naissance</label>
				<input type="text" id="dateNaissance" name="dateNaiss" value=""  size="20" maxlength="20" />  
				
				
			</div>
			
			<div id="etat">
				<br/>
				<label for="login" id="log">Nom d\'utilisateur</label>
				<input type="text" id="login" name="login" value=""  size="20" maxlength="20" />
				<br />
			</div>
 
			<div id="stat">
				<input type="radio" id="contactChoice1" name="contact" value="email">
				<label for="contactChoice1">Email</label>
		
				<input type="radio" id="contactChoice2" name="contact" value="telephone">
				<label for="contactChoice2">Téléphone</label>

				<input type="radio" id="contactChoice3" name="contact" value="courrier">
				<label for="contactChoice3">Courrier</label>
			</div>
			
		</div>';
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
	echo $var;
	}
