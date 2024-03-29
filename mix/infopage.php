<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Infomations Jeunes 6.4</title>
		<!--	Main informations page	-->
		<?php // To start or restore the session
			session_start();

			// To check if the last activity timestamp exists in the session
			if (isset($_SESSION['last_activity'])) {
				// Inactivity time in seconds (15 minutes = 900 seconds)
				$inactive_duration = 900;

				// Time count since last activity
				$elapsed_time = time() - $_SESSION['last_activity'];

				// Check if user has been inactive for more than 15 minutes
				if ($elapsed_time > $inactive_duration) {
					// Destroys the session
					session_destroy();
					
					// Redirects the user to the logout page
					header("Location: logout.php");
					exit;
				}
			}
 		?>
	</head>
	<body>
		<link type="text/css" rel="stylesheet" href="infopage.css" />
		<div class="whole">			<!--	Container for the whole page	-->
			<div class="head">			<!--	Header	-->
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext">Pour faire de l'engagement une valeur</p>
			</div>

			<div class="bodybg">			<!--	Main body	-->
				<div class="tab">				<!--	Menu	-->
					<div class="tabb">
						
						<p class="tabbox1">
							<a class="link" href="./partnerspage.php">Nos partenaires</a>
						</p>
						<p class="tabbox1">
                            <a class="link" href="./profiljeune.php">Profil</a>	<!-- NEED TO MAKE THIS ONLY VISIBLE TO ONLY CONNECTED JEUNES -->
                        </p>
						<p class="tabbox1">
						<?php						
							if (!isset($_SESSION['role'])) {						
								echo '<a class="tmp1" href="logout.php">Déconnexion</a>';
								echo '<a class="tmp2" href="login.php">Connexion</a>';
							} else {						
								echo '<a class="tmp1" href="login.php">Connexion</a>';
								echo '<a class="tmp2" href="logout.php">Déconnexion</a>';
								}
							?>
						</p>
					</div>
				</div>

				<div class="divtextp">			<!--	Container for the main text		-->
					<div class="divtext">
						<h2>De quoi s'agit-il ?</h2>
						<p>
							D'une opportunité : celle qu'un engagement quelqu'il
							soit puisse être considérer à sa juste valeur !
							Toute expérience est source d'enrichissement et doit
							d'être reconnu largement. Elle révèle un potentiel,
							l'expression d'un savoir-être à concrétiser.
						</p>
					</div>

					<div class="divtext">
						<h2>A qui s'adresse-t'il ?</h2>
						<p>
							A vous, jeunes entre 16 et 30 ans, qui vous êtes
							investis spontanément dans une association ou dans
							tout type d'action formelle ou informelle, et qui
							avez partagé de votre temps, de votre énergie, pour
							apporter un soutien, une aide, une compétence. A
							vous, responsables de structures ou référents d'un
							jour, qui avez croisé la route de ces jeunes et avez
							bénéficié même ponctuellement de cette implication
							citoyenne ! C'est l'occasion de vous engager à votre
							tour pour ces jeunes en confirmant leur richesse
							pour en avoir été un temps les témoins mais aussi
							les bénéficiaires !
						</p>
					</div>

					<div class="divtext">
						<p>
							A vous, employeurs, recruteurs en ressources
							humaines, représentants d'organismes de formation,
							qui recevez ces jeunes, pour un emploi, un stage, un
							cursus de qualification, pour qui les avoir-être
							constitue le premier fondement de toute capacité
							humaine.
						</p>
						<h3>
							Cet engagement est une ressource à valoriser au fil
							d'un parcours en 3 étapes :
						</h3>
					</div>
				</div>

				<div class="boxes">			<!--	Container for the 3 bottom boxes	-->
					<div class="box1">
						<div class="box1top">
							<p style="font-size: 95%">1ère étape</p>
							<p style="font-size: 120%">la valorisation</p>
						</div>
						<div class="boxbottom">
							Décrivez votre expérience et mettez en avant ce que
							vous en avez retiré.
						</div>
					</div>

					<div class="box2">
						<div class="box2top">
							<p style="font-size: 95%">2ème étape</p>
							<p style="font-size: 120%">la confirmation</p>
						</div>
						<div class="boxbottom">
							Confirmez cette expérience et ce que vous avez pu 
							constater au contact de ce jeune.
						</div>
					</div>

					<div class="box3">
						<div class="box3top">
							<p style="font-size: 95%">3ème étape</p>
							<p style="font-size: 120%">la consultation</p>
						</div>
						<div class="boxbottom">
							Validez cet engagement en prenant compte de sa valeur.
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
