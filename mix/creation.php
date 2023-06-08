<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Création de compte - Jeunes 6.4</title>
	</head>

	<body>
		<link type="text/css" rel="stylesheet" href="creation.css" />
		
		<div class="whole">			<!--	Container for the whole page	-->
			<div class="head">			<!--	Header	-->
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">CRÉATION</p>
			</div>

			<div class="bodybg">			<!--	Main body	-->

				<div class="texttop">
					<p>
						Créez un compte
					</p>
				</div>
                <div class="login2">			<!--	Form	-->
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
                
                        <div style=display:none>
                        <label for="role">Vous êtes :</label>
                        <input type="text" id="Jeune" name="role" value="Jeune">
                        </select><br>
                        </div>
                            
                        <input type="submit" value="Créer le compte">
                    </form>
                </div>

                <div class="textbot">
                    <p>Vous avez déja un compte</p>
                    <p>Connectez-vous <a href="login.php">ici</a></p>			<!--	Link to login page	-->
                </div>
			</div>
		</div>
	</body>
</html>
