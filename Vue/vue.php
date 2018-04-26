<?php
function afficherAccueil(){
	$contenu='';
	require_once('acceuil.php');
	}
	
function setCharSetTo($charset){
	echo'<meta charset="'.$charset.'"/>';
}
	
function setCharSet(){
	echo'<meta charset="UTF-8"/>';
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
		<input type="password" id="password" name="password" value="" size="20" maxlength="20" required/>
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

function afficherMenuGestionDoctorant(){
	echo '<head>
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
				<li><a href="#doctorant" active> Etat civil du Doctorant </a></li>
				<li><a href="#these"> Information thèse </a></li>
				<li><a href="#prethese"> Pre-thèse </a></li>
				<li><a href="#1A"> Cours ED 1A </a></li>
				<li><a href="#2A"> Cours ED 2A </a></li>
				<li><a href="#3A"> Cours ED 3A </a></li>
				<li><a href="#soutenance"> Soutenance </a></li>
				<li><a href="#postthese"> Post thèse </a></li>
				<li><a href="#these+2"> Thèse +2 </a></li>
				<li><a href="#these+3"> Thèse +3 </a></li>
			</ul>
	</div>
	
			
	<div id="container">	
	
			<div id="doctorant">
			
				<form method="POST" >
				
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
				
				</form>
				
			</div>
				
			
			<div id="these">
				<form method="POST" >
					<div id="sectionGauche">
					
						<label for="labo" id="laboI">Laboratoire d\'inscription</label>
	<!--- TODO avec BDD-->					
						<select id="labo">
						<option value="labo1" selected>labo1</option> 
						<option value="labo2" >labo2</option>
						<option value="labo3">labo3</option>
					</select>
					<br/><br/>
					
	<!---TODO-->				
					<input type="button" value="Ajouter un laboratoire">
					<br/><br/>	
						
					<label for="compo" id="compoI">Composition inscription</label>
	<!--- TODO avec BDD-->					
						<select id="compo">
						<option value="comp1" selected>comp1</option> 
						<option value="comp2" >comp2</option>
						<option value="comp3">comp3</option>
					</select>
					<br/>
					
					<label for="discipline" id="discipline">Discipline</label>
	<!--- TODO avec BDD-->					
						<select id="discipline">
						<option value="d1" selected>d1</option> 
						<option value="d2" >d2</option>
						<option value="d3">d3</option>
					</select>
					<br/><br/>
					
	<!---TODO-->				
					<input type="button" value="Ajouter un directeur">
					<br/><br/>	
					
					<label for="directeur" id="directeur">Directeur</label>
	<!--- TODO avec BDD-->					
						<select id="directeur">
						<option value="dir1" selected>dir1</option> 
						<option value="dir2" >dir2</option>
						<option value="dir3">dir3</option>
					</select>
					<br/>
					
					<label for="codirecteur" id="codirecteur">Codirecteur</label>
	<!--- TODO avec BDD-->					
						<select id="codirecteur">
						<option value="codir1" selected>codir1</option> 
						<option value="codir2" >codir2</option>
						<option value="codir3">codir3</option>
					</select>
					<br/><br/>
					
					<label for="laboExercice" id="laboExercice">Laboratoire exercice</label>
	<!--- TODO avec BDD-->					
						<select id="laboExercice">
						<option value="laboE1" selected>laboE1</option> 
						<option value="laboE2" >laboE2</option>
						<option value="laboE3">laboE3</option>
					</select>
					<br/>
					
					<label for="telLabo" id="telL">Téléphone Laboratoire</label>
					<input type="tel" id="telLabo" name="telLabo" value=""  size="20" maxlength="20" />
					<br/>
					
					<label for="posteLabo" id="posteL">Poste Laboratoire</label>
					<input type="tel" id="posteLabo" name="posteLabo" value=""  size="20" maxlength="20" />
					<br/>
					
					<label for="faxLabo" id="faxL">Fax Laboratoire</label>
					<input type="tel" id="faxLabo" name="faxLabo" value=""  size="20" maxlength="20" />
					<br/>
					
					<label for="mailLabo" id="mailL">E-mail laboratoire</label>
					<input type="email" id="mailLabo" name="mailLabo" value=""  size="20" maxlength="20" />
					<br/>
					
					</div>
				
					<div id="sectionDroite">
						<label for="sujetThese" id="sujetThese">Sujet de la thèse</label>
						<br/>
						<TEXTAREA id="sujetTheseArea" name="sujetThese" rows=10 cols=83></TEXTAREA>
				
						<div id="cadre">
							<label for="cotutelle" id="cotutelle">Co Tutelle</label>
							<br/>
							<input type="checkbox" id="cotutelleok" name="cotutelleok" value="cotutellOk">
							<label for="oui" id="oui">Cocher si oui</label>
							<br/>
							
							<label for="paysCoTut" id="paysCoTut">Pays Co Tutelle</label>
<!--- TODO avec BDD-->					
							<select id="paysCoTutelle">
								<option value="p1" selected>p1</option> 
								<option value="p2" >p2</option>
								<option value="lp3">p3</option>
							</select>
							
							<label for="univ" id="univ">Université</label>
							<input type="text" id="univ" name="univ" value=""  size="20" maxlength="20" />
						</div>
						
						<div id="cadre">
							<label for="financement" id="financement">Financement</label>
							<br/>
							<label for="debutAlloc" id="debutAlloc">Date de début d\'allocation</label>
							<input type="date" id="debutAlloc" name="alloc" value=""  size="20" maxlength="20" />
							<br/>
							
							<label for="codefinancement" id="codefinancement">Code financement</label>
<!--- TODO avec BDD-->					
							<select id="codeFinancement">
								<option value="sans" selected>Sans financement au titre de la thèse</option> 
								<option value="avec" >ok</option>
								<option value="avec1">avec</option>
							</select>
							<br/>
							
							<label for="compInfo" id="compInfo">Complément d\'informations du financement:</label>
							<br/>
							<TEXTAREA id="compInfo" name="compInfo" rows=8 cols=50></TEXTAREA>
							<br/>
							
							<label for="cies" id="cies">Moniteur CIES</label>
							<input type="checkbox" id="cies" name="cies" value="cies">
						</div>
				
					</div>
					<br/><br/><br/>
					
					<!---<hr size="4" width="100%" color="black"> -->
					
					<div id="bas">
						<input type="button" value="Inscription année 2">
						<input type="button" value="Inscription année 3">
						<input type="button" value="Inscription année 4">
						<br/>
						
						<label for="2A" id="insc2A">Inscription 2A:</label>
<!--- TODO avec BDD-->					
						<select id="insc2Achoix">
							<option value="1" selected>1</option> 
							<option value="2" >2</option>
							<option value="3">3</option>
						</select>
						
						<label for="3A" id="insc3A">Inscription 3A:</label>
<!--- TODO avec BDD-->					
						<select id="insc3Achoix">
							<option value="1" selected>1</option> 
							<option value="2" >2</option>
							<option value="3">3</option>
						</select>
							
						<label for="4A" id="insc4A">Inscription 4A:</label>
<!--- TODO avec BDD-->					
						<select id="insc4Achoix">
							<<option value="1" selected>1</option> 
							<option value="2" >2</option>
							<option value="3">3</option>
						</select>
					</div>
				</form>
			</div>
 
 
			<div id="prethese">
				<form method="POST">
					<input type="radio" id="contactChoice1" name="contact" value="email">
					<label for="contactChoice1">Email</label>
			
					<input type="radio" id="contactChoice2" name="contact" value="telephone">
					<label for="contactChoice2">Téléphone</label>

					<input type="radio" id="contactChoice3" name="contact" value="courrier">
					<label for="contactChoice3">Courrier</label>
				</form>
			</div>
				
			<div id="1A">
				<form method="POST">
				
				</form>

			</div>
			
			<div id="2A">
				<form method="POST">
				
				</form>		
			</div>
			
			<div id="3A">
				<form method="POST">
				
				</form>
			
			</div>
			
			<div id="soutenance">
				<form method="POST">
				
				</form>
			</div>
			
			<div id="postthese">
				<form method="POST">
				
				</form>			
			</div>
			
			<div id="these+2">
				<form method="POST">
				
				</form>			
			</div>
			
			<div id="these+3">
				<form method="POST">
				
				</form>			
			</div>
		</div>';
	}


function afficherBoutonMenu(){
	echo '
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Retour au menu" name="go_To_Menu" />
	</form>';
}

function afficherMessage($var){
	echo '<p>'.$var.'</p>';
	}
