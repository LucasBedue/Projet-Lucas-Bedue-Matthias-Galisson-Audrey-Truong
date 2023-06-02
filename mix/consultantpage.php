<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Consultant - Jeunes 6.4</title>
	</head>
	<script><?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] !== "Consultant") {
	echo 'alert("Vous n\'avez pas accès à cette page car vous n\'etes pas consultant .");';
	echo 'window.location.href = "login.php";';
	echo 'exit();';
}
?>
</script>

	<body>
		<link type="text/css" rel="stylesheet" href="consultantpage.css" />
		
		<div class="whole">
			<div class="head">
				<img class="fitimg" src="./logos/logo1.png" alt="Jeunes 6.4" />
				<p class="headtext2">CONSULTANT</p>
				<p class="headtext">Je donne de la valeur à ton engagement</p>
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
							<a class="link" href="./login.php">Connexion</a>
						</p>
					</div>
				</div>
				<div class="texttop">
					<p>
						Validez cet engagement en prenant en compte sa valeur.
					</p>
				</div>
				<div class="outerbox">
					<div class="box1">
						<div class="box3">JEUNE</div>
						<div class="box5">						
							<div class="box501"><p>MES SAVOIRS ETRE</p></div>
							<div class="box511"><p>Je suis *</p></div>
							<div class="box521">
								<input style="pointer-events:none" type="checkbox" id="autonome" name="autonome" value="autonome" checked>
								<label for="autonome"> Autonome</label>
							</br>
								<input style="pointer-events:none" type="checkbox" id="passion" name="passion" value="passion" checked>
								<label for="passion"> Passionné</label>
							</br>
								<input style="pointer-events:none" type="checkbox" id="reflechi" name="reflechi" value="reflechi" checked>
								<label for="reflechi"> Réfléchi</label>
							</br>
						</div>
						</div>
						<div class="box4">
								<p>NOM :</p>
								<p class="text1" id="nom" name="nom"></p>
								<p>PRENOM :</p>
								<p class="text1" id="prenom" name="prenom"></p>
								<p>DATE DE NAISSANCE :</p>
								<p class="text1" id="dob" name="dob"></p>
								<p>Mail :</p>
								<p class="text1" id="mail" name="mail"></p>
								<p>Réseaux sociaux :</p>
								<p class="text1" id="social" name="social"></p>
								<p>MON ENGAGEMENT :</p>
								<p class="text1" id="engagement" name="engagement"></p>
								<p>DUREE :</p>
								<p class="text1" id="duree" name="duree"></p>
						</div>
					</div>
					<div class="box2">
						<div class="box3">REFERENT</div>				
							<div class="box5">					
								<div class="box502"><p>SES SAVOIRS ETRE</p></div>
		
								<div class="box512"><p>Je confirme sa (son)*</p></div>
		
								<div class="box522">
										<input style="pointer-events:none" type="checkbox" id="confiance" name="confiance" value="confiance" checked>
										<label for="confiance"> Confiance</label>
									</br>
										<input style="pointer-events:none" type="checkbox" id="bienveillance" name="bienveillance" value="bienveillance" checked>
										<label for="bienveillance"> Bienveillance</label>
									</br>
										<input style="pointer-events:none" type="checkbox" id="respect" name="respect" value="respect" checked>
										<label for="respect"> Respect</label>
									</br>
								</div>
								<div class="box532">
									<p class="commentarytext">Commentaires</p>
								</div>
								<div class="box542">
									<p class="commentarytext">wqddqwd</p>
								</div>
							</div>

						<div class="box4">
							<p>NOM :</p>
							<p class="text2" id="nom" name="nom"></p>
							<p>PRENOM :</p>
							<p class="text2" id="prenom" name="prenom"></p>
							<p>DATE DE NAISSANCE :</p>
							<p class="text2" id="dob" name="dob"></p>
							<p>Mail :</p>
							<p class="text2" id="mail" name="mail"></p>
							<p>Réseaux sociaux :</p>
							<p class="text2" id="social" name="social"></p>
							<p>PRESENTATION :</p>
							<p class="text2" id="presentation" name="presentation"></p>
							<p>DUREE :</p>
							<p class="text2" id="duree" name="duree"></p>
						</div>
				</div>
				</div>

				<div class="valid">
					<p>Valider</p>
				</div>
			</div>
		</div>
	</body>
</html>
