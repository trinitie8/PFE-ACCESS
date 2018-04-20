<?php

function getConnect(){
	require_once('connect.php');
	$connexion = new PDO('mysql:host ='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
	$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$connexion->query('SET NAME UTF8');
	return $connexion;
	}

function ajouterUser($login,$password,$grade){
	$connxion = getConnect();
	$requete = "insert into utilisateurs values ('$login','$password','$grade')";
	$connexion->query($requete);
	
	}
	
function getUtilisateur($login){
	$connexion=getConnect();
	$requete="select * from utilisateurs where login='$login'";
	$resultat=$connexion->query($requete);
	return $resultat;
	}
