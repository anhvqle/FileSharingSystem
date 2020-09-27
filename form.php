<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      $username = $_POST['username'];
      echo("$username");

      $file = fopen("users.txt", "r");

      while(!feof($file) ){
          if($username == fgets($file)){
               echo("Username Found");
          }
       }

      fclose($file);

    ?>
  </body>
</html>
