<!DOCTYPE html>
<meta charset="UTF-8">
<html>
	<head>
	<link href="style.css" type="text/css" rel="stylesheet" />
		<title>
			Acceuil
		</title>
	
	</head>

<form method="post" action="connexion.php">
<fieldset>
    <legend>Inscription</legend>
	<br/>
    <label for="login" id="log">Nom d'utilisateur</label>
    <input type="text" id="login" name="login" value=""  size="20" maxlength="20" />
    <br />
    <br/>

    <label for="password">Mot de passe </label>
    <input type="text" id="password" name="password" value="" size="20" maxlength="20" required/>
    <br />
    <br/>

	<label for="grade">Choix du grade </label>
    <input type="text" id="grade" name="grade" value="" size="20" maxlength="20" />
    <br />
    <br/>


    <input type="submit" value="Connexion" name="ajouter" />
    <br />
	<br/>
	
	<?php echo $contenu; ?>
	
</fieldset>
<br/>
<!---<a href="Formulaire.html" >Creation de compte</a>-->


</html>
