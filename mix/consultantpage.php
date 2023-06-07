<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Consultant - Jeunes 6.4</title>
		<?php session_start(); ?>
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
						Visionnez son CV.
					</p>
				</div>
				<div id="divwrapper">
				</div>
				
			</div>

		</div>

		<script type="text/javascript">
            
            function createthebox(index,stateexp,nomj,prenomj,datej,reseauj,expj,dureej,iam1,iam2,iam3,iam4,nomref,prenomref,dateref,reseauref,expref,dureeref,commref,is1,is2,is3,is4){//function that create a box
                            if(stateexp!=1){}
							else{
							var thediv = document.getElementById("divwrapper");
                			var outerbox=document.createElement('div');
                            outerbox.className='outerbox';
							outerbox.id=index;
							thediv.appendChild(outerbox);

							var box1=document.createElement('div');
                            box1.className='box1';
							outerbox.appendChild(box1);

							var box3=document.createElement('div');
                            box3.className='box3';
							box3.innerHTML='JEUNE';
							box1.appendChild(box3);

                            var box5=document.createElement('div');
                            box5.className='box5';
							box1.appendChild(box5);

							var box501=document.createElement('div');
                            box501.className='box501';
							box501.innerHTML='<p>MES SAVOIRS ETRE</p>';
							box5.appendChild(box501);

							var box511=document.createElement('div');
                            box511.className='box511';
							box511.innerHTML='<p>MES SAVOIRS ETRE</p>';
							box5.appendChild(box511);

							var box521=document.createElement('div');
                            box521.className='box521';
							if((iam1!='iam1')&&(iam1!='')){
								box521.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam1+'" name="'+iam1+'" value="'+iam1+'" checked>';
								box521.innerHTML +='<label for="autonome"> '+iam1+'</label>';
								box521.innerHTML +='</br>';
                            }
                            if((iam2!='iam2')&&(iam2!='')){
								box521.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam2+'" name="'+iam2+'" value="'+iam2+'" checked>';
								box521.innerHTML +='<label for="autonome"> '+iam2+'</label>';
								box521.innerHTML +='</br>';
                            }
                            if((iam3!='iam3')&&(iam3!='')){
								box521.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam3+'" name="'+iam3+'" value="'+iam3+'" checked>';
								box521.innerHTML +='<label for="autonome"> '+iam3+'</label>';
								box521.innerHTML +='</br>';
                            }
                            if((iam4!='iam4')&&(iam4!='')){
								box521.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+iam4+'" name="'+iam4+'" value="'+iam4+'" checked>';
								box521.innerHTML +='<label for="autonome"> '+iam4+'</label>';
								box521.innerHTML +='</br>';
                            }
							box5.appendChild(box521);

							var box4=document.createElement('div');
                            box4.className='box4';
							box4.innerHTML+='<p>NOM :</p>';
							box4.innerHTML+='<p class="text1" id="nom1" name="nom">'+nomj+'</p>';
							box4.innerHTML+='<p>PRENOM :</p>';
							box4.innerHTML+='<p class="text1" id="prenom1" name="prenom">'+prenomj+'</p>';
							box4.innerHTML+='<p>DATE DE NAISSANCE :</p>';
							box4.innerHTML+='<p class="text1" id="dob1" name="dob">'+datej+'</p>';
							box4.innerHTML+='<p>Réseaux sociaux :</p>';
							box4.innerHTML+='<p class="text1" id="social1" name="social">'+reseauj+'</p>';
							box4.innerHTML+='<p>MON ENGAGEMENT :</p>';
							box4.innerHTML+='<p class="text1" id="engagement1" name="engagement">'+expj+'</p>';
							box4.innerHTML+='<p>DUREE :</p>';
							box4.innerHTML+='<p class="text1" id="duree1" name="duree">'+dureej+'</p>';
						
							box1.appendChild(box4);

							var box2=document.createElement('div');
                            box2.className='box2';
							outerbox.appendChild(box2);

							var box33=document.createElement('div');
                            box33.className='box3';
							box33.innerHTML='REFERENT';
							box2.appendChild(box33);

							var box55=document.createElement('div');
                            box55.className='box5';
							box2.appendChild(box55);

							var box502=document.createElement('div');
                            box502.className='box502';
							box502.innerHTML='<p>SES SAVOIRS ETRE</p>';
							box55.appendChild(box502);

							var box512=document.createElement('div');
                            box512.className='box512';
							box512.innerHTML='<p>Je confirme sa (son)*</p>';
							box55.appendChild(box502);

							var box522=document.createElement('div');
                            box522.className='box522';
							if((is1!='is1')&&(is1!='')){
								box522.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+is1+'" name="'+is1+'" value="'+is1+'" checked>';
								box522.innerHTML +='<label for="autonome"> '+is1+'</label>';
								box522.innerHTML +='</br>';
                            }
                            if((is2!='is2')&&(is2!='')){
								box522.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+is2+'" name="'+is2+'" value="'+is2+'" checked>';
								box522.innerHTML +='<label for="autonome"> '+is2+'</label>';
								box522.innerHTML +='</br>';
                            }
                            if((is3!='is3')&&(is3!='')){
								box522.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+is3+'" name="'+is3+'" value="'+is3+'" checked>';
								box522.innerHTML +='<label for="autonome"> '+is3+'</label>';
								box522.innerHTML +='</br>';
                            }
                            if((is4!='is4')&&(is4!='')){
								box522.innerHTML +='<input style="pointer-events:none" type="checkbox" id="'+is4+'" name="'+is4+'" value="'+is4+'" checked>';
								box522.innerHTML +='<label for="autonome"> '+is4+'</label>';
								box522.innerHTML +='</br>';
                            }
							box55.appendChild(box522);
							
							var box532=document.createElement('div');
                            box532.className='box532';
							box532.innerHTML='<p class="commentarytext">Commentaires</p>';
							box55.appendChild(box532);

							
							var box542=document.createElement('div');
                            box542.className='box542';
							box542.innerHTML='<p class="commentarytext">'+commref+'</p>';
							box55.appendChild(box542);

							
							var box44=document.createElement('div');
                            box44.className='box4';
							box44.innerHTML+='<p>NOM :</p>';
							
							box44.innerHTML+='<p class="text2" id="nom2" name="nom2">'+nomref+'</p>';
							box44.innerHTML+='<p>PRENOM :</p>';
							box44.innerHTML+='<p class="text2" id="prenom2" name="prenom2">'+prenomref+'</p>';
							box44.innerHTML+='<p>DATE DE NAISSANCE :</p>';
							box44.innerHTML+='<p class="text2" id="dob2" name="dob2">'+dateref+'</p>';
							box44.innerHTML+='<p>Réseaux sociaux :</p>';
							box44.innerHTML+='<p class="text2" id="social2" name="social2">'+reseauref+'</p>';
							box44.innerHTML+='<p>PRESENTATION :</p>';
							box44.innerHTML+='<p class="text2" id="presentation2" name="presentation2">'+expref+'</p>';
							box44.innerHTML+='<p>DUREE :</p>';
							box44.innerHTML+='<p class="text2" id="duree2" name="duree2">'+dureeref+'</p>';
							box2.appendChild(box44);

							thediv.innerHTML+='</br>';
						}
							
            };

            function thereisnothing(){//for showing that there is nothing
                var thediv = document.getElementById("divwrapper");
                var container=document.createElement('p');
                container.style=("text-align:center");
                container.innerHTML +='Il n&apos;y a pas encore d&apos;expérience!';
                thediv.appendChild(container);


            };

            <?php  
                //We search the number of experiences
				if(isset($_GET['q1'])){

                $mail = $_GET['q1'];
				if(is_readable('./../InformationsJeunes/'.$mail)){
                $f = fopen('./../InformationsJeunes/'.$mail,'r+');
				
                $txt =stream_get_line($f,0,"\n");

                if(feof($f)){
                    ECHO utf8_encode("thereisnothing();");
                }
                else{
                  rewind($f);
                    while(!feof($f)){
                        $tabvar=array(0,0,"nomj","prenomj","datej","reseauj","expj","dureej","iam1","iam2","iam3","iam4","nomref","prenomref","dateref","reseauref","expref","dureeref","commref","is1","is2","is3","is4");
						$txt =stream_get_line($f,0,"\n");
						if(feof($f)){}
						else{
                        array_splice($tabvar,0,1,$txt);
						$txt =stream_get_line($f,0,"\n");
                        array_splice($tabvar,1,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,2,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,3,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,4,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,5,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,6,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,7,1,$txt);

						$count = 0;
                        for($j = 0;$j<10;$j++){//for the "savoir-etre"
                            if($count>3){}
                            else{
                                $txt=stream_get_line($f,0,"\n");
                                if($txt==''){}
                                else{
                                    array_splice($tabvar,(8+$count),1,$txt);
                                    $count++;
                                }
                            }
                        }

						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,12,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,13,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,14,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,15,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,16,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,17,1,$txt);
						$txt =stream_get_line($f,0,"\n");
						array_splice($tabvar,18,1,$txt);

						$countu = 0;
                        for($b = 0;$b<8;$b++){//for the "savoir-etre"
                            if($countu>3){}
                            else{
                                $txt=stream_get_line($f,0,"\n");
                                if($txt==''){}
                                else{
                                    array_splice($tabvar,(19+$countu),1,$txt);
                                    $countu++;
                                }
                            }
                        }


                        ECHO utf8_encode("createthebox('".$tabvar[0]."','".$tabvar[1]."','".$tabvar[2]."','".$tabvar[3]."','".$tabvar[4]."','".$tabvar[5]."','".$tabvar[6]."','".$tabvar[7]."','".$tabvar[8]."','".$tabvar[9]."','".$tabvar[10]."','".$tabvar[11]."','".$tabvar[12]."','".$tabvar[13]."','".$tabvar[14]."','".$tabvar[15]."','".$tabvar[16]."','".$tabvar[17]."','".$tabvar[18]."','".$tabvar[19]."','".$tabvar[20]."','".$tabvar[21]."','".$tabvar[22]."');");//We create the box
                    }
				}
                }
                    
                

                fclose($f);
			}}
            ?>
            
        </script>	

	</body>
</html>
