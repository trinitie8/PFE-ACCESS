<?php
require_once('Modele/modele.php');
require_once('Vue/vue.php');

function CtlAccueil(){
	afficherAccueil();
	}
	
function CtlErreur($erreur){
	afficherErreur($erreur);
	}

function CtlAjouterUser($login, $password, $gabarit){
	if (getUtilisateur($login)==NULL){
		ajouterUser($login, $password, $gabarit);
		afficherAccueil();
	}else{
		throw new Exception("Utilisateur deja existant");
	}
	
	}
