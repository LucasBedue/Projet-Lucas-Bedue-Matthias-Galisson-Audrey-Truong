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
        $mail_file = isset($values[2]) ? trim($values[2]) : null;
        $mdp_file = isset($values[3]) ? trim($values[3]) : null;
        $role_file = isset($values[4]) ? trim($values[4]) : null;

        if ($mail_file == $mail && $mdp_file == $mdp) {
            fclose($file);
            if ($role_file == "Jeune") {
                header("Location: menu.php");
            } elseif ($role_file == "Referent") {
                header("Location: menu.php");
            } elseif ($role_file == "Consultant") {
                header("Location: menu.php");
            } else {
                header("Location: menu.php");
            }
            exit(); 
        } 
    }

    fclose($file);
    header("Location: connexion.php");
    exit();

     ?>

</body>
</html>

