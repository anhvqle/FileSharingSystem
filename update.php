<?php
    session_start();
    $username = $_SESSION['username'];
    $username = trim($username);

    if(isset($_POST['submit'])){
        $filename = basename($_FILES['uploadedfile']['name']);
        $filepath = "$username/$filename";

     if( move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $filepath) ){
          header("Location: display.php");
          exit;
     }else{
          echo("upload_failure");
          
          exit;
     }

    }
?>

