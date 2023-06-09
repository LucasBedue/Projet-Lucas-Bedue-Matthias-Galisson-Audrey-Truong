<?php
header('Content-Type: text/html; charset=utf-8');
session_start();

$mail=$_POST['mail'];
$mailjeune=$_SESSION['mail'];

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
		$email->addAddress($mail);

		//Content
		$email->isHTML(true);
		
		$email->Subject = "Un jeune vous envoie son CV!";
		$email->Body="Bonjour,\nUn jeune veut partager son CV avec vous. Cliquez sur cet URL :\n http://localhost/test/Projet-Lucas-Bedue-Matthias-Galisson-Audrey-Truong-main/mix/consultantpage.php?q1="."$mailjeune";
	
		$email->send();
		
        header("Location: envoiCVreussi.php");
        exit();
	}
	else{
        header("Location: envoiCVraté.php");
        exit();
    }







?>