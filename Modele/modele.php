<?php

function ajouterUser($login,$password,$grade){
	connexionBDD();
	$result=mysql_query("insert into UTILISATEUR values ('$login','$password','$grade')");
	deconnexionBDD();	
	return $result;
	}
	
function isExistingUser($login){
	connexionBDD();
	if($resultat=mysql_fetch_object(mysql_query("select * from UTILISATEUR where login='$login'"))) $rep=true;
	else $rep=false;
	deconnexionBDD();
	return $rep;
	}
	
function checkUser($login,$mdp){
		
	connexionBDD();
	if($resultat=mysql_fetch_object(mysql_query("SELECT * FROM UTILISATEUR WHERE LOGIN='$login' AND PASSWORD='$mdp'"))){
		if($login==$resultat->LOGIN && $mdp==$resultat->PASSWORD) return true;
	}
	deconnexionBDD();
	return false;
}

function getTable($table){
	connexionBDD();
	$resultat=mysql_query("SELECT * FROM ".$table);
	deconnexionBDD();
	return $resultat;
}

function getColonne($table,$colonne){
	connexionBDD();
	$resultat=mysql_query("SELECT ".$colonne." FROM ".$table);
	deconnexionBDD();
	return $resultat;
}

function ajouterAnnee($annee){
	connexionBDD();
	$result=mysql_query("insert into ANNEE (ANNEE) values ('$annee')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterAnneeInscription($annee,$these){
	connexionBDD();
	$result=mysql_query("insert into ANNEE_INSCRIPTION values ($annee,$these)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterChercheur($civilite,$nom,$prenom,$telephone,$telephone2,$fax,$mail){
	connexionBDD();
	$result=mysql_query("insert into CHERCHEUR_LABORATOIRE (NUM_CIVILITE,NOM_CHERCHEUR,PRENOM_CHERCHEUR,TELEPHONE_CHERCHEUR,TELEPHONE2_CHERCHEUR,FAX_CHERCHEUR,E_MAIL_CHERCHEUR)  
	values ($civilite,'$nom','$prenom','$telephone','$telephone2','$fax,$mail')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterCivilite($civilite){
	connexionBDD();
	$result=mysql_query("insert into CIVILITE(CIVILITE) values ('$civilite')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterComposante($composante){
	connexionBDD();
	$result=mysql_query("insert into COMPOSANTE (LIBELLE_COMPOSANTE) values ('$composante')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterComposanteRatachement($composante,$labo){
	connexionBDD();
	$result=mysql_query("insert into COMPOSANTE_RATACHEMENT values ($composante,$labo)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterDEA($code,$intitule){
	connexionBDD();
	$result=mysql_query("insert into DEA_LOCAUX (CODE_NATIONAL_DEA,INTITULE_DEA_LOCAL) values ('$code','$intitule')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterDiplome($complementaire,$inscription,$libelle){
	connexionBDD();
	$result=mysql_query("insert into DIPLOME(DIPLOME_COMPLEMENTAIRE,DIPLOME_INSCCRIPTION,LIBELLE_DIPLOME) values ($complementaire,$inscription,'$libelle')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterDirecteur_Laboratoire($chercheur,$labo){
	connexionBDD();
	$result=mysql_query("insert into DIRECTEUR_LABORATOIRE values ($chercheur,$labo)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterDiscipline($nom,$codeDS,$codeRSD,$regroupement){
	connexionBDD();
	$result=mysql_query("insert into DISCIPLINE(NOM_DISCIPLINE,CODE_DS_DISCIPLINE,CODE_RSD_DISCIPLINE,REGROUPEMENT_SECTION_DISCIPLINE) values ('$nom',$codeDS,$codeRSD,'$regroupement')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterDoctorant($informations){
	connexionBDD();
	$code_pays=$informations['code_pays'];$civilite=$informations['civilite'];$these=$informations['these'];$soutenance=$informations['soutenance'];$laboratoire=$informations['laboratoire'];$nom=$informations['nom'];$prenom=$informations['prenom'];$date_naissance=$informations['date_naissance'];$nom_epouse=$informations['nom_epouse'];$sexe=$informations['sexe'];$code_apogee=$informations['code_apogee'];$adresse_rue=$informations['adresse_rue'];$code_postal=$informations['code_postal']; $adresse_ville=$informations['adresse_ville'];$telephone=$informations['telephone'];$fax=$informations['fax'];$e_mail=$informations['e_mail'];$page_web=$informations['page_web'];$nom_parents=$informations['nom_parents'];$rue_parents=$informations['rue_parents'];$code_postal_parents=$informations['code_postal_parents'];$ville_parents=$informations['ville_parents'];$donnees_publiables=$informations['donnees_publiables'];$presence=$informations['presence'];$selection=$informations['selection'];$retard_inscription=$informations['retard_inscription'];$tri=$informations['tri'];$emargement=$informations['emargement'];$dossier=$informations['dossier'];$fiche_renseignement=$informations['fiche_renseignement'];$lettre_reunion=$informations['lettre_reunion'];$nombre_cours_valides=$informations['nombre_cours_valides'];$telephone_labo=$informations['telephone_labo'];$poste_labo=$informations['poste_labo'];$fax_labo=$informations['fax_labo'];$e_mail_labo=$informations['e_mail_labo'];
	$result=mysql_query("insert into DOCTORANT(CODE_PAYS,NUM_CIVILITE,NUM_THESE,NUM_SOUTENANCE,NUM_DE_LABORATOIRE,NOM_DOCTORANT,PRENOM_DOCTORANT,DATE_NAISSANCE_DOCTORANT,NOM_EPOUSE_DOCTORANT,SEXE,CODE_APOGEE_DOCTORANT,ADRESSE_RUE_DOCTORANT,ADRESSE_CODE_POSTALE_DOCTORANT,ADRESSE_VILLE_DOCTORANT,TELEPHONE_PERSONNEL_DOCTORANT,TELEPHONE_FAX_DOCTORANT,E_MAIL_PERSONNEL_DOCTORANT,PAGE_WEB_PERSONNELLE_DOCTORANT,NOM_PARENTS_DOCTORANT,ADRESSE_RUE_PARENTS_DOCTORANT,ADRESSE_CODE_POSTAL_PARENTS_DOCTORANT,ADRESSE_VILLE_PARENTS_DOCTORANT,DONNEES_PUBLIABLES_DOCTORANT,PRESENCE_DOCTORANT,SELECTION_DOCTORANT,RETARD_INSCRIPTION_DOCTORANT,TRI_DOCTORANT,EMARGEMENT_DOCTORANT,DOSSIER_DOCTORANT,FICHE_RENSEIGNEMENT_DOCTORANT,LETTRE_REUNION_DOCTORANT,NOMBRE_COURS_VALIDES,TELEPHONE_DOCTORANT_LABORATOIRE,POSTE_DOCTORANT_LABORATOIRE,FAX_DOCTORANT_LABORATOIRE,E_MAIL_DOCTORANT_LABORATOIRE)
		values ($code_pays,$civilite,$these,$soutenance,$laboratoire,'$nom','$prenom','$date_naissance','$nom_epouse','$sexe','$code_apogee','$adresse_rue','$code_postal','$adresse_ville','$telephone','$fax','
		$e_mail','$page_web','$nom_parents','$rue_parents','$code_postal_parents','$ville_parents',$donnees_publiables,$presence,$selection,$retard_inscription,$tri,$emargement,$dossier
		,$fiche_renseignement,$lettre_reunion,$nombre_cours_valides,'$telephone_labo','$poste_labo','$fax_labo','$e_mail_labo')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterEffectuePreThese($preThese,$doctorant){
	connexionBDD();
	$result=mysql_query("insert into EFFECTUE_PRE_THESE values ($preThese,$Doctorant)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterEncadrePar($doctorant,$chercheur){
	connexionBDD();
	$result=mysql_query("insert into ENCADRE_PAR values ($doctorant,$chercheur)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterEnseignant($telephone,$mail){
	connexionBDD();
	$result=mysql_query("insert into ENSEIGNANT(TELEPHONE_ENSEIGNANT,E_MAIL_ENSEIGNANT) values ('$telephone','$mail')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterFinancement($financmeent){
	connexionBDD();
	$result=mysql_query("insert into FINANCEMENT(FINANCEMENT) values ('$financement')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterFonction($activite,$libelle){
	connexionBDD();
	$result=mysql_query("insert into FONCTION(ACTIVITE_FONCTION,LIBELLE_DONCTION) values ('$activite','$libelle')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterLaboratoire($organisme,$prioritaire,$abrege,$nom,$rue,$code_postal,$ville,$telephone,$fax){
	connexionBDD();
	$result=mysql_query("insert into LABORATOIRE(NUM8ORGANISME,PRIORITAIRE,ABREGE_LABORATOIRE,NOM_LABORATOIRE,RUE_LABORATOIRE,CODE_POSTAL_LABORATOIRE,VILLE_LABORATOIRE,TELEPHONE_LABORATOIRE,FAX_LABORATOIRE)
	 values ($organisme,$prioritaire,'$abrege','$nom','$rue',$code_postal,'$ville','$telephone','$fax')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterMention($mention){
	connexionBDD();
	$result=mysql_query("insert into MENTION(NOM_MENTION) values ('$mention')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterModule($enseignant,$dea,$cd_ou_ms,$code,$descriptif,$visibilite){
	connexionBDD();
	$result=mysql_query("insert into MODULE(NUM_ENSEIGNANT,NUM_DEA_LOCAUX,COURS_CD_OU_MS,CODE_MODULE,DESCRIPTIF_MODULE,VISIBILITE_MODULE)
	 values ($enseignant,$dea,$cd_ou_ms,$code,'$descriptif',$visibilite)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterOrganisme($libelle,$site,$type_equipe){
	connexionBDD();
	$result=mysql_query("insert into ORGANISME(LIBELLE_ORGANISME,STEWEB_ORGANISME,TYPE_EQUIPE)
	 values ('$libelle','$site','$type_equipe')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterPays($nom,$ordre){
	connexionBDD();
	$result=mysql_query("insert into PAYS(NOM_PAYS,ORDRE) values ('$nom',$ordre)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterPostDoc($doctorant,$post_doc,$annee){
	connexionBDD();
	$result=mysql_query("insert into POST_DOC values ($doctorant,$post_doc,$annee)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterPreThese($profession,$diplome,$diplome_insc,$dea,$libelle_dea,$annee_dea,$univ_dea,$moyenne_dea,$classement,$effectif){
	connexionBDD();
	$result=mysql_query("insert into UTILISATEURS(NUM_PROFESSION_AVANT_THESE,NUM_DIPLOME,NUM_DIPLOME_INSCRIPTION,NUM_DEA,LIBELLE_DEA,ANNEE_DEA,UNIVERSITE_DEA,MOYENNE_DEA,CLASSEMENT_DEA,EFFECTIF_DEA)
	 values ($profession,$diplome,$diplome_insc,$dea,'$libelle_dea',$annee_dea,'$univ_dea',$moyenne_dea,$classement,$effectif)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterProfessionAvant($profession){
	connexionBDD();
	$result=mysql_query("insert into PROFESSION_AVANT(PROFESSION_ANT2RIEURE) values ('$profession')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterProfessionDoctorale($profession){
	connexionBDD();
	$result=mysql_query("insert into PROFESSION_DOCTORALE(PROFESSION_INSEE) values ('$profession')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterQualification($code,$doctorant,$annee,$section){
	connexionBDD();
	$result=mysql_query("insert into QUALIFICATION_CNU values ($code,$doctorant,$annee,'$section')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterSecteurActivite($code,$libelle){
	connexionBDD();
	$result=mysql_query("insert into SECTEUR_ACTIVITE(CODE_ACTIVITE,LIBELLE_ACTIVITE) values ($code,'$libelle')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterSectionCNU($cnu,$dns,$section){
	connexionBDD();
	$result=mysql_query("insert into SECTION_CNU values ($cnu,$dns,$section)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterSoutenance($mention,$inscription,$designation,$composition,$date_rapport,$rapport_recu,$bureau,$intitule,$doctorat){
	connexionBDD();
	$result=mysql_query("insert into SOUTENANCE(NUM_MENTION,INSCRIPTION_SOUTENANCE,DESIGNATION_RAPPORTEURS,COMPOSITION_JURY,RAPPORT_DONNEE_BUREAU,RAPPORT_RECU,BUREAU_JURY,INTITULE_DOCTORAT,NUM_DOCTORAT)
	 values ($mention,$inscription,$designation,$composition,'$date_rapport',$rapport_recu,'$bureau','$intitule','$doctorat')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterSuivre($doctorant,$module,$annee,$commentaire,$valable_validation){
	connexionBDD();
	$result=mysql_query("insert into SUIVRE values ($doctorant,$module,$annee,'$commentaire',$valable_validation)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterThese($pays,$financement,$discipline,$sujet,$co_tutelle,$universite,$date,$informations,$moniteur,$lien,$composante,$abandon){
	connexionBDD();
	$result=mysql_query("insert into THESE(CODE_PAYS,CODE_FINANCEMENT,CODE_DISCIPLINE,SUJET_THESE,CO_TUTELLE_THESE,UNIVERSITE_CO_TUTELLE_THESE,DATE_DEBUT_ALLOCATION_FINANCEMENT,INFORMATIONS_COMPLEMENTAIRE_FINANCEMENT,MONITEUR_CIES_FINANCEMENT,LIEN_LABORATOIRE,COMPOSANTE_INSCRIPTION,ABANDON_THESE)
	 values ($pays,$financement,$discipline,'$sujet',$co_tutelle,'$universite','$date','$informations',$moniteur,$lien,$composante,$abandon)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterTravailPour($labo,$chercheur){
	connexionBDD();
	$result=mysql_query("insert into TRAVAIL_POUR values ($labo,$chercheur)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterTypePostDoc($code_profession,$fonction,$secteur_activite,$pays,$ater,$formation,$libelle_formation,$heures_formation,$duree,$profession_docteur,$departement,$determinant,$salaire,$date_recrutement){
	connexionBDD();
	$result=mysql_query("insert into TYPE_POST_DOC(CODE_PROFESSION_INSEE,NUM_FONCTION,NUM_SECTEUR_ACTIVITE,CODE_PAYS,ATER,FORMATION_COMPLEMENTAIRE,LIBELLE_FORMATION_COMPLEMENTAIRE,NOMBRE_HEURE_FORMATION,DUREE_POST_DOC,PROFESSION_DOCTEUR,DEPARTEMENT_SI_FRANCE,DETERMINANT_EMBAUCHE,SALAIRE_MENSUEL,DATE_RECRUTEMENT)
	 values ($code_profession,$fonction,$secteur_activite,$pays,$ater,$formation,'$libelle_formation',$heures_formation,$duree,'$profession_docteur',$departement,$determinant,$salaire,'$date_recrutement')");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();	
	return $result;
	}
function ajouterValider($doctorant,$module){
	connexionBDD();
	$result=mysql_query("insert into VALIDER values ($doctorant,$module)");
	if ($result) $result=mysql_insert_id();
	deconnexionBDD();
	return $result;
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
	
