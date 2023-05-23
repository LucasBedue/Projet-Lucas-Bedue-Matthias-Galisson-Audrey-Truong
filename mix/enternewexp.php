<?php
session_start();

//On regarde le premier nombre et on l'incrémente. C'est le nombre d'expèrience.
$mail = $_SESSION['mail'];
$filename='./../InformationsJeunes/'.$mail;
$f = fopen('./../InformationsJeunes/'.$mail,'r+');
rewind($f);

$nb = fgetc($f);
$nb = intval("$nb",10);
$nb++;

fclose($f);

if(!$file = file($filename)) {
    return false;
}
$file[0] = $nb;

file_put_contents($filename, implode('', $file));

$f = fopen('./../InformationsJeunes/'.$mail,'r+');
$nb = fgetc($f);
$nb = "\n";
fwrite($f,$nb);
fclose($f);



//On rajoute notre expèrience à compléter.
$f = fopen('./../InformationsJeunes/'.$mail,'a+');
$txt = "0\n"; //0=no verification, 1=referent verification, 2=consultant verification
fwrite($f,$txt);
$txt = $_POST['nom']."\n";
fwrite($f,$txt);
$txt = $_POST['prenom']."\n";
fwrite($f,$txt);
$txt = $_POST['dob']."\n";
fwrite($f,$txt);
$txt = $_POST['mail']."\n";
fwrite($f,$txt);
$txt = $_POST['social']."\n";
fwrite($f,$txt);
$txt = $_POST['engagement']."\n";
fwrite($f,$txt);
$txt = $_POST['duree']."\n";
fwrite($f,$txt);
$txt = $_POST['autonome']."\n";
fwrite($f,$txt);
$txt = $_POST['passion']."\n";
fwrite($f,$txt);
$txt = $_POST['reflechi']."\n";
fwrite($f,$txt);
$txt = $_POST['ecoute']."\n";
fwrite($f,$txt);
$txt = $_POST['organise']."\n";
fwrite($f,$txt);
$txt = $_POST['fiable']."\n";
fwrite($f,$txt);
$txt = $_POST['patient']."\n";
fwrite($f,$txt);
$txt = $_POST['responsable']."\n";
fwrite($f,$txt);
$txt = $_POST['sociable']."\n";
fwrite($f,$txt);
$txt = $_POST['optimiste']."\n";
fwrite($f,$txt);
//La place pour les points du référent
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");
fwrite($f,"\n");

fclose($f);

header("Location: Experiencevalide.php");

?>