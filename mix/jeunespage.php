<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Jeune - Jeunes 6.4</title>
		<!--	Page for the "Jeune" to create the profile of his experience		-->
		<script>
			
			<?php
// Démarre ou restaure la session
session_start();

// Vérifie si le dernier temps d'activité existe dans la session
if (isset($_SESSION['last_activity'])) {
    // Durée d'inactivité en secondes (15 minutes = 900 secondes)
    $inactive_duration = 900;

    // Calcul du temps écoulé depuis le dernier temps d'activité
    $elapsed_time = time() - $_SESSION['last_activity'];

    // Vérifie si l'utilisateur est resté inactif pendant plus de 15 minutes
    if ($elapsed_time > $inactive_duration) {
        // Détruit la session
        session_destroy();
        
        // Redirige l'utilisateur vers la page de déconnexion
        header("Location: logout.php");
        exit;
    }
}

// Enregistre le timestamp actuel dans la session
$_SESSION['last_activity'] = time();


if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Jeune") {
    echo '<script>alert("Veuillez vous connecter en tant que compte Jeune pour accéder à cette page.");</script>';
    echo '<script>window.location.href = "login.php";</script>';
    exit();
}
?>
		</script>
		
	

<script type="text/javascript">
	function checkLesBox(macheckBox) {
		var listeInput = document.querySelectorAll('.ch'); // Sélectionne tous les éléments avec la classe "ch"
		var nbCheckBoxChecked = 0;
		for (var i = 0; i < listeInput.length; i++) {
			if (listeInput[i].type === "checkbox" && listeInput[i].checked) {
				nbCheckBoxChecked++;
			}
		}
		if (nbCheckBoxChecked > 4) {
			alert("Vous ne pouvez cocher que 4 cases");
			macheckBox.checked = false;
		}
	}
</script>

	</head>
	<body>
		<link rel="stylesheet" href="jeunespage.css" />

		<div class="whole">			<!--	Container for the whole page	-->
			<div class="head">			<!--	Header	-->
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">JEUNE</p>
				<p class="headtext">Je donne de la valeur à mon engagement</p>
			</div>

			<div class="bodybg">			<!--	Main body	-->
				<div class="tab">				<!--	Menu	-->
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
						Décrivez votre expérience et mettez en avant ce que vous
						en avez retiré.
					</p>
				</div>
				<div class="outerbox">			<!--	Container for the different elements specific to this page	-->
					<div class="box2">			<!--	Right box (empty)	-->
						<p>&#32</p>
					</div>
					<div class="box">			<!--	Center box (form)	-->
						<form name="form1" method="post" action="enternewexp.php">
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
					<div class="box1">			<!--	Right box (qualities checkboxes)	-->
						<div class="box10"><p>MES SAVOIRS ETRE</p></div>

						<div class="box11"><p>Je suis *</p></div>
						
						<div class="box12">
								<input type="checkbox" class="ch" id="autonome" name="autonome" value="autonome"  onchange="checkLesBox(this)">
								<label for="autonome"> Autonome</label>
							</br>
								<input type="checkbox" class="ch" id="passion" name="passion" value="passion" onchange="checkLesBox(this)">
								<label for="passion"> Passionné</label>
							</br>
								<input type="checkbox" class="ch" id="reflechi" name="reflechi" value="reflechi" onchange="checkLesBox(this)">
								<label for="reflechi"> Réfléchi</label>
							</br>
								<input type="checkbox" class="ch" id="ecoute" name="ecoute" value="ecoute"  onchange="checkLesBox(this)">
								<label for="ecoute"> A l'ecoute</label>
							</br>
								<input type="checkbox" class="ch" id="organise" name="organise" value="organise"  onchange="checkLesBox(this)">
								<label for="organise"> Organise</label>
							</br>
								<input type="checkbox" class="ch" id="fiable" name="fiable" value="fiable" onchange="checkLesBox(this)">
								<label for="fiable"> Fiable</label>
							</br>
								<input type="checkbox" class="ch" id="patient" name="patient" value="patient"  onchange="checkLesBox(this)">
								<label for="patient"> Patient</label>
							</br>
								<input type="checkbox" class="ch" id="responsable" name="responsable" value="responsable"  onchange="checkLesBox(this)">
								<label for="responsable"> Responsable</label>
							</br>
								<input type="checkbox" class="ch" id="sociable" name="sociable" value="sociable" onchange="checkLesBox(this)">
								<label for="sociable"> Sociable</label>
							</br>
								<input type="checkbox" class="ch" id="optimiste" name="optimiste" value="optimiste" onchange="checkLesBox(this)">
								<label for="optimiste"> Optimiste</label>
							</br>
							
						</div>
						<div class="box13"><p>*Faire 4 choix maximum</p></div>
						<input type="submit" class="valid" name="send" value="Valider">
					</div>
					</form>
				</div>
			</div>
		</div>
			
		
	</body>
</html>
