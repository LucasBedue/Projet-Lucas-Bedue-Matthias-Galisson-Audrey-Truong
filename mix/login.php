<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Login - Jeunes 6.4</title>
        <!--	Login page	-->
	</head>
	<body>
		<link type="text/css" rel="stylesheet" href="login.css" />
		
		<div class="whole">			<!--	Container for the whole page	-->
			<div class="head">			<!--	Header	-->
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">LOGIN</p>
			</div>

			<div class="bodybg">			<!--	Main body	-->

				<div class="texttop">
					<p>
						Connectez vous à votre compte
					</p>
				</div>
                <div class="login">			<!--	Login form	-->
                    <form method="post" action="verificationConnexion.php">
            
                        <table class="login2">
                            <tr>
                                <td> Email : </td>
                                <td> <input type="text" name="mail" id="mail" required> </td>
                            </tr>
                            <tr>
                                <td> Mot de passe : </td>
                                <td> <input type="password" name="mdp" id="mdp" required> </td>
                            </tr>
                            
                        </table>
                        <br>
                        <input type="submit" value="Se connecter">

                    </form>
                </div>

                <div class="textbot">
                    <p>Pas encore de compte ?</p>
                    <p>Créez un compte <a href="creation.php">ici</a></p>			<!--	Link to account creation page	-->
                </div>
			</div>
		</div>
        <script>
            <?php
            session_start();
            session_destroy();
            ?>
        </script>
	</body>
</html>
