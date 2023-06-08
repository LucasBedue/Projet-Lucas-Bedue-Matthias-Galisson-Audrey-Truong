<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();

//On regarde le premier nombre et on l'incrémente. C'est le nombre d'expèrience.
$mail = $_SESSION['mail'];
$indice=$_POST['indice'];
$index=0;

if(!is_readable('./../InformationsJeunes/'.$mail)){
    header("Location: profiljeune.php");
    exit();
}

$filetext=file('./../InformationsJeunes/'.$mail);
$f = fopen('./../InformationsJeunes/'.$mail,'r+');
$txt=stream_get_line($f,0,"\n");

if(feof($f)){
    fclose($f);
    header("Location: profiljeune.php");
    exit();
}
rewind($f);

for($i=1;$i<$numexp;$i++){
    for($j=0;$j<34;$j++){
        $index++;
    }
}






header("Location: profiljeune.php");
exit();
?>