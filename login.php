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

 if(isset($_POST['delete'])){
     $deleteFile = trim($_POST["delete"]);
     $filepath = "$username/$deleteFile";
     unlink($filepath);
 }
 


 if($userDetected){
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?php echo(htmlentities($username)); ?></title>
  </head>

  <body>
       
    <h1>Welcome Back <?php echo(htmlentities($username)); ?></h1>
    <?php
          // Display all files
          $files = array_diff(scandir($username), array('.', '..'));
          // print_r($files);
          foreach($files as $file){
               //echo $file;
               $dir = "$username/$file";
               // echo(htmlentities($dir));
               ?>         
                    Filename: <?php echo(htmlentities($file)) ?>
                    <form action="<?php echo(htmlentities($dir)) ?>" method="post">
                         <input type="submit" value="See file">
                         <input type="hidden" name="username" value = <?php echo($username); ?>>
                    </form>
                    <form action="login.php" method="post">
                         <input type="submit" value="Delete">
                         <input type="hidden" name="username" value = <?php echo($username); ?>>
                         <input type="hidden" name="delete" value = <?php echo(htmlentities($file)); ?>>
                    </form>
     <?php     
          }
    ?>
    <form enctype="multipart/form-data" action = "login.php" method="post">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
      <label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
    </p>
    <input type="hidden" name="username" value = <?php echo($username); ?>>
    <p>
      <input type="submit" name="submit" value="Upload File" />
    </p>
    </form>
    <?php
//     echo($_POST['uploadedfile']);
    if(isset($_POST['submit'])){
        echo($_FILES['uploadedfile']['name']);
        echo($_FILES['uploadedfile']['type']);
        echo($_FILES['uploadedfile']['size']);
        echo($_FILES['uploadedfile']['tmp_name']);

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
