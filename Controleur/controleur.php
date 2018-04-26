<?php
require_once('Modele/modele.php');
require_once('Vue/vue.php');

function CtlAccueil(){
	setCharSet();
	afficherAccueil();
	}
	
function CtlErreur($erreur){
	setCharSet();
	afficherErreur($erreur);
	}


function CtlConnexion($login,$password){
	setCharSet();
	connexionBDD();
	if (checkUser($login,$password)){
		CtlMenu();
	}
	else{
		deconnexionBDD();
		afficherAccueil();
		afficherMessage("Couple login/mot de passe incorect.");
	}
		
}

function CtlInscription(){
	setCharSet();
	afficherInscription();
}

function CtlEnregistrerInscription($login,$password,$grade){
	setCharSet();
	if(isExistingUser($login)){
		afficherInscription();
		afficherMessage("Ce nom d'utilisateur est déjà pris.");
	}
	else{
		if(ajouterUser($login,$password,$grade)){
			afficherAccueil();
			afficherMessage("Votre demande d'inscription a bien été enregistrée.");
		}
		else{
			afficherInscription();
			afficherMessage("Inscription impossible, veuillez vérifier vos identifiants.");
		}
	}
}

function CtlDeconnexion(){
	setCharSet();
	CtlAccueil();
}

function CtlMenu(){
	setCharSet();
	afficherMenu();
	afficherDeconnexion();
	}

function CtlGestionDoctorant(){
	setCharSet();
	afficherMenuGestionDoctorant();
	afficherBoutonMenu();
	afficherDeconnexion();
}


function CtlGestionSaisies(){
	setCharSet();
	afficherGestionSaisies();
	afficherBoutonMenu();
	afficherDeconnexion();
}
