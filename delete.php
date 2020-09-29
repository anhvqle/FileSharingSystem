<?php
session_start();
$username = $_SESSION['username'];
$username = trim($username);
 if(isset($_POST['delete'])){
     $filepath = trim($_POST["delete"]);
     unlink($filepath);
 }
 echo(trim($_POST["delete"]));
 //header("Location: display.php");
?>
