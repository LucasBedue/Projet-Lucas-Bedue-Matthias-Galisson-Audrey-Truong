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
							<a class="link" href="./partnerspage.php"
								>Nos partenaires</a
							>
						</p>
						<p class="tabbox1">
							<a class="link" href="./logout.php">Deconnexion</a>
						</p>
					</div>
				</div>
				<div class="texttop">
					<p>
						Décrivez votre expérience et mettez en avant ce que vous
						en avez retiré.
					</p>
				</div>
				<div class="outerbox">
					<div class="box2">
						<p>&#32</p>
					</div>
					<div class="box">
						<form method="post" action="enternewexp.php">
							<label for="nom">NOM :</label>
							<input type="text" id="nom" name="nom" required/>
						</br>
							<label for="prenom">PRENOM :</label>
							<input type="text" id="prenom" name="prenom" required/>
						</br></br>
							<label for="dob">DATE DE NAISSANCE :</label>
							<input type="date" id="dob" name="dob" required/>
						</br></br>
							<label for="mail">Mail du référent:</label>
							<input type="text" id="mail" name="mail" required/>
						</br>
							<label for="social">Réseaux sociaux :</label>
							<input type="text" id="social" name="social"/>
						</br>
							<label for="engagement">MON ENGAGEMENT :</label>
							<input type="text" id="engagement" name="engagement" required/>
						</br>
							<label for="duree">DUREE :</label>
							<input type="text" id="duree" name="duree" required/>
						
					</div>
					<div class="box1">
						<div class="box10"><p>MES SAVOIRS ETRE</p></div>

						<div class="box11"><p>Je suis *</p></div>

						<div class="box12">
								<input type="checkbox" class="ch" id="autonome" name="autonome" value="autonome">
								<label for="autonome"> Autonome</label>
							</br>
								<input type="checkbox" class="ch" id="passion" name="passion" value="passion">
								<label for="passion"> Passionné</label>
							</br>
								<input type="checkbox" class="ch" id="reflechi" name="reflechi" value="reflechi">
								<label for="reflechi"> Réfléchi</label>
							</br>
								<input type="checkbox" class="ch" id="ecoute" name="ecoute" value="ecoute">
								<label for="ecoute"> A l'ecoute</label>
							</br>
								<input type="checkbox" class="ch" id="organise" name="organise" value="organise">
								<label for="organise"> Organise</label>
							</br>
								<input type="checkbox" class="ch" id="fiable" name="fiable" value="fiable">
								<label for="fiable"> Fiable</label>
							</br>
								<input type="checkbox" class="ch" id="patient" name="patient" value="patient">
								<label for="patient"> Patient</label>
							</br>
								<input type="checkbox" class="ch" id="responsable" name="responsable" value="responsable">
								<label for="responsable"> Responsable</label>
							</br>
								<input type="checkbox" class="ch" id="sociable" name="sociable" value="sociable">
								<label for="sociable"> Sociable</label>
							</br>
								<input type="checkbox" class="ch" id="optimiste" name="optimiste" value="optimiste" >
								<label for="optimiste"> Optimiste</label>
							</br>
						</div>
						<div class="box13"><p>*Faire 4 choix maximum</p></div>
						<input type="submit" class="valid" value="Valider">
					</div>
					</form>
				</div>
			</div>
		</div>
			
		
	</body>
</html>
