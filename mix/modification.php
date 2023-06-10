<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$mail = $_SESSION['mail'];
$numexp=$_POST['numexp'];
$index=0;

$f = fopen('./../InformationsJeunes/'.$mail,'r+');

if((!$f)||($_POST['numexp']<=0)){
    header("Location: profiljeune.php");//Show that there is a problem
    exit();
}
$filetext=file('./../InformationsJeunes/'.$mail);
$txt=stream_get_line($f,0,"\n");

if(feof($f)){
    fclose($f);
    header("Location: profiljeune.php");
    exit();
}
rewind($f);


$bool=0;
while((!feof($f))&&($bool==0)){//Find the good experience to change
    
    $txt=stream_get_line($f,0,"\n");
    if($txt!=$numexp){
        
        
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

$index++;
$filetext[$index]='0'."\n";//we change the state to the unchecked one
$index++;

$filetext[$index]=$_POST['nom']."\n";
$filetext[$index+1]=$_POST['prenom']."\n";
$filetext[$index+2]=$_POST['dob']."\n";
$filetext[$index+3]=$_POST['mail']."\n";
$filetext[$index+4]=$_POST['social']."\n";

$filetext[$index+5]=$_POST['engagement']."\n";
$filetext[$index+6]=$_POST['duree']."\n";

$filetext[$index+7]=isset($_POST['autonome']) ? $_POST['autonome']."\n" : "\n";
$filetext[$index+8]=isset($_POST['passion']) ? $_POST['passion']."\n" : "\n";
$filetext[$index+9]=isset($_POST['reflechi']) ? $_POST['reflechi']."\n" : "\n";
$filetext[$index+10]=isset($_POST['ecoute']) ? $_POST['ecoute']."\n" : "\n";
$filetext[$index+11]=isset($_POST['organise']) ? $_POST['organise']."\n" : "\n";
$filetext[$index+12]=isset($_POST['fiable']) ? $_POST['fiable']."\n" : "\n";
$filetext[$index+13]=isset($_POST['patient']) ? $_POST['patient']."\n" : "\n";
$filetext[$index+14]=isset($_POST['responsable']) ? $_POST['responsable']."\n" : "\n";
$filetext[$index+15]=isset($_POST['sociable']) ? $_POST['sociable']."\n" : "\n";
$filetext[$index+16]=isset($_POST['optimiste']) ? $_POST['optimiste']."\n" : "\n";

for($g=0;$g<15;$g++){//we erase the precedent's ref informations
    $index2=$index+17+$g;
    $filetext[$index2]="\n";
}

rewind($f);
fclose($f);
$f = fopen('./../InformationsJeunes/'.$mail,'w+');
rewind($f);

foreach($filetext as $ligne){
    fwrite($f,$ligne);
}

fclose($f);


$nomdumail=$_POST['nom'];
$prenomdumail=$_POST['prenom'];

//We send the mail to the ref
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
		$email->Body="Bonjour,\nLe jeune".' '.$_POST['prenom'] .' '.$_POST['nom'].' '." souhaite que vous vérifiez son expérience. Merci de le confirmer via cet URL :\n"."http://localhost/test/Projet-Lucas-Bedue-Matthias-Galisson-Audrey-Truong-main/mix/refpage.php?q1="."$mail"."&q2="."$numexp";
	
		$email->send();
		
	}
	


    header("Location: Experiencevalide.php");
exit();
?>