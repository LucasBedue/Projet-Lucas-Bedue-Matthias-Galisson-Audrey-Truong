<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Jeune - Jeunes 6.4</title>
		<!--	Page for the "Jeune" to create the profile of his experience		-->
		<script>
			
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

			// Records the current amount of time in the session
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
	};
    function changethechk(texte,indexchk){
    var listeInput = document.querySelectorAll('.ch');
    listeInput[indexchk].checked=1;

};
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
						<form name="form1" method="post" action="modification.php">
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
                            <div style="display:none">	<!-- a div to share the index -->
							
							<input type="text" id="numexp" name="numexp" visibility="hidden">
							</div>
						
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
        <script>
            <?php
        if(!isset($_POST['indice1'])){ECHO('marchepas');}
$mail = $_SESSION['mail'];
$indice=$_POST['indice1'];
$index=0;

if(!is_readable('./../InformationsJeunes/'.$mail)){
    header("Location: profiljeune.php");
    exit();
}
$filetext=file('./../InformationsJeunes/'.$mail);
$f = fopen('./../InformationsJeunes/'.$mail,'r+');
$txt=stream_get_line($f,0,"\n");

if(feof($f)){
    fclose($f);
    header("Location: profiljeune.php");
    exit();
}
rewind($f);


$bool=0;
while((!feof($f))&&($bool==0)){//we wearch the right exp
    
    $txt=stream_get_line($f,0,"\n");
    if($txt!=$indice){
        
        
        for($j=0;$j<34;$j++){
            $index++;
        }
        for($k=0;$k<33;$k++){
            $txt=stream_get_line($f,0,"\n");
        }
        
    }
    else{
        $bool=1;
    }
}
if($bool==0){
    fclose($f);
    header("Location: profiljeune.php");
    exit();
}

$txt=stream_get_line($f,0,"\n");
$txt=stream_get_line($f,0,"\n");
echo('document.getElementById("nom").value="'."$txt".'";');
$txt=stream_get_line($f,0,"\n");
echo('document.getElementById("prenom").value="'."$txt".'";');
$txt=stream_get_line($f,0,"\n");
echo('document.getElementById("dob").value="'."$txt".'";');
$txt=stream_get_line($f,0,"\n");
echo('document.getElementById("mail").value="'."$txt".'";');
$txt=stream_get_line($f,0,"\n");
echo('document.getElementById("social").value="'."$txt".'";');
$txt=stream_get_line($f,0,"\n");
echo('document.getElementById("engagement").value="'."$txt".'";');
$txt=stream_get_line($f,0,"\n");
echo('document.getElementById("duree").value="'."$txt".'";');

for($i=0;$i<10;$i++){
    $txt=stream_get_line($f,0,"\n");
    if(($txt!='')&&($txt!="\n")){
        echo('changethechk('."$txt".','.$i.');');
    }
   
    
}
echo('document.getElementById("numexp").value='."$indice".';');

fclose($f);
			?>
            </script>
		
	</body>
</html>
