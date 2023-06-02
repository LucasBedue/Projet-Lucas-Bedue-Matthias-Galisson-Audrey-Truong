<?php

$nom = $_POST['nom'];
$prenom = $_POST['prenom'];
$mail = $_POST['mail'];
$date_naissance = $_POST['date_naissance'];
$mdp = $_POST['mdp'];
$role = $_POST['role'];

if (strpos($mail, '@') === false) {
    echo "<p>L'adresse e-mail n'est pas valide.</p>";
    exit;
}
if (strpos($mdp, ';') !== false) {
    
    echo "<p>Le mot de passe ne peut pas contenir le caractère ';'.</p>";
    exit;
}

$fichier = fopen('infopers.txt', 'r+');


while(!feof($fichier)) {
    $line = fgets($fichier);
    $values = explode(";", $line);
    $mail_fichier = isset($values[3]) ? trim($values[3]) : null;

    if ($mail_fichier==$mail) {
        fclose($fichier);
        echo "<p>Cet adresse mail est deja utilisé pour un compte existant.</p>";  
        exit;
    }
}

$fichier = fopen('infopers.txt', 'a');

fwrite($fichier, $nom . ';' . $prenom . ';' . $date_naissance . ';' . $mail . ';' . $mdp . ';' . $role . ";\n");
fclose($fichier);

$f = fopen('./../InformationsJeunes/'.$mail,'a+');

fclose($f);
header('Location: login.php');

?>


