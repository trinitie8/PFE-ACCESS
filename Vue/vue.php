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
	echo '<link href="style.css" type="text/css" rel="stylesheet" />
	<div id="menu">
			<ul id="onglets">
				<li class="active"><a href="Accueil.html"> Accueil </a></li>
				<li><a href="Forums.html"> Forums </a></li>
				<li><a href="Livre_or.html"> Livre dor </a></li>
				<li><a href="Equipe.html"> Léquipe </a></li>
				<li><a href="Inscription.html"> Sinscrire </a></li>
				<li><a href="Connexion.html"> Se connecter </a></li>
			</ul>
		</div>';
	}
