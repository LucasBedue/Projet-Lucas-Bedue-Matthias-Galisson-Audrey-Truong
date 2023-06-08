<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Partenaires - Jeunes 6.4</title>
		<!--	Page with the the project's parteners		-->
	</head>
	<body>
		<link type="text/css" rel="stylesheet" href="partnerspage.css" />
		
		<div class="whole">			<!--	Container for the whole page	-->
			<div class="head">			<!--	Header	-->
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext">PARTENAIRES</p>
			</div>

			<div class="bodybg">			<!--	Main body	-->
				<div class="tab">				<!--	Menu	-->
					<div class="tabb">
						<p class="tabbox1">
							<a class="link" href="./infopage.php"> Qui sommes nous? </a>
						</p>
						
						<p class="tabbox1">
                            <a class="link" href="./profiljeune.php">Profil</a>
                        </p>
						<p class="tabbox1">
						<?php						
							session_start();

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
				<div class="texttop">
					<p>
						JEUNES 6.4 est un dispositif issu de la
						<span class="toptext2">charte de l'engagement</span>
						<br />
						pour la jeunesse signée en 2013 par des partenaires
						institutionnels...
					</p>
				</div>
				<div class="imagesgrp">				<!--	Logos	-->
					<img
						class="images"
						src="logos/rf.png"
						alt="Republique Francaise"
					/>
					<img
						class="images"
						src="logos/aq.png"
						alt="Region Aquitaine"
					/>
					<img
						class="images"
						src="logos/pa.png"
						alt="Pyrénées-Atlantiques Conseil Général"
					/>
					<img
						class="images"
						src="logos/am.png"
						alt="Assurance Maladie"
					/>
					<br />
					<img
						class="images"
						src="logos/aj.png"
						alt="Assises de la Jeunesse"
					/>
					<img class="images" src="logos/caf.png" alt="CAF" />
					<img class="images" src="logos/msa.png" alt="MSA" />
					<img
						class="images"
						src="logos/pau.png"
						alt="Université de Pau"
					/>
				</div>
				<div class="textbottom">
					<p>
						...qui ont décidé de mettre en commun leurs actions pour
						les jeunes <br />
						des Pyrénées-Atlantiques.
					</p>
				</div>
			</div>
		</div>
	</body>
</html>
