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
		<link rel="stylesheet" href="profiljeune.css" />

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
							<a class="link" href="./partnerspage.php">Nos partenaires</a>
						</p>
						<p class="tabbox1">
							<a class="link" href="./logout.php">Deconnexion</a>
						</p>
					</div>
				</div>
				<div class="texttop">
					<p>
						Retrouvez toutes vos expériences passées ou ajoutez en une nouvelle.
					</p>
				</div>
                <div name="divawrapper" id="divawrapper">
                </div>
                <div class="wrapper">
                    <div class="leftbox">   <!-- Div containing the previous experiences -->
                        <div class="box">   <!-- Most important informations -->
                                <label for="mail">Mail du référent:</label>
                                <input type="text" id="mail" name="mail" required/>
                            </br>
                                <label for="engagement">MON ENGAGEMENT :</label>
                                <input type="text" id="engagement" name="engagement" required/>
                            </br>
                                <label for="duree">DUREE :</label>
                                <input type="text" id="duree" name="duree" required/>
                        </div>
                        <div class="box1">
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
                            </div>
                        </div>   
                        <div class="validbox"> <!-- To remove or modify an experience and to see if the experience was validated -->
                            <div class="box2">
                                <div class="box21">Cette expérience :</div>
                                <div class="box22">a été validée</div>  <!-- to be modified to "n'a pas été validée" if the consultant didn't verify it yet -->
                            </div> 
                            <div class="valid">Modifier cette expérience</div> 
                            <div class="valid">Retirer cette expérience</div>
                        </div> 
                    </div>
                    <div class="rightbox">  <!-- To add an experience -->
                        <a class="valid" href="./jeunespage.php">Ajouter une expérience</a>
                    </div>
                </div>
                <div class="wrapper"> <!-- what needs to be copied -->
                    <div class="leftbox">   <!-- Div containing the previous experiences -->
                        <div class="box">   <!-- Most important informations -->
                                <label for="mail">Mail du référent:</label>
                                <input type="text" id="mail" name="mail" required/>
                            </br>
                                <label for="engagement">MON ENGAGEMENT :</label>
                                <input type="text" id="engagement" name="engagement" required/>
                            </br>
                                <label for="duree">DUREE :</label>
                                <input type="text" id="duree" name="duree" required/>
                        </div>
                        <div class="box1">
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
                            </div>
                        </div>   
                        <div class="validbox"> <!-- To remove or modify an experience and to see if the experience was validated -->
                            <div class="box2">
                                <div class="box21">Cette expérience :</div>
                                <div class="box22">a été validée</div>  <!-- to be modified to "n'a pas été validée" if the consultant didn't verify it yet -->
                            </div> 
                            <div class="valid">Modifier cette expérience</div> 
                            <div class="valid">Retirer cette expérience</div>
                        </div> 
                    </div>
                    
                </div>
		</div>
        <script>
            nmbexp = <?php 
            $f = fopen('./../InformationsJeunes/'.$mail,'r+');
            rewind($f);
            $txt=fgetc($f);
            $nmb = intval("$txt",10);
            fclose($f);
            echo $nmb;
            ?>;

            if(nmbexp!=0){//Si il y a au moins une expérience
                numverif = 0;
                for(i=0;i<nmbexp;i++){
                    var contenaire=document.createElement("div");
                    contenaire.classList.add('wrapper');
                    contenaire.innerHTML = <?php  
                        ECHO '<div class="leftbox">';   #Div containing the previous experiences
                        ECHO '<div class="box">';   #Most important informations
                                ECHO '<label for="mail">Mail du référent:</label>';
                                ECHO '<p id="mail" name="mail" required/></p>';
                            ECHO '</br>';
                                ECHO '<label for="engagement">MON ENGAGEMENT :</label>';
                                ECHO '<p id="engagement" name="engagement" required/></p>';
                            ECHO '</br>';
                                ECHO '<label for="duree">DUREE :</label>';
                                ECHO '<p id="duree" name="duree" required/></p>';
                            ECHO '</div>';
                        ECHO '<div class="box1">';
                            ECHO '<div class="box11"><p>Je suis *</p></div>';
                            ECHO '<div class="box12">';
                                ECHO '<input type="checkbox" class="ch" id="autonome" name="autonome" value="autonome">';
                                ECHO '<label for="autonome"> Autonome</label>';
                            ECHO '</br>';
                                ECHO '<input type="checkbox" class="ch" id="passion" name="passion" value="passion">';
                                ECHO '<label for="passion"> Passionné</label>	';						
                            ECHO '</br>';
                                ECHO '<input type="checkbox" class="ch" id="reflechi" name="reflechi" value="reflechi">';
                                ECHO '<label for="reflechi"> Réfléchi</label>';
                            ECHO '</br>';
                                ECHO '<input type="checkbox" class="ch" id="ecoute" name="ecoute" value="ecoute">';
                                ECHO '<label for="ecoute"> A l ecoute</label>';
                            ECHO '</br>';
                            ECHO '</div>';
                            ECHO '</div>';
                            ECHO '<div class="validbox"> '; #To remove or modify an experience and to see if the experience was validated 
                                ECHO '<div class="box2">';
                                ECHO '<div class="box21">Cette expérience :</div>';
                                ECHO '<div class="box22">a été validée</div>';  # to be modified to "n'a pas été validée" if the consultant didn't verify it yet
                            ECHO '</div> ';
                                ECHO '<div class="valid">Modifier cette expérience</div> ';
                                ECHO '<div class="valid">Retirer cette expérience</div>';
                            ECHO '</div> ';
                        ECHO '</div>';
                        ECHO '<div class="rightbox"> '; # To add an experience 
                            ECHO '<a class="valid" href="./jeunespage.php">Ajouter une expérience</a>';
                        ECHO '</div>';


                    ?>;


                    
                }
            }
            else{//Si il n'y a rien
                document.body.getElementById('divawraper').innerHTML = "Il n'y a aucune expérience!";
            }
        </script>	
	</body>
</html>
