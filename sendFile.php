<?php
    $userGetFile = $_POST("userGetFile");

    $file = fopen("users.txt", "r");
    $userDetected = false;

    while(!feof($file) ){
        if($userGetFile == trim(fgets($file))){
            $userDetected = true;
        }
    }
    fclose($file);


    


    if($userDetected){
        echo("User detected");
        exit;
    }
    else{
        echo("User not detected");
    }
?>