<?php
$username = $_POST['username'];
$username = trim($username);
 if(isset($_POST['delete'])){
     $deleteFile = trim($_POST["delete"]);
     $filepath = "$username/$deleteFile";
     unlink($filepath);
 }

?>