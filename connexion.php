<?php

require_once('connect.php');
$connexion = new PDO('mysql:host ='.SERVEUR.';dbname='.BDD,USER,PASSWORD);
$connexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$connexion->query('SET NAME UTF8');


if(isset($_POST['ajouter'])){
	$login=$_POST['login'];
	$password=$_POST['password'];
	$grade=$_POST['grade'];
	}
	
$requete = "insert into utilisateurs values ('$login','$password','$grade')";
$connexion->query($requete);
