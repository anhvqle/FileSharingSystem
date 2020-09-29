<?php
session_start();
$username = $_SESSION['username'];
$username = trim($username);
 if(isset($_POST['delete'])){
     $deleteFile = trim($_POST["delete"]);
     $filepath = "$username/$deleteFile";
     unlink($filepath);
 }
 header("Location: display.php");
?>
