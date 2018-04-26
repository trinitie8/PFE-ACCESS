<!DOCTYPE html>
<meta charset="UTF-8">
<html>
	<head>
	<link href="Contenu/style.css" type="text/css" rel="stylesheet" />
		<title>
			Acceuil
		</title>
	
	</head>
	

<form method="post" action="Doctorant.php">
<fieldset>
    <legend>Accueil</legend>
	<br/>
    <label for="login" id="log">Nom d'utilisateur</label>
    <input type="text" id="login" name="login" value=""  size="20" maxlength="20" />
    <br />
    <br/>

    <label for="password">Mot de passe </label>
    <input type="text" id="password" name="password" value="" size="20" maxlength="20" required/>
    <br />
    <br/>

    <input type="submit" value="Connexion" name="connexion" />
    
    <br />
	<br/>
	
	<?php echo $contenu; ?>
	
</fieldset>
</form>
<form method="post" action="Doctorant.php">
    <input type="submit" value="Inscription" name="go_To_Inscription" />
    <input type="submit" value="Bypass" name="bypass" />
</form>
<br/> 


</html>
