<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Referent - Jeunes 6.4</title>
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
		<link rel="stylesheet" href="refpage.css" />

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
						<form name="form1" method="post" action="completenewexp.php">
							<textarea name="comms" id="commentaire" cols="18" rows="15"></textarea>

						</div>
					</div>
					
					<div class="box">
							<label for="nom">NOM :</label>
							<input type="text" id="nom" name="nom" required/>
						</br>
							<label for="prenom">PRENOM :</label>
							<input type="text" id="prenom" name="prenom" required/>
						</br></br>
							<label for="dob">DATE DE NAISSANCE :</label>
							<input type="date" id="dob" name="dob" required/>
						</br></br>
							<label for="social">Réseaux sociaux :</label>
							<input type="text" id="social" name="social"/>
						</br>
							<label for="presentationt">PRESENTATION :</label>
							<input type="text" id="presentation" name="presentation" required/>
						</br>
							<label for="duree">DUREE :</label>
							<input type="text" id="duree" name="duree" required/>

							<div style="display:none">		<!-- a div to share the mail and the index -->
							<input type="text" id="mailjeune" name="mailjeune" visibility="hidden">
							<input type="text" id="numexp" name="numexp" visibility="hidden">
							</div>
					</div>
					
					<div class="box1">
						<div class="box10"><p>SES SAVOIRS ETRE</p></div>

						<div class="box11"><p>Je confirme sa (son)*</p></div>

						<div class="box12">
								<input type="checkbox" class="ch" id="confiance" name="confiance" value="confiance" onchange="checkLesBox(this)">
								<label for="confiance"> Confiance</label>
							</br>
								<input type="checkbox" class="ch" id="bienveillance" name="bienveillance" value="bienveillance" onchange="checkLesBox(this)">
								<label for="bienveillance"> Bienveillance</label>
							</br>
								<input type="checkbox" class="ch" id="respect" name="respect" value="respect" onchange="checkLesBox(this)">
								<label for="respect"> Respect</label>
							</br>
								<input type="checkbox" class="ch" id="honnetete" name="honnetete" value="honnetete" onchange="checkLesBox(this)">
								<label for="honnetete"> Honnêteté</label>
							</br>
								<input type="checkbox" class="ch" id="tolerance" name="tolerance" value="tolerance" onchange="checkLesBox(this)">
								<label for="tolerance"> Tolérance</label>
							</br>
								<input type="checkbox" class="ch" id="juste" name="juste" value="juste" onchange="checkLesBox(this)">
								<label for="juste"> Juste</label>
							</br>
								<input type="checkbox" class="ch" id="impartial" name="impartial" value="impartial" onchange="checkLesBox(this)">
								<label for="impartial"> Impartial</label>
							</br>
								<input type="checkbox" class="ch" id="travail" name="travail" value="travail" onchange="checkLesBox(this)">
								<label for="travail"> Travail</label>
							</br>
						</div>
						
						<div class="box13"><p>*Faire 4 choix maximum</p></div>
						
						<input type="submit" class="valid" name="send" value="Valider">
						
					</form>
					</div>
					
				</div>
			</div>
		</div>
		<script type="text/javascript"> 
		
		var nomurl=window.location.href;
		var url=new URL(nomurl);
		document.getElementById("mailjeune").value=url.searchParams.get("q1");
		document.getElementById("numexp").value=url.searchParams.get("q2");
		
		</script>
	</body>
</html>