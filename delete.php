<?php

 if(isset($_POST['delete'])){
     $deleteFile = trim($_POST["delete"]);
     $filepath = "$username/$deleteFile";
     unlink($filepath);
 }

?>