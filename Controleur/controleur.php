<?php
require_once('Modele/modele.php');
require_once('Vue/vue.php');

function CtlAccueil(){
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
function CtlInformationsSaisiesValides($informations){
		return true;
	
}

function CtlEnregistrerDoctorant($informations){
	if(!$these=ajouterThese($informations["informationsThese"]["paysCoTutelle"],$informations["informationsThese"]["codeFinancement"],$informations["informationsThese"]["discipline"],$informations["informationsThese"]["sujetThese"],$informations["informationsThese"]["cotutelleok"],$informations["informationsThese"]["univ"],$informations["informationsThese"]["alloc"],$informations["informationsThese"]["compInfo"],$informations["informationsThese"]["cies"],$informations["informationsThese"]["laboInsc"],$informations["informationsThese"]["compoInsc"],$informations["etatCivil"]["DocAbandon"]))
		afficherMessage("erreur ajout these");
	/*ajouterAnneeInscription($informations["informationsThese"]["anneeInsc2"],$these);
	ajouterAnneeInscription($informations["informationsThese"]["anneeInsc3"],$these);
	ajouterAnneeInscription($informations["informationsThese"]["anneeInsc4"],$these);*/
	
	if(!$soutenance=ajouterSoutenance($informations["soutenance"]["mention"],$informations["soutenance"]["inscsout"],$informations["soutenance"]["desrapp"],$informations["soutenance"]["compJury"],$informations["soutenance"]["dateValidRapp"],$informations["soutenance"]["2rapp"],$informations["soutenance"]["dateCompositionJury"],$informations["soutenance"]["intituledoctorat"],$informations["soutenance"]["numerodoc"]))
			afficherMessage("erreur ajout soutenance");
	
	
	$informationsDoctorant=array();
	$informationsDoctorant["code_pays"]=$informations["etatCivil"]["paysOD"];
	if ($informations["etatCivil"]["sexe"]=="homme")	$informationsDoctorant["civilite"]=1;
	else $informationsDoctorant["civilite"]=2;
	$informationsDoctorant["these"]=$these;
	$informationsDoctorant["soutenance"]=$soutenance;
	$informationsDoctorant["laboratoire"]=$informations["informationsThese"]["laboEx"];
	$informationsDoctorant["nom"]=$informations["etatCivil"]["nomDoc"];
	$informationsDoctorant["prenom"]=$informations["etatCivil"]["prenomDoc"];
	$informationsDoctorant["date_naissance"]=$informations["etatCivil"]["dateNaiss"];
	$informationsDoctorant["nom_epouse"]=$informations["etatCivil"]["nomDepouse"];
	if ($informations["etatCivil"]["sexe"]=="homme")	$informationsDoctorant["sexe"]="H";
	else $informationsDoctorant["sexe"]="F";
	$informationsDoctorant["code_apogee"]=$informations["etatCivil"]["INEDoc"];
	$informationsDoctorant["adresse_rue"]=$informations["etatCivil"]["adresseDoc"];
	$informationsDoctorant["code_postal"]=$informations["etatCivil"]["CPDoc"];
	$informationsDoctorant["adresse_ville"]=$informations["etatCivil"]["villeDoc"];
	$informationsDoctorant["telephone"]=$informations["etatCivil"]["telDoc"];
	$informationsDoctorant["fax"]=$informations["etatCivil"]["faxDoc"];
	$informationsDoctorant["e_mail"]=$informations["etatCivil"]["mailDoc"];
	$informationsDoctorant["page_web"]=$informations["etatCivil"]["webDoc"];
	$informationsDoctorant["nom_parents"]=$informations["etatCivil"]["nomParDoc"];
	$informationsDoctorant["rue_parents"]=$informations["etatCivil"]["adPar"];
	$informationsDoctorant["code_postal_parents"]=$informations["etatCivil"]["CPPar"];
	$informationsDoctorant["ville_parents"]=$informations["etatCivil"]["villePar"];
	$informationsDoctorant["donnees_publiables"]=$informations["etatCivil"]["publi"];
	$informationsDoctorant["presence"]=0;			//!!!!!!!!!!!!!!
	$informationsDoctorant["selection"]=0;
	$informationsDoctorant["retard_inscription"]=0;
	$informationsDoctorant["tri"]=0;
	$informationsDoctorant["emargement"]=0;
	$informationsDoctorant["dossier"]=0;
	$informationsDoctorant["fiche_renseignement"]=0;
	$informationsDoctorant["lettre_reunion"]=0;
	$informationsDoctorant["nombre_cours_valides"]=0; //!!!!!!!!!!!!!
	$informationsDoctorant["telephone_labo"]=$informations["informationsThese"]["telLabo"];
	$informationsDoctorant["poste_labo"]=$informations["informationsThese"]["posteLabo"];
	$informationsDoctorant["fax_labo"]=$informations["informationsThese"]["faxLabo"];
	$informationsDoctorant["e_mail_labo"]=$informations["informationsThese"]["mailLabo"];
	if(!$doctorant=ajouterDoctorant($informationsDoctorant))
		afficherMessage("erreur ajout doctorant");
	
	//ajouterSuivre($doctorant,);
	
	
	/*ajouterPreThese($informations["preThese"]["professionAvant"],$informations["preThese"]["diplomeComplementaire"],$informations["preThese"]["diplomeInscri"],$informations["preThese"]["numDea"],$informations["preThese"]["dea"],$informations["preThese"]["andea"],$informations["preThese"]["universitedea"],$informations["preThese"]["moydea"],$informations["preThese"]["classement"],$informations["preThese"]["effdea"],);
	$preThese=last_id();
	ajouterEffectuePreThese($preThese,$doctorant);*/
	//ajouterEncadrePar();
	/*ajouterTypePostDoc();
	ajouterPostDoc();*/
	//ajouterQualification();
	//ajouterValider();
}




function CtlDeconnexion(){
	CtlAccueil();
}

function CtlMenu(){
	setCharSet();
	afficherMenu();
	afficherDeconnexion();
	}

function CtlGestionDoctorant(){
	if($lesPays=getTable("PAYS") ){
		$arrayLesPays=array();
		while($row = mysql_fetch_object($lesPays)){
			$arrayLesPays[] = $row;
		}
		if($lesLabos=getTable("LABORATOIRE") ){
			$arrayLesLabos=array();
			while($row = mysql_fetch_object($lesLabos)){
				$arrayLesLabos[] = $row;
			}
			if($lesCompos=getTable("COMPOSANTE") ){
				$arrayLesCompos=array();
				while($row = mysql_fetch_object($lesCompos)){
					$arrayLesCompos[] = $row;
				}	
				if($lesDisciplines=getTable("DISCIPLINE") ){
					$arrayLesDisciplines=array();
					while($row = mysql_fetch_object($lesDisciplines)){
						$arrayLesDisciplines[] = $row;
					}
					if($lesChercheurs=getTable("CHERCHEUR_LABORATOIRE") ){
						$arrayLesChercheurs=array();
						while($row = mysql_fetch_object($lesChercheurs)){
							$arrayLesChercheurs[] = $row;
						}
						if($lesFinancements=getTable("FINANCEMENT") ){
							$arrayLesFinancements=array();
							while($row = mysql_fetch_object($lesFinancements)){
								$arrayLesFinancements[] = $row;
							}
							if($lesAnnees=getTable("ANNEE") ){
								$arrayLesAnnees=array();
								while($row = mysql_fetch_object($lesAnnees)){
									$arrayLesAnnees[] = $row;
								}
								if($lesProfAvant=getTable("PROFESSION_AVANT") ){
									$arrayLesProfAvant=array();
									while($row = mysql_fetch_object($lesProfAvant)){
										$arrayLesProfAvant[] = $row;
									}
									if($lesDiplomes=getTable("DIPLOME") ){
										$arrayLesDiplomes=array();
										while($row = mysql_fetch_object($lesDiplomes)){
											$arrayLesDiplomes[] = $row;
									}									
										if($lesModules=getTable("MODULE") ){
											$arrayLesModuless=array();
											while($row = mysql_fetch_object($lesModules)){
												$arrayLesModules[] = $row;
										}
											if($lesMentions=getTable("MENTION") ){
												$arrayLesMentions=array();
												while($row = mysql_fetch_object($lesMentions)){
													$arrayLesMentions[] = $row;
											}
												if($lesProfDoc=getTable("PROFESSION_DOCTORALE") ){
													$arrayLesProfDoc=array();
													while($row = mysql_fetch_object($lesProfDoc)){
														$arrayLesProfDoc[] = $row;
												}
													if($lesFonctions=getTable("FONCTION") ){
														$arrayLesFonctions=array();
														while($row = mysql_fetch_object($lesFonctions)){
															$arrayLesFonctions[] = $row;
													}
														if($lesSecteurs=getTable("SECTEUR_ACTIVITE") ){
															$arrayLesSecteurs=array();
															while($row = mysql_fetch_object($lesSecteurs)){
																$arrayLesSecteurs[] = $row;
														}
					
											$informations=array();
											$informations["lesPays"]=$arrayLesPays;
											$informations["lesLabos"]=$arrayLesLabos;
											$informations["lesCompos"]=$arrayLesCompos;
											$informations["lesDisciplines"]=$arrayLesDisciplines;
											$informations["lesChercheurs"]=$arrayLesChercheurs;
											$informations["lesFinancements"]=$arrayLesFinancements;
											$informations["lesAnnees"]=$arrayLesAnnees;
											$informations["lesProfAvant"]=$arrayLesProfAvant;
											$informations["lesDiplomes"]=$arrayLesDiplomes;
											$informations["lesModules"]=$arrayLesModules;
											$informations["lesMentions"]=$arrayLesMentions;
											$informations["lesProfDoc"]=$arrayLesProfDoc;
											$informations["lesFonctions"]=$arrayLesFonctions;
											$informations["lesSecteurs"]=$arrayLesSecteurs;
											
											
											setCharSet();
											afficherMenuGestionDoctorant($informations);
											afficherBoutonMenu();
											afficherDeconnexion();
														}		
														else{
															afficherErreur("Erreur lors de la récupération de la liste des secteurs d'activité .");
														}
													}		
													else{
														afficherErreur("Erreur lors de la récupération de la liste des fonctions doctorales .");
													}
												}		
												else{
													afficherErreur("Erreur lors de la récupération de la liste des professions doctorales.");
												}
											}		
											else{
												afficherErreur("Erreur lors de la récupération de la liste des mentions.");
											}
										}		
										else{
											afficherErreur("Erreur lors de la récupération de la liste des modules.");
										}
									}		
									else{
										afficherErreur("Erreur lors de la récupération de la liste des diplômes.");
									}
								}		
								else{
									afficherErreur("Erreur lors de la récupération de la liste des professions antérieures.");
								}	
							}		
							else{
								afficherErreur("Erreur lors de la récupération de la liste des années.");
							}	
						}		
						else{
							afficherErreur("Erreur lors de la récupération de la liste des financements.");
						}	
					}		
					else{
						afficherErreur("Erreur lors de la récupération de la liste des chercheurs.");
					}	
				}		
				else{
					afficherErreur("Erreur lors de la récupération de la liste des disciplines.");
				}			
			}		
			else{
				afficherErreur("Erreur lors de la récupération de la liste des composantes.");
			}			
				
		}		
		else{
			afficherErreur("Erreur lors de la récupération de la liste des labos.");
		}			
	}
	else{
		afficherErreur("Erreur lors de la récupération de la liste des pays.");
	}
}


function CtlGestionSaisies(){
	setCharSet();
	afficherGestionSaisies();
	afficherBoutonMenu();
	afficherDeconnexion();
}
