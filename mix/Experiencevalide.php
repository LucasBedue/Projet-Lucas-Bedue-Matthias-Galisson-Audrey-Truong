<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Expérience validée ( Jeune ) - Jeunes 6.4</title>
        <?php
            session_start();

            if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Jeune") {
                echo '<script>alert("Veuillez vous connecter en tant que compte Jeune pour accéder à cette page.");</script>';
                echo '<script>window.location.href = "login.php";</script>';
                exit();
            }
        ?>
    </head>
    <body>
        <link type="text/css" rel="stylesheet" href="Experiencevalide.css" />

        <div class="whole">			<!--	Container for the whole page	-->
			<div class="head">			<!--	Header	-->
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">JEUNE</p>
			</div>

			<div class="bodybg">			<!--	Main body	-->
                <div class="tab">				<!--	Menu	-->
                    <div class="tabb">
                        <p class="tabbox1">
                            <a class="link" href="./infopage.php">Qui sommes nous?</a>
                        </p>
                        <p class="tabbox1">
                            <a class="link" href="./partnerspage.php">Nos partenaires</a>
                        </p>
                        <p class="tabbox1">
                            <a class="link" href="./profiljeune.php">Profil</a>
                        </p>
                        <p class="tabbox1">
                            <a class="link" href="./logout.php">Deconnexion</a>
                        </p>
                    </div>
                </div>
				<div class="texttop">
					
                    <p>Votre expérience a été envoyé avec succès!</p>
                    <a class="valid" href="./profiljeune.php">Voir la liste de ces expériences</a>				<!--	Link to the profile page with all the experiences	-->
					
				</div>


			</div>
		</div>
    
        
    </body>
</html>