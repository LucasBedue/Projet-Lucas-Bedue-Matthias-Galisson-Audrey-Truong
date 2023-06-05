<?php
//This code replace empty lines in the information files by the referent's one
header('Content-Type: text/html; charset=utf-8');
$mail=$_POST['mailjeune'];

if(!file_exists('./../InformationsJeunes/'.$mail)){//check if the file exist
    header("Location: Experiencefromrefinvalide.php");//Show that there is a problem
}
$f = fopen('./../InformationsJeunes/'.$mail,'r+');
$txt=stream_get_line($f,0,"\n");

if(feof($f)){
    header("Location: Experiencefromrefinvalide.php");
}
rewind($f);

for($i=1;$i<$_POST['numexp'];$i++){
    for($j=0;$j<34;$j++){
        $txt=stream_get_line($f,0,"\n");
    }
}

if(feof($f)){
    header("Location: Experiencefromrefinvalide.php");
}

//replace the state of the experience
$txt=stream_get_line($f,0,"\n");
file_put_contents($f,'1'."\n");

for($k=0;$k<17;$k++){//go to the right field
    $txt=stream_get_line($f,0,"\n");
}

file_put_contents($f,$_POST['nom']."\n");
file_put_contents($f,$_POST['prenom']."\n");
file_put_contents($f,$_POST['dob']."\n");
file_put_contents($f,$_POST['social']."\n");
file_put_contents($f,$_POST['presentation']."\n");
file_put_contents($f,$_POST['duree']."\n");
file_put_contents($f,$_POST['confiance']."\n");
file_put_contents($f,$_POST['bienveillance']."\n");
file_put_contents($f,$_POST['respect']."\n");
file_put_contents($f,$_POST['honnetete']."\n");
file_put_contents($f,$_POST['tolerance']."\n");
file_put_contents($f,$_POST['juste']."\n");
file_put_contents($f,$_POST['impartial']."\n");
file_put_contents($f,$_POST['travail']."\n");


fclose($f);


header("Location: Experiencefromrefvalide.php");
exit();
?>