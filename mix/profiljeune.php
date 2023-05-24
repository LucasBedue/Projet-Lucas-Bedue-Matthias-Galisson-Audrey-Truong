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
                <div name="divwrapper" id="divwrapper">ICI
                </div>
                <div class="wrapper">
                    <div class="leftbox">   <!-- Div containing the previous experiences -->
                        <div class="box">   <!-- Most important informations -->
                                <p>Mail du référent:</p>
                                <p class="text" id="mail" name="mail"></p>
                                <p>MON ENGAGEMENT :</p>
                                <p class="text" id="engagement" name="engagement"></p>
                                <p>DUREE :</p>
                                <p class="text" id="duree" name="duree"></p>
                        </div>
                        <div class="box1">
                            <div class="box11"><p>Je suis *</p></div>
                            <div class="box12">
                                    <input style="pointer-events:none" type="checkbox" id="autonome" name="autonome" value="autonome" checked>
                                    <label for="autonome"> Autonome</label>
							    </br>
                                    <input style="pointer-events:none" type="checkbox" id="passion" name="passion" value="passion" checked>
                                    <label for="passion"> Passionné</label>			
                                </br>			
                                    <input style="pointer-events:none" type="checkbox" id="reflechi" name="reflechi" value="reflechi" checked> 
                                    <label for="reflechi">Réfléchi</label>
                                </br>
                                    <input style="pointer-events:none" type="checkbox" id="ecoute" name="ecoute" value="ecoute" checked>
                                    <label for="ecoute"> A l écoute</label>
                                </br>
                            </div>
                        </div>   
                        <div class="validbox"> <!-- To remove or modify an experience and to see if the experience was validated -->
                            <div class="box2">
                                <div class="box21">Cette expérience :</div>
                                <div class="box22">n'a pas été validée</div>  <!-- to be modified to "a été validée" if the consultant verified it-->
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
                                <p>Mail du référent:</p>
                                <p class="text" id="mail" name="mail"></p>
                                <p>MON ENGAGEMENT :</p>
                                <p class="text" id="engagement" name="engagement"></p>
                                <p>DUREE :</p>
                                <p class="text" id="duree" name="duree"></p>
                        </div>
                        <div class="box1">
                            <div class="box11"><p>Je suis *</p></div>
                            <div class="box12">
                                    <input style="pointer-events:none" type="checkbox" id="autonome" name="autonome" value="autonome" checked>
                                    <label for="autonome"> Autonome</label>
							    </br>
                                    <input style="pointer-events:none" type="checkbox" id="passion" name="passion" value="passion" checked>
                                    <label for="passion"> Passionné</label>			
                                </br>			
                                    <input style="pointer-events:none" type="checkbox" id="reflechi" name="reflechi" value="reflechi" checked> 
                                    <label for="reflechi">Réfléchi</label>
                                </br>
                                    <input style="pointer-events:none" type="checkbox" id="ecoute" name="ecoute" value="ecoute" checked>
                                    <label for="ecoute"> A l écoute</label>
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

            //if(nmbexp!=0){//Si il y a au moins une expérience
                numverif = 0;
                let thediv = document.body.whole.bodybg.divwrapper;
                thediv.innerHTML = "Yo!";
                //for(i=0;i<nmbexp;i++){
                    let contenaire=document.createElement('div');
                    contenaire.classList.add("wrapper");
                    contenaire.textContent = "<?php  
                        ECHO '<div class="leftbox">';   # Div containing the previous experiences 
                        ECHO '<div class="box">';   # Most important informations 
                                ECHO '<p>Mail du référent:</p>';
                                ECHO '<p class="text" id="mail" name="mail"></p>';
                                ECHO '<p>MON ENGAGEMENT :</p>';
                                ECHO '<p class="text" id="engagement" name="engagement"></p>';
                                ECHO '<p>DUREE :</p>';
                                ECHO '<p class="text" id="duree" name="duree"></p>';
                        ECHO '</div>';
                        ECHO '<div class="box1">';
                            ECHO '<div class="box11"><p>Je suis *</p></div>';
                            ECHO '<div class="box12">';
                                ECHO '<input style="pointer-events:none" type="checkbox" id="autonome" name="autonome" value="autonome" checked>';
                                ECHO '<label for="autonome"> Autonome</label>';
							    ECHO '</br>';
                                ECHO '<input style="pointer-events:none" type="checkbox" id="passion" name="passion" value="passion" checked>';
                                ECHO '<label for="passion"> Passionné</label>			';
                                ECHO '</br>			';
                                ECHO '<input style="pointer-events:none" type="checkbox" id="reflechi" name="reflechi" value="reflechi" checked> ';
                                ECHO '<label for="reflechi">Réfléchi</label>';
                                ECHO '</br>';
                                ECHO '<input style="pointer-events:none" type="checkbox" id="ecoute" name="ecoute" value="ecoute" checked>';
                                ECHO '<label for="ecoute"> A l écoute</label>';
                                ECHO '</br>';
                            ECHO '</div>';
                        ECHO '</div>   ';
                        ECHO '<div class="validbox">';#  To remove or modify an experience and to see if the experience was validated
                            ECHO '<div class="box2">';
                                ECHO '<div class="box21">Cette expérience :</div>';
                                ECHO '<div class="box22">n a pas été validée</div>';#  to be modified to "a été validée" if the consultant verified it
                            ECHO '</div> ';
                            ECHO '<div class="valid">Modifier cette expérience</div> ';
                            ECHO '<div class="valid">Retirer cette expérience</div>';
                        ECHO '</div> ';
                    ECHO '</div>';
                    

                    ?>";
                    /*
                    docmailref = "\n";
                    docengagement = "\n";
                    docduree = "\n";
                    docetre = new Array ("\n","\n","\n","\n");
                    docvalid = 0;

                    docmailref = <?php  
                    #$f = fopen('./../InformationsJeunes/'.$mail,'r+');
                    #rewind($f);

                    #$txt=fgets($f);

                    
                    #$nmb = intval("$txt",10);
                    #fclose($f);
                    ?>;
                    */
                   
                   thediv.appendChild(contenaire);
                //}
            //}
        /*
            else{//Si il n'y a rien
                document.body.getElementById('divwrapper').innerHTML = "Il n'y a aucune expérience!";
            }
            */
        </script>	
	</body>
</html>
