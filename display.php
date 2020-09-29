<?php
session_start();
$username = $_SESSION['username'];
$username = trim($username);
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
     
    <meta charset="utf-8">
    <title><?php echo(htmlentities($username)); ?></title>
    
  </head>

  <body>
 
    <h1>Welcome Back, <?php echo(htmlentities($username)); ?></h1>
    <?php
          // Display all files
          $files = array_diff(scandir($username), array('.', '..'));
          // print_r($files);
          foreach($files as $file){
               //echo $file;
            //    $file = str_replace(" ", "\ ", $file);
               $dir = sprintf("%s/%s", $username, rawurlencode($file));
               // echo(htmlentities($dir));
               ?>         
                    Filename: <a href=<?php echo(htmlentities($dir)) ?>><?php echo(htmlentities($file)) ?></a>

                    <form action="delete.php" method="post">
                         <input type="submit" value="Delete">
                         <input type="hidden" name="delete" value = <?php echo(htmlentities($file)); ?>>
                    </form>
     <?php     
          }
    ?>
    <p>Upload your file </p>
    <form enctype="multipart/form-data" action = "update.php" method="post">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
      <label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
    </p>
    <p>
      <input type="submit" name="submit" value="Upload File" />
    </p>
    </form>

    <p>Send files to another users </p>
    <form enctype="multipart/form-data" action = "sendFile.php" method="post">
    <p>
      <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
      <label>Enter the username you want to send file to: <input type="text" name="sendToName"></label>
    </p>
    <p>
        <label for="uploadfile_input">Choose a file to send:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
        <input type="submit" name="submit" value="Send File" />
    </p>
    </form>
    
    <form action="index.html">
        <input type="submit" value="Logout">
    </form>
  </body>
</html>



