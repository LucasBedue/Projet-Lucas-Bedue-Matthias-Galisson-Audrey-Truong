<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Consultant - Jeunes 6.4</title>
	</head>
	

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
				<div id="divwrapper">
				</div>
				<div class="outerbox">
					<div class="box1">
						<div class="box3">JEUNE</div>
						<div class="box5">						
							<div class="box501"><p>MES SAVOIRS ETRE</p></div>
							<div class="box511"><p>Je suis *</p></div>
							<div id="box521" class="box521">
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
								<p class="text1" id="nom1" name="nom"></p>
								<p>PRENOM :</p>
								<p class="text1" id="prenom1" name="prenom"></p>
								<p>DATE DE NAISSANCE :</p>
								<p class="text1" id="dob1" name="dob"></p>
								<p>Réseaux sociaux :</p>
								<p class="text1" id="social1" name="social"></p>
								<p>MON ENGAGEMENT :</p>
								<p class="text1" id="engagement1" name="engagement"></p>
								<p>DUREE :</p>
								<p class="text1" id="duree1" name="duree"></p>
						</div>
					</div>
					<div class="box2">
						<div class="box3">REFERENT</div>				
							<div class="box5">					
								<div class="box502"><p>SES SAVOIRS ETRE</p></div>
		
								<div class="box512"><p>Je confirme sa (son)*</p></div>
		
								<div id="box522" class="box522">
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
									<p id="commentarytext" class="commentarytext">wqddqwd</p>
								</div>
							</div>

						<div class="box4">
							<p>NOM :</p>
							<p class="text2" id="nom2" name="nom2"></p>
							<p>PRENOM :</p>
							<p class="text2" id="prenom2" name="prenom2"></p>
							<p>DATE DE NAISSANCE :</p>
							<p class="text2" id="dob2" name="dob2"></p>
							<p>Réseaux sociaux :</p>
							<p class="text2" id="social2" name="social2"></p>
							<p>PRESENTATION :</p>
							<p class="text2" id="presentation2" name="presentation2"></p>
							<p>DUREE :</p>
							<p class="text2" id="duree2" name="duree2"></p>
						</div>
				</div>
				</div>

				<div class="valid">
					<p>Valider</p>
				</div>
			</div>
		</div>

		<script type="text/javascript">
			
		function createthebox(nom1,prenom1,date1,reseau1,engage1,duree1,iam1,iam2,iam3,iam4,nom2,prenom2,date2,reseau2,engage2,duree2,iam5,iam6,iam7,iam8,comm){//function that create a box
			document.getElementById("nom1").innerHTML=nom1;
			document.getElementById("prenom1").innerHTML=prenom1;
			document.getElementById("dob1").innerHTML=date1;
			document.getElementById("social1").innerHTML=reseau1;
			document.getElementById("engagement1").innerHTML=engage1;
			document.getElementById("duree1").innerHTML=duree1;
			document.getElementById("nom2").innerHTML=nom2;
			document.getElementById("prenom2").innerHTML=prenom2;
			document.getElementById("dob2").innerHTML=date2;
			document.getElementById("social2").innerHTML=reseau2;
			document.getElementById("presentation2").innerHTML=engage2;
			document.getElementById("duree2").innerHTML=duree2;
			document.getElementById("commentarytext").innerHTML=comm;

			box12=document.getElementById("box521");
							
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

			
		}

		var nomurl=window.location.href;
		var url=new URL(nomurl);
		mailjeune=url.searchParams.get("q1");
		
		

		<?php 
		
		
		$index=0;
		$f = fopen('./../InformationsJeunes/'.$mailjeune,'r+');
		$filetext=file('./../InformationsJeunes/'.$mail);
		$txt=stream_get_line($f,0,"\n");
		
		if(feof($f)){
			fclose($f);
			header("Location: consultanterreur.php");
			exit();
		}
		else{
			rewind($f);
			
				$tabvar=array("nom1","prenom1","date1","reseau1","engage1","duree1","iam1","iam2","iam3","iam4","nom2","prenom2","date2","reseau2","engage2","duree2","iam5","iam6","iam7","iam8","comm");
				
				/*
				for($i=1;$i<$numexp;$i++){
					for($j=0;$j<34;$j++){
						$index++;
					}
				}
				if(count($filetext)<=($index+1)){
					fclose($f);
					header("Location: consultanterreur.php");
					exit();
				}
				$index++;
				if($filetext[$index]!='1'){
					fclose($f);
					header("Location: consultanterreur.php");
					exit();
				}
				
				array_splice($tabvar,0,1,$filetext[$index+1]);
				array_splice($tabvar,1,1,$filetext[$index+2]);
				array_splice($tabvar,2,1,$filetext[$index+3]);
				array_splice($tabvar,3,1,$filetext[$index+5]);
				array_splice($tabvar,4,1,$filetext[$index+6]);
				array_splice($tabvar,5,1,$filetext[$index+7]);

				
				$count = 0;
				for($j = 0;$j<10;$j++){//for the "savoir-etre"
					if($count>4){}
					else{
						$txt=$filetext[$index+8+$j];
						if($txt==''){}
						else{
							array_splice($tabvar,(6+$count),1,$txt);
							$count++;
						}
					}
				}

			

				array_splice($tabvar,10,1,$filetext[$index+18]);
				array_splice($tabvar,11,1,$filetext[$index+19]);
				array_splice($tabvar,12,1,$filetext[$index+20]);
				array_splice($tabvar,13,1,$filetext[$index+21]);
				array_splice($tabvar,14,1,$filetext[$index+22]);
				array_splice($tabvar,15,1,$filetext[$index+23]);

				$count = 0;
				for($t = 0;$t<10;$t++){//for the "savoir-etre"
					if($count>4){}
					else{
						$txt=$filetext[$index+24+$t];
						if($txt==''){}
						else{
							array_splice($tabvar,(16+$count),1,$txt);
							$count++;
						}
					}
				}
				*/
				ECHO utf8_encode("createthebox('".$tabvar[0]."','".$tabvar[1]."','".$tabvar[2]."','".$tabvar[3]."','".$tabvar[4]."','".$tabvar[5]."','".$tabvar[6]."','".$tabvar[7]."','".$tabvar[8]."','".$tabvar[9]."','".$tabvar[10]."','".$tabvar[11]."','".$tabvar[12]."','".$tabvar[13]."','".$tabvar[14]."','".$tabvar[15]."','".$tabvar[16]."','".$tabvar[17]."','".$tabvar[18]."','".$tabvar[19]."','".$tabvar[20]."');");//We create the box
			
		}

		fclose($f);
		
		
		?>




		</script>

	</body>
</html>
