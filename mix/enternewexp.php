<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

//On regarde le premier nombre et on l'incrémente. C'est le nombre d'expèrience.
$mail = $_SESSION['mail'];
$filename='./../InformationsJeunes/'.$mail;
$f = fopen('./../InformationsJeunes/'.$mail,'r+');
rewind($f);

$nb = fgets($f);
$nb = intval("$nb",10);
$nb++;

fclose($f);

if(!$file = file($filename)) {
    return false;
}
$file[0] = $nb."\n";

file_put_contents($filename, implode('', $file));

$f = fopen('./../InformationsJeunes/'.$mail,'r+');
$nb = fgetc($f);
$nb = "\n";
fwrite($f,$nb);
fclose($f);



//On rajoute notre expèrience à compléter.
$f = fopen('./../InformationsJeunes/'.$mail, 'a+');
$txt = "0\n"; // 0=no verification, 1=referent verification, 2=consultant verification
fwrite($f, $txt);
fwrite($f, $_POST['nom']."\n");
fwrite($f, $_POST['prenom']."\n");
fwrite($f, $_POST['dob']."\n");
fwrite($f, $_POST['mail']."\n");
fwrite($f, $_POST['social']."\n");
fwrite($f, $_POST['engagement']."\n");
fwrite($f, $_POST['duree']."\n");
fwrite($f, isset($_POST['autonome']) ? $_POST['autonome'] : ""."\n");
fwrite($f, isset($_POST['passion']) ? $_POST['passion'] : ""."\n");
fwrite($f, isset($_POST['reflechi']) ? $_POST['reflechi'] : ""."\n");
fwrite($f, isset($_POST['ecoute']) ? $_POST['ecoute'] : ""."\n");
fwrite($f, isset($_POST['organise']) ? $_POST['organise'] : ""."\n");
fwrite($f, isset($_POST['fiable']) ? $_POST['fiable'] : ""."\n");
fwrite($f, isset($_POST['patient']) ? $_POST['patient'] : ""."\n");
fwrite($f, isset($_POST['responsable']) ? $_POST['responsable'] : ""."\n");
fwrite($f, isset($_POST['sociable']) ? $_POST['sociable'] : ""."\n");
fwrite($f, isset($_POST['optimiste']) ? $_POST['optimiste'] : ""."\n");
//La place pour les points du référent
fwrite($f,"\n\n\n\n\n\n\n\n\n\n\n\n\n\n\n");

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
		$email->Body="Bonjour&#44;\nLe jeune ".$_POST['prenom'] .$_POST['nom']." souhaite que l&#39;on vérifie son expérience. Merci de le confirmer via l&#39;usage de cet URL :\n";
	
		$email->send();
		
	}
	

header("Location: Experiencevalide.php");

?>