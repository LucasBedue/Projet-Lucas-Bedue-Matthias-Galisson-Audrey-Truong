<!DOCTYPE html>
<html>
<head>
	<title>verifconnexion</title>
</head>
<body>
    
	 <?php
     
     $mail = $_POST['mail'];
     $mdp = $_POST['mdp'];

     $file = fopen("infopers.txt", "r");

     while(!feof($file)) {
        $line = fgets($file);
        $values = explode(";", $line);
        $mail_file = isset($values[3]) ? trim($values[3]) : null;
        $mdp_file = isset($values[4]) ? trim($values[4]) : null;
        $role_file = isset($values[5]) ? trim($values[5]) : null;

        if ($mail_file == $mail && $mdp_file == $mdp) {
        
            fclose($file);
            
            session_start();
            $role = $role_file;
            $_SESSION['role'] = $role;
            $_SESSION['mailsession'] = $mail;
            header("Location: menu.php");
            exit(); 
        } 
    }

    fclose($file);
    header("Location: login.php");
    exit();

     ?>

</body>
</html>

