<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Referent - Jeunes 6.4</title>
	</head>
	<body>
		<link type="text/css" rel="stylesheet" href="refpage.css" />

		<div class="whole">
			<div class="head">
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">RÉFÉRENT</p>
				<p class="headtext">Je confirme la valeur de ton engagement</p>
			</div>

			<div class="bodybg">
				<div class="tab">
					<div class="tabb">
						<p class="tabbox1">
							<a class="link" href="./infopage.php"> Qui sommes nous? </a>
						</p>
						<p class="tabbox1">
							<a class="link" href="./partnerspage.php">Nos partenaires</a>
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
						Confirmez cette expérience et ce que vous avez pu
						constater au contact de ce jeune.
					</p>
				</div>
				<div class="outerbox">
					<div class="box2">
						<div class="box21">
							<p>COMMENTAIRES</p>
						</div>
						<div class="box22">
							<textarea name="comms" id="commentaire" cols="18" rows="15"></textarea>

						</div>
					</div>
					<div class="box">
						<form>
							<label for="nom">NOM :</label>
							<input type="text" id="nom" name="nom"/>
						</br>
							<label for="prenom">PRENOM :</label>
							<input type="text" id="prenom" name="prenom"/>
						</br></br>
							<label for="dob">DATE DE NAISSANCE :</label>
							<input type="date" id="dob" name="dob"/>
						</br></br>
							<label for="social">Réseaux sociaux :</label>
							<input type="text" id="social" name="social"/>
						</br>
							<label for="presentationt">PRESENTATION :</label>
							<input type="text" id="presentation" name="presentation"/>
						</br>
							<label for="duree">DUREE :</label>
							<input type="text" id="duree" name="duree"/>
						</form>
					</div>
					<div class="box1">
						<div class="box10"><p>SES SAVOIRS ETRE</p></div>

						<div class="box11"><p>Je confirme sa (son)*</p></div>

						<div class="box12">
								<input type="checkbox" id="confiance" name="confiance" value="confiance">
								<label for="confiance"> Confiance</label>
							</br>
								<input type="checkbox" id="bienveillance" name="bienveillance" value="bienveillance">
								<label for="bienveillance"> Bienveillance</label>
							</br>
								<input type="checkbox" id="respect" name="respect" value="respect">
								<label for="respect"> Respect</label>
							</br>
								<input type="checkbox" id="honnetete" name="honnetete" value="honnetete">
								<label for="honnetete"> Honnêteté</label>
							</br>
								<input type="checkbox" id="tolerance" name="tolerance" value="tolerance">
								<label for="tolerance"> Tolérance</label>
							</br>
								<input type="checkbox" id="juste" name="juste" value="juste">
								<label for="juste"> Juste</label>
							</br>
								<input type="checkbox" id="impartial" name="impartial" value="impartial">
								<label for="impartial"> Impartial</label>
							</br>
								<input type="checkbox" id="travail" name="travail" value="travail">
								<label for="travail"> Travail</label>
							</br>
						</div>
						<div class="box13"><p>*Faire 4 choix maximum</p></div>
						<div class="valid">Valider</div>
					</div>
					
				</div>
			</div>
		</div>
	</body>
</html>
