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
		<link rel="stylesheet" href="consultantpage.css" />
		
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
								<input type="checkbox" id="autonome" name="autonome" value="autonome">
								<label for="autonome"> Autonome</label>
							</br>
								<input type="checkbox" id="passion" name="passion" value="passion">
								<label for="passion"> Passionné</label>
							</br>
								<input type="checkbox" id="reflechi" name="reflechi" value="reflechi">
								<label for="reflechi"> Réfléchi</label>
							</br>
						</div>
						</div>
						<div class="box4">
							<form>
								<label for="nom">NOM :</label>
								<input class="c1" type="text" id="nom" name="nom"/>
							</br>
								<label for="prenom">PRENOM :</label>
								<input class="c1" type="text" id="prenom" name="prenom"/>
							</br></br>
								<label for="dob">DATE DE NAISSANCE :</label>
								<input class="c1" type="date" id="dob" name="dob"/>
							</br></br>
								<label for="mail">Mail :</label>
								<input class="c1" type="text" id="mail" name="mail"/>
							</br>
								<label for="social">Réseaux sociaux :</label>
								<input class="c1" type="text" id="social" name="social"/>
							</br>
								<label for="engagement">MON ENGAGEMENT :</label>
								<input class="c1" type="text" id="engagement" name="engagement"/>
							</br>
								<label for="duree">DUREE :</label>
								<input class="c1" type="text" id="duree" name="duree"/>
							</form>
						</div>
					</div>
					<div class="box2">
						<div class="box3">REFERENT</div>
						
						<div class="box5">					
							<div class="box502"><p>SES SAVOIRS ETRE</p></div>
	
							<div class="box512"><p>Je confirme sa (son)*</p></div>
	
							<div class="box522">
									<input type="checkbox" id="confiance" name="confiance" value="confiance">
									<label for="confiance"> Confiance</label>
								</br>
									<input type="checkbox" id="bienveillance" name="bienveillance" value="bienveillance">
									<label for="bienveillance"> Bienveillance</label>
								</br>
									<input type="checkbox" id="respect" name="respect" value="respect">
									<label for="respect"> Respect</label>
								</br></div>
						</div>
						<div class="box4">
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
								<label for="mail">Mail :</label>
								<input type="text" id="mail" name="mail"/>
							</br>
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
				</div>
				</div>

				<div class="valid">
					<p>Valider</p>
				</div>
			</div>
		</div>
	</body>
</html>
