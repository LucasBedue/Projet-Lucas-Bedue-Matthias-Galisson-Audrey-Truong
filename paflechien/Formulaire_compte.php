<!DOCTYPE html>
<html>
<head>
	<title>Création de compte</title>
</head>
<body>
	<h1>Création de compte</h1>
	<form action="Sigin.php" method="post">
		<label for="nom">Nom :</label>
		<input type="text" name="nom" id="nom" required><br>

		<label for="prenom">Prénom :</label>
		<input type="text" name="prenom" id="prenom" required><br>

		<label for="mail">Email :</label>
		<input type="text" name="mail" id="mail" required><br>

		<label for="mdp">Mot de passe :</label>
		<input type="password" name="mdp" id="mdp" required><br>

		<label for="role">Vous êtes :</label>
		<select name="role" id="role" required>
			<option value="Jeune">Jeune</option>
			<option value="Referent">Référent</option>
			<option value="Consultant">Consultant</option>
		</select><br>
			
		<input type="submit" value="Créer le compte">
	</form>

    <td> 
                
                <form method="post" action="login.php">
                <input type="submit" value="Déja un compte?"> </form>
                
    </td>
	
</body>
</html>
