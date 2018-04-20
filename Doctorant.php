<?php
require_once('Controleur/controleur.php');
try{
	if(isset($_POST['ajouter'])){
		$login=$_POST['login'];
		$password=$_POST['password'];
		$grade=$_POST['grade'];
		CtlAjouterUser($login,$password,$grade);
		}
	else{
		CtlAccueil();
		}

}catch (Exception $e ){
	$msg=$e->getMessage();
	CtlErreur($msg);
	}
