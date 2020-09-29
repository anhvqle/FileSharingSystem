<?php
session_start();
$username = $_POST['username'];

$username = trim($username);
//echo("$username");




$file = fopen("users.txt", "r");
$userDetected = false;

while(!feof($file) ){
    if($username == trim(fgets($file))){
          $userDetected = true;
          $_SESSION['username'] = $username;
     //     header("Location: $username/form.php");
     //     exit;
    }
 }
 fclose($file);


 


 if($userDetected){
     header("Location: display.php");
     exit;
 }
 else{
     header("Location: userNotFound.html");
 }

?>
