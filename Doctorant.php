<?php
require_once('Controleur/controleur.php');
try{
	if(isset($_POST['connexion'])){
		$login=$_POST['login'];
		$password=$_POST['password'];
		CtlConnexion($login,$password);
		}
	else if(isset($_POST['go_To_Gestion_Doctorants'])){
		CtlGestionDoctorant();
	}
	else if(isset($_POST['go_To_Gestion_Saisies'])){
		CtlGestionSaisies();
	}
	
	else if(isset($_POST['go_To_Inscription'])){
		CtlInscription(); 
	}
	else if(isset($_POST['bypass'])){
		CtlMenu(); 
	}
	else if(isset($_POST['go_To_Menu'])){
		CtlMenu();
	}
	else if(isset($_POST['go_To_Accueil'])){
		CtlAccueil();
	}
	else if(isset($_POST['inscription'])){
		$login=$_POST['login'];
		$password=$_POST['password'];		
		$grade=$_POST['grade'];
		CtlEnregistrerInscription($login,$password,$grade);
		}
	else if(isset($_POST['deconnexion'])){
		CtlDeconnexion();
	}
	else if(isset($_POST['enregistrerDoctorant'])){
		$etatCivil=array();
		$etatCivil["nomDoc"]=$_POST['nomDoc'];
		$etatCivil["nomDepouse"]=$_POST['nomDepouse'];
		if (isset($_POST['dateNaiss']))
			$etatCivil["dateNaiss"]=$_POST['dateNaiss'];
		else $etatCivil["dateNaiss"]=null;
		
		$etatCivil["adresseDoc"]=$_POST['adresseDoc1'].' '.$_POST['adresseDoc2'];
		$etatCivil["villeDoc"]=$_POST['villeDoc'];
		$etatCivil["CPDoc"]=$_POST['CPDoc'];
		$etatCivil["telDoc"]=$_POST['telDoc'];
		$etatCivil["faxDoc"]=$_POST['faxDoc'];
		$etatCivil["mailDoc"]=$_POST['mailDoc'];
		$etatCivil["webDoc"]=$_POST['webDoc'];
		if(isset($_POST['publi']))
			$etatCivil["publi"]=1;
		else $etatCivil["publi"]=0;
		$etatCivil["prenomDoc"]=$_POST['prenomDoc'];
		$etatCivil["sexe"]=$_POST['sexe'];
		$etatCivil["INEDoc"]=$_POST['INEDoc'];
		$etatCivil["paysOD"]=$_POST['paysOD'];
		$etatCivil["nomParDoc"]=$_POST['nomParDoc'];
		$etatCivil["CPPar"]=$_POST['CPPar'];
		$etatCivil["adPar"]=$_POST['adPar1'].''.$_POST['adPar2'];
		$etatCivil["villePar"]=$_POST['villePar'];
		$etatCivil["commentaire"]=$_POST['commentaire'];
		if(isset($_POST['DocAbandon']))
			$etatCivil["DocAbandon"]=1;
		else $etatCivil["DocAbandon"]=0;
				
		$informationsThese=array();
		$informationsThese["laboInsc"]=$_POST['laboInsc'];
		$informationsThese["compoInsc"]=$_POST['compoInsc'];
		$informationsThese["discipline"]=$_POST['discipline'];
		$informationsThese["directeur"]=$_POST['directeur'];
		$informationsThese["coDir"]=$_POST['coDir'];
		$informationsThese["laboEx"]=$_POST['laboEx'];
		$informationsThese["telLabo"]=$_POST['telLabo'];
		$informationsThese["posteLabo"]=$_POST['posteLabo'];
		$informationsThese["faxLabo"]=$_POST['faxLabo'];
		$informationsThese["mailLabo"]=$_POST['mailLabo'];
		$informationsThese["sujetThese"]=$_POST['sujetThese'];
		if(isset($_POST['cotutelleok']))
			$informationsThese["cotutelleok"]=1;
		else $informationsThese["cotutelleok"]=0;
		$informationsThese["paysCoTutelle"]=$_POST['paysCoTutelle'];
		$informationsThese["univ"]=$_POST['univ'];
		if (isset($_POST['alloc']))
			$informationsThese["alloc"]=$_POST['alloc'];
		else $informationsThese["alloc"]=null;
		$informationsThese["codeFinancement"]=$_POST['codeFinancement'];
		$informationsThese["compInfo"]=$_POST['compInfo'];
		if(isset($_POST['cies']))
			$informationsThese["cies"]=1;
		else $informationsThese["cies"]=0;
		$informationsThese["anneeIns2"]=$_POST['anneeIns2'];
		$informationsThese["anneeIns3"]=$_POST['anneeIns3'];
		$informationsThese["anneeIns4"]=$_POST['anneeIns4'];
		
		$preThese=array();
		$preThese["professionAvant"]=$_POST['professionAvant'];
		$preThese["diplomeInscri"]=$_POST['diplomeInscri'];
		if(isset($_POST['diplomeComplementaire']))
			$preThese["diplomeComplementaire"]=1;
		else $preThese["diplomeComplementaire"]=0;
		if(isset($_POST['numDea']))
			$preThese["numDea"]=1;
		else $preThese["numDea"]=0;
		$preThese["dea"]=$_POST['dea'];
		$preThese["andea"]=$_POST['andea'];
		$preThese["universitedea"]=$_POST['universitedea'];
		$preThese["moydea"]=$_POST['moydea'];
		$preThese["classement"]=$_POST['classement'];
		$preThese["effdea"]=$_POST['effdea'];
		
		$cours=array();
		$cours["cda1suivi"]=$_POST['cda1suivi'];
		if(isset($_POST['cda1valide']))
			$cours["cda1valide"]=1;
		else $cours["cda1valide"]=0;
		$cours["msa1suivi"]=$_POST['msa1suivi'];
		if(isset($_POST['msa1valide']))
			$cours["msa1valide"]=1;
		else $cours["msa1valide"]=0;
		$cours["csa1suivi"]=$_POST['csa1suivi'];
		if(isset($_POST['csa1valide']))
			$cours["csa1valide"]=1;
		else $cours["csa1valide"]=0;
		$cours["commentaireA1"]=$_POST['commentaireA1'];
		$cours["cda2suivi"]=$_POST['cda2suivi'];
		if(isset($_POST['cda2valide']))
			$cours["cda2valide"]=1;
		else $cours["cda2valide"]=0;
		$cours["msa2suivi"]=$_POST['msa2suivi'];
		if(isset($_POST['msa2valide']))
			$cours["msa2valide"]=1;
		else $cours["msa2valide"]=0;
		$cours["csa2suivi"]=$_POST['csa2suivi'];
		if(isset($_POST['csa2valide']))
			$cours["csa2valide"]=1;
		else $cours["csa2valide"]=0;
		$cours["commentaireA2"]=$_POST['commentaireA2'];
		$cours["msa3suivi"]=$_POST['msa3suivi'];
		if(isset($_POST['msa3valide']))
			$cours["msa3valide"]=1;
		else $cours["msa3valide"]=0;
		$cours["csa3suivi"]=$_POST['csa3suivi'];
		if(isset($_POST['csa3valide']))
			$cours["csa3valide"]=1;
		else $cours["csa3valide"]=0;
		$cours["commentaireA3"]=$_POST['commentaireA3'];
		
		$soutenance=array();
		if(isset($_POST['inscsout']))
			$soutenance["inscsout"]=1;
		else $soutenance["inscsout"]=0;
		if(isset($_POST['desrapp']))
			$soutenance["desrapp"]=1;
		else $soutenance["desrapp"]=0;
		if(isset($_POST['compJury']))
			$soutenance["compJury"]=1;
		else $soutenance["compJury"]=0;
		if(isset($_POST['2rapp']))
			$soutenance["2rapp"]=1;
		else $soutenance["2rapp"]=0;
		if (isset($_POST['dateValidRapp']))
			$soutenance["dateValidRapp"]=$_POST['dateValidRapp'];
		else $soutenance["dateValidRapp"]=null;
		if (isset($_POST['dateCompositionJury']))
			$soutenance["dateCompositionJury"]=$_POST['dateCompositionJury'];
		else $soutenance["dateCompositionJury"]=null;
		$soutenance["intituledoctorat"]=$_POST['intituledoctorat'];
		$soutenance["numerodoc"]=$_POST['numerodoc'];
		$soutenance["mention"]=$_POST['mention'];
		
		$postThese=array();
		if(isset($_POST['formcomp']))
			$postThese["formcomp"]=1;
		else $postThese["formcomp"]=0;
		if(isset($_POST['ater']))
			$postThese["ater"]=1;
		else $postThese["ater"]=0;
		$postThese["formcomp"]=$_POST['formcomp'];
		$postThese["nomForm"]=$_POST['nomForm'];
		$postThese["heureForm"]=$_POST['heureForm'];
		if(isset($_POST['pd']))
			$postThese["pd"]=1;
		else $postThese["pd"]=0;
		$postThese["dureepostdoc"]=$_POST['dureepostdoc'];
		$postThese["payspd"]=$_POST['payspd'];
		$postThese["qualifcnu"]=$_POST['qualifcnu'];
		$postThese["succes"]=$_POST['succes'];
		
		$these3=array();
		$these3["jobdoc3"]=$_POST['jobdoc3'];
		$these3["situationdoc3"]=$_POST['situationdoc3'];
		$these3["codeprof3"]=$_POST['codeprof3'];
		$these3["secteuract3"]=$_POST['secteuract3'];
		if(isset($_POST['jobfr3']))
			$these3["jobfr3"]=1;
		else $these3["jobfr3"]=0;
		$these3["dep3"]=$_POST['dep3'];
		if(isset($_POST['docdeter3']))
			$these3["docdeter3"]=1;
		else $these3["docdeter3"]=0;;
		$these3["paystravail3"]=$_POST['paystravail3'];
		$these3["salairenet3"]=$_POST['salairenet3'];
		if (isset($_POST['recrutement3']))
			$these2["recrutement3"]=$_POST['recrutement3'];
		else $these2["recrutement3"]=null;
		
		$these2=array();
		$these2["jobdoc"]=$_POST['jobdoc'];
		$these2["situationdoc"]=$_POST['situationdoc'];
		$these2["codeprof"]=$_POST['codeprof'];
		$these2["secteuract"]=$_POST['secteuract'];
		if(isset($_POST['jobfr']))
			$these2["jobfr"]=1;
		else $these2["jobfr"]=0;
		$these2["dep"]=$_POST['dep'];
		if(isset($_POST['docdeter']))
			$these2["docdeter"]=1;
		else $these2["docdeter"]=0;
		$these2["paystravail"]=$_POST['paystravail'];
		$these2["salairenet"]=$_POST['salairenet'];
		if (isset($_POST['recrutement']))
			$these2["recrutement"]=$_POST['recrutement'];
		else $these2["recrutement"]=null;
		
		
		$informations=array();
		$informations["etatCivil"]=$etatCivil;
		$informations["preThese"]=$preThese;
		$informations["informationsThese"]=$informationsThese;
		$informations["soutenance"]=$soutenance;
		$informations["cours"]=$cours;
		$informations["postThese"]=$postThese;
		$informations["these2"]=$these2;
		$informations["these3"]=$these3;
		
		if(CtlInformationsSaisiesValides($informations)){
			CtlEnregistrerDoctorant($informations);
			afficherMessage("Etudiant mis à jour dans la base de données.");
		}
		else{
		}
				
	}
	else{
		CtlAccueil();
		}

}catch (Exception $e ){
	$msg=$e->getMessage();
	CtlErreur($msg);
	}
