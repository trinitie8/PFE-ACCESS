<?php

function ajouterUser($login,$password){
	$connexion = connexion();
	$result=mysql_query("insert into UTILISATEURS values ('$login','$password',0)");
	deconnexion();	
	}
	
function getUtilisateur($login){
	$connexion=connexion();
	$resultat=mysql_query("select * from UTILISATEURS where login='$login'");
	deconnexion();
	return $resultat;
	}

function connexion(){
	$mysql_host = "dbhost:3306";
	$mysql_user = "o2084311";
	$mysql_pass = "o2084311";
	$mysql_bdd = "bd_o2084311";
	$connexion = mysql_connect($mysql_host, $mysql_user, $mysql_pass)
		or die("Impossible de se connecter au serveur mysql ");
	mysql_select_db("$mysql_bdd")
		or die("Impossible de se connecter &#224; la base de donn&#233;es bd_o2084311");
	return $connexion;
	}

function deconnexion(){
	mysql_close();  
	}
