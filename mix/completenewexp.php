<?php
//This code replace empty lines in the information files by the referent's one
header('Content-Type: text/html; charset=utf-8');
$mail=$_POST['mailjeune'];
$numexp=$_POST['numexp'];
$index=0;

$f = fopen('./../InformationsJeunes/'.$mail,'r+');

if((!$f)||($_POST['numexp']<=0)){
    header("Location: Experiencefromrefinvalide.php");//Show that there is a problem
    exit();
}
$filetext=file('./../InformationsJeunes/'.$mail);
$txt=stream_get_line($f,0,"\n");

if(feof($f)){
    fclose($f);
    header("Location: Experiencefromrefinvalide.php");
    exit();
}
rewind($f);

for($i=1;$i<$numexp;$i++){
    for($j=0;$j<34;$j++){
        $index++;
    }
}

if(count($filetext)<=($index+1)){
    fclose($f);
    header("Location: Experiencefromrefinvalide.php");
    exit();
}

$index++;

if($filetext[$index]!=0){
    fclose($f);
    header("Location: Experiencefromrefinvalide.php");
    exit();
}

$filetext[$index]='1'."\n";


for($k=0;$k<18;$k++){//go to the right field
    $index++;
}
$filetext[$index]=$_POST['nom']."\n";
$filetext[$index+1]=$_POST['prenom']."\n";
$filetext[$index+2]=$_POST['dob']."\n";
$filetext[$index+3]=$_POST['social']."\n";
$filetext[$index+4]=$_POST['presentation']."\n";
$filetext[$index+5]=$_POST['duree']."\n";
$filetext[$index+6]=$_POST['comms']."\n";
$filetext[$index+7]=$_POST['confiance']."\n";
$filetext[$index+8]=$_POST['bienveillance']."\n";
$filetext[$index+9]=$_POST['respect']."\n";
$filetext[$index+10]=$_POST['honnetete']."\n";
$filetext[$index+11]=$_POST['tolerance']."\n";
$filetext[$index+12]=$_POST['juste']."\n";
$filetext[$index+13]=$_POST['impartial']."\n";
$filetext[$index+14]=$_POST['travail']."\n";


foreach($filetext as $ligne){
    fwrite($f,$ligne);
}



fclose($f);


header("Location: Experiencefromrefvalide.php");
exit();
?>