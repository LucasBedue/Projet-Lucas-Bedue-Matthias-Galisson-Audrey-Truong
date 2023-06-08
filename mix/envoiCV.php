<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Jeune - Jeunes 6.4</title>
		<script>
			<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Jeune") {
    echo '<script>alert("Veuillez vous connecter en tant que compte Jeune pour accéder à cette page.");</script>';
    echo '<script>window.location.href = "login.php";</script>';
    exit();
}
?>


		</script>
	</head>
	<body>
		<link rel="stylesheet" href="jeunespage.css" />

		<div class="whole">
			<div class="head">
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">JEUNE</p>
				<p class="headtext">Je donne de la valeur à mon engagement</p>
			</div>

			<div class="bodybg">
				<div class="tab">
					<div class="tabb">
						<p class="tabbox1">
							<a class="link" href="./infopage.php">
								Qui sommes nous?
							</a>
						</p>
						<p class="tabbox1">
							<a class="link" href="./partnerspage.php">Nos partenaires</a>
						</p>
						<p class="tabbox1">
							<a class="link" href="./profiljeune.php">Profil</a>
						</p>
						<p class="tabbox1">
							<a class="link" href="./logout.php">Déconnexion</a>
						</p>
					</div>
                </div>
                
                <div class="texttop">
					<p>
						Ecrivez l'adresse mail du consultant pour qu'il recoive votre CV.
					</p>
                    <div>
                    <form name="form1" method="post" action="envoiCVtraitement.php">
                            
							<input type="text" id="mail" name="mail" required/>
                            <input type="submit"  name="send" value="Valider">
                    </form>
                </div>
				</div>

            </div>
            
        </div>
        
    </body>
</html>