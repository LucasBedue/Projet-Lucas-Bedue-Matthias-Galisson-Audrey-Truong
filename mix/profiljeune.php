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
                
		</div>
        <script type="text/javascript">
            
            function createthebox(mailref,engagetype,engagelenght,iam1,iam2,iam3,iam4,status,indi){//function that create a box
                            var thediv = document.getElementById("divwrapper");
                            var container=document.createElement('div');
                            container.id=indi;

                            wrapper = document.createElement("div");
                            wrapper.className='wrapper';

                            leftbox = document.createElement("div"); 
                            leftbox.className='leftbox';

                            box = document.createElement("div"); 
                            box.className='box';

                            box.innerHTML +='<p>Mail du référent:</p>';
                            box.innerHTML +='<p class="text" id="mail" name="mail">'+mailref+'</p>';
                            box.innerHTML +='<p>MON ENGAGEMENT :</p>';
                            box.innerHTML +='<p class="text" id="engagement" name="engagement">'+engagetype+'</p>';
                            box.innerHTML +='<p>DUREE :</p>';
                            box.innerHTML +='<p class="text" id="duree" name="duree">'+engagelenght+'</p>';
                    
                            leftbox.appendChild(box);


                            box1 = document.createElement("div"); 
                            box1.className='box1';

                            box11 = document.createElement("div"); 
                            box11.className='box11';
                            box11.innerHTML +='<p>Je suis *</p>';
                            box1.appendChild(box11);

                            box12 = document.createElement("div"); 
                            box12.className='box12';
                    
                            if((iam1!='iam1')&&(iam1!='')){
                            box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam1+'" name="'+iam1+'" value="'+iam1+'" checked>';
                            box12.innerHTML +='<label for="autonome"> '+iam1+'</label>';
                            box12.innerHTML +='</br>';
                            }
                            if((iam2!='iam2')&&(iam2!='')){
                            box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam2+'" name="'+iam2+'" value="'+iam2+'" checked>';
                            box12.innerHTML +='<label for="autonome"> '+iam2+'</label>';
                            box12.innerHTML +='</br>';
                            }
                            if((iam3!='iam3')&&(iam3!='')){
                            box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam3+'" name="'+iam3+'" value="'+iam3+'" checked>';
                            box12.innerHTML +='<label for="autonome"> '+iam3+'</label>';
                            box12.innerHTML +='</br>';
                            }
                            if((iam4!='iam4')&&(iam4!='')){
                            box12.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam4+'" name="'+iam4+'" value="'+iam4+'" checked>';
                            box12.innerHTML +='<label for="autonome"> '+iam4+'</label>';
                            box12.innerHTML +='</br>';
                            }

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
                            if(status==0){
                                box22.innerHTML+='n&apos;a pas été validée';
                            }
                            else if(status==1){
                                box22.innerHTML+='a été validée';
                            }
                            
                            

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

                            if(!document.getElementById('CVsend')){//create only one rightbox
                                CVsend = document.createElement("div"); 
                                CVsend.className='valid';
                                CVsend.id='CVsend';
                                CVsend.innerHTML +='<a class="valid" href="./envoiCV.php">Envoyer son CV a un consultant</a>';
                                
                                validbox.appendChild(CVsend);
                            }

                            leftbox.appendChild(validbox);

                            wrapper.appendChild(leftbox);
                            
                            
                            if(!document.getElementById('rightbox')){//create only one rightbox
                                rightbox = document.createElement("div"); 
                                rightbox.className='rightbox';
                                rightbox.id='rightbox';
                                rightbox.innerHTML +='<a class="valid" href="./jeunespage.php">Ajouter une expérience</a>';
                                
                                wrapper.appendChild(rightbox);
                            }
                            
                            
                            container.appendChild(wrapper);
                            thediv.appendChild(container);
            };

            function thereisnothing(){//for showing that there is nothing
                var thediv = document.getElementById("divwrapper");
                var container=document.createElement('p');
                container.style=("text-align:center");
                container.innerHTML +='Il n&apos;y a pas encore d&apos;expérience!';
                thediv.appendChild(container);

                rightbox = document.createElement("div"); 
                rightbox.className='rightbox';
                rightbox.id='rightbox';
                rightbox.innerHTML +='<a class="valid" href="./jeunespage.php">Ajouter une expérience</a>';
                thediv.appendChild(rightbox);

                
            };

            <?php  
                //We search the number of experiences
                $mail = $_SESSION['mail'];
                $f = fopen('./../InformationsJeunes/'.$mail,'r+');
                $txt =stream_get_line($f,0,"\n");

                if(feof($f)){
                    ECHO utf8_encode("thereisnothing();");
                }
                else{
                  rewind($f);
                    while(!feof($f)){
                        $tabvar=array("mailref","engagetype","engagelenght","iam1","iam2","iam3","iam4",0,0);
                        $txt =stream_get_line($f,0,"\n");//the indice of the experience
                        if(($txt=='\n')||(feof($f))||($txt=='')){}//verifie the EOF
                        else{
                        $txt =intval("$txt",10);
                        array_splice($tabvar,8,1,$txt);

                        $txt =stream_get_line($f,0,"\n");//The verification state
                        $txt =intval("$txt",10);
                        array_splice($tabvar,7,1,$txt);
                        
                        $txt=stream_get_line($f,0,"\n");
                        $txt=stream_get_line($f,0,"\n");
                        $txt=stream_get_line($f,0,"\n");
                        $txt=stream_get_line($f,0,"\n");//the referent's mail
                        array_splice($tabvar,0,1,$txt);
                        
                        $txt=stream_get_line($f,0,"\n");
                        $txt=stream_get_line($f,0,"\n");//the kind of engagement
                        array_splice($tabvar,1,1,$txt);

                        $txt=stream_get_line($f,0,"\n");//the lenght of the engagement
                        array_splice($tabvar,2,1,$txt);

                        $count = 0;
                        for($j = 0;$j<10;$j++){//for the "savoir-etre"
                            if($count>4){}
                            else{
                                $txt=stream_get_line($f,0,"\n");
                                if($txt==''){}
                                else{
                                    array_splice($tabvar,(3+$count),1,$txt);
                                    $count++;
                                }
                            }
                        }

                        for($k = 0;$k<15;$k++){//we pass the next 15 lines
                            $txt=stream_get_line($f,0,"\n");
                        }

                        ECHO utf8_encode("createthebox('".$tabvar[0]."','".$tabvar[1]."','".$tabvar[2]."','".$tabvar[3]."','".$tabvar[4]."','".$tabvar[5]."','".$tabvar[6]."','".$tabvar[7]."','".$tabvar[8]."');");//We create the box
                    }
                    }
                    
                }

                fclose($f);
                
            ?>
            
        </script>	
	</body>
</html>
