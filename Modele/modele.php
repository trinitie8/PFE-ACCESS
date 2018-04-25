<?php

function ajouterUser($login,$password,$grade){
	connexionBDD();
	$result=mysql_query("insert into UTILISATEURS values ('$login','$password',$grade)");
	deconnexionBDD();	
	return $result;
	}
	
function isExistingUser($login){
	connexionBDD();
	if($resultat=mysql_fetch_object(mysql_query("select * from UTILISATEURS where login='$login'"))) $rep=true;
	else $rep=false;
	deconnexionBDD();
	return $rep;
	}
	
function checkUser($login,$mdp){
	connexionBDD();
	if($resultat=mysql_fetch_object(mysql_query("SELECT * FROM UTILISATEURS WHERE LOGIN='$login' AND PASSWORD='$mdp'"))){
		if($login==$resultat->login && $mdp==$resultat->password) return true;
	}
	deconnexionBDD();
	return false;
}

function connexionBDD(){
	$mysql_host = "dbhost:3306";
	$mysql_user = "o2084311";
	$mysql_pass = "o2084311";
	$mysql_bdd = "bd_o2084311";
	mysql_connect($mysql_host, $mysql_user, $mysql_pass)
		or die("Impossible de se connecter au serveur mysql ");
	mysql_select_db("$mysql_bdd")
		or die("Impossible de se connecter à la base de données bd_o2084311");
	mysql_query("SET NAMES 'utf8'");
	mysql_query("SET CHARACTER SET utf8");
	mysql_query("SET COLLATION_CONNECTION = 'utf8_unicode_ci'");
	}

function deconnexionBDD(){
	mysql_close();  
	}
	
