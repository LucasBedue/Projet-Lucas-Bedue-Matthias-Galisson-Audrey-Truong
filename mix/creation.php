<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Login - Jeunes 6.4</title>
	</head>

	<body>
		<link type="text/css" rel="stylesheet" href="creation.css" />
		
		<div class="whole">
			<div class="head">
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">CRÉATION</p>
			</div>

			<div class="bodybg">

				<div class="texttop">
					<p>
						Créez un compte
					</p>
				</div>
                <div class="login2">
                    <form action="Signin.php" method="post">
                        <label for="nom">Nom :</label>
                        <input type="text" name="nom" id="nom" required><br>
                
                        <label for="prenom">Prénom :</label>
                        <input type="text" name="prenom" id="prenom" required><br>
                
                        <label for="date_naissance">Date de naissance :</label>
                        <input type="date" name="date_naissance" id="date_naissance" required><br>
                
                        <label for="mail">Email :</label>
                        <input type="text" name="mail" id="mail" required><br>
                
                        <label for="mdp">Mot de passe :</label>
                        <input type="password" name="mdp" id="mdp" required><br>
                
                        <label for="role">Vous êtes :</label>
                        <select name="role" id="role" required>
                            <option value="Jeune">Jeune</option>
                            
                            <option value="Consultant">Consultant</option>
                        </select><br>
                            
                        <input type="submit" value="Créer le compte">
                    </form>
                </div>

                <div class="textbot">
                    <p>Vous avez déja un compte</p>
                    <p>Connectez-vous <a href="login.php">ici</a></p>
                </div>
			</div>
		</div>
	</body>
</html>
