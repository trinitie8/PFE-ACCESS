<?php
function afficherAccueil(){
	$contenu='';
	require_once('acceuil.php');
	}
	
function setCharSetTo($charset){
	echo'<meta charset="'.$charset.'">';
}
	
function setCharSet(){
	echo'<meta charset="UTF-8">';
}
	
function afficherErreur($erreur){
	$contenu='<p>'.$erreur.'</p> <p> Par mesure de sécurité vous avez été déconnecté. </p>';
	require_once('acceuil.php');
	}

function afficherMenu(){
	echo '	
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Gestion/Recherche de doctorants" name="go_To_Gestion_Doctorants" />
	<input type="submit" value="Gestion des informations saisissables" name="go_To_Gestion_Saisies" />
	</form>'
	;
	}


function afficherGestionSaisies(){

}

function afficherInscription(){
	echo'
			
	<form method="post" action="Doctorant.php">
	<fieldset>
		<legend>Inscription</legend>
		<br/>
		<label for="login" id="log">Nom d\'utilisateur</label>
		<input type="text" id="login" name="login" value=""  size="20" maxlength="20" />
		<br />
		<br/>

		<label for="password">Mot de passe </label>
		<input type="text" id="password" name="password" value="" size="20" maxlength="20" required/>
		<br />
		<br/>

		<label for="grade">Grade </label>
		<input type="text" id="grade" name="grade" value="" size="20" maxlength="20" required/>
		<br />
		<br/>
		
		<input type="submit" value="S\'inscrire" name="inscription" />
		
		<br />
		<br/>
		
		<?php echo $contenu; ?>
		
	</fieldset>
	</form>
	<form method="post" action="Doctorant.php">
		<input type="submit" value="Retour" name="go_To_Accueil" />
	</form>
	';
}

function afficherDeconnexion(){
	echo '
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Deconnexion" name="deconnexion" />
	</form>';

}

function AfficherMenuGestionDoctorant(){
	echo '<meta charset="UTF-8">
	<head>
		<link href="Contenu/style.css" type="text/css" rel="stylesheet" />
		
		
	<script language="JavaScript">
	function cacher(bouton) {
		if (bouton.checked){
			document.getElementById("nomED").style.visibility="visible";
			document.getElementById("nomDepouse").style.visibility="visible";
		}else{
			document.getElementById("nomED").style.visibility="hidden";
			document.getElementById("nomDepouse").style.visibility="hidden";
			}
	}
	</script>
		
	</head>
	
	<div id="menu">
			<ul id="onglets">
				<li id="active"><a href="#accueil"> Accueil </a></li>
				<li><a href="#doctorant"> Menu des Doctorant </a></li>
				<li><a href="#etat"> Menu états </a></li>
				<li><a href="#stat"> Statistiques </a></li>
				<li><a href="#1"> Sinscrire </a></li>
				<li><a href="#2"> Se connecter </a></li>
			</ul>
	</div>
	
			
	<div id="container">
	
	
			<div id="accueil">
				Bien le bonjour !
			</div>
	
	
	
			<div id="doctorant">
			
			<section id="sectionGauche">
				<label for="nomDoctorant" id="nomD">Nom du Doctorant</label>
				<input type="text" id="nomDoctorant" name="nomDoc" value=""  size="20" maxlength="20" />
				<br/>
			
			<div class="effacer">
				<label class="epouse" for="nomED" id="nomDepouse">Nom d\'épouse</label>
				<input type="text" id="nomED" name="nomDepouse" value=""  size="20" maxlength="20" />  
			</div>
				<br/>
				
				<label for="dateNaissance" id="dateND">Date de naissance</label>
				<input type="date" id="dateNaissance" name="dateNaiss" value=""  size="20" maxlength="20" />  
				<br/>
				
				<label for="adresseDoctorant1" id="adD1">Adresse 1</label>
				<input type="text" id="adresseDoctorant1" name="adresseDoc1" value=""  size="50" maxlength="50" />
				<br/>
				
				<label for="adresseDoctorant2" id="adD2">Adresse 2</label>
				<input type="text" id="adresseDoctorant2" name="adresseDoc2" value=""  size="50" maxlength="50" />
				<br/>
				
				<label for="villeDoctorant" id="villeD">Ville du Doctorant</label>
				<input type="text" id="villeDoctorant" name="villeDoc" value=""  size="20" maxlength="50" />
				<br/>
				
				<label for="CPDoctorant" id="CPD">Code postal doctorant</label>
				<input type="text" id="CPDoctorant" name="CPDoc" value=""  size="20" maxlength="20" />
				<br/>
				
				<label for="telDoctorant" id="telD">Téléphone doctorant</label>
				<input type="tel" id="telDoctorant" name="telDoc" value=""  size="20" maxlength="20" />
				<br/>
				
				<label for="faxDoctorant" id="faxD">Fax doctorant</label>
				<input type="tel" id="faxDoctorant" name="faxDoc" value=""  size="20" maxlength="20" />
				<br/>
				
				<label for="mailDoctorant" id="mailD">E-mail doctorant</label>
				<input type="email" id="mailDoctorant" name="mailDoc" value=""  size="20" maxlength="20" />
				<br/>
				
				<label for="webDoctorant" id="webD">Page web personnelle</label>
				<input type="text" id="webDoctorant" name="webDoc" value=""  size="20" maxlength="20" />
				<br/>
				
				<label for="publiable" id="publiD">Données publiables</label>
				<input type="checkbox" id="publiable" name="publi" value="puliableOk">
				<br/>
			</section>
				
			<section id="sectionDroite">
				<label for="prenomDoctorant" id="prenomD">Prénom du Doctorant</label>
				<input type="text" id="prenomDoctorant" name="prenomDoc" value=""  size="20" maxlength="20" />  
				<br/>
				
				<label>Sexe</label>
				<input type="radio" id="sexeH" name="sexe" value="homme">
				<label for="sexeH">H</label>
		
				<input type="radio" id="sexeF" name="sexe" value="femme" onclick="cacher(this)">
				<label for="sexeF">F</label>
				<br/>
				
				<label for="INEDoctorant" id="INED">Numéro Apogée INE</label>
				<input type="number" id="INEDoctorant" name="INEDoc" value=""  size="20" maxlength="20" />  
				
				<br/>	
<!--- TODO avec la base de donnée-->
				<label for="paysOrigine" id="paysOD">Pays d\'origine</label>
				<select id="paysOrigine">
					<option value="France" selected>France</option> 
					<option value="Angl" >Angleterre</option>
					<option value="All">Allemagne</option>
				</select>
				
				<br/>				
				<label for="nomParentDoc" id="nomP">Nom des parents</label>
				<input type="text" id="nomParentDoc" name="nomParDoc" value=""  size="20" maxlength="20" />
				
				<br/>
				<label for="adresseParent1" id="adP1">Adresse 1 parents</label>
				<input type="text" id="adresseParent1" name="adPar1" value=""  size="20" maxlength="20" />
				
				<br/>
				<label for="adresseParent2" id="adP2">Adresse 2 parents</label>
				<input type="text" id="adresseParent2" name="adPar2" value=""  size="20" maxlength="20" />
				
				<br/>
				<label for="CPParent" id="CPP">Code postal parents</label>
				<input type="text" id="CPParent" name="CPPar" value=""  size="20" maxlength="20" />
				
				<br/>
				<label for="villeParent" id="villeP">Ville parents</label>
				<input type="text" id="villeParent" name="villePar" value=""  size="20" maxlength="20" />
				
				<br/>
				<label for="commentaireDoctorant" id="comD">Commentaire</label>
				<TEXTAREA id="commentaireDoctorant" name="commentaire" rows=4 cols=40>Commentaires</TEXTAREA>

				<br/>
				<label for="abandon" id="abandonD">Abandon de thèse </label>
				<input type="checkbox" id="abandon" name="DocAbandon" value="abandonDoctorant">
				</section>
			</div>
			
			
			
			<div id="etat">
				<br/>
				<label for="login" id="log">Nom d\'utilisateur</label>
				<input type="text" id="login" name="login" value=""  size="20" maxlength="20" />
				<br />
			</div>
 
 
 
 
			<div id="stat">
				<input type="radio" id="contactChoice1" name="contact" value="email">
				<label for="contactChoice1">Email</label>
		
				<input type="radio" id="contactChoice2" name="contact" value="telephone">
				<label for="contactChoice2">Téléphone</label>

				<input type="radio" id="contactChoice3" name="contact" value="courrier">
				<label for="contactChoice3">Courrier</label>
				
			</div>
			
		</div>';
	}

function afficherBoutonMenu(){
	echo '
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Retour au menu" name="go_To_Menu" />
	</form>';
}
/*function afficherDivers(){
	echo '<meta charset="UTF-8">
	<head>
		<link href="Contenu/style.css" type="text/css" rel="stylesheet" />
	</head>
<!-- Les liens qui renvoient vers tes <div> -->
<a href="#paragraphe-1">Aller au paragraphe 1</a><br>
<a href="#paragraphe-2">Aller au paragraphe 2</a><br>
<a href="#paragraphe-3">Aller au paragraphe 3</a><br><br>
 
<!-- Maintenant, les paragraphes -->
<div class="container">

<div id="paragraphe-1">
Lorem ipsu blablablabla
</div>
 
<div id="paragraphe-2">
Cotnenu de la page 2
</div>
 
<div id="paragraphe-3">
PARAGRAPHE 3
</div>

</div>';
	}*/

function afficherMessage($var){
	echo '<p>'.$var.'</p>';
	}
