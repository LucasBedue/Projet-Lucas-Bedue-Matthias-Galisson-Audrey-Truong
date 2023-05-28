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
                <div name="divwrapper" id="divwrapper">
                </div><!-- The div contain all the wrappers-->
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
        <script type="text/javascript">
            //We search the number of experiences
            var nmbexp = <?php 
                $mail = $_SESSION['mail'];
                $f = fopen('./../InformationsJeunes/'.$mail,'r+');
                rewind($f);
                $txt=fgets($f);
                $nmb = intval("$txt",10);
                fclose($f);
                echo $nmb;
                ?>;
            var thediv = document.getElementById("divwrapper"); //localisation of divwrapper
            //thediv.innerHTML=nmbexp;

            //var container = document.createElement('div');
            //container.classList.add("wrapper");
            //container.innerHTML="Yo";
            
            
            

            //var text = document.createElement("p"); 
            //var intext = document.createTextNode(nmbexp);
            //text.appendChild(intext);
            //thediv.appendChild(text);

            
            if(nmbexp!=0){//Si il y a au moins une expérience
                
                
                
                for(i=0;i<nmbexp;i++){
                    
                    //Creating a box with the experience inside
                    var container=document.createElement('div');

                    wrapper = document.createElement("div"); 
                    wrapper.className='wrapper';

                    leftbox = document.createElement("div"); 
                    leftbox.className='leftbox';

                    box = document.createElement("div"); 
                    box.className='box';

                    box.innerHTML +='<p>Mail du référent:</p>';
                    box.innerHTML +='<p class="text" id="mail" name="mail"></p>';
                    box.innerHTML +='<p>MON ENGAGEMENT :</p>';
                    box.innerHTML +='<p class="text" id="engagement" name="engagement"></p>';
                    box.innerHTML +='<p>DUREE :</p>';
                    box.innerHTML +='<p class="text" id="duree" name="duree"></p>';
                    
                    leftbox.appendChild(box);


                    box1 = document.createElement("div"); 
                    box1.className='box1';

                    box11 = document.createElement("div"); 
                    box11.className='box11';
                    box11.innerHTML +='<p>Je suis *</p>';
                    box1.appendChild(box11);

                    box12 = document.createElement("div"); 
                    box12.className='box12';
                    
                    box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="autonome" name="autonome" value="autonome" checked>';
                    box12.innerHTML +='<label for="autonome"> Autonome</label>';
                    box12.innerHTML +='</br>';
                    box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="passion" name="passion" value="passion" checked>';
                    box12.innerHTML +='<label for="passion"> Passionné</label>';
                    box12.innerHTML +='</br>';
                    box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="reflechi" name="reflechi" value="reflechi" checked>';
                    box12.innerHTML +='<label for="reflechi">Réfléchi</label>';
                    box12.innerHTML +='</br>';
                    box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="ecoute" name="ecoute" value="ecoute" checked>';
                    box12.innerHTML +='<label for="ecoute"> A l écoute</label>';
                    box12.innerHTML +='</br>';

                    box1.appendChild(box12);

                    leftbox.appendChild(box1);
                    
                    validbox = document.createElement("div"); 
                    validbox.className='validbox';

                    box2 = document.createElement("div"); 
                    box2.className='box2';

                    box21 = document.createElement("div"); 
                    box21.className='box21';

                    box22 = document.createElement("div"); 
                    box22.className='box22';

                    box21.innerHTML+='Cette expérience :';
                    box22.innerHTML+='a été validée';

                    box2.appendChild(box21);
                    box2.appendChild(box22);
                    validbox.appendChild(box2);

                    valid1 = document.createElement("div"); 
                    valid1.className='valid';

                    valid1.innerHTML +='Modifier cette expérience';
                    

                    valid2 = document.createElement("div"); 
                    valid2.className='valid';

                    valid2.innerHTML +='Retirer cette expérience'; 

                    validbox.appendChild(valid1);
                    validbox.appendChild(valid2);

                    leftbox.appendChild(validbox);

                    wrapper.appendChild(leftbox);
                    container.appendChild(wrapper);
                    thediv.appendChild(container);

                    //We created the box
                    //We will now modify the content of it

                    

                }
                
            }
            
            else{//Si il n'y a rien
                thediv.innerHTML = "Il n'y a aucune expérience!";
            }
            
        </script>	
	</body>
</html>
