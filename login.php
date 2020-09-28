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
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo($username.htmlentities()); ?></title>
  </head>

  <body>
       
    <h1>Welcome Back <?php echo($username.htmlentities()); ?></h1>
    <?php
          // Display all files
          $files = array_diff(scandir($username), array('.', '..'));
          
          for ($i = 0; $i < count($files); $i++)  {
               $file = $files[$i];
               $dir = "$username.htmlentities()/$files[$i].htmlentities()";
     ?>         
                    Filename: <?php $file.htmlentities() ?>
                    <form action="<?php $dir.htmlentities() ?>" method="post">
                         <input type="submit" value="See file">
                    </form>
                    <form action="login.php" method="post">
                         <input type="submit" value="Delete">
                    </form>"
     <?php          
           }
    ?>
    <form enctype="multipart/form-data" action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method="POST">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
      <label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
    </p>
    <input type="hidden" name="username" value = <?php echo($username); ?>>
    <p>
      <input type="submit" value="Upload File" />
    </p>
    </form>
    <?php
    if(isset($_POST['uploadedfile'])){
        printf("<p><strong>%s</strong></p>\n",
          htmlentities($_POST['uploadedfile'])
        );
        echo($_POST['uploadedfile']);
    }
    ?>
  </body>
</html>




<?php
 }
 else{
     header("Location: userNotFound.html");
 }

?>
