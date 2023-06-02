<?php 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

if(isset($_POST["send"])){

		$mail= new PHPMailer;
	//Server settings										
		$mail->isSMTP();                                            //Send using SMTP
		$mail->Host       = 'smtp-mail.outlook.com';                //Set the SMTP server to send through
		$mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		$mail->Username   = 'ganvi2dormir@outlook.fr';              //SMTP username
		$mail->Password   = 'ZzZzZzZz0000';                         //SMTP password
		$mail->SMTPSecure = 'tls';                                  //Enable implicit TLS encryption
		$mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`                                          // Send using SMTP
	
		//Recipients
		
		$mail->setFrom('ganvi2dormir@outlook.fr');
		$mail->addAddress($_POST["email"]);

		//Content
		$mail->isHTML(true);
		$mail->Subject=$_POST["subject"];
		$mail->Body=$_POST["message"];
	
		$mail->send();
		
	echo "
	<script>
		alert('Sent Successfully');
		document.location.href='index.php';
	</script>
		";
	
	
	}
	
	


?>
