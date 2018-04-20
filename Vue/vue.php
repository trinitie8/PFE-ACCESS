<?php
function afficherAccueil(){
	$contenu='';
	require_once('gabarit.php');
	}
	
function afficherErreur($erreur){
	$contenu='<p>'.$erreur.'</p> <p> Par mesure de sécurité vous avez été déconnecté. </p>';
	require_once('Vue/gabarit.php');
	}
