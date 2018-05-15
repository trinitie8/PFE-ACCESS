<?php
function afficherAccueil(){
	$var='';
	require_once('acceuil.php');
	}
	
function setCharSetTo($charset){
	echo'<meta charset="'.$charset.'"/>';
}
	
function setCharSet(){
	echo'<meta charset="UTF-8"/>';
}
	
function afficherErreur($erreur){
	$var='<p>'.$erreur.'</p> <p> Par mesure de sécurité vous avez été déconnecté. </p>';
	require_once('acceuil.php');
	}

function afficherMenu(){
	echo '	<head>
		<link href="Contenu/style.css" type="text/css" rel="stylesheet" />
		</head>
		
	<div id="menu">
			<ul id="onglets">
				<li><a href="#doctorant"> Gestion des doctorants </a></li>
				<li><a href="#saisie"> Gestion de la base </a></li>
				<li><a href="#stat"> Statistiques </a></li>
			</ul>
	</div>
	
			
	<div id="container">
	
			<div id="doctorant">
		
			<form id="monForm" method="post" action="Doctorant.php">
			<input type="submit" value="Gestion/Recherche de doctorants" name="go_To_Gestion_Doctorants" />
			</form>
			</div>
						
			<div id="saisie">
			<form id="monForm" method="post" action="Doctorant.php">
			<input type="submit" value="Gestion des informations saisissables" name="go_To_Gestion_Saisies" />
			
			</form>
			</div>
 
 
 
 
			<div id="stat">
				<input type="radio" id="contactChoice1" name="contact" value="email"/>
				<label for="contactChoice1">Email</label>
		
				<input type="radio" id="contactChoice2" name="contact" value="telephone"/>
				<label for="contactChoice2">Téléphone</label>

				<input type="radio" id="contactChoice3" name="contact" value="courrier"/>
				<label for="contactChoice3">Courrier</label>
				
			</div>
			
	</div>';
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
	<input type="submit" value="Déconnexion" name="deconnexion" id="boutonDeconnexion"/>
	</form>';

}


function afficherMenuGestionDoctorant($informations){
	echo '
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
	
	<script language="JavaScript">
	function activer_checkbox(){
		var check = document.getElementById("jobfr3");
		var texte = document.getElementById("dep3").value;
		if(texte != ""){
			check.disabled = true;
		}
	}
	</script>
		
	</head>
	
	<div id="menu">
			<ul id="onglets">
				<li><a href="#doctorant" active> Etat civil du Doctorant </a></li>
				<li><a href="#these"> Information thèse </a></li>
				<li><a href="#prethese"> Pre-thèse </a></li>
				<li><a href="#cours"> Cours </a></li>
				<li><a href="#soutenance"> Soutenance </a></li>
				<li><a href="#postthese"> Post thèse </a></li>
				<li><a href="#Tdeux"> Thèse +2</a></li>
				<li><a href="#Ttrois"> Thèse +3 </a></li>
			</ul>
	</div>
	
			
	<div id="container">	
		<form method="POST" >
		
		<input type="submit" value="Enregistrer" name="enregistrerDoctorant" id="boutonEnregistrerDoctorant"/>
		
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
					<input type="text" id="adresseDoctorant1" name="adresseDoc1" value=""  size="20" maxlength="50" />
					<br/>
					
					<label for="adresseDoctorant2" id="adD2">Adresse 2</label>
					<input type="text" id="adresseDoctorant2" name="adresseDoc2" value=""  size="20" maxlength="50" />
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
					<input type="checkbox" id="publiable" name="publi" value="puliableOk"/>
					<br/>
				</section>
					
				<section id="sectionDroite">
					<label for="prenomDoctorant" id="prenomD">Prénom du Doctorant</label>
					<input type="text" id="prenomDoctorant" name="prenomDoc" value=""  size="20" maxlength="20" />  
					<br/>
					
					<label>Sexe</label>
					<input type="radio" id="sexeH" name="sexe" value="homme" checked="checked"/>H
					<input type="radio" id="sexeF" name="sexe" value="femme" onclick="cacher(this)"/>F
					<br/><br/>
					
					<label for="INEDoctorant" id="INED">Numéro Apogée INE</label>
					<input type="text" id="INEDoctorant" name="INEDoc" value=""  size="20" maxlength="20" />  
					<br/>
					
					<label for="paysOrigine" id="paysOD">Pays d\'origine</label>
					<select id="paysOrigine" name="paysOD">';
							$resultat=$informations["lesPays"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->CODE_PAYS.'">'.$resultat[$x]->NOM_PAYS.'</option>';
							}
							echo
					'</select>
					
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
					<TEXTAREA id="commentaireDoctorant" name="commentaire" rows=4 cols=40 placeholder="Commentaires"></TEXTAREA>

					<br/>
					<label for="abandon" id="abandonD">Abandon de thèse </label>
					<input type="checkbox" id="abandon" name="DocAbandon" value="abandonDoctorant"/>
					</section>
			</div>			
			
			
			
			
			
			<div id="these">
					<div id="sectionGauche">
						
						<label for="labo" id="laboI">Laboratoire d\'inscription</label>				
						<select id="labo" name="laboInsc">';
							$resultat=$informations["lesLabos"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_DE_LABORATOIRE.'">'.$resultat[$x]->NOM_LABORATOIRE.'</option>';
							}
							echo '
						</select>
						<br/>
						
<!---TODO voir a supprimer-->				
						<input type="button" value="Ajouter un laboratoire"/>
						<br/>	
							
						<label for="compo" id="compoI">Composante inscription</label>				
						<select id="compo" name="compoInsc">';
							$resultat=$informations["lesCompos"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_COMPOSANTE.'">'.$resultat[$x]->LIBELLE_COMPOSANTE.'</option>';
							}
							echo '
						</select>
						<br/>
						
						<label for="discipline" id="discipline">Discipline</label>				
						<select id="discipline" name="discipline">';
							$resultat=$informations["lesDisciplines"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->CODE_DISCIPLINE.'">'.$resultat[$x]->NOM_DISCIPLINE.'</option>';
							}
							echo '
						</select>
						<br/>
						
<!---TODO voir a supprimer-->				
						<input type="button" value="Ajouter un directeur"/>
						<br/>	
						
						<label for="directeur" id="directeur">Directeur</label>		
						<select id="directeur"  name="directeur">';
							$resultat=$informations["lesChercheurs"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_CHERCHEUR.'">'.$resultat[$x]->NOM_CHERCHEUR.' '.$resultat[$x]->PRENOM_CHERCHEUR.'</option>';
							}
							echo '
						</select>
						<br/>
						
						<label for="codirecteur" id="codirecteur">Codirecteur</label>
						<select id="codirecteur" name="coDir">';
							$resultat=$informations["lesChercheurs"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_CHERCHEUR.'">'.$resultat[$x]->NOM_CHERCHEUR.' '.$resultat[$x]->PRENOM_CHERCHEUR.'</option>';
							}
							echo '
						</select>
						<br/>
						
						<label for="laboExercice" id="laboExercice">Laboratoire exercice</label>				
						<select id="laboExercice" name="laboEx">';
							$resultat=$informations["lesLabos"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_DE_LABORATOIRE.'">'.$resultat[$x]->NOM_LABORATOIRE.'</option>';
							}
							echo '
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
							<input type="checkbox" id="cotutelleok" name="cotutelleok" value="cotutellOk"/>
							<label for="oui" id="oui">Cocher si oui</label>
							<br/>
							
							<label for="paysCoTut" id="paysCoTut">Pays Co Tutelle</label>			
							<select id="paysCoTutelle" name="paysCoTutelle">';
							$resultat=$informations["lesPays"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->CODE_PAYS.'">'.$resultat[$x]->NOM_PAYS.'</option>';
							}
							echo '
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
							<select id="codeFinancement" name="codeFinancement">';
							$resultat=$informations["lesFinancements"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->CODE_FINANCEMENT.'">'.$resultat[$x]->FINANCEMENT.'</option>';
							}
							echo'
							</select>
							<br/>
							
							<label for="compInfo" id="compInfo">Complément d\'informations du financement:</label>
							<br/>
							<TEXTAREA id="compInfo" name="compInfo" rows=8 cols=50></TEXTAREA>
							<br/>
							
							<label for="cies" id="mcies">Moniteur CIES</label>
							<input type="checkbox" id="cies" name="cies" value="cies"/>
						</div>
				
					</div>
					<br/>
					
					<!---<hr size="4" width="100%" color="black"> -->
					
					<div id="bas">
						<input type="button" value="Inscription année 2"/>
						<input type="button" value="Inscription année 3"/>
						<input type="button" value="Inscription année 4"/>
						<br/>
						
						<label for="2A" id="insc2A">Inscription 2A:</label>				
						<select id="insc2Achoix" name="anneeIns2">';
							$resultat=$informations["lesAnnees"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_ANNEE.'">'.$resultat[$x]->ANNEE.'</option>';
							}
							echo'
						</select>
						
						<label for="3A" id="insc3A">Inscription 3A:</label>			
						<select id="insc3Achoix"  name="anneeIns3">';
							$resultat=$informations["lesAnnees"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_ANNEE.'">'.$resultat[$x]->ANNEE.'</option>';
							}
							echo'
						</select>
							
						<label for="4A" id="insc4A">Inscription 4A:</label>			
						<select id="insc4Achoix"  name="anneeIns4">';
							$resultat=$informations["lesAnnees"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_ANNEE.'">'.$resultat[$x]->ANNEE.'</option>';
							}
							echo'
						</select>
					</div>
			</div>
 
 
 
 
			<div id="prethese">
						<label for="proAvant" id="proAvant">Profession antérieure:</label>		
						<select id="professionAvant" name="professionAvant">';
							$resultat=$informations["lesProfAvant"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->NUM_PROFESSION_AVANT_THESE.'">'.$resultat[$x]->PROFESSION_ANTERIEURE.'</option>';
							}
							echo'
						</select>
						<br/>
						
						<label for="diplomeInsc" id="diplomeInsc">Diplôme inscription:</label>
						<select id="diplomeInscri" name="diplomeInscri">';
							$resultat=$informations["lesDiplomes"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if($resultat[$x]->DIPLOME_INSCRIPTION)
									echo '<option value="'.$resultat[$x]->NUM_DIPLOME.'">'.$resultat[$x]->LIBELLE_DIPLOME.'</option>';
							}
							echo'
						</select>
						<br/>
						
						<label for="diplomeComp" id="diplomeComp">Diplôme complémentaire:</label>			
						<select id="diplomeComplementaire" name=diplomeComplementaire">';
							$resultat=$informations["lesDiplomes"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if($resultat[$x]->DIPLOME_COMPLEMENTAIRE)
									echo '<option value="'.$resultat[$x]->NUM_DIPLOME.'">'.$resultat[$x]->LIBELLE_DIPLOME.'</option>';
							}
							echo'
						</select>
						<br/>
						
						<label for="dea" id="dea">Numéro du DEA:</label>
						<input type="text" id="dea" name="dea" value=""/>
						<br/>
						
						<label for="dea1" id="dea1">DEA:</label>
						<input type="text" id="dea1" name="dea" value=""/>
						<br/>
						
						<label for="anneedea" id="anneedea">Année du DEA:</label>
						<input type="text" id="anneedea" name="andea" value="0"/>
						<br/>
						
						<label for="univdea" id="univdea">Université du DEA:</label>
						<input type="text" id="univdea" name="universitedea" value=""/>
						<br/>
						
						<label for="moydea" id="moydea">Moyenne du DEA:</label>
						<input type="text" id="moydea" name="moydea" value="0"/>
						<br/>
						
						<label for="classement" id="class">Classement:</label>
						<input type="text" id="classement" name="classement" value="0"/>
						<br/>
						
						<label for="effdea" id="effectifdea">Effectif du DEA:</label>
						<input type="text" id="effdea" name="effdea" value="0"/>
						<br/>
			</div>
				
				
				
				
				
			<div id="cours">
					<div id="annee1">
						<p id="anne1">Première année</p>
					
							<label id="CDA1">Cours disciplinaire</label>			
							<select id="cda1suivi" name="cda1suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if($resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="cda1valide" id="cda1val">Validé
							<input type="checkbox" id="cda1valide" name="cda1valide" value="cda1valide"/></label>
							<br/><br/>
							
							<label id="MSA1">Module spécifique</label>
							<select id="msa1suivi" name="msa1suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if(!$resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="msa1valide" id="msa1val" >Validé
							<input type="checkbox" id="msa1valide" name="msa1valide" value="msa1valide"/></label>
							<br/><br/>
							
							<label id="CSA1">Cours supplémentaire</label>
							<select id="csa1suivi" name="csa1suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if($resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="csa1valide" id="csa1val">Validé
							<input type="checkbox" id="csa1valide" name="csa1valide" value="csa1valide"/></label>
							<br/><br/>
							
							<TEXTAREA id="commentairea1" name="commentaireA1" rows=4 cols=40 placeholder="Commentaires"></TEXTAREA>
					</div>
					
					<div id="annee2">
						<p id="anne2">Deuxième année</p>
					
							<label id="CDA2">Cours disciplinaire</label>
							<select id="cda2suivi" name="cda2suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if($resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="cda2valide" id="cda2val">Validé
							<input type="checkbox" id="cda2valide" name="cda2valide" value="cda2valide"/></label>
							<br/><br/>
							
							<label id="MSA2">Module spécifique</label>		
							<select id="msa2suivi" name="msa2suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if(!$resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="msa2valide" id="msa2val" >Validé
							<input type="checkbox" id="msa2valide" name="msa2valide" value="msa2valide"/></label>
							<br/><br/>
							
							<label id="CSA2">Cours supplémentaire</label>			
							<select id="csa2suivi" name="csa2suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if($resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="csa2valide" id="csa2val">Validé
							<input type="checkbox" id="csa2valide" name="csa2valide" value="csa2valide"/></label>
							<br/><br/>
							
							<TEXTAREA id="commentairea2" name="commentaireA2" rows=4 cols=40 placeholder="Commentaires"></TEXTAREA>
					</div>
					
					<div id="annee3">
						<p id="anne3">Troisième année</p>
												
							<label id="MSA3">Module spécifique</label>			
							<select id="msa3suivi"  name="msa3suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if(!$resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="msa3valide" id="msa3val" >Validé
							<input type="checkbox" id="msa3valide" name="msa3valide" value="msa3valide"/></label>
							<br/><br/>
							
							<label id="CSA3">Cours supplémentaire</label>
							<select id="csa3suivi" name="csa3suivi">';
							$resultat=$informations["lesModules"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								if($resultat[$x]->COURS_CD_OU_MS && $resultat[$x]->VISIBILITE_MODULE)
									echo '<option value="'.$resultat[$x]->NUM_MODULE.'">'.$resultat[$x]->CODE_MODULE.' . '.$resultat[$x]->DESCRIPTIF_MODULE.'</option>';
							}
							echo'
							</select>
							
							<label for="csa3valide" id="csa3val">Validé
							<input type="checkbox" id="csa3valide" name="csa3valide" value="csa3valide"/></label>
							<br/><br/>
							
							<TEXTAREA id="commentairea3" name="commentaireA3" rows=4 cols=40 placeholder="Commentaires"></TEXTAREA>
					</div>
			</div>
			
			
			
			
			
			<div id="soutenance">
					<label id="edstnonvalide">Enseignements EDST non validés</label>
					<br/>
					<br/>
					
					<label for="inscsout" id="inscriptionsout">Inscription soutenance <input type="checkbox" id="inscsout" name="inscsout" value="inscritsoutenance"/></label>
					<br/>
					<label for="desrapp" id="desRapports">Désignation des Rapporteurs<input type="checkbox" id="desrapp" name="desrapp" value="designationRapp"/></label>
					<br/>
					
					<label for="compJury" id="copoJury">Composition du Jury communiquée<input type="checkbox" id="compJury" name="compJury" value="compositionJury"/></label>
					<br/>
					
					<label for="2rapp" id="2rapports">2 rapports reçus<input type="checkbox" id="2rapp" name="2rapp" value="rapportsRecu"/></label>
					<br/>
					
					<label for="dateValidationRapp" id="dateValidRapp">Date de validation des rapports par le bureaus de l\'ED</label>
					<input type="date" id="dateValidationRapp" name="dateValidRapp" value=""  size="20" maxlength="20" />
					<br/>
					
					<label for="dateCompoJury" id="dateCompositionJury">Composition du jury fixée par le bureau le</label>
					<input type="date" id="dateCompoJury" name="dateCompositionJury" value=""  size="20" maxlength="20" />
					<br/>
					
					<label for="intituledoc" id="doctorat">Intitulé du doctorat</label>
					<input type="text" id="intituledoc" name="intituledoctorat" value=""  size="20" maxlength="20" />
					<br/>
					
					<label for="numdoc" id="nomdoctorat">Numéro du doctorat</label>
					<input type="text" id="numdoc" name="numerodoc" value=""  size="20" maxlength="20" />
					<br/>
					
					<label for="metion" id="mention">Mention</label>			
					<select id="metion" name="mention">';
							$resultat=$informations["lesMentions"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
									echo '<option value="'.$resultat[$x]->NUM_MENTION.'">'.$resultat[$x]->NOM_MENTION.'</option>';
							}
							echo'
					</select>
			</div>
			
			
			
			
			
			<div id="postthese">
					<label for="ater" id="aterAvSout">Le docteur a été ATER avant la soutantenance<input type="checkbox" id="ater" name="ater" value="inscritsoutenance"/></label>
					<br/>
					
					<div id="PT1">
						<label for="formcomp" id="formationComp">Le docteur a suivi une formation complémentaire</label>
						<select id="formcomp" name="formcomp">
							<option value="0" selected>aucune</option> 
							<option value="1" >pendant le doctorat</option>
							<option value="2">en dehors du doctorat</option>
						</select>
						<br/>
						
						<label for="titreForm" id="formation">Laquelle</label>
						<input type="text" id="titreForm" name="nomForm" value="" size="20" maxlength="70"/>
						<br/>
						
						<label for="dureeForm" id="dureeformation">Durée (en heure)</label>
						<input type="text" id="dureeForm" name="heureForm" value="" size="20" maxlength="20"/>
					</div>
					
					<div id="PT2">
<!--TODO apparition/disparition-->
						<label for="pd" id="postdoc">Le docteur a effectué un Post-Doc<input type="checkbox" id="pd" name="pd" value="postdoc"/></label>
						<br/>
						<br/>
						
						<label for="dureepd" id="dureepostdoc">Durée effective ou prévue du Post-Doc (en mois)</label>
						<input type="text" id="dureepd" name="dureepostdoc" value="" size="20" maxlength="20"/>
						<br/>
						
						<label for="payspd" id="payspostdoc">Pays du Post-Doc</label>
						<select id="payspd" name="payspd">';
							$resultat=$informations["lesPays"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->CODE_PAYS.'">'.$resultat[$x]->NOM_PAYS.'</option>';
							}
							echo '
						</select>
						<br/>
					</div>
					
					<div id="PT3">
						<label for="qualifcnu" id="qualificationcnu">Qualification CNU</label>
						<select id="qualifcnu" name="qualifcnu">
							<option value="0" selected>non</option> 
							<option value="1" >oui avec succès</option>
							<option value="2">oui avec échec</option>
							<option value="3">non par impossibilité</option>
							<option value="4">non pas candidat</option>
						</select>
						<br/>

<!--TODO apparition/disparition-->						
						<label for="ouisucces" id="succesqualif">Si oui avec succès, Sections de qualification</label>
						<input type="text" id="ouisucces" name="succes" value="" size="20" maxlength="50"/>
					</div>	
			</div>
			
			
			
			
			<div id="Ttrois">
					<h1 id="titreT3">Situation au 1er Mars</h1>
					<br/>
					
					<label for="jobdoc3" id="jobdocteur3">Profession du Docteur</label>
						<select id="jobdoc3" name="jobdoc3">';
							$resultat=$informations["lesFonctions"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
									echo '<option value="'.$resultat[$x]->NUM_FONCTION.'">'.$resultat[$x]->ACTIVITE_FONCTION.'</option>';
							}
							echo'
						</select>
					<br/>
					
					<label for="situationdoc3" id="situationdocteur3">Situation du Docteur</label>
					<input type="text" id="situationdoc3" name="situationdoc3" value="" size="20" maxlength="80" />
					<br/>
					
					<label for="codeprof3" id="codeprofession3">Code profession</label>
						<select id="codeprof3" name="codeprof3">';
							$resultat=$informations["lesProfDoc"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
									echo '<option value="'.$resultat[$x]->CODE_PROFESSION_INSEE.'">'.$resultat[$x]->PROFESSION_INSEE.'</option>';
							}
							echo'
						</select>
					<br/>
					
					<label for="scteuract3" id="secteuractivite3">Secteur Activité</label>
						<select id="scteuract3" name="secteuract3">';
							$resultat=$informations["lesSecteurs"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
									echo '<option value="'.$resultat[$x]->NUM_SECTEUR_ACTIVITE.'">'.$resultat[$x]->CODE_ACTIVITE.' '.$resultat[$x]->LIBELLE_ACTIVITE.'</option>';
							}
							echo'
						</select>
					<br/>
					
					<label for="jobfr3" id="jobfrance3">Travail en France<input type="checkbox" name="jobfr3" tabindex="160" disabled="" id="jobfr3" value="france"/></label>
					<br/>
					<br/>
					
<!--TODO faire apparaitre/disparaitre si checkbox coche-->					
					<label for="dep3" id="departement3">Departement du lieu de travail si France</label>
					<input type="text" id="dep3" tabindex="80" onblur="activer_checkbox()" name="dep3" value="" size="20" maxlength="50" />
					<br/>
					
					<label for="docdeter3" id="doctorantdeter3">Doctorat déterminant pour l\'embauche<input type="checkbox" id="docdeter3" name="docdeter3" value="france"/></label>
					<br/>
					<br/>
					
					<label for="paystravail3" id="paysjob3">Pays du lieu de travail si Etranger</label>
						<select id="paystravail3" name="paystravail3">';
							$resultat=$informations["lesPays"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->CODE_PAYS.'">'.$resultat[$x]->NOM_PAYS.'</option>';
							}
							echo '
						</select>
					<br/>
					
					<label for="salaire3" id="salairenet3">Salaire net mensuel</label>
					<input type="text" id="salaire3" name="salairenet3" value="" size="20" maxlength="50"/>
					<label id="euro3">€</label>
					<br/>
					
					<label for="recrut3" id="recrutement3">Date de recrutement dans cet emploi</label>
					<input type="date" id="recrut3" name="recrutement3" value="" size="20" maxlength="50"/>
					<br/>
			</div>
			
			
			
			
			
			
			<div id="Tdeux">
					<h1 id="titreT2">Situation au 1er Mars</h1>
					<br/>
					
					<label for="jobdoc" id="jobdocteur">Profession du Docteur</label>
						<select id="jobdoc" name="jobdoc">';
							$resultat=$informations["lesFonctions"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
									echo '<option value="'.$resultat[$x]->NUM_FONCTION.'">'.$resultat[$x]->ACTIVITE_FONCTION.'</option>';
							}
							echo'
						</select>
					<br/>
					
					<label for="situationdoc" id="situationdocteur">Situation du Docteur</label>
					<input type="text" id="situationdoc" name="situationdoc" value="" size="20" maxlength="80" />
					<br/>
					
					<label for="codeprof" id="codeprofession">Code profession</label>
						<select id="codeprof" name="codeprof">';
							$resultat=$informations["lesProfDoc"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
									echo '<option value="'.$resultat[$x]->CODE_PROFESSION_INSEE.'">'.$resultat[$x]->PROFESSION_INSEE.'</option>';
							}
							echo'
						</select>
					<br/>
					
					<label for="scteuract" id="secteuractivite">Secteur Activité</label>
						<select id="scteuract" name="secteuract">';
							$resultat=$informations["lesSecteurs"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
									echo '<option value="'.$resultat[$x]->NUM_SECTEUR_ACTIVITE.'">'.$resultat[$x]->CODE_ACTIVITE.' '.$resultat[$x]->LIBELLE_ACTIVITE.'</option>';
							}
							echo'
						</select>
					<br/>
					
					<label for="jobfr" id="jobfrance">Travail en France<input type="checkbox" id="jobfr" name="jobfr" value="france"/></label>
					<br/>
					<br/>
					
<!--TODO faire apparaitre/disparaitre si checkbox coche-->					
					<label for="dep" id="departement">Departement du lieu de travail si France</label>
					<input type="text" id="dep" name="dep" value="" size="20" maxlength="50" />
					<br/>
					
					<label for="docdeter" id="doctorantdeter">Doctorat déterminant pour l\'embauche<input type="checkbox" name="docdeter" id="docdeter" value="france"/></label>
					<br/>	
					<br/>
					
					<label for="paystravail" id="paysjob">Pays du lieu de travail si Etranger</label>
						<select id="paystravail" name="paystravail">';
							$resultat=$informations["lesPays"];
							$len = count($resultat);
							for($x = 0; $x < $len; $x++) {
								echo '<option value="'.$resultat[$x]->CODE_PAYS.'">'.$resultat[$x]->NOM_PAYS.'</option>';
							}
							echo '
						</select>
					<br/>
					
					<label for="salaire" id="salairenet">Salaire net mensuel</label>
					<input type="text" id="salaire" name="salairenet" value="" size="20" maxlength="50"/>
					<label id="euro">€</label>
					<br/>
					
					<label for="recrut" id="recrutement">Date de recrutement dans cet emploi</label>
					<input type="date" id="recrut" name="recrutement" value="" size="20" maxlength="50"/>
					<br/>
						
				</div>
			</form>	
		</div>
		';
	}


function afficherBoutonMenu(){
	echo '
	<form id="monForm" method="post" action="Doctorant.php">
	<input type="submit" value="Retour au menu" name="go_To_Menu" id="boutonRetourMenu"/>
	</form>';
}

function afficherMessage($var){
	echo '<p>'.$var.'</p>';
	}
