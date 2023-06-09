<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();


$mail = $_SESSION['mail'];
$indice=$_POST['indice2'];

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


$bool=0;
while((!feof($f))&&($bool==0)){
    
    $txt=stream_get_line($f,0,"\n");
    if($txt!=$indice){
        
        
        for($j=0;$j<34;$j++){
            $index++;
        }
        for($k=0;$k<33;$k++){
            $txt=stream_get_line($f,0,"\n");
        }
        
    }
    else{
        $bool=1;
        
        
        for($q=0;$q<34;$q++){
            $numlign=$index+$q;
            unset($filetext["$numlign"]);
        }
        
    }
}
fclose($f);
$f = fopen('./../InformationsJeunes/'.$mail,'w+');

rewind($f);
foreach($filetext as $ligne){
    fwrite($f,$ligne);
}
fclose($f);
header("Location: profiljeune.php");
exit();

?>