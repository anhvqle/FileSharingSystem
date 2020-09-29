<?php
$username = $_POST['username'];
$username = trim($username);
//echo("$username");

session_start();


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
     ?>
     <!DOCTYPE html>
     <html lang="en">
     <head>
         <meta charset="UTF-8">
         <meta name="viewport" content="width=device-width, initial-scale=1.0">
         <title>Document</title>
     </head>
     <body>
          <form action="display.php" method="post">
          <p>Login success: Click to direct to your file system</p>
          <input type="hidden" name="username" value = <?php echo($username); ?>>
          <input type="submit" value="Display" id="loginBtn">
     </form>  
     <script>
        document.getGetElementById("loginBtn").click();
    </script>
     </body>
     </html>
     
     <?php
 }
 else{
     header("Location: userNotFound.html");
 }

?>
