<?php
require_once('Modele/modele.php');
require_once('Vue/vue.php');

function CtlAccueil(){
	afficherAccueil();
	}
	
function CtlErreur($erreur){
	afficherErreur($erreur);
	}

function CtlAjouterUser($login, $password){
	if (getUtilisateur($login)){
		ajouterUser($login, $password);
		afficherMenu();
	}else{
		throw new Exception("Utilisateur deja existant");
	}
	}

function CtlAfficherOnglet(){
	afficherMenu();
	}



