<?php
$username = $_POST['username'];
$username = trim($username);
//echo("$username");

$file = fopen("users.txt", "r");
$userDetected = false;

while(!feof($file) ){
    if($username == trim(fgets($file))){
          $userDetected = true;
     //     header("Location: $username/form.php");
     //     exit;
    }
 }
 fclose($file);


 


 if($userDetected){
     ?>
     <body>
          <form action="display.php" method="post">
          <p>Login success: Click to direct to your file system</p>
          <input type="hidden" name="username" value = <?php echo($username); ?>>
          <input type="submit" value="Display">
     </form>  
     </body>
     
     <?php
 }
 else{
     header("Location: userNotFound.html");
 }

?>
