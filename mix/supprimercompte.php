<?php
session_start();
$mail = $_POST['textcachsuppr'];
$file = fopen("infopers.txt", "r");
$indice=0;
$entirefile=file("infopers.txt");
$bool=0;

//We suppress the account
while((!feof($file))&&($bool==0)) {                                      
    $line = fgets($file);                                       //select a line then split it into several parts
    $values = explode(";", $line);
    $mail_file = isset($values[3]) ? trim($values[3]) : null;
    if ($mail_file == $mail){
        
        unset($entirefile["$indice"]);

        $bool=1;
    }
    else{
        $indice++;
    }


}
fclose($file);
$file = fopen("infopers.txt", "w");


rewind($file);
foreach($entirefile as $ligne){
    fwrite($file,$ligne);
}
fclose($file);

//We suppress his file
if(is_readable('./../InformationsJeunes/'.$mail)){
    unlink('./../InformationsJeunes/'.$mail);
}


header("Location: Adminpage.php?fichier=".$mail);
    exit();
?>