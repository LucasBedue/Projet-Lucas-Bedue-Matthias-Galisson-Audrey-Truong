<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
//We check if the request came from a Young or an admin
if(isset($_POST['mailjeune'])){
    $mail = $_POST['mailjeune'];
    $admin=1;
}
else{
    $mail = $_SESSION['mail'];
    $admin=0;
}

$indice=$_POST['indice2'];

$index=0;

if(!is_readable('./../InformationsJeunes/'.$mail)){
    if($admin==0){//if it is an young
        header("Location: profiljeune.php");
        exit();
    }
    else{//If it is a admin
        header("Location: Adminpage.php?fichier=".$mail);
        exit();
    }
   
}

$filetext=file('./../InformationsJeunes/'.$mail);
$f = fopen('./../InformationsJeunes/'.$mail,'r+');
$txt=stream_get_line($f,0,"\n");

if(feof($f)){//If there is no experiences at all
    fclose($f);
    if($admin==0){
        header("Location: profiljeune.php");
        exit();
    }
    else{
        header("Location: Adminpage.php?fichier=".$mail);
        exit();
    }
}
rewind($f);


$bool=0;
while((!feof($f))&&($bool==0)){//We get at the right field
    
    $txt=stream_get_line($f,0,"\n");
    if($txt!=$indice){
        
        
        for($j=0;$j<34;$j++){
            $index++;
        }
        for($k=0;$k<33;$k++){
            $txt=stream_get_line($f,0,"\n");
        }
        
    }
    else{//if found
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
foreach($filetext as $ligne){//to replace the content of the file
    fwrite($f,$ligne);
}
fclose($f);
if($admin==0){//if it was an young
    header("Location: profiljeune.php");
    exit();
}
else{//if it was an admin
    header("Location: Adminpage.php?fichier=".$mail);
    exit();
}

?>