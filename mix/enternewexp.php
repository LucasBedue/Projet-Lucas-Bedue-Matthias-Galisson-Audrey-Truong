<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

//On regarde le premier nombre et on l'incrémente. C'est le nombre d'expèrience.
$mail = $_SESSION['mail'];
$filename='./../InformationsJeunes/'.$mail;
$f = fopen('./../InformationsJeunes/'.$mail,'r+');
rewind($f);

//On rajoute notre expèrience à compléter.
if(feof($f)){
rewind($f);
$txt = "1\n"; 
fwrite($f, $txt);// index of the experience
$txt = "0\n"; 
fwrite($f, $txt);// 0=no verification, 1=referent verification, 2=consultant verification
fwrite($f, $_POST['nom']."\n");
fwrite($f, $_POST['prenom']."\n");
fwrite($f, $_POST['dob']."\n");
fwrite($f, $_POST['mail']."\n");
fwrite($f, $_POST['social']."\n");
fwrite($f, $_POST['engagement']."\n");
fwrite($f, $_POST['duree']."\n");
fwrite($f, isset($_POST['autonome']) ? $_POST['autonome']."\n" : "\n");
fwrite($f, isset($_POST['passion']) ? $_POST['passion']."\n" : "\n");
fwrite($f, isset($_POST['reflechi']) ? $_POST['reflechi']."\n" : "\n");
fwrite($f, isset($_POST['ecoute']) ? $_POST['ecoute']."\n" : "\n");
fwrite($f, isset($_POST['organise']) ? $_POST['organise']."\n" : "\n");
fwrite($f, isset($_POST['fiable']) ? $_POST['fiable']."\n" : "\n");
fwrite($f, isset($_POST['patient']) ? $_POST['patient']."\n" : "\n");
fwrite($f, isset($_POST['responsable']) ? $_POST['responsable']."\n" : "\n");
fwrite($f, isset($_POST['sociable']) ? $_POST['sociable']."\n" : "\n");
fwrite($f, isset($_POST['optimiste']) ? $_POST['optimiste']."\n" : "\n");
//La place pour les points du référent
fwrite($f,"\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
$indiceexp='0';

}
else{
    rewind($f);
    $indiceexp=0;
/////////
	
	while(!feof($f)){
		
		$txt=stream_get_line($f,0,"\n");
		if(($txt!=0)&&($txt!='')&&($txt!='\n')){
			$indiceexp=$txt;
			for($k=0;$k<33;$k++){
				$txt=stream_get_line($f,0,"\n");
			}
		}
		else{
			for($k=0;$k<33;$k++){
				$txt=stream_get_line($f,0,"\n");
			}
		}
		
	}
	$indiceexp++;
///////
    
	$txt=$indiceexp."\n";
    fwrite($f,$txt);
	$txt = "0\n"; 
    fwrite($f, $txt);// 0=no verification, 1=referent verification, 2=consultant verification
fwrite($f, $_POST['nom']."\n");
fwrite($f, $_POST['prenom']."\n");
fwrite($f, $_POST['dob']."\n");
fwrite($f, $_POST['mail']."\n");
fwrite($f, $_POST['social']."\n");
fwrite($f, $_POST['engagement']."\n");
fwrite($f, $_POST['duree']."\n");
fwrite($f, isset($_POST['autonome']) ? $_POST['autonome']."\n" : "\n");
fwrite($f, isset($_POST['passion']) ? $_POST['passion']."\n" : "\n");
fwrite($f, isset($_POST['reflechi']) ? $_POST['reflechi']."\n" : "\n");
fwrite($f, isset($_POST['ecoute']) ? $_POST['ecoute']."\n" : "\n");
fwrite($f, isset($_POST['organise']) ? $_POST['organise']."\n" : "\n");
fwrite($f, isset($_POST['fiable']) ? $_POST['fiable']."\n" : "\n");
fwrite($f, isset($_POST['patient']) ? $_POST['patient']."\n" : "\n");
fwrite($f, isset($_POST['responsable']) ? $_POST['responsable']."\n" : "\n");
fwrite($f, isset($_POST['sociable']) ? $_POST['sociable']."\n" : "\n");
fwrite($f, isset($_POST['optimiste']) ? $_POST['optimiste']."\n" : "\n");
//La place pour les points du référent
fwrite($f,"\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");
$indiceexp=strval($indiceexp);
}
fclose($f);



//On envoi le message au référent
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){

		$email= new PHPMailer;
	//Server settings										
		$email->isSMTP();                                            //Send using SMTP
		$email->Host       = 'smtp-mail.outlook.com';                //Set the SMTP server to send through
		$email->SMTPAuth   = true;                                   //Enable SMTP authentication
		$email->Username   = 'ganvi2dormir@outlook.fr';              //SMTP username
		$email->Password   = 'ZzZzZzZz0000';                         //SMTP password
		$email->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
		$email->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`                                          // Send using SMTP
	
		//Recipients
		
		$email->setFrom('ganvi2dormir@outlook.fr');
		$email->addAddress($_POST['mail']);

		//Content
		$email->isHTML(true);
		
		$email->Subject = "Devenez référent!";
		$email->Body="Bonjour,\nLe jeune".' '.$_POST['prenom'] .' '.$_POST['nom'].' '." souhaite que vous vérifiez son expérience. Merci de le confirmer via cet URL :\n"."http://localhost/test/Projet-Lucas-Bedue-Matthias-Galisson-Audrey-Truong-main/mix/refpage.php?q1="."$mail"."&q2="."$indiceexp";
	
		$email->send();
		
	}
	

header("Location: Experiencevalide.php");
exit();
?>