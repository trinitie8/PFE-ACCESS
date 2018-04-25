<?php
require_once('Controleur/controleur.php');
try{
	if(isset($_POST['connexion'])){
		$login=$_POST['login'];
		$password=$_POST['password'];
		CtlConnexion($login,$password);
		}
	else if(isset($_POST['go_To_Gestion_Doctorants'])){
		CtlGestionDoctorant();
	}
	else if(isset($_POST['go_To_Gestion_Saisies'])){
		CtlGestionSaisies();
	}
	
	else if(isset($_POST['go_To_Inscription'])){
		CtlInscription(); 
	}
	else if(isset($_POST['bypass'])){
		CtlMenu(); 
	}
	else if(isset($_POST['go_To_Menu'])){
		CtlMenu();
	}
	else if(isset($_POST['go_To_Accueil'])){
		CtlAccueil();
	}
	else if(isset($_POST['inscription'])){
		$login=$_POST['login'];
		$password=$_POST['password'];		
		$grade=$_POST['grade'];
		CtlEnregistrerInscription($login,$password,$grade);
		}
	else if(isset($_POST['deconnexion'])){
		CtlDeconnexion();
	}
	else{
		CtlAccueil();
		}

}catch (Exception $e ){
	$msg=$e->getMessage();
	CtlErreur($msg);
	}
