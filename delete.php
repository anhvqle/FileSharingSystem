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
header("Location: display.php");
?>
