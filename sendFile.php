<?php
    $userGetFile = $_POST["userGetFile"];

    $file = fopen("users.txt", "r");
    $userDetected = false;

    while(!feof($file) ){
        if($userGetFile == trim(fgets($file))){
            $userDetected = true;
        }
    }
    fclose($file);


    


    if($userDetected){
        if(isset($_POST['submit'])){
            $filename = basename($_FILES['uploadedfile']['name']);
            $filepath = "$userGetFile/$filename";
    
         if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $filepath) ){
              header("Location: display.php");
              exit;
         }else{
              echo("<h1>upload_failure</h1>");
              
              exit;
         }
    
        }
        else{
            echo("<h1>POST request not found</h1>");
        }
        exit;
    }
    
    else{
        echo("<h1>User not detected</h1>");
    }
?>