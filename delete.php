<?php
session_start();
$username = $_SESSION['username'];
$username = trim($username);
 if(isset($_POST['delete'])){
     $deleteFile = trim($_POST["delete"]);
     $deleted = str_replace(' ', ' \\', $deleteFile);
     $filepath = "$username/$deleted";
     unlink($filepath);
 }
 echo("filepath: $filepath     ");
 echo("deleted: $deleted     ");
 echo("username: $username     ");
 echo("deleteFile: $deleteFile     ");
//header("Location: display.php");
?>
